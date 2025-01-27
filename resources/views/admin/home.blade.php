@extends('admin.layouts.app')

@section('content')
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
 <a href="javascript:void(0)" class="w3-bar-item w3-button" id="loadPatientDetails">Patient Details</a>

 
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h3>Welcome Admin!</h3>
  </div>
</div>



<div class="w3-container">
    <div id="patientDetailsContainer" class="mt-4"></div>
</div>

</div>
<script>
    $(document).ready(function () {
        $('#loadPatientDetails').on('click', function () {
            $.ajax({
                url: "{{ route('patient.view') }}", // Your route to fetch data
                type: "GET",
                success: function (response) {
                    $('#patientDetailsContainer').html(response);
                },
                error: function (xhr) {
                    alert("Error fetching patient details");
                }
            });
        });
    });
</script>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection