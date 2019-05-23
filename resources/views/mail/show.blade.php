@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col col-10">
            <div class="card-body">
                <p>Onderwerp: {{ $mail->subject }}</p>
                <p>Bericht:</p>
                {!! $mail->message !!}
            </div>
        </div>
    </div>
</div>
@endsection
