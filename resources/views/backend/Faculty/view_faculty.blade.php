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
				    <h3 class="box-title">Faculty List</h3>
	                <a href="{{ route('faculty.add') }}" style="float: right;" class="mb-5 btn btn-rounded btn-success"> Add Faculty</a>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                        <tr>
                            <th width="5%">SL</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Mobile</th>
                            <th>Gender</th>
                            <th>Join Date</th>
                            <th>Salary</th>

                            <th width="25%">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allData as $key => $employee )
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td> {{ $faculty->name }}</td>
                            <td> {{ $employee->id_no }}</td>
                            <td> {{ $employee->mobile }}</td>
                            <td> {{ $employee->gender }}</td>
                            <td> {{ $employee->join_date }}</td>
                            <td> {{ $employee->salary }}</td>
                            @if(Auth::user()->role == "Admin")
                            <td> {{ $employee->code }}</td>
                            @endif
                            <td>
                            <a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-info">Edit</a>
                            <a target="_blank" href="{{ route('employee.registration.details',$employee->id) }}" class="btn btn-danger">Details</a>

                            </td>

                        </tr>
			            @endforeach

						</tbody>
						<tfoot>

						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->


			</div>
			<!-- /.col -->

        </div>
      </section>
    
    </div>
</div>

@endsection