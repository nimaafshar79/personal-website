@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        @if(session("notification"))
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="alert alert-success" role="alert">
                <p class="text-center">{{session("notification")}}</p>
            </div>
        </div>
        @endif
        <div class="col-lg-6 col-md-9 col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">اطلاعات حساب</div>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <div href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">{{$user->username}}</h4>
                            <h5 class="list-group-item-text">نام کاربری</h5>
                        </div>
                        <div href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">{{$user->name}}</h4>
                            <h5 class="list-group-item-text">نام</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">تغییر</div>
                </div>
                <div class="panel-body text-center">
                    <form action="{{url("profile")}}" method="post">
                        {!! csrf_field() !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" placeholder="نام">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">تغییر</button>
                            </span>
                        </div>
                    </form><br/>
                    <form action="{{url("profile")}}" method="post">
                        {!! csrf_field() !!}
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" placeholder="رمز عبور">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">تغییر</button>
                            </span>
                        </div>
                    </form>
                    <br/>
                    <a href="/user/delete" class="btn btn-danger">حذف حساب</a>
                </div>
            </div>
        </div>
    </div>
@endsection