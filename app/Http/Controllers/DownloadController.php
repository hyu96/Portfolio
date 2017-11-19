<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class DownloadController extends Controller
{
    public function downResume()
    {
        return response()->download(public_path() . "/data/DoQuangHuy_Resume.pdf");
    }
}
