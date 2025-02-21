<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;

class CategoryController extends Controller
{
  // User authentications
  public function __construct()
  {
    return $this->middleware([IsAdmin::class, Authenticate::class]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view("admin.categories.index", [
      "categories" => Category::all(),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view("admin.categories.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      "name" => ["required", "unique:categories"],
    ]);

    Category::create([
      "name" => $request->name,
      "slug" => Str::slug($request->name),
    ]);

    return redirect()
      ->route("admin.categories.index")
      ->with("success", "Category created!");
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function show(Category $category)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function edit(Category $category)
  {
    return view("admin.categories.edit", compact("category"));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Category $category)
  {
    $this->validate($request, [
      "name" => ["required", Rule::unique("categories")->ignore($category)],
    ]);

    $category->update([
      "name" => $request->name,
      "slug" => Str::slug($request->name),
    ]);

    return redirect()
      ->route("admin.categories.index")
      ->with("success", "Category updated!");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function delete(Category $category)
  {
    $category->delete();

    return redirect()
      ->route("admin.categories.index")
      ->with("success", "Category deleted!");
  }
}
