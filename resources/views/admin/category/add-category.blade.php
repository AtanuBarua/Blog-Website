@extends('admin.master')

@section('title')
    Add Category
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="well">

               <h1 class="text-center text-success"> {{Session::get('message')}} </h1>
                <form action="{{route('new-category')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Category name</label>
                        <div class="col-md-6">
                            <input type="text" name="category_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Category description</label>
                        <div class="col-md-6">
                            <textarea name="category_description" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                          <label>  <input type="radio" name="publication_status" value="1"> Published </label>
                          <label>  <input type="radio" name="publication_status" value="0"> Unpublished </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3" >
                            <input type="submit" class="btn btn-success btn-block" value="save">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
