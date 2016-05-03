@extends('frontend.layouts.master')

@section('content')
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="container col-md-8 col-md-offset-2">
                <div class="well well bs-component">
                    <form class="form-horizontal" method="post">
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <fieldset>
                            <legend>New Account for {{ Auth::user()->name }} </legend>

                            <div class="form-group">
                                <span style="text-align:center" class="help-block">Please enter YOUR information!</span>
                                <label for="first_name" class="col-lg-2 control-label">First Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="col-lg-2 control-label">Last Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dob" class="col-lg-2 control-label">DOB</label>
                                <div class="col-lg-10">
                                    <input type="date" class="form-control" id="dob" name="dob">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="is_dependant" class="col-lg-2 control-label">How many dependencies</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="is_dependant" name="is_dependant" placeholder="Number of Dependencies">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="account_number" class="col-lg-2 control-label">Account Number</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="account_number" name="account_number" placeholder="Account Number">
                                    <span class="help-block">It's OK if you don't know it. A specialist can assist you :)</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>

        </div><!--panel body-->

    </div><!-- panel -->

    </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection