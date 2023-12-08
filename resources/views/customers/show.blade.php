@extends('layouts.app')
@section('contenido')
<!-- {{$customer}} -->
<!-- {{$bloodGroups}} -->
<show-customers :customer="{{ json_encode($customer) }}" :blood_groups="{{json_encode($bloodGroups)}}"></show-customers>
 @endsection
