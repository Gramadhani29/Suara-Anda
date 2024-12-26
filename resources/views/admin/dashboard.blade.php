@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Admin Dashboard') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<<<<<<< Updated upstream
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>{{ __("You're logged in as admin!") }}</p>

                    <div class="mt-6">
                        <a href="{{ route('artikels.admin') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Lihat Daftar Artikel
                        </a>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('artikels.create') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Buat Artikel Baru
                        </a>
                    </div>
=======
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
>>>>>>> Stashed changes
                </div>
            </div>
        </div>
    </div>
@endsection
