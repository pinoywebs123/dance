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
    <div class="announcement">
        <h1>Dance Class</h1>
        <div class="uploading" style="width: 50%;">
            <a href="#" style="text-decoration: none; color:black">
                <span class="title">Input meeting details to dance class.</span>
            </a><br><br>
            
        
        <form class="caption" id="dance_class" action="{{route('admin_dance_class_update')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-25">
                  <label for="date">Topic</label>
                </div>
                <div class="col-75">
                  <input type="text" id="topic" name="topic" value="{{$find->topic}}">
                </div>
              </div>
            <div class="row">
                <div class="col-25">
                  <label for="date">Date</label>
                </div>
                <div class="col-75">
                  <input type="date" id="date" name="date" value="{{$find->date}}">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="time">Time</label>
                </div>
                <div class="col-75">
                  <input type="time" id="time" name="time" value="{{$find->time}}">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="link">Meeting link</label>
                </div>
                <div class="col-75">
                  <input type="url" id="link" name="link" value="{{$find->link}}">
                </div>
              </div>
              
              <div class="row">
                <div class="col-25">
                  <label for="pw">Meeting password</label>
                </div>
                <div class="col-75">
                  <input type="number" id="pw" name="link_password" value="{{$find->link_password}}">
                  <input type="hidden" name="dance_class_id" value="{{Request::segment(3)}}">
                </div>
              </div>

            <br><br>
            <div class="right-text">
                <button type="submit">
                   Done
                </button>
            </div>
            </form>
        </div>
    </div>

    

    <div class="footer">
        <div class="circle">
            <h1>UNITY</h1>
        </div>
        <div class="circle">
            <h1>STRENGTH</h1>
        </div><div class="circle">
            <h1>TRUST</h1>
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