@extends('layouts.master')

@section('content')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Services</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Services</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


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

@endsection