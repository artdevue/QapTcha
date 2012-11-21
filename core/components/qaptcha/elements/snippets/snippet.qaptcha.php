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
$modx->regClientCSS(MODX_SITE_URL.'assets/components/qaptcha/jquery/QapTcha.jquery.css');
$modx->regClientScript(MODX_SITE_URL.'assets/components/qaptcha/jquery/jquery-ui.js');
$modx->regClientScript(MODX_SITE_URL.'assets/components/qaptcha/jquery/jquery.ui.touch.js');
$modx->regClientScript(MODX_SITE_URL.'assets/components/qaptcha/jquery/QapTcha.jquery.js');
$modx->setPlaceholder('qaptcha.Slider', "<div class=\"QapTcha\"></div>");
$paramqaptcha = array();
$modx->getService('lexicon','modLexicon');
$modx->lexicon->load('qaptcha:default');
$txtLock = $modx->lexicon('qaptcha.lock');
$txtUnlock = $modx->lexicon('qaptcha.unlock');
if(!empty($disabledSubmit)) $paramqaptcha[] = 'disabledSubmit:'.$disabledSubmit;
$paramqaptcha[] = 'PHPfile: \''. MODX_SITE_URL. 'core/components/qaptcha/php/Qaptcha.jquery.php\'';
$paramqaptcha[] = 'txtLock:\''.$txtLock.'\'';
$paramqaptcha[] = 'txtUnlock:\''.$txtUnlock.'\'';
$paramqaptcha = implode(", ", $paramqaptcha);
$modx->regClientHTMLBlock('<script type="text/javascript">
		$(\'.QapTcha\').QapTcha({'.$paramqaptcha.'});
	</script>');