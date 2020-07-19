@extends('layouts.front')


@section('content')
<div style="padding: 0px 30px 0px 30px">
    <div class="content-wrap well" style="background: #f5f8fa; border: none;">
        <span class="glyphicon glyphicon-cog pull-right"></span>
        <a href="{{route('user_profile',$thread->user->name)}}" style="text-decoration: none;">
            <img src="https://pitcoder.github.io/img/portfolio/thumbnails/avatar.png" alt="Avatar"
                class="user-single-image">
            <p class="threadDisplay panel-username"> {{$thread->user->name}}</p>
        </a>
        <p style="font-size: 30px">Q: {{$thread->subject}}</p>

        <div class="thread-details">
            {!! \Michelf\Markdown::defaultTransform($thread->thread) !!}
        </div>
        <br>
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <div class="singleThreadName">
            <small> Post by:<a href="{{route('user_profile',$thread->user->name)}}"><b>{{$thread->user->name}}</b></a>
                at {{$thread->created_at->diffForHumans()}}</small>
        </div>
        {{--@if(auth()->user()->id == $thread->user_id)--}}
        @can('update',$thread)

        <span class="glyphicon glyphicon-cog pull-right"></span>

        <div class="actions">

            <a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Edit</a>

            {{--//delete form--}}
            <form action="{{route('thread.destroy',$thread->id)}}" method="POST" class="inline-it">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input class="btn btn-xs btn-danger" type="submit" value="Delete">
            </form>

        </div>
        @endcan
        {{--@endif--}}
    </div>
    <hr>
    <div style="">
        <h2 style="text-align: center;"><b>ALL COMMENTS</b></h2>
        <div class="or-seperators"></div>
        {{--Answer/comment--}}
        @foreach($thread->comments as $comment)
        <div class="content-wrap well">
            @include('thread.partials.comment-list')
        </div>
        <hr>

        {{--reply to comment--}}

        <br>

        @foreach($comment->comments as $reply)
        <div class="btn btn-xs btn-default button" data-toggle="collapse" data-target="#{{$reply->id}}"
            aria-controls="collapseExample">reply</div>

        <br>
        {{--//reply form--}}
        <div class="collapse" id="{{$reply->id}}">
            <div style="margin-left: 50px" class="reply-form-{{$comment->id}}" id="">

                <form action="{{route('replycomment.store',$comment->id)}}" method="post" role="form">
                    {{csrf_field()}}
                    <legend>Create Reply</legend>

                    <div class="form-group">
                        <input type="text" class="form-control" name="body" id="" placeholder="Reply...">
                    </div>


                    <button type="submit" class="btn btn-primary btn-xs">Reply</button>
                </form>

            </div>
        </div>
        @include('thread.partials.reply-list')

        @endforeach


        @endforeach
        <br>
        <br>
        @include('thread.partials.comment-form')

        @endsection
    </div>
</div>


@section('js')

<script>
function toggleReply(commentId) {
    $('.reply-form-' + commentId).toggleClass('hidden');
}
</script>

@endsection