<?php
if(isset($_POST['mailform']))
{
    if(!empty($_POST['Name']) AND !empty($_POST['Email']) AND !empty($_POST['Phone']) AND !empty($_POST['Message']))
    {
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"Pierre Sénéchal"<email-expediteur@example.org>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';

        $message='
		<html>
			<body>
				<div>
					<u>Nom de l\'expéditeur :</u>'.$_POST['Name'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['Email'].'<br />
					<u>Téléphone l\'expéditeur :</u>'.$_POST['Phone'].'<br />
					<br />
					'.nl2br($_POST['Message']).'
				</div>
			</body>
		</html>
		';

        mail("pierresenechal7@gmail.com", "CONTACT - CREATIVES.com", $message, $header);
        $msg="Votre message a bien été envoyé !";
    }
    else
    {
        $msg="Tous les champs doivent être complétés !";
    }


}
header('Location: http://193.168.146.183/Creatives/#section-contact');
?>