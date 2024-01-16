@include($activeTemplate.'layouts.tyxainz')
<html lang="en" data-ng-app="app" class="">
   <head>
      <meta charset="utf-8">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="format-detection" content="telephone=no, email=no">
      <meta http-equiv="Expires" content="0">
      <meta http-equiv="Pragma" content="no-cache">
      <meta http-equiv="Cache-control" content="no-cache">
      <meta http-equiv="Cache" content="no-cache">
      <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
      <script type="text/javascript" src="https://cdn.staticfile.org/jquery/1.10.0/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script type="text/javascript" src="https://cdn.staticfile.org/clipboard.js/2.0.6/clipboard.min.js"></script>
      <style>
         .am-toast {
         position: fixed;
         z-index: 100;
         top: 50%;
         width: 100%;
         margin-top: -60px;
         text-align: center;
         font-size: 14px;
         line-height: 19px;
         font-family: sans-serif
         }
         .am-toast .am-toast-text {
         display: -webkit-inline-box;
         display: -webkit-inline-flex;
         display: inline-flex;
         -webkit-box-pack: center;
         -webkit-justify-content: center;
         justify-content: center;
         -webkit-box-orient: vertical;
         -webkit-box-direction: normal;
         -webkit-flex-direction: column;
         flex-direction: column;
         padding: 0 8px;
         min-width: 120px;
         max-width: 130px;
         min-height: 120px;
         max-height: 120px;
         border-radius: 2px;
         -webkit-background-clip: padding-box;
         color: #fff;
         background-color: #333;
         opacity: .9;
         box-sizing: border-box
         }
         .am-toast .am-toast-text .iconfont {
         font-size: 13px
         }
         .am-toast .am-icon.toast {
         display: block;
         margin: 0 auto 8px;
         height: 36px;
         width: 36px
         }
         .am-toast .am-toast-text .am-loading-indicator {
         margin: 10px 0
         }
         .am-toast .am-icon.toast:before {
         content: '';
         display: block;
         width: 100%;
         height: 100%;
         background: url("data:image/png;base64,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") no-repeat;
         background-size: auto 100%;
         -webkit-background-size: auto 100%
         }
         .am-toast .am-icon.toast.success:before {
         background-position: 0 0
         }
         .am-toast .am-icon.toast.error:before,.am-toast .am-icon.toast.fail:before {
         background-position: -40px 0
         }
         .am-toast .am-icon.toast.network:before {
         background-position: -120px 0
         }
         .am-toast .am-icon.toast.warn:before {
         background-position: -161px 0
         }
         .am-toast .am-icon.toast.loading {
         -webkit-animation: rotate linear 1s infinite;
         animation: rotate linear 1s infinite
         }
         .am-toast .am-icon.toast.loading:before {
         background-position: -80px 0
         }
         .am-toast.text {
         margin-top: -10px
         }
         .am-toast.text .am-toast-text {
         margin-top: 0;
         padding: 9px 15px;
         max-width: 85%;
         min-height: 0;
         overflow: hidden;
         text-overflow: ellipsis;
         white-space: nowrap;
         border-radius: 3px;
         -webkit-background-clip: padding-box
         }
         .am-toast.hidden {
         display: none
         }
         @-webkit-keyframes rotate {
         0% {
         -webkit-transform: rotate(0);
         transform: rotate(0)
         }
         100% {
         -webkit-transform: rotate(360deg);
         transform: rotate(360deg)
         }
         }
      </style>
      <style>
         .swal2-popup.swal2-toast {
         box-sizing: border-box;
         grid-column: 1/4 !important;
         grid-row: 1/4 !important;
         grid-template-columns: min-content auto min-content;
         padding: 1em;
         overflow-y: hidden;
         background: #fff;
         box-shadow: 0 0 1px rgba(0, 0, 0, .075), 0 1px 2px rgba(0, 0, 0, .075), 1px 2px 4px rgba(0, 0, 0, .075), 1px 3px 8px rgba(0, 0, 0, .075), 2px 4px 16px rgba(0, 0, 0, .075);
         pointer-events: all
         }
         .swal2-popup.swal2-toast>* {
         grid-column: 2
         }
         .swal2-popup.swal2-toast .swal2-title {
         margin: .5em 1em;
         padding: 0;
         font-size: 1em;
         text-align: initial
         }
         .swal2-popup.swal2-toast .swal2-loading {
         justify-content: center
         }
         .swal2-popup.swal2-toast .swal2-input {
         height: 2em;
         margin: .5em;
         font-size: 1em
         }
         .swal2-popup.swal2-toast .swal2-validation-message {
         font-size: 1em
         }
         .swal2-popup.swal2-toast .swal2-footer {
         margin: .5em 0 0;
         padding: .5em 0 0;
         font-size: .8em
         }
         .swal2-popup.swal2-toast .swal2-close {
         grid-column: 3/3;
         grid-row: 1/99;
         align-self: center;
         width: .8em;
         height: .8em;
         margin: 0;
         font-size: 2em
         }
         .swal2-popup.swal2-toast .swal2-html-container {
         margin: .5em 1em;
         padding: 0;
         overflow: initial;
         font-size: 1em;
         text-align: initial
         }
         .swal2-popup.swal2-toast .swal2-html-container:empty {
         padding: 0
         }
         .swal2-popup.swal2-toast .swal2-loader {
         grid-column: 1;
         grid-row: 1/99;
         align-self: center;
         width: 2em;
         height: 2em;
         margin: .25em
         }
         .swal2-popup.swal2-toast .swal2-icon {
         grid-column: 1;
         grid-row: 1/99;
         align-self: center;
         width: 2em;
         min-width: 2em;
         height: 2em;
         margin: 0 .5em 0 0
         }
         .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
         display: flex;
         align-items: center;
         font-size: 1.8em;
         font-weight: bold
         }
         .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
         width: 2em;
         height: 2em
         }
         .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
         top: .875em;
         width: 1.375em
         }
         .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
         left: .3125em
         }
         .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
         right: .3125em
         }
         .swal2-popup.swal2-toast .swal2-actions {
         justify-content: flex-start;
         height: auto;
         margin: 0;
         margin-top: .5em;
         padding: 0 .5em
         }
         .swal2-popup.swal2-toast .swal2-styled {
         margin: .25em .5em;
         padding: .4em .6em;
         font-size: 1em
         }
         .swal2-popup.swal2-toast .swal2-success {
         border-color: #a5dc86
         }
         .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
         position: absolute;
         width: 1.6em;
         height: 3em;
         transform: rotate(45deg);
         border-radius: 50%
         }
         .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
         top: -0.8em;
         left: -0.5em;
         transform: rotate(-45deg);
         transform-origin: 2em 2em;
         border-radius: 4em 0 0 4em
         }
         .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
         top: -0.25em;
         left: .9375em;
         transform-origin: 0 1.5em;
         border-radius: 0 4em 4em 0
         }
         .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
         width: 2em;
         height: 2em
         }
         .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
         top: 0;
         left: .4375em;
         width: .4375em;
         height: 2.6875em
         }
         .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
         height: .3125em
         }
         .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
         top: 1.125em;
         left: .1875em;
         width: .75em
         }
         .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
         top: .9375em;
         right: .1875em;
         width: 1.375em
         }
         .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
         animation: swal2-toast-animate-success-line-tip .75s
         }
         .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
         animation: swal2-toast-animate-success-line-long .75s
         }
         .swal2-popup.swal2-toast.swal2-show {
         animation: swal2-toast-show .5s
         }
         .swal2-popup.swal2-toast.swal2-hide {
         animation: swal2-toast-hide .1s forwards
         }
         div:where(.swal2-container) {
         display: grid;
         position: fixed;
         z-index: 1060;
         inset: 0;
         box-sizing: border-box;
         grid-template-areas: "top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";
         grid-template-rows: minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
         height: 100%;
         padding: .625em;
         overflow-x: hidden;
         transition: background-color .1s;
         -webkit-overflow-scrolling: touch
         }
         div:where(.swal2-container).swal2-backdrop-show,
         div:where(.swal2-container).swal2-noanimation {
         background: rgba(0, 0, 0, .4)
         }
         div:where(.swal2-container).swal2-backdrop-hide {
         background: rgba(0, 0, 0, 0) !important
         }
         div:where(.swal2-container).swal2-top-start,
         div:where(.swal2-container).swal2-center-start,
         div:where(.swal2-container).swal2-bottom-start {
         grid-template-columns: minmax(0, 1fr) auto auto
         }
         div:where(.swal2-container).swal2-top,
         div:where(.swal2-container).swal2-center,
         div:where(.swal2-container).swal2-bottom {
         grid-template-columns: auto minmax(0, 1fr) auto
         }
         div:where(.swal2-container).swal2-top-end,
         div:where(.swal2-container).swal2-center-end,
         div:where(.swal2-container).swal2-bottom-end {
         grid-template-columns: auto auto minmax(0, 1fr)
         }
         div:where(.swal2-container).swal2-top-start>.swal2-popup {
         align-self: start
         }
         div:where(.swal2-container).swal2-top>.swal2-popup {
         grid-column: 2;
         align-self: start;
         justify-self: center
         }
         div:where(.swal2-container).swal2-top-end>.swal2-popup,
         div:where(.swal2-container).swal2-top-right>.swal2-popup {
         grid-column: 3;
         align-self: start;
         justify-self: end
         }
         div:where(.swal2-container).swal2-center-start>.swal2-popup,
         div:where(.swal2-container).swal2-center-left>.swal2-popup {
         grid-row: 2;
         align-self: center
         }
         div:where(.swal2-container).swal2-center>.swal2-popup {
         grid-column: 2;
         grid-row: 2;
         align-self: center;
         justify-self: center
         }
         div:where(.swal2-container).swal2-center-end>.swal2-popup,
         div:where(.swal2-container).swal2-center-right>.swal2-popup {
         grid-column: 3;
         grid-row: 2;
         align-self: center;
         justify-self: end
         }
         div:where(.swal2-container).swal2-bottom-start>.swal2-popup,
         div:where(.swal2-container).swal2-bottom-left>.swal2-popup {
         grid-column: 1;
         grid-row: 3;
         align-self: end
         }
         div:where(.swal2-container).swal2-bottom>.swal2-popup {
         grid-column: 2;
         grid-row: 3;
         justify-self: center;
         align-self: end
         }
         div:where(.swal2-container).swal2-bottom-end>.swal2-popup,
         div:where(.swal2-container).swal2-bottom-right>.swal2-popup {
         grid-column: 3;
         grid-row: 3;
         align-self: end;
         justify-self: end
         }
         div:where(.swal2-container).swal2-grow-row>.swal2-popup,
         div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup {
         grid-column: 1/4;
         width: 100%
         }
         div:where(.swal2-container).swal2-grow-column>.swal2-popup,
         div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup {
         grid-row: 1/4;
         align-self: stretch
         }
         div:where(.swal2-container).swal2-no-transition {
         transition: none !important
         }
         div:where(.swal2-container) div:where(.swal2-popup) {
         display: none;
         position: relative;
         box-sizing: border-box;
         grid-template-columns: minmax(0, 100%);
         width: 32em;
         max-width: 100%;
         padding: 0 0 1.25em;
         border: none;
         border-radius: 5px;
         background: #fff;
         color: #545454;
         font-family: inherit;
         font-size: 1rem
         }
         div:where(.swal2-container) div:where(.swal2-popup):focus {
         outline: none
         }
         div:where(.swal2-container) div:where(.swal2-popup).swal2-loading {
         overflow-y: hidden
         }
         div:where(.swal2-container) h2:where(.swal2-title) {
         position: relative;
         max-width: 100%;
         margin: 0;
         padding: .8em 1em 0;
         color: inherit;
         font-size: 1.875em;
         font-weight: 600;
         text-align: center;
         text-transform: none;
         word-wrap: break-word
         }
         div:where(.swal2-container) div:where(.swal2-actions) {
         display: flex;
         z-index: 1;
         box-sizing: border-box;
         flex-wrap: wrap;
         align-items: center;
         justify-content: center;
         width: auto;
         margin: 1.25em auto 0;
         padding: 0
         }
         div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled[disabled] {
         opacity: .4
         }
         div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:hover {
         background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))
         }
         div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:active {
         background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))
         }
         div:where(.swal2-container) div:where(.swal2-loader) {
         display: none;
         align-items: center;
         justify-content: center;
         width: 2.2em;
         height: 2.2em;
         margin: 0 1.875em;
         animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
         border-width: .25em;
         border-style: solid;
         border-radius: 100%;
         border-color: #2778c4 rgba(0, 0, 0, 0) #2778c4 rgba(0, 0, 0, 0)
         }
         div:where(.swal2-container) button:where(.swal2-styled) {
         margin: .3125em;
         padding: .625em 1.1em;
         transition: box-shadow .1s;
         box-shadow: 0 0 0 3px rgba(0, 0, 0, 0);
         font-weight: 500
         }
         div:where(.swal2-container) button:where(.swal2-styled):not([disabled]) {
         cursor: pointer
         }
         div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
         border: 0;
         border-radius: .25em;
         background: initial;
         background-color: #7066e0;
         color: #fff;
         font-size: 1em
         }
         div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm:focus {
         box-shadow: 0 0 0 3px rgba(112, 102, 224, .5)
         }
         div:where(.swal2-container) button:where(.swal2-styled).swal2-deny {
         border: 0;
         border-radius: .25em;
         background: initial;
         background-color: #dc3741;
         color: #fff;
         font-size: 1em
         }
         div:where(.swal2-container) button:where(.swal2-styled).swal2-deny:focus {
         box-shadow: 0 0 0 3px rgba(220, 55, 65, .5)
         }
         div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel {
         border: 0;
         border-radius: .25em;
         background: initial;
         background-color: #6e7881;
         color: #fff;
         font-size: 1em
         }
         div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel:focus {
         box-shadow: 0 0 0 3px rgba(110, 120, 129, .5)
         }
         div:where(.swal2-container) button:where(.swal2-styled).swal2-default-outline:focus {
         box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
         }
         div:where(.swal2-container) button:where(.swal2-styled):focus {
         outline: none
         }
         div:where(.swal2-container) button:where(.swal2-styled)::-moz-focus-inner {
         border: 0
         }
         div:where(.swal2-container) div:where(.swal2-footer) {
         justify-content: center;
         margin: 1em 0 0;
         padding: 1em 1em 0;
         border-top: 1px solid #eee;
         color: inherit;
         font-size: 1em
         }
         div:where(.swal2-container) .swal2-timer-progress-bar-container {
         position: absolute;
         right: 0;
         bottom: 0;
         left: 0;
         grid-column: auto !important;
         overflow: hidden;
         border-bottom-right-radius: 5px;
         border-bottom-left-radius: 5px
         }
         div:where(.swal2-container) div:where(.swal2-timer-progress-bar) {
         width: 100%;
         height: .25em;
         background: rgba(0, 0, 0, .2)
         }
         div:where(.swal2-container) img:where(.swal2-image) {
         max-width: 100%;
         margin: 2em auto 1em
         }
         div:where(.swal2-container) button:where(.swal2-close) {
         z-index: 2;
         align-items: center;
         justify-content: center;
         width: 1.2em;
         height: 1.2em;
         margin-top: 0;
         margin-right: 0;
         margin-bottom: -1.2em;
         padding: 0;
         overflow: hidden;
         transition: color .1s, box-shadow .1s;
         border: none;
         border-radius: 5px;
         background: rgba(0, 0, 0, 0);
         color: #ccc;
         font-family: monospace;
         font-size: 2.5em;
         cursor: pointer;
         justify-self: end
         }
         div:where(.swal2-container) button:where(.swal2-close):hover {
         transform: none;
         background: rgba(0, 0, 0, 0);
         color: #f27474
         }
         div:where(.swal2-container) button:where(.swal2-close):focus {
         outline: none;
         box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
         }
         div:where(.swal2-container) button:where(.swal2-close)::-moz-focus-inner {
         border: 0
         }
         div:where(.swal2-container) .swal2-html-container {
         z-index: 1;
         justify-content: center;
         margin: 1em 1.6em .3em;
         padding: 0;
         overflow: auto;
         color: inherit;
         font-size: 1.125em;
         font-weight: normal;
         line-height: normal;
         text-align: center;
         word-wrap: break-word;
         word-break: break-word
         }
         div:where(.swal2-container) input:where(.swal2-input),
         div:where(.swal2-container) input:where(.swal2-file),
         div:where(.swal2-container) textarea:where(.swal2-textarea),
         div:where(.swal2-container) select:where(.swal2-select),
         div:where(.swal2-container) div:where(.swal2-radio),
         div:where(.swal2-container) label:where(.swal2-checkbox) {
         margin: 1em 2em 3px
         }
         div:where(.swal2-container) input:where(.swal2-input),
         div:where(.swal2-container) input:where(.swal2-file),
         div:where(.swal2-container) textarea:where(.swal2-textarea) {
         box-sizing: border-box;
         width: auto;
         transition: border-color .1s, box-shadow .1s;
         border: 1px solid #d9d9d9;
         border-radius: .1875em;
         background: rgba(0, 0, 0, 0);
         box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(0, 0, 0, 0);
         color: inherit;
         font-size: 1.125em
         }
         div:where(.swal2-container) input:where(.swal2-input).swal2-inputerror,
         div:where(.swal2-container) input:where(.swal2-file).swal2-inputerror,
         div:where(.swal2-container) textarea:where(.swal2-textarea).swal2-inputerror {
         border-color: #f27474 !important;
         box-shadow: 0 0 2px #f27474 !important
         }
         div:where(.swal2-container) input:where(.swal2-input):focus,
         div:where(.swal2-container) input:where(.swal2-file):focus,
         div:where(.swal2-container) textarea:where(.swal2-textarea):focus {
         border: 1px solid #b4dbed;
         outline: none;
         box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(100, 150, 200, .5)
         }
         div:where(.swal2-container) input:where(.swal2-input)::placeholder,
         div:where(.swal2-container) input:where(.swal2-file)::placeholder,
         div:where(.swal2-container) textarea:where(.swal2-textarea)::placeholder {
         color: #ccc
         }
         div:where(.swal2-container) .swal2-range {
         margin: 1em 2em 3px;
         background: #fff
         }
         div:where(.swal2-container) .swal2-range input {
         width: 80%
         }
         div:where(.swal2-container) .swal2-range output {
         width: 20%;
         color: inherit;
         font-weight: 600;
         text-align: center
         }
         div:where(.swal2-container) .swal2-range input,
         div:where(.swal2-container) .swal2-range output {
         height: 2.625em;
         padding: 0;
         font-size: 1.125em;
         line-height: 2.625em
         }
         div:where(.swal2-container) .swal2-input {
         height: 2.625em;
         padding: 0 .75em
         }
         div:where(.swal2-container) .swal2-file {
         width: 75%;
         margin-right: auto;
         margin-left: auto;
         background: rgba(0, 0, 0, 0);
         font-size: 1.125em
         }
         div:where(.swal2-container) .swal2-textarea {
         height: 6.75em;
         padding: .75em
         }
         div:where(.swal2-container) .swal2-select {
         min-width: 50%;
         max-width: 100%;
         padding: .375em .625em;
         background: rgba(0, 0, 0, 0);
         color: inherit;
         font-size: 1.125em
         }
         div:where(.swal2-container) .swal2-radio,
         div:where(.swal2-container) .swal2-checkbox {
         align-items: center;
         justify-content: center;
         background: #fff;
         color: inherit
         }
         div:where(.swal2-container) .swal2-radio label,
         div:where(.swal2-container) .swal2-checkbox label {
         margin: 0 .6em;
         font-size: 1.125em
         }
         div:where(.swal2-container) .swal2-radio input,
         div:where(.swal2-container) .swal2-checkbox input {
         flex-shrink: 0;
         margin: 0 .4em
         }
         div:where(.swal2-container) label:where(.swal2-input-label) {
         display: flex;
         justify-content: center;
         margin: 1em auto 0
         }
         div:where(.swal2-container) div:where(.swal2-validation-message) {
         align-items: center;
         justify-content: center;
         margin: 1em 0 0;
         padding: .625em;
         overflow: hidden;
         background: #f0f0f0;
         color: #666;
         font-size: 1em;
         font-weight: 300
         }
         div:where(.swal2-container) div:where(.swal2-validation-message)::before {
         content: "!";
         display: inline-block;
         width: 1.5em;
         min-width: 1.5em;
         height: 1.5em;
         margin: 0 .625em;
         border-radius: 50%;
         background-color: #f27474;
         color: #fff;
         font-weight: 600;
         line-height: 1.5em;
         text-align: center
         }
         div:where(.swal2-container) .swal2-progress-steps {
         flex-wrap: wrap;
         align-items: center;
         max-width: 100%;
         margin: 1.25em auto;
         padding: 0;
         background: rgba(0, 0, 0, 0);
         font-weight: 600
         }
         div:where(.swal2-container) .swal2-progress-steps li {
         display: inline-block;
         position: relative
         }
         div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step {
         z-index: 20;
         flex-shrink: 0;
         width: 2em;
         height: 2em;
         border-radius: 2em;
         background: #2778c4;
         color: #fff;
         line-height: 2em;
         text-align: center
         }
         div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
         background: #2778c4
         }
         div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
         background: #add8e6;
         color: #fff
         }
         div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
         background: #add8e6
         }
         div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step-line {
         z-index: 10;
         flex-shrink: 0;
         width: 2.5em;
         height: .4em;
         margin: 0 -1px;
         background: #2778c4
         }
         div:where(.swal2-icon) {
         position: relative;
         box-sizing: content-box;
         justify-content: center;
         width: 5em;
         height: 5em;
         margin: 2.5em auto .6em;
         border: 0.25em solid rgba(0, 0, 0, 0);
         border-radius: 50%;
         border-color: #000;
         font-family: inherit;
         line-height: 5em;
         cursor: default;
         user-select: none
         }
         div:where(.swal2-icon) .swal2-icon-content {
         display: flex;
         align-items: center;
         font-size: 3.75em
         }
         div:where(.swal2-icon).swal2-error {
         border-color: #f27474;
         color: #f27474
         }
         div:where(.swal2-icon).swal2-error .swal2-x-mark {
         position: relative;
         flex-grow: 1
         }
         div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line] {
         display: block;
         position: absolute;
         top: 2.3125em;
         width: 2.9375em;
         height: .3125em;
         border-radius: .125em;
         background-color: #f27474
         }
         div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=left] {
         left: 1.0625em;
         transform: rotate(45deg)
         }
         div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=right] {
         right: 1em;
         transform: rotate(-45deg)
         }
         div:where(.swal2-icon).swal2-error.swal2-icon-show {
         animation: swal2-animate-error-icon .5s
         }
         div:where(.swal2-icon).swal2-error.swal2-icon-show .swal2-x-mark {
         animation: swal2-animate-error-x-mark .5s
         }
         div:where(.swal2-icon).swal2-warning {
         border-color: #facea8;
         color: #f8bb86
         }
         div:where(.swal2-icon).swal2-warning.swal2-icon-show {
         animation: swal2-animate-error-icon .5s
         }
         div:where(.swal2-icon).swal2-warning.swal2-icon-show .swal2-icon-content {
         animation: swal2-animate-i-mark .5s
         }
         div:where(.swal2-icon).swal2-info {
         border-color: #9de0f6;
         color: #3fc3ee
         }
         div:where(.swal2-icon).swal2-info.swal2-icon-show {
         animation: swal2-animate-error-icon .5s
         }
         div:where(.swal2-icon).swal2-info.swal2-icon-show .swal2-icon-content {
         animation: swal2-animate-i-mark .8s
         }
         div:where(.swal2-icon).swal2-question {
         border-color: #c9dae1;
         color: #87adbd
         }
         div:where(.swal2-icon).swal2-question.swal2-icon-show {
         animation: swal2-animate-error-icon .5s
         }
         div:where(.swal2-icon).swal2-question.swal2-icon-show .swal2-icon-content {
         animation: swal2-animate-question-mark .8s
         }
         div:where(.swal2-icon).swal2-success {
         border-color: #a5dc86;
         color: #a5dc86
         }
         div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line] {
         position: absolute;
         width: 3.75em;
         height: 7.5em;
         transform: rotate(45deg);
         border-radius: 50%
         }
         div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=left] {
         top: -0.4375em;
         left: -2.0635em;
         transform: rotate(-45deg);
         transform-origin: 3.75em 3.75em;
         border-radius: 7.5em 0 0 7.5em
         }
         div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=right] {
         top: -0.6875em;
         left: 1.875em;
         transform: rotate(-45deg);
         transform-origin: 0 3.75em;
         border-radius: 0 7.5em 7.5em 0
         }
         div:where(.swal2-icon).swal2-success .swal2-success-ring {
         position: absolute;
         z-index: 2;
         top: -0.25em;
         left: -0.25em;
         box-sizing: content-box;
         width: 100%;
         height: 100%;
         border: .25em solid rgba(165, 220, 134, .3);
         border-radius: 50%
         }
         div:where(.swal2-icon).swal2-success .swal2-success-fix {
         position: absolute;
         z-index: 1;
         top: .5em;
         left: 1.625em;
         width: .4375em;
         height: 5.625em;
         transform: rotate(-45deg)
         }
         div:where(.swal2-icon).swal2-success [class^=swal2-success-line] {
         display: block;
         position: absolute;
         z-index: 2;
         height: .3125em;
         border-radius: .125em;
         background-color: #a5dc86
         }
         div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=tip] {
         top: 2.875em;
         left: .8125em;
         width: 1.5625em;
         transform: rotate(45deg)
         }
         div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=long] {
         top: 2.375em;
         right: .5em;
         width: 2.9375em;
         transform: rotate(-45deg)
         }
         div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-tip {
         animation: swal2-animate-success-line-tip .75s
         }
         div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-long {
         animation: swal2-animate-success-line-long .75s
         }
         div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-circular-line-right {
         animation: swal2-rotate-success-circular-line 4.25s ease-in
         }
         [class^=swal2] {
         -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
         }
         .swal2-show {
         animation: swal2-show .3s
         }
         .swal2-hide {
         animation: swal2-hide .15s forwards
         }
         .swal2-noanimation {
         transition: none
         }
         .swal2-scrollbar-measure {
         position: absolute;
         top: -9999px;
         width: 50px;
         height: 50px;
         overflow: scroll
         }
         .swal2-rtl .swal2-close {
         margin-right: initial;
         margin-left: 0
         }
         .swal2-rtl .swal2-timer-progress-bar {
         right: 0;
         left: auto
         }
         @keyframes swal2-toast-show {
         0% {
         transform: translateY(-0.625em) rotateZ(2deg)
         }
         33% {
         transform: translateY(0) rotateZ(-2deg)
         }
         66% {
         transform: translateY(0.3125em) rotateZ(2deg)
         }
         100% {
         transform: translateY(0) rotateZ(0deg)
         }
         }
         @keyframes swal2-toast-hide {
         100% {
         transform: rotateZ(1deg);
         opacity: 0
         }
         }
         @keyframes swal2-toast-animate-success-line-tip {
         0% {
         top: .5625em;
         left: .0625em;
         width: 0
         }
         54% {
         top: .125em;
         left: .125em;
         width: 0
         }
         70% {
         top: .625em;
         left: -0.25em;
         width: 1.625em
         }
         84% {
         top: 1.0625em;
         left: .75em;
         width: .5em
         }
         100% {
         top: 1.125em;
         left: .1875em;
         width: .75em
         }
         }
         @keyframes swal2-toast-animate-success-line-long {
         0% {
         top: 1.625em;
         right: 1.375em;
         width: 0
         }
         65% {
         top: 1.25em;
         right: .9375em;
         width: 0
         }
         84% {
         top: .9375em;
         right: 0;
         width: 1.125em
         }
         100% {
         top: .9375em;
         right: .1875em;
         width: 1.375em
         }
         }
         @keyframes swal2-show {
         0% {
         transform: scale(0.7)
         }
         45% {
         transform: scale(1.05)
         }
         80% {
         transform: scale(0.95)
         }
         100% {
         transform: scale(1)
         }
         }
         @keyframes swal2-hide {
         0% {
         transform: scale(1);
         opacity: 1
         }
         100% {
         transform: scale(0.5);
         opacity: 0
         }
         }
         @keyframes swal2-animate-success-line-tip {
         0% {
         top: 1.1875em;
         left: .0625em;
         width: 0
         }
         54% {
         top: 1.0625em;
         left: .125em;
         width: 0
         }
         70% {
         top: 2.1875em;
         left: -0.375em;
         width: 3.125em
         }
         84% {
         top: 3em;
         left: 1.3125em;
         width: 1.0625em
         }
         100% {
         top: 2.8125em;
         left: .8125em;
         width: 1.5625em
         }
         }
         @keyframes swal2-animate-success-line-long {
         0% {
         top: 3.375em;
         right: 2.875em;
         width: 0
         }
         65% {
         top: 3.375em;
         right: 2.875em;
         width: 0
         }
         84% {
         top: 2.1875em;
         right: 0;
         width: 3.4375em
         }
         100% {
         top: 2.375em;
         right: .5em;
         width: 2.9375em
         }
         }
         @keyframes swal2-rotate-success-circular-line {
         0% {
         transform: rotate(-45deg)
         }
         5% {
         transform: rotate(-45deg)
         }
         12% {
         transform: rotate(-405deg)
         }
         100% {
         transform: rotate(-405deg)
         }
         }
         @keyframes swal2-animate-error-x-mark {
         0% {
         margin-top: 1.625em;
         transform: scale(0.4);
         opacity: 0
         }
         50% {
         margin-top: 1.625em;
         transform: scale(0.4);
         opacity: 0
         }
         80% {
         margin-top: -0.375em;
         transform: scale(1.15)
         }
         100% {
         margin-top: 0;
         transform: scale(1);
         opacity: 1
         }
         }
         @keyframes swal2-animate-error-icon {
         0% {
         transform: rotateX(100deg);
         opacity: 0
         }
         100% {
         transform: rotateX(0deg);
         opacity: 1
         }
         }
         @keyframes swal2-rotate-loading {
         0% {
         transform: rotate(0deg)
         }
         100% {
         transform: rotate(360deg)
         }
         }
         @keyframes swal2-animate-question-mark {
         0% {
         transform: rotateY(-360deg)
         }
         100% {
         transform: rotateY(0)
         }
         }
         @keyframes swal2-animate-i-mark {
         0% {
         transform: rotateZ(45deg);
         opacity: 0
         }
         25% {
         transform: rotateZ(-25deg);
         opacity: .4
         }
         50% {
         transform: rotateZ(15deg);
         opacity: .8
         }
         75% {
         transform: rotateZ(-5deg);
         opacity: 1
         }
         100% {
         transform: rotateX(0);
         opacity: 1
         }
         }
         body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
         overflow: hidden
         }
         body.swal2-height-auto {
         height: auto !important
         }
         body.swal2-no-backdrop .swal2-container {
         background-color: rgba(0, 0, 0, 0) !important;
         pointer-events: none
         }
         body.swal2-no-backdrop .swal2-container .swal2-popup {
         pointer-events: all
         }
         body.swal2-no-backdrop .swal2-container .swal2-modal {
         box-shadow: 0 0 10px rgba(0, 0, 0, .4)
         }
         @media print {
         body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
         overflow-y: scroll !important
         }
         body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
         display: none
         }
         body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
         position: static !important
         }
         }
         body.swal2-toast-shown .swal2-container {
         box-sizing: border-box;
         width: 360px;
         max-width: 100%;
         background-color: rgba(0, 0, 0, 0);
         pointer-events: none
         }
         body.swal2-toast-shown .swal2-container.swal2-top {
         inset: 0 auto auto 50%;
         transform: translateX(-50%)
         }
         body.swal2-toast-shown .swal2-container.swal2-top-end,
         body.swal2-toast-shown .swal2-container.swal2-top-right {
         inset: 0 0 auto auto
         }
         body.swal2-toast-shown .swal2-container.swal2-top-start,
         body.swal2-toast-shown .swal2-container.swal2-top-left {
         inset: 0 auto auto 0
         }
         body.swal2-toast-shown .swal2-container.swal2-center-start,
         body.swal2-toast-shown .swal2-container.swal2-center-left {
         inset: 50% auto auto 0;
         transform: translateY(-50%)
         }
         body.swal2-toast-shown .swal2-container.swal2-center {
         inset: 50% auto auto 50%;
         transform: translate(-50%, -50%)
         }
         body.swal2-toast-shown .swal2-container.swal2-center-end,
         body.swal2-toast-shown .swal2-container.swal2-center-right {
         inset: 50% 0 auto auto;
         transform: translateY(-50%)
         }
         body.swal2-toast-shown .swal2-container.swal2-bottom-start,
         body.swal2-toast-shown .swal2-container.swal2-bottom-left {
         inset: auto auto 0 0
         }
         body.swal2-toast-shown .swal2-container.swal2-bottom {
         inset: auto auto 0 50%;
         transform: translateX(-50%)
         }
         body.swal2-toast-shown .swal2-container.swal2-bottom-end,
         body.swal2-toast-shown .swal2-container.swal2-bottom-right {
         inset: auto 0 0 auto
         }
      </style>
      <style>
         html,
         body {
         height: 100%;
         }
         body {
         background-color: #f3f7f8;
         font-size: 1.6rem;
         color: #000;
         }
         /*detail-layout*/
         .headerbox {
         min-height: 71px;
         margin-top: 0;
         padding-top: 20px;
         display: inline-block;
         width: 100%;
         }
         .headerbox .title {
         padding: 0 24px;
         font-weight: 700;
         width: 50%;
         float: left;
         }
         .headerbox .timer {
         width: 50%;
         float: left;
         margin-top: 5px;
         padding: 0 24px;
         }
         .contentbox {
         min-height: 105px;
         width: 100%;
         }
         #float-btn {
         position: fixed;
         bottom: 10px;
         z-index: 100;
         margin: 0 5%;
         width: 90%;
         height: 40px;
         border-radius: 10px;
         text-align: center;
         line-height: 40px;
         background: #002fa7AA;
         color: white;
         }
         .ct1 {
         background: #fff;
         border-radius: 8px 8px 0 0;
         color: #222;
         min-height: 105px;
         width: 100%;
         vertical-align: top;
         display: inline-block;
         }
         .ctleft {
         padding: 0 24px;
         height: 36px;
         border-bottom: 1px solid #f3f7f8;
         font-size: 1.8rem;
         line-height: 18px;
         letter-spacing: 1px;
         font-weight: 300;
         }
         .ctright {
         padding: 17px 24px 13px;
         border-bottom: 8px solid #f4f7f8;
         width: 100%;
         vertical-align: top;
         display: inline-block;
         }
         .cfbtn {
         background: 0 0;
         border: 0;
         padding: 11px 0 10px;
         cursor: pointer;
         color: #002fa7;
         font-weight: bold;
         }
         .cr1 {
         float: left;
         }
         .cr1 label {
         font-size: 1.8rem;
         margin-bottom: 5px;
         display: block;
         font-weight: 500;
         }
         .cr2 {
         text-align: right;
         float: right;
         }
         .cr2 label {
         font-weight: 400;
         display: block;
         margin-bottom: 5px;
         font-size: 1.2rem;
         }
         .cr2 .btn {
         display: inline-block;
         border-radius: 3px;
         padding: 5px 10px;
         color: #fff;
         background-color: #002fa7;
         border-color: #002fa7;
         text-align: center;
         white-space: nowrap;
         vertical-align: middle;
         font-size: 12px;
         line-height: 1.5;
         touch-action: manipulation;
         cursor: pointer;
         user-select: none;
         background-image: none;
         border: 1px solid transparent;
         }
         .cr3 label {
         font-size: 1.8rem;
         margin-bottom: 5px;
         display: block;
         font-weight: 500;
         }
         /*swal2*/
         .swal2-confirm {
         background-color: #002fa7 !important;
         }
         /*loading*/
         #loading {
         width: 100%;
         height: 100%;
         position: fixed;
         left: 0;
         top: 0;
         right: 0;
         bottom: 0;
         background: rgba(0, 0, 0, 0.6);
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         }
      </style>
   </head>
   <body class="" style="">
      <div id="detail-layout">
         <div class="headerbox">
            <div class="title">
               <img id="bank-icon" src="/imgs/sa/nedbank.png" width="48px" height="48px" style="visibility: hidden;">
            </div>
            <div class="timer" align="right">
               <img style="width:16px;margin-bottom: 3px;" src="/imgs/paytm/hourglass.svg">
               <span class="ng-binding" id="counter">419</span>
            </div>
         </div>
         <div class="contentbox">
            <div class="ct1">
               <div class="ctleft">
                  <div class="cfbtn">
                     <span>step 1: copy account, money</span>
                  </div>
               </div>
               <div class="ctright">
                  @php echo  $data->gateway->description @endphp
                  <div style="overflow:hidden; height: 35px;">
                     <span class="cr1">amount: </span>
                     <span class="cr2 ">
                     <span>₦<span id="money">{{showAmount($data['final_amo']) }}</span></span>
                     <button id="btn-money" type="button" class="btn">Copy</button>
                     </span>
                  </div>
               </div>
               <form action="{{ route('user.deposit.manual.update') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <center><input class="styledInput" id="squadAmt" placeholder="enter sender's name" style="appearance: none" value="" name="sender_name/time" type="text" required=""></center>
                  <div class="upload-container">
                     <label for="file-upload" class="custom-file-upload">
                     <i class="fas fa-cloud-upload-alt"></i> Choose a file
                     </label>
                     <input type="file" id="file-upload" name="payment_slip" required="" accept=" .jpg,  .jpeg,  .png,  .pdf,  .doc, "  onchange="updateFileName()">
                     <p id="file-name"></p>
                  </div>
                  <script>
                     function updateFileName() {
                     const fileInput = document.getElementById("file-upload");
                     const fileNameDisplay = document.getElementById("file-name");
                     
                     if (fileInput.files.length > 0) {
                     fileNameDisplay.textContent = "Selected file: " + fileInput.files[0].name;
                     } else {
                     fileNameDisplay.textContent = "";
                     }
                     }
                     
                  </script>
                  <style>
                     /* Style the upload container */
                     .upload-container {
                     display: flex;
                     flex-direction: column;
                     align-items: center;
                     justify-content: center;
                     margin-top: 10px;
                     }
                     /* Style the custom file upload button */
                     .custom-file-upload {
                     display: inline-block;
                     padding: 10px 20px;
                     background-color: #3498db;
                     color: #fff;
                     font-size: 16px;
                     border-radius: 5px;
                     cursor: pointer;
                     transition: background-color 0.3s;
                     }
                     .custom-file-upload:hover {
                     background-color: #2980b9;
                     }
                     /* Hide the actual file input */
                     #file-upload {
                     display: none;
                     }
                     /* Font Awesome icons (you can use any icon library you prefer) */
                     .fas {
                     font-family: "Font Awesome 5 Free";
                     font-weight: 900;
                     }
                     /* Optional: Add additional styling to the icon */
                     .fas.fa-cloud-upload-alt {
                     margin-right: 10px;
                     }
                     .styledInput {
                     padding: 10px;
                     border: 2px solid #007bff;
                     border-radius: 5px;
                     font-size: 16px;
                     width: 300px;
                     transition: border-color 0.3s ease-in-out;
                     margin-bottom: 10px;
                     }
                     .styledInput:focus {
                     border-color: #00cc00;
                     outline: none;
                     }
                  </style>
                  <div style="padding-top: 10px; line-height:30px; text-align: center;">
                     <span style="font-size: 18px; color: #c91f37">Payment guide</span>
                  </div>
                  <div style="padding: 10px 24px 70px; font-size: 14px;">
                     <div>
                        Step 1: Open your bank app and make the transfer. Copy the bank account shown above and input the
                        amount shown above.
                     </div>
                     <div style="margin-top: 10px">
                        Step 2: Go to Rechargerecords and upload your payment reciept.
                     </div>
                  </div>
            </div>
         </div>
         <button id="float-btn" type="submit">I have made the transfer</button>
      </div>
      </form>
      <div id="overtime" style="display: none;">
         <div style="height:100px; line-height: 100px; text-align: center;">
            Order timeout
         </div>
      </div>
      <div id="loading" style="display: none;">
         <div style="width:60px; height:60px; padding: 10px; background: white">
            <img style="width:40px; height:40px;" src="/imgs/sa/svg_load.svg">
         </div>
      </div>
      <div id="toast" class="am-toast text" style="display: none; z-index: 20000">
         <div id="toast-text" class="am-toast-text">
            Copy successfully!
         </div>
      </div>
      <script charset="utf-8" src="/js/bankNgSurl.js?v=1234567"></script>
   </body>
</html>