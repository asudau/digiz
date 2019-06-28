<? if (sizeof($intranets) >1) : ?>
    <?= $this->render_partial('_partials/intranet_selector', array('intranets' => $intranets)) ?>
<? endif ?>


<style>

    #current_page_title {
        display: none;
    }    
    
#stream-container .activity-day {
    margin: 0 40% !important;
}    
    
iframe {
    height: 320px;
    width: 660px;
    margin-top: 19px;
    margin-left: 10px;
} 
    
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

/*foundation.css aus ohn layout plugin*/

*,*:before,*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html,body {
  font-size: 100%;
}



a:hover {
  cursor: pointer;
}

a:focus {
  outline: none;
}

img,object,embed {
  max-width: 100%;
  height: auto;
}

object,embed {
  height: 100%;
}

img {
  -ms-interpolation-mode: bicubic;
}

#map_canvas img,#map_canvas embed,#map_canvas object,.map_canvas img,.map_canvas embed,.map_canvas object {
  max-width: none !important;
}

.left {
  float: left !important;
}

.right {
  float: right !important;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

.text-justify {
  text-align: justify !important;
}

.hide {
  display: none;
}

.antialiased {
  -webkit-font-smoothing: antialiased;
}

img {
  display: inline-block;
  vertical-align: middle;
}

textarea {
  height: auto;
  min-height: 50px;
}

/*
select {
  width: 100%;
}
*/

.row {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 0;
  margin-bottom: 0;
  max-width: 70.75em;
  *zoom: 1;
}

.row:before,.row:after {
  content: " ";
  display: table;
}

.row:after {
  clear: both;
}

.row.collapse .column,.row.collapse .columns {
  position: relative;
  padding-left: 0;
  padding-right: 0;
  float: left;
}

.row .row {
  width: auto;
  margin-left: -0.625em;
  margin-right: -0.625em;
  margin-top: 0;
  margin-bottom: 0;
  max-width: none;
  *zoom: 1;
}

.row .row:before,.row .row:after {
  content: " ";
  display: table;
}

.row .row:after {
  clear: both;
}

.row .row.collapse {
  width: auto;
  margin: 0;
  max-width: none;
  *zoom: 1;
}

.row .row.collapse:before,.row .row.collapse:after {
  content: " ";
  display: table;
}

.row .row.collapse:after {
  clear: both;
}

.column,.columns {
  position: relative;
  padding-left: 0.625em;
  padding-right: 0.625em;
  width: 100%;
  float: left;
}

@media only screen {
  .column,.columns {
    position: relative;
    padding-left: 0.625em;
    padding-right: 0.625em;
    float: left;
  }

  .small-1 {
    position: relative;
    width: 8.333333%;
  }

  .small-2 {
    position: relative;
    width: 16.666667%;
  }

  .small-3 {
    position: relative;
    width: 25%;
  }

  .small-4 {
    position: relative;
    width: 33.333333%;
  }

  .small-5 {
    position: relative;
    width: 41.666667%;
  }

  .small-6 {
    position: relative;
    width: 50%;
  }

  .small-7 {
    position: relative;
    width: 58.333333%;
  }

  .small-8 {
    position: relative;
    width: 66.666667%;
  }

  .small-9 {
    position: relative;
    width: 75%;
  }

  .small-10 {
    position: relative;
    width: 83.333333%;
  }

  .small-11 {
    position: relative;
    width: 91.666667%;
  }

  .small-12 {
    position: relative;
    width: 100%;
  }

  .small-offset-0 {
    position: relative;
    margin-left: 0%;
  }

  .small-offset-1 {
    position: relative;
    margin-left: 8.333333%;
  }

  .small-offset-2 {
    position: relative;
    margin-left: 16.666667%;
  }

  .small-offset-3 {
    position: relative;
    margin-left: 25%;
  }

  .small-offset-4 {
    position: relative;
    margin-left: 33.333333%;
  }

  .small-offset-5 {
    position: relative;
    margin-left: 41.666667%;
  }

  .small-offset-6 {
    position: relative;
    margin-left: 50%;
  }

  .small-offset-7 {
    position: relative;
    margin-left: 58.333333%;
  }

  .small-offset-8 {
    position: relative;
    margin-left: 66.666667%;
  }

  .small-offset-9 {
    position: relative;
    margin-left: 75%;
  }

  .small-offset-10 {
    position: relative;
    margin-left: 83.333333%;
  }

  [class*="column"]+[class*="column"]:last-child {
    
  }

  [class*="column"]+[class*="column"].end {
    float: left;
  }

  .column.small-centered,.columns.small-centered {
    position: relative;
    margin-left: auto;
    margin-right: auto;
    float: none !important;
  }
}

@media only screen and (min-width: 660px) {
  .large-1 {
    position: relative;
    width: 8.333333%;
  }

  .large-2 {
    position: relative;
    width: 16.666667%;
  }

  .large-3 {
    position: relative;
    width: 25%;
  }

  .large-4 {
    position: relative;
    width: 33.333333%;
  }

  .large-5 {
    position: relative;
    width: 41.666667%;
  }

  .large-6 {
    position: relative;
    width: 50%;
  }

  .large-7 {
    position: relative;
    width: 58.333333%;
  }

  .large-8 {
    position: relative;
    width: 66.666667%;
  }

  .large-9 {
    position: relative;
    width: 75%;
  }

  .large-10 {
    position: relative;
    width: 83.333333%;
  }

  .large-11 {
    position: relative;
    width: 91.666667%;
  }

  .large-12 {
    position: relative;
    width: 100%;
  }

  .row .large-offset-0 {
    position: relative;
    margin-left: 0%;
  }

  .row .large-offset-1 {
    position: relative;
    margin-left: 8.333333%;
  }

  .row .large-offset-2 {
    position: relative;
    margin-left: 16.666667%;
  }

  .row .large-offset-3 {
    position: relative;
    margin-left: 25%;
  }

  .row .large-offset-4 {
    position: relative;
    margin-left: 33.333333%;
  }

  .row .large-offset-5 {
    position: relative;
    margin-left: 41.666667%;
  }

  .row .large-offset-6 {
    position: relative;
    margin-left: 50%;
  }

  .row .large-offset-7 {
    position: relative;
    margin-left: 58.333333%;
  }

  .row .large-offset-8 {
    position: relative;
    margin-left: 66.666667%;
  }

  .row .large-offset-9 {
    position: relative;
    margin-left: 75%;
  }

  .row .large-offset-10 {
    position: relative;
    margin-left: 83.333333%;
  }

  .row .large-offset-11 {
    position: relative;
    margin-left: 91.666667%;
  }

  .push-1 {
    position: relative;
    left: 8.333333%;
    right: auto;
  }

  .pull-1 {
    position: relative;
    right: 8.333333%;
    left: auto;
  }

  .push-2 {
    position: relative;
    left: 16.666667%;
    right: auto;
  }

  .pull-2 {
    position: relative;
    right: 16.666667%;
    left: auto;
  }

  .push-3 {
    position: relative;
    left: 25%;
    right: auto;
  }

  .pull-3 {
    position: relative;
    right: 25%;
    left: auto;
  }

  .push-4 {
    position: relative;
    left: 33.333333%;
    right: auto;
  }

  .pull-4 {
    position: relative;
    right: 33.333333%;
    left: auto;
  }

  .push-5 {
    position: relative;
    left: 41.666667%;
    right: auto;
  }

  .pull-5 {
    position: relative;
    right: 41.666667%;
    left: auto;
  }

  .push-6 {
    position: relative;
    left: 50%;
    right: auto;
  }

  .pull-6 {
    position: relative;
    right: 50%;
    left: auto;
  }

  .push-7 {
    position: relative;
    left: 58.333333%;
    right: auto;
  }

  .pull-7 {
    position: relative;
    right: 58.333333%;
    left: auto;
  }

  .push-8 {
    position: relative;
    left: 66.666667%;
    right: auto;
  }

  .pull-8 {
    position: relative;
    right: 66.666667%;
    left: auto;
  }

  .push-9 {
    position: relative;
    left: 75%;
    right: auto;
  }

  .pull-9 {
    position: relative;
    right: 75%;
    left: auto;
  }

  .push-10 {
    position: relative;
    left: 83.333333%;
    right: auto;
  }

  .pull-10 {
    position: relative;
    right: 83.333333%;
    left: auto;
  }

  .push-11 {
    position: relative;
    left: 91.666667%;
    right: auto;
  }

  .pull-11 {
    position: relative;
    right: 91.666667%;
    left: auto;
  }

  .column.large-centered,.columns.large-centered {
    position: relative;
    margin-left: auto;
    margin-right: auto;
    float: none !important;
  }

  .column.large-uncentered,.columns.large-uncentered {
    margin-left: 0;
    margin-right: 0;
    float: left !important;
  }

  .column.large-uncentered.opposite,.columns.large-uncentered.opposite {
    float: right !important;
  }
}

.show-for-small,.show-for-medium-down,.show-for-large-down {
  display: inherit !important;
}

.show-for-medium,.show-for-medium-up,.show-for-large,.show-for-large-up,.show-for-xlarge {
  display: none !important;
}

.hide-for-medium,.hide-for-medium-up,.hide-for-large,.hide-for-large-up,.hide-for-xlarge {
  display: inherit !important;
}

.hide-for-small,.hide-for-medium-down,.hide-for-large-down {
  display: none !important;
}

table.show-for-small,table.show-for-medium-down,table.show-for-large-down,table.hide-for-medium,table.hide-for-medium-up,table.hide-for-large,table.hide-for-large-up,table.hide-for-xlarge {
  display: table;
}

thead.show-for-small,thead.show-for-medium-down,thead.show-for-large-down,thead.hide-for-medium,thead.hide-for-medium-up,thead.hide-for-large,thead.hide-for-large-up,thead.hide-for-xlarge {
  display: table-header-group !important;
}

tbody.show-for-small,tbody.show-for-medium-down,tbody.show-for-large-down,tbody.hide-for-medium,tbody.hide-for-medium-up,tbody.hide-for-large,tbody.hide-for-large-up,tbody.hide-for-xlarge {
  display: table-row-group !important;
}

tr.show-for-small,tr.show-for-medium-down,tr.show-for-large-down,tr.hide-for-medium,tr.hide-for-medium-up,tr.hide-for-large,tr.hide-for-large-up,tr.hide-for-xlarge {
  display: table-row !important;
}

td.show-for-small,td.show-for-medium-down,td.show-for-large-down,td.hide-for-medium,td.hide-for-medium-up,td.hide-for-large,td.hide-for-large-up,td.hide-for-xlarge,th.show-for-small,th.show-for-medium-down,th.show-for-large-down,th.hide-for-medium,th.hide-for-medium-up,th.hide-for-large,th.hide-for-large-up,th.hide-for-xlarge {
  display: table-cell !important;
}

@media only screen and (min-width: 660px) {
  .show-for-medium,.show-for-medium-up {
    display: inherit !important;
  }

  .show-for-small {
    display: none !important;
  }

  .hide-for-small {
    display: inherit !important;
  }

  .hide-for-medium,.hide-for-medium-up {
    display: none !important;
  }

  table.show-for-medium,table.show-for-medium-up,table.hide-for-small {
    display: table;
  }

  thead.show-for-medium,thead.show-for-medium-up,thead.hide-for-small {
    display: table-header-group !important;
  }

  tbody.show-for-medium,tbody.show-for-medium-up,tbody.hide-for-small {
    display: table-row-group !important;
  }

  tr.show-for-medium,tr.show-for-medium-up,tr.hide-for-small {
    display: table-row !important;
  }

  td.show-for-medium,td.show-for-medium-up,td.hide-for-small,th.show-for-medium,th.show-for-medium-up,th.hide-for-small {
    display: table-cell !important;
  }
}

@media only screen and (min-width: 1280px) {
  .show-for-large,.show-for-large-up {
    display: inherit !important;
  }

  .show-for-medium,.show-for-medium-down {
    display: none !important;
  }

  .hide-for-medium,.hide-for-medium-down {
    display: inherit !important;
  }

  .hide-for-large,.hide-for-large-up {
    display: none !important;
  }

  table.show-for-large,table.show-for-large-up,table.hide-for-medium,table.hide-for-medium-down {
    display: table;
  }

  thead.show-for-large,thead.show-for-large-up,thead.hide-for-medium,thead.hide-for-medium-down {
    display: table-header-group !important;
  }

  tbody.show-for-large,tbody.show-for-large-up,tbody.hide-for-medium,tbody.hide-for-medium-down {
    display: table-row-group !important;
  }

  tr.show-for-large,tr.show-for-large-up,tr.hide-for-medium,tr.hide-for-medium-down {
    display: table-row !important;
  }

  td.show-for-large,td.show-for-large-up,td.hide-for-medium,td.hide-for-medium-down,th.show-for-large,th.show-for-large-up,th.hide-for-medium,th.hide-for-medium-down {
    display: table-cell !important;
  }
}

@media only screen and (min-width: 1440px) {
  .show-for-xlarge {
    display: inherit !important;
  }

  .show-for-large,.show-for-large-down {
    display: none !important;
  }

  .hide-for-large,.hide-for-large-down {
    display: inherit !important;
  }

  .hide-for-xlarge {
    display: none !important;
  }

  table.show-for-xlarge,table.hide-for-large,table.hide-for-large-down {
    display: table;
  }

  thead.show-for-xlarge,thead.hide-for-large,thead.hide-for-large-down {
    display: table-header-group !important;
  }

  tbody.show-for-xlarge,tbody.hide-for-large,tbody.hide-for-large-down {
    display: table-row-group !important;
  }

  tr.show-for-xlarge,tr.hide-for-large,tr.hide-for-large-down {
    display: table-row !important;
  }

  td.show-for-xlarge,td.hide-for-large,td.hide-for-large-down,th.show-for-xlarge,th.hide-for-large,th.hide-for-large-down {
    display: table-cell !important;
  }
}

.show-for-landscape,.hide-for-portrait {
  display: inherit !important;
}

.hide-for-landscape,.show-for-portrait {
  display: none !important;
}

table.hide-for-landscape,table.show-for-portrait {
  display: table;
}

thead.hide-for-landscape,thead.show-for-portrait {
  display: table-header-group !important;
}

tbody.hide-for-landscape,tbody.show-for-portrait {
  display: table-row-group !important;
}

tr.hide-for-landscape,tr.show-for-portrait {
  display: table-row !important;
}

td.hide-for-landscape,td.show-for-portrait,th.hide-for-landscape,th.show-for-portrait {
  display: table-cell !important;
}

@media only screen and (orientation: landscape) {
  .show-for-landscape,.hide-for-portrait {
    display: inherit !important;
  }

  .hide-for-landscape,.show-for-portrait {
    display: none !important;
  }

  table.show-for-landscape,table.hide-for-portrait {
    display: table;
  }

  thead.show-for-landscape,thead.hide-for-portrait {
    display: table-header-group !important;
  }

  tbody.show-for-landscape,tbody.hide-for-portrait {
    display: table-row-group !important;
  }

  tr.show-for-landscape,tr.hide-for-portrait {
    display: table-row !important;
  }

  td.show-for-landscape,td.hide-for-portrait,th.show-for-landscape,th.hide-for-portrait {
    display: table-cell !important;
  }
}

@media only screen and (orientation: portrait) {
  .show-for-portrait,.hide-for-landscape {
    display: inherit !important;
  }

  .hide-for-portrait,.show-for-landscape {
    display: none !important;
  }

  table.show-for-portrait,table.hide-for-landscape {
    display: table;
  }

  thead.show-for-portrait,thead.hide-for-landscape {
    display: table-header-group !important;
  }

  tbody.show-for-portrait,tbody.hide-for-landscape {
    display: table-row-group !important;
  }

  tr.show-for-portrait,tr.hide-for-landscape {
    display: table-row !important;
  }

  td.show-for-portrait,td.hide-for-landscape,th.show-for-portrait,th.hide-for-landscape {
    display: table-cell !important;
  }
}

.show-for-touch {
  display: none !important;
}

.hide-for-touch {
  display: inherit !important;
}

.touch .show-for-touch {
  display: inherit !important;
}

.touch .hide-for-touch {
  display: none !important;
}

table.hide-for-touch {
  display: table;
}

.touch table.show-for-touch {
  display: table;
}

thead.hide-for-touch {
  display: table-header-group !important;
}

.touch thead.show-for-touch {
  display: table-header-group !important;
}

tbody.hide-for-touch {
  display: table-row-group !important;
}

.touch tbody.show-for-touch {
  display: table-row-g
 roup !important;
}

tr.hide-for-touch {
  display: table-row !important;
}

.touch tr.show-for-touch {
  display: table-row !important;
}

td.hide-for-touch {
  display: table-cell !important;
}

.touch td.show-for-touch {
  display: table-cell !important;
}

th.hide-for-touch {
  display: table-cell !important;
}

.touch th.show-for-touch {
  display: table-cell !important;
}

@media only screen {
  [class*="block-grid-"] {
    display: block;
    padding: 0;
    margin: -0.625em;
    *zoom: 1;
  }

  [class*="block-grid-"]:before,[class*="block-grid-"]:after {
    content: " ";
    display: table;
  }

  [class*="block-grid-"]:after {
    clear: both;
  }

  [class*="block-grid-"]>li {
    display: inline;
    height: auto;
    float: left;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-1>li {
    width: 100%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-1>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-1>li:nth-of-type(1n+1) {
    clear: both;
  }

  .small-block-grid-2>li {
    width: 50%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-2>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-2>li:nth-of-type(2n+1) {
    clear: both;
  }

  .small-block-grid-3>li {
    width: 33.333333%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-3>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-3>li:nth-of-type(3n+1) {
    clear: both;
  }

  .small-block-grid-4>li {
    width: 25%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-4>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-4>li:nth-of-type(4n+1) {
    clear: both;
  }

  .small-block-grid-5>li {
    width: 20%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-5>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-5>li:nth-of-type(5n+1) {
    clear: both;
  }

  .small-block-grid-6>li {
    width: 16.666667%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-6>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-6>li:nth-of-type(6n+1) {
    clear: both;
  }

  .small-block-grid-7>li {
    width: 14.285714%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-7>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-7>li:nth-of-type(7n+1) {
    clear: both;
  }

  .small-block-grid-8>li {
    width: 12.5%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-8>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-8>li:nth-of-type(8n+1) {
    clear: both;
  }

  .small-block-grid-9>li {
    width: 11.111111%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-9>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-9>li:nth-of-type(9n+1) {
    clear: both;
  }

  .small-block-grid-10>li {
    width: 10%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-10>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-10>li:nth-of-type(10n+1) {
    clear: both;
  }

  .small-block-grid-11>li {
    width: 9.090909%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-11>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-11>li:nth-of-type(11n+1) {
    clear: both;
  }

  .small-block-grid-12>li {
    width: 8.333333%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-12>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-12>li:nth-of-type(12n+1) {
    clear: both;
  }
}

@media only screen and (min-width: 660px) {
  .small-block-grid-1>li:nth-of-type(1n+1) {
    clear: none;
  }

  .small-block-grid-2>li:nth-of-type(2n+1) {
    clear: none;
  }

  .small-block-grid-3>li:nth-of-type(3n+1) {
    clear: none;
  }

  .small-block-grid-4>li:nth-of-type(4n+1) {
    clear: none;
  }

  .small-block-grid-5>li:nth-of-type(5n+1) {
    clear: none;
  }

  .small-block-grid-6>li:nth-of-type(6n+1) {
    clear: none;
  }

  .small-block-grid-7>li:nth-of-type(7n+1) {
    clear: none;
  }

  .small-block-grid-8>li:nth-of-type(8n+1) {
    clear: none;
  }

  .small-block-grid-9>li:nth-of-type(9n+1) {
    clear: none;
  }

  .small-block-grid-10>li:nth-of-type(10n+1) {
    clear: none;
  }

  .small-block-grid-11>li:nth-of-type(11n+1) {
    clear: none;
  }

  .small-block-grid-12>li:nth-of-type(12n+1) {
    clear: none;
  }

  .large-block-grid-1>li {
    width: 100%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-1>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-1>li:nth-of-type(1n+1) {
    clear: both;
  }

  .large-block-grid-2>li {
    width: 50%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-2>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-2>li:nth-of-type(2n+1) {
    clear: both;
  }

  .large-block-grid-3>li {
    width: 33.333333%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-3>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-3>li:nth-of-type(3n+1) {
    clear: both;
  }

  .large-block-grid-4>li {
    width: 25%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-4>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-4>li:nth-of-type(4n+1) {
    clear: both;
  }

  .large-block-grid-5>li {
    width: 20%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-5>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-5>li:nth-of-type(5n+1) {
    clear: both;
  }

  .large-block-grid-6>li {
    width: 16.666667%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-6>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-6>li:nth-of-type(6n+1) {
    clear: both;
  }

  .large-block-grid-7>li {
    width: 14.285714%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-7>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-7>li:nth-of-type(7n+1) {
    clear: both;
  }

  .large-block-grid-8>li {
    width: 12.5%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-8>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-8>li:nth-of-type(8n+1) {
    clear: both;
  }

  .large-block-grid-9>li {
    width: 11.111111%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-9>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-9>li:nth-of-type(9n+1) {
    clear: both;
  }

  .large-block-grid-10>li {
    width: 10%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-10>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-10>li:nth-of-type(10n+1) {
    clear: both;
  }

  .large-block-grid-11>li {
    width: 9.090909%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-11>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-11>li:nth-of-type(11n+1) {
    clear: both;
  }

  .large-block-grid-12>li {
    width: 8.333333%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-12>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-12>li:nth-of-type(12n+1) {
    clear: both;
  }
}

p.lead {
  font-size: 1.21875em;
  line-height: 1.6;
}

.subheader {
  line-height: 1.4;
  color: #6f6f6f;
  font-weight: 300;
  margin-top: 0.2em;
  margin-bottom: 0.5em;
}

div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,p,blockquote,th,td {
  margin: 0;
  padding: 0;
  direction: ltr;
}

a {
  color: #2ba6cb;
  text-decoration: none;
  line-height: inherit;
}

a:hover,a:focus {
  color: #2795b6;
}

a img {
  border: none;
}

p {
  font-family: inherit;
  font-weight: normal;
  font-size: 1em;
  line-height: 1.6;
  margin-bottom: 1.25em;
  text-rendering: optimizeLegibility;
}

p aside {
  font-size: 0.875em;
  line-height: 1.35;
  font-style: italic;
}

h1,h2,h3,h4,h5,h6 {
  font-family: "Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif;
  font-weight: bold;
  font-style: normal;
  color: #222;
  text-rendering: optimizeLegibility;
  margin-top: 0.2em;
  margin-bottom: 0.5em;
  line-height: 1.2125em;
}

h1 small,h2 small,h3 small,h4 small,h5 small,h6 small {
  font-size: 60%;
  color: #6f6f6f;
  line-height: 0;
}

h1 {
  font-size: 2.125em;
}

h2 {
  font-size: 1.6875em;
}

h3 {
  font-size: 1.375em;
}

h4 {
  font-size: 1.125em;
}

h5 {
  font-size: 1.125em;
}

h6 {
  font-size: 1em;
}

hr {
  border: solid #ddd;
  border-width: 1px 0 0;
  clear: both;
  margin: 1.25em 0 1.1875em;
  height: 0;
}

em,i {
  font-style: italic;
  line-height: inherit;
}

strong,b {
  font-weight: bold;
  line-height: inherit;
}

small {
  font-size: 60%;
  line-height: inherit;
}

code {
  font-family: Consolas,"Liberation Mono",Courier,monospace;
  font-weight: bold;
  color: #7f0a0c;
}

ul,ol,dl {
  font-size: 1em;
  line-height: 1.6;
  margin-bottom: 1.25em;
  list-style-position: outside;
  font-family: inherit;
}

ul,ol {
  margin-left: 1.25em;
}

ul li ul,ul li ol {
  margin-left: 1.25em;
  margin-bottom: 0;
  font-size: 1em;
}

ul.square li ul,ul.circle li ul,ul.disc li ul {
  list-style: inherit;
}

ul.square {
  list-style-type: square;
}

ul.circle {
  list-style-type: circle;
}

ul.disc {
  list-style-type: disc;
}

ul.no-bullet {
  list-style: none;
}

ol li ul,ol li ol {
  margin-left: 1.25em;
  margin-bottom: 0;
}

dl dt {
  margin-bottom: 0.3em;
  font-weight: bold;
}

dl dd {
  margin-bottom: 0.75em;
}

abbr,acronym {
  text-transform: uppercase;
  font-size: 90%;
  color: #666;
  border-bottom: 1px dotted #ddd;
  cursor: help;
}

abbr {
  text-transform: none;
}

blockquote {
  margin: 0 0 1.25em;
  padding: 0.5625em 1.25em 0 1.1875em;
  border-left: 1px solid #ddd;
}

blockquote cite {
  display: block;
  font-size: 0.8125em;
  color: #555;
}

blockquote cite:before {
  content: "\2014 \0020";
}

blockquote cite a,blockquote cite a:visited {
  color: #555;
}

blockquote,blockquote p {
  line-height: 1.6;
  color: #6f6f6f;
}

.vcard {
  display: inline-block;
  margin: 0 0 1.25em 0;
  border: 1px solid #ddd;
  padding: 0.625em 0.75em;
}

.vcard li {
  margin: 0;
  display: block;
}

.vcard .fn {
  font-weight: bold;
  font-size: 0.9375em;
}

.vevent .summary {
  font-weight: bold;
}

.vevent abbr {
  cursor: default;
  text-decoration: none;
  font-weight: bold;
  border: none;
  padding: 0 0.0625em;
}

@media only screen and (min-width: 660px) {
  h1,h2,h3,h4,h5,h6 {
    line-height: 1.4;
  }

  h1 {
    font-size: 2.75em;
  }

  h2 {
    font-size: 2.3125em;
  }

  h3 {
    font-size: 1.6875em;
  }

  h4 {
    font-size: 1.4375em;
  }
}

.print-only {
  display: none !important;
}

@media print {
  * {
    background: transparent !important;
    color: #000 !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }

  a,a:visited {
    text-decoration: underline;
  }

  a[href]:after {
    content: " (" attr(href) ")";
  }

  abbr[title]:after {
    content: " (" attr(title) ")";
  }

  .ir a:after,a[href^="javascript:"]:after,a[href^="#"]:after {
    content: "";
  }

  pre,blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }

  thead {
    display: table-header-group;
  }

  tr,img {
    page-break-inside: avoid;
  }

  img {
    max-width: 100% !important;
  }@  page {
    margin: 0.5cm;
  }

  p,h2,h3 {
    orphans: 3;
    widows: 3;
  }

  h2,h3 {
    page-break-after: avoid;
  }

  .hide-on-print {
    display: none !important;
  }

  .print-only {
    display: block !important;
  }

  .hide-for-print {
    display: none !important;
  }

  .show-for-print {
    display: inherit !important;
  }
}

.flex-video {
  position: relative;
  padding-top: 1.5625em;
  padding-bottom: 67.5%;
  height: 0;
  margin-bottom: 1em;
  overflow: hidden;
}

.flex-video.widescreen {
  padding-bottom: 57.25%;
}

.flex-video.vimeo {
  padding-top: 0;
}

.flex-video iframe,.flex-video object,.flex-video embed,.flex-video video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.section-container,.section-container.auto {
  width: 100%;
  display: block;
  margin-bottom: 1.25em;
  border: 1px solid #ccc;
  border-top: none;
}

.section-container>section,.section-container>.section,.section-container.auto>section,.section-container.auto>.section {
  position: relative;
}

.section-container>section>.title,.section-container>.section>.title,.section-container.auto>section>.title,.section-container.auto>.section>.title {
  background-color: #efefef;
  cursor: pointer;
  margin-bottom: 0;
}

.section-container>section>.title a,.section-container>.section>.title a,.section-container.auto>section>.title a,.section-container.auto>.section>.title a {
  padding: 0.9375em;
  display: inline-block;
  color: #333;
  font-size: 0.875em;
  white-space: nowrap;
}

.section-container>section>.title:hover,.section-container>.section>.title:hover,.section-container.auto>section>.title:hover,.section-container.auto>.section>.title:hover {
  background-color: #e2e2e2;
}

.section-container>section .content,.section-container>.section .content,.section-container.auto>section .content,.section-container.auto>.section .content {
  display: none;
  padding: 0.9375em;
  background-color: #fff;
}

.section-container>section .content>*:last-child,.section-container>.section .content>*:last-child,.section-container.auto>section .content>*:last-child,.section-container.auto>.section .content>*:last-child {
  margin-bottom: 0;
}

.section-container>section .content>*:first-child,.section-container>.section .content>*:first-child,.section-container.auto>section .content>*:first-child,.section-container.auto>.section .content>*:first-child {
  padding-top: 0;
}

.section-container>section .content>*:last-child,.section-container>.section .content>*:last-child,.section-container.auto>section .content>*:last-child,.section-container.auto>.section .content>*:last-child {
  padding-bottom: 0;
}

.section-container>section.active>.content,.section-container>.section.active>.content,.section-container.auto>section.active>.content,.section-container.auto>.section.active>.content {
  display: block;
}

.section-container>section.active>.title,.section-container>.section.active>.title,.section-container.auto>section.active>.title,.section-container.auto>.section.active>.title {
  background: #d5d5d5;
}

.section-container>section.active>.title a,.section-container>.section.active>.title a,.section-container.auto>section.active>.title a,.section-container.auto>.section.active>.title a {
  color: #333;
}

.section-container>section>.title,.section-container>.section>.title,.section-container.auto>section>.title,.section-container.auto>.section>.title {
  top: 0;
  width: 100%;
  margin: 0;
  border-top: solid 1px #ccc;
}

.section-container>section>.title a,.section-container>.section>.title a,.section-container.auto>section>.title a,.section-container.auto>.section>.title a {
  width: 100%;
}

.section-container.tabs {
  border: 0;
  position: relative;
}

.section-container.tabs>section,.section-container.tabs>.section {
  border: 0;
  position: static;
}

.section-container.tabs>section>.title,.section-container.tabs>.section>.title {
  background-color: #efefef;
  cursor: pointer;
  margin-bottom: 0;
}

.section-container.tabs>section>.title a,.section-container.tabs>.section>.title a {
  padding: 0.9375em;
  display: inline-block;
  color: #333;
  font-size: 0.875em;
  white-space: nowrap;
}

.section-container.tabs>section>.title:hover,.section-container.tabs>.section>.title:hover {
  background-color: #e2e2e2;
}

.section-container.tabs>section .content,.section-container.tabs>.section .content {
  display: none;
  padding: 0.9375em;
  background-color: #fff;
}

.section-container.tabs>section .content>*:last-child,.section-container.tabs>.section .content>*:last-child {
  margin-bottom: 0;
}

.section-container.tabs>section .content>*:first-child,.section-container.tabs>.section .content>*:first-child {
  padding-top: 0;
}

.section-container.tabs>section .content>*:last-child,.section-container.tabs>.section .content>*:last-child {
  padding-bottom: 0;
}

.section-container.tabs>section.active>.content,.section-container.tabs>.section.active>.content {
  display: block;
}

.section-container.tabs>section.active>.title,.section-container.tabs>.section.active>.title {
  background: #fff;
}

.section-container.tabs>section.active>.title a,.section-container.tabs>.section.active>.title a {
  color: #333;
}

.section-container.tabs>section>.title,.section-container.tabs>.section>.title {
  width: auto;
  border: solid 1px #ccc;
  border-right: 0;
  border-bottom: 0;
  position: absolute;
  top: 0;
  z-index: 1;
}

.section-container.tabs>section>.title a,.section-container.tabs>.section>.title a {
  width: 100%;
}

.section-container.tabs>section:last-child .title,.section-container.tabs>.section:last-child .title {
  border-right: solid 1px #ccc;
}

.section-container.tabs>section .content,.section-container.tabs>.section .content {
  border: solid 1px #ccc;
  position: absolute;
  z-index: 10;
  display: none;
  top: -1px;
}

.section-container.tabs>section.active>.title,.section-container.tabs>.section.active>.title {
  z-index: 11;
  border-bottom: 0;
  background-color: #fff;
}

.section-container.tabs>section.active>.content,.section-container.tabs>.section.active>.content {
  position: relative;
}



</style>
<style> #start_page #start_kurse .list_item .info { position: absolute; display: inline-block; left: 14px; bottom: 10px; color: #5ea2bb; background-clip: padding-box; background-image: none; padding: 6px 22px 10px 35px; } #start_page #start_kurse .list_item .infobild { width: 30px; height: 30px; float: left; margin: 24px 0px 10px 9px; } /* Tooltip text */ .info .tooltiptext { visibility: hidden; width: 220px; background-color: black; color: #fff; text-align: center; padding: 5px 0; border-radius: 6px; /* Position the tooltip text - see examples below! */ position: absolute; z-index: 1; } /* Show the tooltip text when you mouse over the tooltip container */ .info:hover .tooltiptext { visibility: visible; } </style> 
<div id="start_page">  <div class="banner_inner"> 
<div style="text-align: left"> </div>

</div>

<section class="portal-boxen js-portalboxen">
	<div class="row">

        <div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url(<?=$plugin->getPluginURL().'/assets/images/business.jpg' ?>)" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Meine Kurse</h3>
					<p class="portal-boxendate"></p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">English For Your Studies B1</h3>
					<p class="portal-boxendate">09.04.2018-11.06.2018</p>
					<div class="portal-boxentext"><p>Unterstützt Sie bei der gezielten Auffrischung und Erweiterung von Lese- und Schreibfähigkeit in der englischen Sprache.<br>Dieser Kurs wird angeboten von der VHS Region Lüneburg.</p></div>
					<a href="/dispatch.php/my_courses" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
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
					<div class="portal-boxentext"><p>Stud.IP bietet ein eigenes internes Nachrichtensystem. Interne Nachrichten werden Ihnen zusätzlich per Mail weitergeleitet. Dies können Sie optional im Bereich Profil/Einstellungen anpassen. </p></div>
					<a href="<?=$GLOBALS['ABSOLUTE_URI_STUDIP']?>dispatch.php/messages/overview" type="submit" class="btn btn-primary portal-boxenbutton">weiter zu meinen Nachrichten <img src="http://localhost/studip3.4/public/assets/images/icons/lightblue/mail.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>


				<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url(<?=$plugin->getPluginURL().'/assets/images/people.jpg' ?>)" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Stud.IP für DozentInnen</h3>
					<p class="portal-boxendate"></p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">Mathematik für Wirtschaftswissenschaften</h3>
					<p class="portal-boxendate">28.05.2018-22.06.2018</p>
					<div class="portal-boxentext"><p>Jetzt wirds speziell! In diesem Kurs erwerben Sie gezielt mathematische Grundlagenkenntnisse für ein wirtschaftswissenschaftliches Studium.</p></div>
					<a href="<?=$GLOBALS['ABSOLUTE_URI_STUDIP']?>dispatch.php/messages/overview" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="<?=$plugin->getPluginURL().'/assets/images/icons/white/arr_1right.svg'?>"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>
		
    <div class="columns small-12 medium-6 large-4 portal-boxenouter">
        <div>
            <?= $this->render_partial($activities, compact('widget')) ?>
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
					<div class="portal-boxentext"><p>Keine Angst vor Hausarbeiten und Referaten! In dem Kurs HANDWERKSZEUG studieren machen Sie sich mit den wichtigsten Spielregeln vertraut.</p></div>
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