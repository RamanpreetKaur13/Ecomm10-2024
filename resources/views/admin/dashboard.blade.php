@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-6">
            @include('alert_messages')
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-tasks"></i></span>

              <a href="{{ route('admin.categories.index') }}" style="color: #fff">
              <div class="info-box-content">
                <span class="info-box-text">Categories</span>
                <span class="info-box-number">
                  {{ $categoryCount }}
                  {{-- <small>%</small> --}}
                </span>
              </div>
            </a>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-th-list"></i></span>

              <a href="{{ route('admin.brands.index') }}"  style="color: #fff">
              <div class="info-box-content">
                <span class="info-box-text">Brands</span>
                <span class="info-box-number">{{ $brandCount }}</span>
              </div>
            </a>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-tshirt"></i></span>

              <a href="{{ route('admin.products.index') }}"  style="color: #fff">
              <div class="info-box-content">
                <span class="info-box-text">Product</span>
                <span class="info-box-number">{{ $productCount }}</span>
              </div>
            </a>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              {{-- <a href="{{ route('admin.users') }}"> --}}
              <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number">{{ $userCount }}</span>
              </div>
            {{-- </a> --}}
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
