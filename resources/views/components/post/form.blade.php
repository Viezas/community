<div class='border d-flex flex-col p-3 mb-4'>
    <div style="margin-right: 5%">
        <div style="height: 100px; width: 100px; border-radius: 500px; background-image: url({{ Auth::user()->profilePicture != null ? asset('/storage/'.Auth::user()->profilePicture->name) : url('/img/default.png')  }}); background-size: cover; background-position: center;"></div>
    </div>
    <div class="w-100">
        <form action="{{ route('timeline.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <textarea name="message" id="message" rows="10" class="border w-100" style="resize: none;" placeholder="{{ __('post.form.placeholder') }}">{{ old('message') }}</textarea>
            @if ($errors)
                <p class="text-danger">{{ $errors->first('message') }}</p>
            @endif

            <input type="file" class="form-control" name="photos[]" multiple />
            @if ($errors)
                <p class="text-danger">{{ implode('', $errors->all(':message')) }}</p>
            @endif

            <div class="w-100 d-flex align-items-center justify-content-end mt-3">
                <button type="submit" class="btn btn-primary">{{  __('post.form.send') }}</button>
            </div>
        </form>
    </div>
</div>