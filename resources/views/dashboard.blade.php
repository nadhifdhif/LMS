@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="space-y-6">

<!-- STATISTICS -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded-xl shadow-sm border">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Students</p>
                <p class="text-3xl font-bold mt-1">24</p>
            </div>

            <div class="bg-blue-100 p-3 rounded-lg">
                <x-heroicon-o-users class="w-6 h-6 text-blue-600"/>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Repositories</p>
                <p class="text-3xl font-bold mt-1">12</p>
            </div>

            <div class="bg-purple-100 p-3 rounded-lg">
                <x-heroicon-o-code-bracket class="w-6 h-6 text-purple-600"/>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Commits</p>
                <p class="text-3xl font-bold mt-1">1,245</p>
            </div>

            <div class="bg-green-100 p-3 rounded-lg">
                <x-heroicon-o-chart-bar class="w-6 h-6 text-green-600"/>
            </div>
        </div>
    </div>

</div>


<!-- MAIN GRID -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

<!-- ACTIVE COURSES -->
<div class="lg:col-span-2 bg-white rounded-xl shadow-sm border p-6">

    <div class="flex items-center justify-between mb-4">
        <h3 class="font-semibold text-gray-800">
            Active Courses
        </h3>
        <a href="/courses" class="text-sm text-blue-600 hover:underline">
            View all
        </a>
    </div>

    <div class="space-y-4">

        <div class="flex items-center justify-between p-4 border rounded-lg">
            <div>
                <p class="font-medium text-gray-800">Web Development</p>
                <p class="text-sm text-gray-500">18 students enrolled</p>
            </div>
            <span class="text-sm bg-green-100 text-green-700 px-3 py-1 rounded-full">
                Active
            </span>
        </div>

        <div class="flex items-center justify-between p-4 border rounded-lg">
            <div>
                <p class="font-medium text-gray-800">Machine Learning</p>
                <p class="text-sm text-gray-500">12 students enrolled</p>
            </div>
            <span class="text-sm bg-green-100 text-green-700 px-3 py-1 rounded-full">
                Active
            </span>
        </div>

        <div class="flex items-center justify-between p-4 border rounded-lg">
            <div>
                <p class="font-medium text-gray-800">
                    Data Science
                </p>
                <p class="text-sm text-gray-500">
                    19 students enrolled
                </p>
            </div>
            <span class="text-sm bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
                Ongoing
            </span>
        </div>

    </div>

</div>


<!-- RECENT ACTIVITY -->
<div class="bg-white rounded-xl shadow-sm border p-6">

    <h3 class="font-semibold text-gray-800 mb-4">
        Recent Activity
    </h3>

    <div class="space-y-4 text-sm">

        <div class="flex items-start gap-3">
            <div class="bg-blue-100 p-2 rounded-full">
                <x-heroicon-o-user-plus class="w-4 h-4 text-blue-600"/>
            </div>
            <div>
                <p class="text-gray-700">John joined Web Development</p>
                <p class="text-gray-400 text-xs">2 hours ago</p>
            </div>
        </div>

        <div class="flex items-start gap-3">
            <div class="bg-purple-100 p-2 rounded-full">
                <x-heroicon-o-code-bracket class="w-4 h-4 text-purple-600"/>
            </div>
            <div>
                <p class="text-gray-700">New commit pushed to ML project</p>
                <p class="text-gray-400 text-xs">5 hours ago</p>
            </div>
        </div>

        <div class="flex items-start gap-3">
            <div class="bg-green-100 p-2 rounded-full">
                <x-heroicon-o-check-circle class="w-4 h-4 text-green-600"/>
            </div>
            <div>
                <p class="text-gray-700">
                    Assignment graded
                </p>
                <p class="text-gray-400 text-xs">
                    Today
                </p>
            </div>
        </div>

    </div>

</div>

</div>


<!-- COURSE PROGRESS -->
<div class="bg-white rounded-xl shadow-sm border p-6">

    <h3 class="font-semibold text-gray-800 mb-4">
        Course Progress
    </h3>

    <div class="space-y-4">

        <div>
            <div class="flex justify-between text-sm mb-1">
                <span>Web Development</span>
                <span>80%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-blue-600 h-2 rounded-full w-[80%]"></div>
            </div>
        </div>

        <div>
            <div class="flex justify-between text-sm mb-1">
                <span>Machine Learning</span>
                <span>55%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-purple-600 h-2 rounded-full w-[55%]"></div>
            </div>
        </div>

        <div>
            <div class="flex justify-between text-sm mb-1">
                <span>Data Science</span>
                <span>35%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-green-600 h-2 rounded-full w-[35%]"></div>
            </div>
        </div>

    </div>

</div>

</div>

@endsection
