<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Requests\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\AccountFormRequest;
use App\Account;
use DB;
class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::where('user_id',auth()->id())
                            ->get();
        return view('frontend.accounts.index',compact('accounts'));
    }

    public function updateApplication($id)
    {
       return view('frontend.user.profile.update_application')
        ->with('user', DB::table('users')
        ->join('accounts', 'accounts.user_id', '=', 'users.id')
        ->join('factors', 'factors.account_id', '=','accounts.id')
        ->select('accounts.*', 'users.*', 'factors.*')
        ->where('accounts.id', '=',  $id)
        ->first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.accounts.create');
    }

    public function createstep1g()
    {
        return view('frontend.accounts.createstep1');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountFormRequest $request)
    {
       $user_id = auth()->id();
        $account = new Account(array(
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'account_number' => $request->get('account_number'),
            'dob' => $request->get('dob'),
            'is_dependant' => $request->get('is_dependant'),
            'user_id' => $user_id
        ));
        $account->save();
        return redirect('accounts/create/step2/patient')->with('status', 'Your ticket has been created! Its unique id is:');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
