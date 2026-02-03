<div class="space-y-4">

    <!-- Company Name -->
    <input
        type="text"
        name="name"
        placeholder="Company Name"
        value="{{ old('name', $company->name ?? '') }}"
        class="form-input"
        required
    >

    <!-- Location -->
    <input
        type="text"
        name="location"
        placeholder="Location"
        value="{{ old('location', $company->location ?? '') }}"
        class="form-input"
        required
    >

</div>
