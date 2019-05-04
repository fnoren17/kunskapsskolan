@extends("layouts/master")



@section('head')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Kunskapsskolan</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    <title>Kunskapsporten Obestämd artikel - KS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, shrink-to-fit=no"/>
    <meta name="DC.Identifier" scheme="URL" content="https://ks.kunskapsporten.se"/>
    <meta name="DC.Language" scheme="RFC1766" content="sv"/>
    <meta name="DC.Format" scheme="IMT" content="text/html"/>
    <meta name="DC.Type" content="text"/>
    <link rel="schema.DC" href="http://purl.org/DC/elements/1.0/"/>

    <style type="text/css">@charset "UTF-8";
/* UI colors */
/* Break points */
/*
Custom Mod, based on Normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css

Copied from 

*/
/**
 * Set up a decent box model on the root element
 */
html {
  font: -apple-system-body;
  text-size-adjust: 100%;
  box-sizing: border-box;
  margin: 0;
  padding: 0; }

/**
 * Make all elements from the DOM inherit from the parent box-sizing
 * Since `*` has a specificity of 0, it does not override the `html` value
 * making all elements inheriting from the root box-sizing value
 * See: https://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/
 */
*, *::before, *::after {
  box-sizing: inherit;
  text-decoration-skip: ink; }

/**
 * Remove default margin.
 */
body {
  margin: 0; }

/* HTML5 display definitions
   ========================================================================== */
/**
 * Correct `block` display not defined for any HTML5 element in IE 8/9.
 * Correct `block` display not defined for `details` or `summary` in IE 10/11
 * and Firefox.
 * Correct `block` display not defined for `main` in IE 11.
 */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block; }

/**
 * 1. Correct `inline-block` display not defined in IE 8/9.
 * 2. Normalize vertical alignment of `progress` in Chrome, Firefox, and Opera.
 */
audio,
canvas,
progress,
video {
  display: inline-block;
  /* 1 */
  vertical-align: baseline;
  /* 2 */ }

/**
 * Prevent modern browsers from displaying `audio` without controls.
 * Remove excess height in iOS 5 devices.
 */
audio:not([controls]) {
  display: none;
  height: 0; }

/**
 * Address `[hidden]` styling not present in IE 8/9/10.
 * Hide the `template` element in IE 8/9/10/11, Safari, and Firefox < 22.
 */
[hidden],
template {
  display: none; }

/* Links
   ========================================================================== */
/**
 * Remove the gray background color from active links in IE 10.
 */
a {
  background-color: transparent; }

/**
 * Improve readability of focused elements when they are also in an
 * active/hover state.
 */
a:active,
a:hover {
  outline: 0; }

/* Text-level semantics
   ========================================================================== */
/**
 * Address styling not present in IE 8/9/10/11, Safari, and Chrome.
 */
abbr[title] {
  border-bottom: 1px dotted; }

/**
 * Address style set to `bolder` in Firefox 4+, Safari, and Chrome.
 */
b,
strong {
  font-weight: bold; }

/**
 * Address styling not present in Safari and Chrome.
 */
dfn {
  font-style: italic; }

/**
 * Address variable `h1` font-size and margin within `section` and `article`
 * contexts in Firefox 4+, Safari, and Chrome.
 */
h1 {
  font-size: 2em;
  margin: 0.67em 0; }

/**
 * Address styling not present in IE 8/9.
 */
mark {
  background: #ff0;
  color: #000; }

/**
 * Address inconsistent and variable font size in all browsers.
 */
small {
  font-size: 80%; }

/**
 * Prevent `sub` and `sup` affecting `line-height` in all browsers.
 */
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline; }

sup {
  top: -0.5em; }

sub {
  bottom: -0.25em; }

/* Embedded content
   ========================================================================== */
/**
 * Remove the border on images inside links in IE 10-.
 */
img {
  border-style: none; }

/**
 * Correct overflow not hidden in IE 9/10/11.
 */
svg:not(:root) {
  overflow: hidden; }

/* Grouping content
   ========================================================================== */
/**
 * Address margin not present in IE 8/9 and Safari.
 */
figure {
  margin: 1em 40px; }

/**
 * Address differences between Firefox and other browsers.
 */
hr {
  box-sizing: border-box;
  height: 0; }

/**
 * Contain overflow in all browsers.
 */
pre {
  overflow: auto; }

/**
 * Address odd `em`-unit font size rendering in all browsers.
 */
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em; }

/* Forms
   ========================================================================== */
/**
 * Known limitation: by default, Chrome and Safari on OS X allow very limited
 * styling of `select`, unless a `border` property is set.
 */
/**
 * 1. Correct color not being inherited.
 *    Known issue: affects color of disabled elements.
 * 2. Correct font properties not being inherited.
 * 3. Address margins set differently in Firefox 4+, Safari, and Chrome.
 */
button,
input,
optgroup,
select,
textarea {
  color: inherit;
  /* 1 */
  font: inherit;
  /* 2 */
  margin: 0;
  /* 3 */ }

/**
 * Address `overflow` set to `hidden` in IE 8/9/10/11.
 */
button {
  overflow: visible; }

/**
 * Address inconsistent `text-transform` inheritance for `button` and `select`.
 * All other form control elements do not inherit `text-transform` values.
 * Correct `button` style inheritance in Firefox, IE 8/9/10/11, and Opera.
 * Correct `select` style inheritance in Firefox.
 */
button,
select {
  text-transform: none; }

/**
 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
 *    and `video` controls.
 * 2. Correct inability to style clickable `input` types in iOS.
 * 3. Improve usability and consistency of cursor style between image-type
 *    `input` and others.
 */
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  appearance: button;
  /* 2 */
  cursor: pointer;
  /* 3 */ }

/**
 * Re-set default cursor for disabled elements.
 */
button[disabled],
html input[disabled] {
  cursor: default; }

/**
 * Remove inner padding and border in Firefox 4+.
 */
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0; }

/**
 * Address Firefox 4+ setting `line-height` on `input` using `!important` in
 * the UA stylesheet.
 */
input {
  line-height: normal; }

/**
 * It's recommended that you don't attempt to style these elements.
 * Firefox's implementation doesn't respect box-sizing, padding, or width.
 *
 * 1. Address box sizing set to `content-box` in IE 8/9/10.
 * 2. Remove excess padding in IE 8/9/10.
 */
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  /* 1 */
  padding: 0;
  /* 2 */ }

/**
 * Fix the cursor style for Chrome's increment/decrement buttons. For certain
 * `font-size` values of the `input`, it causes the cursor style of the
 * decrement button to change from `default` to `text`.
 */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto; }

/**
 * 1. Address `appearance` set to `searchfield` in Safari and Chrome.
 * 2. Address `box-sizing` set to `border-box` in Safari and Chrome.
 */
input[type="search"] {
  appearance: textfield;
  /* 1 */
  box-sizing: border-box;
  /* 2 */ }

/**
 * Remove inner padding and search cancel button in Safari and Chrome on OS X.
 * Safari (but not Chrome) clips the cancel button when the search input has
 * padding (and `textfield` appearance).
 */
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

/**
 * Define consistent border, margin, and padding.
 */
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em; }

/**
 * 1. Correct `color` not being inherited in IE 8/9/10/11.
 * 2. Remove padding so people aren't caught out if they zero out fieldsets.
 */
legend {
  border: 0;
  /* 1 */
  padding: 0;
  /* 2 */ }

/**
 * Remove default vertical scrollbar in IE 8/9/10/11.
 */
textarea {
  overflow: auto; }

/**
 * Don't inherit the `font-weight` (applied by a rule above).
 * NOTE: the default cannot safely be changed in Chrome and Safari on OS X.
 */
optgroup {
  font-weight: bold; }

/* Tables
   ========================================================================== */
/**
 * Remove most spacing between table cells.
 */
table {
  border-collapse: collapse;
  border-spacing: 0; }

td,
th {
  padding: 0; }

.sv-fn-buttons.btn-group a, .bootstrap .btn {
  color: #000 !important; }

.bootstrap [class^="icon-"], .bootstrap [class*=" icon-"] {
  margin-right: 14px; }

.pagecontent {
  padding-bottom: 2em;
  /* margin-top: -1em; */
  margin-bottom: 2em; }

.sv-grid-ksgs12 {
  background: #fff !important; }

::-moz-selection {
  background: #dada39; }

::selection {
  background: #dada39; }

.bg-green {
  background: #60d232; }

.bg-blue {
  background: #00aeef; }

.bg-purple {
  background: #351f88; }

.background1, .background2, .background3 {
  background: url(.); }

.cbox_head, .cbox_body, .kbox_head, .kbox_body {
  display: none; }

.sv-column-5, .sv-column-7 {
  margin-top: 0em;
  padding: 0 0em; }

.kpMenu a {
  text-decoration: none; }

.kpMenu li.nav-header {
  font-family: circular-bold; }

.kpMenu ul > ul.nav.nav-list {
  margin: 0 0 1em 1em; }

.kpMenu h5 {
  color: #000 !important; }

.contentSpacer {
  display: block !important;
  clear: both;
  margin-bottom: 3em;
  width: 100%;
  height: 1em; }

.rtl {
  direction: rtl; }

.workPath_head {
  padding: 5px !important; }

#readThis .ksBlock p {
  padding: 0px; }

.workPath_body {
  clear: both;
  /*display: none; */
  margin-top: 10px;
  -webkit-box-shadow: inset 0px 5px 10px 0px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0px 5px 10px 0px rgba(0, 0, 0, 0.2);
  background-color: rgba(255, 255, 255, 0.4);
  padding: 10px;
  -webkit-border-radius: 5px;
  border-radius: 5px; }

hr {
  display: none; }

.sv-column-12:child(0) {
  border: 1px #f00 solid; }

.sv-grid-ksgs12 {
  background: none !important; }

.sv-grid-ksgs12:first-child {
  padding: 1em;
  background: #fff !important;
  margin-bottom: 3em;
  padding-bottom: 2em;
  -webkit-box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.4);
  box-shadow: 0 0 50px 0 rgba(0, 0, 0, 0.4);
  -webkit-border-radius: 2px;
  border-radius: 2px; }

li#nyhetTab.active {
  background: inherit; }

#sidebar-body-wrapper, .ked-navigation *, html {
  box-sizing: border-box; }

.dev .page-wrap, html {
  height: 100%; }

body.rtl {
  margin-right: 48px !important;
  margin-left: 0; }

body {
  margin-left: 48px !important;
  box-sizing: border-box;
  height: 100%; }
  @media (min-width: 1400px) {
    body {
      font-size: 1.1em !important; } }
  @media (max-width: 1399px) and (min-width: 1025px) {
    body {
      font-size: 0.9em !important; } }
  @media (max-width: 1024px) and (min-width: 760px) {
    body {
      font-size: 0.8em !important; } }
  @media (max-width: 759px) {
    body {
      font-size: 1em !important;
      margin-left: 0px !important;
      margin-right: 0px !important;
      margin-top: 48px !important; } }

body.sv-responsive {
  background: #c3c3c3; }

@media (min-width: 1400px) {
  .sv-column-7 .pagecontent,
  .courseBuilderMainContainer .sv-layout.sv-skip-spacer.sv-column-8,
  .courseBuilderMainContainer .sv-layout.sv-skip-spacer.sv-column-7 {
    padding: 0 4em; } }

@media (max-width: 1399px) and (min-width: 1025px) {
  .sv-column-7 .pagecontent,
  .courseBuilderMainContainer .sv-layout.sv-skip-spacer.sv-column-8,
  .courseBuilderMainContainer .sv-layout.sv-skip-spacer.sv-column-7 {
    padding: 0 2em !important; } }

@media (max-width: 1024px) and (min-width: 760px) {
  .sv-column-7 .pagecontent,
  .courseBuilderMainContainer .sv-layout.sv-skip-spacer.sv-column-8,
  .courseBuilderMainContainer .sv-layout.sv-skip-spacer.sv-column-7 {
    padding: 0 !important; } }

@media (max-width: 759px) {
  .sv-column-7 .pagecontent,
  .courseBuilderMainContainer .sv-layout.sv-skip-spacer.sv-column-8,
  .courseBuilderMainContainer .sv-layout.sv-skip-spacer.sv-column-7 {
    padding: 0 !important; } }

@media (min-width: 1400px) {
  #xp1 {
    margin-left: 4em; } }

@media (max-width: 1399px) and (min-width: 1025px) {
  #xp1 {
    margin-left: 2em !important; } }

@media (max-width: 1024px) and (min-width: 760px) {
  #xp1 {
    margin-left: 0 !important; } }

@media (max-width: 759px) {
  #xp1 {
    margin-left: 0 !important; } }

@media (max-width: 1399px) and (min-width: 1025px) {
  .sv-column-6 ul.nav.nav-tabs li a {
    padding: 0.2em 0.3em !important; } }

body {
  font-family: "circular-book", arial, sans-serif;
  font-style: normal;
  font-size: 1em; }

body, caption, th, td, input, textarea, select, option, legend, fieldset, h1, h2, h3, h4, h5, h6 {
  font-size-adjust: 0.5;
  text-rendering: optimizeLegibility; }

p.normal {
  color: #333;
  font-family: "circular-book", arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  line-height: 27.2px;
  margin-top: 0px;
  text-rendering: optimizeLegibility;
  white-space: pre-wrap; }

.bloggrubrik {
  color: #000;
  font-family: "circular-bold", arial, sans-serif;
  font-size: 2em;
  margin: 0 0 0.8em 0 !important; }

h1 + br, h2 + br, h3 + br, h4 + br, h5 + br {
  display: none; }

.sv-use-margins .normal {
  margin-top: 0em; }

.sv-use-margins .normal {
  margin-bottom: 1em; }

.sv-use-margins .normal:first-child, .sv-old-text-portlet .normal.sv-first-child {
  margin-top: 0em; }

.sv-use-margins .normal.sv-last-child, .sv-old-text-portlet .normal.sv-last-child {
  margin-bottom: 0em; }

.sv-use-margins .normal:last-child, .sv-old-text-portlet .normal:last-child {
  margin-bottom: 0em; }

h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5 {
  font-family: "circular-bold", arial, sans-serif;
  color: #000;
  letter-spacing: normal;
  font-weight: normal !important;
  display: block !important;
  font-weight: normal;
  font-style: normal; }

h1, .h1 {
  font-size: 2em;
  line-height: 1.25em; }

h2, .h2 {
  font-size: 1.625em;
  line-height: 1.15384615; }

h3, .h3 {
  font-size: 1.375em;
  line-height: 1.13636364; }

h4, .h4 {
  font-size: 1.125em;
  line-height: 1.11111111; }

h5, .h5 {
  font-size: 1em;
  line-height: 1; }

a.h1, h1 a, .h1 a,
a.h2, h2 a, .h2 a,
a.h3, h3 a, .h3 a,
a.h4, h4 a, .h4 a,
a.h5, h5 a, .h5 a {
  color: #000;
  text-decoration: none; }

.sv-use-margins .h5, .sv-use-margins h5 {
  margin-top: 1em; }

.sv-use-margins .h5, .sv-use-margins h5 {
  margin-bottom: 1.0em; }

.sv-use-margins .h5:first-child, .sv-old-text-portlet .h5.sv-first-child, .sv-use-margins h5:first-child, .sv-old-text-portlet h5.sv-first-child {
  margin-top: 0.0em; }

.sv-use-margins .h5.sv-last-child, .sv-old-text-portlet .h5.sv-last-child {
  margin-bottom: 0.0em; }

.sv-use-margins .h5:last-child, .sv-old-text-portlet .h5:last-child {
  margin-bottom: 0.0em; }

.sv-use-margins h5.sv-last-child, .sv-old-text-portlet h5.sv-last-child {
  margin-bottom: 0.0em; }

.sv-use-margins h5:last-child, .sv-old-text-portlet h5:last-child {
  margin-bottom: 0.0em; }

.liten {
  font-family: arial, sans-serif;
  font-weight: normal;
  font-style: normal;
  font-size: 10px;
  color: #333333;
  line-height: normal; }

a.liten, .liten a {
  color: #333333;
  text-decoration: underline; }

a.liten:link, .liten a:link, a.liten:visited, .liten a:visited, a.liten:hover, .liten a:hover, a.liten:active, .liten a:active {
  color: #3dbca2;
  text-decoration: underline; }

.sv-use-margins .liten {
  margin-top: 0em; }

.sv-use-margins .liten {
  margin-bottom: 1em; }

.sv-use-margins .liten:first-child, .sv-old-text-portlet .liten.sv-first-child {
  margin-top: 0em; }

.sv-use-margins .liten.sv-last-child, .sv-old-text-portlet .liten.sv-last-child {
  margin-bottom: 0em; }

.sv-use-margins .liten:last-child, .sv-old-text-portlet .liten:last-child {
  margin-bottom: 0em; }

.sv-use-margins .meny:first-child, .sv-old-text-portlet .meny.sv-first-child {
  margin-top: 0.0em; }

.sv-use-margins .meny.sv-last-child, .sv-old-text-portlet .meny.sv-last-child {
  margin-bottom: 0.0em; }

.sv-use-margins .meny:last-child, .sv-old-text-portlet .meny:last-child {
  margin-bottom: 0.0em; }

.sv-text-portlet-content h1:nth-child(1) {
  margin-top: 0 !important; }

.smallFont {
  font-size: 0.9em; }

p.small {
  font-size: 0.7em; }

.sv-portlet p {
  margin: 0;
  font-family: circular-book, arial, sans-serif;
  font-weight: normal;
  font-style: normal;
  font-size: 1em;
  color: #58595b;
  line-height: 1.55em; }

.sv-portlet p {
  margin-bottom: 1em; }

.sv-old-text-portlet p:last-child, .sv-use-margins .normal:last-child, .sv-old-text-portlet .normal:last-child {
  margin-bottom: 2em; }

/* lists */
ol.alphaList {
  list-style-type: lower-alpha; }

ol li, ul li {
  padding: 0;
  margin-bottom: 0.4em; }

ol, ul {
  margin: 1em 0 1.5em 0;
  padding: 0 0 0 2em; }

ul.accentColor {
  list-style-type: none; }

ul.accentColor li:before {
  content: "• ";
  color: #3dbca2;
  margin-left: -1em;
  float: left; }

ul li {
  padding-left: 0em;
  text-indent: 0em; }

.pagecontent li {
  margin-left: 2em;
  margin-left: 2em;
  color: #333; }
  @media (max-width: 1024px) and (min-width: 760px) {
    .pagecontent li {
      margin-left: 1em; } }
  @media (max-width: 759px) {
    .pagecontent li {
      margin-left: 0em; } }

ul, ol {
  padding: 0;
  /*margin: 0 25px 10px 25px;*/ }

li {
  display: list-item;
  text-align: -webkit-match-parent; }

li {
  line-height: 20px; }

/* a:link ol:link, ul:link, li:link {
    color: #3dbca2 !important;
    text-decoration: underline;
} */
.sv-text-portlet ol li a, .sv-text-portlet ul li a {
  color: #3dbca2; }

/* quotes */
blockquote.sv-blockquote {
  background: none;
  padding: 0;
  width: 11em;
  float: left;
  margin: 0 0.6em 0.6em -0.7em; }

blockquote.sv-blockquote > * {
  color: #3dbca2 !important;
  font-style: italic;
  font-family: circular-bold, arial, sans-serif;
  font-size: 1.5em;
  line-height: 1.25em;
  text-align: inherit; }

blockquote.sv-blockquote {
  background: none !important;
  padding: 0 !important;
  width: 11em !important;
  float: left !important;
  margin: 0 0.6em 0.6em 0 !important; }

/* other */
hr {
  border: 1px #3dbca2 solid;
  margin: 1em 0;
  border-style: solid !important; }

.sv-text-portlet-content p a, p a, .sv-portlet .horizontalItem a {
  color: #3dbca2 !important; }

p.normal.inverted {
  color: #eee; }

.sv-font-aip-body-text-white {
  font-size: 17px !important; }

.sv-old-text-portlet {
  margin-bottom: 1em; }

.sv-text-portlet-content li, .sv-text-portlet-cloned-content li {
  margin-left: 2em; }

.ked_boxed, .ksBlock, .layout_boxed {
  background: #f8f8f8;
  width: inherit !important;
  padding: 5px 20px 20px 20px;
  -webkit-box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25);
  margin-bottom: 2em;
  -webkit-border-radius: 2px;
  border-radius: 2px; }

.layout_boxed {
  display: block;
  width: 100% !important;
  width: -webkit-fill-available !important; }

.well-small {
  padding: 9px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px; }

.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05); }

.ked_unboxed {
  width: inherit !important;
  padding: 5px 20px 20px 20px;
  margin-bottom: 2em; }

.ked_boxed .openContent {
  padding: 0.8em; }

.ked_boxed tbody {
  background: #fff; }

.ked_boxed h2, .ked_boxed h3, .ked_boxed h4, .ked_boxed h5, .ked_boxed hr {
  margin: 0.3em 0 0.7em 0 !important; }

.ked_boxed .openContent {
  background: rgba(255, 255, 255, 0.78); }

.ked_boxed .openContent p {
  color: #000;
  font-size: 0.9em; }

.openClose {
  border: none;
  border-radius: 5px;
  margin-bottom: 1em;
  -webkit-box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25); }

.openContent {
  padding: 0.2em 0.2em 0.8em 0.2em; }

.openHeader p {
  font-family: circular-bold, arial, sans-serif;
  font-size: 0.9em; }

.openHeader p {
  margin-bottom: 0em; }

.openHeader:before {
  content: "\f077";
  font: normal normal normal 14px/1 FontAwesome; }

.openClose .openHeader:before {
  content: "\f078";
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 0.8em;
  margin-top: 0.39em;
  margin-right: 0.5em;
  color: #3dbca2; }

.open .openHeader:before {
  content: "\f077" !important;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 0.8em;
  margin-top: 0.39em;
  margin-right: 0.5em;
  color: #3dbca2; }

.openClose .openContent {
  display: none; }

.openClose.open > .openContent {
  display: block !important; }

.open .openHeader {
  border-bottom: 1px #cfcfcf solid; }

.openHeader {
  background: #eeeeee;
  padding: 0.1em 0.8em; }

.ked_boxed .openHeader {
  padding-top: 0.4em;
  border-radius: 5px 5px 0 0; }

.openHeader:before {
  content: "\f078";
  font: normal normal normal 14px/1 FontAwesome;
  float: right; }

.openHeader:hover {
  background: #d4d4d3;
  cursor: pointer; }

.openContent ul li {
  margin-left: 2em; }

.openContent p {
  font-size: 1em;
  color: #000;
  color: #58595b;
  margin-top: 12px; }

.larger > .openHeader {
  border: none !important;
  background: inherit !important;
  padding: 0.1em 0.2em; }

.larger {
  /* background: #f8f8f8; */
  border: none !important;
  background: #f8f8f8 !important;
  padding: 1em 0.3em;
  /* border: none !important; */
  background: #f8f8f8;
  width: inherit !important;
  padding: 5px 20px 20px 20px;
  -webkit-box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25);
  margin-bottom: 1em; }

.larger p {
  font-size: 1.25em;
  color: #000;
  margin-top: 12px; }

.larger > .openHeader:before {
  content: "\f078";
  font: normal normal normal 14px/1 FontAwesome;
  float: right;
  margin-top: 23px; }

.larger.openClose.open > .openContent {
  margin-top: 1em;
  border-top: 3px #3dbca2 solid;
  padding: 0; }

.ked_boxed h2,
.ked_boxed h3,
.ked_boxed h4,
.ked_boxed h5 {
  margin: .3em 0 .7em 0;
  color: #17a98b; }

.ked_boxed li a {
  color: #909090 !important; }

.ked_boxed .nav-header {
  color: #909090 !important; }

/* Tog bort ovan då den störde ut knapparna i kursbyggaren */
.ked_boxed.kpMenu:hover ul li a {
  color: #333333 !important; }

.ked_boxed .btn {
  background: #717f7d; }

.btn .fa {
  margin-right: 0.3em;
  -webkit-touch-callout: none;
  /* iOS Safari */
  -webkit-user-select: none;
  /* Safari */
  -khtml-user-select: none;
  /* Konqueror HTML */
  -moz-user-select: none;
  /* Firefox */
  -ms-user-select: none;
  /* Internet Explorer/Edge */
  user-select: none; }

a.btn {
  color: #fff !important; }

.btn:hover, input[type="submit"]:hover {
  background: #757575;
  /*color: #4e4e4e;*/ }

.btn-warning:hover {
  background-color: #e34321;
  color: #dada39;
  -webkit-box-shadow: 0 0 5px 2px rgba(233, 43, 94, 0.4);
  box-shadow: 0 0 8px 3px rgba(255, 39, 0, 0.4); }

.btn-inactive:hover {
  background-color: #d1d3d4;
  color: #9e9d9d; }

.btn:focus, .btn:active, .btn:visited {
  outline: none;
  box-shadow: none; }

.btn, input[type="submit"] {
  background: #3dbca2;
  border-radius: 3px;
  display: inline-block;
  cursor: pointer;
  color: #fff;
  font-family: circular-book, arial, sans-serif;
  font-size: .8em;
  margin: 0;
  padding: 0.5em 1em;
  text-decoration: none;
  text-rendering: optimizeLegibility;
  text-transform: none;
  font-style: normal;
  font-weight: normal;
  text-shadow: none;
  border: 0;
  text-align: center;
  vertical-align: text-top;
  border-bottom: 1px rgba(0, 0, 0, 0.3) solid;
  -webkit-box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25);
  -webkit-touch-callout: none;
  /* iOS Safari */
  -webkit-user-select: none;
  /* Safari */
  -khtml-user-select: none;
  /* Konqueror HTML */
  -moz-user-select: none;
  /* Firefox */
  -ms-user-select: none;
  /* Internet Explorer/Edge */
  user-select: none; }

.btn-warning {
  background-color: #e92b5e; }

.btn-primary {
  background-color: #66318f; }

.btn-info {
  background-color: #dada39; }

.btn-inactive {
  background-color: #d1d3d4;
  color: #9e9d9d;
  cursor: not-allowed; }

.btn-mini {
  padding: 1px 2px;
  font-size: 0.6em; }

.btn-small {
  padding: 3px 6px;
  font-size: 0.8em; }

.btn-large {
  font-size: 1.2em; }
  @media (max-width: 759px) {
    .btn-large {
      display: block; } }

.btn .fa {
  height: 14px;
  font-size: 14px; }

a.btn:hover {
  color: #4e4e4e !important; }

.buttonsField {
  display: block;
  margin-left: -1em;
  margin-right: -1em;
  min-height: 40%;
  position: absolute;
  bottom: 0;
  width: 100%;
  background: -webkit-linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, 0.04) 10%, rgba(0, 0, 0, 0.61) 66%, black 95%, black 100%);
  background: -moz-linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, 0.04) 10%, rgba(0, 0, 0, 0.61) 66%, black 95%, black 100%);
  background: -o-linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, 0.04) 10%, rgba(0, 0, 0, 0.61) 66%, black 95%, black 100%);
  background: linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, 0.04) 10%, rgba(0, 0, 0, 0.61) 66%, black 95%, black 100%);
  /* filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#000000', GradientType=0);*/ }

.buttonsContainer {
  padding: 1.5em 1em .3em 1em;
  margin: 0 3.6em; }
  @media (max-width: 1399px) and (min-width: 1025px) {
    .buttonsContainer {
      margin: 0 2em !important; } }
  @media (max-width: 1024px) and (min-width: 760px) {
    .buttonsContainer {
      margin: 0 0em !important; } }
  @media (max-width: 759px) {
    .buttonsContainer {
      margin: 0 0em !important; } }

.projectstep-button {
  background: #7d7d7d; }

.step-button {
  background: #939598;
  width: 24px;
  padding-left: 0;
  padding-right: 0;
  text-align: center; }

.step-button {
  background: #f8f8f8;
  width: 1.45em;
  /* color: #333 !important; */
  padding-left: 0;
  padding-right: 0;
  text-align: center; }

a.btn.btn-small.step-button.activePage {
  background: #3dbca2; }

/* Button groups */
.btn-group {
  display: inline-flex;
  border-radius: 4px;
  -webkit-box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25); }

.btn-group .btn:nth-child(1) {
  border-radius: 3px 0 0 3px;
  border-left: none; }

.btn-group .btn {
  margin-right: 0;
  box-shadow: none;
  border-radius: 0;
  border-left: 1px #7e7a7a solid; }

.btn-group .btn:last-child {
  border-radius: 0 3px 3px 0; }

.breadcrumb {
  font-size: 0.7em;
  padding: 0.1em 0.7em 0.1em 0.7em;
  margin-bottom: 0.8em !important;
  margin: 0 0 20px;
  list-style: none;
  background-color: #f5f5f5;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px; }

.breadcrumb > li {
  display: inline-block;
  text-shadow: 0 1px 0 #ffffff; }

.breadcrumb > li > .divider {
  padding: 0 5px;
  color: #ccc; }

.breadcrumb {
  margin: 0.4em 5.5em 0.7em 5.5em !important; }

.breadcrumb > li {
  display: inline-block;
  text-shadow: none !important; }

.breadcrumb > li a:hover {
  color: #333333 !important; }

.breadcrumb {
  padding: 0.2em 0.7em 0em 0.7em !important; }

.breadcrumb a {
  color: #848484; }

.breadcrumb {
  font-size: .7em;
  padding: 0.1em 0.7em;
  margin: 0.4em 5.5em 0.7em 5.5em;
  list-style: none;
  background-color: #f5f5f5;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px; }
  @media (max-width: 1399px) and (min-width: 1025px) {
    .breadcrumb {
      margin: 0.4em 2.9em 0.7em 2.9em !important; } }
  @media (max-width: 1024px) and (min-width: 760px) {
    .breadcrumb {
      margin: 0.4em 0.5em 0.7em 0.5em !important; } }
  @media (max-width: 759px) {
    .breadcrumb {
      margin: 0.4em 0.5em 0.7em 0.5em !important; } }

.input-group-btn {
  position: relative;
  top: -4px; }

form, input, select {
  font-family: circular-book, arial, sans-serif;
  font-size: 1em; }

input[type="text"] {
  border: 1px #ddd solid;
  margin-left: 0.5em;
  padding: 0.3em;
  margin-bottom: 15px;
  font-size: 1em;
  border-radius: 5px; }

input[type="text"]:focus {
  outline: none;
  border-bottom: 3px #3dbca2 solid;
  border-radius: 5px 5px 0 0;
  margin-bottom: 13px; }

select:focus {
  outline: none; }

select {
  border: 1px #ddd solid;
  padding: 0.3em 0.8em;
  margin-bottom: 15px;
  font-size: 1em;
  border-radius: 5px; }

select:active, select:hover {
  outline-color: #61bea2; }

form.sv-nomargin input {
  margin: -5px 0 !important; }

form.sv-nomargin {
  margin-top: 15px; }

/* Nedan kommer tillägg till extraks-public-grid.css, där jag lagt till
     textarea på de ställen där input[type="text"] styrdes.
     
     OBS! Kopiera inte hela denna, utan leta upp samma ställe i extraks och lägg
     bara till textarea på de ställena!
     
     <textarea> används i dialogerna för veckoplanerarens egna uppgifter. */
form, input, select, textarea {
  font-family: circular-book,arial,sans-serif;
  font-size: 1em; }

input[type="text"], textarea {
  border: 1px #ddd solid;
  margin-left: 0.5em;
  padding: 0.3em;
  margin-bottom: 15px;
  font-size: 1em;
  border-radius: 5px; }

input[type="text"]:focus, textarea:focus {
  outline: none;
  border-bottom: 3px #3dbca2 solid;
  border-radius: 5px 5px 0 0;
  margin-bottom: 13px; }

.pullRight {
  float: right !important; }

.pullLeft {
  float: left !important; }

.vertical-space {
  margin-top: 1.5em !important;
  margin-bottom: 1.5em !important; }

.horizontal-space {
  margin-left: 1.5em !important;
  margin-right: 1.5em !important; }

.center {
  vertical-align: middle;
  text-align: center; }

.top {
  vertical-align: top;
  text-align: left; }

.topCenter {
  vertical-align: middle;
  text-align: left; }

.bottom {
  vertical-align: bottom;
  text-align: left; }

.stopFloats {
  display: block;
  clear: both; }

.fullWidth {
  width: 100%; }

.nowrap {
  white-space: nowrap; }

.align-vertical {
  display: block; }

.align-horizontal {
  display: table-row; }

.align-horizontal div {
  margin-right: 2px;
  margin-top: auto; }

.align-horizontal div:last-child {
  margin-right: 0; }

.horizontalItem {
  display: table-cell;
  margin-right: 10px; }

.align-table {
  display: table-row; }

.align-table div {
  display: table-cell;
  text-align: left;
  padding: 0.4em; }

.align-table .inputTextBox.inputTextLarge {
  display: block !important; }

.align-table input[type="text"] {
  display: block;
  margin-left: 0 !important; }

.lines > div {
  border-right: 1px #cfcfcf solid;
  border-bottom: 1px #cfcfcf solid;
  border-top: 1px #cfcfcf solid;
  padding: 5px; }

.lines > div:nth-child(1) {
  border-radius: 4px 0 0 4px;
  border-left: 1px #cfcfcf solid; }

.lines > div:last-child {
  border-radius: 0 4px 4px 0; }

.vertLines > div {
  border-right: 1px #cfcfcf solid;
  border-bottom: 1px #cfcfcf solid;
  border-top: 1px #cfcfcf solid;
  padding: 5px; }

.vertLines > div:nth-child(1) {
  border-radius: 4px 4px 0 0;
  border-left: 1px #cfcfcf solid; }

.vertLines > div:last-child {
  border-radius: 0 0 4px 4px; }

.vertLines > div:nth-child(1) {
  border-radius: 4px 4px 0 0;
  border-top: 1px #cfcfcf solid; }

.vertLines > div {
  border-right: 1px #cfcfcf solid;
  border-bottom: 1px #cfcfcf solid;
  border-left: 1px #cfcfcf solid;
  padding: 5px; }

.meny {
  font-family: helvetica, sans-serif;
  font-weight: bold;
  font-style: normal;
  font-size: 100%;
  color: #333333;
  line-height: 1em; }

a.meny, .meny a, a.meny:hover, .meny a:hover, a.meny:active, .meny a:active {
  color: #333333;
  text-decoration: none; }

.meny {
  padding: 2px;
  display: block;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px; }

.sv-use-margins .meny {
  margin-top: 0.0em; }

.sv-use-margins .meny {
  margin-bottom: 1.0em; }

.ksMenuHeader {
  color: black;
  display: block;
  font-family: circular-bold, arial, sans-serif;
  font-size: 18px;
  font-style: normal;
  font-weight: normal;
  height: 20px;
  line-height: 20px;
  margin-bottom: 12.6px;
  margin-left: 0px;
  margin-right: 0px;
  margin-top: 5.4px;
  text-rendering: optimizeLegibility;
  width: 399.031px;
  -webkit-margin-after: 12.6px;
  -webkit-margin-before: 5.4px;
  -webkit-margin-end: 0px;
  -webkit-margin-start: 0px; }

.ksMenuHeader::after {
  border-top: 2px #3dbca2 solid;
  display: block;
  clear: both;
  content: "";
  margin-top: 0.6em; }

/* Horizontal menu */
.buttonsTabs {
  float: right; }

.horizontalMenu, .buttonsTabs {
  display: table;
  margin: 0;
  padding: 0; }

.horizontalMenu ul, .buttonsTabs ul {
  margin: 0;
  padding: 0;
  display: table-row; }

.horizontalMenu li, .buttonsTabs li {
  background: #737373;
  /* border-radius: 3px; */
  display: inline-block;
  cursor: pointer;
  color: #fff;
  font-family: circular-book, arial, sans-serif;
  font-size: .8em;
  margin: 0;
  padding: 6px 12px;
  text-decoration: none;
  text-rendering: optimizeLegibility;
  text-transform: none;
  font-style: normal;
  font-weight: normal;
  text-shadow: none;
  border: 0;
  text-align: center;
  vertical-align: text-top;
  border-bottom: 1px; }

.horizontalMenu a, .buttonsTabs a {
  color: #fff;
  text-decoration: none; }

.horizontalMenu li.preparation {
  background: rgba(0, 0, 0, 0.65); }

.horizontalMenu .activePage, .buttonsTabs .activePage {
  background: #3dbca2 !important; }

.horizontalMenu li {
  margin-left: 0em; }

.navbar-vertical-items i.fa {
  position: absolute; }

.navbar-vertical-items .has-children.open .navbar-subnav {
  position: relative;
  margin-left: 0;
  margin-right: 0;
  height: 100%;
  transition: all .5s;
  opacity: 1; }

.navbar-vertical-items .has-children .navbar-subnav {
  margin-left: 0;
  margin-right: 0;
  display: block;
  height: 0;
  transition: all .5s;
  opacity: 0; }

.navbar-vertical-items .navbar-subnav li {
  background-color: rgba(255, 255, 255, 0.2); }

.navbar-vertical-items .item {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  margin-left: 0;
  margin-right: 0;
  border-left: none;
  border-bottom: 1px solid rgba(255, 255, 255, 0.7);
  transform: translateZ(0); }

.navbar-vertical-items .item > a {
  padding: 0 !important; }

.navbar-vertical-items .item.arrowed {
  -webkit-filter: drop-shadow(0 2px 3px rgba(0, 0, 0, 0.4));
  filter: drop-shadow(0 2px 3px rgba(0, 0, 0, 0.4));
  border-bottom: none; }

.navbar-vertical-items .item.arrowed ~ .arrowed {
  margin-left: 0; }

.navbar-vertical-items .item.arrowed + .item > a {
  padding: 0; }

.navbar-vertical-items .item.arrowed > a {
  -webkit-clip-path: polygon(0 0, 100% 0, 100% calc(100% - 1em), calc(50% - -20px) calc(100% - 1em), 50% 100%, calc(50% - 20px) calc(100% - 1em), 0 calc(100% - 1em));
  clip-path: polygon(0 0, 100% 0, 100% calc(100% - 1em), calc(50% - -20px) calc(100% - 1em), 50% 100%, calc(50% - 20px) calc(100% - 1em), 0 calc(100% - 1em)); }

.navbar-vertical-items .item.arrowed:last-child > a {
  -webkit-clip-path: none;
  clip-path: none; }

.navbar-vertical-items .item.arrowed:last-child > a .item-inner {
  padding-bottom: 1.5em; }

.navbar-vertical-items .item.arrowed + .item > a {
  margin-top: -1em; }

.navbar-vertical-items .item.arrowed + .item .item-inner {
  padding-top: 1.65em; }

.navbar-vertical-items .item .item-inner {
  padding: 1em 0; }

.navbar-vertical-items .item.arrowed .item-inner {
  padding: 1.2em;
  padding-bottom: 2em; }

.nav.nav-list li {
  padding: 0.2em 0.3em;
  border-radius: 0.2em; }

.nav.nav-list li:hover {
  background: rgba(0, 0, 0, 0.11); }

.nav.nav-list li.active.currentPage {
  background: rgba(0, 0, 0, 0.15); }

.nav.nav-list li.active {
  background: rgba(0, 0, 0, 0.08); }

div.darken {
  position: fixed;
  top: 0;
  left: 0;
  opacity: 0.35;
  background-color: #000000;
  width: 100vw;
  height: 100vh; }

.kedModal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
  background-color: rgba(0, 0, 0, 0.5); }

div.modal-page-wrap {
  position: fixed;
  top: 0;
  left: 0;
  padding: 0;
  margin: 0;
  width: 100vw;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center; }
  @media (max-width: 759px) {
    div.modal-page-wrap {
      padding-top: 48px;
      padding-bottom: 16px;
      box-sizing: border-box; } }

div.modal-page {
  position: relative;
  background-color: #fff;
  padding: 5px 20px 20px 20px;
  margin-bottom: 2em;
  max-width: 90%;
  max-height: 90%;
  overflow-y: auto;
  border: none;
  border-radius: 8px;
  box-shadow: 0 20px 95px -10px rgba(0, 0, 0, 0.83);
  width: auto !important; }
  @media (max-width: 759px) {
    div.modal-page div.modal-page {
      margin: 12px;
      min-width: 0;
      box-sizing: border-box;
      width: 100%;
      max-height: 100%;
      overflow: auto; } }

.kedModal-content {
  background-color: #fff;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 700px; }

/* Sizes */
.termPlanContainer .modal-page {
  max-width: 600px; }

.modal-fixed-max {
  max-width: 800px; }

/* The Close Buttons */
div.modal-page .removeItem:before {
  color: #3dbca2; }

div.modal-page .removeItem:hover:before {
  font-weight: bold; }

div.modal-page .removeItem {
  position: absolute;
  top: 5px;
  right: 3px; }

.kedModalClose {
  float: right;
  font-weight: bold; }

.kedModalClose:hover, .kedModalClose:focus {
  color: black;
  text-decoration: none;
  cursor: pointer; }

/* Content adjustemens */
div.modal-page textarea, div.modal-page input[type="text"] {
  width: 95%; }

div.modal-page textarea {
  height: 60px;
  min-width: 70%; }

.no-clip-path-polygon .ked-navigation .ked-navbar .item,
html[style~="-ms-overflow-style:"] .ked-navigation .ked-navbar .item {
  -ms-flex: 1 0 auto;
  flex: 1 0 auto; }

.no-clip-path-polygon .ked-navigation .ked-navbar .item.arrowed, html[style~="-ms-overflow-style:"] .ked-navigation .ked-navbar .item.arrowed {
  margin-left: 0;
  margin-right: 0;
  box-shadow: 3px 0 2px rgba(0, 0, 0, 0.4); }

.no-clip-path-polygon .ked-navigation .ked-navbar .item.arrowed + .item > a .item-inner, html[style~="-ms-overflow-style:"] .ked-navigation .ked-navbar .item.arrowed + .item > a .item-inner {
  padding-left: 1em;
  padding-right: 1em; }

.no-clip-path-polygon .ked-navigation .ked-navbar .navbar-subnav, html[style~="-ms-overflow-style:"] .ked-navigation .ked-navbar .navbar-subnav {
  width: 100%; }

.ked-navigation {
  font-size: 14px; }

.ked-navigation a {
  color: #fff;
  text-decoration: none; }

.ked-navigation, .ked-navigation a, .ked-navigation p, .ked-navigation span, .ked-navigation li {
  font-family: "Circular bold", sans-serif !important;
  font-size: 14px !important; }

.ked-navigation .inner-border {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #7d64dc;
  -webkit-clip-path: polygon(0 0, calc(100% - 1em) 0, 100% 50%, calc(100% - 1em) 100%, 0 100%, 0 calc(100% - 3px), calc(100% - 1em - 3px) calc(100% - 3px), calc(100% - 3px - 1px) 50%, calc(100% - 1em - 3px) 3px, 0 3px);
  clip-path: polygon(0 0, calc(100% - 1em) 0, 100% 50%, calc(100% - 1em) 100%, 0 100%, 0 calc(100% - 3px), calc(100% - 1em - 3px) calc(100% - 3px), calc(100% - 3px - 1px) 50%, calc(100% - 1em - 3px) 3px, 0 3px); }
  @media (max-width: 759px) {
    .ked-navigation .inner-border {
      display: none; } }

.ked-navigation .inner-border-last-item {
  -webkit-clip-path: none;
  clip-path: none;
  border: 3px solid #7d64dc;
  background: transparent; }

.ked-navigation .ked-navbar {
  position: relative;
  font-family: "Circular bold", sans-serif !important; }
  @media (max-width: 759px) {
    .ked-navigation .ked-navbar {
      -ms-flex-direction: column;
      flex-direction: column; } }

.ked-navigation .ked-navbar a {
  text-decoration: none; }

.ked-navigation .ked-navbar i.fa {
  margin-left: 1em;
  color: #fff; }
  @media (max-width: 759px) {
    .ked-navigation .ked-navbar i.fa {
      position: absolute; } }

.ked-navigation .ked-navbar .has-children {
  cursor: pointer; }

.ked-navigation .ked-navbar .has-children.open .navbar-subnav {
  height: 100%;
  height: auto;
  opacity: 1;
  transition: all .2s; }
  @media (max-width: 759px) {
    .ked-navigation .ked-navbar .has-children.open .navbar-subnav {
      position: relative;
      margin-left: 0;
      margin-right: 0;
      height: 100%;
      transition: all .5s;
      opacity: 1; } }

@media (max-width: 759px) {
  .ked-navigation .ked-navbar .has-children .navbar-subnav {
    margin-left: 0;
    margin-right: 0;
    display: block;
    height: 0;
    transition: all .5s;
    opacity: 0; } }

@media (max-width: 759px) {
  .ked-navigation .ked-navbar .navbar-subnav li {
    background-color: rgba(255, 255, 255, 0.2); } }

.ked-navigation .ked-navbar .item {
  display: -ms-inline-flexbox;
  display: inline-flex;
  border-left: 0;
  border-right: 0; }
  @media (max-width: 759px) {
    .ked-navigation .ked-navbar .item {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      margin-left: 0;
      margin-right: 0;
      border-left: none;
      border-bottom: 1px solid rgba(255, 255, 255, 0.7);
      transform: translateZ(0); } }

.ked-navigation .ked-navbar .item + .arrowed, .ked-navigation .ked-navbar .item.arrowed + .item {
  border-right: 0; }

.ked-navigation .ked-navbar .item.arrowed + .item > a .item-inner {
  padding-left: 2em; }

.ked-navigation .ked-navbar .item.bordered > a:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #7d64dc;
  -webkit-clip-path: polygon(0 0, calc(100% - 1em) 0, 100% 50%, calc(100% - 1em) 100%, 0 100%, 0 calc(100% - 3px), calc(100% - 1em - 3px) calc(100% - 3px), calc(100% - 3px - 1px) 50%, calc(100% - 1em - 3px) 3px, 0 3px);
  clip-path: polygon(0 0, calc(100% - 1em) 0, 100% 50%, calc(100% - 1em) 100%, 0 100%, 0 calc(100% - 3px), calc(100% - 1em - 3px) calc(100% - 3px), calc(100% - 3px - 1px) 50%, calc(100% - 1em - 3px) 3px, 0 3px); }
  @media (max-width: 759px) {
    .ked-navigation .ked-navbar .item.bordered > a:after {
      display: none; } }

.ked-navigation .ked-navbar .item.bordered:last-child > a:after {
  -webkit-clip-path: none;
  clip-path: none;
  border: 3px solid #7d64dc;
  background: transparent; }

.ked-navigation .ked-navbar .item > a {
  width: 100%;
  text-align: center;
  white-space: nowrap;
  color: #fff;
  text-decoration: none; }
  @media (max-width: 759px) {
    .ked-navigation .ked-navbar .item > a {
      padding: 0 !important; } }

.ked-navigation .ked-navbar .item > a:focus {
  outline: 0;
  border: 0; }

.ked-navigation .ked-navbar .item > a .item-inner {
  padding: 1em; }

.ked-navigation .ked-navbar .item.arrowed {
  position: relative;
  border-right: 0;
  margin-left: 0; }
  @media (max-width: 759px) {
    .ked-navigation .ked-navbar .item.arrowed {
      -webkit-filter: drop-shadow(0 2px 3px rgba(0, 0, 0, 0.4));
      filter: drop-shadow(0 2px 3px rgba(0, 0, 0, 0.4));
      border-bottom: none; } }

.ked-navigation .ked-navbar .item.arrowed ~ * {
  margin-left: -1em; }

.ked-navigation .ked-navbar .item.arrowed > a {
  position: relative;
  -webkit-clip-path: polygon(0 0, calc(100% - 1em) 0, 100% 50%, calc(100% - 1em) 100%, 0 100%);
  clip-path: polygon(0 0, calc(100% - 1em) 0, 100% 50%, calc(100% - 1em) 100%, 0 100%); }
  @media (max-width: 759px) {
    .ked-navigation .ked-navbar .item.arrowed > a {
      -webkit-clip-path: polygon(0 0, 100% 0, 100% calc(100% - 1em), calc(50% - -20px) calc(100% - 1em), 50% 100%, calc(50% - 20px) calc(100% - 1em), 0 calc(100% - 1em));
      clip-path: polygon(0 0, 100% 0, 100% calc(100% - 1em), calc(50% - -20px) calc(100% - 1em), 50% 100%, calc(50% - 20px) calc(100% - 1em), 0 calc(100% - 1em)); } }

.ked-navigation .ked-navbar .item.arrowed > a .item-inner {
  padding-right: 2em; }

.ked-navigation .ked-navbar .item.bg1 > *, .ked-navigation .ked-navbar .item.bg2 > *, .ked-navigation .ked-navbar .item.bg3 > * {
  background: url(.); }

.ked-navigation .ked-navbar .item.completed > * {
  background: #60d232; }

.ked-navigation .ked-navbar .item.active > * {
  background: #00aeef; }

.ked-navigation .ked-navbar .item.todo > * {
  background: #351f88; }

.ked-navigation .ked-navbar .item a:hover .item-inner {
  background-color: rgba(255, 255, 255, 0.3); }

.ked-navigation .navbar-subnav {
  position: absolute;
  overflow: hidden;
  opacity: 0;
  z-index: 100;
  top: 100%;
  left: 0;
  height: 0;
  width: calc(100% - 1em);
  margin: 0;
  padding: 0;
  list-style: none; }
  @media (max-width: 759px) {
    .ked-navigation .navbar-subnav {
      display: none;
      margin-right: 0;
      width: 100%;
      height: 100%;
      opacity: 1; } }

.ked-navigation .navbar-subnav li {
  margin: 0;
  padding: 0;
  border-top: 1px solid rgba(255, 255, 255, 0.3);
  text-align: center; }

.ked-navigation .navbar-subnav li.header {
  border-bottom: 1px solid rgba(255, 255, 255, 0.3); }

.ked-navigation .navbar-subnav li.active {
  background-color: rgba(255, 255, 255, 0.3); }

.ked-navigation .navbar-subnav li a {
  padding: .6em .3em;
  display: block;
  color: #fff; }
  @media (max-width: 759px) {
    .ked-navigation .navbar-subnav li a {
      padding-left: 0;
      padding-right: 0; } }

.ked-navigation .navbar-subnav li a:hover {
  background-color: rgba(255, 255, 255, 0.3); }

.ked-navigation .ked-navbar.vertical {
  -ms-flex-direction: column;
  flex-direction: column; }

.ked-navigation .ked-navbar.vertical i.fa {
  position: absolute; }

.ked-navigation .ked-navbar.vertical .has-children.open .navbar-subnav {
  position: relative;
  margin-left: 0;
  margin-right: 0;
  height: 100%;
  transition: all .5s;
  opacity: 1; }

.ked-navigation .ked-navbar.vertical .has-children .navbar-subnav {
  margin-left: 0;
  margin-right: 0;
  display: block;
  height: 0;
  transition: all .5s;
  opacity: 0; }

.ked-navigation .ked-navbar.vertical .navbar-subnav li {
  background-color: rgba(255, 255, 255, 0.2); }

.ked-navigation .ked-navbar.vertical .item {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  margin-left: 0;
  margin-right: 0;
  border-left: none;
  border-bottom: 1px solid rgba(255, 255, 255, 0.7);
  transform: translateZ(0); }

.ked-navigation .ked-navbar.vertical .item > a {
  padding: 0 !important; }

.ked-navigation .ked-navbar.vertical .item.arrowed {
  -webkit-filter: drop-shadow(0 2px 3px rgba(0, 0, 0, 0.4));
  filter: drop-shadow(0 2px 3px rgba(0, 0, 0, 0.4));
  border-bottom: none; }

.ked-navigation .ked-navbar.vertical .item.arrowed ~ .arrowed {
  margin-left: 0; }

.ked-navigation .ked-navbar.vertical .item.arrowed + .item > a {
  padding: 0; }

.ked-navigation .ked-navbar.vertical .item.arrowed > a {
  -webkit-clip-path: polygon(0 0, 100% 0, 100% calc(100% - 1em), calc(50% - -20px) calc(100% - 1em), 50% 100%, calc(50% - 20px) calc(100% - 1em), 0 calc(100% - 1em));
  clip-path: polygon(0 0, 100% 0, 100% calc(100% - 1em), calc(50% - -20px) calc(100% - 1em), 50% 100%, calc(50% - 20px) calc(100% - 1em), 0 calc(100% - 1em)); }

.ked-navigation .ked-navbar.vertical .item.arrowed:last-child > a {
  -webkit-clip-path: none;
  clip-path: none; }

.ked-navigation .ked-navbar.vertical .item.arrowed:last-child > a .item-inner {
  padding-bottom: 1.5em; }

.ked-navigation .ked-navbar.vertical .item.arrowed + .item > a {
  margin-top: -1em; }

.ked-navigation .ked-navbar.vertical .item.arrowed + .item .item-inner {
  padding-top: 1.65em; }

.ked-navigation .ked-navbar.vertical .item .item-inner {
  padding: 1em 0; }

.ked-navigation .ked-navbar.vertical .item.arrowed .item-inner {
  padding: 1.2em;
  padding-bottom: 2em; }

.ked-navigation img {
  border: none; }

.ked-navigation i.fa {
  margin-left: 0;
  margin-right: 1em; }

.ked-navigation .sidebar {
  -webkit-box-shadow: 0 0 30px 2px rgba(0, 0, 0, 0.4);
  box-shadow: 0 0 30px 2px rgba(0, 0, 0, 0.4);
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  max-height: 100vh;
  width: 48px;
  max-width: 290px;
  z-index: 100;
  overflow: hidden;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: justify;
  justify-content: space-between;
  background-color: #4d4d4d;
  transition: all .2s; }
  @media (max-width: 759px) {
    .ked-navigation .sidebar {
      height: 48px;
      max-height: 100vh;
      width: 100%;
      max-width: 100vw; } }

.ked-navigation .sidebar.open {
  transform: translateZ(0);
  box-shadow: 1px 0 2px rgba(0, 0, 0, 0.4);
  width: 90%; }

.ked-navigation .sidebar.open .logo a span {
  opacity: 1;
  transition: all .2s; }

.ked-navigation .sidebar.open .search-field {
  opacity: 1; }

.ked-navigation .sidebar.open .search .fa-search {
  margin-left: -25px;
  transition: all .2s;
  color: #4d4d4d; }

.ked-navigation .sidebar.open .offcanvas-nav a span, .ked-navigation .sidebar.open .state-indicator {
  opacity: 1;
  transition: all .2s; }

.ked-navigation .account {
  background-color: #3b3b3b; }

.sv-grid-ksgs12.pinned {
  padding-left: 238px; }

.ked-navigation .logo {
  position: relative;
  background-color: #3b3b3b;
  width: 100%; }

.ked-navigation .logo a {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding: 1em;
  overflow: hidden;
  width: 100%;
  position: relative; }

.ked-navigation .logo a img {
  margin-right: 10px;
  width: 20px;
  max-width: 20px;
  height: 20px;
  -ms-flex: 1 0 auto;
  flex: 1 0 auto; }

.ked-navigation .logo a span {
  opacity: 0;
  white-space: nowrap;
  transition: all .2s; }

.ked-navigation .logo .fa {
  margin-right: 10px; }

.ked-navigation .logo span {
  opacity: 1;
  font-size: 1em; }

.ked-navigation .search-container {
  padding: 0 10px 10px;
  background-color: #3b3b3b; }

.ked-navigation .search {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center; }

.ked-navigation .search .fa-search {
  -ms-flex-order: 2;
  order: 2;
  color: #fff;
  margin-left: -20px;
  margin-right: 0; }

.ked-navigation .search input {
  -ms-flex-order: 1;
  order: 1;
  background-color: #4d4d4f;
  border: 0;
  font-size: 12px;
  padding: 5px 10px;
  width: 100%;
  transition: all .2s; }
  @media (max-width: 759px) {
    .ked-navigation .search input {
      font-size: 16px; } }

.ked-navigation .search input:focus {
  background-color: #fff;
  color: #000;
  transition: all .2s;
  outline: 0; }

.ked-navigation .search .search-field {
  opacity: 0;
  border-radius: 6px;
  -webkit-appearance: none; }

.ked-navigation nav {
  -ms-flex: 1;
  flex: 1;
  background-color: #4d4d4d;
  overflow-y: auto;
  overflow-x: hidden;
  -webkit-overflow-scrolling: touch; }

.ked-navigation .offcanvas-nav {
  list-style: none;
  margin: 0;
  padding: 0; }

.ked-navigation .offcanvas-nav.with-dividers li {
  border-bottom: 1px solid #4d4d4d; }

.ked-navigation .offcanvas-nav li {
  list-style: none;
  margin: 0;
  padding: 0;
  transition: all .15s; }

.ked-navigation .offcanvas-nav li:hover {
  background-color: rgba(255, 255, 255, 0.3);
  transition: all 0s; }

.ked-navigation .offcanvas-nav li a {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  word-break: normal;
  text-decoration: none;
  padding: 1em;
  padding-left: 18px; }

.ked-navigation .offcanvas-nav li a span {
  -ms-flex: 1;
  flex: 1;
  opacity: 0;
  transition: all .2s;
  min-width: 221px; }

.ked-navigation .offcanvas-nav li a .state-indicator {
  opacity: 0; }

.ked-navigation .offcanvas-nav li a i.fa {
  margin-right: 10px;
  text-rendering: optimizeLegibility; }

.ked-navigation .offcanvas-nav li.lvl1 > a {
  transition: all .15s; }

.ked-navigation .offcanvas-nav li.lvl1 > a.open, .ked-navigation .offcanvas-nav li.lvl1 > a:hover {
  background-color: rgba(255, 255, 255, 0.3);
  transition: all 0s; }

.ked-navigation .offcanvas-nav li.blue {
  background-color: #00aeef; }

.ked-navigation .offcanvas-nav li.green {
  background-color: #60d232; }

.ked-navigation .offcanvas-nav li.yellow {
  background-color: #eec64d; }

.ked-navigation .offcanvas-nav li.orange {
  background-color: #ee914c; }

.ked-navigation .offcanvas-nav li.red {
  background-color: #ee4d4d; }

.ked-navigation .offcanvas-nav .subnav {
  display: none;
  margin: 0;
  padding: 0;
  background-color: rgba(255, 255, 255, 0.3); }

.ked-navigation .offcanvas-nav .subnav li {
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  padding: 0 .5em; }

.ked-navigation .offcanvas-nav .subnav li.header {
  color: #fff;
  border-top: 1px solid #000;
  border-bottom: 1px solid #000; }

.ked-navigation .offcanvas-nav .subnav li.header a {
  font-weight: 700; }

.ked-navigation .offcanvas-nav .subnav li:last-child {
  border-bottom: 0; }

.ked-navigation .offcanvas-nav .subnav li a {
  color: #3c3c3e;
  margin-left: 0px;
  line-height: 14px; }

.lvl2 a {
  font-size: 12px;
  padding: 5px 10px 5px 18px !important; }

li.lvl2 {
  background: #e6e7e9;
  min-width: 290px; }

.ked-navigation .offcanvas-nav .subnav li.header {
  color: #fff;
  border-top: none;
  border-bottom: none; }

.ked-navigation .search .search-field {
  opacity: 0;
  border-radius: 16px;
  -webkit-appearance: none; }

.ked-navigation .logo a:hover, .ked-navigation .logo a:active {
  text-decoration: none;
  color: #fff; }

.ked-navigation .sidebar.open .search .fa-search {
  margin-left: -25px;
  transition: all .2s;
  color: #bcb7b7; }

.ked-navigation .offcanvas-nav .subnav li {
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  padding: 2px 5px 1px 5px; }

.ked-navigation form {
  margin: 0 0 0px; }

.ked-navigation .green ul li {
  background: #e6e7e9 !important; }

.ked-navigation i.fa.fa-times {
  color: #fff; }

.ked-navigation i.fa.fa-times:hover {
  color: #000; }

.ked-navigation select {
  background-color: transparent; }

.ked-navigation .account ul li ul li .fa {
  margin-left: -4px; }

li.lvl2.header {
  background: rgba(230, 231, 233, 0.74);
  border-bottom: 1px #b3b3b3 solid !important; }

li.lvl2.green:hover {
  background: rgba(255, 255, 255, 0.2) !important; }

a.has-sub-nav:hover, a.has-sub-nav:active {
  color: #fff !important;
  text-decoration: none; }

a.has-sub-nav:active {
  color: #fff !important; }

a.has-sub-nav:visited {
  color: #fff !important; }

a.has-sub-nav:focus {
  color: #fff !important; }

@media (max-width: 759px) {
  .ked-navigation .ked-navbar .item.arrowed ~ .arrowed {
    margin-left: 0; } }

@media (max-width: 759px) {
  .ked-navigation .ked-navbar .item.arrowed + .item > a {
    padding: 0; } }

@media (max-width: 759px) {
  .ked-navigation .ked-navbar .item.arrowed:last-child > a {
    -webkit-clip-path: none;
    clip-path: none; } }

@media (max-width: 759px) {
  .ked-navigation .ked-navbar .item.arrowed:last-child > a .item-inner {
    padding-bottom: 1.5em; } }

@media (max-width: 759px) {
  .ked-navigation .ked-navbar .item.arrowed + .item > a {
    margin-top: -1em; } }

@media (max-width: 759px) {
  .ked-navigation .ked-navbar .item.arrowed + .item .item-inner {
    padding-top: 1.65em; } }

@media (max-width: 759px) {
  .ked-navigation .ked-navbar .item .item-inner {
    padding: 1em 0; } }

@media (max-width: 759px) {
  .ked-navigation .ked-navbar .item.arrowed .item-inner {
    padding: 1.2em;
    padding-bottom: 2em; } }

@media (max-width: 759px) {
  .ked-navigation .ked-navbar .item.has-steps > a {
    margin-bottom: 0; } }

.pageHeader {
  background-image: url(https://extraks.sitevision.se/images/18.2d4f4005159f895477a2e5cb/theme.jpg) !important; }

.pageHeader a {
  text-decoration: none; }

.pageHeader a.btn {
  color: #000 !important;
  font-size: 0.8em; }

.pageHeader .align-vertical {
  margin-bottom: 0.7em; }

.pageHeader .align-horizontal {
  display: inline-block; }

.pageHeader .align-horizontal a {
  color: #cfcfcf; }

.pageHeader .align-horizontal.lines {
  font-size: 0.8em; }

.pageHeader .horizontalItem {
  display: table-cell;
  margin-right: 0;
  padding: 0 0.4em 0 0;
  border: none; }
  @media (max-width: 759px) {
    .pageHeader .horizontalItem {
      display: inline-block !important;
      margin-bottom: -0.6em !important; } }

.pageHeader .horizontalItem a {
  text-decoration: none;
  font-size: 0.9em; }

.pageHeader .projectstep-button {
  background: #eee;
  border-radius: 0 3px 3px 0 !important; }

.pageHeader .btn-group .btn {
  margin-right: 0;
  box-shadow: none;
  border-radius: 0;
  border-top: 1px #cfcfcf solid;
  border-bottom: 1px #cfcfcf solid;
  border-right: 1px #cfcfcf solid;
  border-left: none; }

.pageHeader .btn-group .btn:nth-child(1) {
  border-radius: 3px 0 0 3px;
  border-left: 1px #cfcfcf solid; }

.blocks-menu-container {
  color: #fff;
  transition: all .2s;
  max-height: 0;
  transition: max-height .25s;
  overflow: hidden; }
  @media (max-width: 759px) {
    .blocks-menu-container {
      position: absolute;
      top: 100%;
      width: 100%;
      left: 0; } }

.blocks-menu-container.open {
  max-height: 200px;
  transition: max-height .45s; }
  @media (max-width: 759px) {
    .blocks-menu-container.open {
      display: block;
      transition: all .2s; } }

.blocks-menu {
  display: -ms-flexbox;
  display: flex; }
  @media (max-width: 759px) {
    .blocks-menu {
      -ms-flex-pack: justify;
      justify-content: space-between;
      width: 100%; } }

.blocks-menu .block-title {
  padding: .8em 1em;
  border-right: 1px solid rgba(255, 255, 255, 0.3);
  white-space: nowrap;
  color: #fff; }
  @media (max-width: 759px) {
    .blocks-menu .block-title {
      display: none; } }

.blocks-menu .block-title:hover {
  background-color: rgba(255, 255, 255, 0.3); }

.blocks-menu .steps-link {
  padding: .8em 1em;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  text-align: center;
  text-decoration: none;
  color: #fff;
  border-right: 1px solid rgba(255, 255, 255, 0.3); }
  @media (max-width: 759px) {
    .blocks-menu .steps-link {
      padding: .8em;
      padding: initial;
      text-align: center;
      -ms-flex: 1;
      flex: 1;
      -ms-flex-pack: center;
      justify-content: center; } }

.blocks-menu .steps-links-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center; }
  @media (max-width: 759px) {
    .blocks-menu .steps-links-header {
      -ms-flex: 1;
      flex: 1; } }

.blocks-menu .block-stepper {
  padding: .8em 1em;
  display: block;
  cursor: pointer;
  border-right: 1px solid rgba(255, 255, 255, 0.3); }
  @media (max-width: 759px) {
    .blocks-menu .block-stepper {
      width: 100%;
      text-align: center; } }

.blocks-menu .block-stepper.disabled {
  opacity: .3;
  cursor: default; }

.blocks-menu .block-stepper.disabled:hover {
  background-color: inherit; }

.blocks-menu .block-stepper:active, .blocks-menu .block-stepper:hover {
  background-color: rgba(255, 255, 255, 0.3); }

.blocks-menu .steps-link.active, .blocks-menu .steps-link:hover {
  background-color: rgba(255, 255, 255, 0.3); }

.blocks-menu .steps-link.completed {
  opacity: .6; }

h4.skolHeaderWelcome {
  margin: 0;
  padding: 0;
  color: white !important;
  margin-bottom: -32px;
  padding-top: 25px;
  font-size: 1.8em;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.28);
  margin-left: 2.25em; }
  @media (max-width: 1399px) and (min-width: 1025px) {
    h4.skolHeaderWelcome {
      margin-left: 1.125em !important; } }
  @media (max-width: 1024px) and (min-width: 760px) {
    h4.skolHeaderWelcome {
      margin-left: 0.1em !important; } }
  @media (max-width: 759px) {
    h4.skolHeaderWelcome {
      margin-left: 0 !important;
      display: none !important; } }

.pageHeader h1 {
  font-size: 2.8em;
  color: #fff;
  margin: 0;
  padding-top: .5em;
  padding-left: 1.4em;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.28); }
  @media (max-width: 1399px) and (min-width: 1025px) {
    .pageHeader h1 {
      margin-left: 0em !important;
      padding-left: 0.7em !important; } }
  @media (max-width: 1024px) and (min-width: 760px) {
    .pageHeader h1 {
      margin-left: 0 !important;
      padding-top: 0.7em !important;
      padding-bottom: 2.1em !important;
      padding-left: 0 !important; } }
  @media (max-width: 759px) {
    .pageHeader h1 {
      margin-left: 0 !important;
      margin-top: -1em !important;
      font-size: 1.8em;
      padding: 1.2em 0 2em 0 !important;
      line-height: 1em; } }

.pageHeader {
  padding: 0 1em;
  margin-left: -1em;
  margin-right: -1em;
  margin-top: -1em;
  min-height: 12em;
  background-size: cover;
  margin-bottom: 1em;
  position: relative; }
  @media (max-width: 759px) {
    .pageHeader {
      margin-top: 29em;
      min-height: 10em !important; } }

.pageFunctionButtons {
  padding: 0;
  margin: 0 0 2em 4em; }
  @media (max-width: 1399px) and (min-width: 1025px) {
    .pageFunctionButtons {
      margin: 0 0 2em 2em !important; } }
  @media (max-width: 1024px) and (min-width: 760px) {
    .pageFunctionButtons {
      margin: 0 0 2em 0 !important; } }
  @media (max-width: 759px) {
    .pageFunctionButtons {
      margin: 0 0 2em 0 !important; } }

.sv-search-hit .liten {
  margin: 0;
  padding: 0;
  font-size: 0.6em; }

.sv-search-hit p {
  margin: 0;
  padding: 0;
  font-size: 0.8em; }

.sv-text-portlet-content tr, .sv-text-portlet-content td, .sv-text-portlet-content th, .sv-text-portlet-content table, .sv-portlet tr, .sv-portlet td, .sv-portlet th, .sv-portlet table {
  border-spacing: 0;
  border-collapse: collapse;
  border: 1px #cfcfcf solid; }

.sv-text-portlet-content td, .sv-text-portlet-content th, .sv-portlet td, .sv-portlet th {
  vertical-align: top;
  padding: 0.4em; }

.sv-text-portlet-content tr.tableOdd, .sv-portlet tr.tableOdd, .oddLine {
  background: #eeeeee !important; }

a:link ol:link, ul:link, li:link {
  color: #3dbca2 !important;
  text-decoration: underline; }

.sv-text-portlet-content tr.currentWeek td, .sv-portlet tr.currentWeek td {
  background: #f4f4c4; }

.sv-text-portlet-content thead th, .sv-portlet thead th {
  text-align: left;
  background: #3dbca2;
  color: #eee;
  border: 1px #3dbca2 solid; }

.sv-text-portlet-content tfoot th, .sv-portlet tfoot th {
  text-align: left;
  background: #cfcfcf;
  color: #58595b;
  border: 1px #96979a solid; }

tr.covered-item-label td {
  background: #3dbca2;
  color: #ffffff;
  font-weight: bold;
  border-bottom: 1px #757575 solid; }

.weighted-items-table table {
  margin-top: 1em; }

td.courseCell {
  min-width: 7em; }

td.stepCell {
  min-width: 2.3em;
  text-align: center; }

tr.oddLine {
  background: #eeeeee; }

.sv-text-portlet-content table {
  font-size: 0.85em; }

.nav {
  margin-bottom: 20px;
  margin-left: 0;
  list-style: none; }

ul.nav.nav-list {
  margin-left: 0;
  padding-left: 0; }

.nav > li > a {
  display: block; }

.nav-tabs.nav-stacked {
  border-bottom: 0; }

.nav-tabs.nav-stacked > li:first-child > a {
  -webkit-border-top-right-radius: 4px;
  border-top-right-radius: 4px;
  -webkit-border-top-left-radius: 4px;
  border-top-left-radius: 4px;
  -moz-border-radius-topright: 4px;
  -moz-border-radius-topleft: 4px; }

.nav-tabs.nav-stacked > li > a {
  border: 1px solid #ddd;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0; }

.nav-stacked > li > a {
  margin-right: 0; }

.nav-tabs > li > a {
  padding-top: 8px;
  padding-bottom: 8px;
  line-height: 20px;
  border: 1px solid transparent;
  -webkit-border-radius: 4px 4px 0 0;
  -moz-border-radius: 4px 4px 0 0;
  border-radius: 4px 4px 0 0; }

.nav-tabs > li > a, .nav-pills > li > a {
  padding-right: 8px;
  padding-left: 8px;
  margin-right: 2px;
  line-height: 14px; }

.nav-tabs {
  border-bottom: 1px solid #ddd; }

.nav-tabs:before, .nav-pills:before, .nav-tabs:after, .nav-pills:after {
  display: table;
  line-height: 0;
  content: ""; }

.nav-tabs > li {
  margin-bottom: -1px; }

.nav-tabs > li, .nav-pills > li {
  float: left;
  margin-left: 0; }

.nav-tabs > .active > a, .nav-tabs > .active > a:hover, .nav-tabs > .active > a:focus {
  color: #555555;
  cursor: default;
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-bottom-color: transparent; }

.nav-tabs > li > a, .nav-pills > li > a {
  padding-right: 12px;
  padding-left: 12px;
  margin-right: 2px;
  line-height: 14px;
  color: #3dbca2; }

.nav-tabs > li > a {
  padding-top: 8px;
  padding-bottom: 8px;
  line-height: 20px;
  border: 1px solid transparent;
  -webkit-border-radius: 4px 4px 0 0;
  -moz-border-radius: 4px 4px 0 0;
  border-radius: 4px 4px 0 0; }

.nav-tabs > li > a, .nav-pills > li > a {
  padding-right: 12px;
  padding-left: 12px;
  margin-right: 2px;
  line-height: 14px;
  display: block;
  text-decoration: none;
  font-family: circular-bold, arial, sans-serif;
  font-size: 13px; }

.nav-tabs:after, .nav-pills:after {
  clear: both; }

.nav-tabs:before, .nav-pills:before, .nav-tabs:after, .nav-pills:after {
  display: table;
  line-height: 0;
  content: ""; }

.tab-content {
  overflow: hidden; }

.tab-content > .tab-pane, .pill-content > .pill-pane {
  display: none; }

.tab-content .active {
  display: block !important; }

.articleTag {
  float: right;
  padding: 3px 8px;
  background: #e2e2e2;
  color: #e92b5e;
  font-family: circular-bold;
  font-weight: normal;
  font-size: 0.9em;
  border-radius: 0 0 5px 5px; }

.articleContainer {
  border-top: 3px #e2e2e2 solid;
  padding: 0 1em 1em 1em; }

.articleDate {
  font-family: circular-bold;
  font-size: .8em;
  margin: 5px 0 0 0;
  color: #e92b5e; }

.articleBy {
  font-size: .8em;
  margin-bottom: 7px;
  color: #e92b5e; }

.newsArticle {
  padding: 1em 0; }

.mainArticle .newsHeader a {
  font-family: circular-bold, arial, sans-serif;
  font-size: 2em;
  /* padding-bottom: 2em; */
  text-decoration: none; }

.newsArticle.listArticle {
  border-top: 3px #e2e2e2 solid; }

.newsHeader {
  margin-bottom: 1em; }

.newsArticle .btn {
  background-color: #e92b5e;
  margin: 2em 0 0 0; }

.newsArticle small {
  font-size: 0.8em;
  color: #e92b5e; }

.newsArticle img {
  -webkit-box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25); }

.newsArticle .h1, .newsArticle h1, .newsArticle .h2, .newsArticle .h2, .newsArticle .h3, .newsArticle h3, .newsArticle .h4, .newsArticle h4, .newsArticle .h5, .newsArticle h5 {
  font-size: 1em;
  margin: 0; }

.newsArticleCutOff {
  max-height: 200px;
  overflow: hidden; }

.newsArticleBlocker {
  height: 200px;
  position: relative;
  margin-bottom: -200px;
  z-index: 999;
  background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 66%, white 96%, white 100%);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 66%, white 96%, white 100%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 66%, white 96%, white 100%);
  /*  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=0 );*/ }

.secondArticle .newsHeader a {
  font-family: circular-bold, arial, sans-serif;
  font-size: 1.5em;
  /* padding-bottom: 2em; */
  text-decoration: none; }

.mainArticle .newsHeader {
  margin-bottom: 1em; }

.newsArticle p {
  font-size: 1em;
  font-weight: normal !important; }

.mainArticle p {
  font-size: 1.2em; }

.newsArticle strong {
  font-weight: normal !important; }

.mainArticle .articleContainer {
  border-top: none !important; }

.mainArticle .articleTag {
  border-radius: 5px !important; }

.sv-archive-portlet .normal {
  color: #8a8a8a;
  font-size: 0.9em;
  line-height: 1.4em; }

/* Veckans fråga web poll */
.pollQuestion {
  /*  background: #e0e0e0; */
  padding-top: 1em; }

.progress.progress-info {
  height: 2em;
  background: #ececec;
  margin-top: 0;
  margin-bottom: 1em;
  border-radius: 5px;
  -webkit-box-shadow: inset 0 2px 5px 0 rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 2px 5px 0 rgba(0, 0, 0, 0.2); }

.bar {
  height: 2em;
  background: #dada39;
  border-radius: 5px; }

.sv-poll-portlet > span, .sv-poll-portlet > br, .sv-poll-portlet > a {
  display: none; }

.pollQuestionTextContainer {
  height: 2em;
  /* padding: 0 0.5em; */ }

a.pollQuestionText.normal {
  text-decoration: none;
  color: #000; }

.sv-channel h5.h5 {
  margin: 0 !important; }

.sv-channel .liten, .sv-channel a, #nyhet1Tab a, #nyhet2Tab a, #nyhet3Tab a {
  color: #e92b5e; }

.tab-content .pagecontent {
  padding: 0 1em !important; }

.startPageTabs {
  padding-left: 0 !important;
  margin-top: 0em !important; }

.nav-tabs > li > a, .nav-pills > li > a {
  padding-right: 8px;
  padding-left: 8px;
  margin-right: 2px;
  line-height: 24px;
  display: block;
  text-decoration: none;
  font-family: circular-bold,arial,sans-serif;
  font-size: 13px; }

.startPageTabs li a {
  font-size: 0.85em !important; }

.startPageTabs i.fa {
  color: #1b7b67 !important; }

ul.nav.nav-tabs {
  padding: 0 !important; }

.startPageTabs li a {
  font-size: 0.85em !important; }

.startPageTabs {
  padding-left: 0 !important;
  margin-top: -3em; }

ul.nav.nav-tabs.startPageTabs {
  background: #f8f8f8;
  background: -moz-linear-gradient(top, rgba(248, 248, 248, 0) 0%, #f8f8f8 100%);
  background: -webkit-linear-gradient(top, rgba(248, 248, 248, 0) 0%, #f8f8f8 100%);
  background: linear-gradient(to bottom, rgba(248, 248, 248, 0) 0%, #f8f8f8 100%);
  /*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00f8f8f8', endColorstr='#f8f8f8',GradientType=0 );*/ }

.ked_startboxed h2, .ked_startboxed h3, .ked_startboxed h4, .ked_startboxed h5 {
  margin: .3em 0 .7em 0;
  color: #17a98b; }

.ked_startboxed {
  background: #f8f8f8;
  width: inherit !important;
  padding: 5px 20px 20px 20px;
  -webkit-box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: 0 2px 1px 0 rgba(0, 0, 0, 0.25);
  margin-bottom: 2em;
  -webkit-border-radius: 2px;
  border-radius: 2px; }

#busterContent ul {
  padding: 0;
  margin: 0;
  list-style-type: none; }

span.sv-usergroup-badge.sv-badge, .wbLocation {
  background: #bcbcbc;
  float: right;
  padding: 0 0.3em;
  color: #fff;
  font-size: 0.7em;
  border-radius: 0.5em;
  line-height: 19px;
  min-width: 0.75em;
  text-align: center; }

a.wbURL, p.sv-usergroup-name.meny {
  color: #e92b5e !important;
  font-size: 1em;
  text-decoration: none;
  font-family: 'circular-bold',sans-serif; }

.portalLinks li:nth-child(even), .sv-usergroups-list li:nth-child(even), #busterContent li:nth-child(even) {
  background: #eee;
  background: rgba(0, 0, 0, 0.05);
  -webkit-border-radius: 2px;
  border-radius: 2px; }

ul.portalLinks li {
  list-style-type: none; }

ul.portalLinks {
  margin: 0;
  padding: 0; }

.portalLinks li, #busterContent li, .sv-usergroups-list li {
  padding: 0.3em; }

p.sv-usergroup-info.liten, .wbToFromDate {
  font-size: 0.8em;
  color: #888;
  margin-top: 0.5em;
  margin-bottom: 0.3em; }

.sv-channel .liten {
  font-size: 0.6em;
  display: block;
  font-family: 'circular-bold',sans-serif; }

.mainArticle .articleContainer {
  border-top: 3px #e2e2e2 solid !important; }

#con-fauxSocialNotifications {
  display: none;
  background: #9f3f26;
  height: 0.2em;
  padding: 0 0.4em 1.5em 0.4em;
  color: #fff;
  border-radius: 0.75em;
  text-align: center;
  line-height: 1.45em;
  margin-left: 0.2em;
  font-size: 0.8em; }

.sv-timeline-entry br {
  display: none; }

/* start page tab */
#scfeed .popover.fade.bottom.in {
  left: -130px !important; }

#scfeed .popover .arrow {
  left: 80% !important; }

#scfeed p.sv-message-content.normal {
  margin-bottom: 0.7em; }

#scfeed h3.h5 {
  margin-bottom: 0.4em;
  font-size: 0.9em; }

#scfeed .sv-timeline-portlet .oembedall-container img {
  max-height: 8em;
  float: left; }

.debugOut {
  direction: ltr !important;
  font-family: Consolas, 'Courier New', Courier, monospace;
  padding: 4px 8px 4px 8px !important;
  margin: 0 !important;
  font-size: 10px !important;
  line-height: 14px !important;
  min-height: 14px; }

.debugOut a, .debugOut a:hover, .debugOut a:active {
  color: #00F !important;
  background: #D9D9D2 !important;
  font-weight: bold !important; }

.debugHeader {
  background: #C3F0A7;
  border-bottom: 1px #96AB8D solid;
  color: #000; }

.debugText {
  background: #FFFFBF;
  border-bottom: 1px #F1F1CF solid;
  color: #000; }

.debugError {
  background: #E65C5C;
  border-bottom: 1px #F1F1CF solid;
  color: #FFF903;
  font-weight: bold; }

table.wordListTable {
  border-left: 1px #d1d1d1 solid;
  border-right: 1px #d1d1d1 solid; }

table.wordListTable {
  border-left: 1px #d1d1d1 solid;
  border-right: 1px #d1d1d1 solid; }

table.wordListTable th {
  width: 50% !important;
  text-align: left;
  padding: 3px;
  border-bottom: 1px #939393 solid;
  border-top: 1px #d1d1d1 solid; }

.wordListWord {
  display: inline; }

.wordListMarker {
  font-size: 11px;
  line-height: 13px;
  height: 14px;
  padding-top: 1px;
  width: 14px;
  padding-left: 0px;
  border: 1px #999 solid;
  text-align: center;
  /* float: right; */
  display: inline-block;
  margin-left: 10px;
  /* margin-top: -8px; */
  border-radius: 8px;
  overflow: hidden;
  /* margin-top: 0px; */
  color: #999; }

table.wordListTable p {
  font-size: 13px !important;
  line-height: 19px;
  padding: 0px !important;
  margin: 0px !important; }

a.wordListLink {
  font-size: 13px;
  line-height: 19px;
  padding: 0px !important;
  margin: 0px !important; }

.wordListTable td {
  border: 1px #d1d1d1 solid;
  padding: 3px; }

.frenchColor {
  background: #92cf90; }

.englishColor {
  background: #E4DFD7; }

.spanishColor {
  background: #9DC8DB;
  float: none !important; }

.hideWords {
  background: #888;
  color: #888;
  float: right; }

a.wordListLink:hover {
  background: transparent !important;
  color: #333 !important; }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto; }

/* Inline Interactive exercises */
.main {
  display: none; }

.sLineI {
  -webkit-box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
  display: inline-block !important;
  border: 1px solid #c5c5c5;
  background: #fcfce4;
  padding: 2px;
  margin-bottom: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px 5px 5px 5px; }

.sLineI:hover {
  background: #eee; }

.glos {
  font-family: Arial;
  font-size: 12px;
  color: #333; }

.glos a {
  text-decoration: none;
  color: #333;
  padding-top: 3px;
  padding-bottom: 3px; }

.blank {
  margin: 0 !important;
  text-align: center !important;
  background-color: rgba(0, 0, 0, 0.05) !important;
  font-weight: 400 !important;
  -webkit-border-radius: 0px !important;
  border-radius: 0px !important;
  -webkit-box-shadow: none !important;
  -moz-box-shadow: none !important;
  box-shadow: none !important;
  padding: 5px !important;
  border-left: none !important;
  border-top: none !important;
  border-right: none !important;
  border-bottom: 1px #999 solid !important;
  width: inherit !important;
  padding: 0px !important;
  vertical-align: middle !important; }

.baseWord {
  font-weight: 800; }

.question > input[type="radio"] {
  vertical-align: middle;
  visibility: hidden; }

.question label {
  vertical-align: middle;
  line-height: 20px; }

.result {
  font-size: 12px;
  font-weight: bold;
  margin-left: 5px; }

span.wrong {
  color: red;
  margin-left: -1em; }

span.right {
  color: green;
  margin-left: -1em; }

span.mqwrong {
  color: red; }

span.mqright {
  color: green; }

.ctntOpt, .rightOpt {
  border: 1px solid #C4C5C6;
  -webkit-border-radius: 10px;
  border-radius: 10px 10px 10px 10px;
  -webkit-box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
  font-size: 120%;
  height: auto;
  margin: 10px 10px 30px 10px;
  overflow: hidden;
  padding: 10px;
  text-align: center;
  cursor: pointer;
  color: #444343; }

.ctntOpt {
  margin-right: 0px; }

.rightOpt {
  margin-left: 0px; }

/* Multiple Question with Images */
.showCorrect {
  background-image: url("https://www.kedschools.com/webdav/files/CDN/img/ui/yes.png");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 70% 70%; }

.showCorrect img {
  opacity: 0.4;
  filter: alpha(opacity=40);
  /* For IE8 and earlier */ }

.showWrong {
  background-image: url("https://www.kedschools.com/webdav/files/CDN/img/ui/no.png");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 70% 70%; }

.showWrong img {
  opacity: 0.4;
  filter: alpha(opacity=40);
  /* For IE8 and earlier */ }

.imgMcq {
  display: inline-block;
  margin: 0 1em 1em 0; }

/* Ruler */
#flytta {
  display: none;
  width: 96%;
  height: 50px;
  background-color: rgba(123, 208, 74, 0.49);
  position: absolute;
  z-index: 999;
  left: 2%;
  top: 200px;
  cursor: move;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  -webkit-box-shadow: 0px 7px 7px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 7px 7px 0px rgba(0, 0, 0, 0.2); }

/* Popover/Tooltip functionality */
.popo, .popoGap, .popoHeader {
  background: #f2f2f2;
  border-bottom: 1px dashed #ff4433;
  cursor: help; }

.popContent {
  display: none; }

.popover.top .arrow:after {
  bottom: 1px;
  margin-left: 0px;
  border-top-color: #ffffff;
  border-bottom-width: 0;
  z-index: 0; }

/* Attribution styles */
.ccIcon, .ccAnyIcon .ccPdIcon {
  height: 18px; }

.ccText {
  color: rgba(0, 0, 0, 0.5);
  display: inline;
  font-family: Verdana, sans-serif;
  font-size: 10px;
  text-transform: uppercase;
  margin-left: 5px; }

.ccAttribution, .ccAttribution a {
  color: rgba(0, 0, 0, 0.5);
  display: inline;
  font-family: Verdana, sans-serif;
  font-size: 10px;
  margin-left: 5px; }

.ccAnyAttribution, .ccAnyAttribution a {
  color: rgba(0, 0, 0, 0.5);
  display: inline;
  font-family: Verdana, sans-serif;
  font-size: 10px; }

.ccIcon img {
  display: none; }

.ccPdIcon img {
  display: none; }

.ccIcon:before {
  content: url("https://www.kedschools.com/webdav/files/CDN/img/ui/cc_mini.png");
  border: none;
  height: 15px;
  width: 15px;
  min-width: 15px;
  vertical-align: middle; }

.ccPdIcon:before {
  content: url("https://www.kedschools.com/webdav/files/CDN/img/ui/pd_mini.png");
  border: none;
  height: 15px;
  width: 15px;
  min-width: 15px;
  vertical-align: middle; }

.ks-method-bank {
  display: flex;
  flex-wrap: wrap; }
  .ks-method-bank .ks-method-bank__item {
    display: flex;
    flex-direction: column;
    width: 50%;
    padding-right: 1em;
    margin: 0 0 1em; }
    .ks-method-bank .ks-method-bank__item:nth-child(even) {
      padding: 0; }
    .ks-method-bank .ks-method-bank__item .ks-method-bank__label {
      padding: 1em;
      /*background-color: #e5eff4;*/
      background-color: rgba(61, 188, 162, 0.3);
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: bold;
      color: black;
      -webkit-transition: all .5s ease-in-out;
      -moz-transition: all .5s ease-in-out;
      -o-transition: all .5s ease-in-out;
      transition: all .5s ease-in-out;
      /* &:hover,
            &.active {
                background-color: #a9b9c6; 
            }*/ }
      .ks-method-bank .ks-method-bank__item .ks-method-bank__label i {
        margin-left: 0.5em; }
    .ks-method-bank .ks-method-bank__item .ks-method-bank__values {
      display: none;
      padding: 1em;
      margin-bottom: 1em;
      overflow: hidden;
      background-color: #fdfdfd; }
      .ks-method-bank .ks-method-bank__item .ks-method-bank__values .checkbox {
        display: flex;
        align-items: center; }
      .ks-method-bank .ks-method-bank__item .ks-method-bank__values .checkbox input[type="checkbox"] {
        margin-right: 0.5em; }
    @media (max-width: 759px) {
      .ks-method-bank .ks-method-bank__item {
        width: 100%;
        padding: 0; } }
  .ks-method-bank .mbStrike {
    color: #bbb;
    text-decoration: line-through; }

.ks-method-bank__search {
  position: relative; }
  .ks-method-bank__search input[type='text'] {
    margin: 0 !important;
    width: 100%; }
  .ks-method-bank__search input[type='submit'] {
    margin: 0 !important;
    position: absolute;
    top: 0;
    right: 0; }

.mbank {
  border: 1px solid #96ceea !important;
  border-collapse: collapse;
  display: table;
  border-collapse: separate;
  border-spacing: -1px;
  background: #edf6fa;
  -webkit-border-radius: 4px 4px 4px 4px;
  border-radius: 4px 4px 4px 4px;
  width: 100%; }
  .mbank tr {
    border: none !important; }
  .mbank td {
    padding: 0.6em;
    border-bottom: 1px dashed #b8d1de;
    vertical-align: text-top;
    font-size: 0.8em; }
  .mbank a {
    font-size: 1.3em; }
  .mbank th {
    padding: 0.9em 0.6em 1em 0.6em;
    background: #96ceea;
    background: -moz-linear-gradient(top, #dae3ef 0%, #a9b9c6 100%);
    /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #dae3ef), color-stop(100%, #a9b9c6));
    /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #dae3ef 0%, #a9b9c6 100%);
    /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #dae3ef 0%, #a9b9c6 100%);
    /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #dae3ef 0%, #a9b9c6 100%);
    /* IE10+ */
    background: linear-gradient(to bottom, #dae3ef 0%, #a9b9c6 100%);
    /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dae3ef', endColorstr='#a9b9c6',GradientType=0 );
    /* IE6-9 */
    text-align: left;
    font-size: 1em; }
  .mbank .odd {
    background: #e5eff4; }
  .mbank .mbHidden {
    display: none;
    /*display:block;*/
    height: 0px !important;
    width: 0px;
    max-height: 0px;
    max-width: 0px;
    overflow: hidden;
    padding: 0px !important;
    margin: 0px !important; }

.vemendo-weekview > table > tbody > tr > td {
  width: 16%; }

.vemendo-weekview > table > tbody > tr > td:nth-child(1) {
  width: 5%; }

.vemendo-weekview > table td {
  margin: 0 !important;
  padding: 0 !important;
  border: 1px solid #96979a !important; }

.vemendo-weekview .dayviewevent {
  border: none !important;
  box-sizing: border-box !important;
  border-radius: 0 !important;
  padding: 0.25em !important;
  border-bottom: 1px #fff solid !important; }

.vemendo-weekview .dayviewevent > p.event-period {
  text-align: right !important;
  font-size: 0.75em !important;
  color: #000 !important;
  opacity: 1 !important;
  margin: 0 0 0 0 !important; }

.vemendo-weekview .dayviewevent > p.event-period {
  text-align: right;
  font-size: 7pt;
  opacity: .6;
  margin: 2px 0 0 0;
  position: relative;
  top: -19px;
  text-align: right !important; }

.vemendo-weekview .dayviewevent > p.event-location {
  font-style: normal !important;
  opacity: 1 !important;
  color: #000 !important;
  font-size: 0.8em !important; }

.vemendo-weekview .dayview {
  width: 100% !important;
  box-sizing: border-box !important; }

.vemendo-weekview .hourmarker {
  margin-top: 0.5em !important;
  color: #3dbca2 !important;
  font-size: 0.8em !important;
  width: 5em !important;
  margin-left: 0.4em !important;
  display: block !important; }

.vemendo-weekview p.week-number {
  font-family: circular-bold, arial, sans-serif !important;
  text-align: center !important;
  padding: 6px 2px 6px 0px !important;
  margin: 0 !important;
  font-size: 1.7em !important;
  color: #000 !important; }

.full-day:last-child {
  margin-bottom: 1em !important; }

.vemendo-weekview .dayviewevent > p {
  margin: 0;
  text-align: inherit; }

p.event-title {
  color: #000 !important;
  font-size: 0.8em;
  font-family: circular-bold, arial, sans-serif; }

a.event-title {
  text-decoration: none;
  font-family: circular-book;
  font-size: 0.9em;
  letter-spacing: 0.05em;
  background: rgba(255, 255, 255, 0.37);
  display: block;
  padding: 0.25em;
  border-bottom: 1px rgba(0, 0, 0, 0.14) solid; }

.event-period {
  padding: 0.25em;
  color: #444 !important; }

p.event-location {
  padding: 0.25em;
  font-style: normal !important;
  opacity: 1 !important;
  color: #000 !important;
  font-size: 0.8em !important;
  position: relative;
  top: -26px; }

.vemendo-weekview table tr:nth-child(1) {
  background: #3dbca2;
  border: none; }

.vemendo-weekview .dayname {
  width: 100% !important;
  text-align: left !important;
  margin: 0 !important;
  padding: 0.5em !important;
  color: #eee !important;
  background: inherit;
  font-size: 0.9em;
  font-family: circular-book, arial, sans-serif !important; }

.vemendo-weekview table tr:nth-child(1) .dayname {
  background: #3dbca2;
  font-family: circular-bold, arial, sans-serif !important;
  font-size: 14px;
  text-align: left;
  background: #3dbca2;
  color: #eee;
  vertical-align: top;
  padding: .4em; }

.vemendo-weekview table tr:nth-child(1) td {
  border: none !important; }

.vemendo-weekview .dayviewevent > p.event-period {
  text-align: right !important;
  font-size: 0.75em !important;
  color: #000 !important;
  opacity: 1 !important;
  margin: 0 0 0 0 !important; }

.splitted .event-period, .splitted .event-location {
  top: 0px !important;
  float: none !important;
  text-align: left !important; }

.checkBox {
  height: 1.2em;
  width: 1.2em;
  border-radius: 0.4em;
  border: 0.16em #61bea2 solid;
  margin-right: 0.5em !important;
  margin-bottom: 0.3em;
  cursor: pointer; }

.checkBox.checked:before {
  display: inline-block;
  content: "\f00c";
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 1.25em;
  font-weight: normal;
  margin-left: 0.02em;
  margin-top: -0.25em;
  color: #000; }

.selectedBox {
  height: 1.2em;
  width: 1.2em;
  border-radius: 0.4em;
  border: 3px #61bea2 solid;
  margin-right: 0.5em !important;
  margin-bottom: 0.3em;
  cursor: pointer; }

.selectedBox.selected {
  height: 1.2em;
  width: 1,2em;
  border-radius: .4em;
  border: 3px #dada39 solid;
  margin-right: 0.5em !important;
  margin-bottom: 0.3em;
  cursor: pointer; }

.selectedBox:before {
  display: inline-block;
  content: "\f067";
  font: normal normal normal 14px/1 FontAwesome;
  font-size: .65em;
  font-weight: normal;
  margin-left: .24em;
  margin-top: .2em;
  color: #777; }

.selectedBox.selected:before {
  display: inline-block;
  content: "\f068";
  font: normal normal normal 14px/1 FontAwesome;
  font-size: .65em;
  font-weight: normal;
  margin-left: .24em;
  margin-top: .2em;
  color: #777; }

.stepIndicator {
  float: left;
  width: 1.6em;
  height: 1.4em;
  border-radius: 0.8em;
  background: #3dbca2;
  text-align: center;
  color: #fff;
  margin-right: 1em;
  line-height: 1.4em; }

.learningGoalText {
  color: #000 !important;
  /* not triggering  needs refix */
  display: block;
  font-weight: 600;
  margin-bottom: 1em; }

.odd-even > div:nth-child(odd) {
  background: #eeeeee !important; }

.dev .content-padded {
  padding: 1em; }

.dev .content-wrap {
  background-color: #fff;
  -ms-flex: 1;
  flex: 1;
  max-width: 800px;
  margin: 0 auto;
  min-height: 100%;
  position: relative;
  height: 200%; }

.renameable-text input {
  max-width: 2em; }

.edsSelected {
  text-align: center; }

.partialEditStudyPlanViewMode {
  font-size: 0.65em; }

.partialEditStudyPlanViewMode td.goalsSubject {
  font-size: 1.4em; }

.markedItem:before {
  display: inline-block;
  content: "\f00d";
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 1.25em;
  font-weight: normal;
  margin-left: .02em;
  margin-top: 0;
  color: #64bd36; }

.ked-latest-assessments pre {
  font-family: circular-book,arial,sans-serif;
  padding: 0;
  margin: 0;
  display: block;
  white-space: inherit; }

.ked-latest-assessments td:first-child {
  min-width: 5em; }

.completedStep {
  background: rgba(0, 255, 0, 0.18); }

.termCourseText {
  -webkit-transform: rotate(-57deg);
  -moz-transform: rotate(-57deg);
  -ms-transform: rotate(-57deg);
  -o-transform: rotate(-57deg);
  /* filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);*/
  width: 130px;
  height: 24px;
  /* border: 1px #f00 solid; */
  position: relative;
  left: -21px;
  top: 52px;
  line-height: 1.2em; }

th.termCourseHeader {
  height: 130px;
  max-width: 33px; }

.ked_boxed.termPlanContainer {
  overflow-x: auto; }

td.courseNote {
  width: 6em; }

.note {
  border: 1px #cfcfcf solid;
  height: 1em;
  max-width: 5.7em;
  cursor: pointer;
  border-radius: 4px; }

table.smallFont.termplanner-table {
  width: 100%; }

.termplanner-table .renameable-text, .stepCell .renameable-text {
  background: transparent;
  padding: 0;
  margin: 0;
  border: 0;
  border-radius: 0; }

.yellow, .note-color-yellow {
  background: #dada39; }

.cyan, .note-color-cyan {
  background: #3dbca2; }

.purple, .note-color-purple {
  background: #66318f; }

.red, .note-color-red {
  background: #e92b5e; }

.yellowLight, .note-color-yellowLight {
  background: rgba(218, 218, 57, 0.3); }

.cyanLight, .note-color-cyanLight {
  background: rgba(61, 188, 162, 0.3); }

.purpleLight, .note-color-purpleLight {
  background: rgba(102, 49, 143, 0.3); }

.redLight, .note-color-redLight {
  background: rgba(233, 43, 94, 0.3); }

.black {
  background: #000; }

.white {
  background: #fff; }

.grey1 {
  background: #38383d; }

.grey2 {
  background: #58595b; }

.grey3 {
  background: #96979a; }

.grey4 {
  background: #cfcfcf; }

.grey5 {
  background: #eeeeee; }

#weeklyPlanner h2 {
  margin-bottom: 0.7em !important; }

#weeklyPlanner h3 {
  margin-bottom: 0.7em !important;
  margin-top: 1.5em !important; }

#weeklyPlanner hr {
  margin-bottom: 1.4em !important; }

#weeklyPlanner .weekSelect {
  margin-top: 0.7em; }

#weeklyPlanner > .btn {
  margin: 0 0 2em 0; }

#weeklyPlanner > .btn {
  margin: 0.5em 0 1em 0; }

.btn.addOwnGoal {
  margin: 0.5em 0 1em 0; }

@media (max-width: 759px) {
  .weekPlanner {
    width: 100% !important;
    position: absolute;
    top: 54px;
    left: 0; } }

@media (max-width: 759px) {
  .ked_boxed.weekPlanner {
    height: 450px;
    overflow: auto; } }

.weekPlanner .btn {
  margin: 0 0 2em 0;
  margin-left: 0.7em;
  margin-bottom: 0.7em;
  text-align: left; }
  @media (max-width: 1399px) and (min-width: 1025px) {
    .weekPlanner .btn {
      max-width: 14em; } }
  @media (max-width: 1024px) and (min-width: 760px) {
    .weekPlanner .btn {
      max-width: 11.5em; } }
  @media (max-width: 759px) {
    .weekPlanner .btn {
      max-width: 12em; } }

.weekPlanner .btn:first-child {
  margin-left: 0; }

.weekPlanner h4 {
  font-family: circular-bold,arial,sans-serif;
  font-weight: normal;
  font-style: normal;
  font-size: 1.625em;
  color: #000;
  line-height: 1.15384615; }

.weekPlanner h3 + hr {
  display: none; }

.weekPlanner h3 {
  margin-top: 0em !important;
  margin-bottom: -12px !important; }

.weekPlanner .weekSelect {
  margin-top: 0.7em; }

.weekPlanner .weekSelect .btn {
  margin-bottom: 0;
  margin-left: 0; }

.learningGoalContainer .taskContainer div a.editItem {
  display: none; }

.learningGoalContainer .taskContainer div:hover a.editItem {
  display: inline-block; }

.learningGoalContainer br {
  display: none; }

.vemendo-weekview > table > tbody > tr > td {
  width: 16%; }

.vemendo-weekview > table > tbody > tr > td:nth-child(1) {
  width: 5%; }

blockquote.sv-blockquote {
  background: none !important;
  padding: 0 !important;
  width: 11em !important;
  float: left !important;
  margin: 0 0.6em 0.6em 0 !important; }

.vemendo-weekview > table td {
  margin: 0 !important;
  padding: 0 !important;
  border: 1px solid #96979a !important; }

.vemendo-weekview .dayviewevent {
  border: none !important;
  box-sizing: border-box !important;
  border-radius: 0 !important;
  padding: 0.25em !important;
  border-bottom: 1px #fff solid !important; }

.vemendo-weekview .dayviewevent > p.event-period {
  text-align: right !important;
  font-size: 0.75em !important;
  color: #000 !important;
  opacity: 1 !important;
  margin: 0 0 0 0 !important; }

.vemendo-weekview .dayviewevent > p.event-location {
  font-style: normal !important;
  opacity: 1 !important;
  color: #000 !important;
  font-size: 0.8em !important;
  float: right;
  font-style: italic !important; }

p.event-description {
  padding: 0 0.3em;
  position: relative;
  top: -17px;
  color: #000;
  font-size: 0.8em; }

.vemendo-weekview .dayview {
  width: 100% !important;
  box-sizing: border-box !important; }

.vemendo-weekview .hourmarker {
  margin-top: 0.5em !important;
  color: #3dbca2 !important;
  font-size: 0.8em !important;
  width: 5em !important;
  margin-left: 0.4em !important;
  display: block !important; }

.vemendo-weekview p.week-number {
  font-family: circular-bold,arial,sans-serif !important;
  text-align: center !important;
  padding: 6px 2px 6px 0px !important;
  margin: 0 !important;
  font-size: 1.7em !important;
  color: #000 !important; }

.full-day:last-child {
  margin-bottom: 1em !important; }

.vemendo-weekview .dayviewevent > p {
  margin: 0;
  text-align: inherit; }

p.event-title {
  color: #000 !important;
  font-size: 0.8em;
  font-family: circular-bold,arial,sans-serif; }

.vemendo-weekview table tr:nth-child(1) {
  background: #3dbca2;
  border: none; }

.vemendo-weekview .dayname {
  width: 100% !important;
  text-align: left !important;
  margin: 0 !important;
  padding: 0.5em !important;
  color: #eee !important;
  background: inherit;
  font-size: 0.9em;
  font-family: circular-book,arial,sans-serif !important; }

.vemendo-weekview table tr:nth-child(1) .dayname {
  background: #3dbca2;
  font-family: circular-bold,arial,sans-serif !important;
  font-size: 14px;
  text-align: left;
  background: #3dbca2;
  color: #eee;
  vertical-align: top;
  padding: .4em; }

.vemendo-weekview table tr:nth-child(1) td {
  border: none !important; }

/* ********************** */
.kedcalendar .btn-toolbar {
  padding-bottom: 4px; }

.kedcalendar .btn-toolbar .btn-group {
  display: table-cell;
  padding: 8px 10px 8px 0; }

.vemendo-weekview {
  font-family: Arial, sans-serif;
  font-size: 9pt;
  position: relative;
  line-height: 1; }

.vemendo-weekview .big-button {
  width: 100%;
  position: absolute;
  top: 50%;
  left: 50%; }

.vemendo-weekview > table {
  border-collapse: collapse; }

.vemendo-weekview > table td {
  margin: 0;
  padding: 0;
  border: 1px solid #eee;
  border-bottom: 0; }

.vemendo-weekview p.week-number {
  text-align: left;
  padding: 6px 2px 6px 0;
  margin: 0;
  color: #778; }

.vemendo-weekview .dayview {
  width: 140px;
  box-sizing: border-box; }

.vemendo-weekview .dayname {
  width: 100%;
  text-align: left;
  margin: 0; }

.vemendo-weekview .dayviewevent {
  border: 1px dotted #888;
  box-sizing: border-box;
  border-radius: 1.5px; }

.vemendo-weekview .dayviewevent > p {
  margin: 0 .2em 0 .2em;
  text-align: left; }

.vemendo-weekview .dayviewevent > p.event-period {
  text-align: left;
  font-size: 7pt;
  opacity: .6;
  margin: 2px 0 0 0; }

.vemendo-weekview .dayviewevent > p.event-location {
  font-style: italic;
  opacity: .6; }

.vemendo-weekview .statusbar {
  line-height: 10pt; }

.vemendo-weekview .status {
  margin: 1px;
  color: #89a; }

.vemendo-weekview .error {
  margin: 1px;
  color: red; }

.vemendo-weekview .hourmarker {
  color: #778;
  font-size: 6.5pt;
  width: 24px; }

.vemendo-weekview .timeline {
  border-top: dotted 1px;
  border-bottom: solid 1px;
  border-color: #eeeef2; }

.vemendo-weekview .dayviewevent {
  border: none !important;
  box-sizing: border-box !important;
  border-radius: 3px !important;
  padding: 0 !important;
  border-bottom: none !important;
  -webkit-box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.24);
  box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.24);
  border-top: 1px rgba(255, 255, 255, 0.51) solid !important; }

.vemendo-weekview .timeline {
  border-top: dashed 1px;
  border-bottom: dashed 1px;
  background: #f9f9f8;
  background: rgba(0, 0, 0, 0.02);
  border-color: #dedede; }

.vemendo-weekview .today {
  background: #ffffe9; }

a.event-title {
  background: rgba(255, 255, 255, 0.31);
  display: block;
  text-decoration: none;
  font-family: circular-bold;
  padding: .16em .25em;
  font-size: 1.2em;
  position: relative; }

.dayviewevent.full-day {
  max-height: 73px;
  overflow: hidden;
  display: grid; }

.full-day .event-description {
  display: none; }

a.event-title .dayviewevent.full-day {
  font-family: circular-book !important; }

.weekPlanner.currentWeek .weekSelect p {
  font-style: normal;
  font-weight: bold; }

.confirmation-box {
  transition: max-height 0.15s;
  overflow: hidden;
  max-height: 0; }

.confirmation-box.visible {
  max-height: 70px; }

.weekPlanner .weekSelect p {
  font-style: normal;
  color: #bfbfbf; }

.weekPlanner.currentWeek .weekSelect p {
  font-style: normal;
  font-weight: bold;
  color: #000; }

.gcal-palette-1 {
  background-color: #e1e1e1; }

.gcal-palette-2 {
  background-color: #dbadff; }

.gcal-palette-3 {
  background-color: #dc2127; }

.gcal-palette-4 {
  background-color: #ff887c; }

.gcal-palette-5 {
  background-color: #ffb878; }

.gcal-palette-6 {
  background-color: #fbd75b; }

.gcal-palette-7 {
  background-color: #51b749; }

.gcal-palette-8 {
  background-color: #7ae7bf; }

.gcal-palette-9 {
  background-color: #46d6db; }

.gcal-palette-10 {
  background-color: #a4bdfc; }

.gcal-palette-11 {
  background-color: #5484ed; }

.gcal-palette-12 {
  background-color: #dbadff; }

.gcal-palette-13 {
  background-color: #dc2127; }

.gcal-palette-14 {
  background-color: #ff887c; }

.gcal-palette-15 {
  background-color: #ffb878; }

.gcal-palette-16 {
  background-color: #fbd75b; }

.gcal-palette-17 {
  background-color: #51b749; }

.gcal-palette-18 {
  background-color: #7ae7bf; }

.gcal-palette-19 {
  background-color: #46d6db; }

.gcal-palette-20 {
  background-color: #a4bdfc; }

.gcal-palette-21 {
  background-color: #5484ed; }

.gcal-palette-22 {
  background-color: #5484ed; }

.gcal-palette-23 {
  background-color: #5484ed; }

.gcal-palette-24 {
  background-color: #5484ed; }

.gcal-palette-25 {
  background-color: #5484ed; }

.scheduleColor01, .course-event-aff {
  background-color: #df9b9b; }

.scheduleColor02, .course-event-bas, .course-event-bg {
  background-color: #a0a1d0; }

.scheduleColor03, .course-event-bio {
  background-color: #8ad3c4; }

.scheduleColor04, .course-event-eng, .course-event-en {
  background-color: #cc9191; }

.scheduleColor05, .course-event-ent {
  background-color: #e4e4e4; }

.scheduleColor06, .course-event-mu {
  background-color: #adaee5; }

.scheduleColor07, .course-event-est, .course-event-bd, .course-event-sl {
  background-color: #fafa51; }

.scheduleColor08, .course-event-etn {
  background-color: #bc8888; }

.scheduleColor09, .course-event-fil {
  background-color: #f6a7a7; }

.scheduleColor10, .course-event-fys {
  background-color: #78cdbc; }

.scheduleColor11, .course-event-for, .course-event-kur, .course-event-fy .course-event-ke, .course-event-te, .course-event-ge, .course-event-hi, .course-event-re, .course-event-sa, .course-event-no, .course-event-so, .course-event-ku {
  background-color: #b8b9e8; }

.scheduleColor12, .course-event-geo {
  background-color: #8c8db0; }

.scheduleColor13, .course-event-gym {
  background-color: #a0a3e2; }

.scheduleColor14, .course-event-his {
  background-color: #e1e175; }

.scheduleColor15, .course-event-hum {
  background-color: #cccccc; }

.scheduleColor16, .course-event-idh, .course-event-id {
  background-color: #6aa195; }

.scheduleColor17, .course-event-int {
  background-color: #e0e0e0; }

.scheduleColor18 {
  background-color: #df9b9b; }

.scheduleColor19, .course-event-jou {
  background-color: #cfcfcf; }

.scheduleColor20, .course-event-kem {
  background-color: #a87abe; }

.scheduleColor21, .course-event-kom {
  background-color: #e297e2; }

.scheduleColor22, .course-event-led {
  background-color: #f6a7a7; }

.scheduleColor23, .course-event-mar {
  background-color: #9d9d9d; }

.scheduleColor24, .course-event-mat, .course-event-ma {
  background-color: #e1e175; }

.scheduleColor25, .course-event-med {
  background-color: #e4e4e4; }

.scheduleColor26 {
  background-color: #8c8db0; }

.scheduleColor27, .course-event-man {
  background-color: #a0a3e2; }

.scheduleColor28, .course-event-nat {
  background-color: #bcbc6c; }

.scheduleColor29, .course-event-ph {
  background-color: #4ffafa; }

.scheduleColor30, .course-event-pri {
  background-color: #faa4fa; }

.scheduleColor31, .course-event-psy, .course-event-lun, .course-event-ras, .course-event-ra {
  background-color: #cf7aae; }

.scheduleColor32, .course-event-rel {
  background-color: #df9b9b; }

.scheduleColor33, .course-event-rat {
  background-color: #b680cf; }

.scheduleColor34, .course-event-sam {
  background-color: #e2e251; }

.scheduleColor35, .course-event-soc {
  background-color: #78cdbc; }

.scheduleColor36, .course-event-sve, .course-event-sva {
  background-color: #9c9ee4; }

.scheduleColor37, .course-event-tek {
  background-color: #d891fa; }

.scheduleColor38, .course-event-tys, .course-event-fra, .course-event-spa, .course-event-sp, .course-event-fr, .course-event-ty {
  background-color: #8c8db0; }

.scheduleColor39, .course-event-wor {
  background-color: #e7e797; }

.scheduleColor40 {
  background-color: #d891fa; }

.scheduleColor41 {
  background-color: #000; }

.scheduleColor42 {
  background-color: #000; }

.renameable-text.unnamed {
  font-style: italic; }

.weekplanner-textarea {
  margin-left: 0px;
  padding: 10px;
  font-size: 0.8em;
  width: 95%;
  min-height: 300px; }

.weekPlanner h4 {
  font-family: circular-bold, arial, sans-serif;
  font-weight: normal;
  font-style: normal;
  font-size: 1.625em;
  color: #727272;
  line-height: 1.15384615; }

.weekPlanner.currentWeek .weekSelect p {
  font-style: normal;
  font-weight: bold;
  color: #717171; }

.weekplanner-textarea {
  width: 95%;
  width: -webkit-fill-available;
  height: 100px; }

.weekPlanner .openClose {
  margin-top: 1em; }

.ked_boxed.weekPlanner {
  background: #bdd2ce; }

.editTaskDialog {
  min-height: 440px;
  width: 470px; }

.deleteDate:before {
  display: inline-block;
  content: "\f273";
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 1.25em;
  font-weight: normal;
  margin-left: .8em;
  margin-top: 0.26em;
  color: #d55858; }

.horizontalButton {
  display: table-cell;
  /* margin-top: 2em; */ }

.editTaskDialog .divider {
  display: block;
  clear: both;
  margin-bottom: 1em; }

.editTaskDialog .divider.large {
  margin-bottom: 3em; }

.dateSet {
  display: inline;
  color: #866868;
  margin-left: 0.3em; }

.dateSet.expired {
  color: #da4444; }

label.kclabel {
  /* Align with the styling of h4 */
  font-family: circular-bold,arial,sans-serif;
  font-weight: normal;
  font-style: normal;
  font-size: 1.125em;
  color: #000;
  line-height: 1.11111111;
  margin-top: 0.5em;
  /* Add some margin */
  margin-bottom: 0.5em;
  /* add some margin */
  display: block; }

.subtasks {
  margin-left: 1.5em;
  margin-bottom: 1em; }

.editItem {
  margin-left: 0.4em;
  cursor: pointer;
  height: 1em;
  width: 1.4em; }

.editTaskDialog a.btn.btn-warning {
  margin-left: 9em; }

a.btn.btn-inac_tiv_e {
  opacity: 1 !important;
  margin-right: 0.5em; }

.weekSelect .horizontalItem {
  display: table-cell; }

.weekSelect .horizontalItem:nth-child(1) {
  padding-right: 0.8em; }

.weekSelect {
  float: right;
  display: inline-block;
  height: 2em; }

.week-navigation .btn-group {
  box-shadow: none; }

.week-navigation .btn .fa {
  margin-right: 0 !important; }

.courseBuilderMainContainer {
  padding: 0 1em 2em 1em;
  background: #fff !important;
  margin-bottom: 3em;
  -webkit-box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.4);
  box-shadow: 0 0 50px 0 rgba(0, 0, 0, 0.4);
  -webkit-border-radius: 2px;
  border-radius: 2px; }

.courseBuilderMainContainer .pagecontent {
  padding: 0; }

.inputTextBox {
  width: 100%;
  width: -webkit-fill-available;
  background: #fff;
  border: 1px #ddd solid;
  border-radius: 5px;
  padding: .5em;
  overflow: auto;
  margin-left: 0; }

textarea {
  width: 100%;
  width: -webkit-fill-available;
  margin-left: 0;
  height: 70px; }

.renameable-text input[type="text"] {
  min-width: 100%; }

.courseBuilderMainContainer .ked_boxed .btn {
  background: #3dbca2; }

.courseBuilderMainContainer .ked_boxed .btn a,
.courseBuilderMainContainer .ked_boxed .nav-header {
  color: #fff !important; }

.courseBuilderMainContainer input[type="text"] {
  margin-left: 0;
  width: -webkit-fill-available !important; }

.renameable-text {
  background: #fff;
  padding: 0.2em;
  margin-top: 1em;
  border: 1px #dddddd solid;
  cursor: text;
  border-radius: 5px;
  min-height: 29px; }

.schoolCourse {
  padding: .3em;
  display: grid;
  padding-bottom: 0.5em; }

.schoolCourse p {
  line-height: 1.2em;
  margin-bottom: .4em;
  margin-top: .3em; }

.schoolCourse .small {
  font-size: 0.6em !important; }

.horizontalMenu li {
  margin-left: 0 !important; }

div.course-builder {
  width: 100%; }

div.course-builder.status {
  padding-left: 2px;
  margin-left: -13px;
  border-left-width: 11px;
  border-left-style: solid; }

div.course-builder.status.unsaved {
  border-left-color: #f8f868; }

div.course-builder.status.error {
  border-left-color: red; }

.drop-zone {
  width: 600px;
  height: 50px;
  border: 2px dotted #bbb;
  border-radius: 10px;
  padding: 50px 25px 25px 25px;
  margin-bottom: 25px;
  text-align: center;
  color: #bbb; }

.marked-area {
  border: 2px dotted #5a5;
  border-radius: 3px; }

.entity-list .complete {
  color: green;
  font-weight: bold; }

.entity-list .incomplete {
  font-style: italic; }

.entity-list .selected a {
  border: 1px dashed #bbb;
  cursor: default; }

.error-success-feedback {
  top: 200px;
  font-weight: bold; }

.error-success-feedback .error {
  background-color: rgba(200, 100, 100, 0.9);
  padding: 5px; }

.error-success-feedback .info {
  background-color: rgba(100, 200, 100, 0.9);
  padding: 5px; }

.inputTextBox {
  width: 100%;
  background: #fff;
  border: 1px #ddd solid;
  border-radius: 5px;
  padding: 0.5em;
  overflow: auto; }

.inputTextLarge {
  height: 10em; }

.inputTextSmall {
  height: 2em; }

p.subHeader {
  margin-top: -1em;
  margin-bottom: 1em;
  font-style: italic; }

.spaced > div {
  padding: 5px; }

.lines select, .spaced select {
  margin-bottom: 0 !important; }

.contentList, .abilityList {
  padding: 0.5em; }

.ked_boxed .openHeader {
  padding-top: 0.4em; }

.courseBuilderMainContainer .sv-grid-ksgs12 {
  display: inline-block; }

/*  Here be duplicates */
.taskContainer > * {
  display: block;
  margin-bottom: .3em; }

.taskContainer {
  margin-bottom: 0.6em; }

.taskContainer.odd-even > div:nth-child(odd) {
  background: #eeeeee !important; }

.markedGreen {
  background: rgba(0, 255, 0, 0.12) !important; }

.markedGreen.migrated {
  background: repeating-linear-gradient(45deg, #d4f6d4, #d4f6d4 10px, #fff 10px, #fff 20px) !important; }

.selectable.markedGreen.migrated:hover {
  background: #d4f6d4 !important; }

.markedRed {
  background: rgba(255, 0, 0, 0.12) !important; }

.pill.active {
  background-color: #49c35a;
  padding: 4px 7px;
  color: #fff;
  border-radius: 7px;
  line-height: 10px;
  font-size: 12px;
  margin-left: 11px; }

.warningFlag {
  float: right;
  margin-right: 1em;
  margin-top: 0.3em;
  color: #d55858;
  font-size: 1.2em; }

.removeItem {
  cursor: pointer;
  height: 1em;
  width: 1.4em; }

.removeItem:before {
  display: inline-block;
  content: "\f00d";
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 1.25em;
  font-weight: normal;
  margin-left: 0.02em;
  margin-top: 0;
  color: #d55858; }

.viewItem {
  cursor: pointer;
  height: 1em;
  width: 1.4em; }

.viewItem:before {
  display: inline-block;
  content: "\f06e";
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 1.25em;
  font-weight: normal;
  margin-left: 0.02em;
  margin-top: 0;
  color: #4f80cc; }

.editItem {
  cursor: pointer;
  height: 1em;
  width: 1.4em; }

.editItem:before {
  display: inline-block;
  content: "\f040";
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 1.25em;
  font-weight: normal;
  margin-left: 0.02em;
  margin-top: 0;
  color: #c9b145; }

.hideItem {
  cursor: pointer;
  height: 1em;
  width: 1.4em; }

.hideItem:before {
  display: inline-block;
  content: "\f070";
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 1.25em;
  font-weight: normal;
  margin-left: 0.02em;
  margin-top: 0;
  color: #ce786e; }

.showItem {
  cursor: pointer;
  height: 1em;
  width: 1.4em; }

.showItem:before {
  display: inline-block;
  content: "\f06e";
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 1.25em;
  font-weight: normal;
  margin-left: 0.02em;
  margin-top: 0;
  color: #5c9655; }

.schoolCourse {
  padding: 0.3em;
  display: grid;
  padding-bottom: none; }

.schoolCourse a {
  font-family: circular-bold, arial, sans-serif;
  font-weight: normal;
  font-style: normal;
  font-size: 1em;
  color: #000000 !important;
  line-height: 1;
  text-decoration: none; }

.studentCourse a {
  font-family: circular-bold, arial, sans-serif;
  font-weight: normal;
  font-style: normal;
  font-size: 1em;
  color: #000000 !important;
  line-height: 1;
  text-decoration: none; }

.studentCourse {
  padding: 0.3em;
  display: grid;
  padding-bottom: 1em; }

.studentCourse p {
  line-height: 1.2em;
  margin-bottom: 0.5em;
  margin-top: 0.3em; }

.studentCourse p.small {
  color: #565656;
  font-size: 0.8em;
  line-height: 1em;
  padding: 0;
  margin: 0.4em 0 0 0; }

.contentPart.contentAlert {
  border-left: 4px #d55858 solid; }

.contentPart {
  display: block;
  margin-bottom: 0.5em;
  padding: 0 0.4em;
  border-left: 4px #74d07b solid; }

.contentText p {
  font-size: 1.0em;
  padding: 0 1em 0.5em 1em; }

.contentUsage {
  float: right;
  color: #000; }

.schoolCourse {
  padding: 0.3em;
  display: grid;
  padding-bottom: 1em; }

.schoolCourse p {
  line-height: 1.2em;
  margin-bottom: 0.5em;
  margin-top: 0.3em; }

p.criteriaText {
  line-height: 1.3em; }

p.abilityText {
  line-height: 1.3em !important; }

p.criteriaText, p.abilityText {
  line-height: 1.3em;
  font-size: 0.7em; }

.criteriaText strong {
  font-weight: normal;
  padding: 0 4px 3px 4px;
  background: #f8f89f;
  border-radius: 5px; }

.selectable {
  cursor: pointer;
  word-break: break-word; }

.selectable:hover {
  background: #d4f6d4 !important; }

ul.entity-list li {
  margin-left: 3em; }

.course-module .removeItem {
  top: 0.7em !important;
  right: 0.4em !important; }

.course-module textarea.inputTextBox.inputTextLarge, .course-info textarea.inputTextBox.inputTextLarge, .course-info textarea.inputTextBox.inputTextSmall {
  width: 98%; }

.course-module h4 {
  margin-top: 1.5em !important; }

.week-period-div > div {
  float: left;
  padding: 0 12px 0 0; }

.week-period-div > br {
  float: none;
  clear: both; }

.week-period-div {
  font-size: 0.8em;
  margin-bottom: 0.5em; }

.side-dialog {
  position: fixed;
  top: 0;
  right: 0;
  width: 580px;
  background-color: #fff;
  border-radius: 5px;
  border: 1px solid #222;
  box-shadow: #222 8px 2;
  padding: 12px;
  max-height: 100%;
  overflow-y: auto; }

.side-dialog-option {
  width: 166px;
  float: left;
  padding: 2px;
  margin: 4px;
  border-radius: 4px;
  border: 3px solid #ddd; }

.side-dialog-option:not(.choosen):not(.covered) {
  border: 3px dotted #ddd; }

.side-dialog-option:not(.choosen):hover {
  border: 3px solid #aaa;
  cursor: pointer; }

.side-dialog-option.choosen {
  opacity: 0.5;
  font-style: italic;
  border: 3px solid #ddd; }

.side-dialog-option.covered {
  background-color: #dfd; }

.removeItem.upperRight {
  position: absolute;
  top: -1px;
  right: -11px; }

.warning-box {
  border: 1px solid #ccc;
  padding: 0.5em;
  margin-top: 0.5em;
  margin-bottom: 1em;
  border-radius: 5px; }

.editable-school-list table td p {
  padding: 0 16px 0 16px;
  margin: 0; }

.teachers-list input {
  padding: 0;
  margin: 0;
  border: none;
  border-radius: 0;
  width: auto;
  min-width: 0; }

.task-search-result.fixed {
  /*position: fixed;
    height: 80%;
    overflow-y: auto;*/
  padding-right: 2em; }

.ked-courseviewer img {
  margin-bottom: 0.5em; }

.ked-courseviewer .sv-html-portlet.sv-portlet {
  clear: both; }

.ked-courseviewer .pageHeader {
  margin-right: -2.3em; }

.react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle, .react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle, .react-datepicker__year-read-view--down-arrow,
.react-datepicker__month-read-view--down-arrow,
.react-datepicker__month-year-read-view--down-arrow {
  margin-left: -8px;
  position: absolute; }
  .react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle, .react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle, .react-datepicker__year-read-view--down-arrow,
  .react-datepicker__month-read-view--down-arrow,
  .react-datepicker__month-year-read-view--down-arrow, .react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle::before, .react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle::before, .react-datepicker__year-read-view--down-arrow::before,
  .react-datepicker__month-read-view--down-arrow::before,
  .react-datepicker__month-year-read-view--down-arrow::before {
    box-sizing: content-box;
    position: absolute;
    border: 8px solid transparent;
    height: 0;
    width: 1px; }
  .react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle::before, .react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle::before, .react-datepicker__year-read-view--down-arrow::before,
  .react-datepicker__month-read-view--down-arrow::before,
  .react-datepicker__month-year-read-view--down-arrow::before {
    content: "";
    z-index: -1;
    border-width: 8px;
    left: -8px;
    border-bottom-color: #aeaeae; }

.react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle {
  top: 0;
  margin-top: -8px; }
  .react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle, .react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle::before {
    border-top: none;
    border-bottom-color: #f0f0f0; }
  .react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle::before {
    top: -1px;
    border-bottom-color: #aeaeae; }

.react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle, .react-datepicker__year-read-view--down-arrow,
.react-datepicker__month-read-view--down-arrow,
.react-datepicker__month-year-read-view--down-arrow {
  bottom: 0;
  margin-bottom: -8px; }
  .react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle, .react-datepicker__year-read-view--down-arrow,
  .react-datepicker__month-read-view--down-arrow,
  .react-datepicker__month-year-read-view--down-arrow, .react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle::before, .react-datepicker__year-read-view--down-arrow::before,
  .react-datepicker__month-read-view--down-arrow::before,
  .react-datepicker__month-year-read-view--down-arrow::before {
    border-bottom: none;
    border-top-color: #fff; }
  .react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle::before, .react-datepicker__year-read-view--down-arrow::before,
  .react-datepicker__month-read-view--down-arrow::before,
  .react-datepicker__month-year-read-view--down-arrow::before {
    bottom: -1px;
    border-top-color: #aeaeae; }

.react-datepicker-wrapper {
  display: inline-block; }

.react-datepicker {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 0.8rem;
  background-color: #fff;
  color: #000;
  border: 1px solid #aeaeae;
  border-radius: 0.3rem;
  display: inline-block;
  position: relative; }

.react-datepicker--time-only .react-datepicker__triangle {
  left: 35px; }

.react-datepicker--time-only .react-datepicker__time-container {
  border-left: 0; }

.react-datepicker--time-only .react-datepicker__time {
  border-radius: 0.3rem; }

.react-datepicker--time-only .react-datepicker__time-box {
  border-radius: 0.3rem; }

.react-datepicker__triangle {
  position: absolute;
  left: 50px; }

.react-datepicker-popper {
  z-index: 1; }
  .react-datepicker-popper[data-placement^="bottom"] {
    margin-top: 10px; }
  .react-datepicker-popper[data-placement^="top"] {
    margin-bottom: 10px; }
  .react-datepicker-popper[data-placement^="right"] {
    margin-left: 8px; }
    .react-datepicker-popper[data-placement^="right"] .react-datepicker__triangle {
      left: auto;
      right: 42px; }
  .react-datepicker-popper[data-placement^="left"] {
    margin-right: 8px; }
    .react-datepicker-popper[data-placement^="left"] .react-datepicker__triangle {
      left: 42px;
      right: auto; }

.react-datepicker__header {
  text-align: center;
  background-color: #f0f0f0;
  border-bottom: 1px solid #aeaeae;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem;
  padding-top: 8px;
  position: relative; }
  .react-datepicker__header--time {
    padding-bottom: 8px;
    padding-left: 5px;
    padding-right: 5px; }

.react-datepicker__year-dropdown-container--select,
.react-datepicker__month-dropdown-container--select,
.react-datepicker__month-year-dropdown-container--select,
.react-datepicker__year-dropdown-container--scroll,
.react-datepicker__month-dropdown-container--scroll,
.react-datepicker__month-year-dropdown-container--scroll {
  display: inline-block;
  margin: 0 2px; }

.react-datepicker__current-month,
.react-datepicker-time__header {
  margin-top: 0;
  color: #000;
  font-weight: bold;
  font-size: 0.944rem; }

.react-datepicker-time__header {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden; }

.react-datepicker__navigation {
  background: none;
  line-height: 1.7rem;
  text-align: center;
  cursor: pointer;
  position: absolute;
  top: 10px;
  width: 0;
  padding: 0;
  border: 0.45rem solid transparent;
  z-index: 1; }
  .react-datepicker__navigation--previous {
    left: 10px;
    border-right-color: #ccc; }
    .react-datepicker__navigation--previous:hover {
      border-right-color: #b3b3b3; }
    .react-datepicker__navigation--previous--disabled, .react-datepicker__navigation--previous--disabled:hover {
      border-right-color: #e6e6e6;
      cursor: default; }
  .react-datepicker__navigation--next {
    right: 10px;
    border-left-color: #ccc; }
    .react-datepicker__navigation--next--with-time:not(.react-datepicker__navigation--next--with-today-button) {
      right: 80px; }
    .react-datepicker__navigation--next:hover {
      border-left-color: #b3b3b3; }
    .react-datepicker__navigation--next--disabled, .react-datepicker__navigation--next--disabled:hover {
      border-left-color: #e6e6e6;
      cursor: default; }
  .react-datepicker__navigation--years {
    position: relative;
    top: 0;
    display: block;
    margin-left: auto;
    margin-right: auto; }
    .react-datepicker__navigation--years-previous {
      top: 4px;
      border-top-color: #ccc; }
      .react-datepicker__navigation--years-previous:hover {
        border-top-color: #b3b3b3; }
    .react-datepicker__navigation--years-upcoming {
      top: -4px;
      border-bottom-color: #ccc; }
      .react-datepicker__navigation--years-upcoming:hover {
        border-bottom-color: #b3b3b3; }

.react-datepicker__month-container {
  float: left; }

.react-datepicker__month {
  margin: 0.4rem;
  text-align: center; }

.react-datepicker__time-container {
  float: right;
  border-left: 1px solid #aeaeae;
  width: 70px; }
  .react-datepicker__time-container--with-today-button {
    display: inline;
    border: 1px solid #aeaeae;
    border-radius: 0.3rem;
    position: absolute;
    right: -72px;
    top: 0; }
  .react-datepicker__time-container .react-datepicker__time {
    position: relative;
    background: white; }
    .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box {
      width: 70px;
      overflow-x: hidden;
      margin: 0 auto;
      text-align: center; }
      .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list {
        list-style: none;
        margin: 0;
        height: calc(195px + (1.7rem / 2));
        overflow-y: scroll;
        padding-right: 30px;
        width: 100%;
        box-sizing: content-box; }
        .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item {
          padding: 5px 10px; }
          .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item:hover {
            cursor: pointer;
            background-color: #f0f0f0; }
          .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item--selected {
            background-color: #216ba5;
            color: white;
            font-weight: bold; }
            .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item--selected:hover {
              background-color: #216ba5; }
          .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item--disabled {
            color: #ccc; }
            .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item--disabled:hover {
              cursor: default;
              background-color: transparent; }

.react-datepicker__week-number {
  color: #ccc;
  display: inline-block;
  width: 1.7rem;
  line-height: 1.7rem;
  text-align: center;
  margin: 0.166rem; }
  .react-datepicker__week-number.react-datepicker__week-number--clickable {
    cursor: pointer; }
    .react-datepicker__week-number.react-datepicker__week-number--clickable:hover {
      border-radius: 0.3rem;
      background-color: #f0f0f0; }

.react-datepicker__day-names,
.react-datepicker__week {
  white-space: nowrap; }

.react-datepicker__day-name,
.react-datepicker__day,
.react-datepicker__time-name {
  color: #000;
  display: inline-block;
  width: 1.7rem;
  line-height: 1.7rem;
  text-align: center;
  margin: 0.166rem; }

.react-datepicker__day {
  cursor: pointer; }
  .react-datepicker__day:hover {
    border-radius: 0.3rem;
    background-color: #f0f0f0; }
  .react-datepicker__day--today {
    font-weight: bold; }
  .react-datepicker__day--highlighted {
    border-radius: 0.3rem;
    background-color: #3dcc4a;
    color: #fff; }
    .react-datepicker__day--highlighted:hover {
      background-color: #32be3f; }
    .react-datepicker__day--highlighted-custom-1 {
      color: magenta; }
    .react-datepicker__day--highlighted-custom-2 {
      color: green; }
  .react-datepicker__day--selected, .react-datepicker__day--in-selecting-range, .react-datepicker__day--in-range {
    border-radius: 0.3rem;
    background-color: #216ba5;
    color: #fff; }
    .react-datepicker__day--selected:hover, .react-datepicker__day--in-selecting-range:hover, .react-datepicker__day--in-range:hover {
      background-color: #1d5d90; }
  .react-datepicker__day--keyboard-selected {
    border-radius: 0.3rem;
    background-color: #2a87d0;
    color: #fff; }
    .react-datepicker__day--keyboard-selected:hover {
      background-color: #1d5d90; }
  .react-datepicker__day--in-selecting-range:not(.react-datepicker__day--in-range) {
    background-color: rgba(33, 107, 165, 0.5); }
  .react-datepicker__month--selecting-range .react-datepicker__day--in-range:not(.react-datepicker__day--in-selecting-range) {
    background-color: #f0f0f0;
    color: #000; }
  .react-datepicker__day--disabled {
    cursor: default;
    color: #ccc; }
    .react-datepicker__day--disabled:hover {
      background-color: transparent; }

.react-datepicker__input-container {
  position: relative;
  display: inline-block; }

.react-datepicker__year-read-view,
.react-datepicker__month-read-view,
.react-datepicker__month-year-read-view {
  border: 1px solid transparent;
  border-radius: 0.3rem; }
  .react-datepicker__year-read-view:hover,
  .react-datepicker__month-read-view:hover,
  .react-datepicker__month-year-read-view:hover {
    cursor: pointer; }
    .react-datepicker__year-read-view:hover .react-datepicker__year-read-view--down-arrow,
    .react-datepicker__year-read-view:hover .react-datepicker__month-read-view--down-arrow,
    .react-datepicker__month-read-view:hover .react-datepicker__year-read-view--down-arrow,
    .react-datepicker__month-read-view:hover .react-datepicker__month-read-view--down-arrow,
    .react-datepicker__month-year-read-view:hover .react-datepicker__year-read-view--down-arrow,
    .react-datepicker__month-year-read-view:hover .react-datepicker__month-read-view--down-arrow {
      border-top-color: #b3b3b3; }
  .react-datepicker__year-read-view--down-arrow,
  .react-datepicker__month-read-view--down-arrow,
  .react-datepicker__month-year-read-view--down-arrow {
    border-top-color: #ccc;
    float: right;
    margin-left: 20px;
    top: 8px;
    position: relative;
    border-width: 0.45rem; }

.react-datepicker__year-dropdown,
.react-datepicker__month-dropdown,
.react-datepicker__month-year-dropdown {
  background-color: #f0f0f0;
  position: absolute;
  width: 50%;
  left: 25%;
  top: 30px;
  z-index: 1;
  text-align: center;
  border-radius: 0.3rem;
  border: 1px solid #aeaeae; }
  .react-datepicker__year-dropdown:hover,
  .react-datepicker__month-dropdown:hover,
  .react-datepicker__month-year-dropdown:hover {
    cursor: pointer; }
  .react-datepicker__year-dropdown--scrollable,
  .react-datepicker__month-dropdown--scrollable,
  .react-datepicker__month-year-dropdown--scrollable {
    height: 150px;
    overflow-y: scroll; }

.react-datepicker__year-option,
.react-datepicker__month-option,
.react-datepicker__month-year-option {
  line-height: 20px;
  width: 100%;
  display: block;
  margin-left: auto;
  margin-right: auto; }
  .react-datepicker__year-option:first-of-type,
  .react-datepicker__month-option:first-of-type,
  .react-datepicker__month-year-option:first-of-type {
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem; }
  .react-datepicker__year-option:last-of-type,
  .react-datepicker__month-option:last-of-type,
  .react-datepicker__month-year-option:last-of-type {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border-bottom-left-radius: 0.3rem;
    border-bottom-right-radius: 0.3rem; }
  .react-datepicker__year-option:hover,
  .react-datepicker__month-option:hover,
  .react-datepicker__month-year-option:hover {
    background-color: #ccc; }
    .react-datepicker__year-option:hover .react-datepicker__navigation--years-upcoming,
    .react-datepicker__month-option:hover .react-datepicker__navigation--years-upcoming,
    .react-datepicker__month-year-option:hover .react-datepicker__navigation--years-upcoming {
      border-bottom-color: #b3b3b3; }
    .react-datepicker__year-option:hover .react-datepicker__navigation--years-previous,
    .react-datepicker__month-option:hover .react-datepicker__navigation--years-previous,
    .react-datepicker__month-year-option:hover .react-datepicker__navigation--years-previous {
      border-top-color: #b3b3b3; }
  .react-datepicker__year-option--selected,
  .react-datepicker__month-option--selected,
  .react-datepicker__month-year-option--selected {
    position: absolute;
    left: 15px; }

.react-datepicker__close-icon {
  background-color: transparent;
  border: 0;
  cursor: pointer;
  display: inline-block;
  height: 0;
  outline: 0;
  padding: 0;
  vertical-align: middle; }
  .react-datepicker__close-icon::after {
    background-color: #216ba5;
    border-radius: 50%;
    bottom: 0;
    box-sizing: border-box;
    color: #fff;
    content: "\00d7";
    cursor: pointer;
    font-size: 12px;
    height: 16px;
    width: 16px;
    line-height: 1;
    margin: -8px auto 0;
    padding: 2px;
    position: absolute;
    right: 7px;
    text-align: center;
    top: 50%; }

.react-datepicker__today-button {
  background: #f0f0f0;
  border-top: 1px solid #aeaeae;
  cursor: pointer;
  text-align: center;
  font-weight: bold;
  padding: 5px 0;
  clear: left; }

.react-datepicker__portal {
  position: fixed;
  width: 100vw;
  height: 100vh;
  background-color: rgba(0, 0, 0, 0.8);
  left: 0;
  top: 0;
  justify-content: center;
  align-items: center;
  display: flex;
  z-index: 2147483647; }
  .react-datepicker__portal .react-datepicker__day-name,
  .react-datepicker__portal .react-datepicker__day,
  .react-datepicker__portal .react-datepicker__time-name {
    width: 3rem;
    line-height: 3rem; }
  @media (max-width: 400px), (max-height: 550px) {
    .react-datepicker__portal .react-datepicker__day-name,
    .react-datepicker__portal .react-datepicker__day,
    .react-datepicker__portal .react-datepicker__time-name {
      width: 2rem;
      line-height: 2rem; } }
  .react-datepicker__portal .react-datepicker__current-month,
  .react-datepicker__portal .react-datepicker-time__header {
    font-size: 1.44rem; }
  .react-datepicker__portal .react-datepicker__navigation {
    border: 0.81rem solid transparent; }
  .react-datepicker__portal .react-datepicker__navigation--previous {
    border-right-color: #ccc; }
    .react-datepicker__portal .react-datepicker__navigation--previous:hover {
      border-right-color: #b3b3b3; }
    .react-datepicker__portal .react-datepicker__navigation--previous--disabled, .react-datepicker__portal .react-datepicker__navigation--previous--disabled:hover {
      border-right-color: #e6e6e6;
      cursor: default; }
  .react-datepicker__portal .react-datepicker__navigation--next {
    border-left-color: #ccc; }
    .react-datepicker__portal .react-datepicker__navigation--next:hover {
      border-left-color: #b3b3b3; }
    .react-datepicker__portal .react-datepicker__navigation--next--disabled, .react-datepicker__portal .react-datepicker__navigation--next--disabled:hover {
      border-left-color: #e6e6e6;
      cursor: default; }

.carousel {
  position: relative;
  margin-bottom: 20px;
  line-height: 1; }

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden; }

.carousel-inner > .item {
  position: relative;
  display: none;
  -webkit-transition: 0.6s ease-in-out left;
  -moz-transition: 0.6s ease-in-out left;
  -o-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left; }

.carousel-inner > .item > img, .carousel-inner > .item > a > img {
  display: block;
  line-height: 1; }

.carousel-inner > .active, .carousel-inner > .next, .carousel-inner > .prev {
  display: block; }

.carousel-inner > .active {
  left: 0; }

.carousel-inner > .next, .carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%; }

.carousel-inner > .next {
  left: 100%; }

.carousel-inner > .prev {
  left: -100%; }

.carousel-inner > .next.left, .carousel-inner > .prev.right {
  left: 0; }

.carousel-inner > .active.left {
  left: -100%; }

.carousel-inner > .active.right {
  left: 100%; }

.carousel-control {
  position: absolute;
  top: 40%;
  left: 15px;
  width: 40px;
  height: 40px;
  margin-top: -20px;
  font-size: 80px;
  font-weight: 100;
  line-height: 3px;
  color: #ffffff;
  text-align: center;
  background: #222222;
  border: 3px solid #ffffff;
  -webkit-border-radius: 23px;
  -moz-border-radius: 23px;
  border-radius: 23px;
  opacity: 0.5;
  filter: alpha(opacity=50); }

.carousel-control.right {
  right: 15px;
  left: auto; }

.carousel-control:hover, .carousel-control:focus {
  color: #ffffff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90); }

.carousel-indicators {
  position: absolute;
  top: 15px;
  right: 15px;
  z-index: 5;
  margin: 0;
  list-style: none; }

.carousel-indicators li {
  display: block;
  float: left;
  width: 10px;
  height: 10px;
  margin-left: 5px;
  text-indent: -999px;
  background-color: #ccc;
  background-color: rgba(255, 255, 255, 0.25);
  border-radius: 5px; }

.carousel-indicators .active {
  background-color: #fff; }

.carousel-caption {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 15px;
  background: #333333;
  background: rgba(0, 0, 0, 0.75); }

.carousel-caption h4, .carousel-caption p {
  line-height: 20px;
  color: #ffffff; }

.carousel-caption h4 {
  margin: 0 0 5px; }

.carousel-caption p {
  margin-bottom: 0; }

.carousel-control {
  height: 34px !important;
  padding-top: 6px !important; }

.fa,
.fas,
.far,
.fal,
.fab {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  display: inline-block;
  font-style: normal;
  font-variant: normal;
  text-rendering: auto;
  line-height: 1; }

.fa-lg {
  font-size: 1.33333em;
  line-height: 0.75em;
  vertical-align: -.0667em; }

.fa-xs {
  font-size: .75em; }

.fa-sm {
  font-size: .875em; }

.fa-1x {
  font-size: 1em; }

.fa-2x {
  font-size: 2em; }

.fa-3x {
  font-size: 3em; }

.fa-4x {
  font-size: 4em; }

.fa-5x {
  font-size: 5em; }

.fa-6x {
  font-size: 6em; }

.fa-7x {
  font-size: 7em; }

.fa-8x {
  font-size: 8em; }

.fa-9x {
  font-size: 9em; }

.fa-10x {
  font-size: 10em; }

.fa-fw {
  text-align: center;
  width: 1.25em; }

.fa-ul {
  list-style-type: none;
  margin-left: 2.5em;
  padding-left: 0; }
  .fa-ul > li {
    position: relative; }

.fa-li {
  left: -2em;
  position: absolute;
  text-align: center;
  width: 2em;
  line-height: inherit; }

.fa-border {
  border: solid 0.08em #eee;
  border-radius: .1em;
  padding: .2em .25em .15em; }

.fa-pull-left {
  float: left; }

.fa-pull-right {
  float: right; }

.fa.fa-pull-left,
.fas.fa-pull-left,
.far.fa-pull-left,
.fal.fa-pull-left,
.fab.fa-pull-left {
  margin-right: .3em; }

.fa.fa-pull-right,
.fas.fa-pull-right,
.far.fa-pull-right,
.fal.fa-pull-right,
.fab.fa-pull-right {
  margin-left: .3em; }

.fa-spin {
  animation: fa-spin 2s infinite linear; }

.fa-pulse {
  animation: fa-spin 1s infinite steps(8); }

@keyframes fa-spin {
  0% {
    transform: rotate(0deg); }
  100% {
    transform: rotate(360deg); } }

.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  transform: rotate(90deg); }

.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  transform: rotate(180deg); }

.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  transform: rotate(270deg); }

.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  transform: scale(-1, 1); }

.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  transform: scale(1, -1); }

.fa-flip-horizontal.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  transform: scale(-1, -1); }

:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none; }

.fa-stack {
  display: inline-block;
  height: 2em;
  line-height: 2em;
  position: relative;
  vertical-align: middle;
  width: 2.5em; }

.fa-stack-1x,
.fa-stack-2x {
  left: 0;
  position: absolute;
  text-align: center;
  width: 100%; }

.fa-stack-1x {
  line-height: inherit; }

.fa-stack-2x {
  font-size: 2em; }

.fa-inverse {
  color: #fff; }

/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
readers do not read off random characters that represent icons */
.fa-500px:before {
  content: "\f26e"; }

.fa-accessible-icon:before {
  content: "\f368"; }

.fa-accusoft:before {
  content: "\f369"; }

.fa-acquisitions-incorporated:before {
  content: "\f6af"; }

.fa-ad:before {
  content: "\f641"; }

.fa-address-book:before {
  content: "\f2b9"; }

.fa-address-card:before {
  content: "\f2bb"; }

.fa-adjust:before {
  content: "\f042"; }

.fa-adn:before {
  content: "\f170"; }

.fa-adobe:before {
  content: "\f778"; }

.fa-adversal:before {
  content: "\f36a"; }

.fa-affiliatetheme:before {
  content: "\f36b"; }

.fa-air-freshener:before {
  content: "\f5d0"; }

.fa-algolia:before {
  content: "\f36c"; }

.fa-align-center:before {
  content: "\f037"; }

.fa-align-justify:before {
  content: "\f039"; }

.fa-align-left:before {
  content: "\f036"; }

.fa-align-right:before {
  content: "\f038"; }

.fa-alipay:before {
  content: "\f642"; }

.fa-allergies:before {
  content: "\f461"; }

.fa-amazon:before {
  content: "\f270"; }

.fa-amazon-pay:before {
  content: "\f42c"; }

.fa-ambulance:before {
  content: "\f0f9"; }

.fa-american-sign-language-interpreting:before {
  content: "\f2a3"; }

.fa-amilia:before {
  content: "\f36d"; }

.fa-anchor:before {
  content: "\f13d"; }

.fa-android:before {
  content: "\f17b"; }

.fa-angellist:before {
  content: "\f209"; }

.fa-angle-double-down:before {
  content: "\f103"; }

.fa-angle-double-left:before {
  content: "\f100"; }

.fa-angle-double-right:before {
  content: "\f101"; }

.fa-angle-double-up:before {
  content: "\f102"; }

.fa-angle-down:before {
  content: "\f107"; }

.fa-angle-left:before {
  content: "\f104"; }

.fa-angle-right:before {
  content: "\f105"; }

.fa-angle-up:before {
  content: "\f106"; }

.fa-angry:before {
  content: "\f556"; }

.fa-angrycreative:before {
  content: "\f36e"; }

.fa-angular:before {
  content: "\f420"; }

.fa-ankh:before {
  content: "\f644"; }

.fa-app-store:before {
  content: "\f36f"; }

.fa-app-store-ios:before {
  content: "\f370"; }

.fa-apper:before {
  content: "\f371"; }

.fa-apple:before {
  content: "\f179"; }

.fa-apple-alt:before {
  content: "\f5d1"; }

.fa-apple-pay:before {
  content: "\f415"; }

.fa-archive:before {
  content: "\f187"; }

.fa-archway:before {
  content: "\f557"; }

.fa-arrow-alt-circle-down:before {
  content: "\f358"; }

.fa-arrow-alt-circle-left:before {
  content: "\f359"; }

.fa-arrow-alt-circle-right:before {
  content: "\f35a"; }

.fa-arrow-alt-circle-up:before {
  content: "\f35b"; }

.fa-arrow-circle-down:before {
  content: "\f0ab"; }

.fa-arrow-circle-left:before {
  content: "\f0a8"; }

.fa-arrow-circle-right:before {
  content: "\f0a9"; }

.fa-arrow-circle-up:before {
  content: "\f0aa"; }

.fa-arrow-down:before {
  content: "\f063"; }

.fa-arrow-left:before {
  content: "\f060"; }

.fa-arrow-right:before {
  content: "\f061"; }

.fa-arrow-up:before {
  content: "\f062"; }

.fa-arrows-alt:before {
  content: "\f0b2"; }

.fa-arrows-alt-h:before {
  content: "\f337"; }

.fa-arrows-alt-v:before {
  content: "\f338"; }

.fa-artstation:before {
  content: "\f77a"; }

.fa-assistive-listening-systems:before {
  content: "\f2a2"; }

.fa-asterisk:before {
  content: "\f069"; }

.fa-asymmetrik:before {
  content: "\f372"; }

.fa-at:before {
  content: "\f1fa"; }

.fa-atlas:before {
  content: "\f558"; }

.fa-atlassian:before {
  content: "\f77b"; }

.fa-atom:before {
  content: "\f5d2"; }

.fa-audible:before {
  content: "\f373"; }

.fa-audio-description:before {
  content: "\f29e"; }

.fa-autoprefixer:before {
  content: "\f41c"; }

.fa-avianex:before {
  content: "\f374"; }

.fa-aviato:before {
  content: "\f421"; }

.fa-award:before {
  content: "\f559"; }

.fa-aws:before {
  content: "\f375"; }

.fa-baby:before {
  content: "\f77c"; }

.fa-baby-carriage:before {
  content: "\f77d"; }

.fa-backspace:before {
  content: "\f55a"; }

.fa-backward:before {
  content: "\f04a"; }

.fa-balance-scale:before {
  content: "\f24e"; }

.fa-ban:before {
  content: "\f05e"; }

.fa-band-aid:before {
  content: "\f462"; }

.fa-bandcamp:before {
  content: "\f2d5"; }

.fa-barcode:before {
  content: "\f02a"; }

.fa-bars:before {
  content: "\f0c9"; }

.fa-baseball-ball:before {
  content: "\f433"; }

.fa-basketball-ball:before {
  content: "\f434"; }

.fa-bath:before {
  content: "\f2cd"; }

.fa-battery-empty:before {
  content: "\f244"; }

.fa-battery-full:before {
  content: "\f240"; }

.fa-battery-half:before {
  content: "\f242"; }

.fa-battery-quarter:before {
  content: "\f243"; }

.fa-battery-three-quarters:before {
  content: "\f241"; }

.fa-bed:before {
  content: "\f236"; }

.fa-beer:before {
  content: "\f0fc"; }

.fa-behance:before {
  content: "\f1b4"; }

.fa-behance-square:before {
  content: "\f1b5"; }

.fa-bell:before {
  content: "\f0f3"; }

.fa-bell-slash:before {
  content: "\f1f6"; }

.fa-bezier-curve:before {
  content: "\f55b"; }

.fa-bible:before {
  content: "\f647"; }

.fa-bicycle:before {
  content: "\f206"; }

.fa-bimobject:before {
  content: "\f378"; }

.fa-binoculars:before {
  content: "\f1e5"; }

.fa-biohazard:before {
  content: "\f780"; }

.fa-birthday-cake:before {
  content: "\f1fd"; }

.fa-bitbucket:before {
  content: "\f171"; }

.fa-bitcoin:before {
  content: "\f379"; }

.fa-bity:before {
  content: "\f37a"; }

.fa-black-tie:before {
  content: "\f27e"; }

.fa-blackberry:before {
  content: "\f37b"; }

.fa-blender:before {
  content: "\f517"; }

.fa-blender-phone:before {
  content: "\f6b6"; }

.fa-blind:before {
  content: "\f29d"; }

.fa-blog:before {
  content: "\f781"; }

.fa-blogger:before {
  content: "\f37c"; }

.fa-blogger-b:before {
  content: "\f37d"; }

.fa-bluetooth:before {
  content: "\f293"; }

.fa-bluetooth-b:before {
  content: "\f294"; }

.fa-bold:before {
  content: "\f032"; }

.fa-bolt:before {
  content: "\f0e7"; }

.fa-bomb:before {
  content: "\f1e2"; }

.fa-bone:before {
  content: "\f5d7"; }

.fa-bong:before {
  content: "\f55c"; }

.fa-book:before {
  content: "\f02d"; }

.fa-book-dead:before {
  content: "\f6b7"; }

.fa-book-open:before {
  content: "\f518"; }

.fa-book-reader:before {
  content: "\f5da"; }

.fa-bookmark:before {
  content: "\f02e"; }

.fa-bowling-ball:before {
  content: "\f436"; }

.fa-box:before {
  content: "\f466"; }

.fa-box-open:before {
  content: "\f49e"; }

.fa-boxes:before {
  content: "\f468"; }

.fa-braille:before {
  content: "\f2a1"; }

.fa-brain:before {
  content: "\f5dc"; }

.fa-briefcase:before {
  content: "\f0b1"; }

.fa-briefcase-medical:before {
  content: "\f469"; }

.fa-broadcast-tower:before {
  content: "\f519"; }

.fa-broom:before {
  content: "\f51a"; }

.fa-brush:before {
  content: "\f55d"; }

.fa-btc:before {
  content: "\f15a"; }

.fa-bug:before {
  content: "\f188"; }

.fa-building:before {
  content: "\f1ad"; }

.fa-bullhorn:before {
  content: "\f0a1"; }

.fa-bullseye:before {
  content: "\f140"; }

.fa-burn:before {
  content: "\f46a"; }

.fa-buromobelexperte:before {
  content: "\f37f"; }

.fa-bus:before {
  content: "\f207"; }

.fa-bus-alt:before {
  content: "\f55e"; }

.fa-business-time:before {
  content: "\f64a"; }

.fa-buysellads:before {
  content: "\f20d"; }

.fa-calculator:before {
  content: "\f1ec"; }

.fa-calendar:before {
  content: "\f133"; }

.fa-calendar-alt:before {
  content: "\f073"; }

.fa-calendar-check:before {
  content: "\f274"; }

.fa-calendar-day:before {
  content: "\f783"; }

.fa-calendar-minus:before {
  content: "\f272"; }

.fa-calendar-plus:before {
  content: "\f271"; }

.fa-calendar-times:before {
  content: "\f273"; }

.fa-calendar-week:before {
  content: "\f784"; }

.fa-camera:before {
  content: "\f030"; }

.fa-camera-retro:before {
  content: "\f083"; }

.fa-campground:before {
  content: "\f6bb"; }

.fa-canadian-maple-leaf:before {
  content: "\f785"; }

.fa-candy-cane:before {
  content: "\f786"; }

.fa-cannabis:before {
  content: "\f55f"; }

.fa-capsules:before {
  content: "\f46b"; }

.fa-car:before {
  content: "\f1b9"; }

.fa-car-alt:before {
  content: "\f5de"; }

.fa-car-battery:before {
  content: "\f5df"; }

.fa-car-crash:before {
  content: "\f5e1"; }

.fa-car-side:before {
  content: "\f5e4"; }

.fa-caret-down:before {
  content: "\f0d7"; }

.fa-caret-left:before {
  content: "\f0d9"; }

.fa-caret-right:before {
  content: "\f0da"; }

.fa-caret-square-down:before {
  content: "\f150"; }

.fa-caret-square-left:before {
  content: "\f191"; }

.fa-caret-square-right:before {
  content: "\f152"; }

.fa-caret-square-up:before {
  content: "\f151"; }

.fa-caret-up:before {
  content: "\f0d8"; }

.fa-carrot:before {
  content: "\f787"; }

.fa-cart-arrow-down:before {
  content: "\f218"; }

.fa-cart-plus:before {
  content: "\f217"; }

.fa-cash-register:before {
  content: "\f788"; }

.fa-cat:before {
  content: "\f6be"; }

.fa-cc-amazon-pay:before {
  content: "\f42d"; }

.fa-cc-amex:before {
  content: "\f1f3"; }

.fa-cc-apple-pay:before {
  content: "\f416"; }

.fa-cc-diners-club:before {
  content: "\f24c"; }

.fa-cc-discover:before {
  content: "\f1f2"; }

.fa-cc-jcb:before {
  content: "\f24b"; }

.fa-cc-mastercard:before {
  content: "\f1f1"; }

.fa-cc-paypal:before {
  content: "\f1f4"; }

.fa-cc-stripe:before {
  content: "\f1f5"; }

.fa-cc-visa:before {
  content: "\f1f0"; }

.fa-centercode:before {
  content: "\f380"; }

.fa-centos:before {
  content: "\f789"; }

.fa-certificate:before {
  content: "\f0a3"; }

.fa-chair:before {
  content: "\f6c0"; }

.fa-chalkboard:before {
  content: "\f51b"; }

.fa-chalkboard-teacher:before {
  content: "\f51c"; }

.fa-charging-station:before {
  content: "\f5e7"; }

.fa-chart-area:before {
  content: "\f1fe"; }

.fa-chart-bar:before {
  content: "\f080"; }

.fa-chart-line:before {
  content: "\f201"; }

.fa-chart-pie:before {
  content: "\f200"; }

.fa-check:before {
  content: "\f00c"; }

.fa-check-circle:before {
  content: "\f058"; }

.fa-check-double:before {
  content: "\f560"; }

.fa-check-square:before {
  content: "\f14a"; }

.fa-chess:before {
  content: "\f439"; }

.fa-chess-bishop:before {
  content: "\f43a"; }

.fa-chess-board:before {
  content: "\f43c"; }

.fa-chess-king:before {
  content: "\f43f"; }

.fa-chess-knight:before {
  content: "\f441"; }

.fa-chess-pawn:before {
  content: "\f443"; }

.fa-chess-queen:before {
  content: "\f445"; }

.fa-chess-rook:before {
  content: "\f447"; }

.fa-chevron-circle-down:before {
  content: "\f13a"; }

.fa-chevron-circle-left:before {
  content: "\f137"; }

.fa-chevron-circle-right:before {
  content: "\f138"; }

.fa-chevron-circle-up:before {
  content: "\f139"; }

.fa-chevron-down:before {
  content: "\f078"; }

.fa-chevron-left:before {
  content: "\f053"; }

.fa-chevron-right:before {
  content: "\f054"; }

.fa-chevron-up:before {
  content: "\f077"; }

.fa-child:before {
  content: "\f1ae"; }

.fa-chrome:before {
  content: "\f268"; }

.fa-church:before {
  content: "\f51d"; }

.fa-circle:before {
  content: "\f111"; }

.fa-circle-notch:before {
  content: "\f1ce"; }

.fa-city:before {
  content: "\f64f"; }

.fa-clipboard:before {
  content: "\f328"; }

.fa-clipboard-check:before {
  content: "\f46c"; }

.fa-clipboard-list:before {
  content: "\f46d"; }

.fa-clock:before {
  content: "\f017"; }

.fa-clone:before {
  content: "\f24d"; }

.fa-closed-captioning:before {
  content: "\f20a"; }

.fa-cloud:before {
  content: "\f0c2"; }

.fa-cloud-download-alt:before {
  content: "\f381"; }

.fa-cloud-meatball:before {
  content: "\f73b"; }

.fa-cloud-moon:before {
  content: "\f6c3"; }

.fa-cloud-moon-rain:before {
  content: "\f73c"; }

.fa-cloud-rain:before {
  content: "\f73d"; }

.fa-cloud-showers-heavy:before {
  content: "\f740"; }

.fa-cloud-sun:before {
  content: "\f6c4"; }

.fa-cloud-sun-rain:before {
  content: "\f743"; }

.fa-cloud-upload-alt:before {
  content: "\f382"; }

.fa-cloudscale:before {
  content: "\f383"; }

.fa-cloudsmith:before {
  content: "\f384"; }

.fa-cloudversify:before {
  content: "\f385"; }

.fa-cocktail:before {
  content: "\f561"; }

.fa-code:before {
  content: "\f121"; }

.fa-code-branch:before {
  content: "\f126"; }

.fa-codepen:before {
  content: "\f1cb"; }

.fa-codiepie:before {
  content: "\f284"; }

.fa-coffee:before {
  content: "\f0f4"; }

.fa-cog:before {
  content: "\f013"; }

.fa-cogs:before {
  content: "\f085"; }

.fa-coins:before {
  content: "\f51e"; }

.fa-columns:before {
  content: "\f0db"; }

.fa-comment:before {
  content: "\f075"; }

.fa-comment-alt:before {
  content: "\f27a"; }

.fa-comment-dollar:before {
  content: "\f651"; }

.fa-comment-dots:before {
  content: "\f4ad"; }

.fa-comment-slash:before {
  content: "\f4b3"; }

.fa-comments:before {
  content: "\f086"; }

.fa-comments-dollar:before {
  content: "\f653"; }

.fa-compact-disc:before {
  content: "\f51f"; }

.fa-compass:before {
  content: "\f14e"; }

.fa-compress:before {
  content: "\f066"; }

.fa-compress-arrows-alt:before {
  content: "\f78c"; }

.fa-concierge-bell:before {
  content: "\f562"; }

.fa-confluence:before {
  content: "\f78d"; }

.fa-connectdevelop:before {
  content: "\f20e"; }

.fa-contao:before {
  content: "\f26d"; }

.fa-cookie:before {
  content: "\f563"; }

.fa-cookie-bite:before {
  content: "\f564"; }

.fa-copy:before {
  content: "\f0c5"; }

.fa-copyright:before {
  content: "\f1f9"; }

.fa-couch:before {
  content: "\f4b8"; }

.fa-cpanel:before {
  content: "\f388"; }

.fa-creative-commons:before {
  content: "\f25e"; }

.fa-creative-commons-by:before {
  content: "\f4e7"; }

.fa-creative-commons-nc:before {
  content: "\f4e8"; }

.fa-creative-commons-nc-eu:before {
  content: "\f4e9"; }

.fa-creative-commons-nc-jp:before {
  content: "\f4ea"; }

.fa-creative-commons-nd:before {
  content: "\f4eb"; }

.fa-creative-commons-pd:before {
  content: "\f4ec"; }

.fa-creative-commons-pd-alt:before {
  content: "\f4ed"; }

.fa-creative-commons-remix:before {
  content: "\f4ee"; }

.fa-creative-commons-sa:before {
  content: "\f4ef"; }

.fa-creative-commons-sampling:before {
  content: "\f4f0"; }

.fa-creative-commons-sampling-plus:before {
  content: "\f4f1"; }

.fa-creative-commons-share:before {
  content: "\f4f2"; }

.fa-creative-commons-zero:before {
  content: "\f4f3"; }

.fa-credit-card:before {
  content: "\f09d"; }

.fa-critical-role:before {
  content: "\f6c9"; }

.fa-crop:before {
  content: "\f125"; }

.fa-crop-alt:before {
  content: "\f565"; }

.fa-cross:before {
  content: "\f654"; }

.fa-crosshairs:before {
  content: "\f05b"; }

.fa-crow:before {
  content: "\f520"; }

.fa-crown:before {
  content: "\f521"; }

.fa-css3:before {
  content: "\f13c"; }

.fa-css3-alt:before {
  content: "\f38b"; }

.fa-cube:before {
  content: "\f1b2"; }

.fa-cubes:before {
  content: "\f1b3"; }

.fa-cut:before {
  content: "\f0c4"; }

.fa-cuttlefish:before {
  content: "\f38c"; }

.fa-d-and-d:before {
  content: "\f38d"; }

.fa-d-and-d-beyond:before {
  content: "\f6ca"; }

.fa-dashcube:before {
  content: "\f210"; }

.fa-database:before {
  content: "\f1c0"; }

.fa-deaf:before {
  content: "\f2a4"; }

.fa-delicious:before {
  content: "\f1a5"; }

.fa-democrat:before {
  content: "\f747"; }

.fa-deploydog:before {
  content: "\f38e"; }

.fa-deskpro:before {
  content: "\f38f"; }

.fa-desktop:before {
  content: "\f108"; }

.fa-dev:before {
  content: "\f6cc"; }

.fa-deviantart:before {
  content: "\f1bd"; }

.fa-dharmachakra:before {
  content: "\f655"; }

.fa-dhl:before {
  content: "\f790"; }

.fa-diagnoses:before {
  content: "\f470"; }

.fa-diaspora:before {
  content: "\f791"; }

.fa-dice:before {
  content: "\f522"; }

.fa-dice-d20:before {
  content: "\f6cf"; }

.fa-dice-d6:before {
  content: "\f6d1"; }

.fa-dice-five:before {
  content: "\f523"; }

.fa-dice-four:before {
  content: "\f524"; }

.fa-dice-one:before {
  content: "\f525"; }

.fa-dice-six:before {
  content: "\f526"; }

.fa-dice-three:before {
  content: "\f527"; }

.fa-dice-two:before {
  content: "\f528"; }

.fa-digg:before {
  content: "\f1a6"; }

.fa-digital-ocean:before {
  content: "\f391"; }

.fa-digital-tachograph:before {
  content: "\f566"; }

.fa-directions:before {
  content: "\f5eb"; }

.fa-discord:before {
  content: "\f392"; }

.fa-discourse:before {
  content: "\f393"; }

.fa-divide:before {
  content: "\f529"; }

.fa-dizzy:before {
  content: "\f567"; }

.fa-dna:before {
  content: "\f471"; }

.fa-dochub:before {
  content: "\f394"; }

.fa-docker:before {
  content: "\f395"; }

.fa-dog:before {
  content: "\f6d3"; }

.fa-dollar-sign:before {
  content: "\f155"; }

.fa-dolly:before {
  content: "\f472"; }

.fa-dolly-flatbed:before {
  content: "\f474"; }

.fa-donate:before {
  content: "\f4b9"; }

.fa-door-closed:before {
  content: "\f52a"; }

.fa-door-open:before {
  content: "\f52b"; }

.fa-dot-circle:before {
  content: "\f192"; }

.fa-dove:before {
  content: "\f4ba"; }

.fa-download:before {
  content: "\f019"; }

.fa-draft2digital:before {
  content: "\f396"; }

.fa-drafting-compass:before {
  content: "\f568"; }

.fa-dragon:before {
  content: "\f6d5"; }

.fa-draw-polygon:before {
  content: "\f5ee"; }

.fa-dribbble:before {
  content: "\f17d"; }

.fa-dribbble-square:before {
  content: "\f397"; }

.fa-dropbox:before {
  content: "\f16b"; }

.fa-drum:before {
  content: "\f569"; }

.fa-drum-steelpan:before {
  content: "\f56a"; }

.fa-drumstick-bite:before {
  content: "\f6d7"; }

.fa-drupal:before {
  content: "\f1a9"; }

.fa-dumbbell:before {
  content: "\f44b"; }

.fa-dumpster:before {
  content: "\f793"; }

.fa-dumpster-fire:before {
  content: "\f794"; }

.fa-dungeon:before {
  content: "\f6d9"; }

.fa-dyalog:before {
  content: "\f399"; }

.fa-earlybirds:before {
  content: "\f39a"; }

.fa-ebay:before {
  content: "\f4f4"; }

.fa-edge:before {
  content: "\f282"; }

.fa-edit:before {
  content: "\f044"; }

.fa-eject:before {
  content: "\f052"; }

.fa-elementor:before {
  content: "\f430"; }

.fa-ellipsis-h:before {
  content: "\f141"; }

.fa-ellipsis-v:before {
  content: "\f142"; }

.fa-ello:before {
  content: "\f5f1"; }

.fa-ember:before {
  content: "\f423"; }

.fa-empire:before {
  content: "\f1d1"; }

.fa-envelope:before {
  content: "\f0e0"; }

.fa-envelope-open:before {
  content: "\f2b6"; }

.fa-envelope-open-text:before {
  content: "\f658"; }

.fa-envelope-square:before {
  content: "\f199"; }

.fa-envira:before {
  content: "\f299"; }

.fa-equals:before {
  content: "\f52c"; }

.fa-eraser:before {
  content: "\f12d"; }

.fa-erlang:before {
  content: "\f39d"; }

.fa-ethereum:before {
  content: "\f42e"; }

.fa-ethernet:before {
  content: "\f796"; }

.fa-etsy:before {
  content: "\f2d7"; }

.fa-euro-sign:before {
  content: "\f153"; }

.fa-exchange-alt:before {
  content: "\f362"; }

.fa-exclamation:before {
  content: "\f12a"; }

.fa-exclamation-circle:before {
  content: "\f06a"; }

.fa-exclamation-triangle:before {
  content: "\f071"; }

.fa-expand:before {
  content: "\f065"; }

.fa-expand-arrows-alt:before {
  content: "\f31e"; }

.fa-expeditedssl:before {
  content: "\f23e"; }

.fa-external-link-alt:before {
  content: "\f35d"; }

.fa-external-link-square-alt:before {
  content: "\f360"; }

.fa-eye:before {
  content: "\f06e"; }

.fa-eye-dropper:before {
  content: "\f1fb"; }

.fa-eye-slash:before {
  content: "\f070"; }

.fa-facebook:before {
  content: "\f09a"; }

.fa-facebook-f:before {
  content: "\f39e"; }

.fa-facebook-messenger:before {
  content: "\f39f"; }

.fa-facebook-square:before {
  content: "\f082"; }

.fa-fantasy-flight-games:before {
  content: "\f6dc"; }

.fa-fast-backward:before {
  content: "\f049"; }

.fa-fast-forward:before {
  content: "\f050"; }

.fa-fax:before {
  content: "\f1ac"; }

.fa-feather:before {
  content: "\f52d"; }

.fa-feather-alt:before {
  content: "\f56b"; }

.fa-fedex:before {
  content: "\f797"; }

.fa-fedora:before {
  content: "\f798"; }

.fa-female:before {
  content: "\f182"; }

.fa-fighter-jet:before {
  content: "\f0fb"; }

.fa-figma:before {
  content: "\f799"; }

.fa-file:before {
  content: "\f15b"; }

.fa-file-alt:before {
  content: "\f15c"; }

.fa-file-archive:before {
  content: "\f1c6"; }

.fa-file-audio:before {
  content: "\f1c7"; }

.fa-file-code:before {
  content: "\f1c9"; }

.fa-file-contract:before {
  content: "\f56c"; }

.fa-file-csv:before {
  content: "\f6dd"; }

.fa-file-download:before {
  content: "\f56d"; }

.fa-file-excel:before {
  content: "\f1c3"; }

.fa-file-export:before {
  content: "\f56e"; }

.fa-file-image:before {
  content: "\f1c5"; }

.fa-file-import:before {
  content: "\f56f"; }

.fa-file-invoice:before {
  content: "\f570"; }

.fa-file-invoice-dollar:before {
  content: "\f571"; }

.fa-file-medical:before {
  content: "\f477"; }

.fa-file-medical-alt:before {
  content: "\f478"; }

.fa-file-pdf:before {
  content: "\f1c1"; }

.fa-file-powerpoint:before {
  content: "\f1c4"; }

.fa-file-prescription:before {
  content: "\f572"; }

.fa-file-signature:before {
  content: "\f573"; }

.fa-file-upload:before {
  content: "\f574"; }

.fa-file-video:before {
  content: "\f1c8"; }

.fa-file-word:before {
  content: "\f1c2"; }

.fa-fill:before {
  content: "\f575"; }

.fa-fill-drip:before {
  content: "\f576"; }

.fa-film:before {
  content: "\f008"; }

.fa-filter:before {
  content: "\f0b0"; }

.fa-fingerprint:before {
  content: "\f577"; }

.fa-fire:before {
  content: "\f06d"; }

.fa-fire-alt:before {
  content: "\f7e4"; }

.fa-fire-extinguisher:before {
  content: "\f134"; }

.fa-firefox:before {
  content: "\f269"; }

.fa-first-aid:before {
  content: "\f479"; }

.fa-first-order:before {
  content: "\f2b0"; }

.fa-first-order-alt:before {
  content: "\f50a"; }

.fa-firstdraft:before {
  content: "\f3a1"; }

.fa-fish:before {
  content: "\f578"; }

.fa-fist-raised:before {
  content: "\f6de"; }

.fa-flag:before {
  content: "\f024"; }

.fa-flag-checkered:before {
  content: "\f11e"; }

.fa-flag-usa:before {
  content: "\f74d"; }

.fa-flask:before {
  content: "\f0c3"; }

.fa-flickr:before {
  content: "\f16e"; }

.fa-flipboard:before {
  content: "\f44d"; }

.fa-flushed:before {
  content: "\f579"; }

.fa-fly:before {
  content: "\f417"; }

.fa-folder:before {
  content: "\f07b"; }

.fa-folder-minus:before {
  content: "\f65d"; }

.fa-folder-open:before {
  content: "\f07c"; }

.fa-folder-plus:before {
  content: "\f65e"; }

.fa-font:before {
  content: "\f031"; }

.fa-font-awesome:before {
  content: "\f2b4"; }

.fa-font-awesome-alt:before {
  content: "\f35c"; }

.fa-font-awesome-flag:before {
  content: "\f425"; }

.fa-font-awesome-logo-full:before {
  content: "\f4e6"; }

.fa-fonticons:before {
  content: "\f280"; }

.fa-fonticons-fi:before {
  content: "\f3a2"; }

.fa-football-ball:before {
  content: "\f44e"; }

.fa-fort-awesome:before {
  content: "\f286"; }

.fa-fort-awesome-alt:before {
  content: "\f3a3"; }

.fa-forumbee:before {
  content: "\f211"; }

.fa-forward:before {
  content: "\f04e"; }

.fa-foursquare:before {
  content: "\f180"; }

.fa-free-code-camp:before {
  content: "\f2c5"; }

.fa-freebsd:before {
  content: "\f3a4"; }

.fa-frog:before {
  content: "\f52e"; }

.fa-frown:before {
  content: "\f119"; }

.fa-frown-open:before {
  content: "\f57a"; }

.fa-fulcrum:before {
  content: "\f50b"; }

.fa-funnel-dollar:before {
  content: "\f662"; }

.fa-futbol:before {
  content: "\f1e3"; }

.fa-galactic-republic:before {
  content: "\f50c"; }

.fa-galactic-senate:before {
  content: "\f50d"; }

.fa-gamepad:before {
  content: "\f11b"; }

.fa-gas-pump:before {
  content: "\f52f"; }

.fa-gavel:before {
  content: "\f0e3"; }

.fa-gem:before {
  content: "\f3a5"; }

.fa-genderless:before {
  content: "\f22d"; }

.fa-get-pocket:before {
  content: "\f265"; }

.fa-gg:before {
  content: "\f260"; }

.fa-gg-circle:before {
  content: "\f261"; }

.fa-ghost:before {
  content: "\f6e2"; }

.fa-gift:before {
  content: "\f06b"; }

.fa-gifts:before {
  content: "\f79c"; }

.fa-git:before {
  content: "\f1d3"; }

.fa-git-square:before {
  content: "\f1d2"; }

.fa-github:before {
  content: "\f09b"; }

.fa-github-alt:before {
  content: "\f113"; }

.fa-github-square:before {
  content: "\f092"; }

.fa-gitkraken:before {
  content: "\f3a6"; }

.fa-gitlab:before {
  content: "\f296"; }

.fa-gitter:before {
  content: "\f426"; }

.fa-glass-cheers:before {
  content: "\f79f"; }

.fa-glass-martini:before {
  content: "\f000"; }

.fa-glass-martini-alt:before {
  content: "\f57b"; }

.fa-glass-whiskey:before {
  content: "\f7a0"; }

.fa-glasses:before {
  content: "\f530"; }

.fa-glide:before {
  content: "\f2a5"; }

.fa-glide-g:before {
  content: "\f2a6"; }

.fa-globe:before {
  content: "\f0ac"; }

.fa-globe-africa:before {
  content: "\f57c"; }

.fa-globe-americas:before {
  content: "\f57d"; }

.fa-globe-asia:before {
  content: "\f57e"; }

.fa-globe-europe:before {
  content: "\f7a2"; }

.fa-gofore:before {
  content: "\f3a7"; }

.fa-golf-ball:before {
  content: "\f450"; }

.fa-goodreads:before {
  content: "\f3a8"; }

.fa-goodreads-g:before {
  content: "\f3a9"; }

.fa-google:before {
  content: "\f1a0"; }

.fa-google-drive:before {
  content: "\f3aa"; }

.fa-google-play:before {
  content: "\f3ab"; }

.fa-google-plus:before {
  content: "\f2b3"; }

.fa-google-plus-g:before {
  content: "\f0d5"; }

.fa-google-plus-square:before {
  content: "\f0d4"; }

.fa-google-wallet:before {
  content: "\f1ee"; }

.fa-gopuram:before {
  content: "\f664"; }

.fa-graduation-cap:before {
  content: "\f19d"; }

.fa-gratipay:before {
  content: "\f184"; }

.fa-grav:before {
  content: "\f2d6"; }

.fa-greater-than:before {
  content: "\f531"; }

.fa-greater-than-equal:before {
  content: "\f532"; }

.fa-grimace:before {
  content: "\f57f"; }

.fa-grin:before {
  content: "\f580"; }

.fa-grin-alt:before {
  content: "\f581"; }

.fa-grin-beam:before {
  content: "\f582"; }

.fa-grin-beam-sweat:before {
  content: "\f583"; }

.fa-grin-hearts:before {
  content: "\f584"; }

.fa-grin-squint:before {
  content: "\f585"; }

.fa-grin-squint-tears:before {
  content: "\f586"; }

.fa-grin-stars:before {
  content: "\f587"; }

.fa-grin-tears:before {
  content: "\f588"; }

.fa-grin-tongue:before {
  content: "\f589"; }

.fa-grin-tongue-squint:before {
  content: "\f58a"; }

.fa-grin-tongue-wink:before {
  content: "\f58b"; }

.fa-grin-wink:before {
  content: "\f58c"; }

.fa-grip-horizontal:before {
  content: "\f58d"; }

.fa-grip-lines:before {
  content: "\f7a4"; }

.fa-grip-lines-vertical:before {
  content: "\f7a5"; }

.fa-grip-vertical:before {
  content: "\f58e"; }

.fa-gripfire:before {
  content: "\f3ac"; }

.fa-grunt:before {
  content: "\f3ad"; }

.fa-guitar:before {
  content: "\f7a6"; }

.fa-gulp:before {
  content: "\f3ae"; }

.fa-h-square:before {
  content: "\f0fd"; }

.fa-hacker-news:before {
  content: "\f1d4"; }

.fa-hacker-news-square:before {
  content: "\f3af"; }

.fa-hackerrank:before {
  content: "\f5f7"; }

.fa-hammer:before {
  content: "\f6e3"; }

.fa-hamsa:before {
  content: "\f665"; }

.fa-hand-holding:before {
  content: "\f4bd"; }

.fa-hand-holding-heart:before {
  content: "\f4be"; }

.fa-hand-holding-usd:before {
  content: "\f4c0"; }

.fa-hand-lizard:before {
  content: "\f258"; }

.fa-hand-paper:before {
  content: "\f256"; }

.fa-hand-peace:before {
  content: "\f25b"; }

.fa-hand-point-down:before {
  content: "\f0a7"; }

.fa-hand-point-left:before {
  content: "\f0a5"; }

.fa-hand-point-right:before {
  content: "\f0a4"; }

.fa-hand-point-up:before {
  content: "\f0a6"; }

.fa-hand-pointer:before {
  content: "\f25a"; }

.fa-hand-rock:before {
  content: "\f255"; }

.fa-hand-scissors:before {
  content: "\f257"; }

.fa-hand-spock:before {
  content: "\f259"; }

.fa-hands:before {
  content: "\f4c2"; }

.fa-hands-helping:before {
  content: "\f4c4"; }

.fa-handshake:before {
  content: "\f2b5"; }

.fa-hanukiah:before {
  content: "\f6e6"; }

.fa-hashtag:before {
  content: "\f292"; }

.fa-hat-wizard:before {
  content: "\f6e8"; }

.fa-haykal:before {
  content: "\f666"; }

.fa-hdd:before {
  content: "\f0a0"; }

.fa-heading:before {
  content: "\f1dc"; }

.fa-headphones:before {
  content: "\f025"; }

.fa-headphones-alt:before {
  content: "\f58f"; }

.fa-headset:before {
  content: "\f590"; }

.fa-heart:before {
  content: "\f004"; }

.fa-heart-broken:before {
  content: "\f7a9"; }

.fa-heartbeat:before {
  content: "\f21e"; }

.fa-helicopter:before {
  content: "\f533"; }

.fa-highlighter:before {
  content: "\f591"; }

.fa-hiking:before {
  content: "\f6ec"; }

.fa-hippo:before {
  content: "\f6ed"; }

.fa-hips:before {
  content: "\f452"; }

.fa-hire-a-helper:before {
  content: "\f3b0"; }

.fa-history:before {
  content: "\f1da"; }

.fa-hockey-puck:before {
  content: "\f453"; }

.fa-holly-berry:before {
  content: "\f7aa"; }

.fa-home:before {
  content: "\f015"; }

.fa-hooli:before {
  content: "\f427"; }

.fa-hornbill:before {
  content: "\f592"; }

.fa-horse:before {
  content: "\f6f0"; }

.fa-horse-head:before {
  content: "\f7ab"; }

.fa-hospital:before {
  content: "\f0f8"; }

.fa-hospital-alt:before {
  content: "\f47d"; }

.fa-hospital-symbol:before {
  content: "\f47e"; }

.fa-hot-tub:before {
  content: "\f593"; }

.fa-hotel:before {
  content: "\f594"; }

.fa-hotjar:before {
  content: "\f3b1"; }

.fa-hourglass:before {
  content: "\f254"; }

.fa-hourglass-end:before {
  content: "\f253"; }

.fa-hourglass-half:before {
  content: "\f252"; }

.fa-hourglass-start:before {
  content: "\f251"; }

.fa-house-damage:before {
  content: "\f6f1"; }

.fa-houzz:before {
  content: "\f27c"; }

.fa-hryvnia:before {
  content: "\f6f2"; }

.fa-html5:before {
  content: "\f13b"; }

.fa-hubspot:before {
  content: "\f3b2"; }

.fa-i-cursor:before {
  content: "\f246"; }

.fa-icicles:before {
  content: "\f7ad"; }

.fa-id-badge:before {
  content: "\f2c1"; }

.fa-id-card:before {
  content: "\f2c2"; }

.fa-id-card-alt:before {
  content: "\f47f"; }

.fa-igloo:before {
  content: "\f7ae"; }

.fa-image:before {
  content: "\f03e"; }

.fa-images:before {
  content: "\f302"; }

.fa-imdb:before {
  content: "\f2d8"; }

.fa-inbox:before {
  content: "\f01c"; }

.fa-indent:before {
  content: "\f03c"; }

.fa-industry:before {
  content: "\f275"; }

.fa-infinity:before {
  content: "\f534"; }

.fa-info:before {
  content: "\f129"; }

.fa-info-circle:before {
  content: "\f05a"; }

.fa-instagram:before {
  content: "\f16d"; }

.fa-intercom:before {
  content: "\f7af"; }

.fa-internet-explorer:before {
  content: "\f26b"; }

.fa-invision:before {
  content: "\f7b0"; }

.fa-ioxhost:before {
  content: "\f208"; }

.fa-italic:before {
  content: "\f033"; }

.fa-itunes:before {
  content: "\f3b4"; }

.fa-itunes-note:before {
  content: "\f3b5"; }

.fa-java:before {
  content: "\f4e4"; }

.fa-jedi:before {
  content: "\f669"; }

.fa-jedi-order:before {
  content: "\f50e"; }

.fa-jenkins:before {
  content: "\f3b6"; }

.fa-jira:before {
  content: "\f7b1"; }

.fa-joget:before {
  content: "\f3b7"; }

.fa-joint:before {
  content: "\f595"; }

.fa-joomla:before {
  content: "\f1aa"; }

.fa-journal-whills:before {
  content: "\f66a"; }

.fa-js:before {
  content: "\f3b8"; }

.fa-js-square:before {
  content: "\f3b9"; }

.fa-jsfiddle:before {
  content: "\f1cc"; }

.fa-kaaba:before {
  content: "\f66b"; }

.fa-kaggle:before {
  content: "\f5fa"; }

.fa-key:before {
  content: "\f084"; }

.fa-keybase:before {
  content: "\f4f5"; }

.fa-keyboard:before {
  content: "\f11c"; }

.fa-keycdn:before {
  content: "\f3ba"; }

.fa-khanda:before {
  content: "\f66d"; }

.fa-kickstarter:before {
  content: "\f3bb"; }

.fa-kickstarter-k:before {
  content: "\f3bc"; }

.fa-kiss:before {
  content: "\f596"; }

.fa-kiss-beam:before {
  content: "\f597"; }

.fa-kiss-wink-heart:before {
  content: "\f598"; }

.fa-kiwi-bird:before {
  content: "\f535"; }

.fa-korvue:before {
  content: "\f42f"; }

.fa-landmark:before {
  content: "\f66f"; }

.fa-language:before {
  content: "\f1ab"; }

.fa-laptop:before {
  content: "\f109"; }

.fa-laptop-code:before {
  content: "\f5fc"; }

.fa-laravel:before {
  content: "\f3bd"; }

.fa-lastfm:before {
  content: "\f202"; }

.fa-lastfm-square:before {
  content: "\f203"; }

.fa-laugh:before {
  content: "\f599"; }

.fa-laugh-beam:before {
  content: "\f59a"; }

.fa-laugh-squint:before {
  content: "\f59b"; }

.fa-laugh-wink:before {
  content: "\f59c"; }

.fa-layer-group:before {
  content: "\f5fd"; }

.fa-leaf:before {
  content: "\f06c"; }

.fa-leanpub:before {
  content: "\f212"; }

.fa-lemon:before {
  content: "\f094"; }

.fa-less:before {
  content: "\f41d"; }

.fa-less-than:before {
  content: "\f536"; }

.fa-less-than-equal:before {
  content: "\f537"; }

.fa-level-down-alt:before {
  content: "\f3be"; }

.fa-level-up-alt:before {
  content: "\f3bf"; }

.fa-life-ring:before {
  content: "\f1cd"; }

.fa-lightbulb:before {
  content: "\f0eb"; }

.fa-line:before {
  content: "\f3c0"; }

.fa-link:before {
  content: "\f0c1"; }

.fa-linkedin:before {
  content: "\f08c"; }

.fa-linkedin-in:before {
  content: "\f0e1"; }

.fa-linode:before {
  content: "\f2b8"; }

.fa-linux:before {
  content: "\f17c"; }

.fa-lira-sign:before {
  content: "\f195"; }

.fa-list:before {
  content: "\f03a"; }

.fa-list-alt:before {
  content: "\f022"; }

.fa-list-ol:before {
  content: "\f0cb"; }

.fa-list-ul:before {
  content: "\f0ca"; }

.fa-location-arrow:before {
  content: "\f124"; }

.fa-lock:before {
  content: "\f023"; }

.fa-lock-open:before {
  content: "\f3c1"; }

.fa-long-arrow-alt-down:before {
  content: "\f309"; }

.fa-long-arrow-alt-left:before {
  content: "\f30a"; }

.fa-long-arrow-alt-right:before {
  content: "\f30b"; }

.fa-long-arrow-alt-up:before {
  content: "\f30c"; }

.fa-low-vision:before {
  content: "\f2a8"; }

.fa-luggage-cart:before {
  content: "\f59d"; }

.fa-lyft:before {
  content: "\f3c3"; }

.fa-magento:before {
  content: "\f3c4"; }

.fa-magic:before {
  content: "\f0d0"; }

.fa-magnet:before {
  content: "\f076"; }

.fa-mail-bulk:before {
  content: "\f674"; }

.fa-mailchimp:before {
  content: "\f59e"; }

.fa-male:before {
  content: "\f183"; }

.fa-mandalorian:before {
  content: "\f50f"; }

.fa-map:before {
  content: "\f279"; }

.fa-map-marked:before {
  content: "\f59f"; }

.fa-map-marked-alt:before {
  content: "\f5a0"; }

.fa-map-marker:before {
  content: "\f041"; }

.fa-map-marker-alt:before {
  content: "\f3c5"; }

.fa-map-pin:before {
  content: "\f276"; }

.fa-map-signs:before {
  content: "\f277"; }

.fa-markdown:before {
  content: "\f60f"; }

.fa-marker:before {
  content: "\f5a1"; }

.fa-mars:before {
  content: "\f222"; }

.fa-mars-double:before {
  content: "\f227"; }

.fa-mars-stroke:before {
  content: "\f229"; }

.fa-mars-stroke-h:before {
  content: "\f22b"; }

.fa-mars-stroke-v:before {
  content: "\f22a"; }

.fa-mask:before {
  content: "\f6fa"; }

.fa-mastodon:before {
  content: "\f4f6"; }

.fa-maxcdn:before {
  content: "\f136"; }

.fa-medal:before {
  content: "\f5a2"; }

.fa-medapps:before {
  content: "\f3c6"; }

.fa-medium:before {
  content: "\f23a"; }

.fa-medium-m:before {
  content: "\f3c7"; }

.fa-medkit:before {
  content: "\f0fa"; }

.fa-medrt:before {
  content: "\f3c8"; }

.fa-meetup:before {
  content: "\f2e0"; }

.fa-megaport:before {
  content: "\f5a3"; }

.fa-meh:before {
  content: "\f11a"; }

.fa-meh-blank:before {
  content: "\f5a4"; }

.fa-meh-rolling-eyes:before {
  content: "\f5a5"; }

.fa-memory:before {
  content: "\f538"; }

.fa-mendeley:before {
  content: "\f7b3"; }

.fa-menorah:before {
  content: "\f676"; }

.fa-mercury:before {
  content: "\f223"; }

.fa-meteor:before {
  content: "\f753"; }

.fa-microchip:before {
  content: "\f2db"; }

.fa-microphone:before {
  content: "\f130"; }

.fa-microphone-alt:before {
  content: "\f3c9"; }

.fa-microphone-alt-slash:before {
  content: "\f539"; }

.fa-microphone-slash:before {
  content: "\f131"; }

.fa-microscope:before {
  content: "\f610"; }

.fa-microsoft:before {
  content: "\f3ca"; }

.fa-minus:before {
  content: "\f068"; }

.fa-minus-circle:before {
  content: "\f056"; }

.fa-minus-square:before {
  content: "\f146"; }

.fa-mitten:before {
  content: "\f7b5"; }

.fa-mix:before {
  content: "\f3cb"; }

.fa-mixcloud:before {
  content: "\f289"; }

.fa-mizuni:before {
  content: "\f3cc"; }

.fa-mobile:before {
  content: "\f10b"; }

.fa-mobile-alt:before {
  content: "\f3cd"; }

.fa-modx:before {
  content: "\f285"; }

.fa-monero:before {
  content: "\f3d0"; }

.fa-money-bill:before {
  content: "\f0d6"; }

.fa-money-bill-alt:before {
  content: "\f3d1"; }

.fa-money-bill-wave:before {
  content: "\f53a"; }

.fa-money-bill-wave-alt:before {
  content: "\f53b"; }

.fa-money-check:before {
  content: "\f53c"; }

.fa-money-check-alt:before {
  content: "\f53d"; }

.fa-monument:before {
  content: "\f5a6"; }

.fa-moon:before {
  content: "\f186"; }

.fa-mortar-pestle:before {
  content: "\f5a7"; }

.fa-mosque:before {
  content: "\f678"; }

.fa-motorcycle:before {
  content: "\f21c"; }

.fa-mountain:before {
  content: "\f6fc"; }

.fa-mouse-pointer:before {
  content: "\f245"; }

.fa-mug-hot:before {
  content: "\f7b6"; }

.fa-music:before {
  content: "\f001"; }

.fa-napster:before {
  content: "\f3d2"; }

.fa-neos:before {
  content: "\f612"; }

.fa-network-wired:before {
  content: "\f6ff"; }

.fa-neuter:before {
  content: "\f22c"; }

.fa-newspaper:before {
  content: "\f1ea"; }

.fa-nimblr:before {
  content: "\f5a8"; }

.fa-nintendo-switch:before {
  content: "\f418"; }

.fa-node:before {
  content: "\f419"; }

.fa-node-js:before {
  content: "\f3d3"; }

.fa-not-equal:before {
  content: "\f53e"; }

.fa-notes-medical:before {
  content: "\f481"; }

.fa-npm:before {
  content: "\f3d4"; }

.fa-ns8:before {
  content: "\f3d5"; }

.fa-nutritionix:before {
  content: "\f3d6"; }

.fa-object-group:before {
  content: "\f247"; }

.fa-object-ungroup:before {
  content: "\f248"; }

.fa-odnoklassniki:before {
  content: "\f263"; }

.fa-odnoklassniki-square:before {
  content: "\f264"; }

.fa-oil-can:before {
  content: "\f613"; }

.fa-old-republic:before {
  content: "\f510"; }

.fa-om:before {
  content: "\f679"; }

.fa-opencart:before {
  content: "\f23d"; }

.fa-openid:before {
  content: "\f19b"; }

.fa-opera:before {
  content: "\f26a"; }

.fa-optin-monster:before {
  content: "\f23c"; }

.fa-osi:before {
  content: "\f41a"; }

.fa-otter:before {
  content: "\f700"; }

.fa-outdent:before {
  content: "\f03b"; }

.fa-page4:before {
  content: "\f3d7"; }

.fa-pagelines:before {
  content: "\f18c"; }

.fa-paint-brush:before {
  content: "\f1fc"; }

.fa-paint-roller:before {
  content: "\f5aa"; }

.fa-palette:before {
  content: "\f53f"; }

.fa-palfed:before {
  content: "\f3d8"; }

.fa-pallet:before {
  content: "\f482"; }

.fa-paper-plane:before {
  content: "\f1d8"; }

.fa-paperclip:before {
  content: "\f0c6"; }

.fa-parachute-box:before {
  content: "\f4cd"; }

.fa-paragraph:before {
  content: "\f1dd"; }

.fa-parking:before {
  content: "\f540"; }

.fa-passport:before {
  content: "\f5ab"; }

.fa-pastafarianism:before {
  content: "\f67b"; }

.fa-paste:before {
  content: "\f0ea"; }

.fa-patreon:before {
  content: "\f3d9"; }

.fa-pause:before {
  content: "\f04c"; }

.fa-pause-circle:before {
  content: "\f28b"; }

.fa-paw:before {
  content: "\f1b0"; }

.fa-paypal:before {
  content: "\f1ed"; }

.fa-peace:before {
  content: "\f67c"; }

.fa-pen:before {
  content: "\f304"; }

.fa-pen-alt:before {
  content: "\f305"; }

.fa-pen-fancy:before {
  content: "\f5ac"; }

.fa-pen-nib:before {
  content: "\f5ad"; }

.fa-pen-square:before {
  content: "\f14b"; }

.fa-pencil-alt:before {
  content: "\f303"; }

.fa-pencil-ruler:before {
  content: "\f5ae"; }

.fa-penny-arcade:before {
  content: "\f704"; }

.fa-people-carry:before {
  content: "\f4ce"; }

.fa-percent:before {
  content: "\f295"; }

.fa-percentage:before {
  content: "\f541"; }

.fa-periscope:before {
  content: "\f3da"; }

.fa-person-booth:before {
  content: "\f756"; }

.fa-phabricator:before {
  content: "\f3db"; }

.fa-phoenix-framework:before {
  content: "\f3dc"; }

.fa-phoenix-squadron:before {
  content: "\f511"; }

.fa-phone:before {
  content: "\f095"; }

.fa-phone-slash:before {
  content: "\f3dd"; }

.fa-phone-square:before {
  content: "\f098"; }

.fa-phone-volume:before {
  content: "\f2a0"; }

.fa-php:before {
  content: "\f457"; }

.fa-pied-piper:before {
  content: "\f2ae"; }

.fa-pied-piper-alt:before {
  content: "\f1a8"; }

.fa-pied-piper-hat:before {
  content: "\f4e5"; }

.fa-pied-piper-pp:before {
  content: "\f1a7"; }

.fa-piggy-bank:before {
  content: "\f4d3"; }

.fa-pills:before {
  content: "\f484"; }

.fa-pinterest:before {
  content: "\f0d2"; }

.fa-pinterest-p:before {
  content: "\f231"; }

.fa-pinterest-square:before {
  content: "\f0d3"; }

.fa-place-of-worship:before {
  content: "\f67f"; }

.fa-plane:before {
  content: "\f072"; }

.fa-plane-arrival:before {
  content: "\f5af"; }

.fa-plane-departure:before {
  content: "\f5b0"; }

.fa-play:before {
  content: "\f04b"; }

.fa-play-circle:before {
  content: "\f144"; }

.fa-playstation:before {
  content: "\f3df"; }

.fa-plug:before {
  content: "\f1e6"; }

.fa-plus:before {
  content: "\f067"; }

.fa-plus-circle:before {
  content: "\f055"; }

.fa-plus-square:before {
  content: "\f0fe"; }

.fa-podcast:before {
  content: "\f2ce"; }

.fa-poll:before {
  content: "\f681"; }

.fa-poll-h:before {
  content: "\f682"; }

.fa-poo:before {
  content: "\f2fe"; }

.fa-poo-storm:before {
  content: "\f75a"; }

.fa-poop:before {
  content: "\f619"; }

.fa-portrait:before {
  content: "\f3e0"; }

.fa-pound-sign:before {
  content: "\f154"; }

.fa-power-off:before {
  content: "\f011"; }

.fa-pray:before {
  content: "\f683"; }

.fa-praying-hands:before {
  content: "\f684"; }

.fa-prescription:before {
  content: "\f5b1"; }

.fa-prescription-bottle:before {
  content: "\f485"; }

.fa-prescription-bottle-alt:before {
  content: "\f486"; }

.fa-print:before {
  content: "\f02f"; }

.fa-procedures:before {
  content: "\f487"; }

.fa-product-hunt:before {
  content: "\f288"; }

.fa-project-diagram:before {
  content: "\f542"; }

.fa-pushed:before {
  content: "\f3e1"; }

.fa-puzzle-piece:before {
  content: "\f12e"; }

.fa-python:before {
  content: "\f3e2"; }

.fa-qq:before {
  content: "\f1d6"; }

.fa-qrcode:before {
  content: "\f029"; }

.fa-question:before {
  content: "\f128"; }

.fa-question-circle:before {
  content: "\f059"; }

.fa-quidditch:before {
  content: "\f458"; }

.fa-quinscape:before {
  content: "\f459"; }

.fa-quora:before {
  content: "\f2c4"; }

.fa-quote-left:before {
  content: "\f10d"; }

.fa-quote-right:before {
  content: "\f10e"; }

.fa-quran:before {
  content: "\f687"; }

.fa-r-project:before {
  content: "\f4f7"; }

.fa-radiation:before {
  content: "\f7b9"; }

.fa-radiation-alt:before {
  content: "\f7ba"; }

.fa-rainbow:before {
  content: "\f75b"; }

.fa-random:before {
  content: "\f074"; }

.fa-raspberry-pi:before {
  content: "\f7bb"; }

.fa-ravelry:before {
  content: "\f2d9"; }

.fa-react:before {
  content: "\f41b"; }

.fa-reacteurope:before {
  content: "\f75d"; }

.fa-readme:before {
  content: "\f4d5"; }

.fa-rebel:before {
  content: "\f1d0"; }

.fa-receipt:before {
  content: "\f543"; }

.fa-recycle:before {
  content: "\f1b8"; }

.fa-red-river:before {
  content: "\f3e3"; }

.fa-reddit:before {
  content: "\f1a1"; }

.fa-reddit-alien:before {
  content: "\f281"; }

.fa-reddit-square:before {
  content: "\f1a2"; }

.fa-redhat:before {
  content: "\f7bc"; }

.fa-redo:before {
  content: "\f01e"; }

.fa-redo-alt:before {
  content: "\f2f9"; }

.fa-registered:before {
  content: "\f25d"; }

.fa-renren:before {
  content: "\f18b"; }

.fa-reply:before {
  content: "\f3e5"; }

.fa-reply-all:before {
  content: "\f122"; }

.fa-replyd:before {
  content: "\f3e6"; }

.fa-republican:before {
  content: "\f75e"; }

.fa-researchgate:before {
  content: "\f4f8"; }

.fa-resolving:before {
  content: "\f3e7"; }

.fa-restroom:before {
  content: "\f7bd"; }

.fa-retweet:before {
  content: "\f079"; }

.fa-rev:before {
  content: "\f5b2"; }

.fa-ribbon:before {
  content: "\f4d6"; }

.fa-ring:before {
  content: "\f70b"; }

.fa-road:before {
  content: "\f018"; }

.fa-robot:before {
  content: "\f544"; }

.fa-rocket:before {
  content: "\f135"; }

.fa-rocketchat:before {
  content: "\f3e8"; }

.fa-rockrms:before {
  content: "\f3e9"; }

.fa-route:before {
  content: "\f4d7"; }

.fa-rss:before {
  content: "\f09e"; }

.fa-rss-square:before {
  content: "\f143"; }

.fa-ruble-sign:before {
  content: "\f158"; }

.fa-ruler:before {
  content: "\f545"; }

.fa-ruler-combined:before {
  content: "\f546"; }

.fa-ruler-horizontal:before {
  content: "\f547"; }

.fa-ruler-vertical:before {
  content: "\f548"; }

.fa-running:before {
  content: "\f70c"; }

.fa-rupee-sign:before {
  content: "\f156"; }

.fa-sad-cry:before {
  content: "\f5b3"; }

.fa-sad-tear:before {
  content: "\f5b4"; }

.fa-safari:before {
  content: "\f267"; }

.fa-sass:before {
  content: "\f41e"; }

.fa-satellite:before {
  content: "\f7bf"; }

.fa-satellite-dish:before {
  content: "\f7c0"; }

.fa-save:before {
  content: "\f0c7"; }

.fa-schlix:before {
  content: "\f3ea"; }

.fa-school:before {
  content: "\f549"; }

.fa-screwdriver:before {
  content: "\f54a"; }

.fa-scribd:before {
  content: "\f28a"; }

.fa-scroll:before {
  content: "\f70e"; }

.fa-sd-card:before {
  content: "\f7c2"; }

.fa-search:before {
  content: "\f002"; }

.fa-search-dollar:before {
  content: "\f688"; }

.fa-search-location:before {
  content: "\f689"; }

.fa-search-minus:before {
  content: "\f010"; }

.fa-search-plus:before {
  content: "\f00e"; }

.fa-searchengin:before {
  content: "\f3eb"; }

.fa-seedling:before {
  content: "\f4d8"; }

.fa-sellcast:before {
  content: "\f2da"; }

.fa-sellsy:before {
  content: "\f213"; }

.fa-server:before {
  content: "\f233"; }

.fa-servicestack:before {
  content: "\f3ec"; }

.fa-shapes:before {
  content: "\f61f"; }

.fa-share:before {
  content: "\f064"; }

.fa-share-alt:before {
  content: "\f1e0"; }

.fa-share-alt-square:before {
  content: "\f1e1"; }

.fa-share-square:before {
  content: "\f14d"; }

.fa-shekel-sign:before {
  content: "\f20b"; }

.fa-shield-alt:before {
  content: "\f3ed"; }

.fa-ship:before {
  content: "\f21a"; }

.fa-shipping-fast:before {
  content: "\f48b"; }

.fa-shirtsinbulk:before {
  content: "\f214"; }

.fa-shoe-prints:before {
  content: "\f54b"; }

.fa-shopping-bag:before {
  content: "\f290"; }

.fa-shopping-basket:before {
  content: "\f291"; }

.fa-shopping-cart:before {
  content: "\f07a"; }

.fa-shopware:before {
  content: "\f5b5"; }

.fa-shower:before {
  content: "\f2cc"; }

.fa-shuttle-van:before {
  content: "\f5b6"; }

.fa-sign:before {
  content: "\f4d9"; }

.fa-sign-in-alt:before {
  content: "\f2f6"; }

.fa-sign-language:before {
  content: "\f2a7"; }

.fa-sign-out-alt:before {
  content: "\f2f5"; }

.fa-signal:before {
  content: "\f012"; }

.fa-signature:before {
  content: "\f5b7"; }

.fa-sim-card:before {
  content: "\f7c4"; }

.fa-simplybuilt:before {
  content: "\f215"; }

.fa-sistrix:before {
  content: "\f3ee"; }

.fa-sitemap:before {
  content: "\f0e8"; }

.fa-sith:before {
  content: "\f512"; }

.fa-skating:before {
  content: "\f7c5"; }

.fa-sketch:before {
  content: "\f7c6"; }

.fa-skiing:before {
  content: "\f7c9"; }

.fa-skiing-nordic:before {
  content: "\f7ca"; }

.fa-skull:before {
  content: "\f54c"; }

.fa-skull-crossbones:before {
  content: "\f714"; }

.fa-skyatlas:before {
  content: "\f216"; }

.fa-skype:before {
  content: "\f17e"; }

.fa-slack:before {
  content: "\f198"; }

.fa-slack-hash:before {
  content: "\f3ef"; }

.fa-slash:before {
  content: "\f715"; }

.fa-sleigh:before {
  content: "\f7cc"; }

.fa-sliders-h:before {
  content: "\f1de"; }

.fa-slideshare:before {
  content: "\f1e7"; }

.fa-smile:before {
  content: "\f118"; }

.fa-smile-beam:before {
  content: "\f5b8"; }

.fa-smile-wink:before {
  content: "\f4da"; }

.fa-smog:before {
  content: "\f75f"; }

.fa-smoking:before {
  content: "\f48d"; }

.fa-smoking-ban:before {
  content: "\f54d"; }

.fa-sms:before {
  content: "\f7cd"; }

.fa-snapchat:before {
  content: "\f2ab"; }

.fa-snapchat-ghost:before {
  content: "\f2ac"; }

.fa-snapchat-square:before {
  content: "\f2ad"; }

.fa-snowboarding:before {
  content: "\f7ce"; }

.fa-snowflake:before {
  content: "\f2dc"; }

.fa-snowman:before {
  content: "\f7d0"; }

.fa-snowplow:before {
  content: "\f7d2"; }

.fa-socks:before {
  content: "\f696"; }

.fa-solar-panel:before {
  content: "\f5ba"; }

.fa-sort:before {
  content: "\f0dc"; }

.fa-sort-alpha-down:before {
  content: "\f15d"; }

.fa-sort-alpha-up:before {
  content: "\f15e"; }

.fa-sort-amount-down:before {
  content: "\f160"; }

.fa-sort-amount-up:before {
  content: "\f161"; }

.fa-sort-down:before {
  content: "\f0dd"; }

.fa-sort-numeric-down:before {
  content: "\f162"; }

.fa-sort-numeric-up:before {
  content: "\f163"; }

.fa-sort-up:before {
  content: "\f0de"; }

.fa-soundcloud:before {
  content: "\f1be"; }

.fa-sourcetree:before {
  content: "\f7d3"; }

.fa-spa:before {
  content: "\f5bb"; }

.fa-space-shuttle:before {
  content: "\f197"; }

.fa-speakap:before {
  content: "\f3f3"; }

.fa-spider:before {
  content: "\f717"; }

.fa-spinner:before {
  content: "\f110"; }

.fa-splotch:before {
  content: "\f5bc"; }

.fa-spotify:before {
  content: "\f1bc"; }

.fa-spray-can:before {
  content: "\f5bd"; }

.fa-square:before {
  content: "\f0c8"; }

.fa-square-full:before {
  content: "\f45c"; }

.fa-square-root-alt:before {
  content: "\f698"; }

.fa-squarespace:before {
  content: "\f5be"; }

.fa-stack-exchange:before {
  content: "\f18d"; }

.fa-stack-overflow:before {
  content: "\f16c"; }

.fa-stamp:before {
  content: "\f5bf"; }

.fa-star:before {
  content: "\f005"; }

.fa-star-and-crescent:before {
  content: "\f699"; }

.fa-star-half:before {
  content: "\f089"; }

.fa-star-half-alt:before {
  content: "\f5c0"; }

.fa-star-of-david:before {
  content: "\f69a"; }

.fa-star-of-life:before {
  content: "\f621"; }

.fa-staylinked:before {
  content: "\f3f5"; }

.fa-steam:before {
  content: "\f1b6"; }

.fa-steam-square:before {
  content: "\f1b7"; }

.fa-steam-symbol:before {
  content: "\f3f6"; }

.fa-step-backward:before {
  content: "\f048"; }

.fa-step-forward:before {
  content: "\f051"; }

.fa-stethoscope:before {
  content: "\f0f1"; }

.fa-sticker-mule:before {
  content: "\f3f7"; }

.fa-sticky-note:before {
  content: "\f249"; }

.fa-stop:before {
  content: "\f04d"; }

.fa-stop-circle:before {
  content: "\f28d"; }

.fa-stopwatch:before {
  content: "\f2f2"; }

.fa-store:before {
  content: "\f54e"; }

.fa-store-alt:before {
  content: "\f54f"; }

.fa-strava:before {
  content: "\f428"; }

.fa-stream:before {
  content: "\f550"; }

.fa-street-view:before {
  content: "\f21d"; }

.fa-strikethrough:before {
  content: "\f0cc"; }

.fa-stripe:before {
  content: "\f429"; }

.fa-stripe-s:before {
  content: "\f42a"; }

.fa-stroopwafel:before {
  content: "\f551"; }

.fa-studiovinari:before {
  content: "\f3f8"; }

.fa-stumbleupon:before {
  content: "\f1a4"; }

.fa-stumbleupon-circle:before {
  content: "\f1a3"; }

.fa-subscript:before {
  content: "\f12c"; }

.fa-subway:before {
  content: "\f239"; }

.fa-suitcase:before {
  content: "\f0f2"; }

.fa-suitcase-rolling:before {
  content: "\f5c1"; }

.fa-sun:before {
  content: "\f185"; }

.fa-superpowers:before {
  content: "\f2dd"; }

.fa-superscript:before {
  content: "\f12b"; }

.fa-supple:before {
  content: "\f3f9"; }

.fa-surprise:before {
  content: "\f5c2"; }

.fa-suse:before {
  content: "\f7d6"; }

.fa-swatchbook:before {
  content: "\f5c3"; }

.fa-swimmer:before {
  content: "\f5c4"; }

.fa-swimming-pool:before {
  content: "\f5c5"; }

.fa-synagogue:before {
  content: "\f69b"; }

.fa-sync:before {
  content: "\f021"; }

.fa-sync-alt:before {
  content: "\f2f1"; }

.fa-syringe:before {
  content: "\f48e"; }

.fa-table:before {
  content: "\f0ce"; }

.fa-table-tennis:before {
  content: "\f45d"; }

.fa-tablet:before {
  content: "\f10a"; }

.fa-tablet-alt:before {
  content: "\f3fa"; }

.fa-tablets:before {
  content: "\f490"; }

.fa-tachometer-alt:before {
  content: "\f3fd"; }

.fa-tag:before {
  content: "\f02b"; }

.fa-tags:before {
  content: "\f02c"; }

.fa-tape:before {
  content: "\f4db"; }

.fa-tasks:before {
  content: "\f0ae"; }

.fa-taxi:before {
  content: "\f1ba"; }

.fa-teamspeak:before {
  content: "\f4f9"; }

.fa-teeth:before {
  content: "\f62e"; }

.fa-teeth-open:before {
  content: "\f62f"; }

.fa-telegram:before {
  content: "\f2c6"; }

.fa-telegram-plane:before {
  content: "\f3fe"; }

.fa-temperature-high:before {
  content: "\f769"; }

.fa-temperature-low:before {
  content: "\f76b"; }

.fa-tencent-weibo:before {
  content: "\f1d5"; }

.fa-tenge:before {
  content: "\f7d7"; }

.fa-terminal:before {
  content: "\f120"; }

.fa-text-height:before {
  content: "\f034"; }

.fa-text-width:before {
  content: "\f035"; }

.fa-th:before {
  content: "\f00a"; }

.fa-th-large:before {
  content: "\f009"; }

.fa-th-list:before {
  content: "\f00b"; }

.fa-the-red-yeti:before {
  content: "\f69d"; }

.fa-theater-masks:before {
  content: "\f630"; }

.fa-themeco:before {
  content: "\f5c6"; }

.fa-themeisle:before {
  content: "\f2b2"; }

.fa-thermometer:before {
  content: "\f491"; }

.fa-thermometer-empty:before {
  content: "\f2cb"; }

.fa-thermometer-full:before {
  content: "\f2c7"; }

.fa-thermometer-half:before {
  content: "\f2c9"; }

.fa-thermometer-quarter:before {
  content: "\f2ca"; }

.fa-thermometer-three-quarters:before {
  content: "\f2c8"; }

.fa-think-peaks:before {
  content: "\f731"; }

.fa-thumbs-down:before {
  content: "\f165"; }

.fa-thumbs-up:before {
  content: "\f164"; }

.fa-thumbtack:before {
  content: "\f08d"; }

.fa-ticket-alt:before {
  content: "\f3ff"; }

.fa-times:before {
  content: "\f00d"; }

.fa-times-circle:before {
  content: "\f057"; }

.fa-tint:before {
  content: "\f043"; }

.fa-tint-slash:before {
  content: "\f5c7"; }

.fa-tired:before {
  content: "\f5c8"; }

.fa-toggle-off:before {
  content: "\f204"; }

.fa-toggle-on:before {
  content: "\f205"; }

.fa-toilet:before {
  content: "\f7d8"; }

.fa-toilet-paper:before {
  content: "\f71e"; }

.fa-toolbox:before {
  content: "\f552"; }

.fa-tools:before {
  content: "\f7d9"; }

.fa-tooth:before {
  content: "\f5c9"; }

.fa-torah:before {
  content: "\f6a0"; }

.fa-torii-gate:before {
  content: "\f6a1"; }

.fa-tractor:before {
  content: "\f722"; }

.fa-trade-federation:before {
  content: "\f513"; }

.fa-trademark:before {
  content: "\f25c"; }

.fa-traffic-light:before {
  content: "\f637"; }

.fa-train:before {
  content: "\f238"; }

.fa-tram:before {
  content: "\f7da"; }

.fa-transgender:before {
  content: "\f224"; }

.fa-transgender-alt:before {
  content: "\f225"; }

.fa-trash:before {
  content: "\f1f8"; }

.fa-trash-alt:before {
  content: "\f2ed"; }

.fa-tree:before {
  content: "\f1bb"; }

.fa-trello:before {
  content: "\f181"; }

.fa-tripadvisor:before {
  content: "\f262"; }

.fa-trophy:before {
  content: "\f091"; }

.fa-truck:before {
  content: "\f0d1"; }

.fa-truck-loading:before {
  content: "\f4de"; }

.fa-truck-monster:before {
  content: "\f63b"; }

.fa-truck-moving:before {
  content: "\f4df"; }

.fa-truck-pickup:before {
  content: "\f63c"; }

.fa-tshirt:before {
  content: "\f553"; }

.fa-tty:before {
  content: "\f1e4"; }

.fa-tumblr:before {
  content: "\f173"; }

.fa-tumblr-square:before {
  content: "\f174"; }

.fa-tv:before {
  content: "\f26c"; }

.fa-twitch:before {
  content: "\f1e8"; }

.fa-twitter:before {
  content: "\f099"; }

.fa-twitter-square:before {
  content: "\f081"; }

.fa-typo3:before {
  content: "\f42b"; }

.fa-uber:before {
  content: "\f402"; }

.fa-ubuntu:before {
  content: "\f7df"; }

.fa-uikit:before {
  content: "\f403"; }

.fa-umbrella:before {
  content: "\f0e9"; }

.fa-umbrella-beach:before {
  content: "\f5ca"; }

.fa-underline:before {
  content: "\f0cd"; }

.fa-undo:before {
  content: "\f0e2"; }

.fa-undo-alt:before {
  content: "\f2ea"; }

.fa-uniregistry:before {
  content: "\f404"; }

.fa-universal-access:before {
  content: "\f29a"; }

.fa-university:before {
  content: "\f19c"; }

.fa-unlink:before {
  content: "\f127"; }

.fa-unlock:before {
  content: "\f09c"; }

.fa-unlock-alt:before {
  content: "\f13e"; }

.fa-untappd:before {
  content: "\f405"; }

.fa-upload:before {
  content: "\f093"; }

.fa-ups:before {
  content: "\f7e0"; }

.fa-usb:before {
  content: "\f287"; }

.fa-user:before {
  content: "\f007"; }

.fa-user-alt:before {
  content: "\f406"; }

.fa-user-alt-slash:before {
  content: "\f4fa"; }

.fa-user-astronaut:before {
  content: "\f4fb"; }

.fa-user-check:before {
  content: "\f4fc"; }

.fa-user-circle:before {
  content: "\f2bd"; }

.fa-user-clock:before {
  content: "\f4fd"; }

.fa-user-cog:before {
  content: "\f4fe"; }

.fa-user-edit:before {
  content: "\f4ff"; }

.fa-user-friends:before {
  content: "\f500"; }

.fa-user-graduate:before {
  content: "\f501"; }

.fa-user-injured:before {
  content: "\f728"; }

.fa-user-lock:before {
  content: "\f502"; }

.fa-user-md:before {
  content: "\f0f0"; }

.fa-user-minus:before {
  content: "\f503"; }

.fa-user-ninja:before {
  content: "\f504"; }

.fa-user-plus:before {
  content: "\f234"; }

.fa-user-secret:before {
  content: "\f21b"; }

.fa-user-shield:before {
  content: "\f505"; }

.fa-user-slash:before {
  content: "\f506"; }

.fa-user-tag:before {
  content: "\f507"; }

.fa-user-tie:before {
  content: "\f508"; }

.fa-user-times:before {
  content: "\f235"; }

.fa-users:before {
  content: "\f0c0"; }

.fa-users-cog:before {
  content: "\f509"; }

.fa-usps:before {
  content: "\f7e1"; }

.fa-ussunnah:before {
  content: "\f407"; }

.fa-utensil-spoon:before {
  content: "\f2e5"; }

.fa-utensils:before {
  content: "\f2e7"; }

.fa-vaadin:before {
  content: "\f408"; }

.fa-vector-square:before {
  content: "\f5cb"; }

.fa-venus:before {
  content: "\f221"; }

.fa-venus-double:before {
  content: "\f226"; }

.fa-venus-mars:before {
  content: "\f228"; }

.fa-viacoin:before {
  content: "\f237"; }

.fa-viadeo:before {
  content: "\f2a9"; }

.fa-viadeo-square:before {
  content: "\f2aa"; }

.fa-vial:before {
  content: "\f492"; }

.fa-vials:before {
  content: "\f493"; }

.fa-viber:before {
  content: "\f409"; }

.fa-video:before {
  content: "\f03d"; }

.fa-video-slash:before {
  content: "\f4e2"; }

.fa-vihara:before {
  content: "\f6a7"; }

.fa-vimeo:before {
  content: "\f40a"; }

.fa-vimeo-square:before {
  content: "\f194"; }

.fa-vimeo-v:before {
  content: "\f27d"; }

.fa-vine:before {
  content: "\f1ca"; }

.fa-vk:before {
  content: "\f189"; }

.fa-vnv:before {
  content: "\f40b"; }

.fa-volleyball-ball:before {
  content: "\f45f"; }

.fa-volume-down:before {
  content: "\f027"; }

.fa-volume-mute:before {
  content: "\f6a9"; }

.fa-volume-off:before {
  content: "\f026"; }

.fa-volume-up:before {
  content: "\f028"; }

.fa-vote-yea:before {
  content: "\f772"; }

.fa-vr-cardboard:before {
  content: "\f729"; }

.fa-vuejs:before {
  content: "\f41f"; }

.fa-walking:before {
  content: "\f554"; }

.fa-wallet:before {
  content: "\f555"; }

.fa-warehouse:before {
  content: "\f494"; }

.fa-water:before {
  content: "\f773"; }

.fa-weebly:before {
  content: "\f5cc"; }

.fa-weibo:before {
  content: "\f18a"; }

.fa-weight:before {
  content: "\f496"; }

.fa-weight-hanging:before {
  content: "\f5cd"; }

.fa-weixin:before {
  content: "\f1d7"; }

.fa-whatsapp:before {
  content: "\f232"; }

.fa-whatsapp-square:before {
  content: "\f40c"; }

.fa-wheelchair:before {
  content: "\f193"; }

.fa-whmcs:before {
  content: "\f40d"; }

.fa-wifi:before {
  content: "\f1eb"; }

.fa-wikipedia-w:before {
  content: "\f266"; }

.fa-wind:before {
  content: "\f72e"; }

.fa-window-close:before {
  content: "\f410"; }

.fa-window-maximize:before {
  content: "\f2d0"; }

.fa-window-minimize:before {
  content: "\f2d1"; }

.fa-window-restore:before {
  content: "\f2d2"; }

.fa-windows:before {
  content: "\f17a"; }

.fa-wine-bottle:before {
  content: "\f72f"; }

.fa-wine-glass:before {
  content: "\f4e3"; }

.fa-wine-glass-alt:before {
  content: "\f5ce"; }

.fa-wix:before {
  content: "\f5cf"; }

.fa-wizards-of-the-coast:before {
  content: "\f730"; }

.fa-wolf-pack-battalion:before {
  content: "\f514"; }

.fa-won-sign:before {
  content: "\f159"; }

.fa-wordpress:before {
  content: "\f19a"; }

.fa-wordpress-simple:before {
  content: "\f411"; }

.fa-wpbeginner:before {
  content: "\f297"; }

.fa-wpexplorer:before {
  content: "\f2de"; }

.fa-wpforms:before {
  content: "\f298"; }

.fa-wpressr:before {
  content: "\f3e4"; }

.fa-wrench:before {
  content: "\f0ad"; }

.fa-x-ray:before {
  content: "\f497"; }

.fa-xbox:before {
  content: "\f412"; }

.fa-xing:before {
  content: "\f168"; }

.fa-xing-square:before {
  content: "\f169"; }

.fa-y-combinator:before {
  content: "\f23b"; }

.fa-yahoo:before {
  content: "\f19e"; }

.fa-yandex:before {
  content: "\f413"; }

.fa-yandex-international:before {
  content: "\f414"; }

.fa-yarn:before {
  content: "\f7e3"; }

.fa-yelp:before {
  content: "\f1e9"; }

.fa-yen-sign:before {
  content: "\f157"; }

.fa-yin-yang:before {
  content: "\f6ad"; }

.fa-yoast:before {
  content: "\f2b1"; }

.fa-youtube:before {
  content: "\f167"; }

.fa-youtube-square:before {
  content: "\f431"; }

.fa-zhihu:before {
  content: "\f63f"; }

.sr-only {
  border: 0;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  clip: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  position: static;
  width: auto; }

@font-face {
  font-family: 'Font Awesome 5 Free';
  font-style: normal;
  font-weight: 900;
  src: url("../webfonts/fa-solid-900.eot");
  src: url("../webfonts/fa-solid-900.eot?#iefix") format("embedded-opentype"), url("../webfonts/fa-solid-900.woff2") format("woff2"), url("../webfonts/fa-solid-900.woff") format("woff"), url("../webfonts/fa-solid-900.ttf") format("truetype"), url("../webfonts/fa-solid-900.svg#fontawesome") format("svg"); }

.fa,
.fas {
  font-family: 'Font Awesome 5 Free';
  font-weight: 900; }

@font-face {
  font-family: 'Font Awesome 5 Free';
  font-style: normal;
  font-weight: 400;
  src: url("../webfonts/fa-regular-400.eot");
  src: url("../webfonts/fa-regular-400.eot?#iefix") format("embedded-opentype"), url("../webfonts/fa-regular-400.woff2") format("woff2"), url("../webfonts/fa-regular-400.woff") format("woff"), url("../webfonts/fa-regular-400.ttf") format("truetype"), url("../webfonts/fa-regular-400.svg#fontawesome") format("svg"); }

.far {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

@font-face {
  font-family: 'Font Awesome 5 Brands';
  font-style: normal;
  font-weight: normal;
  src: url("../webfonts/fa-brands-400.eot");
  src: url("../webfonts/fa-brands-400.eot?#iefix") format("embedded-opentype"), url("../webfonts/fa-brands-400.woff2") format("woff2"), url("../webfonts/fa-brands-400.woff") format("woff"), url("../webfonts/fa-brands-400.ttf") format("truetype"), url("../webfonts/fa-brands-400.svg#fontawesome") format("svg"); }

.fab {
  font-family: 'Font Awesome 5 Brands'; }

.fa.fa-glass:before {
  content: "\f000"; }

.fa.fa-meetup {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-star-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-star-o:before {
  content: "\f005"; }

.fa.fa-remove:before {
  content: "\f00d"; }

.fa.fa-close:before {
  content: "\f00d"; }

.fa.fa-gear:before {
  content: "\f013"; }

.fa.fa-trash-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-trash-o:before {
  content: "\f2ed"; }

.fa.fa-file-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-o:before {
  content: "\f15b"; }

.fa.fa-clock-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-clock-o:before {
  content: "\f017"; }

.fa.fa-arrow-circle-o-down {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-arrow-circle-o-down:before {
  content: "\f358"; }

.fa.fa-arrow-circle-o-up {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-arrow-circle-o-up:before {
  content: "\f35b"; }

.fa.fa-play-circle-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-play-circle-o:before {
  content: "\f144"; }

.fa.fa-repeat:before {
  content: "\f01e"; }

.fa.fa-rotate-right:before {
  content: "\f01e"; }

.fa.fa-refresh:before {
  content: "\f021"; }

.fa.fa-list-alt {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-dedent:before {
  content: "\f03b"; }

.fa.fa-video-camera:before {
  content: "\f03d"; }

.fa.fa-picture-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-picture-o:before {
  content: "\f03e"; }

.fa.fa-photo {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-photo:before {
  content: "\f03e"; }

.fa.fa-image {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-image:before {
  content: "\f03e"; }

.fa.fa-pencil:before {
  content: "\f303"; }

.fa.fa-map-marker:before {
  content: "\f3c5"; }

.fa.fa-pencil-square-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-pencil-square-o:before {
  content: "\f044"; }

.fa.fa-share-square-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-share-square-o:before {
  content: "\f14d"; }

.fa.fa-check-square-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-check-square-o:before {
  content: "\f14a"; }

.fa.fa-arrows:before {
  content: "\f0b2"; }

.fa.fa-times-circle-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-times-circle-o:before {
  content: "\f057"; }

.fa.fa-check-circle-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-check-circle-o:before {
  content: "\f058"; }

.fa.fa-mail-forward:before {
  content: "\f064"; }

.fa.fa-eye {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-eye-slash {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-warning:before {
  content: "\f071"; }

.fa.fa-calendar:before {
  content: "\f073"; }

.fa.fa-arrows-v:before {
  content: "\f338"; }

.fa.fa-arrows-h:before {
  content: "\f337"; }

.fa.fa-bar-chart {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-bar-chart:before {
  content: "\f080"; }

.fa.fa-bar-chart-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-bar-chart-o:before {
  content: "\f080"; }

.fa.fa-twitter-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-facebook-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-gears:before {
  content: "\f085"; }

.fa.fa-thumbs-o-up {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-thumbs-o-up:before {
  content: "\f164"; }

.fa.fa-thumbs-o-down {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-thumbs-o-down:before {
  content: "\f165"; }

.fa.fa-heart-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-heart-o:before {
  content: "\f004"; }

.fa.fa-sign-out:before {
  content: "\f2f5"; }

.fa.fa-linkedin-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-linkedin-square:before {
  content: "\f08c"; }

.fa.fa-thumb-tack:before {
  content: "\f08d"; }

.fa.fa-external-link:before {
  content: "\f35d"; }

.fa.fa-sign-in:before {
  content: "\f2f6"; }

.fa.fa-github-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-lemon-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-lemon-o:before {
  content: "\f094"; }

.fa.fa-square-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-square-o:before {
  content: "\f0c8"; }

.fa.fa-bookmark-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-bookmark-o:before {
  content: "\f02e"; }

.fa.fa-twitter {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-facebook {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-facebook:before {
  content: "\f39e"; }

.fa.fa-facebook-f {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-facebook-f:before {
  content: "\f39e"; }

.fa.fa-github {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-credit-card {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-feed:before {
  content: "\f09e"; }

.fa.fa-hdd-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hdd-o:before {
  content: "\f0a0"; }

.fa.fa-hand-o-right {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hand-o-right:before {
  content: "\f0a4"; }

.fa.fa-hand-o-left {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hand-o-left:before {
  content: "\f0a5"; }

.fa.fa-hand-o-up {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hand-o-up:before {
  content: "\f0a6"; }

.fa.fa-hand-o-down {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hand-o-down:before {
  content: "\f0a7"; }

.fa.fa-arrows-alt:before {
  content: "\f31e"; }

.fa.fa-group:before {
  content: "\f0c0"; }

.fa.fa-chain:before {
  content: "\f0c1"; }

.fa.fa-scissors:before {
  content: "\f0c4"; }

.fa.fa-files-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-files-o:before {
  content: "\f0c5"; }

.fa.fa-floppy-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-floppy-o:before {
  content: "\f0c7"; }

.fa.fa-navicon:before {
  content: "\f0c9"; }

.fa.fa-reorder:before {
  content: "\f0c9"; }

.fa.fa-pinterest {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-pinterest-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-google-plus-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-google-plus {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-google-plus:before {
  content: "\f0d5"; }

.fa.fa-money {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-money:before {
  content: "\f3d1"; }

.fa.fa-unsorted:before {
  content: "\f0dc"; }

.fa.fa-sort-desc:before {
  content: "\f0dd"; }

.fa.fa-sort-asc:before {
  content: "\f0de"; }

.fa.fa-linkedin {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-linkedin:before {
  content: "\f0e1"; }

.fa.fa-rotate-left:before {
  content: "\f0e2"; }

.fa.fa-legal:before {
  content: "\f0e3"; }

.fa.fa-tachometer:before {
  content: "\f3fd"; }

.fa.fa-dashboard:before {
  content: "\f3fd"; }

.fa.fa-comment-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-comment-o:before {
  content: "\f075"; }

.fa.fa-comments-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-comments-o:before {
  content: "\f086"; }

.fa.fa-flash:before {
  content: "\f0e7"; }

.fa.fa-clipboard {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-paste {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-paste:before {
  content: "\f328"; }

.fa.fa-lightbulb-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-lightbulb-o:before {
  content: "\f0eb"; }

.fa.fa-exchange:before {
  content: "\f362"; }

.fa.fa-cloud-download:before {
  content: "\f381"; }

.fa.fa-cloud-upload:before {
  content: "\f382"; }

.fa.fa-bell-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-bell-o:before {
  content: "\f0f3"; }

.fa.fa-cutlery:before {
  content: "\f2e7"; }

.fa.fa-file-text-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-text-o:before {
  content: "\f15c"; }

.fa.fa-building-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-building-o:before {
  content: "\f1ad"; }

.fa.fa-hospital-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hospital-o:before {
  content: "\f0f8"; }

.fa.fa-tablet:before {
  content: "\f3fa"; }

.fa.fa-mobile:before {
  content: "\f3cd"; }

.fa.fa-mobile-phone:before {
  content: "\f3cd"; }

.fa.fa-circle-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-circle-o:before {
  content: "\f111"; }

.fa.fa-mail-reply:before {
  content: "\f3e5"; }

.fa.fa-github-alt {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-folder-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-folder-o:before {
  content: "\f07b"; }

.fa.fa-folder-open-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-folder-open-o:before {
  content: "\f07c"; }

.fa.fa-smile-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-smile-o:before {
  content: "\f118"; }

.fa.fa-frown-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-frown-o:before {
  content: "\f119"; }

.fa.fa-meh-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-meh-o:before {
  content: "\f11a"; }

.fa.fa-keyboard-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-keyboard-o:before {
  content: "\f11c"; }

.fa.fa-flag-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-flag-o:before {
  content: "\f024"; }

.fa.fa-mail-reply-all:before {
  content: "\f122"; }

.fa.fa-star-half-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-star-half-o:before {
  content: "\f089"; }

.fa.fa-star-half-empty {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-star-half-empty:before {
  content: "\f089"; }

.fa.fa-star-half-full {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-star-half-full:before {
  content: "\f089"; }

.fa.fa-code-fork:before {
  content: "\f126"; }

.fa.fa-chain-broken:before {
  content: "\f127"; }

.fa.fa-shield:before {
  content: "\f3ed"; }

.fa.fa-calendar-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-calendar-o:before {
  content: "\f133"; }

.fa.fa-maxcdn {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-html5 {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-css3 {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-ticket:before {
  content: "\f3ff"; }

.fa.fa-minus-square-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-minus-square-o:before {
  content: "\f146"; }

.fa.fa-level-up:before {
  content: "\f3bf"; }

.fa.fa-level-down:before {
  content: "\f3be"; }

.fa.fa-pencil-square:before {
  content: "\f14b"; }

.fa.fa-external-link-square:before {
  content: "\f360"; }

.fa.fa-compass {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-caret-square-o-down {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-caret-square-o-down:before {
  content: "\f150"; }

.fa.fa-toggle-down {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-toggle-down:before {
  content: "\f150"; }

.fa.fa-caret-square-o-up {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-caret-square-o-up:before {
  content: "\f151"; }

.fa.fa-toggle-up {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-toggle-up:before {
  content: "\f151"; }

.fa.fa-caret-square-o-right {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-caret-square-o-right:before {
  content: "\f152"; }

.fa.fa-toggle-right {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-toggle-right:before {
  content: "\f152"; }

.fa.fa-eur:before {
  content: "\f153"; }

.fa.fa-euro:before {
  content: "\f153"; }

.fa.fa-gbp:before {
  content: "\f154"; }

.fa.fa-usd:before {
  content: "\f155"; }

.fa.fa-dollar:before {
  content: "\f155"; }

.fa.fa-inr:before {
  content: "\f156"; }

.fa.fa-rupee:before {
  content: "\f156"; }

.fa.fa-jpy:before {
  content: "\f157"; }

.fa.fa-cny:before {
  content: "\f157"; }

.fa.fa-rmb:before {
  content: "\f157"; }

.fa.fa-yen:before {
  content: "\f157"; }

.fa.fa-rub:before {
  content: "\f158"; }

.fa.fa-ruble:before {
  content: "\f158"; }

.fa.fa-rouble:before {
  content: "\f158"; }

.fa.fa-krw:before {
  content: "\f159"; }

.fa.fa-won:before {
  content: "\f159"; }

.fa.fa-btc {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-bitcoin {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-bitcoin:before {
  content: "\f15a"; }

.fa.fa-file-text:before {
  content: "\f15c"; }

.fa.fa-sort-alpha-asc:before {
  content: "\f15d"; }

.fa.fa-sort-alpha-desc:before {
  content: "\f15e"; }

.fa.fa-sort-amount-asc:before {
  content: "\f160"; }

.fa.fa-sort-amount-desc:before {
  content: "\f161"; }

.fa.fa-sort-numeric-asc:before {
  content: "\f162"; }

.fa.fa-sort-numeric-desc:before {
  content: "\f163"; }

.fa.fa-youtube-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-youtube {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-xing {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-xing-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-youtube-play {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-youtube-play:before {
  content: "\f167"; }

.fa.fa-dropbox {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-stack-overflow {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-instagram {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-flickr {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-adn {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-bitbucket {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-bitbucket-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-bitbucket-square:before {
  content: "\f171"; }

.fa.fa-tumblr {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-tumblr-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-long-arrow-down:before {
  content: "\f309"; }

.fa.fa-long-arrow-up:before {
  content: "\f30c"; }

.fa.fa-long-arrow-left:before {
  content: "\f30a"; }

.fa.fa-long-arrow-right:before {
  content: "\f30b"; }

.fa.fa-apple {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-windows {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-android {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-linux {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-dribbble {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-skype {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-foursquare {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-trello {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-gratipay {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-gittip {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-gittip:before {
  content: "\f184"; }

.fa.fa-sun-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-sun-o:before {
  content: "\f185"; }

.fa.fa-moon-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-moon-o:before {
  content: "\f186"; }

.fa.fa-vk {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-weibo {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-renren {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-pagelines {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-stack-exchange {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-arrow-circle-o-right {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-arrow-circle-o-right:before {
  content: "\f35a"; }

.fa.fa-arrow-circle-o-left {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-arrow-circle-o-left:before {
  content: "\f359"; }

.fa.fa-caret-square-o-left {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-caret-square-o-left:before {
  content: "\f191"; }

.fa.fa-toggle-left {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-toggle-left:before {
  content: "\f191"; }

.fa.fa-dot-circle-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-dot-circle-o:before {
  content: "\f192"; }

.fa.fa-vimeo-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-try:before {
  content: "\f195"; }

.fa.fa-turkish-lira:before {
  content: "\f195"; }

.fa.fa-plus-square-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-plus-square-o:before {
  content: "\f0fe"; }

.fa.fa-slack {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-wordpress {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-openid {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-institution:before {
  content: "\f19c"; }

.fa.fa-bank:before {
  content: "\f19c"; }

.fa.fa-mortar-board:before {
  content: "\f19d"; }

.fa.fa-yahoo {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-google {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-reddit {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-reddit-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-stumbleupon-circle {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-stumbleupon {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-delicious {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-digg {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-pied-piper-pp {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-pied-piper-alt {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-drupal {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-joomla {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-spoon:before {
  content: "\f2e5"; }

.fa.fa-behance {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-behance-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-steam {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-steam-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-automobile:before {
  content: "\f1b9"; }

.fa.fa-cab:before {
  content: "\f1ba"; }

.fa.fa-envelope-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-envelope-o:before {
  content: "\f0e0"; }

.fa.fa-deviantart {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-soundcloud {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-file-pdf-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-pdf-o:before {
  content: "\f1c1"; }

.fa.fa-file-word-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-word-o:before {
  content: "\f1c2"; }

.fa.fa-file-excel-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-excel-o:before {
  content: "\f1c3"; }

.fa.fa-file-powerpoint-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-powerpoint-o:before {
  content: "\f1c4"; }

.fa.fa-file-image-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-image-o:before {
  content: "\f1c5"; }

.fa.fa-file-photo-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-photo-o:before {
  content: "\f1c5"; }

.fa.fa-file-picture-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-picture-o:before {
  content: "\f1c5"; }

.fa.fa-file-archive-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-archive-o:before {
  content: "\f1c6"; }

.fa.fa-file-zip-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-zip-o:before {
  content: "\f1c6"; }

.fa.fa-file-audio-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-audio-o:before {
  content: "\f1c7"; }

.fa.fa-file-sound-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-sound-o:before {
  content: "\f1c7"; }

.fa.fa-file-video-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-video-o:before {
  content: "\f1c8"; }

.fa.fa-file-movie-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-movie-o:before {
  content: "\f1c8"; }

.fa.fa-file-code-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-file-code-o:before {
  content: "\f1c9"; }

.fa.fa-vine {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-codepen {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-jsfiddle {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-life-ring {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-life-bouy {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-life-bouy:before {
  content: "\f1cd"; }

.fa.fa-life-buoy {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-life-buoy:before {
  content: "\f1cd"; }

.fa.fa-life-saver {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-life-saver:before {
  content: "\f1cd"; }

.fa.fa-support {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-support:before {
  content: "\f1cd"; }

.fa.fa-circle-o-notch:before {
  content: "\f1ce"; }

.fa.fa-rebel {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-ra {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-ra:before {
  content: "\f1d0"; }

.fa.fa-resistance {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-resistance:before {
  content: "\f1d0"; }

.fa.fa-empire {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-ge {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-ge:before {
  content: "\f1d1"; }

.fa.fa-git-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-git {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-hacker-news {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-y-combinator-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-y-combinator-square:before {
  content: "\f1d4"; }

.fa.fa-yc-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-yc-square:before {
  content: "\f1d4"; }

.fa.fa-tencent-weibo {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-qq {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-weixin {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-wechat {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-wechat:before {
  content: "\f1d7"; }

.fa.fa-send:before {
  content: "\f1d8"; }

.fa.fa-paper-plane-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-paper-plane-o:before {
  content: "\f1d8"; }

.fa.fa-send-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-send-o:before {
  content: "\f1d8"; }

.fa.fa-circle-thin {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-circle-thin:before {
  content: "\f111"; }

.fa.fa-header:before {
  content: "\f1dc"; }

.fa.fa-sliders:before {
  content: "\f1de"; }

.fa.fa-futbol-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-futbol-o:before {
  content: "\f1e3"; }

.fa.fa-soccer-ball-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-soccer-ball-o:before {
  content: "\f1e3"; }

.fa.fa-slideshare {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-twitch {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-yelp {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-newspaper-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-newspaper-o:before {
  content: "\f1ea"; }

.fa.fa-paypal {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-google-wallet {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-cc-visa {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-cc-mastercard {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-cc-discover {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-cc-amex {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-cc-paypal {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-cc-stripe {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-bell-slash-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-bell-slash-o:before {
  content: "\f1f6"; }

.fa.fa-trash:before {
  content: "\f2ed"; }

.fa.fa-copyright {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-eyedropper:before {
  content: "\f1fb"; }

.fa.fa-area-chart:before {
  content: "\f1fe"; }

.fa.fa-pie-chart:before {
  content: "\f200"; }

.fa.fa-line-chart:before {
  content: "\f201"; }

.fa.fa-lastfm {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-lastfm-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-ioxhost {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-angellist {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-cc {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-cc:before {
  content: "\f20a"; }

.fa.fa-ils:before {
  content: "\f20b"; }

.fa.fa-shekel:before {
  content: "\f20b"; }

.fa.fa-sheqel:before {
  content: "\f20b"; }

.fa.fa-meanpath {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-meanpath:before {
  content: "\f2b4"; }

.fa.fa-buysellads {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-connectdevelop {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-dashcube {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-forumbee {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-leanpub {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-sellsy {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-shirtsinbulk {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-simplybuilt {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-skyatlas {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-diamond {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-diamond:before {
  content: "\f3a5"; }

.fa.fa-intersex:before {
  content: "\f224"; }

.fa.fa-facebook-official {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-facebook-official:before {
  content: "\f09a"; }

.fa.fa-pinterest-p {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-whatsapp {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-hotel:before {
  content: "\f236"; }

.fa.fa-viacoin {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-medium {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-y-combinator {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-yc {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-yc:before {
  content: "\f23b"; }

.fa.fa-optin-monster {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-opencart {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-expeditedssl {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-battery-4:before {
  content: "\f240"; }

.fa.fa-battery:before {
  content: "\f240"; }

.fa.fa-battery-3:before {
  content: "\f241"; }

.fa.fa-battery-2:before {
  content: "\f242"; }

.fa.fa-battery-1:before {
  content: "\f243"; }

.fa.fa-battery-0:before {
  content: "\f244"; }

.fa.fa-object-group {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-object-ungroup {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-sticky-note-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-sticky-note-o:before {
  content: "\f249"; }

.fa.fa-cc-jcb {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-cc-diners-club {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-clone {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hourglass-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hourglass-o:before {
  content: "\f254"; }

.fa.fa-hourglass-1:before {
  content: "\f251"; }

.fa.fa-hourglass-2:before {
  content: "\f252"; }

.fa.fa-hourglass-3:before {
  content: "\f253"; }

.fa.fa-hand-rock-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hand-rock-o:before {
  content: "\f255"; }

.fa.fa-hand-grab-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hand-grab-o:before {
  content: "\f255"; }

.fa.fa-hand-paper-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hand-paper-o:before {
  content: "\f256"; }

.fa.fa-hand-stop-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hand-stop-o:before {
  content: "\f256"; }

.fa.fa-hand-scissors-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hand-scissors-o:before {
  content: "\f257"; }

.fa.fa-hand-lizard-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hand-lizard-o:before {
  content: "\f258"; }

.fa.fa-hand-spock-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hand-spock-o:before {
  content: "\f259"; }

.fa.fa-hand-pointer-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hand-pointer-o:before {
  content: "\f25a"; }

.fa.fa-hand-peace-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-hand-peace-o:before {
  content: "\f25b"; }

.fa.fa-registered {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-creative-commons {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-gg {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-gg-circle {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-tripadvisor {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-odnoklassniki {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-odnoklassniki-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-get-pocket {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-wikipedia-w {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-safari {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-chrome {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-firefox {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-opera {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-internet-explorer {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-television:before {
  content: "\f26c"; }

.fa.fa-contao {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-500px {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-amazon {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-calendar-plus-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-calendar-plus-o:before {
  content: "\f271"; }

.fa.fa-calendar-minus-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-calendar-minus-o:before {
  content: "\f272"; }

.fa.fa-calendar-times-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-calendar-times-o:before {
  content: "\f273"; }

.fa.fa-calendar-check-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-calendar-check-o:before {
  content: "\f274"; }

.fa.fa-map-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-map-o:before {
  content: "\f279"; }

.fa.fa-commenting:before {
  content: "\f4ad"; }

.fa.fa-commenting-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-commenting-o:before {
  content: "\f4ad"; }

.fa.fa-houzz {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-vimeo {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-vimeo:before {
  content: "\f27d"; }

.fa.fa-black-tie {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-fonticons {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-reddit-alien {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-edge {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-credit-card-alt:before {
  content: "\f09d"; }

.fa.fa-codiepie {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-modx {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-fort-awesome {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-usb {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-product-hunt {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-mixcloud {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-scribd {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-pause-circle-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-pause-circle-o:before {
  content: "\f28b"; }

.fa.fa-stop-circle-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-stop-circle-o:before {
  content: "\f28d"; }

.fa.fa-bluetooth {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-bluetooth-b {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-gitlab {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-wpbeginner {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-wpforms {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-envira {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-wheelchair-alt {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-wheelchair-alt:before {
  content: "\f368"; }

.fa.fa-question-circle-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-question-circle-o:before {
  content: "\f059"; }

.fa.fa-volume-control-phone:before {
  content: "\f2a0"; }

.fa.fa-asl-interpreting:before {
  content: "\f2a3"; }

.fa.fa-deafness:before {
  content: "\f2a4"; }

.fa.fa-hard-of-hearing:before {
  content: "\f2a4"; }

.fa.fa-glide {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-glide-g {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-signing:before {
  content: "\f2a7"; }

.fa.fa-viadeo {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-viadeo-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-snapchat {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-snapchat-ghost {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-snapchat-square {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-pied-piper {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-first-order {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-yoast {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-themeisle {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-google-plus-official {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-google-plus-official:before {
  content: "\f2b3"; }

.fa.fa-google-plus-circle {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-google-plus-circle:before {
  content: "\f2b3"; }

.fa.fa-font-awesome {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-fa {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-fa:before {
  content: "\f2b4"; }

.fa.fa-handshake-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-handshake-o:before {
  content: "\f2b5"; }

.fa.fa-envelope-open-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-envelope-open-o:before {
  content: "\f2b6"; }

.fa.fa-linode {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-address-book-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-address-book-o:before {
  content: "\f2b9"; }

.fa.fa-vcard:before {
  content: "\f2bb"; }

.fa.fa-address-card-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-address-card-o:before {
  content: "\f2bb"; }

.fa.fa-vcard-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-vcard-o:before {
  content: "\f2bb"; }

.fa.fa-user-circle-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-user-circle-o:before {
  content: "\f2bd"; }

.fa.fa-user-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-user-o:before {
  content: "\f007"; }

.fa.fa-id-badge {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-drivers-license:before {
  content: "\f2c2"; }

.fa.fa-id-card-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-id-card-o:before {
  content: "\f2c2"; }

.fa.fa-drivers-license-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-drivers-license-o:before {
  content: "\f2c2"; }

.fa.fa-quora {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-free-code-camp {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-telegram {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-thermometer-4:before {
  content: "\f2c7"; }

.fa.fa-thermometer:before {
  content: "\f2c7"; }

.fa.fa-thermometer-3:before {
  content: "\f2c8"; }

.fa.fa-thermometer-2:before {
  content: "\f2c9"; }

.fa.fa-thermometer-1:before {
  content: "\f2ca"; }

.fa.fa-thermometer-0:before {
  content: "\f2cb"; }

.fa.fa-bathtub:before {
  content: "\f2cd"; }

.fa.fa-s15:before {
  content: "\f2cd"; }

.fa.fa-window-maximize {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-window-restore {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-times-rectangle:before {
  content: "\f410"; }

.fa.fa-window-close-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-window-close-o:before {
  content: "\f410"; }

.fa.fa-times-rectangle-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-times-rectangle-o:before {
  content: "\f410"; }

.fa.fa-bandcamp {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-grav {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-etsy {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-imdb {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-ravelry {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-eercast {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-eercast:before {
  content: "\f2da"; }

.fa.fa-snowflake-o {
  font-family: 'Font Awesome 5 Free';
  font-weight: 400; }

.fa.fa-snowflake-o:before {
  content: "\f2dc"; }

.fa.fa-superpowers {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-wpexplorer {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.fa.fa-spotify {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400; }

.wysiwyg {
  border-radius: 5px;
  box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
  box-sizing: border-box;
  width: 100%; }

.wysiwyg-actionbar {
  background-color: #FFF;
  border: 1px solid #eee;
  border-bottom: 1px solid rgba(10, 10, 10, 0.1);
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  width: 100%;
  box-sizing: border-box; }

.wysiwyg-button {
  background-color: transparent;
  border: none;
  cursor: pointer;
  height: 30px;
  outline: 0;
  width: 30px; }

.wysiwyg-content {
  background-color: #FFF;
  box-sizing: border-box;
  max-height: 500px;
  outline: 0;
  overflow-y: auto;
  padding: 10px;
  width: 100%;
  border: 1px solid #eee; }

.wysiwyg-content > div.editor {
  min-height: 200px; }

.wysiwyg-content :focus {
  outline: none; }

.wysiwyg-focusrect {
  box-sizing: border-box;
  border: 2px dotted rgba(60, 60, 60, 0.5); }

.wysiwyg-focuspoint {
  background-color: rgba(60, 60, 60, 0.5);
  width: 8px;
  height: 8px;
  margin: -4px; }

.wysiwyg-focuspoint.fpul, .wysiwyg-focuspoint.fplr {
  cursor: nwse-resize; }

.wysiwyg-focuspoint.fpur, .wysiwyg-focuspoint.fpll {
  cursor: nesw-resize; }

.wysiwyg-content.readonly {
  max-height: initial; }

.wysiwyg-content h1, .wysiwyg-content h2, .wysiwyg-content h3, .wysiwyg-content h4, .wysiwyg-content h5 {
  color: #000 !important; }

.wysiwyg-content hr {
  display: block !important; }

.wysiwyg-content li {
  margin-left: 1.5em !important; }

@media print {
  p {
    page-break-inside: avoid; }
  .sv-column-7 {
    width: 100% !important;
    min-width: 100% !important; }
  .hidden-print {
    display: none; }
  .sv-column-5, #readspeaker_button1 {
    display: none; }
  .pageHeader {
    display: none; }
  .sv-grid-ksgs12:first-child {
    background: #fff !important;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-border-radius: 0;
    border-radius: 0;
    padding: 0 !important;
    margin: 0 !important; }
  .ked-navigation {
    display: none; }
  .sv-first-child {
    margin-top: 0; }
  body {
    font-size: 0.95em !important;
    background: #ffffff !important; }
  iframe#sv-editor-menu {
    display: none; }
  .print:last-child {
    page-break-after: auto; }
  .pagecontent {
    margin: 0 !important;
    padding: 0 !important; }
  span.normal,
  p.normal {
    font-family: georgia, serif; } }</style>
  <script type="text/javascript" src="//f1-eu.readspeaker.com/script/8039/ReadSpeaker.js?pids=embhl"></script>
    <link id="rsmod_Styles" type="text/css" rel="stylesheet"
          href="//f1-eu.readspeaker.com/script/8039/ReadSpeaker.Styles.css?v=2.5.12.5343"/>
    <script id="req_Core" type="text/javascript"
            src="//f1-eu.readspeaker.com/script/8039/ReadSpeaker.Core.js?v=2.5.12.5343" async=""></script>
    <script id="req_pub_Config" type="text/javascript"
            src="//f1-eu.readspeaker.com/script/8039/ReadSpeaker.pub.Config.js?v=2.5.12.5343" async=""></script>


@endsection



@section('body')
<body>
    <div id="app"></div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

@endsection
