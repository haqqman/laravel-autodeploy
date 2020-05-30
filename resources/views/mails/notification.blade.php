@extends('autodeploy::mails.master')

@section('header')
    You've got a new deployment!
@endsection

@section('content')
    <p style="margin-bottom: 20px;">
        <b>Hey there!</b>
    </p>

    <p style="margin-bottom: 80px;">
        Your repository just deployed automatically to the server. <br><br>
        <span style="font-style: italic">Thought you should know.</span>

    </p>
@endsection