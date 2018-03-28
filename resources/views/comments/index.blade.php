<div class="container">
    <div class="pb-3">
        @foreach ($artist->comments as $comment)
            <div class="card p-2 mt-3 mb-3">
                <div>
                    <span class="font-weight-bold">{{$comment->title}}</span> 
                    <small class="pl-3">Posté le {{$comment->created_at->format('d/m/Y H:i:s')}}</small>
                    <hr>
                </div>
                <p>
                    {{$comment->content}}
                </p>
                <hr>
                <span class="d-block ml-auto">{{$comment->likes}}</span>
            </div>
        @endforeach
    </div>
</div>
