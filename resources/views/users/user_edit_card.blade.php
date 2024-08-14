<div class="mt-3">
    <div class="card">
        <form enctype="multipart/form-data" action="{{ route('users.update', $user->id) }}" method="POST">
            <div class="px-3 pt-4 pb-2">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img style="width:150px" class="me-3 avatar-sm rounded-circle" src="{{ $user->ImageUrl() }}"
                            alt="{{ $user->name }}">
                        <div>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                            @error('name')
                                <span class="text-danger fs-6">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    @auth
                        @if (auth()->id() === $user->id)
                            <div>
                                <a href="{{ route('users.show', $user->id) }}">View</a>
                            </div>
                        @endif
                    @endauth
                </div>
                @csrf
                @method('PUT')
                <div class="mt-5">
                    <label>Profile Picture</label>
                    <input type="file" name="image" class="form-control ">
                    @error('image')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
                <div class="px-2 mt-4">
                    <h5 class="fs-5"> Bio : </h5>

                    <textarea name="bio" class="fs-6 form-control mb-3" rows="3">{{ $user->bio }}</textarea>
                    @error('bio')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror

                    <button type="submit" class="btn btn-dark btn-sm mb-3">Save</button>
        </form>

        @include('users.shared.user_status')
        @auth
            @if (auth()->id() !== $user->id)
                <div class="mt-3">
                    <button class="btn btn-primary btn-sm"> Follow </button>
                </div>
            @endif
        @endauth
    </div>
</div>
</div>
