<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $list = Category::where('status', '!=', 0)
            ->select("id", "name", "image", "status", "slug")
            ->orderBy('created_at', 'desc')
            ->get();
        //Xử lý parent_id, sort_order
        $htmlparenid = "";
        $htmlsortorder = "";
        foreach ($list as $row) {
            $htmlparenid .= "<option value='" . $row->id . "'>" . $row->name . "</option>";
            $htmlsortorder .= "<option value='" . ($row->sort_order + 1) . "'>Sau: " . $row->name . "</option>";
        }
        return view("backend.category.index", compact("list", "htmlparenid", "htmlsortorder"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //

        //Lấy thông tin và lưu vào CSDL
        $category = new Category();

        $category->name = $request->name;
        $category->slug = Str::of($request->name)->slug('-');
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->sort_order = $request->sort_order;
        //upload File
        if ($request->image) {
            $exten = $request->file("image")->extension(); //Lấy đuôi của file
            if (in_array($exten, ["png", "jpg", "jpeg", "gif", "webp"])) {
                $filename = $category->slug . "." . $exten;
                $request->image->move(public_path("image/category"), $filename);
                $category->image = $filename;
            }
        }
        //end upload file


        $category->status = $request->status;

        $category->created_at = date('Y-m-d H:i:s'); //Ngày hệ thống
        $category->created_by = Auth::id() ?? 1;

        $category->save(); //lưu vào csdl

        //chuyển hướng trang
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
