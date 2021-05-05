@extends('layouts.email.messageDefault')
@section('content')
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: 'Segoe UI';">
        <tr>
            <td class="h2">
                Mensaje de {{$nombre}}
            </td>
        </tr>
        <tr>
            <td class="bodycopy">
                <p><strong>Sitio Web: {{$sitio}}</strong></p>
                <p><strong>Email: {{$email}}</strong></p>
                <p><strong>Telefono: {{$telefono}}</strong></p>
                <p><strong>Compania: {{$compania}}</strong></p>
                <p><strong>Mensaje: {{$mensaje}}</strong></p>
            </td>
        </tr>
    </table>
@stop
