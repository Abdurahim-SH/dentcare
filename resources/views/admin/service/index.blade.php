@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                @if(Session::has('created'))
                    <p class="alert alert-success">{{ Session::get('created') }}</p>
                @endif
                @if(Session::has('deleted'))
                    <p class="alert alert-danger">{{ Session::get('deleted') }}</p>
                @endif
                  <div class="card-header">
                    <h4>Basic DataTables</h4>
                    <a href="{{route('admin.service.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Title_uz</th>
                            <th>Title_ru</th>
                            <th>Title_en</th>
                            <th>Description_uz</th>
                            <th>Description_ru</th>
                            <th>Description_en</th>
                            <th>After_Image</th>
                            <th>Before_image</th>
                            <th>Cosmetic_image</th>
                            <th>Dental_image</th>
                            <th>Bridges_image</th>
                            <th>teeth_image</th>
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($services as $service)
                          <tr>
                                <td>
                                   {{$service->id}}
                                </td>
                                <td>{{$service->title_uz}}</td>
                                <td>{{$service->title_ru}}</td>
                                <td>{{$service->title_en}}</td>
                                <td>{{$service->description_uz}}</td>
                                <td>{{$service->description_ru}}</td>
                                <td>{{$service->description_en}}</td>
                                <td>
                                   <img alt="" src="{{ asset('asset/img/'. $service->after_image)}}" width="35">
                                </td>
                                <td>
                                   <img alt="" src="{{ asset('asset/img/'. $service->before_image)}}" width="35">
                                </td>
                                <td>
                                   <img alt="" src="{{ asset('asset/img/'. $service->cosmetic_image)}}" width="35">
                                </td>
                                <td>
                                   <img alt="" src="{{ asset('asset/img/'. $service->dental_image)}}" width="35">
                                </td>
                                <td>
                                   <img alt="" src="{{ asset('asset/img/'. $service->bridges_image)}}" width="35">
                                </td>
                                <td>
                                   <img alt=" " src="{{ asset('asset/img/'. $service->teeth_image)}}" width="35">
                                </td>
                                <td><a href="{{route('admin.service.show',$service->id)}}" class="btn btn-primary">Detail</a></td>
                                <td><a href="{{ route('admin.service.edit',$service->id)}}" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{route('admin.service.destroy',$service->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                               </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>

@endsection