<?php

namespace App\Http\Controllers;

use App\Models\MemberModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Models\PaketModel;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\Console\Input\Input;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $member = MemberModel::where([
            ['namaLengkap', '!=', Null],
            [function ($query) use ($request) {
                if (($term = $request->term)){
                    $query->orWhere( 'namaLengkap', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy("id", "desc")
            ->paginate(8);
            // projects = Project: :latest ()-›paginate(5);
            return view( 'member.list-member', compact('member'))
                ->with('i', (request ()->input ('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.tambah-member');
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
                    'namaLengkap' => ['required', 'string'],
                    'tanggalLahir' => ['required', 'string'],
                    'noTelp' => ['required', 'integer'],
                    'email' =>  ['required', 'string'],
                ]);
                $input = [
                    'kodeUnik' => $this->generateUniqueCode(),
                    'namaLengkap' => $request->input('namaLengkap'),
                    'tanggalLahir' => $request->input('tanggalLahir'),
                    'noTelp' => $request->input('noTelp'),
                    'email' => $request->input('email'),
                ];

                MemberModel::create($input);
                Alert::success('Success', 'Berhasil menambahkan data Barang!');
                return redirect()->route('member.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MemberModel  $memberModel
     * @return \Illuminate\Http\Response
     */
    public function show(MemberModel $member, Request $request)
    {
        $uri = $request->segments();
        $ind = $uri[1];
        $compact = compact('member');
        $pakett = PaketModel::all();

        $results = DB::table('transaksi')
        ->where('memberId', '=', [$ind])
        ->get();

        return view('member.detail-member',$compact,['paket' => $pakett, 'trans' => $results]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MemberModel  $memberModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberModel $member)
    {
        return view('member.edit-member',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MemberModel  $memberModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemberModel $member)
    {
        $request->validate([
            'namaLengkap' => [ 'string'],
            'tanggalLahir' => [ 'string'],
            'noTelp' => [ 'integer'],
            'email' =>[ 'string'],
        ]);
        // dd($request);
        $member->update($request->all());
        Alert::success('Success', 'Berhasil mengedit data Barang!');


        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MemberModel  $memberModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberModel $member)
    {
        $member->delete();

        Alert::success('Success', 'Berhasil menghapus data Member!');

        return redirect()->route('member.index');
    }
    
    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (MemberModel::where("kodeUnik", "=", $code)->first());
        return $code;
    }
}