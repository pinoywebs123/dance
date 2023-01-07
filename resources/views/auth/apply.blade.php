<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Gordita' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{URL::to('/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <title>Document</title>
</head>
<body>
        <h2>Welcome</h2>
            @include('shared.notification')
            <form class="apply" action="{{route('apply_check')}}" method="POST">
                    @csrf
                    <input type="tel" placeholder="Student Number" maxlength="10"  class="long-reg" name="student_id">
                    <input type="text" placeholder="Full name (Lastname, Firstname, Middle Name)" class="long-reg" name="full_name">
                    <input type="age" placeholder="Age" maxlength="2" name="age">
                    <select style="position: absolute; right: 0; margin-right: 7.4vh;" name="sex">
                        <option value="" disabled selected hidden >Sex</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                      </select>
                    <br>
                    <select name="college_year">
                        <option value="" disabled selected hidden >College Year</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                    </select>
                    <br>
                    <select style="width: 100%;" name="college">
                        <option value="" disabled selected hidden >College</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                    </select>
                    <input type="text" placeholder="Program"  class="long-reg" name="program">
                    <input type="tel" placeholder="Contact Number" maxlength="11" class="long-reg" name="telephone">
                    <input type="email" placeholder="UST Email" class="long-reg" name="email">
                    <input type="url" placeholder="FB Messenger link" class="long-reg" name="fb_link">
                    <br>
                    <label>Show case you're talent.Input below your video link.</label>
                    <input type="url" placeholder="Youtube link" class="long-reg" name="youtube_link">
                    <button type="reset">Clear</button>
                    <button type="submit">Submit</button>
            </form>
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