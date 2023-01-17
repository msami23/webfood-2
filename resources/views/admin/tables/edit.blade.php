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
          <form action="{{route('admin.tables.update', $table->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('put')
            <div class="card-body">
              <div class="form-group">
                <label for="">Category Name</label>
                <input type="text" class="form-control  @error('name') is-invalid  @enderror" placeholder="Name" name="name" value="{{ $table->name }}">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="">guest nember</label>
                <input type="number" class="form-control  @error('name') is-invalid  @enderror" placeholder="guest_number" name="guest_number" value="{{$table->guest_number }}">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Status</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="avaliable" checked
                    @checked($table->status == 'avaliable')>
                    <label class="form-check-label">Avaliable</label>
                  </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="pending"
                    @checked($table->status == 'pending')>
                    <label class="form-check-label">Pending</label>
                  </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="unavaliable"
                    @checked($table->status == 'unavaliable')>
                    <label class="form-check-label">Unavaliable</label>
                  </div>

                </div>


              <div class="form-group">
                <label for="">Location</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="location" value="front" checked
                    @checked($table->status == 'front')>
                    <label class="form-check-label">Front</label>
                  </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="location" value="inside"
                    @checked($table->status == 'inside')>
                    <label class="form-check-label">Inside</label>
                  </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="location" value="outside"
                    @checked($table->status == 'outside')>
                    <label class="form-check-label">Outside</label>
                  </div>

                </div>



            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
            </div>
          </form>
</div>


@endsection
