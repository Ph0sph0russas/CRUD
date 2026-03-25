<?php
require_once "TwigBaseController.php";
class ChaosEmeraldsController extends TwigBaseController
{
    public $title = "Изумруды Хаоса"; 
    public $template = "object.twig";
    public function getContext(): array
    {
        $context=parent::getContext();
        $context['description'] = "Здесь находится информация о Изумрудах Хаоса";
        $context['url_title'] = "chaos_emeralds";
        return $context;
    }

}