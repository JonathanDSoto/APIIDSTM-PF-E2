@extends('layouts.app')
@section('contenido')
    <index-clients :customers="{{json_encode($customers)}}"></index-clients>
@endsection
