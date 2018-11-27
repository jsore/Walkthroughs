<html>
    <head> 
        <style type="text/css">

            /*  
            https://www.reddit.com/r/webdev/comments/84soky/whats_the_most_useful_snippet_of_code_youve_ever/dvskonq/
            drills down each layer and adds darker layer of red as the layers get deeper
            
            * { Background: rgba(255,0,0,0.1); }
            
            */



            /* container for all my boxes */
            /* use CSS Grids as the default alignment tool and use 2 columns */
            .wrapper {
                display: grid;
                grid-template-columns: 340px auto;      
            }
            h4 {
                text-align: center;
            }



            /* 1st row, spans across columns 1 and 2 */
            .rowOne {
                grid-row: 1; 
                grid-column: 1 / 3;
                padding: 10px;
            }       
                /* overrides Grids for placement of interior items */
                .rowOneWrapper {
                    display: flex;
                    text-align: center;
                }
                    /* Purpose of Document box */
                    .docPurpose {
                        flex-grow: 1;
                        margin: 0px 5px 0px 5px;
                        padding: 5px 10px 10px 10px;
                        width: 50%;
                        box-shadow: 2px 4px 4px rgb(102, 102, 102, 0.19);
                        border: 1.5px solid rgb(230, 230, 230, 0.9);
                    }
                 
                    /* Counts Summaries box */
                    .countSummaries {
                        flex-grow: 1;
                        margin: 0px 5px 0px 10px;
                        padding: 5px 10px 10px 10px;
                        width: 50%;
                        box-shadow: 2px 4px 4px rgb(102, 102, 102, 0.19);
                        border: 1.5px solid rgb(230, 230, 230, 0.9);
                    }



            /* 2nd row 1st column */
            .rowTwoOne {  
                grid-row: 2; 
                grid-column: 1; 
                margin: 0px 5px 5px 15px;
                padding: 0px 10px 10px 10px;
                position: sticky;
                top: 10px;
                height: 255px;  
                width: 300px;
                box-shadow: 2px 4px 4px rgb(102, 102, 102, 0.19);
                border: 1.5px solid rgb(230, 230, 230, 0.9);
            }                      
                /* overrides Grids for placement of interior items */
                .rowTwoOneWrapper {                              
                    display: flex;
                    flex-direction: column;
                    margin: 0px;
                    padding: 0px;
                    border: 1px solid #a6a6a6;
                    background-color: #f2f2f2;
                }
                    /* data input fields */
                    .newListingInput {
                        padding: 5px; 
                        border: 1px solid #d9d9d9;
                        height: 29.5px;
                        margin: 0px 5px 1px 5px;
                        color: 666666;
                    }
                    /* margin fixes for first and last elements */
                    .newListingInput:nth-child(1) {  margin: 5px 5px 1px 5px;  }
                    .newListingInput:nth-last-child(1) {  margin: 0px 5px 5px 5px;  }
                    
                    /* submit button */
                    .buttonDiv {
                        display: flex;
                        justify-content: center;
                        /*outline: 1px solid black;*/

                    }
                        .submitButton {
                            margin: 12px 0px 0px 0px;
                            padding: 5px 20px 5px 20px;
                            background-color: #b30000;
                            color: white;
                            border: 1px solid #b30000;
                            height: 30px;
                            line-height: 50%;
                            position: absolute;
                            bottom: 10px;
                            cursor: pointer;
                            /*top: 5px;*/

                        }



            /* 2nd row 2nd column */
            .rowTwoTwo {
                grid-row: 2; 
                grid-column: 2;
                margin: 0px 15px 0px 10px;
                padding: 0px 10px 10px 10px;
                box-shadow: 2px 4px 4px rgb(102, 102, 102, 0.19);
                border: 1.5px solid rgb(230, 230, 230, 0.9);
            } 

                .spamtrapListing {
                    margin: 0px 0px 40px 0px;
                    padding: 30px 5px 5px 5px;
                    border: 1px solid #a6a6a6;
                    background-color: #f2f2f2;
                    font-size: 80%;
                    display: grid;
                    grid-template-columns: auto 250px;
                    grid-template-rows: auto auto auto auto auto auto;
                }
                    /* make each listing stand out a little more */
                    /*.spamtrapListing:nth-child(odd) {
                        background-color: #d9d9d9;
                    }*/

                        .childE1, .childE2, .childE3, .childE4, .childE5 {
                            padding: 5px 5px 6px 5px;
                            border: 1px solid #d9d9d9;
                            margin: 0px 1px 1px 0px;
                            background-color: white;
                            color: 666666;
                        }
                        
                        .childE1 {
                            grid-row: 1; 
                            grid-column: 1;
                            color: #b30000;
                        }
                        .childE2 {
                            grid-row: 2; 
                            grid-column: 1;
                        }
                        .childE3 {
                            grid-row: 3; 
                            grid-column: 1;
                        }
                        .childE4 {
                            grid-row: 4; 
                            grid-column: 1;
                        }
                        .childNotes {
                            grid-row: 1 / 5;
                            grid-column: 2;
                            border: 1px solid #d9d9d9;
                            margin: 0px 0px 1px 0px;
                            padding: 5px;
                            line-height: 1.5;
                            color: #666666;
                            background-color: white;
                        }
                        /* div that holds things related to email hits */
                        .childE5 {
                            grid-row: 5; 
                            grid-column: 1 / 3;
                            margin: 9px 0px 5px 0px;    /* custom top margin */
                            padding: 0px;
                            border: none;
                            background-color: rgba(255, 255, 255, 0.0);  /* transparent 100% */
                            /*background-color: white;*/
                        }

                        .accordionWrapper {
                            display: flex;
                            flex-direction: column;
                            margin: 0px 1px 0px 1px;
                        }

                            .openAccordion {
                                align-self: center;    
                                margin: 0px 0px 0px 0px;
                                padding: 10px 10px 10px 10px;
                                background-color: #b30000;
                                color: white;
                                border: none;
                                cursor: pointer;
                                font-size: 11px;
                                font-weight: bold;
                                width: 200px;
                                height: 30px;
                                line-height: 50%;
                                position: relative;
                            }
                                /*.openAccordion:hover {
                                    background-color: #b30000;
                                    color: white;
                                }*/

                            .closeAccordion {
                                display: none;
                                margin: 0px 0px 5px 0px;
                                padding: 0px;
                                text-align: center;
                                align-self: center;
                                width: 120px;
                                background-color: white;
                                color: #666666;
                                border: none;
                                cursor: pointer;
                                font-size: 9px;
                            }
                            .accordion {
                                /*border: 1px solid #d9d9d9;*/
                                display: none;
                                /*overflow: hidden;*/
                                background-color: #f2f2f2;
                                /*background-color: #d9d9d9;*/
                                border: 1px solid #a6a6a6;
                                margin: 10px;
                                padding: 4px 5px 4px 5px;
                            }

                            .hitlist {
                                list-style-type: none;
                                margin: 10px 0px 0px 0px;
                                padding: 0px;
                                /*background-color: white;*/
                                display: grid;
                                grid-template-columns: 33.3% 33.3% 33.3%;
                                /*grid-template-rows: auto auto auto auto auto;*/
                                grid-template-rows: auto auto;
                            }
                            .sourceIP, .timestamp, .sourceAddress, .sourceDomain, .whois, .mailHeaders{
                                border: 1px solid #d9d9d9;
                                padding: 5px;
                                margin: 1px 1px 1px 1px;
                                background-color: white;
                                text-align: center;
                            }
                            .sourceIP {
                                color: #b30000;
                                grid-row: 1;
                                grid-column: 1 / 2;
                            }
                            .timestamp {
                                grid-row: 2;
                                grid-column: 1 / 2;
                            }
                            .sourceAddress {
                                grid-row: 1;
                                grid-column: 2 / 3;
                            }
                            .sourceDomain {
                                grid-row: 2;
                                grid-column: 2 / 3;
                            }
                            .whois {
                                /*float: left;*/
                                /*display: flex;
                                justify-content: flex-start;*/
                                
                                grid-row: 1;
                                grid-column: 3 / 4;
                                /*text-align: center;*/
                                /*min-width: 100%;*/
                            }

                            
                            .mailHeaders {
                                /*float: right;*/
                                /*display: flex;
                                justify-content: flex-end;*/

                                grid-row: 2;
                                grid-column: 3 / 4;
                                /*text-align: center;*/
                             /*   min-width: 100%;*/
                            }

                            .whoisButton, .headersButton {
                                font-weight: bold;
                                padding: 0px;
                                margin: 0px;
                                border: 0px;
                                background-color: white;
                                cursor: pointer;
                            }

                            .detailText {
                                min-width: 98%;
                                min-height: 200px;
                                resize: vertical;
                            }

                            /*.hitListItem sourceIP {
                                color: #b30000;
                            }*/

                        

    


</style>
</head>
</html>                        