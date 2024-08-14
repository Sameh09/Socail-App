@extends('layout.app')
@section('title','Edit Profile')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left_sidebar')
        </div>
        <div class="col-6">
            @include('shared.success_message')
            @include('users.user_edit_card')
        </div>
        <hr>
        <div class="mt-3"></div>
        @if (count($ideas) > 0)
            @foreach ($user->ideas as $idea)
                <div class="mt-3">
                    @include('ideas.shared.idea_card')
                </div>
            @endforeach
        @else
            <p class="text-center my-3">No results Found.</p>
        @endif
        <div class="mt-3"></div>
        {{ $ideas->withQueryString()->links() }}
    </div>
    <div class="col-3">
        @include('shared.search_bar')
        @include('shared.follow_box')
    </div>
    </div>
@endsection
