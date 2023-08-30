<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Helpers\NotifHelper;
use App\Http\Requests\FormAmilRequest;
use App\Models\UserIdentity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function pengajuanAmil()
    {
        return view('enduser.form.pengajuan-amil');
    }

    public function storePengajuanAmil(FormAmilRequest $request)
    {

        $data = $request->except('identity', '_token');

        if ($request->hasFile('identity')) {
            $data['identity'] = FileHelper::optimizeAndConvertToWebP($request->file('identity'), 'user-identity');
        }

        DB::beginTransaction();
        try {
            UserIdentity::create($data);

            DB::commit();
            $alert = NotifHelper::createAlert('success', 'pengajuan sudah di kirim harap menunggu konfirmasi');
            return redirect()->route('beranda.index')->with(['alert' => $alert]);
        } catch (\Throwable $th) {
            if (isset($data["thumbnail"])) {
                Storage::disk('public')->delete($data["thumbnail"]);
            }

            DB::rollBack();
            $alert = NotifHelper::createAlert('danger', $th->getMessage());

            return redirect()->back()->withInput()->with(['alert' => $alert]);
        }
    }
}
