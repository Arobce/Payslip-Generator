<?php
namespace App\Classes;
use App\Classes\ComputeData;
use App\Classes\AddData;

class FormatFormData
{
    var $formData = "";

    function setData($formData)
    {
        $this->formData = $formData;
    }

    


    function getData()
    {
        $addDataObj = new AddData($this->formData);
        return $addDataObj->getData();
    }
}
