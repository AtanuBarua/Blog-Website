@extends ('admin.master')

@section('title')
    Manage Blog
@endsection

@section('body')

    <!-- Begin Page Content -->
    {{--<div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
--}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Category Name</th>
                        <th>Blog Title</th>
                        <th>Blog Image</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Category Name</th>
                        <th>Blog Title</th>
                        <th>Blog Image</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @php($i=1)
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$blog->category_name}}</td>
                            <td>{{$blog->blog_title}}</td>
                            <td><img src="{{asset($blog->blog_image)}}" alt="" height="100" width="100"></td>
                            <td>{{$blog->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <a href="{{route('edit-blog',['id'=>$blog->id])}}"  class="btn btn-success">Edit</a>
                                <a href="#" id="{{$blog->id}}" class="btn btn-danger"
                                   onclick="event.preventDefault();
                                       var check = confirm('Are you sure you want to delete?');
                                       if(check){
                                       document.getElementById('deleteBlogForm'+'{{$blog->id}}').submit();
                                       }"
                                >Delete</a>
                                <form id="deleteBlogForm{{$blog->id}}" action="{{route('delete-blog')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$blog->id}}">
                                </form>

                                {{--<a href="#"
                                   class="btn btn-danger ml-1"
                                   onclick="event.preventDefault(); document.getElementById('deleteCategoryForm').submit();">Delete</a>

                                <form id="deleteCategoryForm" action="{{route('delete-category')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{$category->id}}" name="id">
                                </form>--}}

                                {{--<form id="deleteCategoryForm" action="{{route('delete-category')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$category->id}}">
                                    <button type="submit" class="btn btn-danger ml-1">Delete</button>
                                </form>--}}



                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{--</div>--}}
    <!-- /.container-fluid -->

@endsection
