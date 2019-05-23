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
