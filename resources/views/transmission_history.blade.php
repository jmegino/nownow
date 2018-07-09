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
            <div class="content pre-scrollable">

                <button type="button" class="btn btn-primary btn-add m-0 add_field_button">Add</button>

                <div class="container-fluid input_fields_wrap">

                    <hr>

                    <div class="col-lg-2">

                        <span>release date</span>
                        <div class="date">2018/01/17 &nbsp;00:00:00</div>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active inactive ">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked/> open
                            </label>
                            <label class="btn btn-primary inactive">
                                <input type="radio" name="options" id="option2"> not open
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <textarea name="transmission" id="inputlg" cols="30" rows="10" class="form-control input-lg"></textarea>
                            {{--<input class="form-control input-lg" id="inputlg" type="text">--}}
                    </div>

                    <div class="col-lg-3 align-center">
                        <button class="btn btn-primary">Approve</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>

                </div>


            </div>
        </div>
    </section>

@endsection

