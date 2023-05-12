<?php

namespace App\Http\Controllers;

use App\Models\Chofere;
use App\Models\Cliente;
use App\Models\Destino;
use App\Models\Ruta;
use App\Models\Solicitude;
use App\Models\Tarifa;
use App\Models\User;
use App\Models\Vehiculo;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Whoops\Run;

class AdminController extends Controller
{
    public function listarsolicitudes()
    {
        $solicitudes = DB::table('solicitudes')->orderBy('id', 'desc')->get();

        return view('admin.index', compact('solicitudes'));
    }

    public function show_agregar_soli()
    {

        $clientes = DB::table('clientes')->get();
        $destinos = DB::table('destinos')->get();

        return view('admin.solicitudes.nueva-solicitud', compact('clientes', 'destinos'));
    }

    public function create_crear_soli(Request $request)
    {

        $data = [
            'codigo_solicitud' => $request->get('codigo_solicitud'),
            'fecha_solicitud' => $request->get('fecha_solicitud'),
            'cliente' => $request->get('cliente'),
            'fecha_traslado' => $request->get('fecha_traslado'),
            'origen' => $request->get('origen'),
            'hora' => $request->get('hora'),
            'cantidad' => $request->get('cantidad'),
            'datos_destinos' => json_encode($request->get('datos_destinos')),

            'datos_cantidad' => json_encode($request->get('datos_cantidad')),
            'observaciones' => $request->get('observaciones'),
            'estado' => 1
        ];

        // dd($data);
        $soli = Solicitude::create($data);
        return redirect()->route('admin.index');
    }
    // ----------------------Vehiculos------------------------------
    public function show_listado_vehiculos()
    {
        $vehiculos = DB::table('vehiculos')->orderBy('id', 'desc')->get();

        return view('admin.vehiculos.index', compact('vehiculos'));
    }

    public function create_crear_vehiculo(Request $request)
    {

        if ($image = $request->file('vehiculo_img')) {
            $destinatarioPath = 'images-vehiculos/';
            $firmaImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinatarioPath, $firmaImage);
            // $alu['image'] = "$profileImage";
        }

        $data = [
            'unidad' => $request->get('unidad'),
            'marca' => $request->get('marca'),
            'placa' => $request->get('placa'),
            'tar_circulacion' => $request->get('tar_circulacion'),
            'n_certificado' => $request->get('n_certificado'),
            'fecha_ven_citv' => $request->get('fecha_ven_citv'),
            'soat' => $request->get('soat'),
            'fecha_ven_soat' => $request->get('fecha_ven_soat'),
            'categoria' => $request->get('categoria'),
            'seria_chasis' => $request->get('seria_chasis'),
            'anois_fab' => $request->get('anois_fab'),
            'n_ejes' => $request->get('n_ejes'),
            'carga_util' => $request->get('carga_util'),
            'peso_seco' => $request->get('peso_seco'),
            'estado' => 1,
            'imagen' => $firmaImage
        ];

        // dd($data);
        $soli = Vehiculo::create($data);
        $mensaje = "Vehiculo creado exitosamente";
        return redirect()->route('admin.vehiculos.index')->with(['data' => $mensaje]);
    }
    public function edit_vehiculo(Vehiculo $vehiculo, $id)
    {
        // dd($id);
        $vehiculo  = DB::table('vehiculos')->where('id', $id)->limit(1)->get();

        // dd($vehiculo);
        return view('admin.vehiculos.edit-vehiculo', compact('vehiculo'));
    }

    public function update_vehiculo(Request $request, Vehiculo $vehiculo)
    {

        $vehi = $request->all();
        if ($image = $request->file('vehiculo_img')) {
            $destinatarioPath = 'images-vehiculos/';
            $firmaImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinatarioPath, $firmaImage);
            $vehi['imagen'] = "$firmaImage";
        } else {
            unset($vehi['imagen']);
        }

        // dd($data);
        $vehiculo->update($vehi);
        $mensaje = "Vehiculo actualizado exitosamente";
        return redirect()->route('admin.vehiculos.edit-vehiculo', $vehiculo)->with(['data' => $mensaje]);
        // return back()->withInput();
    }

    public function delete_vehiculo(Vehiculo $id)
    {
        // dd($id);
        $id->delete();
        $vehiculos = DB::table('vehiculos')->orderBy('id', 'desc')->get();

        return view('admin.vehiculos.index', compact('vehiculos'));
        // dd($vehiculo);
    }
    // ---------------------USUARIOS---------------------------------------
    public function show_listado_usuarios()
    {
        $usuarios = DB::table('users')->orderBy('id', 'desc')->get();
        $total = $usuarios->count();
        $admins = DB::table('users')->where('tipo', '1')->count();
        $gerentes = DB::table('users')->where('tipo', '3')->count();
        $operarios = DB::table('users')->where('tipo', '2')->count();
        $contas = DB::table('users')->where('tipo', '4')->count();

        return view('admin.usuarios.index', compact(
            'usuarios',
            'total',
            'admins',
            'gerentes',
            'operarios',
            'contas'
        ));
    }
    public function crear_usuario(Request $request)
    {
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            're_password' => $request->get('password'),
            'estado' => 1,
            'tipo_dni' => 1,
            'dni' => $request->get('dni'),
            'apellido_ma' => $request->get('apellido_ma'),
            'apellido_pa' => $request->get('apellido_pa'),
            'celular' => $request->get('celular'),
            'tipo' => $request->get('tipo'),

        ];

        // dd($data);
        $soli = User::create($data);
        $mensaje = "Usuario creado exitosamente";
        return redirect()->route('admin.usuarios.index')->with(['data' => $mensaje]);
    }
    public function edit_usuario(Vehiculo $vehiculo, $id)
    {
        // dd($id);
        $usuario  = DB::table('users')->where('id', $id)->limit(1)->get();

        // dd($vehiculo);
        return view('admin.usuarios.edit-usuario', compact('usuario'));
    }
    public function update_usuario(Request $request, User $usuario)
    {

        $us = $request->all();
        // dd($data);
        $usuario->update($us);
        $mensaje = "Usuario actualizado exitosamente";
        return redirect()->route('admin.vehiculos.edit-vehiculo', $usuario)->with(['data' => $mensaje]);
        // return back()->withInput();
    }
    public function delete_usuario(User $id)
    {
        // dd($id);
        $id->delete();
        $usuarios = DB::table('users')->orderBy('id', 'desc')->get();

        return redirect()->route('admin.usuarios.index');
        // dd($vehiculo);
    }

    // ---------------------DESTINOS--------------------------------------------------
    public function show_listado_destinos()
    {
        // $destinos = DB::table('destinos')->get();
        $clientes = DB::table('clientes')->get();
        $departamentos = DB::table('departamentos')->get();

        $destinos = Destino::select(
            "destinos.id",
            "cliente",
            "empresa",
            "destinos.referencia",
            "destinos.direccion as direccion_des",
            "clientes.nombre as nombre_cli",
            "clientes.referencia as re_cli",
            "departamentos.name as nombre_dep",
            "provincias.name as nombre_prov",
            "distritos.name as nombre_dis",
            "destinos.estado as estado_des",
            "destinos.created_at",
        )
            ->join("departamentos", "departamentos.id", "=", "destinos.departamento")
            ->join("provincias", "provincias.id", "=", "destinos.provincia")
            ->join("distritos", "distritos.id", "=", "destinos.distrito")
            ->join("clientes", "clientes.id", "=", "destinos.cliente")
            ->orderBy('destinos.id', 'desc')
            ->get();

        return view('admin.destinos.index', compact('destinos', 'clientes', 'departamentos'));
    }

    public function crear_destino(Request $request)
    {

        $data = [
            'cliente' => $request->get('cliente'),
            'empresa' => $request->get('empresa'),
            'referencia' => $request->get('referencia'),
            'departamento' => $request->get('departamento'),
            'provincia' => $request->get('provincia'),
            'distrito' => $request->get('distrito'),
            'direccion' => $request->get('direccion'),
            'estado' => 1
        ];

        $soli = Destino::create($data);
        return redirect()->route('admin.destinos.index');

        // dd($request);
        // return $nombre;
    }
    public function delete_destino(Destino $id)
    {
        // dd($id);
        $id->delete();

        return redirect()->route('admin.destinos.index');
        // dd($vehiculo);
    }

    public function delete_ruta(Ruta $id)
    {
        // dd($id);
        $id->delete();

        return redirect()->route('admin.rutas.index');
        // dd($vehiculo);
    }

    //---------------- CLIENTES--------------------------------------
    public function show_listado_clientes()
    {
        // $clientes = DB::table('clientes')->orderBy('id', 'desc')->get();
        $clientes = Cliente::select(
            "clientes.id",
            "nombre",
            "referencia",
            "contactos",
            "ruc",
            "departamentos.name as nombre_dep",
            "provincias.name as nombre_prov",
            "distritos.name as nombre_dis",
            "direccion",
            "estado",
            "tipo_servicio",
            "clientes.created_at",
        )
            ->join("departamentos", "departamentos.id", "=", "clientes.departamento")
            ->join("provincias", "provincias.id", "=", "clientes.provincia")
            ->join("distritos", "distritos.id", "=", "clientes.distrito")
            ->orderBy('clientes.id', 'desc')
            ->get();

        $departamentos = DB::table('departamentos')->get();
        $provincias = DB::table('provincias')->get();
        $distritos = DB::table('distritos')->get();

        return view('admin.clientes.index', compact('clientes', 'departamentos', 'provincias', 'distritos'));
    }
    public function create_crear_cliente(Request $request)
    {
        // transformar array en json 
        $datos_contacto = $request->get('datos_contacto');
        $datos_telefono = $request->get('datos_telefono');
        $datos_cargo = $request->get('datos_cargo');
        $datos_correo = $request->get('datos_correo');

        $datos = array();
        for ($i = 0; $i < count($datos_contacto); $i++) {
            $datos[$i] = array(
                'id' => $i,
                'contacto' => $datos_contacto[$i],
                'telefono' => $datos_telefono[$i],
                'cargo' => $datos_cargo[$i],
                'correo' => $datos_correo[$i]
            );
        }

        // echo var_dump($datos);

        $data = [
            'nombre' => $request->get('nombre'),
            'ruc' => $request->get('ruc'),
            'referencia' => $request->get('referencia'),
            'departamento' => $request->get('departamento'),
            'provincia' => $request->get('provincia'),
            'distrito' => $request->get('distrito'),
            'direccion' => $request->get('direccion'),
            'estado' => 1,
            'contactos' => json_encode($datos, true),
            'tipo_servicio' => $request->get('tipo_servicio')
        ];

        $soli = Cliente::create($data);
        return redirect()->route('admin.clientes.index');

        // dd($request);
        // return $nombre;
    }
    // ------------------RUTAS--------------------------------------------
    public function show_listado_rutas()
    {

        // $departamentos = DB::table('departamentos')->get();

        // SELECT  clientes.nombre, origenes.nombre, destinos.nombre, destinos.razon_social, `distancia`, `galones`
        // FROM rutas
        // JOIN clientes ON clientes.id=rutas.id_cliente
        // JOIN origenes ON origenes.id=rutas.id_origen
        // JOIN destinos ON destinos.id=rutas.id_destino;

        $clientes = DB::table('clientes')->orderBy('id', 'desc')->get();
        $rutas = Ruta::select(
            "rutas.id",
            "clientes.nombre as nombre_cli",
            "destinos.empresa as nombre_des",
            "distancia",
            "galones",
            "rutas.created_at",
        )
            ->join("clientes", "clientes.id", "=", "rutas.id_cliente")
            ->join("destinos", "destinos.id", "=", "rutas.id_destino")
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.rutas.index', compact('rutas', 'clientes'));
    }
    public function crear_ruta(Request $request)
    {
        $data = [
            'id_cliente' => $request->get('cliente'),
            'id_destino' => $request->get('destino'),
            'distancia' => $request->get('distancia'),
            'galones' => $request->get('galones')
        ];

        // dd($data);
        $soli = Ruta::create($data);
        $mensaje = "Ruta creada exitosamente";
        return redirect()->route('admin.rutas.index')->with(['data' => $mensaje]);
    }
    // -------------------------------------------
    public function buscarprovincia(Request $request)
    {
        if ($request->ajax()) {
            $output = '<option value="0">Seleccione una provincia</option>';
            $id = $request->get('id');
            if ($id != '') {
                $data = DB::table('provincias')
                    ->where('department_id', $id)
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $dt) {
                    $output .= '<option value="' . $dt->id . '">' . $dt->name . '</option>';
                }
            }
            $data = array(
                'table_data'  => $output,
                // 'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    }

    public function buscardistrito(Request $request)
    {
        if ($request->ajax()) {
            $output = '<option value="0">Seleccione un distrito</option>';
            $id = $request->get('id');
            if ($id != '') {
                $data = DB::table('distritos')
                    ->where('province_id', $id)
                    ->get();
            }

            //dd($data);
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $dt) {
                    $output .= '<option value="' . $dt->id . '">' . $dt->name . '</option>';
                }
            }
            $data = array(
                'table_data'  => $output,
                // 'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    }

    // ----------------------------------CHOFERES----------------------------------
    public function show_listado_choferes()
    {
        $choferes = DB::table('choferes')->orderBy('id', 'desc')->get();

        return view('admin.choferes.index', compact('choferes'));
    }

    public function crear_chofer(Request $request)
    {
        if ($image = $request->file('dni_doc')) {
            $destinatarioPath = 'doc-dni-choferes/';
            $docdni = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinatarioPath, $docdni);
            // $alu['image'] = "$profileImage";
        }
        if ($image = $request->file('contrato_doc')) {
            $destinatarioPath = 'doc-contrato-choferes/';
            $doccontrato = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinatarioPath, $doccontrato);
            // $alu['image'] = "$profileImage";
        }

        $data = [
            'unidad' => $request->get('unidad'),
            'nombres_cho'  => $request->get('nombres_cho'),
            'apellidos_cho'  => $request->get('apellidos_cho'),
            'tipo_contrato' => $request->get('tipo_contrato'),
            'dni_cho' => $request->get('dni_cho'),
            'estado_cho' => 1,
            'brevete_cho' => $request->get('brevete_cho'),
            'fecha_ven_cho' => $request->get('fecha_ven_cho'),
            'celular_cho' => $request->get('celular_cho'),
            'tipo_cho' => $request->get('tipo_cho'),
            'telefono_emer' => $request->get('telefono_emer'),
            'duracion_contrato' => $request->get('duracion_contrato'),
            'fecha_inicio' => $request->get('fecha_inicio'),
            'url_dni' => $docdni,
            'url_contrato' => $doccontrato
        ];
        // dd($data);
        $soli = Chofere::create($data);
        $mensaje = "Usuario creado exitosamente";
        return redirect()->route('admin.choferes.index')->with(['data' => $mensaje]);
    }
    public function edit_chofer(Vehiculo $vehiculo, $id)
    {
        // dd($id);
        $usuario  = DB::table('users')->where('id', $id)->limit(1)->get();

        // dd($vehiculo);
        return view('admin.usuarios.edit-usuario', compact('usuario'));
    }
    public function update_chofer(Request $request, User $usuario)
    {

        $us = $request->all();
        // dd($data);
        $usuario->update($us);
        $mensaje = "Usuario actualizado exitosamente";
        return redirect()->route('admin.vehiculos.edit-vehiculo', $usuario)->with(['data' => $mensaje]);
        // return back()->withInput();
    }
    public function delete_chofer(User $id)
    {
        // dd($id);
        $id->delete();
        $usuarios = DB::table('users')->orderBy('id', 'desc')->get();

        return redirect()->route('admin.usuarios.index');
        // dd($vehiculo);
    }
    // -------------------BUSCADORES DE RUTAS-----------------------------------------------------



    public function buscardestino(Request $request)
    {
        if ($request->ajax()) {
            $output = '<option value="">Seleccione un destino</option>';
            $id = $request->get('id');
            if ($id != '') {
                $data = DB::table('destinos')
                    ->where('cliente', $id)
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $dt) {
                    $output .= '<option value="' . $dt->id . '">' . $dt->empresa . '</option>';
                }
            }
            $data = array(
                'table_data'  => $output,
                // 'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    }

    public function buscardestino2(Request $request)
    {
        if ($request->ajax()) {
            $output = '<option disabled="" value="">Seleccione un destino</option>';
            $id = $request->get('id');
            if ($id != '') {
                $data = DB::table('destinos')
                    ->where('cliente', $id)
                    ->get();
            }

            //dd($data);
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $dt) {
                    $output .= '<option value="' . $dt->id . '" data-select2-id="' . $dt->id . '">' . $dt->referencia . '</option>';
                }
            } else {
                $output = '<option disabled="" value="0">Ningún destino</option>';
            }
            $data = array(
                'table_data'  => $output,
                'total_row'  => $total_row
            );
            echo json_encode($data);
        }
    }
    public function buscardestino3(Request $request)
    {
        $destinos = DB::table('destinos')->get();

        // return view('admin.solicitudes.nueva-solicitud', compact('clientes'));

        if ($request->ajax()) {
            $output = '<option value="">Seleccione un destino</option>';
            $id = $request->get('id');
            if ($id != '') {
                $data = DB::table('destinos')
                    ->where('cliente', $id)
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $dt) {
                    $output .= '<option value="' . $dt->id . '">' . $dt->empresa . '</option>';
                }
            }
            $data = array(
                'table_data'  => $output,
                // 'total_data'  => $total_row
            );
            echo json_encode($destinos);
        }
    }
    // ---------------------TARIFAS-------------------------

    public function show_listado_tarifas()
    {

        $clientes = DB::table('clientes')->orderBy('id', 'desc')->get();
        $destinos = DB::table('destinos')->orderBy('id', 'desc')->get();

        $tarifas = Tarifa::select(
            "tarifas.id",
            "clientes.nombre as nombre_cli",
            "clientes.referencia as refe_cli",
            "destinos",
            "base",
            "igv",
            "total",
            "tarifas.created_at",
        )
            ->join("clientes", "clientes.id", "=", "tarifas.id_cliente")
            ->orderBy('id', 'desc')
            ->get();


        return view('admin.tarifas.index', compact('tarifas', 'clientes', 'destinos'));
    }

    public function crear_tarifa(Request $request)
    {
        // transformar array en json 
        $datos_destinos = $request->get('datos_destinos');

        $datos = array();
        for ($i = 0; $i < count($datos_destinos); $i++) {
            $datos[$i] = array(
                'id' => $i,
                'destino' => $datos_destinos[$i]
            );
        }

        // echo var_dump($datos);

        $data = [
            'id_cliente' => $request->get('cliente'),
            'destinos' => json_encode($datos, true),
            'base' => $request->get('base'),
            'igv' => $request->get('igv'),
            'total' => $request->get('total')
        ];

        $soli = Tarifa::create($data);
        return redirect()->route('admin.tarifas.index');

        // dd($request);
        // return $nombre;
    }

    public function delete_tarifa(Tarifa $id)
    {
        // dd($id);
        $id->delete();

        return redirect()->route('admin.tarifas.index');
        // dd($vehiculo);
    }
}
