<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

use function Pest\Laravel\post;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
        return view('contacts.index', ['contacts' => $contacts]);
    }

    public function show(Contact $contact)
    {
        return view('contacts.show', ['contact' => $contact]);
    }

    public function create()
    {
        return view('contacts.create', ['contact' => new Contact]);
    }

    public function store(SaveContactRequest $request)
    {
        Contact::create($request->validated());
        return to_route('contacts.index')->with('Contacto creado exitosamente');
    }
}
