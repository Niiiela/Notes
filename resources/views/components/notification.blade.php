<div>
    @if (session('success'))
    <div style="background:#d1e7dd; padding:10px; margin-bottom:10px;">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div style="background:#f8d7da; padding:10px; margin-bottom:10px;">
        {{ session('error') }}
    </div>
@endif

</div>