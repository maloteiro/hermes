<?php
class menu{
	private $db;
	private $smarty;
	private $token;
	private $sql;
	
	function __construct($classes){
		$this->db 		= $classes['db'];
		$this->smarty 	= $classes['smarty'];
		$this->token 	= $classes['token'];
		$this->sql		= $classes['sql'];		
	}
	
	function montaMenu(){
		$modulos = $this->sql->select_Modulo();
		$menu = "";
		foreach ($modulos as $modulo) {
			
			$menu .= '<li class="treeview">';
          	$menu .= '		<a href="#">';
          	$menu .= '			<i class="'.$modulo['dsc_modulo_classe'].'"></i> <span>'.$modulo['dsc_modulo_descricao'].'</span>';
            $menu .= '			<span class="pull-right-container">';
            $menu .= '  			<i class="fa fa-angle-left pull-right"></i>';
            $menu .= '			</span>';
          	$menu .= '		</a>';
			
			$rotinas = $this->sql->select_Rotina($modulo['seq_modulo']);
			if($rotinas){
				$menu .= '	<ul class="treeview-menu">';
				foreach ($rotinas as $rotina) {
					$menu .= '<li><a href="#" onclick="javascript:wiOpen(\'?d='.$rotina['dsc_rotina_diretorio'].'&a='.$rotina['dsc_rotina_arquivo'].'&f='.$rotina['dsc_rotina_funcao'].'&apaga_msg=1\');" target="_self">'.$rotina['dsc_rotina_descricao'].'</a></li>';	
				}
				$menu .= "</ul>";
			}
		}
		$menu .= "</li>";
		return $menu;
	}
}
?>