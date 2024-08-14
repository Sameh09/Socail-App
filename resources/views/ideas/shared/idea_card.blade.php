<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <a href="{{ route('users.show', $idea->user->id) }}">
                    <img style="width:50px" class="me-2 avatar-sm rounded-circle" src="{{ $idea->user->ImageUrl() }}"
                        alt="{{ $idea->user->name }}">
                    <div>
                        <h5 class="card-title mb-0"> {{ $idea->user->name }}
                </a></h5>
            </div>
        </div>
        <div class="d-flex">

            <a class="btn btn-primary btn-sm mx-1" href="{{ route('ideas.show', $idea) }}">View</a>
            @auth
                @can('update', $idea)
                    <form action="{{ route('ideas.destroy', $idea->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a class="btn btn-primary btn-sm mx-1" href="{{ route('ideas.edit', $idea) }}">Edit</a>
                        <button class="btn btn-danger btn-sm">X</button>
                    </form>
                @endcan
            @endauth

        </div>
    </div>
</div>

<div class="card-body">
    @if ($editing ?? false)
        <form action="{{ route('ideas.update', $idea['id']) }}" method="POST">
            @method('put')
            @csrf
            <div class="mt-3">
                <textarea name="content" id="content" class="fs-6 form-control" rows="3">{{ $idea['content'] }}</textarea>
                @error('content')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-dark btn-sm mb-2 mt-2">Update</button>
            </div>
        </form>
    @else
        <p class="fs-6 fw-bold ">
            {{ $idea['content'] }}
        </p>
    @endif
    <div class="d-flex justify-content-between">
        <div>
            @include('ideas.shared.like_button')
        </div>
        <div>
            <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                {{ $idea['updated_at']->diffForHumans() }} </span>
        </div>
    </div>
    @include('ideas.shared.comments')
</div>
</div>
