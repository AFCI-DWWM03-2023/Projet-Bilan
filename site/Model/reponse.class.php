<?php

class Reponse
{

    protected int $idUtilsateur;
    protected int $idPlainte;
    protected int $idVillecentre;
    protected int $idIntitule;
    protected int $idAtouts;
    protected int $idSatisf;

    public function __construct(int $idUtilsateur, int $idPlainte, int $idVillecentre, int $idIntitule, int $idAtouts, int $idSatisf)
    {
        $this->idUtilsateur = $idUtilsateur;
        $this->idPlainte = $idPlainte;
        $this->idVillecentre = $idVillecentre;
        $this->idIntitule = $idIntitule;
        $this->idAtouts = $idAtouts;
        $this->idSatisf = $idSatisf;
    }
    public function getIdUtilsateur(): int {return $this->idUtilsateur;}

	public function getIdPlainte(): int {return $this->idPlainte;}

	public function getIdVillecentre(): int {return $this->idVillecentre;}

	public function getIdIntitule(): int {return $this->idIntitule;}

	public function getIdAtouts(): int {return $this->idAtouts;}

	public function getIdSatisf(): int {return $this->idSatisf;}

	public function setIdUtilsateur(int $idUtilsateur): void {$this->idUtilsateur = $idUtilsateur;}

	public function setIdPlainte(int $idPlainte): void {$this->idPlainte = $idPlainte;}

	public function setIdVillecentre(int $idVillecentre): void {$this->idVillecentre = $idVillecentre;}

	public function setIdIntitule(int $idIntitule): void {$this->idIntitule = $idIntitule;}

	public function setIdAtouts(int $idAtouts): void {$this->idAtouts = $idAtouts;}

	public function setIdSatisf(int $idSatisf): void {$this->idSatisf = $idSatisf;}

	
}
