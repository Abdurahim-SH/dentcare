@extends('layouts.adminMaster')

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Category</h4>
                        </div>
                        <div class="card-body">
                            @if ($msg = Session::get("success"))
                                <p class="alert alert-success d-inline">{{ $msg }}</p>
                            @endif
                            <form action="{{ route('admin.category.update',$category->id) }}" method="POST">
                                @method("PUT")
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name_uz</label>
                                    <div class="col-sm-12 col-md-7">
                                    <input type="text" value="{{ $category->name_uz}}" class="form-control @error('name_uz') is-invalid @enderror" name="name_uz">
                                    @error("name_uz") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name_ru</label>
                                    <div class="col-sm-12 col-md-7">
                                    <input type="text" value="{{ $category->name_ru}}" class="form-control @error('name_ru') is-invalid @enderror" name="name_ru">
                                    @error("name_ru") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name_en</label>
                                    <div class="col-sm-12 col-md-7">
                                    <input type="text" value="{{ $category->name_en}}" class="form-control @error('name_en') is-invalid @enderror" name="name_en">
                                    @error("name_en") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                </div>
                            </div>

                                
                                
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" type="submit">Edit Category</button>
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
    