
<div class="mb-3">

    <label class="form-label">
        <p>Nombre de Contacto</p>
        <input name="name" type="text" value="{{ old('name', $contact->name)}}">
        @error('name')
            <br>
            <small style="color: red">{{ $message }}</small>
        @enderror
    </label>
    <br>


    <label class="form-label">
        <p>Número de Contacto </p>
        <input name="number" type="text" value="{{ old('number', $contact->number)}}">
        @error('body')
            <br>
            <small style="color: red">{{ $message }}</small>
        @enderror
    </label>
</div>
<br>
