@extends('admin.admin_master')
@section('admin')



<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">
        <div class="row">



          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">User Table</h3>
                <a href="{{ route('user.add') }}" style="float: right;" class="mb-5 btn btn-rounded btn-success">Add User</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Role</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th width="20%">Action</th>

                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($UserData as $key => $item)

                          <tr>
                              <td>{{ $key+1 }}</td>
                              <td>{{ $item->usertype }}</td>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->email }}</td>
                              <td>
                                  <a href="" class="btn btn-info">Edit</a>
                                  <a href="" class="btn btn-danger">Delete</a>
                              </td>

                          </tr>

                          @endforeach



                      </tbody>
                      <tfoot>
                          <tr>
                              <th>SL</th>
                              <th>Role</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Action</th>

                          </tr>
                      </tfoot>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->


            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->

    </div>
</div>

@endsection
