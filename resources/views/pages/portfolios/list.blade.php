@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List Of Protfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List Of Protfolio</li>
            </ol>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>

                    <th scope="col">Title</th>
                    <th scope="col">Sub Title</th>
                    <th scope="col">Big Image</th>
                    <th scope="col">Small Image</th>
                    <th scope="col">Client</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($portfolios)>0)
                    @foreach ($portfolios as $portfolio)
                        <tr>
                        <th scope="row">{{$portfolio->id}}</th>
                            <td> {{$portfolio->title}} </td>
                            <td>{{$portfolio->sub_title}}</td>
                            <td>{{Str::limit(strip_tags($portfolio->big_image),10)}}</td>
                            <td>{{Str::limit(strip_tags($portfolio->small_image),10)}}</td>
                            <td>{{Str::limit(strip_tags($portfolio->client),10)}}</td>
                            <td>{{Str::limit(strip_tags($portfolio->category),10)}}</td>
                            <td>{{Str::limit(strip_tags($portfolio->description),40)}}</td>



                            <td>
                                <div class="row">
                                    <div class="col-sm-2">
                                    <a href="{{route('admin.portfolios.edit',$portfolio->id)}}" class="btn btn-primary">Edit</a>
                                    </div>
                                    <div class="col-sm-2"></div>
                                      <form action="{{route('admin.portfolios.destroy', $portfolio->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" name="submit" value="Delete" >
                                    </form>
                                </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @endif


                </tbody>
              </table>
    </main>

@endsection

