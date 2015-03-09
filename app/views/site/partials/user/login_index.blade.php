<!DOCTYPE html>
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <!--<link rel="shortcut icon" href="../favicon.ico"> -->
        <link rel="shortcut icon" href="{{{ asset('assets/ico/logo_la.png') }}}">
        <!--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login_css/demo.css') }}" /> -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login_css/style3.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login_css/animate-custom.css') }}" />
    </head>
    <body>
        <div class="container">
            <!--
            <div class="codrops-top">
                <a href="">
                    <strong>&laquo; Previous Demo: </strong>Responsive Content Navigator
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div> Codrops top bar -->
            <section>
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
<!--   Login Form -->
                        <div id="login" class="animate form">
                            <form  action="{{ URL::to('user/login') }}" autocomplete="on" method="POST" accept-charset="UTF-8">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <h1>Log in</h1>
                                <p>
                                    <label for="username" class="uname" data-icon="u" >{{ Lang::get('confide::confide.username') }}</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="{{ Lang::get('confide::confide.username_e_mail') }}"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p">{{ Lang::get('confide::confide.password') }}</label>
                                    <input id="password" name="password" required="required" type="password" placeholder="{{ Lang::get('confide::confide.password') }}" />
                                </p>
                                <p class="keeplogin">
									<input type="checkbox" name="loginkeeping" id="remember" value="1" />
									<label for="loginkeeping">{{ Lang::get('confide::confide.login.remember') }}</label>
                                    <input type="hidden" name="remember" value="0">
								</p>
                                <p class="login button">
                                    <input type="submit" value="Login" />
								</p>
                                <p class="change_link">
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>
<!--   Registration Form -->
                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on">
                                <h1> Sign up </h1>
                                <p>
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p>
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/>
                                </p>
                                <p>
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="{{ Lang::get('confide::confide.password') }}"/>
                                </p>
                                <p>
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button">
									<input type="submit" value="Sign up"/>
								</p>
                                <p class="change_link">
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
