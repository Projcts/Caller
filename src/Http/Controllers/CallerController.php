<?php


namespace Alisons\Caller\Http\Controllers;

use Illuminate\Routing\Controller;
use Alisons\Caller\Http\Models\CallerSetting;

class CallerController extends Controller
{

    public function index()
    {
        $settings = CallerSetting::all();

        return view('caller::caller.index', compact('settings'));
    }

    public function getSettings()
    {

        $settings = CallerSetting::all();

        return view('caller::caller.settings', compact('settings'));
    }
}
