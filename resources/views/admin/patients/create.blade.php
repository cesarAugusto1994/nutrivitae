@extends('layouts.layout')

@section('css')

    <link href="{{asset('admin/css/plugins/fullcalendar/fullcalendar.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/plugins/fullcalendar/fullcalendar.print.css')}}" rel='stylesheet' media='print'>
    <link href="{{asset('admin/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/plugins/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
    <style>
        .datepicker{z-index:1151 !important;}
    </style>

    @endsection

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Pacientes&nbsp;&nbsp;</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('home')}}">Dashboard</a>
                </li>
                <li class="active">
                    <strong>Paciente novo</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Formulario </h5>
                </div>
                <div class="ibox-content">

                    <form method="POST" action="{{route('patients_store')}}">
                        {{  csrf_field() }}

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nome Completo</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Data Nascimento</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input id="nascimento" name="birth" type="text"
                                           class="form-control" data-provide="datepicker" data-date-format="mm/dd/yyyy">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Naturalidade</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                    <input type="text" name="from" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Telefone</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="text" name="phone" class="form-control" data-mask="(99) 99999-9999">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Genero</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-male"></i></span>
                                    <input type="text" name="gender" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ocupacao</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                    <input type="text" name="occupation" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>CEP</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="zip" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-white" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection

@section('js')

    <script src="{{asset('admin/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('admin/js/plugins/jasny/jasny-bootstrap.min.js')}}"></script>

    <script>
        $('#nascimento').datepicker({
            startView: 2,
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true
        });
    </script>

@endsection