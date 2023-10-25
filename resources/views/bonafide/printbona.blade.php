<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bonafide</title>
</head>

<body>
    <div class="text-blue-900">
        <div class="font-serif text-xl text-center font-extrabold">Student Management System</div>
        <p class="font-sans text-sm text-center">(Non Grantable)</p>
        <div class="text-center">
          At:<b>Khirdi Ganesh</b>, Post : Yesgaon, Tal.Kopargaon, Dist.Ahmednagar (MS) 423601
        </div>
        <div class="flex w-[40%] mx-auto gap-28">
          <p>Phone : 9075900900 </p>
          <p class="mx-20">Fax : (02423)222682</p>
        </div>
        <div class="flex w-[40%] mx-auto gap-28">
          <p>e-mail : sanjivanicbse@gmail.com</p>
          <p>website : sanjivaniacademy.org.in</p>
        </div>
        <hr class="border-black w-[50%] mx-auto mt-2"/>

          <div class="flex font-sans text-base p-4 w-[50%] mx-auto gap-[450px]">
            <pre >SRES/SA/<span>{{ $student->academic_year }}/{{ $student->bona_no }}</span></pre>
            <pre >Date:{{ \Carbon\Carbon::now()->format('d/m/Y') }}</pre>
          </div>
          <div class="flex mb-10">
          <button class="text-2xl rounded-full px-7 bg-blue-900 text-white font-bold mx-auto">BONAFIDE CERTIFICATE</button>
          </div>
          <div class="text-lg w-[50%] mx-auto">
            <div> &emsp; &emsp; &ensp; This is to certify that Mast/Miss <span>{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</span> is a</div> student of our school studying in Grade <span>{{ $student->class }}</span> Div. <span>{{ $student->div }}</span> in the academic year <span>{{ $student->academic_year }}</span> .
            His / Her date of birth as per our school record is <span>{{ \Carbon\Carbon::parse($student->dob)->format('d/m/Y') }}</span>
            <div class="mt-4">(in words_______________________________). Place of birth <span>{{ $student->place_of_birth }}</span>Caste <span>{{ $student->caste }}</span>to the best of my knowledge,
                he/she bears a good moral character.</div>
              </div>
                <div class="w-[50%] mx-auto">
                  <div class="mt-20">Place : <b>Kopargaon</b></div>
                  <div class="flex gap-[550px]">
                    <div>Date:</div>
                    <div class="mx-auto">PRINCIPAL</div>
                  </div>
                </div>
                </div>
                <button id="print-Btn" type="button" onclick="window.print()">Print</button>
</body>

</html>
