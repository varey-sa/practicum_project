<div class="comment-form">

    <form action="{{route('threadcomment.store',$thread->id)}}" method="post" role="form">
        {{csrf_field()}}
        <legend>Create comment</legend>

        <div class="form-group">
            <textarea class="form-control" name="body" id="body" placeholder="Input..."></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Comment</button>
    </form>

</div>
@section('js')
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace('body');
</script>
@endsection