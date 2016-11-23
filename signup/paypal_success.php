<?php
/*
  echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";
 */

require_once './classes/Signup.php';
$sn = new Signup();
$payment = new stdClass();
$payment->amount = $_REQUEST['amt'];
$payment->currency = $_REQUEST['cc'];
$user_data = $_REQUEST['cm'];
$user_data_arr = explode('/', $user_data);
$payment->email = $user_data_arr[0];
$payment->pwd = $user_data_arr[1];
$payment->transid = $_REQUEST['tx'];
$status = $_REQUEST['st'];
?>



<html dir="ltr" lang="en" xml:lang="en" class="yui3-js-enabled"><head>
        <title>Instituto Pró Vida: Log in to the site</title>
        <link rel="shortcut icon" href="http://ead.iprovida.org.br/theme/image.php/lambda/theme/1479404929/favicon">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="moodle, Instituto Pró Vida: Log in to the site">
        <link rel="stylesheet" type="text/css" href="http://ead.iprovida.org.br/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css"><link charset="utf-8" rel="stylesheet" id="yui_3_17_2_1_1479820015848_11" href="http://ead.iprovida.org.br/theme/yui_combo.php?3.17.2/cssbutton/cssbutton-min.css"><script charset="utf-8" id="yui_3_17_2_1_1479820015848_12" src="http://ead.iprovida.org.br/theme/yui_combo.php?3.17.2/plugin/plugin-min.js&amp;m/1479404929/core/lockscroll/lockscroll-min.js" async=""></script><script charset="utf-8" id="yui_3_17_2_1_1479820015848_23" src="http://ead.iprovida.org.br/theme/yui_combo.php?m/1479404929/core/formautosubmit/formautosubmit-min.js" async=""></script><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="http://ead.iprovida.org.br/theme/styles.php/lambda/1479404929/all">
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

                                <form class="navbar-form pull-right" method="post" action="http://ead.iprovida.org.br/login/index.php?authldap_skipntlmsso=1" id="yui_3_17_2_1_1479820015848_34">
                                    <div id="block-login">
                                        <label id="user"><i class="fa fa-user"></i></label>	
                                        <input id="inputName" class="span2" type="text" name="username" placeholder="Username" style="margin-bottom:10px;">
                                        <label id="pass"><i class="fa fa-key"></i></label>        
                                        <input id="inputPassword" class="span2" type="password" name="password" placeholder="Password">        
                                        <input type="submit" id="submit" name="submit" value="">
                                    </div>
                                </form>


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
                                            <?php
                                            if ($status == 'Completed') {
                                                $sn->add_user_payment($payment);
                                                ?>

                                                <table align='center'>
                                                    <tr>
                                                        <td colspan="2" style='padding:15px;text-align:center; '>Dear Customer!</td>
                                                    </tr>    

                                                    <tr>
                                                        <td colspan="2" style='padding:15px;text-align:center; '>Thank you for your order!</td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2" style='padding:15px;text-align:center; '>Your order ID: <?php echo $payment->transid; ?> </td>
                                                    </tr>

                                                    <tr>
                                                        <td style='padding:15px;text-align:center; ' colspan="2">Your username: <?php echo $payment->email; ?></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td style='padding:15px;text-align:center; ' colspan="2">Your password: <?php echo $payment->pwd; ?></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td style='padding:15px;' solspan='2'>An email was sent to <?php echo $payment->email; ?> . If you need assistance please contact us by info@ead.iprovida.org.br</td>
                                                    </tr>
                                                </table>

                                                <?php
                                            } // end if 
                                            else {
                                                ?>

                                                <div class="row-fluid" style="text-align: center;">
                                                    <span class="col-xs-6">Transaction failed</span>
                                                </div>


                                                <?php
                                            }
                                            ?>



                                        </div>
                                        <div class="desc">
                                            Cookies must be enabled in your browser<span class="helptooltip"><a href="http://ead.iprovida.org.br/help.php?component=moodle&amp;identifier=cookiesenabled&amp;lang=en" title="Help with Cookies must be enabled in your browser" aria-haspopup="true" target="_blank"><img src="http://ead.iprovida.org.br/theme/image.php/lambda/core/1479404929/help" alt="Help with Cookies must be enabled in your browser" class="iconhelp"></a></span>        </div>
                                    </div>

                                </div>
                            </div>
                        </div>        </section>
                </div>

                <a href="#top" class="back-to-top" style="display: none;"><i class="fa fa-chevron-circle-up fa-3x"></i><p></p></a>

            </div>

            <footer id="page-footer" class="container-fluid">
                <div class="row-fluid">
                    <aside id="block-region-footer-left" class="span4 block-region" data-blockregion="footer-left" data-droptarget="1"></aside><aside id="block-region-footer-middle" class="span4 block-region" data-blockregion="footer-middle" data-droptarget="1"></aside><aside id="block-region-footer-right" class="span4 block-region" data-blockregion="footer-right" data-droptarget="1"></aside> 	</div>

                <div class="footerlinks">
                    <div class="row-fluid">
                        <p class="helplink"></p>
                    </div>



                </div>


            </footer>

            <script type="text/javascript">
                //<![CDATA[
                var require = {
                    baseUrl: 'http://ead.iprovida.org.br/lib/requirejs.php/1479404929/',
                    // We only support AMD modules with an explicit define() statement.
                    enforceDefine: true,
                    skipDataMain: true,
                    paths: {
                        jquery: 'http://ead.iprovida.org.br/lib/javascript.php/1479404929/lib/jquery/jquery-1.12.1.min',
                        jqueryui: 'http://ead.iprovida.org.br/lib/javascript.php/1479404929/lib/jquery/ui-1.11.4/jquery-ui.min',
                        jqueryprivate: 'http://ead.iprovida.org.br/lib/javascript.php/1479404929/lib/requirejs/jquery-private'
                    },
                    // Custom jquery config map.
                    map: {
                        // '*' means all modules will get 'jqueryprivate'
                        // for their 'jquery' dependency.
                        '*': {jquery: 'jqueryprivate'},
                        // 'jquery-private' wants the real jQuery module
                        // though. If this line was not here, there would
                        // be an unresolvable cyclic dependency.
                        jqueryprivate: {jquery: 'jquery'}
                    }
                };

                //]]>
            </script>
            <script type="text/javascript" src="http://ead.iprovida.org.br/lib/javascript.php/1479404929/lib/requirejs/require.min.js"></script>
            <script type="text/javascript">
                //<![CDATA[
                require(['core/first'], function () {
                    ;
                    require(["block_settings/settingsblock"], function (amd) {
                        amd.init("5", null);
                    });
                    ;
                    require(["core/log"], function (amd) {
                        amd.setConfig({"level": "warn"});
                    });
                });
                //]]>
            </script>
            <script type="text/javascript" src="http://ead.iprovida.org.br/theme/javascript.php/lambda/1479404929/footer"></script>
            <script type="text/javascript">
                //<![CDATA[
                M.str = {"moodle": {"lastmodified": "Last modified", "name": "Name", "error": "Error", "info": "Information", "yes": "Yes", "no": "No", "morehelp": "More help", "loadinghelp": "Loading...", "cancel": "Cancel", "confirm": "Confirm", "areyousure": "Are you sure?", "closebuttontitle": "Close", "unknownerror": "Unknown error"}, "repository": {"type": "Type", "size": "Size", "invalidjson": "Invalid JSON string", "nofilesattached": "No files attached", "filepicker": "File picker", "logout": "Logout", "nofilesavailable": "No files available", "norepositoriesavailable": "Sorry, none of your current repositories can return files in the required format.", "fileexistsdialogheader": "File exists", "fileexistsdialog_editor": "A file with that name has already been attached to the text you are editing.", "fileexistsdialog_filemanager": "A file with that name has already been attached", "renameto": "Rename to \"{$a}\"", "referencesexist": "There are {$a} alias\/shortcut files that use this file as their source", "select": "Select"}, "admin": {"confirmdeletecomments": "You are about to delete comments, are you sure?", "confirmation": "Confirmation"}};
                //]]>
            </script>
            <script type="text/javascript">
                //<![CDATA[
                (function () {
                    M.util.load_flowplayer();
                    setTimeout("fix_column_widths()", 20);
                    M.util.help_popups.setup(Y);
                    Y.use("moodle-core-popuphelp", function () {
                        M.core.init_popuphelp();
                    });
                    M.util.init_skiplink(Y);
                    Y.use("moodle-core-formautosubmit", function () {
                        M.core.init_formautosubmit({"selectid": "single_select583442e8623244", "nothing": false});
                    });
                    M.util.js_pending('random583442e8623245');
                    Y.on('domready', function () {
                        M.util.js_complete("init");
                        M.util.js_complete('random583442e8623245');
                    });
                })();
                //]]>
            </script>


            <!--[if lte IE 9]>
            <script src="http://ead.iprovida.org.br/theme/lambda/javascript/ie/iefix.js"></script>
            <![endif]-->


            <script>
                jQuery(document).ready(function ($) {
                    $('.navbar .dropdown').hover(function () {
                        $(this).addClass('extra-nav-class').find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
                    }, function () {
                        var na = $(this)
                        na.find('.dropdown-menu').first().stop(true, true).delay(100).slideUp('fast', function () {
                            na.removeClass('extra-nav-class')
                        })
                    });

                });

                jQuery(document).ready(function () {
                    var offset = 220;
                    var duration = 500;
                    jQuery(window).scroll(function () {
                        if (jQuery(this).scrollTop() > offset) {
                            jQuery('.back-to-top').fadeIn(duration);
                        } else {
                            jQuery('.back-to-top').fadeOut(duration);
                        }
                    });

                    jQuery('.back-to-top').click(function (event) {
                        event.preventDefault();
                        jQuery('html, body').animate({scrollTop: 0}, duration);
                        return false;
                    })
                });
            </script>




        </div></body></html>





