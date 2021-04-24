@extends('layouts.email.messageDefault')
@section('content')
    <tr>
        <td class="innerpadding borderbottom">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td class="h2">
                        Mensaje de {{$nombre}}
                    </td>
                </tr>
                <tr>
                    <td class="bodycopy">
                        <p><strong>Email: {{$email}}</strong></p>
                        <p><strong>Whatsaap: {{$whatsaap}}</strong></p>
                        <p><strong>Mensaje: {{$mensaje}}</strong></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
@stop
