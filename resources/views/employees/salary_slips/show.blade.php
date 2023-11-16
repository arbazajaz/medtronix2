@extends('layouts.dashboard')  {{-- Assuming you have a layout file --}}

@section('content')

<main role="main" class="main-content text-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Salary Slip Details</h1>

        <div>
            <strong>ID:</strong> {{ $salarySlip->id }}<br>
            <strong>Employee Name:</strong> {{ $salarySlip->employee->name }}<br>
            <strong>Salary Month:</strong> {{ $salarySlip->salary_month }}<br>
            <strong>Basic Salary:</strong> {{ $salarySlip->basic_salary }}<br>
            <strong>Transport Allowances:</strong> {{ $salarySlip->transport_allowances }}<br>
            <strong>Income Tax:</strong> {{ $salarySlip->income_tax }}<br>
            <strong>Absent Deduction:</strong> {{ $salarySlip->absent_deduction }}<br>
            <strong>Other Deduction:</strong> {{ $salarySlip->other_deduction }}<br>
            {{-- Add other fields as needed --}}
        </div>

        {{-- Add a back button or a link to go back to the salary slips index --}}
        <a href="{{ route('salary_slips.index') }}" class="btn btn-primary">Back to Salary Slips</a>
            </div>
        </div>
    </div>

</main>
@endsection
