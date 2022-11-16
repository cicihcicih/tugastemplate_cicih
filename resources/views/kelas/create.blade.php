@extends('template.master')

@section('judul')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manajemen Class</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New class</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/kelas" method="POST">
                @csrf
                <div class="card-body">                 
                  <div class="form-group">
                    <label for="inputnameclass">Name Class</label>
                    <input type="text" name="nama_class" class="form-control" id="namaclass" placeholder="Enter Nama Siswa">
                  </div>
                  <div class="form-group">
                    <label for="inputJurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="inputJurusan" placeholder="Enter Alamat">
                  </div>                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection