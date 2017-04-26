<?php 

namespace App\Facebook\Logics;

use Melisa\core\LogicBusiness;

/**
 * Description of BaseLogic
 *
 * @author Luis Josafat Heredia Contreras
 */
class BaseLogic
{    
    use LogicBusiness;
    
    protected $apiVersion = 'v2.9';

    public function createClient($idApp, $appSecret, $accessToken)
    {
        $fb = new \Facebook\Facebook([
            'app_id'=>$idApp,
            'app_secret'=>$appSecret,
            'default_graph_version'=> $this->apiVersion,
        ]);
        
        $longLivedToken = $fb->getOAuth2Client()->getLongLivedAccessToken($accessToken);
        $fb->setDefaultAccessToken($longLivedToken);
        return $fb;
        
    }
    
}
