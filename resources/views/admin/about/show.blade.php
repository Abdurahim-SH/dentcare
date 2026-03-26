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
                    <a href="{{route('admin.about.index')}}" class="btn btn-success">Back</a>
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
                            <th>Content_Body_uz</th>
                            <th>Content_Body_ru</th>
                            <th>Content_Body_en</th>
                            <th>Members</th>
                            <th>Created_at</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                                <td>
                                   {{$about->id}}
                                </td>
                                <td>{{$about->title_uz}}</td>
                                <td>{{$about->title_ru}}</td>
                                <td>{{$about->title_en}}</td>
                                <td>{{$about->description_uz}}</td>
                                <td>{{$about->description_ru}}</td>
                                <td>{{$about->description_en}}</td>
                                <td>{!! $about->content_uz !!}</td>
                                <td>{!! $about->content_ru !!}</td>
                                <td>{!! $about->content_en !!}</td>
                                <td>{!! $about->content_body_uz !!}</td>
                                <td>{!! $about->content_body_ru !!}</td>
                                <td>{!! $about->content_body_en !!}</td>
                                <td>
                                <img alt="image" src="{{ asset('asset/img/'. $about->image)}}" width="35">
                                </td>
                                <td>{{$about->created_at}}</td>
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