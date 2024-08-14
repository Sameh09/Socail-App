@auth
    @if (Auth::user()->likesidea($idea))
        <form action="{{ route('ideas.unlike', $idea->id) }}" method="POST">
            @csrf
            <button type="submit" href="#" class="fw-light nav-link fs-6">
                <span class="fas fa-heart-crack me-1 ">
                    {{ $idea->likes_count }}
                </span>
            </button>
        </form>
    @else
        <form action="{{ route('ideas.like', $idea->id) }}" method="POST">
            @csrf
            <button type="submit" href="#" class="fw-light nav-link fs-6">
                <span class="fas fa-heart me-1 ">
                    {{ $idea->likes_count }}
                </span>
            </button>
        </form>
    @endif
@endauth
@guest
    <a href="{{ route('login') }}" class="fw-light nav-link fs-6">
        <span class="fas fa-heart me-1 ">
            {{ $idea->likes_count }}
        </span>
    </a>
@endguest
