@extends('layouts.app')
@section('content')
    <div class="container">
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <span class="panel-title">{{$post->title}}</span>
                    </div>
                    <div class="panel-body">
                        {!!nl2br($post->body)!!}
                    </div>
                    <div class="panel-footer">
                        <div style="display: flex; flex-direction: row ; justify-content: space-between">
                            <div class="label-success label ">{{$post->user->name}}</div>
                            <div class="label-success label">{{$post->created_at}}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="jumbotron" style="direction: rtl">
                <h2>پستی موجود نیست</h2>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <p>خودتان پستی بگذارید</p>
                    <p><a href="{{url("post/create")}}" class="btn btn-primary btn-lg">ایجاد پست</a> </p>
                @else
                    <p>وارد شوید یا ثبتنام کنید تا پستی بگذارید</p>
                    <p><a href="{{url("login")}}" class="btn btn-primary btn-lg">وارد شوید</a></p>
                @endif
            </div>
        @endif
    </div>
@endsection