@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <livewire:todo/>
        </div>
        <div class="col-md-8">
            <livewire:todo-list/>
        </div>
    </div>
</div>
@endsection
