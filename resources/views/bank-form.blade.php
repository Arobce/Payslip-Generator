<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css"
        integrity="sha256-8B1OaG0zT7uYA572S2xOxWACq9NXYPQ+U5kHPV1bJN4=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-calendar@6.0.6/dist/css/bulma-calendar.min.css"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css"
        integrity="sha256-39jKbsb/ty7s7+4WzbtELS4vq9udJ+MDjGTD5mtxHZ0=" crossorigin="anonymous" />

</head>

<body>
    <h1 class="title has-text-centered	">Bank Letter Generator</h1>
    <div class="form container">
        <form action="/generate-payslip" method="POST">
            {{ csrf_field() }}
            <h2 class="subtitle">Sender Info</h2>
            <!-- Sender Location -->
            <div class="field">
                <div class="control">
                    <input class="input" type="text" name="sender_location" placeholder="Location of Sender">
                </div>
            </div>
            <!-- Date Written -->
            <div class="field is-4">
                <div class="control">
                    <input class="input" type="date" name="date_written">
                </div>
            </div>
            <h2 class="subtitle">Bank Info</h2>
            <!-- Bank Name -->
            <div class="field">
                <div class="control">
                    <input class="input" type="text" name="bank_name" placeholder="Bank Name">
                </div>
            </div>
            <!-- Bank Location -->
            <div class="field">
                <div class="control">
                    <input class="input" type="text" name="bank_branch" placeholder="Location of Bank">
                </div>
            </div>
            <h2 class="subtitle">Salary Month Info</h2>
            <!-- Salary for Month of -->
            <div class="field">
                <div class="select">
                    <select name="salary_month" id="">
                        <option selected value=''>--Salary of Month--</option>
                        <option value='Janaury'>Janaury</option>
                        <option value='February'>February</option>
                        <option value='March'>March</option>
                        <option value='April'>April</option>
                        <option value='May'>May</option>
                        <option value='June'>June</option>
                        <option value='July'>July</option>
                        <option value='August'>August</option>
                        <option value='September'>September</option>
                        <option value='October'>October</option>
                        <option value='November'>November</option>
                        <option value='December'>December</option>
                    </select>
                </div>
            </div>
            <h2 class="subtitle">CEO and MD Info</h2>
            <!-- CEO Name -->
            <div class="field">
                <div class="control">
                    <input class="input" type="text" name="ceo_name" placeholder="Enter Name of CEO">
                </div>
            </div>
            <!-- MD Name -->
            <div class="field">
                <div class="control">
                    <input class="input" type="text" name="md_name" placeholder="Enter Name of MD">
                </div>
            </div>
            <h2 class="subtitle">Employee Info</h2>
            <!-- Employee Info -->
        
            <div class="employe-forms">
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_name" placeholder="Enter Name of Staff">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_designation"
                                    placeholder="Enter Designation of Staff">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_accno"
                                    placeholder="Enter Staff Account No">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_amount" placeholder="Enter Amount">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_remarks" placeholder="Enter Remarks">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_name1" placeholder="Enter Name of Staff">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_designation1"
                                    placeholder="Enter Designation of Staff">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_accno1"
                                    placeholder="Enter Staff Account No">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_amount"1 placeholder="Enter Amount">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_remarks1" placeholder="Enter Remarks">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_name2" placeholder="Enter Name of Staff">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_designation2"
                                    placeholder="Enter Designation of Staff">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_accno2"
                                    placeholder="Enter Staff Account No">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_amount2" placeholder="Enter Amount">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="staff_remarks2" placeholder="Enter Remarks">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="columns">
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="text" name="staff_name3" placeholder="Enter Name of Staff">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="text" name="staff_designation3"
                                        placeholder="Enter Designation of Staff">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="text" name="staff_accno3"
                                        placeholder="Enter Staff Account No">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="text" name="staff_amount3" placeholder="Enter Amount">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="text" name="staff_remarks3" placeholder="Enter Remarks">
                                </div>
                            </div>
                        </div>
                    </div>


            </div>
            <!-- Generate Button -->
            <input class="button is-primary" style="margin-top: 10px;" type="submit" value="Download Letter">


        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bulma-calendar@6.0.6/dist/js/bulma-calendar.min.js"></script>
<script src="{{ asset('js/initializeCalendar.js') }}"></script>
<script>
    $(".generate-employee-form").click(function () {
        alert($(".total-employee-number").val());
    });
</script>

</html>