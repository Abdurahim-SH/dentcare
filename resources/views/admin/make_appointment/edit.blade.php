@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Update in Make_appointment</h4>
                                    </div>
                                    <div class="card-body">
                                       <form action="{{ route('admin.make_appointment.update',$make_appointment->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select_Service</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$make_appointment->select_service}}" class="form-control" name="select_service">
                                                    @error('select_service') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select_Doctor</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$make_appointment->select_doctor}}" class="form-control" name="select_doctor">
                                                    @error('select_doctor') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$make_appointment->name}}" class="form-control" name="name">
                                                    @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$make_appointment->email}}" class="form-control" name="email">
                                                    @error('email') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select_Date</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$make_appointment->select_date}}" class="form-control" name="select_date">
                                                    @error('select_date') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select_Time</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$make_appointment->select_time}}" class="form-control" name="select_time">
                                                    @error('select_time') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                <div class="col-sm-12 col-md-7">
                                                    <button class="btn btn-primary">Publish</button>
                                                    <a href="{{route('admin.make_appointment.index')}}" class="btn btn-danger">Back</a>
                                                </div>
                                            </div>
                                       </form>
                                    </div>
                                    </div>
                                </div>
                </div>
            </div>
       </section>
</div>
          

@endsection