<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel SignUp</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                background-color: #ffffff;
            }
            .content{
                background-color: #d5d7ff;
                width: 60%;
                height: 600px;
                position: absolute;
                top:0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
                border-radius: 3%;
                display: flex;
            }
            .content .form{
                background-color: #EBEFFB;
                width: 50%;
                height: 600px;
                border-radius: 3% 0 0 3%;
            }
            .content .img{
                width: 50%;
                height: 600px;
            }
            .content .img img{
                width: 80%;
                position: relative;
                top:20%;
                left: 10%;
                bottom: 0;
                right: 0;
                margin: auto;
            }
            .img .text{
                width: 50%;
                height: auto;
                /* background-color: #6073CA; */
                position: relative;
                left: 47%;
                top: 5%;
                display: flex;
            justify-content: space-around;
             color: #4e4e4e;
                /* right: 5%; */
            }
            .img .pera{
                width: 50%;
                height: auto;
                /* background-color: #6073CA; */
                position: relative;
                left: 43%;
                top: 8%;
                display: flex;
                justify-content: space-around;
                text-align: right;
                 color: #4e4e4e;
                /* right: 5%; */
            }
            .content .form .heading{
                /* background-color: #002fff; */
                width: 50%;
                height: auto;
                margin: auto;
                margin-top: 8%;
                display: flex;
                justify-content: space-evenly;
            }
            .content .form .heading i{
                font-size: 3rem;
                color: #4e4e4e;
            }
            .content .form .heading h2{
                font-size: 2rem;
                padding-top: 1.5%;
                color: #4e4e4e;
            }
            .content .form .title{
                /* background-color: #0040ff; */
                width: auto;
                margin: auto;
                margin-top: 5%;
            }
            .content .form .title h1{
                font-size: 2.8rem;
                color: #1a1a1a;
                font-family: 'Roboto', sans-serif;
                padding: 0 18%;
                
            }
            .content .form .main{
                /* background-color: #ff0000; */
                height: 100px;                
                width: 60%;
                margin: auto;
                margin-top: 8%;
            }
            .content .form .main label{
                font-size: 1.15rem;
                color: #1a1a1a;
                font-family: 'Roboto', sans-serif;
                /* font-weight: 700; */
                font-family: 'Roboto', sans-serif;
                
            }
            .content .form .main input{
                font-size: 1rem;
                color: #000000;
                font-weight: 500;
                padding: 3%;
                margin-top: 2%;
                width: 100%;
                height: auto;
                box-sizing: border-box;
                border: 1px solid rgb(173, 173, 173);
                border-radius: 2%;
                margin-bottom: 8%;
                font-family: 'Roboto', sans-serif;
            }
            .content .form .btn{
                /* background-color: #ff0000; */
                height: 100px;                
                width: 60%;
                margin: auto;
                margin-top: 8%;
            }
            .content .form .btn input{
                font-size: 1rem;
                color: #ffffff;
                font-weight: 400;
                padding: 3%;
                width: 100%;
                height: auto;
                background-color: #6073CA;
                border-radius: 2%;
                /* box-sizing: border-box; */
                border: 1px solid rgb(121, 121, 121);
                border-radius: 2%;
                margin-top: 0;
                font-family: 'Roboto', sans-serif;
            }
            .content .form .forget{
                /* background-color: #ff0000; */
                height: 100px;                
                width: auto;
                margin: 17% 0 -20% 55%;                
            }
            .content .form .forget a{
                text-decoration: none;
                color: #EA4C89;
            }
            .content .form .reg{
                /* background-color: #ff0000; */
                height: 100px;                
                width: auto;
                margin: 0 29%;
                display: flex;
                /* color: #EA4C89; */
            }
            .content .form .reg a{
                margin-left: 3%;
                color: #EA4C89;
                text-decoration: none;
            }
        </style>
    </head>
    <body class="antialiased">
        
        <div class="content">
            <div class="form">
                <div class="heading">
                    <i class="fas fa-atom"></i>
                    <h2>Testing</h2>
                </div>
                <div class="title">
                    <h1>Welcome Back</h1>
                </div>
                <div class="main">
                   <label for="">Email</label><br>
                   <input type="text" name="email" id="email" placeholder="Enter Your Email">
                   <label for="">Password</label><br>
                   <input type="password" name="pass" id="pass" placeholder="Enter Your Password">
                </div>
                <div class="forget">
                    <p><a href="">Forget Password ?</a></p>
                </div>
                <div class="btn">
                    <input type="submit" value="Registration">
                </div>
                <div class="reg">
                    <p>Don't Have Account?</p><a href="">Sign Up</a>
                </div>
            </div>
            <div class="img">
                <div class="text">
                    <i class="fas fa-mobile"></i>
                    <h4>Lorem ipsum dolor sit.</h4>
                </div>
                <div class="pera">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, error.</p>
                </div>
                <img src="{{ asset('projectImages/undraw_authentication_fsn5.svg') }}" alt="Not Found">
            </div>
        </div>

    </body>
</html>
