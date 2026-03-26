@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Create in Price</h4>
                                    </div>
                                    <div class="card-body">
                                       <form action="{{ route('admin.price.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_uz</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" class="form-control" name="title_uz">
                                                    @error('title_uz') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_ru</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" class="form-control" name="title_ru">
                                                    @error('title_ru') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_en</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" class="form-control" name="title_en">
                                                    @error('title_en') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_uz</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text"  class="form-control" name="description_uz">
                                                    @error('description_uz') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_ru</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text"  class="form-control" name="description_ru">
                                                    @error('description_ru') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_en</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text"  class="form-control" name="description_en">
                                                    @error('description_en') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_uz</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <textarea class="ckeditor" name="content_uz"></textarea>
                                                    @error('content_uz') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
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
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Call_uz</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" class="form-control" name="call_uz">
                                                    @error('call_uz') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Call_ru</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" class="form-control" name="call_ru">
                                                    @error('call_ru') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Call_en</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" class="form-control" name="call_en">
                                                    @error('call_en') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" class="form-control" name="phone">
                                                    @error('phone') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image_Teeth</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" class="form-control" name="image_teeth">
                                                    @error('image_teeth') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image_Dental</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" class="form-control" name="image_dental">
                                                    @error('image_dental') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image_Canal</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" class="form-control" name="image_canal">
                                                    @error('image_canal') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                       
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                <div class="col-sm-12 col-md-7">
                                                    <button class="btn btn-primary">Publish</button>
                                                    <a href="{{route('admin.price.index')}}" class="btn btn-danger">Back</a>
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