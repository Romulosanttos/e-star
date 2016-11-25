<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Models\Professor as Professor;
use App\DAO\DAOProfessor as DAOProfessor;

require_once dirname(__FILE__).'/../../Model/Professor.php';
require_once dirname(__FILE__).'/../../DAO/DAOProfessor.php';
require_once dirname(__FILE__).'/../../Controllers/mainController.php';

$ProfessorControl = new mainController();
$Result =$ProfessorControl->apagarProfessor("22");

if ($Result){	
		echo '<script> alert("Deletado Com Sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Deletado Com Sucesso") </script>  ';


