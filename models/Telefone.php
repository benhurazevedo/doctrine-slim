<?php 
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="Telefones")
*/
class Telefone 
{
	/**
	* @ORM\Id 
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue
	*/
	protected $id;
	
	/** @ORM\Column(type="string", length=255) */
	protected $nome;
	
	/** @ORM\Column(type="string", length=10) */
	protected $telefone;
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getNome()
	{
		return $this->nome;
	}
	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	public function getTelefone()
	{
		return $this->telefone;
	}
	public function setTelefone($telefone)
	{
		$this->telefone = $telefone;
	}
}