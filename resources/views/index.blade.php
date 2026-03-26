@extends('layouts.master')

@section('content')


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('asset/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">@lang('word.carousel_title')</h5>
                            <h1 class="display-4 text-white mb-md-5 animated zoomIn">@lang('word.carousel_description')</h1>
                            <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">@lang('word.carousel_app_btn')</a>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">@lang('word.carousel_contact_btn')</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('asset/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">@lang('word.carousel_title')</h5>
                            <h1 class="display-4 text-white mb-md-5 animated zoomIn">@lang('word.carousel_description')</h1>
                            <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">@lang('word.carousel_app_btn')</a>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">@lang('word.carousel_contact_btn')</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4">
                    <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">@lang('word.opening_hours_title')</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">@lang('word.opening_hours_date_first')</h6>
                            <p class="mb-0"> 8:00am - 9:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">@lang('word.opening_hours_date_second')</h6>
                            <p class="mb-0"> 8:00am - 7:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">@lang('word.opening_hours_date_third')</h6>
                            <p class="mb-0"> 8:00am - 5:00pm</p>
                        </div>
                        <a class="btn btn-light" href="">@lang('word.opening_hours_date_btn')</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">@lang('word.search_doctor_title')</h3>
                        <div class="date mb-3" id="date" data-target-input="nearest">
                            <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                placeholder="@lang('word.search_doctor_input')" data-target="#date" data-toggle="datetimepicker" style="height: 40px;">
                        </div>
                        <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                            <option selected>@lang('word.search_doctor_select')</option>
                            <option value="1">@lang('word.search_doctor_select_value')</option>
                            <option value="2">@lang('word.search_doctor_select_value_second')</option>
                            <option value="3">@lang('word.search_doctor_select_value_third')</option>
                        </select>
                        <a class="btn btn-light" href="">@lang('word.search_doctor_btn')</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-danger d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">@lang('word.make_appointment_title')</h3>
                        <p class="text-white">@lang('word.make_appointment_content')</p>
                        <h2 class="text-white mb-0">+998994612245</h2>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <!-- Banner Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                @foreach($abouts as $about)
                    <div class="col-lg-7">
                        <div class="section-title mb-4">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">{!! $about['title_'.\App::getLocale()] !!}</h5>
                            <h1 class="display-5 mb-0">{!! $about['description_'.\App::getLocale()] !!}</h1>
                        </div>
                        <h4 class="text-body fst-italic mb-4">{!! $about['content_'.\App::getLocale()] !!}</h4>
                        <p class="mb-4">{!! $about['content_body_'.\App::getLocale()] !!}</p>
                        <div class="row g-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Award Winning</h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff</h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Opened</h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                            </div>
                        </div>
                        <a href="appointment.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Make Appointment</a>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('asset/img/'. $about->image)}}" style="object-fit: cover;">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
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


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            @foreach($services as $service)
                <div class="row g-5 mb-5">
                    <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                        <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                            <img class="position-absolute w-100 h-100" src="{{asset('asset/img/'.$service->before_image)}}" style="object-fit: cover;">
                            <img class="position-absolute w-100 h-100" src="{{asset('asset/img/'.$service->after_image)}}" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="section-title mb-5">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">{{ $service['title_'.\App::getLocale() ]}}</h5>
                            <h1 class="display-5 mb-0">{{ $service['description_'.\App::getLocale()] }}</h1>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('asset/img/'.$service->cosmetic_image)}}" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">@lang('word.cosmetic')</h5>
                                </div>
                            </div>
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('asset/img/'.$service->dental_image)}}" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">@lang('word.dental')</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-7">
                        <div class="row g-5">
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('asset/img/'.$service->bridges_image)}}" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">@lang('word.bridges')</h5>
                                </div>
                            </div>
                            <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset('asset/img/'.$service->teeth_image)}}" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">@lang('word.teeth')</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                        <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                            <h3 class="text-white mb-3">@lang('word.appointment_select_app_btn')</h3>
                            <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod</p>
                            <h2 class="text-white mb-0">+998994612245</h2>
                        </div>
                    </div>
                </div>
             @endforeach
        </div>
    </div>
    <!-- Service End -->

     <!-- Blog Start -->
         @include('sections.mainPost')
    <!-- Blog End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                    <div class="offer-text text-center rounded p-5">
                        <h1 class="display-5 text-white">@lang('word.dental_title')</h1>
                        <p class="text-white mb-4">@lang('word.dental_description')</p>
                        <a href="{{route('appointment')}}" class="btn btn-dark py-3 px-5 me-3">@lang('word.dental_app_btn')</a>
                        <a href="" class="btn btn-light py-3 px-5">@lang('word.dental_read_btn')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Pricing Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
              @foreach($prices as $price)
                <div class="col-lg-5">
                        <div class="section-title mb-4">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">{{ $price['title_'. \App::getLocale()] }}</h5>
                            <h1 class="display-5 mb-0">{{ $price['description_'. \App::getLocale()] }}</h1>
                        </div>
                        <p class="mb-4">{!! $price['content_'. \App::getLocale()] !!}</p>
                        <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">{{$price->call}}</h5>
                        <h1 class="wow fadeInUp" data-wow-delay="0.6s">{{$price->phone}}</h1>
                    </div>
                    <div class="col-lg-7">
                        <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                            <div class="price-item pb-4">
                                <div class="position-relative">
                                    <img class="img-fluid rounded-top" src="{{asset('asset/img/'.$price->image_teeth)}}" alt="">
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                        <h2 class="text-primary m-0">$35</h2>
                                    </div>
                                </div>
                                <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                    <h4>Teeth Whitening</h4>
                                    <hr class="text-primary w-50 mx-auto mt-0">
                                    <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                                    <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                                </div>
                            </div>
                            <div class="price-item pb-4">
                                <div class="position-relative">
                                    <img class="img-fluid rounded-top" src="{{asset('asset/img/'.$price->image_dental)}}" alt="">
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                        <h2 class="text-primary m-0">$49</h2>
                                    </div>
                                </div>
                                <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                    <h4>Dental Implant</h4>
                                    <hr class="text-primary w-50 mx-auto mt-0">
                                    <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                                    <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                                </div>
                            </div>
                            <div class="price-item pb-4">
                                <div class="position-relative">
                                    <img class="img-fluid rounded-top" src="{{asset('asset/img/'.$price->image_canal)}}" alt="">
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                        <h2 class="text-primary m-0">$99</h2>
                                    </div>
                                </div>
                                <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                    <h4>Root Canal</h4>
                                    <hr class="text-primary w-50 mx-auto mt-0">
                                    <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i></div>
                                    <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                                    <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
              @endforeach
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                    @foreach($testiominals as $testiominal)
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="{{asset('asset/img/'. $testiominal->image_client)}}" alt="">
                            <p class="fs-5">{!! $testiominal['content_'.\App::getLocale()] !!}</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">{{$testiominal['client_name_'.App::getLocale()]}}</h4>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                @foreach($teams as $team)
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title bg-light rounded h-100 p-5">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">{{$team['title_'.\App::getLocale()]}}</h5>
                            <h1 class="display-6 mb-4">{{$team['description_'.\App::getLocale()]}}</h1>
                            <a href="appointment.html" class="btn btn-primary py-3 px-5">Appointment</a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="{{asset('asset/img/'. $team->image_first)}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Dr. John Doe</h4>
                                <p class="text-primary mb-0">Implant Surgeon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="{{asset('asset/img/'. $team->image_second)}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Dr. John Doe</h4>
                                <p class="text-primary mb-0">Implant Surgeon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="{{asset('asset/img/'. $team->image_third)}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Dr. John Doe</h4>
                                <p class="text-primary mb-0">Implant Surgeon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="{{asset('asset/img/'. $team->image_fourth)}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Dr. John Doe</h4>
                                <p class="text-primary mb-0">Implant Surgeon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="{{asset('asset/img/'. $team->image_fifth)}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Dr. John Doe</h4>
                                <p class="text-primary mb-0">Implant Surgeon</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection