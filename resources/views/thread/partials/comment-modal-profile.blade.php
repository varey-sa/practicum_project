<div class="modal fade" id="{{$comment->user->id}}">
    <div class="modal-dialog">
        <div class="modal-content modal-overall">
            <div class="modal-header" style="border: none">
                <button type=" button" class="close pull-left" data-dismiss="modal" aria-hidden="true">&times;
                </button>
                <div style="text-align: center">
                    <img src="https://pitcoder.github.io/img/portfolio/thumbnails/avatar.png" alt="Avatar"
                        class="user-image-profile">
                    <div class="threadDisplay">
                        {{ucfirst($comment->user->name)}}
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
                            Speciality
                        </div>
                        <div class="row text-center row-body">
                            {{$comment->user->major}}
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row text-center row-header">
                            Answers
                        </div>
                        <div class="row text-center row-body">
                            {{$comment->user->comments->count()}}

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row text-center  row-header">
                            Questionaries
                        </div>
                        <div class="row text-center row-body">
                            {{$comment->user->threads->count()}}
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
                    <a href="{{route('user_profile',$comment->user->name)}}" class="btn btn-default">
                        {{ucfirst($comment->user->name)}}'s profile</a>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->