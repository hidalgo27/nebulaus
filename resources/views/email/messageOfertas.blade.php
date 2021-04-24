@extends('layouts.email.messageDefault')
@section('content')
    <tr>
        <td class="innerpadding borderbottom">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
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
        </td>
    </tr>
@stop
