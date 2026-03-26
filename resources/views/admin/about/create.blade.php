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
                                       <form action="{{ route('admin.about.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text"  class="form-control" name="title_uz">
                                                    @error('title_uz') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text"  class="form-control" name="title_ru">
                                                    @error('title_ru') <p class="text-danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text"  class="form-control" name="title_en">
                                                    @error('title_en') <p class="text-danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" class="form-control" name="description_uz">
                                                    @error('description_uz') <p class="text-danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text"  class="form-control" name="description_ru">
                                                    @error('description_ru') <p class="text-danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text"  class="form-control" name="description_en">
                                                    @error('description_en') <p class="text-danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" class="form-control" name="image">
                                                    @error('image') <p class="text-danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_uz</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <textarea class="ckeditor" name="content_uz" row="30" id=""></textarea>
                                                    @error('content_uz') <p class="text-danger">{{$message}}</p> @enderror                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_ru</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <textarea class="ckeditor" name="content_ru"></textarea>
                                                    @error('content_ru') <p class="text-danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_en</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <textarea class="ckeditor" name="content_en"></textarea>
                                                    @error('content_en') <p class="text-danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_Body_uz</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <textarea class="ckeditor" name="content_body_uz"></textarea>
                                                    @error('content_body_uz') <p class="text-danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_Body_ru</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <textarea class="ckeditor" name="content_body_ru"></textarea>
                                                    @error('content_body_ru') <p class="text-danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_Body_en</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <textarea class="ckeditor" name="content_body_en"></textarea>
                                                    @error('content_body_en') <p class="text-danger">{{$message}}</p> @enderror

                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                <div class="col-sm-12 col-md-7">
                                                    <button class="btn btn-primary">Publish</button>
                                                    <a href="{{route('admin.about.index')}}" class="btn btn-danger">Back</a>
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