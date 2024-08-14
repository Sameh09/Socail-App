@extends('layout.app')
@section('title', 'Admin Dashboard')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('admin.shared.left_sidebar')
        </div>
        <div class="col-9">
            <h1>Ideas </h1>
            <table class="table table-striped table-bordered mt-3 ">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Content</th>
                        <th>Created At</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ideas as $idea)
                    <tr>
                        <td>{{$idea->id}}</td>
                        <td><a href="{{route('users.show',$idea->user->id)}}">{{$idea->user->name}}</a></td>
                        <td>{{Str::limit($idea->content,39)}}</td>
                        <td>{{$idea->created_at->toDateString()}}</td>
                        <td>
                            <a href="{{route('ideas.show',$idea->id)}}" >view</a>
                            <a href="{{route('ideas.edit',$idea->id)}}" >edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{$ideas->links()}}
            </div>
        </div>
</div>
@endsection
