
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form component - UIkit documentation</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
        <link id="data-uikit-theme" rel="stylesheet" href="css/uikit.docs.min.css">
        <link rel="stylesheet" href="css/docs.css">
        <link rel="stylesheet" href="../vendor/highlight/highlight.css">
        <script src="../vendor/jquery.js"></script>
        <script src="../dist/js/uikit.min.js"></script>
        <script src="../vendor/highlight/highlight.js"></script>
        <script src="js/docs.js"></script>
    </head>

    <body class="tm-background">

        <nav class="tm-navbar uk-navbar uk-navbar-attached">
            <div class="uk-container uk-container-center">

                <a class="uk-navbar-brand uk-hidden-small" href="../index.html"><img class="uk-margin uk-margin-remove" src="images/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></a>

                <ul class="uk-navbar-nav uk-hidden-small">
                    <li><a href="documentation_get-started.html">Get Started</a></li>
                    <li class="uk-active"><a href="components.html">Components</a></li>
                    <li><a href="addons.html">Add-ons</a></li>
                    <li><a href="customizer.html">Customizer</a></li>
                </ul>

                <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>

                <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img src="images/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></div>

            </div>
        </nav>

        <div class="tm-middle">
            <div class="uk-container uk-container-center">

                <div class="uk-grid" data-uk-grid-margin>
                    <div class="tm-sidebar uk-width-medium-1-4 uk-hidden-small">

                        <ul class="tm-nav uk-nav" data-uk-nav>

                            <li class="uk-nav-header">Defaults</li>
                            <li><a href="normalize.html">Normalize</a></li>
                            <li><a href="base.html">Base</a></li>
                            <li><a href="print.html">Print</a></li>

                            <li class="uk-nav-header">Layout</li>
                            <li><a href="grid.html">Grid</a></li>
                            <li><a href="panel.html">Panel</a></li>
                            <li><a href="article.html">Article</a></li>
                            <li><a href="comment.html">Comment</a></li>
                            <li><a href="utility.html">Utility</a></li>

                            <li class="uk-nav-header">Navigations</li>
                            <li><a href="nav.html">Nav</a></li>
                            <li><a href="navbar.html">Navbar</a></li>
                            <li><a href="subnav.html">Subnav</a></li>
                            <li><a href="breadcrumb.html">Breadcrumb</a></li>
                            <li><a href="pagination.html">Pagination</a></li>
                            <li><a href="tab.html">Tab</a></li>

                            <li class="uk-nav-header">Elements</li>
                            <li><a href="list.html">List</a></li>
                            <li><a href="description-list.html">Description list</a></li>
                            <li><a href="table.html">Table</a></li>
                            <li class="uk-active"><a href="form.html">Form</a></li>

                            <li class="uk-nav-header">Common</li>
                            <li><a href="button.html">Button</a></li>
                            <li><a href="icon.html">Icon</a></li>
                            <li><a href="close.html">Close</a></li>
                            <li><a href="badge.html">Badge</a></li>
                            <li><a href="alert.html">Alert</a></li>
                            <li><a href="thumbnail.html">Thumbnail</a></li>
                            <li><a href="overlay.html">Overlay</a></li>
                            <li><a href="progress.html">Progress</a></li>
                            <li><a href="search.html">Search</a></li>
                            <li><a href="text.html">Text</a></li>
                            <li><a href="animation.html">Animation</a></li>

                            <li class="uk-nav-header">JavaScript</li>
                            <li><a href="dropdown.html">Dropdown</a></li>
                            <li><a href="modal.html">Modal</a></li>
                            <li><a href="offcanvas.html">Off-canvas</a></li>
                            <li><a href="switcher.html">Switcher</a></li>
                            <li><a href="toggle.html">Toggle</a></li>
                            <li><a href="tooltip.html">Tooltip</a></li>
                            <li><a href="scrollspy.html">Scrollspy</a></li>
                            <li><a href="smooth-scroll.html">Smooth scroll</a></li>

                        </ul>

                    </div>
                    <div class="tm-main uk-width-medium-3-4">

                        <article class="uk-article">

                            <h1 class="uk-article-title">Form</h1>

                           


                            <form class="uk-form uk-form-horizontal">

                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="form-h-it">Text input</label>
                                    <div class="uk-form-controls">
                                        <input type="text" id="form-h-it" name=""placeholder="Text input">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="form-h-ip">Password input</label>
                                    <div class="uk-form-controls">
                                        <input type="password" id="form-h-ip" placeholder="Password input">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="form-h-s">Select field</label>
                                    <div class="uk-form-controls">
                                        <select id="form-h-s">
                                            <option>Option 01</option>
                                            <option>Option 02</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="form-h-t">Textarea</label>
                                    <div class="uk-form-controls">
                                        <textarea id="form-h-t" cols="30" rows="5" placeholder="Textarea text"></textarea>
                                    </div>
                                </div>

                                <div class="uk-form-row">
                                    <span class="uk-form-label">Radio input</span>
                                    <div class="uk-form-controls uk-form-controls-text">
                                        <input type="radio" id="form-h-r" name="radio"> <label for="form-h-r">Radio input</label><br>
                                        <input type="radio" id="form-h-r1" name="radio"> <label for="form-h-r1">1</label>
                                        <label><input type="radio" name="radio"> 2</label>
                                        <label><input type="radio" name="radio"> 3</label>
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <span class="uk-form-label">Checkbox input</span>
                                    <div class="uk-form-controls uk-form-controls-text">
                                        <input type="checkbox" id="form-h-c"> <label for="form-h-c">Checkbox input</label><br>
                                        <input type="checkbox" id="form-h-c1"> <label for="form-h-c1">1</label>
                                        <label><input type="checkbox"> 2</label>
                                        <label><input type="checkbox"> 3</label>
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <span class="uk-form-label">Mixed controls</span>
                                    <div class="uk-form-controls uk-form-controls-text">
                                        <input type="checkbox" id="form-h-mix4"> <label for="form-h-mix4">Checkbox input</label>
                                        <input type="number" id="form-h-mix5" min="0" max="10" value="5" class="uk-form-width-mini uk-form-small"> <label for="form-h-mix5">Number input</label>
                                        <select id="form-h-mix6" class="uk-form-small">
                                            <option selected="selected">Option 01</option>
                                            <option>Option 02</option>
                                        </select>
                                        <label for="form-h-mix6">Select field</label>
                                    </div>
                                </div>

                            </form>

                            <form class="uk-form uk-form-stacked">
                                <div class="uk-form-row">
                                    <span class="uk-form-label">Mixed controls</span>
                                    <div class="uk-form-controls uk-form-controls-text">
                                        <p class="uk-form-controls-condensed">
                                            <input type="checkbox" id="form-h-mix1"> <label for="form-h-mix1">Checkbox input</label>
                                            <input type="number" id="form-h-mix2" min="0" max="10" value="5" class="uk-form-width-mini uk-form-small"> <label for="form-h-mix2">Number input</label>
                                            <select id="form-h-mix3" class="uk-form-small">
                                                <option selected="selected">Option 01</option>
                                                <option>Option 02</option>
                                            </select>
                                            <label for="form-h-mix3">Select field</label>
                                        </p>
                                        <p class="uk-form-controls-condensed">
                                            <label><input type="checkbox"> Checkbox input</label>
                                            <label><input type="number" min="0" max="10" value="5" class="uk-form-width-mini uk-form-small"> Number input</label>
                                            <label>
                                                <select class="uk-form-small">
                                                    <option selected="selected">Option 01</option>
                                                    <option>Option 02</option>
                                                </select>
                                                Select field
                                            </label>
                                        </p>
                                    </div>
                                </div>

                        </form>

<pre><code>&lt;div class="uk-form-controls uk-form-controls-text"&gt;
    &lt;p class="uk-form-controls-condensed"&gt;...&lt;/p&gt;
    &lt;p class="uk-form-controls-condensed"&gt;...&lt;/p&gt;
&lt;/div&gt;</code></pre>


                            <form class="uk-form">

                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <input type="text" placeholder="100" class="uk-width-1-1">
                                    </div>
                                </div>

                                <div class="uk-grid">
                                    <div class="uk-width-1-2"><input type="text" placeholder="50" class="uk-width-1-1"></div>
                                    <div class="uk-width-1-4"><input type="text" placeholder="25" class="uk-width-1-1"></div>
                                    <div class="uk-width-1-4"><input type="text" placeholder="25" class="uk-width-1-1"></div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-2">
                                        <div class="uk-form-controls">
                                            <input type="text" placeholder="50" class="uk-width-1-1">
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-2">
                                        <div class="uk-form-controls">
                                            <input type="text" placeholder="50" class="uk-width-1-1">
                                        </div>
                                    </div>
                                </div>

                            </form>


<pre><code>&lt;form class="uk-form"&gt;

    &lt;div class="uk-grid"&gt;
        &lt;div class="uk-width-1-2"&gt;&lt;input type="text" placeholder="" class="uk-width-1-1"&gt;&lt;/div&gt;
        &lt;div class="uk-width-1-4"&gt;&lt;input type="text" placeholder="" class="uk-width-1-1"&gt;&lt;/div&gt;
        &lt;div class="uk-width-1-4"&gt;&lt;input type="text" placeholder="" class="uk-width-1-1"&gt;&lt;/div&gt;
    &lt;/div&gt;

&lt;/form&gt;</code></pre>

                    
                            <form class="uk-form" data-uk-margin>

                                <div class="uk-form-icon">
                                    <i class="uk-icon-calendar"></i>
                                    <input type="text">
                                </div>
                                <div class="uk-form-icon">
                                    <i class="uk-icon-clock-o"></i>
                                    <input type="text">
                                </div>

                            </form>
                            
<pre><code>&lt;div class="uk-form-icon"&gt;
    &lt;i class="uk-icon-calendar"&gt;&lt;/i&gt;
    &lt;input type="text"&gt;
&lt;/div&gt;</code></pre>

                        </article>

                    </div>
                </div>

            </div>
        </div>

        <div class="tm-footer">
            <div class="uk-container uk-container-center uk-text-center">

                <ul class="uk-subnav uk-subnav-line">
                    <li><a href="http://github.com/uikit/uikit">GitHub</a></li>
                    <li><a href="http://github.com/uikit/uikit/issues">Issues</a></li>
                    <li><a href="http://github.com/uikit/uikit/blob/master/CHANGELOG.md">Changelog</a></li>
                    <li><a href="https://twitter.com/getuikit">Twitter</a></li>
                </ul>

                <div class="uk-panel">
                    <p>Made by <a href="http://www.yootheme.com">YOOtheme</a> with love and caffeine.<br>Licensed under <a href="http://opensource.org/licenses/MIT">MIT license</a>.</p>
                    <a href="../index.html"><img src="images/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></a>
                </div>

            </div>
        </div>

        <div id="tm-offcanvas" class="uk-offcanvas">

            <div class="uk-offcanvas-bar">

                <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav="{multiple:true}">
                    <li class="uk-parent"><a href="#">Documentation</a>
                        <ul class="uk-nav-sub">
                            <li><a href="documentation_get-started.html">Get started</a></li>
                            <li><a href="documentation_how-to-customize.html">How to customize</a></li>
                            <li><a href="components.html">Components</a></li>
                            <li><a href="addons.html">Add-ons</a></li>
                            <li><a href="documentation_project-structure.html">Project structure</a></li>
                            <li><a href="documentation_create-a-theme.html">Create a theme</a></li>
                            <li><a href="documentation_create-a-style.html">Create a style</a></li>
                            <li><a href="documentation_customizer-json.html">Customizer.json</a></li>
                        </ul>
                    </li>
                    <li class="uk-nav-header">Components</li>
                    <li class="uk-parent"><a href="#"><i class="uk-icon-wrench"></i> Defaults</a>
                        <ul class="uk-nav-sub">
                            <li><a href="normalize.html">Normalize</a></li>
                            <li><a href="base.html">Base</a></li>
                            <li><a href="print.html">Print</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent"><a href="#"><i class="uk-icon-th-large"></i> Layout</a>
                        <ul class="uk-nav-sub">
                            <li><a href="grid.html">Grid</a></li>
                            <li><a href="panel.html">Panel</a></li>
                            <li><a href="article.html">Article</a></li>
                            <li><a href="comment.html">Comment</a></li>
                            <li><a href="utility.html">Utility</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent"><a href="#"><i class="uk-icon-bars"></i> Navigations</a>
                        <ul class="uk-nav-sub">
                            <li><a href="nav.html">Nav</a></li>
                            <li><a href="navbar.html">Navbar</a></li>
                            <li><a href="subnav.html">Subnav</a></li>
                            <li><a href="breadcrumb.html">Breadcrumb</a></li>
                            <li><a href="pagination.html">Pagination</a></li>
                            <li><a href="tab.html">Tab</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent uk-active"><a href="#"><i class="uk-icon-check"></i> Elements</a>
                        <ul class="uk-nav-sub">
                            <li><a href="list.html">List</a></li>
                            <li><a href="description-list.html">Description list</a></li>
                            <li><a href="table.html">Table</a></li>
                            <li><a href="form.html">Form</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent"><a href="#"><i class="uk-icon-folder-open"></i> Common</a>
                        <ul class="uk-nav-sub">
                            <li><a href="button.html">Button</a></li>
                            <li><a href="icon.html">Icon</a></li>
                            <li><a href="close.html">Close</a></li>
                            <li><a href="badge.html">Badge</a></li>
                            <li><a href="alert.html">Alert</a></li>
                            <li><a href="thumbnail.html">Thumbnail</a></li>
                            <li><a href="overlay.html">Overlay</a></li>
                            <li><a href="progress.html">Progress</a></li>
                            <li><a href="search.html">Search</a></li>
                            <li><a href="text.html">Text</a></li>
                            <li><a href="animation.html">Animation</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent"><a href="#"><i class="uk-icon-magic"></i> JavaScript</a>
                        <ul class="uk-nav-sub">
                            <li><a href="dropdown.html">Dropdown</a></li>
                            <li><a href="modal.html">Modal</a></li>
                            <li><a href="offcanvas.html">Off-canvas</a></li>
                            <li><a href="switcher.html">Switcher</a></li>
                            <li><a href="toggle.html">Toggle</a></li>
                            <li><a href="tooltip.html">Tooltip</a></li>
                            <li><a href="scrollspy.html">Scrollspy</a></li>
                            <li><a href="smooth-scroll.html">Smooth scroll</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent"><a href="#">Add-ons</a>
                        <ul class="uk-nav-sub">
                            <li><a href="addons_markdownarea.html">Markdown area</a></li>
                            <li><a href="addons_sortable.html">Sortable</a></li>
                            <li><a href="addons_datepicker.html">Datepicker</a></li>
                            <li><a href="addons_timepicker.html">Timepicker</a></li>
                            <li><a href="addons_sticky.html">Sticky</a></li>
                            <li><a href="addons_notify.html">Notify</a></li>
                            <li><a href="addons_form-password.html">Form password</a></li>
                            <li><a href="addons_form-file.html">Form file</a></li>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>

    </body>
</html>
