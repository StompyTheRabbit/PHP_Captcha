PHP Captcha - What is it?
------
This is a PHP-based Captcha which you can use in your form submissions to check whether the user is genuine. I tried my best to make this script as simple as possible without any extra files. The background images are base64 encoded which is included in the PHP file itself for ease of use.

You just upload it, include it in your form and it's done! It'll show up wherever you included it. The form.php file is just the example of how to check the status of the captcha.

Installation
------
To install and use just upload the captcha.php file to your PHP web server, and you can then use the form.php example I have provided to check if the captcha is correct using the captcha_success SESSION variable. Based on this you can display a message to the user or validate their form entry, whatever you need to do.

To use this in your existing form, just include the captcha.php file, and then in your POST-Form submission validation checks you can call the captcha_success SESSION variable to see if the Captcha is correct.

I have provided 2 backgrounds for the Captcha, if you'd like to add more you can use a png format, then use this website: http://www.opinionatedgeek.com/dotnet/tools/base64encode/ to get the base64 of your png image, then just add 'data:image/png;base64,' before the code it gives you, add your bg variable to the array and you've got another random background, wohoo!

<b>Please Note: You will need to have The PHP-GD Extension Installed on your PHP Web Installation for this Application to work.</b>

Licensing
------
This code is provided under the MIT License, for more information visit the LICENSE file in this repository.

Upcoming changes
------
<ul>
<li>Make a better design for the Captcha widget.</li>
<li>Add reload image option with AJAX instant reload.</li>
</ul>
