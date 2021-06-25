<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use PDF;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalStudents = DB::table('students')->get();
        $allBook = Library::orderBy('bookname', 'asc')->get();
        return view('library.index')->with([
            'allBook' => $allBook,
            'totalStudent' => $totalStudents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('library.new-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookdetail = array(
            'bookname' => $request->input('book_name'),
            'author' => $request->input('author'),
            'quantity' => $request->input('quantity'),
            'issued_by' => $request->input('issued_by'),
            'issued_date' => (int)$request->input('issued_date'),
        );
        if($request->has('cover_image')){
            $extension = ".".$request->cover_image->getClientOriginalExtension();
            $name = basename($request->cover_image->getClientOriginalName(),$extension).time();
            $name = $name.$extension;
            $path = $request->cover_image->storeAs('public/images/book',$name);
            $bookdetail['cover_image']= $name;
        };
        //dd($staffdetail);
        if(Library::create($bookdetail)){
            return redirect()->route('library.index')->with('msg','Book Added Successfully!!');
        }else{
            return redirect()->back()->with('msg','Error Occured!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library $library)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $library, $id)
    {
        $bookdetail = DB::table('libraries')->where('id', $id)->get();
        return view('library.edit-book')->with([
            'bookdetail' => $bookdetail,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $library, $id)
    {
        $updateBook = array(
            'bookname' => $request->input('bookname'),
            'author' => $request->input('author'),
            'quantity'=> (int)$request->input('quantity'),
            'issued_by' => $request->input('issued_by'),
            'issued_date' => $request->input('issued_date'),
        );
        //for thumbnail update
        if($request->has('cover_image')){
            $extension = ".".$request->cover_image->getClientOriginalExtension();
            $name = basename($request->cover_image->getClientOriginalName(),$extension).time();
            $name = $name.$extension;
            $path = $request->cover_image->storeAs('public/images/book',$name);
            $thumbnailName = $name;
        }else{
            $thumbnail = DB::table('libraries')->where('id', $id)->pluck('cover_image');
            $thumbnailName = $thumbnail[0];
        }
        $updateBook['cover_image'] = $thumbnailName;

        //update all students data
        if(Library::where('id', $id)->update($updateBook)){
            return redirect()->route('library.index')->with('msg','Book Updated Successfully!!');
        }else{
            return redirect()->back()->with('msg','Error in updating Book');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $library, $id)
    {
        if(Library::where('id',$id)->forceDelete()){
            return redirect()->back()->with('msg','Book deleted Successfully!!');
        }else{
            return redirect()->back()->with('msg','Error in deleting Book!!');
        }
    }

    public function borrow(Library $library){
        $students = Student::all();
        $books = Library::all();
        return view('library.borrow')->with([
            'students' => $students,
            'books' => $books
        ]);
    }

    public function borrowed(Request $request, Library $library) {
        $borrowed_book = array(
            'book_id'       => $request->input('book'),
            'student_id'    => $request->input('student'),
            'author_name'   => $request->input('author'),
            'qty'           => (int)$request->input('quantity'),
            'borrowed_date' => $request->input('borrowed_date'),
        );

        $totalBook = DB::table('libraries')->where('id', $borrowed_book['book_id'])->get('quantity');
        $totalQuantity = $totalBook[0]->quantity;
        $borrowQuantity = $borrowed_book['qty'];

        if($totalQuantity >= $borrowQuantity){
            $remainningBook = $totalQuantity - $borrowQuantity;
            $needUpdatedBook = Library::find($borrowed_book['book_id']);
            $needUpdatedBook->quantity = $remainningBook;
            $saveUpdatedQuantity = $needUpdatedBook->save();
            $borrowStore = DB::table('borrow_book')->insert($borrowed_book);

            if($saveUpdatedQuantity && $borrowStore) {
                return redirect()->route('library.index')->with('msg','Book Borrowed Successfully!!');
            }
        }else{
            return redirect()->route('library.index')->with('msg','Not Enough Book available!');
        } 
    }

    public function borrowedTable()
    {
        $totalStudents = DB::table('students')->get();
        $allBorrowedBook = DB::table('borrow_book')->orderBy('id', 'asc')->get();
    
         return view('library.borrowtable')->with([
            'allBorrowedBook' => $allBorrowedBook,
            'totalStudent' => $totalStudents
        ]);
    }

    public function returnBook($id)
    {
        $bookReturned = DB::table('borrow_book')->where('id', $id)->get();
        $students = Student::all();
        $books = Library::all();
        return view('library.return')->with([
            'students' => $students,
            'books' => $books,
            'bookReturned' => $bookReturned
        ]);
    }

    
    public function bookReturned()
    {
        
    }

    public function displayReport($id)
    {
        $data = DB::table('borrow_book')->where('id', $id)->get();
        $pdf = PDF::loadView('library.report', compact('data'));
        return $pdf->download('report.pdf');
    }

   

 }
