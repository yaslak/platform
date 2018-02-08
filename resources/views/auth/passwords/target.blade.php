@extends('layouts.app')

@section('content')
    <div class="card border-warning">
        <div class="card-header border-warning">
            <h5 class="text-warning">Procédure de recuperation de mots de passe : </h5>
        </div>
        <div class="card-body">
            veuillez indiquez votre nom d'utilisateur ou votre adresse email.
            {!! Form::open(['method'=>'put','class'=>'form-horizontal','url'=>route('reset.target.store')]) !!}
                <div class="form-group">
                    {{ Form::label('target','nom d\'utilisateur ou email : ',['class'=>'text-secondary']) }}
                    {{ Form::text('target',null,['class'=>'form-control border-warning bg-secondary','autofocus','required']) }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Cibler',['class'=>'btn btn-outline-warning float-right']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop