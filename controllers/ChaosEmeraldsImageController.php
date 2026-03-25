<?php
require_once "ChaosEmeraldsController.php";
class ChaosEmeraldsImageController extends ChaosEmeraldsController
{
    public $template="object_image.twig";
    public function getContext(): array
    {
        $context=parent::getContext();
        $context['image_url'] = '/images/chaos_emeralds_image.png';
        $context['is_image']=1;
        return $context;
    }
}