@push('scripts')
<script>
const countrySel = document.getElementById('country');
const stateSel   = document.getElementById('state');
const citySel    = document.getElementById('city');

const selectedCountry = "{{ old('country', $employee->country ?? '') }}";
const selectedState   = "{{ old('state', $employee->state ?? '') }}";
const selectedCity    = "{{ old('city', $employee->city ?? '') }}";

fetch("https://countriesnow.space/api/v0.1/countries/positions")
.then(res => res.json())
.then(res => {
    res.data.forEach(c => {
        const opt = new Option(c.name, c.name);
        if (c.name === selectedCountry) opt.selected = true;
        countrySel.add(opt);
    });

    if (selectedCountry) fetchStates(selectedCountry);
});

countrySel.addEventListener('change', e => fetchStates(e.target.value));
stateSel.addEventListener('change', e => fetchCities(countrySel.value, e.target.value));

function fetchStates(country) {
    stateSel.innerHTML = '<option value="">Select State</option>';
    citySel.innerHTML = '<option value="">Select City</option>';

    fetch("https://countriesnow.space/api/v0.1/countries/states", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ country })
    })
    .then(res => res.json())
    .then(res => {
        res.data.states.forEach(s => {
            const opt = new Option(s.name, s.name);
            if (s.name === selectedState) opt.selected = true;
            stateSel.add(opt);
        });

        if (selectedState) fetchCities(country, selectedState);
    });
}

function fetchCities(country, state) {
    citySel.innerHTML = '<option value="">Select City</option>';

    fetch("https://countriesnow.space/api/v0.1/countries/state/cities", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ country, state })
    })
    .then(res => res.json())
    .then(res => {
        res.data.forEach(city => {
            const opt = new Option(city, city);
            if (city === selectedCity) opt.selected = true;
            citySel.add(opt);
        });
    });
}
</script>
@endpush
