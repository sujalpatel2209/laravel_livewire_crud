<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-flat">
            <div class="panel-body">
                <form>
                    <div class="form-group form-group-material">
                        <label class="control-label">Name</label>
                        <input wire:model="name" type="text" class="form-control"
                               placeholder="Name"/>
                        {{ $name }}
                    </div>

                    <div class="form-group form-group-material">
                        <label class="control-label">Email</label>
                        <input type="text" class="form-control" placeholder="Email"/>
                    </div>

                    <div class="form-group form-group-material">
                        <label class="control-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password"/>
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