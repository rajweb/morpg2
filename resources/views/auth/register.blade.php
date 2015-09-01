@extends('layout.register')

@section('title')
Welcome to MORPG Game.... Register
@stop()

@section('content')
    @include('layout.errors')

{!! Form::open(['url' => '/auth/register']) !!}

  
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
  
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password_confirmation', 'Confirm Password:') !!}
        {!! Form::password('password_confirmation', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type', 'User Type:') !!}
        {!! Form::select('type', array('admin' => 'Administrator', 'player' => 'Game Player'), 'player') !!}
    </div>

     <div class="form-group">
        {!! Form::submit('Register Now') !!}
    
    </div>

{!! Form::close() !!}


@stop()


