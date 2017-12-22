@extends('layouts.layout')

@section('css')
    <style>
        .input-group-addon {
            min-width: 40px;
            text-align: left;
        }
    </style>
@endsection

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
                    <strong>Perfil do Paciente</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content">

        <div class="row m-b-lg m-t-lg">
            <div class="col-md-6">

                <div class="profile-image">
                    <img src="{{asset('admin/img/a4.jpg')}}" class="img-circle circle-border m-b-md" alt="profile">
                </div>
                <div class="profile-info">
                    <div class="">
                        <div>
                            <h2 class="no-margins">
                                {{$patient->name}}
                            </h2>
                            <h4>{{$patient->occupation}}</h4>
                            <small>
                                Alguma Descriacao
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <table class="table small m-b-xs">
                    <tbody>
                    <tr>
                        <td>
                            <strong>142</strong> Projects
                        </td>
                        <td>
                            <strong>22</strong> Followers
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <strong>61</strong> Comments
                        </td>
                        <td>
                            <strong>54</strong> Articles
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>154</strong> Tags
                        </td>
                        <td>
                            <strong>32</strong> Friends
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                <small>Sales in last 24h</small>
                <h2 class="no-margins">206 480</h2>
                <div id="sparkline1">
                    <canvas style="display: inline-block; width: 247.75px; height: 50px; vertical-align: top;"
                            width="247" height="50"></canvas>
                </div>
            </div>
        </div>

        <div class="row m-t-lg">
            <div class="col-lg-12">
                <div class="tabs-container">
                    <div class="tabs" id="tabs">
                        <ul class="nav nav-tabs" id="tab">
                            <li class="active"><a data-toggle="tab" href="#tab-1"> Perfil</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">Informações</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3">Medidas</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-4">Planejamento</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-5">Refeições</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-6">recomendações</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-7">Análise</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-8">Entregáveis</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-9">Preferências</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">

                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ibox float-e-margins">
                                                <div class="ibox-content">

                                                    <h1 class="title">Informações</h1>

                                                    <form method="POST" action="{{route('patients_store')}}">
                                                        {{  csrf_field() }}

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nome Completo</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                    <input type="text" name="name" class="form-control" value="{{$patient->name}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Data Nascimento</label>
                                                                <div class="input-group date">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input id="nascimento" name="birth" type="text"
                                                                           class="form-control" data-provide="datepicker"
                                                                           data-date-format="mm/dd/yyyy" value="{{$patient->birth}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Naturalidade</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                                                    <input type="text" name="from" class="form-control" value="{{$patient->from}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Endereço</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-house"></i></span>
                                                                    <input type="text" name="from" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Telefone</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                                    <input type="text" name="phone" class="form-control"
                                                                           data-mask="(99) 99999-9999" value="{{$patient->phone}}">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Genero</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-male"></i></span>
                                                                    <select class="form-control m-b" name="gender">
                                                                        <option value="0">Masculino</option>
                                                                        <option value="1">Feminino</option>
                                                                        <option value="2">Outros</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Ocupacao</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                                                    <input type="text" name="occupation" class="form-control" value="{{$patient->occupation}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>CEP</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                                    <input type="text" name="zip" class="form-control" value="{{$patient->zip}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>E-mail</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                                                    <input type="text" name="email" class="form-control" value="{{$patient->email}}">
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

<!--
                                    @include('admin.patients.includes.profile-index')
-->
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">

                                    @include('admin.patients.includes.profile-informations')

                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane">
                                <div class="panel-body">

                                    @include('admin.patients.includes.profile-metrics')

                                </div>
                            </div>
                            <div id="tab-4" class="tab-pane">
                                <div class="panel-body">

                                    @include('admin.patients.includes.profile-planning')

                                </div>
                            </div>
                            <div id="tab-5" class="tab-pane">
                                <div class="panel-body">

                                    @include('admin.patients.includes.profile-meal')

                                </div>
                            </div>
                            <div id="tab-6" class="tab-pane">
                                <div class="panel-body">

                                    @include('admin.patients.includes.profile-recomendations')

                                </div>
                            </div>
                            <div id="tab-7" class="tab-pane">
                                <div class="panel-body">

                                    @include('admin.patients.includes.profile-analysis')

                                </div>
                            </div>
                            <div id="tab-8" class="tab-pane">
                                <div class="panel-body">

                                    @include('admin.patients.includes.profile-appointments')

                                </div>
                            </div>
                            <div id="tab-9" class="tab-pane">
                                <div class="panel-body">

                                    @include('admin.patients.includes.profile-preferences')

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>

    <div aria-hidden="true" class="modal inmodal manage-appointment appointment"
         data-create-appointment-url="/remote/partials/professionals/appointments"
         data-new-patient-appointment-url="/remote/partials/professionals/patients/29647/appointments/new"
         id="manage-appointment-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span><span
                                class="sr-only">Fechar</span></button>
                    <div class="modal-title">
                        <div class="title title-new">Agendar nova consulta</div>
                        <div class="title title-edit hidden">Editar consulta agendada</div>
                    </div>
                    <div class="modal-description">
                        <div class="description description-new">Dados para o agendamento de uma nova consulta</div>
                        <div class="description description-edit hidden">Altere os detalhes de agendamento da consulta
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="widget widget-wizard">
                        <div class="widget-header">
                            <div class="wizard">
                                <div class="steps">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="step current target-patient-select-step" data-target-step="1">
                                                <span class="badge number">1</span><span class="title">Selecione o paciente</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="step disabled target-confirm-step" data-target-step="2"><span
                                                        class="badge number">2</span><span class="title">Confirme os dados da consulta</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div class="step-content step1-content">
                                <div class="search-patient">
                                    <form class="simple_form patient-index-form" novalidate="novalidate"
                                          action="/remote/partials/professionals/patients" accept-charset="UTF-8"
                                          method="get"><input name="utf8" type="hidden" value="✓"><input value="5"
                                                                                                         type="hidden"
                                                                                                         name="search[limit]"
                                                                                                         id="search_limit"><input
                                                value="true" type="hidden" name="search[simplified]"
                                                id="search_simplified">
                                        <div class="inline-search-inputs with-margin-bottom">
                                            <div class="form-group string required search_query"><input
                                                        class="form-control string required"
                                                        placeholder="Busque pacientes por nome, profissão, número de identificação ou contato."
                                                        type="text" name="search[query]" id="search_query"></div>
                                            <div class="form-group select required search_tag"><select
                                                        class="form-control select required search-filter filter-with-tags"
                                                        name="search[tag]" id="search_tag">
                                                    <option value="">Todos</option>
                                                    <option value="active">Ativos</option>
                                                </select></div>
                                        </div>
                                    </form>
                                    <div class="search-results patients-index-results"></div>
                                </div>
                            </div>
                            <div class="step-content step2-content hidden">
                                <div id="manage-appointment-form-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="step-actions step2-actions hidden">
                        <div class="pull-left">
                            <button class="btn btn-danger action-delete hidden">Cancelar consulta</button>
                        </div>
                        <button aria-hidden="true" class="btn btn-white action-cancel" data-dismiss="modal">Cancelar
                        </button>
                        <button class="btn btn-primary action-create disabled">Marcar consulta</button>
                        <button class="btn btn-primary action-update hidden">Editar consulta</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="modal inmodal new-conversation-modal" id="new-conversation-modal" role="dialog"
         tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form novalidate="novalidate" class="simple_form conversation" enctype="multipart/form-data"
                      action="/conversations" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden"
                                                                                          value="✓"><input type="hidden"
                                                                                                           name="authenticity_token"
                                                                                                           value="zhhaMkdZqbLK6evHyhpfXfpuoUsQ111aHAfKAnXlgv614hpPwBjfbp1b81oiL3bqsEYv4fhziT8I/I1+4LEg9g==">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span><span
                                    class="sr-only">Fechar</span></button>
                        <div class="modal-title">
                            <div class="title">Enviar mensagem</div>
                        </div>
                        <div class="modal-description">
                            <div class="description">Envie uma mensagem a um dos seus pacientes ou a um grupo de
                                pacientes
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"><label>Enviar para</label>
                                    <div class="input-group">
                                        <div class="input-group-addon patient-input-group-addon"
                                             data-unlimited-patients="false"><i
                                                    class="mdi mdi-account md-18 placeholder-icon hidden"></i><img
                                                    class="patient-avatar"
                                                    src="/assets/fallback/patient_male_thumb_35-cda28e748df774f1157012975e48598d9a641db861d7a7cb7857e40396558d8b.png"><i
                                                    class="mdi mdi-tag-multiple md-18 tag-icon hidden"></i></div>
                                        <div class="form-group string required conversation_recipient_id">
                                            <div class="select2-container select form-control disabled"
                                                 id="s2id_conversation_recipient_id"><a href="javascript:void(0)"
                                                                                        class="select2-choice"
                                                                                        tabindex="-1"> <span
                                                            class="select2-chosen"
                                                            id="select2-chosen-3">Cesar</span><abbr
                                                            class="select2-search-choice-close"></abbr> <span
                                                            class="select2-arrow" role="presentation"><b
                                                                role="presentation"></b></span></a><label
                                                        for="s2id_autogen3" class="select2-offscreen"></label><input
                                                        class="select2-focusser select2-offscreen" type="text"
                                                        aria-haspopup="true" role="button"
                                                        aria-labelledby="select2-chosen-3" id="s2id_autogen3">
                                                <div class="select2-drop select2-display-none field-editable field-dropdown select2-with-searchbox">
                                                    <div class="select2-search"><label for="s2id_autogen3_search"
                                                                                       class="select2-offscreen"></label>
                                                        <input type="text" autocomplete="off" autocorrect="off"
                                                               autocapitalize="off" spellcheck="false"
                                                               class="select2-input" role="combobox"
                                                               aria-expanded="true" aria-autocomplete="list"
                                                               aria-owns="select2-results-3" id="s2id_autogen3_search"
                                                               placeholder=""></div>
                                                    <ul class="select2-results" role="listbox"
                                                        id="select2-results-3"></ul>
                                                </div>
                                            </div>
                                            <select class="select form-control disabled select2-offscreen"
                                                    name="conversation[recipient_id]" id="conversation_recipient_id"
                                                    tabindex="-1" title="">
                                                <option data-is-tag="false"
                                                        data-avatar-url="/assets/fallback/patient_male_thumb_35-cda28e748df774f1157012975e48598d9a641db861d7a7cb7857e40396558d8b.png"
                                                        data-can-be-edited="true" data-generated-email="false"
                                                        data-disabled-messages="false"
                                                        data-disabled-mobile-access="false" value="29647">Cesar
                                                </option>
                                            </select></div>
                                        <div class="form-group hidden conversation_is_tag"><input
                                                    class="form-control hidden" type="hidden"
                                                    name="conversation[is_tag]" id="conversation_is_tag" value="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label>Categoria</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i
                                                    class="material-icons md-18 conversation-category-icon">group</i>
                                        </div>
                                        <div class="form-group string required conversation_conversation_category_id">
                                            <select class="select form-control"
                                                    name="conversation[conversation_category_id]"
                                                    id="conversation_conversation_category_id">
                                                <option data-icon="group" value="3">Acompanhamento</option>
                                                <option data-icon="event" value="2">Consulta</option>
                                                <option data-icon="library_books" value="0">Plano alimentar</option>
                                                <option data-icon="live_help" value="4">Questão</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label>Assunto</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="material-icons md-18">comment</i></div>
                                <div class="form-group string required conversation_subject"><input
                                            class="form-control string required" data-maxlength="255" type="text"
                                            name="conversation[subject]" id="conversation_subject"></div>
                            </div>
                        </div>
                        <div class="form-group"><label>Mensagem</label>
                            <div class="message-body">
                                <div class="form-group text optional conversation_body"><textarea
                                            class="form-control text optional textarea" rows="5" data-maxlength="32000"
                                            name="conversation[body]" id="conversation_body"></textarea></div>
                                <div class="message-attachment hidden"><input class="file optional hidden" type="file"
                                                                              name="conversation[attachment]"
                                                                              id="conversation_attachment"><img></div>
                                <div class="message-types">
                                    <div class="message-type message-type-image" data-placement="top"
                                         data-toggle="tooltip" title="" data-original-title="Inserir anexo"><i
                                                class="material-icons">attach_file</i></div>
                                    <div class="message-type remove-attachment hidden" data-placement="top"
                                         data-toggle="tooltip" title="" data-original-title="Remover anexo"><i
                                                class="material-icons">clear</i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-options checkbox checkbox-circle checkbox-green">
                                <div class="checkbox-inline">
                                    <div class="form-group boolean optional conversation_archived checkbox-container">
                                        <div class="checkbox"><input name="conversation[archived]" type="hidden"
                                                                     value="0"><input class="boolean optional"
                                                                                      type="checkbox" value="1"
                                                                                      name="conversation[archived]"
                                                                                      id="conversation_archived"><label
                                                    class="boolean optional"
                                                    for="conversation_archived">Arquivar</label></div>
                                    </div>
                                </div>
                                <div class="checkbox-inline">
                                    <div class="form-group boolean optional conversation_send_by_email_now checkbox-container">
                                        <div class="checkbox"><input name="conversation[send_by_email_now]"
                                                                     type="hidden" value="0"><input
                                                    class="boolean optional" type="checkbox" value="1"
                                                    name="conversation[send_by_email_now]"
                                                    id="conversation_send_by_email_now"><label class="boolean optional"
                                                                                               for="conversation_send_by_email_now">Notificar
                                                por email</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group hidden conversation_clinic_id"><input class="form-control hidden"
                                                                                 type="hidden"
                                                                                 name="conversation[clinic_id]"
                                                                                 id="conversation_clinic_id"></div>
                    <div class="modal-footer">
                        <button class="btn btn-white pull-left" data-dismiss="modal" type="button">Cancelar</button>
                        <input type="submit" name="commit" value="Enviar mensagem" class="btn btn-primary submit">
                        <button class="btn btn-primary submit-with-tooltip disabled hidden" data-placement="top"
                                data-toggle="tooltip" title=""
                                data-original-title="O envio para esta etiqueta não é permitido porque vai exceder o seu limite de pacientes ativos">
                            Enviar mensagem
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="modal inmodal import-forbidden-foods-modal" id="import-forbidden-foods-modal"
         role="dialog" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span><span
                                class="sr-only">Fechar</span></button>
                    <div class="modal-title">
                        <div class="title">Importar alimentos a evitar</div>
                    </div>
                    <div class="modal-description">
                        <div class="description">Importar alimentos a evitar de outro paciente ou modelo</div>
                    </div>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-justified nav-states">
                        <li class="active"><a data-toggle="tab" href="#patients-forbidden-foods">Pacientes</a></li>
                        <li><a data-toggle="tab" href="#templates-forbidden-foods">Modelos de alimentos a evitar</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="patients-forbidden-foods"><h4>Selecione um paciente do qual
                                importar alimentos</h4>
                            <div class="select2-container import-from-patient" id="s2id_autogen6"><a
                                        href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span
                                            class="select2-chosen" id="select2-chosen-7"><div
                                                class="select2-custom-options"><img
                                                    src="/assets/fallback/patient_male_thumb_35-cda28e748df774f1157012975e48598d9a641db861d7a7cb7857e40396558d8b.png"><span
                                                    class="text">Cesar</span></div></span><abbr
                                            class="select2-search-choice-close"></abbr> <span class="select2-arrow"
                                                                                              role="presentation"><b
                                                role="presentation"></b></span></a><label for="s2id_autogen7"
                                                                                          class="select2-offscreen"></label><input
                                        class="select2-focusser select2-offscreen" type="text" aria-haspopup="true"
                                        role="button" aria-labelledby="select2-chosen-7" id="s2id_autogen7">
                                <div class="select2-drop select2-display-none import-forbidden-foods-modal field-editable field-dropdown select2-with-searchbox">
                                    <div class="select2-search"><label for="s2id_autogen7_search"
                                                                       class="select2-offscreen"></label> <input
                                                type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                spellcheck="false" class="select2-input" role="combobox"
                                                aria-expanded="true" aria-autocomplete="list"
                                                aria-owns="select2-results-7" id="s2id_autogen7_search" placeholder="">
                                    </div>
                                    <ul class="select2-results" role="listbox" id="select2-results-7"></ul>
                                </div>
                            </div>
                            <select class="import-from-patient select2-offscreen" tabindex="-1" title="">
                                <option data-img="/assets/fallback/patient_male_thumb_35-cda28e748df774f1157012975e48598d9a641db861d7a7cb7857e40396558d8b.png"
                                        data-patient-id="29647">Cesar
                                </option>
                                <option data-img="/assets/fallback/patient_male_thumb_35-cda28e748df774f1157012975e48598d9a641db861d7a7cb7857e40396558d8b.png"
                                        data-patient-id="29605">Paciente exemplo
                                </option>
                            </select>
                            <div class="select2-custom-options hidden"><img><span class="text"></span></div>
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn btn-primary import-button import-forbidden-foods-from-patient"
                                        data-patient-id="29647">Importar
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane" id="templates-forbidden-foods"><h4>Ainda não foi criado nenhum modelo</h4>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="modal inmodal save-forbidden-foods-modal" id="save-forbidden-foods-modal"
         role="dialog" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span><span
                                class="sr-only">Fechar</span></button>
                    <div class="modal-title">
                        <div class="title">Salvar alimentos a evitar como modelo</div>
                    </div>
                    <div class="modal-description">
                        <div class="description">Salvar alimentos a evitar como modelo para utilização futura</div>
                    </div>
                </div>
                <div class="modal-body">
                    <form novalidate="novalidate" class="simple_form new_forbidden_food_template"
                          id="new_forbidden_food_template" action="/api/v0/forbidden_food_templates"
                          accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden"
                                                                                         value="✓">
                        <div class="form-group string required forbidden_food_template_name"><input
                                    class="form-control string required" autofocus="autofocus"
                                    placeholder="Nome do modelo de alimentos a evitar" type="text"
                                    name="forbidden_food_template[name]" id="forbidden_food_template_name"></div>
                        <div class="field-select2">
                            <div class="form-group string required forbidden_food_template_forbidden_food_food">
                                <div class="select2-container select2-container-multi form-control string required"
                                     id="s2id_forbidden_food_template_forbidden_food_food">
                                    <ul class="select2-choices">
                                        <li class="select2-search-field"><label for="s2id_autogen8"
                                                                                class="select2-offscreen"></label>
                                            <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                   spellcheck="false" class="select2-input" id="s2id_autogen8"
                                                   placeholder="" style="width: 34px;"></li>
                                    </ul>
                                    <div class="select2-drop select2-drop-multi select2-display-none field-editable field-dropdown">
                                        <ul class="select2-results"></ul>
                                    </div>
                                </div>
                                <input class="form-control string required select2-offscreen" type="text"
                                       name="forbidden_food_template[forbidden_food][food]"
                                       id="forbidden_food_template_forbidden_food_food" tabindex="-1"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><span class="align-right"><button aria-hidden="true" class="btn btn-white"
                                                                            data-dismiss="modal">Cancelar</button><button
                                class="btn btn-primary action-create">Salvar como modelo</button></span></div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="modal inmodal import-other-recommendations-modal"
         id="import-other-recommendations-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span><span
                                class="sr-only">Fechar</span></button>
                    <div class="modal-title">
                        <div class="title">Importar recomendações</div>
                    </div>
                    <div class="modal-description">
                        <div class="description">Importar recomendações de outros pacientes ou modelos</div>
                    </div>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-justified nav-states">
                        <li class="active"><a data-toggle="tab" href="#patients-other-recommendations">Pacientes</a>
                        </li>
                        <li><a data-toggle="tab" href="#templates-other-recommendations">Modelos de recomendações</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="patients-other-recommendations"><h4>Selecione um paciente do
                                qual importar as recomendações</h4>
                            <div class="select2-container import-from-patient" id="s2id_autogen4"><a
                                        href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span
                                            class="select2-chosen" id="select2-chosen-5"><div
                                                class="select2-custom-options"><img
                                                    src="/assets/fallback/patient_male_thumb_35-cda28e748df774f1157012975e48598d9a641db861d7a7cb7857e40396558d8b.png"><span
                                                    class="text">Cesar</span></div></span><abbr
                                            class="select2-search-choice-close"></abbr> <span class="select2-arrow"
                                                                                              role="presentation"><b
                                                role="presentation"></b></span></a><label for="s2id_autogen5"
                                                                                          class="select2-offscreen"></label><input
                                        class="select2-focusser select2-offscreen" type="text" aria-haspopup="true"
                                        role="button" aria-labelledby="select2-chosen-5" id="s2id_autogen5">
                                <div class="select2-drop select2-display-none import-other-recommendations-modal field-editable field-dropdown select2-with-searchbox">
                                    <div class="select2-search"><label for="s2id_autogen5_search"
                                                                       class="select2-offscreen"></label> <input
                                                type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                spellcheck="false" class="select2-input" role="combobox"
                                                aria-expanded="true" aria-autocomplete="list"
                                                aria-owns="select2-results-5" id="s2id_autogen5_search" placeholder="">
                                    </div>
                                    <ul class="select2-results" role="listbox" id="select2-results-5"></ul>
                                </div>
                            </div>
                            <select class="import-from-patient select2-offscreen" tabindex="-1" title="">
                                <option data-img="/assets/fallback/patient_male_thumb_35-cda28e748df774f1157012975e48598d9a641db861d7a7cb7857e40396558d8b.png"
                                        data-patient-id="29647">Cesar
                                </option>
                                <option data-img="/assets/fallback/patient_male_thumb_35-cda28e748df774f1157012975e48598d9a641db861d7a7cb7857e40396558d8b.png"
                                        data-patient-id="29605">Paciente exemplo
                                </option>
                            </select>
                            <div class="select2-custom-options hidden"><img><span class="text"></span></div>
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn btn-primary import-button import-recommendations-from-patient"
                                        data-patient-id="29647">Importar
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane" id="templates-other-recommendations"><h4>Ainda não foi criado nenhum
                                modelo</h4></div>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="modal inmodal save-other-recommendations-modal" id="save-other-recommendations-modal"
         role="dialog" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span><span
                                class="sr-only">Fechar</span></button>
                    <div class="modal-title">
                        <div class="title">Salvar recomendações como modelo</div>
                    </div>
                    <div class="modal-description">
                        <div class="description">Salvar recomendações como modelo para utilização futura</div>
                    </div>
                </div>
                <div class="modal-body">
                    <form novalidate="novalidate" class="simple_form recommendation_template"
                          action="/api/v0/recommendation_templates" accept-charset="UTF-8" data-remote="true"
                          method="post"><input name="utf8" type="hidden" value="✓">
                        <div class="form-group string required recommendation_template_name"><input
                                    class="form-control string required" autofocus="autofocus"
                                    placeholder="Nome do modelo de recomendações" type="text"
                                    name="recommendation_template[name]" id="recommendation_template_name"></div>
                        <div class="form-group text required recommendation_template_recommendations"><textarea
                                    class="form-control text required" rows="7"
                                    name="recommendation_template[recommendations]"
                                    id="recommendation_template_recommendations"></textarea></div>
                    </form>
                </div>
                <div class="modal-footer"><span class="align-right"><button aria-hidden="true" class="btn btn-white"
                                                                            data-dismiss="modal">Cancelar</button><button
                                class="btn btn-primary action-create">Salvar como modelo</button></span></div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="modal inmodal preview-box-modal" data-patient-id="29647" id="food-diary-modal"
         role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span><span
                                class="sr-only">Fechar</span></button>
                    <div class="modal-title">
                        <div class="title">Diário alimentar</div>
                    </div>
                    <div class="modal-description">
                        <div class="description">Registre o diário alimentar do seu paciente</div>
                    </div>
                </div>
                <div class="modal-body">
                    <form novalidate="novalidate" class="simple_form new_food_diary" id="new_food_diary" action="#"
                          accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input
                                type="hidden" name="authenticity_token"
                                value="zhhaMkdZqbLK6evHyhpfXfpuoUsQ111aHAfKAnXlgv614hpPwBjfbp1b81oiL3bqsEYv4fhziT8I/I1+4LEg9g==">
                        <div class="multiple-fields food-diary-fields">
                            <div class="field field-titled date">
                                <div class="field-title">Data de registro</div>
                                <div class="field field-editable field-input"><input
                                            class="form-control string required field-content" type="text"
                                            name="food_diary[date]" id="food_diary_date"></div>
                            </div>
                            <div class="field field-titled meal-picker">
                                <div class="field-title select2-title">
                                    <div class="select2-container" id="s2id_meal_type_select"><a
                                                href="javascript:void(0)" class="select2-choice select2-default"
                                                tabindex="-1"> <span class="select2-chosen" id="select2-chosen-4">Adicionar refeição</span><abbr
                                                    class="select2-search-choice-close"></abbr> <span
                                                    class="select2-arrow" role="presentation"><b
                                                        role="presentation"></b></span></a><label for="s2id_autogen4"
                                                                                                  class="select2-offscreen"></label><input
                                                class="select2-focusser select2-offscreen" type="text"
                                                aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4"
                                                id="s2id_autogen4">
                                        <div class="select2-drop select2-display-none field-editable field-dropdown meal-type-dropdown select2-with-searchbox">
                                            <div class="select2-search"><label for="s2id_autogen4_search"
                                                                               class="select2-offscreen"></label> <input
                                                        type="text" autocomplete="off" autocorrect="off"
                                                        autocapitalize="off" spellcheck="false" class="select2-input"
                                                        role="combobox" aria-expanded="true" aria-autocomplete="list"
                                                        aria-owns="select2-results-4" id="s2id_autogen4_search"
                                                        placeholder=""></div>
                                            <ul class="select2-results" role="listbox" id="select2-results-4"></ul>
                                        </div>
                                    </div>
                                    <select name="meal_type_select" id="meal_type_select" tabindex="-1" title=""
                                            class="select2-offscreen">
                                        <option value=""></option>
                                        <option value="0">Café da manhã</option>
                                        <option value="1">Segundo café da manhã</option>
                                        <option value="2">Brunch</option>
                                        <option value="3">Lanche da manhã</option>
                                        <option value="4">Segundo lanche da manhã</option>
                                        <option value="5">Almoço</option>
                                        <option value="6">Lanche da tarde</option>
                                        <option value="7">Segundo lanche da tarde</option>
                                        <option value="8">Lanche pré-treino</option>
                                        <option value="9">Lanche pós-treino</option>
                                        <option value="10">Lanche após o trabalho</option>
                                        <option value="11">Jantar</option>
                                        <option value="12">Ceia</option>
                                    </select></div>
                                <div class="field field-input">
                                    <div class="field-content editable editable-textarea"></div>
                                </div>
                            </div>
                            <div class="field field-titled observations">
                                <div class="field-title">Observações</div>
                                <div class="field field-editable field-textarea"><textarea
                                            class="form-control text optional field-content"
                                            name="food_diary[observations]" id="food_diary_observations"></textarea>
                                </div>
                            </div>
                            <label class="error hidden">Pelo menos um campo, além da data, deve estar
                                preenchido.</label></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger pull-left action-delete-food-diary">Remover</button>
                    <button aria-hidden="true" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary action-create save-food-diary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="modal inmodal preview-box-modal" data-patient-id="29647" id="eating-behaviour-modal"
         role="dialog" tabindex="-1" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span><span
                                class="sr-only">Fechar</span></button>
                    <div class="modal-title">
                        <div class="title">Comportamento alimentar</div>
                    </div>
                    <div class="modal-description">
                        <div class="description">Registre o comportamento alimentar do seu paciente</div>
                    </div>
                </div>
                <div class="modal-body">
                    <form novalidate="novalidate" class="simple_form new_eating_behaviour" id="new_eating_behaviour"
                          action="#" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden"
                                                                                 value="✓"><input type="hidden"
                                                                                                  name="authenticity_token"
                                                                                                  value="zhhaMkdZqbLK6evHyhpfXfpuoUsQ111aHAfKAnXlgv614hpPwBjfbp1b81oiL3bqsEYv4fhziT8I/I1+4LEg9g==">
                        <div class="multiple-fields">
                            <div class="field field-titled date">
                                <div class="field-title">Data de registro</div>
                                <div class="field field-editable field-input"><input
                                            class="form-control string required field-content" type="text"
                                            name="eating_behaviour[date]" id="eating_behaviour_date"></div>
                            </div>
                            <div class="field field-titled observations">
                                <div class="field-title">Comportamento alimentar</div>
                                <div class="field field-editable field-textarea"><textarea
                                            class="form-control text required field-content"
                                            name="eating_behaviour[text]" id="eating_behaviour_text"></textarea></div>
                            </div>
                            <label class="error hidden">O campo do comportamento alimentar não pode estar vazio.</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger pull-left action-delete-eating-behaviour hidden">Remover</button>
                    <button aria-hidden="true" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary action-create save-eating-behaviour">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="modal inmodal preview-box-modal" id="patient-observation-modal" role="dialog"
         tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span><span
                                class="sr-only">Fechar</span></button>
                    <div class="modal-title">
                        <div class="title">Observações</div>
                    </div>
                    <div class="modal-description">
                        <div class="description description-new">Registre observações do seu paciente</div>
                        <div class="description description-edit hidden">Consulte ou altere as observações do seu
                            paciente
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="hidden" id="patient-observation-form">
                        <form novalidate="novalidate" class="simple_form new_patient_observation"
                              id="new_patient_observation" action="#" accept-charset="UTF-8" method="post"><input
                                    name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token"
                                                                               value="zhhaMkdZqbLK6evHyhpfXfpuoUsQ111aHAfKAnXlgv614hpPwBjfbp1b81oiL3bqsEYv4fhziT8I/I1+4LEg9g==">
                            <div class="multiple-fields">
                                <div class="field field-titled date">
                                    <div class="field-title">Data de registro</div>
                                    <div class="field field-editable field-input"><input
                                                class="form-control string required field-content" type="text"
                                                name="patient_observation[date]" id="patient_observation_date"></div>
                                </div>
                                <div class="field field-titled observations">
                                    <div class="field-title">Observações</div>
                                    <div class="field field-editable field-textarea"><textarea
                                                class="form-control text required field-content" rows="5"
                                                name="patient_observation[observations]"
                                                id="patient_observation_observations"></textarea></div>
                                </div>
                                <label class="error hidden">O campo de observações não pode estar vazio.</label></div>
                        </form>
                    </div>
                    <div id="patient-observation-loading">
                        <div class="sk-wave">
                            <div class="sk-rect sk-rect1"></div>
                            <div class="sk-rect sk-rect2"></div>
                            <div class="sk-rect sk-rect3"></div>
                            <div class="sk-rect sk-rect4"></div>
                            <div class="sk-rect sk-rect5"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger pull-left action-delete">Remover</button>
                    <button aria-hidden="true" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary action-create">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="modal inmodal new-goal goal" id="new-goal-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span><span
                                class="sr-only">Fechar</span></button>
                    <div class="modal-title">
                        <div class="title">Defina uma nova meta</div>
                    </div>
                    <div class="modal-description">
                        <div class="description">As metas são excelentes para manter o seu paciente motivado</div>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="new-goal-form-container"></div>
                </div>
                <div class="modal-footer">
                    <button aria-hidden="true" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary action-create">Definir meta</button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="modal inmodal new-patient patient"
         data-partial-patient-form-url="/remote/partials/professionals/patients/new" id="new-patient-modal"
         role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span><span
                                class="sr-only">Fechar</span></button>
                    <div class="modal-title">
                        <div class="title">Cadastrar paciente</div>
                    </div>
                    <div class="modal-description">
                        <div class="description">Cadastre o seu paciente para um melhor acompanhamento</div>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="new-patient-form-container"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-white pull-left" data-dismiss="modal" type="button">Cancelar</button>
                    <button class="btn btn-primary action-create" id="submit-new-patient-form">Cadastrar paciente
                    </button>
                    <button class="btn btn-primary action-create-patient-and-confirm-appointment hidden"
                            data-create-patient-url="/remote/partials/professionals/patients">Cadastrar paciente e
                        continuar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="modal inmodal manage-appointment appointment"
         data-create-appointment-url="/remote/partials/professionals/appointments"
         data-new-patient-appointment-url="/remote/partials/professionals/patients/29647/appointments/new"
         id="manage-appointment-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span><span
                                class="sr-only">Fechar</span></button>
                    <div class="modal-title">
                        <div class="title title-new">Agendar nova consulta</div>
                        <div class="title title-edit hidden">Editar consulta agendada</div>
                    </div>
                    <div class="modal-description">
                        <div class="description description-new">Dados para o agendamento de uma nova consulta</div>
                        <div class="description description-edit hidden">Altere os detalhes de agendamento da consulta
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="widget widget-wizard">
                        <div class="widget-header">
                            <div class="wizard">
                                <div class="steps">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="step current target-patient-select-step" data-target-step="1">
                                                <span class="badge number">1</span><span class="title">Selecione o paciente</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="step disabled target-confirm-step" data-target-step="2"><span
                                                        class="badge number">2</span><span class="title">Confirme os dados da consulta</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div class="step-content step1-content">
                                <div class="search-patient">
                                    <form class="simple_form patient-index-form" novalidate="novalidate"
                                          action="/remote/partials/professionals/patients" accept-charset="UTF-8"
                                          method="get"><input name="utf8" type="hidden" value="✓"><input value="5"
                                                                                                         type="hidden"
                                                                                                         name="search[limit]"
                                                                                                         id="search_limit"><input
                                                value="true" type="hidden" name="search[simplified]"
                                                id="search_simplified">
                                        <div class="inline-search-inputs with-margin-bottom">
                                            <div class="form-group string required search_query"><input
                                                        class="form-control string required"
                                                        placeholder="Busque pacientes por nome, profissão, número de identificação ou contato."
                                                        type="text" name="search[query]" id="search_query"></div>
                                            <div class="form-group select required search_tag"><select
                                                        class="form-control select required search-filter filter-with-tags"
                                                        name="search[tag]" id="search_tag">
                                                    <option value="">Todos</option>
                                                    <option value="active">Ativos</option>
                                                </select></div>
                                        </div>
                                    </form>
                                    <div class="search-results patients-index-results"></div>
                                </div>
                            </div>
                            <div class="step-content step2-content hidden">
                                <div id="manage-appointment-form-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="step-actions step2-actions hidden">
                        <div class="pull-left">
                            <button class="btn btn-danger action-delete hidden">Cancelar consulta</button>
                        </div>
                        <button aria-hidden="true" class="btn btn-white action-cancel" data-dismiss="modal">Cancelar
                        </button>
                        <button class="btn btn-primary action-create disabled">Marcar consulta</button>
                        <button class="btn btn-primary action-update hidden">Editar consulta</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script>
        $(document).ready(function () {


        });


    </script>

@endsection