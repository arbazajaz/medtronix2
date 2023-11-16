@extends('layouts.dashboard')

@push('js')

    <script>
    function collectAllowances() {
        var allowancesArray = [];

        // Iterate over each element with class 'allowance'
        $(".allowance").each(function (index, element) {
            var allowanceName = $(element).val();
            var allowanceAmount = parseFloat($(element).closest(".input-group").find(".allowance-amount").val()) || 0;

            // Create an object with name and amount
            var allowanceObject = {
                name: allowanceName,
                amount: allowanceAmount
            };

            // Push the object to the array
            allowancesArray.push(allowanceObject);
        });

        return allowancesArray;
    }

    function collectDeductions() {
        var deductionsArray = [];

        // Iterate over each element with class 'deduction'
        $(".deduction").each(function (index, element) {
            var deductionName = $(element).val();
            var deductionAmount = parseFloat($(element).closest(".input-group").find(".deduction-amount").val()) || 0;

            // Create an object with name and amount
            var deductionObject = {
                name: deductionName,
                amount: deductionAmount
            };

            // Push the object to the array
            deductionsArray.push(deductionObject);
        });

        return deductionsArray;
    }

    $(document).ready(function () {
        $(".add-allowance").click(function () {
            var allowanceInput = `
                <div class="input-group mb-2">
                    <input type="text" class="form-control allowance" placeholder="Allowance Name" required>
                    <input type="number" class="form-control allowance-amount" placeholder="Amount" required>
                    <button type="button" class="btn btn-primary remove-allowance">Remove</button>
                </div>
            `;
            $(".allowances").append(allowanceInput);
        });

        $(".allowances").on("click", ".remove-allowance", function () {
            $(this).closest(".input-group").remove();
        });

        $(".add-deduction").click(function () {
            var deductionInput = `
                <div class="input-group mb-2">
                    <input type="text" class="form-control deduction" placeholder="Deduction Name" required>
                    <input type="number" class="form-control deduction-amount" placeholder="Amount" required>
                    <button type="button" class="btn btn-primary remove-deduction">Remove</button>
                </div>
            `;
            $(".deductions").append(deductionInput);
        });

        $(".deductions").on("click", ".remove-deduction", function () {
            $(this).closest(".input-group").remove();
        });

        $(document).on('input', function () {
            // Calculate Total Salary
            // Your existing calculation code...

            // Collect allowances and deductions data
            var allowancesData = collectAllowances();
            var deductionsData = collectDeductions();

            console.log(allowancesData); // You can use this array in your AJAX request to send to the backend
            console.log(deductionsData); // You can use this array in your AJAX request to send to the backend
        });
    });
</script>

    <script>
        $(".add-allowance").click(function () {
                var allowanceInput = `
                    <div class="input-group mb-2">
                        <input type="text" class="form-control allowance" placeholder="Allowance Name" required>
                        <input type="number" class="form-control allowance-amount" placeholder="Amount" required>
                        <button type="button" class="btn btn-primary remove-allowance">Remove</button>
                    </div>
                `;
                $(".allowances").append(allowanceInput);
            });

            // Remove Allowance
            $(".allowances").on("click", ".remove-allowance", function () {
                $(this).closest(".input-group").remove();
            });

            // Add Deduction
            $(".add-deduction").click(function () {
                var deductionInput = `
                    <div class="input-group mb-2">
                        <input type="text" class="form-control deduction" placeholder="Deduction Name" required>
                        <input type="number" class="form-control deduction-amount" placeholder="Amount" required>
                        <button type="button" class="btn btn-primary remove-deduction">Remove</button>
                    </div>
                `;
                $(".deductions").append(deductionInput);
            });

            // Remove Deduction
            $(".deductions").on("click", ".remove-deduction", function () {
                $(this).closest(".input-group").remove();
            });


            $(document).on('input',function (){

                // Calculate Total Salary
                var basicSalary = parseFloat($("#basic_salary").val()) || 0;
                var transport = parseFloat($("#transport").val()) || 0;
                var incomeTax = parseFloat($("#income_tax").val()) || 0;
                var absentDeduction = parseFloat($("#absent_deduction").val()) || 0;
                var otherDeduction = parseFloat($("#other_deduction").val()) || 0;

                var totalAllowances = 0;
                $(".allowance-amount").each(function () {
                    var amount = parseFloat($(this).val()) || 0;
                    totalAllowances += amount;
                });

                var totalDeductions = 0;
                $(".deduction-amount").each(function () {
                    var amount = parseFloat($(this).val()) || 0;
                    totalDeductions += amount;
                });
                
                var totalSalary = basicSalary + transport - incomeTax - absentDeduction + totalAllowances - totalDeductions;
                $("#total_salary").val(totalSalary.toFixed(2));
                
            });
                
                </script> 

@endpush

@section('content')
<main role="main" class="main-content">

    <div class="card p-4 my-4">
        <div class="row">
            <div class="col-12">
                <h2 class="pb-4">Employee Info</h2>
                <h5>Name : <span class="text-info">{{ $employee->name }}</span></h5>
                <h5>Email : <span class="text-info">{{ $employee->email }}</span></h5>
                <h5>Phone : <span class="text-info">{{ $employee->phone }}</span></h5>
            </div>
        </div>
    </div>
    <div class="card p-4 my-4">
        <div class="row">
            <div class="col-12">

                <h1>Create Salary Slip</h1>
                
                <form method="POST" action="{{ route('salary_slips.store',$employee->id) }}">
                    @csrf
            
            
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="salary_month">Salary Month</label>
                                <input type="month" name="salary_month" id="salary_month" class="form-control" required>
                            </div>
                    
                            <div class="form-group">
                                <label for="basic_salary">Basic Salary</label>
                                <input type="number" name="basic_salary" id="basic_salary" class="form-control" required>
                            </div>
                    
                            <div class="form-group">
                                <label for="transport">Transport Allowance</label>
                                <input type="number" name="transport" id="transport" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="income_tax">Income Tax</label>
                                <input type="number" name="income_tax" id="income_tax" class="form-control" required>
                            </div>
                    
                            <div class="form-group">
                                <label for="absent_deduction">Absent Deduction</label>
                                <input type="number" name="absent_deduction" id="absent_deduction" class="form-control" required>
                            </div>
                    
                            <div class="form-group">
                                <label for="other_deduction">Other Deduction</label>
                                <input type="number" name="other_deduction" id="other_deduction" class="form-control" required>
                            </div>
                        </div>
                    </div>
            
                    
                    <div class="form-group">
                        <label>Salary Allowances</label>
                        <div class="allowances">
                            <!-- Initial allowance input -->
                            <div class="input-group mb-2">
                                <input type="text" class="form-control allowance" placeholder="Allowance Name" required>
                                <input type="number" class="form-control allowance-amount" placeholder="Amount" required>
                                <button type="button" class="btn btn-primary remove-allowance">Remove</button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-dark    add-allowance">+ Add Allowance</button>
                    </div>
        
                    <div class="form-group">
                        <label>Deductions</label>
                        <div class="deductions">
                            <!-- Initial deduction input -->
                            <div class="input-group mb-2">
                                <input type="text" class="form-control deduction" placeholder="Deduction Name" required>
                                <input type="number" class="form-control deduction-amount" placeholder="Amount" required>
                                <button type="button" class="btn btn-primary remove-deduction">Remove</button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-dark add-deduction">+ Add Deduction</button>
                    </div>
                    

                    <div class="form-group">
                        <label for="total_salary">Total Salary after Deductions</label>
                        <input type="text" id="total_salary" class="form-control" readonly>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Salary Slip</button>
                </form>

            </div>
        </div>
    </div>



</main>

@endsection