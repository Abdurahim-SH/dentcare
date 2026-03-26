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
                    <h4>Testiominal DataTables</h4>
                    <a href="{{route('admin.testiominal.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Image_Client</th>
                            <th>Content_uz</th>
                            <th>Content_ru</th>
                            <th>Content_en</th>
                            <th>Client_Name_uz</th>
                            <th>Client_Name_ru</th>
                            <th>Client_Name_en</th>
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($testiominals as $testiominal)
                          <tr>
                                <td>
                                   {{$testiominal->id}}
                                </td>
                                <td>
                                 <img alt="" src="{{ asset('asset/img/'. $testiominal->image_client)}}" width="35">
                                </td>
                                <td>{!! $testiominal->content_uz !!}</td>
                                <td>{!! $testiominal->content_ru !!}</td>
                                <td>{!! $testiominal->content_en !!}</td>
                                <td>{{$testiominal->client_name_uz}}</td>
                                <td>{{$testiominal->client_name_ru}}</td>
                                <td>{{$testiominal->client_name_en}}</td>
                                <td><a href="{{route('admin.testiominal.show',$testiominal->id)}}" class="btn btn-primary">Detail</a></td>
                                <td><a href="{{ route('admin.testiominal.edit',$testiominal->id)}}" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{route('admin.testiominal.destroy',$testiominal->id)}}" method="POST">
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