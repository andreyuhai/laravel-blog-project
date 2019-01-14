<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminPanelController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $data = array(

            'users' => User::orderBy('id', 'asc')->paginate(10),
            'title' => 'Admin Panel'

        );
        return view('pages.admin_panel')->with($data);

    }
}
