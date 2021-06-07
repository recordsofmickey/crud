<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    //returns list of all contacts
    public function index()
    {
        return view('');
    }

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
        
        #return to dashboard with all contacts from user
        $contacts = Contact::where('user_id', '=', $user_id)->get();

        return redirect('dashboard', [
            'contacts' => $contacts,
        ]);
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
        # code...
    }
    //updates contact
    public function FunctionName(Request $request)
    {
        # code...
    }
    //(soft)Deletes contact
    public function destroy($id)
    {
        # code...
    }


}
