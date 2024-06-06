<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBrandRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Brand::where('status', '!=', 0)
            ->select("id", "name", "image", "description", "slug", "status")
            ->orderBy('created_at', 'desc')
            ->get();
        //Xử lý parent_id, sort_order
        $htmlparenid = "";
        $htmlsortorder = "";
        foreach ($list as $row) {
            $htmlsortorder .= "<option value='" . ($row->sort_order + 1) . "'>Sau: " . $row->name . "</option>";
        }
        return view("backend.brand.index", compact("list", "htmlparenid", "htmlsortorder"));
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
    public function store(StoreBrandRequest $request)
    {
        //
        //Lấy thông tin và lưu vào CSDL
        $brand = new Brand();

        $brand->name = $request->name;
        $brand->slug = Str::of($request->name)->slug('-');
        $brand->description = $request->description;
        $brand->sort_order = $request->sort_order;
        //upload File
        if ($request->image) {
            $exten = $request->file("image")->extension(); //Lấy đuôi của file
            if (in_array($exten, ["png", "jpg", "jpeg", "gif", "webp"])) {
                $filename = $brand->slug . "." . $exten;
                $request->image->move(public_path("image/brand"), $filename);
                $brand->image = $filename;
            }
        }
        //end upload file


        $brand->status = $request->status;

        $brand->created_at = date('Y-m-d H:i:s'); //Ngày hệ thống
        $brand->created_by = Auth::id() ?? 1;

        $brand->save(); //lưu vào csdl
        //chuyển hướng trang
        return redirect()->route('admin.brand.index');
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
