@extends('layout.admin')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản Lý Banner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-12 text-right">
                        {{-- nút ở đây --}}
                        <a href="" class="btn btn-sm btn-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                        </a>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        {{-- From Thêm ở đây --}}
                        <form action="{{ route('admin.banner.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Tên banner</label>
                                <input type="text" value="" name="name" id="name" class="form-control">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="link">Liên kết</label>
                                <input type="text" value="" name="link" id="link" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="description">Mô tả</label>
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="position">Vị trí</label>
                                <select name="position" id="position" class="form-control">
                                    <option value="0">None</option>
                                    {!! $htmlposition !!}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="image">Hình</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="status">Trạng thái</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="2">Chưa xuất bản</option>
                                    <option value="1">Xuất bản</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="create" class="btn btn-success">Thêm banner</button>
                            </div>
                        </form>
                        

                    </div>
                    <div class="col-md-9">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width:30px;" class="text-center">#</th>
                                    <th style="width: 90px;" class="text-center">Ảnh</th>
                                    <th>Tên Giao Diện</th>
                                    <th>Link</th>
                                    <th>Vị Trí</th>
                                    <th>Mô Tả</th>
                                    <th style="width: 180px;" class="text-center">Chức Năng</th>
                                    <th style="width: 30px;" class="text-center">ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $row)
                                    <tr>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <img src="{{ asset('./image/banner/' . $row->image) }}" class="img-fluid"
                                                alt="{{ $row->image }}">
                                        </td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->link }}</td>
                                        <td>{{ $row->position }}</td>
                                        <td>{{ $row->description }}</td>
                                        @php
                                            $args = ['id' => $row->id];
                                        @endphp
                                        <td class="text-center">

                                            <a href="{{ route('admin.banner.status', $args) }}"
                                                class="btn btn-sm btn-success">
                                                <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                            </a>

                                            <a href="{{ route('admin.banner.show', $args) }}" class="btn btn-sm btn-info">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>

                                            <a href="{{ route('admin.banner.edit', $args) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>

                                            <a href="{{ route('admin.category.delete', $args) }}"
                                                class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>

                                        </td>
                                        <td class="text-center">{{ $row->id }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
