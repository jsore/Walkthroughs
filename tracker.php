
<?php    

    /* standard styles and sections */
    include("/var/www/test/includes/header.php");

    /* styles for this page */
    include("/var/www/test/CSS/trackerCSS.php");

?>

<!DOCTYPE html>
<html>
    <head>        
        <title>Tracker V2</title>

        

    </head>
    <body>
        <!-- probably have too many wrappers going on here, but it works -->
        <div class="wrapper">               

            <div class="rowOne">
                <div class="rowOneWrapper">
                    <div class="docPurpose">
                        <h4>Document Purpose</h4>
                        <p style="color: #666666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ex turpis. Cras luctus nibh lectus, in ullamcorper ex tempor eleifend. Nulla bibendum, eros a consequat vestibulum, orci massa fermentum quam, sed commodo nunc ex vitae nisl. Aliquam ullamcorper interdum est nec tincidunt.</p>
                    </div>
                    <div class="countSummaries">
                        <h4>Count Summaries</h4>    
                        <p style="color: #666666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ex turpis. Cras luctus nibh lectus, in ullamcorper ex tempor eleifend. Nulla bibendum, eros a consequat vestibulum, orci massa fermentum quam, sed commodo nunc ex vitae nisl. Aliquam ullamcorper interdum est nec tincidunt.</p>
                    </div>
                </div>
            </div>
        
            <div class="rowTwoOne">
                <h4>Add New Listing</h4>
                <div class="rowTwoOneWrapper">
                    <input class="newListingInput" id="address" type="text" placeholder="Email address that was used"></input>
                    <input class="newListingInput" id="employee" type="text" placeholder="Name of employee adding this listing"></input>
                    <input class="newListingInput" id="date" type="text" placeholder="Date of when the address was used"></input>
                    <input class="newListingInput" id="website" type="text" placeholder="Where was the address posted?"></input>
                    <input class="newListingInput" id="method" type="text" placeholder="Other notes, details about this listing"></input>
                </div>  

                <div class="buttonDiv">
                    <button class="submitButton">Submit</button>
                </div>
            </div>
            
            <div class="rowTwoTwo">
                <h4>Current Listings</h4>
                

                <!-- <div class="listingWrapper"> -->
                    <div class="spamtrapListing">

                        <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                        <div class="childE2"><b>Employee:  </b>John Doe</div>
                        <div class="childE3"><b>Date:  </b>1 January 1970</div>
                        <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                        <div class="childE5" id="childE5id">
                            <div class="accordionWrapper">
                                <button class="openAccordion" id="openAcc">Show Email Hit Data</button>
                                <button class="closeAccordion" id="closeACC">collapse this section</button>
                                <div class="accordion" id="accordionPanel">
                                    <ul class="hitList">
                                        <li class="sourceIP">Source IP</li>    
                                        <li class="timestamp">Timestamp</li>
                                        <li class="sourceAddress">Source Email Address</li>
                                        <li class="sourceDomain">Source Domain Owner</li>
                                        <li class="whois">
                                            <button class="whoisButton" id="whoisDropdown">Show whois Information</button>
                                        </li>
                                        <li class="mailHeaders">
                                            <button class="headersButton" id="headersDropdown">Show Mail Headers</button>
                                        </li>
                                    </ul>
                                    <ul class="hitList">
                                        <li class="sourceIP">Source IP</li>    
                                        <li class="timestamp">Timestamp</li>
                                        <li class="sourceAddress">Source Email Address</li>
                                        <li class="sourceDomain">Source Domain Owner</li>
                                        <li class="whois">
                                            <button class="whoisButton" id="whoisDropdown">Show whois Information</button>
                                        </li>
                                        <li class="mailHeaders">
                                            <button class="headersButton" id="headersDropdown">Show Mail Headers</button>
                                        </li>
                                    </ul>
                                    <ul class="hitList">
                                        <li class="sourceIP">Source IP</li>    
                                        <li class="timestamp">Timestamp</li>
                                        <li class="sourceAddress">Source Email Address</li>
                                        <li class="sourceDomain">Source Domain Owner</li>
                                        <li class="whois">
                                            <button class="whoisButton" id="whoisDropdown">Show whois Information</button>
                                        </li>
                                        <li class="mailHeaders">
                                            <button class="headersButton" id="headersDropdown">Show Mail Headers</button>
                                        </li>
                                    </ul>
                                    <ul class="hitList">
                                        <li class="sourceIP">Source IP</li>    
                                        <li class="timestamp">Timestamp</li>
                                        <li class="sourceAddress">Source Email Address</li>
                                        <li class="sourceDomain">Source Domain Owner</li>
                                        <li class="whois">
                                            <button class="whoisButton" id="whoisDropdown">Show whois Information</button>
                                        </li>
                                        <li class="mailHeaders">
                                            <button class="headersButton" id="headersDropdown">Show Mail Headers</button>
                                        </li>
                                    </ul>
                                    <!-- <button class="closeAccordion" id="closeACC">collapse</button> -->
                                </div>
                            </div>    
                        </div>
                        <p class="childNotes">These are some notes detailing your thoughts on how you handled the email address in question or something blah blah</p>
                    </div>
                <!-- </div>     -->

<script>


    // highlight current page in sidebar
    var activeChecker = document.getElementById("link5");
    activeChecker.setAttribute("class", "sidebarItemsActive");

// give accordion buttons onclicks so we don't have to duplicate this for every new listing div
var openAccordionButton = document.getElementById("openAcc");
openAccordionButton.setAttribute("onclick", "handlers.accordionOpener()");
var closeAccordionButton = document.getElementById("closeACC");
closeAccordionButton.setAttribute("onclick", "handlers.accordionCloser()");

var whoisDropdown = document.getElementById("whoisDropdown");
whoisDropdown.setAttribute("onclick", "handlers.whoisOpener()");
var headersDropdown = document.getElementById("headersDropdown");
headersDropdown.setAttribute("onclick", "handlers.headersOpener()");




// attempting to count the open/close accordion buttons and assign attributes to each of them, not working
// is javascript forEach a thing?
// // alert(document.getElementsByClassName("spamtrapListing").length);
// var openCounter = document.getElementsByClassName("openAccordion");
// // alert(openCounter.length);
// var i;
// for (i = 0; i < openCounter.lenth; i++) {
//     // var openAccordionButton = document.getElementById("openAcc");
//     openCounter[i].setAttribute("onclick", "handlers.accordionOpener()");
//    
//     var closeAccordionButton = document.getElementById("closeACC");
//     closeAccordionButton.setAttribute("onclick", "handlers.accordionCloser()");
// };

    var handlers = {

         
        accordionOpener: function() {
            // opens email hit data accordion
            document.getElementById("accordionPanel").style.display = "block";                     
            
            // shows the collapse button
            document.getElementById("closeACC").style.display = "block";            
            
            // changes styles from defaults
            document.getElementById("openAcc").innerHTML = "Email Hit Data";
            document.getElementById("openAcc").style.backgroundColor = "rgba(255, 255, 255)";
            document.getElementById("openAcc").style.color = "#666666";
            document.getElementById("openAcc").style.cursor = "auto";
            document.getElementById("childE5id").style.backgroundColor = "white";
            document.getElementById("childE5id").style.outline = "1px solid #d9d9d9";
            document.getElementById("childE5id").style.margin = "1px 1px 0px 1px";
            
        },
        
        accordionCloser: function() {
            // closes email hit data accordion
            document.getElementById("accordionPanel").style.display = "none";
            
            // hides the collapse button 
            document.getElementById("closeACC").style.display = "none";

            // changes styles back to defaults
            document.getElementById("openAcc").innerHTML = "Show Email Hit Data";            
            document.getElementById("openAcc").style.backgroundColor = "#b30000";
            document.getElementById("openAcc").style.color = "white";
            document.getElementById("openAcc").style.cursor = "pointer";
            document.getElementById("childE5id").style.backgroundColor = "rgba(255, 255, 255, 0.0)";
            document.getElementById("childE5id").style.outline = "none";
            document.getElementById("childE5id").style.margin = "9px 0px 5px 0px";
        },

        whoisOpener: function() {
            var temporaryWhoisText = "placeholder for whois information";
            alert(temporaryWhoisText);
        },

        headersOpener: function() {
            var temporaryHeaderText = "placeholder for mail headers";
            alert(temporaryHeaderText);
        },



    } 
    

</script>    


                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <!-- <div class="childE5">E 5</div> -->
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <!-- <div class="childE5">E 5</div> -->
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <!-- <div class="childE5">E 5</div> -->
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <!-- <div class="childE5">E 5</div> -->
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <!-- <div class="childE5">E 5</div> -->
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <!-- <div class="childE5">E 5</div> -->
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <!-- <div class="childE5">E 5</div> -->
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <!-- <div class="childE5">E 5</div> -->
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <!-- <div class="childE5">E 5</div> -->
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <!-- <div class="childE5">E 5</div> -->
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <!-- <div class="childE5">E 5</div> -->
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <!-- <div class="childE5">E 5</div> -->
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
                <div class="spamtrapListing">
                    <div class="childE1"><b>Address:  </b>emailaddress@domain.com</div>
                    <div class="childE2"><b>Employee:  </b>John Doe</div>
                    <div class="childE3"><b>Date:  </b>1 January 1970</div>
                    <div class="childE4"><b>Website:  </b>somelongdomain.com/forum/forumPostID</div>
                    <!-- <div class="childE5">E 5</div> -->
                    <textarea class="childNotes" placeholder="These are some notes detailing your thoughts on how you handled the email address in question or something blah blah"></textarea>
                </div>
            </div>
        </div>        


        <?php 
            /* TO DO */
        ?>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    </body>
</html>

