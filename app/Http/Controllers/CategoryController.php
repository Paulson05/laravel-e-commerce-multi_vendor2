<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('is_parent', 1)->orderBY('title', 'ASC')->get();
        return view('backend.category.index')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request,[
            'title' => 'required',
            'slug'=> 'required',
            'photo'=> 'required',
            'status'=> 'nullable|in:active, inactive',
            'summary' => 'required',
            'is_parent' => 'sometimes|in:1',
            'parent_id'=> 'nullable',
        ]);


    $data = $request->all();
    $slug=Str::slug($request->input('title'));
     $slug_count=Category::where('slug', $slug)->count();
     if ($slug_count>0){
         $slug = time(). '_'.$slug;
     }
     $data['slug']=$slug;
     $status = Category::create($data);
     if($status){
         return  redirect()->route('category.index')->with('success', 'categoru created successfull');
     }
     else{
        return redirect()->back();

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
    public function getChildByParentID(Request $request, $id){

        $category = Category::find($request->id);
        $child_id = Category::getChildByParentID($request->id);

        if ($category){
          if (count($child_id)<=0){
              return response()->json(['status'=>false,'data'=>null,'msg'=>'']);
          }
          return response()->json(['status'=>true,'data'=>$child_id,'msg'=>'']);
      }
      else{
          return response()->json(['status'=>'false','data'=>null,'msg'=>'category not found']);
      }

    }
}
