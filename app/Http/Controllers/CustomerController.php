<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('grade');
    }

    public function adminCustomer(){
        $customers = Customer::all();
        return view('admin.customer', compact('customers'));
    }

    public function store(Request $request){
        $rules = [
            'nama' => 'required',
            'email' => 'required|email',
            'text' => 'required'
        ];

        $validated = $request->validate($rules);
        Customer::create($validated);

        return redirect('auliamotors/customers/penilaian')->with('success', 'Penilaian anda berhasil di kirim');
    }
}
