@extends('layouts.app')
@section('contenido')
    <index-payments :payments="{{ json_encode($payments) }}"></index-payments>
@endsection
