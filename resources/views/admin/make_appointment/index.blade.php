@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                @if(Session::has('updated'))
                    <p class="alert alert-success">{{ Session::get('updated') }}</p>
                @endif
                @if(Session::has('deleted'))
                    <p class="alert alert-danger">{{ Session::get('deleted') }}</p>
                @endif
                  <div class="card-header">
                    <h4>Mkae_Appointment DataTables</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Select_service</th>
                            <th>Select_doctor</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Select_date</th>
                            <th>Select_time</th>
                            <th>Created_at</th>
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($make_appointments as $make_appointment)
                          <tr>
                                <td>
                                   {{$make_appointment->id}}
                                </td>
                                <td>{{$make_appointment->select_service}}</td>
                                <td>{{$make_appointment->select_doctor}}</td>
                                <td>{{$make_appointment->name}}</td>
                                <td>{{$make_appointment->email}}</td>
                                <td>{{$make_appointment->select_date}}</td>
                                <td>{{$make_appointment->select_time}}</td>
                                <td>{{$make_appointment->created_at}}</td>
                                <td><a href="{{route('admin.make_appointment.show',$make_appointment->id)}}" class="btn btn-primary">Detail</a></td>
                                <td><a href="{{ route('admin.make_appointment.edit',$make_appointment->id)}}" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{route('admin.make_appointment.destroy',$make_appointment->id)}}" method="POST">
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