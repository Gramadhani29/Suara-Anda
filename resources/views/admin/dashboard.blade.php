@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Admin Dashboard') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Section 1 --}}
            <div class="bg-dark dark:bg-gray-800 shadow-lg rounded-lg mb-6">
                <div class="p-6 text-gray dark:text-gray-100 text-lg font-medium">
                    {{ __("You're logged in! Admin") }}
                </div>
            </div>

            {{-- Section 2 --}}
            <div class="bg-dark dark:bg-gray-800 shadow-lg rounded-lg">
                <div class="p-6 text-gray dark:text-gray-100">
                    <a href="/artikels" class="text-blue-500 hover:text-blue-600 font-semibold hover:underline">
                        {{ __("Go to Articles") }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
