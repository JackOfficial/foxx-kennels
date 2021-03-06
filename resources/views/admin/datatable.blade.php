@extends('admin.layouts.app')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Photo</th>
                    <th>Created_at</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  <tr>
                    <td>1</td>  
                    <td>Dog Breed</td>
                    <td>Photo</td>
                    <td>Created at</td>
                    <td>
                        <a href="" class="btn btn-primary"><span><i class="fa fa-edit"></i></span>Edit</a>
                        &nbsp;<a href="" class="btn btn-danger"><span><i class="fa fa-trash"></i></span> Delete</a></td>
                  </tr>

                  <tr>
                    <td>2</td>  
                    <td>Dog Breed</td>
                    <td>Photo</td>
                    <td>Created at</td>
                    <td>
                        <a href="" class="btn btn-primary"><span><i class="fa fa-edit"></i></span>Edit</a>
                        &nbsp;<a href="" class="btn btn-danger"><span><i class="fa fa-trash"></i></span> Delete</a></td>
                  </tr>

                  <tr>
                    <td>1</td>  
                    <td>Dog Breed</td>
                    <td>Photo</td>
                    <td>Created at</td>
                    <td>
                        <a href="" class="btn btn-primary"><span><i class="fa fa-edit"></i></span>Edit</a>
                        &nbsp;<a href="" class="btn btn-danger"><span><i class="fa fa-trash"></i></span> Delete</a></td>
                  </tr>
                  <tr>
                    <td>1</td>  
                    <td>Dog Breed</td>
                    <td>Photo</td>
                    <td>Created at</td>
                    <td>
                        <a href="" class="btn btn-primary"><span><i class="fa fa-edit"></i></span>Edit</a>
                        &nbsp;<a href="" class="btn btn-danger"><span><i class="fa fa-trash"></i></span> Delete</a></td>
                  </tr>
                  <tr>
                    <td>1</td>  
                    <td>Dog Breed</td>
                    <td>Photo</td>
                    <td>Created at</td>
                    <td>
                        <a href="" class="btn btn-primary"><span><i class="fa fa-edit"></i></span>Edit</a>
                        &nbsp;<a href="" class="btn btn-danger"><span><i class="fa fa-trash"></i></span> Delete</a></td>
                  </tr>
                  

              
                  </tbody>
                  <tfoot>
                  <tr>
                 <th>#</th>
                    <th>Category</th>
                    <th>Photo</th>
                    <th>Created_at</th>
                    <th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection