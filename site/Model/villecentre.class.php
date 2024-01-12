<?php

class VilleCentre
{
    protected int $idVillecentre;
    protected string $villecentre;
    protected int $idUtilisateur;

    public function __construct(int $idVillecentre, string $villecentre, int $idUtilisateur)
    {
        $this->idVillecentre = $idVillecentre;
        $this->villecentre = $villecentre;
        $this->idUtilisateur = $idUtilisateur;
    }
    public function getIdVillecentre(): int {return $this->idVillecentre;}

	public function getVillecentre(): string {return $this->villecentre;}

	public function getIdUtilisateur(): int {return $this->idUtilisateur;}

	public function setIdVillecentre(int $idVillecentre): void {$this->idVillecentre = $idVillecentre;}

	public function setVillecentre(string $villecentre): void {$this->villecentre = $villecentre;}

	public function setIdUtilisateur(int $idUtilisateur): void {$this->idUtilisateur = $idUtilisateur;}

	
}
