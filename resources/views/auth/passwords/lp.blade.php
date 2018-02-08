@extends('layouts.app')
@section('content')
    <div class="card border-warning">
        <div class="card-header border-warning">
            <h6 class="text-warning">Last password :</h6>
        </div>
        <div class="card-body">
            {!! Form::open(['method'=>'put','class'=>'form-horizontal']) !!}
            <div class="form-group">
                {{ Form::label('password','last password : ') }}
                {{ Form::password('password',[
                                'class'=>'form-control border-warning bg-secondary text-light',
                                'autofocus',
                                'required']) }}
            </div>
            {!! Form::open() !!}
        </div>
    </div>
@stop