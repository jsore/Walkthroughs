
<?php 
    /* create form submit vars */
    /* ....TO DO */
    $address = $_POST['address'];
    $employeeName = $_POST['employeeName'];
    $website = $_POST['website'];
    $dateOfPosting = $_POST['dateOfPosting'];
    $methodUsed = $_POST['methodUsed'];
include("/var/www/test/includes/header.php");
?>

<!-- begin creating webpage base -->
<!DOCTYPE html>
<html>
    <head><title>Tracker V2</title>        
       <!-- <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"> -->
        
        <style type="text/css">

            /*body {
                margin: 20px;
                background-color: lightGray;
                https://www.w3schools.com/cssref/css_websafe_fonts.asp
                font-family: Verdana, Geneva, Sans-serif;
            }*/


            /* container for all my boxes */
            .wrapper {
                background-color: white;
                border-radius: 5px;
                display: grid;                                  /* sets default display setting to CSS Grid */
                grid-gap: 10px;                                 /* sets spacing between grid rows, columns */
                grid-template-columns: 400px auto;              /* specifies two columns are being used, one with fixed length the other with variable length */                
            }


                /* settings for all boxes */
                .box {
                    background-color: slateGray;
                    color: white;
                    border-radius: 5px;
                    padding: 10px;
                }


                /* first row, holds Page Header + Purpose Statement + Counts */
                /* spans across columns 1 and 2, stops at (non-existant) third column */   
                .a {  grid-row: 1; grid-column: 1 / 3;  }       
                    .boxWrapperA {                              /* wrapper for all boxes in first row */
                        border: 1px solid red;                  /* NOTE: borders from here on down are to make spacing values more obvious, temporary! */ 
                        text-align: center;
                        display: flex;                          /* overide Grids, change to Flexbox for alignment of internal items */
                    }
                        .b {                                    /* statement explaining document purpose */
                            border: 1px solid white;
                            margin: 5px 2.5px 5px 5px;          /* custom RIGHT margin, keeps all padding to 5px */
                            flex-grow: 1;
                            flex-wrap: wrap;
                            width: 10%;
                        }
                        .c {                                    /* counts box */
                            border: 1px solid white;
                            margin: 5px 5px 5px 2.5px;          /* custom LEFT margin, keeps all padding to 5px */
                            flex-grow: 2;                       /* grows box to 2 times the size of a single column instead of size of 1 column */
                        }


                /* second row first column, holds Add New Listing form */
                .d {  grid-row: 2; grid-column: 1; height: 290px;  }                    
                    .boxWrapperD {                              /* wrapper for all boxes in Add New Listing form */
                        border: 1px solid red;
                        font-size: 70%;
                        display: flex;                          /* overide Grids, change to Flexbox for alignment of internal items */
                        flex-direction: column;                 /* creates Flexbox column */
                    }
                        .childD {                               /* defaults for all children of boxWrapperD */
                            border: 1px solid white;
                            padding: 5px; 
                            font-family: "Lucida Console", Monaco, monospace;
                            margin: 2.5px 5px 2.5px 5px;
                        }
                        .childD:nth-child(1) {  margin: 5px 5px 2.5px 5px;  }           /* margin fix for first element */
                        .childD:nth-last-child(1) {  margin: 2.5px 5px 5px 5px;  }      /* margin fix for last element */


                /* second row second column, holds Current Listings */
                .e {  grid-row: 2; grid-column: 2;  }
                    .boxWrapperE {                              /* wrapper for all boxes in Current Listings section */
                        font-size: 70%;
                        flex-direction: column;
                        border: 1px solid red;
                        margin: 0px 0px 10px 0px;
                        display: flex;                          /* overide Grids, change to Flexbox for alignment of internal items */
                    }
                    .boxWrapperE:nth-child(even) {  background-color: lightGray;  }
                        .childE {                               /* defaults for all children of boxWrapperE */
                            flex-grow: 1;
                            border: 1px solid white;
                            justify-content: center;
                            padding: 5px;
                            margin: 2.5px 5px 2.5px 5px;
                            font-family: "Lucida Console", Monaco, monospace;
                        }
                        .childE:nth-child(1) {  margin: 5px 5px 2.5px 5px;  }           /* margin fix for first element */
                        .childE:nth-last-child(1) {  margin: 2.5px 5px 5px 5px;  }      /* margin fix for last element */
        
        </style>
    </head>
    <body>


        <!-- HTML attempt 1
        <div class="summariesRow">

            <div class="accomplishesContainer">
                <h2>What this page accomplishes</h2>
                <p>This document will be used to display a database of 'listings'. These listings explain the method we took in order to get an email address published to the internet; how we've seeded a honeypot for any particular email address, along with the number of emails each method has been able to yield. Tracking the number of emails received will be a manual process for the forseable future. Each time an email is received, the analyst reviewing the new email(s) will need to update the counts displayed next to the related listing.</p>
            </div>


            <div class="countsContainer">
                <h2>Current Counts</h2>
                <div>
                    <text>Current number of </text> <text><strong>listings posted</strong></text>
                </div>
                <div>
                    <text>Current count of </text> <text><strong>all mail received</strong></text>
                </div>
            </div>

        </div>


        <div class="listingsRow">

            <div class="newListingContainer">
            
            </div>


            <div class="currentListingsContainer">
            
            </div>

        </div>
        -->


        <!-- https://gridbyexample.com/examples/example5/ -->
        <div class="wrapper">                
            <div class="box a"><h2>box A = Spamtrap Tracker</h2>    
                <div class="boxWrapperA">
                    <div class="box b"><h4>box B = Purpose of Document</h4>
                        <p style="font-size: 80%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ex turpis. Cras luctus nibh lectus, in ullamcorper ex tempor eleifend. Nulla bibendum, eros a consequat vestibulum, orci massa fermentum quam, sed commodo nunc ex vitae nisl. Aliquam ullamcorper interdum est nec tincidunt.</p>
                    </div>
                    <div class="box c"><h4>box C = Count Summaries</h4>    
                        <p style="font-size: 80%;">text text text text</p>
                    </div>
                </div>
            </div>
            <div class="box d"><h4>box D = Add Listing</h4>
                <div class="boxWrapperD">
                    <div class="childD">D 1</div> 
                    <div class="childD">D 2</div>
                    <div class="childD">D 3</div>
                    <div class="childD">D 4</div>
                    <div class="childD">D 5</div>
                </div>    
            </div>
            <div class="box e"><h4>box E = Current Listings</h4>
                <div class="boxWrapperE">
                    <div class="childE">E 1</div>
                    <div class="childE">E 2</div>
                    <div class="childE">E 3</div>
                    <div class="childE">E 4</div>
                    <div class="childE">E 5</div>
                    <div class="childE">E 6</div>
                </div>    
                <div class="boxWrapperE">
                    <div class="childE">E 7</div>
                    <div class="childE">E 8</div>
                    <div class="childE">E 9</div>
                    <div class="childE">E 10</div>
                    <div class="childE">E 11</div>
                    <div class="childE">E 12</div>
                </div>
                <div class="boxWrapperE">
                    <div class="childE">E 13</div>
                    <div class="childE">E 14</div>
                    <div class="childE">E 15</div>
                    <div class="childE">E 16</div>
                    <div class="childE">E 17</div>
                    <div class="childE">E 18</div>
                </div>
                <div class="boxWrapperE">
                    <div class="childE">E 19</div>
                    <div class="childE">E 20</div>
                    <div class="childE">E 21</div>
                    <div class="childE">E 22</div>
                    <div class="childE">E 23</div>
                    <div class="childE">E 24</div>
                </div>
                <div class="boxWrapperE">
                    <div class="childE">E 25</div>
                    <div class="childE">E 26</div>
                    <div class="childE">E 27</div>
                    <div class="childE">E 28</div>
                    <div class="childE">E 29</div>
                    <div class="childE">E 30</div>
                </div>
                <div class="boxWrapperE">
                    <div class="childE">E 31</div>
                    <div class="childE">E 32</div>
                    <div class="childE">E 33</div>
                    <div class="childE">E 34</div>
                    <div class="childE">E 35</div>
                    <div class="childE">E 36</div>
                </div>
            </div>
        </div>        


        <?php 
            /* TO DO */
        ?>


        <footer style="font-size: 12px; color: #808080; position: fixed; bottom: 20px;">Dallas Abuse Department<br>Problems with this page? <a href="https://w3.ibm.com/bluepages/profile.html?uid=2G7875897">Contact the author</a></footer>    
    </body>
</html>

