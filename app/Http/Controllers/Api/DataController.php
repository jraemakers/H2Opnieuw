<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Data;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

/**
 * Class DataController
 *
 * @package App\Http\Controllers\Api
 * @author: Joost Raemakers <jraemakers@freedom.nl>
 */
class DataController extends Controller
{
    /**
     * Inserts data from Arduino into the database.
     *
     * @param Request $request
     * @return Response
     * @author Joost Raemakers <jraemakers@freedom.nl>
     */
    public function post(Request $request): Response
    {
        $rules = [
            'waterlevel' => 'required | numeric | max:9999',
            'leakage' => 'required | string',
            'valve_status' => 'required | boolean',
            'temperature' => 'required | numeric | max:9999',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            return response(['message' => $validator->errors()]);
        }

        Data::create([
            'waterlevel' => $request->waterlevel,
            'leakage' => $request->leakage,
            'valve_status' => $request->valve_status,
            'temperature' => $request->temperature,
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'create_time' => Carbon::now(),
        ]);

        return response([ 'message' => 'success']);
    }

    /**
     * Returns all data.
     *
     * @return Response
     * @author Joost Raemakers <jraemakers@freedom.nl>
     */
    public function data(): Response
    {
        $data = Data::orderBy('create_time', 'DESC')->get();

        return response(['message' => $data]);
    }

    /**
     * Returns latest record.
     *
     * @return Response
     * @author Joost Raemakers <jraemakers@freedom.nl>
     */
    public function latest(): Response
    {
        $data = Data::orderBy('create_time', 'DESC')->first();

        // Convert boolean to closed or open
        if(isset($data->valve_status) ===  true)
        {
            if ($data->valve_status === 0)
            {
                $data->valve_status = 'Closed';
            }

            if ($data->valve_status === 1)
            {
                $data->valve_status = 'Open';
            }
        } else {
            $data->valve_status = 'Undefined';
        }

        return response(['message' => $data]);
    }

    /**
     * Returns latest 5 records.
     *
     * @return Response
     * @author Joost Raemakers <jraemakers@freedom.nl>
     */
    public function charts(): Response
    {
        $data = Data::orderBy('create_time', 'DESC')->take('5')->get();

        foreach($data as $item) {
            // Convert boolean to closed or open
            if(isset($item->valve_status) ===  true)
            {
                if ($item->valve_status === 0)
                {
                    $item->valve_status = 'Closed';
                }

                if ($item->valve_status === 1)
                {
                    $item->valve_status = 'Open';
                }
            } else {
                $item->valve_status = 'Undefined';
            }
        }
        
        return response(['message' => $data]);
    }
}
