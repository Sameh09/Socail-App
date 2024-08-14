@extends('layout.app')
@section('title','Admin Dashboard')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('admin.shared.left_sidebar')
        </div>
        <div class="col-9">
            <h1>Admin Dashboard</h1>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    @include('shared.widget',[
                        'title'=>'total users',
                        'icon'=>'fas fa-users',
                        'data'=>$totalUsers
                    ])
                </div>
                <div class="col-sm-6 col-md-4">
                    @include('shared.widget',[
                        'title'=>'total ideas',
                        'icon'=>'fas fa-lightbulb',
                        'data'=>$totalIdeas
                    ])
                </div>
                <div class="col-sm-6 col-md-4">
                    @include('shared.widget',[
                        'title'=>'total comments',
                        'icon'=>'fas fa-comment',
                        'data'=>$totalComments
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection
