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
    <div class="edit-profile">
        <form method="POST" action="{{route('admin_profile_update')}}">
            @csrf
        <h1>Edit Profile</h1>
    <div class="info-header-card">
        <table>
            <tr>
                <td colspan="2"><div class="card-header">Profile Picture</div></td>
            </tr>
            <tr>
                <td><img src="{{URL::to('public/img/dp.JPG')}}"></td>
                <td>
                    <div class="info-text">
                        <h1>{{Auth::user()->name}}</h1>
                        <select style="width: auto;">
                            <option disabled selected>Position</option>
                            <option>Captain</option>
                            <option>Co-Captain</option>
                            <option>Secretary</option>
                            <option>Treasurer</option>
                            <option>Public Relations Officer</option>
                        </select><br>
                    </div>
                </td>
            </tr>
            <tr>
                <td><button>Upload new image</button></td>
            </tr>
        </table>
        
            
        
    </div>
        <div class="info-main">
            <div class="info-main-one">
                <h2>&emsp;PERSONAL INFORMATION</h2>
                <div class="info-box-one card">
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
                            <td><input type="text" placeholder="Information Systems" value="{{Auth::user()->program}}" name="program"></td>
                        </tr>
                        <tr>
                            <th>College</th>
                            <td><input type="text" placeholder="CICS" value="{{Auth::user()->college}}" name="college"></td>
                        </tr>
                        <tr>
                            <th>Year Level</th>
                            <td>
                                <select>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="3rd">3rd</option>
                                    <option value="4th">4th</option>
                                    <option value="5th">5th</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="info-main-one">
                <h2>&emsp;CONTACT DETAILS</h2>
                <div class="info-box-one card">
                    <table>
                        <tr>
                            <th>Contact Number</th>
                            <td><input type="number" placeholder="09123456789" value="{{Auth::user()->contact}}" name="contact"></td>
                        </tr>
                        <tr>
                            <th>UST Email</th>
                            <td>{{Auth::user()->email}}</td>
                        </tr>
                        <tr>
                            <th>FB Link</th>
                            <td><input type="url" placeholder="https://www.facebook.com/Sam.Laroco" value="{{Auth::user()->fb_link}}" name="fb_link"></td>
                        </tr>
                    </table>
                </div>
                    <br>
                    <div class="right-text">
                    <button type="submit">
                         <ion-icon name="checkmark-done-circle-outline"></ion-icon>
                        Save changes
                    </button>
                    </div>
            </div>
        </div>
        </form>
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