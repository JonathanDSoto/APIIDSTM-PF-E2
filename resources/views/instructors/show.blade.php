@extends('layouts.app')
@section('contenido')
<show :instructor="{{ json_encode($instructor) }}"></show>
@endsection
