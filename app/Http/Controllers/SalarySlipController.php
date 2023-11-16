<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SalarySlip;
use Illuminate\Http\Request;

class SalarySlipController extends Controller
{
    public function index()
    {
        // Retrieve all salary slips
        $salarySlips = SalarySlip::all();

        return view('employees.salary_slips.index', compact('salarySlips'));
    }

    public function create($id)
    {
        
    $employee = User::find($id);

    return view('employees.salary_slips.create',compact('employee'));
    }

    public function store(Request $request)
    {
        // return $request;
        // Validate the request
        return $request;
        $request->validate([
            'employee_id' => 'required',
            'salary_month' => 'required|date_format:Y-m',
            'basic_salary' => 'required',
            // Add other fields as needed
        ]);
        $monthSalary = str_replace(' ', '', $request->salary_month);
        SalarySlip::create([
            'employee_id' => $request->input('employee_id'),
            'salary_month' => $monthSalary,
            'basic_salary' =>  $request->input('basic_salary'),
            'transport_allowances' =>  $request->input('transport_allowances'),
            'income_tax' =>  $request->input('income_tax'),
            'absent_deduction' =>  $request->input('absent_deduction'),
            'other_deduction' =>  $request->input('other_deduction'),
            'other_allowances' =>  '6',
        ]);

        return view('employees.salary_slips.index')->with('success', 'Salary slip created successfully.');
    }

    public function show($id)
    {
        $salarySlip = SalarySlip::findOrFail($id);

        return view('employees.salary_slips.show', compact('salarySlip'));
    }

    public function edit($id)
    {
        $salarySlip = SalarySlip::findOrFail($id);

        return view('employees.salary_slips.edit', compact('salarySlip'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'employee_id' => 'required',
            'salary_month' => 'required|date_format:Y-m',
            'basic_salary' => 'required|numeric',
            // Add other fields as needed
        ]);

        // Update the salary slip
        $salarySlip = SalarySlip::findOrFail($id);
        $salarySlip->update($request->all());

        return redirect()->route('employees.salary_slips.index')->with('success', 'Salary slip updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the salary slip
        SalarySlip::findOrFail($id)->delete();

        return redirect()->route('employees.salary_slips.index')->with('success', 'Salary slip deleted successfully.');
    }
}
