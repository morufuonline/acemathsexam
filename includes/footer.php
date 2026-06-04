<script src="js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">

<div class="general-fade" style="display:none;"></div>

<?php if(empty(current_page("login"))){ ?><div class="copyright">Copyright &copy; <?php echo date("Y") . " " . $full_gen_name; ?>. All Rights Reserved.<br />Developed by: <a href="http://reliancewisdom.com" target="_blank">Reliance Wisdom Digital.</a></div><?php } ?>

<script type="text/javascript" src="js/general.js"></script>
</body>
<?php
$db->disconnect();
detectCurrUserBrowser('</td></tr></table>','',7); ?>
</html>