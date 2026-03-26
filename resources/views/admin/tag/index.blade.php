@extends('layouts.adminMaster')

@section('content')

        <div class="main-content">
           <div class="row">
              <div class="col-12">
                <div class="card">
                @if (Session::has('msg'))
                  <p class="alert alert-success">{{ Session::get('msg') }}</p>
                @endif
                @if (Session::has('success'))
                  <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
                  <div class="card-header">
                    <h4>Basic DataTables</h4>
                    <a href="{{ route('admin.tag.create') }}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Name Uz</th>
                            <th>Name Ru</th>
                            <th>Name En</th>
                            <th>Slug</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>View</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                       @foreach($tags as $tag)

                       <tr>
                            <td>
                              1
                            </td>
                            <td>{{ $tag->name_uz }}</td>
                            <td>{{ $tag->name_ru }}</td>
                            <td>{{ $tag->name_en }}</td>
                            <td>{{ $tag->slug }}</td>
                            <td><a href="{{ route('admin.tag.edit',$tag->id) }}" class="btn btn-warning">Edit</a></td>
                            <td>
                              <form action="{{route('admin.tag.destroy',$tag->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" onclick = "return confirm('Ma\'lumot o\'chirilsinmi?')" value="Delete" class="btn btn-danger">
                              </form>
                            </td>
                            <td>
                            <a href="{{route('admin.tag.show',$tag->id)}}">
                              <i class="fa-solid fa-eye"></i>
                            </a>
                            </td>
                          </tr>
                       @endforeach
                        </tbody>
                      </table>
                        <div class="card-footer text-right">
                          <nav class="d-inline-block">
                           {{$tags->links('vendor.pagination.paginate')}}
                          </nav>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>

@endsection
    