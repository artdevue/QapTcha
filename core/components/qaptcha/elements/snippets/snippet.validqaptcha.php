<?php
/**
 * Created by JetBrains PhpStorm.
 * User: AtrDevue
 * Date: 12.11.12
 * Time: 20:46
 * To change this template use File | Settings | File Templates.
 */
if(isset($_POST['iQapTcha']) && empty($_POST['iQapTcha']) && isset($_SESSION['iQaptcha'])) return true;
return false;