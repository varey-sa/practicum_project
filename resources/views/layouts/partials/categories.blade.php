<div class="col-md-3">
    
    <form method="get" action="/thread/search">
        
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Search">
            <button type="submit"> search</button>
        </div>

    </form>
    <a class="btn btn-success form-control"  href="{{route('thread.create')}}">Create Thread</a> <br><br>
    <h4>Tags</h4>
    <ul class="list-group">
        <a href="{{route('thread.index')}}" class="list-group-item">
            <span class="badge">14</span>
            All Threads
        </a>
        @foreach($tags as $tag)
        <a href="{{route('thread.index',['tags'=>$tag->id])}}" class="list-group-item">
            <span class="badge">14</span>
            {{$tag->name}}
    </a>
        @endforeach
   
    </ul>
</div>