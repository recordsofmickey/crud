<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $contacts = $contacts = Contact::where('user_id', '=', $user_id)->get();

        return view('dashboard', [
            'contacts' => $contacts,
        ]);
    }
}
