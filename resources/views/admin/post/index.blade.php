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
                    <a href="{{ route('admin.post.create') }}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Task Name</th>
                            <th>Progress</th>
                            <th>Members</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>View</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($posts as $post)
                          <tr>
                            <td>
                              {{ $post->id }}
                            </td>
                            <td>{{ $post->title_uz }}</td>
                            <td>{{ $post->description_uz }}</td>
                           
                            <td>
                              <img alt="image" src="{{asset('temp/img/'.$post->image)}}" width="35">
                            </td>
                            <td>{{ $post->category_id }}</td>
                            <td>{{ $post->created_at }} </td>
                            <td><a href="{{ route('admin.post.edit',$post->id) }}" class="btn btn-warning">Edit</a></td>
                            <td>
                              <form action="{{ route('admin.post.destroy',$post->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" onclick = "return confirm('Ma\'lumot o\'chirilsinmi?')" value="Delete" class="btn btn-danger">
                              </form>
                            </td>
                            <td>
                            <a href="{{ route('admin.post.show',$post->id) }}">
                              <i class="fa-solid fa-eye"></i>
                            </a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="card-footer text-right">
                        <nav class="d-inline-block">
                           {{$posts->links('vendor.pagination.paginate')}}
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>

@endsection
    