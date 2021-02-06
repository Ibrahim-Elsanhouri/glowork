<?php 

namespace App\Notifications; 
use CRUDBooster; 
trait BackendNotifications{


    public function client_apply_job(){
        $config['content'] = "New Client has been applied for the job";
    $config['to'] = CRUDBooster::adminPath('/');
        $config['id_cms_users'] = [1]; //This is an array of id users
        CRUDBooster::sendNotification($config);
    }
    public function client_reserve_session(){
        $config['content'] = "New Client reserved training session ";
        $config['to'] = CRUDBooster::adminPath('/');
        $config['id_cms_users'] = [1]; //This is an array of id users
CRUDBooster::sendNotification($config);
    }
}