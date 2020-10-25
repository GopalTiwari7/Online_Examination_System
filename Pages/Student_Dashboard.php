<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="../css/student_dashboard.css" rel="stylesheet">
</head>

<body>
    <div id="container">
        <div id="header">
            <div id="header1">
                <div id="logo"><img src="../images/1.png"></div>
                <div id="right-header1">
                    <a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Sign out</a>
                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Hello, <?php echo $_GET['username'] ?></a>
                </div>
            </div>
        </div>
        <div id="nav">
            <h3>DashBoard</h3>
            <ul class="menu">
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
                <li><a href="Student_Exam_history.html"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;History</a></li>
                <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Sign Out</a></li>
                <li><input type="text" id="tag" name="tag" size="25"  value="Enter Tag"></li>
                <li><button id="search-btn">Search</button></li>
            </ul>
        </div>
    </div>
</body>

</html>