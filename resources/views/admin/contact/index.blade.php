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
                       @if(Session::has('updated'))
                            <p class="alert alert-success">{{ Session::get('updated') }}</p>
                        @endif
                        @if(Session::has('deleted'))
                            <p class="alert alert-success">{{ Session::get('deleted') }}</p>
                        @endif
                      <table class="table table-hover">
                        <thead>
                          <tr>
                           
                            <th colspan="8">
                              <div class="inbox-header">
                                <div class="mail-option">
                                  <div class="email-btn-group m-l-15">
                                    <a href="#" class="col-dark-gray waves-effect m-r-20" title="back"
                                      data-toggle="tooltip">
                                      <i class="material-icons">keyboard_return</i>
                                    </a>
                                    <a href="#" class="col-dark-gray waves-effect m-r-20" title="Archive"
                                      data-toggle="tooltip">
                                      <i class="material-icons">archive</i>
                                    </a>
                                    <div class="p-r-20">|</div>
                                    <a href="#" class="col-dark-gray waves-effect m-r-20" title="Error"
                                      data-toggle="tooltip">
                                      <i class="material-icons">error</i>
                                    </a>
                                    <a href="#" class="col-dark-gray waves-effect m-r-20" title="Delete"
                                      data-toggle="tooltip">
                                      <i class="material-icons">delete</i>
                                    </a>
                                    <a href="#" class="col-dark-gray waves-effect m-r-20" title="Folders"
                                      data-toggle="tooltip">
                                      <i class="material-icons">folder</i>
                                    </a>
                                    <a href="#" class="col-dark-gray waves-effect m-r-20" title="Tag"
                                      data-toggle="tooltip">
                                      <i class="material-icons">local_offer</i>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($contacts as $contact)
                            <tr class="unread">
                           
                              <td class="hidden-xs">
                                <i class="material-icons">star_border</i>
                              </td>
                              <td class="hidden-xs">{{$contact->name_contact}}</td>
                              <td class="max-texts">
                                {{$contact->email_contact}}
                              </td>
                              <td class="hidden-xs">
                                  {{$contact->subject_contact}}
                              </td>
                              <td class="text-right"> {{$contact->created_at}} </td>
                              <td><a href="{{route('admin.contact.show',$contact->id)}}" class="btn btn-primary">Detail</a></td>
                                <td><a href="{{route('admin.contact.edit',$contact->id)}}" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{route('admin.contact.destroy',$contact->id)}}" method="POST">
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