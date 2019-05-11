<?php
namespace App\Classes;

class FormatFormData {
    var $formData = "";
    
    function setData($formData){
        $this->formData = $formData;
    }

    function getData(){
        return $this->formData;
    }

}
