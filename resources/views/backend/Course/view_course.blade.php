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
                 <a href="" style="float: right;" class="mb-5 btn btn-rounded btn-success">Add Course</a>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">
                     <table id="example1" class="table table-bordered table-striped">
                       <thead>
                           <tr>
                               <th width="5%">SL</th>
                               <th>Course Name</th>
                               <th>Course Code</th>
                               <th width="25%">Action</th>
 
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($UserData as $key => $item)
 
                           <tr>
                               <td>{{ $key+1 }}</td>
                              
                               <td>{{ $item->cname }}</td>
                               <td>{{ $item->ccode }}</td>
                               <td>
                                   <a href="{{ route('user.edit',$item->id) }}" class="btn btn-info">Edit</a>
                                   <a href="{{ route('user.delete',$item->id) }}" class="btn btn-danger" id="delete">Delete</a>
                               </td>
 
                           </tr>
 
                           @endforeach
 
 
 
                       </tbody>
                       <tfoot>
                           <tr>
                               <th>SL</th>
                               <th>Course Name</th>
                               <th>Course Code</th>
                              
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
        </div>
      </section>
    
    </div>
</div>

@endsection