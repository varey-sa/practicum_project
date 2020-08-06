<!-- Button trigger modal -->
<button type="button" style="float: right" class="btn btn-primary btn-xs" data-toggle="modal"
    data-target="#exampleModal">
    Add new tag
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="text-alignment: center" id="exampleModalLabel">Add new tag</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('tag.store')}}" method="post" role="form">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name" name="name">
                    </div>
                    <div class="modal-footer">
                        <button type="Submit" class="btn-xs btn-primary">Submit</button>
                        <button type="button" class="btn-xs btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            {{--
        <button type="Submit" class="btn-xs btn-primary">Submit</button>
      </div> --}}
        </div>
    </div>
</div>