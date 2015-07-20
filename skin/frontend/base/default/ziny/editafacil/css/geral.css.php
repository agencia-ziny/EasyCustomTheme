<?php
/**
 * Edita Fácil
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 *
 * @category   Ziny
 * @package    EditaFacil
 * @copyright  Copyright (c) 2015 Agência Ziny (www.agenciaziny.com.br)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     Agência Ziny <dev@agenciaziny.com.br>
 */
define('MAGENTO_ROOT', (dirname(__FILE__) . '../../../../../../../../'));

// Mage include
require_once MAGENTO_ROOT . 'app/Mage.php';

umask(0);
Mage::app();

// Get defines
//$definicoes = Mage::getStoreConfig('editafacil/geral');
//
//#$conteudo = Mage::getStoreConfig('editafacil/conteudo');
//
//#$cabecalho = Mage::getStoreConfig('editafacil/cabecalho');
//
//#$topo = Mage::getStoreConfig('editafacil/topo');
//
//#$menu = Mage::getStoreConfig('editafacil/menu');
//
//#$rodape = Mage::getStoreConfig('editafacil/rodape');
//
//$rodapes = Mage::getStoreConfig('editafacil/rodapes');
//
//$botoes = Mage::getStoreConfig('editafacil/botoes_global');
//
//$precos = Mage::getStoreConfig('editafacil/precos');
//
//$titulos = Mage::getStoreConfig('editafacil/titulos');
//
//$blocos = Mage::getStoreConfig('editafacil/blocos');
//
//$categorias = Mage::getStoreConfig('editafacil/categorias');
//
$editafacil = Mage::getStoreConfig('editafacil');

$lista = array('definicoes','conteudo','cabecalho','topo','menu','rodape','rodapes','botoes','precos','titulo','blocos','blocos','categorias');

foreach ($lista as $item){

    ${$item} = $editafacil[$item];
}

/*
 * Verifica se o conteúdo foi definido como "!importante"
 */
$importante = ($definicoes['importante'] == 1) ? ' !important' : '';

header("Content-type: text/css; charset: UTF-8");

?>
<?php if ($conteudo['fonte_familia']): ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $conteudo['fonte_familia']); ?>);
<?php endif;?>
<?php if ($cabecalho['fonte_familia']): ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $cabecalho['fonte_familia']); ?>);
<?php endif;?>
<?php if ($topo['fonte_familia']): ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $topo['fonte_familia']); ?>);
<?php endif;?>
<?php if ($menu['fonte_familia']): ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $menu['fonte_familia']); ?>);
<?php endif;?>
<?php if ($rodape['fonte_familia']): ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $rodape['fonte_familia']); ?>);
<?php endif;?>
<?php if ($rodapes['fonte_familia']): ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $rodapes['fonte_familia']); ?>);
<?php endif;?>
<?php if ($botoes['fonte_familia']): ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $botoes['fonte_familia']); ?>);
<?php endif;?>
<?php if ($precos['fonte_familia']): ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $precos['fonte_familia']); ?>);
<?php endif;?>
<?php if ($titulos['fonte_familia']): ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $titulos['fonte_familia']); ?>);
<?php endif;?>
<?php if ($blocos['fonte_familia']): ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $blocos['fonte_familia']); ?>);
<?php endif;?>
<?php if ($categorias['fonte_familia']): ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $categorias['fonte_familia']); ?>);
<?php endif;?>
body, button, input, select, table, textarea {
    <?php if ($conteudo['fonte_familia']):?>
    font-family: <?php echo $conteudo['fonte_familia'] . $importante; ?>;
    <?php endif;?>
    <?php if ($conteudo['fonte_cor']):?>
    color: #<?php echo $conteudo['fonte_cor'] . $importante; ?>;
    <?php endif;?>
    <?php if ($conteudo['fonte_tamanho']):?>
    font-size: <?php echo $conteudo['fonte_tamanho'] . $importante; ?>;
    <?php endif;?>
    <?php if ($conteudo['fonte_linha']):?>
    line-height: <?php echo $conteudo['fonte_linha'] . $importante; ?>;
    <?php endif;?>
}
body, .wrapper {
    <?php if ($conteudo['body_cor']):?>
    line-height: <?php echo $conteudo['body_cor'] . $importante; ?>;
    <?php endif;?>
}
a {
    <?php if ($conteudo['link_cor']):?>
    color: #<?php echo $conteudo['link_cor'] . $importante; ?>;
    <?php endif;?>
}
a:hover {
    <?php if ($conteudo['link_hover']):?>
    color: #<?php echo $conteudo['link_hover'] . $importante; ?>;
    <?php endif;?>
}
.header-container, .page-header {
    <?php if ($cabecalho['fundo']):?>
    background-color: #<?php echo $cabecalho['fundo'] . $importante; ?>;
    <?php endif;?>
    <?php if ($cabecalho['fonde']):?>
    color: #<?php echo $cabecalho['fonte'] . $importante; ?>;
    <?php endif;?>
    <?php if ($cabecalho['fonte_familia']):?>
    font-family: <?php echo $cabecalho['fonte_familia'] . $importante; ?>;
    <?php endif;?>
    <?php if ($cabecalho['fonte_tamanho']):?>
    font-size: <?php echo $cabecalho['fonte_tamanho'] . $importante; ?>;
    <?php endif;?>
    <?php if ($cabecalho['fonte_largura']):?>
    font-weight: <?php echo $cabecalho['fonte_largura'] . $importante; ?>;
    <?php endif;?>
    <?php if ($cabecalho['fonte_linha']):?>
    line-height: <?php echo $cabecalho['fonte_linha'] . $importante; ?>;
    <?php endif;?>
    <?php if ($cabecalho['fonte_tipo']):?>
    text-transform: <?php echo $cabecalho['fonte_tipo'] . $importante; ?>;
    <?php endif;?>
}
.header-container .top-bar {
    <?php if ($topo['fundo']):?>
    background: #<?php echo $topo['fundo'] . $importante; ?>;
    <?php endif;?>
}
.top-bar .top-links li a {
    <?php if ($topo['fundo']):?>
    color: #<?php echo $topo['fonte'] . $importante; ?>;
    <?php endif;?>
    <?php if ($topo['fonte_familia']):?>
    font-family: <?php echo $topo['fonte_familia'] . $importante; ?>;
    <?php endif;?>
    <?php if ($topo['fonte_tamanho']):?>
    font-size: <?php echo $topo['fonte_tamanho'] . $importante; ?>;
    <?php endif;?>
    <?php if ($topo['fonte_largura']):?>
    font-weight: <?php echo $topo['fonte_largura'] . $importante; ?>;
    <?php endif;?>
    <?php if ($topo['fonte_linha']):?>
    line-height: <?php echo $topo['fonte_linha'] . $importante; ?>;
    <?php endif;?>
    <?php if ($topo['fonte_tipo']):?>
    text-transform: <?php echo $topo['fonte_tipo'] . $importante; ?>;
    <?php endif;?>
}
.top-bar .top-links li a:hover {
    <?php if ($topo['fonte_hover']):?>
    color: #<?php echo $topo['fonte_hover'] . $importante; ?>;
    <?php endif;?>
}
.header-wrapper .main-nav, #header-nav {

}
.main-nav .menu > li > a {

}
.button, .link-wishlist, .link-compare, .cart-table .product-cart-actions .button, #co-shipping-method-form .buttons-set .button, .footer .button {
    <?php if ($botoes['fundo']):?>
    background-color: #<?php echo $botoes['fundo'] . $importante; ?>;
    <?php endif;?>
    <?php if ($botoes['fundo']):?>
    color: #<?php echo $botoes['fonte'] . $importante; ?>;
    <?php endif;?>
    <?php if ($botoes['fonte_familia']):?>
    font-family: <?php echo $botoes['fonte_familia'] . $importante; ?>;
    <?php endif;?>
    <?php if ($botoes['fonte_tamanho']):?>
    font-size: <?php echo $botoes['fonte_tamanho'] . $importante; ?>;
    <?php endif;?>
    <?php if ($botoes['fonte_largura']):?>
    font-weight: <?php echo $botoes['fonte_largura'] . $importante; ?>;
    <?php endif;?>
    <?php if ($botoes['fonte_linha']):?>
    line-height: <?php echo $botoes['fonte_linha'] . $importante; ?>;
    <?php endif;?>
    <?php if ($botoes['fonte_tipo']):?>
    text-transform: <?php echo $botoes['fonte_tipo'] . $importante; ?>;
    <?php endif;?>
    <?php if ($botoes['borda_raio']):?>
    -webkit-border-radius: <?php echo $botoes['borda_raio'] . $importante; ?>;
    <?php endif;?>
    <?php if ($botoes['borda_raio']):?>
    -moz-border-radius: <?php echo $botoes['borda_raio'] . $importante; ?>;
    <?php endif;?>
    <?php if ($botoes['borda_raio']):?>
    -o-border-radius: <?php echo $botoes['borda_raio'] . $importante; ?>;
    <?php endif;?>
    <?php if ($botoes['borda_raio']):?>
    border-radius: <?php echo $botoes['borda_raio'] . $importante; ?>;
    <?php endif;?>
}
.button:hover, .cart-table .product-cart-actions .button:hover, #co-shipping-method-form .buttons-set .button:hover, .footer .button:hover {
    <?php if ($botoes['fundo_hover']):?>
    background-color:#<?php echo $botoes['fundo_hover'] . $importante; ?>;
    <?php endif;?>
    <?php if ($botoes['fonte_hover']):?>
    color:#<?php echo $botoes['fonte_hover'] . $importante; ?>;
    <?php endif;?>
}
.products-grid .price-box {
    <?php if ($precos['fonte_tamanho']):?>
    text-align: <?php echo $precos['fonte_posicao'] . $importante; ?>;
    <?php endif;?>
}
.price-box .price {
    <?php if ($precos['fonte']):?>
    color: #<?php echo $precos['fonte'] . $importante; ?>;
    <?php endif;?>
    <?php if ($precos['fonte_tamanho']):?>
    font-size: <?php echo $precos['fonte_tamanho'] . $importante; ?>;
    <?php endif;?>
    <?php if ($precos['fonte_familia']):?>
    font-family: '<?php echo $precos['fonte_familia']; ?>'<?php echo $importante; ?>;
    <?php endif;?>
}
.price-box .price:hover {
    <?php if ($precos['fonte_hover']):?>
    color: #<?php echo $precos['fonte_hover'] . $importante; ?>;
    <?php endif;?>
}
.page-title h1, .page-title h2, .product-name h1, .product-name .h1 {
    <?php if ($titulos['fonte_tipo']):?>
    text-transform: <?php echo $titulos['fonte_tipo'] . $importante; ?>;
    <?php endif;?>
    <?php if ($titulos['fonte_tamanho']):?>
    font-size: <?php echo $titulos['fonte_tamanho'] . $importante; ?>;
    <?php endif;?>
    <?php if ($titulos['fonte_largura']):?>
    font-weight: <?php echo $titulos['fonte_largura'] . $importante; ?>;
    <?php endif;?>
    <?php if ($titulos['fonte']):?>
    color: #<?php echo $titulos['fonte'] . $importante; ?>;
    <?php endif;?>
    <?php if ($titulos['borda_cor']):?>
    border-bottom: 1px solid <?php echo $titulos['borda_cor'] . $importante; ?>;
    <?php endif;?>
    <?php if ($titulos['fonte_posicao']):?>
    text-align: <?php echo $titulos['fonte_posicao'] . $importante; ?>;
    <?php endif;?>
}
.page-title h1:hover, .page-title h2:hover, .product-name h1:hover, .product-name .h1:hover {
    <?php if ($titulos['fonte_hover']):?>
    color: #<?php echo $titulos['fonte_hover'] . $importante; ?>;
    <?php endif;?>
}
body:not(.customer-account) .block:first-child .block-title {
    <?php if ($blocos['fonte_posicao']):?>
    text-align: <?php echo $blocos['fonte_posicao'] . $importante; ?>;
    <?php endif;?>
}
.block-title h2, .block-title h3, .block-title strong {
    <?php if ($blocos['fonte']):?>
    color: #<?php echo $blocos['fonte'] . $importante; ?>;
    <?php endif;?>
    <?php if ($blocos['fonte_familia']):?>
    font-family: <?php echo $blocos['fonte_familia'] . $importante; ?>;
    <?php endif;?>
    <?php if ($blocos['fonte_tamanho']):?>
    font-size:  <?php echo $blocos['fonte_tamanho'] . $importante; ?>;
    <?php endif;?>
    <?php if ($blocos['fonte_largura']):?>
    font-weight: <?php echo $blocos['fonte_largura'] . $importante; ?>;
    <?php endif;?>
    <?php if ($blocos['fonte_hover']):?>
    font-style: <?php echo $blocos['fonte_hover'] . $importante; ?>;
    <?php endif;?>
    <?php if ($blocos['fonte_linha']):?>
    line-height: <?php echo $blocos['fonte_linha'] . $importante; ?>;
    <?php endif;?>
    <?php if ($blocos['fonte_tipo']):?>
    text-transform: <?php echo $blocos['fonte_tipo'] . $importante; ?>;
    <?php endif;?>
}
.block-layered-nav .block-content > dl > dt {
    <?php if ($categorias['fonte']):?>
    color: #<?php echo $categorias['fonte'] . $importante; ?>;
    <?php endif;?>
    <?php if ($categorias['fonte_familia']):?>
    font-family: <?php echo $categorias['fonte_familia'] . $importante; ?>;
    <?php endif;?>
    <?php if ($categorias['fonte_tamanho']):?>
    font-size: <?php echo $categorias['fonte_tamanho'] . $importante; ?>;
    <?php endif;?>
    <?php if ($categorias['fonte_largura']):?>
    font-weight: <?php echo $categorias['fonte_largura'] . $importante; ?>;
    <?php endif;?>
    <?php if ($categorias['fonte_linha']):?>
    line-height: <?php echo $categorias['fonte_linha'] . $importante; ?>;
    <?php endif;?>
    <?php if ($categorias['fonte_tipo']):?>
    text-transform: <?php echo $categorias['fonte_tipo'] . $importante; ?>;
    <?php endif;?>
    <?php if ($categorias['fonte_posicao']):?>
    text-align: <?php echo $categorias['fonte_posicao'] . $importante; ?>;
    <?php endif;?>
}