<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){}
    public function create()
    {
        return view('book.create');  
    }
    public function store(Request $request){
        $name=$request->name;
        $description=$request->description;
        $price=$request->price;
        $data=[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price
        ];
        Book::create($data);
        return view('book.success');
        
    }
}
