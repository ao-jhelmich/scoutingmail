@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-10">
            <h1>Ontvangers</h1>
            <form action="{{ route('reciever.store') }}" method="POST" class="form-inline mb-3">
                @csrf

                <input type="text" name="name" class="form-control mb-2 mr-sm-2 {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Naam" value="{{ old('name') }}" required>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif

                <input type="text" name="email" class="form-control mb-2 mr-sm-2 col-6{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <button type="submit" class="btn btn-primary mb-2">Toevoegen</button>
            </form>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">naam</th>
                        <th scope="col">email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recievers as $reciever)
                        <tr>
                            <th scope="row">{{ $reciever->id }}</th>
                            <td>{{ $reciever->name }}</td>
                            <td>{{ $reciever->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-5">
                {{ $recievers->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
