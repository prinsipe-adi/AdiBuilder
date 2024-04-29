<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{

public function store() {

    $contactForm = new ContactForm([
        'name' => request()->get('name'),
        'email' => request()->get('email'),
        'phone' => request()->get('phone'),
        'query' => request()->get('query'),
        ]);

        $contactForm->save();

        return redirect()->route('dashboard')->with('success','Thanks for contacting AdiBuilder! We will contact you shortly.');
}
}
