<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Jobs\SendMailJob;

class SendEmailController extends Controller
{
    public function index()
    {
        return view('kirim-email');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        SendMailJob::dispatch($data);

        return redirect()->back()->with('success', 'Email queued successfully!');
    }
}
