@extends('layouts.app')
@section('content')
<div class="container flex mx-auto w-8/12">
    <div class="flex flex-col">
        @if(auth()->user()->id === intval($contact->user_id))
        <div class="flex justify-center">
            <form class="flex flex-wrap space-x-5 space-y-2 my-10" action="/contacts/edit/{{$contact->id}}" method="POST">
                @method('PUT')
                @csrf
                <label for="first_name">First name</label>
                <input type="text" class="@error('first_name') border-red-500 @enderror w-full" name="first_name" value="{{$contact->first_name}}">
                @error('first_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="last_name">Last name</label>
                <input type="text" class="@error('last_name') border-red-500 @enderror w-full" name="last_name" value="{{$contact->last_name}}">
                @error('last_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="street">Street</label>
                <input type="text" class="@error('street') border-red-500 @enderror w-full" name="street" value="{{$contact->street}}">
                @error('street')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="house_nr">House number</label>
                <input type="text" class="@error('house_nr') border-red-500 @enderror w-full" name="house_nr" value="{{$contact->house_nr}}">
                @error('house_nr')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="city">City</label>
                <input type="text" class="@error('city') border-red-500 @enderror w-full" name="city" value="{{$contact->city}}">
                @error('city')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="zip_code">Zip code</label>
                <input type="text" class="@error('zip_code') border-red-500 @enderror w-full" name="zip_code" value="{{$contact->zip_code}}">
                @error('zip_code')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="email">Email</label>
                <input type="email" class="@error('email') border-red-500 @enderror w-full" name="email" value="{{$contact->email}}">
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="phone_nr">Phone number</label>
                <input type="text" class="@error('phone_nr') border-red-500 @enderror w-full" name="phone_nr" value="{{$contact->phone_nr}}">
                @error('phone_nr')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <div class="flex justify-between w-full my-5">
                    <label for="public">Is contact public?</label>
                    <select name="public" id="public">
                        <option value="yes">yes</option>
                        <option value="no">no</option>
                    </select>
                    @error('public')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                    <button type="submit" class="bg-green-200 hover:bg-green-600 rounded border border-green-700 text-green-900 uppercase text-sm px-3 py-2">Save</button>
                </div>
            </form>
        </div>
        @endif
        <a href="{{ route('dashboard')}}" class="w-4/12 sm:w-2/12 border border-blue-700 hover:bg-blue-400 py-2 px-4 text-sm mt-4 mb-10">Back</a>
        
    </div>
</div>
@endsection