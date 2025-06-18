
<!-- saved from url=(0014)about:internet -->
<html><head skincd="TRZ6"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--START DEFAULT SLIDER VALUES-->
    </head><body><default name="PGSZ" content="Letter">
    <default name="FTFC" content="Century Gothic">
    <default name="VMRG" content="0">
    <default name="HMRG" content="0">
    <default name="PIND" content="0">
    <default name="SSPC" content="10">
    <default name="PSPC" content="5">
    <default name="LNSP" content="7">
    <default name="LNWT" content="0">
    <default name="FTSZ" content="11">
    <default name="HDSZ" content="16">
    <default name="SDCL" content="#373d48">
    <!--END DEFAULT SLIDER VALUES-->

    <!--START FORMULA PART-->
    <formula name="MACW" content="{$PGSZ} - ( 2 * {$HMRG} ) - {$PIND} - 24">
    <formula name="FTLH" content="{$FTSZ} + {$LNSP}">
    <formula name="NMSZ" content="{$FTSZ} + 25">
    <formula name="NMLH" content="({$FTSZ} + 28 ) + ( .5 * {$LNSP} )">
    <formula name="CISZ" content="{$FTSZ}">
    <formula name="CILH" content="{$FTSZ} + ( 2 * {$LNSP} )">
    <formula name="TDMT" content="{$PSPC} div 2">
    <formula name="PBTS" content="{$PSPC} + 10"> <!-- Paragraph bottom space -->
    <formula name="RTNG" content="{$PSPC}">
    <formula name="HDLH" content="{$HDSZ} + {$LNSP}">
    <formula name="JTTL" content="{$FTSZ} + 3">
    <formula name="SCSP" content="{$SSPC} + 5">
    <formula name="DTLH" content="( {$FTSZ} + 1 ) + {$LNSP}">
    <formula name="RBOX" content="155">
    <formula name="PMAR" content="{$PIND} div 2"> <!-- Paragraph margin : space between date and content -->

    <!--Timeline calculation-->
    <formula name="HDTP" content="( ({$HDSZ} div 2) + ({$LNSP} div 2) ) - 15"> <!-- HDTP = Heading circle top position -->
    <formula name="HDBH" content="{$SSPC} + 3"> <!-- HDTP = Heading circle top Border Hide -->
    <formula name="PDTP" content="(( ( {$FTSZ} +1 ) + {$LNSP} ) div 2 ) - 4"> <!-- PDTP = Paragraph circle top position -->
    <!--END FORMULA PART-->

    <container parentindex="0" index="0" value="*" class="left-box">
    <container parentindex="0" index="1" value="CNTC,HILT,SFTR,LANG" class="right-box">

    <style type="text/css" id="static">
        /*Font support for MAC*/
        @font-face{font-family:'Century Gothic';font-weight:normal;font-style:normal;src:local('Century Gothic'),url('/blobcontent/zty/fonts/CenturyGothic.ttf') format('truetype')}
        @font-face{font-family:'Century Gothic';font-weight:bold;font-style:normal;src:local('Century Gothic Bold'),url('/blobcontent/zty/fonts/CenturyGothicBold.ttf') format('truetype')}
        @font-face{font-family:'Century Gothic';font-weight:bold;font-style:italic;src:local('Century Gothic Bold Italic'),url('/blobcontent/zty/fonts/CenturyGothicBoldItalic.ttf') format('truetype')}
        @font-face{font-family:'Century Gothic';font-weight:normal;font-style:italic;src:local('Century Gothic Italic'),url('/blobcontent/zty/fonts/CenturyGothicItalic.ttf') format('truetype')}

        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:transparent}
        body{line-height:1;text-align:left;font-feature-settings:"liga" 0;-moz-font-feature-settings:"liga" off}
        #document.skn-trz6 ol,#document.skn-trz6 ul{list-style:none}
        #document.skn-trz6 table{border-collapse:collapse;border-spacing:0;font-size:inherit;color:inherit;width:100%}

        /*START content disc style for LI*/
        #document.skn-trz6 ul,#document.skn-trz6 li{margin:0;padding:0;list-style-type:disc}
        #document.skn-trz6 ul li{margin:0 0 0 16px;padding:0}
        @-moz-document url-prefix() {#document.skn-trz6 ul li{margin:0 0 0 12px;padding:0 0 0 3px}}
        /*END content disc style for LI*/

        /*common style*/
        #document.skn-trz6 .txtBold{font-weight:bold}
        #document.skn-trz6 .paddedline{display:block}
        #document.skn-trz6 .pt5{padding-top:5px}
        #document.skn-trz6 .pb5{padding-bottom:5px}
        #document.skn-trz6 .word-break{word-wrap:break-word}
        #document.skn-trz6 .disp-n{display:none}/*For resume title - to be remove later*/

        /* table skills */
        #document.skn-trz6 table.skills,.table_wrapper{width:100%;margin-top:0;word-wrap:break-word}
        #document.skn-trz6 table.skills th,table.skills td{width:20%;text-align:center}
        #document.skn-trz6 table.skills .skillname,#document.skn-trz6 table.skills .skillrating{text-align:left;width:35%}
        #document.skn-trz6 table.skills .skillrating{width:20%}
        #document.skn-trz6 table.skills .skillyears,#document.skn-trz6 table.skills .skilllast{width:19%}
        #document.skn-trz6 table.skills .pad1{width:5%}
        #document.skn-trz6 .skills .pad2,#document.skn-trz6 table.skills .pad3{width:1%}

        /* document */
        #document.skn-trz6{box-sizing:border-box;padding:20px 20px 20px 0;border-left:85px solid transparent!important;color:#343434;font-variant-ligatures:none;line-height:16px;min-height:792px}
        #document.skn-trz6 .name{color:#373d48;font-weight:700;overflow:hidden;text-align:left;display:table-cell;min-height:86px;padding-bottom:10px}
        #document.skn-trz6 .address .singlecolumn{margin-left:0!important}
        #document.skn-trz6 .degreeGap{margin-bottom:4px}
        #document.skn-trz6 .locationGap{margin-top:4px}
        #document.skn-trz6 .heading{font-weight:700;margin-bottom:10px;position:relative}
        #document.skn-trz6 .sectiontitle{color:#373d48;line-height:21px;word-wrap:break-word}
        #document.skn-trz6 .firstparagraph{padding-top:0!important}
        #document.skn-trz6 .parentContainer{border-collapse:collapse;display:table;min-height:inherit;table-layout:fixed;width:100%}

        /*monogram*/
        #document.skn-trz6 .monogram{position:absolute;left:-103px;top:0;bottom:0}
        #document.skn-trz6 .monogram svg text{font-size:28px;font-style:italic;font-weight:400;text-transform:lowercase}

        /*leftBox and rightBox css*/
        #document.skn-trz6 .left-box,#document.skn-trz6 .right-box{box-sizing:initial;display:table-cell;padding-left:15px;vertical-align:top}
        #document.skn-trz6 .left-box .firstsection{margin:0;padding:0;min-height:101px}
        #document.skn-trz6 .left-box .paddedline.date-content{position:absolute;margin-left:0;width:65px;left:-97px}
        #document.skn-trz6 .paragraph,#document.skn-trz6 .left-box .singlecolumn{position:relative}
        #document.skn-trz6 .left-box .paragraph{margin-left:0}
        #document.skn-trz6 .section:empty{display:none}
        #document.skn-trz6 .left-box .section{border-left:1px solid #d7d7d7;margin-left:12px;padding-left:25px;position:relative}
        #document.skn-trz6 .left-box{padding-left:0;padding-right:15px}
        #document.skn-trz6 .left-box > .section:first-child{border:0}

        #document.skn-trz6 .firstsection + .section:before{border:1px solid #fff;content:'';left:-1px;position:absolute;top:0}
        #document.skn-trz6 .left-box .singlecolumn:before{background:#373d48;border:0;border-radius:100%;content:"";display:block;height:8px;left:-29px;position:absolute;width:8px;z-index:2}
        #document.skn-trz6 .right-box .sectiontitle{padding-left:35px}
        #document.skn-trz6 .headingIcon svg circle,#document.skn-trz6 .monogram svg circle{fill:#373d48}


        /* Icon */
        #document.skn-trz6 .headingIcon svg{width:30px;height:30px}
        #document.skn-trz6 .headingIcon{z-index:4}
        #document.skn-trz6 .left-box .headingIcon{left:-40px;position:absolute}
        #document.skn-trz6 .right-box .headingIcon{left:0;position:absolute}
        #document.skn-trz6 .headingIcon svg path{fill:#fff}
        #document.skn-trz6 .ratingWrapper{text-align:right}
        #document.skn-trz6 .ratingWrapper .noLnht{line-height:0}
        #document.skn-trz6 .ratingWrapper svg{height:13px}

        /* Issues fix for builder page */
        #displayResume div#document.skn-trz6.document{min-height:792px}
        #document.skn-trz6 > div{min-height:inherit}
        #document.skn-trz6 > div:not(.topsection),#document.skn-trz6 > div:not(.parentContainer){min-height:auto}
        #document.skn-trz6 .right-box > .sortable-item:first-child .section{padding-top:10px!important}
        #document.skn-trz6 .SortableInner > .sortable-item:last-of-type .singlecolumn > .pb5{margin-bottom:0}
        #document.skn-trz6 .left-box > .sortable-item:first-child .section,#document.skn-trz6 .right-box > .sortable-item:first-child .section{padding-top:0}
        #document.skn-trz6 .left-box .sortable-item:first-child > .section{border:0}
        #document.skn-trz6 .left-box .sortable-item:first-child + .sortable-item > .section{padding-top:0!important}
        #document.skn-trz6 .ratingWrapper .default-fill{fill:#373d48}
        #document.skn-trz6 .sortable-item .ratingWrapper span{top:0;line-height:inherit}
        .finalize-resume-preview.TRZ6 > #document.skn-trz6{border:1px solid #e3e7e9!important;}
        .finalize-resume-preview.TRZ6 > #document.skn-trz6 .left-box{padding-left:85px}

        /* Only for firefox */
        @-moz-document url-prefix(){#document.skn-trz6 .parentContainer{height:1px}}

        #document.skn-trz6 .resumeTitle{font-weight:normal}
    </style>
    <style type="text/css" id="dynamic" leftcolwidth="0">
        #document.skn-trz6,#document.skn-trz6 table{line-height:{$FTLH}px}
        #document.skn-trz6.fontface{font-family:{$FTFC}}
        #document.skn-trz6.fontsize{font-size:{$FTSZ}px}
        #document.skn-trz6.pagesize{width:{$PGSZ}px}
        #document.skn-trz6 .section{padding-top:{$SCSP}px}
        #document.skn-trz6 .left-box .section:after{padding-bottom:{$SSPC}px}
        #document.skn-trz6 .paragraph{padding-bottom:{$PBTS}px}
        #document.skn-trz6 .rtngSec .paragraph{padding-bottom:{$RTNG}px}
        #document.skn-trz6 .singlecolumn,#document.skn-trz6 .maincolumn{word-wrap:break-word}
        #document.skn-trz6 left-box .singlecolumn,#document.skn-trz6 left-box .maincolumn{margin-left:{$PMAR}px}
        #document.skn-trz6 table.skills td{padding-top:{$TDMT}px}
        #document.skn-trz6 .jobtitle, #document.skn-trz6 .degree, #document.skn-trz6 .programline{font-size:{$JTTL}px}
        #document.skn-trz6 .name{color:{$SDCL};font-size:{$NMSZ}px;line-height:{$NMLH}px}
        #document.skn-trz6 .monogram svg circle{fill:{$SDCL}}
        #document.skn-trz6 .sectiontitle, #document.skn-trz6 .resumeTitle{font-size:{$HDSZ}px;line-height:{$HDLH}px}
        #document.skn-trz6 .sectiontitle{color:{$SDCL}}
        #document.skn-trz6 .right-box{width:{$RBOX}px}
        #document.skn-trz6 .firstsection + .section:before{height:{$HDTP}px}
        #document.skn-trz6 .left-box .heading ~ .paragraph .date-content:before{background:{$SDCL}}
        #document.skn-trz6 .left-box .singlecolumn:before{background:{$SDCL};top:{$PDTP}px}
        #document.skn-trz6 .left-box .paddedline.date-content{line-height:{$DTLH}px}
		#document.skn-trz6 .left-box .section.notdraggable+.section{padding-top:0px}

        /* Icon */
        #document.skn-trz6 .headingIcon svg circle{fill:{$SDCL}}
        #document.skn-trz6 .headingIcon{top:{$HDTP}px}

        /*Fixes for builder page*/
        #document.skn-trz6 .sortableInner .sortable-item.active > .wrapper-bg+div[data-section]{position:relative;z-index:8}
        .parent-drag.active#document.skn-trz6,._single-parent-drag.active#document.skn-trz6{border:0!important}
        #document.skn-trz6 .ratingWrapper .default-fill{fill:{$SDCL}}

        /*Hover border style*/
        #document.skn-trz6.active .wrapper-bg{left:-62px !important;right:-62px !important}
        #document.skn-trz6.active .acrs-bdr{left:-60px !important}
        #document.skn-trz6.active .acr-edit,#document.skn-trz6.active .acr-delete{left:-59px !important}
        #document.skn-trz6.active .acr-move{right:-59px !important}

    </style>
    <title>Z Skin | Primo</title>


    <div id="document" class="skn-trz6 fontsize fontface vmargins hmargins pagesize">
        <div id="CONTAINER_PARENT_0" class="parentContainer">
            <div id="CONTAINER_0" class="left-box last-box">
                <div id="SECTION_NAME" class="section notdraggable">
                    <div id="PARAGRAPH_NAME" class="paragraph PARAGRAPH_NAME">
                        <div class="monogram" dependency="FNAM|LNAM">
                            <svg height="86px" width="86px">
                                <circle cx="43px" cy="43px" r="43px" fill="#003D74"></circle>
                                <text text-anchor="middle" x="60px" y="68px" fill="#fff" font-size="20px" id="SUBSTR_FALN">JS</text>
                            </svg>
                        </div>
                        <div class="name">
                            <div class="flname txtBold word-break">
                                <span class="field" id="FIELD_FNAM">BENTONION</span>
                                <span class="field" id="FIELD_LNAM">BENDEREZ</span>
                                <div class="resumeTitle" id="FIELD_DCTL"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="SECTION_SUMM" class="section summary notdraggable">
                    <div class="heading">
                        <div class="headingIcon">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="26"></circle>
                                <path transform="translate(11,11)" d="M31 15h-1.051C29.457 8.079 23.922 2.543 17 2.05V1a1 1 0 0 0-2 0v1.05C8.078 2.545 2.543 8.08 2.051 15H1a1 1 0 0 0 0 2h1.051C2.543 23.921 8.078 29.456 15 29.949V31a1 1 0 0 0 2 0v-1.05c6.922-.494 12.457-6.029 12.949-12.95H31a1 1 0 1 0 0-2zm-5 2h1.949c-.483 5.819-5.13 10.466-10.949 10.949V26a1 1 0 0 0-2 0v1.949C9.181 27.466 4.534 22.819 4.051 17H6a1 1 0 0 0 0-2H4.051C4.534 9.181 9.181 4.534 15 4.051V6a1 1 0 0 0 2 0V4.051c5.819.483 10.466 5.13 10.949 10.949H26a1 1 0 0 0 0 2z"></path>
                                <path transform="translate(11,11)" d="M19 16c0-1.654-1.346-3-3-3-1.655 0-3 1.346-3 3s1.345 3 3 3 3-1.346 3-3zm-4 0c0-.551.449-1 1-1 .551 0 1 .449 1 1 0 .551-.449 1-1 1-.551 0-1-.449-1-1z"></path>
                                <path transform="translate(11,11)" d="M17 10a1 1 0 0 0-1-1c-3.86 0-7 3.14-7 7a1 1 0 0 0 2 0c0-2.757 2.243-5 5-5a1 1 0 0 0 1-1zM22 15a1 1 0 0 0-1 1c0 2.757-2.244 5-5 5a1 1 0 1 0 0 2c3.86 0 7-3.14 7-7a1 1 0 0 0-1-1z"></path>
                            </svg>
                        </div>
                        <div class="sectiontitle" id="SECTIONNAME_SUMM">Experience</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_SUMM">
                        <div class="field singlecolumn noPind" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
                <div id="SECTION_EXPR" class="section">
                    <div class="heading">
                        <div class="headingIcon">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="26"></circle>
                                <path transform="translate(11,11)" d="M30 5.983h-7.987V4.045c0-1.655-1.345-3-3-3h-6.015c-1.655 0-3 1.345-3 3v1.938H2.001C.9 5.983 0 6.883 0 7.982V28.953c0 1.1.9 2.001 2 2.001h28c1.099 0 2-.9 2-2V7.981a2.008 2.008 0 0 0-2-1.999zM12 4.045c0-.551.447-1 1-1h6.011c.55 0 1 .447 1 1v1.938H12V4.045zM2 7.982h28v7.008H18.986v-1.025c0-1.101-.897-2-1.998-2h-1.993c-1.101 0-2 .897-2 2v1.025H2V7.982zm14.989 11.02h-1.993v-5.037h1.993v5.037zM2 28.951V16.988h10.997V19c0 1.102.897 2 2 2h1.99a2.002 2.002 0 0 0 2-2v-2.01h11.011v11.963H2.001z"></path>
                            </svg>
                        </div>
                        <div class="sectiontitle" id="SECTIONNAME_EXPR">Experience</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_EXPR">
                        <div class="paddedline date-content">
                            <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">3/2007</span><span dependency="JSTD+EDDT"> - </span>
                            <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">8/2007</span><br dependency="JTIT|COMP|JSTA|JCIT">
                        </div>
                        <div class="singlecolumn">
                            <span class="paddedline" dependency="JTIT">
                                <span class="jobtitle txtBold" id="FIELD_JTIT">Commercial Loan Officer</span>
                            </span>
                            <span class="paddedline locationGap pb5" dependency="COMP|JSTA|JCIT">
                                <span class="companyname" id="FIELD_COMP">Interbay Funding</span><span dependency="COMP+JCIT|JSTA">,</span>
                                <span class="jobcity" id="FIELD_JCIT">Denver</span><span dependency="JCIT+JSTA">, </span>
                                <span class="jobstate" id="FIELD_JSTA">CO</span>
                            </span>
                            <span class="jobline" id="FIELD_JDES">Negotiated terms of financial transactions with borrowers and brokers.</span>
                        </div>
                    </div>
                </div>
                <div id="SECTION_EDUC" class="section">
                    <div class="heading">
                        <div class="headingIcon">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="26"></circle>
                                <path transform="translate(11,11)" d="M30.96 22.58v-9.217l.503-.303c.327-.194.533-.58.537-1 .004-.421-.196-.81-.518-1.014L16.44 1.848a.893.893 0 0 0-.967.004l-14.96 9.21c-.318.202-.515.587-.513 1.005.002.417.203.8.525.998l6.573 3.999a1.256 1.256 0 0 0-.133.56v9.669c0 .325.122.637.335.853.217.22 2.294 2.146 8.646 2.146 6.33 0 8.463-1.82 8.686-2.028a1.21 1.21 0 0 0 .367-.884v-9.917c0-.16-.03-.313-.082-.452l4.044-2.441v8.016c-.593.396-.995 1.124-.995 1.965 0 1.262.895 2.285 2 2.285 1.104 0 1.999-1.023 1.999-2.285 0-.845-.407-1.576-1.005-1.97zM23 26.725c-.787.432-2.866 1.282-7.054 1.282-4.214 0-6.246-.905-6.982-1.34v-8.468l6.493 3.95a.892.892 0 0 0 .937.006L23 18.17v8.556zm-7.06-6.876L3.08 12.045l12.881-7.89 12.922 7.868L15.94 19.85z"></path>
                            </svg>
                        </div>
                        <div class="sectiontitle" id="SECTIONNAME_EDUC">Education</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_EDUC">
                        <div class="paddedline date-content">
                            <span class="jobdates" id="FIELD_GRST" format="%Y-%m">2007</span><span dependency="GRST+GRED"> - </span>
                            <span class="jobdates" id="FIELD_GRED" format="%Y-%m">2007</span>
                        </div>
                        <div class="singlecolumn">
                            <span class="paddedline degreeGap txtBold" dependency="DGRE|STUY">
                                <span class="degree" id="FIELD_DGRE">Masters of Business Administration</span><span dependency="DGRE+STUY">: </span><span class="programline" id="FIELD_STUY">Management of Information Systems</span>
                            </span>
                            <div class="paddedline pb5" dependency="SCIT|SSTA|SCHO">
                                <span class="companyname" id="FIELD_SCHO">Thornhill University</span><span dependency="SCHO+SSTA|SCIT"> - </span><span class="joblocation jobcity" id="FIELD_SCIT">London</span><span dependency="SCIT+SSTA">, </span><span class="joblocation jobstate" id="FIELD_SSTA">UK</span>
                            </div>
                            <span class="field" id="FIELD_FRFM">Negotiated terms of </span>
                        </div>
                    </div>
                </div>
                <div id="SECTION_ADDI" class="section">
                    <div class="heading">
                        <div class="headingIcon">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="26"></circle>
                                <path transform="translate(11,11)" d="M32 11.595c-.229-.455-.457-.682-.914-.682H20.343L16.914.683C16.914.226 16.457 0 16 0s-.914.227-.914.682l-3.429 10.231H.914c-.228 0-.685.227-.914.682 0 .455 0 .91.457 1.137l8.457 6.593L5.03 30.693c-.229.454 0 .91.457 1.136.457.228.914.228 1.143 0L16 25.01l9.371 6.593c.229.227.458.227.686.227.229 0 .457 0 .686-.227.457-.227.457-.682.457-1.137l-3.886-11.367 8.457-6.594c.229 0 .229-.454.229-.909zM3.886 12.959h7.085L9.6 17.28l-5.714-4.32zM24 28.192l-7.543-5.23c-.228-.227-.457-.227-.686-.227-.228 0-.457 0-.685.228L8 28.192l8-24.1 8 24.1zm-1.6-10.913l-1.371-4.32h7.085L22.4 17.28z"></path>
                            </svg>
                        </div>
                        <div class="sectiontitle" id="SECTIONNAME_ADDI">Additional Information</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_ADDI">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated terms</div>
                    </div>
                </div>
                <div id="SECTION_AFIL" class="section">
                    <div class="heading">
                        <div class="headingIcon">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="26"></circle>
                                <path transform="translate(11 11)" d="M16 32C7.187 32 0 24.812 0 16 0 7.187 7.188 0 16 0c8.813 0 16 7.188 16 16 0 8.813-7.188 16-16 16zm0-29.875A13.844 13.844 0 0 0 2.125 16c0 7.625 6.188 13.875 13.875 13.875 7.625 0 13.875-6.25 13.875-13.875 0-7.688-6.25-13.875-13.875-13.875zm0 24.563c-5.875 0-10.688-4.813-10.688-10.688 0-5.875 4.813-10.688 10.688-10.688 5.875 0 10.688 4.813 10.688 10.688 0 5.875-4.813 10.688-10.688 10.688zm0-2.188a8.253 8.253 0 0 0 3.875-.938l-3.063-3.375c-.25.063-.562.063-.812.063s-.563 0-.813-.063l-3.062 3.375c1.125.625 2.5.938 3.875.938zM7.437 16c0 2.5 1.125 4.75 2.875 6.313l2.126-3.938a5.014 5.014 0 0 1-.688-2.125L7.625 14.5c-.125.5-.188 1-.188 1.5zm.625-3.188l4.5.688c.438-.563.938-1 1.563-1.313l.813-4.624c-3.126.375-5.688 2.437-6.876 5.25zM13.875 16c0 1.188.938 2.125 2.125 2.125A2.107 2.107 0 0 0 18.125 16 2.107 2.107 0 0 0 16 13.875 2.107 2.107 0 0 0 13.875 16zm3.188-8.438l.812 4.625c.625.313 1.125.75 1.563 1.313l4.437-.688C22.75 10 20.187 7.939 17.062 7.563zm3.187 8.688c-.063.75-.313 1.5-.688 2.125l2.125 3.938A8.41 8.41 0 0 0 24.5 16c0-.5 0-1-.125-1.5z"></path>
                            </svg>
                        </div>
                        <div class="sectiontitle" id="SECTIONNAME_AFIL">Affiliations</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_AFIL">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
                <div id="SECTION_CERT" class="section">
                    <div class="heading">
                        <div class="headingIcon">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="26"></circle>
                                <path transform="translate(11,11)" d="M31.872 26.24l-5.785-10.88c.643-1.28.857-2.773.857-4.48C26.944 4.907 22.016 0 16.016 0c-6 0-10.927 4.907-10.927 10.88 0 1.707.428 3.2 1.071 4.48l-6 10.667c-.214.426-.214.853 0 1.066.215.427.643.64 1.072.64l4.928-1.066 1.714 4.693c.214.213.429.64.857.64.429 0 .643-.213.857-.427l5.143-9.6h2.142l5.143 9.6c.214.427.428.427.857.427.428 0 .643-.213.857-.64l1.714-4.693 4.928 1.066c.429 0 .857 0 1.071-.426.643-.427.643-.854.429-1.067zM9.16 28.587l-1.286-3.414c-.214-.426-.643-.853-1.071-.64l-3.643.854 4.286-7.68c1.5 1.92 3.428 3.2 5.785 4.053L9.16 28.587zm6.856-8.747c-4.928 0-8.999-4.053-8.999-8.96 0-4.907 4.071-8.96 9-8.96 4.927 0 8.998 4.053 8.998 8.96 0 4.907-4.07 8.96-8.999 8.96zm9.428 4.48c-.429-.213-1.071.213-1.071.64l-1.286 3.627-3.857-7.04c2.357-.64 4.5-2.134 5.785-4.054l4.286 7.68-3.857-.853z"></path>
                            </svg>
                        </div>
                        <div class="sectiontitle" id="SECTIONNAME_CERT">Certifications</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_CERT">
                        <div class="paddedline date-content">
                            <span class="jobdates" id="FIELD_DATE" format="%Y-%m">2007</span>
                        </div>
                        <div class="singlecolumn">
                            <div class="field" id="FIELD_FRFM">Negotiated</div>
                        </div>
                    </div>
                </div>
                <div id="SECTION_INTR" class="section">
                    <div class="heading">
                        <div class="headingIcon">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="26"></circle>
                                <path transform="translate(11,11)" d="M16 0c-2.185 0-4.267.441-6.165 1.237a1.01 1.01 0 0 0-.194.085C3.974 3.785 0 9.437 0 16c0 8.823 7.178 16 16 16 8.823 0 16-7.177 16-16 0-8.822-7.177-16-16-16zm13.999 16c0 .112-.006.223-.009.334-1.532-.406-5.42-1.17-10.217-.116a48.942 48.942 0 0 0-1.415-2.965l-.131-.248c5.131-1.981 7.313-4.649 8.215-6.315A13.944 13.944 0 0 1 30 16zM24.927 5.227c-.466 1.1-2.159 3.94-7.651 6-2.467-4.51-4.385-7.212-5.459-8.587A13.948 13.948 0 0 1 16 2c3.391 0 6.503 1.213 8.928 3.226zM9.874 3.416c.85 1.04 2.825 3.66 5.474 8.456-6.253 1.885-11.332 1.659-13.095 1.495.838-4.383 3.723-8.046 7.62-9.951zM2 16c0-.216.006-.43.016-.643.602.06 1.537.128 2.761.128 2.717 0 6.808-.337 11.538-1.819l.267.51c.452.868.86 1.725 1.232 2.565a23.32 23.32 0 0 0-2.623 1c-5.71 2.586-8.385 6.275-9.337 7.89A13.945 13.945 0 0 1 2 16zm5.373 11.013c.508-.962 2.833-4.818 8.643-7.449a20.841 20.841 0 0 1 2.576-.967c1.9 4.825 2.558 8.804 2.757 10.337A13.92 13.92 0 0 1 16 29.999a13.923 13.923 0 0 1-8.626-2.986zm15.867.963c-.288-1.925-1.005-5.545-2.688-9.869 4.642-.924 8.316-.018 9.243.253a14.031 14.031 0 0 1-6.554 9.617z"></path>
                            </svg>
                        </div>
                        <div class="sectiontitle" id="SECTIONNAME_INTR">Interests</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_INTR">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
                <div id="SECTION_ACCM" class="section">
                    <div class="heading">
                        <div class="headingIcon">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="26"></circle>
                                <path transform="translate(11,11)" d="M32 7.438c0 5.312-5.25 9.437-8.375 11.5-.063.062-.125.187-.188.25 0 0-.187.25-1.375 1.75-.875 1.25-1.812 2.812-1.812 4.687 0 1.5 1.25 3.063 2.563 4.25h2.812V32H6.375v-2.125h2.813c1.312-1.188 2.562-2.75 2.562-4.25 0-1.688-.938-3.375-1.75-4.625-.563-.625-1-1.25-1.438-1.938C5.5 17.063 0 12.875 0 7.5 0 4 2.688 3.312 4.25 3.25c-.063-2 0-3.25 0-3.25h23.5s.063 1.25 0 3.188c1.563.124 4.25.75 4.25 4.25zM2.125 7.5c.25 3.563 2.875 6.563 4.688 8.188-1.5-3.563-2.125-7.376-2.375-10.376-1 .063-2.438.5-2.313 2.188zm23.5-5.375H6.375s-.563 11.188 4.875 17.5c.75 1 2.625 4.563 2.625 6 0 2.625-2.125 4.25-2.125 4.25h8.5s-2.125-1.688-2.125-4.25c0-3.313 2.813-6.375 2.813-6.375 5.187-5.5 4.687-17.125 4.687-17.125zm2 3.188c-.25 3-.75 6.75-2.063 10 1.75-1.688 4.125-4.5 4.313-7.876.125-1.687-1.25-2.062-2.25-2.125z"></path>
                            </svg>
                        </div>
                        <div class="sectiontitle" id="SECTIONNAME_ACCM">Portfolio</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_ACCM">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
                <div id="SECTION_CUST" class="section">
                    <div class="heading">
                        <div class="headingIcon">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="26"></circle>
                                <path transform="translate(11,11)" d="M11.907 19.287v9.55l5.891-5.023L32 32l-8.186-14.202 6.077-5.891H19.287l-5.085-5.21 2.232-2.232L11.97 0 0 11.969l4.465 4.465 2.233-2.232zm14.822 7.442l-7.442-4.403 3.039-3.04zM24.62 14.016l-10.604 9.55v-5.333l-5.768-5.52 4.465-4.527 5.52 5.83h6.387zm-20.155-.559L2.977 11.97l8.992-8.992 1.488 1.488z"></path>
                            </svg>
                        </div>
                        <div class="sectiontitle" id="SECTIONNAME_CUST">Negotiated</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_CUST">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                    </div>
                </div>
            </div>
            <div id="CONTAINER_1" class="right-box last-box">
                <div id="SECTION_CNTC" class="section SECTION_CNTC notdraggable">
                    <div class="heading">
                        <div class="headingIcon">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="26"></circle>
                                <path transform="translate(11,11)" d="M31.85 27.626c-1.38-3.684-3.906-4.604-5.973-4.835-1.608-.23-3.216-.92-3.905-1.38v-2.533c1.838-2.302 2.986-5.295 2.986-7.828C24.958 4.835 21.972 0 16 0c-5.972 0-8.958 5.065-8.958 11.05 0 2.763 1.148 5.756 2.986 7.828v2.762c-.69.46-2.297.921-3.905 1.382-2.067.23-4.364 1.15-5.972 4.834-.23.46-.23 1.151.23 1.612C1.759 31.54 9.798 32 16 32c6.432 0 14.241-.46 15.62-2.532.459-.46.459-1.151.23-1.842zM16 1.842c4.594 0 7.152 4.394 7.152 9.228-.28 4.546-2.666 8.112-7.232 8.456-4.449-.462-6.926-4.804-7.04-8.573 0-4.604 2.526-9.111 7.12-9.111zm0 28.086c-12.174 0-14.012-1.611-14.012-1.611 1.149-2.993 2.757-3.454 4.365-3.684 1.837-.23 3.675-.92 4.594-1.381l.918-.46v-2.073c1.149.921 2.527 1.382 4.135 1.382 1.378 0 2.756-.46 3.905-1.382v2.072l.919.46c.918.461 2.756 1.152 4.594 1.382 1.607.23 3.215.69 4.364 3.684.23 0-1.608 1.611-13.782 1.611z"></path>
                            </svg>
                        </div>
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
                                <div dependency="SOCL">
                                    <div id="CATEGORY_SOCIAL_SOCL" class="pt5">
                                        <div id="DOCDATAINFO_SOCL" class="txtBold"></div>
                                        <div id="FIELD_SOCL"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="SECTION_HILT" class="section rtngSec">
                    <div class="heading">
                        <div class="headingIcon">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="26"></circle>
                                <path transform="translate(11,11)" d="M31.36 14.293l-3.413-3.413c2.133-.64 3.84-2.773 3.84-5.333C31.787 2.56 29.227 0 26.24 0c-2.347 0-4.48 1.707-5.333 3.84l-3.2-3.2c-.854-.853-2.56-.853-3.414 0L9.6 5.333c-.213.427-.213.854-.213 1.28.213.427.64.64 1.066.427h.64c2.134 0 3.84 1.707 3.84 4.053 0 2.134-1.493 4.054-3.84 4.054-2.133 0-4.053-1.92-4.053-4.054v-.64a1.63 1.63 0 0 0-.427-1.066c-.213-.427-.64-.427-.853 0L.64 14.293c-.853.854-.853 2.347 0 3.414L14.293 31.36c.427.427 1.067.64 1.707.64.64 0 1.28-.213 1.707-.64L31.36 17.707c.853-.854.853-2.56 0-3.414zm-1.493 1.92L16.213 29.867c-.213.213-.426.213-.64 0L2.133 16.213c-.213 0-.213-.426 0-.426l3.414-3.414a5.953 5.953 0 0 0 5.76 4.48c3.2 0 5.76-2.56 5.76-5.973 0-2.773-1.707-5.12-4.267-5.76l2.987-2.987c.213-.213.426-.213.64 0l4.906 4.907c.214.213.854.427 1.067.213.427-.213.64-.64.64-1.066v-.214-.213c0-1.92 1.493-3.413 3.413-3.413 1.92 0 3.414 1.493 3.414 3.413 0 1.92-1.494 3.413-3.414 3.413h-.426c-.427 0-.854.214-1.067.64-.213.427-.213.854.213 1.067l4.694 4.907c.213 0 .213.426 0 .426z"></path>
                            </svg>
                        </div>
                        <div class="sectiontitle" id="SECTIONNAME_HILT">Highlights</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_HILT">
                        <div class="singlecolumn maincolumn">
                            <span class="paddedline" id="FIELD_SKC1"></span>
                            <div class="ratingWrapper" dependency="RATV">
                                <div class="noLnht">
                                    <svg viewBox="0 0 500 100" id="FIELD_RATV" type="count">
                                        <circle cx="50" cy="50" r="40" fill="#d5d6d6"></circle>
                                        <circle cx="150" cy="50" r="40" fill="#d5d6d6"></circle>
                                        <circle cx="250" cy="50" r="40" fill="#d5d6d6"></circle>
                                        <circle cx="350" cy="50" r="40" fill="#d5d6d6"></circle>
                                        <circle cx="450" cy="50" r="40" fill="#d5d6d6"></circle>
                                    </svg>
                                </div>
                                <span class="paddedline" id="FIELD_RATT"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="SECTION_SFTR" class="section rtngSec">
                    <div class="heading">
                        <div class="headingIcon">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="26"></circle>
                                <path transform="translate(11,11)" d="M30.08 2.986H1.92C.853 2.986 0 3.84 0 4.906v17.067c0 1.067.853 1.92 1.92 1.92h13.013v2.987h-4.906c-.64 0-1.067.426-1.067 1.066 0 .64.427 1.067 1.067 1.067h11.946c.64 0 1.067-.427 1.067-1.067 0-.64-.427-1.066-1.067-1.066h-4.906v-2.987H30.08c1.067 0 1.92-.853 1.92-1.92V4.906c0-1.066-.853-1.92-1.92-1.92zm0 18.987H1.92V4.906h27.947v17.067z"></path>
                            </svg>
                        </div>
                        <div class="sectiontitle" id="SECTIONNAME_SFTR">Software</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_SFTR">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                        <div class="ratingWrapper" dependency="RATV">
                            <div class="noLnht">
                                <svg viewBox="0 0 500 100" id="FIELD_RATV" type="count">
                                    <circle cx="50" cy="50" r="40" fill="#d5d6d6"></circle>
                                    <circle cx="150" cy="50" r="40" fill="#d5d6d6"></circle>
                                    <circle cx="250" cy="50" r="40" fill="#d5d6d6"></circle>
                                    <circle cx="350" cy="50" r="40" fill="#d5d6d6"></circle>
                                    <circle cx="450" cy="50" r="40" fill="#d5d6d6"></circle>
                                </svg>
                            </div>
                            <span class="paddedline" id="FIELD_RATT"></span>
                        </div>
                    </div>
                </div>
                <div id="SECTION_LANG" class="section rtngSec">
                    <div class="heading">
                        <div class="headingIcon">
                            <svg viewBox="0 0 54 54">
                                <circle cx="27" cy="27" r="26"></circle>
                                <path transform="translate(11,11)" d="M21.101 3.014C16.231 3.014 14.841 0 8.58 0 4.638 0 2.087 3.246 2.087 3.246v27.826c0 .464.464.928.928.928.463 0 .927-.464.927-.928V18.32c1.16-.696 2.55-1.391 4.406-1.391 6.26 0 8.116 3.014 12.985 3.014 4.87 0 8.58-3.014 8.58-3.014V0s-3.71 3.014-8.812 3.014zM27.826 16c-1.16.696-3.478 2.087-6.493 2.087-1.855 0-3.246-.464-4.87-1.16-2.086-.927-4.405-1.855-8.115-1.855-1.623 0-3.015.232-4.174.928V3.942c.696-.696 2.319-1.855 4.638-1.855 3.014 0 4.637.696 6.26 1.391 1.624.696 3.479 1.623 6.261 1.623 2.551 0 4.87-.695 6.725-1.623V16z"></path>
                            </svg>
                        </div>
                        <div class="sectiontitle" id="SECTIONNAME_LANG">Languages</div>
                    </div>
                    <div class="paragraph" id="PARAGRAPH_LANG">
                        <div class="field singlecolumn" id="FIELD_FRFM">Negotiated</div>
                        <div class="ratingWrapper" dependency="RATV">
                            <div class="noLnht">
                                <svg viewBox="0 0 500 100" id="FIELD_RATV" type="count">
                                    <circle cx="50" cy="50" r="40" fill="#d5d6d6"></circle>
                                    <circle cx="150" cy="50" r="40" fill="#d5d6d6"></circle>
                                    <circle cx="250" cy="50" r="40" fill="#d5d6d6"></circle>
                                    <circle cx="350" cy="50" r="40" fill="#d5d6d6"></circle>
                                    <circle cx="450" cy="50" r="40" fill="#d5d6d6"></circle>
                                </svg>
                            </div>
                            <span class="paddedline" id="FIELD_RATT"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>

</container></container></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></default></default></default></default></default></default></default></default></default></default></default></default></body></html>