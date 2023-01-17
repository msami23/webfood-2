@extends('admin.index')

@section('title','About Us')


@section('breadcrumb')
@parent
<li class="breadcrumb-item active">About Us</li>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('admin.about.create')}}" class="btn btn-sm btn-outline-primary mr-2 ">New About</a>

    </div>
    <div class="card-body">



        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Short_Description</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($abouts as $about)
                <tr>

                    <td>{{$about->id}}</td>
                    <td>{{$about->name}}</td>
                    <td>{{$about->description}}</td>
                    <td>{{$about->short_description}}</td>
                    <td><img src="{{ Storage::url ($about->image)}}" alt="" height="50"></td>

                    <td>
                        <a href="{{route('admin.about.edit', $about->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('admin.about.destroy', $about->id)}}" method="post"
                            onsubmit="return confirm('Are you sure?');">

                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>

                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" >No About Defined</td>
                </tr>

                @endforelse

            </tbody>
        </table>


    </div>
</div>


@endsection
