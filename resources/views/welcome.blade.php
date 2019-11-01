<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Phonebook</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        /*//////////////////////////////////////////////////////////////////
        [ RESTYLE TAG ]*/

        * {
            margin: 0px; 
            padding: 0px; 
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family:'Courier New', Courier, monospace;
        }

        /*---------------------------------------------*/
        text{
            padding-top: 25px;
            margin-top: 20px;
        }
        a {
            font-family:'Courier New', Courier, monospace;
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px 0px 50px 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a:focus {
            outline: none !important;
        }

        a:hover {
            text-decoration: none;
            color: #57b846;
        }

        /*---------------------------------------------*/
        a {
            outline: none;
            border: none;
        }

        textarea {
            outline: none;
            border: none;
        }

        textarea:focus, input:focus {
            border-color: transparent !important;
        }

        a:focus::-webkit-input-placeholder { color:transparent; }
        a:focus:-moz-placeholder { color:transparent; }
        a:focus::-moz-placeholder { color:transparent; }
        a:focus:-ms-input-placeholder { color:transparent; }

        textarea:focus::-webkit-input-placeholder { color:transparent; }
        textarea:focus:-moz-placeholder { color:transparent; }
        textarea:focus::-moz-placeholder { color:transparent; }
        textarea:focus:-ms-input-placeholder { color:transparent; }

        a::-webkit-input-placeholder { color: #999999; }
        a:-moz-placeholder { color: #999999; }
        a::-moz-placeholder { color: #999999; }
        a:-ms-input-placeholder { color: #999999; }

        textarea::-webkit-input-placeholder { color: #999999; }
        textarea:-moz-placeholder { color: #999999; }
        textarea::-moz-placeholder { color: #999999; }
        textarea:-ms-input-placeholder { color: #999999; }

        /*//////////////////////////////////////////////////////////////////
        [ login ]*/

        .limiter {
            width: 100%;
            margin: 0 auto;
        }

        .container-login100 {
            width: 100%;  
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background: #9053c7;
            background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);
            background: -o-linear-gradient(-135deg, #c850c0, #4158d0);
            background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);
            background: linear-gradient(-135deg, #c850c0, #4158d0);
        }

        .wrap-login100 {
            width: 960px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 90px 130px 90px 95px;
        }


        /*------------------------------------------------------------------
        [  ]*/
        .login100-form {
            width: 290px;
        }

        .login100-form-title {
            font-family:'Courier New', Courier, monospace;
            font-size: 24px;
            color: #333333;
            line-height: 1.2;
            text-align: center;

            width: 100%;
            display: block;
            padding-bottom: 54px;
        }


        /*---------------------------------------------*/
        .wrap-input100 {
            position: relative;
            width: 100%;
            z-index: 1;
            margin-bottom: 10px;
        }

        .input100 {
            font-family:'Courier New', Courier, monospace;
            font-size: 15px;
            line-height: 1.5;
            color: #666666;

            display: block;
            width: 100%;
            background: #e6e6e6;
            height: 50px;
            border-radius: 25px;
            padding: 15px 30px 0 68px;
        }
        </style>
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="{{asset('img-01.png')}}" alt="IMG">
                    </div>
    
                    <form class="login100-form validate-form">
                        <span class="login100-form-title">
                            Phonebook
                        </span>
    
                        <div class="wrap-input100 validate-input">
                            <a class="input100" href="http://127.0.0.1:8000/Create">Create</a>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
    
                        <div class="wrap-input100 validate-input">
                            <a class="input100" href="Phonebook.html">Show</a>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        
                        <div class="container-login100-form-btn"></div>
    
                        <div class="p-t-12"></div>
    
                        <div class="p-t-136"></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
