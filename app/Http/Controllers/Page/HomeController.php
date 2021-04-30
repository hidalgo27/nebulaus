<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

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
    //LANDING
    public function landing(){
        return view('landing.landing');
    }
    //EMAIL
    public function contactForm(Request $request){
        $from = 'info@nebulaperu.com';
        $nombre = $request->tNombre;
        $email = $request->tEmail;
        $whatsaap = $request->tWhatssap;
        $mensaje=$request->tMensaje;
        try {
            Mail::send(['html' => 'email.messageClient'], ['nombre' => $nombre],
                function ($messaje) use ($email, $nombre) { $messaje->to($email, $nombre)
                    ->subject('Nebula')
                    ->from('info@nebulaperu.com', 'Nebula');
            });
            Mail::send(['html' => 'email.messageContact'], [
                'nombre' => $nombre,
                'email' => $email,
                'whatsaap' => $whatsaap,
                'mensaje'=> $mensaje,],
                function ($messaje) use ($from) { $messaje->to($from, 'Nebula')
                    ->subject('Nebula - Formulario de Contacto')
                    ->from('info@nebulaperu.com', 'Nebula');
            });

//            return redirect()->back()->with('status', 'Registro satisfactorio.');
            return Redirect::to(URL::previous() . "#contacto")->with('status', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
    public function enviarOfertas(Request $request){
        $from = 'info@nebulaperu.com';
        $email = $request->tEmail;
        try {
            Mail::send(['html' => 'email.messageClient'],[
                'email' => $email],
                function ($messaje) use ($email) { $messaje->to($email)
                    ->subject('Nebula')
                    ->from('info@nebulaperu.com', 'Nebula');
                });
            Mail::send(['html' => 'email.messageOfertas'], [
                'email' => $email],
                function ($messaje) use ($from) { $messaje->to($from, 'Nebula')
                    ->subject('Nebula')
                    ->from('info@nebulaperu.com', 'Nebula - Enviar Ofertas ');
                });

//            return redirect('/#oferta')->with('sta', 'Reofertgistro satisfactorio.');
            return Redirect::to(URL::previous() . "#oferta")->with('status2', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
    public function analisisSeo(Request $request){
        $from = 'info@nebulaperu.com';
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
                    ->from('info@nebulaperu.com', 'Nebula');
                });
            Mail::send(['html' => 'email.messageSeo'], [
                'sitio'=>$sitio,
                'nombre'=>$nombre,
                'email' => $email,
                'telefono'=>$telefono,
                'mensaje' =>$mensaje],
                function ($messaje) use ($from) { $messaje->to($from, 'Nebula')
                    ->subject('Nebula')
                    ->from('info@nebulaperu.com', 'Nebula - Análisis SEO');
                });

            return redirect('/seo-y-posicionamiento-web-peru#formulario')->with('statusSeo', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
    public function webForm(Request $request){
        $from = 'info@nebulaperu.com';
        $sitio=$request->tSitioWeb;
        $nombre=$request->tNombre;
        $email = $request->tEmail;
        $telefono=$request->tTelefono;
        $mensaje=$request->tMensaje;
        $compania=$request->tCompania;
        try {
            Mail::send(['html' => 'email.messageClient'],[
                'email' => $email],
                function ($messaje) use ($email) { $messaje->to($email)
                    ->subject('Nebula')
                    ->from('info@nebulaperu.com', 'Nebula');
                });
            Mail::send(['html' => 'email.messageWeb'], [
                'sitio'=>$sitio,
                'nombre'=>$nombre,
                'email' => $email,
                'telefono'=>$telefono,
                'mensaje' =>$mensaje,
                'compania'=>$compania],
                function ($messaje) use ($from) { $messaje->to($from, 'Nebula')
                    ->subject('Nebula')
                    ->from('info@nebulaperu.com', 'Nebula - Análisis SEO');
                });

            return redirect('/diseño-paginas-web-para-empresas-en-peru#consulta')->with('statusSeo', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
}
