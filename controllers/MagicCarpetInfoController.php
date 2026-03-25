<?php
require_once "ChaosEmeraldsController.php";
class MagicCarpetInfoController extends MagicCarpetController
{
    public $template="magic_carpet_info.twig";
    public function getContext(): array
    {
        $context=parent::getContext();
        $context['is_info']=1;
        return $context;
    }
}