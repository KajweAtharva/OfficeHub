@extends('layouts.app')

@section('content')
<div class="page-container">
    <a href="{{ route('home') }}"
        class="inline-flex items-center mb-6 text-emerald-700 hover:underline">
            ← Back to Home
    </a>
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="page-title">Companies</h1>

        <a href="{{ route('companies.create') }}" class="primary-btn">
            + Add Company
        </a>
    </div>

    <!-- Table -->
    <div class="page-card">
        <table class="w-full border-collapse">
            <thead>
            <tr>
                <th class="text-left py-3">Name</th>
                <th class="text-left py-3">Location</th>
                <th class="text-left py-3">Actions</th>
            </tr>
            </thead>

            <tbody>
            @foreach($companies as $company)
                <tr class="border-t border-zinc-700">
                    <td class="py-3">{{ $company->name }}</td>
                    <td class="py-3">{{ $company->location }}</td>
                    <td class="py-3 flex gap-4">
                        <a href="{{ route('companies.edit', $company) }}"
                           class="text-blue-400 hover:underline">
                            Edit
                        </a>

                        <form method="POST"
                              action="{{ route('companies.destroy', $company) }}"
                              onsubmit="return confirm('Delete this company?')">
                            @csrf
                            @method('DELETE')
                            <button class="danger-btn hover:underline">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
