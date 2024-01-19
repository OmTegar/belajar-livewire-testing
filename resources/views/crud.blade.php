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
                <div class="col-md-6">
                    {{-- @livewire('user-create') --}}
                    <livewire:user-create />
                </div>
            </div>
            <div>
                {{-- @livewire('user-table') --}}
                <livewire:user-table />
            </div>
        </div>
@endsection