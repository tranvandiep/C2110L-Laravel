<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $numPage = 3;

        // $categoryList = DB::table('category')
        //     ->paginate($numPage);
        $categoryList = Category::paginate($numPage);

        if(!isset($request->page) || $request->page <= 0) {
            $request->page = 1;
        }

        $index = ($request->page - 1) * $numPage;

        return view('category.index', [
            'categoryList' => $categoryList,
            'index' => $index,
            'title' => "Category Page"
        ]);
    }

    public function add(Request $request)
    {
        return view('category.add', [
            'title' => "Add Category Page"
        ]);
    }
    
    public function postAdd(Request $request)
    {
        // var_dump($request->all());
        $name = $request->name;
        // echo $name;
        // DB::table('category')->insert([
        //     'name' => $name
        // ]);
        Category::insert([
            'name' => $name
        ]);

        return redirect()->route('category.index');
    }
    
    public function edit(Request $request, $id)
    {
        // $item = DB::table('category')
        //     ->where('id', $id)
        //     ->get();
        // $name = $item[0]->name;
        $item = Category::find($id);
        $name = $item->name;

        return view('category.edit', [
            'id' => $id,
            'name' => $name,
            'title' => "Edit Category Page"
        ]);
    }
    
    public function postEdit(Request $request)
    {
        $id = $request->id;
        $name = $request->name;

        // DB::table('category')
        //     ->where('id', $id)
        //     ->update([
        //         'name' => $name
        //     ]);
        Category::where('id', $id)
            ->update([
                'name' => $name
            ]);

        return redirect()->route('category.index');
    }
    
    public function delete(Request $request, $id)
    {
        // $item = DB::table('category')
        //     ->where('id', $id)
        //     ->get();
        // $name = $item[0]->name;
        $item = Category::find($id);
        $name = $item->name;

        return view('category.delete', [
            'id' => $id,
            'name' => $name,
            'title' => "Delete Category Page"
        ]);
    }
    
    public function postDelete(Request $request)
    {
        $id = $request->id;

        // DB::table('category')
        //     ->where('id', $id)
        //     ->delete();
        Category::where('id', $id)
            ->delete();

        return redirect()->route('category.index');
    }
}
