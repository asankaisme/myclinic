<div>
    <div class="row">
        <div class="col-md-12">
            <form wire:submit.prevent = "addDrug">
                <div class="row mt-2 py-1">
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="drgNme" name="drgNme" placeholder="Drug Name" wire:model = "drgNme">
                        @error('drgName')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <input type="number" class="form-control" name="avlQty" id="inputPassword4" placeholder="Available Quantity" wire:model = "avlQty">
                        @error('avlQty')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <input type="number" class="form-control" name="rol" id="inputPassword4" placeholder="Re-Order Level" wire:model = "rol">
                        @error('rol')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-primary  float-right">Add</button>
                    </div>            
                </div>
            </form>
        </div>
    </div>
</div>
