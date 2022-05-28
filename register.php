

<?php
session_start();

require('config/database.php');
require('includes/functions.php');
require('includes/constaints.php');

//Si le formulaire a été soumis
if (isset($_POST['register'])) {
	if (not_empty([$_POST['name'], $_POST['pseudo'], $_POST['email'], $_POST['password']])) {

		$email_activation;

		$errors = []; //Tableau contenant l'ensemble des erreurs;

		extract($_POST);

		if (mb_strlen($pseudo) < 3) {
			$errors[] = "Pseudo trop court (Minimun 3 caractères)!";
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors[] = "Votre email n'est pas valide!";
		}
		if (mb_strlen($password) < 6) {
			$errors[] = "Mot de passe trop court(Minimun 6 caractères)!";
		}#else {
			#if ($password != $password_confirm) {
				#$errors[] = "Les deux mots de passe ne concordent pas!";
			#}
		#}


		if (is_already_in_use('pseudo', $pseudo, 'users')) {
			$errors[] = "Pseudo deja utilisé!";
		}
		if (is_already_in_use('email', $email, 'users')) {
			$errors[] = "Email deja utilisé!";
		}

		if (count($errors) == 0) {
			//Envoi d'un mail d'activation
			/*$to = $email;
			$subject = WEBSITE_NAME . '- ACTIVATION DE COMPTE';
			$token = sha1($pseudo . $email . $password);

			ob_start();
			require('templates/emails/activation.tmpl.php');
			$content = ob_get_clean();

			$headers = 'MIME-Version:1.0' . "\r\n";
			$headers .= 'content-type:text/html; charset=iso8859-1' . "\r\n";

			mail($to, $subject, $content, $headers);

			//Informer à l'utilisateur de verifier sa boite de reception

			//$email_activation =" mail activation envoyé !";*/

			set_flash("mail d'activation","success");
			redirect('index.php');
		}
	} else {
		$errors[] = "Veillez remplir tous les champs!!";
	}
}
?>












<?php require('views/register.view.php'); ?>