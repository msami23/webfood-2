@extends('admin.index')

@section('title', 'Menus')


@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Menus</li>
@endsection

@section('content')



<div class="card">

          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('admin.menus.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="">Category Name</label>
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
            <div class="form-group">
                <label for="">Price</label>
                        <input type="number" class="form-control" name="price" >
                        @error('price')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
            </div>


            <div class="form-group">
                <label for="categories">Categories</label>
                <select  class="form-control form-select" id="categories" name="categories[]">
                    <option value="">Select Categories</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>                    @endforeach
                </select>
                @error('categories')
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
