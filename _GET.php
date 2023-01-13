<?php

class _GET{
    public $title;
    public $contents;

    public function __construct($title,$contents)
    {
        $this->title = $title;
        $this->contents = $contents;    
    }
}