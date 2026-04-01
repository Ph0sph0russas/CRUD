<?php

class InfoController extends ObjectController {
    public $template = "info_object.twig"; 

    public function getContext(): array
    {
        $context = parent::getContext();
        $context['is_info']=1;
        
        $query = $this->pdo->prepare("SELECT info FROM extreme_gears WHERE id= :my_id");
        $query->bindValue("my_id", $this->params['id']);
        $query->execute();
        $data = $query->fetch();
        
        $context['info'] = $data['info'];
        
        return $context;
    }
}