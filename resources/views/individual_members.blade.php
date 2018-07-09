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
                        <input type="text" class="form-control text-center" placeholder="Name Search"
                               aria-describedby="basic-addon1">

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control text-center" placeholder="Search ID"
                               aria-describedby="basic-addon1">

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control text-center" placeholder="Registration time"
                               aria-describedby="basic-addon1">

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control text-center" placeholder="Login time"
                               aria-describedby="basic-addon1">

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
                <div class="row">
                    <div>
                        {{--@foreach($penuser as $pend)--}}
                        <div class="col-12 text-center">
                            {{--<img src="/img/{{$pend->profile_image}}" class="img-circle " alt="picture" width="50"--}}
                            <img src="{{asset('img/user.jpg')}}" class="img-circle m-b-10" alt="picture" width="100"
                                 height="100" class="img-responsive"><br>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>

                        {{--<form>--}}
                        {{--<div class="form-group row">--}}
                        {{--<label for="inputEmail3" class="col-md-2 col-form-label">ID</label>--}}
                        {{--<div class="col-md-4">--}}
                        {{--<input type="number" class="form-control" id="inputEmail3">--}}
                        {{--</div>--}}

                        {{--<div class="col-md-6">--}}
                        {{--<textarea class="form-control" id="inputPassword3"></textarea>--}}
                        {{--</div>--}}

                        {{--</div>--}}


                        {{--<div class="form-group row">--}}

                        {{--<div class="clearfix visible"></div>--}}

                        {{--<label for="inputEmail3" class="col-md-2 col-form-label">Name</label>--}}
                        {{--<div class="col-md-4">--}}
                        {{--<input type="text" class="form-control" id="inputEmail3">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                        {{--<label for="inputPassword3" class="col-md-2 col-form-label">Area</label>--}}
                        {{--<div class="col-md-4">--}}
                        {{--<input type="text" class="form-control" id="inputPassword3">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}

                        {{--</div>--}}
                        {{--</form>--}}
                        {{--
                                                <div class="col-6 text-center">
                                                </div>
                        --}}
                        {{--@endforeach--}}

                        <div class="container-fluid">
                            <div class="row">

                                <form class="form-horizontal" role="form">
                                    <div class="container-fluid shadow">
                                        <div class="row">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label control-label-left col-sm-3"
                                                                       for="field2">ID</label>
                                                                <div class="controls col-sm-9">

                                                                    <input id="field2" type="text"
                                                                           class="form-control k-textbox"
                                                                           data-role="text"
                                                                           data-parsley-errors-container="#errId1"><span
                                                                            id="errId1" class="error"></span></div>

                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label control-label-left col-sm-3"
                                                                       for="field3">Name</label>
                                                                <div class="controls col-sm-9">

                                                                    <input id="field3" type="text"
                                                                           class="form-control k-textbox"
                                                                           data-role="text"
                                                                           data-parsley-errors-container="#errId2"><span
                                                                            id="errId2" class="error"></span></div>

                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label control-label-left col-sm-3"
                                                                       for="field4">Area</label>
                                                                <div class="controls col-sm-9">

                                                                    <input id="field4" type="text"
                                                                           class="form-control k-textbox"
                                                                           data-role="text"
                                                                           data-parsley-errors-container="#errId3"><span
                                                                            id="errId3" class="error"></span></div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="controls col-sm-9">

                                                                    <textarea id="field1" rows="3"
                                                                              class="form-control k-textbox"
                                                                              data-role="textarea" data-minwords="4"
                                                                              data-parsley-errors-container="#errId4"></textarea><span
                                                                            id="errId4" class="error"></span></div>

                                                            </div>
                                                            <div class="form-group pull-right">


                                                                <button id="button6" type="button"
                                                                        class="btn btn-primary">Done
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    </tbody>
                    </table>

                </div>
            </div>
        </div>


    </section>



@endsection