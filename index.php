<!doctype php>
<?php
echo <html>
echo <head>
echo    <meta charset="utf-8">
echo   <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
echo   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
echo   <title>HEALTH MONITOR SYSTEM</title>

 echo <style>
      .highlight table td { padding: 5px; }
.highlight table pre { margin: 0; }
.highlight, .highlight .w {
  color: #f8f8f2;
  background-color: #272822;
}
.highlight .err {
  color: #272822;
  background-color: #f92672;
}
.highlight .c, .highlight .cd, .highlight .cm, .highlight .c1, .highlight .cs {
  color: #75715e;
}
.highlight .cp {
  color: #f4bf75;
}
.highlight .nt {
  color: #f4bf75;
}
.highlight .o, .highlight .ow {
  color: #f8f8f2;
}
.highlight .p, .highlight .pi {
  color: #f8f8f2;
}
.highlight .gi {
  color: #a6e22e;
}
.highlight .gd {
  color: #f92672;
}
.highlight .gh {
  color: #66d9ef;
  background-color: #272822;
  font-weight: bold;
}
.highlight .k, .highlight .kn, .highlight .kp, .highlight .kr, .highlight .kv {
  color: #ae81ff;
}
.highlight .kc {
  color: #fd971f;
}
.highlight .kt {
  color: #fd971f;
}
.highlight .kd {
  color: #fd971f;
}
.highlight .s, .highlight .sb, .highlight .sc, .highlight .sd, .highlight .s2, .highlight .sh, .highlight .sx, .highlight .s1 {
  color: #a6e22e;
}
.highlight .sr {
  color: #a1efe4;
}
.highlight .si {
  color: #cc6633;
}
.highlight .se {
  color: #cc6633;
}
.highlight .nn {
  color: #f4bf75;
}
.highlight .nc {
  color: #f4bf75;
}
.highlight .no {
  color: #f4bf75;
}
.highlight .na {
  color: #66d9ef;
}
.highlight .m, .highlight .mf, .highlight .mh, .highlight .mi, .highlight .il, .highlight .mo, .highlight .mb, .highlight .mx {
  color: #a6e22e;
}
.highlight .ss {
  color: #a6e22e;
}
    </style>
echo <link href="stylesheets/screen.css" rel="stylesheet" media="screen" />
echo <link href="stylesheets/print.css" rel="stylesheet" media="print" />
echo <script src="javascripts/all.js"></script>
echo </head>

echo <body><div style="align-content: center; align-items: center;margin: 5% 20% 5% 20%; ">
echo <h1 style="margin:0 0 0 10%;">Welcome to Health Monitor App</h1>
echo \n
echo \n
echo \n
echo <main id="main-holder">
echo <h1 id="login-header" style="margin:0 0 0 10%;">Enter Login Information</h1>
    
      
echo <form id="login-form" style="margin:0 5% 0 5%;">
echo <input type="radio" id="data capturer" name="data capture" value="Data Capture">
echo <label for="data capture">Data Capture</label>
echo <input type="radio" id="Physician" name="physician" value="Physician">
echo <label for="Physician">Physician</label>
echo <input type="radio" id="operational manager" name="operational manager" value="Operational Manager">
echo <label for="Operational Manager">Operational Manager</label>\n\n
echo <label>Enter username:</label><input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username">\n \n
echo   <label>Enter Password:</label><input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">\n
echo  \n
echo  <input type="submit" value="Login" id="login-form-submit"><br/><br/>
echo  </form>      
echo   </div>
echo  </main>
echo	  </div>
echo </body>
echo </html>
?>
