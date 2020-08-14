<!-- 
    Name: Bruno Surdi Oliveira
    Date: May 2020
    Purpose: Lab 3 - This lab you will do some research to set up an HTML page with some form elements, submit this data to another page, sanitize the values, and output the data in a nicely formatted html page.  
-->

<!-- the pre tag is used to preformat the text - it will display exactly as written in the HTML code -->
<pre>
  <!-- A quick way to view the content of POST is to use PHP function var_dumb() -->
  <!-- It is commented out in order to be more user friendly -->
<?php 
    // var_dump($_POST);
    // echo '<hr>';
?>
</pre>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Surdigram</title>

    <!-- using google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Questrial&display=swap" rel="stylesheet">

    <!-- Adding some styles -->
    <style>
        body{
            width: 100%;
            text-align: center;
            background-image: url("https://i.pinimg.com/736x/48/6f/e7/486fe74d79101ad6da45c5771b0d3f8a.jpg");
        }
        #colorFav{
            /* Adding the favorite color as the color of the text using PHP POST*/
            color: <?php echo $_POST['color'] ?>;
        }
        #logo{
            text-align: center;
            font-family: 'Indie Flower', cursive;
            margin: 50px;
            color: rgb(255, 255, 255);
        }
        #spinner{
            /* Not display the spinner yet */
            display: none;
        }
    </style>
  </head>

  <body>
    <h1 id="logo">Thank you for submitting your answers to SurdiGram</h1>
    <div class="container"> <!-- container div -->
      <div class="row"> <!-- row div -->

        <div class="col"> <!-- first column div -->
        <!-- Empty! just to allign the content to the center of the page (grid) -->
        </div> <!-- End first column -->

        <div class="col-6"> <!-- second column div -->
          <!-- First div "Well Done" -->
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Well done! <svg class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" clip-rule="evenodd"/></svg></h4> 
            <!-- We will get the name and username by php using post method $_POST['name'] and $_POST['username'] -->
            <p>Aww yeah <strong> <?php echo $_POST['name'] ?> </strong>, you successfully submitted your answers! Now we know more about you. Your username is <strong><?php echo $_POST['username']; ?></strong>. We'll never share your name, username or others personal informations with anyone else. Thank you for your trust.</p>
            <hr>
            <p class="mb-0">Now, click below to check your answers</p><br>
            <!-- Clicking in the button will load (will appear a spinner for 1 second) and show the answers -->
            <button id="seeResults" type="button" class="btn btn-success">Check answers</button><br><br>
              <div class="spinner-border text-primary" role="status" id="spinner">
              <span class="sr-only">Loading...</span>
              </div>
          </div> <!-- End first div -->

          <!-- Second div "hypothetical situation"  -->
          <div class="alert alert-primary" role="alert" style="display:none" id="divShow">
          <!-- We will return the favorite color, food and dream travel destination entered by the user using the PHP method $_POST[''] -->
            Based on your answers we create an hypothetical situation where you are in the best restaurant in <strong><?php echo $_POST['travel']; ?></strong> eating <strong><?php echo $_POST['food'] ?></strong> using a <strong id="colorFav"><?php echo $_POST['color'] ?></strong> shirt.
          </div> <!-- End second div -->

          <!-- Third div "Answers" -->
          <!-- We will return all the answers entered by the user using the same method $_POST[''] (inside of [''] is the name given in the input on the HTML file) -->
          <div id="answers" style="display:none;" class="alert alert-success" role="alert">
            Your name is: <?php echo $_POST['name']. '<br>' ?>
            Your username is: <?php echo $_POST['username'] . '<br>' ?>
            Your favorite color is: <?php echo $_POST['color'] . '<br>' ?>
            Your favorite food is: <?php echo $_POST['food'] . '<br>' ?>
            Your dream travel destination is: <?php echo $_POST['travel']; ?>
          </div> <!-- End third div -->
        </div> <!-- End div second collumn -->

        <div class="col"> <!-- third column div -->
        <!-- Empty! just to allign the content to the center of the page (grid) -->
        </div> <!-- End third column div -->

      </div> <!-- End row div -->
    </div> <!-- End container div -->

    <!-- JS CODE -->
    <script src="main.js">
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>