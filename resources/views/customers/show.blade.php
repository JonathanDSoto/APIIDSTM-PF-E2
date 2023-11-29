@extends('layouts.app')
@section('contenido')
<!-- {{$customer}} -->
<show-clients :customer="{{ json_encode($customer) }}"></show-clients>
 @endsection
