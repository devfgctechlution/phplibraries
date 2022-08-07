<?php
namespace Images;

use GdImage;

class ResizeImage{
    var $image = null;
    function __construct(GdImage $image)
    {
        $this->image = $image;
    }
    public function reSizeImage(){
        return true;
    }
}