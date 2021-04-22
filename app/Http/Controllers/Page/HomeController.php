<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        return view('page.index');
    }

    public function aboutUs(){
        return view('page.aboutUs');
    }
    public function contact(){
        return view('page.contact');
    }
    //SERVICIOS
    public function optimizationService(){
        return view('page.services.searchEngineOptimization');
    }

    public function marketingService(){
        return view('page.services.socialMediaMarketing');
    }

    public function webService(){
        return view('page.services.webDesign');
    }

    public function audioVisual(){
        return view('page.services.audioVisualProduction');
    }

    public function branding(){
        return view('page.services.branding');
    }

    public function nebulaEdu(){
        return view('page.services.nebulaEdu');
    }
    //BLOG
    public function blog(){
        return view('page.blog.blog');
    }

    public function objetivePublic(){
        return view('page.blog.objetivePublic');
    }

    public function positionBrand(){
        return view('page.blog.positionBrand');
    }

    public function audioVideo(){
        return view('page.blog.audioVideo');
    }

    public function createPageWeb(){
        return view('page.blog.createPageWeb');
    }

    public function startVirtualStore(){
        return view('page.blog.startVirtualStore');
    }

    public function marketingB2B(){
        return view('page.blog.marketingB2B');
    }

    public function organizeWebContent(){
        return view('page.blog.organizeWebContent');
    }

    public function brandingImportance(){
        return view('page.blog.brandingImportance');
    }
    //EMAIL
    public function contactForm(Request $request){
        $from = 'tania.vanessa609@gmail.com';
        $nombre = $request->tNombre;
        $email = $request->tEmail;
        $whatsaap = $request->tWhatssap;
        $mensaje=$request->tMensaje;
        try {
            Mail::send(['html' => 'email.messageClient'], ['nombre' => $nombre],
                function ($messaje) use ($email, $nombre) { $messaje->to($email, $nombre)
                    ->subject('Nebula')
                    ->from('tania.vanessa609@gmail.com', 'Nebula');
            });
            Mail::send(['html' => 'email.messageContact'], [
                'nombre' => $nombre,
                'email' => $email,
                'whatsaap' => $whatsaap,
                'mensaje'=> $mensaje,],
                function ($messaje) use ($from) { $messaje->to($from, 'Nebula')
                    ->subject('Nebula - Formulario de Contacto')
                    ->from('tania.vanessa609@gmail.com', 'Nebula');
            });

            return redirect('/#contacto')->with('status', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }

    public function enviarOfertas(Request $request){
        $from = 'tania.vanessa609@gmail.com';
        $email = $request->tEmail;
        try {
            Mail::send(['html' => 'email.messageClient'],[
                'email' => $email],
                function ($messaje) use ($email) { $messaje->to($email)
                    ->subject('Nebula')
                    ->from('tania.vanessa609@gmail.com', 'Nebula');
                });
            Mail::send(['html' => 'email.messageOfertas'], [
                'email' => $email],
                function ($messaje) use ($from) { $messaje->to($from, 'Nebula')
                    ->subject('Nebula')
                    ->from('tania.vanessa609@gmail.com', 'Nebula - Enviar Ofertas ');
                });

            return redirect('/#oferta')->with('sta', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
    public function analisisSeo(Request $request){
        $from = 'tania.vanessa609@gmail.com';
        $sitio=$request->tSitioWeb;
        $nombre=$request->tNombre;
        $email = $request->tEmail;
        $telefono=$request->tTelefono;
        $mensaje=$request->tMensaje;
        try {
            Mail::send(['html' => 'email.messageClient'],[
                'email' => $email],
                function ($messaje) use ($email) { $messaje->to($email)
                    ->subject('Nebula')
                    ->from('tania.vanessa609@gmail.com', 'Nebula');
                });
            Mail::send(['html' => 'email.messageOfertas'], [
                'sitio'=>$sitio,
                'nombre'=>$nombre,
                'email' => $email,
                'telefono'=>$telefono,
                'mensaje' =>$mensaje],
                function ($messaje) use ($from) { $messaje->to($from, 'Nebula')
                    ->subject('Nebula')
                    ->from('tania.vanessa609@gmail.com', 'Nebula - Enviar Ofertas ');
                });

            return redirect('/seo-y-posicionamiento-web-peru#formulario')->with('statusSeo', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
}
