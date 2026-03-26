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
                    <a href="{{route('admin.price.index')}}" class="btn btn-success">Back</a>
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
                            <th>Content_uz</th>
                            <th>Content_ru</th>
                            <th>Content_en</th>
                            <th>Call</th>
                            <th>Phone</th>
                            <th>Image_Teeth</th>
                            <th>Image_Dental</th>
                            <th>Image_Canal</th>
                            <th>Created_at</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                                <td>
                                   {{$price->id}}
                                </td>
                                <td>{{$price->title_uz}}</td>
                                <td>{{$price->title_ru}}</td>
                                <td>{{$price->title_en}}</td>
                                <td>{{$price->description_uz}}</td>
                                <td>{{$price->description_ru}}</td>
                                <td>{{$price->description_en}}</td>
                                <td>{!! $price->content_uz !!}</td>
                                <td>{!! $price->content_ru !!}</td>
                                <td>{!! $price->content_en !!}</td>
                                <td>{{$price->call_uz}}</td>
                                <td>{{$price->call_ru}}</td>
                                <td>{{$price->call_en}}</td>
                                <td>{{$price->phone}}</td>
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $price->image_teeth)}}" width="35">
                                </td>
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $price->image_dental)}}" width="35">
                                </td>
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $price->image_canal)}}" width="35">
                                </td>
                                <td>{{$price->created_at}}</td>
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