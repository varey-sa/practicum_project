@extends('layouts.front')

@section('heading',"Create Thread")

@section('content')


<div class="row">
    <div class=" well">
        <form class="form-vertical" action="{{route('thread.store')}}" method="post" role="form"
            id="create-thread-form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="subject">Title</label>
                <br />
                <small>Be specific and imagine you’re asking a question to another person</small>
                <input type="text" class="form-control" name="subject" id="" placeholder="Input..."
                    value="{{old('subject')}}">
            </div>

            <div class="form-group">
                <label for="thread">Body</label>
                <br />
                <small>Include all the information someone would need to answer your question</small>
                <textarea class="form-control" name="thread" id="" placeholder="Input..."> {{old('thread')}}</textarea>
            </div>

            <div class="form-group">
                <label for="tag">Tags</label>
                <select name="tags[]" multiple id="tag">
                    @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>
                <small> select the existence tags or add new tag</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @include('thread.partials.form_tag')

    </div>
</div>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/js/standalone/selectize.min.js"></script>

<script>
// $(function () {
//     $('#tag').selectize();
// })
$('#tag').selectize({
    delimiter: ',',
    persist: false,
    create: function(input) {
        return {
            value: input,
            text: input
        }
    }
});
</script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace('thread');
</script>
@endsection