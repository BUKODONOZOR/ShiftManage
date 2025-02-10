<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Shift Management</h2>

    <!-- Pending Shifts -->
    <div class="mb-6">
        <h3 class="text-xl font-semibold mb-2">Pending</h3>
        <ul>
            @foreach ($pendingShifts as $shift)
                <li class="p-3 border rounded flex justify-between items-center">
                    <span>{{ $shift->number }} - {{ $shift->name }} ({{ $shift->document }})</span>
                    <button class="bg-green-500 text-white px-4 py-2 rounded" 
                        wire:click="updateState({{ $shift->id }}, 'progress')">
                        Start
                    </button>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- In Progress Shifts -->
    <div class="mb-6">
        <h3 class="text-xl font-semibold mb-2">In Progress</h3>
        <ul>
            @foreach ($inProgressShifts as $shift)
                <li class="p-3 border rounded flex justify-between items-center">
                    <span>{{ $shift->number }} - {{ $shift->name }} (Box {{ $shift->box }})</span>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded"
                        wire:click="updateState({{ $shift->id }}, 'checket')">
                        Complete
                    </button>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Checked Shifts -->
    <div>
        <h3 class="text-xl font-semibold mb-2">Checked</h3>
        <ul>
            @foreach ($checkedShifts as $shift)
                <li class="p-3 border rounded flex justify-between items-center">
                    <span>{{ $shift->number }} - {{ $shift->name }}</span>
                    <button class="bg-red-500 text-white px-4 py-2 rounded"
                        wire:click="deleteShift({{ $shift->id }})">
                        Delete
                    </button>
                </li>
            @endforeach
        </ul>
    </div>
</div>
