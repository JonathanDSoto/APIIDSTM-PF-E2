@extends('layouts.app')
@section('contenido')
<index :instructors="{{json_encode($instructors)}}"></index>
@endsection
