<?php

namespace App\Http\Controllers;

use App\Helpers\NotifHelper;
use App\Http\Requests\ZakatToAmilRequest;
use App\Models\GeneralConfig;
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
        return view('enduser.form.payment', compact('data'));
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

        DB::beginTransaction();
        try {

            Transaction::create($data);

            DB::commit();
            $alert = NotifHelper::createAlert('success', 'pengajuan sudah di kirim harap menunggu konfirmasi');
            return redirect()->route('beranda.index')->with(['alert' => $alert]);
        } catch (\Throwable $th) {
            DB::rollBack();
            $alert = NotifHelper::createAlert('danger', $th->getMessage());

            return redirect()->back()->withInput()->with(['alert' => $alert]);
        }
    }
}
