<? if (sizeof($intranets) >1) : ?>
    <?= $this->render_partial('_partials/intranet_selector', array('intranets' => $intranets)) ?>
<? endif ?>


<style>





</style>
<style> #start_page #start_kurse .list_item .info { position: absolute; display: inline-block; left: 14px; bottom: 10px; color: #5ea2bb; background-clip: padding-box; background-image: none; padding: 6px 22px 10px 35px; } #start_page #start_kurse .list_item .infobild { width: 30px; height: 30px; float: left; margin: 24px 0px 10px 9px; } /* Tooltip text */ .info .tooltiptext { visibility: hidden; width: 220px; background-color: black; color: #fff; text-align: center; padding: 5px 0; border-radius: 6px; /* Position the tooltip text - see examples below! */ position: absolute; z-index: 1; } /* Show the tooltip text when you mouse over the tooltip container */ .info:hover .tooltiptext { visibility: visible; } </style> 
<div id="start_page">  <div class="banner_inner"> 
<div style="text-align: left"> </div>

</div>

<section class="portal-boxen js-portalboxen">
	<h2 class="kursportal-h2 align-center"></h2>
	<div class="row">


		

<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url(<?=$plugin->getPluginURL().'/assets/images/business.jpg' ?>)" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Meine Kurse und Projekte</h3>
					<p class="portal-boxendate"></p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">English For Your Studies B1</h3>
					<p class="portal-boxendate">09.04.2018-11.06.2018</p>
					<div class="portal-boxentext"><p>Unterst�tzt Sie bei der gezielten Auffrischung und Erweiterung von Lese- und Schreibf�higkeit in der englischen Sprache.<br>Dieser Kurs wird angeboten von der VHS Region L�neburg.</p></div>
					<a href="https://vhs.lueneburg.de/kurse/kurssuche/kurs/Englisch-Online+English+For+Your+Studies+B1/nr/181-42000/bereich/details/#inhalt" type="submit" target='_blank' class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>


		<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url(<?=$plugin->getPluginURL().'/assets/images/coffee.png' ?>)" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Stud.IP Nachrichten</h3>
					<p class="portal-boxendate"></p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">Tipp: Stud.IP Nachrichten</h3>
					<p class="portal-boxendate"></p>
					<div class="portal-boxentext"><p>Stud.IP bietet ein eigenes internes Nachrichtensystem. Interne Nachrichten werden Ihnen zus�tzlich per Mail weitergeleitet. Dies k�nnen Sie optional im Bereich Profil/Einstellungen anpassen. </p></div>
					<a href="<?=$GLOBALS['ABSOLUTE_URI_STUDIP']?>dispatch.php/messages/overview" type="submit" class="btn btn-primary portal-boxenbutton">weiter zu meinen Nachrichten <img src="http://localhost/studip3.4/public/assets/images/icons/lightblue/mail.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>


				<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url(<?=$plugin->getPluginURL().'/assets/images/people.jpg' ?>)" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Stud.IP f�r DozentInnen</h3>
					<p class="portal-boxendate"></p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">Mathematik f�r Wirtschaftswissenschaften</h3>
					<p class="portal-boxendate">28.05.2018-22.06.2018</p>
					<div class="portal-boxentext"><p>Jetzt wirds speziell! In diesem Kurs erwerben Sie gezielt mathematische Grundlagenkenntnisse f�r ein wirtschaftswissenschaftliches Studium.</p></div>
					<a href="<?=$GLOBALS['ABSOLUTE_URI_STUDIP']?>dispatch.php/messages/overview" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="<?=$plugin->getPluginURL().'/assets/images/icons/white/arr_1right.svg'?>"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>
		
    <div class="columns small-12 medium-6 large-4 portal-boxenouter">
        <div class="portal-boxeninner" style="background-image: url(http://localhost/studip3.4/public/plugins_packages/asudau@elan-ev.de/VHSViewPlugin/images/banner.jpg)" onclick="changeclass(this);">

            <div class="portal-boxenintro">
                <h3 class="portal-boxenheadline">Die VHS Osnabr�ck bietet ihren Dozentinnen und Dozenten regelm��ig die Gelegenheit die Funktionen und Einsatzm�glichkeiten von Stud.IP in einer Schulung vor Ort kennenzulernen. Die n�chste Schulung findet am 13.02.2019 statt. Zus�tzlich stellen wir Ihnen verschiedene Vidoes und Anleitungen bereit um Stud.IP selbst zu erkunden. Viel Spa�!</h3>
                <p class="portal-boxendate"></p>
            </div>
            <div class="portal-boxenoverlay">
                <h3 class="portal-boxenheadline">Vom Beruf ins Studium</h3>
                <p class="portal-boxendate">20.08.2018-24.09.2018</p>
                <div class="portal-boxentext"><p>Sie spielen mit dem Gedanken, zu studieren? In diesem Orientierungskurs finden Sie Wege an die Hochschule und Unterst�tzung bei der Entscheidung f�r oder gegen ein Studium.</p></div>
                <a href="<?=$GLOBALS['ABSOLUTE_URI_STUDIP']?>dispatch.php/messages/overview" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
                <button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
            </div>

        </div>
    </div>        


        
<iframe src='https://www.youtube.com/embed/VAibAJquJSo'></iframe>


    <div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url(<?=$plugin->getPluginURL().'/assets/images/question-mark-small.jpg' ?>)" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Die wichtigsten Fragen und Antworten</h3>
					<p class="portal-boxendate"></p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">Zeit- und Selbstmanagement</h3>
					<p class="portal-boxendate">13.08.2018-14.09.2018</p>
					<div class="portal-boxentext"><p>Auch Erholung muss sein! Ein Studium und parallele Verpflichtungen erfordern eine gute Organisation. Lernen Sie die passenden Techniken kennen.</p></div>
					<a href="" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>


        <div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url(<?=$plugin->getPluginURL().'/assets/images/orientierung.jpg' ?>)" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Stud.IP erkunden</h3>
					<p class="portal-boxendate"></p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">HANDWERKSZEUG studieren</h3>
					<p class="portal-boxendate">10.09.2018-14.10.2018</p>
					<div class="portal-boxentext"><p>Keine Angst vor Hausarbeiten und Referaten! In dem Kurs �HANDWERKSZEUG studieren� machen Sie sich mit den wichtigsten Spielregeln vertraut.</p></div>
					<a href="" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
				</div>
			
			</div>
        </div>

    <div class="columns small-12 medium-6 large-4 portal-boxenouter">
        <div class="portal-boxeninner" style="background-image: url(http://localhost/studip3.4/public/plugins_packages/asudau@elan-ev.de/VHSViewPlugin/images/banner.jpg)" onclick="changeclass(this);">

            <div class="portal-boxenintro">
                <h3 class="portal-boxenheadline">Bei Fragen und W�nschen rund um Stud.IP helfen wir Ihnen gerne weiter:</h3>
                <p class="portal-boxendate">Albrechtk@osnabrueck.de</p>
            </div>
            <div class="portal-boxenoverlay">
                <h3 class="portal-boxenheadline">Vom Beruf ins Studium</h3>
                <p class="portal-boxendate">20.08.2018-24.09.2018</p>
                <div class="portal-boxentext"><p>Sie spielen mit dem Gedanken, zu studieren? In diesem Orientierungskurs finden Sie Wege an die Hochschule und Unterst�tzung bei der Entscheidung f�r oder gegen ein Studium.</p></div>
                <a href="" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
                <button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
            </div>

        </div>
    </div>    


</div>
</section>

<script>
function changeclass(element) {
overlay = element.getElementsByClassName("portal-boxenoverlay")[0];
element.classList.add("deactivated");
element.getElementsByClassName("portal-boxenintro")[0].classList.add("away");
overlay.style.display = "block";
overlay.classList.add("active");
} 

function changeBack(button) {
setTimeout(function(){element = button.closest(".portal-boxeninner");
element.classList.remove("deactivated");
element.getElementsByClassName("portal-boxenintro")[0].classList.remove("away");
overlay = element.getElementsByClassName("portal-boxenoverlay")[0];
overlay.style.display = "none";
overlay.classList.remove("active");}, 400 );
} 

</script>