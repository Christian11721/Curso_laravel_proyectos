@if ($message = session('success'))
    <div style="padding: 15px; background-color: green; color: white;">
        <p>{{ $message }}</p>
    </div>
@endif

@if ($message = session('danger'))
    <div style="padding: 15px; background-color: red; color: white;">
        <p>{{ $message }}</p>
    </div>
@endif
