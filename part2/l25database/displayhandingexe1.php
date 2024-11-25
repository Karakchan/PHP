<!DOCTYPE html>
    <html>
        <head>
            <title>Display Handing Exercise 1</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </head>
        <body>

           <div class="container mt-5">
                <h3>Hello Friend ! Welcome to <?php echo $_GET["city"]; ?></h3>
                <p>I am <?php echo $_GET["name"]; ?> . I got your data by passing GET method.</p>
           </div>

           <div class="container mt-5">
            <h3>Hello Friend ! Welcome to <?php echo $POST["city"]; ?></h3>
            <p>I am <?php echo $POST["name"]; ?> . I got your data by passing POST method.</p>
       </div>

        </body>
    </html>


    <!-- GET
     (i)bookmarkable  = true
     (ii)sensitive data = false  
     (iii)size limit = (3000 words)

    VS

    POST
     (i)bookmarkable  = false
     (ii)sensitive data = true 
     (iii)size limit = false -->


    <!-- Getting data from server (GET)
    Changing data to server (POST) -->