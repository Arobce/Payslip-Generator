<?php


namespace App\Classes;
use App\Classes\ComputeData;
class AddData
{

    var $formData;
    var $computeDataObj;
    

    function __construct($formData) {
        $this->formData = $formData;
        $obj = new ComputeData($formData);
        $this->computeDataObj = $obj;
        $this->addAllComputedData();
    }

    //Add allowance(without travel allowance)
    function addAllComputedData(){
        
        $this->addAddAllowanceToData();
        $this->addSSFToAddToData();
        $this->addAddedSSFToSData();
        $this->addTravelAllowaneToData();
        $this->addSSFToDeduceToData();
        $this->addDeducedSSFSalary();
        $this->addSSTTTaxAmountToData();
        $this->addNetSalaryToData();
        $this->addProvidentFundAmount();
        $this->addGratuityAmount();
        $this->addSSFContributionAmount();
        $this->addDeduceProvidentFundAmount();
        $this->addDeduceGratuityAmount();
        $this->addDeduceSSFContributionAmount();

    }

    function addAddAllowanceToData(){
        $this->formData->salary_after_allowance = $this->computeDataObj->getAddedAllowance();
    }

    function addProvidentFundAmount(){
        $this->formData->provident_fund_amount = $this->computeDataObj->getProvidentFundAmount();
    }

    function addGratuityAmount(){
        $this->formData->gratuity_amount = $this->computeDataObj->getGratuityAmount();
    }

    function addSSFContributionAmount(){
        $this->formData->ssf_amount = $this->computeDataObj->getSSFContributionAmount();
    }

    function addDeduceProvidentFundAmount(){
        $this->formData->deduce_provident_fund_amount = $this->computeDataObj->getDeduceProvidentFundAmount();
    }

    function addDeduceGratuityAmount(){
        $this->formData->deduce_gratuity_amount = $this->computeDataObj->getDeduceGratuityAmount();
    }

    function addDeduceSSFContributionAmount(){
        $this->formData->deduce_ssf_amount = $this->computeDataObj->getDeduceSSFContributionAmount();
    }

    




    function addSSFToAddToData(){
        $this->formData->ssf_amount_to_add = $this->computeDataObj->getSSFToAdd();
    }


    function addAddedSSFToSData(){
        $this->formData->amount_after_added_ssf = $this->computeDataObj->getAddedSSFSalary();
    }


    function addTravelAllowaneToData(){
        $this->formData->salary_after_travel_allowance = $this->computeDataObj->getTravelAllowance();
    }

    function addSSFToDeduceToData(){
        $this->formData->ssf_amount_to_deduce = $this->computeDataObj->getSSFToDeduce();
    }

    function addDeducedSSFSalary(){
        $this->formData->salary_after_deduced_ssf = $this->computeDataObj->getDeducedSSFSalary();
    }


    function addSSTTTaxAmountToData(){
        $this->formData->social_security_tax_amount = $this->computeDataObj->getSSFToDeduce();
    }


    function addNetSalaryToData(){
        $this->formData->net_salary = $this->computeDataObj->getNetSalary();
    }


    function getData()
    {
        return $this->formData;
    }
}


?>