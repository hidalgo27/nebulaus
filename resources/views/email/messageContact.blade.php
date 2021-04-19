@component('mail::message')
    CONTACTO
    <br>
    <p>Haz recibido un nuevo mensaje desde el formulario de contacto</p>
    <p>Nombre: {{$tnombre}}</p>
    <p>Email: {{$temail}}</p>
    <p>Whatsaap: {{$twhatsaap}}</p>
    <p>Mensaje: {{$tmensaje}}</p>
@endcomponent
