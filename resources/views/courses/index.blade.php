@extends('layouts.app')

@section('content')
<div class="p-6 space-y-6">

    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-semibold">Courses</h1>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            + Add Course
        </button>
    </div>

    <!-- Course List -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Card -->
        <div class="bg-white p-5 rounded-xl shadow hover:shadow-md transition">
            <h2 class="font-semibold text-lg">Web Development</h2>
            <p class="text-gray-500 text-sm mt-1">18 students enrolled</p>

            <div class="flex justify-between items-center mt-4">
                <span class="text-green-600 bg-green-100 px-3 py-1 rounded-full text-sm">
                    Active
                </span>
                <button class="text-blue-600 text-sm hover:underline">
                    View
                </button>
            </div>
        </div>

        <div class="bg-white p-5 rounded-xl shadow hover:shadow-md transition">
            <h2 class="font-semibold text-lg">Machine Learning</h2>
            <p class="text-gray-500 text-sm mt-1">12 students enrolled</p>

            <div class="flex justify-between items-center mt-4">
                <span class="text-green-600 bg-green-100 px-3 py-1 rounded-full text-sm">
                    Active
                </span>
                <button class="text-blue-600 text-sm hover:underline">
                    View
                </button>
            </div>
        </div>

        <div class="bg-white p-5 rounded-xl shadow hover:shadow-md transition">
            <h2 class="font-semibold text-lg">Data Science</h2>
            <p class="text-gray-500 text-sm mt-1">9 students enrolled</p>

            <div class="flex justify-between items-center mt-4">
                <span class="text-yellow-600 bg-yellow-100 px-3 py-1 rounded-full text-sm">
                    Ongoing
                </span>
                <button class="text-blue-600 text-sm hover:underline">
                    View
                </button>
            </div>
        </div>

    </div>

</div>
@endsection