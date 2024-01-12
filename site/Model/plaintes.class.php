<?php

class Plaintes
{
    protected int $idPlainte;
    protected string $plainte;
    protected int $idUtilisateur;

    public function __construct(int $idPlainte, string $plainte, int $idUtilisateur)
    {
        $this->idPlainte = $idPlainte;
        $this->plainte = $plainte;
        $this->idUtilisateur = $idUtilisateur;
    }

    public function getIdPlainte(): int {return $this->idPlainte;}

	public function getPlainte(): string {return $this->plainte;}

	public function getIdUtilisateur(): int {return $this->idUtilisateur;}

	public function setIdPlainte(int $idPlainte): void {$this->idPlainte = $idPlainte;}

	public function setPlainte(string $plainte): void {$this->plainte = $plainte;}

	public function setIdUtilisateur(int $idUtilisateur): void {$this->idUtilisateur = $idUtilisateur;}

	
}
