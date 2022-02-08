<div>
    @if ($isAdded = true)
        <form wire:submit.prevent = "addDiagnosis">
            @csrf
            <textarea name="diagnosis" wire:model="diagnosis" cols="80" rows="10"></textarea>
                @error('diagnosis')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                <br>
                <div>
                    <button type="submit" class="btn btn-sm btn-primary">Add Report</button>
                </div>
        </form>
    @else
        <form wire:submit.prevent = "updateDiagnosis">
            @csrf
            <textarea name="diagnosis" wire:model="diagnosis" cols="80" rows="10"></textarea>
                @error('diagnosis')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                <br>
                <div>
                    <button type="submit" class="btn btn-sm btn-primary">Update Report</button>
                </div>
        </form>
    @endif
</div>
