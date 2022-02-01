<?php

namespace CSoellinger\SilverStripeRollbar\Tests\Provider;

use CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration;
use CSoellinger\SilverStripeRollbar\Provider\RollbarJsTemplateProvider;
use SilverStripe\Core\Config\Config;
use SilverStripe\Dev\SapphireTest;

/**
 * @covers \CSoellinger\SilverStripeRollbar\Provider\RollbarJsTemplateProvider
 *
 * @internal
 */
class RollbarJsTemplateProviderTest extends SapphireTest
{
    public function setUp(): void
    {
        parent::setUp();

        Config::modify()->set(RollbarJsConfiguration::class, 'accessToken', 'ad865e76e7fb496fab096ac07b1dbabb');
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Provider\RollbarJsTemplateProvider::get_template_global_variables
     */
    public function testGetTemplateGlobalVariables(): void
    {
        $expect = [
            'RollbarJS' => [
                'method' => 'RollbarJS',
                'casting' => 'HTMLText',
            ],
        ];

        self::assertEquals($expect, RollbarJsTemplateProvider::get_template_global_variables());
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Provider\RollbarJsTemplateProvider::RollbarJS
     */
    public function testRollbarJS(): void
    {
        $expect = "\n";
        $expect .= '<script type="text/javascript">var _rollbarConfig = {"accessToken":"ad865e76e7fb496fab096ac07b1dba';
        $expect .= 'bb","addErrorContext":false,"autoInstrument":{"network":true,"log":true,"dom":true,"navigation":tr';
        $expect .= 'ue,"connectivity":true},"captureIp":true,"captureUsername":false,"captureEmail":false,"captureUnca';
        $expect .= 'ught":false,"captureUnhandledRejections":false,"enabled":true,"endpoint":"https:\/\/api.rollbar.co';
        $expect .= 'm\/api\/1\/item","hostBlockList":null,"hostSafeList":null,"ignoreDuplicateErrors":true,"includeIte';
        $expect .= 'msInTelemetry":true,"logLevel":"debug","maxRetries":null,"maxTelemetryEvents":100,"overwriteScrubF';
        $expect .= 'ields":false,"reportLevel":"debug","retryInterval":null,"scrubFields":{"0":"pw","1":"pass","2":"pa';
        $expect .= 'sswd","3":"password","4":"secret","5":"confirm_password","6":"confirmPassword","7":"password_confi';
        $expect .= 'rmation","8":"passwordConfirmation","9":"access_token","10":"accessToken","11":"secret_key","12":"';
        $expect .= 'secretKey","13":"secretToken","14":"cc-number","15":"card number","16":"cardnumber","17":"cardnum"';
        $expect .= ',"18":"ccnum","19":"ccnumber","20":"cc num","21":"creditcardnumber","22":"credit card number","23"';
        $expect .= ':"newcreditcardnumber","24":"new credit card","25":"creditcardno","26":"credit card no","27":"card';
        $expect .= '#","28":"card #","29":"cc-csc","30":"cvc2","31":"cvv2","32":"ccv2","33":"security code","34":"card';
        $expect .= ' verification","35":"name on credit card","36":"name on card","37":"nameoncard","38":"cardholder",';
        $expect .= '"39":"card holder","40":"name des karteninhabers","41":"card type","42":"cardtype","43":"cc type",';
        $expect .= '"44":"cctype","45":"payment type","46":"expiration date","47":"expirationdate","48":"expdate","49"';
        $expect .= ':"cc-exp"},"scrubPaths":null,"scrubTelemetryInputs":false,"sendConfig":false,"stackTraceLimit":nul';
        $expect .= 'l,"timeout":null,"transmit":true,"uncaughtErrorLevel":"error","verbose":false,"wrapGlobalEventHand';
        $expect .= 'lers":true,"payload":{"person":null,"context":"","sessionId":null,"environment":"dev","server":{"b';
        $expect .= 'ranch":"master","root":null},"client":{"javascript":{"code_version":null,"source_map_enabled":fals';
        $expect .= 'e,"guess_uncaught_frames":false}}}};!function(r){var e={};function o(n){if(e[n])return e[n].export';
        $expect .= 's;var t=e[n]={i:n,l:!1,exports:{}};return r[n].call(t.exports,t,t.exports,o),t.l=!0,t.exports}o.m=';
        $expect .= 'r,o.c=e,o.d=function(r,e,n){o.o(r,e)||Object.defineProperty(r,e,{enumerable:!0,get:n})},o.r=functi';
        $expect .= 'on(r){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(r,Symbol.toStringTag,{';
        $expect .= 'value:"Module"}),Object.defineProperty(r,"__esModule",{value:!0})},o.t=function(r,e){if(1&e&&(r=o(';
        $expect .= 'r)),8&e)return r;if(4&e&&"object"==typeof r&&r&&r.__esModule)return r;var n=Object.create(null);if';
        $expect .= '(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:r}),2&e&&"string"!=typeof r)for(var';
        $expect .= ' t in r)o.d(n,t,function(e){return r[e]}.bind(null,t));return n},o.n=function(r){var e=r&&r.__esMo';
        $expect .= 'dule?function(){return r.default}:function(){return r};return o.d(e,"a",e),e},o.o=function(r,e){re';
        $expect .= 'turn Object.prototype.hasOwnProperty.call(r,e)},o.p="",o(o.s=0)}([function(r,e,o){"use strict";var';
        $expect .= ' n=o(1),t=o(4);_rollbarConfig=_rollbarConfig||{},_rollbarConfig.rollbarJsUrl=_rollbarConfig.rollba';
        $expect .= 'rJsUrl||"https://cdn.rollbar.com/rollbarjs/refs/tags/v2.17.0/rollbar.min.js",_rollbarConfig.async=';
        $expect .= 'void 0===_rollbarConfig.async||_rollbarConfig.async;var a=n.setupShim(window,_rollbarConfig),l=t(_';
        $expect .= 'rollbarConfig);window.rollbar=n.Rollbar,a.loadFull(window,document,!_rollbarConfig.async,_rollbarC';
        $expect .= 'onfig,l)},function(r,e,o){"use strict";var n=o(2);function t(r){return function(){try{return r.app';
        $expect .= 'ly(this,arguments)}catch(r){try{console.error("[Rollbar]: Internal error",r)}catch(r){}}}}var a=0;';
        $expect .= 'function l(r,e){this.options=r,this._rollbarOldOnError=null;var o=a++;this.shimId=function(){retur';
        $expect .= 'n o},"undefined"!=typeof window&&window._rollbarShims&&(window._rollbarShims[o]={handler:e,message';
        $expect .= 's:[]})}var i=o(3),s=function(r,e){return new l(r,e)},d=function(r){return new i(s,r)};function c(r';
        $expect .= '){return t((function(){var e=this,o=Array.prototype.slice.call(arguments,0),n={shim:e,method:r,arg';
        $expect .= 's:o,ts:new Date};window._rollbarShims[this.shimId()].messages.push(n)}))}l.prototype.loadFull=func';
        $expect .= 'tion(r,e,o,n,a){var l=!1,i=e.createElement("script"),s=e.getElementsByTagName("script")[0],d=s.par';
        $expect .= 'entNode;i.crossOrigin="",i.src=n.rollbarJsUrl,o||(i.async=!0),i.onload=i.onreadystatechange=t((fun';
        $expect .= 'ction(){if(!(l||this.readyState&&"loaded"!==this.readyState&&"complete"!==this.readyState)){i.onlo';
        $expect .= 'ad=i.onreadystatechange=null;try{d.removeChild(i)}catch(r){}l=!0,function(){var e;if(void 0===r._r';
        $expect .= 'ollbarDidLoad){e=new Error("rollbar.js did not load");for(var o,n,t,l,i=0;o=r._rollbarShims[i++];)';
        $expect .= 'for(o=o.messages||[];n=o.shift();)for(t=n.args||[],i=0;i<t.length;++i)if("function"==typeof(l=t[i]';
        $expect .= ')){l(e);break}}"function"==typeof a&&a(e)}()}})),d.insertBefore(i,s)},l.prototype.wrap=function(r,';
        $expect .= 'e,o){try{var n;if(n="function"==typeof e?e:function(){return e||{}},"function"!=typeof r)return r;';
        $expect .= 'if(r._isWrap)return r;if(!r._rollbar_wrapped&&(r._rollbar_wrapped=function(){o&&"function"==typeof';
        $expect .= ' o&&o.apply(this,arguments);try{return r.apply(this,arguments)}catch(o){var e=o;throw e&&("string"';
        $expect .= '==typeof e&&(e=new String(e)),e._rollbarContext=n()||{},e._rollbarContext._wrappedSource=r.toStrin';
        $expect .= 'g(),window._rollbarWrappedError=e),e}},r._rollbar_wrapped._isWrap=!0,r.hasOwnProperty))for(var t i';
        $expect .= 'n r)r.hasOwnProperty(t)&&(r._rollbar_wrapped[t]=r[t]);return r._rollbar_wrapped}catch(e){return r}';
        $expect .= '};for(var u="log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,h';
        $expect .= 'andleAnonymousErrors,handleUnhandledRejection,captureEvent,captureDomContentLoaded,captureLoad".sp';
        $expect .= 'lit(","),p=0;p<u.length;++p)l.prototype[u[p]]=c(u[p]);r.exports={setupShim:function(r,e){if(r){var';
        $expect .= ' o=e.globalAlias||"Rollbar";if("object"==typeof r[o])return r[o];r._rollbarShims={},r._rollbarWrap';
        $expect .= 'pedError=null;var a=new d(e);return t((function(){e.captureUncaught&&(a._rollbarOldOnError=r.onerr';
        $expect .= 'or,n.captureUncaughtExceptions(r,a,!0),e.wrapGlobalEventHandlers&&n.wrapGlobals(r,a,!0)),e.capture';
        $expect .= 'UnhandledRejections&&n.captureUnhandledRejections(r,a,!0);var t=e.autoInstrument;return!1!==e.enab';
        $expect .= 'led&&(void 0===t||!0===t||"object"==typeof t&&t.network)&&r.addEventListener&&(r.addEventListener(';
        $expect .= '"load",a.captureLoad.bind(a)),r.addEventListener("DOMContentLoaded",a.captureDomContentLoaded.bind';
        $expect .= '(a))),r[o]=a,a}))()}},Rollbar:d}},function(r,e,o){"use strict";function n(r,e,o,n){r._rollbarWrapp';
        $expect .= 'edError&&(n[4]||(n[4]=r._rollbarWrappedError),n[5]||(n[5]=r._rollbarWrappedError._rollbarContext),';
        $expect .= 'r._rollbarWrappedError=null);var t=e.handleUncaughtException.apply(e,n);o&&o.apply(r,n),"anonymous';
        $expect .= '"===t&&(e.anonymousErrorsPending+=1)}function t(r,e,o){if(e.hasOwnProperty&&e.hasOwnProperty("addE';
        $expect .= 'ventListener")){for(var n=e.addEventListener;n._rollbarOldAdd&&n.belongsToShim;)n=n._rollbarOldAdd';
        $expect .= ';var t=function(e,o,t){n.call(this,e,r.wrap(o),t)};t._rollbarOldAdd=n,t.belongsToShim=o,e.addEvent';
        $expect .= 'Listener=t;for(var a=e.removeEventListener;a._rollbarOldRemove&&a.belongsToShim;)a=a._rollbarOldRe';
        $expect .= 'move;var l=function(r,e,o){a.call(this,r,e&&e._rollbar_wrapped||e,o)};l._rollbarOldRemove=a,l.belo';
        $expect .= 'ngsToShim=o,e.removeEventListener=l}}r.exports={captureUncaughtExceptions:function(r,e,o){if(r){va';
        $expect .= 'r t;if("function"==typeof e._rollbarOldOnError)t=e._rollbarOldOnError;else if(r.onerror){for(t=r.o';
        $expect .= 'nerror;t._rollbarOldOnError;)t=t._rollbarOldOnError;e._rollbarOldOnError=t}e.handleAnonymousErrors';
        $expect .= '();var a=function(){var o=Array.prototype.slice.call(arguments,0);n(r,e,t,o)};o&&(a._rollbarOldOnE';
        $expect .= 'rror=t),r.onerror=a}},captureUnhandledRejections:function(r,e,o){if(r){"function"==typeof r._rollb';
        $expect .= 'arURH&&r._rollbarURH.belongsToShim&&r.removeEventListener("unhandledrejection",r._rollbarURH);var ';
        $expect .= 'n=function(r){var o,n,t;try{o=r.reason}catch(r){o=void 0}try{n=r.promise}catch(r){n="[unhandledrej';
        $expect .= 'ection] error getting `promise` from event"}try{t=r.detail,!o&&t&&(o=t.reason,n=t.promise)}catch(r';
        $expect .= '){}o||(o="[unhandledrejection] error getting `reason` from event"),e&&e.handleUnhandledRejection&&';
        $expect .= 'e.handleUnhandledRejection(o,n)};n.belongsToShim=o,r._rollbarURH=n,r.addEventListener("unhandledre';
        $expect .= 'jection",n)}},wrapGlobals:function(r,e,o){if(r){var n,a,l="EventTarget,Window,Node,ApplicationCach';
        $expect .= 'e,AudioTrackList,ChannelMergerNode,CryptoOperation,EventSource,FileReader,HTMLUnknownElement,IDBDa';
        $expect .= 'tabase,IDBRequest,IDBTransaction,KeyOperation,MediaController,MessagePort,ModalWindow,Notification';
        $expect .= ',SVGElementInstance,Screen,TextTrack,TextTrackCue,TextTrackList,WebSocket,WebSocketWorker,Worker,X';
        $expect .= 'MLHttpRequest,XMLHttpRequestEventTarget,XMLHttpRequestUpload".split(",");for(n=0;n<l.length;++n)r[';
        $expect .= 'a=l[n]]&&r[a].prototype&&t(e,r[a].prototype,o)}}}},function(r,e,o){"use strict";function n(r,e){th';
        $expect .= 'is.impl=r(e,this),this.options=e,function(r){for(var e=function(r){return function(){var e=Array.p';
        $expect .= 'rototype.slice.call(arguments,0);if(this.impl[r])return this.impl[r].apply(this.impl,e)}},o="log,d';
        $expect .= 'ebug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleAnonymousErro';
        $expect .= 'rs,handleUnhandledRejection,_createItem,wrap,loadFull,shimId,captureEvent,captureDomContentLoaded,';
        $expect .= 'captureLoad".split(","),n=0;n<o.length;n++)r[o[n]]=e(o[n])}(n.prototype)}n.prototype._swapAndProce';
        $expect .= 'ssMessages=function(r,e){var o,n,t;for(this.impl=r(this.options);o=e.shift();)n=o.method,t=o.args,';
        $expect .= 'this[n]&&"function"==typeof this[n]&&("captureDomContentLoaded"===n||"captureLoad"===n?this[n].app';
        $expect .= 'ly(this,[t[0],o.ts]):this[n].apply(this,t));return this},r.exports=n},function(r,e,o){"use strict"';
        $expect .= ';r.exports=function(r){return function(e){if(!e&&!window._rollbarInitialized){for(var o,n,t=(r=r||';
        $expect .= '{}).globalAlias||"Rollbar",a=window.rollbar,l=function(r){return new a(r)},i=0;o=window._rollbarSh';
        $expect .= 'ims[i++];)n||(n=o.handler),o.handler._swapAndProcessMessages(l,o.messages);window[t]=n,window._rol';
        $expect .= 'lbarInitialized=!0}}}}]);;</script>';

        self::assertEquals($expect, RollbarJsTemplateProvider::RollbarJS());
    }
}
