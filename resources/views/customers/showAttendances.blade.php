@extends('layouts.app')
@section('contenido')
<customer-attendances :customer="{{$customer}}" :attendances="{{json_encode($attendances)}}"></customer-attendances>
@endsection
