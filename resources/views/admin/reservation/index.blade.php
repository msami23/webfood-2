@extends('admin.index')

@section('title','Reservation')


@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Reservation</li>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('admin.reservation.create')}}" class="btn btn-sm btn-outline-primary mr-2 ">New Reservation</a>

    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Reservation Date</th>
                    <th>Table</th>
                    <th>Guest</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($reservations as $reservation)
                <tr>

                    <td>{{$reservation->id}}</td>
                    <td>{{$reservation->first_name}} {{$reservation->last_name}}</td>
                    <td>{{$reservation->email}}</td>
                    <td>{{$reservation->phone}}</td>
                    <td>{{$reservation->res_date}}</td>
                    <td>{{$reservation->table->name}}</td>
                    <td>{{$reservation->guest_number}}</td>
                    {{-- <td>{{$reservation ->created_at}}</td> --}}
                    <td>
                        <a href="{{route('admin.reservation.edit', $reservation->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('admin.reservation.destroy', $reservation->id)}}" method="post"
                            onsubmit="return confirm('Are you sure?');">

                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>

                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" >No Categories Defined</td>
                </tr>

                @endforelse

            </tbody>
        </table>
    </div>
    </div>




@endsection

