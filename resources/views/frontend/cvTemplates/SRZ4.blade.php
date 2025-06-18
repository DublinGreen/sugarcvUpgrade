
<!-- saved from url=(0014)about:internet -->
<html><head skincd="SRZ4"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--START DEFAULT VALUES-->
    </head><body><default name="PGSZ" content="Letter">
    <default name="FTFC" content="Century Gothic">
    <default name="VMRG" content="0">
    <default name="HMRG" content="0">
    <default name="PIND" content="0">
    <default name="SSPC" content="10">
    <default name="PSPC" content="10">
    <default name="LNSP" content="7">
    <default name="LNWT" content="0">
    <default name="FTSZ" content="11">
    <default name="HDSZ" content="16">
    <default name="SDCL" content="#373d48">
    <!--END DEFAULT VALUES-->
    <!--START Calculation-->
    <formula name="MACW" content="{$PGSZ} - ( 2 * {$HMRG} ) - {$PIND} - 24">
    <formula name="LRMR" content="{$HMRG} + 12">
    <formula name="TBMR" content="{$VMRG} + 12">
    <formula name="FTLH" content="({$FTSZ} + {$LNSP})">
    <formula name="NMSZ" content="{$FTSZ} + 25">
    <formula name="NMLH" content="{$FTSZ} + 25 + ( .5 * {$LNSP} )">
    <formula name="SCSP" content="{$SSPC} + 10">
    <formula name="HDLH" content="{$HDSZ} + 6">
    <formula name="TDMT" content="{$PSPC} div 2">
    <formula name="PGIN" content="(194 - {$PIND}) - 20"> <!--Paragraph Indent -->
    <formula name="JTTL" content="{$FTSZ} + 3"> <!-- Jobtitle font size -->
    <formula name="PMAR" content="({$PIND} + {$FTSZ}) + 80"> <!-- Paragraph margin : space between date and content -->
    <formula name="RBOX" content="154">
    <formula name="RTSZ" content="{$HDSZ} + 2"> <!-- Resume title font size -->
    <!--END Calculation-->

    <container parentindex="0" index="0" value="NAME">
    <container parentindex="1" index="1" value="*" class="left-box">
    <container parentindex="1" index="2" value="CNTC,HILT,SFTR,LANG" class="right-box">

    <style type="text/css" id="static">
        /*Font support for MAC*/
        @font-face{font-family:'Century Gothic';font-weight:normal;font-style:normal;src:local('Century Gothic'),url('/blobcontent/zty/fonts/CenturyGothic.ttf') format('truetype')}
        @font-face{font-family:'Century Gothic';font-weight:bold;font-style:normal;src:local('Century Gothic Bold'),url('/blobcontent/zty/fonts/CenturyGothicBold.ttf') format('truetype')}
        @font-face{font-family:'Century Gothic';font-weight:bold;font-style:italic;src:local('Century Gothic Bold Italic'),url('/blobcontent/zty/fonts/CenturyGothicBoldItalic.ttf') format('truetype')}
        @font-face{font-family:'Century Gothic';font-weight:normal;font-style:italic;src:local('Century Gothic Italic'),url('/blobcontent/zty/fonts/CenturyGothicItalic.ttf') format('truetype')}

        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:transparent}
        body{text-align:left;font-feature-settings:"liga" 0;-moz-font-feature-settings:"liga" off}
        #document.skn-srz4 ol,#document.skn-srz4 ul{list-style:none}
        #document.skn-srz4 table{border-collapse:collapse;border-spacing:0;font-size:inherit;color:inherit;width:100%}

        /*START content disc style for LI*/
        #document.skn-srz4 ul,#document.skn-srz4 li{margin:0;padding:0;list-style-type:disc}
        #document.skn-srz4 ul li{margin:0 0 0 16px;padding:0}
        @-moz-document url-prefix() {#document.skn-srz4 ul li{margin:0 0 0 12px;padding:0 0 0 3px}}
        /*END content disc style for LI*/

        /*table style*/
        #document.skn-srz4 table.skills,.table_wrapper{width:100%;margin-top:0;word-wrap:break-word}
        #document.skn-srz4 table.skills th,table.skills td{width:20%;text-align:center}
        #document.skn-srz4 table.skills .skillname,#document.skn-srz4 table.skills .skillrating{text-align:left;width:35%}
        #document.skn-srz4 table.skills .skillrating{width:20%}
        #document.skn-srz4 table.skills .skillyears,#document.skn-srz4 table.skills .skilllast{width:19%}
        #document.skn-srz4 table.skills .pad1{width:5%}
        #document.skn-srz4 .skills .pad2,#document.skn-srz4 table.skills .pad3{width:1%}

        /* document */
        #document.skn-srz4{box-sizing:border-box;color:#343434;font-variant-ligatures:none;line-height:16px;min-height:792px;word-wrap:break-word}
        #document.skn-srz4 .name{color:#fff;font-weight:700;position:relative;text-align:left;word-wrap:break-word}
        #document.skn-srz4 .address .singlecolumn{margin-left:0!important}
        #document.skn-srz4 .heading{border-bottom:1px solid #d5d6d6;font-weight:700;letter-spacing:0;line-height:15px;margin-bottom:10px;padding:0 0 3px}
        #document.skn-srz4 .sectiontitle{color:#252932;word-wrap:break-word}
        #document.skn-srz4 .degreeGap{margin-bottom:4px}
        #document.skn-srz4 .locationGap{margin-top:4px}
        #document.skn-srz4 .firstparagraph{margin-top:0!important}
        #document.skn-srz4 .topsection{background:#373d48;padding:15px 15px 20px}
        #document.skn-srz4 .section:empty{display:none}
        #document.skn-srz4 .education .joblocation{font-style:italic}
        #document.skn-srz4 .parentContainer{border-collapse:collapse;display:table;min-height:inherit;padding-bottom:20px;table-layout:fixed;width:100%}
        #document.skn-srz4 .resumeTitle{color:#fff;padding-top:7px}

        /*left and right css*/
        #document.skn-srz4 .right-box,#document.skn-srz4 .left-box{padding:15px}
        #document.skn-srz4 .right-box{background-color:#f4f4f4;box-sizing:content-box;display:table-cell;letter-spacing:.2px;vertical-align:top}
        #document.skn-srz4 .left-box .paddedline.date-content{position:absolute;font-weight:700;margin-left:0;width:65px}
        #document.skn-srz4 .paragraph .singlecolumn{position:relative}
        #document.skn-srz4 .left-box .summary .paragraph .singlecolumn{margin-left:0!important}
        #document.skn-srz4 .left-box{display:table-cell;letter-spacing:.2px;vertical-align:top}
        #document.skn-srz4 .firstsection,#document.skn-srz4 .left-box .section:first-child,#document.skn-srz4 .right-box .section:first-child{padding-top:0!important}

        /*common css*/
        #document.skn-srz4 .txtBold{font-weight:bold}
        #document.skn-srz4 .txtItl{font-style:italic}
        #document.skn-srz4 .paddedline{display:block}
        #document.skn-srz4 .mt5{margin-top:5px}
        #document.skn-srz4 .word-break{word-wrap:break-word}
        #document.skn-srz4 .ratingWrapper{text-align:right;position:relative}
        #document.skn-srz4 .ratingWrapper .noLnht{line-height:0}
        #document.skn-srz4 svg{height:13px}

        #document.skn-srz4 > div:not(.topsection){min-height:inherit}
        /* Issues fix for builder page */
        #document.skn-srz4 .ratingWrapper .default-fill{fill:#373d48}
		

        /* Only for firefox */
        @-moz-document url-prefix() {#document.skn-srz4 .parentContainer{height:1px}}

        /* For dates fix */
        #document.skn-srz4 .left-box .hidedates{visibility:hidden;position:static!important;display:block;float:left}
        #document.skn-srz4 .right-box .hidedates{display:none}
        #document.skn-srz4 .paragraph.datespara:after{content:'';display:table;clear:both}
    </style>
    <style type="text/css" id="dynamic" leftcolwidth="0">
        #document.skn-srz4,#document.skn-srz4 table{line-height:{$FTLH}px}
        #document.skn-srz4.pagesize{width:{$PGSZ}px}
        #document.skn-srz4.fontface{font-family:{$FTFC}}
        #document.skn-srz4.fontsize{font-size:{$FTSZ}px}
        #document.skn-srz4 .section{padding-top:{$SCSP}px}
        #document.skn-srz4 .right-box .section:after{padding-bottom:{$SSPC}px}
        #document.skn-srz4 .paragraph{margin-top:{$PSPC}px}
        #document.skn-srz4 .singlecolumn,#document.skn-srz4 .maincolumn{word-wrap:break-word}
        #document.skn-srz4 .left-box .singlecolumn,#document.skn-srz4 .left-box maincolumn{margin-left:{$PIND}px}
        #document.skn-srz4 table.skills td{padding-top:{$TDMT}px}
        #document.skn-srz4 .jobtitle, #document.skn-srz4 .degree, #document.skn-srz4 .programline{font-size:{$JTTL}px}
        #document.skn-srz4 .name{font-size:{$NMSZ}px;line-height:{$NMLH}px}
        #document.skn-srz4 .topsection{background-color:{$SDCL}}
        #document.skn-srz4 .heading{line-height:{$HDLH}px}
        #document.skn-srz4 .sectiontitle{font-size:{$HDSZ}px;color:{$SDCL}}
        #document.skn-srz4 .right-box{width:{$RBOX}px}
        #document.skn-srz4 .left-box .paragraph .singlecolumn{margin-left:{$PMAR}px}
        #document.skn-srz4 .left-box .paddedline.date-content{left:-{$PMAR}px}
        #document.skn-srz4 .resumeTitle{font-size:{$RTSZ}px}
		#document.skn-srz4 .ratingWrapper .default-fill{fill:{$SDCL}}

        /*fixes for builder page*/
		#displayResume #document.skn-srz4.document{min-height:792px}
        #document.skn-srz4 .sortable-item .rating-wrapper span{top:0}
        #document.skn-srz4 .left-box > .sortable-item,#document.skn-srz4 .right-box > .sortable-item{padding-top:{$SCSP}px}
    </style>
    <title>Skin | Multi Column</title>


    <div id="document" class="skn-srz4 fontsize fontface vmargins pagesize">
        <div id="CONTAINER_PARENT_0" class="topsection">
            <div id="CONTAINER_0">
                <div id="SECTION_NAME" class="section notdraggable">
                    <div id="PARAGRAPH_NAME" class="paragraph PARAGRAPH_NAME">
                        <div class="name word-break">
                            <span class="field" id="FIELD_FNAM">BENTONION</span>
                            <span class="field word-break" id="FIELD_LNAM">BENDEREZ</span>
                        </div>
                        <div class="resumeTitle" id="FIELD_DCTL"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="CONTAINER_PARENT_1" class="parentContainer">
            <div id="CONTAINER_1" class="left-box last-box">
                <div id="SECTION_SUMM" class="section summary notdraggable">
                    <div class="paragraph" id="PARAGRAPH_SUMM">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
                <div id="SECTION_EXPR" class="section experience">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_EXPR">Experience</div>
                    </div>
                    <div class="paragraph datespara" id="PARAGRAPH_EXPR">
                        <div class="paddedline date-content hidedates" dependency="JSTD|EDDT">
                            <span class="jobdates" dependency="JSTD">2007-03</span><span dependency="JSTD+EDDT"> - </span><span class="jobdates" dependency="EDDT">2007-03</span><br dependency="JTIT|COMP|JSTA|JCIT">
                        </div>
                        <div class="singlecolumn">
                            <div class="paddedline date-content" dependency="JSTD|EDDT">
                                <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">3/2007</span><span dependency="JSTD+EDDT"> - </span><span class="jobdates" id="FIELD_EDDT" format="%Y-%m">8/2007</span><br dependency="JTIT|COMP|JSTA|JCIT">
                            </div>
                            <span class="paddedline" dependency="JTIT">
                                <span class="jobtitle txtBold" id="FIELD_JTIT">Commercial Loan Officer</span>
                            </span>
                            <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT">
                                <span class="companyname" id="FIELD_COMP">Interbay Funding</span><span dependency="COMP+JCIT|JSTA">, </span><span class="jobcity" id="FIELD_JCIT">Denver</span><span dependency="JCIT+JSTA">, </span><span class="jobstate" id="FIELD_JSTA">CO</span>
                            </span>
                            <span class="jobline" id="FIELD_JDES">Negotiated terms of financial transactions with borrowers and brokers.</span>
                        </div>
                    </div>
                </div>
                <div id="SECTION_CERT" class="section">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_CERT">Certifications</div>
                    </div>
                    <div class="paragraph datespara" id="PARAGRAPH_CERT">
                        <div class="paddedline date-content hidedates" dependency="DATE">
                            <span class="jobdates">2007-03</span>
                        </div>
                        <div class="singlecolumn">
                            <div class="paddedline date-content" dependency="DATE">
                                <span class="jobdates" id="FIELD_DATE" format="%Y-%m">3/2007</span>
                            </div>
                            <div class="field" id="FIELD_FRFM">Negotiated</div>
                        </div>
                    </div>
                </div>
                <div id="SECTION_EDUC" class="section education">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_EDUC">Education</div>
                    </div>
                    <div class="paragraph datespara" id="PARAGRAPH_EDUC">
                        <div class="paddedline date-content hidedates" dependency="GRST|GRED">
                            <span class="jobdates" dependency="GRST">2007-03</span><span dependency="GRST+GRED"> - </span><span class="jobdates" dependency="GRED">2007-03</span>
                        </div>
                        <div class="singlecolumn">
                            <div class="paddedline date-content">
                                <span class="jobdates" id="FIELD_GRST" format="%Y-%m">2007</span><span dependency="GRST+GRED"> - </span><span class="jobdates" id="FIELD_GRED" format="%Y-%m">8/2007</span>
                            </div>
                            <span class="paddedline degreeGap txtBold" dependency="DGRE|STUY">
                                <span class="degree" id="FIELD_DGRE">Masters of Business Administration</span><span dependency="DGRE+STUY">: </span><span class="programline" id="FIELD_STUY">Management of Information Systems</span>
                            </span>
                            <div class="paddedline txtItl" dependency="SCIT|SSTA|SCHO">
                                <span class="companyname" id="FIELD_SCHO">Thornhill University</span><span dependency="SCHO+SSTA|SCIT"> - </span><span class="joblocation jobcity" id="FIELD_SCIT">London</span><span dependency="SCIT+SSTA">, </span><span class="joblocation jobstate" id="FIELD_SSTA">UK</span>
                            </div>
                            <span class="field" id="FIELD_FRFM">Negotiated terms of </span>
                        </div>
                    </div>
                </div>
                <div id="SECTION_ACCM" class="section">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_ACCM">Portfolio</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_ACCM">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
                <div id="SECTION_ADDI" class="section">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_ADDI">Additional Information</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_ADDI">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated terms</div>
                    </div>
                </div>
                <div id="SECTION_AFIL" class="section">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_AFIL">Affiliations</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_AFIL">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
                <div id="SECTION_INTR" class="section">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_INTR">Interests</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_INTR">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
                <div id="SECTION_CUST" class="section">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_CUST">Negotiated</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_CUST">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
            </div>
            <div id="CONTAINER_2" class="right-box last-box">
                <div id="SECTION_CNTC" class="section SECTION_CNTC notdraggable">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_CNTC">Contact Info</div>
                    </div>
                    <div id="PARAGRAPH_CNTC" class="paragraph PARAGRAPH_CNTC">
                        <div class="address">
                            <div class="singlecolumn">
                                <div dependency="STRT|CITY|STAT|ZIPC">
                                    <div class="txtBold">Address </div>
                                    <div class="field" id="FIELD_STRT">609 Johnson Ave.</div>
                                    <span class="field" id="FIELD_CITY">Tulsa</span><span dependency="CITY+STAT|ZIPC">,</span>
                                    <span class="field" id="FIELD_STAT">OK</span><span dependency="STAT+ZIPC">,</span>
                                    <span class="field" id="FIELD_ZIPC">49204</span>
                                </div>
                                <div class="txtBold mt5" dependency="HPHN|CPHN">Phone </div>
                                <div dependency="HPHN">
                                    <span class="field" id="FIELD_HPHN">(914) 582-5825</span>
                                </div>
                                <div dependency="CPHN">
                                    <span class="field" id="FIELD_CPHN">(914) 582-5825</span>
                                </div>
                                <div class="txtBold mt5" dependency="EMAI">E-mail </div>
                                <div dependency="EMAI" class="word-break">
                                    <span class="field" id="FIELD_EMAI">resume@livecareer.com</span>
                                </div>
                            </div>
                            <div dependency="SOCL">
                                <div id="CATEGORY_SOCIAL_SOCL" class="mt5">
                                    <span id="DOCDATAINFO_SOCL" class="txtBold"></span><br>
                                    <span id="FIELD_SOCL"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="SECTION_HILT" class="section">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_HILT">Highlights</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_HILT">
                        <div class="singlecolumn maincolumn">
                            <span class="paddedline" id="FIELD_SKC1"></span>
                            <div class="ratingWrapper" dependency="RATV">
                                <div class="noLnht">
                                    <svg viewBox="0 0 500 100" id="FIELD_RATV" type="count">
                                        <circle cx="50" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                        <circle cx="150" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                        <circle cx="250" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                        <circle cx="350" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                        <circle cx="450" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                    </svg>
                                </div>
                                <span class="paddedline" id="FIELD_RATT"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="SECTION_SFTR" class="section">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_SFTR">Software</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_SFTR">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                        <div class="ratingWrapper" dependency="RATV">
                            <div class="noLnht">
                                <svg viewBox="0 0 500 100" id="FIELD_RATV" type="count">
                                    <circle cx="50" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                    <circle cx="150" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                    <circle cx="250" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                    <circle cx="350" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                    <circle cx="450" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                </svg>
                            </div>
                            <span class="paddedline" id="FIELD_RATT"></span>
                        </div>
                    </div>
                </div>
                <div id="SECTION_LANG" class="section">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_LANG">Languages</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_LANG">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                        <div class="ratingWrapper" dependency="RATV">
                            <div class="noLnht">
                                <svg viewBox="0 0 500 100" id="FIELD_RATV" type="count">
                                    <circle cx="50" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                    <circle cx="150" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                    <circle cx="250" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                    <circle cx="350" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                    <circle cx="450" cy="50" r="40" fill="#d5d6d6" stroke-width="4"></circle>
                                </svg>
                            </div>
                            <span class="paddedline" id="FIELD_RATT"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</container></container></container></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></default></default></default></default></default></default></default></default></default></default></default></default></body></html>