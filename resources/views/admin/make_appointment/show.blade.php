@extends('layouts.adminMaster')

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">

                    <div class="col-lg-12 col-md-6 col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>Make_Appointment DetailTable</h4>
                          <a href="{{ route('admin.make_appointment.index') }}" class="btn btn-primary me-auto">Back</a>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            @if ($msg = Session::get('red'))
                                <p class="alert alert-danger">{{ $msg }}</p>
                            @endif

                            @if ($msg = Session::get('delete'))
                                <p class="alert alert-danger">{{ $msg }}</p>
                            @endif

                            @if ($msg = Session::get('success'))
                                <p class="alert alert-success">{{ $msg }}</p>
                            @endif

                            <table class="table">
                                <tr>
                                    <th>ID</th><td>{{ $make_appointment->id }}</td>
                                </tr>
                                <tr>
                                    <th>Select_Service</th><td>{{ $make_appointment->select_service }}</td>
                                </tr>
                                <tr>
                                    <th>Select_Doctor</th><td>{{ $make_appointment->select_doctor }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th><td>{{ $make_appointment->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th><td>{{ $make_appointment->email }}</td>
                                </tr>
                                <tr>
                                    <th>Select_Date</th><td>{{ $make_appointment->select_date }}</td>
                                </tr>
                                <tr>
                                    <th>Select_Time</th><td>{{ $make_appointment->select_time }}</td>
                                </tr>
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
    