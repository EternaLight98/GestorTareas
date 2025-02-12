
<div class="mb-3">

    <label class="form-label">
        <p>Correo</p>
        <input name="title" type="text" value="{{ old('title', $post->title)}}">
        @error('title')
            <br>
            <small style="color: red">{{ $message }}</small>
        @enderror
    </label>
    <br>


    <label class="form-label">
        <p>Contraseña</p>
        <textarea name="body" >{{old('body', $post->body)}}</textarea>
        @error('body')
            <br>
            <small style="color: red">{{ $message }}</small>
        @enderror
    </label>
</div>
<br>
