@extends('layouts.header-only')

@section('category')
<div class="col-md-3">
    <div class="dp">
        <img src="https://dummyimage.com/300x200/000/fff" alt="">
    </div>
    <h3>
        {{$user->name}}
    </h3>

</div>

@endsection

@section('content')
<div class="container">


    <mark><h3>{{$user->name}} latest Threads</h3></mark>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Thread</th>
      <th scope="col">Create At</th>
    </tr>
  </thead>
  <tbody>
     @forelse($threads as $thread)
        <tr>
             <td>
                <a href="/thread/{{$thread->id}}">{{$thread->subject}}</a>
             </td>
             <td>{{$thread->created_at->format('Y-m-d')}}&nbsp;&nbsp;&nbsp;&nbsp; (<i style="color: blue">{{$thread->created_at->diffForHumans()}}<i/>)</td>
        </tr>
    @empty
        <tr>
             <td>No threads yet}</td>
        </tr>
    @endforelse
  </tbody>
</table>

    <br>
    <hr>

    <h3>{{$user->name}}'s latest Comments</h3>

    @forelse($comments as $comment)
    {{-- <h5>{{$user->name}} commented on <a
        href="{{route('thread.show',$comment->commentable->id)}}">{{$comment->commentable->subject}}</a>
    {{$comment->created_at->diffForHumans()}}</h5> --}}
    <h5>{{$user->name}} commented on {{$comment->created_at->diffForHumans()}}</h5>
    @empty
    <h5>No comments yet</h5>
    @endforelse
</div>

@endsection
