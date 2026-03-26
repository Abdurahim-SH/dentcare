@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Basic DataTables</h4>
                    <a href="{{route('admin.service.index')}}" class="btn btn-success">Back</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              id
                            </th>
                            <th>Title_uz</th>
                            <th>Title_ru</th>
                            <th>Title_en</th>
                            <th>Description_uz</th>
                            <th>Description_ru</th>
                            <th>Description_en</th>
                            <th>After_Image</th>
                            <th>Before_Image</th>
                            <th>Cosmetic_Image</th>
                            <th>Dental_Image</th>
                            <th>Bridges_Image</th>
                            <th>Teeth_Image</th>
                          </tr>
                        </thead>
                        <tbody>
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
                                  <img alt="image" src="{{ asset('asset/img/'. $service->after_image)}}" width="35">
                                </td>
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $service->before_image)}}" width="35">
                                </td>
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $service->cosmetic_image)}}" width="35">
                                </td>
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $service->dental_image)}}" width="35">
                                </td>
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $service->bridges_image)}}" width="35">
                                </td>
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $service->teeth_image)}}" width="35">
                                </td>
                              
                          </tr>
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