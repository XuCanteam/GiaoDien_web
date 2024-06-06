@extends('layout.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản Lý Trang Liên Hệ</h1>
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
          {{-- Nút ở đây --}}
            <a href="" class="btn btn-sm btn-success">
              <i class="fa fa-plus" aria-hidden="true"></i> Thêm
            </a>
            
            <a href="" class="btn btn-sm btn-danger">
              <i class="fa fa-trash" aria-hidden="true"></i> Xóa
            </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th style="width:30px;" class="text-center">#</th>
              <th>Tên Người Liên Hệ</th>
              <th>Email</th>
              <th>Số Điện Thoại</th>
              <th>Tiêu Đề</th>
              <th>Nội Dung</th>
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
              <td>{{ $row->name }}</td>
              <td>{{ $row->email }}</td>
              <td>{{ $row->phone }}</td>
              <td>{{ $row->title }}</td>
              <td>{{ $row->content }}</td>
              <td class="text-center">
                  <a href="" class="btn btn-sm btn-success">
                    <i class="fa fa-toggle-on" aria-hidden="true"></i>
                  </a>
                  
                  <a href="" class="btn btn-sm btn-info">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </a>
                  
                  <a href="" class="btn btn-sm btn-primary">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                  </a>
                  
                  <a href="" class="btn btn-sm btn-danger">
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
</section>
@endsection