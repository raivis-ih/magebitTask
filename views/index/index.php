<div class="grid-container">

    <div id="background" class="item1"></div>
    <div id="loginInfo" class="item2">
        <h1>Don't have an account?</h1>
        <hr class="solid">
        <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.</p>
        <button onclick="mySignup()" type="button" style="margin-bottom: 20px">SIGN UP</button>
    </div>
    <div id="login" class="item3">
        <div id="triangle-toplgn"></div>
        <div class="header">
            <form action="index/login" method="post" style="align-content: center">
                <?php if (Session::get('loggedIn') == true): ?>
                    <div style="text-align: center">
                        <div>
                            <img src="/MageBitPHP/public/images/logo.png" alt="Logo">
                        </div>
                        <input type="button" onclick="window.location.href = '<?php echo URL; ?>dashboard/logout';"
                               value="LOGOUT"/>
                        <input type="button" onclick="window.location.href = '<?php echo URL; ?>dashboard';"
                               value="DASHBOARD"/>
                    </div>
                <?php else: ?>
                    <p>Login<img src="/MageBitPHP/public/images/logo.png" alt="Logo" style="float: right;"></p>
                    <hr class="solid">
                    <input type="text" id="email" name="email" placeholder="Email"><br>
                    <input type="password" id="password" name="password" placeholder="Password"><br><br>
                    <p style="font-size: 16px; float: right"><input type="submit" value="LOGIN"
                                                                    style="margin-right: 90px">Forgot?</p>
                <?php endif; ?>
            </form>
        </div>
        <div id="triangle-btmlgn"></div>
    </div>

    <div id="sign-up" class="item3">
        <div id="rectangle"></div>
        <div id="triangle-toplgn"></div>
        <div class="header">
            <p>Sign Up<img src="/MageBitPHP/public/images/logo.png" alt="Logo"
                           style="float: right; padding-right: 90px"></p>
            <hr class="solid">
            <form action="index/signup" method="post">
                <input type="text" id="regusername" name="regusername" placeholder="Username"><br>
                <input type="text" id="regemail" name="regemail" placeholder="Email"><br>
                <input type="password" id="regpassword" name="regpassword" placeholder="Password"><br><br>
                <input type="submit" value="SIGN UP">
            </form>
        </div>
        <div id="triangle-btmlgn"></div>
    </div>

    <div id="signupInfo" class="item4">
        <h1>Have an account?</h1>
        <hr class="solid">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <button onclick="myLogin()" type="button">LOGIN</button>
    </div>
