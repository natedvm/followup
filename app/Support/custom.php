<?php

  function getSomething($string){
        $value= str_replace('_',' ',$string);
        $value= ucfirst($value);
        return $value;
}
?>