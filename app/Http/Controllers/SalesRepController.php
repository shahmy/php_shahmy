<?php

namespace App\Http\Controllers;

use App\Models\SalesRep;
use App\Http\Requests\StoreSalesRepRequest;
use App\Http\Requests\UpdateSalesRepRequest;

class SalesRepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesRep = SalesRep::latest()->paginate(10);
        return view('site.sales_raps.index',compact('salesRep'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.sales_raps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalesRepRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalesRepRequest $request)
    {
        $validated = $request->validated();
        SalesRep::create($validated);

        return redirect()->route('salesreps.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalesRep  $salesRep
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salesRep = SalesRep::find($id);
        return view('site.sales_raps.show',compact('salesRep'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalesRep  $salesRep
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $salesRep = SalesRep::find($id);
        return view('site.sales_raps.edit',compact('salesRep'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalesRepRequest  $request
     * @param  \App\Models\SalesRep  $salesRep
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalesRepRequest $request, $id)
    {
        $validated = $request->validated();

        $salesRep = SalesRep::find($id);

         $salesRep->full_name = $request->full_name;
         $salesRep->email = $request->email;
         $salesRep->tel = $request->tel;
         $salesRep->joined_date = $request->joined_date;
         $salesRep->current_route = $request->current_route;
         $salesRep->comments = $request->comments;

        $salesRep->save();


        return redirect()->route('salesreps.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesRep  $salesRep
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SalesRep::destroy($id);
        return redirect()->route('salesreps.index');
    }
}
