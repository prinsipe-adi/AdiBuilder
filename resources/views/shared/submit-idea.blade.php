<h4 class="text-center"> Tell us your Thoughts</h4>
<div class="row">
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

</div>
