@extends('layouts.app')

@section('header')
    <h2 class="text-xl font-semibold text-gray-800">
        Users Management
    </h2>
@endsection

@section('content')

<div class="bg-white p-6 rounded-xl shadow-sm border">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h3 class="text-lg font-semibold text-gray-800">
                All Users
            </h3>
            <p class="text-sm text-gray-500">
                Manage all users in the system
            </p>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition">
            + Add User
        </button>
    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">

            <thead class="text-gray-500 border-b">
                <tr>
                    <th class="py-3">Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>

            <tbody class="divide-y">

                <!-- Dummy Row -->
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 font-medium text-gray-800">
                        John Doe
                    </td>
                    <td class="text-gray-600">
                        john@example.com
                    </td>
                    <td>
                        <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">
                            Student
                        </span>
                    </td>
                    <td class="text-right space-x-2">
                        <button class="text-blue-600 hover:underline">Edit</button>
                        <button class="text-red-600 hover:underline">Delete</button>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 font-medium text-gray-800">
                        Admin User
                    </td>
                    <td class="text-gray-600">
                        admin@example.com
                    </td>
                    <td>
                        <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">
                            Admin
                        </span>
                    </td>
                    <td class="text-right space-x-2">
                        <button class="text-blue-600 hover:underline">Edit</button>
                        <button class="text-red-600 hover:underline">Delete</button>
                    </td>
                </tr>

            </tbody>

        </table>
    </div>

</div>

@endsection