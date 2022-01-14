<?php

namespace App\Http\Controllers;

use App\Models\TransaksiModel;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;
use App\Models\MemberModel;
use App\Models\PaketModel;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\DB;

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
        // $hargas = PaketModel::where('namaPaket', $this->paket)->first();

        $request->validate([
            'tipePaket' => ['required', 'string'],
            'merkMobil' => ['required', 'string'],
            // 'harga' => ['required', 'integer'],
        ]);
        $ambil = $request->input('tipePaket');
        $results = DB::table('paket')
        ->where('namaPaket', '=', [$ambil])
        ->first('harga');
        $arr = json_decode(json_encode($results), true);

        $input = [
            'memberId' => $request->input('idmemb'),
            'tipePaket' => $request->input('tipePaket'),
            'merkMobil' => $request->input('merkMobil'),
            'harga' => $arr['harga'],
        ];
        TransaksiModel::create($input);

        $idd = $request->input('idmemb');
        $uri = "member/{$idd}";

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