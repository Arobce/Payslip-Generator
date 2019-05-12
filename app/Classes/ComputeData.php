<?php


namespace App\Classes;

class ComputeData
{

    var $formData = "";
    
    function __construct($formData) {
        $this->formData = $formData;
    }

    //Add allowance(without travel allowance)
    function getAddedAllowance()
    {
        return $this->formData->salary + $this->formData->house_rent_allowance + $this->formData->meal_allowance +
            $this->formData->transportation_allowance + $this->formData->other_allowance;
    }

    //Get Amount From Percent
    function getAmountFromPercentOfSalary($percentValue)
    {
        return ($this->formData->salary * ($percentValue / 100));
    }

    //Provident fund
    function getProvidentFundAmount(){
        return $this->getAmountFromPercentOfSalary($this->formData->provident_fund_percent);
    }

    //Gratuity
    function getGratuityAmount(){
        return $this->getAmountFromPercentOfSalary($this->formData->gratuity_percent);
    }

    function getSSFContributionAmount(){
        return $this->getAmountFromPercentOfSalary($this->formData->ssf_percent);
    }
    //Get Total Salary after adding employer contribution social fund
    function getSSFToAdd()
    {
        return $this->getProvidentFundAmount() +
            $this->getGratuityAmount()+
           $this->getSSFContributionAmount();
    }


    function getAddedSSFSalary()
    {
        return $this->getAddedAllowance() + $this->getSSFToAdd();
    }

    function getTravelAllowance(){
        return $this->getAddedSSFsalary() + $this->formData->travel_allowance;
    }

    //Provident fund
    function getDeduceProvidentFundAmount(){
        return $this->getAmountFromPercentOfSalary($this->formData->deduce_provident_fund_percent);
    }

    //Gratuity
    function getDeduceGratuityAmount(){
        return $this->getAmountFromPercentOfSalary($this->formData->deduce_gratuity_percent);
    }

    function getDeduceSSFContributionAmount(){
        return $this->getAmountFromPercentOfSalary($this->formData->deduce_ssf_percent);
    }

    function getSSFToDeduce(){
        return $this->getDeduceProvidentFundAmount() +
        $this->getDeduceGratuityAmount()+
       $this->getDeduceSSFContributionAmount();
    }

    function getDeducedSSFSalary(){
        return $this->getTravelAllowance() - $this->getSSFToDeduce();
    }

    function getSSTTaxAmount(){
        return $this->formData->salary * (10/100);
    }

    function getNetSalary(){
        return $this->getDeducedSSFSalary() - $this->getSSTTaxAmount();
    }

    function getData()
    {
        return $this->formData;
    }
}
