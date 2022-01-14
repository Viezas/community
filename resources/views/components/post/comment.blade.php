<div>
    @foreach ($comments as $comment)
    <div>
        <hr>
        <div class="w-100 d-flex flex-col">
            <div style="margin-right: 5%">
                {{ __('user.profile_picture') }}
            </div>
            <div class="w-100">
                <div class="w-25 d-flex align-items-center justify-content-between mb-2">
                    {{ $comment->user->name }} <span>{{ $comment->format_created_at }}</span>
                </div>
                <div class="mb-2">
                    {{ $comment->comment }}
                </div>
                <form action="{{ route('timeline.likeComment', $comment->id) }}" method="POST">
                    @csrf
                    <button class="btn btn-outline-primary {{ $comment->liked() ? 'unlikeBtn bg-primary' : 'likeBtn' }}" style="width: 5%;">
                        @if ($comment->liked())
                            <svg xmlns="http://www.w3.org/2000/svg" fill="blue" fill-opacity="0%" viewBox="0 0 24 24" stroke="white">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                            </svg>              
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" fill-opacity="0%" viewBox="0 0 24 24" stroke="black">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                            </svg>
                        @endif
                    </button>
                    <span style="margin-left: 10px">{{ count($comment->likes) }}</p>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

<script>
    var likeBtn = $(".likeBtn");
    var unlikeBtn = $(".unlikeBtn");

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