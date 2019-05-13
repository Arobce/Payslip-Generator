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
    <h1 class="title has-text-centered	">Payslip Generator</h1>
    <div class="form container">
        <a href="/bank-letter" class="button button-primary">Create Bank Letter</a>
        <form action="/generate-payslip" method="POST">
            {{ csrf_field() }}
            <!-- Name -->
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" name="employee_name" placeholder="Name of Employee">
                </div>
            </div>
            <!-- Date Joined -->
            <div class="field is-4">
                <label class="label">Date Joined</label>
                <div class="control">
                    <input class="input" type="date" name="date_employee_joined">
                </div>
            </div>
            {{-- Base Salary --}}
            <div class="field has-addons">
                <p class="control">
                    <a class="button is-static">Rs.</a>
                </p>
                <div class="control  is-expanded">
                    <input class="input" type="text" name="salary" placeholder="Base Salary">
                </div>
            </div>
            <h2 class="subtitle">Allowances</h2>
            <!-- House Rent Allowance -->
            <div class="columns">
                <div class="column is-half">
                    <div class="field has-addons">
                        <p class="control">
                            <a class="button is-static">Rs.</a>
                        </p>
                        <div class="control  is-expanded">
                            <input class="input" type="text" name="house_rent_allowance"
                                placeholder="House Rent Allowances">
                        </div>
                    </div>
                </div>
                <!-- Meal Allowance -->

                <div class="column is-half">
                    <div class="field has-addons">
                        <p class="control">
                            <a class="button is-static">Rs.</a>
                        </p>
                        <div class="control is-expanded">
                            <input class="input" type="text" name="meal_allowance" placeholder="Meal Allowances">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Transportation Allowance -->
            <div class="columns">
                <div class="column is-half">
                    <div class="field has-addons">
                        <p class="control">
                            <a class="button is-static">Rs.</a>
                        </p>
                        <div class="control is-expanded">
                            <input class="input" type="text" name="transportation_allowance"
                                placeholder="Transportation Allowances ">
                        </div>
                    </div>
                </div>

                <!-- Travel Allowances -->

                <div class="column is-half">
                    <div class="field has-addons">
                        <p class="control">
                            <a class="button is-static">Rs.</a>
                        </p>
                        <div class="control is-expanded">
                            <input class="input" type="text" name="travel_allowance"
                                placeholder="Extra Travel Allowance">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Other Allowances -->
            <div class="field has-addons">
                <p class="control">
                    <a class="button is-static">Rs.</a>
                </p>
                <div class="control is-expanded">
                    <input class="input" type="text" name="other_allowance" placeholder="Other Allowances">
                </div>
            </div>

            <h2 class="subtitle is-4">Add: Employer Contribution to Social Security Fund</h2>
            <!-- Add: Employer contribution to Social Security Fund -->
            <!-- Provident Fund % -->
            <div class="columns">
                <div class="column is-half">
                    <div class="field has-addons">
                        <div class="control  is-expanded">

                            <input class="input" type="text" name="provident_fund_percent"
                                placeholder="Provident Fund ">
                        </div>
                        <div class="control">
                            <a class="button is-static">%</a>
                        </div>
                    </div>
                </div>

                <!-- Gratuity -->
                <div class="column is-half">
                    <div class="field has-addons">
                        <div class="control  is-expanded">

                            <input class="input" type="text" name="gratuity_percent" placeholder="Gratuity ">
                        </div>
                        <div class="control">
                            <a class="button is-static">%</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SSF Contribution -->
            <div class="field has-addons">
                <div class="control  is-expanded">

                    <input class="input" type="text" name="ssf_percent" placeholder="SSF Contribution ">
                </div>
                <div class="control">
                    <a class="button is-static">%</a>
                </div>
            </div>


            <!-- Deduction: Contribution to Social Secirity Fund -->
            <h2 class="subtitle is-4">Deduction: Employer Contribution to Social Security Fund</h2>

            <!-- Provident Fund % -->
            <div class="columns">
                <div class="column is-half">
                    <div class="field has-addons">
                        <div class="control  is-expanded">

                            <input class="input" type="text" name="deduce_provident_fund_percent"
                                placeholder="Provident Fund ">
                        </div>
                        <div class="control">
                            <a class="button is-static">%</a>
                        </div>
                    </div>
                </div>

                <!-- Gratuity -->
                <div class="column is-half">
                    <div class="field has-addons">
                        <div class="control  is-expanded">

                            <input class="input" type="text" name="deduce_gratuity_percent" placeholder="Gratuity ">
                        </div>
                        <div class="control">
                            <a class="button is-static">%</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SSF Contribution -->
            <div class="field has-addons">
                <div class="control  is-expanded">

                    <input class="input" type="text" name="deduce_ssf_percent" placeholder="SSF Contribution ">
                </div>
                <div class="control">
                    <a class="button is-static">%</a>
                </div>
            </div>

            <!-- Social Security Tax  -->
            <h3 class="subtitle is-4"> Social Security Tax</h3>
            <div class="field has-addons ">
                <div class="control is-expanded">
                    <input class="input" type="text" name="social_tax_percent" placeholder="Social Security Tax">
                </div>
                <div class="control">
                    <a class="button is-static">%</a>
                </div>

            </div>
            <!-- Remarks -->
            <h3 class="subtitle is-4"> Feedback</h3>
            <div class="field">
                <div class="control">
                    <textarea class="textarea" name="remarks" placeholder="Enter your feedback here"></textarea>
                </div>
            </div>

            <!-- Payslip Creator Info -->
            <h3 class="subtitle is-4"> Further Info</h3>
            <div class="columns">
                <div class="column is-half">
                    <div class="field">
                        <label class="label">Name of Creator</label>
                        <div class="control">
                            <input class="input" type="text" name="name_of_creator" placeholder="Name of Employee">
                        </div>
                    </div>
                </div>
                <div class="column is-half">
                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input class="input" type="text" name="title" placeholder="Title">
                        </div>
                    </div>
                </div>  

            </div>
            <div class="field">
                <label class="label">Date created</label>
                <div class="control">
                    <input class="input" type="date" name="date_payslip_generated" placeholder="Date Created">
                </div>
            </div>

            <!-- Generate Button -->
            <input class="button is-primary" type="submit" value="Download Payslip">

        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bulma-calendar@6.0.6/dist/js/bulma-calendar.min.js"></script>
<script src="{{ asset('js/initializeCalendar.js') }}"></script>
</html>