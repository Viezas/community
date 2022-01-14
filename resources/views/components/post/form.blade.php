<div class='border d-flex flex-col p-3 mb-4'>
    <div style="margin-right: 5%">
        {{ __('user.profile_picture') }}
    </div>
    <div class="w-100">
        <form action="{{ route('timeline.store') }}" method="POST">
            @csrf

            <textarea name="message" id="message" rows="10" class="border w-100" style="resize: none;" placeholder="{{ __('post.form.placeholder') }}"></textarea>
            @if ($errors)
                <p class="text-danger">{{ $errors->first('message') }}</p>
            @endif

            <div class="w-100 d-flex align-items-center justify-content-end">
                <button type="submit" class="btn btn-primary">{{  __('post.form.send') }}</button>
            </div>
        </form>
    </div>
</div>