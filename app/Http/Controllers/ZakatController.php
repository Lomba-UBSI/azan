<?php

namespace App\Http\Controllers;

use App\Helpers\NotifHelper;
use App\Http\Requests\ZakatToAmilRequest;
use App\Models\GeneralConfig;
use App\Models\PaymentMethod;
use App\Models\Transaction;
use App\Models\TransactionType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ZakatController extends Controller
{
    public function index()
    {
        $emas = GeneralConfig::where('code', 'HARGA_EMAS')->first();
        $nisab1Tahun = ceil((int)$emas->value * 85);
        $nisab1Bulan = ceil((int)$emas->value * 85 / 12);
        return view('enduser.form.zakat', compact('nisab1Tahun', 'nisab1Bulan'));
    }

    public function paymentMethod(FormRequest $request)
    {
        $data = $request->except('_token', 'nominal_zakat');
        $data['nominal_zakat'] = str_replace('.', '', str_replace('Rp. ', '', $request->nominal_zakat));
        $paymentMethods = PaymentMethod::where('name', '!=', 'CASH')->get();
        return view('enduser.form.payment', compact('data', 'paymentMethods'));
    }
    public function confirmPayment(FormRequest $request)
    {
        $transactionType = TransactionType::where('name', 'zakat penghasilan')->first();
        DB::beginTransaction();
        try {

            $transaction = new Transaction;

            $transaction->muzakki = $request->muzakki;
            $transaction->payment_method_id = $request->payment_method;
            $transaction->amount = $request->nominal_zakat;
            $transaction->transaction_type_id = $transactionType->id;
            $transaction->transaction_status = "CASH_ON_BAZNAS";

            $transaction->save();

            DB::commit();
            $alert = NotifHelper::createAlert('success', 'Pembayaran berhasil');
            return redirect()->route('beranda.index')->with(['alert' => $alert]);
        } catch (\Throwable $th) {
            DB::rollBack();
            $alert = NotifHelper::createAlert('danger', $th->getMessage());

            return redirect()->back()->withInput()->with(['alert' => $alert]);
        }
        return view('enduser.form.payment', compact('data', 'paymentMethods'));
    }

    public function inputAmil()
    {
        $model = TransactionType::where(['category' => 'zakat', 'active' => true])->pluck('id', 'name');
        return view('amil.zakat.input', compact('model'));
    }
    public function inputAmilStore(ZakatToAmilRequest $request)
    {
        $data = $request->except('nominal', '_token');
        $data['amount'] = str_replace('.', '', $request->nominal);
        $data['transaction_status'] = "CASH_ON_AMIL";

        $paymentMethod = PaymentMethod::where('name', "CASH")->first();
        $data['payment_method_id'] = $paymentMethod->id;

        DB::beginTransaction();
        try {

            Transaction::create($data);

            DB::commit();
            $alert = NotifHelper::createAlert('success', 'data sudah di simpan');
            return redirect()->route('dashboard.amil')->with(['alert' => $alert]);
        } catch (\Throwable $th) {
            DB::rollBack();
            $alert = NotifHelper::createAlert('danger', $th->getMessage());

            return redirect()->back()->withInput()->with(['alert' => $alert]);
        }
    }
}
