<?php
/**
 * Created by PhpStorm.
 * User: WALEED
 * Date: 22-Sep-16
 * Time: 10:03 AM
 */


class Task {
    public $title;
    public $description;

    public $completed = false;

    public function __construct($title,$description)
    {
        $this->title=$title;
        $this->description=$description;
    }

    public function complete()
    {
        $this->completed=true;
    }


}

$task = new Task('Learn OOP','Teacher bla bla');
var_dump($task->title,$task->description);

$task->complete();

var_dump($task->completed);