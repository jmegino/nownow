@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--<div class="card">--}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="block-header">
                        <h1>User Registration Approval</h1>
                    </div>
                    <!--   <div class="buttons">
                          <div class="button1">
                          <button onclick="myFunction()">Click me</button>
                          </div>

                          <div class="button2">
                          <button onclick="myFunction()">Click me</button>
                          </div>

                          <div class="button3">
                          <button onclick="myFunction()">Click me</button>
                          </div>

                          </div>
           -->
                    <nav class="buttons">
                        <div class="button1">
                            <button type="button" class="btn btn-primary btn-lg"> <i class="material-icons">chat</i>Large</button>
                        </div>
                        <div class="button2">
                            <button type="button" class="btn btn-primary btn-lg">Large</button>
                        </div>
                        <div class="button3">
                            <button type="button" class="btn btn-primary btn-lg">Large</button>
                        </div>
                    </nav>

                </div>
            </section>


            {{--</div>--}}
        </div>
    </div>
</div>
@endsection
