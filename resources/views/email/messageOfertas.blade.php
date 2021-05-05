@extends('layouts.email.messageDefault')
@section('content')
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: 'Segoe UI';">
        <tr>
            <td class="h2">
                Enviar Ofertas
            </td>
        </tr>
        <tr>
            <td class="bodycopy">
                <p><strong>Email: {{$email}}</strong></p>
            </td>
        </tr>
    </table>
@stop
