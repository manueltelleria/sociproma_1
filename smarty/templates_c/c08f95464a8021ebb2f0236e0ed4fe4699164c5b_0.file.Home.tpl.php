<?php
/* Smarty version 3.1.30, created on 2017-03-16 17:44:28
  from "/opt/lampp/htdocs/Sociproma_linux/smarty/templates/Home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cac0ec6dd508_45032110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c08f95464a8021ebb2f0236e0ed4fe4699164c5b' => 
    array (
      0 => '/opt/lampp/htdocs/Sociproma_linux/smarty/templates/Home.tpl',
      1 => 1489045160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:doctype.tpl' => 1,
    'file:estilosgenerales.tpl' => 1,
    'file:jsgenerales.tpl' => 1,
    'file:encabezado.tpl' => 1,
  ),
),false)) {
function content_58cac0ec6dd508_45032110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:doctype.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<!-- hojas de estilo generales -->
<?php $_smarty_tpl->_subTemplateRender("file:estilosgenerales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- archivos de javascript generales (cargar en todas las páginas) -->
<?php $_smarty_tpl->_subTemplateRender("file:jsgenerales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--
En la plantilla siguiente se incluye el javascript para cargar el menu,
asociado al evento onload de la página. Si se quiere personalizar dicho evento,
debe escribirse la nueva función de javascript requerida y, dentro, invocar a
la función cargarMenu() existente, cambiando la respectiva etiqueta <body>.
-->
</head>
<body>

<?php $_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div align="center">
<img src="imagenes/f01.jpg" width="300" height="250" alt="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
" />
</div>

</body>
</html>
<?php }
}