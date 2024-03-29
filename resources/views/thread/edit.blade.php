@extends('layouts.front')

@section('heading')
<h4>Edit Thread</h4>
@endsection

@section('content')

@include('layouts.partials.error')

@include('layouts.partials.success')

<div class="row">
    <div class=" well">
        <form class="form-vertical" action="{{route('thread.update',$thread->id)}}" method="post" role="form"
            id="create-thread-form">
            {{csrf_field()}}
            {{method_field('put')}}
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="" placeholder="Input..."
                    value="{{$thread->subject}}">
            </div>

            <div class="form-group">
                <label for="thread">Thread</label>
                <textarea class="form-control" name="thread" id=""
                    placeholder="Input..."> {{$thread->thread}} </textarea>
            </div>
            <div class="form-group">
                <label for="tag">Tags</label>
                <select name="tags[]" multiple id="tag">
                    @foreach($thread->tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>
                <small> select the existence tags or add new tag</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
@section('js')
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace('thread');
</script>
@endsection