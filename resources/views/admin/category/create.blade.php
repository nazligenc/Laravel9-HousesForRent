@extends('layouts.adminbase')

@section('title', 'Add Category')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <h1>Add Category</h1>
            <div class="page-header">
                <h3 class="page-title"> Form elements </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category Elements</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" action="/admin/category/store" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Keywords</label>
                            <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Status</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="status">
                                <option>True</option>
                                <option>False</option>

                            </select>
                        </div>
                        <div class="form-check form-check-flat form-check-primary">
                            <section>

                            </section>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
            </div>

@endsection
