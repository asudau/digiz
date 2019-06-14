<style>
.portal-boxenouter:nth-of-type(n+2) {
    margin-top: 1.15rem;
}
.portal-boxenouter:nth-of-type(2) {
    margin-top: 0;
}
.portal-boxenouter:nth-of-type(3) {
    margin-top: 0;
}
.portal-boxeninner {
    width: 100%;
    padding-top: 100%;
    position: relative;
    background-color: #eee;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    overflow: hidden;
}
.portal-boxentext p {
    color: #fff;
}
.portal-boxenclose {
    position: absolute;
    top: 1rem;
    right: 1rem;
    color: #fff;
    border: 0;
    padding: 0;
    display: block;
    background: 0 0;
    font-size: 1rem;
    z-index: 99;
}
.portal-boxeninner:hover {
    cursor: pointer;
}
.portal-boxenintro.away {
    opacity: 0;
}
.portal-boxenoverlay.active {
    opacity: 1;
    top: 0;
}
.portal-boxenintro {
    display: block;
    opacity: 1;
    position: absolute;
    bottom: 0;
    padding-top: 4rem;
    left: 0;
    right: 0;
    width: 100%;
    transition: top 150ms,opacity 150ms;
    padding: 1rem;
    background: -webkit-linear-gradient(top,transparent 0,rgba(0,0,0,.8) 100%);
}
.portal-boxenoverlay {
    opacity: 0;
    display: none;
    position: absolute;
    top: 10%;
    height: 100%;
    left: 0;
    right: 0;
    width: 100%;
    transition: opacity 150ms,top 150ms;
    padding: 1rem;
    background: -webkit-linear-gradient(top,rgba(0,0,0,.5) 0,rgba(0,0,0,.8) 100%);
}
.portal-boxenouter.small-12 {
 width:100% !important
}

@media (min-width:800px) {
 .portal-boxenouter.large-4 {
  width:33.3333% !important
 }
}
.portal-boxenheadline {
    color: #fff;
    font-weight: 600;
    font-size: 0.9rem;
    margin-bottom: 0;
    padding-right: 2rem;
}
.portal-boxendate {
    color: #fff;
    display: block;
    margin-top: 4px;
}
</style>
<style> #start_page #start_kurse .list_item .info { position: absolute; display: inline-block; left: 14px; bottom: 10px; color: #5ea2bb; background-clip: padding-box; background-image: none; padding: 6px 22px 10px 35px; } #start_page #start_kurse .list_item .infobild { width: 30px; height: 30px; float: left; margin: 24px 0px 10px 9px; } /* Tooltip text */ .info .tooltiptext { visibility: hidden; width: 220px; background-color: black; color: #fff; text-align: center; padding: 5px 0; border-radius: 6px; /* Position the tooltip text - see examples below! */ position: absolute; z-index: 1; } /* Show the tooltip text when you mouse over the tooltip container */ .info:hover .tooltiptext { visibility: visible; } </style> 
<div id="start_page">  <div class="banner_inner"> 
<div style="text-align: left"> <h1> Willkommen auf dem<br /> OHN-KursPortal! </h1> </div>

<div class="banner_logo"> <img src="/studip/plugins_packages/virtUOS/OHNLayout/assets/images/ohn-logo_portal.png"> </div> <h3 style="padding-top: 15px; padding-bottom: 20px;">Sie haben uns gefunden, weil Sie sich nach einer Zeit der</br> beruflichen Qualifikation für ein Studium interessieren und sich gut </br>auf die Anforderungen vorbereiten möchten!?</h3> </div>

<section class="portal-boxen js-portalboxen">
	<h2 class="kursportal-h2 align-center"></h2>
	<div class="row">


		

<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url('/kursinhalte/english_for_studies.jpg" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">English For Your Studies B1</h3>
					<p class="portal-boxendate">09.04.2018-11.06.2018</p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">English For Your Studies B1</h3>
					<p class="portal-boxendate">09.04.2018-11.06.2018</p>
					<div class="portal-boxentext"><p>Unterstützt Sie bei der gezielten Auffrischung und Erweiterung von Lese- und Schreibfähigkeit in der englischen Sprache.<br>Dieser Kurs wird angeboten von der VHS Region Lüneburg.</p></div>
					<a href="https://vhs.lueneburg.de/kurse/kurssuche/kurs/Englisch-Online+English+For+Your+Studies+B1/nr/181-42000/bereich/details/#inhalt" type="submit" target='_blank' class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="/assets/images/courses/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>


		<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url('/assets/images/courses/mathematik_ingenieurwissenschaften.480x480.jpg" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Mathematik für Ingenieurwissenschaften</h3>
					<p class="portal-boxendate">14.05.2018-01.07.2018</p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">Mathematik für Ingenieurwissenschaften</h3>
					<p class="portal-boxendate">14.05.2018-01.07.2018</p>
					<div class="portal-boxentext"><p>Auf dieses Fundament können Sie bauen! In diesem Kurs erwerben Sie das Grundgerüst für mathematische Verfahren in den Ingenieurwissenschaften.</p></div>
					<a href="http://ohn-kursportal.de/mathematik_fuer_ingenieurwissenschaften" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="/assets/images/courses/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>


				<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url('/assets/images/courses/mathematik_wirtschaftswissenschaften.480x480.jpg" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Mathematik für Wirtschaftswissenschaften</h3>
					<p class="portal-boxendate">28.05.2018-22.06.2018</p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">Mathematik für Wirtschaftswissenschaften</h3>
					<p class="portal-boxendate">28.05.2018-22.06.2018</p>
					<div class="portal-boxentext"><p>Jetzt wirds speziell! In diesem Kurs erwerben Sie gezielt mathematische Grundlagenkenntnisse für ein wirtschaftswissenschaftliches Studium.</p></div>
					<a href="http://ohn-kursportal.de/mathematik_fuer_wirtschaftswissenschaften" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="/assets/images/courses/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>
		

<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url('/assets/images/courses/zeitundselbstmanagement.png" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Zeit- und Selbstmanagement</h3>
					<p class="portal-boxendate">13.08.2018-14.09.2018</p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">Zeit- und Selbstmanagement</h3>
					<p class="portal-boxendate">13.08.2018-14.09.2018</p>
					<div class="portal-boxentext"><p>Auch Erholung muss sein! Ein Studium und parallele Verpflichtungen erfordern eine gute Organisation. Lernen Sie die passenden Techniken kennen.</p></div>
					<a href="http://ohn-kursportal.de/zeit_und_selbstmanagement" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="/assets/images/courses/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>


<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url('/assets/images/courses/beruf_ins_studium.480x480.jpg" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Vom Beruf ins Studium?</h3>
					<p class="portal-boxendate">20.08.2018-24.09.2018</p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">Vom Beruf ins Studium?</h3>
					<p class="portal-boxendate">20.08.2018-24.09.2018</p>
					<div class="portal-boxentext"><p>Sie spielen mit dem Gedanken, zu studieren? In diesem Orientierungskurs finden Sie Wege an die Hochschule und Unterstützung bei der Entscheidung für oder gegen ein Studium.</p></div>
					<a href="http://ohn-kursportal.de/vom_beruf_ins_studium" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="/assets/images/courses/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>




<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url('/assets/images/courses/handwerkszeug.480x480.jpg" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">HANDWERKSZEUG studieren</h3>
					<p class="portal-boxendate">10.09.2018-14.10.2018</p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">HANDWERKSZEUG studieren</h3>
					<p class="portal-boxendate">10.09.2018-14.10.2018</p>
					<div class="portal-boxentext"><p>Keine Angst vor Hausarbeiten und Referaten! In dem Kurs „HANDWERKSZEUG studieren“ machen Sie sich mit den wichtigsten Spielregeln vertraut.</p></div>
					<a href="http://ohn-kursportal.de/handwerkszeug_studieren" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="/assets/images/courses/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>


<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url('/assets/images/courses/mathematik_vorbereitungskurs.480x480.jpg" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Allgemeiner Vorbereitungskurs Mathematik</h3>
					<p class="portal-boxendate">15.10.2018-07.12.2018</p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">Allgemeiner Vorbereitungskurs Mathematik</h3>
					<p class="portal-boxendate">15.10.2018-07.12.2018</p>
					<div class="portal-boxentext"><p>Sektkelche, Zuckerhüte und exponierter Luxus?! In diesem Kurs wiederholen, vervollständigen und festigen Sie Ihre mathematischen Grundfertigkeiten und Rechentechniken.</p></div>
					<a href="http://ohn-kursportal.de/allgemeiner_vorbereitungskurs_mathematik" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="/assets/images/courses/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>



				<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url('/assets/images/courses/mathematik_informatik.480x480.jpg" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Mathematik zur Informatik</h3>
					<p class="portal-boxendate">15.10.2018-07.12.2018</p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">Mathematik zur Informatik</h3>
					<p class="portal-boxendate">15.10.2018-07.12.2018</p>
					<div class="portal-boxentext"><p>Kann Mathe diskret sein? Lernen Sie in diesem Kurs, wie Mathematik in einem Informatik-Studium zum Einsatz kommt.</p></div>
					<a href="http://ohn-kursportal.de/mathematik_zur_informatik" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="/assets/images/courses/close.png" alt="[X]"></button>
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