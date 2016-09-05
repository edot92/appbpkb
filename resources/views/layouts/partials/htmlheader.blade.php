<head>
    <meta charset="UTF-8">
    <title> AdminLTE 2 with Laravel - @yield('htmlheader_title', 'Your title here') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>

    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset('/css/skins/skin-blue.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />
<style media="screen">
html,
body {
height: 100%;
padding: 0;
margin: 0;
font-family: Arial, Helvetica, sans-serif;
}

.flex-master {
display: flex;
flex-direction: column;
flex-wrap: nowrap;
height: 100%;
overflow-x: auto;
overflow-y: hidden;
}

.page-header {
/* fixed size */
flex: none;

padding: 15px;
font-size: 3em;
font-weight: bold;
background: #535353;
color: white;
}

.page-content {
/* resize in container */
flex: 1;

/* IMPORTANT for FireFox */
overflow-y: auto;
overflow-x: hidden;

/* new flex container for content */
display: flex;
flex-direction: row;
}

.sidebar-left {
flex: none;
background: #838383;
padding: 20px;
width: 250px;
min-width: 150px;
overflow: auto;
color: white;
white-space: nowrap;
}

.splitter {
flex: none;
width: 17px;
cursor: col-resize;
background: #535353;
background: url(https://raw.githubusercontent.com/RickStrahl/jquery-resizable/master/assets/vsizegrip.png) center center no-repeat #535353;
}

.content-container {
flex: 1 1 auto;
background: #eee;
padding: 20px;
width: 100%;
min-width: 400px;
overflow-y: auto;
overflow-x: hidden;
display: flex;
/* new flex for content/ads*/
flex-direction: row;
}

.main-content {
flex: 1 1 auto;
width: 100%;
padding: 10px;
min-width: 300px;
}

.page-ads {
flex: none;
border-left: 1px solid silver;
margin-left: 10px;
padding-left: 10px;
width: 180px;
overflow: hidden;

display: flex;
/* new flex for each ad*/
flex-direction: column;
}

.advert {
flex: none;
align-self: center;
padding: 5px;
margin: 15px;
width: 150px;
height: 150px;
background: lightblue;
color: green;
overflow: hidden;
/* center ad text */
display: flex;
justify-content: center;
align-items: center;
}

footer {
flex: none;
background: #535353;
color: white;
padding: 10px;
}
@media(max-width: 900px) {
.page-ads { display: none; }
}
</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
