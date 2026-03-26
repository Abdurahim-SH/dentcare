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
                    <form action="{{ route('admin.post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                        @csrf
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_uz</label>
                            <div class="col-sm-12 col-md-7">
                            <input type="text" value = " {{ $post->title_uz }} " class="form-control " name="title_uz">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_ru</label>
                            <div class="col-sm-12 col-md-7">
                            <input type="text" value = " {{ $post->title_ru }} " class="form-control " name="title_ru">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_en</label>
                            <div class="col-sm-12 col-md-7">
                            <input type="text" value = " {{ $post->title_en }} " class="form-control " name="title_en">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_uz</label>
                            <div class="col-sm-12 col-md-7">
                            <input type="text" value = " {{ $post->description_uz }} " class="form-control " name="description_uz">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_ru</label>
                            <div class="col-sm-12 col-md-7">
                            <input type="text" value = " {{ $post->description_ru }} " class="form-control " name="description_ru">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description_en</label>
                            <div class="col-sm-12 col-md-7">
                            <input type="text" value = " {{ $post->description_en }} " class="form-control " name="description_en">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_uz</label>
                        <div class="col-sm-12 col-md-7">
                           <textarea name="content_uz" id="" value="{{ $post->content_uz }}" cols="30" rows="10" class="form-control ckeditor"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_ru</label>
                        <div class="col-sm-12 col-md-7">
                          <textarea name="content_ru" id="" value="{{ $post->content_ru }}" cols="30" rows="10" class="form-control ckeditor"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_en</label>
                        <div class="col-sm-12 col-md-7">
                           <textarea name="content_en" id="" value="{{ $post->content_en }}" cols="30" rows="10" class="form-control ckeditor"></textarea>
                        </div>
                    </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                            <div class="col-sm-12 col-md-7">
                            <img src="{{ asset('temp/img/'.$post->image) }}" alt="" width="200">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                            <div class="col-sm-12 col-md-7">
                            <input type="file" class="form-control " name="image">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="category_id" id="" class="form-control">
                                    <option value="">Select Category</option>

                                    @foreach($categorys as $category)
                                        <option {{ $post->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name_uz }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Maxsus yangilik</label>
                            <label class="custom-switch mt-2">
                                <input type="checkbox" {{ $post->special_new == 1 ? 'checked' : '' }} value="1" name="special_new" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </div>  

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="tags[]" id="" class="form-control select2" multiple="">
                                    @foreach($tags as $tag)
                                        <option @if (in_array($tag->id,$post->tags->pluck('id')->toArray())) selected @endif value="{{ $tag->id }}">{{ $tag->name_uz }}</option>
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
    