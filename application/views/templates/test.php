


<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Static pages &mdash; CodeIgniter 3.0.0-dev documentation</title>
  

  
  
    <link rel="shortcut icon" href="../_static/ci-icon.ico"/>
  

  
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

  
  
    

  

  
  
    <link rel="stylesheet" href="../_static/css/theme.css" type="text/css" />
  

  
    <link rel="top" title="CodeIgniter 3.0.0-dev documentation" href="../index.html"/>
        <link rel="up" title="Tutorial" href="index.html"/>
        <link rel="next" title="News section" href="news_section.html"/>
        <link rel="prev" title="Tutorial" href="index.html"/> 

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

</head>

<body class="wy-body-for-nav" role="document">

  <div class="wy-grid-for-nav">

    
    <nav data-toggle="wy-nav-shift" class="wy-nav-side">
      <div class="wy-side-nav-search">
        
          <a href="../index.html" class="fa fa-home"> CodeIgniter</a>
        
        
<div role="search">
  <form id="rtd-search-form" class="wy-form" action="../search.html" method="get">
    <input type="text" name="q" placeholder="Search docs" />
    <input type="hidden" name="check_keywords" value="yes" />
    <input type="hidden" name="area" value="default" />
  </form>
</div>
      </div>

      <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">
        
          
          
              <ul>
<li class="toctree-l1"><a class="reference internal" href="../general/welcome.html">Welcome to CodeIgniter</a><ul class="simple">
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../installation/index.html">Installation Instructions</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../installation/downloads.html">Downloading CodeIgniter</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/index.html">Installation Instructions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/upgrading.html">Upgrading From a Previous Version</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/troubleshooting.html">Troubleshooting</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../overview/index.html">CodeIgniter Overview</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../overview/getting_started.html">Getting Started</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/at_a_glance.html">CodeIgniter at a Glance</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/features.html">Supported Features</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/appflow.html">Application Flow Chart</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/mvc.html">Model-View-Controller</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/goals.html">Architectural Goals</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1 current"><a class="reference internal" href="index.html">Tutorial</a><ul class="current">
<li class="toctree-l2 current"><a class="current reference internal" href="">Static pages</a></li>
<li class="toctree-l2"><a class="reference internal" href="news_section.html">News section</a></li>
<li class="toctree-l2"><a class="reference internal" href="create_news_items.html">Create news items</a></li>
<li class="toctree-l2"><a class="reference internal" href="conclusion.html">Conclusion</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../general/index.html">General Topics</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../general/urls.html">CodeIgniter URLs</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/controllers.html">Controllers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/reserved_names.html">Reserved Names</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/views.html">Views</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/models.html">Models</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/helpers.html">Helpers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/libraries.html">Using CodeIgniter Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/creating_libraries.html">Creating Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/drivers.html">Using CodeIgniter Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/creating_drivers.html">Creating Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/core_classes.html">Creating Core System Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/ancillary_classes.html">Creating Ancillary Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/hooks.html">Hooks - Extending the Framework Core</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/autoloader.html">Auto-loading Resources</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/common_functions.html">Common Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/compatibility_functions.html">Compatibility Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/routing.html">URI Routing</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/errors.html">Error Handling</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/caching.html">Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/profiling.html">Profiling Your Application</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/cli.html">Running via the CLI</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/managing_apps.html">Managing your Applications</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/environments.html">Handling Multiple Environments</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/alternative_php.html">Alternate PHP Syntax for View Files</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/security.html">Security</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/styleguide.html">PHP Style Guide</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../libraries/index.html">Libraries</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../libraries/benchmark.html">Benchmarking Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/caching.html">Caching Driver</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/calendar.html">Calendaring Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/cart.html">Shopping Cart Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/config.html">Config Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/email.html">Email Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/encrypt.html">Encrypt Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/encryption.html">Encryption Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/file_uploading.html">File Uploading Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/form_validation.html">Form Validation</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/ftp.html">FTP Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/image_lib.html">Image Manipulation Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/input.html">Input Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/javascript.html">Javascript Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/language.html">Language Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/loader.html">Loader Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/migration.html">Migrations Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/output.html">Output Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/pagination.html">Pagination Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/parser.html">Template Parser Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/security.html">Security Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/sessions.html">Session Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/table.html">HTML Table Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/trackback.html">Trackback Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/typography.html">Typography Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/unit_testing.html">Unit Testing Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/uri.html">URI Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/user_agent.html">User Agent Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/xmlrpc.html">XML-RPC and XML-RPC Server Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/zip.html">Zip Encoding Class</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../database/index.html">Database Reference</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../database/examples.html">Quick Start: Usage Examples</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/configuration.html">Database Configuration</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/connecting.html">Connecting to a Database</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/queries.html">Running Queries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/results.html">Generating Query Results</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/helpers.html">Query Helper Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/query_builder.html">Query Builder Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/transactions.html">Transactions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/metadata.html">Getting MetaData</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/call_function.html">Custom Function Calls</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/caching.html">Query Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/forge.html">Database Manipulation with Database Forge</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/utilities.html">Database Utilities Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/db_driver_reference.html">Database Driver Reference</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../helpers/index.html">Helpers</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../helpers/array_helper.html">Array Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/captcha_helper.html">CAPTCHA Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/cookie_helper.html">Cookie Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/date_helper.html">Date Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/directory_helper.html">Directory Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/download_helper.html">Download Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/email_helper.html">Email Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/file_helper.html">File Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/form_helper.html">Form Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/html_helper.html">HTML Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/inflector_helper.html">Inflector Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/language_helper.html">Language Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/number_helper.html">Number Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/path_helper.html">Path Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/security_helper.html">Security Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/smiley_helper.html">Smiley Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/string_helper.html">String Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/text_helper.html">Text Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/typography_helper.html">Typography Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/url_helper.html">URL Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/xml_helper.html">XML Helper</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../contributing/index.html">Contributing to CodeIgniter</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../documentation/index.html">Writing CodeIgniter Documentation</a></li>
<li class="toctree-l2"><a class="reference internal" href="../DCO.html">Developer&#8217;s Certificate of Origin 1.1</a></li>
</ul>
</li>
</ul>

          
        
      </div>
      &nbsp;
    </nav>

    <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">

      
      <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
        <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
        <a href="../index.html">CodeIgniter</a>
      </nav>


      
      <div class="wy-nav-content">
        <div class="rst-content">
          <div role="navigation" aria-label="breadcrumbs navigation">
  <ul class="wy-breadcrumbs">
    <li><a href="../index.html">Docs</a> &raquo;</li>
      
          <li><a href="index.html">Tutorial</a> &raquo;</li>
      
    <li>Static pages</li>
      <li class="wy-breadcrumbs-aside">
        
      </li>
  </ul>
  <hr/>
</div>
          <div role="main" class="document">
            
  <div class="section" id="static-pages">
<h1>Static pages<a class="headerlink" href="#static-pages" title="Permalink to this headline">¶</a></h1>
<p><strong>Note:</strong> This tutorial assumes you&#8217;ve downloaded CodeIgniter and
<a class="reference internal" href="../installation/index.html"><em>installed the framework</em></a> in your
development environment.</p>
<p>The first thing you&#8217;re going to do is set up a <strong>controller</strong> to handle
static pages. A controller is simply a class that helps delegate work.
It is the glue of your web application.</p>
<p>For example, when a call is made to:</p>
<blockquote>
<div><a class="reference external" href="http://example.com/news/latest/10">http://example.com/news/latest/10</a></div></blockquote>
<p>We might imagine that there is a controller named &#8220;news&#8221;. The method
being called on news would be &#8220;latest&#8221;. The news method&#8217;s job could be to
grab 10 news items, and render them on the page. Very often in MVC,
you&#8217;ll see URL patterns that match:</p>
<blockquote>
<div><a class="reference external" href="http://example.com/[controller-class]/[controller-method]/[arguments">http://example.com/[controller-class]/[controller-method]/[arguments</a>]</div></blockquote>
<p>As URL schemes become more complex, this may change. But for now, this
is all we will need to know.</p>
<p>Create a file at application/controllers/Pages.php with the following
code.</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;?</span><span class="nx">php</span>
<span class="k">class</span> <span class="nc">Pages</span> <span class="k">extends</span> <span class="nx">CI_Controller</span> <span class="p">{</span>

        <span class="k">public</span> <span class="k">function</span> <span class="nf">view</span><span class="p">(</span><span class="nv">$page</span> <span class="o">=</span> <span class="s1">&#39;home&#39;</span><span class="p">)</span>
        <span class="p">{</span>
        <span class="p">}</span>
<span class="p">}</span>
</pre></div>
</div>
<p>You have created a class named &#8220;pages&#8221;, with a view method that accepts
one argument named $page. The pages class is extending the
CI_Controller class. This means that the new pages class can access the
methods and variables defined in the CI_Controller class
(system/core/Controller.php).</p>
<p>The <strong>controller is what will become the center of every request</strong> to
your web application. In very technical CodeIgniter discussions, it may
be referred to as the <em>super object</em>. Like any php class, you refer to
it within your controllers as $this. Referring to $this is how you will
load libraries, views, and generally command the framework.</p>
<p>Now you&#8217;ve created your first method, it&#8217;s time to make some basic page
templates. We will be creating two &#8220;views&#8221; (page templates) that act as
our page footer and header.</p>
<p>Create the header at application/views/templates/header.php and add the
following code.</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="o">&lt;</span><span class="nx">html</span><span class="o">&gt;</span>
        <span class="o">&lt;</span><span class="nx">head</span><span class="o">&gt;</span>
                <span class="o">&lt;</span><span class="nx">title</span><span class="o">&gt;</span><span class="nx">CodeIgniter</span> <span class="nx">Tutorial</span><span class="o">&lt;/</span><span class="nx">title</span><span class="o">&gt;</span>
        <span class="o">&lt;/</span><span class="nx">head</span><span class="o">&gt;</span>
        <span class="o">&lt;</span><span class="nx">body</span><span class="o">&gt;</span>

                <span class="o">&lt;</span><span class="nx">h1</span><span class="o">&gt;&lt;?</span><span class="nx">php</span> <span class="k">echo</span> <span class="nv">$title</span> <span class="cp">?&gt;</span><span class="nt">&lt;/h1&gt;</span>
</pre></div>
</div>
<p>The header contains the basic HTML code that you&#8217;ll want to display
before loading the main view, together with a heading. It will also
output the $title variable, which we&#8217;ll define later in the controller.
Now create a footer at application/views/templates/footer.php that
includes the following code:</p>
<div class="highlight-ci"><div class="highlight"><pre>                <span class="o">&lt;</span><span class="nx">em</span><span class="o">&gt;&amp;</span><span class="nb">copy</span><span class="p">;</span> <span class="mi">2014</span><span class="o">&lt;/</span><span class="nx">em</span><span class="o">&gt;</span>
        <span class="o">&lt;/</span><span class="nx">body</span><span class="o">&gt;</span>
<span class="o">&lt;/</span><span class="nx">html</span><span class="o">&gt;</span>
</pre></div>
</div>
<div class="section" id="adding-logic-to-the-controller">
<h2>Adding logic to the controller<a class="headerlink" href="#adding-logic-to-the-controller" title="Permalink to this headline">¶</a></h2>
<p>Earlier you set up a controller with a <tt class="docutils literal"><span class="pre">view()</span></tt> method. The method
accepts one parameter, which is the name of the page to be loaded. The
static page templates will be located in the application/views/pages/
directory.</p>
<p>In that directory, create two files named home.php and about.php. Within
those files, type some text − anything you&#8217;d like − and save them. If
you like to be particularly un-original, try &#8220;Hello World!&#8221;.</p>
<p>In order to load those pages, you&#8217;ll have to check whether the requested
page actually exists:</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="k">public</span> <span class="k">function</span> <span class="nf">view</span><span class="p">(</span><span class="nv">$page</span> <span class="o">=</span> <span class="s1">&#39;home&#39;</span><span class="p">)</span>
<span class="p">{</span>
        <span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">file_exists</span><span class="p">(</span><span class="nx">APPPATH</span><span class="o">.</span><span class="s1">&#39;/views/pages/&#39;</span><span class="o">.</span><span class="nv">$page</span><span class="o">.</span><span class="s1">&#39;.php&#39;</span><span class="p">))</span>
        <span class="p">{</span>
                <span class="c1">// Whoops, we don&#39;t have a page for that!</span>
                <span class="nx">show_404</span><span class="p">();</span>
        <span class="p">}</span>

        <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;title&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nb">ucfirst</span><span class="p">(</span><span class="nv">$page</span><span class="p">);</span> <span class="c1">// Capitalize the first letter</span>

        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">view</span><span class="p">(</span><span class="s1">&#39;templates/header&#39;</span><span class="p">,</span> <span class="nv">$data</span><span class="p">);</span>
        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">view</span><span class="p">(</span><span class="s1">&#39;pages/&#39;</span><span class="o">.</span><span class="nv">$page</span><span class="p">,</span> <span class="nv">$data</span><span class="p">);</span>
        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">view</span><span class="p">(</span><span class="s1">&#39;templates/footer&#39;</span><span class="p">,</span> <span class="nv">$data</span><span class="p">);</span>
<span class="p">}</span>
</pre></div>
</div>
<p>Now, when the page does exist, it is loaded, including the header and
footer, and displayed to the user. If the page doesn&#8217;t exist, a &#8220;404
Page not found&#8221; error is shown.</p>
<p>The first line in this method checks whether the page actually exists.
PHP&#8217;s native <tt class="docutils literal"><span class="pre">file_exists()</span></tt> function is used to check whether the file
is where it&#8217;s expected to be. <tt class="docutils literal"><span class="pre">show_404()</span></tt> is a built-in CodeIgniter
function that renders the default error page.</p>
<p>In the header template, the <tt class="docutils literal"><span class="pre">$title</span></tt> variable was used to customize the
page title. The value of title is defined in this method, but instead of
assigning the value to a variable, it is assigned to the title element
in the $data array.</p>
<p>The last thing that has to be done is loading the views in the order
they should be displayed. The second parameter in the <tt class="docutils literal"><span class="pre">view()</span></tt> method is
used to pass values to the view. Each value in the <tt class="docutils literal"><span class="pre">$data</span></tt> array is
assigned to a variable with the name of its key. So the value of
<tt class="docutils literal"><span class="pre">$data['title']</span></tt> in the controller is equivalent to $title in the view.</p>
</div>
<div class="section" id="routing">
<h2>Routing<a class="headerlink" href="#routing" title="Permalink to this headline">¶</a></h2>
<p>The controller is now functioning! Point your browser to
[your-site-url]index.php/pages/view to see your page. When you visit
index.php/pages/view/about you&#8217;ll see the about page, again including
the header and footer.</p>
<p>Using custom routing rules, you have the power to map any URI to any
controller and method, and break free from the normal convention:
<tt class="docutils literal"><span class="pre">http://example.com/[controller-class]/[controller-method]/[arguments]</span></tt></p>
<p>Let&#8217;s do that. Open the routing file located at
application/config/routes.php and add the following two lines. Remove
all other code that sets any element in the $route array.</p>
<div class="highlight-ci"><div class="highlight"><pre><span class="nv">$route</span><span class="p">[</span><span class="s1">&#39;default_controller&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;pages/view&#39;</span><span class="p">;</span>
<span class="nv">$route</span><span class="p">[</span><span class="s1">&#39;(:any)&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;pages/view/$1&#39;</span><span class="p">;</span>
</pre></div>
</div>
<p>CodeIgniter reads its routing rules from top to bottom and routes the
request to the first matching rule. Each rule is a regular expression
(left-side) mapped to a controller and method name separated by slashes
(right-side). When a request comes in, CodeIgniter looks for the first
match, and calls the appropriate controller and method, possibly with
arguments.</p>
<p>More information about routing can be found in the URI Routing
<a class="reference internal" href="../general/routing.html"><em>documentation</em></a>.</p>
<p>Here, the second rule in the $routes array matches <strong>any</strong> request using
the wildcard string (:any). and passes the parameter to the <tt class="docutils literal"><span class="pre">view()</span></tt>
method of the pages class.</p>
<p>Now visit index.php/about. Did it get routed correctly to the <tt class="docutils literal"><span class="pre">view()</span></tt>
method in the pages controller? Awesome!</p>
</div>
</div>


          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="news_section.html" class="btn btn-neutral float-right" title="News section">Next <span class="fa fa-arrow-circle-right"></span></a>
      
      
        <a href="index.html" class="btn btn-neutral" title="Tutorial"><span class="fa fa-arrow-circle-left"></span> Previous</a>
      
    </div>
  

  <hr/>

  <div role="contentinfo">
    <p>
        &copy; Copyright 2014 - 2015, British Columbia Institute of Technology.
      Last updated on May 01, 2015.
    </p>
  </div>

  Built with <a href="http://sphinx-doc.org/">Sphinx</a> using a <a href="https://github.com/snide/sphinx_rtd_theme">theme</a> provided by <a href="https://readthedocs.org">Read the Docs</a>.
  
</footer>
        </div>
      </div>

    </section>

  </div>
  


  

    <script type="text/javascript">
        var DOCUMENTATION_OPTIONS = {
            URL_ROOT:'../',
            VERSION:'3.0.0-dev',
            COLLAPSE_INDEX:false,
            FILE_SUFFIX:'.html',
            HAS_SOURCE:  false
        };
    </script>
      <script type="text/javascript" src="../_static/jquery.js"></script>
      <script type="text/javascript" src="../_static/underscore.js"></script>
      <script type="text/javascript" src="../_static/doctools.js"></script>

  

  
  
    <script type="text/javascript" src="../_static/js/theme.js"></script>
  

  
  
  <script type="text/javascript">
      jQuery(function () {
          SphinxRtdTheme.StickyNav.enable();
      });
  </script>
   

</body>
</html>