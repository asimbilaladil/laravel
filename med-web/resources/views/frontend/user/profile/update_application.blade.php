@extends('frontend.layouts.master')

@section('content')
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('labels.frontend.user.profile.update_information') }}</div>

                <div class="panel-body">

                    {!! Form::model($user, ['route' => 'frontend.user.profile.update', 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}
                       
                        <input name='name' value='name' type = 'hidden'>
                        <input name='id' value='<?php echo $user->account_id ?>' type = 'hidden'>
                        <input name='factor_id' value='<?php echo $user->id ?>' type = 'hidden'>
                        <div class="form-group">
                            {!! Form::label('name', 'First Name', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('text', 'first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Last Name', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('text', 'last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'DOB', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('date', 'dob', null, ['class' => 'form-control', 'placeholder' => 'DOB']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Account Number', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('text', 'account_number', null, ['class' => 'form-control', 'placeholder' => 'Account Number']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Dependencies', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('text', 'is_dependant', null, ['class' => 'form-control', 'placeholder' => 'Dependencies']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('name', 'Citizenship Status', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('citizenship_type_id', ['1' => 'Permenent' ,'2' => 'Alien'], $user->citizenship_type_id) !!}
                            </div>
                        </div>
                         <div class="form-group">
                            {!! Form::label('name', 'IBHAP in 90 Days', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('is_ibhap', ['1' => 'Yes' ,'0' => 'No'], $user->is_ibhap) !!}
                            </div>
                        </div>
                         <div class="form-group">
                            {!! Form::label('name', 'Pregnant', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('is_pregnant', ['1' => 'Yes' ,'0' => 'No'], $user->is_pregnant) !!}
                            </div>
                        </div>
                         <div class="form-group">
                            {!! Form::label('name', 'Primary Care', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('has_primary_care', ['1' => 'Yes' ,'0' => 'No'], $user->has_primary_care) !!}
                            </div>
                        </div>
                         <div class="form-group">
                            {!! Form::label('name', 'Crime/Liability/WC', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('is_victim', ['1' => 'Yes' ,'0' => 'No'], $user->is_victim) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('name', 'Yearly Income', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::input('text', 'yearly_income', null, ['class' => 'form-control', 'placeholder' => 'Yearly Income']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                 {!! Form::submit(trans('labels.general.buttons.save'), ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}

                </div><!--panel body-->

            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection