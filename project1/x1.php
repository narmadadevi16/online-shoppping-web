<html>
    <head>
        <title>Forgot Password Page</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Welcome to Online Shopping</h1>
        <br>
        <div class="main">
            <form>
                <input  type="email" name="email" id="email" placeholder="Enter email" size="45"  required><br><br>
                <input type="text" name="mobileno" id="mobileno" placeholder="Enter mobile no" size="45" required><br><br>
                <select name="question" required>
                    <option value="What was your first car?">What was your first car?</option>
                    <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                    <option value="What elementary school did you attend?">What elementary school did you attend?</option>
                    <option value="What is the name of the town where you were born?">What is the name of the town where you were born?</option>
                </select><br><br>

                <input type="text" name="answer" id="answer" placeholder="Enter answer" size="45" required><br><br>
                <input  type="password" name="password" id="password" placeholder="Enter new password" size="45" required><br><br>
                <center>
                    <input  type="submit" value="Save"><br><br>
                    <a href="index.php">Login</a>
                </center>
                
            </form>
            

        </div>
        
    </body>
</html>