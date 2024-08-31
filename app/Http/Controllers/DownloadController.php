<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    function download(Request $request){
        $link=public_path('files/myportfolio.pdf');
        return response()->download($link);
    }
}
