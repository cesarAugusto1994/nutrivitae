@extends('auth.layout') @section('content')

<div class="loginColumns animated fadeInDown">
	<div class="row">

		<div class="col-md-6">

			<br/>
			<br/>
			<br/>

			<img style="margin-top:20%;max-width:350px;max-height:350px;" src="{{asset('admin/img/RedukLogo/LogoHorizontal.png')}}" alt="" />

			<br/>
			<br/>
			<br/>
		</div>
		<div class="col-md-6">
			<div class="ibox-content">
            <h2 class="text-center">Registrar</h2>
				<form class="m-t" method="POST" role="form" action="{{ route('register') }}">
					{{ csrf_field() }}
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<input type="text" name="name" class="form-control" placeholder="Nome" required=""> @if ($errors->has('name'))
						<span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span> @endif

					</div>
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<input type="email" name="email" class="form-control" placeholder="E-mail" required=""> @if ($errors->has('email'))
						<span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span> @endif


					</div>
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<input type="password" name="password" class="form-control" placeholder="Senha" required=""> @if ($errors->has('password'))
						<span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span> @endif

					</div>

					<div class="form-group">
						<input id="password-confirm" type="password" placeholder="Confirmar Senha" class="form-control" name="password_confirmation"
						 required>
					</div>

					<div class="form-group">
						<div class="checkbox i-checks"><label> <input type="checkbox" required><i></i> Eu aceito os termos e politicas </label></div>
					</div>
					<button type="submit" class="btn btn-primary block full-width m-b">Registrar</button>

					<p class="text-muted text-center"><small>Já tem uma conta?</small></p>
					<a class="btn btn-sm btn-white btn-block" href="{{route('login')}}">Entrar</a>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection