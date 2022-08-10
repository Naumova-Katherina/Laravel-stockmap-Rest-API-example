<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ImoexRates;

class ImoexRatesController extends Controller
{
    public function index(string $period, string $sort)
    {
        //check $sort
        switch($sort) {
            case('asc'):
                $sort = 'ASC';
                break;
            case('desc'):
                    $sort = 'DESC';
                    break;
            default:

            return response()->json([
                'error' => 'Bad sort passed, check your url!'
            ], 404);
        }

        // Get data from database
        switch($period) {
            case('all'):

                $imoex_rates = DB::table('...')->select(...')->orderBy('daily_rate', $sort)->get();

                break; 
            case('daily'):

                  $imoex_rates = DB::table('...')->select(...')->orderBy('daily_rate', $sort)->get();

            break;

            case('weekly'):
                
              $imoex_rates = DB::table('...')->select(...')->orderBy('daily_rate', $sort)->get();

            break;

            case('monthly'):
                
                  $imoex_rates = DB::table('...')->select(...')->orderBy('daily_rate', $sort)->get();

            break;

            case('yearly'):

                  $imoex_rates = DB::table('...')->select(...')->orderBy('daily_rate', $sort)->get();

            break;

            case('current-year'):

                 $imoex_rates = DB::table('...')->select(...')->orderBy('daily_rate', $sort)->get();

            break;

            default:
            return response()->json([
                'error' => 'Bad period passed, check your url!'
            ], 404);

        }

        return response()->json([
           'imoex_returns' => $imoex_rates,
       ]);
    }

    
}
