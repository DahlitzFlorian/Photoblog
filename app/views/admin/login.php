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
            <h1>Login</h1>
            <form action="">
                <input name="username" placeholder="Nutzername" />
            </form>
        </div>
    </div>
</body>
</html>
        
