<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('image/nav-logo.png') }}" type="image/gif" sizes="16x16">
    <title>subadmin</title>
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/gif" size="16x16">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.lineProgressbar.css')}}">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.css">
    {{--<link rel="stylesheet" href="{{ asset('assets/css/tenant-stylesheet/tenant-custom.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ asset('assets/css/tenant-stylesheet/tenant-style.css') }}">--}}
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.lineProgressbar.js')}}"></script>
</head>
<script type="text/javascript">
    let base_url = '{{ URL::to("/") }}';
</script>
<body class="nav-sm">
    <div class="container body">
        @include('subadmin.include.nav')
        <div class="main_container d-none">
            <div class="row nomargin">