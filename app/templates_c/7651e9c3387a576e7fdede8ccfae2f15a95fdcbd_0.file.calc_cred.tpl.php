<?php
/* Smarty version 4.1.0, created on 2022-03-13 11:53:58
  from 'B:\Documents K\xampp\htdocs\php_04_cred\app\calc_cred.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622dcd466c2c84_64007759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7651e9c3387a576e7fdede8ccfae2f15a95fdcbd' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_04_cred\\app\\calc_cred.tpl',
      1 => 1647168835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622dcd466c2c84_64007759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_435389749622dcd466b6577_04151611', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_744974820622dcd466b6ed0_80716018', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_435389749622dcd466b6577_04151611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_435389749622dcd466b6577_04151611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 PP. All rights reserved. Design: <a href="http://html5up.net">HTML5 UP</a><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_744974820622dcd466b6ed0_80716018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_744974820622dcd466b6ed0_80716018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <header>
        <h2>Kalkulator kredytowy</h2>
        <p>Wylicz swoją ratę</p>
    </header>


    <div class="row">
        <div class="col-12">

            <!-- Form -->
            <section class="box">

                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc_cred.php">
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-6 col-12-mobilep">
                            <input type="text" name="amt" id="amt" value="<?php echo $_smarty_tpl->tpl_vars['varArray']->value['amt'];?>
" placeholder="Kwota kredytu" />
                        </div>
                        <div class="col-6 col-12-mobilep">
                            <input type="text" name="yrs" id="yrs" value="<?php echo $_smarty_tpl->tpl_vars['varArray']->value['yrs'];?>
" placeholder="Liczba lat" />
                        </div>
                        <div class="col-6 col-12-mobilep">
                            <input type="text" name="rt" id="rt" value="<?php echo $_smarty_tpl->tpl_vars['varArray']->value['rt'];?>
" placeholder="Oprocentowanie" />
                        </div>



                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Oblicz ratę kredytu" /></li>
                                <li><input class="alt" type="reset" value="Resetuj"  /></li>
                            </ul>
                        </div>
                    </div>
                </form>

                <hr />

            </section>

        </div>
    </div>







    <div class="messages">

                <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
            <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
                <h4>Wystąpiły błędy: </h4>
                <ol class="err">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>
        <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
            <?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
                <h4>Informacje: </h4>
                <ol class="inf">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
            <h4>Wynik:</h4>
            <p class="res">
                <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zł
            </p>
        <?php }?>

    </div>

<?php
}
}
/* {/block 'content'} */
}
