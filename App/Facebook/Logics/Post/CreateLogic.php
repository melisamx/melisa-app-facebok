<?php

namespace App\Facebook\Logics\Post;

use App\Facebook\Logics\BaseLogic;

/**
 * Create posting content 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateLogic extends BaseLogic
{
    
    public function init($idApp, $idPage, $appSecret, $accessToken, array $data = [])
    {
        
        $client = $this->createClient($idApp, $appSecret, $accessToken);
        
        if( !$client) {
            return $this->error('Imposible create client facebook');
        }
        
        return $this->createPost($client, $idPage, $data);
        
    }
    
    public function createPost(&$fb, $idPage, array $data = [])
    {
        
        try {
            $request = $fb->sendRequest('POST', $idPage . '/feed', $data);
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            return $this->error('Graph returned an error: ' . $e->getMessage());
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            return $this->error('Facebook SDK returned an error: ' . $e->getMessage());
        }
        
        return $request->getDecodedBody();
    }
    
}
