<div>
    @forelse($threads as $thread)
        <div class="panel panel-light" style="border: 1px solid #BDBBBB; padding: 10px; box-shadow: 2px 7px #DFD9D8;">
            <div class="panel-heading thread-header">
                <a href="{{route('user_profile',$thread->user->name)}}" style="text-decoration: none;" >
                    <img src="https://pitcoder.github.io/img/portfolio/thumbnails/avatar.png" alt="Avatar" class="user-image">
                    <p class="threadDisplay panel-username"> {{$thread->user->name}}</p>
                </a>
                <div class="pull-right">
                <h3 > answer </h3>
                </div>
            </div>
            <a href="{{route('thread.show',$thread->id)}}" style="text-decoration: none; color: #636b6f;">
                <div class="panel-body thread-body">
                    <div>
                         <h3 class="thread-title">{{$thread->subject}}</h3>
                            <h4 class="tags-thread"> html </h4>
                    </div>
                    <!-- <p>{{str_limit($thread->thread,1000) }}</p> -->
                    {!! \Michelf\Markdown::defaultTransform(str_limit($thread->thread,1000) )  !!}
                </div>
            </a>
            <div class="panel-footer" style="background: white">
                <div class="pull-right">
                    Posted by: <a href="{{route('user_profile',$thread->user->name)}}">{{$thread->user->name}}</a> at {{$thread->created_at->diffForHumans()}}
                </div>
                <div class="pull-left">
                    last reply; <b> john Alexendra </b>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="or-seperators"></div>
        <!--  -->
    @empty
        <h5>No threads</h5>

    @endforelse
    </div>
{!! $threads->render() !!}