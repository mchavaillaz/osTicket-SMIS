<?php
$smisUrl = 'https://portal.smis.ch/changeLanguage.html?language=';
switch (Internationalization::getCurrentLanguage()) {
    case 'fr':
        $smisFullUrl = $smisUrl . 'fr';
        break;
    case 'de':
        $smisFullUrl = $smisUrl . 'de';
        break;
}
?>
<div class="footer">
	<table class="footer-table">
		<tr>
			<td style="text-align: center">
				<a href="<?php echo $smisFullUrl ?>" target="_blank" rel="noreferrer">
                    portal.smis.ch
				</a>
			</td>
		</tr>
	</table>
</div>
</body>
</html>
