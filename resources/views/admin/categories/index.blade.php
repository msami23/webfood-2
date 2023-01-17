@extends('admin.index')

@section('title','Categories')


@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Categories</li>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('admin.categories.create')}}" class="btn btn-sm btn-outline-primary mr-2 ">New Create</a>

    </div>
    <div class="card-body">



        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                <tr>

                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td><img src="{{ Storage::url ($category->image)}}" alt="" height="50"></td>
                    <td>{{$category ->created_at}}</td>

                    <td>
                        <a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('admin.categories.destroy', $category->id)}}" method="post"
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








{{-- <x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.categories.create') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Category</a>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                            <table class="min-w-full">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Image
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Description
                                        </th>
                                        <th scope="col" class="relative py-3 px-6">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $category->name }}
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <img src="{{ Storage::url($category->image) }}" class="w-16 h-16 rounded">
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $category->description }}
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex space-x-2">
                                                <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Edit</a>
                                                <form
                                                    class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                                    method="POST"
                                                    action="{{ route('admin.categories.destroy', $category->id) }}"
                                                    onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout> --}}
