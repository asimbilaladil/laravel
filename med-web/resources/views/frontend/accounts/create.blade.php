@extends('frontend.layouts.master')

@section('content')
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

                            <div class="container col-md-8 col-md-offset-2">
                                <div class="well well bs-component">
                                    <legend>New Account for {{ Auth::user()->name }} </legend>
                                    <table>

                                        <tr>

                                            <td>
                                                <a href="{!! route('frontend.accounts.createstep1guarantor') !!}" class="btn btn-primary btn-lg">I am the Patient</a>


                                                <a href="{!! route('frontend.accounts.index') !!}" class="btn btn-warning btn-lg">I am the Guarantor</a>

                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div><!--panel body-->

                    </div><!-- panel -->

                </div><!-- col-md-10 -->

            </div><!-- row -->
@endsection