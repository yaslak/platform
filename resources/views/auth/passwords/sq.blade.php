@extends('layouts.app')
@section('content')
    <div class="card border-warning">
        <div class="card-header border-warning">
            <h6 class="text-warning">secrete Questions :</h6>
        </div>
        <div class="card-body">
            <p class="text-light">
                question : {{ $question->Question_secrete->question }} <br>
            </p>
            {!! Form::open(['method'=>'put','class'=>'form-horizontal']) !!}
                <div class="form-group">
                    {{ Form::label('response','Votre response :') }}
                    {{ Form::text('response',null,['class'=>'form-control bg-secondary
                    border-warning']) }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Soumettre',['class'=>'btn btn-outline-warning float-right']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop