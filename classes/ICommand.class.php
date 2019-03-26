<?php
/**
 * Created by PhpStorm.
 * User: Sebastian
 * Date: 3/26/2019
 * Time: 12:42 PM
 */

interface ICommand
{
    public function execute() : void;
    public function undo() : void ;
}
