  <?php
// Start de sessie
// Deze gaan we gebruiken om de form values en de errors op te slaan
session_start();

// Controleer of het verzoek via POST is gedaan
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Valideer de ingediende gegevens
    $errors = [];
    $formValues = [
        'Naam' => $_POST['Naam'] ?? '',
        'Artiesten' => $_POST['Artiesten'] ?? '',
        'Release_datum' => $_POST['Release_datum'] ?? '',
        'URL' => $_POST['URL'] ?? '',
        'Afbeelding' => $_POST['Afbeelding'] ?? '',
        'Prijs' => $_POST['Prijs'] ?? '',
    ];

    // Valideer voornaam
    if (empty($_POST['Naam'])) {
        $errors['Naam'] = "Naam is verplicht.";
    }

    // Valideer Artiesten
    if (empty($_POST['Artiesten'])) {
        $errors['Artiesten'] = "Artiesten is verplicht.";
    }

    if (empty($_POST['Release_datum'])) {
        $errors['Release_datum'] = "Geen release datum!";
    }

    // Valideer telefoonnummer (NL-formaat)
    if (empty($_POST['URL'])) {
        $errors['URL'] = "Ongeldig telefoonnummer. Voer een geldig Nederlands telefoonnummer in.";
    }

    if (empty($_POST['Afbeelding'])) {
        $errors['Afbeelding'] = 'ongeldige afbeelding!';
    }

    if (empty($_POST['Prijs'])) {
        $errors['Prijs'] = 'Geen prijs toegevoegd!';
    }
    // Als er geen validatiefouten zijn, voeg de album toe aan de database
    if (empty($errors)) {
        require_once 'db.php';
        require_once 'classes/Album.php';

        // Maak een nieuw Persoon object met de ingediende gegevens
        $album = new Album(
            null,
            $_POST['Naam'],
            $_POST['Artiesten'],
            $_POST['Release_datum'],
            $_POST['URL'],
            $_POST['Afbeelding'],
            $_POST['Prijs']
        );

        // Voeg de album toe aan de database
        $album->save($db);

    } else {
        // Sla de fouten en formulier waarden op in sessievariabelen
        $_SESSION['errors'] = $errors;
        $_SESSION['formValues'] = $formValues;
    }

    // Stuur de gebruiker terug naar de index.php
    header("Location: album.php");
    exit;

} else {
    header("Location: album.php");
}