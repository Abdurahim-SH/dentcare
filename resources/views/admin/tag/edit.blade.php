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
                <form action="{{ route('admin.tag.update',$tag->id) }}" method="POST">
                @method("PUT")
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name uz</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="text" value="{{ $tag->name_uz }}" class="form-control " name="name_uz">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name ru</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="text" value="{{ $tag->name_ru }}" class="form-control " name="name_ru">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name en</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="text" value="{{ $tag->name_en }}" class="form-control " name="name_en">
                        </div>
                    </div>
                    
                    
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary" type="submit">Edit Tag</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
        </div>
    </div>
</div>
@endsection
    