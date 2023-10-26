@extends('layout')
@section('title', 'home')

@section('content')

{{-- @forelse ($posts as $item) Instead foreach loop. for the @empty function  --}}
<div class="post-item">
    <div class="post-content">

        <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" scope="col">Id</th>
                <th class="text-center" scope="col">Title</th>
                <th class="text-center" scope="col">Desciption</th>
                <th  class="text-center" scope="col">Time</th>
                <th  class="text-center" scope="col">Action</th>
              </tr> 
            </thead> 
            <tbody>
                {{-- @dd($posts); --}}
                @forelse ($posts as $item)
                <tr>
                    <td>{{$item->id}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->created_at}}</td>
                    <td class="text-center ">
                        <a class="btn btn-primary mx-2" href="{{ route('posts.view', $item->id) }}">View</a>
                        <a class="btn btn-secondary mx-2" href="{{ route('posts.edit', $item->id) }}">Edit</a>
                        <a class="btn btn-danger mx-2 my-1" href="{{ route('posts.destroy', $item->id) }}">Delete</a>
                    </td>
                  </tr>
                  
                  @empty
                  <h2>There are no post yet.</h2>
                      
                  @endforelse
                
            </tbody>
          </table>
    </div>
</div>

@endsection    