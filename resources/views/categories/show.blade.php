@extends('layouts.app')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">Category {{ $category->name }}</div>

                <div class="panel-body">
					<div>{{ $category->name }}</div>
					<div>{{ $category->type }}</div>
					<div>{{ $category->slug }}</div>
					<div>{{ $category->description }}</div>
					<div>{{ $category->created_ad }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
