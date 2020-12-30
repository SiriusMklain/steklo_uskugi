<? $daten = date('m/d/Y h:i', '12/30/2020 11:00');
$datek = date('m/d/Y h:i', '1/3/2021 10:00');
if date('m/d/Y h:i', time()) > $daten || date('m/d/Y h:i', time()) < $datek { ?>

								<p style="text-align: center;" class="work-time__text--close">Праздничные дни "ЗАКРЫТО"</p>
<? } ?>