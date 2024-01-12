<?php

class Role {
    protected int $idRoles;
    protected string $roles;
    
    public function __construct(int $idRoles, string $roles){
        $this->idRoles = $idRoles;
        $this->roles = $roles;
    }
    
	public function getIdRoles(): int {return $this->idRoles;}

	public function getRoles(): string {return $this->roles;}

	public function setIdRoles(int $idRoles): void {$this->idRoles = $idRoles;}

	public function setRoles(string $roles): void {$this->roles = $roles;}

	
}