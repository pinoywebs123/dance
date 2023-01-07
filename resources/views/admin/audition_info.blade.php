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
    <div class="auditionee">
            <div class="info-main">
                <div class="info-header">
                    <img src="/public/img/person-circle-outline.svg">
                        <div class="info-text">
                            <h1>{{$find->name}}</h1>
                            <span>Auditionee</span><br>
                            <span style="padding: 0;"><ion-icon name="checkmark-circle" style="color: #99B83C;"></ion-icon>&nbsp;
                                @if($find->status_id == 0)
                                Pending
                                <br>
                                @if(Auth::user()->role_id == 1)
                                 <a href="{{route('admin_audition_pass',$find->id)}}">You Pass</a> 
                                <br>
                                <a href="{{route('admin_audition_fail',$find->id)}}">You Fail</a> 
                                @endif
                               
                                @elseif($find->status_id == 1)
                                    Passed
                                @elseif($find->status_id == 2)
                                    Failed
                                @endif
                            </span>
                        </div>
                </div>
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
                <div class="info-main-one" style="padding-top: 0;">
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
                </div>
            </div>
            <div class="perfs">
                <h1 style="text-align: center;">PERFORMANCES</h1>
                <div class="videos">
                    <h2>Own Video</h2><br>
                    <video class="main-vid" controls>
                        <source src="/public/vid/vid1.mp4" type="video/mp4">
                    </video>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2>Dance Class Video</h2><br>
                    <video class="main-vid" controls>
                        <source src="/public/vid/vid1.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
    </div>
    
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    @if(Session::has('success'))
        Swal.fire({
          icon: 'success',
          title: 'Oops...',
          text: '{{Session::get('success')}}',
          
        })
    @endif


    @if(Session::has('error'))
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: '{{Session::get('error')}}',
          
        })
    @endif
</script>
</html>