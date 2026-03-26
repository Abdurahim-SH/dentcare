@extends('layouts.adminMaster')

@section('content')
<div class="main-content">
    <div class="row">

    <div class="col-lg-12 col-md-6 col-12">
    <div class="card">
        <div class="card-header">
        <h4>Simple Table</h4>
        <a href="{{ route('admin.post.index') }}" class="btn btn-primary me-auto">Back</a>
        </div>
        <div class="card-body">
        <div class="table-responsive">
        
            <table class="table">
                <tr>
                    <th>ID</th><td>{{ $post->id }}</td>
                </tr>
                <tr>
                    <th>Title</th><td>{{ $post->title_uz }}</td>
                </tr>
                <tr>
                    <th>Description</th><td>{{ $post->description_uz }}</td>
                </tr>
                <tr>
                    <th>Description</th><td>{{ $post->content_uz }}</td>
                </tr>
                <tr>
                    <th>Image</th><td>
                    <img src="{{ asset('temp/img/'.$post->image) }}" alt="" width="200">
                    </td>
                </tr>
                <tr>
                    <th>Category</th><td>{{ $post->category->name_uz }}</td>
                </tr>

                <tr>
                    <th>Tags</th>
                    <td>
                    @foreach($post->tags as $tag)
                        <span>{{ $tag->name_uz }} &nbsp;</span>
                    @endforeach
                    </td>
                </tr>
            </table>


        </div>
        </div>
       
    </div>
    </div>

    </div>
</div>
@endsection
    