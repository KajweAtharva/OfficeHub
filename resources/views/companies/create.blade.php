@extends('layouts.app')

@section('content')
<div class="page-container max-w-xl">
    <a href="{{ route('home') }}"
        class="inline-flex items-center mb-6 text-emerald-700 hover:underline">
            ← Back to Home
    </a>
    <div class="page-card">
        <h1 class="page-title mb-6">Add Company</h1>

        <form method="POST" action="{{ route('companies.store') }}">
            @csrf

            @include('companies._form')

            <button class="primary-btn w-full mt-6">
                Save
            </button>
        </form>
    </div>

</div>
@endsection
