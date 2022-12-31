<link rel="icon" type="image/x-icon" href="favicon.ico" />
<meta name="viewport" content="width=device-width, user-scalable=no">
   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/menu.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
     <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Menu</a>
            </li>
            <li>
                <a href="/" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#" onclick = $("#menu-close").click(); >Page</a>
            </li>
            <li>
                <a href="#" onclick = $("#menu-close").click(); >Page</a>
            </li>
            <li>
                <a href="#" onclick = $("#menu-close").click(); >Page</a>
            </li>
            <li>
                <a href="#" onclick = $("#menu-close").click(); >Page</a>
            </li>
        </ul>
    </nav>

<div id="head">
<div class="headinside" align="center">
 <h2><a href="/index.php">BK-Trek 2.0 Template</a></h2><br />
<div class="stardate">Stardate: <SCRIPT language=javascript>
<!-- // -- made by Heath Coop of TrekConnection.com, please keep these credits when using this script
var Now = new Date()
var NowTime = Now.getTime()/1000
var Day = Now.getDate()
var Month = Now.getMonth()+1
var Year = Now.getYear();
if (Year < 2000) Year = Year + 1900
if (Year<1000) { YearDif=Math.abs(Year-87) }
if (Year>1000) { YearDif=Math.abs(Year-1987) }
SDYear=40000+(YearDif*1000)
YearStart = new Date(Year,0,1,0,0,0)
var YearStartTime= YearStart.getTime()/1000
Days=(NowTime-YearStartTime)/86400
if (Days>=183) { SDYear=SDYear+1000
SDDays=(Days*(1000/365))-500 }
if (Days<183) { SDDays=500+(Days*(1000/365)) }
StarDate=Math.floor((SDYear+SDDays) * 10 + .5) / 10
document.write(StarDate) // -->
</SCRIPT></div>
   </div>
</div>

<div id="wrapper">