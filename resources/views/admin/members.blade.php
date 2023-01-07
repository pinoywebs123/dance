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
        <h1>MEMBERS</h1>
            <div class="options">
                <span><ion-icon name="options-outline"></ion-icon>Sort</span><br> <!--Student Number, Name, Sex, Year, Status-->
                <span><ion-icon name="download-outline"></ion-icon>Export</span> <!--Excel-->
            </div>
    </div>
        <br>
            <div class="table">
                <table class="member-table">
                    <tr>
                        <th>Student Number</th>
                        <th>Name</th>
                        <th>Sex</th>
                        <th>Year</th>
                        <th>Position</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>2018115425</td>
                        <td><a href="/info.html" target="_self">Sophia Laroco</a></td>
                        <td>F</td>
                        <td>1st year</td>
                        <td>Co-Captain</td>
                        <td style="color: green;">Active</td></tr>
                    <tr>
                        <td>2018115426</td>
                        <td>Sammy Laroco</td>
                        <td>F</td>
                        <td>1st year</td>
                        <td>Public Relations Officer</td>
                        <td style="color: green;">Active</td>
                    </tr>
                    <tr>
                        <td>2018115427</td>
                        <td><a href="/info.html" target="_self">Sophia Amabelle</a></td>
                        <td>F</td>
                        <td>3rd year</td>
                        <td>Member</td>
                        <td style="color: green;">Active</td>
                    </tr>
                    <tr>
                        <td>2018115428</td>
                        <td><a href="/info.html" target="_self">Sam Laroco</a></td>
                        <td>M</td>
                        <td>4th year</td>
                        <td>Treasurer</td>
                        <td style="color: green;">Active</td>
                    </tr>
                    <tr>
                        <td>2018115429</td>
                        <td><a href="/info.html" target="_self">Amabelle Laroco</a></td>
                        <td>F</td>
                        <td>2nd year</td>
                        <td>Captain</td>
                        <td style="color: green;">Active</td>
                    </tr>
                    <tr>
                        <td>2018115430</td>
                        <td><a href="/info.html" target="_self">Sam De Vera</a></td>
                        <td>M</td>
                        <td>3rd year</td>
                        <td>Secretary</td>
                        <td style="color: green;">Active</td>
                    </tr>
                    <tr style="background-color:#D9D9D9">
                        <td>2018115431</td>
                        <td><a href="/info-inactive.html" target="_self">Sophia Querol</a></td>
                        <td>F</td>
                        <td>2nd year</td>
                        <td>Member</td>
                        <td style="color: red;">Inactive</td>
                    </tr>
                    <tr style="background-color:#D9D9D9">
                        <td>2018115432</td>
                        <td><a href="/info-inactive.html" target="_self">Amabelle De Vera</a></td>
                        <td>F</td>
                        <td>4th year</td>
                        <td>Member</td>
                        <td style="color: red;">Inactive</td>
                    </tr>
                    <tr style="background-color:#D9D9D9">
                        <td>2018115433</td>
                        <td><a href="/info-inactive.html" target="_self">Sam Milby</a></td>
                        <td>M</td>
                        <td>4th year</td>
                        <td>Member</td>
                        <td style="color: red;">Inactive</td>
                    </tr>
                </table>
            </div>
</body>
</html>