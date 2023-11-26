<div>
    @extends('layouts.app')
    @section('title', 'Tasks')


    @section('header')
        <livewire:header />
    @endsection

    @section('content')
        <livewire:task-lists />
    @endsection

    @section('footer')
        <livewire:footer />
    @endsection

</div>
