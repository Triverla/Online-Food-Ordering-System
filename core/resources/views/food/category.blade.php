@extends('layouts.masterpageweb')
@section('title','Categories')

@section('content')
<br>
<div class="container">
    <h2 class="text-center">Product Categories <a class="btn btn-primary float-right" href="{{route('cat.create')}}">ADD CATEGORY</a></h2>

    <table class="table table-bordered table-condensed" style="color:black">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($categories as $cat)
            <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->name}}</td>
            <td>
                <a class="text-success" href=""><i class="fa fa-eye"></i>
                <a class="text-info" href=""><i class="fa fa-edit"></i>
                <a class="text-danger" href=""><i class="fa fa-trash"></i>
            </td>
        </tr>    
                @endforeach
           
        </tbody>
        {{$categories->links()}}
    </table>
</div>
@endsection