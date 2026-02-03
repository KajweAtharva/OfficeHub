@extends('layouts.app')

@section('content')
<div class="page-container max-w-xl">

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
