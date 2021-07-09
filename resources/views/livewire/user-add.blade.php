<div>
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-flat">
            <div class="panel-body">
                <form wire:submit.prevent="create">
                    <div class="form-group form-group-material">
                        <label class="control-label">Name</label>
                        <input wire:model="form.name" type="text" class="form-control"
                               placeholder="Name"/>
                        @error('form.name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group form-group-material">
                        <label class="control-label">Email</label>
                        <input wire:model="form.email" type="text" class="form-control" placeholder="Email"/>
                        @error('form.email') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group form-group-material">
                        <label class="control-label">Password</label>
                        <input wire:model="form.password" type="password" class="form-control" placeholder="Password"/>
                        @error('form.password') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="text-right">
                        <button type="reset" class="btn btn-warning" id="reset">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>