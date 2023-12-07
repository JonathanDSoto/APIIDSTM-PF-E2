@extends('layouts.app')
@section('contenido')
<customer-attendances :customer="{{$customer}}"></customer-attendances>
@endsection
