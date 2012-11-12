<?php
/**
 * Created by JetBrains PhpStorm.
 * User: AtrDevue
 * Date: 12.11.12
 * Time: 20:39
 * To change this template use File | Settings | File Templates.
 */

session_start();
$_SESSION['iQaptcha'] = false;
$modx->regClientCSS('/core/components/qaptcha/jquery/QapTcha.jquery.css');
$modx->regClientScript('/core/components/qaptcha/jquery/jquery.js');
$modx->regClientScript('/core/components/qaptcha/jquery/jquery-ui.js');
$modx->regClientScript('/core/components/qaptcha/jquery/jquery.ui.touch.js');
$modx->regClientScript('/core/components/qaptcha/jquery/QapTcha.jquery.js');
$modx->setPlaceholder('btQaptcha', "<div class=\"clr\"></div>\n<div id=\"QapTcha\"></div>");
$paramqaptcha = array();
if(!empty($disabledSubmit)) $paramqaptcha[] = 'disabledSubmit:'.$disabledSubmit;
if(!empty($txtLock)) $paramqaptcha[] = 'txtLock:\''.$txtLock.'\'';
if(!empty($txtUnlock)) $paramqaptcha[] = 'txtUnlock:\''.$txtUnlock.'\'';
$paramqaptcha = implode(", ", $paramqaptcha);
$modx->regClientHTMLBlock('<script type="text/javascript">
		$(\'#QapTcha\').QapTcha({'.$paramqaptcha.'});
	</script>');