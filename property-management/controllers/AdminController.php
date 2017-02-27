<?php
class AdminController extends Controller{
	
	private $db;
	
	public function __construct(){
		$this->display_header = false;
		$this->display_footer = false;
		
		$this->db = new DataBase();

		$this->css_files = array(
			"login.css",
		);

		// $this->js_files = array(
		// 	"index.js",
		// );

		parent::__construct();
	}

	public function initContent(){
		if(User::isLogged())
			$this->tpl = "admin.tpl";
		else{
			$errors = "";
			$user = Tools::getValue('usuario');
			$passwd = Tools::getValue('password');

			if(isset($_POST["usuario"]) || isset($_POST['passwd'])){
				if(!Validate::isGenericName($user))
					$errors .= "<li>Debes introducir un nombre de usuario válido</li>";
				if(!Validate::isPasswd($passwd))
					$errors .= "<li>Debes introducir una contraseña válida</li>";

				if($errors != ""){
					$errors = "<ol>" . $errors . "</ol>";
					$this->smarty->assign(array(
						'errors' => $errors,
						'user' => $user,
						'passwd' => $passwd
					));
					$this->tpl = "login.tpl";
				}
				else{
        			setcookie('etc_user', $user, time()+60*60*24*365);
        			setcookie('etc_passwd', sha1($passwd), time()+60*60*24*365);
					if(User::isLogged())
						$this->tpl = "admin.tpl";
					else{
						$errors = "<li>Nombre de usuario o contraseña incorrectos</li>";
						$errors = "<ol>" . $errors . "</ol>";
						$this->smarty->assign(array(
							'errors' => $errors,
							'user' => $user,
							'passwd' => $passwd
						));
						$this->tpl = "login.tpl";
					}
				}
			}
			else{
				$this->smarty->assign(array(
					'errors' => $errors,
					'user' => $user,
					'passwd' => $passwd
				));
				$this->tpl = "login.tpl";
			}
		}
	}	
}