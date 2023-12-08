@extends('layouts.app')
@section('contenido')
<show :instructor="{{ json_encode($instructor) }}" :blood_groups="{{$bloodGroups}}" :exercise_types="{{$exerciseTypes}}"></show>
@endsection
