@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-10">
            <h1>Ontvangers</h1>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <a href="#" class="btn btn-primary">Ontvanger toevoegen</a>

                <form action="{{ route('reciever.index') }}" method="GET" class="form-inline">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Zoeken" value="{{ request('search') }}">

                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="submit">zoeken</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

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
                {{ $recievers->appends(request()->only('search'))->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
