<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * Class DashboardController
 *
 * @package App\Http\Controllers
 * @author: Joost Raemakers <jraemakers@freedom.nl>
 */
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * @author Joost Raemakers <jraemakers@freedom.nl>
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show dashboard.
     *
     * @return Application|Factory|View
     * @author Joost Raemakers <jraemakers@freedom.nl>
     */
    public function dashboard(): View|Factory|Application
    {
        $data = Data::orderBy('create_time', 'DESC')->get();

        foreach($data as $item)
        {
            if ($item->valve_status === 0)
            {
                $item->valve_status = 'Closed';
            } elseif ($item->valve_status === 1)
            {
                $item->valve_status = 'Open';
            } else {
                $item->valve_status = 'Undefined';
            }
        }

        return view('dashboard', ['data' => $data]);
    }
}
