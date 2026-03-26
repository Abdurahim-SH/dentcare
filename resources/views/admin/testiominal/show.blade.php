@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Deatil Testiominal</h4>
                    <a href="{{route('admin.testiominal.index')}}" class="btn btn-success">Return Back</a>
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
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                                <td>
                                   {{$testiominal->id}}
                                </td>
                                <td>
                                 <img alt="" src="{{ asset('asset/img/'. $testiominal->image_client)}}" width="35">
                                </td>
                                <td>{{$testiominal->content_uz}}</td>
                                <td>{{$testiominal->content_ru}}</td>
                                <td>{{$testiominal->content_en}}</td>
                                <td>{{$testiominal->client_name_uz}}</td>
                                <td>{{$testiominal->client_name_ru}}</td>
                                <td>{{$testiominal->client_name_en}}</td>
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