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
                    <a href="{{route('admin.about.create')}}" class="btn btn-success">Create</a>
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
                            <th>Members</th>
                            <th>Created_at</th>
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($abouts as $about)
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
                                <td>
                                  <img alt="image" src="{{ asset('asset/img/'. $about->image)}}" width="35">
                                </td>
                                <td>{{$about->created_at}}</td>
                                <td><a href="{{route('admin.about.show',$about->id)}}" class="btn btn-primary">Detail</a></td>
                                <td><a href="{{ route('admin.about.edit',$about->id)}}" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{route('admin.about.destroy',$about->id)}}" method="POST">
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