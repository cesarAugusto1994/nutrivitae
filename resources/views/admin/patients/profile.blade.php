@extends('layouts.layout')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Perfil</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a>Paciente</a>
                </li>
                <li class="active">
                    <strong>Perfil</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content">
        <div class="row animated fadeInRight">
            <div class="col-md-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Perfil do Paciente</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right">
                            <img alt="image" class="img-responsive" src="{{asset('admin/img/profile_big.jpg')}}">
                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong>{{$patient->name}}</strong></h4>
                            <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                            <h5>
                                About me
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                            </p>
                            <div class="row m-t-lg">
                                <div class="col-md-4">
                                    <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                                    <h5><strong>169</strong> Posts</h5>
                                </div>
                                <div class="col-md-4">
                                    <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                    <h5><strong>28</strong> Following</h5>
                                </div>
                                <div class="col-md-4">
                                    <span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                                    <h5><strong>240</strong> Followers</h5>
                                </div>
                            </div>
                            <div class="user-button">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Activites</h5>
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