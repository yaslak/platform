@extends('layouts.app')
@section('content')
    <div class="card border-warning">
        <div class="card-header border-warning">
            <h6 class="text-warning">nouveau mot de passe : </h6>
        </div>
        <div class="card-body">
            {!! Form::open(['method'=>'put','class'=>'form-horizontal']) !!}
                <div class="form-group">
                    {{ Form::label('password','votre nouveau mot de passe :') }}
                    {{ Form::password('password',['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('password-confirm','votre nouveau mot de passe :') }}
                    {{ Form::password('password_confirmation',['class'=>'form-control']) }}
                </div>
            @if($errors->has('password'))
                <span class="text-danger">{{$errors->first('password')}}</span>
            @endif
                <div class="form-group">
                    {{ Form::submit('update',['class'=>'btn btn-outline-warning float-right']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop