<body style="margin: 0; padding: 0;">
    <table align="center" border="1" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
      <tr>
        <td bgcolor="#141e30" align="center" style="padding: 40px 0 30px 0;">
          <img src="{{asset('img/logo/logo-principal.png')}}" alt="Nebula" />
          <img src="{{asset('img/logo/logo-titulo.png')}}" alt="Nebula" />
        </td>
      </tr>
      <tr>
        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
          <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <td>
                @yield('content')
              </td>
            </tr>
          </table>
      </tr>
      <tr>
        <td bgcolor="#141e30" style="padding: 20px 20px 20px 20px;">
          <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <td style="color:#fff; font-family: 'Segoe UI';">
                Visita nuestra página web y síguenos en nuestras redes sociales
              </td>
              <td align="right">
                <table border="0" cellpadding="0" cellspacing="0" style="padding:0px 10px;">
                  <tr>
                    <td>
                      <a href="https://nebulaperu.com/" target="_blank">
                        <img src="{{asset('img/logo/logo-principal.png')}}" alt="Nebula" width="38" height="38" style="display: block;" border="0" />
                      </a>
                    </td>
                    <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                    <td>
                      <a href="https://www.facebook.com/nebulaperu/" target="_blank">
                        <img src="{{asset('svg/circle-facebook.svg')}}" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
                      </a>
                    </td>
                    <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                    <td>
                      <a href="https://www.instagram.com/nebulaperu/" target="_blank">
                        <img src="{{asset('svg/instagram.svg')}}" alt="Instagram" width="38" height="38" style="display: block;" border="0" />
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
</body>