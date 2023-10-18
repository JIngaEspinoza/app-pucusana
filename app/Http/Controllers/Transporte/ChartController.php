<?php

namespace App\Http\Controllers\Transporte;

use App\Http\Controllers\Controller;
use App\Models\Incidence;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
class ChartController extends Controller
{
    public function incidenceChart()
    {
        // $users = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
        //                 ->whereYear('created_at',date('Y'))
        //                 ->groupBy('month')
        //                 ->orderBy('month')
        //                 ->get();

        $users = Incidence::Join('users AS B', 'incidences.id_user', '=', 'B.id')
            ->Join('types AS C', 'incidences.id_tipo', '=', 'C.id')
            ->select(
                DB::raw("MONTH(incidences.fecha) as month"),
                DB::raw("COUNT(incidences.id) AS count"),
                'C.tipo_nombre',
                'B.username AS INSPECTOR',
            )
            ->groupBy('C.tipo_nombre',DB::raw("MONTH(incidences.fecha)"),'B.username')
            ->get();

        $labels = [];
        $data = [];
        $colors = ['#FF6384','#36A2EB','#FFCE56','#8BC34A','#FF5722','#009688','#795548'];

        for($i=1; $i<=12;$i++)
        {
            $month = date('F',mktime(0,0,0,$i,1));
            $count = 0;
            foreach($users as $user)
            {
                if($user->month == $i)
                {
                    $count = $user->count;
                    break;
                }
            }
            array_push($labels,$month);
            array_push($data,$count);
        }

        $datasets = [
            [
                'label' => 'Incidencias',
                'data' => $data,
                'backgroundColor' => $colors
            ]
        ];

        return view('charts',compact('datasets','labels'));
    }
}
