<div class='d-flex flex-row'>
    <div class="w-100">
        <form action="{{ route('timeline.add_comment', $post->id ) }}" method="POST">
            @csrf

            <textarea name="comment" id="comment" rows="10" class="border w-100" style="resize: none;" placeholder="{{ __('post.form.placeholder') }}">{{ old('comment') }}</textarea>
            @if ($errors)
                <p class="text-danger">{{ $errors->first('comment') }}</p>
            @endif

            <div class="w-100 d-flex align-items-center justify-content-end">
                <button type="submit" class="btn btn-primary">{{  __('post.form.sendComment') }}</button>
            </div>
        </form>
        @if (count($post->comments) > 0)
            <x-comments :comments="$post->comments"></x-comments>
        @endif
    </div>
</div>