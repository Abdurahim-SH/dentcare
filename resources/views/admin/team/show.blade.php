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
                    <a href="{{route('admin.team.index')}}" class="btn btn-success">Back</a>
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
                            <th>image_first</th>
                            <th>image_second</th>
                            <th>image_third</th>
                            <th>image_fourth</th>
                            <th>image_fifth</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                                <td>
                                   {{$team->id}}
                                </td>
                                <td>{{$team->title_uz}}</td>
                                <td>{{$team->title_ru}}</td>
                                <td>{{$team->title_en}}</td>
                                <td>{{$team->description_uz}}</td>
                                <td>{{$team->description_ru}}</td>
                                <td>{{$team->description_en}}</td>
                               
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $team->image_first)}}" width="35">
                                </td>
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $team->image_second)}}" width="35">
                                </td>
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $team->image_third)}}" width="35">
                                </td>
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $team->image_fourth)}}" width="35">
                                </td>
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $team->image_fifth)}}" width="35">
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