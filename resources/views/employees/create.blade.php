@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-6 py-10 w-full">

    <h1 class="text-3xl mb-8">Add Employee</h1>

    <form method="POST" action="{{ route('employees.store') }}" class="space-y-8">
        @csrf
        @include('employees._form')

        <button class="bg-emerald-700 px-8 py-3 rounded-xl hover:bg-emerald-600 transition">
            Save Employee
        </button>
    </form>

</div>
@endsection

@include('employees.location-js')
