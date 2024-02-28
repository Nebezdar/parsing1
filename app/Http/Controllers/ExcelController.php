<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExcelController extends Controller
{
    public function download(Request $req) : StreamedResponse
    {
        $value = $req->input('file');

        return Storage::download($value);
    }

    public function upload(Request $req) : View
    {
        if (!($req->isMethod('post'))) {
            return view('welcome');

    }
    return view('welcome', [
        'file' => Storage::Files('/excel')
    ])->with('success', 'файл загружен успешно');
}
}
