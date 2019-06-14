<? if (sizeof($intranets) >1) : ?>
    <?= $this->render_partial('_partials/intranet_selector', array('intranets' => $intranets)) ?>
<? endif ?>


<style>




@-webkit-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
  }
}

@-moz-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
  }
}

@-o-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
  }
}

.slideshow-wrapper {
  position: relative;
}

.slideshow-wrapper ul {
  list-style-type: none;
  margin: 0;
}

.slideshow-wrapper ul li,.slideshow-wrapper ul li .orbit-caption {
  display: none;
}

.slideshow-wrapper ul li:first-child {
  display: block;
}

.slideshow-wrapper .orbit-container {
  background-color: transparent;
}

.slideshow-wrapper .orbit-container li {
  display: block;
}

.slideshow-wrapper .orbit-container li .orbit-caption {
  display: block;
}

.preloader {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -20px;
  margin-left: -20px;
  border: solid 3px;
  border-color: #555 #fff;
  -webkit-border-radius: 1000px;
  border-radius: 1000px;
  -webkit-animation-name: rotate;
  -webkit-animation-duration: 1.5s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: rotate;
  -moz-animation-duration: 1.5s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -o-animation-name: rotate;
  -o-animation-duration: 1.5s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
  animation-name: rotate;
  animation-duration: 1.5s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

.orbit-container {
  overflow: hidden;
  width: 100%;
  position: relative;
  background: #f5f5f5;
}

.orbit-container .orbit-slides-container {
  list-style: none;
  margin: 0;
  padding: 0;
  position: relative;
}

.orbit-container .orbit-slides-container img {
  display: block;
}

.orbit-container .orbit-slides-container>* {
  position: relative;
  float: left;
  height: auto;
}

.orbit-container .orbit-slides-container>* .orbit-caption {
  position: absolute;
  bottom: 0;
  background-color: #000;
  background-color: rgba(0,0,0,0.6);
  color: #fff;
  width: 100%;
  padding: 10px 14px;
  font-size: 0.875em;
}

.orbit-container .orbit-slide-number {
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 12px;
  color: #fff;
  background: rgba(0,0,0,0);
}

.orbit-container .orbit-slide-number span {
  font-weight: 700;
  padding: 0.3125em;
}

.orbit-container .orbit-timer {
  position: absolute;
  top: 10px;
  right: 10px;
  height: 6px;
  width: 100px;
}

.orbit-container .orbit-timer .orbit-progress {
  height: 100%;
  background-color: #000;
  background-color: rgba(0,0,0,0.6);
  display: block;
  width: 0%;
}

.orbit-container .orbit-timer>span {
  display: none;
  position: absolute;
  top: 10px;
  right: 0px;
  width: 11px;
  height: 14px;
  border: solid 4px #000;
  border-top: none;
  border-bottom: none;
}

.orbit-container .orbit-timer.paused>span {
  right: -6px;
  top: 9px;
  width: 11px;
  height: 14px;
  border: inset 8px;
  border-right-style: solid;
  border-color: transparent transparent transparent #000;
}

.orbit-container:hover .orbit-timer>span {
  display: block;
}

.orbit-container .orbit-prev,.orbit-container .orbit-next {
  position: absolute;
  top: 50%;
  margin-top: -25px;
  background-color: #000;
  background-color: rgba(0,0,0,0.6);
  width: 50px;
  height: 60px;
  line-height: 50px;
  color: white;
  text-indent: -9999px !important;
}

.orbit-container .orbit-prev>span,.orbit-container .orbit-next>span {
  position: absolute;
  top: 50%;
  margin-top: -16px;
  display: block;
  width: 0;
  height: 0;
  border: inset 16px;
}

.orbit-container .orbit-prev {
  left: 0;
}

.orbit-container .orbit-prev>span {
  border-right-style: solid;
  border-color: transparent;
  border-right-color: #fff;
}

.orbit-container .orbit-prev:hover>span {
  border-right-color: #ccc;
}

.orbit-container .orbit-next {
  right: 0;
}

.orbit-container .orbit-next>span {
  border-color: transparent;
  border-left-style: solid;
  border-left-color: #fff;
  left: 50%;
  margin-left: -8px;
}

.orbit-container .orbit-next:hover>span {
  border-left-color: #ccc;
}

.orbit-bullets {
  margin: 0 auto 30px auto;
  overflow: hidden;
  position: relative;
  top: 10px;
}

.orbit-bullets li {
  display: block;
  width: 18px;
  height: 18px;
  background: #999;
  float: left;
  margin-right: 6px;
  border: solid 2px #222;
  -webkit-border-radius: 1000px;
  border-radius: 1000px;
}

.orbit-bullets li.active {
  background: #222;
}

.orbit-bullets li:last-child {
  margin-right: 0;
}

.touch .orbit-container .orbit-prev,.touch .orbit-container .orbit-next {
  display: none;
}

.touch .orbit-bullets {
  display: none;
}

@media only screen and (min-width: 660px) {
  .touch .orbit-container .orbit-prev,.touch .orbit-container .orbit-next {
    display: inherit;
  }

  .touch .orbit-bullets {
    display: block;
  }
}

.reveal-modal-bg {
  position: fixed;
  height: 100%;
  width: 100%;
  background: #000;
  background: rgba(0,0,0,0.45);
  z-index: 98;
  display: none;
  top: 0;
  left: 0;
}

.reveal-modal {
  visibility: hidden;
  display: none;
  position: absolute;
  left: 50%;
  z-index: 99;
  height: auto;
  margin-left: -40%;
  width: 80%;
  background-color: #fff;
  padding: 1.25em;
  border: solid 1px #666;
  -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.4);
  box-shadow: 0 0 10px rgba(0,0,0,0.4);
  top: 50px;
}

.reveal-modal .column,.reveal-modal .columns {
  min-width: 0;
}

.reveal-modal>:first-child {
  margin-top: 0;
}

.reveal-modal>:last-child {
  margin-bottom: 0;
}

.reveal-modal .close-reveal-modal {
  font-size: 1.375em;
  line-height: 1;
  position: absolute;
  top: 0.5em;
  right: 0.6875em;
  color: #aaa;
  font-weight: bold;
  cursor: pointer;
}

@media only screen and (min-width: 660px) {
  .reveal-modal {
    padding: 1.875em;
    top: 6.25em;
  }

  .reveal-modal.tiny {
    margin-left: -15%;
    width: 30%;
  }

  .reveal-modal.small {
    margin-left: -20%;
    width: 40%;
  }

  .reveal-modal.medium {
    margin-left: -30%;
    width: 60%;
  }

  .reveal-modal.large {
    margin-left: -35%;
    width: 70%;
  }

  .reveal-modal.xlarge {
    margin-left: -47.5%;
    width: 95%;
  }
}

@media print {
  .reveal-modal {
    background: #fff !important;
  }
}

.joyride-list {
  display: none;
}

.joyride-tip-guide {
  display: none;
  position: absolute;
  background: #000;
  color: #fff;
  z-index: 101;
  top: 0;
  left: 2.5%;
  font-family: inherit;
  font-weight: normal;
  width: 95%;
}

.lt-ie9 .joyride-tip-guide {
  max-width: 800px;
  left: 50%;
  margin-left: -400px;
}

.joyride-content-wrapper {
  width: 100%;
  padding: 1.125em 1.25em 1.5em;
}

.joyride-content-wrapper .button {
  margin-bottom: 0 !important;
}

.joyride-tip-guide .joyride-nub {
  display: block;
  position: absolute;
  left: 22px;
  width: 0;
  height: 0;
  border: inset 14px;
}

.joyride-tip-guide .joyride-nub.top {
  border-top-style: solid;
  border-color: #000;
  border-top-color: transparent !important;
  border-left-color: transparent !important;
  border-right-color: transparent !important;
  top: -28px;
}

.joyride-tip-guide .joyride-nub.bottom {
  border-bottom-style: solid;
  border-color: #000 !important;
  border-bottom-color: transparent !important;
  border-left-color: transparent !important;
  border-right-color: transparent !important;
  bottom: -28px;
}

.joyride-tip-guide .joyride-nub.right {
  right: -28px;
}

.joyride-tip-guide .joyride-nub.left {
  left: -28px;
}

.joyride-tip-guide h1,.joyride-tip-guide h2,.joyride-tip-guide h3,.joyride-tip-guide h4,.joyride-tip-guide h5,.joyride-tip-guide h6 {
  line-height: 1.25;
  margin: 0;
  font-weight: bold;
  color: #fff;
}

.joyride-tip-guide p {
  margin: 0 0 1.125em 0;
  font-size: 0.875em;
  line-height: 1.3;
}

.joyride-timer-indicator-wrap {
  width: 50px;
  height: 3px;
  border: solid 1px #555;
  position: absolute;
  right: 1.0625em;
  bottom: 1em;
}

.joyride-timer-indicator {
  display: block;
  width: 0;
  height: inherit;
  background: #666;
}

.joyride-close-tip {
  position: absolute;
  right: 12px;
  top: 10px;
  color: #777 !important;
  text-decoration: none;
  font-size: 30px;
  font-weight: normal;
  line-height: .5 !important;
}

.joyride-close-tip:hover,.joyride-close-tip:focus {
  color: #eee !important;
}

.joyride-modal-bg {
  position: fixed;
  height: 100%;
  width: 100%;
  background: transparent;
  background: rgba(0,0,0,0.5);
  z-index: 100;
  display: none;
  top: 0;
  left: 0;
  cursor: pointer;
}

.joyride-expose-wrapper {
  background-color: #ffffff;
  position: absolute;
  border-radius: 3px;
  z-index: 102;
  -moz-box-shadow: 0px 0px 30px #ffffff;
  -webkit-box-shadow: 0px 0px 15px #ffffff;
  box-shadow: 0px 0px 15px #ffffff;
}

.joyride-expose-cover {
  background: transparent;
  border-radius: 3px;
  position: absolute;
  z-index: 9999;
  top: 0px;
  left: 0px;
}

@media only screen and (min-width: 660px) {
  .joyride-tip-guide {
    width: 300px;
    left: inherit;
  }

  .joyride-tip-guide .joyride-nub.bottom {
    border-color: #000 !important;
    border-bottom-color: transparent !important;
    border-left-color: transparent !important;
    border-right-color: transparent !important;
    bottom: -28px;
  }

  .joyride-tip-guide .joyride-nub.right {
    border-color: #000 !important;
    border-top-color: transparent !important;
    border-right-color: transparent !important;
    border-bottom-color: transparent !important;
    top: 22px;
    left: auto;
    right: -28px;
  }

  .joyride-tip-guide .joyride-nub.left {
    border-color: #000 !important;
    border-top-color: transparent !important;
    border-left-color: transparent !important;
    border-bottom-color: transparent !important;
    top: 22px;
    left: -28px;
    right: auto;
  }
}

[data-clearing] {
  *zoom: 1;
  margin-bottom: 0;
  list-style: none;
}

[data-clearing]:before,[data-clearing]:after {
  content: " ";
  display: table;
}

[data-clearing]:after {
  clear: both;
}

[data-clearing] li {
  float: left;
  margin-right: 10px;
}

.clearing-blackout {
  background: #111;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 998;
}

.clearing-blackout .clearing-close {
  display: block;
}

.clearing-container {
  position: relative;
  z-index: 998;
  height: 100%;
  overflow: hidden;
  margin: 0;
}

.visible-img {
  height: 95%;
  position: relative;
}

.visible-img img {
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -50%;
  max-height: 100%;
  max-width: 100%;
}

.clearing-caption {
  color: #fff;
  line-height: 1.3;
  margin-bottom: 0;
  text-align: center;
  bottom: 0;
  background: #111;
  width: 100%;
  padding: 10px 30px;
  position: absolute;
  left: 0;
}

.clearing-close {
  z-index: 999;
  padding-left: 20px;
  padding-top: 10px;
  font-size: 40px;
  line-height: 1;
  color: #fff;
  display: none;
}

.clearing-close:hover,.clearing-close:focus {
  color: #ccc;
}

.clearing-assembled .clearing-container {
  height: 100%;
}

.clearing-assembled .clearing-container .carousel>ul {
  display: none;
}

.clearing-feature li {
  display: none;
}

.clearing-feature li.clearing-featured-img {
  display: block;
}

@media only screen and (min-width: 660px) {
  .clearing-main-prev,.clearing-main-next {
    position: absolute;
    height: 100%;
    width: 40px;
    top: 0;
  }

  .clearing-main-prev>span,.clearing-main-next>span {
    position: absolute;
    top: 50%;
    display: block;
    width: 0;
    height: 0;
    border: solid 16px;
  }

  .clearing-main-prev {
    left: 0;
  }

  .clearing-main-prev>span {
    left: 5px;
    border-color: transparent;
    border-right-color: #fff;
  }

  .clearing-main-next {
    right: 0;
  }

  .clearing-main-next>span {
    border-color: transparent;
    border-left-color: #fff;
  }

  .clearing-main-prev.disabled,.clearing-main-next.disabled {
    opacity: 0.5;
  }

  .clearing-assembled .clearing-container .carousel {
    background: #111;
    height: 150px;
    margin-top: 5px;
  }

  .clearing-assembled .clearing-container .carousel>ul {
    display: block;
    z-index: 999;
    width: 200%;
    height: 100%;
    margin-left: 0;
    position: relative;
    left: 0;
  }

  .clearing-assembled .clearing-container .carousel>ul li {
    display: block;
    width: 175px;
    height: inherit;
    padding: 0;
    float: left;
    overflow: hidden;
    margin-right: 1px;
    position: relative;
    cursor: pointer;
    opacity: 0.4;
  }

  .clearing-assembled .clearing-container .carousel>ul li.fix-height img {
    min-height: 100%;
    height: 100%;
    max-width: none;
  }

  .clearing-assembled .clearing-container .carousel>ul li a.th {
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    display: block;
  }

  .clearing-assembled .clearing-container .carousel>ul li img {
    cursor: pointer !important;
    min-width: 100% !important;
  }

  .clearing-assembled .clearing-container .carousel>ul li.visible {
    opacity: 1;
  }

  .clearing-assembled .clearing-container .visible-img {
    background: #111;
    overflow: hidden;
    height: 75%;
  }

  .clearing-close {
    position: absolute;
    top: 10px;
    right: 20px;
    padding-left: 0;
    padding-top: 0;
  }
}

.alert-box {
  border-style: solid;
  border-width: 1px;
  display: block;
  font-weight: bold;
  margin-bottom: 1.25em;
  position: relative;
  padding: 0.6875em 1.3125em 0.75em 0.6875em;
  font-size: 0.875em;
  background-color: #2ba6cb;
  border-color: #2284a1;
  color: #fff;
}

.alert-box .close {
  font-size: 1.375em;
  padding: 5px 4px 4px;
  line-height: 0;
  position: absolute;
  top: 0.4375em;
  right: 0.3125em;
  color: #333;
  opacity: 0.3;
}

.alert-box .close:hover,.alert-box .close:focus {
  opacity: 0.5;
}

.alert-box.radius {
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.alert-box.round {
  -webkit-border-radius: 1000px;
  border-radius: 1000px;
}

.alert-box.success {
  background-color: #5da423;
  border-color: #457a1a;
  color: #fff;
}

.alert-box.alert {
  background-color: #c60f13;
  border-color: #970b0e;
  color: #fff;
}

.alert-box.secondary {
  background-color: #e9e9e9;
  border-color: #d0d0d0;
  color: #505050;
}

.breadcrumbs {
  display: block;
  padding: 0.5625em 0.875em 0.5625em;
  overflow: hidden;
  margin-left: 0;
  list-style: none;
  border-style: solid;
  border-width: 1px;
  background-color: #f6f6f6;
  border-color: #dcdcdc;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.breadcrumbs>* {
  margin: 0;
  float: left;
  font-size: 0.6875em;
  text-transform: uppercase;
  color: #2ba6cb;
}

.breadcrumbs>*:hover a,.breadcrumbs>*:focus a {
  text-decoration: underline;
}

.breadcrumbs>* a,.breadcrumbs>* span {
  text-transform: uppercase;
  color: #2ba6cb;
}

.breadcrumbs>*.current {
  cursor: default;
  color: #333;
}

.breadcrumbs>*.current a {
  cursor: default;
  color: #333;
}

.breadcrumbs>*.current:hover,.breadcrumbs>*.current:hover a,.breadcrumbs>*.current:focus,.breadcrumbs>*.current:focus a {
  text-decoration: none;
}

.breadcrumbs>*.unavailable {
  color: #999;
}

.breadcrumbs>*.unavailable a {
  color: #999;
}

.breadcrumbs>*.unavailable:hover,.breadcrumbs>*.unavailable:hover a,.breadcrumbs>*.unavailable:focus,.breadcrumbs>*.unavailable a:focus {
  text-decoration: none;
  color: #999;
  cursor: default;
}

.breadcrumbs>*:before {
  content: "/";
  color: #aaa;
  margin: 0 0.75em;
  position: relative;
  top: 1px;
}

.breadcrumbs>*:first-child:before {
  content: " ";
  margin: 0;
}

.keystroke,kbd {
  background-color: #ededed;
  border-color: #dbdbdb;
  color: #222;
  border-style: solid;
  border-width: 1px;
  margin: 0;
  font-family: "Consolas","Menlo","Courier",monospace;
  font-size: 0.875em;
  padding: 0.125em 0.25em 0em;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.label {
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  line-height: 1;
  white-space: nowrap;
  display: inline-block;
  position: relative;
  padding: 0.1875em 0.625em 0.25em;
  font-size: 0.875em;
  background-color: #2ba6cb;
  color: #fff;
}

.label.radius {
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.label.round {
  -webkit-border-radius: 1000px;
  border-radius: 1000px;
}

.label.alert {
  background-color: #c60f13;
  color: #fff;
}

.label.success {
  background-color: #5da423;
  color: #fff;
}

.label.secondary {
  background-color: #e9e9e9;
  color: #333;
}

.inline-list {
  margin: 0 auto 1.0625em auto;
  margin-left: -1.375em;
  margin-right: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
}

.inline-list>li {
  list-style: none;
  float: left;
  margin-left: 1.375em;
  display: block;
}

.inline-list>li>* {
  display: block;
}

.pagination {
  display: block;
  height: 1.5em;
  margin-left: -0.3125em;
}

.pagination li {
  display: block;
  float: left;
  height: 1.5em;
  color: #222;
  font-size: 0.875em;
  margin-left: 0.3125em;
}

.pagination li a {
  display: block;
  padding: 0.0625em 0.4375em 0.0625em;
  color: #999;
}

.pagination li:hover a,.pagination li a:focus {
  background: #e6e6e6;
}

.pagination li.unavailable a {
  cursor: default;
  color: #999;
}

.pagination li.unavailable:hover a,.pagination li.unavailable a:focus {
  background: transparent;
}

.pagination li.current a {
  background: #2ba6cb;
  color: #fff;
  font-weight: bold;
  cursor: default;
}

.pagination li.current a:hover,.pagination li.current a:focus {
  background: #2ba6cb;
}

.pagination-centered {
  text-align: center;
}

.pagination-centered ul>li {
  float: none;
  display: inline-block;
}

.panel {
  border-style: solid;
  border-width: 1px;
  border-color: #d9d9d9;
  margin-bottom: 1.25em;
  padding: 1.25em;
  background: #f2f2f2;
}

.panel h1,.panel h2,.panel h3,.panel h4,.panel h5,.panel h6,.panel p {
  color: #333;
}

.panel>:first-child {
  margin-top: 0;
}

.panel>:last-child {
  margin-bottom: 0;
}

.panel h1,.panel h2,.panel h3,.panel h4,.panel h5,.panel h6 {
  line-height: 1;
  margin-bottom: 0.625em;
}

.panel h1.subheader,.panel h2.subheader,.panel h3.subheader,.panel h4.subheader,.panel h5.subheader,.panel h6.subheader {
  line-height: 1.4;
}

.panel.callout {
  border-style: solid;
  border-width: 1px;
  border-color: #2284a1;
  margin-bottom: 1.25em;
  padding: 1.25em;
  background: #2ba6cb;
  -webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.5) inset;
  box-shadow: 0 1px 0 rgba(255,255,255,0.5) inset;
}

.panel.callout h1,.panel.callout h2,.panel.callout h3,.panel.callout h4,.panel.callout h5,.panel.callout h6,.panel.callout p {
  color: #fff;
}

.panel.callout>:first-child {
  margin-top: 0;
}

.panel.callout>:last-child {
  margin-bottom: 0;
}

.panel.callout h1,.panel.callout h2,.panel.callout h3,.panel.callout h4,.panel.callout h5,.panel.callout h6 {
  line-height: 1;
  margin-bottom: 0.625em;
}

.panel.callout h1.subheader,.panel.callout h2.subheader,.panel.callout h3.subheader,.panel.callout h4.subheader,.panel.callout h5.subheader,.panel.callout h6.subheader {
  line-height: 1.4;
}

.panel.radius {
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.pricing-table {
  border: solid 1px #ddd;
  margin-left: 0;
  margin-bottom: 1.25em;
}

.pricing-table * {
  list-style: none;
  line-height: 1;
}

.pricing-table .title {
  background-color: #ddd;
  padding: 0.9375em 1.25em;
  text-align: center;
  color: #333;
  font-weight: bold;
  font-size: 1em;
}

.pricing-table .price {
  background-color: #eee;
  padding: 0.9375em 1.25em;
  text-align: center;
  color: #333;
  font-weight: normal;
  font-size: 1.25em;
}

.pricing-table .description {
  background-color: #fff;
  padding: 0.9375em;
  text-align: center;
  color: #777;
  font-size: 0.75em;
  font-weight: normal;
  line-height: 1.4;
  border-bottom: dotted 1px #ddd;
}

.pricing-table .bullet-item {
  background-color: #fff;
  padding: 0.9375em;
  text-align: center;
  color: #333;
  font-size: 0.875em;
  font-weight: normal;
  border-bottom: dotted 1px #ddd;
}

.pricing-table .cta-button {
  background-color: #f5f5f5;
  text-align: center;
  padding: 1.25em 1.25em 0;
}

.progress {
  background-color: transparent;
  height: 1.5625em;
  border: 1px solid #ccc;
  padding: 0.125em;
  margin-bottom: 0.625em;
}

.progress .meter {
  background: #2ba6cb;
  height: 100%;
  display: block;
}

.progress.secondary .meter {
  background: #e9e9e9;
  height: 100%;
  display: block;
}

.progress.success .meter {
  background: #5da423;
  height: 100%;
  display: block;
}

.progress.alert .meter {
  background: #c60f13;
  height: 100%;
  display: block;
}

.progress.radius {
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.progress.radius .meter {
  -webkit-border-radius: 2px;
  border-radius: 2px;
}

.progress.round {
  -webkit-border-radius: 1000px;
  border-radius: 1000px;
}

.progress.round .meter {
  -webkit-border-radius: 999px;
  border-radius: 999px;
}

@media only screen {
  div.switch {
    position: relative;
    width: 100%;
    padding: 0;
    display: block;
    overflow: hidden;
    border-style: solid;
    border-width: 1px;
    margin-bottom: 1.25em;
    -webkit-animation: webkitSiblingBugfix infinite 1s;
    height: 36px;
    background: #fff;
    border-color: #ccc;
  }

  div.switch label {
    position: relative;
    left: 0;
    z-index: 2;
    float: left;
    width: 50%;
    height: 100%;
    margin: 0;
    font-weight: bold;
    text-align: left;
    -webkit-transition: all 0.1s ease-out;
    -moz-transition: all 0.1s ease-out;
    transition: all 0.1s ease-out;
  }

  div.switch input {
    position: absolute;
    z-index: 3;
    opacity: 0;
    width: 100%;
    height: 100%;
    -moz-appearance: none;
  }

  div.switch input:hover,div.switch input:focus {
    cursor: pointer;
  }

  div.switch>span {
    position: absolute;
    top: -1px;
    left: -1px;
    z-index: 1;
    display: block;
    padding: 0;
    border-width: 1px;
    border-style: solid;
    -webkit-transition: all 0.1s ease-out;
    -moz-transition: all 0.1s ease-out;
    transition: all 0.1s ease-out;
  }

  div.switch input:not(:checked)+label {
    opacity: 0;
  }

  div.switch input:checked {
    display: none !important;
  }

  div.switch input {
    left: 0;
    display: block !important;
  }

  div.switch input:first-of-type+label,div.switch input:first-of-type+span+label {
    left: -50%;
  }

  div.switch input:first-of-type:checked+label,div.switch input:first-of-type:checked+span+label {
    left: 0%;
  }

  div.switch input:last-of-type+label,div.switch input:last-of-type+span+label {
    right: -50%;
    left: auto;
    text-align: right;
  }

  div.switch input:last-of-type:checked+label,div.switch input:last-of-type:checked+span+label {
    right: 0%;
    left: auto;
  }

  div.switch span.custom {
    display: none !important;
  }

  div.switch label {
    padding: 0 0.375em;
    line-height: 2.3em;
    font-size: 0.875em;
  }

  div.switch input:first-of-type:checked ~ span {
    left: 100%;
    margin-left: -2.1875em;
  }

  div.switch>span {
    width: 2.25em;
    height: 2.25em;
  }

  div.switch>span {
    border-color: #b3b3b3;
    background: #fff;
    background: -moz-linear-gradient(top, #fff 0%, #f2f2f2 100%);
    background: -webkit-linear-gradient(top, #fff 0%, #f2f2f2 100%);
    background: linear-gradient(to bottom, #fff 0%, #f2f2f2 100%);
    -webkit-box-shadow: 2px 0 10px 0 rgba(0,0,0,0.07),1000px 0 0 1000px #e1f5d1,-2px 0 10px 0 rgba(0,0,0,0.07),-1000px 0 0 1000px #f5f5f5;
    box-shadow: 2px 0 10px 0 rgba(0,0,0,0.07),1000px 0 0 980px #e1f5d1,-2px 0 10px 0 rgba(0,0,0,0.07),-1000px 0 0 1000px #f5f5f5;
  }

  div.switch:hover>span,div.switch:focus>span {
    background: #fff;
    background: -moz-linear-gradient(top, #fff 0%, #e6e6e6 100%);
    background: -webkit-linear-gradient(top, #fff 0%, #e6e6e6 100%);
    background: linear-gradient(to bottom, #fff 0%, #e6e6e6 100%);
  }

  div.switch:active {
    background: transparent;
  }

  div.switch.large {
    height: 44px;
  }

  div.switch.large label {
    padding: 0 0.375em;
    line-height: 2.3em;
    font-size: 1.0625em;
  }

  div.switch.large input:first-of-type:checked ~ span {
    left: 100%;
    margin-left: -2.6875em;
  }

  div.switch.large>span {
    width: 2.75em;
    height: 2.75em;
  }

  div.switch.small {
    height: 28px;
  }

  div.switch.small label {
    padding: 0 0.375em;
    line-height: 2.1em;
    font-size: 0.75em;
  }

  div.switch.small input:first-of-type:checked ~ span {
    left: 100%;
    margin-left: -1.6875em;
  }

  div.switch.small>span {
    width: 1.75em;
    height: 1.75em;
  }

  div.switch.tiny {
    height: 22px;
  }

  div.switch.tiny label {
    padding: 0 0.375em;
    line-height: 1.9em;
    font-size: 0.6875em;
  }

  div.switch.tiny input:first-of-type:checked ~ span {
    left: 100%;
    margin-left: -1.3125em;
  }

  div.switch.tiny>span {
    width: 1.375em;
    height: 1.375em;
  }

  div.switch.radius {
    -webkit-border-radius: 4px;
    border-radius: 4px;
  }

  div.switch.radius>span {
    -webkit-border-radius: 3px;
    border-radius: 3px;
  }

  div.switch.round {
    -webkit-border-radius: 1000px;
    border-radius: 1000px;
  }

  div.switch.round>span {
    -webkit-border-radius: 999px;
    border-radius: 999px;
  }

  div.switch.round label {
    padding: 0 0.5625em;
  }@  -webkit-keyframes webkitSiblingBugfix {
    from{position: relative;
  }

  to {
    position: relative;
  }
}}

[data-magellan-expedition] {
  background: #fff;
  z-index: 50;
  min-width: 100%;
  padding: 10px;
}

[data-magellan-expedition] .sub-nav {
  margin-bottom: 0;
}

[data-magellan-expedition] .sub-nav dd {
  margin-bottom: 0;
}

table {
  background: #fff;
  margin-bottom: 1.25em;
  border: solid 1px #ddd;
}

table thead,table tfoot {
  background: #f5f5f5;
  font-weight: bold;
}

table thead tr th,table thead tr td,table tfoot tr th,table tfoot tr td {
  padding: 0.5em 0.625em 0.625em;
  font-size: 0.875em;
  color: #222;
  text-align: left;
}

table tr th,table tr td {
  padding: 0.5625em 0.625em;
  font-size: 0.875em;
  color: #222;
}

table tr.even,table tr.alt,table tr:nth-of-type(even) {
  background: #f9f9f9;
}

table thead tr th,table tfoot tr th,table tbody tr td,table tr td,table tfoot tr td {
  display: table-cell;
  line-height: 1.125em;
}

.th {
  line-height: 0;
  display: inline-block;
  border: solid 4px #fff;
  -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.2);
  box-shadow: 0 0 0 1px rgba(0,0,0,0.2);
  -webkit-transition: all 200ms ease-out;
  -moz-transition: all 200ms ease-out;
  transition: all 200ms ease-out;
}

.th:hover,.th:focus {
  -webkit-box-shadow: 0 0 6px 1px rgba(43,166,203,0.5);
  box-shadow: 0 0 6px 1px rgba(43,166,203,0.5);
}

.th.radius {
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

a.th {
  display: inline-block;
}

.has-tip {
  border-bottom: dotted 1px #ccc;
  cursor: help;
  font-weight: bold;
  color: #333;
}

.has-tip:hover,.has-tip:focus {
  border-bottom: dotted 1px #196177;
  color: #2ba6cb;
}

.has-tip.tip-left,.has-tip.tip-right {
  float: none !important;
}


.tap-to-close {
  display: block;
  font-size: 0.625em;
  color: #888;
  font-weight: normal;
}

@media only screen and (min-width: 660px) {
  .tooltip>.nub {
    border-color: transparent transparent #000 transparent;
    top: -10px;
  }

  .tooltip.tip-top>.nub {
    border-color: #000 transparent transparent transparent;
    top: auto;
    bottom: -10px;
  }

  .tooltip.tip-left,.tooltip.tip-right {
    float: none !important;
  }

  .tooltip.tip-left>.nub {
    border-color: transparent transparent transparent #000;
    right: -10px;
    left: auto;
    top: 50%;
    margin-top: -5px;
  }

  .tooltip.tip-right>.nub {
    border-color: transparent #000 transparent transparent;
    right: auto;
    left: -10px;
    top: 50%;
    margin-top: -5px;
  }
}

@media only screen and (max-width: 767px) {
  .f-dropdown {
    max-width: 100%;
    left: 0;
  }
}

.f-dropdown {
  position: absolute;
  top: -9999px;
  list-style: none;
  width: 100%;
  max-height: none;
  height: auto;
  background: #fff;
  border: solid 1px #ccc;
  font-size: 16px;
  z-index: 99;
  margin-top: 2px;
  max-width: 200px;
}

.f-dropdown>*:first-child {
  margin-top: 0;
}

.f-dropdown>*:last-child {
  margin-bottom: 0;
}

.f-dropdown:before {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border: inset 6px;
  border-color: transparent transparent #fff transparent;
  border-bottom-style: solid;
  position: absolute;
  top: -12px;
  left: 10px;
  z-index: 99;
}

.f-dropdown:after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border: inset 7px;
  border-color: transparent transparent #ccc transparent;
  border-bottom-style: solid;
  position: absolute;
  top: -14px;
  left: 9px;
  z-index: 98;
}

.f-dropdown.right:before {
  left: auto;
  right: 10px;
}

.f-dropdown.right:after {
  left: auto;
  right: 9px;
}

.f-dropdown li {
  font-size: 0.875em;
  cursor: pointer;
  line-height: 1.125em;
  margin: 0;
}

.f-dropdown li:hover,.f-dropdown li:focus {
  background: #eee;
}

.f-dropdown li a {
  display: block;
  padding: 0.3125em 0.625em;
  color: #555;
}

.f-dropdown.content {
  position: absolute;
  top: -9999px;
  list-style: none;
  padding: 1.25em;
  width: 100%;
  height: auto;
  max-height: none;
  background: #fff;
  border: solid 1px #ccc;
  font-size: 16px;
  z-index: 99;
  max-width: 200px;
}

.f-dropdown.content>*:first-child {
  margin-top: 0;
}

.f-dropdown.content>*:last-child {
  margin-bottom: 0;
}

.f-dropdown.tiny {
  max-width: 200px;
}

.f-dropdown.small {
  max-width: 300px;
}

.f-dropdown.medium {
  max-width: 500px;
}

.f-dropdown.large {
  max-width: 800px;
}





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