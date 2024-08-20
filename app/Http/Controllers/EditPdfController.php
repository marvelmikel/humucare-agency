<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditPdfController extends Controller
{
  public function editPdf($path)
  {

    $file = '/files'.'/'.$path;

    // dd($file);

    return view('edit_pdf', compact('file'));

  }
}
