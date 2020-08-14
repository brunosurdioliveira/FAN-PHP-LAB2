# FAN-PHP-LAB2
Lab2 of PHP Fundamentals

Purpose
This lab you will do some research to set up an HTML page with some form elements, submit this data to another page, sanitize the values, and output the data in a nicely formatted html page.

Evaluation
2% of your final grade ( 16 marks )

Submission Due date
When complete, Zip the 2 files and submit your zip to the Submission box labelled week 3 lab before May 24

Required Tools
Google Chrome web browser
Text editor with Syntax highlighting. https://atom.io/ or https://www.sublimetext.com/ or Visual Studio Code or other
Xampp 7.4.1
Instructions
You will be using the Bootstrap starter template.

Create 2 documents with your name of the format
firstname_lastname_form.html and firstname_lastname_output.php
copy the starter template html from bootstrap and paste into both pages and save. You are ready to begin.
If you are not familiar with HTML forms, re-read the week 3 slides and then research and refer to examples at https://www.w3schools.com/html/html_forms.asp

Setup your HTML form
In the form html document
Create an HTML form, take some time to explore the Bootstrap forms components
set the action to the full name of your output document ( 1 mark )
set the method to POST ( 1 mark )
insert 3 input elements ensuring your have a unique name attribute for each ( 6 marks )
i.e "What is the name of your favorite movie ? [text field]
insert a submit button for submitting your form data ( 1 mark )
Open your form in the web browser through the web server https://localhost/firstname_lastname.html or whatever path you placed it in.
Test your form by filling in some values in your input fields and clicking submit. If working correct your output page should load

Setup your PHP output
In the output php document
Insert your open and close PHP tags ABOVE the HTML, this will output your test data outside the body of the document, you may comment this out later
Don't forget to add a comment for every line of code you add 
var_dump your $_POST array. ( 1 mark )
NOTE: for easy to read formatting, google the HTML element <pre>
Save and Test, test, test........on every little tiny change. Once you have submitted your form once, you will be able to reload your php page and see the updates as your add more PHP
Add user friendly output statements to the body of your document for each of the 3 input elements you submitted from your form. ( 6 marks )
i.e your statement should display something like "The name of your favorite movie is Spiderman"
Once again, take some time to explore some of the nice formatting available in Bootstrap

If you are really feeling ambitious or want to really fancy up your content, explore Google Fonts and Bootstrap Icons, feel free to insert and resize images ( please use full URLs for images, don't submit them )

ZIP the 2 files and submit to the week 3 submission box

Have Fun, put a personal touch on your work, make something you are proud to share and show your friends and family.