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
                @if(Session::has('updated'))
                    <p class="alert alert-success">{{ Session::get('updated') }}</p>
                @endif
                @if(Session::has('deleted'))
                    <p class="alert alert-danger">{{ Session::get('deleted') }}</p>
                @endif
                  <div class="card-header">
                    <h4>Appointment DataTables</h4>
                    <a href="{{route('admin.appointment.create')}}" class="btn btn-success">Create</a>
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
                            <th>Created_at</th>
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($appointments as $appointment)
                          <tr>
                                <td>
                                   {{$appointment->id}}
                                </td>
                                <td>{{$appointment->title_uz}}</td>
                                <td>{{$appointment->title_ru}}</td>
                                <td>{{$appointment->title_en}}</td>
                                <td>{{$appointment->description_uz}}</td>
                                <td>{{$appointment->description_ru}}</td>
                                <td>{{$appointment->description_en}}</td>
                                <td>{{$appointment->created_at}}</td>
                                <td><a href="{{route('admin.appointment.show',$appointment->id)}}" class="btn btn-primary">Detail</a></td>
                                <td><a href="{{ route('admin.appointment.edit',$appointment->id)}}" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{route('admin.appointment.destroy',$appointment->id)}}" method="POST">
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