@extends('layouts.app')

@section('content')
    <div class="container flex mx-auto w-4/12">
        <div class="">
            <div class="flex justify-end">
                <a href="{{ route('createContact') }}" class="border  rounded border-green-700 text-green-600 px-5 py-3 uppercase">Add Contact</a>
            </div>
            <div class="text-6xl">
                @isset($contacts)
                    @foreach ($contacts as $contact )
                        <div class="text-sm">{{ $contact->first_name }}</div>
                        
                    @endforeach
                @endisset   
            </div>
        </div>
    </div>
@endsection