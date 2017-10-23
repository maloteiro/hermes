<?php
/* Smarty version 3.1.30, created on 2017-01-10 21:28:52
  from "C:\xampp\htdocs\padrao\base\html\index\index_Principal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58756e34e03531_94296877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd530ace7dc2b14f1f873fb36b241f3d68537db04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\padrao\\base\\html\\index\\index_Principal.html',
      1 => 1484090928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58756e34e03531_94296877 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Página inicial
        <small><?php echo $_SESSION['versao'];?>
</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'];?>
" /><?php }
}
