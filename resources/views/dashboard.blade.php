@extends('layouts.app')

@section('content')
    <div class="container flex mx-auto w-4/12">
        <div class="">
            <div class="flex justify-end">
                <a href="{{ route('createContact') }}" class="border  rounded border-green-700 text-green-600 px-5 py-3 uppercase">Add Contact</a>
            </div>
            <h1 class="text-6xl">My contacts</h1>
            <div class="text-sm">
                @isset($contacts)
                    @foreach ($contacts as $contact )
                        <a href="/contacts/show/{{$contact->id}}">
                            <div class="flex justify-between border hover:border-blue-600 px-4 py4 my-4">
                                <div class="text-sm">{{ $contact->first_name }}</div>
                                @if($contact->public === 'yes') 
                                    <div class="text-sm text-green-700">public</div>
                                @else
                                    <div class="text-sm text-red-500">private</div>
                                @endif
                            </div>
                        </a>
                    @endforeach
                    {{ $contacts->links() }}
                @endisset   
            </div>
        </div>
    </div>
@endsection