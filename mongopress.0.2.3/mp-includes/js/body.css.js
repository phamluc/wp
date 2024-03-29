/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
    Head JS     The only script in your <HEAD>
    Copyright   Tero Piirainen (tipiirai)
    License     MIT / http://bit.ly/mit-license
    Version     0.96

    http://headjs.com
*/
(function(doc) {

    var html = doc.documentElement,
         conf = {
            screens: [320, 480, 640, 768, 1024, 1280, 1440, 1680, 1920],
            div: "-div",
            page: "-page",
            head: "head"
         },
         klass = [];


    if (window.head_conf) {
        for (var key in head_conf) {
            if (head_conf[key] !== undefined) {
                conf[key] = head_conf[key];
            }
        }
    }

    function pushClass(name) {
        klass[klass.length] = name;
    }

    function removeClass(name) {
        var re = new RegExp("\\b" + name + "\\b");
        html.className = html.className.replace(re, '');
    }

    function each(arr, fn) {
        for (var i = 0, arr_length = arr.length; i < arr_length; i++) {
            fn.call(arr, arr[i], i);
        }
    }

    // API
    var api = window[conf.head] = function() {
        api.ready.apply(null, arguments);
    };

    api.feature = function(key, enabled, queue) {

        // internal: apply all classes
        if (!key) {
            html.className += ' ' + klass.join( ' ' );
            klass = [];
            return;
        }

        if (Object.prototype.toString.call(enabled) == '[object Function]') {
            enabled = enabled.call();
        }

        pushClass((enabled ? '' : 'no-') + key);
        api[key] = !!enabled;

        // apply class to HTML element
        if (!queue) {
            removeClass('no-' + key);
            removeClass(key);
            api.feature();
        }

        return api;
    };

    // browser type & version
    var ua = navigator.userAgent.toLowerCase();

    ua = /(webkit)[ \/]([\w.]+)/.exec( ua ) ||
        /(opera)(?:.*version)?[ \/]([\w.]+)/.exec( ua ) ||
        /(msie) ([\w.]+)/.exec( ua ) ||
        !/compatible/.test( ua ) && /(mozilla)(?:.*? rv:([\w.]+))?/.exec( ua ) || [];


    if (ua[1] == 'msie') {
        ua[1] = 'ie';
        ua[2] = document.documentMode || ua[2];
    }

    pushClass(ua[1]);

    api.browser = { version: ua[2] };
    api.browser[ua[1]] = true;

    // IE specific
    if (api.browser.ie) {

        pushClass("ie" + parseFloat(ua[2]));

        // IE versions
        for (var ver = 3; ver < 11; ver++) {
            if (parseFloat(ua[2]) < ver) { pushClass("lt-ie" + ver); }
        }

        // HTML5 support
        /*
        each("abbr|article|aside|audio|canvas|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|div|summary|time|video".split("|"), function(el) {
            doc.createElement(el);
        }); */

    }


    // screen resolution: w-100, lt-480, lt-1024 ...
    function screenSize() {
        var w = window.outerWidth || html.clientWidth;

        // remove earlier widths
        html.className = html.className.replace(/ (w|lt)-\d+/g, "");

        // add new ones
        pushClass("w-" + Math.round(w / 100) * 100);

        each(conf.screens, function(width) {
            if (w <= width) { pushClass("lt-" + width); }
        });

        api.feature();
    }

    screenSize();
    window.onresize = screenSize;

    api.feature("js", true).feature();

})(document);


/**
    Head JS     The only script in your <HEAD>
    Copyright   Tero Piirainen (tipiirai)
    License     MIT / http://bit.ly/mit-license
    Version     0.96

    http://headjs.com
*/
(function() {
    /*
        To add a new test:

        head.feature("video", function() {
            var tag = document.createElement('video');
            return !!tag.canPlayType;
        });

        Good place to grab more tests

        https://github.com/Modernizr/Modernizr/blob/master/modernizr.js
    */


    /* CSS modernizer */
    var el = document.createElement("i"),
         style = el.style,
         prefs = ' -o- -moz- -ms- -webkit- -khtml- '.split(' '),
         domPrefs = 'Webkit Moz O ms Khtml'.split(' '),

         head_var = window.head_conf && head_conf.head || "head",
         api = window[head_var];


     
    // enable features at once
    api.feature();

})();