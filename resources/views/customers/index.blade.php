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
    <index-clients :customers="{{json_encode($customers)}}" :blood_groups="{{json_encode($bloodGroups)}}"></index-clients>
@endsection
