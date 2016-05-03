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
                                <span style="text-align:center" class="help-block">Please answer the following questions...</span>
                                <label for="insurance" class="col-lg-2 control-label">Current Insurance:</label>
                                <div class="col-lg-10">
                                    <select name="insurance_type_id">
                                        <option value="1">Medicare</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="citizenship" class="col-lg-2 control-label">Citizenship Status:</label>
                                <div class="col-lg-10">
                                    <select name="citizenship_type_id">
                                        <option value="1">Permanent</option>
                                        <option value="2">Alien</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ibhap" class="col-lg-2 control-label">IBHAP in 90 Days:</label>
                                <div class="col-lg-10">
                                    <select name="is_ibhap">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pregnant" class="col-lg-2 control-label">Pregnant:</label>
                                <div class="col-lg-10">
                                    <select name="is_pregnant">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="primary_care" class="col-lg-2 control-label">Primary Care:</label>
                                <div class="col-lg-10">
                                    <select name="has_primary_care">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="victim" class="col-lg-2 control-label">Crime/Liability<br>/WC:</label>
                                <div class="col-lg-10">
                                    <select name="is_victim">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="yearly_income" class="col-lg-2 control-label">yearly_income</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="yearly_income" name="yearly_income" placeholder="Amount of Yearly Income">
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