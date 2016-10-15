@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Employees / Edit #{{$employee->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('employee_name')) has-error @endif">
                       <label for="employee_name-field">Employee_name</label>
                    <input type="text" id="employee_name-field" name="employee_name" class="form-control" value="{{ is_null(old("employee_name")) ? $employee->employee_name : old("employee_name") }}"/>
                       @if($errors->has("employee_name"))
                        <span class="help-block">{{ $errors->first("employee_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('collage')) has-error @endif">
                       <label for="collage-field">Collage</label>
                    <input type="text" id="collage-field" name="collage" class="form-control" value="{{ is_null(old("collage")) ? $employee->collage : old("collage") }}"/>
                       @if($errors->has("collage"))
                        <span class="help-block">{{ $errors->first("collage") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('image')) has-error @endif">
                       <label for="image-field">Image</label>
                    <input type="text" id="image-field" name="image" class="form-control" value="{{ is_null(old("image")) ? $employee->image : old("image") }}"/>
                       @if($errors->has("image"))
                        <span class="help-block">{{ $errors->first("image") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('employees.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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
