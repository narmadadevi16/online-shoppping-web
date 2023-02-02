<html>
    <head>
        <title>SignUp Page</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            #pswd_info {
                position:absolute;
                bottom:-75px;
                bottom: -115px\9; /* IE Specific */
                right:55px;
                width:250px;
                padding:15px;
                background:#fefefe;
                font-size:.875em;
                border-radius:5px;
                box-shadow:0 1px 3px #ccc;
                border:1px solid #ddd;
            }

            #pswd_info h4 {
                margin:0 0 10px 0;
                padding:0;
                font-weight:normal;
            }

            #pswd_info::before {
                content: "\25B2";
                position:absolute;
                top:-12px;
                left:45%;
                font-size:14px;
                line-height:14px;
                color:#ddd;
                text-shadow:none;
                display:block;
            }

            .invalid {
                background:url(../images/invalid.png) no-repeat 0 50%;
                padding-left:22px;
                line-height:24px;
                color:#ec3f41;
            }
            .valid {
                background:url(../images/valid.png) no-repeat 0 50%;
                padding-left:22px;
                line-height:24px;
                color:#3a7d34;
            }
            #pswd_info {
                display:none;
            }
        </style>
        <script src="http://code.jquery.com/jquery-1.7.min.js"></script>
        <script src="script.js"></script>
          
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>   
        
    </head>
    <body>
        <h1>Welcome to Online Shopping</h1>
        <br>
        <div class="main">
            <form method="post" action="signUpAction.php" name="registration" id="registration">
                <input type="text" name="name" id="name" placeholder="Enter name" size="45" ><br><br>
                <input  type="email" name="email" id="email" placeholder="Enter email" size="45" ><br><br>
                <input type="text" name="mobileno" id="mobileno" placeholder="Enter mobile no" size="45" required><br><br>
                <select name="question" required>
                    <option value="What was your first car?">What was your first car?</option>
                    <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                    <option value="What elementary school did you attend?">What elementary school did you attend?</option>
                    <option value="What is the name of the town where you were born?">What is the name of the town where you were born?</option>
                </select><br><br>

                <input type="text" name="answer" id="answer" placeholder="Enter answer" size="45" required><br><br>
                <input  type="password" name="pswd" id="pswd" placeholder="Enter password" size="45" required><br><br>
                <div id="pswd_info">
                <h4>Password must meet the following requirements:</h4>
                <ul>
                    <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                    <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                    <li id="number" class="invalid">At least <strong>one number</strong></li>
                    <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
                </ul>
                </div>
                <center>
                    <input  type="submit" value="Sign Up"><br><br>
                    <a href="index.php">Login</a>
                </center>
                
            </form>
            

        </div>
        
    </body>
</html>