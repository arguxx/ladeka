<?php

namespace App\Http\Controllers;

use App\Models\MemberModel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NyariController extends Controller
{
    public function index(Request $request)
    {
        $pagination  = 5;
        $articles    = MemberModel::when($request->keyword, function ($query) use ($request) {
            $query
            ->where('namaLengakap', 'like', "%{$request->keyword}%");
        })->orderBy('created_at', 'desc')->paginate($pagination);
    
        $articles->appends($request->only('keyword'));
    
        return view('nyari.index', [
            'namaLengakap' => 'Articles',
            'articles' => $articles,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }
}