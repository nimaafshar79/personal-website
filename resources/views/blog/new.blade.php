@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="panel-title">پست جدید</span>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/post') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('title') ? ' has-error ' : '' }}">
                        <label class="col-md-12 control-label" style="text-align: left">
                            تیتر مطلب
                        </label>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="title"
                                   value="{{ old('title') }}" style="margin-top: 10px;direction: rtl;">

                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        <label class="col-md-12 control-label" style="text-align: left">
                            متن مطلب
                            </label>

                        <div class="col-md-12">
                            <textarea class="form-control" rows="15" name="body" style="margin-top: 10px;resize:vertical;direction: rtl;"></textarea>

                            @if ($errors->has('body'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                ثبت
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection