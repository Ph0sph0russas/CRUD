<?php

require_once "BaseGearsTwigController.php";
class loginTwigController extends BaseGearsTwigController {
    public $template = "loginPage.twig";
    public $title = "Авторизация";
    public function get(array $context)
    {
        parent::get($context);
    }
    
}