<?php

class Intitule
{
    protected int $idIntitule;
    protected string $intitule;
    protected int $idUtilisateur;

    public function __construct(int $idIntitule, string $intitule, int $idUtilisateur)
    {
        $this->idIntitule = $idIntitule;
        $this->intitule = $intitule;
        $this->idUtilisateur = $idUtilisateur;
    }
    public function getIdIntitule(): int {return $this->idIntitule;}

	public function getIntitule(): string {return $this->intitule;}

	public function getIdUtilisateur(): int {return $this->idUtilisateur;}

	public function setIdIntitule(int $idIntitule): void {$this->idIntitule = $idIntitule;}

	public function setIntitule(string $intitule): void {$this->intitule = $intitule;}

	public function setIdUtilisateur(int $idUtilisateur): void {$this->idUtilisateur = $idUtilisateur;}

	
}
