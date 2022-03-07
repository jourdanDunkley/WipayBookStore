<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('listings', [
            'books' => $books
        ]);
    }

    public function search()
    {
        $search = $_GET['query'];
        $searchedBooks = Book::where('title', 'LIKE', '%'.$search.'%')->get();

        return view('search', [
            'books' => $searchedBooks
        ]);
    }

    public function purchase($id)
    {
        $book = Book::find($id); 
        
        $curl = curl_init('https://tt.wipayfinancial.com/plugins/payments/request');
        curl_setopt_array($curl, [
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HEADER => false,
            CURLOPT_HTTPHEADER => [
                'Accept: application/json',
                'Content-Type: application/x-www-form-urlencoded'
            ],
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query([
                'account_number' => '1234567890',
                'avs' => '0',
                'country_code' => 'TT',
                'currency' => 'TTD',
                'data' => '{"a":"b"}',
                'environment' => 'sandbox',
                'fee_structure' => 'customer_pay',
                'method' => 'credit_card',
                'order_id' => 'oid_123-aBc',
                'origin' => 'WiPay-example-app',
                'response_url' => "http://localhost:8000/thankyou/$book->id",
                'total' => $book->price,
            ]),
            CURLOPT_RETURNTRANSFER => true
        ]);
        $result = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($result);

        header("Location: {$result->url}");
        die();
    }

    public function details()
    {
        return view('details');
    }

    public function inventory()
    {
        $books = Book::all();
        return view('inventory', [
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book; 
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->ISBN = $request->input('ISBN');
        $book->price = $request->input('price');
        $book->inventory = $request->input('inventory');
        $book->save();

        return redirect('/dashboard/inventory');
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
        $book = Book::find($id); 
        return view('edit')->with('book', $book);
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
        $book = Book::where('id', $id)->update([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'ISBN' => $request->input('ISBN'),
            'price' => $request->input('price'),
            'inventory' => $request->input('inventory'),
        ]);

        return redirect('/dashboard/inventory');
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
        $book = Book::find($id);
        $book->delete();

        return redirect('/dashboard/inventory');
    }
}
