<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaving Certificate</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    /* Add your custom CSS styles here */
    body {
        margin: 20px; /* Optional margin for spacing */
        padding: 20px; /* Optional padding for spacing */
    }
	.container {
        display: flex;
        justify-content: space-between;
    }

    .left-text {
        flex: 1;
    }

    .center-image {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .right-text {
        flex: 1;
        text-align: right;
    }

    .text-primary {
        margin: 0;
        padding: 0;
    }
	.custom-container {
        text-align: center;
    }

    .custom-text-primary {
        margin: 0;
        padding: 0;
    }
	 .custom-center {
        text-align: center;
    }
    .centered-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
	.custom-layout {
        display: flex;
        flex-direction: column;
        align-items: left;
    }
	    .custom-right-corner2 {
        text-align: right;
    }
    .upper-container {
        margin-top: 6cm;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .left-slot, .middle-slot, .right-slot {
        display: inline-block;
        vertical-align: top;
    }

    .middle-slot {
        text-align: center; /* Center-align the text within middle-slot */
    }

    .vertical-line {
        border-left: 1px solid #333333; /* Adjust the color and width as needed */
        height: 200px; /* Adjust the height as needed */
        margin: 0 20px; /* Adjust the margin for spacing */
    }
	.custom-right-corner2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    }

    .left-content, .middle-content, .right-content {
    width: 30%; /* Adjust as needed */
    text-align: center;
    }

    .text-primary {

    font-weight: bold;
    margin-top: 10px; /* Adjust the margin to move it slightly down */
    }
    @page {
    margin: 0.01cm; /* Adjust margin values as needed */
    }



    </style>

</head>
<div class="upper-container" >

</div>
<div class="container mt-5" style="position: relative;">
    <hr style="border: 2px solid black; width: 100%; /* Set a reasonable width here */">
    <div style="position: absolute; left: 0; top: 20px; font-weight: bold; left: 80px">
        L.C.No:{{ $students->lc_no }}
    </div>

    <div style="position: absolute; top: 20px; font-weight: bold; right: 120px;">
        GR.No:{{ $students->gr_no }}
    </div>
</div>
<div class="container mt-5 custom-center centered-content">
    <h2 class="text-danger" style="text-decoration: underline;">
        LEAVING CERTIFICATE
    </h2>
</div>
<div class="container centered-content">
    <p class="text-primary">
        (No change in any entry in any entry is to be made except by the authority issuing the certificate)
    </p>
	<br>
</div>
<div class="info">
    <strong>&emsp;1.&emsp;Students ID &emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</strong>
       <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  {{ $students->id}}  </span>
    <br><br>
    <strong>&emsp;2.&emsp;Aadhar No (UID) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  {{ $students->aadhar_no}}  </span>
    <br><br>
    <strong>&emsp;2.&emsp;Name of the pupil in full &emsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  {{ $students->first_name}} {{ $students->middle_name }} {{ $students->last_name }}</span>
    <br><br>
    <strong>&emsp;4.&emsp;Father's Full name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  {{$students->father_name }}  </span>
    <br><br>
    <strong>&emsp;5.&emsp;Mother's Name &emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  {{$students->mother_name }}  </span>
    <br><br>
    <strong>&emsp;6.&emsp;Religion, Caste & Sub Caste &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  {{ $students->religion}} {{ $students->caste }} {{ $students->subcaste }}</span>
    <br><br>
    <strong>&emsp;7.&emsp;Nationality &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  {{ $students->nationality}}  </span>
    <br><br>
    <strong>&emsp;8.&emsp;Place of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  {{ $students->place_of_birth}}  </span>
    <br><br>
    <strong>&emsp;9.&emsp;Date of Birth in figures & words &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  {{ $students->dob}}  </span>
    <br><br>
    <strong>&emsp;10.&emsp;School Annual Examination with result &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  {{$students->result }}  </span>
    <br><br>
    <strong>&emsp;11.&emsp;Progress in Studies &emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  Progress  </span>
    <br><br>
    <strong>&emsp;12.&emsp;Conduct in school &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  Conduct  </span>
    <br><br>
    <strong>&emsp;13.&emsp;Date of Application for Certificate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  {{$students->application_date }}  </span>
    <br><br>
    <strong>&emsp;14.&emsp;Date of issue of certificate &nbsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  {{ $students->lc_date}}  </span>
    <br><br>
    <strong>&emsp;15.&emsp;Standard in which pupil was studying &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  {{ $students->class }}  </span>
    <br><br>
    <strong>&emsp;16.&emsp;Reason for leaving School &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;:</strong>
    <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  Reason </span>
    <br><br>
    <strong>&emsp;17.&emsp;Remarks &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</strong>
       <span style="width: 100%;"> &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  Remarks  </span>
</div>

<hr style="border: 2px solid black;">


    <div class="container text-center">
        <strong>Certified that above Mentioned information is True According to the School General Register.</strong>
    </div>
    <div class="container mt-4 custom-layout">
        <div class="row">
            <div class="col">
                <strong>Place: Khirdi Ganesh, KOPARGAON</strong>
            </div>
            <div class="col text-right">
                <strong>Date: <span id="currentDate"></span></strong>
            </div>
        </div>
    </div><br><br>
    <div class="custom-right-corner2">
        <div class="left-content" style="color: black !important;">
            <p class="text-primary"><strong>Prepared By</strong></p>
        </div>
        <div class="middle-content" style="color: black !important;">
            <p class="text-primary"><strong>Class Teacher</strong></p>
        </div>
        <div class="right-content" style="color: black !important;">
            <p class="text-primary"><strong>Principal</strong></p>
        </div>
    </div>

<div class="container text-center mt-4">
    <button class="btn btn-primary" id="printButton" onclick="printPage()">Print</button>
</div>


<script>
    // Function to get the current date in "dd/mm/yyyy" format
    function getCurrentDate() {
        const now = new Date();
        const day = String(now.getDate()).padStart(2, '0');
        const month = String(now.getMonth() + 1).padStart(2, '0'); // Month is zero-based
        const year = now.getFullYear();
        return `${day}/${month}/${year}`;
    }

    // Set the content of the currentDate element to the current date
    document.getElementById("currentDate").textContent = getCurrentDate();
</script>

<script>
    function printPage() {
        // Hide the print button before printing
        document.getElementById("printButton").style.display = "none";

        // Trigger the browser's print functionality
        window.print();

        // Restore the button's visibility after printing (optional)
        document.getElementById("printButton").style.display = "block";
    }
</script>
<!-- Add Bootstrap JS and jQuery scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
