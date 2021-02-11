@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Main</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Main</li>
            </ol>

        <form action="{{route('admin.main.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3> Background-Image</h3>
                <img style="height: 30vh" src="{{url($main->bc_img)}}" class="img-thumbnail">
                <input type="file" id="bc_img" name="bc_img">

                </div>
                <div class="form-gorup col-md-4 mt-3">
                    <div class="mb-3" >
                        <label for="title"><h4>Title</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$main->title}}">
                    </div>
                    <div class="mb-5" >
                        <label for="sub_title"><h4>Sub Title</h4></label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{$main->sub_title}}">
                    </div>
                    <div>
                        <h4> Upload Resume</h4>
                        <input type="file" class="form-control" id="resume" name="resume">
                    </div>
                </div>

            </div>
            <input type="Submit" name="submit" class="btn btn-success mt-5">
        </div>
    </form>
    </main>

@endsection

