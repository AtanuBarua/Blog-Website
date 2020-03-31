@extends('admin.master')

@section('title')
    Edit Blog
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="well">

                <h1 class="text-center text-success"> {{Session::get('message')}} </h1>
                <form action="{{route('update-blog')}}" name="editBlogForm" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-6">
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Title</label>
                        <div class="col-md-6">
                            <input type="text" name="blog_title" class="form-control" value="{{$blog->blog_title}}">
                            <input type="hidden" name="id" class="form-control" value="{{$blog->id}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Short Description</label>
                        <div class="col-md-6">
                            <textarea name="blog_short_description" class="form-control">{{$blog->blog_short_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" >Blog Long Description</label>
                        <div class="col-md-6">
                            <textarea name="blog_long_description" class="form-control" id="editor">{{$blog->blog_long_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Image</label>
                        <div class="col-md-6">
                            <input type="file" name="blog_image" accept="image/*">
                            <br/><br/>
                            <img src="{{asset($blog->blog_image)}}" alt="" height="100" width="120">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                            <label>  <input type="radio" {{$blog->publication_status == 1 ? 'checked' : ''}} name="publication_status" value="1"> Published </label>
                            <label>  <input type="radio" {{$blog->publication_status == 0 ? 'checked' : ''}} name="publication_status" value="0"> Unpublished </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3" >
                            <input type="submit" class="btn btn-success btn-block" value="update">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        document.forms['editBlogForm'].elements['category_id'].value = '{{ $blog->category_id }}'
    </script>
@endsection
