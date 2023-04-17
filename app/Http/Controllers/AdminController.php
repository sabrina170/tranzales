<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Solicitude;
use App\Models\Vehiculo;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view('admin.nueva-solicitud', compact('clientes', 'destinos'));
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

    public function show_listado_vehiculos()
    {
        $vehiculos = DB::table('vehiculos')->orderBy('id', 'desc')->get();

        return view('admin.vehiculos', compact('vehiculos'));
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
        return redirect()->route('admin.vehiculos');
    }
    public function show_listado_destinos()
    {
        $solicitudes = DB::table('destinos')->get();

        return view('admin.destinos', compact('destinos'));
    }
    //---------------- CLIENTES--------------------------------------
    public function show_listado_clientes()
    {
        $clientes = DB::table('clientes')->orderBy('id', 'desc')->get();
        $departamentos = DB::table('departamentos')->get();


        return view('admin.clientes', compact('clientes', 'departamentos'));
    }
    public function create_crear_cliente(Request $request)
    {

        $data = [
            'nombre' => $request->get('nombre'),
            'departamento' => $request->get('departamento'),
            'provincia' => $request->get('provincia'),
            'distrito' => $request->get('distrito'),
            'direccion' => $request->get('direccion'),
            'estado' => 1
        ];

        // dd($data);
        $soli = Cliente::create($data);
        return redirect()->route('admin.clientes');
    }

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

        return view('admin.choferes', compact('choferes'));
    }
}
