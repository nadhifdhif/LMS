@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Courses</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        {{-- Card Course --}}
        <div class="bg-white rounded-xl shadow p-5 hover:shadow-lg transition">
            <h2 class="text-xl font-semibold mb-2">Laravel Basics</h2>
            <p class="text-gray-600 text-sm mb-4">
                Learn fundamental Laravel concepts.
            </p>
            <a href="#" class="text-blue-600 font-medium hover:underline">
                View Course →
            </a>
        </div>

        <div class="bg-white rounded-xl shadow p-5 hover:shadow-lg transition">
            <h2 class="text-xl font-semibold mb-2">Frontend Tailwind</h2>
            <p class="text-gray-600 text-sm mb-4">
                Build modern UI using Tailwind CSS.
            </p>
            <a href="#" class="text-blue-600 font-medium hover:underline">
                View Course →
            </a>
        </div>

        <div class="bg-white rounded-xl shadow p-5 hover:shadow-lg transition">
            <h2 class="text-xl font-semibold mb-2">Database Design</h2>
            <p class="text-gray-600 text-sm mb-4">
                Learn relational database concepts.
            </p>
            <a href="#" class="text-blue-600 font-medium hover:underline">
                View Course →
            </a>
        </div>

    </div>
</div>
@endsection