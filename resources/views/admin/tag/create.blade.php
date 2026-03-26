@extends('layouts.adminMaster')

@section('content')
               <div class="main-content">
                            <div class="row">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tags</h4>
                        </div>
                        <div class="card-body">
                            @if ($msg = Session::get("success"))
                                <p class="alert alert-success d-inline">{{ $msg }}</p>
                            @endif
                            <form action="{{ route('admin.tag.store') }}" method="POST">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name uz</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('name_uz') is-invalid @enderror" name="name_uz">
                                        @error("name_uz") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name ru</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('name_ru') is-invalid @enderror" name="name_ru">
                                        @error("name_ru") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name en</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('name_en') is-invalid @enderror" name="name_en">
                                        @error("name_en") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" type="submit">Add Tag</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                    </div>
                </div>
               </div>
@endsection
    