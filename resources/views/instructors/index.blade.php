@extends('layouts.app')
@section('contenido')
<index :instructors="{{json_encode($instructors)}}" :blood_groups="{{json_encode($bloodGroups)}}"></index>
@endsection
