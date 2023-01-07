<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Gordita' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="{{URL::to('/styles/dashboard.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="info-header">
        <img src="/public/img/dp.JPG">
            <div class="info-text">
                <h1>{{$find->name}}</h1>
                <form>
                    <select>
                        <option>Position</option>
                        <option>Captain</option>
                        <option>Co-Captain</option>
                        <option>Secretary</option>
                        <option>Treasurer</option>
                        <option>Public Relations Officer</option>
                    </select>
                </form>    
                <br>
                @if($find->status_id == 0)
                   <span style="padding: 0;"><ion-icon name="checkmark-circle" style="color: red;"></ion-icon>&nbsp;InActive</span>
                @elseif($find->status_id == 1)
                   <span style="padding: 0;"><ion-icon name="checkmark-circle" style="color: green;"></ion-icon>&nbsp;Active</span>
                @endif
                
            </div>
    </div>
        <div class="info-main">
            <div class="info-main-one">
                <h2>&emsp;PERSONAL INFORMATION</h2>
                <div class="info-box-one">
                    <table>
                        <tr>
                            <th>Student Number</th>
                            <td>{{$find->student_id}}</td>
                        </tr>
                        <tr>
                            <th>Full Name</th>
                            <td>{{$find->name}}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{$find->sex}}</td>
                        </tr>
                        <tr>
                            <th>Program</th>
                            <td>{{$find->program}}</td>
                        </tr>
                        <tr>
                            <th>College</th>
                            <td>{{$find->college}}</td>
                        </tr>
                        <tr>
                            <th>Year Level</th>
                            <td>{{$find->college_year}}</td>
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
                            <td>{{$find->contact}}</td>
                        </tr>
                        <tr>
                            <th>UST Email</th>
                            <td>{{$find->email}}</td>
                        </tr>
                        <tr>
                            <th>FB Link</th>
                            <td>{{$find->fb_link}}</td>
                        </tr>
                    </table>
                </div>
                    <br>
                    <div class="right-text">
                    @if(Auth::user()->role_id == 1)
                        @if($find->status_id == 0)
                            <a href="{{route('admin_coach_status',$find->id)}}">
                                <ion-icon name="trash-outline"></ion-icon>
                                Activate member
                            </a>
                        @else
                            <a href="{{route('admin_coach_status',$find->id)}}">
                                <ion-icon name="trash-outline"></ion-icon>
                                Deactivate member
                            </a>
                        @endif
                    @endif
                    </div>
            </div>
        </div>
    
</body>
</html>