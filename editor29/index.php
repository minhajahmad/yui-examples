<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>YUI: Editor HTML inside toolbar</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.3.1/build/reset-fonts-grids/reset-fonts-grids.css"> 
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.3.1/build/assets/skins/sam/skin.css">     
    <link rel="stylesheet" href="http://blog.davglass.com/wp-content/themes/davglass/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="http://us.js2.yimg.com/us.js.yimg.com/i/ydn/yuiweb/css/dpsyntax-min-11.css">
    <style type="text/css" media="screen">
        p, h2 {
            margin: 1em;
        }
	</style>
</head>
<body class="yui-skin-sam">
<div id="davdoc" class="yui-t7">
    <div id="hd"><h1 id="header"><a href="http://blog.davglass.com/">YUI: Editor HTML inside toolbar</a></h1></div>
    <div id="bd">
    <p><a href="#thecode">The Code</a></p>
    <textarea id="editor">
    Morbi vitae erat. Cras sem lorem, porta ut, aliquam id, porta sed, velit. Pellentesque scelerisque erat rhoncus nulla. Integer pulvinar, est ut congue elementum, urna sapien blandit nibh, in lobortis turpis metus eget dolor. Cras tristique vulputate sapien. Integer tincidunt elit adipiscing orci.

Nulla facilisi. In in velit. Sed varius turpis sed pede. Aliquam at libero. Nunc a nibh. Nulla ullamcorper. Proin aliquet quam tempor metus. Mauris fermentum turpis vel metus. Integer tincidunt tortor eget tellus. Vivamus vel augue at metus rhoncus aliquet. Vivamus mi tellus, auctor sed, porta eu, mattis vel, ipsum. Phasellus vulputate vulputate risus. Integer tincidunt, dolor at dapibus vulputate, quam libero commodo elit, et feugiat odio felis vitae eros. Vestibulum sapien. Praesent sollicitudin nibh eu dui. Cras convallis tincidunt pede. Phasellus pellentesque metus in nulla. Praesent euismod scelerisque diam. Morbi erat turpis, lobortis in, consequat nec, lacinia sed, enim. Curabitur nisl nisl, consectetuer ac, eleifend a, condimentum vel, sem. 
    </textarea>
    <h2 id="thecode">The Javascript</h2>
    <textarea name="code" class="JScript">
(function() {
    var Dom = YAHOO.util.Dom,
        Event = YAHOO.util.Event;

    var myConfig = {
        height: '300px',
        width: '530px',
        dompath: true,
        animate: true
    };

    var myEditor = new YAHOO.widget.Editor('editor', myConfig);
    myEditor.on('toolbarLoaded', function() {
        var h = this.toolbar._titlebar.firstChild;
        h.innerHTML = 'Title: ';
        var input = document.createElement('input');
        input.setAttribute('size', '50');
        input.id = 'title';
        h.appendChild(input, h);
        this.toolbar.collapse(true);
    }, myEditor, true);
    myEditor.render();

    dp.SyntaxHighlighter.HighlightAll('code');
})();
    </textarea>
    </div>
    <div id="ft">&nbsp;</div>
</div>
<script type="text/javascript" src="http://yui.yahooapis.com/2.3.1/build/utilities/utilities.js"></script> 
<script type="text/javascript" src="http://yui.yahooapis.com/2.3.1/build/container/container_core-min.js"></script> 
<script type="text/javascript" src="http://yui.yahooapis.com/2.3.1/build/menu/menu-min.js"></script> 
<script type="text/javascript" src="http://yui.yahooapis.com/2.3.1/build/button/button-beta-min.js"></script> 
<script type="text/javascript" src="http://yui.yahooapis.com/2.3.1/build/editor/editor-beta-min.js"></script> 
<script src="http://us.js2.yimg.com/us.js.yimg.com/i/ydn/yuiweb/js/dpsyntax-min-2.js"></script>
<script type="text/javascript" src="../js/toolseffects-min.js"></script>
<script type="text/javascript" src="../js/davglass.js"></script>
<script type="text/javascript">
(function() {
    var Dom = YAHOO.util.Dom,
        Event = YAHOO.util.Event;

    var myConfig = {
        height: '300px',
        width: '530px',
        dompath: true,
        animate: true
    };

    var myEditor = new YAHOO.widget.Editor('editor', myConfig);
    myEditor.on('toolbarLoaded', function() {
        var h = this.toolbar._titlebar.firstChild;
        h.innerHTML = 'Title: ';
        var input = document.createElement('input');
        input.setAttribute('size', '50');
        input.id = 'title';
        h.appendChild(input, h);
        this.toolbar.collapse(true);
    }, myEditor, true);
    myEditor.render();

    dp.SyntaxHighlighter.HighlightAll('code');
})();

</script>
</body>
</html>
