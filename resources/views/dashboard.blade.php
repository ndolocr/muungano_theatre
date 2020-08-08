@extends('layouts.app')

@section('title') Dashboard @endsection

@section('page-title') Dashboard @endsection

@section('dashboard-active') start active open @endsection

@section('content')

    <div class="row justify-content-center">
        
        <!-- BEGIN COLUMN -->
        <div class="col-md-12">

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Dashboard
                <small>Statistics</small>
            </h3>
            <!-- END PAGE TITLE-->
        </div>
        <!-- END COLUMN -->

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat blue">
                <div class="visual">
                    <i class="fa fa-film"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="1700">0</span>
                    </div>
                    <div class="desc"> Movies </div>
                </div>
                <a class="more" href="#"> View more
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat red">
                <div class="visual">
                    <i class="fa fa-tv"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="500"></span> 
                    </div>
                    <div class="desc"> Series </div>
                </div>
                <a class="more" href="#"> View more
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
