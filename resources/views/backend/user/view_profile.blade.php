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
                          <h3 class="widget-user-username text-dark"><b>{{ $user->name }}</b></h3>
                          <h6 class="widget-user-desc text-dark">{{ $user->usertype }}</h6>
                        </div>
                        <div class="widget-user-image">
                          <img class="rounded-circle" src="{{ asset('backend/images/profileimage.jpg') }}" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                          <div class="row">
                            <div class="col-sm-4">
                              <div class="description-block">
                                <h5 class="description-header">12K</h5>
                                <span class="description-text">FOLLOWERS</span>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 br-1 bl-1">
                              <div class="description-block">
                                <h5 class="description-header">550</h5>
                                <span class="description-text">FOLLOWERS</span>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                              <div class="description-block">
                                <h5 class="description-header">158</h5>
                                <span class="description-text">TWEETS</span>
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
