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
          <form action="{{route('admin.menus.update', $menu->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('put')
            <div class="card-body">
              <div class="form-group">
                <label for="">Menus Name</label>
                <input type="text" class="form-control  @error('name') is-invalid  @enderror" placeholder="Name" name="name" value="{{$menu->name}}">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea  name="description" class="form-control" placeholder="Description">{{ $menu->description }}</textarea>
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>


            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image" accept="image/*">
                @if ($menu->image)
                <img src="{{ Storage::url($menu->image)}}" alt="" height="50">
                @endif

                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Price</label>
                        <input type="number" class="form-control" name="price" value="{{$menu->price }}">
                        @error('price')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
            </div>


            <div class="form-group">
                <label for="categories">Categories</label>
                <select  class="form-control form-select" id="categories" name="categories[]">
                    <option value="">Select Categories</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" @selected($menu->categories->contains($category))>{{$category->name}}</option>
                    @endforeach
                </select>
                @error('')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>


            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
          </form>
</div>


@endsection
