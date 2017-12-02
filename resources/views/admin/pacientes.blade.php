@extends('layouts.layout')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Pacientes</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('home')}}">Dashboard</a>
            </li>
            <li class="active">
                <strong>Pacientes</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

@endsection