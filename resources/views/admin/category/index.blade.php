@extends('layouts.adminMaster')

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">

                    <div class="col-lg-12 col-md-6 col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>Simple Table</h4>
                          <a href="{{ route('admin.category.create') }}" class="btn btn-success">Create</a>
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
                            <table class="table table-bordered table-md">
                              <tr>
                                <th>#</th>
                                <th>Name Uz</th>
                                <th>Name Ru</th>
                                <th>Name En</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Read</th>
                              </tr>
                            
                            @foreach($categorys as $category)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $category->name_uz }}</td>
                                  <td>{{ $category->name_ru }}</td>
                                  <td>{{ $category->name_en }}</td>
                                  <td><a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-warning">Edit</a></td>
                                  <td>
                                    <form action="{{ route('admin.category.destroy',$category->id) }}" method="POST">
                                      @method('DELETE')
                                      @csrf
                                      <input type="submit" onclick = "return confirm('Ma\'lumot o\'chirilsinmi?')" value="Delete" class="btn btn-danger">
                                    </form>
                                  </td>
                                  <td>
                                  <a href="{{ route('admin.category.show',$category->id) }}">
                                  <i class="fa-solid fa-eye"></i>
                                  </a>
                                  </td>
                                </tr>
                            @endforeach
                            </table>
                          </div>
                        </div>
                        <div class="card-footer text-right">
                          <nav class="d-inline-block">
                           {{$categorys->links('vendor.pagination.paginate')}}
                          </nav>
                        </div>
                      </div>
                    </div>
                    
                </div>
            </div>
        </section>
</div>



@endsection