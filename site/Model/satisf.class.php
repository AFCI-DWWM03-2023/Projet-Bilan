<?php

class Satisfaction
{
    protected int $idSatisf;
    protected int $satisf;
    protected int $idUtilisateur;

    public function __construct(int $idSatisf, int $satisf, int $idUtilisateur)
    {
        $this->idSatisf = $idSatisf;
        $this->satisf = $satisf;
        $this->idUtilisateur = $idUtilisateur;
    }

    public function getIdSatisf(): int {return $this->idSatisf;}

	public function getSatisf(): int {return $this->satisf;}

	public function getIdUtilisateur(): int {return $this->idUtilisateur;}

	public function setIdSatisf(int $idSatisf): void {$this->idSatisf = $idSatisf;}

	public function setSatisf(int $satisf): void {$this->satisf = $satisf;}

	public function setIdUtilisateur(int $idUtilisateur): void {$this->idUtilisateur = $idUtilisateur;}

	
}
