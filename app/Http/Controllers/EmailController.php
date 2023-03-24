<?php

namespace App\Http\Controllers;

use App\Mail\MassEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function mail(Request $request){

        Mail::to($request->user())->send(new MassEmail);

        return view('emails.email-creation');
    }
}
