<a href="{{route('user_profile',$comment->user->name)}}" style="text-decoration: none;">
    <img src="https://pitcoder.github.io/img/portfolio/thumbnails/avatar.png" alt="Avatar" class="user-image-comment">
    <p class="threadDisplay panel-username"> {{$comment->user->name}} | Level: Copper</p>
    <!-- {{ $thread->get()->count()}} -->
</a>
@if(auth()->check() && auth()->user()->id == $comment->user_id)
<div class=" dropdown show pull-right">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <span class="glyphicon glyphicon-cog pull-right"></span>
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="btn btn-primary btn-xs" data-toggle="modal" href="#{{$comment->id}}">edit</a>
        <div class="modal fade" id="{{$comment->id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                        </button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <div class="comment-form">

                            <form action="{{route('comment.update',$comment->id)}}" method="post" role="form">
                                {{csrf_field()}}
                                {{method_field('put')}}
                                <legend>Edit comment</legend>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="body" id="" placeholder="Input..."
                                        value="{{$comment->body}}">
                                </div>


                                <button type="submit" class="btn btn-primary">Comment</button>
                            </form>

                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        {{--//delete form--}}
        <form action="{{route('comment.destroy',$comment->id)}}" method="POST" class="inline-it">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="btn btn-xs btn-danger" type="submit" value="Delete">
        </form>
    </div>

</div>
@endif
<hr>
<div class="container">
    <h3 class="container">{{ucfirst($comment->body)}} </h3>
</div>
<hr>

<div class="actions">
    <button class="btn btn-default btn-xs" id="{{$comment->id}}-count">{{$comment->likes()->count()}}</button>
    <span class="btn btn-default btn-xs  {{$comment->isLiked()?"liked":""}}"
        onclick="likeIt('{{$comment->id}}',this)"><span class="glyphicon glyphicon-heart"></span></span>
</div>

@section('js')
<script>
function likeIt() {
    console.log("hello")
}
</script>
@endsection