@extends('admin.index')

@section('title','Tables')


@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Tables</li>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('admin.tables.create')}}" class="btn btn-sm btn-outline-primary mr-2 ">New Table</a>

    </div>
    <div class="card-body">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gust</th>
                    <th>Status</th>
                    <th>Location</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tables as $table)
                <tr>

                    <td>{{$table->id}}</td>
                    <td>{{$table->name}}</td>
                    <td>{{$table->guest_number}}</td>
                    <td>{{$table->status}}</td>
                    <td>{{$table->location}}</td>
                    <td>{{$table ->created_at}}</td>
                    <td>
                        <a href="{{route('admin.tables.edit', $table->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('admin.tables.destroy', $table->id)}}" method="post"
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

