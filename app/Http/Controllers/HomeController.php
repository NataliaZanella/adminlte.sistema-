<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function adicionar_dotacao()
    {
        return view('pages.adicionar');
    }

    public function store_dotacao(Request $request)
    {
        print_r($request);
    }
}
