<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

/**
 * Class PageController
 *
 * @package App\Http\Controllers
 * @author: Joost Raemakers <jraemakers@freedom.nl>
 */
class PageController extends Controller
{
    /**
     * Show homepage.
     *
     * @return View
     * @author Joost Raemakers <jraemakers@freedom.nl>
     */
    public function home(): View
    {
        return view('home');
    }

    /**
     * Show get in touch page.
     *
     * @return View
     * @author Joost Raemakers <jraemakers@freedom.nl>
     */
    public function getintouch(): View
    {
        return view('getintouch');
    }

    /**
     * Show our team page.
     *
     * @return View
     * @author Joost Raemakers <jraemakers@freedom.nl>
     */
    public function ourteam(): View
    {
        return view('ourteam');
    }

    /**
     * Show home page.
     *
     * @return View
     * @author Joost Raemakers <jraemakers@freedom.nl>
     */
    public function qr()
    {
        return redirect()->route('home', ['qr' => 'true']);
    }
}
