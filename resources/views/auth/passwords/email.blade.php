@extends('layouts.app')

@section('content')
    <div class="card border-warning">
        <div class="card-header border-warning">
            <h6 class="text-warning">Recuperation mail</h6>
        </div>
        <div class="card-body">
            <p class="text-light">
                un code de sécurité à été envoyer a votre adresse mail veuillez verifier votre boite mail
            </p>
            {!! Form::open(['method'=>'put','class'=>'form-horizontal']) !!}
                <div class="form-group">
                    {{ Form::label('code','Votre code de sécurité :',['class'=>'text-light']) }}
                    {{ Form::text('code',null,['class'=>'border-warning bg-secondary text-light form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Soumettre',['class'=>'btn btn-outline-warning float-right']) }}
                </div>
            {!! Form::close() !!}
        </div>
        <div class="card-footer border-warning">
            <div>
            <em class="text-light">
                Si vous n'avez trouvez aucun mail veuillez verifier votre boite de spam,
                Si le problème persiste veuillez renvoyer le mail.
            </em>
            </div>
        </div>
    </div>
@endsection
