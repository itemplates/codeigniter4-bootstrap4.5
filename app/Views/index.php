<?php

echo view('inc/head',array(
	'title'		=> $config->site['name']
));

echo view('inc/header');

?>

<section class="py-5">
        <div class="container text-justify">
            <h4 class="text-uppercase border-bottom pb-2">This is a Starter Template of PHP framework and Frontend libraries for a Basic Website</h4>
            <hr/>
            <p><strong>Following Libraries Included:</strong></p>
            <hr/>
            <ul>
                <li>PHP</li>
                <li>CodeIgniter4</li>
                <li>Bootstrap 4.5</li>
                <li>jQuery 3.5.1</li>
                <li>PopperJS 2.4.4</li>
                <li>Font Awesome 5</li>
                <li>Owl Carousel 2.3.4</li>
            </ul>
            <hr/>
            <h5>You can change site information in following path:</h5>
            <p><code class="code">app/Config/Site.php</code></p>
            <h5>To Modify Base Helper Function of Website, Follow this path:</h5>
            <p><code class="code">app/Helpers/Base_helper.php</code></p>
            <p><strong>What is Base Helper Include:</strong></p>
            <ul>
            	<li><code class="code">sainitize_phone()</code> Function Will Sanitize Phone Number and Convert it to <code>tel:</code> supported format</li>
            </ul>
            <h5>Static Pages File Structure:</h5>
            <p><code class="code">app/Controllers/Pages.php</code> support unlimited sub pages like <code class="code">yoursite.com/page1/subpage1/subsubpage1</code></p>
            <p class="font-weight-bold">Structure:</p>
            <p>Put all Pages and Subpages in <code class="code">app/Views</code> directory</p>
            <p>Following Structure will open <code>Contact</code> page</p>
            <ul>
            	<li><code class="code">app/Views/contact/index.php</code></li>
            	<li><code class="code">app/Views/contact.php</code></li>
            </ul>
            <p>Following Structure will open <code>services/web-design-service</code> page</p>
            <ul>
            	<li><code class="code">app/Views/services/web-design-service.php</code></li>
            	<li><code class="code">app/Views/services/web-design-service/index.php</code></li>
            </ul>



        </div>

</section>


<?php
echo view('inc/footer');
echo view('inc/foot');?>