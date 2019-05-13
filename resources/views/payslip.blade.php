<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payslip</title>
    <style>
        * {
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            width: 100%;
        }

        .is-bold {
            font-weight: bold;
        }

        div {
            margin-bottom: 18px;
        }

        .download-pdf {
            margin: 10px;
        }

        .container {
            margin: 0 30px;
        }

        .has-text-left {
            text-align: left;
        }

        .has-text-right {
            text-align: right;
        }

        .has-text-centered {
            text-align: center;
        }

        .title {
            font-weight: bold;
            font-size: 30px;
        }

        .subtitle {
            font-size: 18px;
        }

        .is-centered {
            margin: 0 auto;

        }
    </style>
</head>


<body>
    <div class="container">
        <div class="title has-text-centered	is-centered">
            <h1 class="title is-4">XYZ Service Pvt. Ltd.</h1>
            <h3 class="subtitle is-bold">SALARY PAY SLIP</h3>
        </div>
        <div class="employee-info">
            <table>
                <tr>
                    <td class="is-bold has-text-left">Name of Staff:</td>
                    <td class="has-text-right is-uppercase">{{$paySlipData->employee_name}}</td>
                </tr>
                <tr>
                    <td class="is-bold has-text-left	">Salary Period</td>
                    <td class="has-text-right">{{$paySlipData->date_employee_joined}} to {{ date("d/m/Y")}}</td>
                </tr>
            </table>
        </div>
        <div class="salary-allowance">
            <table>
                <tr>
                    <td class=" has-text-left">Basic Salary</td>
                    <td class="has-text-right is-uppercase">{{number_format($paySlipData->salary)}}</td>
                </tr>
                <tr>
                    <td class=" has-text-left">House Rent Allowance</td>
                    <td class="has-text-right">{{number_format($paySlipData->house_rent_allowance)}}</td>
                </tr>
                <tr>
                    <td class=" has-text-left">Meal Allowance</td>
                    <td class="has-text-right is-uppercase">{{number_format($paySlipData->meal_allowance)}}</td>
                </tr>
                <tr>
                    <td class=" has-text-left">Transportation Allowance</td>
                    <td class="has-text-right">{{number_format($paySlipData->transportation_allowance)}}</td>
                </tr>
                <tr>
                    <td class=" has-text-left">Other Allowance</td>
                    <td class="has-text-right is-uppercase">{{number_format($paySlipData->other_allowance)}}</td>
                </tr>
                <tr>
                    <td class=" has-text-left is-bold">Sub - Total</td>
                    <td class="has-text-right">{{number_format($paySlipData->salary_after_allowance )}}</td>
                </tr>

            </table>

        </div>
        <!-- Add: SSF -->
        <div class="add-social-security-fund">
            <table>
                <tr>
                    <td class=" has-text-left is-bold">Add: Employer Contribution to Social Security Fund</td>
                </tr>
                <tr>
                    <td class=" has-text-left">Provident Fund ({{ $paySlipData->provident_fund_percent }}% of Basic
                        Salary)</td>
                    <td class="has-text-right">{{number_format($paySlipData->provident_fund_amount )}}
                    </td>
                </tr>
                <tr>
                    <td class=" has-text-left">Gratuity ({{ $paySlipData->gratuity_percent }}% of Basic Salary)</td>
                    <td class="has-text-right is-uppercase">
                        {{number_format($paySlipData->gratuity_amount)}}</td>
                </tr>
                <tr>
                    <td class=" has-text-left">SSF Contribution ({{ $paySlipData->ssf_percent  }}% of Basic Salary)</td>
                    <td class="has-text-right">{{number_format($paySlipData->ssf_amount)}}</td>
                </tr>
                <tr>
                    <td class=" has-text-left is-bold">Sub - Total</td>
                    <td class="has-text-right is-uppercase">{{number_format($paySlipData->ssf_amount_to_add)}}</td>
                </tr>
            </table>
        </div>
        <!-- Payable Salary -->
        <div class="payable-salary">
            <table>
                <tr>
                    <td class="has-text-left is-bold">Salary Payable</td>
                    <td class="has-text-right">{{number_format($paySlipData->amount_after_added_ssf)}}</td>
                </tr>
            </table>
        </div>
        <!-- Travel Allowance -->
        <div class="travel-allowance">
            <table>
                <tr>
                    <td class="has-text-left ">Extra Travel Allowance</td>
                    <td class="has-text-right">{{number_format($paySlipData->travel_allowance)}}</td>
                </tr>
                <tr>
                    <td class="has-text-left is-bold">Total Salary Payable</td>
                    <td class="has-text-right">{{number_format($paySlipData->salary_after_travel_allowance)}}</td>
                </tr>

            </table>
        </div>
        <!-- Deduce SSF -->
        <div class="add-social-security-fund">
            <table>
                <tr>
                    <td class=" has-text-left is-bold">Deduce: Employer Contribution to Social Security Fund</td>
                </tr>
                <tr>
                    <td class=" has-text-left">Provident Fund ({{ $paySlipData->deduce_provident_fund_percent }}% of
                        Basic Salary)</td>
                    <td class="has-text-right">{{number_format($paySlipData->deduce_provident_fund_amount )}}
                    </td>
                </tr>
                <tr>
                    <td class=" has-text-left">Gratuity ({{ $paySlipData->deduce_gratuity_percent }}% of Basic Salary)
                    </td>
                    <td class="has-text-right is-uppercase">
                        {{number_format($paySlipData->deduce_gratuity_amount)}}</td>
                </tr>
                <tr>
                    <td class=" has-text-left">SSF Contribution ({{ $paySlipData->deduce_ssf_percent  }}% of Basic
                        Salary)</td>
                    <td class="has-text-right">{{number_format($paySlipData->deduce_ssf_amount)}}</td>
                </tr>
                <tr>
                    <td class=" has-text-left is-bold">Sub - Total</td>
                    <td class="has-text-right is-uppercase">{{number_format($paySlipData->other_allowance)}}</td>
                </tr>
            </table>
        </div>
        <!-- Tax -->
        <div class="tax">
            <table>
                <tr>
                    <td class="has-text-left  is-bold">Taxable salary</td>
                    <td class="has-text-right">{{number_format($paySlipData->travel_allowance)}}</td>
                </tr>
                <tr>
                    <td class="has-text-left ">Less: Social Security Tax</td>
                    <td class="has-text-right">{{$paySlipData->social_tax_percent}}</td>
                </tr>
                <tr>
                    <td class="has-text-left is-bold">Net Salary Payable</td>
                    <td class="has-text-right">{{number_format($paySlipData->net_salary)}}</td>
                </tr>

            </table>
        </div>
        <!-- Remarks -->
        <div class="remarks">
            <table>
                <tr>
                    <td class="has-text-left  is-bold">Remarks</td>
                    <td class="has-text-right">{{$paySlipData->remarks}}</td>
                </tr>
            </table>
        </div>
        <!-- For -->
        <div class="for">
            For Aswin Service Pvt. Ltd.
        </div>

        <!-- Invoice Generator Info -->
        <div class="invoice-generator-info">
            <table>
                <tr>
                    <td class="has-text-left is-bold">Name:</td>
                    <td class="has-text-right">{{$paySlipData->name_of_creator}}</td>
                </tr>
                <tr>
                    <td class="has-text-left is-bold">Title:</td>
                    <td class="has-text-right">{{$paySlipData->title}}</td>
                </tr>
                <tr>
                    <td class="has-text-left is-bold">Date:</td>
                    <td class="has-text-right">{{$paySlipData->date_payslip_generated}}</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>