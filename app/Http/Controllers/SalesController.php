<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Book;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::all();

        return view('sales', [
            'sales' => $sales
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        Book::find($id)->decrement('inventory');
        $sale = Sale::create([
            'card' => $_GET['card'],
            'currency' => $_GET['currency'],
            'customer_name' => $_GET['customer_name'],
            'order_id' => $_GET['order_id'],
            'status' => $_GET['status'],
            'transaction_id' => $_GET['transaction_id'],
            'total' => $_GET['total'],
        ]);
    
        return redirect('/dashboard');
    }
}
