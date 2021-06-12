<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class ContactController extends Controller
{
    //returns list of all contacts

    //returns create contact view
    public function create()
    {
        return view('contacts.create');
    }

    //stores contact
    public function store(Request $request)
    {
        #validate request
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'street' => 'required|max:255',
            'house_nr' => 'required',
            'city' => 'required|max:255',
            'zip_code' => 'required',
            'phone_nr' => 'required|max:255',
            'email' => 'required|email|max:255',
            'public' => 'required',
        ]);
        $user_id = Auth::user()->id;
        
        #store request
        Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'street' => $request->street,
            'house_nr' => $request->house_nr,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'phone_nr' => $request->phone_nr,
            'email' => $request->email,
            'user_id' => $user_id,
            'public' => $request->public,
        ]);
        
        #return to dashboard with all contacts from user;

        return redirect('dashboard');
    }
    //shows contact
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show', [
            'contact' => $contact,
        ]);
    }
    //shows editable contact
    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('contacts.edit', [
            'contact' => $contact,
        ]);
    }
    //updates contact
    public function update(Request $request, $id)
    {
        #validate request
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'street' => 'required|max:255',
            'house_nr' => 'required',
            'city' => 'required|max:255',
            'zip_code' => 'required',
            'phone_nr' => 'required|max:255',
            'email' => 'required|email|max:255',
            'public' => 'required',
        ]);

        $user_id = Auth::user()->id;
        $contact = Contact::find($id);
        
        #update db

        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->street = $request->street;
        $contact->house_nr = $request->house_nr;
        $contact->city = $request->city;
        $contact->zip_code = $request->zip_code;
        $contact->phone_nr = $request->phone_nr;
        $contact->email = $request->email;
        $contact->public = $request->public;
        $contact->save();

        return redirect('dashboard');
    }
    //(soft)Deletes contact
    public function destroy(Request $request)
    {
        $contact = Contact::find($request->contact_id);
        $contact->delete();

        return redirect('dashboard');
    }


}
