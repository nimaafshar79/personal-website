@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-md-6"  style="display: flex; align-items: center; justify-content: flex-start; flex-direction: row; direction: rtl;height: 500px;" >
            <h3>
                صفحات
            </h3>
            <ul style="min-width: 300px;">
                <li>
                    <a href="{{url("/blog")}}">
                        وبلاگ
                    </a>
                </li>
                <li>
                    <a href="{{url("contact")}}">
                        ارتباط با من
                    </a>
                </li>
                <li>
                    <a href="{{url("information")}}">
                        درباره ی من
                    </a>
                </li>
                <li>
                    <a href="{{url("login")}}">
                        ورود کاربران
                    </a>
                </li>
                <li>
                    <a href="{{url("register")}}">
                        ثبت نام کاربران
                    </a>
                </li>
                <li>
                    <a href="{{url("logout")}}">
                        خروج کاربران
                    </a>
                </li>
                <li>
                    <a href="{{url("post/create")}}">
                        نوشتن پست
                    </a>
                </li>
                <li>
                    <a href="{{url("users")}}">
                        دیدن لیست کاربران (فقط برای ادمین)
                    </a>
                </li>
                <li>
                    <a href="{{url("profile")}}">
                        صفحه ی پروفایل
                    </a>
                </li>
                <li>
                    <a href="{{url("gallery")}}">
                        گالری
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-6" style="display: flex; align-items: center; justify-content: center; height: 500px">
            <h1 style="font-family: Ghasem; direction: rtl;font-size: 120px;">
                نیما
                <br/>
                &nbsp;&nbsp;&nbsp;
                افشار
            </h1>
        </div>
    </div>
@endsection