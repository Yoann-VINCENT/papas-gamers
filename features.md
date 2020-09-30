# toDO
## Referent du groupe   (Charly)
## Nom du site LESPAPAGAMERS ##

## [Finir wireframe]( https://wireframepro.mockflow.com/view/Mb8b1b1777daad888bb9ee58f7abb43151601385211186 )   (Y)  ##

-----------------------------------------------------------------------------

## Features MOBILE ##

### definir les bases du fichier CSS (variable de couleur, style des différents éléments); ###

### navbar ###     (F)
* header
	* hamburger menu
		* button
		* function displayMenu / hideMenu
	* logo
	* login button
		* button
		* function displayLogin / hideLogin

* modal menu
	* menu
		* lien vers les catégories
		* lien vers notre page
	* background modal
		* function hideLogin

* modal login
	* login form
		* username input
		* userpassword input
		* button submit 
			* check format login with JS before sending
                * if fail, display message error,
	* background modal form
		* function hideLogin
	* boutton fermer 
	


### index page ### R
* carousel
	* contenu
		* lien "page quoi faire pour s'occuper"
		* lien jeu principal
		* lien page présentation
	* defilement automatique
	* lien page precedente/suivante
	* ( tracker page )
* catch phrase
* container catégorie de jeux
	* lien vers les pages des différentes catégories
		* icone des différentes catégories
		* titre de la catégorie
			-> arcarde
			-> reflexion
			-> educatif/code  !!récupérer toutes les ressources

### footer ###
A VOIR CONTENU DU FOOTER


### pages jeux fonction des catégories ###   (Y)
* creer prototype carte réutilisable
	* image du jeu
	* description
	* button
	* lien page de jeu sur l'ensemble de la carte?


### page jeu ###
QUESTION: BLOCKER ACCES AUX JEUX SI PAS LOGIN?
* contener avec jeu
* score (à intégrer dans le jeu, semble le + facile)
* loading screen?


### quoi faire pour s'occuper? ###
CONTENU?



### about us ###  NPO ETRE ELEGANT   (C)
* background du group les Charryofles?
* présentation x4
	* photo
	* speach



-----------------------------------------------------------------------------

## features SERVER ##


### login ###
* fake identifiant
//proposition: mdp
->phprocks=>login
->iwantphp
->phpforever
->jsrocks=>page getout
->tous les autres, login fail

* check login
	* fonction pour clean input utilisateur? permettra de l'utiliser pour l'inscription

	* if isAuthorized => display name && allow access to games
	* else redirect to unauthorized page && block games


-----------------------------------------------------------------------------

## GAMES ##

### whack a mole ###

### demineur ###

-----------------------------------------------------------------------------

## bonus ##
* +de jeu
* vrai database