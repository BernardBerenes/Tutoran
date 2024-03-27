<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoran</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <section class="main">
        <div class="form_wrapper">
            <input type="radio" class="radio" name="radio" id="login" checked />
            <input type="radio" class="radio" name="radio" id="signup" />
            <div class="tile">
                <h3 class="login">Login Form</h3>
                <h3 class="signup">Signup Form</h3>
            </div>

            <label class="tab login_tab" for="login">
                Login
            </label>

            <label class="tab signup_tab" for="signup">
                Signup
            </label>
            <span class="shape"></span>
            <div class="form_wrap">
                <div class="form_fild login_form">
                    <div class="input_group">
                        <input type="email" class="input" placeholder="Email Address" />
                    </div>
                    <div class="input_group">
                        <input type="password" class="input" placeholder="Password" />
                    </div>

                    <a href="#forgot" class="forgot">Forgot password?</a>

                    <input type="submit" class="btn" value="Login" />

                    <div class="not_mem">
                        <label  for="signup">Not a member? <span> Signup now</span></label>
                    </div>

                </div>

                <div class="form_fild signup_form">
                    <div class="input_group">
                        <input type="email" class="input" placeholder="Email Address" />
                    </div>
                    <div class="input_group">
                        <input type="password" class="input" placeholder="Password" />
                    </div>

                    <div class="input_group">
                        <input type="password" class="input" placeholder="Confirm Password" />
                    </div>

                    <input type="submit" class="btn" value="Signup" />

                </div>
            </div>

        </div>
    </section>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>


