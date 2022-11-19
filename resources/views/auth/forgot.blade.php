<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Gordita' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="{{URL::to('try.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <title>Document</title>
</head>
<body>
    <form class="login">
    <h1>Forgot your Password?</h1>
    <div class="input">
        <span  class="icon">
            <ion-icon name="person-circle-outline"></ion-icon>
        </span>
        <input type="text" class="title" placeholder="Username">
        </div>
        <div class="input">
        <span  class="icon">
            <ion-icon name="mail-outline"></ion-icon>
        </span>
        <input type="password" class="title" placeholder="UST Email">
    </div>
    <button type="submit"><a href="reset pw.html" target="left-side">Verify</a></button>
    </form>
</body>
</html>