@extends('layout')

@section('content')

	<div class="slid">
		<div class="container">	
			<h3 class="wthree-title">Escolha o seu plano</h3>
			<div class="slid-row w3-agileits">
				<div class="col-md-4 slid-grids">
					<h4>Planos alimentares</h4>
					<h3>R$52x 12*</h3>
					<h5>Simplifique o gerenciamento de informações e a criação de planos alimentares</h5>
					<div class="w3lsmore">
						<a href="single.html" class="button-pipaluk button--inverted"> Saiba mais</a>
					</div>	
				</div>
				<div class="col-md-4 slid-grids">
					<h4>Acompanhamento</h4>
					<h3>R$84x 12*</h3>
					<h5>Acompanhe mais facilmente os seus pacientes e mantenha-os motivados</h5>
					<div class="w3lsmore">
						<a href="{{ route('plano', ['id' => 1])}}" class="button-pipaluk button--inverted"> Saiba mais</a>
					</div>	
				</div>
				<div class="col-md-4 slid-grids">
					<h4>Teste 15 Dias</h4>
					<h3>$0</h3>
					<h5>FREE</h5>
					<div class="w3lsmore">
						<a href="single.html" class="button-pipaluk button--inverted"> Saiba mais</a>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

@endsection