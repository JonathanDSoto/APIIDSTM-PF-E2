@extends('layouts.app')
@section('contenido')
<show-sessions :session="{{$session}}"></show-sessions>
@endsection
