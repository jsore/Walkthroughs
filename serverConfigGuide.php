<?php include("/var/www/test/includes/header.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <script>
            // highlight current page in sidebar
            var activeChecker = document.getElementById("link4");
            activeChecker.setAttribute("class", "sidebarItemsActive");
        </script>    

        <title>Configuring A Mail Server</title>

        <style type="text/css">
            .wrapper {
                /*float: left;*/
                display: flex;
                flex-direction: column;

                /*padding: 0px 30px 0px 30px;
                margin: 0px 20px 0px 20px;*/
                padding: 0px 20px 0px 20px;
                /*margin: 20px 0px 0px 20px;*/
                /*background-color: #f2f2f2;*/
                /*color: #595959;*/
            }
            .section {
                margin: 20px 0px 15px 0px;
                padding: 0px 10px 20px 20px;
                box-shadow: 2px 4px 4px rgb(102, 102, 102, 0.19);
                border: 1.5px solid rgb(230, 230, 230, 0.9);
                flex-wrap: nowrap;
                /*background-color: #f2f2f2;*/
            }
            h2 {
                /*color: #666666;*/
                display: flex;
                font-size: 180%;
            }
            .sectionText {
                line-height: 1.75;
            }
            
            .strong {
                font-weight: bold;
                line-height: 1.5;
            }
            .codeRed {
                color: #b30000;
                font-family: monospace;
                font-weight: bold;
                letter-spacing: .150em;
                font-size: 14px;
            }
            .codeBlackBold {
                color: black;
                font-family: monospace;
                font-weight: bold;
                letter-spacing: .150em;
                font-size: 14px;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="section">
                <h2>Getting Started</h2>
                <p class="sectionText">
                    <text><b>This guide was built and formatted with the understanding that you might be starting off with zero Linux experience.</b></text><br/>
                    <text>Each section is presented in a manner that (hopefully) provides enough context for absolute beginners.</text><br/>
                    <br/>
                    <br/>
                    <text><b>Please read each section or command in full</b></text><br/>
                    <text>Don't skip from command to command - the goal here is to grow your knowledgebase.</text><br/>
                    <text>Any values that MIGHT have a unique, customizable property will be denoted in<span class="codeRed">&nbsp;red text&nbsp;</span></text><br/>
                    <text>Be sure that the values for these fields in your commands and files matches the naming conventions you choose to use.</text><br/>
                </p>
            </div>
            <!-- <div class="section">
                <h2>Milestones</h2>
                <p class="strong">Reloading The Server</p>
                <p class="strong">Securing The Server: User Creation &amp; SSH Configuration</p>
                <p class="strong">Securing The Server: Installing Updates</p>
                <p class="strong">Securing The Server: Firewalld Configuration</p>
                <p class="strong">Downloading Required Software</p>
                <p class="strong">BIND &amp; DNS Configuration</p>
                <p class="strong">Creating A Self-Signed Certificate For Postfix &amp; Dovecot</p>
                <p class="strong">Configuring The Mail Transfer Agent (Postfix)</p>
                <p class="strong">Setting The Mail Aliases</p>
                <p class="strong">Configuring The Mail User Agent (Dovecot)</p>
                <p class="strong">Testing The Mail Server</p>
            </div>
 -->
            <div class="section">
                <h2>Reloading The Server</h2>
                <p class="sectionText">
                    <text><b>There are three things that should be done prior to anything else: Setting your server's hostname and your domain in IMS then reloading the server.</b></text><br/>
                    
                    <text>You may choose to use the same server naming structure presented in this guide (shower.themeteorcompany.info)</text></br>
                    <text>However, if you're using a different domain (anything other than themeteorcompany.info) or want to use a different hostname, do so before reloading the server's OS: </text></br>
                    <br/>
                        <text style="margin: 0px 0px 0px 20px;">- Locate the <b>Hostname:</b> and <b>Domain:</b> fields under the <b>General</b> section of your server's HWO</text></br>
                        <text style="margin: 0px 0px 0px 20px;">- Enter a hostname of your choosing</text></br>
                        <text style="margin: 0px 0px 0px 20px;">- Enter the domain you're working with</text></br>
                        <text style="margin: 0px 0px 0px 20px;">- Hit <b>Continue</b></text></br>
                    <br/>
                    <br/>
                    <text><b>With your basic host information updated, reload your server's OS.</b></text><br/>
                    <br/>
                        <text style="margin: 0px 0px 0px 20px;">- Back in your HWO, click the <b>automated management</b> link within the <b>CloudLayer Computing Instance Summary</b> section</text><br/>
                        <text style="margin: 0px 0px 0px 20px;">- Click the <b>Schedule new transaction</b> link then select <b>Operating System Reload</b></text><br/>
                        <text style="margin: 0px 0px 0px 20px;">- Hit <b>Continue</b> and select <b>Yes</b> on all prompts</text><br/>
                    <br/>
                    <text>The reload will take a few minutes at most (typically completes within seconds) so please standby and be ready to proceed with securing your server once the reload has completed. </text>
                </p>        
            </div>
            
            <div class="section">
                <h2>Securing The Server: User Creation &amp; SSH Configuration</h2>
                <p class="sectionText">
                    <text><b>Before you start downloading and configuring any software from the internet you must ensure that your server is secure from outside threats.</b></text><br/>
                    <text>You'll first need to log into the server using the KVM functionality through an internal SoftLayer jump host. </text></br>
                    <text>This can be done by opening an RDP session on your desktop (if you're using a Mac, download and use the Microsoft RDP application from the app store). </text></br>
                    <br/>
                    <text style="margin: 0px 0px 0px 20px;">- The PC you want to connect to is <b>Winadmindal0501</b></text></br>
                    <text style="margin: 0px 0px 0px 20px;">- Enter your IMS credentials (<span class="codeBlackBold">&nbsp;SOFTLAYER\</span><span class="codeRed">username&nbsp;</span>)</text></br>
                    <text style="margin: 0px 0px 0px 20px;">- After getting logged in to the RDP session, open a browser of your choosing and log into IMS (https://internal.softlayer.com/)</text></br>
                    <text style="margin: 0px 0px 0px 20px;">- Navigate to your server's HWO and select the <b>KVM Console</b> link under the <b>CloudLayer Computing Instance Summary</b> section</text></br>
                    <text style="margin: 0px 0px 0px 20px;">- You should now be presented with a command-line console for your server</text></br> 
                    <text style="margin: 0px 0px 0px 20px;">- Type<span class="codeBlackBold">&nbsp;root&nbsp;</span>into the console and hit enter to be prompted for a password</text></br>
                    <text style="margin: 0px 0px 0px 20px;">- The password for<span class="codeBlackBold">&nbsp;root&nbsp;</span>can be found at the top of the current KVM page and the server's HWO page</text></br>
                </p>    
            </div>
            
            <div class="section">
                <h2>Securing The Server: Installing Updates</h2>
                <p class="sectionText">
                    <text><b></b></text><br/>
                    <text></text></br>
                    <text></text></br>
                </p>
            </div>
            
            <div class="section">
                <h2>Securing The Server: Firewalld Configuration</h2>
                <p class="sectionText">
                    <text><b></b></text><br/>
                    <text></text></br>
                    <text></text></br>
                </p>
            </div>
            
            <div class="section">
                <h2>Downloading Required Software</h2>
                <p class="sectionText">
                    <text><b></b></text><br/>
                    <text></text></br>
                    <text></text></br>
                </p>
            </div>
            
            <div class="section">
                <h2>BIND &amp; DNS Configuration</h2>
                <p class="sectionText">
                    <text><b></b></text><br/>
                    <text></text></br>
                    <text></text></br>
                </p>
            </div>
            
            <div class="section">
                <h2>Creating A Self-Signed Certificate For Postfix &amp; Dovecot</h2>
                <p class="sectionText">
                    <text><b></b></text><br/>
                    <text></text></br>
                    <text></text></br>
                </p>
            </div>
            
            <div class="section">
                <h2>Configuring The Mail Transfer Agent (Postfix)</h2>
                <p class="sectionText">
                    <text><b></b></text><br/>
                    <text></text></br>
                    <text></text></br>
                </p>
            </div>

            <div class="section">
                <h2>Setting The Mail Aliases </h2>
                <p class="sectionText">
                    <text><b></b></text><br/>
                    <text></text></br>
                    <text></text></br>
                </p>
            </div>

            <div class="section">
                <h2>Configuring The Mail User Agent (Dovecot)</h2>
                <p class="sectionText">
                    <text><b></b></text><br/>
                    <text></text></br>
                    <text></text></br>
                </p>
            </div>

            <div class="section">
                <h2>Testing The Mail Server</h2>
                <p class="sectionText">
                    <text><b></b></text><br/>
                    <text></text></br>
                    <text></text></br>
                </p>
            </div>

        </div>
    </body>
</html>