@extends('layouts.app')




@section('content')

     <h1>Posts</h1>

     <table class="table">
       <thead>
        <tr>
          <th>Id</th>
          <th>Owner</th>
          <th>Category</th>
          <th>Photo</th>
          <th>Title</th>
          <th>Body</th>
          <th>created</th>
          <th>Updated</th>
        </tr>
        </thead>
        
        <tbody>
        @if($posts)
          
          @foreach($posts as $post)
            <tr>
              <td>{{$post->id}}</td>
              <td>{{$post->user->name}}</td>
              <td>{{$post->category ? $post->category->name : "Uncategorized"}}</td>
              <td><img heoght="50" src="{{$post->photo ? $post->photo->file : 'hhtp://placehold.it/400x400'}}" alt=""></td>
              <td>{{$post->title}}</td>
              <td>{{$post->body}}</td>
              <td>{{$post->created_at}}</td>
              <td>{{$post->updated_id}}</td>
            </tr>
         @endforeach
       @endif  
        </tbody>
     </table>



@stop
