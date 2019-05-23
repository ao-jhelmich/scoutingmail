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
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=bj7k645516rstc6i6bi44pgdl8xkg1ftlnjkyinvdwdjdslk"></script>
<script>
    tinymce.init({
        selector: '#editor',
        menubar: false,
        height: 500,
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
    });
</script>
@endsection
