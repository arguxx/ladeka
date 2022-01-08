<?php

namespace App\Http\Controllers;

use App\Models\TransaksiModel;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;
use App\Models\MemberModel;
use App\Models\PaketModel;
use GuzzleHttp\Psr7\Uri;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'tipePaket' => ['required', 'string'],
            'merkMobil' => ['required', 'string'],
            'harga' => ['required', 'integer'],
            
        ]);
        $input = [
            'memberId' => $request->input('idmemb'),
            'tipePaket' => $request->input('tipePaket'),
            'merkMobil' => $request->input('merkMobil'),
            'harga' => $request->input('harga'),
        ];
        // dd($input);
        // $request->route('id');
        // $input->save();
        TransaksiModel::create($input);
        // TransaksiModel::create($request->all());
        // Alert::success('Success', 'Berhasil menambahkan data Barang!');
        $idd = $request->input('idmemb');
        $uri = "member/{$idd}";
        // dd($uri);
        return redirect($uri);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransaksiModel  $transaksiModel
     * @return \Illuminate\Http\Response
     */
    public function show(MemberModel $member)
    {
        return view('member.input-transaksi', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransaksiModel  $transaksiModel
     * @return \Illuminate\Http\Response
     */
    public function edit(TransaksiModel $transaksiModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransaksiModel  $transaksiModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransaksiModel $transaksiModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransaksiModel  $transaksiModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransaksiModel $transaksi)
    {
        // $uri = $request->segments();
        // dd($uri);
        // $ind = $uri[1];
        // $indd= "member/{$ind}";
        $transaksi->delete();
        return redirect()->route('member.index');
        }

}