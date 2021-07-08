
<?php
/**
 * @title            QR Code Example
 *
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2012-2017, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License <http://www.gnu.org/licenses/gpl.html>
 */

require 'QRCode/QRCode.class.php'; // Include the QRCode class

try {
    /**
     * If you have PHP 5.4 or higher, you can instantiate the object like this:
     * (new QRCode)->fullName('...')->... // Create vCard Object
     */
	if($_POST){
		$oQRC = new QRCode; // Create vCard Object
    
		$name=$_POST['name'];
		$email=$_POST['email'];
		$social=$_POST['social'];
		$telefone=$_POST['telefone'];

		if(!empty($name)){
           $oQRC->fullName( $name);// Add Full Name
		}
		if(!empty($email)){
			$oQRC->email($email);// Add Email Address
		}
		if(!empty($telefone)){
			$oQRC->homePhone($telefone);// Add Instant Messenger
		}
		if(!empty($social)){
			$oQRC->nickName($social);// @insta
		}

		$oQRC->finish();
 
	}
} catch (Exception $oExcept) {
    echo '<p><b>Exception launched!</b><br /><br />' .
        'Message: ' . $oExcept->getMessage() . '<br />' .
        'File: ' . $oExcept->getFile() . '<br />' .
        'Line: ' . $oExcept->getLine() . '<br />' .
        'Trace: <p/><pre>' . $oExcept->getTraceAsString() . '</pre>';
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Gerador de Qrcode gratuito</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Gerador de Qrcode Gratuito</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Digite as informações</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Seu Qrcode foi gerado com sucesso.
				      		</div>
									<form method="POST"  name="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Nome">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="number" class="form-control" name="telefone" id="subject" placeholder="Telefone">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="social" id="social" placeholder="@">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Gerar Qrcode" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										
						
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
									<h3 class="mb-4 mt-md-4">Qrcode</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		
				        		<div class="text pl-3">
					            
					          </div>
							  <?php if($oQRC){?>
<div class="col-md-9">
								<?php echo $oQRC->display(); ?>
								</div>
							  <?php }?> 
				          </div>
				        	
				        	

			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
  
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      
      <!-- Grid row -->
    </div>
  </section>
 

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="">Elone Izata Sampaio</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

