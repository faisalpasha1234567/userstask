<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        
        <meta name="description" content="Export">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
<!-- Call App Mode on ios devices -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Remove Tap Highlight on Windows Phone IE -->
<meta name="msapplication-tap-highlight" content="no">
<!-- base css -->
<link rel="stylesheet" media="screen, print" href="{{ asset('assets3/css/vendors.bundle.css')}}">
<link rel="stylesheet" media="screen, print" href="{{ asset('assets3/css/app.bundle.css')}}">
<!-- Place favicon.ico in the root directory -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets3/assets/img/favicon/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets3/img/favicon/favicon-32x32.png')}}">
<link rel="mask-icon" href="{{ asset('assets3/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
<link rel="stylesheet" media="screen, print" href="{{ asset('assets3/css/datagrid/datatables/datatables.bundle.css')}}">
<link rel="stylesheet" media="screen, print" href="{{ asset('assets3/css/fa-solid.css')}}">
<link href="{{ asset('assets3/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link href="{{ asset('assets3/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
 </head>
<body class="mod-bg-1 ">
<!-- DOC: script to save and load page settings -->

		
	
    
   
           <div class="page-inner">
            
            @include('layouts.header')

            <!-- Page Heading -->
            

            <!-- Page Content -->
            <main id="js-page-content" role="main" class="page-content">
                @yield('content')
            </main>
        </div>
         </div>
    </body>
    <script>
'use strict';

var classHolder = document.getElementsByTagName("BODY")[0],
themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
{},
themeURL = themeSettings.themeURL || '',
themeOptions = themeSettings.themeOptions || '';
/** 
* Load theme options
**/
if (themeSettings.themeOptions)
{
classHolder.className = themeSettings.themeOptions;
console.log("%c✔ Theme settings loaded", "color: #148f32");
}
else
{
console.log("Heads up! Theme settings is empty or does not exist, loading default settings...");
}
if (themeSettings.themeURL && !document.getElementById('mytheme'))
{
var cssfile = document.createElement('link');
cssfile.id = 'mytheme';
cssfile.rel = 'stylesheet';
cssfile.href = themeURL;
document.getElementsByTagName('head')[0].appendChild(cssfile);
}
/** 
* Save to localstorage 
**/
var saveSettings = function()
{
themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
{
return /^(nav|header|mod|display)-/i.test(item);
}).join(' ');
if (document.getElementById('mytheme'))
{
themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
};
localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
}
/** 
* Reset settings
**/
var resetSettings = function()
{
localStorage.setItem("themeSettings", "");
}
</script>       
        
 <script src="{{ asset('assets3/js/vendors.bundle.js')}}"></script>
<script src="{{ asset('assets3/js/app.bundle.js')}}"></script>
<script src="{{ asset('assets3/js/notifications/sweetalert2/sweetalert2.bundle.js')}}"></script>
<script src="{{ asset('assets3/js/notifications/toastr/toastr.js')}}"></script>
<script src="{{ asset('assets3/js/datagrid/datatables/datatables.bundle.js')}}"></script>
<script src="{{ asset('assets3/js/datagrid/datatables/datatables.export.js')}}"></script>
<script src="{{ asset('assets3/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('assets3/bootstrap-daterangepicker/daterangepicker.js')}}"></script>  
<script src="{{ asset('assets3/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>       
        
</html>
