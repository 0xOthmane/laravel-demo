<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello(Request $request, string $name){
        return view('hello', [
            'name'=> $name
        ]);
    }

    public function doHello(ContactRequest $request) {
        dd($request->validated());
    }
}
