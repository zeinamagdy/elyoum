@extends('layout')
@section('header')
<div class="page-header">
        <h1>Messages / Show #{{$message->id}}</h1>
        <form action="{{ route('messages.destroy', $message->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('messages.edit', $message->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="user_name">USER_NAME</label>
                     <p class="form-control-static">{{$message->user_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="email">EMAIL</label>
                     <p class="form-control-static">{{$message->email}}</p>
                </div>
                    <div class="form-group">
                     <label for="telephon">TELEPHON</label>
                     <p class="form-control-static">{{$message->telephon}}</p>
                </div>
                    <div class="form-group">
                     <label for="body">BODY</label>
                     <p class="form-control-static">{{$message->body}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('messages.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection