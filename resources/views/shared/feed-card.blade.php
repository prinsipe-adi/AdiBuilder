<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/8.x/croodles/svg" alt="">
                <div>
                    <h5 class="card-title mb-0"><a href="#"> Juan dela Cruz
                        </a></h5>
                </div>
            </div>
            <div>
                <form action="{{route('feed.destroy', $feed->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{route('feed.edit', $feed->id)}}">edit</a>
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($editing ?? false)
            <form action="{{route('feed.create')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <textarea class="form-control" id="idea" rows="3" name="feed"></textarea>
                @error('feed')
                <span class="d-block fs-6 text-danger mt-2">{{$message}}</span>
                @enderror
                </div>
                <div class="">
                    <button class="btn btn-secondary"> Share </button>
                </div>
            </form>
        @else
            <p class="fs-6 fw-light text-muted">
                {{$feed->content}}
            </p>
        @endif

        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                    </span>{{$feed->Likes}}</a>
            </div>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{$feed->created_at}}</span>
            </div>
        </div>
        <div>
            <div class="mb-3">
                <textarea class="fs-6 form-control" rows="1"></textarea>
            </div>
            <div>
                <button class="btn btn-secondary btn-sm"> Post Comment </button>
            </div>
            <hr>
        </div>
    </div>
</div>
