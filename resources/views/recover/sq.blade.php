@extends('layouts.app')
@section('content')
    <div class="card border-warning">
        <div class="card-header border-warning">
            <h6 class="text-warning">Questions Secrète</h6>
        </div>
        <div class="card-body">
            {!! Form::open(['method'=>'post','class'=>'form-horizontal']) !!}
            <div class="form-group">
                {{ Form::label('question','Choix Question') }}
                <select name="question" class="form-control">
                    <option value=""></option>
                    @foreach($questions as $question)
                        <option value="{{$question->id}}">{{$question->question}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                @if($errors->has('question'))
                    <span class="text-danger">{{$errors->first('question')}}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('response','response') }}
                {{ Form::text('response', null,['id'=> 'response','class'=>'form-control']) }}
            </div>
            <div class="form-group">
                @if($errors->has('response'))
                    <span class="text-danger">{{$errors->first('response')}}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::submit('envoyer',['class'=>'btn btn-outline-warning float-right']) }}
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@stop