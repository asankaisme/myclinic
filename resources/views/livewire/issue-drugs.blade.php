<div>
    {{-- Do your work, then step back. --}}
    {{-- <p>{{ $patient }}</p> --}}
    <div class="row">
        <div class="col-md-12">
            <form wire:submit.prevent = "issueMedicine">
                <div class="row mt-2 py-1">
                    <div class="col-md-5">
                        @csrf
                        {{-- <input type="text" class="form-control" id="drgNme" name="drgNme" placeholder="Drug Name" wire:model = "drgNme"> --}}
                        <select id="drg_id" class="form-control form-control-sm" name="drg_id" wire:model = "drg_id">
                            <option value=null>-Select medicine-</option>
                            @foreach ($drugs as $drug)
                                <option value="{{ $drug->id }}">{{ $drug->drgNme }}</option>
                            @endforeach
                          </select>
                            @error('drg_id')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3">
                        <input type="number" class="form-control form-control-sm" name="isdQty" id="isdQty" placeholder="Quantity to be issued" wire:model = "isdQty">
                        @error('isdQty')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-primary btn-sm  float-right">Issue</button>
                    </div>            
                </div>
            </form>
        </div>
    </div>
</div>
