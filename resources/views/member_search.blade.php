@extends('layouts.design')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header align-center">
                <h1>Member Search</h1>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control text-center" placeholder="Name Search" aria-describedby="basic-addon1">

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control text-center" placeholder="Search ID" aria-describedby="basic-addon1">

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control text-center" placeholder="Registration time" aria-describedby="basic-addon1">

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control text-center" placeholder="Login time" aria-describedby="basic-addon1">

                    </div>
                </div>

                {{--<button type="button" class="btn btn-primary ">Primary</button>--}}
                <div class="text-center col-lg-12">
                    <button type="button" class="btn btn-primary btn-lg">Search</button>
                </div>

            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->

            <!-- #END# CPU Usage -->
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
            </div>


        </div>

        <div class="container-fluid">
            <div class="header">
                &nbsp;
            </div>
            <div class="content">
                content goes here
            </div>
        </div>


    </section>

@endsection

