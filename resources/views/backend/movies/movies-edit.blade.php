@extends('layouts.app')

@section('title') Movies @endsection

@section('page-title') Movies @endsection

@section('movies-active') start active open @endsection

@section('content')
    <!-- BEGIN ROW -->
    <div class="row">
        <!-- BEGIN COLUMN -->
        <div class="col-md-12">

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Movies
                <small>edit</small>
            </h3>
            <!-- END PAGE TITLE-->
            
            <!-- BEGIN MESSAGES -->
            
            <!-- END MESSAGES -->
            
            <!-- BEGIN FORM CREATION -->
            {!! Form::Open( ['action' => ['AdminMovieController@update', $movie->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}
                
                <!-- BEGIN FIRST FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 320px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Movie Details </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP FOR MOVIE TITLE -->
                                <div class="form-group">
                                    
                                    {{ Form::label('title', 'Movies Title') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-film"></i>
                                        </span>
                                        {{ Form::text('title', $movie->title, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Movie Title']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR MOVIE TITLE -->

                                <!-- BEGIN FORM GROUP FOR YEAR RELEASED -->
                                <div class="form-group">
                                    
                                    {{ Form::label('year_released', 'Year Released') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        {{ Form::number('year_released', $movie->year_released, ['class' => 'form-control', 'id' => 'year_released', 'placeholder' => 'Year Released']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR YEAR RELEASED -->

                                <!-- BEGIN FORM GROUP FOR MOVIE DURATION -->
                                <div class="form-group">
                                    
                                    {{ Form::label('duration', 'Movie Duration') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        {{ Form::number('duration', $movie->duration, ['class' => 'form-control', 'id' => 'duration', 'placeholder' => 'Movie Duration']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR MOVIE DURATION -->

                            </div>
                        
                        </div>
                        <!-- END FORM BODY -->

                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
                <!-- END FIRST FORM SECTION COLUMN -->


                <!-- BEGIN SECOND FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 320px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Movie Details </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP FOR MOVIE CLASSIFICATION -->
                                <div class="form-group">
                                    
                                    {{ Form::label('classification', 'Movie Classification') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-tv"></i>
                                        </span>
                                        {{ Form::text('classification', $movie->classification, ['class' => 'form-control', 'id' => 'classification', 'placeholder' => 'Movie Classification']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR MOVIE CLASSIFICATION -->

                                <!-- BEGIN FORM GROUP FOR FEATURE IMAGE -->
                                <div class="form-group">
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <img src=" {{ asset('storage/assets/img/movies/'. $movie->feature_image) }} " alt="Feature Image" style="width: 100px;">
                                            </div> 
                                        </div>

                                        <div class="col-md-8">
                                            {{ Form::label('feature_image', 'Choose New Movie Poster') }}

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-image"></i>
                                                </span>
                                                {{ Form::file('feature_image', ['class' => 'form-control']) }}
                                            </div>
                                        </div>

                                    </div>  

                                </div>
                                <!-- END FORM GROUP FOR FEATURE IMAGE -->

                            </div>
                        
                        </div>
                        <!-- END FORM BODY -->

                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
                <!-- END SECOND FORM SECTION COLUMN -->


                <!-- BEGIN THIRD FORM SECTION COLUMN-->
                <div class="col-md-12">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 600px">
                        
                        <!-- BEGIN FORM DESCRIPTION -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-info font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Movie Description </span>
                            </div>                                   
                        </div>
                        <!-- END FORM DESCRIPTION -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP FOR MOVIE DESCRIPTION -->
                                <div class="form-group">
                                    
                                    <div class="input-group">
                                        {{ Form::textarea('description', $movie->description, ['class' => 'ckeditor form-control', 'id' => 'description']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR MOVIE DESCRIPTION -->
                                
                                <!-- BEGIN FORM ACTION SECTION -->
                                <div class="form-actions" style="border: none !important">
                                    {{ Form::hidden('_method', 'PUT') }}
                                    {{  Form::submit('Save', ['class' => 'btn blue uppercase']) }}
                                    {{ Form::reset('Cancel', ['class' => 'btn red uppercase']) }}
                                </div>
                                <!-- BEGIN FORM ACTION SECTION -->

                            </div>
                        
                        </div>
                        <!-- END FORM BODY -->

                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
                <!-- END SECOND FORM SECTION COLUMN -->

            {!! Form::close() !!}
            <!-- END FORM CREATION -->
        
        </div>
        <!-- END COLUMN -->
    </div> 
    <!-- END ROW --> 

@endsection