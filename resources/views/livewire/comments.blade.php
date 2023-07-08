<div>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" wire:model.lazy="newName" required>
    </div>
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" id="comment" rows="3" required wire:model.lazy="newComment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" wire:click="addComments">Submit</button>
    @foreach($comments as $comment)
        <div id="comments-list">
            <div class="mt-3">
                <div class="card">
                    <div class="card-body d-flex p-3">
                        <div class="flex-grow-1">
                            <h4>{{$comment['created_by']}}</h4>
                        </div>
                        <div>
                            <span>{{$comment['created_at']}}</span>
                        </div>
                    </div>
                    <p class="p-3">{{$comment['body']}}</p>
                </div>
            </div>
        </div>

    @endforeach


</div>
