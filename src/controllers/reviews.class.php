<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 06-Dec-18
 * Time: 10:05 PM
 */

require_once "controller.class.php";

class Reviews extends Controller
{
    public $auth = array("2");

    public function viewPage($data){
        parent::viewPage($data);
    }
}