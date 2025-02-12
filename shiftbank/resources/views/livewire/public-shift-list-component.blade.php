<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Current Shifts</h2>

    <div class="mb-6">
        <h3 class="text-xl font-semibold mb-2">Pending</h3>
        <ul>
            @foreach ($pendingShifts as $shift)
                <li class="p-3 border rounded">{{ $shift->number }} - {{ $shift->name }}</li>
            @endforeach
        </ul>
    </div>

    <div>
        <h3 class="text-xl font-semibold mb-2">In Progress</h3>
        <ul>
            @foreach ($inProgressShifts as $shift)
                <li class="p-3 border rounded">{{ $shift->number }} - {{ $shift->name }} (Box {{ $shift->box }})</li>
            @endforeach
        </ul>
    </div>
</div>
