<?php
// Code PHP pour afficher un message de bienvenue
$nom = 'Denis';
$prenom = 'Morgan';
$symfonyVersion = 'Non applicable dans un contexte non-Symfony';

// Création du message de bienvenue avec les numéros d'itérations
$welcomeMessages = [];
for ($i = 1; $i <= 5; $i++) {
    $welcomeMessages[] = "Bienvenue! Itération : $i";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
</head>
<body>
    <h1>Hello, <?php echo htmlspecialchars($prenom); ?> <?php echo htmlspecialchars($nom); ?>!</h1>
    <p>Version de Symfony : <?php echo htmlspecialchars($symfonyVersion); ?></p>
    
    <h2>Messages de bienvenue :</h2>
    <ul>
        <?php foreach ($welcomeMessages as $message): ?>
            <li><?php echo htmlspecialchars($message); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>