@extends('layouts.app')

@section('content')
<div class="page-container max-w-xl">

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
