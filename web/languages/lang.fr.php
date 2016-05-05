<?php
/* 
-----------------
Language: French
-----------------
*/

function toHtml($text)
{
	$text = htmlentities($text, ENT_NOQUOTES, "UTF-8");
	$text = htmlspecialchars_decode($text);
	return $text;
}


function toUtf($text)
{
	return utf8_encode($text);
}



$lang = array();

// Current language
$lang['LNG'] = 'Langue';


// Page 

$lang['PAGE_TITLE'] = 'Faculté des Sciences de Sfax';
$lang['HEADER_TITLE'] = 'Faculté des Sciences de Sfax';
$lang['SITE_NAME'] = 'Faculté des Sciences de Sfax';
$lang['SLOGAN'] = 'FSS';
$lang['HEADING'] = 'Position';


// Connexion Modal
$lang['CONNEXION_MODAL_TITLE'] = 'Connexion'; 
$lang['CONNEXION_MODAL_TIP'] = 'Veuillez saisir vos identifiants';
$lang['CONNEXION_MODAL_EMAIL'] = 'E-mail';
$lang['CONNEXION_MODAL_PASSWORD'] = 'Mot de Passe';
$lang['CONNEXION_MODAL_SUBMIT'] = 'Se Connecter';
$lang['CONNEXION_MODAL_EMAIL_PLCH'] = 'Votre E-mail  ...';
$lang['CONNEXION_MODAL_PASSWORD_PLCH'] = 'Votre Mot de Passe ...';
$lang[''] = '';


// Inscription Modal
$lang['INSCRIPTION_MODAL_TITLE'] = 'Inscription';
$lang['INSCRIPTION_MODAL_TIP'] = 'Veuillez saisir vos identifiants d\'insctription';
$lang['INSCRIPTION_MODAL_USERNAME'] = 'Nom d\'utilisateur';
$lang['INSCRIPTION_MODAL_EMAIL'] = 'E-mail';
$lang['INSCRIPTION_MODAL_PASSWORD'] = 'Mot de Passe';
$lang['INSCRIPTION_MODAL_SUBMIT'] = 'S\'inscrire';
$lang['INSCRIPTION_MODAL_USERNAME_PLCH'] = 'Votre Nom d\'utilisateur ...';
$lang['INSCRIPTION_MODAL_EMAIL_PLCH'] = 'Votre E-mail ...';
$lang['INSCRIPTION_MODAL_PASSWORD_PLCH'] = 'Votre Mot de Passe ...';
$lang[''] = '';


// Menu

$lang['MENU_HOME'] = 'Accueil';
$lang['MENU_PEDAGOGIE'] = 'Pédagogie';
$lang['MENU_FORMATION'] = 'Formations';
$lang['MENU_FORMATION_SM1'] = 'Etudes Préparatoires'; //toHtml('Etudes Préparatoires');
$lang['MENU_FORMATION_SM2'] = 'Master';
$lang['MENU_FORMATION_SM3'] = 'Doctorat';
$lang['MENU_FORMATION_SM4'] = 'Habilitation Universitaire';
$lang['MENU_DEPARTEMENTS'] = 'Départements';
$lang['MENU_ECOLE_DOC'] = 'Ecole Doctorale';
$lang['MENU_DOCUMENTS'] = 'Documents';
$lang['MENU_RECHERCHE'] = 'Chercher ...';
$lang['MENU_CONNEXION'] = 'Se Connecter';
$lang['MENU_INSCRIPTION'] = 'Inscription';
$lang['MENU_ESPACE'] = 'Mon Espace';
$lang['MENU_PROFIL'] = 'Voir Profil';
$lang['MENU_DECONNEXION'] = 'Se Déconnecter';
$lang[''] = '';

// User
$lang['USER_WELCOME'] = 'Bienvenue';

//Footer
$lang['COPYRIGHT'] = 'Copyright Heavenerd Inc 2015 Tous droits reservés';

?>