@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach($contact_ways as $card)
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table style="width: 100%;height: 100%;font-family: Lato-Regular">
                            <tr>
                                <td colspan="2">{{$card["name"]}}</td>
                                <td rowspan="2"><img src="{{url("logo/".$card["image"])}}" class="logo-image"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" rowspan="2">
                                    <a href="{{$card["link"]}}" class="btn btn-link">{{$card["id"]}}</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection