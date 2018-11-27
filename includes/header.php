<?php 



?>

<html>
    <head>
        <!-- implement me: https://gethead.info/ -->

            <!-- base URL for links relative to document root -->
            <!-- <base> --> 

            <!-- page description, this content *may* be used as a part of search engine results. -->
            <!-- <meta name="description" content="A description of the page"> -->

            <!-- Control the behavior of search engine crawling and indexing -->
            <!-- this is for the 'fake' site Jeff wants to set up, not here -->
            <!-- <meta name="robots" content="index,follow"> -->     <!-- All Search Engines -->
            <!-- <meta name="googlebot" content="index,follow"> -->  <!-- Google Specific -->

        <style type="text/css">

            
            body {
                margin: 0px;
                background-color: white;
                font-family: Verdana, Geneva, Sans-serif;
                font-size: 13px;
            }
            
            .topHeader {
                padding: 5px 15px 20px 15px;
                height: 80px;
                background-color: #bfbfbf;
                box-shadow: 2px 4px 4px rgb(102, 102, 102, 0.19);
            }
            .pageExplanationText {
                
            }
            
            /*~~~  Dallas Abuse Team page title + animation  ~~~*/
            /* ...this needs to be fixed... */
            .typewriterText {
                overflow: hidden;                           /* hides content until 'typed' */
                border-right: .15em solid Black;            /* typwriter cursor border */
                white-space: nowrap; 
                letter-spacing: .125em;
                width: 13em;
                font-family: Courier, monospace;
                animation: typing 2.5s steps(18, end), blink-caret 1s step-end infinite;
            }
            @keyframes typing {  from {width: 0} to {width: 13em;}  }                                       /* typing animation */
            @keyframes blink-caret {  from, to {border-color: transparent} 30% {border-color: #bfbfbf;}  }    /* typewriter cursor */
            
            .sidebar {
                width: 250px;
                float: left;
                /*position: static;*/
                position: sticky;
                top: 0;
                box-shadow: 4px 0px 4px rgb(102, 102, 102, 0.19);

                height: 100%;
                background-color: #f2f2f2;
            }

            .sidebarList {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }
            
            .sidebarItems, .sidebarItemsActive {
                /*padding: 5px 5px 10px 15px;*/
                color: #666666;
                border-bottom: 1.5px solid rgb(230, 230, 230, 0.9);
                padding: 10px 5px 12.5px 15px;
                display: flex;
                flex-direction: column;
            }
            
            .sidebarItems:link {
                text-decoration: none;
                color: #666666;
            }
            
            .sidebarItems:visited {
                text-decoration: none;
                color: #666666;
            }

            /* must come after :link and :visited, before :active */
            .sidebarItems:hover {
                background-color: #b30000;
                color: white;
            }
            .sidebarItems:focus {
                background-color: #b30000;
                color: white;
            }
            .sidebarItems:active {
                text-decoration: none;
                color: #666666;
            }

            .sidebarItemsActive {
                background-color: #b30000;
                color: white;
                text-decoration: none;
            }

        </style>
    </head>
    <body>

        <div class="topHeader">
            <h1 class="typewriterText">Dallas Abuse Team</h1>
            <p class="pageExplanationText">All the documents, guides, walkthroughs or tools created by our group, in one centralized and easy to access area.</p>
        </div>

        <div class="sidebar">
            <!-- too many wrappers? -->
            <ul class="sidebarList">
            <!-- 
                - abusedev
                - external facing website
                - mail server guide
                - apache server guide
                - spamtrap tracker
                - currently deployed AbuseTweaks script
                - sources
                - - - // all source scripts
                - - - index.html
                - - - tracker.php
            -->
                
            
                <a class="sidebarItems" id="link1" style="padding: 10px 5px 12.5px 15px;" href="index.php" target="_self">Home</a>
                <a class="sidebarItems" id="link2" href="http://abusedev.softlayer.local/index.php" target="_blank">Abuse Dev</a>
                <a class="sidebarItems" id="link3" href="https://confluence.softlayer.local/collector/pages.action?key=ABUSEDESK" target="_blank">Abuse Confluence</a>
                <a class="sidebarItems" id="link4" href="serverConfigGuide.php" target="_self">Configuring A Mail Server</a>
                <a class="sidebarItems" id="link5" href="tracker.php" target="_self">Spamtrap Hit Tracker</a>
                <!-- <a class="sidebarItems" id="link6" href="" target="_self">mysqlTracker</a> -->

            </ul>
        </div>

        <footer style="margin: 0px; padding: 0px 0px 5px 0px; font-size: 10px; color: #808080; background-color: #f2f2f2; position: fixed; width: 250px; bottom: 0px; text-align: center;">Problems with this page?<br/><a style="color: #808080" href="https://w3.ibm.com/bluepages/profile.html?uid=2G7875897">Contact the author</a></footer>         

    </body>
</html>