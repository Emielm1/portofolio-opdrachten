<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Wilt u graag een bericht achterlaten op de website? Dat kan op deze pagina. Vul uw gegevens in en wij zullen u zo spoedig mogelijk terug mailen.">
    <title>Succesfilms</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
  
  
</head>

<body>
<div class="mx-auto" style="width: 1150px; background-color: #272727;">
<?php include("assets/header.php"); ?>

    <div class="row " style="width: 1150px; ">
        <div class="col-md-8 custom-background">
            
            <div  >
                <div class="card-body">
                    <h1 style="color: #FFFFFF">Contact</h1>
                    <form id="contact-form" method="POST" action="assets/contact-submit" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Voornaam *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Vul hier uw voornaam in *" required="required" data-error="Voornaam is verplicht.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Achternaam *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Vul hier uw achternaam in *" required="required" data-error="Achternaam is verplicht.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">E-mail *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Vul hier uw E-mail in *" required="required" data-error="een.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Bericht *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Uw bericht... *" rows="4" required="required" data-error="Vul hier uw bericht in."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button
                                            type="submit"
                                            class="g-recaptcha btn btn-success btn-send"
                                            data-sitekey="6LcDDVkUAAAAABh44j3UC2Bxu-mmb6Pzn6g9CNqZ"
                                            data-bind="recaptcha-submit"
                                            data-callback="YourOnSubmitFn">
                                        Submit
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> Deze velden zijn verplicht.</p>
                                </div>
                            </div>
               
            </div>
  </div>
		
    
   
		
    </div>
</div>
        </div>
       
<footer>
		<?php include("assets/footer.php"); ?>

</footer>
        </div>
	  
 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" type="application/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function YourOnSubmitFn(token) {
        document.getElementById("contact-form").submit();
    }
	
</script>
</body>
</html>
