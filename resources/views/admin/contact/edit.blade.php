@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Update in Contact</h4>
                                    </div>
                                    <div class="card-body">
                                       <form action="{{ route('admin.contact.update',$contact->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")

                                        <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$contact->name_contact}}" class="form-control" name="name_contact">
                                                    @error('name_contact') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$contact->email_contact}}" class="form-control" name="email_contact">
                                                    @error('email_contact') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subject</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <input type="text" value="{{$contact->subject_contact}}" class="form-control" name="subject_contact">
                                                    @error('subject_contact') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Message</label>
                                                <div class="col-sm-12 col-md-7">
                                                    <textarea class="ckeditor" name="message_contact">{{$contact->message_contact}}</textarea>
                                                    @error('message_contact') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                <div class="col-sm-12 col-md-7">
                                                    <button class="btn btn-primary">Publish</button>
                                                    <a href="{{route('admin.contact.index')}}" class="btn btn-danger">Back</a>
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