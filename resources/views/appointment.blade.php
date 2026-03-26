@extends('layouts.master')

@section('content')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Appointment</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                   @foreach($appointments as $appointment)
                    <div class="py-5">
                            <h1 class="display-5 text-white mb-4">{{$appointment['title_'.\App::getLocale()]}}</h1>
                            <p class="text-white mb-0">{{$appointment['description_'.\App::getLocale()]}}</p>
                        </div>
                   @endforeach
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">@lang('word.appointment_title')</h1>
                        @if(Session::has('created'))
                            <p class="alert alert-success">{{ Session::get('created') }}</p>
                        @endif
                        <form action="{{route('admin.make_appointment.store')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" autocomplete="off" name="select_service" style="height: 55px;">
                                        <option selected>@lang('word.appointment_select_service')</option>
                                        <option value="1">@lang('word.appointment_service_first')</option>
                                        <option value="2">@lang('word.appointment_service_second')</option>
                                        <option value="3">@lang('word.appointment_service_third')</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" autocomplete="off" name="select_doctor" style="height: 55px;">
                                        <option selected>@lang('word.appointment_select_doctor')</option>
                                        <option value="1">@lang('word.appointment_doctor_first')</option>
                                        <option value="2">@lang('word.appointment_doctor_second')</option>
                                        <option value="3">@lang('word.appointment_doctor_third')</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="name" autocomplete="off" class="form-control bg-light border-0" placeholder="@lang('word.appointment_select_name')" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" autocomplete="off" class="form-control bg-light border-0" placeholder="@lang('word.appointment_select_email')" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="@lang('word.appointment_select_app_date')" autocomplete="off" name="select_date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="@lang('word.appointment_select_app_time')" autocomplete="off" name="select_time" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">@lang('word.appointment_select_app_btn')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

@endsection