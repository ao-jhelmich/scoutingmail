@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col col-10">
            <div class="card-body">
                <a href="{{ route('mail.create') }}" class="btn btn-primary btn-lg btn-block mb-3">Nieuwe mailing toevoegen</a>
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">onderwerp</th>
                            <th scope="col">aangemaakt op</th>
                            <th scope="col">actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mailings as $mail)
                            <tr>
                                <th scope="row">{{ $mail->id }}</th>
                                <td>{{ str_limit($mail->subject, $limit = 30, $end = '...') }}</td>
                                <td>{{ $mail->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('mail.edit', $mail->id) }}" role="button">bekijk</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
