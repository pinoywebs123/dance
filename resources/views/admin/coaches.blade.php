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
        <h1>Coaches</h1>
    </div>
        <br>
            <div class="table">
                <div class="coach-table">
                <table class="member-table">
                    <tr>
                        <th>Name</th>
                        <th>Sex</th>
                        <th>Status</th>
                    </tr>

                    @foreach($coaches as $coach)
                        <tr>
                            <td><a href="{{route('admin_coach_info',$coach->id)}}" target="_self">{{$coach->name}}</a></td>
                            <td>{{$coach->sex}}</td>
                            @if($coach->status_id == 0)
                                <td style="color: red;">Inactive</td>
                            @else
                                <td style="color: green;">Active</td>
                            @endif
                           
                        </tr>
                    @endforeach
                   
                </table>
                </div>
            </div>
</body>
</html>