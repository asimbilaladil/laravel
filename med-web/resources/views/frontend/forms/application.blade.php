@extends('frontend.layouts.master')

@section('content')
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.dashboard') }}</div>

                <div class="panel-body">
                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">New Session</a>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <div class="container col-md-8 col-md-offset-2">
                                <div class="well well bs-component">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <legend>New Account for {{ Auth::user()->name }} </legend>
                                            <div class="form-group">
                                                <label for="first_name" class="col-lg-2 control-label">First Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="first_name" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="last_name" class="col-lg-2 control-label">Last Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="dob" class="col-lg-2 control-label">DOB</label>
                                                <div class="col-lg-10">
                                                    <input type="date" class="form-control" id="dob">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="account_number" class="col-lg-2 control-label">Account Number</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="account_number" placeholder="Account Number">
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