<?php
namespace Wainwright\CasinoDog\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Wainwright\CasinoDog\CasinoDog;

class InstallController
{   

    public function retrieve_providers()
    {
        foreach($providers as $provider_id => $data) {
            $provider_list[] = array(
                'name' => $provider_id
            );
        }
        return $providers_list;
    }

    public function show()
    {
        $this->check_install_state();
        $providers = config('casino-dog.games');

        $data = [
            'gameproviders' => $providers,
        ];

        return view('wainwright::installer.installer')->with('data', $data);
    }

    public function submit(Request $request)
    {
        return $request->all();

        return view('wainwright::installer.installer')->with('data', $data);
    }



    public function set_install_state()
    {
        file_put_contents(storage_path('framework/installed'), 1);
    }
    
    public function clear_install_state()
    {
        if(file_exists(storage_path('framework/installed'))) {
            unlink(storage_path('framework/installed'));
        }
    }

    public function check_install_state()
    {
        if(file_exists(storage_path('framework/installed'))) {
            abort(403, 'Run casino-dog:clear-install-state if you wish to run install again.');
        }
    }

}



