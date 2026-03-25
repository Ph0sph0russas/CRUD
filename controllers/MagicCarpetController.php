<?php
require_once "TwigBaseController.php";
class MagicCarpetController extends TwigBaseController
{
    public $title = "Магический ковёр"; 
    public $template = "object.twig";
    public function getContext(): array
    {
        $context=parent::getContext();
        $context['description'] = "Здесь находится информация о Магическом ковре";
        $context['url_title'] = "magic_carpet";
        return $context;
    }

}