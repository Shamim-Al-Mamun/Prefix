<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ISP - Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    {{-- <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" /> --}}

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: [' {{ asset('assets/css/fonts.min.css') }}']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/atlantis.css') }}">
    <!-- Color Picker -->
    <link rel="stylesheet" href="{{ asset('assets/css/coloris.min.css') }}">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">

    <style type="text/css">
        input {
            width: 150px;
            height: 32px;
            padding: 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: inherit;
            font-size: inherit;
            font-weight: inherit;
            box-sizing: border-box;
        }

        .examples {
            display: flex;
            flex-wrap: wrap;
        }

        .example {
            flex-shrink: 0;
            width: 300px;
            margin-bottom: 30px;
        }

        .square .clr-field button,
        .circle .clr-field button {
            width: 22px;
            height: 22px;
            left: 5px;
            right: auto;
            border-radius: 5px;
        }

        .square .clr-field input,
        .circle .clr-field input {
            padding-left: 36px;
        }

        .circle .clr-field button {
            border-radius: 50%;
        }

        .full .clr-field button {
            width: 100%;
            height: 100%;
            border-radius: 5px;
        }
    </style>


</head>

<body>



    @include('layouts.admin.header')
    @include('alert.messages')
    @yield('content')

    @include('layouts.admin.footer')
