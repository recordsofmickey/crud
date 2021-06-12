@extends('layouts.app')

@section('content')
        <!-- Validation Errors -->

    <div class="container flex mx-auto w-4/12">
        <div class="flex justify-center">
            <form class="flex flex-col w-full space-y-2" action="{{ route('saveContact') }}" method="POST">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                @csrf
                <label for="first_name">First name</label>
                <input type="text" class="@error('first_name') border-red-500 @enderror" name="first_name" value="{{ old('first_name') }}">
                @error('first_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="last_name">Last name</label>
                <input type="text" class="@error('last_name') border-red-500 @enderror" name="last_name" value="{{ old('last_name') }}">
                @error('last_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="street">Street</label>
                <input type="text" class="@error('street') border-red-500 @enderror" name="street" value="{{ old('street') }}">
                @error('street')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="house_nr">House number</label>
                <input type="text" class="@error('house_nr') border-red-500 @enderror" name="house_nr" value="{{ old('house_nr') }}">
                @error('house_nr')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="city">City</label>
                <input type="text" class="@error('city') border-red-500 @enderror" name="city" value="{{ old('city') }}">
                @error('city')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="zip_code">Zip code</label>
                <input type="text" class="@error('zip_code') border-red-500 @enderror" name="zip_code" value="{{ old('zip_code') }}">
                @error('zip_code')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="email">Email</label>
                <input type="email" class="@error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}">
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <label for="phone_nr">Phone number</label>
                <input type="text" class="@error('phone_nr') border-red-500 @enderror" name="phone_nr" value="{{ old('phone_nr') }}">
                @error('phone_nr')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
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
            </form>
        </div>
    </div>
@endsection