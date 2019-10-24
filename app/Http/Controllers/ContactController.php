<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }
    
    public function newMessage(Request $request) {
        $data = $request->all();
        
        $contact = new Contact($data);
        $contact->save();
        
        mail(
            'drlev@gmail.com',
            'add new message',
            $data['message']
        );
        
        return view('contact');
    }
}
