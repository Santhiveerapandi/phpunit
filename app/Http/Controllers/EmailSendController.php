<?php

namespace App\Http\Controllers;

use App\Mail\UserEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailSendController extends Controller
{
    //
    public function send(Request $request): RedirectResponse
    {
        foreach(["aishwarya@cloudinnovation.com","kavitha@cloudinnovation.com"] as $email) {
            Mail::to($email)->send(new UserEmail());
        }
        return redirect()->route("welcome");
    }
}
