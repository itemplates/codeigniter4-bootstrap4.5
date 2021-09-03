## This is a Starter Template of PHP framework and Frontend libraries for a Basic Website
### Following Libraries Included:
- PHP
- CodeIgniter4
- Bootstrap 4.5
- jQuery 3.5.1
- PopperJS 2.4.4
- Font Awesome 5
- Owl Carousel 2.3.4

### You can change site information in following path:
```app/Config/Site.php```

### To Modify Base Helper Function of Website, Follow this path:
```app/Helpers/Base_helper.php```

### What is Base Helper Include:
- ```sainitize_phone()``` Function Will Sanitize Phone Number and Convert it to ```tel:``` supported format

### Static Pages File Structure:
```app/Controllers/Pages.php``` support unlimited sub pages like ```yoursite.com/page1/subpage1/subsubpage1```

### Structure:

Put all Pages and Subpages in ```app/Views``` directory

**Following Structure will open ```Contact``` page**
```
app/Views/contact/index.php
app/Views/contact.php
```

**Following Structure will open ```services/web-design-service``` page**
```
app/Views/services/web-design-service.php
app/Views/services/web-design-service/index.php
```

## Simple Contact Form API Included:

Send ajax/post request to ```yoursite.com/api/send_query```. Field name must be named with ```form[name]```, ```form[email]```, and ```form[...]```

To Edit Mail Config, Goto: ```app/Config/Site.php```

To Edit API Functions, Goto: ```app/Controllers/API.php```

**Example**


