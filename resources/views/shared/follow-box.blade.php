@php 
use App\models\User;
$topUsers = cache()->remember('topUsers', now()->addMinutes(5), function () {
            return User::withCount('ideas')
                ->orderBy('ideas_count', 'DESC')
                ->take(10)->get();
        });
@endphp

<div class="card mt-3">
    <div class="card-header pb-0 border-0">
        <h5 class="">{{__('ideas.top_users')}}</h5>
    </div>
    <div class="card-body">
        @foreach ($topUsers as $user)
            <div class="hstack gap-2 mb-3">
                <div class="avatar">
                    <a href="{{ route('users.show', $user->id) }}"><img style="width:50px;"
                            class="avatar-img rounded-circle" src="{{ $user->getImageURL() }}" alt=""></a>
                </div>
                <div class="overflow-hidden">
                    <a class="h6 mb-0" href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
                    <p class="mb-0 small text-truncate">{{ $user->email }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
