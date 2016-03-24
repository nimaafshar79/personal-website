@extends('layouts.app')
@section("content")
    <div class="container">
        <div class="alert alert-info alert-dismissible">
            شما این صفحه را مشاهده می کنید چون
            <strong>ادمین</strong>
            هستید
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">لیست کاربران</div>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            نام
                        </th>
                        <th>
                            نام کاربری
                        </th>
                        <th>
                            آخرین ورود
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user_row)
                        <tr>
                            <td>{{$user_row->id}}</td>
                            <td>{{$user_row->name}}
                                @if($user_row->username ==="admin")
                                    <span class="label label-info pull-right">ادمین</span>
                                @endif
                            </td>
                            <td>{{$user_row->username}}</td>
                            <td>{{$user_row->updated_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection