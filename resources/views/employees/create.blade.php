@extends('layouts.dashboard')

@section('content')

<main role="main" class="main-content">

    <div class="card p-4 my-4">
        <div class="row">
            <div class="col-12">

                <h1>Add Employee</h1>

                <form method="POST" action="{{ route('employees.store') }}" enctype="multipart/form-data">
                    @csrf



                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Phone -->
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>

                            <!-- Whatsapp Number -->
                            <div class="form-group">
                                <label for="whatsapp_number">whatsapp Number <span class="text-info">(Optional)</span></label>
                                <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number">
                            </div>
                            
                            <!-- Address -->
                            <div class="form-group">
                                <label for="address">Address  <span class="text-info">(Optional)</span></label>
                                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                            </div>

                            <!-- Picture -->
                            <div class="form-group">
                                <label for="picture">Profile Picture <span class="text-info">(Optional)</span></label>
                                <input type="file" class="form-control-file" id="picture" name="picture">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- CNIC -->
                            <div class="form-group">
                                <label for="cnic">CNIC  <span class="text-info">(Optional)</span></label>
                                <input type="text" class="form-control" id="cnic" name="cnic">
                            </div>
                            <!-- About -->
                            <div class="form-group">
                                <label for="about">About <span class="text-info">(Optional)</span></label>
                                <textarea class="form-control" id="about" name="about" rows="3"></textarea>
                            </div>

                            <!-- User Skills -->
                            <div class="form-group">
                                <label for="user_skills">User Skills</label>
                                <input type="text" class="form-control" id="user_skills" name="user_skills">
                            </div>

                            <!-- Designation -->
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation">
                            </div>

                            <!-- Date of Birth (DOB) -->
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob">
                            </div>

                            <!-- Date of Joining (DOJ) -->
                            <div class="form-group">
                                <label for="doj">Date of Joining</label>
                                <input type="date" class="form-control" id="doj" name="doj">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h2 class="py-4 pt-5">Social Links <span class="text-info h4">(Optional)</span></h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="linkedin">LinkedIn</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin">
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram">
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- GitHub -->
                            <div class="form-group">
                                <label for="github">GitHub</label>
                                <input type="text" class="form-control" id="github" name="github">
                            </div>

                            <!-- Skype -->
                            <div class="form-group">
                                <label for="skype">Skype</label>
                                <input type="text" class="form-control" id="skype" name="skype">
                            </div>

                            <!-- Social Links -->
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook">
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Add Employee</button>
                </form>

            </div>
        </div>
    </div>



</main>

@endsection