<div id="wrap">
    <div class="container">
           
        <!-- #header -->
        <div id="header" class="six columns clearfix">
            <div class="inner">
    
                <?php if ($logo): ?>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                  </a>
                <?php endif; ?>
                <div class="clear"></div>
                <?php if ($site_name || $site_slogan): ?>
                <div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="element-invisible"'; } ?>>
                
                    <?php if ($site_name): ?>
                    <div id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($site_slogan): ?>
                    <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
                    <?php print $site_slogan; ?>
                    </div>
                    <?php endif; ?>
                
                </div>
                <?php endif; ?>
            </div>
        </div><!-- /#header -->
        
        <!-- #navigation -->
        <div id="navigation" class="ten columns clearfix">
        
            <div class="menu-header">
            <?php if ($page['header']) : ?>
                <?php print drupal_render($page['header']); ?>
                <?php else : ?>
                <?php print theme('links__system_main_menu', array(
                'links' => $main_menu,
                'attributes' => array(
                    'id' => 'main-menu-links',
                    'class' => array('menu', 'clearfix'),
                ),
                'heading' => array(
                    'text' => t('Main menu'),
                    'level' => 'h2',
                    'class' => array('element-invisible'),
                ),
                )); ?>
            <?php endif; ?>
            </div>
            
        </div><!-- /#navigation -->
        
        <div id="content" class="sixteen columns clearfix">
        
            <?php if ($messages): ?>
                <div id="messages">
                  <?php print $messages; ?>
                </div><!-- /#messages -->
            <?php endif; ?>
            
            <div id="main">
            
                <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                
                <?php print render($title_prefix); ?>
                
                <?php if ($title): ?>
                <h1 class="title" id="page-title">
                  <?php print $title; ?>
                </h1>
                <?php endif; ?>
                
                <?php print render($title_suffix); ?>
                
                <?php if ($tabs): ?>
                <div class="tabs">
                  <?php print render($tabs); ?>
                </div>
                <?php endif; ?>
                
                <?php print render($page['help']); ?>
                
                <?php if ($action_links): ?>
                <ul class="action-links">
                  <?php print render($action_links); ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
                <div id="frontpage_1">
	                <div class="container">
                    <a id="frontpage1"></a>
                    <?php print render($page['frontpage1']); ?>
                    </div>
                </div>
                <div id="frontpage_2">
                	<div class="container">
                    <a id="frontpage2"></a>
                    <?php print render($page['frontpage2']); ?>
                    </div>
                </div>
                <div id="frontpage_3">
                	<div class="container">
                    <a id="frontpage3"></a>
                    <?php print render($page['frontpage3']); ?>
                    </div>
                </div>
                <div id="frontpage_4">
                    <div class="container">
                    <a id="frontpage4"></a>
                    <?php print render($page['frontpage4']); ?>
                    </div>
                </div>
                
            </div>
        
        </div><!-- /#content -->
                
        <div class="clear"></div>
        
        <div class="container">
        <div id="footer" class="sixteen columns clearfix">
        
            <div class="one_third">
            <?php if ($page['footer_first']): ?><?php print render($page['footer_first']); ?><?php endif; ?>
            </div>
            
            <div class="one_third">
            <?php if ($page['footer_second']): ?><?php print render($page['footer_second']); ?><?php endif; ?>
            </div>
            
            <div class="one_third last">
            <?php if ($page['footer_third']): ?><?php print render($page['footer_third']); ?><?php endif; ?>
            </div>
    
            <div class="clear"></div>
            
            <?php if ($page['footer']): print render($page['footer']); endif; ?>
            
            <div class="clear"></div>
            
            <div id="credits">2012 <?php print $site_name; ?></div>
        </div>

</div> <!-- /#wrap -->