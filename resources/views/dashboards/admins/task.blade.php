@extends('dashboards.admins.layouts.admin-layout')
@section('title','Tasks')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tasks</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Task</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
    <div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-primary">
                    <i class="nav-icon fas fa-file-pdf" style="color:#ff4d4d"></i>
                        <span>Export pdf</span>
                </a>
                <a href="{{ route('admin.create_task') }}" class="btn btn-primary">
                    <i class="nav-icon fas fa-plus"></i>
                        <span>Add New Task</span>
                </a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Trident</td>
                <td>Internet
                Explorer 4.0
                </td>
                <td>Win 95+</td>
                <td> 4</td>
                <td>X</td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet
                Explorer 5.0
                </td>
                <td>Win 95+</td>
                <td>5</td>
                <td>C</td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet
                Explorer 5.5
                </td>
                <td>Win 95+</td>
                <td>5.5</td>
                <td>A</td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet
                Explorer 6
                </td>
                <td>Win 98+</td>
                <td>6</td>
                <td>A</td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet Explorer 7</td>
                <td>Win XP SP2+</td>
                <td>7</td>
                <td>A</td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td>Win XP</td>
                <td>6</td>
                <td>A</td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Firefox 1.0</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.7</td>
                <td>A</td>
            </tr>
            </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div>
                    <p>Showing <span class="fw-bolder">5</span> of <span class="fw-bolder">25</span> entries</p>
                </div>
                <div>
                    <ul class="pagination">
                        <li class="page-item"><a href="#" class="page-link">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
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
