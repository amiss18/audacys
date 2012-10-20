
<?php

namespace Album\Controller;

use Zend\Mvc\Controller\ActionController,
Zend\View\Model\ViewModel;

class AlbumController extends ActionController
{

    public function indexAction()
    {
        $ch="ceci est une chaine de teste";
        return array('to'=>$ch);
    }
    
    public function addAction()
    {
    }
    
    public function editAction()
    {
    }
    
    public function deleteAction()
    {
    }
    
}
