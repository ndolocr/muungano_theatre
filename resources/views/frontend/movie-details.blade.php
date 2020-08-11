@extends('layouts.frontend')

@section('title') Muungano Theatre @endsection

@section('content')
	<div class="container-fluid">		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 movie-poster">
				<img src="{{ asset('storage/img/movies/'. $data->feature_image) }}" alt="Feature Image" width="250" height="375">
			</div>

			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 movie-details">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 movie-title"> {{ $data->title }} </div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 movie-icon"> 
						<ul>
							<li> <i class="fa fa-clock"></i> {{ $data->duration }} mins  </li>
							<li> <i class="fa fa-film"></i> {{ $data->classification }}  </li>
							<li> <i class="fa fa-calendar"></i> {{ $data->year_released }}  </li>
						</ul>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 movie-description-title"> Movie Synopsis </div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 movie-description"> {!! $data->description !!} {!! $data->description !!} </div> 
				</div>

				<div class="row control-buttons">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2" style="text-align: center; margin-bottom: 2%;"> 
						<a href="{{ route('movies', $data->id) }}" class='btn blue btn-outline sbold uppercase'> Watch Now <i class='fa fa-play'></i> </a> 
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2" style="text-align: center; margin-bottom: 2%;"> 
						<a href="/muungano/public/assets/videos/{{ $data->movie_identifier }}" class='btn green btn-outline sbold uppercase' download="{{ $data->title }}"> Download <i class='fa fa-download'></i> </a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection