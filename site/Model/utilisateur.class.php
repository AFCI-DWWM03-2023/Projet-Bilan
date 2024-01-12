<?php

class Utilisateur{
    protected int $idUtilisateur;
    protected string $nom;
    protected string $prenom;
    protected int $idRoles;

    public function __construct(int $idUtilisateur, string $nom, string $prenom, int $idRoles){$this->idUtilisateur = $idUtilisateur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->idRoles = $idRoles;
    }
    public function getIdUtilisateur(): int {return $this->idUtilisateur;}

	public function getNom(): string {return $this->nom;}

	public function getPrenom(): string {return $this->prenom;}

	public function getIdRoles(): int {return $this->idRoles;}

	
    public function setIdUtilisateur(int $idUtilisateur): void {$this->idUtilisateur = $idUtilisateur;}

	public function setNom(string $nom): void {$this->nom = $nom;}

	public function setPrenom(string $prenom): void {$this->prenom = $prenom;}

	public function setIdRoles(int $idRoles): void {$this->idRoles = $idRoles;}
}