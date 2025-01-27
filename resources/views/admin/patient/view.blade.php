<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>All Patients</title>
</head>
<body>
    <div class="container mt-5">
        <h3>All OPD Entries</h3>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sr.#</th>
                    <th>OPD ID</th>
                    <th>Patient Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Father/Husband Name</th>
                    <th>Mobile No</th>
                    <th>Address</th>
                    <th>Area</th>
                    <th>Caste</th>
                    <th>Disease</th>
                    <th>MLC/PMLC</th>
                    <th>Charges</th>
                    <th>Charge Amount</th>
                </tr>
            </thead>
            <tbody>
                @forelse($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->opd_id }}</td>
                        <td>{{ $patient->patient_name }}</td>
                        <td>{{ $patient->gender }}</td>
                        <td>{{ $patient->age }}</td>
                        <td>{{ $patient->father_husband_name }}</td>
                        <td>{{ $patient->mobile_no }}</td>
                        <td>{{ $patient->address }}</td>
                        <td>{{ $patient->area }}</td>
                        <td>{{ $patient->caste }}</td>
                        <td>{{ $patient->disease }}</td>
                        <td>{{ $patient->mlc_pmlc }}</td>
                        <td>{{ $patient->charges }}</td>
                        <td>{{ $patient->charge_amount }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="14" class="text-center">No records found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
