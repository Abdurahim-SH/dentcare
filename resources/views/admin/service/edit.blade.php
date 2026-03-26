@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Create in About</h4>
                                    </div>
                                    <div class="card-body">
                                       <form action="{{ route('admin.service.update',$service->id)}}" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_uz</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$service->title_uz}}" class="form-control" name="title_uz">
                                                    @error('title_uz') <p class="text_danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_ru</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$service->title_ru}}" class="form-control" name="title_ru">
                                                    @error('title_ru') <p class="text_danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_en</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$service->title_en}}" class="form-control" name="title_en">
                                                    @error('title_en') <p class="text_danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_uz</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$service->description_uz}}" class="form-control" name="description_uz">
                                                    @error('description_uz') <p class="text_danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_ru</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$service->description_ru}}" class="form-control" name="description_ru">
                                                    @error('description_ru') <p class="text_danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_en</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$service->description_en}}" class="form-control" name="description_en">
                                                    @error('description_en') <p class="text_danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">After_Image</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" class="form-control" name="after_image">
                                                    @error('after_image') <p class="text_danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Before_Image</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" class="form-control" name="before_image">
                                                    @error('before_image') <p class="text_danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cosmetic_Image</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" class="form-control" name="cosmetic_image">
                                                    @error('cosmetic_image') <p class="text_danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">dental_Image</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" class="form-control" name="dental_image">
                                                    @error('dental_image') <p class="text_danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">bridges_Image</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" class="form-control" name="bridges_image">
                                                    @error('bridges_image') <p class="text_danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">teeth_Image</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" class="form-control" name="teeth_image">
                                                    @error('teeth_image') <p class="text_danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                         
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                <div class="col-sm-12 col-md-7">
                                                    <button class="btn btn-primary">Publish</button>
                                                    <a href="{{route('admin.service.index')}}" class="btn btn-danger">Back</a>
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