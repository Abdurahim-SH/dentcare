@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Update in Testiominal</h4>
                                    </div>
                                    <div class="card-body">
                                       <form action="{{ route('admin.testiominal.update',$testiominal->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="file" value="{{$testiominal->image_client}}" class="form-control" name="image_client">
                                                @error('image_client') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_uz</label>
                                            <div class="col-sm-12 col-md-7">
                                                <textarea class="ckeditor" name="content_uz">{{$testiominal->content_uz}}</textarea>
                                                @error('content_uz') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_ru</label>
                                            <div class="col-sm-12 col-md-7">
                                                <textarea class="ckeditor" name="content_ru">{{$testiominal->content_ru}}</textarea>
                                                @error('content_ru') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_en</label>
                                            <div class="col-sm-12 col-md-7">
                                                <textarea class="ckeditor" name="content_en">{{$testiominal->content_en}}</textarea>
                                                @error('content_en') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Client_Name_uz</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$testiominal->client_name_uz}}" class="form-control" name="client_name_uz">
                                                @error('client_name_uz') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Client_Name_ru</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$testiominal->client_name_ru}}" class="form-control" name="client_name_ru">
                                                @error('client_name_ru') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Client_Name_en</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$testiominal->client_name_en}}" class="form-control" name="client_name_en">
                                                @error('client_name_en') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                <div class="col-sm-12 col-md-7">
                                                    <button class="btn btn-primary">Publish</button>
                                                    <a href="{{route('admin.testiominal.index')}}" class="btn btn-danger">Back</a>
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