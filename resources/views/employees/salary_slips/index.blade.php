@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<style>
    table.dataTable tbody tr {
        background-color: transparent;
    }

    .dataTables_length option {
        color: black;
    }
</style>
@endpush

@push('js')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#salaryTable').DataTable();
    });
</script>
@endpush

@extends('layouts.dashboard')
@section('content')

<main role="main" class="main-content text-white">

    <div class="card p-4 my-4">
        <h1 class="py-4">List of SalarySlips</h1>

        <div class="table-responsive">
            <table id="salaryTable" class="table table-striped table-dark table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Employee Name</th>
                        <th>Salary Month</th>
                        <th>Basic Salary</th>
                        <th>Transport Allowances</th>
                        <th>Income Tax</th>
                        <th>Absent Deduction</th>
                        <th>Other Deduction</th>
                        {{-- Add other columns as needed --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($salarySlips as $salarySlip)
                    <tr>
                        <td>{{ $salarySlip->id }}</td>
                        <td>{{ $salarySlip->employee->name }}</td>
                        <td>{{ $salarySlip->salary_month }}</td>
                        <td>{{ $salarySlip->basic_salary }}</td>
                        <td>{{ $salarySlip->transport_allowances }}</td>
                        <td>{{ $salarySlip->income_tax }}</td>
                        <td>{{ $salarySlip->absent_deduction }}</td>
                        <td>{{ $salarySlip->other_deduction }}</td>
                        {{-- Add other columns as needed --}}
                        <td>
                            <a type="button" style="cursor: pointer" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item"
                                    href="{{ route('salary_slips.show', $salarySlip->id) }}">Show</a>
                                <a class="dropdown-item"
                                    href="{{ route('salary_slips.edit', $salarySlip->id) }}">Edit</a>
                                <form method="POST" action="" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item text-danger"
                                        onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                                </form>
                            </div>
                            {{-- Add links to show, edit, or delete --}}
                            {{-- Add a form for delete if needed --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</main>

@endsection