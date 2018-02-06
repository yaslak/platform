@extends('layouts.app')
@section('content')
    <div class="card border-warning">
        <div class="card-header border-warning">
            <h5 class="text-warning">Permissions :</h5>
        </div>
        <div class="card-body">
            <p class="text-light">
                La procédure de recuperation de mot de passe en cas de perte ou de difficulté d'accès a votre compte
                nécessite en première étape de vous envoyer un code de de récupération la validité de votre adresse mail
                est nécessaire a ce stade votre autorisation de valider votre adresse est la bien venu
            </p>
            {!! Form::open(['method'=>'put','class'=>'form-horizontal' ,'url' => route('recover.store')])!!}
            <input type="submit" value="Envoyer" class="btn btn-outline-warning float-right">
            {!! Form::close()!!}
        </div>
    </div>
@stop