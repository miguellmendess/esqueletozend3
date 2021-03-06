<?php

namespace Servicos\Controller;

use Servicos\Model\ServicoTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ServicosController extends AbstractActionController
{

	private $table;

	public function __construct(ServicoTable $table)
	{
		$this->table = $table;
	}

	public function indexAction(){
		
		$servicoTable = $this->table;
		$servicos =  $servicoTable->findByPartialName("Aluguel");
		$servicos =  $servicoTable->fetchAll();
		

		return new ViewModel([
			'servicos'=>$servicos
		]);

	}
	
}