@extends('layouts.app')
@section('contenido')
<index-exercise-types :exercises="{{json_encode($exerciseTypes)}}"></index-exercise-types>
<!-- {{json_encode($exerciseTypes)}} -->
@endsection
