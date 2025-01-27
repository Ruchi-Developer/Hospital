<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>New OPD Entry</title>
    <style>
         .opd_id{
            margin-left:6px;
         }
        .heading{
            padding-left:20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h3 class="heading">New OPD Entry</h3>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            
            <div class="card-body">
                <form action="{{ route('patient.store') }}" method="POST">
                    @csrf

                    <!-- OPD ID -->
                    <div class="row opd_id">
                     <div class="form-group col-md-2">
                        <label for="Sr_no">Sr.#</label>
                        <input type="integer" id="sr_no" name="sr_no" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="opd_id">OPD ID:</label>
                        <input type="text" id="opd_id" name="opd_id" class="form-control" required>
                    </div>
                    </div>
                    <!-- Personal Information -->
                    <div class="mt-4 col-md-6">

                        <h4>Personal Information</h4>
                        <div class="form-group">
                            <label for="patient_name">Patient's Name:</label>
                            <input type="text" id="patient_name" name="patient_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select id="gender" name="gender" class="form-control" required>
                                <option value="MALE">Male</option>
                                <option value="FEMALE">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" id="age" name="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="father_husband_name">Father/Husband Name:</label>
                            <input type="text" id="father_husband_name" name="father_husband_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mobile_no">Mobile No:</label>
                            <input type="text" id="mobile_no" name="mobile_no" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="area">Area:</label>
                            <select id="area" name="area" class="form-control">
                                <option value="RURAL">Rural</option>
                                <option value="URBAN">Urban</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="caste">Caste:</label>
                            <input type="text" id="caste" name="caste" class="form-control">
                        </div>
                    </div>

                    <!-- Official Information -->
                    <div class="mt-4 col-md-6">
                        <h4>Official Information</h4>
                        <div class="form-group">
                            <label for="disease">Disease:</label>
                            <input type="text" id="disease" name="disease" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mlc_pmlc">MLC/PMLC:</label>
                            <select id="mlc_pmlc" name="mlc_pmlc" class="form-control">
                                <option value="NONE">None</option>
                                <option value="MLC">MLC</option>
                                <option value="PMLC">PMLC</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="charges">Charges:</label>
                            <select id="charges" name="charges" class="form-control">
                                <option value="PAID">Paid</option>
                                <option value="UNPAID">Unpaid</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="charge_amount">Charge Amount:</label>
                            <input type="text" id="charge_amount" name="charge_amount" class="form-control" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
