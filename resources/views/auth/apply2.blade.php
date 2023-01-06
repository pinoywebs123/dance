<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Gordita' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="{{URL::to('index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <title>Document</title>
</head>
<body>
        <h2>UPLOAD VIDEO</h2>
            <div class="apply">
                <form action="{{route('apply3')}}" class="apply2">
                <h3>Show us your talent!</h3>
                    <p>Upload your own choreography here.</p>
                        <input type="file" accept="video/mp4" class="file-up" name="video"><br>
                    <p>*Video should not be longer than 1 minute and in mp4 format. Filename should be in the format of LastnameFirstname_OWN.mp4
                        (e.g. DelaCruzJuan_OWN.mp4)</p>
                    <button type="reset">Clear</button>
                    <button type="submit">Submit</button>
                    </form>
            </div>
</body>
</html>