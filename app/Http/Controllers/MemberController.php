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
    public function index()
    {
        // $member = MemberModel::all();
        $member = DB::table('member')->orderByDesc('id')->paginate(8);
        // $member = MemberModel::all();
        return view('member.list-member', ['member' => $member]);


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
        $compact = compact('member');
        $pakett = PaketModel::all();
        $results = DB::select('select * from transaksi where memberid = ?', [2000]);
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
        // return view('member.edit',compact('member'));
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
        // $request->validate([
        //     'namaLengkap' => ['required', 'string'],
        //     'tanggalLahir' => ['required', 'string'],
        //     'noTelp' => ['required', 'integer'],
        //     'email' =>['required', 'integer'],
        // ]);

        // $memberModel->update($request->all());
        Alert::success('Success', 'Berhasil mengedit data Barang!');


        // return redirect()->route('member.index');
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

        return redirect()->route('dashboard');
    }
    
    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (MemberModel::where("kodeUnik", "=", $code)->first());
        return $code;
    }
    // public function nyari(Request $request)
	// {

	// 	$cari = $request->cari;

	// 	$member = DB::table('member')
	// 	->where('namaLengkap','like',"%".$cari."%")
	// 	->paginate();

	// 	return view('member.list-member',['member' => $member]);

	// }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MemberModel  $memberModel
     * @return \Illuminate\Http\Response
     */
    public function nyari(){
        // $cari = $request->cari;
        // $users = DB::select('select * from student_details');
        // return view('stud_view',['users'=>$users]);
        // $member = DB::table('member')->paginate(8);
        // return view('member.list-member',['member' => $member]);
        $member = DB::table('member')->paginate(8);
        // $member = MemberModel::all();
        return view('member.list-member', ['member' => $member]);

    }
    public function transaksi(MemberModel $member)
    {
        $pakett = PaketModel::all();
        return view('member.input-transaksi', ['paket' => $pakett]);
        
    }
}