<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Oddyz</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Seymour+One&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
           html, body {
        background-color: black;
        width: 100%;
        height: 100%;
        font-family: "Seymour One", sans-serif;
        font-weight: 400;
        font-style: normal;
        }
        
        .sound-container {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -100px;
        margin-left: -100px;
        }
        h1{
        color:orange;
        font-size:5rem;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -50px;
        margin-left: -200px;
        }
        .sound {
        position: relative;
        width: 320px;
        height: 320px;
        padding: 0;
        border-radius: 500px;
        list-style: none;
        overflow: hidden;
        z-index: 2;
        left: -150px;
        top: 0px;
        li {
        background:orange;
        position: absolute;
        margin: auto;
        top: 0px;
        left: 0px;
        bottom: 0px;
        right: 0px;
        width: 0%;
        height: 0%;
        border-radius: 50%;
        &:nth-child(1) {
        opacity: 0.2;
        animation: zoom1 6s cubic-bezier(0.250, 0.100, 0.250, 1.000) infinite;
        }
        &:nth-child(2) {
        opacity: 0.3;
        animation: zoom2 6s cubic-bezier(0.250, 0.100, 0.250, 1.000) infinite;
        animation-delay: 0.3s;
        }
        &:nth-child(3) {
        opacity: 0.5;
        animation: zoom3 6s cubic-bezier(0.250, 0.100, 0.250, 1.000) infinite;
        animation-delay: 0.6s;
        }
        &:nth-child(4) {
        opacity: 0.6;
        animation: zoom4 6s cubic-bezier(0.250, 0.100, 0.250, 1.000) infinite;
        animation-delay: 0.9s;
        }
        }
        }
        
        @keyframes zoom1 {
        0% {
        width: 0%;
        height: 0%;
        }
        35% {
        width: 100%;
        height: 100%;
        }
        50% {
        opacity: 0;
        width: 100%;
        height: 100%;
        }
        100% {
        opacity: 0;
        width: 100%;
        height: 100%;
        }
        }
        
        @keyframes zoom2 {
        0% {
        width: 0%;
        height: 0%;
        }
        35% {
        width: 75%;
        height: 75%;
        }
        50% {
        opacity: 0;
        width: 75%;
        height: 75%;
        }
        100% {
        opacity: 0;
        width: 75%;
        height: 75%;
        }
        }
        
        @keyframes zoom3 {
        0% {
        width: 0%;
        height: 0%;
        }
        35% {
        width: 50%;
        height: 50%;
        }
        50% {
        opacity: 0;
        width: 50%;
        height: 50%;
        }
        100% {
        opacity: 0;
        width: 50%;
        height: 50%;
        }
        }
        
        @keyframes zoom4 {
        0% {
        width: 0%;
        height: 0%;
        }
        35% {
        width: 25%;
        height: 25%;
        }
        50% {
        opacity: 0;
        width: 25%;
        height: 25%;
        }
        100% {
        opacity: 0;
        width: 25%;
        height: 25%;
        }
        }
        </style>
    </head>
    <body >
       <div class="sound-container">
            <ul class="sound">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <h1>Oddyz</h1>
        </div>
    </body>
</html>
