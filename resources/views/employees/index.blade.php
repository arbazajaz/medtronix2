@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<style>
    table.dataTable tbody tr {
    background-color: transparent;
}
    .dataTables_length option{
        color: black;
    }
</style>
@endpush

@push('js')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#employeeTable').DataTable();
    });
</script>
@endpush

@extends('layouts.dashboard')
@section('content')

<main role="main" class="main-content text-white">

    <div class="card p-4 my-4">
        <h1 class="py-4">List of Employees</h1>

        <div class="table-responsive">
            <table id="employeeTable" class="table table-striped table-dark table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>designation</th>
                        <th>Phone</th>
                        <th>Whatsapp Number</th>
                        <th>Actions</th> 
                        <!-- Add other table headers for the fields you need -->
                    </tr>
                </thead>
                <tbody>
                    
                    @php
                        $i=1;
                    @endphp

                    @foreach($employees as $employee)
                    <tr>
                        <td>{{ $i}}</td>
                        <td>
                            @if ($employee->picture)
                                <img class="img-fluid rounded" style="max-height: 70px; max-width:70px;" src="{{ asset('storage/' . $employee->picture) }}" alt="User Profile Picture">
                            @else
                                <!-- You can provide a default image or message here for when profile_picture is null -->
                                <span><i class="fas fa-smile"></i> No Pic</span>                       
                            @endif
                        </td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->designation }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->whatsapp_number }}</td>

                        <td class="text-center">
                            <div class="btn-group">
                                <a type="button" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('salary_slips.create', $employee->id) }}">Create Salary</a>
                                    <a class="dropdown-item" href="{{ route('employees.show', $employee->id) }}">View</a>
                                    <a class="dropdown-item" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                                    <form method="POST" action="{{ route('employees.destroy', $employee->id) }}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <!-- Add other table data cells for the fields you need -->
                    </tr>
                    @php
                        $i++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</main>

@endsection