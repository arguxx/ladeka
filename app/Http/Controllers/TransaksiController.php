<?php

namespace App\Http\Controllers;

use App\Models\TransaksiModel;
use Illuminate\Http\Request;
use App\Models\MemberModel;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MemberModel $member)
    {
        return view('member.input-transaksi', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(TransaksiModel $transaksiModel)
    {
        //
    }
}