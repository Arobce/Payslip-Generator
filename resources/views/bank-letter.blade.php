<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payslip</title>
    <style>
        * {
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }


        table {
            width: 100%;
        }

        .is-bold {
            font-weight: bold;
        }

        div {
            margin-bottom: 25px;
        }

        .container {
            margin: 20px 30px;
        }

        .has-text-left {
            text-align: left;
        }

        .has-text-right {
            text-align: right;
        }

        table,
        th,
        td {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 5px;

        }

        .saluatation{
            margin-top: 30px;
        }
        .salutation-givers{
            margin-top: 120px;
        }

        .go-left{
            float: left;
            clear: left;
        }

        .go-right{
            float: right;
        }

        .sender-info{
            margin-top: 15px;
        }

        .salutation-givers_title{
            font-size: 12px;
        }

        .is-italics{
            font-style: italic;
        }
    </style>
</head>


<body>
    <div class="container">
        <div class="sender-info has-text-left">
            <span class="is-bold">Date:</span> {{$bankLetterData->date_written}}<br>
            {{$bankLetterData->sender_location}}
        </div>

        <div class="reciver-info has-text-left">
            <span class="is-bold">To,</span><br>
            Branch Manager<br>
            {{$bankLetterData->bank_name}}<br>
            {{$bankLetterData->bank_branch}}
        </div>

        <div class="subject has-text-left">
            <span class="is-bold">Subject:</span> Staff Salary for the month of: {{$bankLetterData->salary_month}}.
        </div>

        <div class="greeting has-text-left">
            <span class="is-bold">Sir,</span>
        </div>
        <div class="mail-body">
            <div class="message">
                The employees salary of this company are to be deposited into your bank. So, we kindly request you to
                deposit concerned staff account as mention below.
            </div>

            <div class="employee-salary-info">
                <table>
                    <tr>
                        <th>S.N</th>
                        <th>Staff Name</th>
                        <th>Designation</th>
                        <th>A/C Number</th>
                        <th>Amount</th>
                        <th>Remark</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>{{$bankLetterData->staff_name}}</td>
                        <td>{{$bankLetterData->staff_designation}}</td>
                        <td>{{$bankLetterData->staff_accno}}</td>
                        <td>{{number_format($bankLetterData->staff_amount)}}</td>
                        <td>{{$bankLetterData->staff_remarks}}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>{{$bankLetterData->staff_name2}}</td>
                        <td>{{$bankLetterData->staff_designation2}}</td>
                        <td>{{$bankLetterData->staff_accno2}}</td>
                        <td>{{number_format($bankLetterData->staff_amount2)}}</td>
                        <td>{{$bankLetterData->staff_remarks2}}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>{{$bankLetterData->staff_name3}}</td>
                        <td>{{$bankLetterData->staff_designation3}}</td>
                        <td>{{$bankLetterData->staff_accno3}}</td>
                        <td>{{number_format($bankLetterData->staff_amount3)}}</td>
                        <td>{{$bankLetterData->staff_remarks3}}</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>{{$bankLetterData->staff_name1}}</td>
                        <td>{{$bankLetterData->staff_designation1}}</td>
                        <td>{{$bankLetterData->staff_accno1}}</td>
                        <td>{{number_format($bankLetterData->staff_amount1)}}</td>
                        <td>{{$bankLetterData->staff_remarks1}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5"><span class="is-bold">Total:</span> {{ number_format($bankLetterData->staff_amount1 + $bankLetterData->staff_amount + 
                                $bankLetterData->staff_amount3+ $bankLetterData->staff_amount4) }}</td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="amount-in-words">
            In Word: <span class="is-bold">Sixty Nine Thousand</span> only.
        </div>
        <div class="cheque-info">
            Please debit our  XYZ counstraction & traders Pvt.Ltd SCBL  cheque NO:.	<span class="is-bold">{{$bankLetterData->cheque_no}}</span>	
        </div>
        <div class="thankyou-message">
            Thank you for your Advance co-operation.
        </div>

        <div class="saluatation">
            <span class="is-bold">Sincerely Yours,</span>
            <br>
            <div class="ceo salutation-givers has-text-left go-left">
                {{$bankLetterData->ceo_name}}<br>
                <span class="is-bold is-italics salutation-givers_title">CEO</span>
            </div>
            <div class="md salutation-givers has-text-left go-right">
                {{$bankLetterData->md_name}}<br>
                <span class="is-bold is-italics salutation-givers_title">MD</span> </div>
        </div>


    </div>
</body>

</html>