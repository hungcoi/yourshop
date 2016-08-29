@extends('layouts.app')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">Category</div>

                <div class="panel-body">
                	<table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $category)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>
                                        <a href="{{ url('categories/' . $category->id ) }}">{{ $category->name }}</a>
                                    </td>
                                    <td>{{ $category->type }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>{{ $category->created_ad }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
