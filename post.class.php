<?php
    class Post{
      private $_body;
      private $_title;
      public function __construct($title,$body){
        $this->_body=$body;
        $this->_title=$title;
      }
    }
?>
