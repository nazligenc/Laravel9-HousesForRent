@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <h1>Category List</h1>
            <div class="page-header">
                <h3 class="page-title">Category List</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Category List</li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>
                    <p class="card-description"> Add class <code>.table</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Description</th>
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
                                <td>{{$rs->status}}</td>
                                <td><a href="/admin/category/edit{{$rs->id}}" class="btn btn-outline-secondary btn-info">Edit</a></td>
                                <td><a href="/admin/category/delete{{$rs->id}}" class="btn btn-outline-secondary btn-danger">Delete</a></td>
                                <td><a href="/admin/category/show{{$rs->id}}" class="btn btn-outline-secondary btn-success">Show</a></td>
                            </tr>
                            @endforeach
                            </tbody>
            @endsection

        </div>
