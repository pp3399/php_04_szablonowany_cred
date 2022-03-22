<?php
/* Smarty version 4.1.0, created on 2022-03-13 16:39:02
  from 'B:\Documents K\xampp\htdocs\php_04_cred\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622e1016bbbaf0_67933572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '747f521e333171725d25280b8b40e64e143ce070' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_04_cred\\templates\\main.tpl',
      1 => 1647170064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622e1016bbbaf0_67933572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
        Alpha by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
    <head>
        <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
               <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/style.css">

            <!-- Scripts -->
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/browser.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/breakpoints.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/util.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/main.js"><?php echo '</script'; ?>
>

    </head>

    <body class="is-preload">
        <div id="page-wrapper">

            <!-- Main -->
            <section id="main" class="container">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1332701874622e1016bb6542_04874604', 'content');
?>


            </section>

            <!-- Footer -->
            <footer id="footer">

                <ul class="copyright">
                    <p>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1050434332622e1016bbb153_03573079', 'footer');
?>

                    </p>
                </ul>
            </footer>

        </div>


    </body>
</html><?php }
/* {block 'content'} */
class Block_1332701874622e1016bb6542_04874604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1332701874622e1016bb6542_04874604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1050434332622e1016bbb153_03573079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1050434332622e1016bbb153_03573079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
