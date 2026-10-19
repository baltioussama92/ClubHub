<?php
echo ' p0';

$nom = trim((string) ($_POST['nom_complet'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$niveau = (string) ($_POST['niveau'] ?? '');
$arduino = (string) ($_POST['a_deja_utilise_arduino'] ?? '');
$motivation = trim((string) ($_POST['motivation'] ?? ''));
$accepteReglement = isset($_POST['accepte_reglement']);

if (strlen($nom) < 3) {
    echo 'Le nom complet doit contenir au moins 3 caractères.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Veuillez saisir une adresse e-mail valide.';
}

$niveauxAutorises = ['1re-annee', '2e-annee', '3e-annee'];

if (!in_array($niveau, $niveauxAutorises, true)) {
    echo "Veuillez choisir un niveau d'études valide.";
}

if ($arduino !== '' && !in_array($arduino, ['oui', 'non'], true)) {
    echo 'La réponse concernant Arduino est invalide.';
}

if (!$accepteReglement) {
    echo 'Vous devez accepter le règlement du club.';
}
echo ' p1';
?>