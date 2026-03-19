@extends('layouts.app')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Reports</h1>
        <p class="text-gray-500">Overview of system activity</p>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <!-- Total Users -->
        <div class="bg-white p-5 rounded-xl shadow-sm">
            <p class="text-gray-500 text-sm">Total Users</p>
            <h2 class="text-2xl font-bold text-gray-800 mt-2">120</h2>
        </div>

        <!-- Total Courses -->
        <div class="bg-white p-5 rounded-xl shadow-sm">
            <p class="text-gray-500 text-sm">Total Courses</p>
            <h2 class="text-2xl font-bold text-gray-800 mt-2">35</h2>
        </div>

        <!-- Active Students -->
        <div class="bg-white p-5 rounded-xl shadow-sm">
            <p class="text-gray-500 text-sm">Active Students</p>
            <h2 class="text-2xl font-bold text-gray-800 mt-2">89</h2>
        </div>
    </div>

    <!-- Reports Table -->
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-gray-800">Recent Activity</h2>
        </div>

        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="text-gray-500 border-b">
                    <th class="py-3">User</th>
                    <th class="py-3">Action</th>
                    <th class="py-3">Date</th>
                    <th class="py-3">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="py-3">John Doe</td>
                    <td class="py-3">Enrolled in Course</td>
                    <td class="py-3">2026-03-19</td>
                    <td class="py-3">
                        <span class="px-3 py-1 text-sm bg-green-100 text-green-600 rounded-full">
                            Success
                        </span>
                    </td>
                </tr>

                <tr class="border-b">
                    <td class="py-3">Admin</td>
                    <td class="py-3">Created Course</td>
                    <td class="py-3">2026-03-18</td>
                    <td class="py-3">
                        <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">
                            Info
                        </span>
                    </td>
                </tr>

                <tr>
                    <td class="py-3">Jane Smith</td>
                    <td class="py-3">Completed Lesson</td>
                    <td class="py-3">2026-03-17</td>
                    <td class="py-3">
                        <span class="px-3 py-1 text-sm bg-purple-100 text-purple-600 rounded-full">
                            Completed
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection