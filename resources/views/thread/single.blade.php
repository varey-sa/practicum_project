@extends('layouts.header-only')

@section('content')
<div class="row" style=" margin: 15px">
    <!-- <div class="col-sm-7" style="float: left">
        <form action='thread/search' method=" POST">
            <div class="has-search">
                <input type="text" class="form-control" name="search" placeholder="Search...">
            </div>
            <div>
                <button type="submit"> claick</button>
            </div>
        </form>
    </div> -->
    <div class="col">
        <a class="btn btn-primary js-scroll-trigger" style="float: right" href="#comment-form"><i
                class="fa fa-plus"></i>
            Reply Comment</a>
    </div>
</div>
<div style="padding: 0px 70px 0px 70px">
    <div class="content-wrap well" style="background: #f5f8fa; border: none;">
        <div class="header-well">
            @can('update',$thread)
            <div class=" dropdown show pull-right">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-cog pull-right"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item btn" href="{{route('thread.edit',$thread->id)}}">Edit</a>
                    <a class="dropdown-item" href="#">
                        <form action="{{route('thread.destroy',$thread->id)}}" method="POST" class="inline-it">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="btn" type="submit" value="Delete">
                        </form>
                    </a>
                </div>
            </div>
            @endcan
            <a href="{{route('user_profile',$thread->user->name)}}" style="text-decoration: none;">
                <img src="https://pitcoder.github.io/img/portfolio/thumbnails/avatar.png" alt="Avatar"
                    class="user-single-image">
                <p class="threadDisplay panel-username"> {{$thread->user->name}}
                    <br> Level: Copper</p>
            </a>
        </div>
        <div>
            <h1 class="q-title">Q:</h1>
            <p class="question-title">
                {{ucfirst($thread->subject)}}
            </p>
        </div>

        <div class="thread-details">
            {!! \Michelf\Markdown::defaultTransform($thread->thread) !!}
        </div>
        <br>
        <div class="singleThreadName">
            <small> Post by:<a href="{{route('user_profile',$thread->user->name)}}"><b>{{$thread->user->name}}</b></a>
                at {{$thread->created_at->diffForHumans()}}</small>
        </div>
        {{--@endif--}}
    </div>
</div>
<hr>
<div>
    <h2 style="text-align: center;"><b>ALL COMMENTS</b></h2>
    <div class="or-seperators"></div>
    {{--Answer/comment--}}
    @foreach($thread->comments as $comment)
    <div class="content-wrap well">
        @include('thread.partials.comment-list')
    </div>
    <div class="or-seperators"></div>

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
    <div id="comment-form">
        <div class="container">

            <form action="{{route('threadcomment.store',$thread->id)}}" method="post" role="form">
                {{csrf_field()}}
                <!-- {{method_field('put')}} -->

                <legend>Create comment</legend>

                <div class="form-group">
                    <label for="body">Comment</label>
                    <textarea class="form-control" name="body" id="" placeholder="Input..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Comment</button>
            </form>

        </div>
    </div>

    @endsection
</div>


@section('js')

<script>
function toggleReply(commentId) {
    $('.reply-form-' + commentId).toggleClass('hidden');
}
</script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace('body');
</script>
@endsection