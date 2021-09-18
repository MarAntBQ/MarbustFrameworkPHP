<h2>Contact Form</h2>
<?php
Mailer::SendM();
?>


<?php
         
        			if (isset($_SESSION["MSGFM"])) {
            		echo $_SESSION["MSGFM"];
					}
        			unset($_SESSION["MSGFM"]);
        			?>
<form method="post">
    <input type="text" name="name" required placeholder="Ingrese su nombre" value="<?php if(isset($_SESSION["NAME"])){echo $_SESSION["NAME"];} ?>">
    <input type="email" name="mail" required placeholder="Ingrese su email" value="<?php if(isset($_SESSION["EMAIL"])){echo $_SESSION["EMAIL"];} ?>">
    <input type="tel" name="phone" required maxlength="10" pattern="[0-9]{10}" placeholder="Ingrese su teléfono" value="<?php if(isset($_SESSION["PHONE"])){echo $_SESSION["PHONE"];} ?>">
    <textarea name="message" required placeholder="Ingrese su mensaje"><?php if(isset($_SESSION["MESSAGE"])){echo $_SESSION["MESSAGE"];} ?></textarea>
    <button type="submit" class="">Enviar Mensaje <i class="fas fa-paper-plane"></i></button>
    <input type="hidden" name="contactForm">
</form>
<?php
    			unset($_SESSION["NAME"]);
    			unset($_SESSION["EMAIL"]);
    			unset($_SESSION["PHONE"]);
    			unset($_SESSION["MESSAGE"]);
    			?>
