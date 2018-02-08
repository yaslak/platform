@extends('layouts.app')
@section('content')
    <div class="card border-warning">
        <div class="card-header border-warning">
            <h5 class="text-warning">Code de sécurité</h5>
        </div>
        <div class="card-body">
            <p class="text-light">
                un mail a été envoyer sur votre boite mail veuillez indiquez le code de sécurité
            </p>
            {!! Form::open(['method'=>'put', 'class'=> 'form-horizontal','url'=>route('recoverMail.store')]) !!}
            <div class="form-group">
                {{ Form::label('token','Code de sécurité') }}
                {{ Form::text('token',null,['class'=>'form-control']) }}
                @if($errors->has('token'))
                    <div class="form-control">
                        <p class="text-danger">
                            {{$errors->first('token')}}
                        </p>
                    </div>
                @endif
            </div>
            <div class="form-group">
                {{ Form::submit('valider',['class'=>'btn btn-outline-warning float-right']) }}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method'=>'post', 'class'=> 'form-horizontal','url'=>route('recoverMail.return')]) !!}
            <div class="form-group">
                {{ Form::submit('renvoyer',['class'=>'btn btn-outline-warning float-right']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop