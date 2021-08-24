  <div class="card mb-3">
        <div class="card-header">livewire</div>

        <div class="card-body">
            <form wire:submit.prevent='save_todo'>
                    @isset($message)
                        <div class="alert alert-success">{{  $message }}</div>
                    @endisset
                    <div class="form-group">
                        <input type="text" wire:model="title" class="form-control" placeholder="Title">
                        @error('title')
                            <div class="text-danger">{{  $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea wire:model="description" class="form-control" placeholder="Description"></textarea>
                        @error('description')
                        <div class="text-danger">{{  $message }}</div>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-md btn-success">{{  $action }}</button>
            </form>

        </div>
    </div>


