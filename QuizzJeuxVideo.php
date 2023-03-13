<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz Jeux Vidéo</title>
</head>
<body>
    <h1>Quizz Jeux Vidéo</h1>
    <p>Bonne chance à vous !</p>
    <form action="reponsesquizz.php" method="post">
        <p>Question 1 : Qui est le personnage principal de The legend of Zelda ?</p>
        <input type="radio" name="question1" value="Zelda">Zelda<br>
        <input type="radio" name="question1" value="Link">Link<br>
        <input type="radio" name="question1" value="Mario">Mario<br>
        <input type="radio" name="question1" value="Sonic">Sonic<br>
        <input type="hidden" name="question" value="1">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 2 : Lequel de ces personnages n'est pas dans le jeu Street Fighter ?</p>
        <input type="radio" name="question2" value="Ryu">Ryu<br>
        <input type="radio" name="question2" value="Chun-li">Chun-li<br>
        <input type="radio" name="question2" value="Zangief">Zangief<br>
        <input type="radio" name="question2" value="Kazuya Mishima">Kazuya Mishima<br>
        <input type="hidden" name="question" value="2">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 3 : Dans Stray, quel animal incarne t'on ?</p>
        <input type="radio" name="question3" value="Chien">Chat<br>
        <input type="radio" name="question3" value="Chat">Chat<br>
        <input type="radio" name="question3" value="Oiseau">Oiseau<br>
        <input type="radio" name="question3" value="téma la taille du rat">téma la taille du rat<br>
        <input type="hidden" name="question" value="3">
        <input type="submit" value="Suivant">
    </form>
    <form action="reponsesquizz.php" method="post">
        <p>Question 4 : Dans quel jeu Assassin's creed incarne t'on un Templier ?</p>
        <input type="radio" name="question4" value="Assassin's creed Odyssey">Assassin's creed Odyssey<br>
        <input type="radio" name="question4" value="Assassin's creed 3">Assassin's creed 3<br>
        <input type="radio" name="question4" value="Assassin's creed Black flag">Assassin's creed Black flag<br>
        <input type="radio" name="question4" value="Assassin's creed Origins">Assassin's creed Origins<br>
        <input type="hidden" name="question" value="4">
        <input type="submit" value="Suivant">
    </form>
</body>
</html>

