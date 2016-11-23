<html dir="ltr" lang="en" xml:lang="en" class="yui3-js-enabled"><head>
        <title>Instituto Pró Vida: Log in to the site</title>
        <link rel="shortcut icon" href="http://ead.iprovida.org.br/theme/image.php/lambda/theme/1479404929/favicon">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="moodle, Instituto Pró Vida: Log in to the site">
        <link rel="stylesheet" type="text/css" href="http://ead.iprovida.org.br/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css"><link charset="utf-8" rel="stylesheet" id="yui_3_17_2_1_1479820015848_11" href="http://ead.iprovida.org.br/theme/yui_combo.php?3.17.2/cssbutton/cssbutton-min.css"><script charset="utf-8" id="yui_3_17_2_1_1479820015848_12" src="http://ead.iprovida.org.br/theme/yui_combo.php?3.17.2/plugin/plugin-min.js&amp;m/1479404929/core/lockscroll/lockscroll-min.js" async=""></script><script charset="utf-8" id="yui_3_17_2_1_1479820015848_23" src="http://ead.iprovida.org.br/theme/yui_combo.php?m/1479404929/core/formautosubmit/formautosubmit-min.js" async=""></script><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="http://ead.iprovida.org.br/theme/styles.php/lambda/1479404929/all">
        <link rel="stylesheet" type="text/css" href="http://ipvtransito.com.br/styles/main.css">
        <script type="text/javascript">
            //<![CDATA[
            var M = {};
            M.yui = {};
            M.pageloadstarttime = new Date();
            M.cfg = {"wwwroot": "http:\/\/ead.iprovida.org.br", "sesskey": "vIiM9iKpXy", "loadingicon": "http:\/\/ead.iprovida.org.br\/theme\/image.php\/lambda\/core\/1479404929\/i\/loading_small", "themerev": "1479404929", "slasharguments": 1, "theme": "lambda", "jsrev": "1479404929", "admin": "admin", "svgicons": true};
            var yui1ConfigFn = function (me) {
                if (/-skin|reset|fonts|grids|base/.test(me.name)) {
                    me.type = 'css';
                    me.path = me.path.replace(/\.js/, '.css');
                    me.path = me.path.replace(/\/yui2-skin/, '/assets/skins/sam/yui2-skin')
                }
            };
            var yui2ConfigFn = function (me) {
                var parts = me.name.replace(/^moodle-/, '').split('-'), component = parts.shift(), module = parts[0], min = '-min';
                if (/-(skin|core)$/.test(me.name)) {
                    parts.pop();
                    me.type = 'css';
                    min = ''
                }
                ;
                if (module) {
                    var filename = parts.join('-');
                    me.path = component + '/' + module + '/' + filename + min + '.' + me.type
                } else
                    me.path = component + '/' + component + '.' + me.type
            };
            YUI_config = {"debug": false, "base": "http:\/\/ead.iprovida.org.br\/lib\/yuilib\/3.17.2\/", "comboBase": "http:\/\/ead.iprovida.org.br\/theme\/yui_combo.php?", "combine": true, "filter": null, "insertBefore": "firstthemesheet", "groups": {"yui2": {"base": "http:\/\/ead.iprovida.org.br\/lib\/yuilib\/2in3\/2.9.0\/build\/", "comboBase": "http:\/\/ead.iprovida.org.br\/theme\/yui_combo.php?", "combine": true, "ext": false, "root": "2in3\/2.9.0\/build\/", "patterns": {"yui2-": {"group": "yui2", "configFn": yui1ConfigFn}}}, "moodle": {"name": "moodle", "base": "http:\/\/ead.iprovida.org.br\/theme\/yui_combo.php?m\/1479404929\/", "combine": true, "comboBase": "http:\/\/ead.iprovida.org.br\/theme\/yui_combo.php?", "ext": false, "root": "m\/1479404929\/", "patterns": {"moodle-": {"group": "moodle", "configFn": yui2ConfigFn}}, "filter": null, "modules": {"moodle-core-languninstallconfirm": {"requires": ["base", "node", "moodle-core-notification-confirm", "moodle-core-notification-alert"]}, "moodle-core-actionmenu": {"requires": ["base", "event", "node-event-simulate"]}, "moodle-core-chooserdialogue": {"requires": ["base", "panel", "moodle-core-notification"]}, "moodle-core-dragdrop": {"requires": ["base", "node", "io", "dom", "dd", "event-key", "event-focus", "moodle-core-notification"]}, "moodle-core-handlebars": {"condition": {"trigger": "handlebars", "when": "after"}}, "moodle-core-dock": {"requires": ["base", "node", "event-custom", "event-mouseenter", "event-resize", "escape", "moodle-core-dock-loader", "moodle-core-event"]}, "moodle-core-dock-loader": {"requires": ["escape"]}, "moodle-core-formchangechecker": {"requires": ["base", "event-focus", "moodle-core-event"]}, "moodle-core-blocks": {"requires": ["base", "node", "io", "dom", "dd", "dd-scroll", "moodle-core-dragdrop", "moodle-core-notification"]}, "moodle-core-notification": {"requires": ["moodle-core-notification-dialogue", "moodle-core-notification-alert", "moodle-core-notification-confirm", "moodle-core-notification-exception", "moodle-core-notification-ajaxexception"]}, "moodle-core-notification-dialogue": {"requires": ["base", "node", "panel", "escape", "event-key", "dd-plugin", "moodle-core-widget-focusafterclose", "moodle-core-lockscroll"]}, "moodle-core-notification-alert": {"requires": ["moodle-core-notification-dialogue"]}, "moodle-core-notification-confirm": {"requires": ["moodle-core-notification-dialogue"]}, "moodle-core-notification-exception": {"requires": ["moodle-core-notification-dialogue"]}, "moodle-core-notification-ajaxexception": {"requires": ["moodle-core-notification-dialogue"]}, "moodle-core-event": {"requires": ["event-custom"]}, "moodle-core-formautosubmit": {"requires": ["base", "event-key"]}, "moodle-core-tooltip": {"requires": ["base", "node", "io-base", "moodle-core-notification-dialogue", "json-parse", "widget-position", "widget-position-align", "event-outside", "cache-base"]}, "moodle-core-lockscroll": {"requires": ["plugin", "base-build"]}, "moodle-core-checknet": {"requires": ["base-base", "moodle-core-notification-alert", "io-base"]}, "moodle-core-maintenancemodetimer": {"requires": ["base", "node"]}, "moodle-core-popuphelp": {"requires": ["moodle-core-tooltip"]}, "moodle-core_availability-form": {"requires": ["base", "node", "event", "panel", "moodle-core-notification-dialogue", "json"]}, "moodle-backup-confirmcancel": {"requires": ["node", "node-event-simulate", "moodle-core-notification-confirm"]}, "moodle-backup-backupselectall": {"requires": ["node", "event", "node-event-simulate", "anim"]}, "moodle-calendar-info": {"requires": ["base", "node", "event-mouseenter", "event-key", "overlay", "moodle-calendar-info-skin"]}, "moodle-course-util": {"requires": ["node"], "use": ["moodle-course-util-base"], "submodules": {"moodle-course-util-base": {}, "moodle-course-util-section": {"requires": ["node", "moodle-course-util-base"]}, "moodle-course-util-cm": {"requires": ["node", "moodle-course-util-base"]}}}, "moodle-course-dragdrop": {"requires": ["base", "node", "io", "dom", "dd", "dd-scroll", "moodle-core-dragdrop", "moodle-core-notification", "moodle-course-coursebase", "moodle-course-util"]}, "moodle-course-toolboxes": {"requires": ["node", "base", "event-key", "node", "io", "moodle-course-coursebase", "moodle-course-util"]}, "moodle-course-categoryexpander": {"requires": ["node", "event-key"]}, "moodle-course-formatchooser": {"requires": ["base", "node", "node-event-simulate"]}, "moodle-course-modchooser": {"requires": ["moodle-core-chooserdialogue", "moodle-course-coursebase"]}, "moodle-course-management": {"requires": ["base", "node", "io-base", "moodle-core-notification-exception", "json-parse", "dd-constrain", "dd-proxy", "dd-drop", "dd-delegate", "node-event-delegate"]}, "moodle-form-dateselector": {"requires": ["base", "node", "overlay", "calendar"]}, "moodle-form-shortforms": {"requires": ["node", "base", "selector-css3", "moodle-core-event"]}, "moodle-form-passwordunmask": {"requires": ["node", "base"]}, "moodle-form-showadvanced": {"requires": ["node", "base", "selector-css3"]}, "moodle-core_message-deletemessage": {"requires": ["node", "event"]}, "moodle-core_message-messenger": {"requires": ["escape", "handlebars", "io-base", "moodle-core-notification-ajaxexception", "moodle-core-notification-alert", "moodle-core-notification-dialogue", "moodle-core-notification-exception"]}, "moodle-question-qbankmanager": {"requires": ["node", "selector-css3"]}, "moodle-question-preview": {"requires": ["base", "dom", "event-delegate", "event-key", "core_question_engine"]}, "moodle-question-chooser": {"requires": ["moodle-core-chooserdialogue"]}, "moodle-question-searchform": {"requires": ["base", "node"]}, "moodle-availability_completion-form": {"requires": ["base", "node", "event", "moodle-core_availability-form"]}, "moodle-availability_date-form": {"requires": ["base", "node", "event", "io", "moodle-core_availability-form"]}, "moodle-availability_grade-form": {"requires": ["base", "node", "event", "moodle-core_availability-form"]}, "moodle-availability_group-form": {"requires": ["base", "node", "event", "moodle-core_availability-form"]}, "moodle-availability_grouping-form": {"requires": ["base", "node", "event", "moodle-core_availability-form"]}, "moodle-availability_profile-form": {"requires": ["base", "node", "event", "moodle-core_availability-form"]}, "moodle-qtype_ddimageortext-form": {"requires": ["moodle-qtype_ddimageortext-dd", "form_filepicker"]}, "moodle-qtype_ddimageortext-dd": {"requires": ["node", "dd", "dd-drop", "dd-constrain"]}, "moodle-qtype_ddmarker-dd": {"requires": ["node", "event-resize", "dd", "dd-drop", "dd-constrain", "graphics"]}, "moodle-qtype_ddmarker-form": {"requires": ["moodle-qtype_ddmarker-dd", "form_filepicker", "graphics", "escape"]}, "moodle-qtype_ddwtos-dd": {"requires": ["node", "dd", "dd-drop", "dd-constrain"]}, "moodle-mod_assign-history": {"requires": ["node", "transition"]}, "moodle-mod_customcert-rearrange": {"requires": ["dd-delegate", "dd-drag"]}, "moodle-mod_forum-subscriptiontoggle": {"requires": ["base-base", "io-base"]}, "moodle-mod_quiz-util": {"requires": ["node"], "use": ["moodle-mod_quiz-util-base"], "submodules": {"moodle-mod_quiz-util-base": {}, "moodle-mod_quiz-util-slot": {"requires": ["node", "moodle-mod_quiz-util-base"]}, "moodle-mod_quiz-util-page": {"requires": ["node", "moodle-mod_quiz-util-base"]}}}, "moodle-mod_quiz-dragdrop": {"requires": ["base", "node", "io", "dom", "dd", "dd-scroll", "moodle-core-dragdrop", "moodle-core-notification", "moodle-mod_quiz-quizbase", "moodle-mod_quiz-util-base", "moodle-mod_quiz-util-page", "moodle-mod_quiz-util-slot", "moodle-course-util"]}, "moodle-mod_quiz-randomquestion": {"requires": ["base", "event", "node", "io", "moodle-core-notification-dialogue"]}, "moodle-mod_quiz-quizquestionbank": {"requires": ["base", "event", "node", "io", "io-form", "yui-later", "moodle-question-qbankmanager", "moodle-core-notification-dialogue"]}, "moodle-mod_quiz-toolboxes": {"requires": ["base", "node", "event", "event-key", "io", "moodle-mod_quiz-quizbase", "moodle-mod_quiz-util-slot", "moodle-core-notification-ajaxexception"]}, "moodle-mod_quiz-repaginate": {"requires": ["base", "event", "node", "io", "moodle-core-notification-dialogue"]}, "moodle-mod_quiz-modform": {"requires": ["base", "node", "event"]}, "moodle-mod_quiz-quizbase": {"requires": ["base", "node"]}, "moodle-mod_quiz-autosave": {"requires": ["base", "node", "event", "event-valuechange", "node-event-delegate", "io-form"]}, "moodle-mod_quiz-questionchooser": {"requires": ["moodle-core-chooserdialogue", "moodle-mod_quiz-util", "querystring-parse"]}, "moodle-message_airnotifier-toolboxes": {"requires": ["base", "node", "io"]}, "moodle-filter_glossary-autolinker": {"requires": ["base", "node", "io-base", "json-parse", "event-delegate", "overlay", "moodle-core-event", "moodle-core-notification-alert", "moodle-core-notification-exception", "moodle-core-notification-ajaxexception"]}, "moodle-filter_mathjaxloader-loader": {"requires": ["moodle-core-event"]}, "moodle-editor_atto-rangy": {"requires": []}, "moodle-editor_atto-editor": {"requires": ["node", "transition", "io", "overlay", "escape", "event", "event-simulate", "event-custom", "node-event-html5", "node-event-simulate", "yui-throttle", "moodle-core-notification-dialogue", "moodle-core-notification-confirm", "moodle-editor_atto-rangy", "handlebars", "timers", "querystring-stringify"]}, "moodle-editor_atto-plugin": {"requires": ["node", "base", "escape", "event", "event-outside", "handlebars", "event-custom", "timers", "moodle-editor_atto-menu"]}, "moodle-editor_atto-menu": {"requires": ["moodle-core-notification-dialogue", "node", "event", "event-custom"]}, "moodle-report_eventlist-eventfilter": {"requires": ["base", "event", "node", "node-event-delegate", "datatable", "autocomplete", "autocomplete-filters"]}, "moodle-report_loglive-fetchlogs": {"requires": ["base", "event", "node", "io", "node-event-delegate"]}, "moodle-gradereport_grader-gradereporttable": {"requires": ["base", "node", "event", "handlebars", "overlay", "event-hover"]}, "moodle-gradereport_history-userselector": {"requires": ["escape", "event-delegate", "event-key", "handlebars", "io-base", "json-parse", "moodle-core-notification-dialogue"]}, "moodle-tool_capability-search": {"requires": ["base", "node"]}, "moodle-tool_lp-dragdrop-reorder": {"requires": ["moodle-core-dragdrop"]}, "moodle-tool_monitor-dropdown": {"requires": ["base", "event", "node"]}, "moodle-assignfeedback_editpdf-editor": {"requires": ["base", "event", "node", "io", "graphics", "json", "event-move", "event-resize", "transition", "querystring-stringify-simple", "moodle-core-notification-dialog", "moodle-core-notification-exception", "moodle-core-notification-ajaxexception"]}, "moodle-atto_accessibilitychecker-button": {"requires": ["color-base", "moodle-editor_atto-plugin"]}, "moodle-atto_accessibilityhelper-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_align-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_bold-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_charmap-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_clear-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_collapse-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_emoticon-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_equation-button": {"requires": ["moodle-editor_atto-plugin", "moodle-core-event", "io", "event-valuechange", "tabview", "array-extras"]}, "moodle-atto_html-button": {"requires": ["moodle-editor_atto-plugin", "event-valuechange"]}, "moodle-atto_image-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_indent-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_italic-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_link-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_managefiles-usedfiles": {"requires": ["node", "escape"]}, "moodle-atto_managefiles-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_media-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_noautolink-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_orderedlist-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_rtl-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_strike-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_subscript-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_superscript-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_table-button": {"requires": ["moodle-editor_atto-plugin", "moodle-editor_atto-menu", "event", "event-valuechange"]}, "moodle-atto_title-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_underline-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_undo-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_unorderedlist-button": {"requires": ["moodle-editor_atto-plugin"]}, "moodle-atto_wordimport-button": {"requires": ["moodle-editor_atto-plugin"]}}}, "gallery": {"name": "gallery", "base": "http:\/\/ead.iprovida.org.br\/lib\/yuilib\/gallery\/", "combine": true, "comboBase": "http:\/\/ead.iprovida.org.br\/theme\/yui_combo.php?", "ext": false, "root": "gallery\/1479404929\/", "patterns": {"gallery-": {"group": "gallery"}}}}, "modules": {"core_filepicker": {"name": "core_filepicker", "fullpath": "http:\/\/ead.iprovida.org.br\/lib\/javascript.php\/1479404929\/repository\/filepicker.js", "requires": ["base", "node", "node-event-simulate", "json", "async-queue", "io-base", "io-upload-iframe", "io-form", "yui2-treeview", "panel", "cookie", "datatable", "datatable-sort", "resize-plugin", "dd-plugin", "escape", "moodle-core_filepicker"]}, "core_comment": {"name": "core_comment", "fullpath": "http:\/\/ead.iprovida.org.br\/lib\/javascript.php\/1479404929\/comment\/comment.js", "requires": ["base", "io-base", "node", "json", "yui2-animation", "overlay"]}}};
            M.yui.loader = {modules: {}};

            //]]>
        </script>

        <meta name="robots" content="noindex">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Google web fonts -->


        <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="core/first" src="http://ead.iprovida.org.br/lib/requirejs.php/1479404929/core/first.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jqueryprivate" src="http://ead.iprovida.org.br/lib/javascript.php/1479404929/lib/requirejs/jquery-private.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery" src="http://ead.iprovida.org.br/lib/javascript.php/1479404929/lib/jquery/jquery-1.12.1.min.js"></script></head>

    <body id="page-login-index" class="format-site  path-login safari dir-ltr lang-en yui-skin-sam yui3-skin-sam ead-iprovida-org-br pagelayout-login course-1 context-1 notloggedin has-region-footer-left empty-region-footer-left has-region-footer-middle empty-region-footer-middle has-region-footer-right empty-region-footer-right has-region-hidden-dock empty-region-hidden-dock content-only layout-option-langmenu jsenabled">

        <div class="skiplinks"><a class="skip" href="#maincontent">Skip to main content</a></div>
        <script type="text/javascript" src="http://ead.iprovida.org.br/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js&amp;rollup/1479404929/mcore-min.js"></script><div id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important" class=""></div><script type="text/javascript" src="http://ead.iprovida.org.br/theme/jquery.php/core/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="http://ead.iprovida.org.br/theme/jquery.php/theme_lambda/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="http://ead.iprovida.org.br/theme/jquery.php/theme_lambda/camera.min.1.11.js"></script>
        <script type="text/javascript" src="http://ead.iprovida.org.br/theme/jquery.php/theme_lambda/jquery.bxslider.js"></script>
        <script type="text/javascript" src="http://ead.iprovida.org.br/lib/javascript.php/1479404929/lib/javascript-static.js"></script>
        <script src = 'https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.js' ></script> 
        <script type="text/javascript">

            //<![CDATA[
            document.body.className += ' jsenabled';
            //]]>
        </script>


        <div id="wrapper">



            <header id="page-header" class="clearfix">

                <div class="container-fluid" id="yui_3_17_2_1_1479820015848_38">    
                    <div class="row-fluid" id="yui_3_17_2_1_1479820015848_37">
                        <!-- HEADER: LOGO AREA -->

                        <div class="logo-header">
                            <a class="logo" href="http://ead.iprovida.org.br" title="Home">
                                <img src="//ead.iprovida.org.br/pluginfile.php/1/theme_lambda/logo/1479404929/logo-3.png" class="logo" alt="logo">                    </a>
                        </div>


                        <div class="login-header" id="yui_3_17_2_1_1479820015848_36">
                            <div class="profileblock" id="yui_3_17_2_1_1479820015848_35">

                            </div>
                        </div>

                    </div>
                </div>

            </header>

            <header role="banner" class="navbar">
                <nav role="navigation" class="navbar-inner">
                    <div class="container-fluid">
                        <a class="brand" href="http://ead.iprovida.org.br">IPróVida</a>
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse collapse">
                            <ul class="nav"><li class="dropdown langmenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Language">English ‎(en)‎<b class="caret"></b></a><ul class="dropdown-menu"><li><a title="English ‎(en)‎" href="http://ead.iprovida.org.br/login/index.php?lang=en">English ‎(en)‎</a></li><li><a title="Português - Brasil ‎(pt_br)‎" href="http://ead.iprovida.org.br/login/index.php?lang=pt_br">Português - Brasil ‎(pt_br)‎</a></li></ul></li></ul>                <div class="nav-divider-right"></div>
                            <ul class="nav pull-right">
                                <li></li>
                            </ul>

                            <form id="search" action="http://ead.iprovida.org.br/course/search.php" method="GET">
                                <div class="nav-divider-left"></div>							
                                <input id="coursesearchbox" type="text" onfocus="if (this.value == 'Search courses')
                                            this.value = ''" onblur="if (this.value == '')
                                                        this.value = 'Search courses'" value="Search courses" name="search">
                                <input type="submit" value="">							
                            </form>

                        </div>
                    </div>
                </nav>
            </header>
            <div class="text-center" style="line-height:1em;">
                <img src="http://ead.iprovida.org.br/theme/lambda/pix/bg/shadow.png" class="slidershadow" alt="">
            </div>

            <div id="page" class="container-fluid">



                <div id="page-content" class="row-fluid">
                    <section id="region-main" class="span12">
                        <span class="notifications" id="user-notifications"></span><div role="main" id="yui_3_17_2_1_1479820015848_44"><span id="maincontent"></span><div class="loginbox clearfix onecolumn" id="yui_3_17_2_1_1479820015848_43">
                                <div class="loginpanel" id="yui_3_17_2_1_1479820015848_42">

                                    <div class="subcontent loginsub" id="yui_3_17_2_1_1479820015848_41">
                                        <div class="row-fluid" style="text-align: center;">


                                            <div id="dados-inscricao" ng-controller="InscricaoCtrl" class="container">
                                                <div class="row" style="text-align: left;">
                                                    <div class="col-xs-12"><h1 class="page-title">Inscreva-se já </h1><p>Preencha os campos a seguir:</p></div>
                                                </div>
                                                <div class="row">
                                                    <form  id='signup' method="POST" action="./payment.php">
                                                        <div class="coluna-esq col-xs-3" >
                                                            <div class="form-group"><label>Nome</label><input type="text" name="name" id='name' ng-model="inscricao.name" required="" class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"></div>
                                                            <div class="form-group"><label>CPF</label><input type="text" name="cpf" id='cpf' ng-model="inscricao.cpf" ui-mask="999.999.999-99" required="" minlength="11" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required ng-valid-minlength" placeholder="___.___.___-__"></div>
                                                            <div class="form-group"><label>Data de Nascimento</label><input type="text" name="nascimento" id='nascimento' ng-model="inscricao.nascimento" ui-mask="99/99/9999" required="" minlength="8" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required ng-valid-minlength" placeholder="__/__/____"></div>
                                                            <div class="row">
                                                                <div class="col-xs-8">
                                                                    <div class="form-group"><label>Endereço</label><input type="text" name="address" id='address' ng-model="inscricao.address" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <div class="form-group"><label>Núm.</label><input type="text" name="address_num" id='address_num' ng-model="inscricao.address_num" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group"><label>Bairro</label><input type="text" name="address_neighbourhood" id='address_neighbourhood' ng-model="inscricao.address_neighbourhood" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                                                            <div class="form-group"><label>Telefone</label><input type="text" name="phone" id='phone' ng-model="inscricao.phone" ui-mask="(99) 9999-9999" minlength="10" required="" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required ng-valid-minlength" placeholder="(__) ____-____"></div>
                                                            <div class="form-group"><label>Nr. CNH</label><input type="text" name="nr_cnh" id='nr_cnh' ng-model="inscricao.nr_cnh" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                                                            <div class="form-group"><label>E-mail</label><input type="email" name="email" id='email' ng-model="inscricao.email" required="" class="form-control ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required"></div>
                                                            <div class="form-group"><label>Formulário Renach <small>(Protocolo fornecido pelo DETRAN)</small></label><input type="text" name="renach" id='renach' ng-model="inscricao.renach" ui-mask="AA ********" required="" minlength="6" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required ng-valid-minlength" placeholder="__ ________"></div>
                                                        </div>
                                                        <div class="col-xs-4 col-xs-offset-1">
                                                            <div class="form-group"><label>Sexo</label>
                                                                <div class="clearfix"></div><label><input type="radio" name="sex" value="Masculino" ng-model="inscricao.sex" required="" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"> Masculino</label><label><input type="radio" name="sex" value="Feminino" ng-model="inscricao.sex" required="" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"> Feminino</label></div>
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    <div class="form-group"><label>RG</label><input type="text" name="rg" id='rg' ng-model="inscricao.rg" ui-mask="99.999.999-9" required="" minlength="9" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required ng-valid-minlength" placeholder="__.___.___-_"></div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="form-group"><label>Órgão Expedidor/UF</label><input type="text" name="orgao_expedidor" id='orgao_expedidor' ng-model="inscricao.orgao_expedidor" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group"><label>Nome Completo da Mãe</label><input type="text" name="mom_name" id='mom_name' ng-model="inscricao.mom_name" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                                                            <div class="form-group"><label>Complemento</label><input type="text" name="address_complement" id='address_complement' ng-model="inscricao.address_complement" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>
                                                            <div class="form-group"><label>CEP</label><input type="text" name="address_cep" id='address_cep' ng-model="inscricao.address_cep" ui-mask="99999-999" required="" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required" placeholder="_____-___"></div>
                                                            <div class="form-group"><label>Celular</label><input type="text" name="cell_phone" id='cell_phone' ng-model="inscricao.cell_phone" ui-mask="(99) 9999-9999?9" minlength="10" required="" class="form-control ng-pristine ng-untouched ng-valid-mask ng-empty ng-invalid ng-invalid-required ng-valid-minlength" placeholder="(__) ____-_____"></div>
                                                            <div class="form-group"><label>Categoria</label><select name="categoria" id='categoria' class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched" ng-model="inscricao.categoria" required=""><option value="">Selecionar</option><option value="A">A</option></select></div>
                                                            <div class="form-group"><label>Senha</label><input type="password" name="password" id='password' ng-model="inscricao.password" required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></div>

                                                            <div class="form-group">
                                                                <button class="btn btn-block btn-primary btn-lg" id='invoke_paypal'>Próxima Etapa &gt;&gt;</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </body>
                                    </html>
