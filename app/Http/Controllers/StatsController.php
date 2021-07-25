<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Steam;
use DataTables;

class StatsController extends Controller
{
    public function dashboard()
    {
        // if(!session()->get('user'))
        //     return redirect('login');

            
        $totalp = DB::table('rankme')->count();
        $totalhs = DB::table('rankme')->sum('head');

        return view('stats.home', compact('totalp','totalhs'));
    }

    public function funcPlayerStats(Request $request)
    {
        // if(!session()->get('user'))
        //     return redirect('login');


        $users = DB::table('rankme')->find($request->id);

        return view('stats.player', ['users' => $users]);
    }

    public function funcPoints()
    {
        // if(!session()->get('user'))
        //     return redirect('login');

        
        return view('stats.points');
    }

    public function funcHeadshots()
    {
        // if(!session()->get('user'))
        //     return redirect('login');


        return view('stats.headshots');
    }

    public function funcKnifes()
    {
        // if(!session()->get('user'))
        //     return redirect('login');


        return view('stats.knifes');
    }

    public function funcKills()
    {
        // if(!session()->get('user'))
        //     return redirect('login');


        return view('stats.kills');
    }

    public function funcMVPS()
    {
        // if(!session()->get('user'))
        //     return redirect('login');

        return view('stats.mvps');
    }

    public function getPoints($id)
    {
        switch($id)
        {
            // Points
            case "1": 
                    $query = DB::table('rankme')->select('id','steam','name','score', 'deaths')->orderBy('score', 'DESC');
                    break;

            //Kills
            case "2": 
                    $query = DB::table('rankme')->select('id','steam','name','kills')->orderBy('kills', 'DESC');
                    break;

            // headshot
            case "3": 
                    $query = DB::table('rankme')->select('id','steam','name','head')->orderBy('head', 'DESC');
                    break;

            // knife
            case "4": 
                    $query = DB::table('rankme')->select('id','steam','name','knife')->orderBy('knife', 'DESC');
                    break;

            // mvp
            case "5": 
                    $query = DB::table('rankme')->select('id','steam','name','mvp')->orderBy('mvp', 'DESC');
                    break;

            // default: $query = DB::table('rankme')->select('id','steam','name','score', 'deaths')->orderBy('score', 'DESC');
        }

        return DataTables::queryBuilder($query)->toJson();
    }
}
