@extends('layouts.app')

@section('content')
<div class="min-h-[70vh] flex items-center justify-center">

    <div class="flex flex-col md:flex-row gap-20">

        <!-- Companies Card -->
        <a href="{{ route('companies.index') }}"
        class="float-card block bg-zinc-800 w-96 h-96 rounded-3xl 
                p-10 shadow-2xl transition 
                hover:-translate-y-3 hover:shadow-emerald-900/40">

            <div class="h-full flex flex-col items-center justify-between">

                <div class="text-center">
                    <h2 class="text-3xl font-semibold">Companies</h2>
                    <p class="text-gray-400 mt-2">Manage Company Details</p>
                </div>

                <img src="{{ asset('images/companies.png') }}" class="w-36">

                <!-- Visual button only -->
                <div class="bg-emerald-700 hover:bg-emerald-600 
                            px-12 py-3 rounded-full 
                            shadow-lg shadow-emerald-900/40
                            transition text-lg font-medium">
                    Open
                </div>

            </div>
        </a>


        <!-- Employees Card -->
        <a href="{{ route('employees.index') }}"
        class="float-card float-delay block bg-zinc-800 w-96 h-96 rounded-3xl 
                p-10 shadow-2xl transition 
                hover:-translate-y-3 hover:shadow-emerald-900/40">

            <div class="h-full flex flex-col items-center justify-between">

                <div class="text-center">
                    <h2 class="text-3xl font-semibold">Employees</h2>
                    <p class="text-gray-400 mt-2">Manage Employees Records</p>
                </div>

                <img src="{{ asset('images/employees.png') }}" class="w-36">

                <!-- Visual button only -->
                <div class="bg-emerald-700 hover:bg-emerald-600 
                            px-12 py-3 rounded-full 
                            shadow-lg shadow-emerald-900/40
                            transition text-lg font-medium">
                    Open
                </div>

            </div>
        </a>


    </div>

</div>
@endsection
