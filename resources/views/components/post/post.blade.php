<div class="border d-flex flex-col p-3">
    <div style="margin-right: 5%">
        {{ __('user.profile_picture') }}
    </div>
    <div class="w-100">
        <p><span style="margin-right: 5%">{{ $post->user->name }}</span><span>{{ $post->format_created_at }}</span></p>
    <p>{{ $post->message }}</p>          
    </div>
</div>