<?php

namespace App\Http\Controllers;

use App\Models\PaketModel;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakett = PaketModel::all();
        return view('paket.paket', ['paket' => $pakett]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paket.input-paket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaPaket' => ['required', 'string'],
            'harga' => ['required', 'integer'],
            'deskripsi' => ['required', 'string'],
            'deskripsi1' => [],
            'deskripsi2' => [],
        ]);

        // $input = [
        //     // 'kodeUnik' => $this->generateUniqueCode(),
        //     'namaPaket' => $request->input('namaPaket'),
        //     'harga' => $request->input('harga'),
        //     'deskripsi' => $request->input('deskripsi'),
        //     'deskripsi1' => $request,
        //     'deskripsi2' => $request,
        // ];

        // PaketModel::create($input);
        PaketModel::create($request->all());
        // Alert::success('Success', 'Berhasil menambahkan data Barang!');
        return redirect()->route('pakett.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaketModel  $paketModel
     * @return \Illuminate\Http\Response
     */
    public function show(PaketModel $paketModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketModel  $paketModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PaketModel $paketModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaketModel  $paketModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaketModel $paketModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketModel  $paketModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaketModel $paketModel)
    {
        //
    }
}