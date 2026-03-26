@extends('layouts.adminMaster')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Post</h4>
            </div>
            <div class="card-body">
                @if ($msg = Session::get("success"))
                    <p class="alert alert-success d-inline">{{ $msg }}</p>
                @endif
                <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_uz</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control @error('title_uz') is-invalid @enderror" name="title_uz">
                            @error("title_uz") <span class="invalid-feedback">{{$message}}</span>  @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_ru</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control  @error('title_uz') is-invalid @enderror" name="title_ru">
                            @error("title_ru") <span class="invalid-feedback">{{$message}}</span>  @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_en</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control  @error('title_en') is-invalid @enderror" name="title_en">
                            @error("title_en") <span class="invalid-feedback">{{$message}}</span>  @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_uz</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control @error('description_uz') is-invalid @enderror" name="description_uz">
                            @error("description_uz") <span class="invalid-feedback">{{$message}}</span>  @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_ru</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control @error('description_ru') is-invalid @enderror" name="description_ru">
                            @error("description_ru") <span class="invalid-feedback">{{$message}}</span>  @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_en</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control @error('description_en') is-invalid @enderror" name="description_en">
                            @error("description_en") <span class="invalid-feedback">{{$message}}</span>  @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_uz</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea name="content_uz" id="" cols="30" rows="10" class="form-control ckeditor @error('content_uz') is-invalid @enderror"></textarea>
                            @error("content_uz") <span class="invalid-feedback">{{$message}}</span>  @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_ru</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea name="content_ru" id="" cols="30" rows="10" class="form-control ckeditor @error('content_ru') is-invalid @enderror"></textarea>
                            @error("content_ru") <span class="invalid-feedback">{{$message}}</span>  @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_en</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea name="content_en" id="" cols="30" rows="10" class="form-control ckeditor @error('content_en') is-invalid @enderror"></textarea>
                            @error("content_en") <span class="invalid-feedback">{{$message}}</span>  @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="image">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                        <div class="col-sm-12 col-md-7">
                            <select name="category_id" id="" class="form-control @error('category_id') is-invalid @enderror">
                                <option value="">Select Category</option>

                                @foreach($categorys as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                                @endforeach
                            </select>
                            @error("category_id") <span class="invalid-feedback">{{$message}}</span>  @enderror

                        </div>
                    </div>

                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Maxsus yangilik</label>
                        <label class="custom-switch mt-2">
                            <input type="checkbox" value="1" name="special_new" class="custom-switch-input">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                        <div class="col-sm-12 col-md-7">
                            <select name="tags[]" id="" class="form-control select2" multiple="">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name_uz }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    
                    
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary" type="submit">Add Category</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
        </div>
    </div>
</div>
@endsection
    