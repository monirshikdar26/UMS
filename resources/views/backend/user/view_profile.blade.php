@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">

        <!-- Main Content -->
        <section>
            <div class="row">
                <div class="col-12">

                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="bg-black widget-user-header">
                          <h3 class="widget-user-username text-dark"><b>User Name: {{ $user->name }}</b></h3>
                          <a href="{{ route('profile.edit') }}" style="float: right;" class="mb-5 btn btn-rounded btn-success"> Edit Profile</a>
                          <h6 class="widget-user-desc text-dark">UserType: {{ $user->usertype }}</h6>
                          <h6 class="widget-user-desc text-dark">UserEmail: {{ $user->email }}</h6>
                        </div>
                        <div class="widget-user-image">
                          <img class="rounded-circle" src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image): url('upload/no_image.jpg') }}" style="height: 80px; width:80px" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                          <div class="row">
                            <div class="col-sm-4">
                              <div class="description-block">
                                <h5 class="description-header">Gender</h5>
                                <span class="description-text">{{ $user->gender }}</span>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 br-1 bl-1">
                              <div class="description-block">
                                <h5 class="description-header">Mobile No</h5>
                                <span class="description-text">{{ $user->mobile }}</span>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                              <div class="description-block">
                                <h5 class="description-header">Address</h5>
                                <span class="description-text">{{ $user->address }}</span>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                      </div>

                </div>
            </div>
        </section>
        <!-- end main content -->
    </div>
</div>
@endsection
