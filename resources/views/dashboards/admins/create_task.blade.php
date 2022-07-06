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
                <label class="col-lg-2 control-label">Name of Task</label>
                <div class="col-lg-10">
                <input name="name" class="form-control" value=""/>
                </div>
              </div>
                  @error('name')
                      <p class="alert alert-danger">{{ $message }}</p>
                  @enderror

                  <div class="form-group">
                    <label class="col-lg-2 control-label">Description</label>
                    <div class="col-lg-10">
                    <textarea name="desc" id="summernote" class="form-control" cols="30" rows="30"></textarea>
                    </div>
                  </div>
                      @error('desc')
                          <p class="alert alert-danger">{{ $message }}</p>
                      @enderror

              <div class="form-group">
                  <label class="col-lg-2 control-label">Assign To</label>
                  <div class="col-lg-10">
                      <select name="user_id" class="form-control">
                          {{-- @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->title }}</option>
                          @endforeach --}}
                      </select>
                  </div>
              </div>
                  @error('user_id')
                      <p class="alert alert-danger">{{ $message }}</p>
                  @enderror

                  <div class="form-group">
                    <label class="col-lg-2 control-label">Deadline Date</label>
                    <div class="col-lg-10">
                        add date picker
                    </div>
                </div>
                    @error('user_id')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror

                  <div class="form-group">
                    <label class="col-lg-2 control-label">Status</label>
                    <div class="col-lg-10">
                        <select name="admin_status" class="form-control">
                            <option value="Complete">Complete</option>
                            <option value="InComplete">Incomplete</option>
                        </select>
                    </div>
                </div>
                    @error('admin_status')
                        <p class="alert alert-danger">{{ $message }}</p>
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
