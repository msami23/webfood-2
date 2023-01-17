@extends('admin.index')

@section('title','Menus')


@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Menus</li>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('admin.menus.create')}}" class="btn btn-sm btn-outline-primary mr-2 ">New Menus</a>

    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($menus as $menu)
                <tr>

                    <td>{{$menu->id}}</td>
                    <td>{{$menu->name}}</td>
                    <td>{{$menu->description}}</td>
                    <td><img src="{{ Storage::url ($menu->image)}}" alt="" height="50" width="80"></td>
                    <td>{{$menu->price}}</td>
                    <td>{{$menu ->created_at}}</td>
                    <td>
                        <a href="{{route('admin.menus.edit', $menu->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('admin.menus.destroy', $menu->id)}}" method="post"
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
