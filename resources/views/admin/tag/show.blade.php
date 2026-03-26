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
                          <a href="{{ route('admin.tag.index') }}" class="btn btn-primary me-auto">Back</a>
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
                                    <th>ID</th><td>{{ $tag->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name_uz</th><td>{{ $tag->name_uz }}</td>
                                </tr>
                                <tr>
                                    <th>Name_ru</th><td>{{ $tag->name_ru }}</td>
                                </tr>
                                <tr>
                                    <th>Name_en</th><td>{{ $tag->name_en }}</td>
                                </tr>
                                <tr>
                                    <th>Slug</th><td>{{ $tag->slug }}</td>
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
    