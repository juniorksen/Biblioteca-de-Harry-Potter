<form method="POST" action="{{ route('user.validaccion') }}">
    @csrf
    <div>
        <label for="email">Correo Electrónico</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>

    <div>
        <label for="password">Contraseña</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <button type="submit">Iniciar Sesión</button>
    </div>
</form>
