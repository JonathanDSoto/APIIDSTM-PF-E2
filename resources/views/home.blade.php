@extends('layouts.app')
@section('contenido')
<div class="row">
    <customers-card :info="{{json_encode($customers)}}"></customers-card>
    <earnings-cards :info="{{json_encode($earnings)}}"></earnings-cards>
    <instructors-cards :info="{{$popularInstructors}}" :total_sessions="{{$totalSessions}}"></instructors-cards>
    <sessions-card :info="{{$popularExerciseSessions}}" :total_sessions="{{$totalSessions}}"></sessions-card>
    <fares-table :info="{{$paymentsPerFares}}"></fares-table>
</div>
@endsection
