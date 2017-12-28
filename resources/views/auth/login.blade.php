@extends('auth.layout') @section('content')

<div class="loginColumns animated fadeInDown">
	<div class="row">

		<div class="col-sm-12 col-md-6">

			<br/>
			<br/>
			<br/>

			<img style="max-width:350px;max-height:350px;" src="{{asset('admin/img/RedukLogo/LogoHorizontal.png')}}" alt="" />

			<br/>
			<br/>
			<br/>
			
		</div>
		<div class="col-sm-12 col-md-6">
			<div class="ibox-content">
				<h2 class="text-center">Login</h2>
				<form class="m-t" method="POST" role="form" action="{{ route('login') }}">
					{{ csrf_field() }}
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<input type="email" name="email" class="form-control" placeholder="E-mail" required=""> 
						@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span> 
						@endif

					</div>
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<input type="password" name="password" class="form-control" placeholder="Senha" required=""> @if ($errors->has('password'))
						<span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span> @endif

					</div>

					<button type="submit" class="btn btn-primary block full-width m-b">Login</button>

					<p class="text-muted text-center"><a href="#"><small>Esqueceu a sua Senha?</small></a></p>
					<p class="text-muted text-center"><small>Ainda não tem uma conta?</small></p>
					<a class="btn btn-sm btn-white btn-block" href="{{route('register')}}">Registrar</a>
				</form>
			</div>
		</div>
	</div>

</div>


@endsection