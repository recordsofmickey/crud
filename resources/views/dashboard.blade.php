@extends('layouts.app')

@section('content')
    <div class="container mx-auto w-6/12">
        <div class="flex justify-between my-5">
            <a href="{{ route('createContact') }}" class="border text-sm rounded border-green-700 text-green-600 px-5 py-3 uppercase">Add Contact</a>
            <h1 class="text-3xl text-gray-600 font-serif font-bold">My contacts</h1>
        </div>
        <div class="flex flex-col text-sm mb-10">
                @isset($contacts)
                    @foreach ($contacts as $contact )
                        <a href="/contacts/show/{{$contact->id}}">
                            <div class="flex justify-between border rounded-sm hover:border-blue-600 px-4 py-4 my-4">
                                <div class="text-sm w-full">{{ $contact->first_name }}</div>
                                @if($contact->public === 'yes') 
                                    <div class="flex text-sm text-green-500 items-center">
                                        <svg class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                            <path fillRule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clipRule="evenodd" />
                                        </svg>
                                    </div>
                                @else
                                    <div class="flex text-sm text-red-300 items-center">
                                        <svg class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                            <path fillRule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clipRule="evenodd" />
                                            <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                                          </svg>
                                    </div>
                                @endif
                            </div>
                        </a>
                    @endforeach
                    {{ $contacts->links() }}
                @endisset   
            </div>
    </div>
@endsection