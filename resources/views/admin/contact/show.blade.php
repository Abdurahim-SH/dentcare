@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-12">
                <div class="card">
                  <div class="boxs mail_listing">
                    <div class="inbox-center table-responsive">
                      <table class="table table-hover">
                        <a href="{{route('admin.contact.index')}}" class="btn btn-success m-2">Return Back</a>

                        <thead>
                          <tr>
                              <th class="text-center">
                                id
                              </th>
                              <th>Name_Contact</th>
                              <th>Email_Contact</th>
                              <th>Subject_Contact</th>
                              <th>Message_Contact</th>
                              <th>Created_at</th>
                           
                          </tr>
                       
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$contact->id}}</td>
                                <td>{{$contact->name_contact}}</td>
                                <td>{{$contact->email_contact}}</td>
                                <td>{{$contact->subject_contact}}</td>
                                <td>{{$contact->message_contact}}</td>
                                <td>{{$contact->created_at}}</td>
                            </tr>
                     
                        </tbody>
                      </table>
                    </div>
                    <div class="row">
                      <div class="col-sm-7 ">
                        <p class="p-15">Showing 1 - 15 of 200</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>

@endsection