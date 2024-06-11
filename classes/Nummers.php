<?php

declare(strict_types=1);
class Nummers
{
    /** @var int|null Het ID van de persoon */
    private ?int $ID;

    /** @var string De voornaam van de persoon */
    private string $AlbumID;

    /** @var string De achternaam van de persoon */
    private string $Titel;

    /** @var string|null Het telefoonnummer van de persoon */
    private ?string $Duur;

    /** @var string|null Het e-mailadres van de persoon */
    private ?string $URL;

    /**
     * @return int|null
     */
    public function getID(): ?int
    {
        return $this->ID;
    }

    /**
     * @param int|null $ID
     */
    public function setID(?int $ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @return string
     */
    public function getAlbumID(): string
    {
        return $this->AlbumID;
    }

    /**
     * @param string $AlbumID
     */
    public function setAlbumID(string $AlbumID): void
    {
        $this->AlbumID = $AlbumID;
    }

    /**
     * @return string
     */
    public function getTitel(): string
    {
        return $this->Titel;
    }

    /**
     * @param string $Titel
     */
    public function setTitel(string $Titel): void
    {
        $this->Titel = $Titel;
    }

    /**
     * @return string|null
     */
    public function getDuur(): ?string
    {
        return $this->Duur;
    }

    /**
     * @param string|null $Duur
     */
    public function setDuur(?string $Duur): void
    {
        $this->Duur = $Duur;
    }

    /**
     * @return string|null
     */
    public function getURL(): ?string
    {
        return $this->URL;
    }

    /**
     * @param string|null $URL
     */
    public function setURL(?string $URL): void
    {
        $this->URL = $URL;
    }

    /**
     * @param int|null $ID
     * @param string $AlbumID
     * @param string $Titel
     * @param string|null $Duur
     * @param string|null $URL
     */
    public function __construct(?int $ID, string $AlbumID, string $Titel, ?string $Duur, ?string $URL)
    {
        $this->ID = $ID;
        $this->AlbumID = $AlbumID;
        $this->Titel = $Titel;
        $this->Duur = $Duur;
        $this->URL = $URL;
    }

    public static function getAll(PDO $db): array
    {
        // Voorbereiden van de query
        $stmt = $db->query("SELECT * FROM Nummer");

        // Array om personen op te slaan
        $nummers = [];

        // Itereren over de resultaten en personen toevoegen aan de array
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $nummer = new Nummers(
                $row['ID'],
                $row['AlbumID'],
                $row['Titel'],
                $row['Duur'],
                $row['URL'],
            );
            $nummers[] = $nummer;
        }

        // Retourneer array met personen
        return $nummers;
    }
}