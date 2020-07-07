@foreach($total as $totals)
<div class="d-flex flex-column flex-md-row justify-content-between mb-5">
    <div class="flex-grow-1">
        <h3 class="mb-0">{{ $totals -> Occ }}</h3>
        <div class="subheading mb-3">{{ $totals -> Company }}</div>
        <pre>{{ $totals -> Details }}</pre>
    </div>
    <div class="flex-shrink-0"><span class="text-primary">{{ $totals -> SDate }} - {{ $totals -> EDate }}</span></div>
</div>
@endforeach