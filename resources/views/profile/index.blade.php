@extends('layouts.header-only')

@section('category')
<div class="col-md-3">
    <div class="dp">
        <img src="https://dummyimage.com/300x20j0/000/fff" alt="">
    </div>
    <h3>
        {{$user->name}}
    </h3>


</div>

@endsection

@section('content')
<div class="container">
  <div class="jumbotron">
  @auth
  <h1>hello</h1>
@endauth
  <div class="center">
  <img class="user-profile" src="/image/anime.jpg" alt="Italian Trulli"> &nbsp;&nbsp;
    <h1 style=" font-size: 18px;text-transform: uppercase;">{{$user->name}}</h1>
  </div>
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
    <ul>
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Morbi leo risus</li>
      <li class="list-group-item">Porta ac consectetur ac</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
  </div>
</div>
<div class="container">

    <mark><h3>{{$user->name}} latest Threads</h3></mark>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Questions</th>
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
             <td>No threads yet</td>
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
