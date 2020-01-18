<!DOCTYPE html>
<html>
    <head>
        <title>Stasiun MKG - 3Gen-ITDev</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv=”refresh” content=”30″>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <style>
            .pin-wrap {
                position: absolute;
                width: 100px;
                height: 100px;
                margin-top: -120.7106781187px;
                margin-left: -50px;
                -webkit-transform-origin: 50% 120.7106781187% 0;
                transform-origin: 50% 120.7106781187% 0;
            }

            .pin {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 100px;
                height: 100px;
                margin-top: -50px;
                margin-left: -50px;
                -webkit-transform-origin: 50% 120.7106781187% 0;
                transform-origin: 50% 120.7106781187% 0;
            }

            .pin::after {
                position: absolute;
                display: block;
                box-sizing: border-box;
                width: 100px;
                height: 100px;
                content: '';
                -webkit-transform: rotateZ(-45deg);
                transform: rotateZ(-45deg);
                border: 20px solid #f93c11;
                border-radius: 50% 50% 50% 50%;
            }

            .pin::before {
                position: absolute;
                display: block;
                box-sizing: border-box;
                width: 100px;
                height: 100px;
                content: '';
                -webkit-transform: rotateZ(-45deg);
                transform: rotateZ(-45deg);
                border: 18px solid #d22b05;
                border-radius: 50% 50% 50% 0;
            }

            .shadow {
                position: absolute;
            }

            .shadow::after {
                position: absolute;
                left: -125px;
                display: block;
                width: 50px;
                height: 50px;
                margin-top: -25px;
                content: '';
                -webkit-transform: rotateX(55deg);
                transform: rotateX(55deg);
                border-radius: 50%;
                box-shadow: rgba(0, 0, 0, 0.5) 100px 0 20px;
            }

            .pulse {
                position: absolute;
                margin-top: -50px;
                margin-left: -50px;
                -webkit-transform: rotateX(55deg);
                transform: rotateX(55deg);
            }

            .pulse::after {
                display: block;
                width: 100px;
                height: 100px;
                content: '';
                -webkit-animation: pulsate 1s ease-out;
                animation: pulsate 1s ease-out;
                -webkit-animation-delay: 1.1s;
                animation-delay: 1.1s;
                -webkit-animation-iteration-count: infinite;
                animation-iteration-count: infinite;
                opacity: 0;
                border-radius: 50%;
                box-shadow: 0 0 1px 2px rgba(0, 0, 0, 0.5);
                box-shadow: 0 0 6px 3px #f93c11;
            }

            @-webkit-keyframes pulsate {
                0% {
                    -webkit-transform: scale(0.1, 0.1);
                    transform: scale(0.1, 0.1);
                    opacity: 0;
                }
                50% {
                    opacity: 1;
                }
                100% {
                    -webkit-transform: scale(1.2, 1.2);
                    transform: scale(1.2, 1.2);
                    opacity: 0;
                }
            }

            @keyframes pulsate {
                0% {
                    -webkit-transform: scale(0.1, 0.1);
                    transform: scale(0.1, 0.1);
                    opacity: 0;
                }
                50% {
                    opacity: 1;
                }
                100% {
                    -webkit-transform: scale(1.2, 1.2);
                    transform: scale(1.2, 1.2);
                    opacity: 0;
                }
            }
            .header {
                font-family: Roboto, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                font-size: 16px;
                line-height: 2em;
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                padding: 10px 0;
                text-align: center;
                color: #f93c11;
                background: rgba(255, 255, 255, 0.75);
            }

            h1 {
                font-family: Raleway, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
                font-weight: 900;
                font-size: 32px;
                margin-bottom: 10px;
                border-bottom: 2px dashed #f93c11;
                display: inline-block;
            }

            .tags {
                font-weight: 300;
            }

            .list-label {
                font-family: Raleway, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
                font-weight: 400;
            }

            .header li {
                display: inline-block;
            }

            .tags a {
                color: #f93c11;
            }

            .animations a {
                line-height: 42px;
                display: block;
                box-sizing: border-box;
                height: 44px;
                margin: 0 5px;
                padding: 0 10px;
                text-decoration: none;
                color: #f93c11;
                border: 2px solid #f93c11;
                border-radius: 22px;
                transition: background-color 0.3s, color 0.3s;
            }

            .animations a:hover {
                color: white;
                background: #f93c11;
            }

        </style>
    </head>
    <body>

