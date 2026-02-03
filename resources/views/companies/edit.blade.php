@extends('layouts.app')

@section('content')
<div class="page-container max-w-xl">
    <a href="{{ route('home') }}"
        class="inline-flex items-center mb-6 text-emerald-700 hover:underline">
            ← Back to Home
    </a>
    <div class="page-card">
        <h1 class="page-title mb-6">Edit Company</h1>

        <form method="POST" action="{{ route('companies.update', $company) }}">
            @csrf
            @method('PUT')

            @include('companies._form')

            <button class="primary-btn w-full mt-6">
                Update
            </button>
        </form>
    </div>

</div>
@endsection
