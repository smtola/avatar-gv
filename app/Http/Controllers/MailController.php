<?php

namespace App\Http\Controllers;

use App\Mail\Mail as MailTemplate;
use Illuminate\Support\Facades\Mail as MailFacade;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'jobTitle' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'msg' => 'required|string',
        ]);

        // Prepare the details for the email
        $details = [
            'title' => $validated['jobTitle'],
            'body' => $validated['msg'],
            'name' => $validated['name'],
            'email' => $validated['email'],
        ];

        // Send email
        MailFacade::to('somtola.smt@gmail.com')->send(new MailTemplate($details));

        return redirect('/our-people')->with('message','Email sent successfully!');
    }
}
