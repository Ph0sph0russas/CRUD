<?php

class ImageController extends ObjectController {
    public $template = "image_object.twig"; 

    public function getContext(): array
    {
        $context = parent::getContext();
        $context['is_image']=1;
        
        $query = $this->pdo->prepare("SELECT image FROM extreme_gears WHERE id= :my_id");
        $query->bindValue("my_id", $this->params['id']);
        $query->execute();
        $data = $query->fetch();
        
        $context['image'] = $data['image'];
        
        return $context;
    }
}