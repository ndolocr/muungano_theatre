@extends('layouts.app')

@section('title') Movies @endsection

@section('page-title') Movies @endsection

@section('movies-active') start active open @endsection

@section('content')
	<!-- BEGIN ROW -->
    <div class="row" style="max-height: 70vh;"> 
    	<!-- BEGIN COL -->                       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Movie
                <small>view details</small>
            </h3>
            <!-- END PAGE TITLE-->

            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->
            
            <!-- BEGIN ROW -->
            <div class="row">
                
                <!-- BEGIN COL -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    
                    <!-- BEGIN FEATURE IMAGE SECTION -->
                    <div class="show_feature_image">
                        <img src="{{ asset('storage/img/movies/'. $data->feature_image) }}" alt="Feature Image">
                        
                        <table class="table">
                            <tbody>
                                <tr>
                                <td> 
                                    <a href="{{ route('movies-edit', $data->id) }}" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> Edit </a>
                                </td>
                                <td>
                                    <a href="{{ route('movies-delete', $data->id) }}" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> Delete </a>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <!-- END FEATURE IMAGE SECTION -->

                </div>
                <!-- END COL -->
                
                <!-- BEGIN COL -->
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">

                    <!-- BEGIN DETAILS SECTION -->
                    <div class="show_page_details">
                        
                        <!-- BEGIN MOVIE TITLE -->
                        <div class="show_page_title">
                            {{ $data->title }}
                        </div>
                        <!-- END MOVIE TITLE -->

                        <!-- BEGIN DETAILS LIST -->
                        <ul>
                            <li> <div class="fa fa-file"></div> {{ $data->id }} </li>
                            <li> <div class="fa fa-calendar"></div> {{ $data->year_released }} </li>
                            <li> <div class="fa fa-clock"></div> {{ $data->duration }} </li>
                            <li> <div class="fa fa-film"></div> {{ $data->classification }} </li>
                            <li> <div class="fa fa-upload"></div> {{ $data->created_at }} </li>

                        </ul>
                        <!-- END DETAILS LIST -->

                        <div class="clear_float"></div>

                        <!-- BEGIN COL -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                            <!-- BEGIN DESCRIPTION SECTION -->
                            <div class="show_page_description"> {!! $data->description !!} </div>
                            <!-- END DESCRIPTION SECTION -->
                        </div>
                        <!-- END COL --> 
                    </div>
                    <!-- END DETAILS SECTION -->

                </div>
                <!-- END COL -->

            </div>
            <!-- END ROW -->
        </div>
    </div>  
    <!-- END ROW -->
@endsection