@extends('admin.index')

@section('title', 'Categories')


@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Categories</li>
@endsection

@section('content')



<div class="card">
    <div class="card-header">
        <a href="{{route('admin.categories.index')}}" class="btn btn-sm btn-outline-primary mr-2 ">Categories</a>

    </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('admin.categories.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control  @error('name') is-invalid  @enderror" placeholder="Name" name="name" value="{{old('name')}}">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea  name="description" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>


            <div class="form-group">
                <label for="">Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                        @error('image')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
            </div>


            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
            </div>
          </form>
</div>


@endsection
