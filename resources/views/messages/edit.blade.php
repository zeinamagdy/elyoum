@extends('layout')
<!-- edit -->
@section('head')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Messages / Edit #{{$message->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('messages.update', $message->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('user_name')) has-error @endif">
                       <label for="user_name-field">User_name</label>
                    <input type="text" id="user_name-field" name="user_name" class="form-control" value="{{ is_null(old("user_name")) ? $message->user_name : old("user_name") }}"/>
                       @if($errors->has("user_name"))
                        <span class="help-block">{{ $errors->first("user_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('email')) has-error @endif">
                       <label for="email-field">Email</label>
                    <input type="text" id="email-field" name="email" class="form-control" value="{{ is_null(old("email")) ? $message->email : old("email") }}"/>
                       @if($errors->has("email"))
                        <span class="help-block">{{ $errors->first("email") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('telephon')) has-error @endif">
                       <label for="telephon-field">Telephon</label>
                    <input type="text" id="telephon-field" name="telephon" class="form-control" value="{{ is_null(old("telephon")) ? $message->telephon : old("telephon") }}"/>
                       @if($errors->has("telephon"))
                        <span class="help-block">{{ $errors->first("telephon") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('body')) has-error @endif">
                       <label for="body-field">Body</label>
                    <textarea class="form-control" id="body-field" rows="3" name="body">{{ is_null(old("body")) ? $message->body : old("body") }}</textarea>
                       @if($errors->has("body"))
                        <span class="help-block">{{ $errors->first("body") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('messages.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
