<?php

namespace App\Http\Controllers;

use App\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->today = Carbon::today();
    }

    public function index()
    {
        $customers = Customer::whereDate('created_at', $this->today)
        ->orderBy('id','DESC')
        ->get();
        return view('customer.index', compact('customers'));
    }

    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->category = $request->category;
        $customer->w_kyat = $request->w_kyat;
        $customer->w_pae = $request->w_pae;
        $customer->w_ywae = $request->w_ywae;
        $customer->loan = $request->loan;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->save();

        return redirect('/customer');
    }

    public function destroy(Request $request)
    {
        Customer::find($request->id)->delete();
        return back();
    }
}
