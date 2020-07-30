<?php
         
namespace App\Http\Controllers;

          
use App\User;
use App\Book;
use App\langdata;
use DB;
use Illuminate\Http\Request;
use DataTables;
        
class UserCurdOperation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function index1(Request $request)
    {
        //$showdata = langdata::latest()->get();
       
        //$showdata = DB::table('langtable')->selectRaw('title_' . LaravelLocalization::getCurrentLocale() . ' as title')->get();
        
        //$texts = langdata::all()->select('title_' . config('app.locale'), 'text_' . config('app.locale'));
        //$texts = langdata::all()->select('title_en', 'text_en');
        $texts = langdata::select('title_'.config('app.locale'),'text_'.config('app.locale'))->get();	
        return view('welcome', compact('texts'));
        //return $showdata;
        //return view('books', compact('$showdata'));
        

    }
    public function index(Request $request)
    {
   
        if ($request->ajax()) {
            $data = Book::latest()->get();
            dd($data);
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('books');
    }
     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Book::updateOrCreate(['id' => $request->book_id],
                ['title' => $request->title, 'author' => $request->author]);        
   
        return response()->json(['success'=>'Book saved successfully.']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return response()->json($book);
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
			Book::find($id)->delete();
		 
			return response()->json(['success'=>'Book deleted successfully.']);
    }
}