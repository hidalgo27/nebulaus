<header>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/email.css')}}">
</header>
<body bgcolor="#f6f8f1">
    <table width="100%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td class="header">
                            <table width="70" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding: 0 20px 20px 0;">
                                        <img src="{{asset('img/logo/logo.png')}}" border="0" alt="logo" />
                                    </td>
                                    <td align="center">
                                        <h4>AGENCIA DE DISEÑO WEB Y MARKETING DIGITAL</h4>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    @yield('content')
                    <tr>
                        <td class="innerpadding borderbottom">
                            <table bgcolor="#141e30" border="0" cellspacing="0" cellpadding="0" align="center">
                                <tr>
                                    <td class="button" height="45">
                                        <a href="https://nebulaperu.com/" target="_blank">Visita nuestra página web</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="footer" bgcolor="#a5b7d9">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center" class="footercopy" >
                                        <span class="hide">Síguenos en nuestras redes sociales</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding: 20px 0 0 0;">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                                    <a href="https://www.facebook.com/nebulaperu/" target="_blank">
                                                        <img src="{{asset('svg/circle-facebook.svg')}}" width="37" height="37" alt="Facebook" border="0" />
                                                    </a>
                                                </td>
                                                <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                                    <a href="https://www.instagram.com/nebulaperu/" target="_blank">
                                                        <img src="{{asset('svg/instagram.svg')}}" width="37" height="37" alt="Instagram" border="0" />
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
