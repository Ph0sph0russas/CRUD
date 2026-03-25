<?php
require_once "ChaosEmeraldsController.php";
class ChaosEmeraldsInfoController extends ChaosEmeraldsController
{
    public $template="chaos_emeralds_info.twig";
    public function getContext(): array
    {
        $context=parent::getContext();
        $context['is_info']=1;
        return $context;
    }
}