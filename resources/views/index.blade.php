@extends('layouts.base')

@section('content')
<div class="container">
    <h1>Documentación de la API</h1>

    <h2>Registro de Usuario</h2>
    <p>Endpoint: <code>/api/register</code></p>
    <p>Método HTTP: <code>POST</code></p>
    <p>Requiere JSON:</p>
    <pre>
{
    "name": "zeus",
    "email": "zeta@zeta.com",
    "username": "zeta",
    "last_name": "mendoza",
    "mother_last_name": "lopez",
    "phone": "123456789",
    "role": "ADMIN",
    "password": "1234"
}
    </pre>
    <p>Respuesta:</p>
    <pre>
{
    "message": "User created",
    "code": 201
}
    </pre>

    <h2>Iniciar Sesión</h2>
    <p>Endpoint: <code>/api/login</code></p>
    <p>Método HTTP: <code>POST</code></p>
    <p>Requiere JSON:</p>
    <pre>
{
    "email": "wewin@wewin.com",
    "password": "123456"
}
    </pre>
    <p>Respuesta:</p>
    <pre>
{
    "access_token": "Responderá un token de JWT",
    "expires_in": 3600
}
    </pre>

    <h2>Eliminar Usuario</h2>
    <p>Endpoint: <code>/api/delete/{id}</code></p>
    <p>Método HTTP: <code>DELETE</code></p>
    <p>Requiere Autenticación: Sí, con un token de portador (Bearer Token) generado al iniciar sesión.</p>
    <p>Parámetros de Ruta:</p>
    <pre>
{
    "id": "ID del usuario a eliminar"
}
    </pre>
    <p>Ejemplo de Uso:</p>
    <pre>
DELETE /api/delete/123
Authorization: Bearer [Token generado al iniciar sesión]
    </pre>
    <p>Respuesta:</p>
    <pre>
{
    "deleted": true
}
    </pre>
</div>
@endsection
