
<!-- saved from url=(0014)about:internet -->
<html><head skincd="TRZ3"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--START DEFAULT VALUES-->
    </head><body><default name="PGSZ" content="Letter">
    <default name="FTFC" content="Century Gothic">
    <default name="VMRG" content="0">
    <default name="HMRG" content="0">
    <default name="PIND" content="0">
    <default name="SSPC" content="10">
    <default name="PSPC" content="20">
    <default name="LNSP" content="7">
    <default name="LNWT" content="0">
    <default name="FTSZ" content="11">
    <default name="HDSZ" content="16">
    <default name="SDCL" content="#003d73">
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
    <formula name="JTTL" content="{$FTSZ} + 3"> <!-- jobtitle font size -->
    <formula name="PMAR" content="({$PIND} + {$FTSZ}) + 80"> <!-- Paragraph margin : space between date and content -->
    <formula name="RTSZ" content="{$HDSZ} + 1"> <!-- Resume title font size -->
    <formula name="RAPT" content="({$FTSZ} + {$LNSP}) div 2 - 3.5">

    <formula name="LBOX" content="153">

    <!--END Calculation-->

    <container parentindex="0" index="0" value="NAME" class="left-box">
    <container parentindex="0" index="1" value="SUMM" class="right-box">
    <container parentindex="1" index="2" value="CNTC,HILT,SFTR,LANG" class="left-box">
    <container parentindex="1" index="3" value="*" class="right-box">

    <style type="text/css" id="static">
        /*Font support for MAC*/
        @font-face{font-family:'Century Gothic';font-weight:normal;font-style:normal;src:local('Century Gothic'),url('/blobcontent/zty/fonts/CenturyGothic.ttf') format('truetype')}
        @font-face{font-family:'Century Gothic';font-weight:bold;font-style:normal;src:local('Century Gothic Bold'),url('/blobcontent/zty/fonts/CenturyGothicBold.ttf') format('truetype')}
        @font-face{font-family:'Century Gothic';font-weight:bold;font-style:italic;src:local('Century Gothic Bold Italic'),url('/blobcontent/zty/fonts/CenturyGothicBoldItalic.ttf') format('truetype')}
        @font-face{font-family:'Century Gothic';font-weight:normal;font-style:italic;src:local('Century Gothic Italic'),url('/blobcontent/zty/fonts/CenturyGothicItalic.ttf') format('truetype')}

        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:transparent}
        body{text-align:left;font-feature-settings:"liga" 0;-moz-font-feature-settings:"liga" off}
        #document.skn-trz3 ol,#document.skn-trz3 ul{list-style:none}
        #document.skn-trz3 table{border-collapse:collapse;border-spacing:0;font-size:inherit;color:inherit;width:100%}

        /*START content disc style for LI*/
        #document.skn-trz3 ul,#document.skn-trz3 li{margin:0;padding:0;list-style-type:disc}
        #document.skn-trz3 ul li{margin:0 0 0 16px;padding:0}
        @-moz-document url-prefix() {#document.skn-trz3 ul li{margin:0 0 0 12px;padding:0 0 0 3px}}
        /*END content disc style for LI*/

        /*table style*/
        #document.skn-trz3 table.skills,.table_wrapper{width:100%;margin-top:0;word-wrap:break-word}
        #document.skn-trz3 table.skills th,table.skills td{width:20%;text-align:center}
        #document.skn-trz3 table.skills .skillname,#document.skn-trz3 table.skills .skillrating{text-align:left;width:35%}
        #document.skn-trz3 table.skills .skillrating{width:20%}
        #document.skn-trz3 table.skills .skillyears,#document.skn-trz3 table.skills .skilllast{width:19%}
        #document.skn-trz3 table.skills .pad1{width:5%}
        #document.skn-trz3 .skills .pad2,#document.skn-trz3 table.skills .pad3{width:1%}

        /*document*/
        #document.skn-trz3{box-sizing:border-box;color:#343434;font-variant-ligatures:none;line-height:16px;min-height:792px;padding:20px;word-wrap:break-word}
        #document.skn-trz3 .name{color:#003d73;font-weight:700;padding:0;position:relative;text-align:left;word-wrap:break-word}
        #document.skn-trz3 .address .singlecolumn{margin-left:0!important}
        #document.skn-trz3 .heading{border-bottom:1px solid #d5d6d6;font-weight:700;letter-spacing:0;line-height:15px;margin-bottom:10px;padding:0 0 3px}
        #document.skn-trz3 .sectiontitle{color:#003d73;word-wrap:break-word}
        #document.skn-trz3 .firstsection,#document.skn-trz3 .SECTION_CNTC{padding-top:0!important}
        #document.skn-trz3 .education .joblocation{font-style:italic}
        #document.skn-trz3 .resumeTitle{color:#003d73;padding:7px 0 15px;font-style:italic}

        /*leftBox and rightBox css*/
        #document.skn-trz3 .left-box{display:table-cell;padding:0;position:relative}
        #document.skn-trz3 .left-box .section{position:relative}
        #document.skn-trz3 .left-box .sectiontitle{text-align:left}
        #document.skn-trz3 .right-box{display:table-cell;letter-spacing:.2px;padding:0 0 0 18px;vertical-align:top}
        #document.skn-trz3 .right-box .section{border-left:1px solid #d5d6d6;padding-left:23px;position:relative}
        #document.skn-trz3 .right-box .section:first-child{padding-top:0}
        #document.skn-trz3 .parentContainer{border-collapse:collapse;display:table;min-height:inherit;table-layout:fixed;width:100%}
        #document.skn-trz3 .parentContainer .left-box,#document.skn-trz3 .parentContainer .right-box{padding-bottom:20px;padding-top:20px}
        #document.skn-trz3 .parentContainer .left-box{padding-right:10px}

        #document.skn-trz3 .topsection .right-box .section{border:0;padding-left:0}
        #document.skn-trz3 .parentContainer .right-box .section:first-child:before{background:#fff;content:"";height:21px;left:-3px;position:absolute;top:0;width:5px;z-index:1}
        #document.skn-trz3 .right-box .section .icon-heading,#document.skn-trz3 .right-box .section:first-child .icon-heading{height:25px;left:-8px;position:absolute;top:3px;width:25px;z-index:10}
        /*#document.skn-trz3 .icon1{opacity:.75}*/
        #document.skn-trz3 .right-box .section .icon-heading{top:23px}
        #document.skn-trz3 .right-box .paddedline.date-content{position:absolute;font-weight:700;margin-left:0;width:65px}
        #document.skn-trz3 .paragraph .singlecolumn{position:relative}
        #document.skn-trz3 .section:empty,#document.skn-trz3 .parentContainer .left-box svg{display:none}
        #document.skn-trz3 .topsection .left-box,#document.skn-trz3 .topsection .right-box{width:50%;float:left;box-sizing:border-box}
        #document.skn-trz3 .right-box .education .paragraph,#document.skn-trz3 .right-box .experience .paragraph,#document.skn-trz3 .right-box .summary .paragraph{margin-left:0}
        #document.skn-trz3 .right-box .summary .singlecolumn{margin-left:0!important}

        /* fixes for grey border */
        #document.skn-trz3 .left-box .section{position:relative}

        #document.skn-trz3 .parentContainer svg.rating{display:inline-block;height:11px;box-sizing:content-box}
        #document.skn-trz3 .rating-wrapper{position:relative;white-space:nowrap}
        #document.skn-trz3 .rating-text{word-wrap:break-word}
        #document.skn-trz3 .rating-text,#document.skn-trz3 .rating-svg{width:50%;display:inline-block;word-wrap:break-word;white-space:normal;vertical-align:top}
        #document.skn-trz3 .rating-svg{text-align:right;line-height:normal}
        #document.skn-trz3 .rating-text:last-child {width: 100%;}

        /*common css*/
        #document.skn-trz3 .txtBold{font-weight:bold}
        #document.skn-trz3 .txtItl{font-style:italic}
        #document.skn-trz3 .paddedline{display:block}
        #document.skn-trz3 .pt5{padding-top:5px}
        #document.skn-trz3 .ptb3{padding:3px 0}
        #document.skn-trz3 .word-break{word-wrap:break-word}

        /* Issues fix for builder page */
        #displayResume #document.skn-trz3.document{min-height:792px}
        #document.skn-trz3 > div{min-height:inherit}

        /* finalize page Timeline */
        #document.skn-trz3 .parentContainer .right-box > .sortable-item .section .icon-heading{top:3px}
        #document.skn-trz3 .parentContainer .right-box > .sortable-item:first-child .section .icon-heading{top:3px}
        #document.skn-trz3 .parentContainer .left-box > .sortable-item:first-child .section, #document.skn-trz3 .parentContainer .right-box > .sortable-item:first-child .section{padding-top:0}
        #document.skn-trz3 .parentContainer .right-box > .sortable-item .section:first-child:before{background:none}
        #document.skn-trz3 .parentContainer .right-box > .sortable-item:first-child .section:before{height:20px;top:-3px;background:#fff}
        #document.skn-trz3 > div:not(.topsection), #document.skn-trz3 > div:not(.parentContainer){min-height:auto}
        #document.skn-trz3 .rating .default-fill{fill:#003d73}
        #document.skn-trz3 .sortable-item .rating-wrapper{display:block}
        /*#document.skn-trz3 .sortable-item .rating-wrapper > div{display:flex;position:relative;white-space:nowrap}*/

        /* Only for firefox */
        @-moz-document url-prefix() {#document.skn-trz3 .parentContainer{height:1px}}
    </style>
    <style type="text/css" id="dynamic" leftcolwidth="0">
        #document.skn-trz3,#document.skn-trz3 table{line-height:{$FTLH}px}
        #document.skn-trz3.pagesize{width:{$PGSZ}px}
        #document.skn-trz3.fontface{font-family:{$FTFC}}
        #document.skn-trz3.fontsize{font-size:{$FTSZ}px}
        #document.skn-trz3 .section{padding-top:{$SCSP}px}
        #document.skn-trz3 .firstparagraph{margin-top:0!important}
        #document.skn-trz3 .paragraph{margin-top:{$PSPC}px}
        #document.skn-trz3 .singlecolumn,#document.skn-trz3 .maincolumn{word-wrap:break-word}
        #document.skn-trz3 .right-box .singlecolumn,#document.skn-trz3 .right-box .maincolumn{margin-left:{$PIND}px}
        #document.skn-trz3 table.skills td{padding-top:{$TDMT}px}
        #document.skn-trz3 .jobtitle,#document.skn-trz3 .degree,#document.skn-trz3 .programline{font-size:{$JTTL}px}
        #document.skn-trz3 .name{color:{$SDCL};font-size:{$NMSZ}px;line-height:{$NMLH}px}
        #document.skn-trz3 .heading{line-height:{$HDLH}px}
        #document.skn-trz3 .left-box .heading{line-height:{$HDLH}px}
        #document.skn-trz3 .sectiontitle{font-size:{$HDSZ}px;color:{$SDCL}}
        #document.skn-trz3 .right-box .section .icon1,#document.skn-trz3 .right-box .section .icon2{fill:{$SDCL}}
        #document.skn-trz3 .left-box{width:{$LBOX}px}
        #document.skn-trz3 .right-box .paragraph .singlecolumn{margin-left:{$PMAR}px}
        #document.skn-trz3 .right-box .paddedline.date-content{left:-{$PMAR}px}
        #document.skn-trz3 .rating-wrapper *{font-size:{$FTSZ}px}
        #document.skn-trz3 .resumeTitle{color:{$SDCL};font-size:{$RTSZ}px}
        #document.skn-trz3 .rating-wrapper{margin-top:{$TDMT}px}

        /*fixes for finalize page*/
        #document.skn-trz3 .parentContainer .left-box > .sortable-item .section, #document.skn-trz3 .parentContainer .right-box > .sortable-item .section{padding-top:{$SCSP}px}
		#document.skn-trz3 .parentContainer .right-box > .sortable-item:first-child .section:before{background:#fff;content:"";height:10px;left:-3px;position:absolute;top:0;width:5px;z-index:1}
        #document.skn-trz3 .parentContainer .left-box .sortable-item .section:before{right:39.5px}
        #document.skn-trz3 .parentContainer svg.rating{padding-top:{$RAPT}px}
        #document.skn-trz3.active svg.rating{height:11px}
        #document.skn-trz3 .rating .default-fill{fill:{$SDCL}}
		#document.skn-trz3 .right-box .doc-item .icon-heading{left:-32px}

    </style>
    <title>Skin | Multi Column</title>


    <div id="document" class="skn-trz3 fontsize fontface vmargins pagesize">
        <div id="CONTAINER_PARENT_0" class="topsection">
            <div id="CONTAINER_0" class="left-box last-box">
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
            <div id="CONTAINER_1" class="right-box last-box">
                <div id="SECTION_SUMM" class="section summary notdraggable">
                    <div class="paragraph" id="PARAGRAPH_SUMM">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="CONTAINER_PARENT_1" class="parentContainer">
            <div id="CONTAINER_2" class="left-box last-box">
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
                                    <span class="field" id="FIELD_STAT">OK</span><span dependency="STAT+ZIPC">, </span>
                                    <span class="field" id="FIELD_ZIPC">49204</span>
                                </div>
                                <div class="txtBold pt5" dependency="HPHN|CPHN">Phone </div>
                                <div dependency="HPHN">
                                    <span class="field" id="FIELD_HPHN">(914) 582-5825</span>
                                </div>
                                <div dependency="CPHN">
                                    <span class="field" id="FIELD_CPHN">(914) 582-5825</span>
                                </div>
                                <div class="txtBold pt5" dependency="EMAI">E-mail </div>
                                <div dependency="EMAI" class="word-break">
                                    <span class="field" id="FIELD_EMAI">resume@livecareer.com</span>
                                </div>
                            </div>
                        </div>
                        <div dependency="SOCL">
                            <div id="CATEGORY_SOCIAL_SOCL" class="pt5">
                                <div id="DOCDATAINFO_SOCL" class="txtBold"></div>
                                <div id="FIELD_SOCL"></div>
                            </div>
                        </div>
                    </div>
                </div>                
                <div id="SECTION_HILT" class="section">
                    <svg class="icon-heading" x="0px" y="0px" viewBox="0 0 4.8 4.7">
                        <polygon fill="#fff" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon1" fill="#003d73" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon2" fill="#003d73" points="0,3.1 1.5,3.1 1.5,4.7  "></polygon>
                    </svg>
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_HILT">Highlights</div>
                    </div>
                    <div class="paragraph rating-wrapper" id="PARAGRAPH_HILT">
                            <div class="rating-text">
                                <span class="paddedline" id="FIELD_SKC1"></span>
                            </div>
                            <div class="rating-svg" dependency="RATV">
                                <svg class="rating" viewBox="0 0 480 100" id="FIELD_RATV" type="count">
                                    <rect x="0" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                                    <rect x="100" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                                    <rect x="200" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                                    <rect x="300" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                                    <rect x="400" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                                </svg>
                                <span class="paddedline" id="FIELD_RATT"></span>
                            </div>
                    </div>
                </div>
                <div id="SECTION_SFTR" class="section">
                    <svg class="icon-heading" x="0px" y="0px" viewBox="0 0 4.8 4.7">
                        <polygon fill="#fff" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon1" fill="#003d73" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon2" fill="#003d73" points="0,3.1 1.5,3.1 1.5,4.7  "></polygon>
                    </svg>
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_SFTR">Software</div>
                    </div>
                    <div class="paragraph rating-wrapper" id="PARAGRAPH_SFTR">
                        <div class="field rating-text" id="FIELD_FRFM">Negotiated</div>
                        <div class="rating-svg" dependency="RATV">
                            <svg class="rating" viewBox="0 0 480 100" id="FIELD_RATV" type="count">
                                <rect x="0" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                                <rect x="100" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                                <rect x="200" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                                <rect x="300" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                                <rect x="400" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                            </svg>
                            <span class="paddedline" id="FIELD_RATT"></span>
                        </div>
                    </div>
                </div>
                <div id="SECTION_LANG" class="section">
                    <svg class="icon-heading" x="0px" y="0px" viewBox="0 0 4.8 4.7">
                        <polygon fill="#fff" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon1" fill="#003d73" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon2" fill="#003d73" points="0,3.1 1.5,3.1 1.5,4.7  "></polygon>
                    </svg>
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_LANG">Languages</div>
                    </div>
                    <div class="paragraph rating-wrapper" id="PARAGRAPH_LANG">
                        <div class="field rating-text" id="FIELD_FRFM">Negotiated</div>
                        <div class="rating-svg" dependency="RATV">
                            <svg class="rating" viewBox="0 0 480 100" id="FIELD_RATV" type="count">
                                <rect x="0" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                                <rect x="100" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                                <rect x="200" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                                <rect x="300" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                                <rect x="400" y="0" width="80" height="80" fill="#d5d6d6" stroke-width="4"></rect>
                            </svg>
                            <span class="paddedline" id="FIELD_RATT"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="CONTAINER_3" class="right-box last-box">
                <div id="SECTION_EXPR" class="section experience">
                    <svg class="icon-heading" x="0px" y="0px" viewBox="0 0 4.8 4.7">
                        <polygon fill="#fff" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon1" fill="#003d73" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon2" fill="#003d73" points="0,3.1 1.5,3.1 1.5,4.7  "></polygon>
                    </svg>
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_EXPR">Experience</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_EXPR">
                        <div class="singlecolumn">
                            <div class="paddedline date-content" dependency="JSTD|EDDT">
                                <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">3/2007</span><span dependency="JSTD+EDDT"> - </span><span class="jobdates" id="FIELD_EDDT" format="%Y-%m">8/2007</span>
                            </div>
                            <span class="paddedline" dependency="JTIT">
                                <span class="jobtitle txtBold" id="FIELD_JTIT">Commercial Loan Officer</span>
                            </span>
                            <span class="paddedline ptb3 txtItl" dependency="COMP|JSTA|JCIT">
                                <span class="companyname" id="FIELD_COMP">Interbay Funding</span><span dependency="COMP+JCIT|JSTA">, </span><span class="jobcity" id="FIELD_JCIT">Denver</span><span dependency="JCIT+JSTA">, </span><span class="jobstate" id="FIELD_JSTA">CO</span>
                            </span>
                            <span class="jobline" id="FIELD_JDES">Negotiated terms of financial transactions with borrowers and brokers.</span>
                        </div>
                    </div>
                </div>
                <div id="SECTION_CERT" class="section">
                    <svg class="icon-heading" x="0px" y="0px" viewBox="0 0 4.8 4.7">
                        <polygon fill="#fff" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon1" fill="#003d73" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon2" fill="#003d73" points="0,3.1 1.5,3.1 1.5,4.7  "></polygon>
                    </svg>
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_CERT">Certifications</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_CERT">
                        <div class="singlecolumn">
                            <div class="paddedline date-content" dependency="DATE">
                                <span class="jobdates" id="FIELD_DATE" format="%Y-%m">2007</span>
                            </div>
                            <div class="field" id="FIELD_FRFM">Negotiated</div>
                        </div>
                    </div>
                </div>
                <div id="SECTION_EDUC" class="section education">
                    <svg class="icon-heading" x="0px" y="0px" viewBox="0 0 4.8 4.7">
                        <polygon fill="#fff" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon1" fill="#003d73" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon2" fill="#003d73" points="0,3.1 1.5,3.1 1.5,4.7  "></polygon>
                    </svg>
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_EDUC">Education</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_EDUC">
                        <div class="singlecolumn">
                            <div class="paddedline date-content" dependency="GRST">
                                <span class="jobdates" id="FIELD_GRST" format="%Y-%m">2007</span><span dependency="GRST+GRED"> - </span><span class="jobdates" id="FIELD_GRED" format="%Y-%m">8/2007</span>
                            </div>
                            <span class="paddedline degreeGap txtBold" dependency="DGRE|STUY">
                                <span class="degree" id="FIELD_DGRE">Masters of Business Administration</span><span dependency="DGRE+STUY">: </span><span class="programline" id="FIELD_STUY">Management of Information Systems</span>
                            </span>
                            <div class="paddedline ptb3 txtItl" dependency="SCIT|SSTA|SCHO">
                                <span class="companyname" id="FIELD_SCHO">Thornhill University</span><span dependency="SCHO+SSTA|SCIT"> - </span><span class="joblocation jobcity" id="FIELD_SCIT">London</span><span dependency="SCIT+SSTA">, </span><span class="joblocation jobstate" id="FIELD_SSTA">UK</span>
                            </div>
                            <span class="field" id="FIELD_FRFM">Negotiated terms of </span>
                        </div>
                    </div>
                </div>
                <div id="SECTION_ACCM" class="section">
                    <svg class="icon-heading" x="0px" y="0px" viewBox="0 0 4.8 4.7">
                        <polygon fill="#fff" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon1" fill="#003d73" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon2" fill="#003d73" points="0,3.1 1.5,3.1 1.5,4.7  "></polygon>
                    </svg>
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_ACCM">Portfolio</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_ACCM">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
                <div id="SECTION_ADDI" class="section">
                    <svg class="icon-heading" x="0px" y="0px" viewBox="0 0 4.8 4.7">
                        <polygon fill="#fff" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon1" fill="#003d73" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon2" fill="#003d73" points="0,3.1 1.5,3.1 1.5,4.7  "></polygon>
                    </svg>
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_ADDI">Additional Information</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_ADDI">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated terms</div>
                    </div>
                </div>
                <div id="SECTION_AFIL" class="section">
                    <svg class="icon-heading" x="0px" y="0px" viewBox="0 0 4.8 4.7">
                        <polygon fill="#fff" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon1" fill="#003d73" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon2" fill="#003d73" points="0,3.1 1.5,3.1 1.5,4.7  "></polygon>
                    </svg>
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_AFIL">Affiliations</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_AFIL">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
                <div id="SECTION_INTR" class="section">
                    <svg class="icon-heading" x="0px" y="0px" viewBox="0 0 4.8 4.7">
                        <polygon fill="#fff" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon1" fill="#003d73" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon2" fill="#003d73" points="0,3.1 1.5,3.1 1.5,4.7  "></polygon>
                    </svg>
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_INTR">Interests</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_INTR">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
                <div id="SECTION_CUST" class="section">
                    <svg class="icon-heading" x="0px" y="0px" viewBox="0 0 4.8 4.7">
                        <polygon fill="#fff" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon1" fill="#003d73" points="0,0 3.3,0 4.8,1.5 3.3,3.1 0,3.1  "></polygon>
                        <polygon class="icon2" fill="#003d73" points="0,3.1 1.5,3.1 1.5,4.7  "></polygon>
                    </svg>
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_CUST">Negotiated</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_CUST">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</container></container></container></container></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></default></default></default></default></default></default></default></default></default></default></default></default></body></html>