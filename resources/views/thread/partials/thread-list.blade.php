<div class="infinite-scroll">
    @forelse($threads as $thread)
    <div style="border: 1px solid #BDBBBB; padding: 10px; box-shadow: 2px 7px #DFDFDF;">
        <div class="thread-header" style="margin: 0 20px 0 3px">
            <a data-target="#{{$thread->user->id}}" data-toggle="modal" style="text-decoration: none;">
                <img src="https://pitcoder.github.io/img/portfolio/thumbnails/avatar.png" alt="Avatar"
                    class="user-image">
                <p class="threadDisplay panel-username"> {{ucfirst($thread->user->name)}}</p>
            </a>
            <div class="pull-right">
                @if(!empty($thread->solution))
                <p class="answer"> Answer </p>

                <i class='far fa-check-circle iconAnswer'></i>
                @endif
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
                Last updated: {{$thread->user->comments->count()}}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- modal profile -->
    @include('thread.partials.thread-modal-profile')
    <!-- end modal profile -->
    <hr>
    <!--  -->
    @empty
    <h5>No threads</h5>

    @endforelse
    <div style="text-align: center; ">
        {!! $threads->render() !!}
    </div>
</div>
@section('js')
<script type="text/javascript">
$('ul.pagination').hide();
$(function() {
    $('.infinite-scroll').jscroll({
        autoTrigger: true,
        loadingHtml: '<img class="center-block" src="/image/loading.gif" alt="Loading..." />',
        padding: 0,
        nextSelector: '.pagination li.active + li a',
        contentSelector: 'div.infinite-scroll',
        callback: function() {
            $('ul.pagination').remove();
        }
    });
});
</script>
@endsection