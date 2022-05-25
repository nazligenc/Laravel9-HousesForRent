@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <a href="{{route('admin.category.create')}}" class="btn btn-primary btn-lg" style="width: 200px">Add Category</a>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Category List</li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category List</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th style="width: 40px">Edit</th>
                                <th style="width: 40px">Delete</th>
                                <th style="width: 40px">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->keywords}}</td>
                                <td>{{$rs->description}}</td>
                                <td>{{$rs->image}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-outline-secondary btn-info">Edit</a></td>
                                <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-outline-secondary btn-danger">Delete</a></td>
                                <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-outline-secondary btn-success">Show</a></td>
                            </tr>
                            @endforeach
                            </tbody>
            @endsection

        </div>
