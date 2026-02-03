<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <input type="text" name="name" placeholder="Employee Name"
           value="{{ old('name', $employee->name ?? '') }}"
           class="bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3" required>

    <input type="text" name="position" placeholder="Position"
           value="{{ old('position', $employee->position ?? '') }}"
           class="bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3" required>

    <select name="company_id"
            class="bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3" required>
        <option value="">Select Company</option>
        @foreach($companies as $company)
            <option value="{{ $company->id }}"
                {{ old('company_id', $employee->company_id ?? '') == $company->id ? 'selected' : '' }}>
                {{ $company->name }}
            </option>
        @endforeach
    </select>

    <input type="text" name="manager" placeholder="Manager Name"
           value="{{ old('manager', $employee->manager ?? '') }}"
           class="bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3">

    <!-- Country / State / City -->
    <select id="country" name="country" class="bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3" required>
        <option value="">Select Country</option>
    </select>

    <select id="state" name="state" class="bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3" required>
        <option value="">Select State</option>
    </select>

    <select id="city" name="city" class="bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3" required>
        <option value="">Select City</option>
    </select>

</div>
