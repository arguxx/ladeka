<?php

namespace App\Http\Controllers;

use App\Models\MemberModel;
use Illuminate\Http\Request;



class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberModel = MemberModel::all();
        return view('member.index', ['member' => $memberModel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //validasi input data employee
                $request->validate([
                    'namaLengkap' => ['required', 'string'],
                    'tanggalLahir' => ['required', 'string'],
                    'noTelp' => ['required', 'integer'],
                    'email' =>['required', 'integer'],
                ]);

                //insert setiap request dari form ke dalam database
                //Jika menggunakan metode ini, nama field pada tabel dan form harus sama
                MemberModel::create($request->all());
                // Alert::success('Success', 'Berhasil menambahkan data Barang!');
                /// redirect jika sukses menyimpan data
                return redirect()->route('member.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MemberModel  $memberModel
     * @return \Illuminate\Http\Response
     */
    public function show(MemberModel $memberModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MemberModel  $memberModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberModel $memberModel)
    {
        return view('member.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MemberModel  $memberModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemberModel $memberModel)
    {
        $request->validate([
            'namaLengkap' => ['required', 'string'],
            'tanggalLahir' => ['required', 'string'],
            'noTelp' => ['required', 'integer'],
            'email' =>['required', 'integer'],
        ]);

        //insert setiap request dari form ke dalam database
        //Jika menggunakan metode ini, nama field pada tabel dan form harus sama
        $memberModel->update($request->all());
        // Alert::success('Success', 'Berhasil mengedit data Barang!');

        /// setelah berhasil mengubah data
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MemberModel  $memberModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberModel $memberModel)
    {
        $memberModel->delete();
        // Alert::success('Success', 'Berhasil menghapus data Barang!');

        return redirect()->route('member.index');
    }
}