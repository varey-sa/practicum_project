<div>
    @forelse($threads as $thread)
    <div style="border: 1px solid #BDBBBB; padding: 10px; box-shadow: 2px 7px #DFD9D8;">
        <div class="thread-header" style="margin: 0 20px 0 3px">
            <a data-target="#{{$thread->user->id}}" data-toggle="modal" style="text-decoration: none;">
                <img src="https://pitcoder.github.io/img/portfolio/thumbnails/avatar.png" alt="Avatar"
                    class="user-image">
                <p class="threadDisplay panel-username"> {{$thread->user->name}}</p>
            </a>
            <div class="pull-right">
                <h3> answer </h3>
            </div>
        </div>
        <div>
            <a href="{{route('thread.show',$thread->id)}}" style="text-decoration: none; color: #174062;">
                <div class="thread-body" style="vertical-align: baseline;">
                    <h3 class="thread-title" style="color: #174062"><b>Q:</b> {{ucfirst($thread->subject)}}</h3>

                    @foreach($tags as $tag)
                    <a href="{{route('thread.index',['tags'=>$tag->id])}}">
                        <h4 class="tags-thread"> # {{ $tag->name}} </h4>
                    </a>
                    @endforeach
                    {!! \Michelf\Markdown::defaultTransform(str_limit($thread->thread,1000) ) !!}
                </div>
            </a>
        </div>
        <div class="thread-footer">
            <div class="pull-right">
                1300 views Posted by: <a
                    href="{{route('user_profile',$thread->user->name)}}">{{$thread->user->name}}</a> at
                {{$thread->created_at->diffForHumans()}}
            </div>
            <div class="pull-left">
                last reply; <b> john Alexendra </b>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- modal profile -->
    <div class="modal fade" id="{{$thread->user->id}}">
        <div class="modal-dialog">
            <div class="modal-content modal-overall">
                <div class="modal-header" style="border: none">
                    <button type=" button" class="close pull-left" data-dismiss="modal" aria-hidden="true">&times;
                    </button>
                    <div style="text-align: center">
                        <img src="https://pitcoder.github.io/img/portfolio/thumbnails/avatar.png" alt="Avatar"
                            class="user-image-profile">
                        <div class="threadDisplay" st>
                            {{$thread->user->name}}
                            <br>
                            Level: Cooper
                            <br>
                        </div>
                    </div>

                </div>
                <div class="modal-body">
                    <div class="row" style="margin-left: 15px">
                        <div class="col-sm-4">
                            <div class="row text-center row-header">
                                total questions
                            </div>
                            <div class="row text-center row-body">
                                {{$thread->user->threads->count()}}
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row text-center row-header">
                                total comment
                            </div>
                            <div class="row text-center row-body">
                                {{$thread->user->comments->count()}}
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row text-center  row-header">
                                total comment
                            </div>
                            <div class="row text-center row-body">
                                {{$thread->user->comments->count()}}
                            </div>
                        </div>
                    </div>
                    <div style="margin-left: 15px">
                        <h3>Awords</h3>
                        <img src="image/award.png" class="award-image" alt="award">
                    </div>
                </div>
                <div class="modal-footer" style="border: none;margin-bottom: 30px">
                    <div style="text-align: center">
                        <a href="{{route('user_profile',$thread->user->name)}}" class="btn btn-default"> My Profile</a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <hr>
    <!--  -->
    @empty
    <h5>No threads</h5>

    @endforelse
</div>
<!-- {!! $threads->render() !!} -->