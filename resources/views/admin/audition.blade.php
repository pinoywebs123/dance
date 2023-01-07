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
    <div class="header">
        <h1>AUDITIONEES</h1>
        </div>
        <br>
                <table class="member-table">

                    <tr>
                        <th>Student Number</th>
                        <th>Name</th>
                        <th>Sex</th>
                        <th>Year</th>
                        <th>Status</th>
                    </tr>
                    @foreach($auds as $aud)
                        <tr>
                            <td>{{$aud->student_id}}</td>
                            <td><a href="{{route('admin_audition_info',$aud->id)}}" target="_self">{{$aud->name}}</a></td>
                            <td>{{$aud->sex}}</td>
                            <td>{{$aud->college_year}}</td>
                            @if($aud->status_id == 0)
                                <td>Pending</td>
                            @elseif($aud->status_id == 1)
                                <td style="color: green;">Passed</td>
                            @elseif($aud->status_id == 2)
                                <td style="color: red;">Failed</td>
                            @endif
                            
                            
                            
                        </a></tr>
                    @endforeach
                    
                    
                </table>
</body>
</html>