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