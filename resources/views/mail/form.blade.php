<div class="form-group">
    <label>Onderwerp</label>
    <input type="text" name="subject" class="form-control {{ $errors->has('subject') ? ' is-invalid' : '' }}" placeholder="Onderwerp" value="{{ old('subject', $mail->subject) }}">

    @if ($errors->has('subject'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('subject') }}</strong>
        </span>
    @endif
</div>


<div class="form-group">
    <label for="editor">Mail inhoud</label>
    <textarea class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" id="editor">{{ old('message', $mail->message) }}</textarea>
    @if ($errors->has('message'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('message') }}</strong>
        </span>
    @endif
</div>
