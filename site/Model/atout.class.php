<?php

class Atouts
{
    protected int $idAtouts;
    protected string $Atous;
    protected int $idUtilisateur;
    public function __construct(int $idAtouts, string $Atous, int $idUtilisateur)
    {
        $this->idAtouts = $idAtouts;
        $this->Atous = $Atous;
        $this->idUtilisateur = $idUtilisateur;
    }
    public function getIdAtouts(): int {return $this->idAtouts;}

	public function getAtous(): string {return $this->Atous;}

	public function getIdUtilisateur(): int {return $this->idUtilisateur;}

	public function setIdAtouts(int $idAtouts): void {$this->idAtouts = $idAtouts;}

	public function setAtous(string $Atous): void {$this->Atous = $Atous;}

	public function setIdUtilisateur(int $idUtilisateur): void {$this->idUtilisateur = $idUtilisateur;}

	
}
