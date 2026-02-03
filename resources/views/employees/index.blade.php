@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endpush

@section('content')
<div class="max-w-6xl mx-auto px-6 py-10 w-full">

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-semibold">Employees</h1>

        <a href="{{ route('employees.create') }}"
           class="bg-emerald-700 hover:bg-emerald-600 px-5 py-2 rounded-xl transition">
            + Add Employee
        </a>
    </div>

    <!-- Table -->
    <div class="rounded-xl shadow-lg bg-zinc-900 overflow-hidden">
        <div class="p-6 overflow-x-auto">
        <table id="employeesTable" class="display w-full text-sm">
            <thead>
                <tr class="text-gray-300">
                    <th>Name</th>
                    <th>Position</th>
                    <th>Company</th>
                    <th>Manager</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->company->name ?? '-' }}</td>
                    <td>{{ $employee->manager ?? '-' }}</td>
                    <td>{{ $employee->country }}</td>
                    <td>{{ $employee->state }}</td>
                    <td>{{ $employee->city }}</td>
                    <td class="flex gap-3">
                        <a href="{{ route('employees.edit', $employee) }}" class="text-emerald-400">Edit</a>

                        <form method="POST" action="{{ route('employees.destroy', $employee) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-400">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function () {
    $('#employeesTable').DataTable({
        pageLength: 5
    });
});
</script>
@endpush
