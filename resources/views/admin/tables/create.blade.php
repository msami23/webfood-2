@extends('admin.index')

@section('title', 'Categories')


@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Categories</li>
@endsection

@section('content')



<div class="card">

          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('admin.tables.store')}}" enctype="multipart/form-data" method="post">
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
                <label for="">guest nember</label>
                <input type="number" class="form-control  @error('name') is-invalid  @enderror" placeholder="guest_number" name="guest_number" value="{{old('guest_number')}}">
                @error('guest_number')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Status</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="avaliable" checked
                    @checked(old('status') == 'avaliable')>
                    <label class="form-check-label">Avaliable</label>
                  </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="pending"
                    @checked(old('status') == 'pending')>
                    <label class="form-check-label">Pending</label>
                  </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="unavaliable"
                    @checked(old('status') == 'unavaliable')>
                    <label class="form-check-label">Unavaliable</label>
                  </div>
                  @error('status')
                  <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>


              <div class="form-group">
                <label for="">Location</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="location" value="front" checked
                    @checked(old('location') == 'front')>
                    <label class="form-check-label">Front</label>
                  </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="location" value="inside"
                    @checked(old('location') == 'inside')>
                    <label class="form-check-label">Inside</label>
                  </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="location" value="outside"
                    @checked(old('location') == 'outside')>
                    <label class="form-check-label">Outside</label>
                  </div>
                  @error('location')
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
