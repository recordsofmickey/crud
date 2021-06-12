@extends('layouts.app')
@section('content')
<div class="container flex mx-auto w-4/12">
    <div class="flex flex-col">
        <h1 class="text-4xl">Contact information for: <span class="font-strong">{{ $contact->first_name }} {{ $contact->last_name }}</span></h1>
        <div>Email: <a href="mailto:{{$contact->email}}">{{ $contact->email }}</a></div>
        <div>Phone: {{ $contact->phone_nr }}</div>
        <div>Address: {{ $contact->street}} {{ $contact->house_nr}} </div>
        <div class=""> {{ $contact->zip_code }} {{ $contact->city }}</div>
        <div class="flex justify-between">
            @if(auth()->user()->id === intval($contact->user_id))
                <a href="/contacts/edit/{{$contact->id}}" class="border border-green-700 hover:bg-green-400 py-2 px-4 text-sm my-4">Edit contact</a>
                <form action="{{ route('deleteContact', $contact->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="contact_id" value="{{$contact->id}}">
                    <button type="submit" class="border border-red-700 hover:bg-red-400 py-2 px-4 text-sm my-4">Delete contact</button>
                </form>
            @endif
        </div>
        <a href="{{ route('dashboard')}}" class="w-2/12 border border-blue-700 hover:bg-blue-400 py-2 px-4 text-sm my-4">Back</a>
        
    </div>
</div>
@endsection