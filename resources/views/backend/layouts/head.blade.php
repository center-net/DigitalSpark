<!-- Title -->
<title> Valex -  Premium dashboard ui bootstrap rwd admin html5 template </title>
<!-- Favicon -->
<link rel="icon" href="{{URL::asset('assets/backend/img/brand/favicon.png')}}" type="image/x-icon"/>
<!-- Icons css -->
<link href="{{URL::asset('assets/backend/css/icons.css')}}" rel="stylesheet">
<!--  Custom Scroll bar-->
<link href="{{URL::asset('assets/backend/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
<!--  Sidebar css -->
<link href="{{URL::asset('assets/backend/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
<!-- Sidemenu css -->
@if  ( LaravelLocalization::getCurrentLocale() == 'ar'|| LaravelLocalization::getCurrentLocale() =='he')
<link rel="stylesheet" href="{{URL::asset('assets/backend/css-rtl/sidemenu.css')}}">
<!--- Style css -->
<link href="{{URL::asset('assets/backend/css-rtl/style.css')}}" rel="stylesheet">
@else
<link rel="stylesheet" href="{{URL::asset('assets/backend/css/sidemenu.css')}}">
<!--- Style css -->
<link href="{{URL::asset('assets/backend/css/style.css')}}" rel="stylesheet"> 
@endif
@livewireStyles
@yield('css')
