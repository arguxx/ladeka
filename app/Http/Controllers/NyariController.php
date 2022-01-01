<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NyariController extends Controller
{
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
}