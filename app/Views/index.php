<?php

echo view('inc/head',array(
	'title'		=> $config->site['name']
));

echo view('inc/header');

?>

<section class="py-5">
        <div class="container text-justify">
            <h4>This is a Starter Template of PHP framework and Frontend libraries for a Basic Website</h4>
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
            <hr/>
            <h4>Simple Contact Form API Included:</h4>
            <p>Send ajax/post request to <code>yoursite.com/api/send_query</code>. Field name must be named with <code>form[name]</code>, <code>form[email]</code>, and <code>form[...]</code></p>
            <p>To Edit Mail Config, Goto: <code>app/Config/Site.php</code></p>
            <p>To Edit API Functions, Goto: <code>app/Controllers/API.php</code></p>

            <h5>Example:</h5>
            <div class="card card-primary mb-4">
                <div class="card-header bg-primary text-white font-weight-bold">
                    HTML Code
                </div>
                <div class="card-body p-0">
<textarea class="code bg-dark text-white px-3 py-3 form-control form-control-sm" rows="22" onclick="this.select()" onblur="this.select()" onfocus="this.select()" readonly="readonly">
&lt;form class="form-row mt-4 _rscf"&gt;
    &lt;div class="form-group col-sm-6"&gt;
        &lt;input type="text" name="form[name]" maxlength="100" title="Maximum Length is 100 Letters" class="form-control form-control-sm py-2 px-0 h-auto bg-transparent border-left-0 border-top-0 border-right-0 border-bottom rounded-0" placeholder="Your Name*" required="required"/&gt;
    &lt;/div&gt;
    &lt;div class="form-group col-sm-6"&gt;
        &lt;input type="email" name="form[email]" maxlength="200" title="Maximum Length is 200 Letters" class="form-control form-control-sm py-2 px-0 h-auto bg-transparent border-left-0 border-top-0 border-right-0 border-bottom rounded-0" placeholder="Your Email*" required="required"/&gt;
    &lt;/div&gt;
    &lt;div class="form-group col-sm-12"&gt;
        &lt;input type="text" name="form[subject]" maxlength="60" title="Maximum Length is 60 Letters" class="form-control form-control-sm py-2 px-0 h-auto bg-transparent border-left-0 border-top-0 border-right-0 border-bottom rounded-0" placeholder="Subject*" required="required"/&gt;
    &lt;/div&gt;
    &lt;div class="form-group col-sm-12"&gt;
        &lt;textarea rows="4" name="form[message]" maxlength="1000" title="The Maximum Length is 1000 Letters" class="form-control form-control-sm py-2 px-0 h-auto bg-transparent border-left-0 border-top-0 border-right-0 border-bottom rounded-0" placeholder="Your Message*" required="required"&gt;&lt;/textarea&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;button type="submit" class="btn btn-send btn-sm font-weight-bold text-white text-uppercase btn-primary px-4 py-2 h-auto"&gt;Send Message&lt;/button&gt;
        &lt;span class="response"&gt;&lt;/span&gt;
    &lt;/div&gt;
&lt;/form&gt;
</textarea>
                </div>
            </div>

            <div class="card card-primary">
                <div class="card-header bg-primary text-white font-weight-bold">
                    JavaScript and jQuery Code
                </div>
                <div class="card-body p-0">
<textarea class="code bg-dark text-white px-3 py-3 form-control form-control-sm" rows="26" onclick="this.select()" onblur="this.select()" onfocus="this.select()" readonly="readonly">
&lt;script type="text/javascript"&gt;
    $('form._rscf').submit(function(e){
        e.preventDefault();
        $submit = $('.btn-send',this);
        $response = $('.response',this);
        $submit.attr('disabled',1);
        $response.html('<i class="fa fa-sync fa-spin"></i>');
        $.ajax({
            url:'/api/send_query',
            type:'post',
            data:$(this).serializeArray(),
            success:function(response){
                if(response.status == 1){
                    $response.html('<div class="alert alert-success mt-2">Thank You! Your Message has sent.</div>')
                }else{
                    $response.html('<div class="alert alert-danger mt-2">Error: '+response.message+'</div>');
                    $submit.removeAttr('disabled');
                }
            },
            error:function(){
                $response.html('<div class="alert alert-danger mt-2">Error: Server Error</div>');
                $submit.removeAttr('disabled');
            }
        })
    })
&lt;/script&gt;
</textarea>
                </div>
            </div>
            <hr/>
            <p class="text-danger h5">More Features are coming soon...</p>
            <hr/>
        </div>

</section>


<?php
echo view('inc/footer');
echo view('inc/foot');?>