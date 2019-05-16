<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Zona;
use App\Atractivo;
use App\Recinto;
use App\Evento;
use App\Comment;



class FrontHomeController extends Controller
{
    public function index()
    {
        $atractivos = DB::table('atractivos')
        ->join('zonas','atractivos.zona_id','=','zonas.id')
        ->select('atractivos.*', 'zonas.nombre as nombreZona')
        ->where('atractivos.status', '1')
        ->orderBy('atractivos.created_at', 'DESC')
        ->paginate(12);

        $zonaCount = DB::table('zonas')->where('status', '1')->count();
        $atractivoCount = DB::table('atractivos')->where('status', '1')->count();
        $recintoCount = DB::table('recintos')->where('status', '1')->count();
        $eventoCount = DB::table('eventos')->where('status', '1')->count();

        //$atractivos = Atractivo::orderBy('nombre', 'ASC')->where('status', '1')->paginate(5);
        $eventos = Evento::orderBy('fechaInicio', 'ASC')->where('status', '1')->paginate(3);

        return view('index', compact('atractivos', 'eventos', 'zonaCount', 'atractivoCount', 'recintoCount', 'eventoCount'));
    }





    public function zonas(Request $request)
    {
        $zonas = Zona::Search($request->nombre)->orderBy('nombre', 'ASC')->paginate(12);
        return view('frontend.zonas', compact('zonas'));
    }

    public function verZona($id)
    {
        $atractivos = DB::table('atractivos')
        ->join('zonas','atractivos.zona_id','=','zonas.id')
        ->select('atractivos.*', 'zonas.nombre as nombreZona')
        ->where('zonas.id', $id)
        ->orderBy('atractivos.nombre', 'ASC')
        ->paginate(9);

        return view('frontend.zona', compact('atractivos'));
    }





    public function atractivos(Request $request)
    {
        $atractivos = Atractivo::Search($request->nombre)->orderBy('nombre', 'ASC')->where('status', '1')->paginate(12);
        return view('frontend.atractivos', compact('atractivos'));
    }

    public function verAtractivo($id)
    {
        $atractivos = DB::table('atractivos')
        ->join('zonas','atractivos.zona_id','=','zonas.id')
        ->select('atractivos.*', 'zonas.nombre as nombreZona')
        ->where('atractivos.id', $id)
        ->get();

        $comentarios = DB::table('comments')
        ->join('atractivos','comments.atractivo_id','=','atractivos.id')
        ->select('comments.*')
        ->where('atractivos.id', $id)
        ->orderBy('created_at', 'DESC')
        ->paginate(3);

        return view('frontend.atractivo', compact('atractivos', 'comentarios'));
    }





    public function recintos(Request $request)
    {
        $recintos = Recinto::Search($request->nombre)->orderBy('nombre', 'ASC')->where('status', '1')->paginate(12);
        return view('frontend.recintos', compact('recintos'));
    }

    public function verRecinto($id)
    {
        $recintos = DB::table('recintos')
        ->select('recintos.*')
        ->where('recintos.id', $id)
        ->get();

        $comentarios = DB::table('comments')
        ->join('recintos','comments.recinto_id','=','recintos.id')
        ->select('comments.*')
        ->where('recintos.id', $id)
        ->orderBy('created_at', 'DESC')
        ->paginate(3);

        return view('frontend.recinto', compact('recintos', 'comentarios'));
    }





    public function eventos(Request $request)
    {
        $eventos = Evento::Search($request->nombre)->orderBy('fechaInicio', 'ASC')->where('status', '1')->paginate(9);
        return view('frontend.eventos', compact('eventos'));
    }

    public function verEvento($id)
    {
        $eventos = DB::table('eventos')
        ->join('recintos','eventos.recinto_id','=','recintos.id')
        ->select('eventos.*', 'recintos.nombre as nombreRecinto', 'recintos.id as recintoId')
        ->where('eventos.id', $id)
        ->get();

        $comentarios = DB::table('comments')
        ->join('eventos','comments.evento_id','=','eventos.id')
        ->select('comments.*')
        ->where('eventos.id', $id)
        ->orderBy('created_at', 'DESC')
        ->paginate(3);

        return view('frontend.evento', compact('eventos', 'comentarios'));
    }





    public function comentar(Request $request)
    {
        $request->validate([
            'nombre' => 'max:45|required',
            'email' => 'max:500|required|email',
            'descripcion' => 'max:255|required',
        ]);
        Comment::create($request->all());
        return back();
    }




    public function acerca()
    {
        return view('acerca');
    }
}
