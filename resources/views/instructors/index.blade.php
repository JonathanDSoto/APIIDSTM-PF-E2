@extends('layouts.app')
@section('contenido')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif
<index
    :instructors="{{json_encode($instructors)}}"
    :exercise_types="{{json_encode($exerciseTypes)}}"
    :blood_groups="{{json_encode($bloodGroups)}}">
</index>
@endsection
