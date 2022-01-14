<div class="border d-flex flex-col p-3 mb-4">
    <div style="margin-right: 5%">
        {{ __('user.profile_picture') }}
    </div>
    <div class="w-100">
        <p><span style="margin-right: 5%">{{ $post->user->name }}</span><span>{{ $post->format_created_at }}</span></p>
        <p>{{ $post->message }}</p>
        <div class="w-25">
            <form action="{{ route('timeline.likePost', $post->id) }}" method="POST">
                @csrf
                <button class="btn btn-outline-primary {{ $post->liked() ? 'unlikeBtn bg-primary' : 'likeBtn' }}" style="width: 20%;">
                    @if ($post->liked())
                        <svg xmlns="http://www.w3.org/2000/svg" fill="blue" fill-opacity="0%" viewBox="0 0 24 24" stroke="white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                        </svg>              
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" fill-opacity="0%" viewBox="0 0 24 24" stroke="black">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                        </svg>
                    @endif
                </button>
                <span style="margin-left: 10px">{{ count($post->likes) }}</p>
            </form>
        </div>
        <hr>
        <div class="d-flex align-items-center justify-content-between w-100"> 
            <div>
                {{ count($post->comments) }} commentaires
            </div>
            <div class="d-flex align-items-center justify-content-end">
                @if ($post->user_id == Auth::user()->id)
                    <form action="{{ route('timeline.destroy', $post->id) }}" method="POST" class="border" style="width: 10%; height: 10%">
                        @csrf
                        @method('DELETE')
                        <button class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 100%" fill="none" viewBox="0 0 24 24" stroke="red">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </form>
                @endif
                <button class="btn border showFormBtn" style="width: 10%; height: 10%; margin-left: 15px">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 100%" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                      </svg>
                </button>
            </div>
        </div>    
        <div class="d-none commentForm w-100 mt-3">
            <x-post-add-comment :post="$post"></x-post-add-comment>
        </div>
    </div>
</div>

<script>
    var likeBtn = $(".likeBtn");
    var unlikeBtn = $(".unlikeBtn");
    var showFormBtn = $('.showFormBtn')
    var showCommentForm = false;

    showFormBtn.click(function(){
        $(this).parent().parent().parent().children().last().removeClass('d-none'); 
        $(this).parent().parent().parent().children().last().addClass('d-block');
    })

    likeBtn.mouseenter(function(){
        $(this).children().attr('stroke', 'white');
    })
    likeBtn.mouseleave(function(){
        $(this).children().attr('stroke', 'black');
    })

    unlikeBtn.mouseenter(function(){
        $(this).removeClass('bg-primary');
        $(this).removeClass('btn-outline-primary');
        $(this).addClass('bg-danger');
        $(this).addClass('btn-outline-danger');
    })
    unlikeBtn.mouseleave(function(){
        $(this).removeClass('bg-danger');
        $(this).removeClass('btn-outline-danger');
        $(this).addClass('bg-primary');
        $(this).addClass('btn-outline-primary');
    })
</script>