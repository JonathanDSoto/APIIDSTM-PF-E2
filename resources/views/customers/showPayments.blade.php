@extends('layouts.app')
@section('contenido')
<customer-payments :customer="{{$customer}}"></customer-payments>
@endsection
