<?php
require_once "ChaosEmeraldsController.php";
class MagicCarpetImageController extends MagicCarpetController
{
    public $template="object_image.twig";
    public function getContext(): array
    {
        $context=parent::getContext();
        $context['image_url'] = '/images/magic_carpet_image.png';
        $context['is_image']=1;
        return $context;
    }
}