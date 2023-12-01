@extends('layouts.app')
@section('contenido')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif
    <index-fares :fares="{{ json_encode($fares) }}" :fare_periods="{{ json_encode($farePeriods) }}"
        :fares_count="{{ json_encode($faresCount) }}"></index-fares>
@endsection
