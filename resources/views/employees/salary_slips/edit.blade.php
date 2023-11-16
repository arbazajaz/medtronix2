@extends('layouts.dashboard')

@push('js')

<script>
    $(document).ready(function () {
        // Fill the form with existing data for editing
        $("#salary_month").val("{{ $salarySlip->salary_month }}");
        $("#basic_salary").val("{{ $salarySlip->basic_salary }}");
        $("#transport").val("{{ $salarySlip->transport_allowances }}");
        $("#income_tax").val("{{ $salarySlip->income_tax }}");
        $("#absent_deduction").val("{{ $salarySlip->absent_deduction }}");
        $("#other_deduction").val("{{ $salarySlip->other_deduction }}");

        // Fill allowances for editing
        @foreach($salarySlip->allowances as $allowance)
            var allowanceInput = `
                <div class="input-group mb-2">
                    <input type="text" class="form-control allowance" placeholder="Allowance Name" value="{{ $allowance->name }}" required>
                    <input type="number" class="form-control allowance-amount" placeholder="Amount" value="{{ $allowance->amount }}" required>
                    <button type="button" class="btn btn-primary remove-allowance">Remove</button>
                </div>
            `;
            $(".allowances").append(allowanceInput);
        @endforeach

        // Fill deductions for editing
        @foreach($salarySlip->deductions as $deduction)
            var deductionInput = `
                <div class="input-group mb-2">
                    <input type="text" class="form-control deduction" placeholder="Deduction Name" value="{{ $deduction->name }}" required>
                    <input type="number" class="form-control deduction-amount" placeholder="Amount" value="{{ $deduction->amount }}" required>
                    <button type="button" class="btn btn-primary remove-deduction">Remove</button>
                </div>
            `;
            $(".deductions").append(deductionInput);
        @endforeach
    });
</script>
@endpush

@section('content')
<main role="main" class="main-content">

    <div class="card p-4 my-4">
        <div class="row">
            <div class="col-12">
                <h2 class="pb-4">Employee Info</h2>
                <h5>Name : <span class="text-info">{{ $salarySlip->employee->name }}</span></h5>
                <h5>Email : <span class="text-info">{{ $salarySlip->employee->email }}</span></h5>
                <h5>Phone : <span class="text-info">{{ $salarySlip->employee->phone }}</span></h5>
            </div>
        </div>
    </div>
    <div class="card p-4 my-4">
        <div class="row">
            <div class="col-12">

                <h1>Edit Salary Slip</h1>
                
                <form method="POST" action="{{ route('salary_slips.update', $salarySlip->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="employee_id" value="{{ $salarySlip->employee_id }}">
            
                    
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

                    <button type="submit" class="btn btn-primary">Update Salary Slip</button>
                </form>

            </div>
        </div>
    </div>

</main>
@endsection
