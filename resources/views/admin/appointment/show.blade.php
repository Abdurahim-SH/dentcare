@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Appointment DataTables</h4>
                    <a href="{{route('admin.appointment.index')}}" class="btn btn-success">Return Back</a>
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
                            <th>Created_at</th>
                          </tr>
                        </thead>
                        <tbody>
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