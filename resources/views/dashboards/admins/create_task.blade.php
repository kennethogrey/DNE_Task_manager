@extends('dashboards.admins.layouts.admin-layout')
@section('title','New Task')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Create New Task</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.tasks') }}">Tasks</a></li>
            <li class="breadcrumb-item active">New Task</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                @csrf

              <div class="form-group">
                <label class="col-lg-2 control-label">Forum Title</label>
                <div class="col-lg-10">
                <input name="title" class="form-control" value=""/>
                </div>
              </div>
                  @error('title')
                      <p class="alert alert-danger">message</p>
                  @enderror

              <div class="form-group">
                  <label class="col-lg-2 control-label">Forum Category</label>
                  <div class="col-lg-10">
                      <select name="category_id" class="form-control">
                          {{-- @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->title }}</option>
                          @endforeach --}}
                      </select>
                  </div>
              </div>
                  @error('category_id')
                      <p class="alert alert-danger"></p>
                  @enderror


              <div class="form-group">
                <label class="col-lg-2 control-label">Forum</label>
                <div class="col-lg-10">
                <textarea name="desc" id="editor1" class="form-control" cols="30" rows="5"></textarea>
                </div>
              </div>
                  @error('desc')
                      <p class="alert alert-danger"></p>
                  @enderror
              <input type="number" name="user_id" value="" hidden>

              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" class="btn btn-success">Add</button>
                  <a href="/dashboard/home" class="btn btn-danger">Cancel</a>
                </div>
              </div>
            </form>
          </div>
          <!-- /.card -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection
