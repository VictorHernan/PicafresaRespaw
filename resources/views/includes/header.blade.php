<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .header-b {
            background-color: papayawhip	
        }
        .nav-b {
            position: relative;
            height: 450px;
            right: 0px;
            left: 400px;
            width: 1210px;
            background-color: powderblue
        }
        .barra-b {
            position: absolute;
            height: 450px;
            right: 50px;
            left: 50px;
            width: 300px;
            background-color: lightpink	
        }
        .footer-b {
            top: 30px;
            position: relative;
            height: 30px;
            right: 50px;
            left: 42px;
            width: 1560px;
            background-color: plum
        }
    </style>

</head>
<body class="header-b">
    <div>
        @section('header')

        @show
    </div>