@extends('frontend.layouts.master')

@section('content')
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.dashboard') }}</div>

                <div class="panel-body">

                    <div class="container col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2> Accounts  </h2>
                            </div>
                            {{--@if ($accounts>isEmpty())--}}
                                {{--<p> There is no account.</p>--}}
                            {{--@else--}}
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>DOB</th>
                                        <th>Account Number</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($accounts as $account)
                                        <tr>
                                            <td>{!! $account->id !!} </td>
                                            <td>{!! $account->first_name !!}</td>
                                            <td>{!! $account->last_name !!}</td>
                                            <td>{!! $account->dob !!}</td>
                                            <td>{!! $account->account_number !!}</td>
                                            <td class = 'btn btn-primary'><a href="accounts/update/{{$account->id}}" style="color:white">Edit</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            {{--@endif--}}
                        </div>
                    </div>
                </div><!-- col-md-10 -->

            </div><!-- row -->

    </div>

    </div>
@endsection