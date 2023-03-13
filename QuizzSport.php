<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz Sport</title>
</head>
<body>
    <h1>Quizz Sport</h1>
    <p>Bonne chance à vous !</p>
    <form action="reponsesquizz.php" method="post">
        <p>Question 1 : Qui détient le record du monde de vitesse au 100 mètres ?</p>
        <input type="radio" name="question1" value="Justin Gatlin">Justin Gatlin<br>
        <input type="radio" name="question1" value="Christian Coleman">Christian Coleman<br>
        <input type="radio" name="question1" value="Usain Bolt">Usain Bolt<br>
        <input type="radio" name="question1" value="Jamel Debbouze">Jamel Debbouze<br>
        <input type="hidden" name="question" value="1">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 2 : Quel pays a remporté le plus de médailles d'or aux J.O. de 2016 ?</p>
        <input type="radio" name="question2" value="États-Unis">États-Unis<br>
        <input type="radio" name="question2" value="Chine">Chine<br>
        <input type="radio" name="question2" value="France">France<br>
        <input type="radio" name="question2" value="Russie">Russie<br>
        <input type="hidden" name="question" value="2">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 3 : Quel est le nom du stade de l'OM ?</p>
        <input type="radio" name="question3" value="Stade Vélodrome">Stade Vélodrome<br>
        <input type="radio" name="question3" value="Stade de France">Stade de France<br>
        <input type="radio" name="question3" value="Stade de Marseille">Stade de Marseille<br>
        <input type="radio" name="question3" value="Parc des Princes">Parc des Princes<br>
        <input type="hidden" name="question" value="3">
        <input type="submit" value="Suivant">
    </form>
    <form action="reponsesquizz.php" method="post">
        <p>Question 4 : Combien de ballons d'or Lionel Messi a t-il remporté ?</p>
        <input type="radio" name="question4" value="9">9<br>
        <input type="radio" name="question4" value="3">3<br>
        <input type="radio" name="question4" value="7">7<br>
        <input type="radio" name="question4" value="7">7<br>
        <input type="hidden" name="question" value="4">
        <input type="submit" value="Suivant">
    </form>
    <form action="reponsesquizz.php" method="post">
        <p>Question 5 : Qui détient le record de temps au 50m nage libre?</p>
        <input type="radio" name="question5" value="Yohann Ndoye-Brouard">Yohann Ndoye-Brouard<br>
        <input type="radio" name="question5" value="Florent Manaudou">Florent Manaudou<br>
        <input type="radio" name="question5" value="Mélanie Henique">Mélanie Henique<br>
        <input type="radio" name="question5" value="Marie Wattel">Marie Wattel<br>
        <input type="hidden" name="question" value="5">
        <input type="submit" value="Suivant">
    </form>
    <form action="reponsesquizz.php" method="post">
        <p>Question 6 : Laquelle de ces couleurs n'est pas présente sur une cible de tir à l'arc ?</p>
        <input type="radio" name="question6" value="Bleu">Bleu<br>
        <input type="radio" name="question6" value="Noir">Noir<br>
        <input type="radio" name="question6" value="Jaune">Jaune<br>
        <input type="radio" name="question6" value="Vert">Vert<br>
        <input type="hidden" name="question" value="6">
        <input type="submit" value="Suivant">
    </form>
</body>
</html>