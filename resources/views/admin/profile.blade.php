<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Gordita' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="{{URL::to('styles/dashboard.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="info-header">
        <img src="{{URL::to('public/img/dp.JPG')}}">
            <div class="info-text">
                <h1>{{Auth::user()->name}}</h1>
                <span>Treasurer</span><br>
                <button style="background-color: initial; border: none;"><a href="#" style="text-decoration: none; color: initial;">
                    <span style="font-weight: bold;"><ion-icon name="create-outline"></ion-icon>&nbsp;Edit Profile</span>
                </a></button>
            </div>
    </div>
        <div class="info-main">
            <div class="info-main-one">
                <h2>&emsp;PERSONAL INFORMATION</h2>
                <div class="info-box-one">
                    <table>
                        <tr>
                            <th>Student Number</th>
                            <td>{{Auth::user()->student_id}}</td>
                        </tr>
                        <tr>
                            <th>Full Name</th>
                            <td>{{Auth::user()->name}}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{Auth::user()->sex}}</td>
                        </tr>
                        <tr>
                            <th>Program</th>
                            <td>{{Auth::user()->program}}</td>
                        </tr>
                        <tr>
                            <th>College</th>
                            <td>{{Auth::user()->college}}</td>
                        </tr>
                        <tr>
                            <th>Year Level</th>
                            <td>{{Auth::user()->college_year}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="info-main-one">
                <h2>&emsp;CONTACT DETAILS</h2>
                <div class="info-box-one">
                    <table>
                        <tr>
                            <th>Contact Number</th>
                            <td>{{Auth::user()->contact}}</td>
                        </tr>
                        <tr>
                            <th>UST Email</th>
                            <td>{{Auth::user()->email}}</td>
                        </tr>
                        <tr>
                            <th>FB Link</th>
                            <td>{{Auth::user()->fb_link}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    
</body>
</html>