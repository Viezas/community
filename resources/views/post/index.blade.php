<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Community</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>      </head>
    <body>
      <div class="d-flex justify-content-between shadow-sm">
        <div class="px-4 d-flex align-items-center justify-content-between w-25">
            <a href="{{ route('index') }}" class="text-decoration-none m-0 fw-bold text-primary">ProLink</a>
            @if (Auth::user())
                <a href="{{ route('timeline.index') }}" class="text-decoration-none m-0 fw-bold text-primary">Timeline</a>
            @endif
        </div>
        <nav class="d-flex">
            <div class="d-flex justify-content-around">
                @if (!Auth::user())
                    <a href="{{ route('login') }}" class="btn bg-light p-3 rounded mr-2">Sign in</a>
                    <a href="{{ route('register') }}" class="btn bg-light p-3 rounded mr-2">Sign up</a>
                @else
                    <a href="{{ route('dashboard') }}" class="btn bg-light p-3 rounded mr-2">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn bg-light p-3 rounded mr-2">{{ __('Log Out') }}</button>
                    </form>
                @endif
            </div>
        </nav>
    </div>
      <div class="container w-75">
        @if (session('success'))
          <div class="alert alert-success mt-4">
            {{ session('success') }}
          </div>
        @endif

        <div class='border d-flex flex-col p-3 my-4'>
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
        @foreach ($posts as $post)
        <div class="border d-flex flex-col p-3 mb-4">
          <div style="margin-right: 5%">
              <div style="height: 75px; width: 75px; border-radius: 500px; background-image: url({{ $post->user->profilePicture != null ? asset('/storage/'.$post->user->profilePicture->name) : url('/img/default.jpg')  }}); background-size: cover; background-position: center;"></div>
          </div>
          <div class="w-100">
              <p><span style="margin-right: 5%">{{ $post->user->name }}</span><span>{{ $post->format_created_at }}</span></p>
              <p>{{ $post->message }}</p>
              
              @foreach ($post->medias as $media)
                  <img src="{{ asset("/storage/$media->name")}}" alt="img" class="w-25 mb-3">
              @endforeach
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
                            <form action="{{ route('timeline.destroy', $post->id) }}" method="POST" class="border" style="width: 10%">
                                @csrf
                                @method('DELETE')
                                <button class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 100%" fill="none" viewBox="0 0 24 24" stroke="red">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form>
                        @endif
                        <button class="btn border showFormBtn" style="width: {{ $post->user_id == Auth::user()->id ? '10%' : '20%' }}; margin-left: 15px">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 100%" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                              </svg>
                        </button>
                    </div>
                </div>    
                <div class="d-none commentForm w-100 mt-3">
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
                            <div>
                              @foreach ($post->comments as $comment)
                                <div>
                                    <hr>
                                    <div class="w-100 d-flex flex-col">
                                        <div style="margin-right: 5%">
                                            <div style="height: 75px; width: 75px; border-radius: 500px; background-image: url({{ $comment->user->profilePicture != null ? asset('/storage/'.$comment->user->profilePicture->name) : url('/img/default.jpg')  }}); background-size: cover; background-position: center;"></div>
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
                                                <button class="btn btn-outline-primary {{ $comment->liked() ? 'unlikeCommentBtn bg-primary' : 'likeCommentBtn' }}" style="width: 5%">
                                                    @if ($comment->liked())
                                                        <svg xmlns="http://www.w3.org/2000/svg"  fill="blue" fill-opacity="0%" viewBox="0 0 24 24" stroke="white">
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
                          @endif
                      </div>
                  </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
        <div class="px-5 border mt-5 py-5 d-flex align-items-center justify-items-center">
          <div>
              <a href="{{ route('leaglNotice') }}" class="">Mentions légales</a><br>
              <span>Conditions d'utilisation</span>
          </div>
          <div style="margin-left: 50px">
              <span>Nous contacter</span><br>
              <span>Conditions d'utilisation</span>
          </div>
      </div>
    </body>
</html>

<script>
  var likeBtn = $(".likeBtn");
  var unlikeBtn = $(".unlikeBtn");
  var showFormBtn = $('.showFormBtn')
  var showCommentForm = false;

  var likeCommentBtn = $(".likeCommentBtn");
  var unlikeCommentBtn = $(".unlikeCommentBtn");

  likeCommentBtn.mouseenter(function(){
      $(this).children().attr('stroke', 'white');
  })
  likeCommentBtn.mouseleave(function(){
      $(this).children().attr('stroke', 'black');
  })

  unlikeCommentBtn.mouseenter(function(){
      $(this).removeClass('bg-primary');
      $(this).removeClass('btn-outline-primary');
      $(this).addClass('bg-danger');
      $(this).addClass('btn-outline-danger');
  })
  unlikeCommentBtn.mouseleave(function(){
      $(this).removeClass('bg-danger');
      $(this).removeClass('btn-outline-danger');
      $(this).addClass('bg-primary');
      $(this).addClass('btn-outline-primary');
  })

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