@extends('admin.index')

@section('title', 'Reservation')


@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Reservation</li>
@endsection

@section('content')



    <div class="card">

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.reservation.update', $reservation->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="first_name">first Name</label>
                    <input type="text" class="form-control  @error('first_name') is-invalid  @enderror"
                        placeholder="first_name" name="first_name" value="{{$reservation->first_name}}">
                    @error('first_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="last_name">last Name</label>
                    <input type="text" class="form-control  @error('last_name') is-invalid  @enderror"
                        placeholder="last_name" name="last_name" value="{{$reservation->last_name}}">
                    @error('last_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control  @error('email') is-invalid  @enderror" placeholder="email"
                        name="email" value="{{$reservation->email}}">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control  @error('phone') is-invalid  @enderror" placeholder="phone"
                        name="phone" value="{{$reservation->phone}}">
                    @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="res_date">Reservation Date</label>
                    <input type="datetime-local" class="form-control  @error('res_date') is-invalid  @enderror"
                        placeholder="res_date" name="res_date" value="{{$reservation->res_date}}">
                    @error('res_date')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="table_id">Table</label>
                    <select class="form-control form-select" id="table_id" name="table_id">
                        <option value="">Select Tables</option>
                        @foreach ($tables as $table)
                            <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id) >{{ $table->name }}</option>
                        @endforeach
                    </select>
                    @error('table_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="guest_number">Guest </label>
                    <input type="number" class="form-control  @error('guest_number') is-invalid  @enderror"
                         placeholder="guest_number" name="guest_number" value="{{ $reservation->guest_number }}">
                    @error('guest_number')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>




                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>


@endsection
