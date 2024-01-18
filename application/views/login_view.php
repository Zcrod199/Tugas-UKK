<html>
    <head>
        <title>Project Persiapan UKK</title>
        <link rel="stylesheet" 
        href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>    
        <style>
            body{
                background:rgb(72,154,209);
            }
            #card{
                background: white; 
                border-radius: 8px;   
                box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
                height: 430px;
                margin: 6rem auto 8.1rem auto;
                width: 329px; 
            }
            #card-title{
                letter-spacing:4px;
                padding-bottom:23px;
                padding-top:13px;
                text-align:center;
		    } 
            #card-content{
                padding:12px 44px;
            } 
        </style>
    
    </head>
    <body>
            <div id="card">
                <div id="card-title">
                    <img src="<?php echo base_url ('images/avatar.jpg'); ?>" class="center" 
                         width="20%" 
                         style="border-radius:50%;margin-top:10px"> 
                    <h4 style="color:black">LOGIN USER</h4>    
                    <?php echo $this->session->flashdata('msg'); ?> 
                </div>
                <div id="card-content">
                    <form action="<?php echo site_url('login/auth'); ?>" method="post">
                        <div class="form-group">
                            <label>Username :</label>
                            <input type="text" name="password" 
                                placeholder="email" 
                                class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Password :</label>
                            <input type="password" name="password" 
                                placeholder="Password"  
                                class="form-control" required>
                        </div>
                    <p>
                        <small>Belum punya akun ? Daftar <a href="">disini</a></small>
                    </p>
                    <button type="submit" name="kirim"
                        class="btn  btn-sm btn-block" style="background-color:blue;color:white">Sign In</button>
                    </form>
                </div>    
            </div>
    </body>
</html>