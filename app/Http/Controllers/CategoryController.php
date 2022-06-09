<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $numPage = 3;

        $categoryList = DB::table('category')
            ->paginate($numPage);

        $index = ($request->page - 1) * $numPage;

        return view('category.index', [
            'categoryList' => $categoryList,
            'index' => $index
        ]);
    }

    public function add(Request $request)
    {
        return view('category.add');
    }
    
    public function postAdd(Request $request)
    {
        // var_dump($request->all());
        $name = $request->name;
        // echo $name;
        DB::table('category')->insert([
            'name' => $name
        ]);

        return redirect()->route('category.index');
    }
    
    public function edit(Request $request, $id)
    {
        $item = DB::table('category')
            ->where('id', $id)
            ->get();
        $name = $item[0]->name;

        return view('category.edit', [
            'id' => $id,
            'name' => $name
        ]);
    }
    
    public function postEdit(Request $request)
    {
        $id = $request->id;
        $name = $request->name;

        DB::table('category')
            ->where('id', $id)
            ->update([
                'name' => $name
            ]);

        return redirect()->route('category.index');
    }
    
    public function delete(Request $request, $id)
    {
        $item = DB::table('category')
            ->where('id', $id)
            ->get();
        $name = $item[0]->name;

        return view('category.delete', [
            'id' => $id,
            'name' => $name
        ]);
    }
    
    public function postDelete(Request $request)
    {
        $id = $request->id;

        DB::table('category')
            ->where('id', $id)
            ->delete();

        return redirect()->route('category.index');
    }
}
