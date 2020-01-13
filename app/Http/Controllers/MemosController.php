<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memo;

class MemosController extends Controller
{
    public function index() {
        $memos = Memo::orderby('created_at', 'desc')->get();
        return view('index', ['memos' => $memos]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $main_content = $request->validate(['main_content' => 'required|max:1000']);
        Memo::create($main_content);
        return redirect()->route('index');
    }
}
