�zz_<?php exit; ?>a:1:{s:7:"content";s:389258:"a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"


";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:61:"
	
	
	
	




















































";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:16:"WordPress Planet";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:28:"http://planet.wordpress.org/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:2:"en";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:47:"WordPress Planet - http://planet.wordpress.org/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:50:{i:0;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:105:"WPTavern: Gutenberg 9.1 Adds Patterns Category Dropdown and Reverts Block-Based Widgets in the Customizer";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105629";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:255:"https://wptavern.com/gutenberg-9-1-adds-patterns-category-dropdown-and-reverts-block-based-widgets-in-the-customizer?utm_source=rss&utm_medium=rss&utm_campaign=gutenberg-9-1-adds-patterns-category-dropdown-and-reverts-block-based-widgets-in-the-customizer";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5615:"<p class="has-drop-cap">Gutenberg 9.1 was released to the public on Wednesday. The team announced over 200 commits from 77 contributors in its <a href="https://make.wordpress.org/core/2020/10/01/whats-new-in-gutenberg-30-september/">release post</a> yesterday. One of the biggest changes to the interface was the addition of a new dropdown selector for block pattern categories. The team also reverted the block-based widgets section in the customizer and added an image size control to the Media &amp; Text block.</p>



<p>One of the main focuses of this release was improving the block-based widgets editor. The feature was taken out of the experimental stage in Gutenberg 8.9 and continues to improve. The widgets screen now uses the <a href="https://github.com/WordPress/gutenberg/pull/25681">same inserter UI</a> as the post-editing screen. However, users can currently only insert regular blocks. Patterns and reusable blocks are still not included.</p>



<p>Theme authors can now <a href="https://github.com/WordPress/gutenberg/issues/20588">control aspects of the block editor</a> via a custom <code>theme.json</code> file. This is part of the ongoing Global Styles project, which will allow theme authors to configure features for their users.</p>



<p>The development team has also added an <a href="https://github.com/WordPress/gutenberg/pull/25115">explicit box-sizing style rule</a> to the Cover and Group blocks. This is to avoid any potential issues with the new padding/spacing options. Theme authors who rely on the block editor styles should test their themes to make sure this change does not break anything.</p>



<h2>Better Pattern Organization</h2>



<img />New block patterns UI in the inserter.



<p class="has-drop-cap">I have been calling for the return of the tabbed pattern categories since <a href="https://wptavern.com/gutenberg-8-0-merges-block-and-pattern-inserter-adds-inline-formats-and-updates-code-editor">Gutenberg 8.0</a>, which was a regression from previous versions. For 11 versions, users have had to scroll and scroll and scroll through every block pattern just to find the one they wanted. The development team has sought to address this issue by using a <a href="https://github.com/WordPress/gutenberg/pull/24954">category dropdown selector</a>. When selecting a specific category, its patterns will appear.</p>



<p>At first, I was unsure about this method over the old tabbed method. However, after some use, it feels like the right direction.</p>



<p>As more and more theme and plugin authors add block pattern categories to users&rsquo; sites, the dropdown is a more sensible route. Even tabs could become unwieldy over time. The dropdown better organizes the list of categories and makes the UI cleaner. More than anything, I am enjoying the experience and look forward to this eventually landing in WordPress 5.6 later this year.</p>



<h2>Customizer Widgets Reverted</h2>



<img />Reverted widgets panel in the customizer.



<p class="has-drop-cap">On the subject of WordPress 5.6, one of its flagship features has been hitting some roadblocks. Block-based widgets are expected to land in core with the December release, but the team just reverted part of the feature. They had to remove the widgets block editor from the customizer they added just two major releases ago.</p>



<p>It was for the best. The customizer&rsquo;s block-based widgets editor was <a href="https://wptavern.com/gutenberg-8-9-brings-block-based-widgets-out-of-the-experimental-stage">fundamentally broken</a>. It was not ready for primetime and should have remained in the experimental stage until it was somewhat usable.</p>



<p>&ldquo;I will approve this since the current state of the customizer in the Gutenberg plugin is broken, and there is no clear path forward about how to fix that,&rdquo; wrote Andrei Draganescu in the <a href="https://github.com/WordPress/gutenberg/pull/25626">reversion ticket</a>. &ldquo;With this patch, the normal widgets can still be edited in the customizer and the block ones don&rsquo;t break it anymore. This is NOT to mean that we won&rsquo;t proceed with fixing the block editor in the customizer, that is still an ongoing discussion.&rdquo;</p>



<p>The current state of editing widgets via the customizer is at least workable with this change. If end-users add a block via the admin-side widgets editor, it will merely appear as an uneditable, <em>faux</em> widget named &ldquo;Block&rdquo; in the customizer. They will need to edit blocks via the normal widgets screen.</p>



<p>There is no way that WordPress can ship the current solution when 5.6 rolls out. However, we are still two months out. This leaves plenty of time for a fix, but Draganescu&rsquo;s note that &ldquo;there is no clear path forward&rdquo; may make some people a bit uneasy at this stage of development.</p>



<h2>Control Image Size for Media &amp; Text</h2>



<img />Image size dropdown selector for the Media &amp; Text block.



<p class="has-drop-cap">One of the bright spots in this update is the addition of an <a href="https://github.com/WordPress/gutenberg/pull/24795">image size control</a> to the Media &amp; Text block. Like the normal Image block, end-users can choose from any registered image size created for their uploaded image.</p>



<p>This is a feature I have been looking forward to in particular. Previously, using the full-sized image often made the page weight a bit heftier than necessary. It is also nice to go along with themes that register sizes for both landscape and portrait orientations, giving users more options.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 02 Oct 2020 20:56:14 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:58:"WordPress.org blog: The Month in WordPress: September 2020";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=9026";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:73:"https://wordpress.org/news/2020/10/the-month-in-wordpress-september-2020/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:8711:"<p>This month was characterized by some exciting announcements from the WordPress core team! Read on to catch up with all the WordPress news and updates from September.&nbsp;</p>



<hr class="wp-block-separator" />



<h2>WordPress 5.5.1 Launch</h2>



<p>On September 1, the&nbsp; Core team released <a href="https://wordpress.org/news/2020/09/wordpress-5-5-1-maintenance-release/">WordPress 5.5.1</a>. This maintenance release included several bug fixes for both core and the editor, and many other enhancements. You can update to the latest version directly from your WordPress dashboard or <a href="https://wordpress.org/download/">download</a> it directly from WordPress.org. The next major release will be <a href="https://make.wordpress.org/core/5-6/">version 5.6</a>.</p>



<p>Want to be involved in the next release?&nbsp; You can help to build WordPress Core by following<a href="https://make.wordpress.org/core/"> the Core team blog</a>, and joining the #core channel in <a href="https://make.wordpress.org/chat/">the Making WordPress Slack group</a>.</p>



<h2>Gutenberg 9.1, 9.0, and 8.9 are out</h2>



<p>The core team launched <a href="https://make.wordpress.org/core/2020/09/16/whats-new-in-gutenberg-16-september/">version 9.0</a> of the Gutenberg plugin on September 16, and <a href="https://make.wordpress.org/core/2020/10/01/whats-new-in-gutenberg-30-september/">version 9.1</a> on September 30. <a href="https://make.wordpress.org/core/2020/09/16/whats-new-in-gutenberg-16-september/">Version 9.0</a> features some useful enhancements — like a new look for the navigation screen (with drag and drop support in the list view) and modifications to the query block (including search, filtering by author, and support for tags). <a href="https://make.wordpress.org/core/2020/10/01/whats-new-in-gutenberg-30-september/">Version 9.1</a> adds improvements to global styles, along with improvements for the UI and several blocks. <a href="https://make.wordpress.org/core/2020/09/03/whats-new-in-gutenberg-2-september/">Version 8.9</a> of Gutenberg, which came out earlier in September, enables the block-based widgets feature (also known as block areas, and was previously available in the experiments section) by default — replacing the default WordPress widgets to the plugin. You can find out more about the Gutenberg roadmap in the <a href="https://make.wordpress.org/core/2020/09/03/whats-next-in-gutenberg-september/">What’s next in Gutenberg blog post</a>.</p>



<p>Want to get involved in building Gutenberg? Follow <a href="https://make.wordpress.org/core/">the Core team blog</a>, contribute to <a href="https://github.com/WordPress/gutenberg/">Gutenberg on GitHub</a>, and join the #core-editor channel in <a href="https://make.wordpress.org/chat/">the Making WordPress Slack group</a>.</p>



<h2>Twenty Twenty One is the WordPress 5.6 default theme</h2>



<p><a href="https://make.wordpress.org/core/2020/09/23/introducing-twenty-twenty-one/">Twenty Twenty One</a>, the brand new default theme for <a href="https://make.wordpress.org/core/5-6/">WordPress 5.6</a>, has been announced! Twenty Twenty One is designed to be a blank canvas for the block editor, and will adopt a straightforward, yet refined, design. The theme has a limited color palette: a pastel green background color, two shades of dark grey for text, and a native set of system fonts. Twenty Twenty One will use a modified version of the <a href="https://wordpress.org/themes/seedlet/">Seedlet theme</a> as its base. It will have a comprehensive system of nested CSS variables to make child theming easier, a native support for global styles, and full site editing.&nbsp;</p>



<p>Follow the <a href="https://make.wordpress.org/core/">Make/Core</a> blog if you wish to contribute to Twenty Twenty One. There will be weekly meetings every Monday at 15:00 UTC and triage sessions every Friday at 15:00 UTC in the #core-themes Slack channel. Theme development will happen <a href="https://github.com/wordpress/twentytwentyone.">on GitHub</a>. </p>



<hr class="wp-block-separator" />



<h2>Further Reading:</h2>



<ul><li>WordPress plugin authors can now <a href="https://meta.trac.wordpress.org/changeset/10255">opt into confirming plugin updates via email</a>. This feature will allow plugin authors to approve any plugin updates over email before release.</li><li>September was the busiest month for online WordCamps so far, with seven events taking place: <a href="https://ogijima.wordcamp.org/2020/">WordCamp Ogijima Online</a>, <a href="https://colombia.wordcamp.org/2020/">WordCamp Colombia Online</a>, <a href="https://2020.asheville.wordcamp.org/2020/">WordCamp Asheville, NC USA</a>, <a href="https://saopaulo.wordcamp.org/2020/">WordCamp São Paulo, Brazil</a>, <a href="https://2020.virginiabeach.wordcamp.org/">WordCamp Virginia Beach</a>, <a href="https://2020.lima.wordcamp.org/">WordCamp Lima Peru</a>, and <a href="https://philadelphia.wordcamp.org/2020/">WordCamp Philadelphia, PA, USA</a>. You can find live stream recaps of these events on their websites. The camps are also in the process of uploading their videos to <a href="https://wordpress.tv/">WordPress.tv</a>. Check out the <a href="https://central.wordcamp.org/schedule/">WordCamp Schedule</a> to follow upcoming online WordCamps!</li><li>The Themes team has added a <a href="https://meta.trac.wordpress.org/changeset/10240">delist feature</a> to the themes directory. The feature will allow a theme to be temporarily hidden from search, while still making it available. The team may delist themes if they violate the <a href="https://make.wordpress.org/themes/handbook/review/required/">Theme Directory guidelines</a>. </li><li>The Themes Team has also released its <a href="https://make.wordpress.org/themes/2020/09/25/new-package-to-allow-locally-hosting-webfonts/">new web fonts Loader project</a>. The webfonts loader will allow theme developers to load web fonts from the user’s site, rather than through a third-party CDN. The project lives in the team’s <a href="https://github.com/WPTT/webfont-loader">GitHub repository</a>.</li><li>The Support team is discussing<a href="https://make.wordpress.org/support/2020/09/talking-point-allowing-self-archival-of-topics/"> the level of control users should have</a> over their support forum topics. The team is thinking of allowing users to archive their topics and lengthen time-to-edit to remove any semi-sensitive data. In a separate, but related, post, Support team members have started discussing <a href="https://make.wordpress.org/support/2020/09/talking-point-handling-support-for-commercial-users-on-the-wordpress-forums/">how to curb support requests for commercial products</a>.</li><li>The Mobile team <a href="https://make.wordpress.org/core/2020/09/21/proposal-dual-licensing-gutenberg-under-gpl-v2-0-and-mpl-v2-0/">came up with a proposal for dual licensing Gutenberg</a> under GPL 2.0 and MPL (Mozilla Public License) 2.0, so that non-WordPress software developers can potentially use it for their projects.  </li><li>Since Facebook and Instagram are deprecating oEmbeds, the Core Team <a href="https://make.wordpress.org/core/2020/09/22/facebook-and-instagram-embeds-to-be-deprecated-october-24th/">will be removing Facebook and Instagram’s oEmbed endpoints</a> from WordPress core code. </li><li>Following extensive discussion, the Documentation team <a href="https://make.wordpress.org/docs/2020/09/14/external-linking-policy-meeting-notes-august-25th/">has tentatively decided to allow external and commercial links in the WordPress documentation</a>. The team aims to publish a formal proposal that will be left open for feedback before finalizing it.</li><li>Members of the Polyglots and Marketing teams are celebrating the <a href="https://make.wordpress.org/polyglots/2020/09/09/lets-celebrate-international-translation-day-together/">International Translation Day</a> for WordPress over the week of September 28 &#8211; October 4! Community members can join or organize translation events, or contribute to WordPress core, theme, or plugin translations during this period. </li><li><a href="https://wpaccessibilityday.org/">WP Accessibility day</a> — a 24-hour global online event dedicated to addressing website accessibility in WordPress, is being held on October 2. The event is open for all and has <a href="https://wpaccessibilityday.org/#talk-time">experts from all over the world as speakers</a>.</li></ul>



<p><em>Have a story that we should include in the next “Month in WordPress” post? Please </em><a href="https://make.wordpress.org/community/month-in-wordpress-submissions/"><em>submit it here</em></a><em>.</em></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 02 Oct 2020 09:34:04 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Hari Shanker R";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:75:"WPTavern: Cloudflare Launches New Web Analytics Product Focusing on Privacy";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105446";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:195:"https://wptavern.com/cloudflare-launches-new-web-analytics-product-focusing-on-privacy?utm_source=rss&utm_medium=rss&utm_campaign=cloudflare-launches-new-web-analytics-product-focusing-on-privacy";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2448:"<p>In pursuit of &ldquo;<a href="https://www.cloudflare.com/web-analytics/">democratizing web analytics</a>,&rdquo; Cloudflare announced it is launching privacy-first analytics as a new standalone product. The company is entering a market that has been <a href="https://www.datanyze.com/market-share/web-analytics--1/Alexa%20top%201M">dominated by Google Analytics</a> for years but with a major differentiating feature &ndash; it will not track individual users by a cookie or IP address to show unique visits.</p>



<p>Cloudflare Web Analytics defines a visit as &ldquo;a successful page view that has an&nbsp;<a rel="noreferrer noopener" href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Referer" target="_blank">HTTP referer</a>&nbsp;that doesn&rsquo;t match the hostname of the request.&rdquo; It&rsquo;s not the same as Google&rsquo;s &ldquo;unique&rdquo; metric, and Cloudflare says it may differ from other reporting tools. Weeding out bots from the total traffic numbers is a nascent feature that Cloudflare is improving as part of its&nbsp;<a rel="noreferrer noopener" href="https://www.cloudflare.com/products/bot-management/" target="_blank">Bot Management product</a>.</p>



<div class="wp-block-image"><img /></div>



<p>Cloudflare Web Analytics is launching with features that are largely similar to Google Analytics but with some unique ways of zooming into different traffic segments and time ranges to see where traffic is originating from. </p>



<p>&ldquo;The most popular analytics services available were built to help ad-supported sites sell more ads,&rdquo; Cloudflare product manager Jon Levine said. &ldquo;But, a lot of websites don&rsquo;t have ads. So if you use those services, you&rsquo;re giving up the privacy of your users in order to understand how what you&rsquo;ve put online is performing.</p>



<p>&ldquo;Cloudflare&rsquo;s business has never been built around tracking users or selling advertising. We don&rsquo;t want to know what you do on the Internet &mdash; it&rsquo;s not our business.&rdquo;</p>



<p>Paying customers on the Pro, Biz, and Enterprise plans can access their analytics from their dashboards immediately. Cloudflare is also offering the product for free as JavaScript-based analytics for users who are not currently customers. Those who want access to the free plan can sign up for the <a href="https://www.cloudflare.com/web-analytics/">waitlist</a>. </p>



<p> </p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 02 Oct 2020 04:03:01 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:67:"WPTavern: Virtual WordPress Page Builder Summit Kicks Off October 5";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105570";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:179:"https://wptavern.com/virtual-wordpress-page-builder-summit-kicks-off-october-5?utm_source=rss&utm_medium=rss&utm_campaign=virtual-wordpress-page-builder-summit-kicks-off-october-5";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6348:"<p class="has-drop-cap">From October 5 through October 9, the first <a href="https://summit.camp/">Page Builder Summit</a> will open its virtual doors to all attendees for free. Nathan Wrigley, the podcaster behind WP Builds, and Anchen le Roux, the founder and lead developer of Simply Digital Design, are hosting the five-day online event that focuses on the vast ecosystem of page builders for WordPress.</p>



<p>The summit will include 35 sessions spread out over the <a href="https://summit.camp/schedule/">event schedule</a>. Each session will last around 30 minutes, so it will be easy to pop in and watch one in your downtime. Sessions will cover a range of builders, including the default WordPress block editor, Elementor, Beaver Builder, Oxygen, Brizy, and Divi.</p>



<p>&ldquo;It&rsquo;s an event specifically for users of WordPress page builders, or those curious about what they can do,&rdquo; said Wrigley. &ldquo;I feel like a page builder style interface for creating websites is the future for our industry. WordPress itself is moving in this direction with the block editor (a.k.a. Gutenberg). With that in mind, it seemed like a good idea to create a dedicated event to share knowledge about this side of WordPress. We&rsquo;ve tried to include presentations from as many page builders as we could.&rdquo;</p>



<p>Wrigley made sure to point out that it is not all geared toward developers, discussing the inner-workings of builders. Some of the sessions focus on marketing, optimization, and conversion, which provides a wider range of topics for potential attendees.</p>



<p>The summit hosts created an <a href="https://summit.camp/page-builder-quiz/">online quiz</a> for those who are unsure about which sessions to watch.</p>



<p>There is a small catch. The sessions will be freely available only from the time they begin and the following 24 hours. After that, accessing the videos will come at a premium. Attendees can gain lifetime access to the PowerPack for $47 if they purchase within 15 minutes of signing up. Then, prices will rise to $97 until the event kicks off on October 5. Beyond, the price jumps to $147. The lifetime access includes access to the presentations, transcripts, a workbook, and other bonuses from the speakers.</p>



<p>For those unsure about forking over the cash, they can still watch the sessions during the 24-hour window.</p>



<p>The proceeds from the event will go out to paying affiliate commissions to speakers and partners. Some of it will go into planning and investing in a second summit down the road.</p>



<p>&ldquo;Both myself and Nathan have specific charities that we want to donate to after the event,&rdquo; said le Roux. &ldquo;It was part of our goals to be able to do this, but we didn&rsquo;t want to make this an <em>official contribution</em>.&rdquo;</p>



<h2>Why a Page Builder Summit?</h2>



<p class="has-drop-cap">Both Wrigley and le Roux have their preferred builders. But, the goal of the summit is to offer a wide look at the tools available and help freelancers and agencies better streamline their businesses and create happier clients.</p>



<p>&ldquo;I&rsquo;ve been a user of page builders for many years, but only at the point where they truly showed in the editing interface something that almost perfectly reflected what the end-user would see did I get really immersed,&rdquo; said Wrigley. &ldquo;Having come from a background in which I built entire websites from a collection of text files (HTML, CSS, PHP, etc.), I was fascinated that we&rsquo;d reached a point where the learning curve for building a good website was significantly reduced.&rdquo;</p>



<p>He pointed out that it is not always so simple though. While the same level of coding skills may not be necessary, people must figure out how to navigate their preferred page builder, which can come with its own learning curve.</p>



<p>&ldquo;You need to learn their way of doing things and how to achieve your design choices,&rdquo; he said. &ldquo;It&rsquo;s always going to work out better if you know the code, but the WordPress mission of democratizing publishing certainly seems to align quite nicely with the adoption of tools, like page builders, which mean that once-difficult tasks are now easier.&rdquo;</p>



<p>For le Roux, her interest in hosting the Page Builder Summit falls back to her design studio.</p>



<p>&ldquo;As a developer, my main reason for switching to page builders was around streamlining and creating more efficient but quality websites in the shortest amount of time,&rdquo; she said. &ldquo;Especially now that we focus on day rates, creating the best possible website that clients would love fast would not have been possible without page builders.&rdquo;</p>



<h2>The Hosts&rsquo; Go-To Builders</h2>



<p>&ldquo;We prefer using Beaver Builder with Themer at Simply Digital Design,&rdquo; said le Roux. &ldquo;We use Gutenberg for blog posts or where possible with custom post types or LMS software. However, we&rsquo;ve also taken on a few Elementor projects where that&rsquo;s the client&rsquo;s preferred option.&rdquo;</p>



<p>Wrigley uses some of the same tools. His main work is on the WP Builds website where he hosts podcasts.</p>



<p>&ldquo;I have used Beaver Builder&rsquo;s Themer to create templates for specific layouts, but for content creation within those layouts I&rsquo;m using the block editor,&rdquo; said Wrigley. &ldquo;My content is mainly text and the WordPress editor is utterly remarkable in this situation. I kept the classic editor installed for a few months after WordPress 5.0 came about, but I soon realized that this was folly and that the editing interface of Gutenberg is superior. The ability to insert and move text, buttons, etc. is such a joy to work with, and the iterations that have been made in the last two years make it, in my opinion, the best text editing experience on the web.&rdquo;</p>



<p>Wrigley sees a future in which the WordPress block editor takes over much of the work that page builders are currently handling. However, that future is &ldquo;still over the horizon.&rdquo;</p>



<p>&ldquo;I&rsquo;m excited about this future though, and we&rsquo;ve got a few crystal ball-gazing presentations; trying to work out what that future might look like,&rdquo; he said.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 01 Oct 2020 20:31:07 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:99:"WPTavern: Jetpack 9.0 to Introduce New Feature for Publishing WordPress Posts to Twitter as Threads";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105448";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:243:"https://wptavern.com/jetpack-9-0-to-introduce-new-feature-for-publishing-wordpress-posts-to-twitter-as-threads?utm_source=rss&utm_medium=rss&utm_campaign=jetpack-9-0-to-introduce-new-feature-for-publishing-wordpress-posts-to-twitter-as-threads";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3318:"<p>Jetpack 9.0, coming on October 6, will debut a new feature that allows users to <a href="https://github.com/Automattic/jetpack/pull/16699">share blog posts as Twitter threads</a> in multiples tweets. A recent version of Jetpack introduced the ability to import and <a href="https://wptavern.com/jetpack-8-7-adds-new-tweetstorm-unroll-feature-improves-search-customization">unroll tweetstorms for publishing inside a post</a>. The 9.0 release will run it back the other way so the content originates in WordPress, yet still reaps all the same benefits of circulation on Twitter as a thread. </p>



<p>The new Twitter threads feature is being added as part of Jetpack&rsquo;s Publicize module under the Twitter settings.  After linking up a Twitter account, the Jetpack sidebar options for Publicize allow users to publish to Twitter as a link to the blog or a set of threaded tweets. It&rsquo;s not just limited to text content &ndash; the threads feature will also upload and attach any images and videos included in the post. </p>



<img />



<p>When first introduced to the idea of publishing a Twitter thread from WordPress, I wondered if threads might lose their trademark pithy punch, since users aren&rsquo;t forced to keep each segment to the standard length of a tweet. Would each tweet be separated in an odd, unreadable way? The Jetpack team anticipated this, so the thread option adds more information to the block editor to show where the paragraphs will be split into multiple tweets.</p>



<p>&ldquo;Threads are wildly underused on Twitter,&rdquo; Gary Pendergast said in a <a href="https://pento.net/2020/09/29/more-than-280-characters/">post</a> introducing the feature. &ldquo;I think a big part of that is the UI for writing threads: while it&rsquo;s suited to writing a thread as a series of related tweet-sized chunks, it doesn&rsquo;t lend itself to writing, revising, and editing anything more complex.&rdquo; The tool Pendergast has been working on for Jetpack gives users the best of both worlds.</p>



<p>In response to a comment requesting Automattic &ldquo;concentrate on tools to get people off social media,&rdquo; Pendergast said, &ldquo;If we&rsquo;re also able to improve the quality of conversations on social media, I think it&rsquo;d be remiss of us to not do so.&rdquo; He also credits IndieWeb discussions on&nbsp;<a href="https://indieweb.org/tweetstorm">Tweetstorms</a>&nbsp;and&nbsp;<a href="https://indieweb.org/POSSE">POSSE</a> (Publish (on your) Own Site,&nbsp;Syndicate&nbsp;Elsewhere) as inspirations for the feature.</p>



<p>For years, blogging advocates have tried to convince those who post lengthy tweetstorms to switch to a publishing medium that is more suitable to the length of their thoughts. The problem is that Twitter users lose so much of the immediate feedback and momentum that their thoughts would have generated when composed as a tweetstorm.</p>



<p>Instead of lecturing people about how they should really be blogging instead of tweetstorming, Jetpack is taking a fresh approach by enabling full content ownership with effortless social syndication. You can test out the experience for yourself by adding the <a href="https://jetpack.com/download-jetpack-beta/">Jetpack Beta Testers</a> plugin and running the 9.0 RC version on your site.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 01 Oct 2020 02:56:46 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:63:"WPTavern: Ask the Bartender: How To WordPress in a Block World?";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105491";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:167:"https://wptavern.com/ask-the-bartender-how-to-wordpress-in-a-block-world?utm_source=rss&utm_medium=rss&utm_campaign=ask-the-bartender-how-to-wordpress-in-a-block-world";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:9752:"<blockquote class="wp-block-quote"><p>I love your articles. And now, in the middle of the WordPress revolution, I realized I&rsquo;m constantly searching for an answer regarding WP these days.</p><p>So many things are being said, so many previsions of the future, problems, etc., but, right now, I think I, as a designer, just want to understand one thing that seemed answered already but it&rsquo;s never clear:</p><p>Is WordPress a good choice to build a client&rsquo;s template where he just has to insert the info that will show in the frontend where I want to? And he doesn&rsquo;t have to worry about formatting blocks? I love blocks, don&rsquo;t get me wrong, but will normal templating end?</p><p>I just think that having a super CMS, HTML, CSS, and being able to play with a database with ACF is so powerful, that I&rsquo;m wondering if it&rsquo;s lost. After so much reading, I still don&rsquo;t understand if this paradigm is going to disappear.</p><p>Right now, I don&rsquo;t know if it&rsquo;s best to stop making websites as I used to and adopt block patterns instead.</p><cite>Ricardo</cite></blockquote>



<p class="has-drop-cap">WordPress is definitely changing. Over the past two years, we have seen much of it reshaped into something different from the previous decade and more. However, this is not new. WordPress has always been a constantly-changing platform. It just feels far too different this time around, almost foreign to many. The platform had to make a leap. Otherwise, it would have started falling behind.</p>



<p>And, it is a big <em>ask</em> of the existing community to come along with it, to take that leap together.</p>



<p>It can be scary as a developer whose livelihood has depended on things working a certain way or who has built tools and systems around pre-block WordPress. Many freelancers and agencies had their world turned upside down with the launch of the block editor. It is perfectly OK to feel a bit lost.</p>



<p>Now, it is time for a little tough love. It has been two years. As a professional, you need to have a plan in place already. Whether that is an educational plan for yourself or a transitional plan for your clients, you should already be tackling projects that leverage the block editor. If you are at a point where you have not been building with blocks, you are now behind. However, you can still catch up and continue advancing in your WordPress career.</p>



<p>There are so many changes coming down the pipeline that anyone who plans to develop for WordPress will be in continual education mode for years to come.</p>



<p>When building for clients, the biggest thing to remember is that it is not about you. It is about getting something into the hands of your clients that addresses their specific needs. Freelancers and agencies need to often be the Jacks and Jills of all trades. Sometimes, this even means having a backup CMS or two that you can use that are not named WordPress. It helps to be well-rounded enough to jump around when needed, especially if you are not a point in your career where you can demand specific work and pass on jobs that would put food on the table.</p>



<p>It is also easy to look at every job as a nail and WordPress as the hammer. Or, even specific plugins as the tool that will always get the job done. I have seen developers in the past rely on tools like ACF, CMB2, or Meta Box but could not code a custom metadata solution when necessary to save their life.  Sometimes a bigger toolbox is necessary.</p>



<p>Every WordPress developer needs a solid, foundational understanding of the languages that WordPress uses. Gone are the days of skating by on HTML, CSS, and PHP knowledge. You need to learn JavaScript deeply. Matt Mullenweg, the co-founder of WordPress, was not joking around when he <a href="https://wptavern.com/state-of-the-word-2015-javascript-and-api-driven-interfaces-are-the-future-of-wordpress">said this back in 2015</a>. It holds true more and more each day. In another five years, it will tough to be a developer in the WordPress world without knowing JavaScript, at least for backend work.</p>



<p>It also depends on what types of sites you are building. If you are primarily handling front-end design, you will likely be able to get by with a lower skill level. You will just need to know the &ldquo;WordPress way&rdquo; of building themes.</p>



<p>Within the next year, you should be able to build just about any theme design with decent CSS and HTML knowledge along with an understanding of how the block system works. Full-site editing and block-based themes will change how we build the front end of the web. It is going to be a challenging transition at first, especially for those of us who are steeped in traditional theme development, but client sites will often be far easier to build.  I highly recommend the twice-monthly <a href="https://make.wordpress.org/themes/">block-based themes meetings</a> if your focus is on the front end.</p>



<h2>Block Templates</h2>



<p class="has-drop-cap">Based on your question, I am going to make some assumptions. You have a history of essentially building out meta boxes via ACF where the client just pops in their data. Then, you format that data on the front end. You are likely mixing this with custom post types (CPTs). This is a fairly common scenario.</p>



<p>One of the great things about the block system is that you can lock the post editor for individual CPTs. WordPress already has you covered with its <a href="https://developer.wordpress.org/block-editor/developers/block-api/block-templates/">block templates feature</a>, which allows you to define just what a post should look like. You can set up which blocks you want to appear and have the client drop their content in. At the moment, this feature is limited to the post type level. However, it should grow more robust over time, particularly when it works alongside the traditional &ldquo;page templates&rdquo; system.</p>



<p>Block templates are a powerful tool in the ol&rsquo; toolbox that will come in handy when building client sites.</p>



<h2>Block Patterns</h2>



<p class="has-drop-cap">You do not have to stop making websites as you are accustomed to at the moment. However, you should start leveraging new block features as they become available and make sense for a specific project. I am a fanatic when it comes to <a href="https://wptavern.com/block-patterns-will-change-everything">block patterns</a>, so my bias will definitely show.</p>



<p>The biggest thing with block patterns and clients is education. For the uninitiated, you will need to spend some time teaching them how to insert a pattern and how it can be used to their advantage. That is the hurdle you must jump.</p>



<p>For many of the users that I have seen introduced to well-designed patterns, they have fallen in love with the feature. Even many who were reluctant to switch to the block editor became far more comfortable working with it after learning how patterns worked. This is not the case for every user or client, but it has been a good introduction point to the block editor for many.</p>



<p>To answer your question regarding patterns: yes, you should absolutely begin to adopt them.</p>



<h2>ACF Is Evolving</h2>



<p class="has-drop-cap">Because you are accustomed to ACF, you should be aware that the framework is evolving to keep up with the block editor. <a href="https://wptavern.com/advanced-custom-fields-5-8-0-introduces-acf-blocks-a-php-framework-for-creating-gutenberg-blocks">Version 5.8.0</a> introduced a PHP framework for creating custom blocks over a year ago. And, it has been improving ever since. There are even projects like <a href="https://wptavern.com/acf-blocks-provides-assortment-of-blocks-built-from-advanced-custom-fields-pro">ACF Blocks</a>, which will provide even more tools for your arsenal.</p>



<p>It is important to learn from what some of the larger agencies are doing. Read up on how <a href="https://webdevstudios.com/2020/09/08/gutenberg-first/">WebDevStudios is tackling block development</a>. The company also has an open-source <a href="https://github.com/WebDevStudios/wds-acf-blocks">block library</a> for ACF.</p>



<h2>Solving Problems</h2>



<p class="has-drop-cap">Your job as a developer is to be a problem solver. Whatever system you are building with is merely a part of your toolset. You need to be able to solve issues regardless of what tool you are using. At the end of the day, it is just code. If you can learn HTML, you can learn CSS. If you can learn those, you can learn PHP. And, if you can manage PHP, you can certainly pick up JavaScript.</p>



<p>A decade or two from now, you will need to learn something else to stay relevant in your career. Web technology changes. You must change with it. Always consider yourself a student and continue your education. Surround yourself and learn from those who are more advanced than you. Emulate, borrow, and steal good ideas. Use what you have learned to make them great.</p>



<p>There is no answer I can give that will be perfect for every scenario. Each client is unique, and you will need to decide the best direction for each.</p>



<p>However, yes, you should already be on the path to building with a block-first mindset if you plan to continue working with WordPress for the long haul. Immerse yourself in the system. Read, study, and build something any chance you get.</p>



<p class="has-white-color has-blue-700-background-color has-text-color has-background text-white bg-blue-700">This is the first post in the Ask the Bartender series.  Have a question of your own? <a href="https://wptavern.com/contact-me/ask-the-bartender">Shoot it over</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 30 Sep 2020 20:35:25 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:91:"WPTavern: Supercharge the Default WordPress Theme With Twentig, a Toolbox for Twenty Twenty";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105344";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:225:"https://wptavern.com/supercharge-the-default-wordpress-theme-with-twentig-a-toolbox-for-twenty-twenty?utm_source=rss&utm_medium=rss&utm_campaign=supercharge-the-default-wordpress-theme-with-twentig-a-toolbox-for-twenty-twenty";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6455:"<img />Custom page pattern from the Twentig plugin.



<p class="has-drop-cap">I am often on the hunt for those hidden gems when it comes to block-related plugins. I like to see the interesting places that plugin authors venture. That is why it came as a surprise when <a href="https://twitter.com/Gtarafdarr/status/1310240580140556290">someone recommended</a> I check out the <a href="https://wordpress.org/plugins/twentig/">Twentig plugin</a> a few days ago. Somehow, it has flown under my radar for months. And, it has managed to do this while being one of the more interesting plugins for WordPress I have seen in the past year.</p>



<p>Twentig is a plugin that essentially gives superpowers to the default Twenty Twenty theme.  Diane and Yann Collet are the sibling co-founders and brains behind the plugin.</p>



<p>While I have been generally a fan of Twenty Twenty since it was <a href="https://wptavern.com/twenty-twenty-bundled-in-core-beta-features-overview">first bundled in core</a>, it was almost a bit of a letdown in some ways. It was supposed to be the theme that truly showcased what the block editor could do &mdash; and it does a fine job of styling the default blocks &mdash; but there was a lot of potential left on the table. The Twentig plugin turns Twenty Twenty into something worthier of a showcase for the block editor. It is that missing piece, that extra mile in which WordPress should be marching its default themes.</p>



<p>While the new <a href="https://wptavern.com/first-look-at-twenty-twenty-one-wordpresss-upcoming-default-theme">Twenty Twenty-One</a> default theme is just around the corner, Twentig is breathing new life into the past year&rsquo;s theme. The developers behind the plugin are still fixing bugs and bringing new features users.</p>



<p>Of its 34 reviews on WordPress.org, Twentig has earned a solid five-star rating. That is a nice score for a plugin with only 4,000 active installations. As I said, it has flown under the radar a bit, but the users who have found it have obviously discovered something that adds those extra touches to their sites they need.</p>



<h2>What Does Twentig Do?</h2>



<p class="has-drop-cap">It is a toolbox for Twenty Twenty. The headline feature is its block editor features, such as custom patterns and page layouts. It also offers a slew of customizer options that allow end-users to put their own design spin on the default theme. However, my interest is primarily in how it extends the block editor. </p>



<p>Let&rsquo;s get this out of the way up front. Twentig&rsquo;s one downside is that it adds a significant amount of additional CSS on top of the already-heavy Twenty Twenty and block editor styles. I will blame the current lack of a full design system from WordPress on most of this. Styling for the block editor can easily bloat a stylesheet. Adding an extra 100+ kb per page load might be a blocker for some who would like to try the plugin. Users will need to weigh the trade-offs between the additional features and the added page size.</p>



<p>The thing that makes Twentig special is its extensive patterns and pages library, which offers one-click access to hundreds of layouts specifically catered to the Twenty Twenty theme.</p>



<img />Inserting one of the hero patterns.



<p>It took me a few minutes to figure out how to access the patterns &mdash; mainly because I did not read the manual. I expected to find them mixed in with the core patterns inserter. However, the plugin adds a new sidebar panel to the editor, which users can access by clicking the &ldquo;tw&rdquo; icon. After seeing the list of options, I can understand why they probably would not fit into WordPress&rsquo;s limited block and patterns inserter UI.</p>



<p>It would be easier to list what the plugin does not have than to go through each of the custom patterns and pages.</p>



<p>The one thing that truly sets this plugin apart from the dozens of other block-library types of plugins is that there are no hiccups with the design. Almost every similar plugin or tool I have tested has had CSS conflicts with themes because they are trying to be a tool for every user. Twentig specifically targets the Twenty Twenty theme, which means it does not have to worry about whether it looks good with the other thousands of themes out there. It has one job, which is to extend its preferred theme, and it does it with well-designed block output.</p>



<p>The other aspect of this is that it does not introduce new blocks. Every pattern and page layout option uses the core WordPress blocks, which includes everything from hero sections to testimonials to pricing tables to event listings.  And more.</p>



<p>Twentig does not stop adding features to the block editor with custom patterns. The useful and sometimes fun bits are on the individual block level, and I have yet to explore everything. I continue to discover new settings each time I open my editor.</p>



<p>Whether it is custom pullquote styles, a photo image frame, or an inner border tweak to the Cover block (shown below), the plugin adds little extras that push what users can do with their content.</p>



<img />Inner border style for the Cover block.



<p>Each block also gets some basic top and bottom margin options, which comes in handy when laying out a page. At this point, I am simply looking forward to discovering features I have yet to find.</p>



<h2>Areas Themes Should Explore</h2>



<p class="has-drop-cap">One of the things I dislike about many of these features being within the Twentig plugin is that I would like to see them within the Twenty Twenty theme instead. Obviously not every feature belongs in the theme &mdash; some features firmly land in plugin territory. The default WordPress themes should also leave some room for plugin authors to explore. But, shipping some of the more prominent patterns and styles with Twenty Twenty would make a more robust experience for the average end-user looking to get the most out of blocks.</p>



<p>Block patterns were not a core WordPress feature when Twenty Twenty landed. However, for the upcoming Twenty Twenty-One theme, which is expected to bundle some unique patterns, the design team should explore what the Twentig plugin has brought to the current default. That is the direction that theme development should be heading, and theme developers can learn a lot by <s>stealing</s> borrowing from this plugin.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 29 Sep 2020 22:00:42 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:105:"WPTavern: Coming in Jetpack 9.0: Shortcode Embeds Module Updated to Handle Facebook and Instagram oEmbeds";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105381";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:253:"https://wptavern.com/coming-in-jetpack-9-0-shortcode-embeds-module-updated-to-handle-facebook-and-instagram-oembeds?utm_source=rss&utm_medium=rss&utm_campaign=coming-in-jetpack-9-0-shortcode-embeds-module-updated-to-handle-facebook-and-instagram-oembeds";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2938:"<p>Facebook and Instagram are&nbsp;<a href="https://wptavern.com/upcoming-api-change-will-break-facebook-and-instagram-oembed-links-across-the-web-beginning-october-24">dropping unauthenticated oEmbed support</a>&nbsp;on October&nbsp;24. WordPress will be removing both Facebook and Instagram as oEmbed providers in an upcoming release. After evaluating third-party solutions, WordPress VIP is <a href="https://lobby.vip.wordpress.com/2020/09/28/updates-and-recommendations-facebook-and-instagram-changing-oembed-to-require-authentication/">recommending</a> its partners enable Jetpack&rsquo;s <a href="https://jetpack.com/support/shortcode-embeds/">Shortcode Embeds</a> module. Jetpack will be shipping the update in its <a href="https://github.com/Automattic/jetpack/milestone/166">9.0 release</a>, which is anticipated to land prior to the October 24th deadline.</p>



<p>The module is being <a href="https://github.com/Automattic/jetpack/pull/16814">updated</a> to provide a seamless transition for users who might otherwise be negatively impacted by Facebook&rsquo;s upcoming API change. WordPress contributors have run some simulations but are not yet sure what will happen to the display for previously embedded content.</p>



<p>&ldquo;It is possible that they change the contents of the JS file to manipulate cached embeds, perhaps to display a warning that the site is using an old method to embed content or that the request is not properly authenticated,&rdquo; Jonathan Desrosiers commented on the trac <a href="https://core.trac.wordpress.org/ticket/50861#comment:35">ticket</a> for removing the oEmbed providers.</p>



<p>WordPress.com VIP roughly outlined what users can expect if they do not enable a solution to begin authenticating oEmbeds:</p>



<blockquote class="wp-block-quote"><p>By default, WordPress caches oEmbed contents in post metadata. These embeds will continue to display in previously-published content.&nbsp;If you edit older posts in the Block Editor, regardless of whether you update the post by saving changes, the embeds in the post will no longer be cached and will stop displaying.&nbsp;If you view these older posts using the Classic Editor, so long as the post is not re-saved, the embeds will continue to function and display properly. If you update the post content, the embed will cease functioning unless you have a mitigation installed.</p></blockquote>



<p>Although WordPress VIP recommends using the Jetpack module as the best solution, self-hosted WordPress users may want to investigate other options if they are not already using Jetpack. <a href="https://wordpress.org/plugins/oembed-plus/">oEmbed Plus</a> is a free plugin created specifically for solving the problem of WordPress dropping Facebook and Instagram as oEmbed providers but it is more work to set up and configure. It requires users to register as a Facebook developer and create an app to get API credentials.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 29 Sep 2020 21:18:52 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:52:"WPTavern: W3C Selects Craft CMS for Redesign Project";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105265";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:149:"https://wptavern.com/w3c-selects-craft-cms-for-redesign-project?utm_source=rss&utm_medium=rss&utm_campaign=w3c-selects-craft-cms-for-redesign-project";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:9407:"<p>W3C has <a href="https://w3c.studio24.net/docs/cms-selection-report/">selected Craft CMS</a> over Statamic for its redesign project, after <a href="https://wptavern.com/w3c-drops-wordpress-from-consideration-for-redesign-narrows-cms-shortlist-to-statamic-and-craft">dropping WordPress from consideration</a> in an earlier round of elimination: </p>



<blockquote class="wp-block-quote"><p>In the end, our decision mostly came down to available resources. Craft had already committed to reach AA compliance in Craft 4 (it is currently on version 3.5, the release of version 4 is planned for April 2021). They had also arranged for an external agency to provide them with accessibility issues to tackle weekly. In the end, they decided instead to hire an in-house accessibility specialist to perform assessments and assist the development team in adopting accessibility patterns in the long run.</p><cite><a href="https://w3c.studio24.net/docs/cms-selection-report/">W3C CMS Selection Report</a></cite></blockquote>



<p>Last week we published a <a href="https://wptavern.com/w3c-drops-wordpress-from-consideration-for-redesign-narrows-cms-shortlist-to-statamic-and-craft">post</a> urging W3C to revisit Gutenberg for a fair shake against the proprietary CMS&rsquo;s or consider adopting another open source option. During the selection process, Studio 24, the agency contracted for the redesign, cited its extensive experience with WordPress as the reason for not performing any accessibility testing on more recent versions of Gutenberg. </p>



<p>When asked if the  team contacted anyone from WordPress&rsquo; Accessibility Team during the process or put Gutenberg through the same tests as the proprietary CMS&rsquo;s, Studio 24 founder Simon Jones <a href="https://twitter.com/simonrjones/status/1309817109636157440">confirmed</a> they had not. </p>



<p>&ldquo;No, we only reached out to the two shortlisted CMS&rsquo;s&rdquo; Jones said. &ldquo;I&rsquo;m afraid we didn&rsquo;t have time to do more. We did test GB a few months ago based on editing content &ndash; though it wasn&rsquo;t the only factor in our choice. As an agency we do plan to keep reviewing GB in the future.&rdquo; </p>



<p>In response to our concerns regarding licensing, Jones penned an update titled &ldquo;<a href="https://w3c.studio24.net/updates/on-not-choosing-wordpress/">On not choosing WordPress,</a>&rdquo; which further elaborated on the reasons why the agency was not inclined towards using or evaluating the new editor:</p>



<blockquote class="wp-block-quote"><p>From a business perspective I also believe Gutenberg creates a complexity issue that makes it challenging for use by many agencies who create custom websites for clients; where we have a need to create lots of bespoke blocks and page elements for individual client projects.</p><p>The use of React complicates front-end build. We have very talented front-end developers, however, they are not React experts &ndash; nor should they need to be. I believe front-end should be built as standards-compliant HTML/CSS with JavaScript used to enrich functionality where necessary and appropriate.</p><p>As of yet, we have not found a satisfactory (and profitable) way to build custom Gutenberg blocks for commercial projects.&nbsp;</p></blockquote>



<p>The CMS selection report also stated that W3C needs the CMS to be &ldquo;usable by non-sighted users&rdquo; by the launch date, since some members of the staff who contribute to the website are non-sighted. </p>



<p>Since the most recent version of WordPress was not tested in comparison with the proprietary CMS&rsquo;s, it&rsquo;s unclear how much better they handle accessibility. Ultimately, W3C and Studio 24 were more comfortable moving forward with a proprietary vendor that was able to make certain assurances about the future accessibility of its authoring tool, despite having a smaller pool of contributors.</p>



<p>&ldquo;[I&rsquo;m] also deeply curious since the cursory notes on accessibility for both of the reviewed CMSes seem to highlight a ton of issues like &lsquo;Buttons and Checkboxes are built using div elements&rsquo; or most inputs lacking clear focus styles,&rdquo; Gutenberg technical lead Mat&iacute;as Ventura said. &ldquo;An element like the&nbsp;<em>Calendar</em>&nbsp;for choosing a post date seems entirely inoperable with keyboard on Craft, for example, while WordPress&rsquo; has had significant effort and rounds of feedback poured into that element alone to make it fully operable.&rdquo;</p>



<p>WordPress developer Anthony Burchell commented on how using a relatively new proprietary CMS seemed counter to W3C&rsquo;s stated goal to select an option on the basis of longevity. Craft CMS&rsquo;s continued success is contingent upon its business model and the company&rsquo;s ability to remain profitable. </p>



<p>&ldquo;FOSS have the same opportunity of direct access to developers,&rdquo; Burchell <a href="https://twitter.com/antpb/status/1309883204728430593?ref_src=twsrc%5Etfw%7Ctwcamp%5Etweetembed%7Ctwterm%5E1309883204728430593%7Ctwgr%5Eshare_3&ref_url=https%3A%2F%2Fwptavern.com%2Fwp-admin%2Fpost.php%3Fpost%3D105265action%3Dedit">said</a>. &ldquo;I recognize there are many accessibility shortcomings in popular software, but I think it&rsquo;s more constructive to rally behind and contribute, not use a proprietary CMS that boasts beer budget in their guidelines.&rdquo; </p>



<p>On the other side of the issue, accessibility advocates took the W3C&rsquo;s decision as a referendum on Gutenberg&rsquo;s continued struggles to meet WCAG AA standards. WordPress accessibility specialist Amanda Rush <a href="https://www.customerservant.com/w3c-is-prioritizing-accessibility-over-its-open-source-licensing-preferences-why-is-that-a-bad-thing-again/">said</a> it was &ldquo;nice to see the W3C flip tables over this.&rdquo;</p>



<p>&ldquo;Gutenberg is not mature software,&rdquo; accessibility consultant and WordPress contributor Joe Dolson said in a <a href="https://www.joedolson.com/2020/09/the-w3c-drops-wordpress-from-consideration/">post</a> elaborating on his comments at WPCampus 2020 Online. He emphasized the lack of stability in the project that Studio 24 alluded to when documenting the reasons against using WordPress.</p>



<p>&ldquo;It is still undergoing rapid changes, and has grand goals to add a full-site editing experience for WordPress that almost guarantees that it will continue to undergo rapid changes for the next few years,&rdquo; Dolson said. &ldquo;Why would any organization that is investing a large amount into a site that they presumably hope will last another 10 years want to invest in something this uncertain?&rdquo;</p>



<p>Dolson also said the accessibility improvements he referenced regarding the audit were only a small part of the whole picture.  </p>



<p>&ldquo;They only encompass issues that existed in the spring of 2019,&rdquo; he said. &ldquo;Since then, many features have been added and changed, and those features both resolve issues and have created new ones. The accessibility team is constantly playing catch up to try and provide enough support to improve Gutenberg. And even now, while it is more or less accessible, there are critical features that are not yet implemented. There are entirely new interface patterns introduced on a regular basis that break prior accessibility expectations.&rdquo;</p>



<p>WordPress is also being used by millions of people who are constantly reporting issues to fuel the software&rsquo;s continued refinement, which increases the <a href="https://github.com/WordPress/gutenberg/labels/Accessibility%20%28a11y%29">backlog of issues</a>. Unfortunately, Studio 24 did not properly evaluate Gutenberg against the proprietary CMS&rsquo;s in order to determine if these software projects are in any better shape. </p>



<p>Instead, they decided that Craft CMS&rsquo;s community was more receptive to collaborating on issues without reaching out to WordPress. Given the W3C&rsquo;s stated preference for open source software, WordPress, as the only CMS under consideration with an <a href="https://opensource.org/licenses">OSD-compliant license</a>, should have received the same accessibility evaluation.</p>



<p>&ldquo;I can&rsquo;t make any statements that would be meaningful about the other content management systems under consideration; but if WordPress wants to be taken seriously in environments where accessibility is a legal, ethical, and mission imperative, there&rsquo;s still a lot of work to be done,&rdquo; Dolson said.</p>



<p>Studio 24&rsquo;s evaluation may not have been equitable to the only open source CMS under consideration, but the situation serves to highlight a unique quandary: when using open source software becomes the impractical choice for organizations requiring a high level of accessibility in their authoring tools.</p>



<p>&ldquo;Studio 24 ultimately determined that working with a CMS to make it better was more possible with a smaller, proprietary vendor than with a large open-source project,&rdquo; accessibility advocate Brian DeConinck said. &ldquo;Project leadership would be more receptive, and the smaller community means changes can be made more quickly. That should prompt a lot of soul-searching for&hellip;well, everyone. What does that say about the future of open source?&rdquo;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 29 Sep 2020 04:56:21 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:30:"Gary: More than 280 characters";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:25:"https://pento.net/?p=5405";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:54:"https://pento.net/2020/09/29/more-than-280-characters/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5187:"<p>It&#8217;s hard to be nuanced in 280 characters.</p>



<p>The Twitter character limit is a major factor of what can make it so much fun to use: you can read, publish, and interact, in extremely short, digestible chunks. But, it doesn&#8217;t fit every topic, ever time. Sometimes you want to talk about complex topics, having honest, thoughtful discussions. In an environment that encourages hot takes, however, it&#8217;s often easier to just avoid having those discussions. I can&#8217;t blame people for doing that, either: I find myself taking extended breaks from Twitter, as it can easily become overwhelming.</p>



<p>For me, the exception is Twitter threads.</p>



<h2>Twitter threads encourage nuance and creativity.</h2>



<p>Creative masterpieces like this Choose Your Own Adventure are not just possible, they rely on Twitter threads being the way they are.</p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">Being Beyoncé’s assistant for the day: DONT GET FIRED THREAD <a href="https://t.co/26ix05Hkhp">pic.twitter.com/26ix05Hkhp</a></p>&mdash; green chyna (@CORNYASSBITCH) <a href="https://twitter.com/CORNYASSBITCH/status/1142591156884127744?ref_src=twsrc%5Etfw">June 23, 2019</a></blockquote>
</div>



<p>Publishing a short essay about your experiences in your job can bring attention to inequality.</p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">DOWNTOWN BROOKLYN: I'm working arraignments tonight, representing poor New Yorkers who were arrested yesterday on Thanksgiving. <br /><br />It was the coldest Thanksgiving in more than a century. Tonight's also bitterly cold, even in the courtroom. I'm wearing my scarf &amp; coat.</p>&mdash; Rebecca Kavanagh (@DrRJKavanagh) <a href="https://twitter.com/DrRJKavanagh/status/1066144860619636736?ref_src=twsrc%5Etfw">November 24, 2018</a></blockquote>
</div>



<p>And Tumblr screenshot threads are always fun to read, even when they take a turn for the epic (over 4000 tweets in this thread, and it isn&#8217;t slowing down!)</p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">Tumblr textposts thread, probably?</p>&mdash; we are a family forged in bureaucracy (@ex_aItiora) <a href="https://twitter.com/ex_aItiora/status/1165987806621184002?ref_src=twsrc%5Etfw">August 26, 2019</a></blockquote>
</div>



<p>Everyone can think of threads that they&#8217;ve loved reading.</p>



<p>My point is, threads are wildly underused on Twitter. I think I big part of that is the UI for writing threads: while it&#8217;s suited to writing a thread as a series of related tweet-sized chunks, it doesn&#8217;t lend itself to writing, revising, and editing anything more complex.</p>



<p>To help make this easier, I&#8217;ve been working on a tool that will help you publish an entire post to Twitter from your WordPress site, as a thread. It takes care of transforming your post into Twitter-friendly content, you can just&#8230; write. <img src="https://s.w.org/images/core/emoji/13.0.0/72x72/1f642.png" alt="🙂" class="wp-smiley" /></p>



<p>It doesn&#8217;t just handle the tweet embeds from earlier in the thread: it handles handle uploading and attaching any images and videos you&#8217;ve included in your post.</p>



<ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><img width="3264" height="2448" src="https://pento.net/wp-content/uploads/2018/12/mvimg_20181231_0910291833340677198697139.jpg" alt="A selfie of me feeding a giraffe." class="wp-image-3608" /></li><li class="blocks-gallery-item"><img width="4000" height="3000" src="https://pento.net/wp-content/uploads/2018/12/GOPR0365.jpg" alt="A selfie of me on an iceberg south of the Antarctic circle." class="wp-image-3591" /></li><li class="blocks-gallery-item"><img width="3264" height="2448" src="https://pento.net/wp-content/uploads/2018/12/00006IMG_00006_BURST20181002212033_COVER.jpg" alt="A selfie of me with a fire breathing dragon at the Harry Potter themed amusement park in Orlando, Florida." class="wp-image-3604" /></li><li class="blocks-gallery-item"><img width="1793" height="469" src="https://pento.net/wp-content/uploads/2018/12/48944769_986954175890_2085904447019417600_o.jpg" alt="A panoramic view of sunset over Nairobi National Park." class="wp-image-3554" /></li></ul>



<p>All sorts of embeds work, too. <img src="https://s.w.org/images/core/emoji/13.0.0/72x72/1f609.png" alt="😉" class="wp-smiley" /></p>



<div class="wp-block-embed__wrapper">
<div class="jetpack-video-wrapper"></div>
</div>



<p>It&#8217;ll be coming in Jetpack 9.0 (due out October 6), but you can try it now in <a href="https://jetpack.com/download-jetpack-beta/">the latest Jetpack Beta</a>! Check it out and tell me what you think. <img src="https://s.w.org/images/core/emoji/13.0.0/72x72/1f642.png" alt="🙂" class="wp-smiley" /></p>



<p>This might not fix all of Twitter&#8217;s problems, but I hope it&#8217;ll help you enjoy reading and writing on Twitter a little more. <img src="https://s.w.org/images/core/emoji/13.0.0/72x72/1f496.png" alt="💖" class="wp-smiley" /></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 29 Sep 2020 02:33:14 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Gary";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:10;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:100:"WPTavern: Themes Team Releases a Web Fonts Loader, Likely To Prohibit Hotlinking Any Off-Site Assets";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105363";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:243:"https://wptavern.com/themes-team-releases-a-web-fonts-loader-likely-to-prohibit-hotlinking-any-off-site-assets?utm_source=rss&utm_medium=rss&utm_campaign=themes-team-releases-a-web-fonts-loader-likely-to-prohibit-hotlinking-any-off-site-assets";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5815:"<p class="has-drop-cap">Last Friday, the WordPress Themes Team <a href="https://make.wordpress.org/themes/2020/09/25/new-package-to-allow-locally-hosting-webfonts/">announced the release</a> of its new <a href="https://github.com/WPTT/webfont-loader">Webfonts Loader project</a>. It is a drop-in script that allows theme authors to load web fonts from the user&rsquo;s site instead of a third-party CDN. The secondary message included in the team&rsquo;s announcement is that it no longer plans to allow themes to hotlink Google Fonts in the future.</p>



<p>Throughout most of the team&rsquo;s history, it has not allowed themes to hotlink or use CDNs for hosting theme assets, such as CSS, JavaScript, and fonts. The one <a href="https://make.wordpress.org/themes/handbook/review/required/#stylesheets-and-scripts">exception to this rule</a> was the use of Google Fonts. This allowed themes to have richer typography options at their disposal from what the team has generally declared a reliable source.</p>



<p>&ldquo;The exception was made because there was no practical way to not have the exception at the time,&rdquo; said Aria Stathopoulos, a Themes Team representative and developer behind the Webfonts Loader project. &ldquo;The exception for Google Fonts was made out of necessity. Now that there is another way, the exception will not be necessary.&rdquo;</p>



<p>In effect, disallowing the Google Fonts CDN would not be a new ban. It would be a removal of an exception to the existing ban.</p>



<p>Google Fonts has become so embedded into the theme developer toolset over the years, there was no way the team could simply pull the plug and prohibit the use of the CDN overnight. If the Themes Team members wanted to focus more on privacy, they would need to build a tool that made it dead simple for theme authors to use.</p>



<p>There is no hard deadline for when the team will remove the exception for Google Fonts, and it is not set in stone at this point. Stathopoulos said removing it has been the goal from the beginning, disallowing all CDNs. However, it took a while to find an efficient way to handle this. With a viable alternative in place, they can discuss moving forward.</p>



<h2>Webfonts Loader for Themes</h2>



<p class="has-drop-cap">The Webfonts Loader project keeps it simple for theme authors. It introduces a new <code>wptt_get_webfont_styles()</code> function that developers can plug in a stylesheet URL. Once a page is loaded with that function call, it will download the fonts locally to a <code>/fonts</code> folder in the user&rsquo;s <code>/wp-content</code> directory. This way, fonts will always be served from the user&rsquo;s site.</p>



<p>The system is not limited to Google Fonts either. Any URL that serves CSS with an <code>@font-face {}</code> rule will work. It does not currently include authentication for CDNs that require API keys, such as Adobe Fonts. However, that is something the team might add in the future.</p>



<p>&ldquo;For end-users, moving away from CDNs and locally hosting web fonts will improve performance (fewer handshake roundtrips for SSL), and is the privacy-conscious choice,&rdquo; said Stathopoulos. &ldquo;The only &lsquo;valid privacy concern&rsquo; is that the web fonts&rsquo; CDN does not disclose information that is fundamental to the GDPR: what information gets logged, for how long these logs remain, how they are processed, if there is any cross-referencing with all the other wealth of information the company has from users, etc. The concern is a lack of disclosure and information. If a site owner doesn&rsquo;t know what kind of information a third-party logs for its visitors, then they should ethically not enforce that on their visitors. With this package, the CDN is removed from the equation and the font still gets served fast &mdash; if not faster.&rdquo;</p>



<h2>A Path to Core WordPress</h2>



<p class="has-drop-cap">Today, there is now a broader focus on privacy concerns related to third-party resources, particularly with tech giants like Google. Such concerns extend to whether third parties are tracking users or collecting data. Additional concerns are around whether sites are disclosing the use of third-party resources, which may be required in some jurisdictions. Site owners who are often unable to work through the web of potential issues are stuck in the middle.</p>



<p>Jono Alderson opened a ticket to <a href="https://core.trac.wordpress.org/ticket/46370">create an API</a> for loading web fonts locally in core WordPress in February 2019. It is a lengthy and detailed proposal, but it has yet to see much buy-in outside of a handful of developers.</p>



<p>&ldquo;If such a script is standardized and included in WordPress core, one of the main benefits would be more respect for the end-user&rsquo;s privacy,&rdquo; said Stathopoulos. &ldquo;In the end, that&rsquo;s all privacy is about: respecting users.&rdquo;</p>



<p>A standard API like Alderson proposes could solve some issues. Namely, it would virtually eliminate any privacy concerns. However, loading fonts locally could allow WordPress to optimize font loading and would create a shared system where plugins and themes do not load duplicate assets because of the current limitations of the enqueuing system. A standard API would also put the responsibility of efficiently loading fonts on WordPress&rsquo;s shoulders instead of theme and plugin developers.</p>



<p>The Themes Team&rsquo;s new project is a solid start and strengthens the current proposal.</p>



<p>&ldquo;If we&rsquo;re serious about WordPress becoming a fast, privacy-friendly platform, we can&rsquo;t rely on theme developers to add and manage fonts without providing a framework to support them,&rdquo; wrote Alderson in the ticket.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 28 Sep 2020 20:58:48 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:11;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:87:"WPTavern: Fuxia Scholz First to Pass 100K Reputation Points on WordPress Stack Exchange";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105282";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:219:"https://wptavern.com/fuxia-scholz-first-to-pass-100k-reputation-points-on-wordpress-stack-exchange?utm_source=rss&utm_medium=rss&utm_campaign=fuxia-scholz-first-to-pass-100k-reputation-points-on-wordpress-stack-exchange";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5096:"<p><a href="https://stackexchange.com/users/113787/fuxia">Fuxia Scholz</a>, a prolific <a href="https://wordpress.stackexchange.com/">WordPress Stack Exchange</a> (WPSE) contributor, is the first member to reach 100,000 reputation points. The popular Q&amp;A community site rewards expert advice by floating the highest quality answers to the top, allowing users to earn reputation points. The gamified help community has proven to be more motivating for developers than many traditional forums, since the upvotes communicate how useful their answers are to others.</p>



<div class="wp-block-image"><img /></div>



<p>Scholz started on Stack Overflow a few months before WordPress had its own site. She wrote around 50 answers and made connections with other WordPress developers ahead of the site&rsquo;s <a href="https://area51.stackexchange.com/proposals/1500/wordpress-development">beta phase in June 2010</a>. Once the site graduated and got its own logo and design, Scholz started writing more.</p>



<p>&ldquo;One core idea for all Stack Exchange sites is gamification: You earn reputation, and you get access to <a href="https://wordpress.stackexchange.com/help/privileges">certain privileges</a>,&rdquo; Scholz said.</p>



<p>&ldquo;You can say I got a bit addicted. My favorite questions were about problems for which I didn&rsquo;t know the answer, and couldn&rsquo;t find one with a search engine, because no one else had solved that before. I used my answers to teach myself, and I learned a lot this way! In May 2011 <a href="https://stackexchange.com/users/113787/fuxia?tab=reputation">my reputation on WPSE was already higher than on Stack Overflow</a>, and for the next years it went up in a steep curve.&rdquo; Ten years after WPSE launched, Scholz has become the first to reach 100,000 reputation points.</p>



<p>&ldquo;What reputation and karma do is send a message that this is a community with norms, it&rsquo;s not just a place to type words onto the internet. (That would be 4chan.)&rdquo; Stack Overflow co-creator Joel Spolsky <a href="https://www.joelonsoftware.com/2018/04/13/gamification/">said</a>. &ldquo;We don&rsquo;t really exist for the purpose of letting you exercise your freedom of speech. You can get your freedom of speech somewhere else. Our goal is to get the best answers to questions. All the voting makes it clear that we have standards, that some posts are better than others, and that the community itself has some norms about what&rsquo;s good and bad that they express through the vote.&rdquo;</p>



<p>The reputation points were originally inspired by Reddit Karma. Spolsky admits that the points not a perfect system but they do tend to &ldquo;drive a tremendous amount of good behavior.&rdquo; Gamification can shape and encourage certain behaviors but Spolsky said it&rsquo;s a weak force that cannot motivate people to do things they are not already interested in doing. For Scholz, it was the community aspect and an earned sense of ownership and responsibility that kept her hooked.</p>



<p>&ldquo;In 2012, the community elected me as a moderator, and that changed a lot,&rdquo; she said. &ldquo;Now it wasn&rsquo;t just a game anymore, it was a duty. I felt responsible for the site. I still do. I also found some friends on there. We met at WordCamps and in private, and worked together on different projects.&rdquo;</p>



<p>Scholz no longer works in development and said she doesn&rsquo;t care about WordPress anymore, but she is still a regular contributor on the WPSE.</p>



<p>&ldquo;I switched careers and work as a writer, translator, and community manager for <a rel="noreferrer noopener" href="https://t.co/mIhjlVjPv4?amp=1" target="_blank">Chess24.com</a> now,&rdquo; she said. &ldquo;But I still care about the site WordPress Stack Exchange! I keep an eye on new tags, handle flagged posts and comments, try to make every new user feel welcome, and I search for people who are abusing the system &mdash; vote fraud and spam. And, very rarely, I even write an answer, because I still know all this stuff. </p>



<p>&ldquo;Checking the site has become a part of my daily routine, like feeding the cat.&rdquo; </p>



<p>This daily habit has snowballed into Scholz racking up more than 2,000 answers. She is getting upvotes on many of her old answers nearly every day, which is what pushed her over the 100k milestone.</p>



<p>&ldquo;There is a lot to say about the way our site developed over the years,&rdquo; Scholz said. &ldquo;I&rsquo;m not happy about some things. The enthusiasm of the early days is gone. We don&rsquo;t have enough regulars, there is no discussion about the site on <a href="https://t.co/tlRekl6sOt?amp=1">WordPress Development Meta Stack Exchange</a>, and our chat, once very active, funny, and friendly, is now almost dead. </p>



<p>&ldquo;Maybe that&rsquo;s normal, I don&rsquo;t know. But it&rsquo;s still &lsquo;my&rsquo; site. Reputation and badges don&rsquo;t really mean anything for a long time now, but keeping the site working, useful and friendly is more important.&rdquo;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 26 Sep 2020 15:27:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:12;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:82:"WPTavern: PhotoPress Plugin Seeks to Revolutionize Photography for WordPress Users";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104770";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:209:"https://wptavern.com/photopress-plugin-seeks-to-revolutionize-photography-for-wordpress-users?utm_source=rss&utm_medium=rss&utm_campaign=photopress-plugin-seeks-to-revolutionize-photography-for-wordpress-users";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5638:"<p class="has-drop-cap">Peter Adams, the owner of the <a href="https://wordpress.org/plugins/photopress/">PhotoPress plugin</a>, announced a couple of weeks ago that <a href="https://www.photopressdev.com/its-time-for-photopress/">now is the time for his project</a> to take center stage. &ldquo;It&rsquo;s Time for PhotoPress,&rdquo; read the title of his post in which he laid out a four-phase plan for the future of his project.</p>



<p>Adams is no stranger to manipulating WordPress to suit the needs of photographers. He described photography as his first love and second career. He initially found the art of taking photos in high school and set off to college to become a professional photographer in the early &rsquo;90s.</p>



<p>As his university graduation loomed, he was recruited to run web development for an internet ad agency that built websites for Netscape, Bill Clinton&rsquo;s White House, and dozens of Fortune 500 companies. He spent the next 15 years starting or running tech companies before returning to his roots as a photographer.</p>



<p>Today, he photographs for various magazines and companies. And, that&rsquo;s where his PhotoPress project comes in.</p>



<p>&ldquo;As far as WordPress has come, it is at risk of losing an entire generation of photographers to photo website services such as Photoshelter, SmugMug, Squarespace, and PhotoFolio,&rdquo; he said. Adams wants to change that, making WordPress the go-to platform for photographers around the world.</p>



<h2>The Jetpack of Photography Plugins</h2>



<p class="has-drop-cap">If you dig into the history of the PhotoPress plugin on WordPress.org, it seems to have a 15-year history. However, this is not the same plugin that was published a decade and a half ago by a different developer. The original plugin is now defunct, and Adams took over when the name was freed up on the directory.</p>



<p>Adams wrote in his announcement post that WordPress has done a great job of delivering several media features over the years. &ldquo;Yet despite that, there are still many rough edges and missing features that keep WordPress from being the first choice for a photographer that needs to publish a beautiful portfolio of their work, put their image catalog/archive online, or showcase a photo editorial/project.&rdquo;</p>



<p>He outlined a list of 10 specific problem areas that he wants to address in a &ldquo;Jetpack-like&rdquo; plugin for photographers. This is the bread and butter of the first of the planned four phases, which he said is about 80% finished. He had originally planned to develop PhotoPress as a series of separate plugins, each addressing a specific problem. Now, it is a single plugin with modules than can be enabled or disabled.</p>



<p>When asked why the &ldquo;right time&rdquo; is now, Adams explained it is because the Gutenberg (block editor) project is a giant leap forward in usability in terms of creating photography blogs.</p>



<img />PhotoPress Gallery block in the editor.



<p>&ldquo;Photogs are a rare breed of non-technical users with high design sense,&rdquo; he said. &ldquo;Things that I used to have to teach photographers to do using shortcode syntax and custom CSS can now be simple controls with live feedback inside a Gutenberg block. It&rsquo;s really a game-changer for getting people comfortable with customizing things like gallery styling &mdash; which is the number one thing photographers need to do.&rdquo;</p>



<p>The primary piece of the PhotoPress plugin is its custom PhotoPress Gallery block. It allows users to choose between a range of gallery styles, such as columns, masonry, justified, and mosaic. Each style has its own options. Images can also be launched into a slideshow when one is clicked.</p>



<p>Based on some quick tests, the block&rsquo;s front-end output will go farther with some themes than others. This is mainly because of conflicting CSS and issues which can be solved by testing against more themes.</p>



<p>Aside from the block, the plugin can automatically extract image metadata and group that data through custom taxonomies, such as cameras, lenses, locations, keywords, and more. WordPress stores this information out of the box, but it is hidden away as post meta. The plugin uses the taxonomy system to make it manageable for end-users.</p>



<p>Ultimately, Adams set out to create a photography plugin that fits in with the WordPress admin user interface and experience, which he has accomplished.</p>



<h2>The Future of PhotoPress</h2>



<p class="has-drop-cap">The project is still a work in progress. Adams is still moving through Phase I of the four-phase plan. Once it is complete, he can move on to the next steps in the process.</p>



<p>Phase II is to create themes that are designed specifically to work with the PhotoPress plugin. He has three planned thus far. One for handling portfolio sites. Another for creating a stock photo archive. And the last for photojournalism and exhibits. Each will be built on top of his <a href="https://github.com/photopress-dev/frame">photography theme framework</a>.</p>



<p>The themes in Phase II will likely be commercial products. Adams said he needs a way to fund the next phases of the project. He hopes to have this step underway by the end of the year.</p>



<p>For 2021, he wants to begin tackling Phases III and IV. The former will be a website-as-a-service (WaaS) similar to WordPress.com but for photographers. It will begin as a paid project but could have some free options for emerging photographers and students. The final phase is to build an onboarding system.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 25 Sep 2020 19:08:15 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:13;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:73:"WPTavern: Google Officially Releases Its Web Stories for WordPress Plugin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105227";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:191:"https://wptavern.com/google-officially-releases-its-web-stories-for-wordpress-plugin?utm_source=rss&utm_medium=rss&utm_campaign=google-officially-releases-its-web-stories-for-wordpress-plugin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5593:"<img />Web Stories for WordPress dashboard.



<p class="has-drop-cap">Two and a half months after the <a href="https://wptavern.com/google-launches-beta-of-amp-powered-web-stories-plugin-for-wordpress">launch of its public beta</a>, Google <a href="https://blog.google/web-creators/create-compelling-web-stories-wordpress/">released its Web Stories</a> for WordPress plugin. So far, the plugin has over 10,000 active installations and has garnered a solid five-star rating from four reviews.</p>



<p>Google created the Web Stories format through its AMP Project to allow publishers to create visually-rich stories. It is primarily geared toward mobile site visitors, allowing them to quickly jump through story pages with small chunks of content.</p>



<p>The <a href="https://wordpress.org/plugins/web-stories/">Web Stories plugin</a> creates a visual interface within WordPress for creating Stories. It breaks away from the traditional WordPress interface and introduces users to an almost Photoshop-like experience for building out individual Stories. The Stories editor is completely drag-and-drop.</p>



<p>The plugin also offers eight predesigned templates out of the box that cover a small range of niches. However, according to Google&rsquo;s announcement, the company plans to add more templates in future updates.</p>



<h2>Web Stories Are for Storytelling</h2>



<p>&ldquo;Firstly&hellip;the power of Stories,&rdquo; wrote Jamie Marsland, founder of Pootlepress, in a <a href="https://twitter.com/pootlepress/status/1309020235102597122">Twitter thread</a>. &ldquo;Stories are how we (humans) see the world and share our experiences. Up to now the platforms that we have to tell stories have been limited to books/films/tv/websites/blogs/instagram stories etc.&rdquo;</p>



<p>&ldquo;Websites are ok for telling stories but in many ways the format doesn&rsquo;t really fit the linear arc of storytelling. When Marshall McLuhan said &lsquo;the medium is the message&rsquo; in 1964 he was talking about how the medium itself has a social impact, and change the communication itself&hellip;and the possibilities for what is communicated and how it is perceived. But we should keep coming back to Stories. Stories are the key here imo. Now we have an open format to tell Stories, and we have an open platform (WordPress) where those Stories can be told easily.&rdquo;</p>



<p>Marsland finished his thread by saying that using Stories as a replacement for a brochure or website is a missed opportunity. He said that it was a platform for storytelling and should be used as such.</p>



<p>It is far too early to tell if Web Stories will simply be a fad or still in wide use years from now. The technology certainly lends itself well to telling stories, particularly in mobile format, but I doubt we have seen the best of what is possible on the web. The format feels too limited to be the end-all-be-all of storytelling. It is merely one medium that will live and die by its popularity with users.</p>



<p>With the right design skills, some people will craft beautiful Web Stories. And, that is just what Marsland has done with the <a href="https://jamiemarsland.staging.wpengine.com/web-stories/wilson-and-pootle/">first Story he shared</a>:</p>



<img />Page from the Wilson and Pootle Web Story by Jamie Marsland.



<p>I agree with his conclusion. Web Stories should be about storytelling. When you move outside of that zone, the technology feels out of place.</p>



<p>Where I disagree is that websites are not ideal for storytelling. Ultimately, the WordPress block editor will allow artistic end-users to craft intricate stories, mixing content and design in ways that we have not seen. We are just now scratching the surface. I expect our community of developers to build more intricate tools than what the Web Stories plugin currently allows, and we can do so in a way that revolutionizes storytelling on the web.</p>



<h2>New Features</h2>



<img />Story editor with Unsplash photo integration.



<p class="has-drop-cap">The Web Stories plugin now adds support for Unsplash images and Coverr videos out of the box. The plugin adds a new tab with a &ldquo;media&rdquo; icon. For users of the first beta version of the plugin, this may be a bit confusing. The previous media icon was for a tab that displayed the user&rsquo;s media. Now, the user&rsquo;s media is under the tab with the &ldquo;upload&rdquo; icon.</p>



<p>It is also not immediately clear that the Unsplash images and Coverr videos are not hosted on the site itself. There is a &ldquo;powered by&rdquo; notice at the bottom of the tab, but it can be easy to miss because it blends in with the media in the background.</p>



<p>Media from Unsplash and Coverr is hosted off-site and not downloaded to the user&rsquo;s WordPress media library. I could find no mention of this in the plugin&rsquo;s documentation. Such hotlinking was a <a href="https://wptavern.com/unsplash-responds-to-image-licensing-concerns-clarifies-reasons-for-hotlinking-and-tracking">cause for debate</a> over the recent official release of the Unsplash plugin.</p>



<p>Google also announced it planned to add more &ldquo;stock media integrations&rdquo; in the near future. According to a <a href="https://docs.google.com/document/d/1q8rkYYMKZh3R2eqkpwgGkx6QX0oSXoLYtIO6ml1BFD0/edit#heading=h.xqcejitqohdk">document</a> shared via a GitHub <a href="https://github.com/google/web-stories-wp/issues/3909#issuecomment-674053068">ticket</a>, such future integrations may include Google Photos and GIF-sharing site Tenor.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 24 Sep 2020 21:13:42 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:14;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:106:"WPTavern: W3C Drops WordPress from Consideration for Redesign, Narrows CMS Shortlist to Statamic and Craft";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105108";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:255:"https://wptavern.com/w3c-drops-wordpress-from-consideration-for-redesign-narrows-cms-shortlist-to-statamic-and-craft?utm_source=rss&utm_medium=rss&utm_campaign=w3c-drops-wordpress-from-consideration-for-redesign-narrows-cms-shortlist-to-statamic-and-craft";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:11563:"<p>The <a href="https://www.w3.org/">World Wide Web Consortium</a> (<em>W3C</em>), the international standards organization for the web,&nbsp;is redesigning its website and will soon be selecting a new CMS. Although WordPress is&nbsp;already used to manage W3C&rsquo;s <a href="https://www.w3.org/blog/">blog</a> and <a href="https://www.w3.org/blog/news/">news</a> sections of the website, the organization is open to adopting a new CMS to meet its list of preferences and <a href="https://w3c.studio24.net/docs/cms-strategy-and-requirements/">requirements</a>. </p>



<p>Studio 24, the digital agency selected for the redesign project, narrowed their consideration to three CMS candidates:</p>



<ol><li><a href="https://w3c.studio24.net/docs/w3c-cms-selection-process-update/#statamic">Statamic</a></li><li><a href="https://w3c.studio24.net/docs/w3c-cms-selection-process-update/#craft-cms">Craft CMS</a></li><li><a href="https://w3c.studio24.net/docs/w3c-cms-selection-process-update/#wordpress">WordPress</a></li></ol>



<p>Studio 24 was aiming to finalize their recommendations in July but found that none of them complied with the W3C&rsquo;s authoring tool <a href="https://www.w3.org/WAI/standards-guidelines/atag/">accessibility guidelines</a>. The CMS&rsquo;s that were better at compliance with the guidelines were not as well suited to the other project requirements.</p>



<p>In the most recent project <a href="https://w3c.studio24.net/updates/weeknotes-11-sept/">update</a> posted to the site, Studio 24 reported they have&nbsp;shortlisted two CMS platforms. Coralie Mercier, Head of Marketing and Communications at W3C, confirmed that these include Statamic and Craft CMS.</p>



<p>WordPress was not submitted to the same review process as the Studio 24 team claims to have extensive experience working with it. In the summary of their concerns, Studio 24 cited Gutenberg, accessibility issues, and the fact that the Classic Editor plugin will <a href="https://make.wordpress.org/core/2018/11/07/classic-editor-plugin-support-window/">stop being officially maintained on December 31st, 2021</a>:</p>



<blockquote class="wp-block-quote"><p>First of all, we have concerns about the longevity of WordPress&nbsp;<strong>as we use it</strong>. WordPress released a new version of their editor in 2018: Gutenberg. We have already rejected the use of Gutenberg in the context of this project due to accessibility issues.</p><p>If we choose to do away with Gutenberg now, we cannot go back to it at a later date. This would amount to starting from scratch with the whole CMS setup and theming.</p><p>Gutenberg is the future of WordPress. The WordPress core development team keeps pushing it forward and wants to roll it out to all areas of the content management system (navigation, sidebar, options etc.) as opposed to limiting its use to the main content editor as is currently the case.</p><p>This means that if we want to use WordPress long term, we will need to circumvent Gutenberg and keep circumventing it for a long time and in more areas of the CMS as time goes by.&nbsp;</p></blockquote>



<p>Another major factor in the decision to remove WordPress from consideration was that they found &ldquo;no elegant solution to content localization and translation.&rdquo;</p>



<p>Studio 24 also expressed concerns that tools like ACF, Fewbricks, and other plugins might not being maintained for the Classic Editor experience &ldquo;in the context of a widespread adoption of Gutenberg by users and developers.&rdquo;</p>



<p>&ldquo;More generally, we think this push to expand Gutenberg is an indication of WordPress focusing on the requirements of their non-technical user base as opposed to their audience of web developers building custom solutions for their clients.&rdquo;</p>



<p>It seems that the digital agency W3C selected for the project is less optimistic about the future of Gutenberg and may not have reviewed recent improvements to the overall editing experience since 2018, including those related to accessibility. </p>



<p>Accessibility consultant and WordPress contributor Joe Dolson recently gave an <a href="https://www.youtube.com/watch?v=EKZulmYKYJg">update on Gutenberg accessibility audit</a> at WPCampus 2020 Online. He reported that while there are still challenges remaining, many issues raised in the audit have been addressed across the whole interface and 2/3 of them have been solved. &ldquo;Overall accessibility of Gutenberg is vastly improved today over what it was at release,&rdquo; Dolson said.</p>



<p>Unfortunately, Studio 24 didn&rsquo;t put WordPress through the same content creation and accessibility tests that it used for Statamic and Craft CMS. This may be because they had already planned to use a Classic Editor implementation and didn&rsquo;t see the necessity of putting Gutenberg through the paces. </p>



<p>These <a href="https://w3c.studio24.net/docs/w3c-cms-selection-process-update/#the-review-process">tests</a> involved creating pages with &ldquo;flexible components&rdquo; which they referred to as &ldquo;blocks of layout,&rdquo; for things like titles, WYSIWYG text input, and videos. It also involved creating a template for news items where all the content input by the user would be displayed (without formatting). </p>



<p>Gutenberg would lend itself well to these uses cases but was not formally tested with the other candidates, due to the team citing their &ldquo;extensive experience&rdquo; with WordPress. I would like to see the W3C team revisit Gutenberg for a fair shake against the proprietary CMS&rsquo;s. </p>



<h2>W3C Is Prioritizing Accessibility Over Its Open Source Licensing Preferences</h2>



<p>The document outlining the CMS requirements for the project states that &ldquo;W3C has a strong preference for an open-source license for the CMS platform&rdquo; as well as &ldquo;a CMS that is long-lived and easy to maintain.&rdquo; This preference may be due to the economic benefits of using a stable, widely adopted CMS, or it may be inspired by the undeniable symbiosis between open source and open standards.</p>



<blockquote class="wp-block-quote"><p>&ldquo;The industry has learned by experience that the only software-related standards to fully achieve [their] goals are those which not only permit but encourage open source implementations. Open source implementations are a quality and honesty check for any open standard that might be implemented in software&hellip;&rdquo;</p><cite><a href="https://opensource.org/osr-rationale">Open Source Initiative</a></cite></blockquote>



<p>WordPress is the only one of the three original candidates to be distributed under an&nbsp;<a href="https://opensource.org/licenses">OSD-compliant license</a>.&nbsp;(CMS code available on GitHub isn&rsquo;t the same.)</p>



<p>Using proprietary software to publish the open standards that underpin the web isn&rsquo;t a good look. While proprietary software makers are certainly capable of implementing open standards, regardless of licensing, there are a myriad of benefits for open standards in the context of open source usage: </p>



<blockquote class="wp-block-quote"><p>&ldquo;The community of participants working with OSS may promote open debate resulting in an increased recognition of the benefits of various solutions and such debate may accelerate the adoption of solutions that are popular among the OSS participants. These characteristics of OSS support evolution of robust solutions are often a significant boost to the market adoption of open standards, in addition to the customer-driven incentives for interoperability and open standards.&rdquo;</p><cite><a href="http://airccse.org/journal/ijsea/papers/0111ijsea01.pdf">International Journal of Software Engineering &amp; Applications</a></cite></blockquote>



<p>Although both Craft CMS and Statamic have their code bases available on GitHub, they share similarly restrictive licensing models. The Craft CMS <a href="https://github.com/craftcms/cms/blob/develop/CONTRIBUTING.md">contributing document</a> states:</p>



<blockquote class="wp-block-quote"><p><strong>Craft isn&rsquo;t FOSS</strong><br />Let&rsquo;s get one thing out of the way: Craft CMS is <strong>proprietary software</strong>. Everything in this repo, including community-contributed code, is the property of Pixel &amp; Tonic.</p><p>That comes with some limitations on what you can do with the code:</p><p>&ndash; You can&rsquo;t change anything related to licensing, purchasing, edition/feature-targeting, or anything else that could mess with our alcohol budget.<br />&ndash; You can&rsquo;t publicly maintain a long-term fork of Craft. There is only One True Craft.</p></blockquote>



<p>Statamic&rsquo;s contributing docs have similar restrictions:</p>



<blockquote class="wp-block-quote"><p>Statamic is not Free Open Source Software. It is <strong>proprietary</strong>. Everything in this and our other repos on Github &mdash; including community-contributed code &mdash; is the property of Wilderborn. For that reason there are a few limitations on how you can use the code:</p></blockquote>



<p>Projects with this kind of restrictive licensing often fail to attract much contribution or adoption, because the freedoms are not clear. </p>



<p>In a GitHub issue <a href="https://github.com/craftcms/cms/issues/842">requesting Craft CMS go open source</a>, Craft founder and CEO Brandon Kelly said, &ldquo;Craft isn&rsquo;t closed&nbsp;<em>source</em>&nbsp;&ndash;&nbsp;all the source code is right here on GitHub,&rdquo; and claims the license is relatively unrestrictive as far as proprietary software goes, that contributing functions in a similar way to FOSS projects.  This rationale is not convincing enough for some developers commenting on the thread.</p>



<p>&ldquo;I am a little hesitant to recommend Craft with a custom open source license,&rdquo; Frank Anderson said. &ldquo;Even if this was a MIT+ license that added the license and payment, much like React used to have. I am hesitant because the standard open source licenses have been tested.&rdquo;</p>



<p>When asked about the licensing concerns of Studio 24 narrowing its candidates to two proprietary software options, Coralie Mercier told me, &ldquo;we are prioritizing accessibility.&rdquo; A recent project <a href="https://w3c.studio24.net/updates/weeknotes-11-sept/">update</a> also reports that both CMS suppliers W3C is reviewing &ldquo;have engaged positively with authoring tool accessibility needs and have made progress in this area.&rdquo;</p>



<p>Even if you have cooperative teams at proprietary CMS&rsquo;s that are working on accessibility improvements as the result of this high profile client, it cannot compare to the massive community of contributors that OSD-compliant licensing enables. </p>



<p>It&rsquo;s unfortunate that the state of open source CMS accessibility has forced the organization to narrow its selections to proprietary software options for its first redesign in more than a decade. </p>



<p>Open standards go hand in hand with open source. There is a mutually beneficial connection between the two that has caused the web to flourish. I don&rsquo;t see using a proprietary CMS as an extension of W3C values, and it&rsquo;s not clear how much more benefit to accessibility the proprietary options offer in comparison. W3C may be neutral on licensing debates, but in the spirit of openness, I think the organization should adopt an open source CMS, even if it is not WordPress.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 24 Sep 2020 20:13:24 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:15;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:79:"WPTavern: First Look at Twenty Twenty-One, WordPress’s Upcoming Default Theme";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105166";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:195:"https://wptavern.com/first-look-at-twenty-twenty-one-wordpresss-upcoming-default-theme?utm_source=rss&utm_medium=rss&utm_campaign=first-look-at-twenty-twenty-one-wordpresss-upcoming-default-theme";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6907:"<blockquote class="wp-block-quote"><p>Fashion is ephemeral. Art is eternal. Indeed what is a fashion really? A fashion is merely a form of ugliness so absolutely unbearable that we have to alter it every six months!</p></blockquote>



<p>Thus wrote Oscar Wilde on Victorian-era fashion in an article titled &ldquo;The Philosophy of Dress&rdquo; for the <em>New-York Tribune</em> in 1885.</p>



<p>In many ways, WordPress theming is the same as the ever-changing landscape of fashion. Rounded corners are in one day and out the next. Box shadows are in one year after being frowned up just months earlier. Perhaps web design is so intolerable that we must change it every six months. Or, at least freshen it up every year in the case of WordPress.</p>



<p>If art is eternal, there are only two default, Twenty* themes that I can truly recall from past years: Twenty Ten and Twenty Fourteen &mdash; yes, Twenty Twenty is memorable, but it is also still the current default. Twenty Ten was a classic that paid homage to WordPress&rsquo;s past. Twenty Fourteen was such a leap away from tradition that it is hard to forget. Everything else has seemed to fade to varying degrees.</p>



<p>With WordPress 5.6 and the end of the year looming, it is time to look forward to the latest trend. As Mel Choyce-Dwan noted in the <a href="https://make.wordpress.org/core/2020/09/23/introducing-twenty-twenty-one/">announcement of Twenty Twenty-One</a>, the next default theme, &ldquo;<a href="https://www.garnishstudios.com/">Pastels</a> and <a href="https://www.designbyparker.com/">muted</a> <a href="https://westportcondos.ca/">colors</a> are <a href="https://arisacoba.com/">pretty</a> <a href="https://www.collaborativechange.global/">in</a> <a href="https://paradigmacreation.com/">right</a> <a href="https://taregrocery.com/">now</a>.&rdquo;</p>



<p>She is not wrong. The colors are a refreshing change of pace. Now that we are into the second day of autumn, I am getting <em>the good kind of vibes</em> from some of the more earthy-tones from a couple of the color palettes expected to ship with the theme.</p>



<img />Potential color palette options for Twenty Twenty-One.



<p>Whether Twenty Twenty-One will be a fashionable theme for the year or art that we can remember a decade from now, only history will be able to judge. For now, let&rsquo;s enjoy the creation and take a look at what we should expect from the next default WordPress theme.</p>



<h2>The Current Twenty Twenty-One</h2>



<p class="has-drop-cap">The new default theme is a fork of <a href="https://wordpress.org/themes/seedlet/">Automattic&rsquo;s Seedlet</a>, a project in which I lauded as the <a href="https://wptavern.com/exploring-seedlet-automattics-block-first-wordpress-theme">next step in the evolution of theming</a>. It is a theme that is focused on WordPress&rsquo;s future of being completely comprised of blocks. It gives us an ideal insight into where theme development is heading. It makes sense as the foundation for the new default. Few other themes would make for a good starting point right now. With WordPress theme development in flux, Seedlet is simply ahead of the pack in terms of foundational elements.</p>



<img />Seedlet WordPress theme screenshot.



<p>&ldquo;This provides us with a thorough system of nested CSS variables to make child theming easier, and to help integrate with the global styles functionality that&rsquo;s under development for full-site editing,&rdquo; wrote Choyce-Dwan of using Seedlet as a starting point.</p>



<p>There are no plans to spin up a Google Web Font for this theme. The design team is going native and sticking with the default system font stack. Choyce-Dwan listed several reasons for the choice, such as keeping a neutral font that allows broad use, speed, and customizability via a child theme.</p>



<p>Despite the neutral font, the default pastel green is a fairly opinionated design decision. It will not be used broadly across industries. However, the team plans to create multiple color palettes that will give it more range. Presumably, these palettes can also be overwritten.</p>



<img />Pastel green color scheme on single post view.



<p>Other than the colors, the design is relatively simple. Choyce-Dwan said that the theme&rsquo;s block patterns support is where it will be truly unique.</p>



<p>I was initially <a href="https://wptavern.com/decision-time-what-block-patterns-should-ship-with-wordpress-5-5">unhappy with the patterns</a> that were going to ship with WordPress 5.5. However, an 11th-hour <a href="https://wptavern.com/gutenberg-8-7-adds-minor-changes-updates-block-pattern-designs-and-continues-full-site-editing-work">update improved the situation</a> so that they did not feel entirely experimental. The foundational Seedlet theme for Twenty Twenty-One has some unique patterns that begin to scratch the surface of what&rsquo;s possible with this WordPress feature. My hope is that the new default theme steps it up a notch.</p>



<p>Currently, the theme does not register any custom patterns. However, it has a placeholder file and a note that they are a work in progress. Choyce-Dwan shared some patterns the team has already designed in the announcement.</p>



<img />Currently-designed block patterns.



<p>&ldquo;We&rsquo;ll be relying on our talented community designers for more ideas,&rdquo; she wrote. The team has also created a GitHub template for anyone to <a href="https://github.com/WordPress/twentytwentyone/issues">contribute pattern design ideas</a>.</p>



<p>Currently, the theme does not support the upcoming full-site editing feature of WordPress. After the Beta 1 release of WordPress 5.6, the team plans to begin exploring the addition of this support. WordPress is expected to ship a public beta of full-site editing in its <a href="https://make.wordpress.org/core/2020/08/13/wordpress-5-6-release-planning/">next major release</a>, but it is unclear whether it will be far enough along to be a headline feature for the Twenty Twenty-One theme.</p>



<p>The team and volunteers have less than a month before the October 20th deadline for committing the new theme to trunk, the core WordPress development branch. At that stage, the theme should be nearly complete and ready for production. Of course, there will be several rounds of patches, bug fixes, and updates before WordPress 5.6 lands in December. Right now is the best time for anyone who wants to get involved with Twenty Twenty-One to do so.</p>



<p>Useful links with more information:</p>



<ul><li><a href="https://github.com/WordPress/twentytwentyone">GitHub Repository</a></li><li><a href="https://www.figma.com/file/Fv7BODXobfo2prksqRDySy/Introducing-Twenty-Twenty-One?node-id=0%3A1">Theme Mockups via Figma</a></li><li><a href="https://www.pinterest.com/melchoyce/tt1/">Twenty Twenty-One Idea Pinterest Board</a></li></ul>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 23 Sep 2020 20:01:14 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:16;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:37:"HeroPress: Hello World – Hevo Nyika";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:56:"https://heropress.com/?post_type=heropress-essays&p=3308";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:176:"https://heropress.com/essays/hello-world-discovering-the-world-through-wordpress/#utm_source=rss&utm_medium=rss&utm_campaign=hello-world-discovering-the-world-through-wordpress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:14438:"<img width="960" height="480" src="https://s20094.pcdn.co/wp-content/uploads/2021/09/092220-min.jpg" class="attachment-large size-large wp-post-image" alt="Pull Quote: Find your purpose, pursue it relentlessly" /><p><a href="https://heropress.com/feed/#shona"><span class="css-901oao css-16my406 r-1qd0xha r-ad9z0x r-bcqeeo r-qvutc0">Unokwanisa kuverenga rondedzero iyi muChiShona</span></a></p>
<p>So I chose a career in Web Development!!</p>
<p>To be honest it&#8217;s kind of funny when I think about it and quite surreal to be here talking about my story. It has been a journey and I would like to share my story with you.</p>
<p>I have been lucky in the Dad department. My Dad encouraged me to work hard and dream big from a very young age. I remember occasionally having ‘when I grow up’ talks.</p>
<p>For quite some time I wanted to be a Judge, however awesome this dream sounds it was not very inspired. After binge-watching Judge Judy for a whole weekend, I started calling myself Judge Thelma. Though I don&#8217;t remember much of this my sister says that I used to say I would arrest all the men in the World if I ever became a Judge. HAHAHA! (clearly I didn&#8217;t understand how the World works)</p>
<p>I did not understand what being a Judge meant or what was required for me to start banging that gavel to my heart&#8217;s desire. Eventually, I learnt that I had to become a lawyer first then magistrate before I could be nominated to be a Judge and let us just say that is how I sentenced that dream to a lifetime down the drain.</p>
<p>See what I did there? hahaha!</p>
<a href="https://s20094.pcdn.co/wp-content/uploads/2021/09/tandd-min.jpg"><img /></a>With Daddy Dearest
<p>A few years later, I was in High School and that is when I decided to pursue a career in Computer Science. I did not know what I would be doing or how I would get there but I just knew that I was going to pursue a career in ICT. I wrote my first line of code when I was 16 years old.</p>
<p>This was after I had joined the school&#8217;s computer class, initially, I thought I would be learning about Excel Sheets and Word Documents until I was assigned to write my first program in C (talk about a double-take!!). It was not easy but it was very exciting, l remember writing up simple code for a Video Club &#8211; a simple check-in/out for VHS tapes and CDs. Dear World, thus began my fascination with computers.</p>
<p>Seven years later, I was now in university studying ICT as I had always wanted. I was doing a Bachelors in Business Management &amp; Information Technology. In my third year, I was interning at a local Webdesign and hosting company. This was never my plan, I only took on that job after I had failed to get a job with local banks or telecommunications companies. Before I was introduced to Website Design I envisioned myself suiting up and working in IT Audit or offering IT support. Even though things did not go as I had planned, I am glad they did not exactly go my way in that aspect. So in 2017, I was designing websites using HTML, CSS, PHP, JavaScripts and Joomla which was the prefered content management system at that company. I knew about WordPress but I was not using it for anything. People have this misconception that WordPress is not for real developers and it is not secure and at that time I was one of those people.</p>
<h3>Finding my tribe</h3>
<p>One day when I was working at the front desk <a href="https://heropress.com/essays/wordpress-opened-whole-new-world/">Thabo Tswana</a> came to give a colleague of mine a purple WooCommerce pen. I did not know what WooCommerce was at that time but I was taken by the purple shirt and pen he was carrying. I asked him about it and he explained what WooCommerce was and that what he was carrying was called &#8216;swag&#8217;. So the love of freebies led me to the WordCamp Harare website, instead of buying a ticket I applied to volunteer. I learnt more about WordPress, I was a volunteer, without any knowledge on WordPress.org or WordPress.com. I only started using WordPress because of the awesome people that l had met at that Wordcamp.</p>
<p>Everyone was so welcoming, a week later with help from Thabo I designed my first ever WP website.</p>
<p>Soon after I was part of the community and a bit more involved in the meetups. We had our first-ever Women Who WordPress meetup in 2018. So many ladies came on board bloggers and developers alike. We were free to talk and discuss a lot of things. We had more time to discuss the difference between WordPress.com and WordPress.org we shared views on how to handle discrimination at work, how to promote your website and a whole lot of other things.</p>
<p><a href="https://s20094.pcdn.co/wp-content/uploads/2021/09/20180324_105352-min.jpg"><img /></a></p>
<h3>Establishing roots</h3>
<p>In 2018, Harare had its first-ever female Lead Organiser <a href="https://tapiwanashe.com/">Tapiwanashe Manhobo</a> whoop whoop! I was also part of the organising team that year, I was assigned to handle Harare’s first Kids Camp. The planning process was stressful because the economic crisis in Zimbabwe was getting worse, luckily we had over 8 months to plan and with help from sponsors, we managed to pull through. In the end, everything turned out great. I wrote an article about the <a href="https://thelmachido.wordpress.com/2019/11/21/wordpress-juniours-first-edition/">Kids Camp here</a>.</p>
<p>After the first Kids Camp, we had several WordPressors that were enthusiasts about encouraging kids to embrace ICT. In 2019 we had not planned to have a Kids Camp because of financial constraints but to our surprise, we had some anonymous donations and we managed to have a WordPress Community outreach to a youth centre a week after our WordCamp. We had the outreach at the <a href="https://cttzim.org/">Centre for Total Transformation</a> which is a non-formal school that caters for underprivileged and vulnerable children. We taught them about WordPress, Computer Hardware and Software.</p>
<p>Here is a small video I took with Ellen when we were about to leave. Did l mention that I am terrible on camera? hahaha!</p>
<div class="wp-video"><a href="https://thelmachido.me/vid.mp4">https://thelmachido.me/vid.mp4</a></div>
<p><a href="https://thelmachido.wordpress.com/2020/09/18/kids-camp-2019-centre-for-total-transformation/">Kids Camp 2019 &#8211; Centre for Total&nbsp;Transformation</a></p>
<p>I have fallen deeply for WordPress because of the Community, I enjoy attending WordCamps, meeting new people and just learning new stuff. I have a huge list of WordCamps I need to attend before l kick the bucket, hopefully. Last year I managed to cross WordCamp</p>
<p>Johannesburg off my bucket list. This year I was going to attend WordCamp Capetown but unfortunately, 2020 had other plans for the whole world. Anyway when everything is back to normal my plan to travel to WordCamps will proceed. (fingers crossed)</p>
<h3>Reaping Fruits</h3>
<p>Meanwhile, my plan to improve my developing skills has not been on hold. Even though I can still cook up code in C and Java, for now, I have also included WordPress PHP functions to the mix. It was not easy to get to this point, daring myself got me to this slightly better stage. My IQ is not way up there, however, I try to do my best where I can and I am happy to say it has paid off so far.</p>
<p>Around November last year, I was designing as a freelancer while job hunting. Out of the blue l got a call for a job offer from <a href="https://zw.linkedin.com/in/trust-nhokovedzo">Trust Nhokovenzo</a> who is big on <a href="https://afrodigital.org/">Digital marketing</a> and also part of the WordPress Community. He had asked someone in the community about developers and my name happened to come up. So since February, I have been part of his team at <a href="https://calmlock.co.zw/">Calmlock Digital Marketing Agency</a>.</p>
<p>There is so much more in the world of WordPress that l am yet to tap into so even though I am ending my write up here, for now, my story is going to continue &#8230;</p>
<p>Until next time&#8230;</p>
<h1 id="shona">Hevo Nyika</h1>
<p>Saka ini ndakasarudza kugadzira mawebhusayiti.</p>
<p>Ndakaita rombo rakanaka pana baba vandakapihwa naMwari. Baba vangu vaindikurudzira kuti ndishande nesimba. Ndinoyeuka pano neapo tichiita hurukuro dzedu dzekuti ‘kana ndakura ndoda kuveyi’.</p>
<p>Kwenguva yakati rebei ndaida kuve Mutongi. Kunyangwe ini ndisingazvirangariri mukoma wangu anotaura kuti ndaiti ndaizosunga varume vese vari pasi rino kana ndikangoita mutongi HAHAHA zveshuwa handaiziva kuti mitemo yenyika inofambiswa seyi.<br />
Ndanga ndisinga nzwisisi kuti kuva mutongi kwairevei kana zvaidikanwa kwandiri kuti nditange kurova iro ghavheu kuchishuwo chemoyo wangu. Pakupedzisira, ndakadzidza kuti ndaifanirwa kuzoita gweta ipapo magistrate ndisati ndasarudzwa kuita Mutongi naizvozvo ndokupera kwakaita chiroto chekuva Mutongi.</p>
<a href="https://s20094.pcdn.co/wp-content/uploads/2021/09/tandd-min-1.jpg"><img /></a>Na Baba Vangu
<p>Gare gare papfura makore mashoma pandakanga ndave kuHigh School ndakanga ndakuda kuita basa rema kombiyuta. Ndakanyora mutsara wekutanga wekodhi pandaive nemakore gumi nematanhatu. Izvi zvakaitika mushure mekunge ndapinda mukirasi yemakombiyuta, pakutanga ndaifunga kuti ndinenge ndichidzidza nezveExcel Sheets neWord zvisineyi ndakaona ndakunyora kodhi yangu yekutanga muC. Zvaisave nyore kunyora kodhi asi zvainakidza kwazvo, ndorangarira ndichinyora kodhi yeVhidhiyo Kirabhu.</p>
<p>Makore manomwe apfura, ndakanga ndava kuyunivhesiti ndichidzidza ICT zvandakagara ndakaronga. Ndaiita Bachelors muBusiness Management &amp; Information Technology. Mugore rangu rechitatu ndainge ndave kushanda kune imwe kambani yaita zvekugadzira mawebhusaiti. Ndakawana basa iri mushure mekunge ndatadza kuwana basa kumabhanga. Kunyangwe hazvo zvinhu zvisina kuenda sezvandaive ndakaronga, ndinofara kuti hazvina kunyatso enda nenzira yangu. Saka muna 2017 ndaigadzira mawebhusaiti ndichishandisa HTML, CSS, PHP, JavaScript uye Joomla iyo yaive iyo inokurudzirwa kukambani kwandaive. Panguva iyi ndaiziva nezve WordPress asi ndakanga ndisingaishandisi.</p>
<h3>Kuwanana neWordPress</h3>
<p>Rimwe zuva pandakanga ndichishanda ndakaona <a href="https://heropress.com/essays/wordpress-opened-whole-new-world/">Thabo Tswana</a> akauya kuzopa mumwe mukomana wandayishanda naye chinyoreso cheWooCommerce. Ndakanga ndisingazive kuti WooCommerce yaive chii asi ndakafarira chinyoreso nehembe ye WooCommerce yaanga akapfeka. Ndakamubvunza nezvazvo akatsanangura kuti WooCommerce yaive chii. Saka nekudawo zvakanaka, zvemahara ndakaenda pawebhusaiti yeWordCamp Harare ndikabata zvimbo zvegore iroro. Ndakazvipira kubatsirawo vamwe vekuWordPress kuWordCamp Harare. Nerubatsiro kubva kunaThabo ndakagadzira webhusaiti yangu yekutanga yeWordPress vhiki rakatevera .</p>
<p>Mushure mekunge ndaitawo chipato cheavo vanoshandisa WordPress ndakanga ndakuenda kumisangano yeWordPress yaitwa muHarare. Takaita musangano wevakadzi chete muna 2018. Vakadzi vazhinji vakauya kumusangano uyu. Tainga takasununguka kukurukura zvinhu zvakawanda. Takakurukura pamusoro pemutsauko uripo pakati peWordPress.com neWordPress.org takagovana maonero ekugadzirisa rusarura kubasa nezvimwewo.</p>
<p><a href="https://s20094.pcdn.co/wp-content/uploads/2021/09/20180324_105352-min.jpg"><img /></a></p>
<h3>Nguva yandakatanga kushandisa WordPress</h3>
<p>Muna 2018, kurongwa kweWordCamp Harare kwakatungamirwa kekutanga nemusikana ainzi <a href="https://tapiwanashe.com/">Tapiwanashe Manhobo</a> (waiva mufaro mukuru). Ndakanga ndiri mumwe wevairongawo naye. Hurongwa hwekuronga WordCamp Harare mugore iri hwainetsa pamusaka pekuoma kwehupfumi wemuZimbabwe, zvisineyi takaita rombo rakanaka nokuti takawana rubatsiro kubva kunevamwewo vanhu vakatiwedzera mari. Pakupedzisira, zvese zvakabudirira zvakanaka. Takarongawo WordCamp yevana varipasi pemakore gumi nechishanu, munokwanisa kuverenga pamusoro pezuva iri <a href="https://thelmachido.wordpress.com/2019/11/21/wordpress-juniours-first-edition/">pawebhisaiti yangu apa</a>.</p>
<p>Mushure mekuita WordCamp yevana, takave nevamwe vanhu veWordPress aifarira kukurudzira vana kuti vagamuchire ICT. Muna 2019 takanga tisina kuronga kuve neWordCamo yeVana nekuda kwezvimhingamupinyi zvemari asi chakatishamisa ndechekuti takawana mari kubvawo kune vamwe. Takaita Camp iyi pa<a href="https://cttzim.org/">Centre for Total Transformation</a> chinova chikoro chisiri chepamutemo chinodzidzisa vana vanotambura. Tadzidzisa vana ava pamusoro peWordPress, Computer Hardware uye Software.</p>
<div class="wp-video"><a href="https://thelmachido.me/vid.mp4">https://thelmachido.me/vid.mp4</a></div>
<p>Ndofarira WordPress zvakanyanya nekuda kweavo varimu nharaunda yacho, ini ndinonakidzwa nekuenda kumaWordCampi, kusangana nevanhu vatsva uye kungo dzidza zvinhu zvitsva. Gore rakapera ndakakwanisa kuyambuka muganhu weZimbabwe ndichienda kuWordCamp Johannesburg, dai pasina kuti 2020 nyika dzepasi rino dzakawirwa nedenda reCOVID 19 zvimwe ndingadayi ndakaenda kuWordCamp Capetown. Zvisinei hazvo kana denda ranani zvimwe ndichakwanisa kufamba ndichienda kumaWordCamp edzimwe nyika.</p>
<h3>Kukowa zvandakadyara</h3>
<p>Zvichakadaro, chirongwa changu chekuvandudza hunyanzvi hwangu hachina kumira. Kunyangwe ini ndichiri kukwanisa kubika kodhi muC uye Java, ikozvino, ndasanganisirawo WordPress PHP. Zvaive zvisiri nyore kusvika apa, zvakatora kuzvishingisa nekushanda nesimba. Ndinofara mwari aiva neni pamufambo wangu uyu.</p>
<p>Muna Mbudzi gore rakapera, ndaive ndichigadzira mawebhusayiti apo nditsvaga basa. Pasina nguva ndakataura na<a href="https://zw.linkedin.com/in/trust-nhokovedzo">Trust Nhokovenzo</a> uyo akaandipa basa mukambani yake, kambani iyi inonzi <a href="https://calmlock.co.zw/">Calmlock Digital Marketing Agency</a>.</p>
<p>Pane zvimwe zvakawanda kuWordPress zvandisati ndapinda mazviri. Nhaizvozvo kunyangwe ndiri kupedzisa kunyora kwangu apa, nyaya yehupenyu wangu ichaenderera mberi&#8230;</p>
<p>Kusvikira nguva inotevera &#8230;</p>
<p><strong>&#8230;. tsvaga chinangwa chako, chiite mushe mushe ..</strong></p>
<p>The post <a rel="nofollow" href="https://heropress.com/essays/hello-world-discovering-the-world-through-wordpress/">Hello World &#8211; Hevo Nyika</a> appeared first on <a rel="nofollow" href="https://heropress.com">HeroPress</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 23 Sep 2020 06:00:10 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Thelma Mutete";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:17;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:102:"WPTavern: WordPress Contributors Debate Dashboard Notice for Upcoming Facebook oEmbed Provider Removal";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105132";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:249:"https://wptavern.com/wordpress-contributors-debate-dashboard-notice-for-upcoming-facebook-oembed-provider-removal?utm_source=rss&utm_medium=rss&utm_campaign=wordpress-contributors-debate-dashboard-notice-for-upcoming-facebook-oembed-provider-removal";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5885:"<p>WordPress contributors are discussing different strategies for responding to Facebook and Instagram <a href="https://wptavern.com/upcoming-api-change-will-break-facebook-and-instagram-oembed-links-across-the-web-beginning-october-24">dropping unauthenticated oEmbed support</a>&nbsp;on October&nbsp;24. WordPress will be removing both Facebook and Instagram as oEmbed providers. When a user attempts to embed content by pasting a URL as they have in the past, they may not understand why it no longer works. They may assume that WordPress broke embeds, causing an increase in the support burden for this change.</p>



<p>A few participants on the <a href="https://core.trac.wordpress.org/ticket/50861">trac ticket</a> for this issue have suggested WordPress detect users who will be impacted and attempt to warn them with a notice.</p>



<p>&ldquo;Since this may impact users unknowingly, it is possible to push a dashboard notice to users who have Facebook/Instagram embeds in their content, showing for site admins, as a one-off that can be dismissed,&rdquo; Marius Jensen said.</p>



<p>&ldquo;We&rsquo;ve previously done post-update-processing to clean up comments, so the idea of looking over content for an embed isn&rsquo;t completely outlandish, and would help with those who don&rsquo;t follow WordPress&rsquo; usual channels to learn of this.&rdquo;</p>



<p>Others don&rsquo;t see the necessity. &ldquo;Why should we make exception here?&rdquo; Milan Dini&#263; said. &ldquo;It&rsquo;s not the first time oEmbed support was discontinued for a provider, and I don&rsquo;t remember anything specific was done then.&rdquo;</p>



<p>There is still some uncertainty about what will happen with existing oEmbeds after Facebook updates its API. During a recent core developer meeting, Helen Helen Hou-Sand&iacute; confirmed that WordPress does not clear&nbsp;oEmbed&nbsp;caches regularly. &ldquo;Technically&nbsp;oEmbed&nbsp;caches are cleared if you save and a valid response is returned, we do not do cron-based garbage collection,&rdquo; Hou-Sand&iacute; said.</p>



<p>In a post today on the core development blog, Jake Spurlock assured users and developers that the existing embeds added before Facebook&rsquo;s API change should still work:</p>



<blockquote class="wp-block-quote"><p>Because oEmbed responses are cached in the database using the hidden&nbsp;<code>oembed_cache</code>&nbsp;post type, any embed added prior to the October 24th deadline will be preserved past the deprecation date. These posts are not purged by default in WordPress Core, so the contents of the embed will persist unless manually deleted.</p></blockquote>



<p>Marius Jensen cautioned that there is still the possibility that existing embeds may not work going, depending on what Facebook does.</p>



<p>&ldquo;We don&rsquo;t know how they plan on implementing the use of unauthorized embed attempts,&rdquo; Jensen said. &ldquo;It could not return an embed code and your link would remain a plain link, or maybe they decide to return some kind of embedded &lsquo;unauthorized&rsquo; content. I don&rsquo;t think anyone has heard any specifics on how Facebook plans on doing this, so we&rsquo;re all just kinda waiting to either hear more, or see what happens.&rdquo;</p>



<p>Jensen said WordPress doesn&rsquo;t re-check the cached results except when something changes with the post, but there may be plugins that clean up temporary data that may create an unpredictable outcome.</p>



<p>&ldquo;The reliability of the caches are hard to determine (and being caches, it&rsquo;s sort of in the term that it&rsquo;s not guaranteed to always be there, but rather fetched and saved for a while when needed),&rdquo; Jensen said.</p>



<p>Ideally WordPress&rsquo; oEmbed caches will prevent millions of embeds from breaking, but it&rsquo;s still unknown how Facebook and third party plugins could change things.</p>



<p>Coming off a rocky 5.5 core update that deprecated jQuery Migrate and flooded official support forums with&nbsp;<a href="https://wordpress.org/search/5.5?in=support_forums">reports of broken sites</a>, some contributors are wary of having another situation where users are left in the dark.</p>



<p>&ldquo;I think a dashboard notice is desirable,&rdquo; Jon Brown said. &ldquo;Otherwise we&rsquo;re not preemptively warning people in a way they can prepare and transition to another solution. We&rsquo;re letting them know the same instant it&rsquo;s going to break (when editing a specific post). I don&rsquo;t think we can safely assume cached data is going to persist forever either, plenty of routines out there purge transient data before its stated expiration date.</p>



<p>&ldquo;I see this as potentially being similar to the problems seen in dropping JQM. It&rsquo;ll cause <em>avoidable and silent breakage</em> client side without even any error logging for a site developer to pick up on. In hindsight, what ideally would have happened with JQM would have been incorporating the detection code from Enable jQuery Migrate Helper into core temporarily, or simply installing that plugin automatically on behalf of users.&rdquo;</p>



<p>Brown suggested WordPress detect calls to the cached embeds and warn users before the calls have the chance to fail so they can consider enabling a plugin to keep their embeds working more reliably.</p>



<p>The discussion remains open in the make.wordpress.org/core <a href="https://make.wordpress.org/core/2020/09/22/facebook-and-instagram-embeds-to-be-deprecated-october-24th/">post</a> and the corresponding <a href="https://core.trac.wordpress.org/ticket/50861">trac ticket</a>. Spurlock said WordPress will likely remove Facebook and Instagram oEmbed providers in the upcoming 5.6 release (scheduled for December 8) but it could also be shipped in a 5.x minor release that happens after October 24. </p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 23 Sep 2020 04:28:56 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:18;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:65:"WPTavern: Gutenberg Hub Launches Landing Page Templates Directory";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105009";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:175:"https://wptavern.com/gutenberg-hub-launches-landing-page-templates-directory?utm_source=rss&utm_medium=rss&utm_campaign=gutenberg-hub-launches-landing-page-templates-directory";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7657:"<img />



<p class="has-drop-cap">Munir Kamal has created <a href="https://wptavern.com/copy-and-paste-editor-blocks-via-gutenberghubs-block-library">copy-and-paste blocks</a>. He has built <a href="https://wptavern.com/gutenberg-hub-launches-collection-of-100-block-templates">sections or &ldquo;patterns&rdquo;</a> from those blocks. He has created a plugin that allows users to completely customize the two features via block options. Yesterday, he <a href="https://gutenberghub.com/introducing-gutenberg-landing-page-templates/">released an initial offering</a> of 22 landing page templates that build upon his earlier work.</p>



<p>Gutenberg Hub can almost be called his <em>magnum opus</em>, at least at this stage of his career. It is a continually growing library of free tools for WordPress&rsquo;s block editor.</p>



<p>Like previous projects, Gutenberg Hub&rsquo;s landing templates require the <a href="https://wptavern.com/control-block-design-via-the-editorplus-wordpress-plugin">EditorPlus plugin</a>. This plugin is essentially a suite of design controls for the core WordPress blocks. The templates make use of these options by default. Given the limitations of the block editor&rsquo;s current design controls, the use of such a plugin is necessary. Otherwise, there would be few other ways to realistically create a template system like this.</p>



<p>Currently, users must copy the block code &mdash; via a convenient &ldquo;copy&rdquo; button &mdash; from the Gutenberg Hub website and then paste it in the editor. It is not an ideal situation, and I have been asking Kamal whether he would consider building a template inserter for months now.</p>



<p>This time around, he preemptively said, &ldquo;And, by the way, I am already working on adding a Template Inserter in my EditorPlus plugin. That will allow users to browse and insert these templates directly from Gutenberg without leaving the website.&rdquo;</p>



<p>He knew the question was coming. No need for me to ask again. He was unable to share a current screenshot of what the inserter looks like, but he is asking for feedback on what people expect of the user experience and interface.</p>



<p>&ldquo;Earlier, I created a template inserter similar to other blocks plugins, but later I changed my mind and thought that I should integrate with the Gutenberg Patterns API and load the templates into the &lsquo;patterns&rsquo; panel in the block inserter,&rdquo; he said. &ldquo;But, I am having a few issues and thinking about going back to the original idea to have a Templates button on the top toolbar that opens a popup window to browse and filter templates that users can insert on a click.&rdquo;</p>



<p>For now, it is still early. However, at least it is on the long-term roadmap and being worked on.</p>



<h2>The Landing Page Templates</h2>



<img />Testing the photography template (with minor adjustments).



<p class="has-drop-cap">At the moment, Gutenberg Hub offers <a href="https://gutenberghub.com/template-category/pages/">22 landing page templates</a>. The &ldquo;page&rdquo; terminology may not mean &ldquo;full page.&rdquo; It simply depends on the active theme. Some themes have an open-canvas type of template that allows users to create the entire page via the editor. However, that is not a common feature, so these page templates will be confined to the post content area in most cases.</p>



<p>The templates also work better with themes that have at least a full-width or no-sidebar option. End-users will want a lot of breathing room to use the templates and tinker with their designs.</p>



<p>Kamal has built templates that stretch across a variety of industries. From restaurants to gyms to education to fashion, there is a lot to choose from right now. He promises more are on the way and at least a 23rd template in the next few days.</p>



<p>&ldquo;For the niches, I did some research from the top WordPress and HTML marketplaces and found the following most common or popular niches,&rdquo; he said. &ldquo;I think I will stick with these niches unless I get some more recommendations.&rdquo;</p>



<p>In comparison, <a href="https://wptavern.com/redux-framework-relaunches-focuses-efforts-on-gutenberg-templates">Redux Templates</a> offers access to over 1,000 sections and templates. Of course, there are trade-offs, such as some of those being commercial and the plugin typically requiring other third-party plugins. While quantity is not the only thing to look at, it proves there are miles of landscape that Gutenberg Hub&rsquo;s templates have not yet explored. But, it is merely the beginning.</p>



<p>Gutenberg Hub&rsquo;s full-page templates are not quite as plug-and-play as its blocks and section templates. This is not so much a fault from the developer&rsquo;s end. It is an issue of the platform, which is constantly being updated, and the range of support from current themes. End-users will start seeing some of the current limitations of the system when a layout does not quite look right with one theme but does with another. Or, if their theme has not been updated to support a new feature, such as the Social Links block, the typical horizontal menu design will likely be a normal vertical list of links instead.</p>



<p>These are not insurmountable issues. Gutenberg and themes need more time to mature before projects like Gutenberg Hub&rsquo;s landing templates are perfect or at least as close to perfect as can be expected.</p>



<p>There are some things that Gutenberg Hub could improve with its templates. With several that I tested, I needed to switch specific blocks to be full width. This should be set up as the default with templates that are clearly meant to be full width in the example screenshots available on the site. It is a minor issue, but correcting this in the editor fixed several layout issues I was having when using the templates.</p>



<h2>Monetization Plans</h2>



<p class="has-drop-cap">The second question that Kamal has not been prepared to answer fully over the past several months is how he will monetize Gutenberg Hub. Eventually, developers need some return on their investment when building tons of free tools. Many would do it all for free as long as their bills somehow got paid, but the reality is that there will come a tipping point where their projects need funding for long-haul maintenance.</p>



<p>Kamal said he has laid the groundwork for funding but has not finalized anything yet. Currently, he is working on three ideas:</p>



<ul><li>Creating a pro version of his EditorPlus plugin.</li><li>Offering premium templates and blocks but is looking for a talented designer to work with.</li><li>Using ads specific to Gutenberg users, but he is not a fan of going this route or ads in general.</li></ul>



<p>He is open to feedback on how to best monetize the website and its projects. However, he said he is unwilling to compromise on giving away current and future free templates and tools.</p>



<h2>Future Gutenberg Projects</h2>



<p class="has-drop-cap">Kamal said he does not have any new Gutenberg-related projects in the pipeline. The current plan is to work on what he has already created, which is a large ecosystem of Gutenberg tools that somehow work together.</p>



<p>Outside of blocks, templates, and plugins, he is beginning to write more free tutorials on the Gutenberg Hub blog and focusing on <a href="https://www.youtube.com/GutenbergHub">creating videos</a> around the project, including a new tutorial <a href="https://www.youtube.com/playlist?list=PLfVnkTCddAJ2HMmjw1o12XP7TAEoOV5oE">series for beginners</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 22 Sep 2020 21:05:19 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:19;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:97:"WPTavern: WordPress Mobile Engineers Propose Dual Licensing Gutenberg under GPL v2.0 and MPL v2.0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105025";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:239:"https://wptavern.com/wordpress-mobile-engineers-propose-dual-licensing-gutenberg-under-gpl-v2-0-and-mpl-v2-0?utm_source=rss&utm_medium=rss&utm_campaign=wordpress-mobile-engineers-propose-dual-licensing-gutenberg-under-gpl-v2-0-and-mpl-v2-0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6556:"<p>During a Q&amp;A session at WordCamp Europe 2020 online, Matt Mullenweg mentioned that Gutenberg contributors were considering dual licensing for embedding Gutenberg in mobile apps, along with the requirement that they would need to get an agreement from all contributors. WordPress mobile engineer <a href="https://bia.is/">Maxime Biais</a> has just published a <a href="https://make.wordpress.org/core/2020/09/21/proposal-dual-licensing-gutenberg-under-gpl-v2-0-and-mpl-v2-0/">proposal</a> for discussion, recommending dual licensing the editor under GPL v2.0 and MPL v2.0.</p>



<p>&ldquo;The GPL v2.0 license is a blocker for distributing the Gutenberg library in proprietary mobile apps,&rdquo; Biais said in the corresponding <a href="https://github.com/WordPress/gutenberg/issues/23651">GitHub issue</a>. &ldquo;Currently the only known users of Gutenberg on mobile are the WordPress mobile apps which are under GPL v2.0 (<a href="https://github.com/wordpress-mobile/WordPress-Android">WordPress for Android</a>,&nbsp;<a href="https://github.com/wordpress-mobile/WordPress-iOS">WordPress for iOS</a>). Mobile apps under the GPL v2.0 are not common and this limits Gutenberg usage in many apps.</p>



<p>&ldquo;Rich text editor libraries in the mobile space are lacking. There is no well known open source rich text editor for Android or iOS. We believe that Gutenberg could be a key library for many mobile apps, but that will never happen with the GPL v2.&rdquo;</p>



<p>Mobile app developers are limited by the GPL, because it requires the entire app to be distributed under the same license. The team is proposing dual licensing under MPL v2.0, a weaker copyleft license that is often considered to be more &ldquo;business-friendly.&rdquo; It allows users to combine the software with proprietary code. MPL v2.0 requires the source code for any changes to be available under the MPL, ensuring improvements are shared back to the community. The rest of the app can be distributed under any terms with the MPL v2.0 code included as part of a &ldquo;larger work.&rdquo;</p>



<p>&ldquo;The idea here is to keep some of the WordPress-specific modules under the GPL v2.0 only; some of them are not needed and not relevant for using Gutenberg in another software. Ideally, there would be a different way of bundling the project for being used in WordPress or in a non-GPL software,&rdquo; Biais said.</p>



<p>The GitHub ticket has several comments from developers who hope to be able to use the editor in their own projects. Radek Pietruszewski, tech lead for a collaborative todo app called&nbsp;<a href="https://nozbe.com/">Nozbe Teams</a>, has been requesting a relicensing of Gutenberg since October 2019.</p>



<p>&ldquo;Our tech stack is essentially React on web and React Native on iOS and Android,&rdquo; Pietruszewski said. &ldquo;We&rsquo;re a tiny company, and so we share &gt;80% of app&rsquo;s codebase between these 3 platforms.</p>



<p>&ldquo;Our app sorely lacks a WYSIWYG editor. We had a working implementation on web, but we decided to scrap it, because there was no way to port it on iOS and Android. There are pretty much no viable rich text editors for iOS or Android, yet alone both. But even then, shipping three completely separate, but somehow compatible editors would be a vast amount of work.&rdquo;</p>



<p>When Peitruszewski originally made his case to the mobile team, he identified Gutenberg/Aztec as a basic infrastructure that has the potential to enable many different apps:</p>



<blockquote class="wp-block-quote"><p>And that infrastructure is sorely lacking. There are very few rich text editor libraries on both iOS and Android &mdash;&nbsp;and most of them suck. And if you want an editor that has a shared API for both platforms&hellip;&nbsp;you&rsquo;re stuck. There are no options &ndash; Gutenberg is the only game in town (and it&rsquo;s really good).</p><p>And it&rsquo;s very hard to create this infrastructure. WYSIWYG editors are very hard, and it takes entire teams years to develop them (and they still usually suck). Almost no-one has the resources to develop it just for themselves, and if they do, they&rsquo;re unwilling to open-source it.</p></blockquote>



<p>Automattic&rsquo;s mobile app engineers have <a href="https://twitter.com/danroundhill/status/1296941098393190401">struggled to get regular contributions to the apps</a>, despite them being open source. Dual licensing Gutenberg could open up a new world of contributors with the editor being used more widely across the industry.</p>



<p>&ldquo;While we might not be big enough to be able to tackle a challenge of developing a rich text editor from scratch, we&rsquo;re big enough to contribute features and bug fixes to open source projects,&rdquo; Pietruszewski said.</p>



<p>Matt Mullenweg was the first comment on Biais&rsquo; post in favor of the change: </p>



<blockquote class="wp-block-quote"><p>I think&nbsp;Gutenberg&nbsp;has a chance to become a cross-CMS standard, giving users a familiar interface any place they currently have a rich text box. There are hundreds and hundreds of engineers at other companies solving similar problems in a proprietary way, it would be amazing to get them working together but a huge barrier now is supporting Gutenberg in mobile apps, which every modern web service or CMS has. (Hypothetically, think of Mailchimp as a possible consumer and collaborator here, but it could be any company, SaaS, or other&nbsp;open source&nbsp;CMS.)</p></blockquote>



<p>Unless any major blockers come up in further discussion, this dual licensing change appears to be on track to move forward. Biais noted that a&nbsp;<a href="https://github.com/wordpress-mobile/AztecEditor-Android/pull/922">similar&nbsp;license change has already happened on Aztec-Android</a>&nbsp;and&nbsp;<a href="https://github.com/wordpress-mobile/AztecEditor-iOS/issues/1299">Aztec-iOS</a>. The last hurdle is gaining the approval of all the original code contributors or rewriting the code for those who decline to give approval. </p>



<p>Once Gutenberg can be used under the MPL v2.0, the editor will gain a broader reach, with people already on deck wanting to use it. Other companies and projects that are normally outside WordPress&rsquo; open source orbit will also have the opportunity to enrich Gutenberg&rsquo;s ecosystem with contributions back to the project. At the same time, the MPL 2.0 protects Gutenberg from companies that would try to re-release the code as a closed-source project.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 21 Sep 2020 22:59:10 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:20;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:124:"WPTavern: GitHub to Use ‘Main’ Instead of ‘Master’ as the Default Branch on All New Repositories Starting Next Month";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=105014";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:269:"https://wptavern.com/github-to-use-main-instead-of-master-as-the-default-branch-on-all-new-repositories-starting-next-month?utm_source=rss&utm_medium=rss&utm_campaign=github-to-use-main-instead-of-master-as-the-default-branch-on-all-new-repositories-starting-next-month";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4844:"<p class="has-drop-cap">In August, GitHub <a href="https://github.blog/changelog/2020-08-26-set-the-default-branch-for-newly-created-repositories/">announced that it would change</a> the &ldquo;master&rdquo; branch name for all new repositories created on the platform to &ldquo;main&rdquo; starting October 1. The date is less than two weeks away, and WordPress developers need to be prepared for the change if they use the service for version control or project management.</p>



<p>The larger tech and web development community began conversations through various venues in June, a time in which the Black Lives Matter was gaining more traction in the U.S. and worldwide. The discussion centered on removing any terminology that could be discriminatory or oppressive to specific groups of people. This ongoing discussion has shown that there is a deep division over whether such changes are necessary or even helpful.</p>



<p>The WordPress community is dealing with this division itself. Aaron Jorbin <a href="https://make.wordpress.org/core/2020/06/18/proposal-update-all-git-repositories-to-use-main-instead-of-master/">proposed a change</a> at the same time to rename the default branch name on WordPress-owned repositories. Through discussion on his post and elsewhere, the community landed on &ldquo;trunk,&rdquo; which keeps WordPress projects in line with its SVN roots.</p>



<p>&ldquo;To close the circle on this, a decision was made in June and earlier today (August 19),&rdquo; <a href="https://make.wordpress.org/core/2020/06/18/proposal-update-all-git-repositories-to-use-main-instead-of-master/#comment-39524">wrote Helen Hou-Sand&iacute;</a>, a lead WordPress developer, in the comments of the original proposal. &ldquo;I updated the default branch name for new GitHub repositories under the WordPress organization to be trunk after GitHub enabled early access to that feature.&rdquo;</p>



<p>As evidenced by the comments on the <a href="https://wptavern.com/proposal-to-rename-the-master-branch-from-wordpress-owned-git-repositories">Tavern&rsquo;s coverage of the proposal</a> and those on the original post, the WordPress development community as a whole did not support this decision.</p>



<p>Jorbin has updated several of WordPress&rsquo;s repositories and switched them to use <code>trunk</code> instead of <code>master</code>. However, there are still some lingering projects yet to be updated, including the primary <a href="https://github.com/WordPress/WordPress">WordPress</a> and <a href="https://github.com/WordPress/wordpress-develop">WordPress Develop</a> repositories. He left a <a href="https://make.wordpress.org/core/2020/06/18/proposal-update-all-git-repositories-to-use-main-instead-of-master/#comment-38817">comment with an updated lis</a>t in June. There is no public word on whether the existing, leftover projects will be changed.</p>



<h2>WordPress Developer Preparations</h2>



<img />Customizing the default branch for a user&rsquo;s GitHub repositories.



<p class="has-drop-cap">GitHub is merely changing the default branch name for new repositories starting on October 1. This change does not affect existing repositories. Individual users, organization owners, and enterprise administrators can customize the default branch via their account settings now before the switch is made. Owners can also change the default branch name for individual repositories.</p>



<p>The biggest thing that developers need to watch out for is their tooling or other integrations that might still require the master branch. There may be cases where an alternative default branch name will break workflows. If planning to use a different branch name, the best thing to do right now is to spin up the tools you use on a test repository. If something breaks, check to see whether the particular tool you are using will be getting an update. In most cases, this should not be a problem because customized default branch names will be an industry standard.</p>



<p>The great thing about how GitHub is rolling out this feature is that it offers a choice. Those who believe that &ldquo;master&rdquo; is oppressive can change the branch name to something they feel is more inclusive. For those who believe otherwise, they can keep their master branch. But, everyone can use the branch name they prefer.</p>



<p>For existing repositories, GitHub is asking that developers be patient for now. The company is investing in tools to make this a seamless experience <a href="https://github.com/github/renaming#later-this-year">later this year</a>. There are a few technical hurdles to clear first.</p>



<p>Developers should read the full GitHub guide on <a href="https://docs.github.com/en/github/administering-a-repository/setting-the-default-branch">setting the default branch</a> for more information.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 21 Sep 2020 20:39:55 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:21;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:125:"WPTavern: Matt Mullenweg and Jamstack Community Square Off, Making Long-Term Bets on the Predominant Architecture for the Web";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104428";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:293:"https://wptavern.com/matt-mullenweg-and-jamstack-community-square-off-making-long-term-bets-on-the-predominant-architecture-for-the-web?utm_source=rss&utm_medium=rss&utm_campaign=matt-mullenweg-and-jamstack-community-square-off-making-long-term-bets-on-the-predominant-architecture-for-the-web";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:19953:"<p>Over the past two weeks, Matt Mullenweg and Jamstack community leaders have forged a new rivalry, after Mullenweg told <a href="https://thenewstack.io/wordpress-co-founder-matt-mullenweg-is-not-a-fan-of-jamstack/">The New Stack</a> that he sees Jamstack as &ldquo;a regression for the vast majority of the people adopting it.&rdquo;  </p>



<p>&ldquo;The usability and functionality is actually lower,&rdquo; Mullenweg said to Richard MacManus in an email. &ldquo;Even rebuilding sites in Jamstack harkens back to the Movable Type days, where the bigger your site gets the slower it is to rebuild or update templates.&rdquo; </p>



<p>Mullenweg also described a &ldquo;fragile&rdquo; chain of services required to run Jamstack sites.</p>



<p>&ldquo;You can patch together a dozen services, each with its own account and billing, for hundreds of dollars a month, to get a similar result you&rsquo;d have for a few dollars a month using WordPress on shared hosting,&rdquo; he said. &ldquo;And it would be more fragile, because the chain is only as strong as its weakest link. You are chaining together different toolsets, logins, billing, hosting&hellip; any part of it going down can break the entire flow.&rdquo;</p>



<p>Mullenweg has since further <a href="https://wptavern.com/matt-mullenweg-clarifies-jamstack-remarks">clarified his comments</a> while also doubling down on his original premise, saying that &ldquo;there isn&rsquo;t a vast number of people adopting Jamstack in the first place, and those who do are probably fully aware of the tradeoffs.&rdquo; He outlined how he sees WordPress providing a better experience for users in terms of performance, security, scaling, and developer experience.&nbsp;</p>



<p>Mullenweg&rsquo;s provocative remarks set off a chain of open letters from the CEO&rsquo;s of Jamstack-related services. They are convinced that the LAMP stack is on its way out and that Jamstack is on the precipice of replacing its incumbent as the most dominant architecture of the web. </p>



<p>Ohad Eder-Pressman, co-founder and CEO of <a href="https://www.stackbit.com/">Stackbit</a>, was the first to fire back. He believes that Jamstack is a &ldquo;disruptive innovation&rdquo; that may appear to be inferior now because it is still relatively low level and new when compared to a 17-year old product like WordPress.</p>



<p>&ldquo;We should be asking whether Jamstack is a better architecture than LAMP and what gaps currently exist with products and solutions built on top of the Jamstack,&rdquo; Eder-Pressman said. He agreed that Jamstack tools are still largely focused on developers but makes a bold prediction on the stack&rsquo;s future reach:</p>



<blockquote class="wp-block-quote"><p>The achievements of WordPress in terms of market share and how it democratized early web publishing are amazing. When it comes to architecture I think it was best in class for the early 2000s but it&rsquo;s time to move forward. We already see cohorts of websites where Jamstack adoption crosses 20% &ndash; it&rsquo;s no longer a question of if the Jamstack becomes the predominant architecture for the web but a question of when. The cliche is a cliche but it also rings true &ndash;&nbsp;<strong>First, they ignore you, then they laugh at you (we are here), then you win</strong>.</p></blockquote>



<p>Eder-Pressman agreed with Mullenweg regarding Jamstack&rsquo;s lower usability and functionality but touted the architecture as &ldquo;infinitely more resilient&rdquo; due to being hosted on a CDN. He admitted that rebuilding larger sites can be slow but cited developments like build parallelization, build cache, partial rebuild, and incremental static regeneration as&nbsp;optimizations as efforts the Jamstack ecosystem&nbsp;is exploring to solve this known issue.</p>



<p>Netlify&nbsp;CEO Mathias Biilmann, who originally coined the term &ldquo;Jamstack,&rdquo; goes so far as to hail &ldquo;the end of the WordPress era&rdquo; in his <a href="https://www.netlify.com/blog/2020/09/15/on-mullenweg-and-the-jamstack-regression-or-future/">article</a> refuting Mullenweg&rsquo;s remarks. </p>



<p>&ldquo;There&rsquo;s often a moment right around the time when an old technology is about to be displaced by the next thing, where the main leader in the field goes out and makes a strong argument that absolutely nothing is happening,&rdquo; Biilmann said. &ldquo;A moment that ends up looking like a turning point where the new was undeniably present enough to be worth being in denial about.&rdquo;</p>



<h2>The Bet: By September 2025, what will be the predominant architecture for the web?</h2>



<p>In a brief exchange on Twitter, Mullenweg and Eder-Pressman made a wager for five years into the future, to see if Eder-Pressman&rsquo;s prediction will hold up, as measured by the Alexa top 10k. In order for Jamstack to become the predominant architecture for the web, it will need to surpass WordPress&rsquo; numbers, which are currently hovering at <a href="https://trends.builtwith.com/cms/WordPress">39.75%</a> (via BuiltWith) and <a href="https://w3techs.com/technologies/details/cm-wordpress">38.4%</a>&nbsp;(via w3techs).</p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">They currently have us ~37% of top 10k. I wonder if you're undercounting us with YC companies too? <a href="https://t.co/ki9Ng3DGqI">https://t.co/ki9Ng3DGqI</a></p>&mdash; Matt Mullenweg (@photomatt) <a href="https://twitter.com/photomatt/status/1302048647882784769?ref_src=twsrc%5Etfw">September 5, 2020</a></blockquote>
</div>



<p>&ldquo;I&rsquo;m happy to make a long bet: 1 year, 5 years, 10 years,&rdquo; Mullenweg said in another <a href="https://twitter.com/photomatt/status/1306368508792504321">thread</a> in response to Netlify&rsquo;s CEO. &ldquo;We&rsquo;re building and rebuilding WordPress to be generational. We&rsquo;ve navigated and created bigger architectural shifts in the past, and will do so in the future.&rdquo;</p>



<p>&ldquo;I&rsquo;m a developer, founder, and investor in the space of web technologies &ndash; if I&rsquo;m not willing to engage in a public discussion and share my predictions for where the web is heading then what merit does my work have?&rdquo; Eder-Pressman said when I asked him why he was willing to make this public wager.</p>



<p>&ldquo;I felt compelled given Mullenweg&rsquo;s comments and what I believe is the lack of appreciation for how much adoption and momentum Jamstack technologies already have. If anything I would say that my bet is actually pretty cautious.&rdquo;</p>



<p>Eder-Pressman and his team at Stackbit are working on a tool to track Jamstack adoption across the web, as BuiltWith does not yet have a Jamstack stat panel that correctly aggregates all the technologies associated with this relatively new category of websites.</p>



<p>&ldquo;We&rsquo;ve built an internal tool that tracks adoption of Jamstack technologies across different cohorts of websites which we find informative,&rdquo; he said. &ldquo;This isn&rsquo;t unlike what say Builtwith provides except that we track a few technologies that they don&rsquo;t and we bundle this into a Jamstack adoption indicator. We&rsquo;ve used this internally up until now and are planning to release some public facing version of it later this year.&rdquo;</p>



<p>As the CEO of Stackbit, a service that cranks out Jamstack sites in 60 seconds while bypassing any requirement to use the command line or download npm packages, Eder-Pressman is actively engaged in trying to bring this technology stack to the masses. The company aims to solve the very problems that Mullenweg identified in his critical comments, as is evident in the marketing copy on the Stackbit website. It acknowledges that piecing together a Jamstack website can be challenging even for developers:</p>



<blockquote class="wp-block-quote"><p>&ldquo;In a fragmented Jamstack environment, developers struggle to glue products together when trying out the latest tech. Stackbit connects the best tools on the market, and helps them play together.&rdquo;</p></blockquote>



<p>A year ago, Stackbit caught my attention and I contacted them to find out when WordPress would land among their list of CMS import options. At that time they said they were considering WordPress as a headless CMS option but did not have it on the immediate roadmap. One year later, Stackbit is no closer to building import capabilities for the most popular CMS on the web.</p>



<p>&ldquo;It&rsquo;s on the horizon but its not something we&rsquo;ve prioritized,&rdquo; Eder-Pressman said. &ldquo;WordPress is a full blown monolithic CMS. It has been used before as a headless CMS but there are better headless CMS choices out there. Even Mullenweg <a href="https://twitter.com/photomatt/status/1302028302530404353">agrees</a> it&rsquo;s a complicated premise.&rdquo;</p>



<p>When asked if his recent conversations have changed the company&rsquo;s plans to support WordPress imports, he said, &ldquo;No, it doesn&rsquo;t make us want to do this any more or less. I really enjoyed the conversation and am glad that Mullenweg recognizes the rise of the Jamstack so much so that he found it necessary to take aim at it. We as a company are driven by the market, user demand, growth opportunities and a healthy vision for the future of the web.&rdquo;</p>



<p>Jamstack will need to make itself accessible to the wide world of non-technical website owners if its advocates hope to capture any meaningful segment of the Alexa top 10k marketshare. Stackbit, for one, is still grossly underestimating WordPress&rsquo; ability to sustain its <a href="https://joost.blog/cms-market-share-june-2020-analysis/">phenomenal growth</a>, and doesn&rsquo;t see the necessity for creating a simple path to convert WordPress users. Eder-Pressman believes that making Jamstack accessible starts with developers.</p>



<p>&ldquo;The Jamstack is an architecture which is winning the minds of developers around the world and across the web development stack,&rdquo; he said. &ldquo;Adoption for new architectures often begins with developers so I&rsquo;m excited to see a company like say Netlify boast over 1 million developers on its Jamstack platform.&rdquo; </p>



<p>Eder-Pressman&rsquo;s tool for measuring Jamstack adoption will need to produce some compelling data on the stack&rsquo;s growth, if his bet is going to materialize. While nearly every offering in the Jamstack ecosystem still falls squarely within the realm of experienced developers, it doesn&rsquo;t seem likely that five years is enough time for it to overtake WordPress as the predominant architecture for the web. WordPress hasn&rsquo;t achieved its dominance by prioritizing developer happiness over usability.</p>



<p>Looking at the numbers five years from now, will we see Jamstack overtake WordPress as the most popular way to build a website? Will Jamstack grow with developer usage and then plateau once it fails to reach regular people who don&rsquo;t have a git-based workflow at the top of their wishlists? Are we going to find Jamstack and WordPress neck and neck in the battle for the predominant architecture for the web? Those who work with a hybrid of both technologies see no need for this kind of rivalry.</p>



<h2>Shifting the conversation towards collaboration: &ldquo;Jamstack can be an opportunity for our industry, rather than a threat.&rdquo;</h2>



<p>&ldquo;Reading Mullenweg&rsquo;s comments and the responses from CEOs in the Jamstack community make me feel caught in the middle and a bit frustrated,&rdquo; <a href="https://www.getshifter.io/">Shifter</a> COO Daniel Olson said. &ldquo;I see friction between two communities that have so much in common.&rdquo;</p>



<p>Olson has been a proponent of using Jamstack with WordPress for the past four years since launching Shifter, a static site generator and hosting company that supports headless WordPress sites on the Jamstack. </p>



<p>&ldquo;If you look for the most secure, cost-effective way to build and host a high-traffic website today, the cross-section you&rsquo;ll arrive at is the Jamstack. Looking at how it offers each of those benefits, you will find inspiration and ways WordPress could do the same,&rdquo; Olson said. &ldquo;Rather than write something off wholesale, see what you can learn and apply it.&rdquo;</p>



<p>Olson said his mission is to bridge the gaps between WordPress and the benefits Jamstack offers, while working through its early days and messy parts, innovating on the tools that work.</p>



<p>&ldquo;We should be working together to address specific challenges and worry less about how we get there,&rdquo; Olson said. &ldquo;Some technologies are indeed a better fit for solving each of those challenges but you don&rsquo;t need to leave one ecosystem for the other to do it. You can share knowledge and best practices and discover what&rsquo;s possible. There&rsquo;s a good chance you&rsquo;ll end up creating something new, which is part of that innovation we need in our communities.&rdquo;</p>



<p>Jamstack hosting services for WordPress are eager to remind users that they don&rsquo;t have to go all in on the technology. You can have your JAM and spread it on top of WordPress, accommodating developers&rsquo; love for experimenting with new frontend technologies, while preserving the dynamic publishing power that has been refined over the past 17 years. These hybrid hosting companies aim to enable this without leaving users behind. </p>



<p>&ldquo;Matt is absolutely right that the usability and functionality of the Jamstack is lower,&rdquo; <a href="https://www.strattic.com/">Strattic</a> co-founder and CEO Miriam Schwab said. &ldquo;The Jamstack is a great example of technology that is incredibly appealing to developers, but the actual end users &ndash; writers, marketers, business owners &ndash; cannot use it. I&rsquo;ve heard many stories of major companies that have come to the decision to adopt Jamstack for all web development as a company-wide policy, only to find that their marketing team has gone rogue and is installing WordPress sites in order to get their job done.</p>



<p>&ldquo;The reason for this is like Matt said: every Jamstack site is a compilation of layers of services, and each layer has dozens of options available: you need a static site generator, a CMS, static hosting, and a CDN &ndash; and you need to tie it all together with version control. This is all cool and shiny, and the output is truly fantastic because when you have a site that&rsquo;s a collection of pre-rendered static files served up through a CDN it&rsquo;s fast, secure, scalable and stable. But then along comes marketing and they want to set up a landing page and they are totally dependent on their dev team and can&rsquo;t move forward without them. That defeats the purpose of a CMS-driven website! With WP, you get all the layers in one platform&hellip;but you don&rsquo;t get the awesome output.&rdquo;</p>



<p>Schwab said she sees WordPress having its age work both for it and against it, but ultimately she believes in enabling real world users to manage their own websites without having to rely on developers. </p>



<p>&ldquo;I&rsquo;ve seen many companies abandon WP for the shiny new stack, and then come back to it,&rdquo; Schwab said. &ldquo;Github is a good example of this &ndash; yes Github, the modern repository of cutting-edge code moved their blog off of WordPress, and then came back because it truly is the best tool for just getting your content out there. There aren&rsquo;t a zillion steps and integrations &ndash; you write content, click Publish, and that&rsquo;s it. It gets the job done, and the fanciest tools will never beat something that just gets the job done.&rdquo;</p>



<p>At the same time, WordPress needs to be open to enabling diverse frontend implementations, if it wants to remain relevant for the next decade. &ldquo;WP is running on legacy architecture,&rdquo; Schwab said. &ldquo;It&rsquo;s showing its age, and it&rsquo;s not appealing to new generations of developers. We need to keep WordPress appealing and interesting to developers in order to secure its future for years to come. If we don&rsquo;t make developers excited, we will inevitably see a decline.&rdquo;&nbsp;She encourages the WordPress community to embrace Jamstack as &ldquo;a breath of fresh air.&rdquo; </p>



<p>&ldquo;Jamstack can be an opportunity for our industry, rather than a threat,&rdquo; Schwab said. &ldquo;There are ways for the two industries to collaborate, like in the case of headless WP deployments using Gatsby.&rdquo;</p>



<p>Unlike many other Jamstack service companies, the team behind Gatsby has <a href="https://wptavern.com/gatsby-raises-15m-plans-to-invest-more-heavily-in-wordpress-and-cms-integrations">more readily embraced WordPress</a> as a data source and a critical component of its continued success. The company <a href="https://wptavern.com/jason-bahl-joins-the-gatsby-team-to-work-on-wpgraphql-full-time">hired Jason Bahl</a>, creator of the GraphQL for WordPress project, to work on WPGraphQL (and its immediate ecosystem) full-time, while providing a bridge to the WordPress world.</p>



<p>&ldquo;Maybe I&rsquo;m getting caught up in semantics, but the JAM in JAMStack means JavaScript, APIs and Markup,&rdquo; Bahl said. &ldquo;It wasn&rsquo;t long ago when Matt prescribed the WordPress ecosystem to &lsquo;Learn JavaScript Deeply,&rsquo; and not long after that when a Jamstack application called Gutenberg was merged into WordPress core, along with React. Gutenberg is the JavaScript, the WP REST API is the API and the end result is markup. Jamstack isn&rsquo;t a regression, it&rsquo;s a future that Automattic is helping drive WordPress toward.&rdquo;</p>



<p>When Mullenweg says he is ready to build and rebuild WordPress to be generational, it&rsquo;s a promise he has already delivered on by introducing the React-based Gutenberg editor two years ago, successfully pushing past an enormous amount of resistance from the developer community.</p>



<p>Bahl said he sees this continued legacy of improvement happening over and over again in various ways, made possible by WordPress&rsquo; pluggable system:</p>



<blockquote class="wp-block-quote"><p>WordPress ships with a lot of APIs, but often they are replaced with something newer and better. For example, it&rsquo;s common for sites to offload images to a CDN instead of use the built-in file system for media. Or instead of using built-in WordPress MySQL search, users will reach for ElasticSearch, Algolia or Solr. In the case of WordPress and the JAMStack, reaching for Next, Gatsby or Gridsome to replace the built-in Theme API isn&rsquo;t a regression, it&rsquo;s using newer technology to handle things that built-in parts of WordPress might not do as well. The Theme API of WordPress is just one API and replacing it with technology that does the job better isn&rsquo;t a regression.</p></blockquote>



<p>Gatsby&rsquo;s build step, which has received <a href="https://twitter.com/tesseralis/status/1293649015020457984">negative attention in the news</a> recently, is one example of what Bahl thinks Mullenweg was referring to as a regression for users. Bahl is working with Gatsby to reduce the friction associated with decoupled architectures when using WordPress as the API in Jamstack.</p>



<p>&ldquo;I don&rsquo;t see Jamstack competing against WordPress,&rdquo; Bahl said. &ldquo;In my mind, Jamstack with WordPress as the API is the future of the web. WordPress is the best CMS. Gatsby specifically is trying to embrace this. This isn&rsquo;t a zero sum game. If the Gatsby + WordPress experience can allow users to use the best CMS in the world while using modern dev tooling, it&rsquo;s a win all around.&rdquo;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 19 Sep 2020 18:54:01 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:22;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:51:"WPTavern: Matt Mullenweg Clarifies Jamstack Remarks";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104883";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:147:"https://wptavern.com/matt-mullenweg-clarifies-jamstack-remarks?utm_source=rss&utm_medium=rss&utm_campaign=matt-mullenweg-clarifies-jamstack-remarks";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6205:"<p>Two weeks ago, Matt Mullenweg made some pointed remarks in an article from <a href="https://thenewstack.io/wordpress-co-founder-matt-mullenweg-is-not-a-fan-of-jamstack/">The New Stack</a>, calling Jamstack &ldquo;a regression for the vast majority of the people adopting it.&rdquo; In preparation for an upcoming article that will include comments from leaders across both the WordPress and Jamstack communities, I asked Mullenweg if he stands by his remarks characterizing Jamstack as a regression. His response was lengthy and is printed here in its entirety to preserve cohesion.</p>



<p><strong>Q: Do you stand by your remarks that Jamstack is a regression for the vast majority of the people adopting it?</strong></p>



<p><strong>Answer:</strong></p>



<p>&ldquo;Vast majority of people adopting it&rdquo; was probably too harsh, because there isn&rsquo;t a vast number of people adopting Jamstack in the first place, and those who do are probably fully aware of the tradeoffs. There are some good reasons, for certain situations, to decouple and add complexity to your architecture, and WordPress&rsquo; REST API works fantastically as a backend there. But I worry they are over-selling the promise of what&rsquo;s really an architectural decision. If&nbsp;<a rel="noreferrer noopener" target="_blank" href="https://jamstack.org/">you look at the benefits they purport</a>,&nbsp;it&rsquo;s better performance, security, scaling, and developer experience:</p>



<img />



<p><strong>Better Performance:</strong> You can achieve the same performance by putting a great CDN like Cloudflare on top of WordPress, and your life will be infinitely easier when you want to add dynamic features like a store or comments. You can also easily find a static WordPress host like&nbsp;<a rel="noreferrer noopener" target="_blank" href="https://www.strattic.com/">Strattic</a>&nbsp;or&nbsp;<a rel="noreferrer noopener" target="_blank" href="https://www.getshifter.io/">Shifter</a>.</p>



<p><strong>Higher security:</strong> I don&rsquo;t believe that introducing a number of proprietary and sub-scale SaaS services like Netlify into your stack will make your site more secure. I believe the most secure thing you can do is run fully open source code, as widely vetted and used as possible, on servers you control, or from the fewest number of vendors possible. WordPress securely runs some of the most attacked websites on the internet, including major media, Facebook, and&nbsp;<a rel="noreferrer noopener" target="_blank" href="http://whitehouse.gov/">WhiteHouse.gov</a>. Having this many moving parts doesn&rsquo;t inspire confidence:</p>



<img />



<p><strong>Cheaper, easier scaling:</strong> CDNs are more expensive than normal hosting accounts, and you can get WordPress running on a decent host for less than $5/mo. And there are even more powerful offerings: The personal plan on&nbsp;<a rel="noreferrer noopener" target="_blank" href="http://wp.com/">WP.com</a>&nbsp;can serve tens of millions of visitors per day, to the website or the headless API, includes a global CDN, and a domain name for $4/mo, and we still have a profit margin.&nbsp;<a rel="noreferrer noopener" target="_blank" href="https://graphcms.com/pricing">GraphCMS starts at $29/mo and only gives you &ldquo;5,000 entities,&rdquo;</a> whatever that means.&nbsp;<a rel="noreferrer noopener" target="_blank" href="https://www.contentstack.com/pricing">Contentstack is $3,500/mo</a>. And that&rsquo;s just for the headless CMS part! You still need to sign up and pay for a bunch of the other stuff in that graphic before you have a website a human can visit in a browser.</p>



<p><strong>Better developer experience:</strong> If your developer wants to copy and paste updates from marketing to the website, sure, but if they want people to be able to update the website without their help, they should go with something easier for users like WordPress. If you&rsquo;re curious about the developer experience, or an investor thinking about this space, I really suggest you watch this three hour and thirty minute tutorial to really understand what is being sold under the premise of &ldquo;better&rdquo;:</p>



<div class="wp-block-embed__wrapper">

</div>



<p>Have I ever built stuff like that? Totally! It can be a ton of fun, like building a rocket at home or fixing up an old car. I&rsquo;ve seen some awesome sites built on decoupled architectures or static publishing, using headless WordPress rather than the CMS&rsquo;s above, but still a similar idea. People are trying to paint me as being against Jamstack, but that is as foreign to me as being against duct tape &mdash; it&rsquo;s good for some things, bad for others, and it&rsquo;s not going away. I just wish they would be more intellectually rigorous and honest when marketing it. I expect a Jamstack-like approach to exist forever, just like the ideas behind Jamstack pre-date it getting jammed down our throats by Netlify&rsquo;s marketing team.</p>



<p>Biilmann has got the Ballmer / iPhone story backwards &mdash;&nbsp;Microsoft&rsquo;s mistake there was they made something too complicated, and the iPhone simplified it. Jamstack introduces numerous vendors, build steps, network calls, interfaces, even billing relationships for something that&rsquo;s a single button press in WordPress.</p>



<p>The reason services like&nbsp;<a rel="noreferrer noopener" target="_blank" href="http://wordpress.com/">WordPress.com</a>&nbsp;and Shopify are growing so much is they are taking things that were complicated and making them simpler and accessible to a much wider audience. My mission is to democratize publishing and commerce, to make it radically accessible to everyone regardless of technical or economic ability, and increase the freedom and openness on the internet.&nbsp;<a rel="noreferrer noopener" target="_blank" href="https://twitter.com/photomatt/status/1306368508792504321">As I said on Twitter</a>, the first 15 years of WordPress were just the first few chapters. I&rsquo;m looking forward to building and rebuilding the platform the rest of my lifetime, and when that comes to an end I hope future generations will carry the torch.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 18 Sep 2020 22:49:44 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:23;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:65:"WPTavern: Gutenberg’s Custom Spacing Should Be Theme Controlled";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104867";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:169:"https://wptavern.com/gutenbergs-custom-spacing-should-be-theme-controlled?utm_source=rss&utm_medium=rss&utm_campaign=gutenbergs-custom-spacing-should-be-theme-controlled";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5679:"<img />Adjusting padding on a Group block.



<p class="has-drop-cap">When <a href="https://wptavern.com/gutenberg-9-0-brings-major-improvements-to-navigation-screen-and-query-block">Gutenberg 9.0 landed</a> earlier this week, it came with an experimental <a href="https://github.com/WordPress/gutenberg/pull/24966">padding control</a> for the Group block. Most users will not see it unless their theme has opted into supporting the feature using the <code>experimental-custom-spacing</code> flag.</p>



<p>This was not the first that we have seen of the padding option on a block. <a href="https://wptavern.com/gutenberg-8-3-updates-block-categories-includes-parent-block-selector-and-adds-new-design-controls">Gutenberg 8.3</a> introduced it for the Cover block. Since then, nothing has changed with the implementation.</p>



<p>The problem with the custom spacing/padding option is that it creates an inline style that does not adjust based on the design of the theme. Fortunately, the feature is still experimental. This means that we have time to reevaluate how it works.</p>



<p>Unless we&rsquo;re doing away with any remaining illusion that themes will play an important aspect of WordPress&rsquo;s future and front-end design becomes fully entrenched within core, theme authors need some level of control. And, even if themes are going the way of the dinosaur, custom padding numbers on the block level will create design consistency issues down the road. Using 100 pixels of padding might make sense within a site&rsquo;s current design, but 96 pixels might make sense within a future design. When a user adds dozens or hundreds of blocks with custom padding today, it will wreak havoc on tomorrow&rsquo;s spacing and rhythm.</p>



<p>Besides that, the average user has little concept of design rules. Having a standardized system for spacing would give theme authors control over the output while giving end-users the ability to customize the look.</p>



<p>I have argued that WordPress needs some sort of <a href="https://wptavern.com/themes-of-the-future-a-design-framework-and-a-master-theme">design framework</a>. For example, Tailwind CSS has specific padding classes. So does Bootstrap and nearly every other CSS framework. The web development community has been down this road. It is a well-trodden path, and WordPress is not innovating by using inline styles.</p>



<p>If the WordPress platform is going to put this sort of power into the hands of its users, it should do so in a way that allows designers to do their thing and not push users toward semi-permanent, inline-style soup in their content.</p>



<p>Pre-Gutenberg, I would have been entirely against the idea of WordPress introducing any sort of CSS or design framework. However, the platform is consistently moving toward becoming a UI-based design tool rather than simply a way to manage content. Users will have design-related options on a global scale all the way down to individual blocks. Users should absolutely have the ability to adjust a block&rsquo;s padding in such a system. They should not need an understanding of CSS to do so. Instead, for most use cases, users should be able to adjust padding based on whether they want larger or smaller spacing, not specific CSS values.</p>



<p>I propose a full set of standardized padding classes. The same would go for margins or other design-related options down the road. Gutenberg/WordPress should create a set of default values for these classes, which theme authors could override based on their design.</p>



<p>This is not a new concept. Dave Smith, a developer for Automattic, introduced a <a href="https://github.com/WordPress/gutenberg/pull/16730">patch in 2019</a> that used named selectors for spacing on the Group block. He gave the following reasoning for choosing this approach over absolute values:</p>



<blockquote class="wp-block-quote"><p>Imagine you are a Theme designer. You craft your CSS with spacing that is perfect for the design. You want to ensure that is consistent throughout your Theme, even if the page layout is being created by the end-user in the Block Editor.</p><p>With the approach I&rsquo;ve taken here, when a size is selected only classes are added to the Block in the DOM. This affords the Theme creator the opportunity to provide custom sizes in CSS that are suitable for their Theme. If they opt not to do this then sensible defaults are provided.</p><p>With the pixels approach, we&rsquo;re locking users of the Block into absolute values and asking them to make a lot of decisions that they&rsquo;d probably prefer not to have to make. It could also lead to an inconsistent visual experience.</p></blockquote>



<p>This ship has already sailed and sunk with custom colors and font sizes. Gutenberg had an opportunity to standardize class names for these options but left it to theme authors. As a result, there is no standard across the theme market, which means that choosing the &ldquo;large&rdquo; font size or the &ldquo;blue&rdquo; text color provided by the theme will likely not carry across to the user&rsquo;s next theme. Now, we are on the cusp of far more design-related options as WordPress moves toward full-site editing. It is time to consider some standards on design-related class names and provide a framework that all themes can use.</p>



<p>Gutenberg could still provide a <em>custom</em> padding option just like it does for colors and font sizes. Users who choose to go this route would be making an explicit choice to work outside of the standard. But, let&rsquo;s not go down this road of allowing users to set absolute spacing values as the default option.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 18 Sep 2020 18:49:10 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:24;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:75:"WPTavern: GoDaddy Acquires SkyVerge, Creator of Over 60 WooCommerce Add-Ons";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104658";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:193:"https://wptavern.com/godaddy-acquires-skyverge-creator-of-over-60-woocommerce-add-ons?utm_source=rss&utm_medium=rss&utm_campaign=godaddy-acquires-skyverge-creator-of-over-60-woocommerce-add-ons";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4911:"<p class="has-drop-cap">On September 14, GoDaddy <a href="https://aboutus.godaddy.net/newsroom/news-releases/press-release-details/2020/GoDaddy-Acquires-SkyVerge-to-Help-Everyday-Entrepreneurs-Sell-Online-with-WordPress-and-WooCommerce/default.aspx">announced it had acquired SkyVerge</a>, a major WooCommerce-focused development company, for an undisclosed amount. At the moment, GoDaddy is playing it close to the vest in terms of its future plans. It has not publicly announced anything beyond a continued commitment to current customers.</p>



<p>The initial announcement makes note that SkyVerge&rsquo;s free plugins on WordPress.org have been downloaded more than 3.1 million times. However, the company&rsquo;s <a href="https://profiles.wordpress.org/skyverge/#content-plugins">nine plugins in the directory</a> currently have over 155,000 active installs. Nevertheless, SkyVerge&rsquo;s real value is in its team and its impressive array of free and commercial add-on plugins available directly from its site.</p>



<p>WooCommerce is a cash cow for companies with the right products and marketing at the moment. GoDaddy seems to be going all-in on the back of WordPress&rsquo;s most popular eCommerce solution. It launched a <a href="https://wptavern.com/godaddy-launches-ecommerce-hosting-plan-in-partnership-with-woocommerce">managed WooCommerce hosting plan</a> in October 2019. The hosting company has now added over 60 WooCommerce extensions to its inventory in one swoop.</p>



<p>&ldquo;As more small businesses and entrepreneurs go online, having a highly performant eCommerce experience is becoming more important than ever,&rdquo; said Rich Tabor, Senior Product Manager of WordPress Experience at GoDaddy. &ldquo;Late last year we launched a Managed WooCommerce offering, bundling many WooCommerce extensions in the Managed WordPress environment.&rdquo;</p>



<p>SkyVerge has quietly become a massively successful WordPress and WooCommerce business. It was bringing in <a href="https://www.starterstory.com/develop-ecommerce-tools">$350,000 per month</a> at the end of 2019. There was no response on how well the business has performed thus far in 2020.</p>



<p>The entire SkyVerge team came along for the transition to GoDaddy. &ldquo;We&rsquo;re just beginning to deliver more capabilities and an even better setup and ongoing usage experience for our customers,&rdquo; said Tabor. &ldquo;The SkyVerge team will lead and accelerate those plans. They are an incredibly talented and innovative team that lives and breathes WooCommerce. Joining forces with them advances GoDaddy&rsquo;s WordPress strategy and enhances our ability to deliver intuitive eCommerce experiences that help everyday entrepreneurs sell online.&rdquo;</p>



<p>With so many extensions in place, the big question for average users is whether those extensions will become a part of GoDaddy&rsquo;s eCommerce hosting bundle. Tabor either did not or could not let slip any plans in the works. &ldquo;We&rsquo;re just beginning to determine how to best deliver SkyVerge&rsquo;s wonderful products to GoDaddy customers. SkyVerge brings a lot of great software. It&rsquo;s reasonable to expect we&rsquo;ll be delivering that to our customers who are selling online.&rdquo;</p>



<p>It is doubtful that GoDaddy went into this acquisition without at least some short-term plans or visions for how its managed hosting service would use these extensions. For now, we will have to wait and see.</p>



<p>It seems that the immediate plan will be to maintain business as usual. Tabor said GoDaddy had no changes to announce related to SkyVerge&rsquo;s products and website. &ldquo;We are committed to continuing support of SkyVerge&rsquo;s customers and investing in the SkyVerge software,&rdquo; he said.</p>



<p>SkyVerge also created <a href="https://jilt.com/">Jilt</a>, which is an email marketing platform for eCommerce sites. The platform currently supports WooCommerce, Easy Digital Downloads, Shopify, and Shopify Plus. Tabor did not directly respond to what the future looked like for Jilt&rsquo;s non-WooCommerce customers nor did he give any indication of whether there were plans to expand Jilt to other eCommerce systems.</p>



<p>He did say that GoDaddy would continue to invest in its priority eCommerce platforms, which are WooCommerce and GoDaddy Websites + Marketing.</p>



<p>Max Rice, co-founder of SkyVerge, did leave some indication of Jilt&rsquo;s future in his <a href="https://www.skyverge.com/blog/skyverge-joins-godaddy/">announcement post</a>. &ldquo;We made a commitment to be there for your business with software you can depend on, and we&rsquo;re sticking to it,&rdquo; he said. &ldquo;We&rsquo;ll continue to support our existing WooCommerce plugins and Jilt. While we&rsquo;ll be building something new at GoDaddy, everything we&rsquo;ve already built is a big part of that.&rdquo;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 17 Sep 2020 20:59:02 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:25;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:86:"WPTavern: Gutenberg 9.0 Brings Major Improvements to Navigation Screen and Query Block";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104795";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:217:"https://wptavern.com/gutenberg-9-0-brings-major-improvements-to-navigation-screen-and-query-block?utm_source=rss&utm_medium=rss&utm_campaign=gutenberg-9-0-brings-major-improvements-to-navigation-screen-and-query-block";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2749:"<p>If you haven&rsquo;t played around with Gutenberg&rsquo;s experiments lately, the Navigation block is getting some exciting updates. Version 9.0 was released today with drag-and-drop support added to the list view of navigation items.  </p>



<img />



<p>Contributors have been <a href="https://github.com/WordPress/gutenberg/issues/24875">working through several different prototypes</a> aimed at unifying the controls and simplifying the menu building process. The Navigation screen included in version 9.0 has been redesigned to <a href="https://github.com/WordPress/gutenberg/issues/25014">improve the &ldquo;Create Menu&rdquo; flow</a> and includes the following changes:</p>



<ul><li>New&nbsp;<em>Header</em>&nbsp;and&nbsp;<em>Toolbar</em>&nbsp;components.</li><li><em>Manage Locations</em>&nbsp;has been rewritten and is now a popover.</li><li><em>Add New</em>&nbsp;form has been rewritten and now appears inline in the toolbar.</li><li><em>Automatically Add Pages</em>&nbsp;checkbox and&nbsp;<em>Delete menu</em>&nbsp;button has been rewritten and now appears in the block inspector.</li></ul>



<p>The screen is starting to take shape but is still very much a work in progress. If you want to test it, you can enable it under Gutenberg &gt; Experiments.</p>



<p>The Query block was another main focus fr the 9.0 release. It is taking a giant leap forward with new features like search, filtering by author, support for order/order by (date + title), and tags. This block should be tested locally and is still behind the&nbsp;<code>__experimentalEnableFullSiteEditing</code>&nbsp;flag since it requires full site editing blocks to display queried content.</p>



<img />



<p>Other notable UI enhancements include <a href="https://github.com/WordPress/gutenberg/pull/24852">a new drag handle added to block toolbar</a> for drag-and-drop capability. (It is not visible on the top toolbar). Blocks can be dragged to other areas of a post as an alternative to using the up/down arrows.</p>



<img />



<p>This release also <a href="https://github.com/WordPress/gutenberg/pull/24472">removes the Facebook and Instagram blocks</a> from the inserter, as Facebook will be&nbsp;<a href="https://wptavern.com/upcoming-api-change-will-break-facebook-and-instagram-oembed-links-across-the-web-beginning-october-24">dropping unauthenticated oEmbed support</a>&nbsp;on October&nbsp;24. WordPress core is also set to remove Facebook and Instagram as an oEmbed provider in an upcoming release.</p>



<p>For a full list of all the enhancements, bug fixes, experiments, and documentation updates, check out the <a href="https://make.wordpress.org/core/2020/09/16/whats-new-in-gutenberg-16-september/">9.0 release post</a> on WordPress.org.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 17 Sep 2020 03:18:49 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:26;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:81:"HeroPress: How To Become A Freelancer – A Few Things I Learned Before I Gave Up";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:56:"https://heropress.com/?post_type=heropress-essays&p=3280";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:206:"https://heropress.com/essays/how-to-become-a-freelancer-a-few-things-i-learned-before-i-gave-up/#utm_source=rss&utm_medium=rss&utm_campaign=how-to-become-a-freelancer-a-few-things-i-learned-before-i-gave-up";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:28154:"<img width="960" height="480" src="https://s20094.pcdn.co/wp-content/uploads/2020/09/091620-min.jpg" class="attachment-large size-large wp-post-image" alt="Pull Quote: I realized that freelancing is not the only way to achieve my goals." /><p><a href="https://heropress.com/feed/#serbian">Članak je takođe dostupan na sprskom jeziku.</a></p>
<p>Everyone’s story is unique. Our life journeys differ in so many aspects and these experiences shape us into who we are now. Therefore, things that we, as individuals, learn along the way can’t always apply to someone else’s life goals, potentials, aspirations, and struggles.</p>
<p>But, sometimes, knowing about other people’s mistakes and successes can help us navigate through our life challenges better. We can avoid making the same mistakes and, even better, we can get inspired to accomplish similar achievements.</p>
<p>That is why I decided to share a few things that I have learned by trying to become a freelancer. Spoiler alert &#8211; I’m a corporate employee now.</p>
<p>My career path was a bit unusual. I wasn’t quite tech-savvy until 5 years ago and my entire focus was around the fitness industry from 2006 until 2015. Being a fitness trainer was a dream job for me when I was 26 but, by the age of 35, it became somehow, well, boring.</p>
<p>Then I had a huge epiphany &#8211; numerous opportunities come with WordPress and freelancing was one of them. So, if you are at the stage of your life when becoming a freelancer seems like a good idea, read on.</p>
<p>I will try to break down 5 things that helped me in starting my freelance career. They are formulated as general tips for beginners but some of them can also be applied when changing the course of your career. So, let’s dive right in.</p>
<h3>Question your motives</h3>
<p>The first and the most important thing that you should ask yourself before you do anything in your life is why. “Why am I doing this?”</p>
<p>So, why do you want to become a freelancer?</p>
<p>Is it because you need an extra income? Or maybe because of flexible working hours. Or because you will be able to work from different locations? Or you see freelancing as just a phase before you get enough experience to open your agency and have others working for you.</p>
<blockquote><p>Be honest with yourself. List all the reasons why you want to become a freelancer. This will help you later on in choosing the right jobs or maybe in considering some other alternatives to freelancing.</p></blockquote>
<p>For example, these are my top 3 motives to become a freelancer:</p>
<ul>
<li>Opportunity to grow intellectually and learn new things</li>
<li>Flexible working hours (by not being forced to work 9 am to 5 pm every day, I was able to avoid the boring routine)</li>
<li>Peaceful and quiet working environment &#8211; quite opposite to the gym where everything is so loud</li>
</ul>
<p>So, after you question your goals and motives, and you are certain that you want to become a freelancer what’s next? My suggestion is &#8211; develop WordPress related skills.</p>
<h3>Get the skills &#8211; choose WordPress</h3>
<p>Why WordPress you might ask? Well, for a start, WordPress gives various opportunities and it is not a developer-only niche.</p>
<p>Although, when someone thinks of freelancing and WordPress, web developer and web designer are first associations, there is a huge variety of WordPress related freelance jobs:</p>
<ul>
<li>Web developer (coding websites, themes, and plugins)</li>
<li>Web implementor (creating websites from existing themes without coding)</li>
<li>Web designer (designing website mockups, editing images or creating infographics for websites)</li>
<li>Client support professional (helping people with their websites)</li>
<li>Website maintenance professional (takes care of the website to make sure that WordPress, themes, and plugins are up to date and new backups are created regularly)</li>
<li>WordPress teacher (teaching clients how to use WordPress or teaching other web professionals)</li>
<li>Content writer</li>
<li>Accessibility specialist (making sure that certain standards are met and suggesting solutions for accessibility barriers)</li>
<li>SEO consultant</li>
<li>Statistics consultant (especially for webshops)</li>
<li>WordPress assistant (adding new content and editing existing posts)</li>
<li>Website migration specialist (moving websites from one server to another)</li>
<li>Web security specialist</li>
</ul>
<p>Another reason why WordPress is great for freelancers is a strong community that exists around this CMS. There are regular meetups, WordCamps, and other events (they are now switched to online), where you can get a ton of useful information, and also get to ask like-minded people literally anything. The community is so large and diverse, that you will definitely find the answer to any question. It’s much easier to start your freelance career when you have such a great community around you.</p>
<h3>Plan in advance</h3>
<p>Now that you know where the opportunity lies, you can start planning your career.</p>
<p>Becoming a freelancer is a process. At the beginning of that process, you should acquire or improve relevant skills that will make you stand out in the freelance market. And, of course, as you learn and grow, you will be able to take more challenging and better-paid jobs.</p>
<p>Which skill should you focus on? If you already have a basic skill set for at least one of the previously listed jobs, you can improve your knowledge in that direction and specialize in that area.</p>
<p>However, if you don’t have any relevant skills, in my opinion, it would be the easiest to step into the freelancing world with a job that has a shorter learning curve and build your knowledge around that. Example &#8211; you can start with either content writing or as a web implementer since these jobs have a shorter learning curve than SEO related jobs or web development. Then, from content writing, you can expand your knowledge towards SEO and from a web implementer, you can become a developer. Just don’t stop learning.</p>
<p>Also, if you have specific talents or hobbies like writing or design, you can base your career on that.</p>
<blockquote><p>There is nothing better than doing what you love.</p></blockquote>
<p>Additionally, it would be a good idea to analyze the market before you jump into the learning process.</p>
<p>For example, now it would not be the best time to specialize in writing travel-related content, while it would be a great moment for any job related to webshops and online sales.</p>
<p>If you want to learn web development, web design, web security, or SEO, you should always focus on new trends, so your skills can be useful in the future as well.</p>
<p>For different jobs, working terms often vary so you should take this into consideration when choosing your career path. At some jobs, you can work flexible hours while at others you have to be available during predefined hours. This is what you should have in mind when specializing in a certain area or looking for a first job.</p>
<h3>Hurray, it’s time to get a first freelancing job</h3>
<p>If you currently have a job, it would be wise to either save some money before you quit your job to become a full-time freelancer or try freelancing for a few hours per week, in the beginning, to see if you like it or not. If you become successful and decide that freelancing is something that fits your needs, only then quit your job, not before.</p>
<blockquote><p>Although some people do benefit when taking a risk, think twice before you take any irreversible actions.</p></blockquote>
<p>And here are some tactics that worked for me when trying to get my first freelancing job:</p>
<p><i>Use a freelancing platform</i> &#8211; although this is not mandatory, it is much easier to get the first job when you are using a freelancing platform. My choice was Upwork back in the day, but there are several platforms that you can use to get the first job faster.</p>
<p><i>Triple-check your resume</i> &#8211; I guess that this is not something that I should mention but I will anyway, just in case. Don’t make spelling mistakes in your resume, it will give the impression that you are not thorough and that you will oversee mistakes in your other work as well.</p>
<p><i>Present yourself in a professional manner</i> &#8211; Take the time to present your professional skills in the best possible light but still stay humble. Don’t write: “Best WordPress developer that never wrote a bad code”. This is not evidence-based, and it will make you seem arrogant. Instead, you can write: “Web developer with 3 years of experience and over 50 satisfied clients, specialized in WordPress.” This statement is based on facts and it shows your credibility.</p>
<p><i>Fill up your portfolio</i> &#8211; If you have any previous work (that is presentable, of course) you should put it in your portfolio. Emphasis on presentable. If not, you can make a few websites, designs, or write some example texts if you are a content writer in order to showcase your skills. This is not applicable to all jobs, like SEO consultants or customer support but if you have the opportunity to create a portfolio, use the opportunity.</p>
<p><i>Use video material</i> &#8211; Short introductory video will make you stand out since making promotional video material is not something that many freelancers do. It will help you create a more human professional approach. For your clients, you will not be just a list of skills and previous experiences, but a real person that has these skills and experiences and that provides a certain service for them.</p>
<p><i>Have a detailed strategy when choosing your first employer &#8211;</i> Choose your first employer wisely, very wisely. I can’t emphasize enough how important this is so I will give you an example. When I had to apply for my first job, I considered the following:</p>
<ul>
<li>How this employer was rated by other freelancers which worked for him previously</li>
<li>How the employer rated other freelancers</li>
<li>How much money he had already spent on this platform and if he posts regular job offers</li>
<li>The number of open positions for this job and the number of freelancers that have already applied. In my case, the job had about 10 open positions so that amplified my chances of getting hired, even if the competition is high.</li>
</ul>
<p><i>The first job is not all about the money &#8211;</i> Don’t get greedy on your first job. If you get good reviews, your second job can be paid 2-3 times more. And your third job can go up to 5 times more. That was my experience at least.</p>
<h3>Be careful, you are an adult</h3>
<p>Individual responsibility is key when it comes to freelancing. You have the freedom to choose who you are going to work for, what kind of job are you going to take, and how it is going to be delivered. And freedom often comes with responsibility. They are like two sides of the same coin.</p>
<p>You should never miss a deadline. If you are not sure that you are going to be able to deliver, don’t take the job or as an alternative have someone very reliable as a backup, just in case. When you miss a deadline, your client loses money, and they have every right to be angry. This will very likely affect your reviews after the job is complete. And then, the opportunity to get your next job and so on. This can start a downward spiral for your career.</p>
<p>However, we are all humans and unpredictable things can happen. If for some reason you are not able to complete your work in a timely manner, let your client know immediately so they can have enough time to hire someone else.</p>
<p>Also, it is important to make everything clear in advance, before you accept the job. Let your clients know what your expectations are and make sure that you understand what they expect from you. For example, if you are a content writer, make sure that you know the length of the text in characters or words, ask if some keywords should be used and how frequently, what writing style your client prefers, and so on. And if you are a designer, specify how many revisions are included in the price.</p>
<blockquote><p>The clearer the initial arrangement is, the more satisfied both you and your client will be at the end.</p></blockquote>
<p>If you have flexible working hours, don’t let other people interrupt you. If your friends and family wouldn’t show up in your office every day if you were a bank clerk, they shouldn’t interrupt you when you work from home. It’s the same principle and it’s up to you to set the boundaries and let them know about your working schedule. It’s not up to them.</p>
<p>So, these are some basic guidelines that helped me in starting my freelance career and I hope that they will be helpful for you as well.</p>
<blockquote><p>There is no unique recipe and one size doesn’t fit all when it comes to the path you ought to take.</p></blockquote>
<p>It’s just important to stay focused on your goals and to be open to new opportunities.</p>
<p>If you were wondering why I’m not a freelancer anymore, this is where the answer lies. By constantly being interested in different opportunities, I realized that freelancing is not the only way to achieve my goals. There are companies that offer flexible working hours and peaceful work environment while stimulating professional growth and creative thinking.</p>
<p>Plus I gained something very precious by joining a team &#8211; my colleagues became my support system both professionally and privately, and that is what I have been missing while being a freelancer.</p>
<p>I wish you a lot of luck and success in the future, regardless of the path you choose to take.</p>
<h1 id="serbian">Kako postati frilenser &#8211; stvari koje sam naučila pre nego što sam odustala</h1>
<p>Naše životne priče su različite. Svako od nas ima svoj jedinstveni životni put, a iskustva koja steknemo oblikuju nas u osobe koje smo danas. Zbog toga, stvari koje mi, kao pojedinci, naučimo na svom putu ne mogu uvek lako da se primene na situacije kroz koje prolazi neko drugi.</p>
<p>Ipak, ponekad sagledavanje tuđih uspeha i grešaka može da nam pomogne da se bolje snađemo u sopstvenim životnim izazovima. Možemo da izbegnemo da napravimo istu grešku koju je napravio naš prijatelj ili, još bolje, možemo postati motivisani da postignemo jednak ako ne i veći uspeh kao neko iz našeg okruženja.</p>
<p>Zbog toga sam odlučila da sa vama podelim ono što sam naučila pokušavajući da postanem frilenser. Spoiler alert &#8211; sada sam zaposlena u korporacji.</p>
<p>Moja karijera je isla pomalo neuobičajenim putem. Nisam uopšte bila naklonjena informatici do pre pet godina. Tačnije nisam znala skoro ništa o toj oblasti. Bila sam potpuno fokusirana na fitnes industriju i radila sam isključivo kao fitnes trener od 2006. do 2015. To je za mene bio posao iz snova dok sam bila mlađa ali mi je oko moje 35. godine već pomalo dosadio.</p>
<p>Tada sam otkrila WordPress i shvatila da se mnogobrojne prilike otvaraju bas sa poznavanjem ove platforme. A frilensing je jedna od njih. Tako da, ako ste trenutno u fazi kada vam se frilensovanje čini kao dobra ideja, nastavite da čitate.</p>
<p>Pokušaću da detaljno opišem pet stvari koje sam naučila pokušavajući da postanem frilenser. Formulisala sam ih kao uopštene savete za početnike, ali neki od njih mogu da se primene i kada menjate kurs svoje frilens karijere.</p>
<h3>Preispitajte svoje motive</h3>
<p>Prva i najvažnija stvar koju treba da se zapitate pre nego što uradite išta u životu je zašto. “Zašto to radim?” Zbog čega želite da postanete frilenseri? Da li zbog toga što vam treba dodatni prihod? Ili zbog fleksibilnog radnog vremena? Ili da biste mogli da radite sa bilo koje lokacije na svetu? Ili frilensing vidite kao fazu pre nego što steknete dovoljno iskustva da možete da otvorite svoju agenciju.</p>
<blockquote><p>Budite iskreni prema sebi. Popišite koji su to razlozi zbog kojih želite da budete frilenser. Ovo će vam kasnije pomoći pri izboru adekvatnog frilensing posla ili pri razmatranju neke druge alternative.</p></blockquote>
<p>Na primer, ovo su bila moja tri glavna razloga:</p>
<ul>
<li>Prilika da naučim nesto novo i da se intelektualno razvijam u nekom novom pravcu</li>
<li>Fleksibilno radno vreme &#8211; time što sam imala fleksibilno radno vreme bila sam u mogućnosti da izbednem dosadnu “od 9 do 5” rutinu</li>
<li>Tiho i mirno radno okruženje, potpuno u suprotnosti sa teretanama u kojima je uvek bučno</li>
</ul>
<p>Nakon što ste preispitali svoje ciljeve i motive, i sigurni ste da želite da se bavite frilensingom, šta dalje? Moj predlog je naučite nešto što je vezano za WordPress.</p>
<h3>Steknite znanja vezana za WordPress</h3>
<p>Sada se možda pitate zašto baš WordPress. Za početak, zato što WordPress nudi mnoštvo raznovrsnih prilika, i to ne samo za developere.</p>
<p>Iako, kad se pomene WordPress, prvo što će nekome pasti na pamet je ili developer ili web dizajner, postoji veliki broj različitih poslova vezanih za WordPress:</p>
<ul>
<li>Web developer (kodira sajtove, teme i dodatke)</li>
<li>Web implementator (pravi sajtove od gotovih tema bez kodiranja)</li>
<li>Web dizajner (dizajnira skice sajtova, edituje slike i kreira infografike za sajtove)</li>
<li>Korisnička podrška (pomaže klijentima kada se nešto desi sa sajtom)</li>
<li>Održavanje sajtova (redovno održava sajt, kreira bekape, ažurira teme, dodatke i sam WordPress)</li>
<li>WordPress predavač (uči klijente kako da koriste WordPress ili uči druge web profesionalce koji se usavršavaju u nekoj oblasti)</li>
<li>Pisac tekstova za sajtove</li>
<li>Specijalista za aksesibilnost (vodi računa da određeni standardi budu ispunjeni i predlaže rešenja za barijere u aksesibilnosti)</li>
<li>SEO konsultant</li>
<li>Statističar (najčešće radi za velike onlajn prodavnice)</li>
<li>WordPress asistent (unosi novi sadržaj i menja postojći)</li>
<li>Specijalista za migracije (seli sajtove sa servera na server)</li>
<li>Specjalista za web bezbednost</li>
</ul>
<p>Još jedan razlog zbog kojeg mislim da je dobro izabrati WordPress je jaka zajednica koja se okupila oko ovog CMS-a. Redovno se održavaju manja okupljanja (trenutno na daljinu) ali i ona veća koja su nazvana WordCamp (takođe na daljinu do daljnjeg) na kojima možete dobiti pregršt korisnih informacija i pitati druge profesionalce sve što vas interesuje. Zajednica je toliko velika i raznolika da ćete tu pronaći odgovor na skoro svako stručno pitanje. Mnogo je lakse započeti frilens karijeru kada su sjajni ljudi oko vas.</p>
<h3>Planirajte unapred</h3>
<p>Sada kada znate u kom ćete pravcu ići, vreme je da počnete da planirate svoju karijeru.</p>
<p>Postati frilenser je proces. Na početku tog procesa potrebno je da steknete ili dodatno unapredite svoje veštine kojima ćete se istaći u odnosu na konkurenciju. I naravno kako učite i napredujete, moći ćete da prihvatate izazovnije i bolje plaćene poslove.</p>
<p>Na koja se onda znanja fokusirati? Ukoliko već imate neko predznanje za neki od prethodno navedenih poslova, možete se dalje razvijati u tom pravcu i specijalizovati se za tu oblast.</p>
<p>S druge strane, ukoliko nemate nikakvo relevantno predznanje, po mom mišljenju bi najlakše bilo započeti sa poslom koji ima kraći period učenja pa da kasnije nadograđujete znanje. Na primer, možete početi kao pisac tekstova za sajtove ili kao implementator jer se ti poslovi brže savladavaju nego poslovi vezani za SEO ili web development. Onda od pisanja sadržaja za sajtove možete proširiti znanje na SEO a od implementatora vremenom postati developer. Samo budite radoznali i ne prestajte da učite.</p>
<p>Takođe, ukoliko imate specifične talente ili neki hobi kao npr. pisanje ili dizajn, možete da bazirate karijeru oko toga.</p>
<blockquote><p>Najlepše je kad neko zarađuje od nečega što inače voli da radi.</p></blockquote>
<p>Uz to, valjalo bi da proučite tržište pre nego što se “bacite” na učenje.</p>
<p>Na primer, sada nije trenutak da se specijalizujete za pisanje sadržaja koji je vezan za putovanja, a pravi je momenat za sticanje veština koje, na bilo koji način, imaju veze sa onlajn prodavnicama i prodajom putem Interneta.</p>
<p>Ukoliko želite da savladate web development, SEO, web dizajn ili web bezbednost, bitno je da se fokusirate na nove trendove, tehnologije i alate, kako bi vaše veštine bile primenljive i u budućnosti.</p>
<p>Za različite poslove, uslovi rada mogu biti veoma različiti, pa bi i to valjalo imati na umu. Za neke vrste posla, radno vreme je fleksibilno, dok za druge, morate biti raspoloživi tokom određenog doba dana (ako radite kao korisnička podrška, na primer). I ovo bi trebalo da uzmete u obzir kada birate za koju oblast ćete se specijalizovati.</p>
<h3>Konačno! Vreme je za prvi posao!</h3>
<p>Ako ste zaposleni, bilo bi pametno da prištedite novac pre nego što napustite posao da biste se bavili isključivo frilensingom. Druga pametna opcija bi bila da vam na početku frilensing bude dodatni posao uz ono što već radite kako biste videli da li vam takav način rada odgovara ili ne. Ako postanete uspešni i shvatite da je frilensing nešto što odgovara vašim potrebama, tek tada napustite trenutni posao, ne pre toga.</p>
<blockquote><p>Iako neki ljudi profitiraju kada rizikuju, dobro razmislite pre nego što preduzmete korake posle kojih nema nazad.</p></blockquote>
<p>Evo nekoliko taktika koje su mi pomogle kada sam pokušavala da dobijem svoj prvi posao kao frilenser:</p>
<p><i>Koristite platformu za frilensere</i> &#8211; iako nije obavezno, mnogo je lakše doći do prvog posla kada koristite neku platformu namenjenu frilenserima. U to doba, moj izbor je bio Upwork. Svakako, sada postoji i nekoliko drugih platformi pomoću kojih možete brže doći do prvog posla.</p>
<p><i>Triput proverite svoju biografiju</i> &#8211; pretpostavljam da to nije nešto što bi trebalo da pomenem, ali svejedno ću naglasiti, za svaki slučaj. Ne pravite pravopisne greške u biografiji jer ćete time stvoriti utisak da niste temeljni i da će vam se greške lako potkrasti i dok obavljate svoj posao.</p>
<p><i>Predstavite se profesionalno</i> &#8211; Uložite trud da svoje profesionalne veštine predstavite u najboljem mogućem svetlu, ali i dalje budite skromni. Nemojte napisati: &#8220;Najbolji WordPress developer koji nikada nije napisao loš kod&#8221;. Ovo nije zasnovano na dokazima i učiniće da izgledate arogantno. Umesto toga, možete napisati: &#8220;Web programer sa 3 godine iskustva i preko 50 zadovoljnih klijenata, specijalizovan za WordPress.&#8221; Ova izjava je zasnovana na činjenicama i deluje verodostojno.</p>
<p><i>Popunite portfolio</i> &#8211; Ako imate bilo kakav prethodni rad (koji je naravno reprezentativan), trebalo bi da ga dodate u portfolio. Naglasak je na reprezentativan. Ako ne, možete da napravite nekoliko sajtova, dizajnirate skice sajtova ili napišete primere tekstova kako biste prikazali svoje veštine. Ovo se ne odnosi na sve poslove, kao što su SEO konsultanti ili korisnička podrška, ali ako imate priliku da napravite portfolio, iskoristite priliku.</p>
<p><i>Koristite video materijale</i> &#8211; Kratki uvodni video će skrenuti pažnju na vas jer izrada promotivnog video materijala nije nešto što mnogi frilenseri rade. Pomoći će vam da delujete ljudskije i profesionalnije. Za svoje klijente nećete biti samo lista veština i prethodnih iskustava, već stvarna osoba koja zaista ima te veštine i iskustva i koja im pruža određenu uslugu.</p>
<p><i>Imajte detaljnu strategiju pri izboru prvog poslodavca</i> &#8211; Birajte svog prvog poslodavca mudro. Ne mogu dovoljno da naglasim koliko je ovo važno, pa ću vam dati primer. Kada sam se prijavljivala za svoj prvi posao, uzela sam u obzir sledeće:</p>
<ul>
<li>Kako su ovog poslodavca ocenili drugi frilenseri koji su ranije radili za njega</li>
<li>Kako je poslodavac ocenio druge frilensere</li>
<li>Koliko novca je već potrošio na ovoj platformi i da li redovno objavljuje ponude za posao</li>
<li>Broj otvorenih pozicija za ponuđeni posao i broj frilensera koji su se već prijavili. U mom slučaju, posao je imao oko 10 otvorenih radnih mesta, što je povećalo moje šanse za zapošljavanje, čak i u slučaju da je konkurencija velika.</li>
</ul>
<p>Kod prvog posla nije bitan samo novac &#8211; nemojte biti pohlepni. Ako budete dobro ocenjeni, vaš drugi posao može biti plaćen 2-3 puta više. A vaš treći posao može biti vrednovan i do 5 puta više. To je barem bilo moje iskustvo.</p>
<h3>Vodite računa, odrasla ste osoba</h3>
<p>Individualna odgovornost je ključna kada je u pitanju uspeh u frilensingu. Imate slobodu da izaberete za koga ćete raditi, kakav ćete posao prihvatiti i kako ćete isporučiti dogovoreno. A uz slobodu često dolazi i odgovornost. Oni su poput dve strane iste medalje.</p>
<p>Nikada ne smete propustiti rok. Ako niste sigurni da ćete uspeti da završite, nemojte ni prihvatati posao ili, umesto toga, za svaki slučaj imajte nekoga vrlo pouzdanog da priskoči u pomoć ako zatreba. Kada propustite rok, vaš klijent gubi novac i ima puno pravo da se naljuti. Ovo će vrlo verovatno uticati na vaše ocene nakon obavljenog posla. A posledično, i na priliku da dobijete sledeći posao i tako dalje. To može pokrenuti silaznu spiralu za vašu karijeru.</p>
<p>Međutim, svi smo ljudi i mogu se dogoditi nepredvidive stvari. Ako iz nekog razloga niste u mogućnosti da svoj posao obavite u roku, odmah obavestite svog klijenta kako bi imao dovoljno vremena da zaposli nekog drugog.</p>
<p>Takođe je važno da sve bude jasno definisano unapred, pre nego što prihvatite posao. Obavestite svoje klijente o svojim očekivanjima i uverite se da razumete šta oni očekuju od vas. Na primer, ako treba da pišete tekst za sajt, uverite se da znate dužinu teksta u karakterima ili rečima, pitajte da li treba koristiti neke ključne reči i koliko često, koji stil pisanja preferira vaš klijent itd. A ako ste dizajner, navedite koliko je revizija uključeno u cenu.</p>
<blockquote><p>Što je početni dogovor jasniji, to ćete na kraju biti zadovoljniji i vi i vaši klijenti.</p></blockquote>
<p>Ako imate fleksibilno radno vreme, ne dozvolite da vas drugi ljudi prekidaju. Ako se vaši prijatelji i porodica ne bi svakodnevno pojavljivali u vašoj kancelariji da ste bankarski službenik, ne bi trebalo da vas prekidaju ni kada radite od kuće. To je isti princip i na vama je da postavite granice i obavestite ih o svom radnom vremenu. To nije njihov zadatak.</p>
<p>Ovo su neke osnovne smernice koje su mi pomogle u započinjanju karijere frilensera i nadam se da će biti korisne i vama.</p>
<blockquote><p>Ne postoji jedinstveni recept i jedna veličina ne odgovara svima kada je reč o putu kojim treba da krenete.</p></blockquote>
<p>Važno je samo ostati fokusiran na svoje ciljeve i biti otvoren za nove mogućnosti.</p>
<p>Ako ste se pitali zašto više nisam frilenser, evo odgovora. Stalnim sagledavanjem različitih mogućnosti, shvatila sam da frilensing nije jedini način da postignem svoje ciljeve. Postoje kompanije koje nude fleksibilno radno vreme i mirno radno okruženje, istovremeno stimulišući profesionalni rast i kreativno razmišljanje.</p>
<p>Uz to, stekla sam nešto vrlo dragoceno pridruživanjem timu &#8211; moje kolege su postale moj sistem podrške i profesionalno i privatno, i to je ono što mi je nedostajalo dok sam bila frilenser.</p>
<p>Želim vam puno sreće i uspeha u budućnosti, bez obzira na put koji ste odabrali!</p>
<p>The post <a rel="nofollow" href="https://heropress.com/essays/how-to-become-a-freelancer-a-few-things-i-learned-before-i-gave-up/">How To Become A Freelancer &#8211; A Few Things I Learned Before I Gave Up</a> appeared first on <a rel="nofollow" href="https://heropress.com">HeroPress</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 16 Sep 2020 06:00:13 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Tijana Andrejic";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:27;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:112:"WPTavern: Upcoming API Change Will Break Facebook and Instagram oEmbed Links Across the Web Beginning October 24";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104140";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:269:"https://wptavern.com/upcoming-api-change-will-break-facebook-and-instagram-oembed-links-across-the-web-beginning-october-24?utm_source=rss&utm_medium=rss&utm_campaign=upcoming-api-change-will-break-facebook-and-instagram-oembed-links-across-the-web-beginning-october-24";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5294:"<p>In an extraordinarily inconvenient API change, Facebook and Instagram will be <a href="https://developers.facebook.com/docs/plugins/oembed-legacy">dropping unauthenticated oEmbed support</a>&nbsp;on October&nbsp;24, breaking content across millions of websites. The change will force users to generate&nbsp;an app ID with a developer account in order to continue embedding links via oEmbed:</p>



<blockquote class="wp-block-quote"><p><strong>Changes to tokenless access for User Picture and FB/IG OEmbed endpoints:</strong>&nbsp;By October 24, 2020, developers must leverage a user, app, or client token when querying Graph API for user profile pictures via UID, FB OEmbeds and IG OEmbeds. Developers should provide a user or app token when querying for profile pictures via a UID or ASID, though client tokens are supported as well. Please visit our changelog for&nbsp;<a href="https://developers.facebook.com/docs/graph-api/changelog/version8.0#users">User Picture</a>,&nbsp;<a href="https://developers.facebook.com/docs/graph-api/changelog/version8.0#social-plugins">Facebook OEmbed</a>&nbsp;and&nbsp;<a href="https://developers.facebook.com/docs/graph-api/changelog/version8.0#instagram">Instagram OEmbed</a>&nbsp;for details on how to start calling these Graph API endpoints today.</p><cite><a href="https://developers.facebook.com/blog/post/2020/08/04/Introducing-graph-v8-marketing-api-v8/">Facebook for Developers blog</a></cite></blockquote>



<p>In 2008, Leah Culver, one of the collaborators on the <a href="https://oembed.com/">oEmbed</a> spec, <a href="https://blog.leahculver.com/2008/05/announcing-oembed-an-open-standard-for-embedded-content.html">said</a> it was created to be &ldquo;an open web API standard for fetching embed code based on a URL.&rdquo; Requiring authentication in order to use oEmbed links seems like a violation of its intended purpose. For more than a decade, oEmbed has made it possible for users to easily share media across websites and social networks, without having to touch any code. It underpins a flourishing, connected landscape of web sharing that opens up new audiences for posts that might otherwise be buried in a social network&rsquo;s fast-moving timeline.</p>



<p>In pursuit of a more secure walled garden, Facebook will now require all publishers to obtain developer app credentials in order to embed content that was previously available through simple URLs. Many users will be understandably frustrated when they find they can no longer embed Facebook and Instagram links the way they could in the past. Some will not be motivated to surmount the hurdle of setting up a Facebook app and may resort to posting screenshots or omitting the content altogether. A feature so widely used by non-technical users should not be suddenly locked away behind developer credentials.</p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">Facebook turning off its oEmbed endpoint for FB and Instagram is another brick in the wall around Facebook reality.</p>&mdash; &#9899; Your roots are in the infinite (@thejaymo) <a href="https://twitter.com/thejaymo/status/1305960256082784259?ref_src=twsrc%5Etfw">September 15, 2020</a></blockquote>
</div>



<p>At the time of publishing, none of the original oEmbed spec authors were available for comment regarding Facebook&rsquo;s API change, but we will update the post as new information becomes available.</p>



<h2>WordPress to Remove Facebook and Instagram oEmbed Providers</h2>



<p>In response to Facebook&rsquo;s API change, WordPress will be&nbsp;<a rel="noreferrer noopener" href="https://core.trac.wordpress.org/ticket/50861" target="_blank">removing Facebook as an oEmbed provider</a>&nbsp;in an upcoming core release. This will break a lot of content &ndash; many years&rsquo; worth of posts in some instances, and will require users to install a fallback plugin. WordPress plugin developer <a href="https://profiles.wordpress.org/ayeshrajans/">Ayesh Karunaratne</a> has created a new plugin called <a href="https://wordpress.org/plugins/oembed-plus/">oEmbed Plus</a> that brings back support for Facebook and Instagram content embedding. It guides users through the process of setting up Facebook developer app credentials.</p>



<p>For those who are using the Gutenberg plugin, the Facebook and Instagram blocks have been <a href="https://github.com/WordPress/gutenberg/pull/24472">removed</a> as part of tomorrow&rsquo;s version 9.0 release. oEmbed links will continue to work until Facebook&rsquo;s API change goes into effect.</p>



<p>Moving forward, publishers will need to re-examine how they include social media links within their content. <a href="https://wptavern.com/wordpress-5-5-to-remove-hulu-from-list-of-supported-oembed-providers">Hulu recently dropped oEmbed support</a> after being available as an oEmbed provider in WordPress for the past 11 years. As major players like Facebook and Instagram follow suit in abandoning open web API&rsquo;s, the web is growing increasingly more fragmented. Facebook&rsquo;s upcoming API change will leave millions of broken embeds in its wake, with little pieces of embedded history lost along the way, in instances where website owners are no longer updating their content.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 15 Sep 2020 22:47:12 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:28;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:82:"WPTavern: Digging Into Recipe Card Blocks, WPZOOM’s Solution for Recipe Bloggers";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104730";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:201:"https://wptavern.com/digging-into-recipe-card-blocks-wpzooms-solution-for-recipe-bloggers?utm_source=rss&utm_medium=rss&utm_campaign=digging-into-recipe-card-blocks-wpzooms-solution-for-recipe-bloggers";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:8785:"<p class="has-drop-cap">After publishing a post about the new <a href="https://wptavern.com/start-a-recipe-blog-with-the-recipe-block-wordpress-plugin">Recipe Block</a> plugin last week, several people were quick to point out that WPZOOM had released a recipe-related block plugin two years ago. Among them, was the plugin author, Pavel Ciorici. I had previously tested the <a href="https://wordpress.org/plugins/recipe-card-blocks-by-wpzoom/">Recipe Card Blocks</a> plugin and thought it fit into that &ldquo;overly complex&rdquo; category that is not ideal for the average user who wants to share a recipe here or there. However, it may fit the bill for more dedicated recipe bloggers.</p>



<p>Over the past few days, I have been testing the plugin and giving it a more in-depth second look.</p>



<p><em>My thoughts on the plugin?</em> Not much has changed. I would still recommend the Recipe Block plugin that I covered last week for its simplicity and ease of use. However, this is not a comparison post. There is a lot to like about WPZOOM&rsquo;s Recipe Card Blocks plugin, and it caters to a similar but somewhat different audience. It is also not a single block plugin and would never be in the official WordPress block directory in its current form. Instead, it is a more fully-featured recipe plugin. Blocks are merely its primary component.</p>



<p>Recipe Card Blocks is packed full of options and features. If that&rsquo;s your thing, it might interest you as a potential user. And, the pro version tacks on tons more, such as star ratings, social sharing, and adjustable serving sizes from the front end.</p>



<h2>Recipe Card Blocks</h2>



<img />Using the Recipe Card block in the editor.



<p class="has-drop-cap">The primary feature of the plugin is its Recipe Card block, which outputs Schema markup. This could give a search results boost or at least help search engines understand that you have a recipe on the site. For serious recipe bloggers, this is probably one of the most important features this plugin offers.</p>



<p>The question is really if the plugin&rsquo;s Recipe Card block is worth using. For users who want options, options, and more options, the plugin offers at least a couple dozen of them for this one block alone. It has a plethora of toggles, inputs, buttons, and other things to customize. The downside is that it can be a bit overwhelming. With so many options, it also means the plugin developers must maintain tighter control over the elements within the block, which can mean less flexibility in other ways.</p>



<p>The block includes the standard fields that one might expect for a recipe card, such as servings, cook and prep time, ingredients and directions lists, and an image. However, it goes above and beyond by including extra features like:</p>



<ul><li>Grouping for ingredients and directions.</li><li>Recipe video section.</li><li>Notes section.</li><li>Pinterest button.</li><li>Print button.</li></ul>



<p>One of my favorite features of the Recipe Card block is that site readers can check off ingredients on the front end. For ingredient-heavy recipes, this can be a time-saver in the kitchen as you gather the things you need to get started.</p>



<img />Ticking items off the ingredients checklist on the front end.



<p>The default design is beautiful. There is ample spacing between elements. The sections are clearly separate so that there&rsquo;s no confusion for the reader. It simply looks good.</p>



<p>However, there are some limitations and issues. At times, the default design is too opinionated, overruling theme styles. It also does not support wide alignment and has a hard limit on its maximum width of 750 pixels. This could make it undesirable with some site designs. Nevertheless, the plugin team made generally smart design decisions. It should work well within most contexts.</p>



<p>What makes the Recipe Card block tough to use is that end-users must jump back and forth between the post content area and the block options in the right sidebar panel. For example, users must add the course, cuisine, and difficulty text in the sidebar but add the servings, prep time, and cooking time in the content editor.</p>



<p>Entering items in the ingredients or directions lists also requires more work than one might think. Typically, in visual editors, simply hitting the <code>Enter</code> key should create a new list item. This is not the case with the Recipe Card block. Even tabbing moves users to other controls instead of hopping between items in the list. It is particularly frustrating if you prefer to use the keyboard over the mouse.</p>



<p>These usability issues keep the plugin from being simply a <em>good</em> plugin rather than a <em>great</em> plugin. User experience issues are not insurmountable. They can be addressed, and I hope the team can continue iterating on and improving the experience.</p>



<p>I would also like to see the block opened up for the addition of other inner, sub-blocks. Currently, the layout is locked in place. While it may be suitable for some users, locking the block template means that users can neither move the current elements around nor add custom sections that suit their needs. Locking the block means that the plugin author retains control over much of the output, which can sometimes be a good thing &mdash; quality control. However, it makes the block less flexible.</p>



<p>This inflexibility is somewhat mitigated with the plugin&rsquo;s other blocks. While the Recipe Card block is the primary feature of the plugin, it does break its sub-elements down into individual blocks that users can use to create their own layout by dropping them into a Group or other container-type block. It offers the following extra blocks:</p>



<ul><li>Details</li><li>Directions</li><li>Ingredients</li><li>Jump to Recipe</li><li>Print Recipe</li><li>Nutrition</li></ul>



<img />Separate Nutrition block in the editor.



<p>With a little ingenuity and perhaps a plugin like <a href="https://wordpress.org/plugins/block-pattern-builder/">Block Pattern Builder</a> (a plugin that I maintain), end-users could create custom, reusable recipe layouts.</p>



<h2>The Big Issue</h2>



<p class="has-drop-cap">The thing I dislike about the plugin the most is that it outputs a &ldquo;RECIPE CARD PLUGIN BY WPZOOM&rdquo; message in the front-end post content output. This message is hidden in the editor view. Plugin users can see it only on the front end. For the average user, there is no easy way to remove this message without upgrading to the pro version of the plugin, which costs at least $69.</p>



<p>Frankly, commercializing the removal of a credit link a shady business practice. It is a tactic that preys on those who do not know how to code. <em>Sorry, I got no love to give for this.</em></p>



<p>This was frowned up 10-15 years ago when theme authors were doing it. It should be frowned upon today when plugin authors do the same.</p>



<p>Upsell custom branding. Upsell a 100 other things that <em><strong>add value</strong></em>. Don&rsquo;t upsell removing a credit link that you are outputting in the user&rsquo;s post content. This one problem with the plugin paints a stain over everything else that is good about it.</p>



<h2>Final Thoughts</h2>



<p class="has-drop-cap">I do not want to end on a negative note. Recipe Card Blocks is a useful plugin for those who want more than a basic recipe block. It is almost more of a recipe management tool but not quite.</p>



<p>I would have taken a different route with some of the development based on the publicly-known plans for the plugin. For example, I could see creating a recipe custom post type separate from the block system. Then, allow users to insert these &ldquo;recipe posts&rdquo; into the block editor. With plans to add custom taxonomies to the plugin, it makes sense to keep the whole data layer separate.</p>



<p>It seems the plugin is torn between being a recipe block and a full recipe management plugin. I would like to see it fully commit to the latter because that seems to be the direction it is heading. However, from an architectural standpoint, it will need work to get there. It can still be done, despite two years of legacy code, and it has the opportunity to carve out its own space in the ecosystem.</p>



<p>If the plugin&rsquo;s development team would remove the upsell of the credit link, I would absolutely recommend this plugin to people who want to run a serious, full-time recipe blog. It has those extra features like a nutrition label, a print button, and Schema markup that give it an edge over some of the competition. For users who simply want to add a recipe on their blog from time to time, it is overkill.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 15 Sep 2020 21:25:24 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:29;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:42:"Akismet: Introducing updated Akismet plans";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:31:"http://blog.akismet.com/?p=2086";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:70:"https://blog.akismet.com/2020/09/15/introducing-updated-akismet-plans/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3109:"<p>Since Akismet launched nearly 15 years ago, it has <a href="https://blog.akismet.com/2020/07/06/akismet-five-hundred-billion-with-a-b-spam/">blocked 500 billion spam comments</a>. We’re proud to have saved you countless hours of moderation time, reduced frustration for millions of people, and helped make the web a more beautiful place.</p>
<p>Akismet is the most powerful solution on the market for stopping spam, but spammers are continually inventing new ways to get past our filters. Adding new spam detection techniques will ensure we keep Akismet one step ahead of bad actors, but it will require additional investment. We don’t take changing prices lightly. In fact, we haven’t changed the price of the entry-level plan since it was introduced in 2005.</p>
<p>For commercial sites, the price of Akismet will be better aligned to API usage. This means that as you use Akismet more, the cost per API call will decrease.</p>
<p>For those that use Akismet on your personal sites — we’re 100% committed to offer Akismet at a price you can afford. Spam is a menace to the internet and we feel that everyone should have the ability to stop spam on their websites. Even if you’re not making money from your site, we want you to have the best spam filter available. We will continue to provide the option to pay what you can, and we thank you for helping to contribute to this project.</p>
<p><strong>To our current customers, you don’t need to do anything now.</strong> Your plan will remain at its original price and API limits at least into 2021. If you’d like to switch plans or start a new account, your plan will start at the new price.</p>
<p><img /></p>
<p><strong>What’s different?</strong></p>
<p><span>Personal</span></p>
<p>No changes. For sites that don’t sell anything, advertise, or have affiliate links, Akismet is available for whatever amount you are able to pay.</p>
<p><span>Plus</span></p>
<p>Akismet will block spam on one site for up to 10,000 API calls and provide priority support for $8.33 per month billed yearly. The price for monthly billing is $10. That’s equal to two months free for selecting yearly billing.</p>
<p><span>Enterprise</span></p>
<p>We’re decreasing the price of our Enterprise plan! Yearly plans will now be $41.66 per month, with the total yearly cost at $500 instead of $550. For monthly billing, the price is staying the same at $50 per month. For enterprise plans, Akismet will block spam on multiple sites for up to 60,000 API calls per month, as well as provide priority support on all sites.</p>
<p><span>Enterprise Plus</span></p>
<p>For our largest customers, we’re happy to provide discounted pricing and dedicated support through this new plan. If your sites have more than 60,000 API calls per month, <a href="mailto:partners@akismet.com">contact us</a> and we’ll be happy to set you up.</p>
<p>Thank you for your continued support of Akismet. If you have questions specifically related to your own Akismet account or API key, then <a href="https://docs.akismet.com/">please visit our Support page</a>.</p>
<p>&nbsp;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 15 Sep 2020 15:59:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Josh Smith";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:30;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:83:"WPTavern: Podcasting During the Pandemic: Castos Sees 300% Growth in New Podcasters";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102111";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:207:"https://wptavern.com/podcasting-during-the-pandemic-castos-sees-300-growth-in-new-podcasters?utm_source=rss&utm_medium=rss&utm_campaign=podcasting-during-the-pandemic-castos-sees-300-growth-in-new-podcasters";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6841:"<img />&ldquo;My Podcast Set I&rdquo;&nbsp;by brainblogger&nbsp;is licensed with <a href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0.</a> 



<p>Podcasting, like many other industries during the pandemic, is seeing a strong shift over the past six months, which has resulted in more shows and fewer listeners. While some avid podcast fans have taken solace in listening to their favorite shows to stay connected, many listeners who previously had podcasts built into their routines have turned to other forms of media consumption in the absence of a daily commute.</p>



<p>In April, global podcast listening was <a href="https://blog.voxnest.com/coronavirus-impact-on-podcast-listening/">up 42%</a> (and 53% in Europe) as lockdowns began in the U.S. and other parts of the world. Although listening in the U.S. went down 20%, certain verticals remained strong, such as true crime, music interviews, science, medicine, religion and spirituality, and self-improvement. </p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">worst part of still quarantining is the fact that I don&rsquo;t drive anywhere so im super behind on my podcasts</p>&mdash; Brad Parbs (@bradparbs) <a href="https://twitter.com/bradparbs/status/1301571407437074433?ref_src=twsrc%5Etfw">September 3, 2020</a></blockquote>
</div>



<p>Prior to the pandemic, the podcasting industry was experiencing a boom, with experts projecting marketers to spend <a href="https://www.searchenginejournal.com/marketers-will-spend-1-billion-on-podcast-advertising-by-2021-report/316499/#close">over $1 billion in advertising by 2021</a>. The pandemic has thrown a wrench into the industry&rsquo;s growth. In the months of continued isolation and social distancing, E-marketer recorded its first contraction in time spent listening since it began tracking in 2015 but estimates a rebound in the coming years.</p>



<img /><strong><em>Source:</em></strong>&nbsp;<a rel="noreferrer noopener" href="https://www.emarketer.com/" target="_blank">eMarketer</a>, June 2020 (<a rel="noreferrer noopener" href="https://www.emarketer.com/content/time-spent-with-podcasts-will-dip-amid-pandemic-should-rebound-by-2022?ecid=NL1001" target="_blank">https://www.emarketer.com/content/time-spent-with-podcasts-will-dip-amid-pandemic-should-rebound-by-2022?ecid=NL1001</a>)



<p>The pandemic may have temporarily stunted the growth of listeners, but the team at <a href="https://castos.com/">Castos</a> is witnessing a new trend emerging: individual creators and businesses are finding the time and inspiration for firing up new shows. From April until now, the podcast hosting company has seen a 300% increase in new trials, and a 102% increase in MRR over last two years. Castos currently has nearly 2,000 paying customers. </p>



<p>The company started in 2017 after non-technical founder Craig Hewitt acquired the <a href="https://wordpress.org/plugins/seriously-simple-podcasting/">Seriously Simple Podcasting</a> plugin from its original creator, Hugh Lashborooke.&nbsp;Hewitt expanded the platform to allow both WordPress and non-WordPress users to create podcasts, and has grown the business to support seven remote, full-time employees. He attributes most of the industry&rsquo;s fresh infusion of new shows to companies that are exploring new ways of getting into customers&rsquo; homes.</p>



<p>&ldquo;Many brands are finding that traditional marketing efforts are falling short in these turbulent times, but great content that serves a specific audience always has an impact,&rdquo; Hewitt said.&nbsp;&ldquo;Many companies are pivoting from more conventional paid acquisition approaches to building stronger and longer lasting relationships with their audiences through podcasting.&rdquo;</p>



<p>Hewitt said he expects the trend to continue after the pandemic subsides. Many of the companies Castos works with have reported that podcasting is likely to become a core part of their marketing efforts for the long haul, in both B2B and B2C environments. </p>



<p>&ldquo;Like the move to remote work many companies are seeing that podcasting isn&rsquo;t hard to do, and provides great returns for them in terms of branding and as a top of funnel customer acquisition strategy,&rdquo; Hewitt said. &ldquo;Whether in the midst of Coronavirus or afterwards this will continue to be true and the momentum that podcasting has gained should continue.&rdquo;</p>



<p>Approximately 70% of Castos&rsquo; hosting customers are using the Seriously Simple Podcasting plugin. The hosting platform is unique in the podcasting market in that it automates YouTube Republishing, transcriptions, and Headliner integration, while allowing users to manage it all via WordPress. Castos recently hired Matt Medeiros, an experienced podcaster and YouTube creator, to help new podcasters keep pushing with their shows and convert into longterm customers. He shares Hewitt&rsquo;s optimistic outlook on the future of the industry.</p>



<p>&ldquo;There were early reports that podcast download stats dropped in tandem with listener commute times, but I think that opened up opportunity for creators to really capture their most loyal audiences,&rdquo; Medeiros said.</p>



<p>&ldquo;The other side of that coin are the businesses that needed to stay top of mind with the customers while their doors were closed. Spinning up a podcast is a perfect way to do that. Podcasts come in all shapes and sizes, so building one that&rsquo;s tailored to your customers is what really matters and will survive through our post-pandemic &lsquo;new normal.'&rdquo;</p>



<p>Portability is the common denominator for podcasts &ndash; people are listening from their desktops, mobile devices, and smart speakers, using a variety of different apps. But audiences vary in their appetites for staying informed, educated, and entertained through the podcasting medium. Medeiros advises both new and established podcasters to find out what kind of show their customers want them to produce.</p>



<p>&ldquo;Podcasts don&rsquo;t have to be cookie cutter,&rdquo; Medeiros said. &ldquo;If you spend time getting feedback from your customers or audience, you want to tailor the show around that. Do they like 15 minute news highlights or 3 hour 1-on-1 interviews? Do they want hard news or laugh out loud entertainment? What&rsquo;s in it for them as a listener? What&rsquo;s in it for you as a creator?</p>



<p>&ldquo;At the end of the day, the biggest opportunity for podcasting is that it opens the door to having your favorite creators and fans in the same room every time you publish an episode. It&rsquo;s a chance to (literally) have a conversation and build trust through creative storytelling &ndash; your brand&rsquo;s digital handshake.&rdquo;&nbsp;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 15 Sep 2020 01:44:30 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:31;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:85:"WPTavern: Plugin Authors Can Opt Into Email Confirmation for WordPress Plugin Updates";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104653";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:215:"https://wptavern.com/plugin-authors-can-opt-into-email-confirmation-for-wordpress-plugin-updates?utm_source=rss&utm_medium=rss&utm_campaign=plugin-authors-can-opt-into-email-confirmation-for-wordpress-plugin-updates";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5149:"<p class="has-drop-cap">Overnight, the Meta Team for WordPress.org <a href="https://meta.trac.wordpress.org/changeset/10255">flipped the switch</a> for a new plugin author feature in the official directory. It allows plugin authors to opt into confirming plugin updates via email. Release confirmations will strengthen security and make sure any updates sent in are intentional.</p>



<p>Dion Hulse opened the <a href="https://meta.trac.wordpress.org/ticket/5352">original ticket</a> six weeks ago with a detailed proposal and set of questions. <a href="https://wptavern.com/wordpress-5-5-eckstine-introduces-block-directory-block-patterns-and-automatic-updates-for-themes-and-plugins">WordPress 5.5</a> introduced <a href="https://wptavern.com/automatic-theme-and-plugin-updates-slated-for-wordpress-5-5">automatic updates</a> for plugin and theme authors. While auto-updates are completely opt-in for end-users, Hulse wanted to make sure that WordPress.org was on top of any potential disasters that may arise from the new system, such as accidental or even malicious plugin releases.</p>



<p>&ldquo;I&rsquo;d like to propose that we add an extra optional step into the release flow for plugins, not intended on adding friction, but intending to ensure that plugin releases only get made when they&rsquo;re intended to,&rdquo; he wrote. &ldquo;A simple Email confirmation.&rdquo;</p>



<p>At the moment, release confirmation via email is merely an opt-in feature that all plugin authors can take advantage of. However, the original proposal required it for high-usage plugins &mdash; there was never a definitive minimum install count that constituted &ldquo;high usage&rdquo; in the ticket.</p>



<p>The general agreement on how this feature should work seems to be:</p>



<ul><li>Opt-in for all plugin authors now.</li><li>Forced opt-in and no opt-out for high-usage plugins soon.</li><li>Opt-out for all other plugins in the future.</li></ul>



<p>For larger plugins with multiple committers, there was some discussion on requiring confirmation from a separate committer who did not push the code live. This would essentially require two people to confirm that a plugin update is valid. This could potentially add to the friction that Hulse wanted to avoid in the original proposal. However, some friction for plugins with millions of installs might not always be such a bad thing. These plugins serve a massive user base and can damage WordPress&rsquo;s reputation if a malicious actor gained commit access somehow. Having two people confirm an update is <em>a good kind</em> of friction in some cases.</p>



<p>However, requiring two-person confirmation is a more nuanced discussion that will need to happen. For example, Chris Christoff brought up examples in the ticket of not being able to send updates for plugins with two committers when one is on vacation or when the committers live in different time zones. Perhaps this will be an opt-in feature for plugin companies that choose to go this route in the future, depending on what fits their release flow best.</p>



<p>On the whole, the current implementation is a good starting position that will allow the community to iron out further details. This is about making WordPress more secure. If there is an extra step involved in publishing a code update, plugin authors should be on board with the process. Verifying the validity of a release sounds like a common-sense security feature. I would welcome WordPress.org making this a hard requirement &mdash; neither opt-in nor opt-out &mdash; in the long run after the feature has gone through a few rounds of real-world testing.</p>



<p>Theme developers do not have access to this feature at this time. However, the theme authors do not have access to SVN and must submit updates via a ZIP file. It is a much more manual process and should not be subjected to the same number of potential mishaps as plugin updates.</p>



<h2>How Plugin Authors Can Enable Release Confirmation Emails</h2>



<img />Enable email release confirmation form for plugin authors.



<p class="has-drop-cap">Plugin authors should now see a new administration option for each of their projects listed in the official plugin directory. The Danger Zone section of the Advanced View tab should display a new sub-section for enabling release confirmation emails. From there, authors merely need to click a button to turn them on.</p>



<p>It is important to note that, once enabled, release confirmation emails cannot be disabled from the same screen. Plugin authors are presented with the following notice before enabling the feature:</p>



<blockquote class="wp-block-quote"><p>Warning: Enabling release confirmations is intended to be a permanent action. There is no way to disable this without contacting the plugins team.</p></blockquote>



<p>Do not let the warning put you off if you are a plugin author. This is a good thing. Go ahead and enable it on at least one plugin if you want to test it first. I already have done so for one of my plugins. It is a simple process and helps add one additional layer of security over your plugins.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 14 Sep 2020 20:34:09 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:32;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:48:"BuddyPress: BuddyPress 6.3.0 Maintenance release";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://buddypress.org/?p=313809";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:48:"https://buddypress.org/2020/09/buddypress-6-3-0/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1260:"<p>Immediately available is <a href="https://downloads.wordpress.org/plugin/buddypress.6.3.0.zip">BuddyPress 6.3.0</a>. This maintenance release:</p>



<ul><li>fixes 1 bug related to the 6.2.0 release,</li><li>fixes 2 bug related to the 6.0.0 release,</li><li>is a recommended upgrade for all BuddyPress installations.</li></ul>



<p>For details on the changes, please read the&nbsp;<a href="https://codex.buddypress.org/releases/version-6-3-0/">6.3.0 release notes</a>.</p>



<p>Update to BuddyPress 6.3.0 today in your WordPress Dashboard, or by&nbsp;<a href="https://wordpress.org/plugins/buddypress/">downloading from the WordPress.org plugin repository</a>.</p>



<div class="wp-block-spacer"></div>



<h2>Many thanks to 6.3.0 contributors <span class="dashicons dashicons-heart"></span></h2>



<p>&nbsp;<a href="https://profiles.wordpress.org/DJPaul/">Paul Gibbs (DJPaul)</a>,&nbsp;<a href="https://profiles.wordpress.org/scipi">scipi</a>,&nbsp;<a href="https://profiles.wordpress.org/r-a-y/">r-a-y</a>,&nbsp;<a href="https://profiles.wordpress.org/dcavins/">David Cavins (dcavins)</a>, <a href="https://profiles.wordpress.org/webmasterfreya/">webmasterfreya</a>, &nbsp;<a href="https://profiles.wordpress.org/imath/">Mathieu Viet (imath)</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 14 Sep 2020 17:26:10 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Mathieu Viet";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:33;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:90:"WPTavern: WordPress Themes Directory Adds New “Delist” Status for Non-Compliant Themes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104585";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:213:"https://wptavern.com/wordpress-themes-directory-adds-new-delist-status-for-non-compliant-themes?utm_source=rss&utm_medium=rss&utm_campaign=wordpress-themes-directory-adds-new-delist-status-for-non-compliant-themes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4182:"<p>In August, following the <a href="https://wptavern.com/astra-theme-suspended-and-reinstated-themes-team-works-toward-delisting-strategy-for-guideline-violations">suspension of the popular Astra theme</a>, WordPress Meta contributors opened a ticket to add a new &ldquo;delisting&rdquo; status for non-compliant themes. Astra&rsquo;s infraction, breaking the directory&rsquo;s ban on affiliate links, put more than a million users at risk of not getting theme updates just as WordPress 5.5 was on deck for release. This week the team <a href="https://meta.trac.wordpress.org/changeset/10240">committed a patch</a> for a delist status that will temporarily hide a theme from search, while still making it available directly. Alex Shiels outlined how the new status will work:</p>



<ul><li>Delist is only available from a&nbsp;<code>published</code>&nbsp;state.</li><li>Relist will set the status back to&nbsp;<code>publish</code>.</li><li>Delisted themes are excluded from site search.</li></ul>



<p>While a full suspension may seem like the best retributive action when theme authors violate directory guidelines, the necessity for users to be able to continue to get updates outweighs throwing the book at the author, especially for a first-time offense. A delisting policy is more restorative in that it seeks to maintain the connection that users have with the theme&rsquo;s author instead of merely imposing a penalty that might ultimately have a negative impact on everyone involved.</p>



<p>In the past, the Themes Team has been limited on available actions for responding to violations. Ionut Neagu, CEO of ThemeIsle, had his company&rsquo;s popular Zerif Lite theme <a href="https://wptavern.com/zerif-lite-suspended-from-wordpress-theme-directory-300k-users-left-without-updates">suspended from the directory in 2016</a> for a five-month period that left 300,000+ users without maintenance and security updates. It also resulted in a 63% decline in the company&rsquo;s revenue for that theme, since ThemeIsle was using WordPress.org as the primary channel for distribution.</p>



<p>Neagu remarked on how the new &ldquo;delist&rdquo; status provides a less severe transition back into the directory for popular themes:</p>



<blockquote class="wp-block-quote"><p>The practice of delisting is something that&rsquo;s already been done by other companies in similar situations. For instance, delisting is what Google does all the time when they find a website that doesn&rsquo;t comply. Then, the website is allowed to come back and appear on the ranking pages again when the issues are fixed.</p><p>In the end, I think this is a move in the right direction and an improvement to the process of what happens with a problematic theme.</p></blockquote>



<p>Despite the controversial decision that slashed ThemeIsle&rsquo;s revenue from $120k/month to $45k/month in 2017, the company continued to support the theme, as well as new products, with WordPress.org as the main place to find them. Neagu reported that when the theme was reinstated, its revenue continued to be hard hit. It lost momentum and was unable to ride the wave of its initial success. Astra faired much better in the aftermath of its violation, given its short-lived suspension.</p>



<p>WordPress Themes Team member Alexandru Cosmin requested the ticket for adding the delisting status receive prompt attention, as the team is set to <a href="https://meta.trac.wordpress.org/ticket/5362#comment:13">introduce some new policies</a> and requirements that are tied to it. The patch was committed and then reverted temporarily to review how it impacted theme trac tickets, but the bugs appear to be unrelated to the patch.</p>



<p>The volunteer Themes Team has essentially been the de facto guardians of the WordPress.org marketplace that sends millions of dollars to theme authors, and they perform a great service to the community. But in the interest of supporting and accelerating the growth of the WordPress ecosystem, the team needs to adopt policies that create a more restorative path for violators, instead of obstructing the growth of products where issues have been quickly resolved.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 11 Sep 2020 22:59:30 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:34;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:95:"WPTavern: Addressing the Theme Design Problem With Gutenberg’s New Block-Based Widgets System";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104569";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:229:"https://wptavern.com/addressing-the-theme-design-problem-with-gutenbergs-new-block-based-widgets-system?utm_source=rss&utm_medium=rss&utm_campaign=addressing-the-theme-design-problem-with-gutenbergs-new-block-based-widgets-system";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5655:"<p class="has-drop-cap">I could hardly sleep last night. Once in a blue moon, I have an idea I want to try out. While my day job as a writer means I spend far less time breaking sites through the rigorous trials and errors of building plugins and themes, some problems bug me with WordPress, the sort that keeps me from dozing into restful and peaceful dreams.</p>



<p>Last week, Gutenberg 8.9 <a href="https://wptavern.com/gutenberg-8-9-brings-block-based-widgets-out-of-the-experimental-stage">dropped the experimental flag</a> from its block-based widgets system. Overall, it was a solid first outing for a feature that should land in WordPress 5.6 this December. However, the largest problem centered on how theme authors would be able to style widgets in traditional fashion. Because actual widgets are being phased out and replaced with blocks, theme authors will no longer have access to the standard widget and widget title classes. This is problematic because there is no predictable way to style all widgets of a particular sidebar to look the same.</p>



<p>The classic example is of the <em>boxed</em> widget design. Many themes, such as the popular <a href="https://wordpress.org/themes/colibri-wp/">Colibri</a>, employ such a design for their sidebars as shown in the following screenshot.</p>



<img />Boxed widget design in right sidebar of Colibri theme.



<p>In its current state, there is no reliable way for theme authors to create such a sidebar design via the block-based widgets system. Because there is no way to exert any sort of control over the structure of whatever content users will drop into a sidebar, it would be easy to look at this situation and think that theme designers are losing control.</p>



<p>Based on a recent <a href="https://github.com/WordPress/gutenberg/issues/25174">GitHub ticket</a> and a related <a href="https://wordpress.slack.com/archives/C02QB2JS7/p1599661386001500">Slack discussion</a> from earlier this week, it does not appear that the Gutenberg development team intends to create parity between the old and new widgets systems, at least as far as theme design is concerned.</p>



<p>It bears repeating. I am a fervent supporter of <a href="https://wptavern.com/rebirth-of-creativity-gutenberg-and-the-future-of-wordpress-themes">handing over this type of ultimate control</a> to the user. However, we need to balance that with helping them to make smart choices.</p>



<p>Theme authors must begin thinking about how this impacts the work they do and come up with creative solutions for sidebars, widgets, and other areas that will be affected by full-site editing in the future.</p>



<h2>A Potential Solution</h2>



<p class="has-drop-cap">That thing that kept me up last night was an idea of combining block patterns, <a href="https://wptavern.com/block-patterns-will-change-everything">one of my favorite features</a>, with widgets. The trouble was that the block-based widgets system does not currently support block patterns. And, until a quick discussion with Mark Uraine, one of Gutenberg&rsquo;s designers, on a <a href="https://github.com/WordPress/gutenberg/issues/22875#issuecomment-689601857">GitHub ticket</a>, the idea did not seem to even be on the table.</p>



<p>For theme authors, the traditional sidebar and widget system of the past was nothing more than a pattern. WordPress provided theme devs with the ability to set a wrapping HTML element for the entire widget and the widget title. It was a rigid and inflexible system, but it was a reliable standard.</p>



<p>Block-based widgets are the complete opposite. They are essentially a free-for-all where users can drop arbitrary content into a &ldquo;block area.&rdquo;</p>



<p><em>What happens when we combine the structure of patterns with the flexibility of blocks inside of sidebars?</em></p>



<p>That was the idea that got me out of bed and behind the computer screen early this morning after my restless night. It was such a simple concept. Theme authors could provide a &ldquo;widget&rdquo; pattern to their end-users. This would provide users with a choice between what the theme author thinks best and forging their own path &mdash; the best of both worlds.</p>



<img />Simple example of recreating a boxed &ldquo;widget&rdquo; pattern.



<p>And, here is where the beauty of the block system really comes in. Theme authors can create any number of patterns. This provides even more options for users.</p>



<p>Regardless of whether the Gutenberg plugin currently supports patterns for the block-based widget system, the idea was simple to test. In a sidebar on the new widgets screen, I merely needed to add a new Group block with the <code>widget</code> class. Then, I added an H3 Heading block with the <code>widget__title</code> class. Those classes may even be unnecessary in the context of patterns unless theme authors want to directly target them. Outside of the custom classes, I added a simple background to the Group block and changed the text color of the Heading. I also inserted an empty paragraph where the user&rsquo;s custom content would go.</p>



<p>Afterward, it was a simple matter of testing it with various blocks.</p>



<img /><em>Faux</em> block pattern in the widgets block editor.



<p>I would love to know what theme authors and the Gutenberg team think of the idea. I think it has some merit while soothing some of the transitional pains between traditional widgets and block-based widgets.</p>



<p>The biggest issue I see is the discoverability aspect. Will end-users know these &ldquo;widget/block patterns&rdquo; exist if theme authors went this route?</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 11 Sep 2020 18:56:14 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:35;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:72:"WPTavern: AMP Plugin 2.0 Adds Onboarding Wizard and Expanded Reader Mode";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104487";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:189:"https://wptavern.com/amp-plugin-2-0-adds-onboarding-wizard-and-expanded-reader-mode?utm_source=rss&utm_medium=rss&utm_campaign=amp-plugin-2-0-adds-onboarding-wizard-and-expanded-reader-mode";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4008:"<p>The <a href="https://wordpress.org/plugins/amp/">official AMP plugin for WordPress</a> recently crossed the 2.0 milestone, a major release that <a href="https://github.com/ampproject/amp-wp/milestone/28?closed=1">closed 141 issues and merged 174 pull requests</a>. The release was originally planned for v1.6 but due to the number of major changes the team decided to bump it to 2.0.</p>



<p>One of the most significant updates in this release is the expansion of the Reader Mode. The plugin has a lot of AMP-specific terminology associated with it and unless you are working with it every day, it&rsquo;s easy to get confused by the different modes. Standard Mode is an AMP-first site where all URLs are presented as AMP pages. Transitional Mode uses one theme but canonical non-AMP URLs may offer a separate AMP version. Reader Mode uses two themes with the active one for canonical non-AMP URLs and a separate &ldquo;Reader&rdquo; theme for AMP URLs.</p>



<p>Version 2.0 introduces a new AMP Customizer for customizing the Reader theme. It loads with a mobile view and does not support widgets or homepage settings, as they are not applicable for the AMP version. The AMP Customizer makes it easy for site owners to make tweaks and changes that will only apply to the AMP version of URLs.</p>



<img />



<p>The Reader Mode is especially useful for sites that are not using <a href="https://amp-wp.org/ecosystem/themes/">AMP-compatible themes</a>. Google engineer Weston Ruter described the expanded Reader Mode as follows:</p>



<blockquote class="wp-block-quote"><p>Reader mode now allows for any AMP-compatible theme to be used to serve AMP pages, rather than just the legacy post templates. This allows for long-requested features including nav menus, logos, commenting, and template design variations. It also makes it possible to serve all URLs of a Reader-mode site in AMP, as opposed to just singular posts.&nbsp;</p></blockquote>



<p>One major usability update in version 2.0 is the addition of an onboarding wizard and revamped Settings screen that guides users through the different templating modes when configuring the plugin. Users who are routed to Reader Mode will be presented with a selection of themes for serving AMP pages and the wizard will handle installation. The final step of the configuration process allows users to review their choices in a preview screen.</p>



<img />



<p>Given the complexity of the AMP plugin and its many configuration options, the onboarding wizard was a critical addition if the plugin is going to grow past 500,000 active installs to reach a larger number of non-technical users.</p>



<p>Another notable update in this release includes a feature called &ldquo;Plugin Suppression&rdquo; that allows administrators to turn certain plugins off for AMP pages if they are causing validation errors. It also introduces mobile redirection for Transitional/Reader mode sites where AMP is intended to be the mobile version.</p>



<p>AMP is still far from a plug-and-play experience for WordPress users but the plugin does a lot of the heavy lifting and is evolving towards becoming more approachable for non-technical users. To that end, the AMP plugin team just announced a new video series that will focus on success with WordPress as a content creator, as well as performance and usability.</p>



<p>&ldquo;We are crafting it with an audience in mind that covers both technical and non-technical users,&rdquo; Google Developer Advocate Alberto Medina said. &ldquo;The 2.0 version of the plugin makes an emphasis on providing options for users that are non technical but still want to take advantage of AMP to bring great page experiences to their users.&rdquo; </p>



<p>The series will launch next week on <a href="https://www.youtube.com/c/TheAMPProject">Google&rsquo;s AMP YouTube channel</a>. Medina is also working on another series geared towards content creators that will cover topics like Web Stories in the first episodes. </p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 10 Sep 2020 22:44:54 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:36;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:68:"WPTavern: Start a Recipe Blog With the Recipe Block WordPress Plugin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104474";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:181:"https://wptavern.com/start-a-recipe-blog-with-the-recipe-block-wordpress-plugin?utm_source=rss&utm_medium=rss&utm_campaign=start-a-recipe-blog-with-the-recipe-block-wordpress-plugin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4468:"<p>&ldquo;Organize your quarantine-inspired baking blog with a &lsquo;Recipe&rsquo; block!&rdquo; read the opening description of Kelly Choyce-Dwan&rsquo;s new plugin, <a href="https://wordpress.org/plugins/recipe-block/">Recipe Block</a>. That was enough to pique my interest. I love food. I love baking &mdash; mostly pizza and bread. Food-related plugins and themes almost inspire me to spin up a recipe blog of my own. <em>Almost.</em></p>



<p>At least with plugins like this, I can dream of building that site. Or, I can vicariously live through those who have the inclination, passion, and drive to post recipes regularly.</p>



<p>For far too long, building a recipe blog has required specialized themes or overly complex plugins. I have been eagerly awaiting a simple recipe block because I have known since Day 1 of Gutenberg&rsquo;s launch that it would be well-suited to such a feature. Choyce-Dwan&rsquo;s Recipe Block plugin makes the complex simple and brings recipe-blogging to any WordPress user.</p>



<h2>Using the Recipe Block</h2>



<ul><li class="blocks-gallery-item"><img />Recipe Block</li><li class="blocks-gallery-item"><img />Cover + Recipe Block</li><li class="blocks-gallery-item"><img />EditorPlus + Recipe Block</li></ul>



<p class="has-drop-cap">Within a couple of minutes of installing and activating the plugin, I had a quick pizza recipe set up and published on my test install. It worked well with the several themes I tested it against. I did make a couple of spacing adjustments via CSS for my personal theme, but that is not uncommon for plugins that have front-end output.</p>



<p>Technically, the plugin adds four blocks:</p>



<ul><li><strong>Recipe:</strong> Primary block that houses other blocks.</li><li><strong>Information:</strong> Sub-block for adding servings, time, and difficulty level.</li><li><strong>Ingredients:</strong> Sub-block for listing ingredients.</li><li><strong>Directions:</strong> Sub-block for listing directions.</li></ul>



<p>The Recipe block also makes use of the core Image and Heading blocks. It is as simple to use as nearly any other block. Add the block to a post via the inserter or the <code>/recipe</code> slash command. From there, end-users can customize the output to their heart&rsquo;s content.</p>



<p>Because the Recipe block itself lacks any custom colors or other stylistic options outside of wide and full-width alignment, the easiest way to spruce up the design a bit is to drop it into a Cover or Group block. Doing so provides a wider range of design options. For those users who need even more design control, Munir Kamal&rsquo;s <a href="https://wptavern.com/control-block-design-via-the-editorplus-wordpress-plugin">EditorPlus plugin</a> is a nice addition when wrapping it with the Group block.</p>



<p>One of the best things about the Recipe block is that it is not locked. End-users can move sub-blocks around to their liking. It even allows nesting of other blocks. Not everyone creates the exact same type of recipe cards, so it makes sense to have some extra customizability.</p>



<p>The block is also flexible enough for recipes that have multiple ingredients and directions lists. <em>So, that pie and pie crust recipe you want to share?</em> No problem. You can split the ingredients and directions so that your readers are not accidentally dropping lard into the pie filling.</p>



<h2>Missing Features</h2>



<p class="has-drop-cap">The Recipe Block plugin is by no means ideal for every situation. Some features could make it stand out a bit more. For the most part, I wanted a few additional styling options.</p>



<p>Choyce-Dwan makes it clear in the plugin description that it does not support Schema or structured content. That would make a nice block option for those who want to enable it.</p>



<p>I would like to be able to change the text and background color of the main Recipe block. However, this is easily done by wrapping it with the core Group block. Ultimately, I would like to have the option to add some different styles to it, such as a custom border. Such a feature should probably land in core WordPress first so that there is a standard.</p>



<p>It would be nice to allow users to change the font size and colors within the Information, Ingredients, and Directions blocks similar to how the core Paragraph block works. Again, you can wrap this with the Group block and at least set the colors at a higher level.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 10 Sep 2020 21:00:10 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:37;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:91:"WPTavern: Deque Systems to Host Axe-Con Virtual Accessibility Conference, March 10-11, 2021";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104433";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:223:"https://wptavern.com/deque-systems-to-host-axe-con-virtual-accessibility-conference-march-10-11-2021?utm_source=rss&utm_medium=rss&utm_campaign=deque-systems-to-host-axe-con-virtual-accessibility-conference-march-10-11-2021";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3263:"<p><a rel="noreferrer noopener" href="https://www.deque.com/" target="_blank">Deque Systems</a>, a widely respected accessibility firm that has <a href="https://wptavern.com/wordpress-accessibility-team-to-host-hackathon-with-deque-systems-at-wordcamp-us-2018">contributed</a> to setting up automated accessibility testing for WordPress core, will be hosting a new &ldquo;<a href="https://www.deque.com/axe-con/">Axe-con</a>&rdquo; virtual conference focusing on digital accessibility. Axe-con is named for the company&rsquo;s <a href="https://github.com/dequelabs/axe-core">axe-core</a> project, an open source library and accessibility testing engine that can be customized to integrate with all modern browsers and testing frameworks. It&rsquo;s happening March 10-11th, 2021, and tickets are free.</p>



<p>Learning how to create accessible experiences for the web is challenging. Axe-con will bring together experts from around the world who can accelerate that journey for developers, designers, business owners, accessibility professionals, and anyone involved in the team effort required to make digital experiences accessible. The event will feature multiple tracks with a variety of topics, including sustainable accessibility, compliance, best practices, and case studies from organizations leading large-scale accessibility efforts.</p>



<p>For those interested in obtaining or maintaining IAAP (International Association of Accessibility Professionals) certification, attendance at Axe-con sessions can count towards <a href="https://www.accessibilityassociation.org/content.asp?contentid=395">IAAP continuing education (CE)</a> credits.</p>



<p>The event will also include a hackathon where attendees will have the opportunity to network with each other while coding and collaborating on accessibility projects. A few examples include testing open source component libraries and logging issues, building new axe integrations, and working on personal projects.</p>



<p>Deque Systems is hosting this new conference the same week as the CSUN Assistive Technology Conference. The company is has attended and sponsored the event in the past but sees the need for a conference focused more on building accessible digital experiences. Deque could no longer meet this need by tackling those topics in a single sponsorship room limited to 100 people. When its CSUN 2020 sessions were forced to go virtual, the team discovered that thousands were able to join in on topics more related to digital accessibility.</p>



<p>Organizers anticipate that attendees will join both CSUN and axe-con in 2021. By scheduling the events in the same week, they are hoping to help attendees make more efficient use of their time that would normally be set aside for traveling to an in-person conference.</p>



<p><a href="https://www.deque.com/axe-con/register/">Registration</a> is open and last week organizers reported there were already <a href="https://twitter.com/dboudreau/status/1301610760951431168">more than 2,000 people signed up</a>. The Call for Papers will be open until 8:00PM ET&nbsp;Friday, October 23rd, 2020, and speakers will be notified by November 23. Talks will be broadcast in the Eastern timezone but international speakers are welcome.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 10 Sep 2020 05:23:40 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:38;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:71:"WPTavern: Exploring Seedlet, Automattic’s Block-First WordPress Theme";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104405";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:179:"https://wptavern.com/exploring-seedlet-automattics-block-first-wordpress-theme?utm_source=rss&utm_medium=rss&utm_campaign=exploring-seedlet-automattics-block-first-wordpress-theme";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5580:"<img />



<p class="has-drop-cap">On August 26, Automattic <a href="https://wordpress.com/blog/2020/08/26/seedlet-wordpress-theme/">launched a new theme titled Seedlet</a> that focused on integrating with the WordPress block editor. A few days later, it was also <a href="https://wordpress.org/themes/seedlet/">live in the WordPress.org theme directory</a>. The theme development team wanted to produce a theme that would be in a good position to transition to full-site editing later this year as WordPress 5.6 lands.</p>



<p>Seedlet makes wide use of features that integrate with the block editor. It does so in what is the simplest of ways, which is a testament to how much easier theme development is becoming in the dawn of the block-based themes era. The theme makes liberal use of theme-supported features like custom font sizes, colors, and gradients. It takes its integration an extra step by registering block styles and patterns.</p>



<p>Seedlet almost feels like a skin around the block editor. It is a prime example of the future that we&rsquo;re hurtling toward, which will mean less focus on code and more focus on design configuration. Themes will not be <em>themes</em> in the traditional sense. I use the term &ldquo;skin&rdquo; because it harkens to various systems in days gone by where designers simply added CSS to skin a site. WordPress themes will always be a bit more complex than a simple stylesheet but not much more so. We will be getting back to the basics of CSS and HTML.</p>



<p>That is what I see when I look through the Seedlet theme&rsquo;s code. While it still has copious PHP, there is an unmistakable structure that clearly says that that theme development is changing &mdash; and here is what it looks like as we transition.</p>



<p>I have seen many themes that developers have built to work with the block editor. However, I have seen only a few that have taken a block-editor-first approach. It is almost subtle, and unless you have been neck-deep into theme development for years, you may miss it. Automattic&rsquo;s theme team is riding the winds of change. Theme authors who want to ride along should pay attention to where this project goes in the coming months.</p>



<p>The one thing I do not understand is why Automattic did not choose to add the &ldquo;Block Editor Styles&rdquo; tag to the theme. It clearly adds such styles. This is a missed opportunity to help users find themes compatible with the block editor.</p>



<p>The theme will not suit everyone&rsquo;s taste. It is a basic blogging theme at its core. However, its wide-open canvas makes it suitable for a variety of sites. The theme&rsquo;s typography is on point, creating a comfortable reading pace for longer-form work. There is a lot to like about the theme, but I am primarily interested in what the development team has built for the block editor.</p>



<p>Kjell Reigstad, the primary designer on the theme, also <a href="https://themeshaper.com/2020/08/31/introducing-seedlet/">announced the team is working</a> on a completely block-based version called <a href="https://github.com/Automattic/themes/tree/master/seedlet-blocks">Seedlet Blocks</a>. The current plan is to continue iterating on it and launching it as a separate, standalone theme in the future.</p>



<h2>Experimenting With Block Patterns</h2>



<p class="has-drop-cap">While Seedlet includes only three block patterns, they immediately stood out to me. The patterns are not overly complex, but they are unique designs that make use of core blocks with a mixture of the theme&rsquo;s presets, such as custom gradients and block styles.</p>



<p>The &ldquo;Group with Split Background&rdquo; pattern uses a Group block with the theme&rsquo;s preset diagonal gradient to create a background for an Image block. It is not a particularly groundbreaking design. However, the beauty is in the simplicity. It shows that theme authors can create interesting designs without adding extra CSS code.</p>



<img />Group with Split Background pattern in the editor.



<p>The theme&rsquo;s &ldquo;Group with Image Overlap&rdquo; pattern kicks it up a notch in complexity. Starting with the same concept of a Group block with another custom gradient preset, it throws in a Columns block. In the left column, users can add two images, stacked. In the right column, users can add one image. The end result is a custom layout &mdash; primarily because of the gradient background &mdash; where the two images from the left column overlap the solid background.</p>



<img />Front-end output of the Group with Image Overlap pattern.



<p>The technique is simple in terms of code, but it takes a good designer to create the concept. We are just now scratching the surface of what theme designers will be able to accomplish when they begin thinking about applying various techniques to the block system. Seedlet has some of that sort of outside-the-box thinking with its use of gradients. We need to see more of that from the theming community.</p>



<p>Admittedly, I am not a fan of the third pattern the theme adds. &ldquo;Alternating Grid of Latest Posts&rdquo; inserts the Latest Posts block into the editor with the theme&rsquo;s custom &ldquo;Alternating Grid&rdquo; style. Mostly, I just do not care for the layout, but that is simply based on my personal taste.</p>



<img />Alternating Grid of Latest Posts pattern in the editor.



<p>On the whole, I love what the theme is doing with block patterns. This type of exploration is exactly what the WordPress community needs right now.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 09 Sep 2020 21:10:31 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:39;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:127:"WPTavern: Jetpack Launches Email Marketing Tools with Creative Mail Integration, WooCommerce-Triggered Store Emails Coming Soon";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104350";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:297:"https://wptavern.com/jetpack-launches-email-marketing-tools-with-creative-mail-integration-woocommerce-triggered-store-emails-coming-soon?utm_source=rss&utm_medium=rss&utm_campaign=jetpack-launches-email-marketing-tools-with-creative-mail-integration-woocommerce-triggered-store-emails-coming-soon";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6173:"<p>Jetpack is firing up a new suite of email marketing tools in partnership with Endurance International Group&rsquo;s Constant Contact brand. Last week <a href="https://wptavern.com/jetpack-8-9-adds-donations-block-newsletter-form-and-social-previews">version 8.9</a> of the plugin introduced a new newsletter signup form inside its Form block, based on an integration with the <a href="https://wordpress.org/plugins/creative-mail-by-constant-contact/">Creative Mail</a> plugin that Constant Contact recently launched as a solution tailored specifically to WordPress and WooCommerce. </p>



<img />



<p>The release post highlighted the ability to add WordPress posts and WooCommerce products into email marketing campaigns, but today the Jetpack team <a href="https://jetpack.com/2020/09/08/introducing-creative-mail-for-jetpack/">elaborated</a> on where they are taking the integration. The features Creative Mail has on deck for future releases are heavily geared towards e-commerce stores. The initial launch includes the ability for store owners to sync their contacts to their email lists in order to market to them directly. Curt Raffi, Senior VP of Product Innovation at EIG, said WooCommerce-triggered store emails are on the way.</p>



<p>&ldquo;Soon, we&rsquo;ll add automated customer lifecycle marketing journeys that are geared toward more advanced marketers and eCommerce seller,&rdquo; Raffi said. The planned features include the following: </p>



<ul><li>Create triggered, multi-step customer lifecycle marketing journeys</li><li>Send WooCommerce abandoned cart emails</li><li>Send post-purchase follow-up emails</li><li>Send emails about related products</li></ul>



<p>Email marketing is a critical piece of the puzzle for online store owners looking to connect to customers, as they adapt to the pandemic with reduced foot traffic for brick and mortar locations. Stats from Campaign Monitor show that email send volumes <a href="https://www.campaignmonitor.com/blog/email-marketing/2020/05/best-times-to-send-email-during-2020-pandemic/">increased by 31%</a> for a random selection of their customers with mid-sized email lists during the 30-day period after March 17 versus the 30 days prior to that. Despite a sizeable increase in send volumes, average open rates for these decreased only slightly, from 31% to 30%, while click-through rates remained the same at 4%. </p>



<p>Even with all the perfunctory messages acknowledging &ldquo;these uncertain times,&rdquo; email is still an important channel for reaching customers. As social networks are becoming increasingly hostile and unfavorable environments for advertising, email stands as one of the few remaining direct lines where content won&rsquo;t get instantly buried by potential customers doomscrolling their news feeds.</p>



<p>Automattic CEO Matt Mullenweg commented on Twitter last month about the value of having a follower&rsquo;s email address vs a connection on a social network. &ldquo;So many of these people with newsletters should really be blogging,&rdquo; Mullenweg said.</p>



<p>&ldquo;I do think that a follower you have an email address of and a direct relationship with is worth 1,000x a follower on a social network. Maybe it&rsquo;s just about making things more website-first than email-first, especially for younger audiences that don&rsquo;t use email.&rdquo;</p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">Jetpack needs to make it much easier to blog and newsletter at the same time :)</p>&mdash; Stephane Boisvert (@stephBoisvert) <a href="https://twitter.com/stephBoisvert/status/1295794679754174464?ref_src=twsrc%5Etfw">August 18, 2020</a></blockquote>
</div>



<p>One response to his tweet caught my attention &ndash; a suggestion that Jetpack make it more convenient to manage a website-first solution for email marketing. It looks like this idea was already in the works with Creative Mail and the Constant Contact partnership.</p>



<p>Although Constant Contact already had an <a href="https://wordpress.org/plugins/constant-contact-forms/">official plugin</a> for WordPress, it only has 40,000 installs. Compare that with MailChimp, which is far and away the <a href="https://www.datanyze.com/market-share/email-marketing--13/mailchimp-market-share">market leader</a> when it comes to email marking providers. Mailchimp has many third-party plugins for WordPress, which collectively have more than a million users, including an official <a href="https://wordpress.org/plugins/mailchimp-for-woocommerce/">Mailchimp for WooCommerce</a> plugin, with 800k+ active installs. Constant Contact stands to have a better chance penetrating the WordPress market by partnering with a highly successful plugin like Jetpack.</p>



<p>Email marketing is not an easy plugin niche to break into, which is evident by the slow growth of newcomers like <a href="https://wordpress.org/plugins/newsletter-glue/">Newsletter Glue</a>. The plugin is marketed as a <a href="https://mattreport.com/building-a-substack-alternative-with-wordpress/">Substack alternative</a>, with its &ldquo;Send as newsletter&rdquo; feature inside the WordPress editor. It connects to different emails services, provides easy-to-share past issues, and creates a search engine-friendly newsletter archive. Despite all the promotion and buzz on social networks, the plugin only has ~30 active installs after one month in the official directory.</p>



<p>With its deep integration with Jetpack and WooCommerce, Creative Mail has the chance to quickly become a contender among established WordPress email marketing plugins like <a href="https://wordpress.org/plugins/mailchimp-for-wp/">MC4WP: Mailchimp for WordPress</a> (1 million+ installs), <a href="https://wordpress.org/plugins/mailpoet/">MailPoet</a> (100k), <a href="https://wordpress.org/plugins/email-subscribers/">Email Subscribers</a> (100k), and <a href="https://wordpress.org/plugins/newsletter/">Newsletter</a> (300k). Creative Mail has a broader scope of features that it will be supporting, but it may be able to find success on the basis of Jetpack&rsquo;s ubiquity.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 09 Sep 2020 05:20:24 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:40;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:66:"WPTavern: More Power in the Hands of WordPress Support Forum Users";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104352";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:177:"https://wptavern.com/more-power-in-the-hands-of-wordpress-support-forum-users?utm_source=rss&utm_medium=rss&utm_campaign=more-power-in-the-hands-of-wordpress-support-forum-users";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6013:"<p class="has-drop-cap"><em>What level of control should users have over their WordPress support forum topics?</em> That is the question at the heart of a <a href="https://make.wordpress.org/support/2020/09/talking-point-allowing-self-archival-of-topics/">recent discussion opened</a> by Mika Epstein on the Make Support blog. The goal is to grant more power to users, particularly when they post private or privileged information to the public forums.</p>



<p>The proposal is twofold. One idea is to give users total control over deleting or &ldquo;archiving&rdquo; topics they create. This would remove it from public view at least. The second part of the equation would extend the amount of time users have to edit their topics.</p>



<p>Currently, users can edit topics for one hour after posting. For the most part, this is reasonable. However, there are some cases where users inadvertently post sensitive data and need to remove it later. After their hour is up, the only solution for editing is to contact a forum moderator, increasing the burden on the WordPress support team. The easiest solution is to increase the length of time to edit.</p>



<p>The big downside to editing topics is that they can be changed so much that replies are out of context. This can make discussions, particularly, lengthier ones with more replies, hard to follow. However, given the nature of the WordPress forums being for support instead of long-form discussion, increasing the time-to-edit should not hurt. It should help users fix mistakes and lighten the load on forum moderators. There are proposals for increasing the limit between three to seven days.</p>



<p>In general, I am supportive of increasing the time-to-edit for forum topics. There is some room for abuse of the system, but such abuse will not likely outweigh the benefits. However, the ability to delete a topic does not sit well with me.</p>



<p>I see the problem. WordPress&rsquo;s user base has changed over the past decade. The average user from 10 years ago was tech-savvy enough to not drop private info &mdash; or info they are not legally allowed to share &mdash; into public forums. The game has changed. Users are no longer webmasters, running every aspect of their sites. They are using one-click installs to launch software they have no technical knowledge of. They do not know the difference between a debug log and server info. This is not a bad thing &mdash; the more WordPress users the more we inch toward that democratize-publishing goal. However, the makeup of WordPress&rsquo;s users has shifted drastically to a point where many may not realize they are posting information they shouldn&rsquo;t.</p>



<p>The burden ultimately falls on forum moderators. They do all the cleanup, and it is likely overwhelming at times to keep up. It is a decision that should probably fall into their hands.</p>



<p>One of the catalysts for this discussion was a forum topic from last week. &ldquo;Someone had posted information that isn&rsquo;t exactly &lsquo;private&rsquo; but could land them in legal trouble for sharing,&rdquo; wrote Epstein. &ldquo;They did so by posting a debug log that had information that probably should not be public.&rdquo;</p>



<p>The WordPress support system has had a long-standing, in-house rule of not deleting posts except under extreme circumstances. However, the proposal would allow users to delete their own topics at any time.</p>



<p>I dislike the idea of removing support forum topics. The best form of support is to already have a question answered. This gives others the ability to search and find the answer to their own questions. It allows moderators to link to existing answers for repeat questions. Allowing users to remove topics means that others could miss out on free knowledge.</p>



<p>I ran a plugin and theme support forum for over a decade. It racked up hundreds of thousands of posts. I personally answered every question or made sure that each was answered by someone else. Over the years, the forums became a wealth of knowledge because, except in those extreme circumstances, no topic was ever deleted. Granted, my support burden was far lighter than that of the WordPress support moderators. However, past forum topics were an important tool in the arsenal.</p>



<p>Moreso than my time running support, I have relied on past support forum topics for my edification throughout the years. Rarely has there been a time I have needed an answer that I could not find through a basic support search. No need to hassle others with my already-answered questions.</p>



<p>I dislike the idea of deleting knowledge.</p>



<p>Of course, we must weigh this against privacy. I doubt many users would take advantage of the ability to delete their topics. In those rare cases when they do, I imagine they will have a good reason for doing so, such as hiding information they no longer want to share publicly. Still, the idea does not sit well with me. I want a balance of retaining knowledge while removing personal data.</p>



<p>I do have respect for privacy. There are steps WordPress.org could take. Users should absolutely be able to remove their own accounts from WordPress.org. Currently, they can remove any personal data from their profile, which is essentially the same thing. The one problem with this is if their username, which cannot be changed, identifies the person (e.g., I use <code>justintadlock</code> for many online accounts).</p>



<p>I would still take this the extra step and allow users to completely delete their accounts. This would be a clean sweep, ensuring they did not accidentally miss something when clearing out their profile. After doing so, their former topics in the forums should simply be assigned to an anonymous account. It doesn&rsquo;t matter who created a particular topic, only that the content still exists.</p>



<p>What steps do you think WordPress.org should take to provide end-users more agency over their support topics?</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 08 Sep 2020 21:24:33 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:41;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:57:"WordCamp Central: WordCamp Finland Online 2020 is coming!";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:39:"https://central.wordcamp.org/?p=3128690";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:84:"https://central.wordcamp.org/news/2020/09/08/wordcamp-finland-online-2020-is-coming/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1942:"<div class="entry-content">
<p>We are pleased to announce that the WordCamp Finland Online will on November 12 2020, 12:00-17:00 Helsinki time (UTC+2). <a href="https://www.worldtimebuddy.com/?qm=1&lid=658225&h=658225&date=2020-11-12&sln=12-17">Check the time in your local timezone</a>.</p>
<p>We are looking for speakers to present their knowledge, skills, experiences, and stories with the WordPress community. Applications from all areas of expertise are most welcome.</p>
<p><strong>Call for Speakers is open now!</strong> Submissions will close on October 2, 2020. See all details and send your application on <a href="https://finland.wordcamp.org/2020/call-for-speakers/">Call for Speakers page</a>.</p>
<p>WordCamps would be nothing without awesome sponsors, helping us to cover the costs and providing great offers for attendees! Not forgetting all the useful information they provide.</p>
<p>Call for Sponsors will open soon, we are currently finalizing our offerings for sponsors! If you are interested to sponsor WordCamp Finland Online 2020, make sure to subscribe for updates!</p>
<p>Tickets to WordCamp Finland Online 2020 will be free of charge! Registration is not required but recommended for getting the full experience and all the offers from our sponsors.</p>
<p>Remember to subscribe, using the form in the footer, to stay up to date regarding event news and announcements. We’ll be posting regularly in the months leading up to WordCamp Finland with information about speakers, tickets, and practical information.</p>
<p>You will also be able to find updates from our <a href="https://twitter.com/wordcampfinland">Twitter</a>. The official hashtag for WordCamp Finland Online is #WCFI. If you need to reach us you can comment on one of our social media posts or <a href="https://finland.wordcamp.org/2020/about/contact/">contact us using the website</a>.</p>
<p>We hope you’ll join us online in November!</p>
</div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 08 Sep 2020 12:51:37 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Timi Wahalahti";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:42;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:94:"WPTavern: iThemes Enters the WordPress Membership Plugin Market, Acquires Restrict Content Pro";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104095";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:231:"https://wptavern.com/ithemes-enters-the-wordpress-membership-plugin-market-acquires-restrict-content-pro?utm_source=rss&utm_medium=rss&utm_campaign=ithemes-enters-the-wordpress-membership-plugin-market-acquires-restrict-content-pro";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6902:"<p class="has-drop-cap">Last Tuesday, iThemes announced it had <a href="https://ithemes.com/restrict-content-pro-is-joining-ithemes-family/">acquired the Restrict Content Pro plugin</a> from Sandhills Development. iThemes is part of the Liquid Web family of brands.  Pippin Williamson, Managing Director at Sandhills, said the company had no <a href="https://sandhillsdev.com/2020/09/a-long-bright-future-for-restrict-content-pro-with-ithemes-and-liquid-web/">intention of selling the plugin</a> last October when talks of the acquisition began. However, moving forward has created some opportunities for his company and narrowed its focus to its existing products.</p>



<p><a href="https://restrictcontentpro.com/">Restrict Content Pro</a> will remain an independent product with its own website. However, iThemes will include it as part of its Plugin Suite and Toolkit product bundles from the iThemes website. The Plugin Suite bundle runs at $249 per year, which is the same as the regular Restrict Content Pro price. However, the bundle includes other products such as the company&rsquo;s popular BackupBuddy plugin. The Toolkit bundle runs between $700 and $997 per year. It includes the Plugin Suite, a themes package, training, and more.</p>



<p>This structuring of product sites falls directly within the company&rsquo;s long-term plans. &ldquo;Earlier this year we actually started down a number of avenues experimenting with moving some of our products off ithemes.com and over to their own sites,&rdquo; said AJ Morris, the Product Innovation and Marketing Manager at iThemes. &ldquo;When COVID became a pandemic, we paused a lot of those projects to provide relief and help to the WordPress community. Now that things have calmed down for us a bit, we&rsquo;re going to continue on that path.&rdquo;</p>



<p>Outside of the change of ownership, end-users should not see much change with the plugin or the site. Users should expect some admin-side changes in the future as the new development team refreshes the plugin.</p>



<h2>The Membership Plugin Space</h2>



<p class="has-drop-cap">Membership plugins represent a slice of the overall WordPress market that still has no true dominant player. There are several solutions out there, but it is still an emerging area that any company can dive into and see returns on with a solid product. It is a niche that will undoubtedly continue growing along with WordPress and has plenty of untrodden ground just waiting for the right people to take their first steps across. There will always be a need for more fine-tuned control over users and permissions than what WordPress offers out of the box. </p>



<p>&ldquo;We are always in the market looking at other plugins that make sense for our business,&rdquo; said Morris of why they made the acquisition. &ldquo;Our audience is primarily freelance developers that are building a wide range of sites for clients. Over the years, we&rsquo;ve focused on a number of non-utility products (like iThemes Exchange) and we learned a lot during that time. We&rsquo;ve also learned a lot over the years of running our own membership site. For us looking at a membership plugin played with into the iThemes strategy and really the Liquid Web strategy as a whole.&rdquo;</p>



<p>I spent nine years developing and maintaining a membership-related plugin but sold it in 2019. If there is one lesson I learned during that time, it&rsquo;s that no two sites have the exact same membership needs. There is always room for individual companies to build a product that meets specific user needs in the membership space.</p>



<p>&ldquo;What I feel like is everyone is currently trying to create the best Swiss Army knife,&rdquo; said Morris. &ldquo;I don&rsquo;t think that anyone sets out saying I want to be good at all things, but when you&rsquo;re developing a plugin that has so much possibilities for the market it serves, you have to feel out where you want to play and claim stake to that area. You become the best you can in that area and work at making sure you succeed there. Then you can start to properly branch out to other segments of the space that are within close proximity to where your core is.&rdquo;</p>



<p>iThemes is stepping into the game at an ideal time. Restrict Content Pro is currently a $500,000+ per year product, according to Williamson. In the right hands and with continued growth, it could become the go-to solution for memberships in the WordPress ecosystem. iThemes has a solid history in the plugin space. This is a good opportunity to see where they take the project.</p>



<h2>The Future of Restrict Content Pro</h2>



<p class="has-drop-cap">Morris said that Sandhills Dev already had a solid short to mid-term plan for the plugin. These plans are providing iThemes with a head-start on features and ideas, some of which are already in progress. The team&rsquo;s plan is to continue down this path, which matches some of the areas the company wanted to address.</p>



<p>&ldquo;After that, we&rsquo;ve got some ideas, but we also want to get to know the community around Restrict Content Pro,&rdquo; said Morris. &ldquo;[Matt Danner] has mentioned in several places that the RCP community is more developer-centric while the iThemes community is historically not. Right now we&rsquo;re in listening mode. We&rsquo;re starting conversations all over the web with RCP customers to get a sense of what they are looking at and apply those learnings with where we want to take RCP in the membership space. Right now, I think it&rsquo;s a bit premature to talk about specific features we&rsquo;re including or what direction we&rsquo;re fully going.&rdquo;</p>



<p>The one area that is currently lacking is the free <a href="https://wordpress.org/plugins/restrict-content/">Restrict Content plugin</a>. Its user base is still relatively small (10,000 active installs). Its average 3.7 star-rating from end-users does not spell confidence, but it could be brought up with some active work.</p>



<p>Restrict Content Pro has long had the benefit of being associated with Williamson and Sandhills Development&rsquo;s other products like Easy Digital Downloads and AffiliateWP. All of these projects fit well together &mdash; often a user of one plugin needs at least one of the others. The pro plugin has likely not relied on the traffic from WordPress.org for success. However, it would not hurt to bring those numbers up. While the install count from the free version does not always directly correlate to success with commercial versions, it is usually a good indicator. Putting some resources behind beefing up the free plugin could translate to better returns in the long term.</p>



<p>Morris said that iThemes will be sharing news about the free Restrict Content plugin soon. However, he is remaining tight-lipped about what those plans are for now.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 07 Sep 2020 21:35:36 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:43;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:41:"WP Mobile Apps: How do I make a new page?";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"http://apps.wordpress.com/?p=4145";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:63:"https://apps.wordpress.com/2020/09/06/how-do-i-make-a-new-page/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:459:"<p>To make a new page, tap the <img /> icon and select your site, then select “Site Pages”. Tap the <img /> icon in the bottom-right corner to open a new page. You can edit any page by selecting it by title from the “Pages” screen.If you are looking for your drafts or your scheduled pages, check the menu across the top of the page and select the &#8220;Drafts&#8221; or &#8220;Scheduled&#8221; tab to access the list of the pages.</p>
<p><img /></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 06 Sep 2020 15:53:24 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:7:"logosom";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:44;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:41:"WP Mobile Apps: How do I make a new Post?";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"http://apps.wordpress.com/?p=4136";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:63:"https://apps.wordpress.com/2020/09/06/how-do-i-make-a-new-post/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:538:"<p>To make a new post, tap the <img /> icon and select your site, select “Blog Posts”, then tap the <img />icon in the bottom-right corner. You can edit any post by selecting it from the “Blog Posts” screen.  If you are looking for your drafts or your scheduled posts, check the menu across the top of the page and select the &#8220;Drafts&#8221; or &#8220;Scheduled&#8221; tab to access the list of the posts.</p>
<p><img src="https://apps.files.wordpress.com/2019/10/screen-shot-2019-10-09-at-15.10.06.png?w=640&h=1021" /></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 06 Sep 2020 15:47:22 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:7:"logosom";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:45;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:97:"WPTavern: WordPress Support Team Seeks to Curb Support Requests for Commercial Plugins and Themes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104255";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:239:"https://wptavern.com/wordpress-support-team-seeks-to-curb-support-requests-for-commercial-plugins-and-themes?utm_source=rss&utm_medium=rss&utm_campaign=wordpress-support-team-seeks-to-curb-support-requests-for-commercial-plugins-and-themes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7049:"<img />



<p>WordPress&rsquo; Support Team contributors are <a href="https://make.wordpress.org/support/2020/09/talking-point-handling-support-for-commercial-users-on-the-wordpress-forums/">discussing</a> how they can curb support requests for commercial products on the official WordPress.org forums. Users sometimes seek help for commercial product upgrades on the forums of the free version, not knowing that the moderators&rsquo; official policy is to refer them to the extension&rsquo;s commercial support channel. In other instances, it is not immediately clear whether the issue is with the free version or a paid upgrade that the user has installed. </p>



<p>&ldquo;This has come up a few times the past weeks, mostly in relation to plugins that have a free base product on&nbsp;<a rel="noreferrer noopener" target="_blank" href="http://wordpress.org/">WordPress.org</a>, but sell addons on their own site, and where the line is drawn on who can get supported where,&rdquo; WordPress contributor Marius Jensen said during the team&rsquo;s most recent meeting. &ldquo;Authors are not allowed to support their paid products on&nbsp;<a rel="noreferrer noopener" target="_blank" href="http://wordpress.org/">WordPress.org</a>&nbsp;as is, but where do you draw the line, for example, when a base plugin causes issues with a paid addon, should then support be allowed for the base product on&nbsp;<a rel="noreferrer noopener" target="_blank" href="http://wordpress.org/">WordPress.org</a>, since that&rsquo;s the root issue, or should it be shipped off to the author&rsquo;s own site, since it affects a paying user?&rdquo;</p>



<p>This type of issue is common among products where WordPress.org is the main distribution channel for a popular free theme or plugin. The support relationship between the free and commercial products often intersects in an ambiguous way.</p>



<p>&ldquo;The goal is to ensure that paying customers and free users get the best support they can, from the ones that can give it,&rdquo; Jensen said. Volunteers do not have access to the commercial products, nor is it their job to support them. This is the crux of the matter.</p>



<p>&ldquo;It&rsquo;s an unacceptable misuse of volunteers time to support a product someone else has been paid to support,&rdquo; Jensen said.</p>



<p>Contributors discussed how they can handle different scenarios where it&rsquo;s unclear where the root of the problem is, in order to move the burden away from the support moderators, allowing the extension&rsquo;s author to discern if the problem is with the free version or commercial add-on. Volunteers should not have to familiarize themselves with the minute distinctions between the features that are offered for free or as an upgrade.</p>



<p>On the other side of these support scenarios, where it isn&rsquo;t clear where the problem originates, plugin and theme authors can be inconvenienced when support topics are hastily closed.</p>



<p>&ldquo;It&rsquo;s just that the closing of topics seems counter productive for those (users and devs alike) that get it wrong,&rdquo; plugin developer Arnan de Gans said. &ldquo;Since&nbsp;plugin/theme makers do not have any control over these forums we can&rsquo;t do a thing after topics get closed. Which works against the user experience by creating confusion.&rdquo; He suggested the team consider a grace period where the developer has a day or two to respond.</p>



<p>Ben Meredith, head of support for a freemium&nbsp;plugin, chimed in on the discussion, urging the support team to consider how closing issues can sometimes create a bad user experience:</p>



<blockquote class="wp-block-quote"><p> An issue related to premium products is raised, and summarily closed by forum mods for being about a premium product. This creates a &ldquo;googleable&rdquo; record of the error message/problem that then attracts other visitors. Once the issue has been closed, we get copy-cat issues &ldquo;I am having the same problem (link to closed post)&rdquo; We get those replies in both followup forum posts and internal tickets. To the layperson who has no idea the distinction between &ldquo;WordPress&nbsp;core&nbsp;volunteer&rdquo; and &ldquo;Company I just paid money to,&rdquo; this creates a bad experience all around.</p><p>Premium users are treated like second-class citizens on the forums. They don&rsquo;t know the guidelines, and reached out for help. This may be their first interaction with the WordPress community, and sometimes a well-meaning forum moderator can come across as wrist-slapping the exact people we want to give white-glove service to (they just paid us!).</p></blockquote>



<p>Michelle Frechette, Head of Customer Success at GiveWP, also shared this sentiment regarding the user experience. </p>



<p>&ldquo;Something I&rsquo;m not seeing addressed much here is how alienating it can feel to be corrected by the mods (or even the&nbsp;plugin&nbsp;authors) to be directed from the forums back to the paid support page,&rdquo; she said. </p>



<p>Ben Meredith said that despite sticky posts telling users not to post questions about commercial products, notes in the readme file, website notices, and canned replies, users will inevitably end up posting in the forums anyway. Steering them away to commercial support channels should be done in a way that does not make seeking help on WordPress.org an unwelcoming experience.</p>



<p>&ldquo;I want for the forums to feel as welcoming as a&nbsp;WordCamp,&rdquo; Meredith said.</p>



<p>&ldquo;The current enforcement of the &lsquo;premium plugins can&rsquo;t get support here&rsquo; is not in line with that overarching goal: users using and enjoying WordPress. Currently, premium users (who are potential community members and community leaders!) are getting a first impression of the community that is &lsquo;You&rsquo;re doing it wrong!&rsquo;</p>



<p>&ldquo;I&rsquo;d rather their first impression be &lsquo;Happy to help! heads up, for questions like this in the future, we need you to go here.'&rdquo;</p>



<p>In trying to ease the burden placed on volunteer support forum moderators, it&rsquo;s important to consider how any new policy might also negatively impact developers hosting their plugins and themes on WordPress.org, and what kind of vibe the response gives to users in search of help. There are more suggestions for solutions in the comments on the post, and the discussion is open until&nbsp;<a href="https://www.timeanddate.com/worldclock/fixedtime.html?iso=20200913T0000">Saturday, September 12, 2020, 07:00 PM CDT</a>. The Support Team is seeking to get a wider range of viewpoints from plugin and theme authors before making a final decision on new guidelines for addressing requests for support on commercial products. Make sure to <a href="https://make.wordpress.org/support/2020/09/talking-point-handling-support-for-commercial-users-on-the-wordpress-forums/">jump in on the comments</a> within the next week if you have something to add to the discussion.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 05 Sep 2020 02:03:55 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:46;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:80:"WPTavern: Gutenberg 8.9 Brings Block-Based Widgets Out of the Experimental Stage";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104238";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:205:"https://wptavern.com/gutenberg-8-9-brings-block-based-widgets-out-of-the-experimental-stage?utm_source=rss&utm_medium=rss&utm_campaign=gutenberg-8-9-brings-block-based-widgets-out-of-the-experimental-stage";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6765:"<p class="has-drop-cap">On Wednesday, September 2, <a href="https://make.wordpress.org/core/2020/09/03/whats-new-in-gutenberg-2-september/">Gutenberg 8.9 launched</a> with a set of new features, enhancements, and several bug fixes. The development team took the block-based widgets system out of its experimental stage, making it the default experience for all plugin users.</p>



<p>Block-based widgets have taken months upon months of work. The team has surpassed some of my expectations by essentially sticking a square peg into a square hole, granting the power of blocks to the sidebars/widgets system. On the whole, the system works. However, the team still has a lot of work to mold this feature into the shape it needs to be in for the upcoming WordPress 5.6 release in December. It is important that the community at large test, provide feedback, and contribute where possible.</p>



<p>Gutenberg plugin users who have not yet enabled block-based widgets via the experiments screen in past versions will be in for a surprise. The new system will have some of the familiarity of the block editor. However, it is a much different experience than traditional widgets.</p>



<p>The big questions we must answer is whether the feature is currently usable and whether it can be ready for WordPress 5.6.</p>



<h2>New Widgets Screen</h2>



<img />Block-based widgets screen.



<p class="has-drop-cap">Gutenberg completely replaces the old Appearance &gt; Widgets screen in the WordPress admin. The plugin no longer has an option for end-users to disable it, which was expected. The goal is to begin getting users accustomed to building their sidebars with blocks rather than traditional widgets.</p>



<p>For the most part, the new widgets screen handles block-based widgets without issue from a usability perspective. Adding blocks is little different from working with the post-editing screen. It should feel relatively natural for users who are accustomed to the block editor. If anything, the experience seems scaled down in comparison.</p>



<p>Unlike widgets in the past, blocks cannot be collapsed (the sidebars themselves can be). As a long-time WordPress user, this feels uncomfortable. However, it is the sort of uncomfortableness that will simply take some adjustment time.</p>



<p>Core legacy widgets worked well. However, I could not get legacy widgets to work from several third-party plugins. Sometimes, they disappeared from the editor. Then, they would later appear, seemingly at random. Eventually, during testing, I completely broke the page to the point where it did not display anything. Fortunately, I was able to fix it by clearing out a few widget-related rows from the database.</p>



<p>As a developer, I want to simply wipe the slate clean and leave the old widgets system in the dust of history. However, doing so may very well alienate many end-users. For this feature to be successful, we need to carry them along and allow them to easily transition from their current tools to the new system.</p>



<h2>Widget Blocks in the Customizer</h2>



<img />Widget blocks section in the customizer.



<p class="has-drop-cap">While the primary widget blocks screen was generally solid, that was not the case with widget blocks in the customizer. At best, it was sub-par.</p>



<p>We may finally be at that point where I agree with all those earlier complaints of the customizer control panel being too narrow. The most obvious issue was that the block toolbar was too wide for the control panel, hiding pieces of it off-screen. For some blocks, there are buttons that users cannot access.</p>



<p>That is not the end of the issues. Block options are unavailable, so users cannot even add something as basic as an image alt attribute. The core legacy widget blocks are not editable. The &ldquo;more options&rdquo; button popup has a transparent background, making the text unreadable and, for all intents and purposes, not worth attempting a use.</p>



<p>I understand that WordPress is still far from launching widget blocks in the customizer, but the feature was practically unusable. It is still very much in an experimental state and probably should have remained optional for another plugin update or two or three. I cannot recommend using this within any sort of production environment. Stick with the widgets screen in the admin.</p>



<h2>Widgets/Blocks Styling Issues for Theme Authors</h2>



<img />No structured grouping of &ldquo;widget&rdquo; HTML.



<p class="has-drop-cap">One of the largest changes that theme authors need to be aware of is that blocks in sidebars do not have the typical widget HTML wrappers. This could present some issues with styling widgets in the traditional fashion. For example, themes usually register a widget wrapper element and a wrapper for the widget title. This allows theme authors to build consistent styles for each widget. With blocks, this becomes much tougher because the theme author loses that control &mdash; this control is passed to the end-user.</p>



<p>The great part of this system is that users can do some really interesting things and have the flexibility to style their sidebars in any way they want. The bad part is that if a theme author has any sort of intricate styles, such as a boxed widget design, there is no easy way for the end-user to simply drop <em>widgets</em> into place and have them all use that boxed design. There is no standard class name for the theme author to target with CSS, which is what is required for consistently-styled widgets.</p>



<p>This is not necessarily a good or bad thing in and of itself. It is simply different.</p>



<p>With that said, I would have much preferred the Gutenberg development team created a new and separate system from the old sidebars/widgets system. Leave that in place, then build and promote &ldquo;block areas&rdquo; as a new system for theme authors to take advantage of. In the long run, it would allow theme authors to make the transition and even potentially support both systems in their themes. Theme authors are down in the trenches, working with their users on a day-to-day basis. They are in a much better position to handle the transition from old to new.</p>



<p>Theme authors who are not prepared to go <em>all in</em> with block-based widgets in WordPress 5.6 can add the following line of PHP to their theme&rsquo;s setup code to disable the widgets block editor:</p>



<pre class="wp-block-code"><code>remove_theme_support( 'widgets-block-editor' );</code></pre>



<p>Over time, theme authors will want to fully transition to the new system. However, this will provide additional time for them to make any adjustments that may be needed with how widgets are handled.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 04 Sep 2020 17:05:15 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:47;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:97:"WPTavern: Sunlit 3.0 for iOS Released, Featuring New Post Editor and Improved Discovery Interface";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=103996";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:237:"https://wptavern.com/sunlit-3-0-for-ios-released-featuring-new-post-editor-and-improved-discovery-interface?utm_source=rss&utm_medium=rss&utm_campaign=sunlit-3-0-for-ios-released-featuring-new-post-editor-and-improved-discovery-interface";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3794:"<p><a href="https://sunlit.io/">Sunlit</a> 3.0 was released this week and is now <a href="https://apps.apple.com/us/app/sunlit/id1334727769">available in the App Store</a>. The free photoblogging app is a companion app to the <a href="https://micro.blog/">Micro.blog</a> indie microblogging platform. Sunlit has some similarities to Instagram minus the deadweight of ads and algorithms. Users can follow each other, comment on posts, and timeline photos are displayed in chronological order.</p>



<div class="wp-block-image"><img /></div>



<p>&ldquo;The idea is to get more people posting photos to their own blogs, whether that&rsquo;s hosted on Micro.blog,&nbsp;<a rel="noreferrer noopener" href="http://wordpress.com/" target="_blank">WordPress.com</a>, or a self-hosted WordPress,&rdquo; Micro.blog creator Manton Reece said. Publishing to WordPress does not require any extra plugins, because&nbsp;the app uses the built-in XML-RPC support.</p>



<p>Sunlit uses Micro.blog&rsquo;s infrastructure for the social aspect (replies and mentions). Users must be signed into a Micro.blog account (either paid or free) to view the timeline or reply to posts. In the current version, users are required to go to Micro.blog on the web to register first but Reece said his team is aiming to make this more seamless in the future so users can start using all the features in Sunlit right away.</p>



<p>&ldquo;Some people use Micro.blog for their blog exclusively, and some people have a mix of a microblog or photoblog on Micro.blog, as well as a full blog on WordPress,&rdquo; Reece said. </p>



<p>Sunlit also has <a href="https://www.manton.org/2020/08/31/countdown-to-sunlit.html">support for following Tumblr photoblogs</a>. In the app&rsquo;s Discover tab, users can enter a Tumblr subdomain like &ldquo;username.tumblr.com,&rdquo; and then follow the blog even if the user is not on Sunlit. </p>



<div class="wp-block-image"><img /></div>



<p>&ldquo;Micro.blog is based on blogs and IndieWeb standards so that it can integrate well with the rest of the web, not be walled off like a silo,&rdquo; Reece said. &ldquo;One aspect of this is that you can follow many blogs in Micro.blog even if the author of the blog hasn&rsquo;t registered on Micro.blog yet, similar to how you can subscribe to blogs in a feed reader like NetNewsWire or Feedbin.&rdquo;</p>



<p>Sunlit 3.0 has been redesigned with a new Discover interface and a faster, more flexible posting screen. Users can publish a quick photo or even a full blog post with text and photos uploaded to the users&rsquo; blog, along with the HTML layout for the post. This version also includes user search and support for mentions when replying to conversations.</p>



<div class="wp-block-image"><img /></div>



<p>Micro.blog is currently supporting the app&rsquo;s development, and Reese said he has no plans to add any commercial upgrades into Sunlit.</p>



<p>&ldquo;We support Sunlit as part of running Micro.blog,&rdquo; he said. &ldquo;Sunlit makes an existing Micro.blog subscription more useful, so it helps with the overall platform sustainability, even if not everyone using Sunlit is paying for a subscription. We hope that more people will sign up for a paid Micro.blog subscription, but it&rsquo;s not required.&rdquo;</p>



<p>Sunlit does not have an Android app but the teams would like to support Android in the future. The app is open source and <a href="https://github.com/microdotblog/sunlit">available on GitHub</a> under the MIT License.</p>



<p>&ldquo;Because Sunlit for iOS is open source, this [Android support] might be something that comes from the community or it might be something we take the lead on. I personally have much more experience with iOS, so we started there.&rdquo;</p>



<p></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 03 Sep 2020 23:15:44 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:48;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:82:"WPTavern: WordPress Plugin Authors Should Avoid Confusing Users When Naming Blocks";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104091";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:209:"https://wptavern.com/wordpress-plugin-authors-should-avoid-confusing-users-when-naming-blocks?utm_source=rss&utm_medium=rss&utm_campaign=wordpress-plugin-authors-should-avoid-confusing-users-when-naming-blocks";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7172:"<p class="has-drop-cap">On May 4, the StudioPress development team made a small but significant user-facing change to its Atomic Blocks plugin (now <a href="https://wptavern.com/atomic-blocks-rebranded-to-genesis-blocks-migration-path-to-new-plugin-coming-soon">rebranded to Genesis Blocks</a>). It <a href="https://github.com/studiopress/atomic-blocks/commit/af4a4aa30b05537bc93baa48d932ab9407c8eb7f">removed the &ldquo;AB&rdquo; branding</a> from its block titles. This minor update changed block titles such as AB Accordion and AB Button to Accordion and Button, respectively. On the surface, this change probably seemed of little consequence to the developers on the project. However, for at least one user, it created a massive workload.</p>



<p>Unless users religiously followed the GitHub code commits, they would have missed this update. Stacked with several other code changes for a seemingly unrelated ticket, the team left a message that read, &ldquo;Remove unnecessary &lsquo;AB&rsquo; from block titles.&rdquo;</p>



<p>The change made it into version 2.8.2 of the plugin, which launched a day later.</p>



<p>The problem was that there was no message in the change log that noted this. Users had no indication that the blocks from the plugin were being renamed. Typically, this would not be a big deal since the plugin team had merely dropped the &ldquo;AB&rdquo; prefix from the otherwise unchanged titles. However, what happens when one of those blocks&rsquo; titles matches a core block title?</p>



<p>That was the issue that Marcus Tibesar ran into. The AB Button block suddenly became the Button block. Thinking he was using the core WordPress Button, he made liberal use of it throughout his site. Throw in his decision to drop the plugin after StudioPress rebranded its plugin to Genesis Blocks, it became a bit of a disaster to clean up.</p>



<p>&ldquo;I have been using the Button block for months now only to discover that I&rsquo;m actually using the Atomic Blocks button block!&rdquo; <a href="https://wptavern.com/atomic-blocks-rebranded-to-genesis-blocks-migration-path-to-new-plugin-coming-soon#comment-340105">wrote Tibesar in a comment</a> on the Atomic Blocks rebranding post.</p>



<p>Theoretically, he should have needed to update only any lingering blocks from Atomic Blocks that he had knowingly used. But, he was stuck with blocks that he had unknowingly added to his posts and pages through no fault of his own.</p>



<p>This particular scenario was made worse because WordPress 5.4, released on March 31, introduced a new Buttons (plural) block. The old single Button block was removed from the normal inserter. While not all block-naming issues are so convoluted, it still begs the question: how can plugin authors avoid causing these types of user-experience issues?</p>



<p>It is easy to throw blame toward StudioPress &mdash; and the team could perhaps use a scolding for not being clear about the change when it happened. However, this brings forth a couple of things the greater WordPress community needs to figure out. The first is whether plugin authors need to use a consistent, prefixed naming scheme for their blocks. The second is what can WordPress do to help mitigate issues.</p>



<h2>Prefix All the Things</h2>



<img />Buttons, buttons, and more buttons.



<p class="has-drop-cap">That is the common saying in the WordPress development world, <em>right</em>? Prefixing and namespacing guidelines generally apply to the actual code, which is where conflicts arise. However, there are times when prefixing public-facing text is warranted.</p>



<p>And those times are when plugins utilize a shared space.</p>



<p>The block editor is one such shared space. With more and more block plugins landing in the directory, it is time that plugin authors consider how block-naming schemes affect end-users. The issue is certainly not limited to Atomic/Genesis Blocks. This has been an ongoing trend with several block library plugins. Some do better than others, but it&rsquo;s a toss-up each time a user installs such a plugin.</p>



<p>The easiest route is for plugin authors to simply prefix all custom blocks with their company branding (e.g., AB Button). On the other hand, not every block shares a title with one of the core blocks. For example, a block titled Product Carousel may not need to distinguish itself further from other blocks. It is unlikely that end-users are running multiple eCommerce plugins with blocks that share the same title.</p>



<p>&ldquo;All, repeat all, should have a prefix,&rdquo; said Tibesar.  &ldquo;The prefixes eliminate any confusion as to whether we users are selecting a core block or a third-party block. The most popular plugins appear at the top of the list, and it&rsquo;s confusing from whence they came when prefixes are absent.&rdquo;</p>



<p>At the very least, third-party blocks should have a prefix if their titles match one of the core blocks. End-users should not see two different Cover blocks in the block inserter, for example. Instead, they should see the core Cover and a second, uniquely-titled block. Prefixing is an easy way to do that. But, I could live with anything that does not cause user confusion.</p>



<h2>Locating Instances of Block Usage</h2>



<img />Manage Blocks screen.



<p class="has-drop-cap">In late 2019, the Gutenberg team released the <a href="https://wptavern.com/version-1-prototype-of-the-wordpress-admin-block-directory-announced">first prototype</a> of a potential block management area for the WordPress admin. The Manage Blocks screen from the prototype showcased an area that would allow users to manage every block on their site. One of the more important bits of information on this screen was an &ldquo;Instances&rdquo; count, which displayed the number of times a block was in use. It further linked to a screen with every post that had a particular block.</p>



<p>One of the reasons this feature is important is that it would allow end-users to locate posts that they may want to clean up. Using the Atomic/Genesis Button block as an example, Tibesar could track down all those old uses and make any changes he wanted.</p>



<p>He said he would absolutely welcome this feature in WordPress.  &ldquo;New users are tempted to load up on zillions of block plugins all to be forgotten later.  Also, maintainers would use this tool when cleaning up broken sites. Just being able to see an overview of&nbsp;<em>what</em>&nbsp;blocks were used&nbsp;<em>where</em>, will allow publishers to dial back the number of block plugins installed on their sites, especially when new plugins and technologies emerge.&rdquo;</p>



<p>Because this feature is not in core yet, he had to turn to the <a href="https://wptavern.com/find-my-blocks-plugin-shows-all-blocks-in-use-on-a-wordpress-site">Find My Blocks</a> plugin, which helped him identify 22 posts and pages where he had unknowingly used the Button block from Atomic/Genesis Blocks. In the long term, this is something that needs to be handled directly in WordPress. It is unlikely to be the last time a user needs to clean house and get rid of old blocks.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 03 Sep 2020 19:41:32 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:49;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:82:"WPTavern: WordPress 5.5.1 Released with Backfill for Deprecated JavaScript Globals";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=104101";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:209:"https://wptavern.com/wordpress-5-5-1-released-with-backfill-for-deprecated-javascript-globals?utm_source=rss&utm_medium=rss&utm_campaign=wordpress-5-5-1-released-with-backfill-for-deprecated-javascript-globals";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4766:"<p><a href="https://wordpress.org/news/2020/09/wordpress-5-5-1-maintenance-release/">WordPress 5.5.1</a> was released yesterday with <a rel="noreferrer noopener" href="https://core.trac.wordpress.org/query?status=closed&milestone=5.5.1&group=status&col=id&col=summary&col=milestone&col=owner&col=type&col=status&col=priority&order=priority" target="_blank">34 bug fixes, 4 enhancements</a>, and&nbsp;<a rel="noreferrer noopener" href="https://github.com/WordPress/gutenberg/pull/24828" target="_blank">5 bug fixes</a>&nbsp;for the&nbsp;block&nbsp;editor. </p>



<p>Version 5.5 <a href="https://make.wordpress.org/core/2020/08/05/more-support-for-javascript-i18n-in-wordpress-5-5/">removed 19 legacy&nbsp;JavaScript&nbsp;localization objects</a>, in favor of using the new functions and utilities found in the i18n package&nbsp;introduced in WordPress 5.0. One of the most notable changes in this maintenance release is the inclusion of <a href="https://make.wordpress.org/core/2020/09/01/deprecated-javascript-globals/">a backfill for these now deprecated JavaScript globals</a>, which were causing errors with many popular plugins and themes. </p>



<p>&ldquo;If we only count plugins or themes with more than 100k installs or more, some of these already have an incredible impact, which is why we decided to&nbsp;patch&nbsp;this as fast possible.&rdquo; Joost de Valk said in an update compiling a list of <a href="https://docs.google.com/spreadsheets/d/1Vho7hJR4DMRyns38xcUMvVUj8SBov_J8_X4a7zwpmzo/edit?usp=sharing">affected extensions</a>, with the the help of Omar Reiss. </p>



<p>Themes impacted include Astra (1 million+ installs), Storefront (200k+), Hestia (100k+), and dozens more. A small selection of the popular plugins that were impacted include Advanced Custom Fields (1 million+), SiteOrigins Widgets Bundle (1 million+), AMP for WP, (100k+),  WooCommerce Services (1 million+), Ocean Extra (600k+), and Rank Math SEO (400k+). </p>



<p>Theme and plugin developers still need to update their code to use&nbsp;<code>wp.i18n</code> but in the meantime the legacy code will not block JavaScript execution. De Valk said the new plan is to remove this fallback code in two major versions, so developers need to have their code updated by the time WordPress 5.7 rolls around in 2021.&nbsp;</p>



<p>&ldquo;It sounds like a question that also ought to be addressed is how such wide-spread breakage could happen, and how it can be prevented in future,&rdquo; David Anderson commented on the announcement regarding the backfill. &ldquo;What part of the release process ought to have flagged up that this was about to happen, how did that part fail, and how can future similar failures be prevented.&rdquo; Jake Spurlock suggested a retrospective on WordPress 5.5 might be a good idea.</p>



<p>Three weeks after WordPress 5.5 was released, the <a href="https://wordpress.org/plugins/enable-jquery-migrate-helper/">Enable jQuery Migrate Helper</a> has more than 100,000 active installs. The plugin is available as a stopgap for users who experience problems with jQuery after updating to WP 5.5. Although several bumps along the road are expected for users during WordPress&rsquo; process of updating to use the latest version of jQuery, the official support forums were inundated with&nbsp;<a href="https://wordpress.org/search/5.5?in=support_forums">reports of broken sites</a> after 5.5 was released. Many users found out about the plugin after hours of troubleshooting and hunting for a fix. This is another issue that would be helpful to address in a 5.5 retrospective.</p>



<p>This maintenance release also <a href="https://make.wordpress.org/core/2020/08/27/wordpress-environment-types/">removes the ability to alter the list of environment types</a> in the new&nbsp;<code>wp_get_environment_type()</code> function. Contributors decided that introducing new types wasn&rsquo;t the intention of the feature and that it makes it so that theme and plugin developers cannot rely on a set, predictable list of types. They are now limited to production, staging, development, and local, with definitions for each available in the <a href="https://make.wordpress.org/core/2020/08/27/wordpress-environment-types/">announcement</a>.</p>



<p>&ldquo;By limiting the set of environment types in this way, WordPress&nbsp;core, plugins, and themes can change their behavior depending on this setting,&rdquo; Joost de Valk said.</p>



<p>WordPress 5.5.1 also fixes XML sitemaps paginating incorrectly, adds the site environment to debug information, and improves a number of other features that shipped with defects. The <a href="https://wordpress.org/support/wordpress-version/version-5-5-1/">full list of changes</a> is available on the release page.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 02 Sep 2020 18:45:43 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";O:42:"Requests_Utility_CaseInsensitiveDictionary":1:{s:7:" * data";a:8:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Mon, 05 Oct 2020 01:47:35 GMT";s:12:"content-type";s:8:"text/xml";s:4:"vary";s:15:"Accept-Encoding";s:13:"last-modified";s:29:"Mon, 05 Oct 2020 01:30:08 GMT";s:15:"x-frame-options";s:10:"SAMEORIGIN";s:4:"x-nc";s:9:"HIT ord 2";s:16:"content-encoding";s:4:"gzip";}}s:5:"build";s:14:"20130911040210";}";}