<?php
namespace Album\Controller;

use Zend\Debug\Debug;
use Zend\Mvc\Controller\AbstractActionController,
 Zend\View\Model\ViewModel;
use Album\Model\Album;
use Album\Form\AlbumForm;
        
/**
 * Description of AlbumController
 *
 * @author armel
 */
class AlbumController  extends AbstractActionController{
    //put your code here
    
    protected $albumTable;


    public function indexAction(){
        
        $ch="tout ce qui brille n'est pas de l'or.\n Mais quand ...";
        $album=$this->getAlbumtable();
     return   new ViewModel(
                array('albums'=> $album->fetchAll() )
                );
        
    }
    
    public function getAlbumtable(){
        if(!$this->albumTable):
            $sm=  $this->getServiceLocator();
            $this->albumTable = $sm->get('Album\Model\AlbumTable');
        endif;
        return $this->albumTable;
    }
    
    public function addAction(){

        $form = new AlbumForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $album = new Album();
            $form->setInputFilter($album->getInputFilter());
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $album->exchangeArray($form->getData());
                //Debug::dump($request->getPost());
                Debug::dump($form->getData());
               $this->getAlbumTable()->saveAlbum($album);

                // Redirect to list of albums
                return $this->redirect()->toRoute('album');
            }
        }
        return array('form' => $form);
       
    }
    
    public function editAction(){
        $form=new AlbumForm();
        $id=(int) $this->getEvent()->getRouteMatch()->getParam('id');
        if(!$id)
          return  $this->redirect()->toRoute('album',array('action'=>'add'));
        $album=  $this->getAlbumtable()->getAlbum($id);
        $form->bind($album);
        $request=$this->getRequest();
        if($request->isPost()){
           // $album=new Album();
            $form->setInputFilter($album->getInputFilter());
              $form->setData($request->getPost());
            if($form->isValid()){
           // $this->getAlbumtable()->saveAlbum($form->getData());
                 $this->getAlbumtable()->saveAlbum($album);
               $this->redirect()->toRoute('album');
            }
        }
        
        $form->get('submit')->setAttribute('label', 'Edit');
        return array(
            'id' =>   $id,
            'form' => $form
        );
    }
    
     public function deleteAction(){
       
       $id = (int) $this->params()->fromRoute('id', 0);
       if(!$id){
         return  $this->redirect()->toRoute('album', array('action'=>'index'));
       }
       //$album=  $this->getAlbumtable()->getAlbum($id);
       $request=  $this->getRequest();
       if($request->isPost()){
           $del=$request->getPost('del','Yes');
         
           if($del == 'Yes'){
                 $id = (int)$request ->getPost('id');
               $this->getAlbumtable()->deleteAlbum($id);
              
           }
             return  $this->redirect()->toRoute('album');
       }
       
        return array(
            'id'    => $id,
            'album' => $this->getAlbumtable()->getAlbum($id)
        );
    }
    
    
   
}

?>
