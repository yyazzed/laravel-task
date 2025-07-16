<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    // عرض صفحة النموذج
    public function show()
    {
        return view('contact');
    }

    // حفظ البيانات في قاعدة البيانات
    public function submit(ContactFormRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->route('contact.show')->with('success', 'Message sent successfully!');
    }
}

