@extends('layouts.app')
@section('contenido')
<index-sessions :sessions="{{json_encode($sessions)}}"></index-sessions>
@endsection
