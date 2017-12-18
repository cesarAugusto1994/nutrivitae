@extends('layouts.layout')

@section('css')

@endsection

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Mensagens</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('home')}}">Dashboard</a>
            </li>
            <li class="active">
                <strong>Mensagens</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content">
    <div class="row animated fadeInDown">

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <h2>Consultas iniciadas</h2>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <h2>Proximas Consultas</h2>
                </div>
            </div>

        </div>

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Calendario </h5>
                    <div class="ibox-tools">
                        <a data-toggle="modal" data-target="#myModal2">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection