<html>
    <head>
        <title>Mybook | Login</title>
    </head>

    <style>
        #bar{ height: 100px;
             background-color: #3c5a99;
             color: #d9dfeb;
             padding:4px;
        }
        #signup_button{
            background-color: #42b72a;
            width: 70px;
            text-align: center;
            padding: 4px;
            border-radius: 4px;
            float:right;
        }

        #login_box{
            background-color: white;
            width: 800px;
            margin:auto;
            margin-top:50px;
            padding:10px;
            padding-top: 50px;
            text-align: center;
            padding-bottom: 50px;
            font-weight: bold;
        }

        #text{
            height: 40px;
            width: 300px;
            border-radius: 4px;
            border: solid 1px #bbb;
            padding: 4px;
            font-size: 14px;
        }

        #button{
            width: 300px;
            height: 40px;
            border-radius: 4px;
            font-weight: bold;
            border: none;
            background-color:  #3c5a99;
            color: white;
        }


    </style>

    <body style="font-family: tahoma; background-color: #e9ebee; ">
        
        <div id="bar">
            <div style="font-size: 40px;">Mybook</div>
            <div id="signup_button">signup</div>
        </div>

        <div id="login_box">
            Log in to Mybook <br><br>
            <input type="text" id="text" placeholder="Email"><br> <br>
            <input type="password" id="text" placeholder="Password"><br><br>
            <input type="submit" id="button" value="Log in" >
        </div>
    </body>
</html>
