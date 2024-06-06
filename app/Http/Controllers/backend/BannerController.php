<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBannerRequest;
use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Banner::where('status', '!=', 0)
            ->select("id", "name", "image", "link", "slug", "position", "description")
            ->orderBy('created_at', 'desc')
            ->get();
        //Xử lý parent_id, sort_order
        $htmlposition = "";
        foreach ($list as $row) {
            $htmlposition .= "<option value='" . ($row->position) . "'>Sau: " . $row->name . "</option>";
        }
        return view("backend.banner.index", compact("list", "htmlposition"));
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
    public function store(StoreBannerRequest $request)
    {
        //
        //Lấy thông tin và lưu vào CSDL
        $banner = new Banner();

        $banner->name = $request->name;
        $banner->slug = Str::of($request->name)->slug('-');
        $banner->description = $request->description;
        $banner->link = $request->link;
        $banner->position = $request->position;

        //upload File
        if ($request->image) {
            $exten = $request->file("image")->extension(); //Lấy đuôi của file
            if (in_array($exten, ["png", "jpg", "jpeg", "gif", "webp"])) {
                $filename = $banner->slug . "." . $exten;
                $request->image->move(public_path("image/banner"), $filename);
                $banner->image = $filename;
            }
        }
        //end upload file

        $banner->status = $request->status;
        $banner->created_at = date('Y-m-d H:i:s'); //Ngày hệ thống
        $banner->created_by = Auth::id() ?? 1;

        $banner->save(); //lưu vào csdl
        //chuyển hướng trang
        return redirect()->route('admin.banner.index');
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
