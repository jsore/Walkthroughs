<?php 
    // mvc: view, displays data

    // pull the header and sidebar in 
    include('mysqlHeader.php');

    // stylesheet
    include('css.php');
?>
<!DOCTYPE html>
<html>
  
    <head>
        <meta charset="UTF-8">
        <title>mysqlTracker</title>
        <meta name="description" content="rendition 3 of the tracker">
    </head>

    <body>
        <div id="container">Main wrapper<br/>
            <div id="dbContent">Loading...</div>
            <!-- <div id="listing_address"></div>
            <div id="listing_employee"></div>
            <div id="listing_method"></div>
            <div id="listing_notes"></div> -->
        </div>
        

        <!-- these need to be at the bottom of the body -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- this file is replaced with the JS below -->
        <!-- <script src="js.js"></script> -->
        <script type="text/javascript">

            $(document).ready(function() {
                displayJS();

                // displays items currently in DB
                function displayJS() {
                    
                    // cleanup the main div prior to adding items to it
                    $('#dbContent').empty();
                    
                    // JQuery call to AJAX function that'll grab a JSON encoded response
                    $.ajax({
                        type: 'GET',
                        url: 'db.php',
                        
                        success: function(response) {
                            $.each(response, function(index) {
                                
                                $('#dbContent').append(response[index].listing_address + ' ' + response[index].listing_employee + ' ' + response[index].listing_method + ' ' + response[index].listing_notes + '<br/>');
                                // console.log(response[index].listing_address + ' ' + response[index].listing_employee + ' ' + response[index].listing_method + ' ' + response[index].listing_notes);
                            });
                            console.log(response);
                            
                            
                        }
                    });
                };
            });
        </script>
    </body>

</html>

