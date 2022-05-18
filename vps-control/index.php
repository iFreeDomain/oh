<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="manage your VPS here">
    <title>Manage VPS - FallenNodes</title>
    <link href="../dist/css/robust.css" rel="stylesheet">
	<script src="../dist/js/jquery.js"></script>
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
    <script type="text/javascript" src="../dist/js/manage-vps.js"></script>		
</head>
<body>

<link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16"> 
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7588871336474804"
     crossorigin="anonymous"></script>
	 
<nav class="navbar navbar-sm navbar-expand-lg  border-secondary border-bottom">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-dark"><i class="fas fa-bars text-dark"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">		
                <li class="nav-item">
                    <a class="nav-link" href="../home/index.html">Home</a>
                </li>			
                <li class="nav-item">
                    <a class="nav-link" href="">How to Create a Free VPS</a>
                </li>					
                <li class="nav-item">
                    <a class="nav-link" href="../create-vps/index.html">Create VPS</a>
                </li>		
                <li class="nav-item">
                    <a class="nav-link" href="../vps-renew/index.html">Renew VPS</a>
                </li>					
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        VPS
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../create-vps/index.php">Create VPS</a>
                        <a class="dropdown-item" href="../remove-vps/index.php">Remove VPS</a>
                        <a class="dropdown-item" href="../vps-info/index.php">VPS Info</a>
                        <a class="dropdown-item" href="../vps-status/index.php">VPS Status</a>
                        <a class="dropdown-item" href="index.html">VPS Control</a>
                        <a class="dropdown-item" href="../vps-reset-password/index.php">VPS Password</a>
                        <a class="dropdown-item" href="../vps-reinstall/index.php">VPS Reinstall</a>
                        <a class="dropdown-item"  href="../vps-renew/index.php">VPS Renew</a>
                    </div>
                </li>				

                <li class="nav-item">
                    <a class="nav-link" href="../login.html">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../register.html">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
	<div class="text-center">
	<div class="alert alert-info"><a href="" target="_BLANK" class="text-primary">Create a free IPv6 only VPS at HAX.co.id</a></div>
	<div class="alert alert-danger">Join our <a href="" class="text-primary">Telegram Group</a> | <a href="" class="text-primary"> Telegram Channel</a> for important updates</div>
	</div>
</div>

<div class="container">
	<h3>What is a NAT VPS?</h3>
	<p>NAT VPS is almost similar to other VPS but uses the NAT (Network Address Translation) method so that a single IPv4 can be shared to many VPS and then assigns a different port for each user.</p>
</div>

<div class="container">
	<div class="text-center">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7588871336474804"
			 crossorigin="anonymous"></script>
		<!-- horizontal -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-7588871336474804"
			 data-ad-slot="5873349063"
			 data-ad-format="auto"
			 data-full-width-responsive="true"></ins>
		<script>
			 (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
</div>
<div class="container text-center">
	<a href="../vps-info.html" class="text-primary">VPS Info</a> | 
	<a href="../vps-status.html" class="text-primary">VPS Status</a> | 
	<a href="../vps-reinstall.html" class="text-primary">Reinstall VPS</a> | 
	<a href="../vps-reset-password/index.html" class="text-primary">Reset VPS Password</a> | 
	<a href="../vps-renew/index.html" class="text-primary">Extend VPS</a> | 
	<a href="../vps-control.html" class="text-primary">Poweroff & Restart VPS</a> | 
	<a href="https://ssh.hax.co.id/" target="_BLANK" class="text-primary">Web Base Terminal</a> 
</div><main class="main" role="main">
    <div class="bg-white py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Manage VPS</h2>
            </div>
            <div class="row justify-content-center">			
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card mb-12">
                                <div class="card-body my-3">
<p>You can start, stop, restart and poweroff your server here</p>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- horizontal -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1105901122891748"
     data-ad-slot="4629398586"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<div class="clearfix"></div>								<div id="response"></div>
									<form action="index.html" method="POST" class="submit" id="form-submit">
									<div class="form-group">
										<div class="h-captcha mb-3" data-sitekey="f63ecf70-969e-4d2a-9577-d657d70aca6a"
											 style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
									</div>	
										<div class="btn-group" role="group" aria-label="manage vps">
											<button type="button" name="submit_button" value="start" class="btn btn-success"><i class="fas fa-play"></i> Start</button>
											<button type="button" name="submit_button" value="stop"  class="btn btn-danger"><i class="fas fa-stop"></i> Stop</button>
											<button type="button" name="submit_button" value="restart" class="btn btn-warning"><i class="fas fa-undo-alt"></i> Restart</button>
		
										</div>	
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7588871336474804"
     crossorigin="anonymous"></script>
<!-- horizontal -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7588871336474804"
     data-ad-slot="5873349063"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<div class="clearfix"></div>									</form>									
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div><!-- /.row -->
        </div>
    </div>
</main>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JSRS1993LD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JSRS1993LD');
</script>
<div class="container">
<div class="text-center">
<div>VPS is only valid for 7 days but you can renew anytime as long as you need it - <a href="../vps-renew/index.html" class="btn btn-info">RENEW</a></div>
</div>
</div>

<div class="container">
	<div class="text-center">
		<h5><a href="" class="text-primary">Join our Telegram Group</a></h5>
	</div>
</div>

<div class="py-6 bg-white ">
    <div class="container">

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="media">
                    <div class="icon mr-1 bg-dark">
                        <i class="fas fa-terminal"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="h4">SSH Access</h3>
                        <p class="text-dark text-left">
                          Full SSH access to manage and install your application 
                        </p>
                    </div>					
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="icon mr-3 bg-dark">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="h4">Unmetered Bandwidth</h3>
                        <p class="text-dark text-left">
                           All data centers provide Unlimited bandwidth  
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="icon mr-3 bg-dark">
                        <i class="fas fa-map-marker"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="h4">Shared IPv4</h3>
                        <p class="text-dark text-left">
                           VPS comes with Shared IPv4 and Dedicated IPv6
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->

    </div>
</div>

<div id="vpn-server" class="overlay"></div>
<div id="rWAYvdzpjwOa" class="overlay"></div>
<script src="../dist/js/ads.js"></script>
<script src="../dist/js/dfp.min.js"></script>
<script src="../dist/js/vpn.js"></script>
<script src="../dist/js/api.js"></script>
	
<footer role="contentinfo" class="py-6 lh-1 bg-white text-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h4 class="h6">Tutorial</h4>
                        <ul class="list-unstyled">
                            <li><a href="index.html#">coming soon</a></li>
                        </ul>
                    </div>					
                    <div class="col-md-3 col-sm-6">
                        <h4 class="h6">Website Information</h4>
                        <ul class="list-unstyled">
                            <li><a href="../terms-of-service.html">Terms of Service</a></li>
                            <li><a href="../disclaimer.html">Disclaimer</a></li>
                            <li><a href="../privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="../sitemap.xml">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4 class="h6">Social Media</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Telegram</a></li>
                            <li><a href="../contact/index.html">Contact</a></li>
                            <li><a href="../report-abuse/index.html">Report Abuse</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <h4 class="h6">Account</h4>
                        <ul class="list-unstyled">
                            <li><a href="../login/index.html">Login</a></li>
                            <li><a href="../register/index.html">Register</a></li>
                        </ul>
                    </div>					
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-sm">
                <p class="mb-0">&copy; 2022 - <a href="../index.html">NAT VPS</a></p>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="../dist/js/auth.js"></script><script src="../dist/js/bundle.js"></script>
</body>
</html>
<?php