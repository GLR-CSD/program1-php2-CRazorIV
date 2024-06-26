<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personenlijst</title>
    <link rel="stylesheet" href="public/css/simple.css">
</head>
<body>
<h1>Personenlijst</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Artiesten</th>
        <th>Release datum</th>
        <th>URL</th>
        <th>Afbeelding</th>
        <th>Prijs</th>
    </tr>
    <?php foreach ($albums as $album): ?>
        <tr>
            <td><?= $album->getID() ?></td>
            <td><?= $album->getNaam() ?></td>
            <td><?= $album->getArtiesten() ?></td>
            <td><?= $album->getReleaseDatum() ?></td>
            <td><?= $album->getURL() ?></td>
            <td><?= $album->getAfbeelding() ?></td>
            <td><?= $album->getPrijs() ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<div class="notice">
    <h2>Persoon Toevoegen:</h2>
    <?php if (!empty($errors)): ?>
        <div style="color: red;">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="toevoegen_album.php" method="post">
        <label for="Naam">Naam:</label>
        <input type="text" id="Naam" name="Naam" value="<?= $formValues['Naam'] ?? '' ?>" required>
        <?php if (isset($errors['Naam'])): ?>
            <span style="color: red;"><?= $errors['Naam'] ?></span>
        <?php endif; ?><br>

        <label for="Artiesten">Artiesten:</label>
        <input type="text" id="Artiesten" name="Artiesten" value="<?= $formValues['Artiesten'] ?? '' ?>"  required>
        <?php if (isset($errors['Artiesten'])): ?>
            <span style="color: red;"><?= $errors['Artiesten'] ?></span>
        <?php endif; ?><br>

        <label for="Release_datum">Release datum:</label>
        <input type="text" id="Release_datum" name="Release_datum" value="<?= $formValues['Release_datum'] ?? '' ?>">
        <?php if (isset($errors['Release_datum'])): ?>
            <span style="color: red;"><?= $errors['Release_datum'] ?></span>
        <?php endif; ?><br>

        <label for="URL">URL:</label>
        <input type="text" id="URL" name="URL" value="<?= $formValues['URL'] ?? '' ?>">
        <?php if (isset($errors['URL'])): ?>
            <span style="color: red;"><?= $errors['URL'] ?></span>
        <?php endif; ?><br>

        <label for="Afbeelding">Afbeelding:</label>
        <input type="text" id="Afbeelding" name="Afbeelding" value="<?= $formValues['Afbeelding'] ?? '' ?>">
        <?php if (isset($errors['Afbeelding'])): ?>
            <span style="color: red;"><?= $errors['Afbeelding'] ?></span>
        <?php endif; ?><br>

        <label for="Prijs">Prijs:</label>
        <input type="text" id="Prijs" name="Prijs" value="<?= $formValues['Prijs'] ?? '' ?>">
        <?php if (isset($errors['Prijs'])): ?>
            <span style="color: red;"><?= $errors['Prijs'] ?></span>
        <?php endif; ?><br>

        <input type="submit" value="Toevoegen">
    </form>
</div>

</body>
</html>
