@extends('layouts.app')
@section('contenido')
<!-- {{$customer}} -->
<!-- {{$bloodGroups}} -->
<show-clients :customer="{{ json_encode($customer) }}" :blood_groups="{{json_encode($bloodGroups)}}"></show-clients>
 @endsection
