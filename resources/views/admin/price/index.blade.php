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
                    <h4>price DataTables</h4>
                    <a href="{{route('admin.price.create')}}" class="btn btn-success">Create</a>
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
                            <th>Content_uz</th>
                            <th>Content_ru</th>
                            <th>Content_en</th>
                            <th>Call_uz</th>
                            <th>Call_ru</th>
                            <th>Call_en</th>
                            <th>Phone</th>
                            <th>Image Teeth</th>
                            <th>Image Dental</th>
                            <th>Image Canal</th>
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($prices as $price)
                          <tr>
                                <td>
                                   {{$price->id}}
                                </td>
                                <td>{{$price->title_uz}}</td>
                                <td>{{$price->title_ru}}</td>
                                <td>{{$price->title_en}}</td>
                                <td>{{$price->description_uz}}</td>
                                <td>{{$price->description_ru}}</td>
                                <td>{{$price->description_en}}</td>
                                <td>{!! $price->content_uz !!}</td>
                                <td>{!! $price->content_ru !!}</td>
                                <td>{!! $price->content_en !!}</td>
                                <td>{{$price->call_uz}}</td>
                                <td>{{$price->call_ru}}</td>
                                <td>{{$price->call_en}}</td>
                                <td>{{$price->phone}}</td>
                                <td>
                                  <img alt="" src="{{ asset('asset/img/'.$price->image_teeth)}}" width="35">
                                </td>
                                <td>
                                  <img alt="" src="{{ asset('asset/img/'.$price->image_dental)}}" width="35">
                                </td>
                                <td>
                                  <img alt="" src="{{ asset('asset/img/'.$price->image_canal)}}" width="35">
                                </td>
                                <td><a href="{{route('admin.price.show',$price->id)}}" class="btn btn-primary">Detail</a></td>
                                <td><a href="{{ route('admin.price.edit',$price->id)}}" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{route('admin.price.destroy',$price->id)}}" method="POST">
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