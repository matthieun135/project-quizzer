<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz cinéma</title>
</head>
<body>
    <h1>Quizz Cinéma</h1>
    <p>Bonne chance à vous !</p>
    <form action="reponsesquizz.php" method="post">
        <p>Question 1 : Qui est le réalisateur du film Avatar ?</p>
        <input type="radio" name="question1" value="Steven Spielberg">Steven Spielberg<br>
        <input type="radio" name="question1" value="Jake Sully">Jake Sully<br>
        <input type="radio" name="question1" value="James Cameron">James Cameron<br>
        <input type="radio" name="question1" value="David Yates">David Yates<br>
        <input type="hidden" name="question" value="1">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 2 : Comment s'appel le balai que reçois Harry dans Harry Potter 1 ?</p>
        <input type="radio" name="question2" value="Le comète 360">Le comète 360<br>
        <input type="radio" name="question2" value="L'éclair de feu">L'éclair de feu<br>
        <input type="radio" name="question2" value="Le Nimbus 2000">Le Nimbus 2000<br>
        <input type="radio" name="question2" value="Le Nimbus 2001">Le Nimbus 2001<br>
        <input type="hidden" name="question" value="2">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 3 : Dans Star Wars, comment s'appel le compagnon de Han Solo ?</p>
        <input type="radio" name="question3" value="Chewbacca">Chewbacca<br>
        <input type="radio" name="question3" value="Dark Vador">Dark vador<br>
        <input type="radio" name="question3" value="Milou">Milou<br>
        <input type="radio" name="question3" value="R2D2">R2D2<br>
        <input type="hidden" name="question" value="3">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 4 : Pourquoi Thanos cherche t'il les pierres de pouvoir dans Avengers : infinity war ?</p>
        <input type="radio" name="question4" value="Pour pouvoir détruire le monde">Pour pouvoir détruire le monde<br>
        <input type="radio" name="question4" value="Pour pouvoir sauver le monde">Pour pouvoir sauver le monde<br>
        <input type="radio" name="question4" value="Pour pouvoir réssuciter sa défunte mère">Pour pouvoir réssuciter sa défunte mère<br>
        <input type="radio" name="question4" value="Pour pouvoir tuer la moitié des êtres vivants">Pour pouvoir tuer la moitié des êtres vivants<br>
        <input type="hidden" name="question" value="4">
        <input type="submit" value="Suivant">
    </form>  
    <form action="reponsesquizz.php" method="post">
        <p>Question 5 : Quel réalisateur a réalisé le film d'animation "Le Voyage de Chihiro" ?</p>
        <input type="radio" name="question5" value="Hayao Miyazaki">Hayao Miyazaki<br>
        <input type="radio" name="question5" value="Isao Takahata">Isao Takahata<br>
        <input type="radio" name="question5" value="Mamoru Hosoda">Mamoru Hosoda<br>
        <input type="radio" name="question5" value="Makoto Shinkai">Makoto Shinkai<br>
        <input type="hidden" name="question" value="5">
        <input type="submit" value="Suivant">
    </form>  
</body>
</html>