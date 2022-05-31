<?php

namespace App\Http\Controllers;


use JetBrains\PhpStorm\NoReturn;
use App\Http\Requests\ZakazRequest;

class ZakazController extends Controller
{
    #[NoReturn] public function submit(ZakazRequest $req)
    {
        /*$validation=$req->validate(['message'=> 'required|min:5|max:500',
                                    'name'=>'required|min:2',
                                     'email'=>'required']);*/
    }
}
