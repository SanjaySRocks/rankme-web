<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Steam;
use DataTables;
use App\Models\RankMe;

class StatsController extends Controller
{
    public function dashboard()
    {
        // if(!session()->get('user'))
        //     return redirect('login');

            
        $totalp = RankMe::count();
        $totalhs = RankMe::sum('head');

        return view('stats.home', compact('totalp','totalhs'));
    }

    public function funcPlayerStats(Request $request)
    {
        $users = RankMe::find($request->id);
        return view('stats.player', ['users' => $users]);
    }

    public function funcPoints()
    {
        return view('stats.points');
    }

    public function funcHeadshots()
    {
        return view('stats.headshots');
    }

    public function funcKnifes()
    {
        return view('stats.knifes');
    }

    public function funcKills()
    {
        return view('stats.kills');
    }

    public function funcMVPS()
    {
        return view('stats.mvps');
    }

    public function getPoints($id)
    {
        switch($id)
        {
            // Points
            case "1": 
                    $query = RankMe::select('id','steam','name','score', 'deaths')->orderBy('score', 'DESC');
                    break;

            //Kills
            case "2": 
                    $query = RankMe::select('id','steam','name','kills')->orderBy('kills', 'DESC');
                    break;

            // headshot
            case "3": 
                    $query = RankMe::select('id','steam','name','head')->orderBy('head', 'DESC');
                    break;

            // knife
            case "4": 
                    $query = RankMe::select('id','steam','name','knife')->orderBy('knife', 'DESC');
                    break;

            // mvp
            case "5": 
                    $query = RankMe::select('id','steam','name','mvp')->orderBy('mvp', 'DESC');
                    break;

            // default: $query = DB::table('rankme')->select('id','steam','name','score', 'deaths')->orderBy('score', 'DESC');
        }

        return DataTables::eloquent($query)->toJson();
    }
}
