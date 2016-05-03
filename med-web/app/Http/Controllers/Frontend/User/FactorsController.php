<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Requests\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\FactorFormRequest;
use App\Factor;
use DB;

class FactorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.accounts.create_factors_patient');
    }

    /**
    * Name : success
    */
    public function success()
    {
        return view('frontend.accounts.eligibility');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FactorFormRequest $request)
    {
        $accounts_id = DB::table('accounts')->orderBy('id', 'desc')->first();
        $user_id = auth()->id();
        $factor = new Factor(array(
            'is_victim' => $request->get('is_victim'),
            'insurance_type_id' => $request->get('insurance_type_id'),
            'citizenship_type_id' => $request->get('citizenship_type_id'),
            'is_ibhap' => $request->get('is_ibhap'),
            'is_pregnant' => $request->get('is_pregnant'),
            'has_primary_care' => $request->get('has_primary_care'),
            'yearly_income' => $request->get('yearly_income'),
            'user_id' => $user_id,
            'account_id' => get_object_vars($accounts_id)['id'] ,
        ));

        $factor->save();

        return redirect('accounts/create/eligibility/patient');
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
