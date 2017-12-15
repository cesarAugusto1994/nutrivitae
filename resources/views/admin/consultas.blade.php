@extends('layouts.layout')

@section('css')
    <link href="admin/css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="admin/css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>
    <link href="admin/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="admin/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <style>
        .datepicker{z-index:1151 !important;}
    </style>
@endsection

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Consultas</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('home')}}">Dashboard</a>
            </li>
            <li class="active">
                <strong>Consultas</strong>
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
                    <h2>Consultas de Hoje</h2>
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

<div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Adicionar Consulta</h4>
            </div>
            <div class="modal-body">

                <div class="col-md-6">
                    <div class="contact-box">
                        <a href="javascrip:void;">
                            <div class="col-sm-4">
                                <div class="text-center">
                                    <img alt="image" class="img-circle m-t-xs img-responsive" src="admin/img/a2.jpg">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h3><strong>Selecionar Paciente</strong></h3>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contact-box">
                        <a href="javascrip:void;" data-dismiss="modal" data-toggle="modal" data-target="#cadastrar-paciente">
                            <div class="col-sm-4">
                                <div class="text-center">
                                    <img alt="image" class="img-circle m-t-xs img-responsive" src="admin/img/a5.jpg">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h3><strong>Cadastrar Paciente</strong></h3>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Adicionar</button>
            </div>
        </div>
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

<script src="admin/js/plugins/fullcalendar/moment.min.js"></script>
<script src="admin/js/plugins/fullcalendar/fullcalendar.min.js"></script>
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
                success : function (data) {
                   alert(data.mensagem);

                    e.preventDefault();
                }
            })

        });

        
        /* initialize the external events
         -----------------------------------------------------------------*/


        $('#external-events div.external-event').each(function() {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1111999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });

        $('#nascimento').datepicker({
            startView: 2,
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true
        });


        /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d-5),
                    end: new Date(y, m, d-2),
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d-3, 16, 0),
                    allDay: false,
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d+4, 16, 0),
                    allDay: false
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d+1, 19, 0),
                    end: new Date(y, m, d+1, 22, 30),
                    allDay: false
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/'
                }
            ],
        });


    });

</script>
@endsection