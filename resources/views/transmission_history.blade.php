@extends('layouts.design')

@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="block-header align-center">
                <h1>Transmission History</h1>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-white hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">pages</i>
                        </div>
                        <div class="content">
                            <div class="number count-to" data-from="0" data-to="125" data-speed="500"
                                 data-fresh-interval="20"></div>
                            <div class="text">Number of pending approval</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-white hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">restore</i>
                        </div>
                        <div class="content">
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000"
                                 data-fresh-interval="20"></div>
                            <div class="text">Number approved</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-white hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">pages</i>
                        </div>
                        <div class="content">
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000"
                                 data-fresh-interval="20"></div>
                            <div class="text">Total number of users</div>

                        </div>
                    </div>
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

