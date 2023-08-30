<?php

namespace App\Http\Controllers;

use App\Helpers\NotifHelper;
use App\Models\Mustahiq;
use App\Http\Requests\StoreMustahiqRequest;
use App\Http\Requests\UpdateMustahiqRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MustahiqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mustahiq = Mustahiq::all();
        return view('amil.mustahiq.index', compact('mustahiq'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('amil.mustahiq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMustahiqRequest $request)
    {
        DB::beginTransaction();
        $outputPath = null;
        if ($request->hasFile('file_mustahiq')) {
            $outputPath = "data/mustahiq/" . $request->file('file_mustahiq')->hashName();
            $isUploaded = Storage::disk('public')->put("data/mustahiq/", $request->file('file_mustahiq'));

            if (!$isUploaded) {
                return redirect()->back()->with([
                    'message' => 'Image Gagal Di Upload',
                    'icon' => 'error',
                ]);
            }
        }

        try {

            $mustahiq = new Mustahiq;
            $mustahiq->file_url = $outputPath;
            $mustahiq->save();

            DB::commit();
            $alert = NotifHelper::createAlert('success', 'data sudah di simpan');
            return redirect()->route('mustahiq.index')->with(['alert' => $alert]);
        } catch (\Throwable $th) {
            DB::rollBack();
            $alert = NotifHelper::createAlert('danger', $th->getMessage());

            return redirect()->back()->withInput()->with(['alert' => $alert]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Mustahiq $mustahiq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mustahiq $mustahiq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMustahiqRequest $request, Mustahiq $mustahiq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mustahiq $mustahiq)
    {
        //
    }
}
