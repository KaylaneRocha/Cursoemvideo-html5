 <?php
	session_start();
	
class Login{


	private $pdo;	
//construtor CONEXAO
  public function __construct()
  {
    try
    {
    $this->pdo = new PDO("mysql:host=localhost;dbname=freq","root","");
    }
    catch(PDOException $e)
    {
      echo "Erro Banco de Dados: ".$e->getMessage();
      exit();
    }
    catch(Exception $e)
    {
      echo "Erro ".$e->getMessage();
      exit();
    }
  }

	public function login($email,$senha){
		
		$pdo = new PDO("mysql:host=localhost;dbname=sistema_frequencia","root","");
		$sql = "select * from secretaria where email = :email and senha = :senha";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":email",$email);
		$sql->bindValue(":senha",$senha);
		$sql->execute();


		if ($sql->rowCount() > 0) {	
			$_SESSION['iduser'] = $dado['id'];
			$_SESSION['iduser'] = true;
			
			return true;

			}
			else {
			$_SESSION['iduser'] = false;
			
			return false;
				
			}
		}

	}


?>