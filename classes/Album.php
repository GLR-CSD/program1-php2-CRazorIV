<?php

class Album
{
    /** @var int|null Het ID interger van de album */
    private ?int $ID;

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
    public function getNaam(): string
    {
        return $this->Naam;
    }

    /**
     * @param string $Naam
     */
    public function setNaam(string $Naam): void
    {
        $this->Naam = $Naam;
    }

    /**
     * @return string
     */
    public function getArtiesten(): string
    {
        return $this->Artiesten;
    }

    /**
     * @param string $Artiesten
     */
    public function setArtiesten(string $Artiesten): void
    {
        $this->Artiesten = $Artiesten;
    }

    /**
     * @return string|null
     */
    public function getReleaseDatum(): ?string
    {
        return $this->Release_datum;
    }

    /**
     * @param string|null $Release_datum
     */
    public function setReleaseDatum(?string $Release_datum): void
    {
        $this->Release_datum = $Release_datum;
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
     * @return string|null
     */
    public function getAfbeelding(): ?string
    {
        return $this->Afbeelding;
    }

    /**
     * @param string|null $Afbeelding
     */
    public function setAfbeelding(?string $Afbeelding): void
    {
        $this->Afbeelding = $Afbeelding;
    }

    /**
     * @return string|null
     */
    public function getPrijs(): ?string
    {
        return $this->Prijs;
    }

    /**
     * @param string|null $Prijs
     */
    public function setPrijs(?string $Prijs): void
    {
        $this->Prijs = $Prijs;
    }

    /** @var string De naam van het album */
    private string $Naam;

    /** @var string De artiesten van het album */
    private string $Artiesten;

    /** @var string|null Release_datum voor het album */
    private ?string $Release_datum;

    /** @var string|null URL van de website van het album */
    private ?string $URL;

    /** @var string|null afbeeldingen voor de albums */
    private ?string $Afbeelding;

    /** @var string|null Prijs van het album*/
    private ?string $Prijs;

    /**
     * @param int|null $ID
     * @param string $Naam
     * @param string $Artiesten
     * @param string|null $Release_datum
     * @param string|null $URL
     * @param string|null $Afbeelding
     * @param string|null $Prijs
     */
    public function __construct(?int $ID, string $Naam, string $Artiesten, ?string $Release_datum, ?string $URL, ?string $Afbeelding, ?string $Prijs)
    {
        $this->ID = $ID;
        $this->Naam = $Naam;
        $this->Artiesten = $Artiesten;
        $this->Release_datum = $Release_datum;
        $this->URL = $URL;
        $this->Afbeelding = $Afbeelding;
        $this->Prijs = $Prijs;
    }
}

