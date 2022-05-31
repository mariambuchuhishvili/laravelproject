<?php

namespace App\Http\Controllers;


use App\Http\Requests\ZakazRequest;
use App\Models\ZakazUsers;
use Illuminate\Http\RedirectResponse;


class ZakazController extends Controller
{
     public function submit(ZakazRequest $req): RedirectResponse
     {
        $zakUser=new ZakazUsers();
        $zakUser->name=$req->input('name');
        $zakUser->email=$req->input('email');
        $zakUser->message=$req->input('message');

        $zakUser->save();

        return redirect()->route('my_page');
    }
}
