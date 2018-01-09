<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Tracker;

use App\Merchant;

use Facades\App\Services\HUser;
use Facades\App\Services\Users\HAgent;

class AgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index ()
    {
        $merchants = Merchant::where(HUser::getRoleId(), Auth::user()->id)->get();
        return view('agent/dashboard')->with('merchants', $merchants);
    }

    public function IndexMerchant ()
    {
        return view('agent/dashboard');
    }

    public function ViewMerchant ($hashedMerchantId, Request $request) {
        $merchantId = HELPERDoubleDecrypt($hashedMerchantId);

        $merchant =  Merchant::where('id', $merchantId)->get();
        // if (!is_numeric($projectId) || empty(Project::find($merchantId))) {
        //     return view('errors/404');
        // } else {
        //     $project = Project::find($merchantId);

        //     if (Proposal::where('project_id', $projectId)->where('worker_id', $request->user()->id)->first()) {
        //         return 'invalid id';
        //     }

        //     if ($project->status != 2) {
        //         return view('errors/404');
        //     }
        //     return view('worker/find_work/view')->with('project', Project::find($projectId));
        // }
        return view('agent/merchant/edit')->with('merchant', $merchant);
    }

    public function CreateMerchant ()
    {
        return view('agent/merchant/create');
    }
}
