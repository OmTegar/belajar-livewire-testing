@extends('layouts.main')
@push('styles')
    @livewireStyles
@endpush
@push('scripts')
    @livewireScripts
@endpush
@section('container')
    <div class="container">
        <div class="row mt-3">
            <h1>edit data user</h1>
            <div class="mb4">
                <a href="{{ route('crud') }}">back</a>
            </div>
            <div class="col-md-6">
                @livewire('user-edit', ['user' => $user] )
                {{-- <livewire:user-edit , ['user' => $user] /> --}}
            </div>
        </div>
    </div>
@endsection
