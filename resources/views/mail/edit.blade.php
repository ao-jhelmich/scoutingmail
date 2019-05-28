@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col col-10">
            <div class="card-body">
                <form action="{{ route('mail.update', $mail) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    @include('mail.form')
                    <button type="submit pull-right" class="btn btn-primary">Opslaan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
