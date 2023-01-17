@extends('admin.index')

@section('title', 'Edit About Us')


@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">About Us</li>
    <li class="breadcrumb-item active">Edit About Us</li>
@endsection

@section('content')



    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.about.index')}}" class="btn btn-sm btn-outline-primary mr-2 ">Categories</a>

        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.about.update', $about->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="">About Name</label>
                    <input type="text" class="form-control  @error('name') is-invalid  @enderror" placeholder="Name"
                        name="name" value="{{ $about->name }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" placeholder="Description">{{ $about->description }}</textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Short_Description</label>
                    <textarea name="short_description" class="form-control" placeholder="short_description">{{ $about->short_description }}</textarea>
                    @error('short_description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image" accept="image/*">
                    @if ($about->image)
                    <img src="{{ Storage::url($about->image)}}" alt="" height="50">
                    @endif

                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                </div>
            </div>
        </form>
    </div>


@endsection
