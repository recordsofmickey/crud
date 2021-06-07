<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        #get user id
        $user_id = Auth::user()->id;
        #get my contacts and public contacts
        $contacts = Contact::where('user_id', '=', $user_id)
                            ->orWhere('public', '=', 'yes')
                            ->paginate(10);

        return view('dashboard', [
            'contacts' => $contacts,
        ]);
    }
}
