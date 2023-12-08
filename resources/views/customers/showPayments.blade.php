@extends('layouts.app')
@section('contenido')
<customer-payments :customer="{{$customer}}" :payments="{{json_encode($payments)}}"></customer-payments>
@endsection
