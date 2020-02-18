@extends('layouts.masterpageweb')
@section('title','All Food')

@section('content')
<br>
<div class="container">
    <h2 class="text-center">Manage Food <a class="btn btn-primary float-right" href="{{route('food.create')}}">ADD FOOD</a></h2>

    <table class="table table-bordered table-condensed" style="color:black">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <th colspan="2">Actions</th>
        </thead>
        <tbody>
            @foreach ($foods as $food)
            <tr>
            <td>{{$food->id}}</td>
            <td>{{$food->name}}</td>
            <td>{{$food->description}}</td>
            <td>{{$food->price}}</td>
            <td>{{App\FoodCategory::find($food->category_id)->name}}</td>
            <td>
                <a class="text-success" href=""><i class="fa fa-eye"></i>
                <a class="text-info" href=""><i class="fa fa-edit"></i></td>
                    <td><form action="{{ route('food.delete', $food->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn-link" type="submit"><i class="fa fa-trash"></i></button>
                      </form>
            </td>
        </tr>    
                @endforeach
           
        </tbody>
        {{$foods->links()}}
    </table>
</div>
@endsection