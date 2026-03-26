@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Update in Price</h4>
                                    </div>
                                    <div class="card-body">
                                       <form action="{{ route('admin.price.update',$price->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
 
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_uz</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$price->title_uz}}" class="form-control" name="title_uz">
                                                    @error('title_uz') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_ru</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$price->title_ru}}" class="form-control" name="title_ru">
                                                    @error('title_ru') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_en</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$price->title_en}}" class="form-control" name="title_en">
                                                    @error('title_en') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_uz</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$price->description_uz}}" class="form-control" name="description_uz">
                                                    @error('description_uz') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_ru</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$price->description_ru}}" class="form-control" name="description_ru">
                                                    @error('description_ru') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_en</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$price->description_en}}" class="form-control" name="description_en">
                                                    @error('description_en') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_uz</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <textarea class="summernote-simple" name="content_uz">{{$price->content_uz}}</textarea>
                                                    @error('content_uz') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_ru</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <textarea class="summernote-simple" name="content_ru">{{$price->content_ru}}</textarea>
                                                    @error('content_ru') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_en</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <textarea class="summernote-simple" name="content_en">{{$price->content_en}}</textarea>
                                                    @error('content_en') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Call_uz</label>
                                                <div class="col-sm-12 col-md-7">
                                                   <input type="text" value="{{$price->call_uz}}" class="form-control" name="call_uz">
                                                   @error('call_uz') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Call_ru</label>
                                                <div class="col-sm-12 col-md-7">
                                                   <input type="text" value="{{$price->call_ru}}" class="form-control" name="call_ru">
                                                   @error('call_ru') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Call_en</label>
                                                <div class="col-sm-12 col-md-7">
                                                   <input type="text" value="{{$price->call_en}}" class="form-control" name="call_en">
                                                   @error('call_en') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
                                                <div class="col-sm-12 col-md-7">
                                                <input type="text" value="{{$price->phone}}" class="form-control" name="phone">
                                                  @error('phone') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image_Teeth</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" value="{{$price->image_teeth}}" class="form-control" name="image_teeth">
                                                    @error('image_teeth') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image_Dental</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" value="{{$price->image_dental}}" class="form-control" name="image_dental">
                                                    @error('image_dental') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image_Canal</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="file" value="{{$price->image_canal}}" class="form-control" name="image_canal">
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