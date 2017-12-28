@extends('layouts.layout')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Pacientes&nbsp;&nbsp;<a href="{{route('patient_create')}}" class="btn btn-primary pull-right">Novo</a></h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('home')}}">Dashboard</a>
                </li>
                <li class="active">
                    <strong>Pacientes</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            @foreach($patients as $patient)
                <div class="col-lg-4">
                    <div class="contact-box">
                        <a href="{{route('patient_show', ['id' => $patient->id])}}">
                            <div class="col-sm-4">
                                <div class="text-center">
                                    <img alt="image" class="img-circle m-t-xs img-responsive" src="{{ Gravatar::get($patient->email) }}">
                                    <div class="m-t-xs font-bold">{{$patient->occupation}}</div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h3><strong>
                                        {{$patient->name}}<small>  {{$patient->gender}}</small>
                                    </strong></h3>
                                <p><i class="fa fa-map-marker"></i> {{$patient->from}} </p>
                                <address>
                                    <strong>{{$patient->birth}}</strong><br>
                                    {{$patient->email}}<br>
                                    <abbr title="Phone">P:</abbr> {{$patient->phone}}
                                </address>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>



    <div class="modal inmodal" id="cadastrar-paciente" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Cadastrar novo Paciente</h4>
                </div>
                <form method="POST" action="pacientes_form_save">
                    {{  csrf_field() }}
                    <div class="modal-body col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nome Completo</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="nome" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Data Nascimento</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input id="nascimento" name="nascimento" type="text"
                                           class="form-control" data-provide="datepicker" data-date-format="mm/dd/yyyy">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Naturalidade</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                    <input type="text" name="naturalidade" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Telefone</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="text" name="telefone" class="form-control" data-mask="(99) 99999-9999">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Genero</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-male"></i></span>
                                    <input type="text" name="genero" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ocupacao</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                    <input type="text" name="ocupacao" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>CEP</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="cep" class="form-control">
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

@section('js')

    <script src="admin/js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script src="admin/js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <script>

        $(document).ready(function() {

            $("#form-adicionar-consulta").submit(function () {

            });


            $("#form-cadastrar-paciente").submit(function (e) {

                $('#form-adicionar-consulta').modal({
                    keyboard: false
                });

                return false;

                var form = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "/pacientes/form/save",
                    data: form,
                    success: function (data) {
                        alert(data.mensagem);

                        e.preventDefault();
                    }
                })

            })

        });

    </script>
@endsection