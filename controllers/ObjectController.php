<?php

class ObjectController extends TwigBaseController {
    public $template = "object.twig"; 

    public function getContext(): array
    {
        $context = parent::getContext();
        
       
        $query = $this->pdo->prepare("SELECT description, id FROM extreme_gears WHERE id= :my_id");
        $query->bindValue("my_id", $this->params['id']);
        $query->execute();
        $data = $query->fetch();
        
        $context['description'] = $data['description'];
        $context['id']=$data['id'];
        return $context;
    }
}