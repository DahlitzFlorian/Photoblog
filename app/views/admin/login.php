<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="<?php echo $this->config->item('charset'); ?>">
    <title><?php echo $title; ?></title>
    
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"> 
    
    <!-- Other Stylesheets -->
    <link rel="stylesheet" href="<?php echo css_file_url('admin/reset'); ?>" type="text/css"></link>
    
    <!-- Own Stylesheets -->
    <link rel="stylesheet" href="<?php echo css_file_url('admin/main'); ?>" type="text/css"></link>
</head>
<body>
    <div id="wrapper">
        <div class="left">
            <h1>Administration</h1>
            <h2>Venture Dahlitz | Fotoblog</h2>
        </div>
        <div class="right">
            <div class="login-wrap">
                <div class="login-html">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" id="tab" class="tab">Sign Up</label>
                    <div class="login-form">
                        <div class="sign-in-htm">
                            <div class="group">
                                <label for="user" class="label">Nutzername</label>
                                <input id="user" name="username" type="text" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Passwort</label>
                                <input id="pass" name="password" type="password" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Anmelden">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
        
