<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Booklover;
use App\Http\Resources\Booklover as BookloverResource;
class BookloverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=Booklover::paginate(10);
        //return collection of articles as resource
        return BookloverResource::collection($article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article=$request->isMethod('put')?Booklover::findOrFail($request->article_id):new Booklover;
        $article->id = $request->input('article_id');
        $article->name = $request->input('name');
        $article->email = $request->input('email');
        $article->address = $request->input('address');
        $article->choose = $request->input('choose');
        $article->bookAutor = $request->input('bookAutor');
        $article->bookName = $request->input('bookName');
        $article->amount = $request->input('amount');

        if($article->save()){
            return new BookloverResource($article);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $article = Booklover::findOrFail($id);
        return new BookloverResource($article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $article = Booklover::findOrFail($id);
          if($article->delete()){
        return new BookloverResource($article);
    }
    }
}
