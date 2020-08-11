@extends('layouts.frontend')

@section('title') Dashboard @endsection

@section('page-title') Dashboard @endsection

@section('dashboard-active') start active open @endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			@if($data)            
                @foreach($data as $datas)
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 col-xl-2 movie-section">  
						<img src="{{ asset('storage/img/movies/'. $datas->feature_image) }}" alt="Feature Image">
					</div>				
                @endforeach
            @endif
		</div>
	</div>
@endsection