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
                    <a href="{{route('admin.team.create')}}" class="btn btn-success">Create</a>
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
                            <th>image_first</th>
                            <th>image_second</th>
                            <th>image_third</th>
                            <th>image_fourth</th>
                            <th>image_fifth</th>
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($teams as $team)
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
                                   <img alt="" src="{{ asset('asset/img/'. $team->image_first)}}" width="35">
                                </td>
                                <td>
                                   <img alt="" src="{{ asset('asset/img/'. $team->image_second)}}" width="35">
                                </td>
                                <td>
                                   <img alt="" src="{{ asset('asset/img/'. $team->image_third)}}" width="35">
                                </td>
                                <td>
                                   <img alt="" src="{{ asset('asset/img/'. $team->image_fourth)}}" width="35">
                                </td>
                                <td>
                                   <img alt="" src="{{ asset('asset/img/'. $team->image_fifth)}}" width="35">
                                </td>
                            
                                <td><a href="{{route('admin.team.show',$team->id)}}" class="btn btn-primary">Detail</a></td>
                                <td><a href="{{ route('admin.team.edit',$team->id)}}" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{route('admin.team.destroy',$team->id)}}" method="POST">
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