@extends('layouts.app')
@section('contenido')
<index :instructors="{{json_encode($instructors)}}"></index>
{{ $instructors[0] }}
@endsection
