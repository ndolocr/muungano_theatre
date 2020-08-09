@extends('layouts.app')

@section('title') Movies @endsection

@section('page-title') Movies @endsection

@section('movies-active') start active open @endsection

@section('content')
	<!-- BEGIN ROW -->
    <div class="row"> 
    	<!-- BEGIN COL -->                       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Movies
                <small>view all</small>
            </h3>
            <!-- END PAGE TITLE-->

            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->

        	<!-- BEGIN TABLE -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <!-- <th> </th> -->          
                        <th> Movie Title </th>
                        <th> Year Released </th>
                        <th> Movie Duration </th>
                        <th> View </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if($datas)
                        
                        @foreach($datas as $data)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <!--<td> <img src="{{ asset('storage/img/movies/'. $data->feature_image) }}" alt="Feature Image" style="width: 45px;"> </td> -->
                                <td> {{ $data->title }} </td>
                                <td> {{ $data->year_released }} </td>
                                <td> {{ $data->duration}} minutes </td>
                                <td>
                                    <a href="{{ route('movies-show', $data->id) }}" class='btn green btn-outline sbold uppercase'> <i class='fa fa-eye'></i> </a>
                                </td>
                                <td> 
                                    <a href="{{ route('movies-edit', $data->id) }}" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> </a>
                                </td>
                                <td>
                                    <a href="{{ route('movies-delete', $data->id) }}" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="7"> {{ $datas->links() }} </td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="7"> No records Available! </td>
                        </tr>

                    @endif
                                                                                            
                </tbody>
            </table>
        </div>
    </div>  
    <!-- END ROW -->
@endsection