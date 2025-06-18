
<!-- saved from url=(0014)about:internet -->
<html><head skincd="SRZ9"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--START DEFAULT VALUES-->
    </head><body><default name="PGSZ" content="Letter">
    <default name="FTFC" content="Century Gothic">
    <default name="VMRG" content="10">
    <default name="HMRG" content="10">
    <default name="PIND" content="0">
    <default name="SSPC" content="10">
    <default name="PSPC" content="10">
    <default name="LNSP" content="7">
    <default name="LNWT" content="0">
    <default name="FTSZ" content="11">
    <default name="HDSZ" content="16">
    <default name="SDCL" content="#002e58">
    <!--END DEFAULT VALUES-->
    <!--START Calculation-->
    <formula name="MACW" content="{$PGSZ} - ( 2 * {$HMRG} ) - {$PIND} - 24">
    <formula name="LRMR" content="{$HMRG} + 12">
    <formula name="TBMR" content="{$VMRG} + 12">
    <formula name="FTLH" content="({$FTSZ} + {$LNSP})">
    <formula name="NMSZ" content="{$FTSZ} + 25">
    <formula name="NMLH" content="{$FTSZ} + 25 + ( 1 * {$LNSP} )">
    <formula name="SCSP" content="{$SSPC} + 10">
    <formula name="HDLH" content="{$HDSZ} + 6">
    <formula name="TDMT" content="{$PSPC} div 2">
    <formula name="PGIN" content="{$PIND} div 2"> <!--Paragraph Indent -->
    <formula name="JTTL" content="{$FTSZ} + 3"> <!-- Jobtitle font size -->
    <formula name="PMAR" content="({$PIND} + {$FTSZ}) + 80"> <!-- Paragraph margin : space between date and content -->
    <formula name="TPOS" content="({$HDSZ} div 2) + 1"> <!-- Bullet top Position -->
    <formula name="LBOX" content="165">

    <formula name="SVLH" content="({$LNSP} - {$FTSZ}) div 2">
    <!--END Calculation-->
    <container parentindex="0" index="0" value="CNTC,HILT,SFTR,LANG" class="left-box">
    <container parentindex="0" index="1" value="*" class="right-box">

    <style type="text/css" id="static">
        /*Font support for MAC*/
        @font-face{font-family:'Century Gothic';font-weight:normal;font-style:normal;src:local('Century Gothic'),url('/blobcontent/zty/fonts/CenturyGothic.ttf') format('truetype')}
        @font-face{font-family:'Century Gothic';font-weight:bold;font-style:normal;src:local('Century Gothic Bold'),url('/blobcontent/zty/fonts/CenturyGothicBold.ttf') format('truetype')}
        @font-face{font-family:'Century Gothic';font-weight:bold;font-style:italic;src:local('Century Gothic Bold Italic'),url('/blobcontent/zty/fonts/CenturyGothicBoldItalic.ttf') format('truetype')}
        @font-face{font-family:'Century Gothic';font-weight:normal;font-style:italic;src:local('Century Gothic Italic'),url('/blobcontent/zty/fonts/CenturyGothicItalic.ttf') format('truetype')}

        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:transparent}
        body{text-align:left;font-feature-settings:"liga" 0;-moz-font-feature-settings:"liga" off}
        #document.skn-srz9 ol,#document.skn-srz9 ul{list-style:none}
        #document.skn-srz9 table{border-collapse:collapse;border-spacing:0;font-size:inherit;color:inherit;width:100%}

        /*START content disc style for LI*/
        #document.skn-srz9 ul,#document.skn-srz9 li{margin:0;padding:0;list-style-type:disc}
        #document.skn-srz9 ul li{margin:0 0 0 16px;padding:0}
        @-moz-document url-prefix() {#document.skn-srz9 ul li{margin:0 0 0 12px;padding:0 0 0 3px}}
        /*END content disc style for LI*/

        /*common css*/
        #document.skn-srz9 .txtBold{font-weight:bold}
        #document.skn-srz9 .paddedline{display:block}
        #document.skn-srz9 .word-break{word-wrap:break-word}

        #document.skn-srz9 table.skills,.table_wrapper{width:100%;margin-top:0;word-wrap:break-word}
        #document.skn-srz9 table.skills th,table.skills td{width:20%;text-align:center}
        #document.skn-srz9 table.skills .skillname,#document.skn-srz9 table.skills .skillrating{text-align:left;width:35%}
        #document.skn-srz9 table.skills .skillrating{width:20%}
        #document.skn-srz9 table.skills .skillyears,#document.skn-srz9 table.skills .skilllast{width:19%}
        #document.skn-srz9 table.skills .pad1{width:5%}
        #document.skn-srz9 .skills .pad2,#document.skn-srz9 table.skills .pad3{width:1%}

        /* document */
        #document.skn-srz9{box-sizing:border-box;color:#343434;font-variant-ligatures:none;line-height:16px;min-height:792px}
        #document.skn-srz9 .name{display:table;width:100%;color:#002e58;font-weight:700;overflow:hidden;padding:0;text-align:left;word-wrap:break-word}
        #document.skn-srz9 .flname{font-weight:400;vertical-align:top}
        #document.skn-srz9 .address .singlecolumn{margin-left:0!important}
        #document.skn-srz9 .heading{font-weight:700;line-height:15px;margin-bottom:10px;padding-left:15px;position:relative}
        #document.skn-srz9 .heading:before{background:#002e58;border-radius:50%;content:'';height:5px;left:1px;position:absolute;top:8px;width:5px}
        #document.skn-srz9 .sectiontitle{color:#002e58;word-wrap:break-word}
        #document.skn-srz9 .degreeGap{margin-bottom:4px}
        #document.skn-srz9 .locationGap{margin-top:4px}
        #document.skn-srz9 .firstparagraph{margin-top:0!important}
        #document.skn-srz9 .section:empty{display:none}

        /*monogram*/
        #document.skn-srz9 .right-box{position:relative}
        #document.skn-srz9 .monogram, #document.skn-srz9 .flname{display:table-cell}
        #document.skn-srz9 .monogram{width:92px;min-height:92px;vertical-align:top}
        #document.skn-srz9 .flname{padding-left:20px}
        #document.skn-srz9 .monogram svg text{font-size:28px;font-style:italic;font-weight:400;text-transform:lowercase}

        /*left and right css*/
        #document.skn-srz9 .parentContainer{border-collapse:collapse;display:table;min-height:inherit;table-layout:fixed;width:100%}
        #document.skn-srz9 .left-box,#document.skn-srz9 .right-box{padding-left:15px;vertical-align:top;display:table-cell}
        #document.skn-srz9 .left-box{box-sizing:initial;letter-spacing:.2px;padding-left:0;padding-right:15px}
        #document.skn-srz9 .right-box .section:first-child,#document.skn-srz9 .left-box .section:first-child,#document.skn-srz9 .summary{padding-top:0}
        #document.skn-srz9 .right-box .paddedline.date-content{position:absolute;margin-left:0;width:65px}
        #document.skn-srz9 .paragraph{position:relative}
        #document.skn-srz9 .right-box .experience .paragraph,#document.skn-srz9 .right-box .summary .paragraph{margin-left:0}
        #document.skn-srz9 .summary .singlecolumn{margin-left:0!important}
        #document.skn-srz9 > div:not(.topsection), #document.skn-srz9 > div:not(.parentContainer){min-height:auto}
        #document.skn-srz9 .resumeTitle{color:#002e58;font-weight:500}

        /* Issues fix for builder page */
        #displayResume #document.skn-srz9.document{min-height:792px}
        #document.skn-srz9 > div{min-height:inherit}
        #document.skn-srz9 .left-box .sortable-item .notdraggable,#document.skn-srz9 .right-box .sortable-item .notdraggable{padding-top:0px}
        #document.skn-srz9 .right-box .sortable-item .summary{padding-top:20px}
        #document.skn-srz9 .sortable-item .name{padding-bottom:0}
        #document.skn-srz9 .ratingWrapper .default-fill{fill:#002e58}
        #document.skn-srz9 .sortable-item .ratingWrapper span{top:0}
        /* Only for firefox */
        @-moz-document url-prefix() {#document.skn-srz9 .parentContainer{height:1px}}

        /*Icons*/
        #document.skn-srz9 .iconRow{clear:both;padding-bottom:7px;word-wrap:break-word}
        #document.skn-srz9 .iconRow .iconSvg{width:20px;height:20px;float:left;margin-right:5px}
        #document.skn-srz9 .iconRow .iconSvg svg:first-child{width:20px;height:20px}
        #document.skn-srz9 .iconRow svg circle{fill:#002e58}
        #document.skn-srz9 .iconRow svg path{fill:#fff}
        #document.skn-srz9 .iconRow .icoTxt{margin-left:25px}
        #document.skn-srz9 .ratingWrapper{text-align:right}
        #document.skn-srz9 .ratingWrapper .noLnht{line-height:0}
        #document.skn-srz9 .ratingWrapper svg{height:13px}

        /* For dates fix */
        #document.skn-srz9 .right-box .hidedates{visibility:hidden;position:static!important;display:block;float:left}
        #document.skn-srz9 .left-box .hidedates{display:none}
        #document.skn-srz9 .paragraph.datespara:after{content:'';display:table;clear:both}
    </style>
    <style type="text/css" id="dynamic" leftcolwidth="0">
        #document.skn-srz9,#document.skn-srz9 table{line-height:{$FTLH}px}
        #document.skn-srz9.pagesize{width:{$PGSZ}px}
        #document.skn-srz9.fontface{font-family:{$FTFC}}
        #document.skn-srz9.fontsize{font-size:{$FTSZ}px}
        #document.skn-srz9.vmargins{padding-top:{$TBMR}px;padding-bottom:{$TBMR}px}
        #document.skn-srz9.hmargins{padding-left:{$LRMR}px;padding-right:{$LRMR}px}
        #document.skn-srz9 .section{padding-top:{$SCSP}px}
        #document.skn-srz9 .left-box .section:after{padding-bottom:{$SSPC}px}
        #document.skn-srz9 .paragraph{margin-top:{$PSPC}px}
        #document.skn-srz9 .singlecolumn,#document.skn-srz9 .maincolumn{word-break:break-word}
        #document.skn-srz9 .right-box .singlecolumn,#document.skn-srz9 .right-box .maincolumn{margin-left:{$PGIN}px}
        #document.skn-srz9 table.skills td{padding-top:{$TDMT}px}
        #document.skn-srz9 .jobtitle, #document.skn-srz9 .degree, #document.skn-srz9 .programline{font-size:{$JTTL}px}
        #document.skn-srz9 .name{color:{$SDCL};font-size:{$NMSZ}px;line-height:{$NMLH}px}
        #document.skn-srz9 .monogram svg circle,#document.skn-srz9 .iconRow svg circle{fill:{$SDCL}}
        #document.skn-srz9 .heading{line-height:{$HDLH}px}
        #document.skn-srz9 .sectiontitle, #document.skn-srz9 .resumeTitle, #document.skn-srz9 .heading:before{font-size:{$HDSZ}px;color:{$SDCL}}
        #document.skn-srz9 .resumeTitle{line-height:{$HDLH}px}
        #document.skn-srz9 .heading:before{background:{$SDCL};top:{$TPOS}px}
        #document.skn-srz9 .left-box{width:{$LBOX}px}
        #document.skn-srz9 .right-box .paragraph .singlecolumn{margin-left:{$PMAR}px}

        /*Icons*/
        #document.skn-srz9 .iconRow .iconSvg{padding-top:{$SVLH}px}

        /*fixes for builder page*/
        #document.skn-srz9 .left-box .sortable-item .section,#document.skn-srz9 .right-box .sortable-item .section{padding-top:{$SCSP}px}
        #document.skn-srz9 .ratingWrapper .default-fill{fill:{$SDCL}}
        /*Hover border style*/
        #document.skn-srz9.active .wrapper-bg{left:-62px !important;right:-62px !important}
        #document.skn-srz9.active .acrs-bdr{left:-60px !important}
        #document.skn-srz9.active .acr-edit,#document.skn-srz9.active .acr-delete{left:-59px !important}
        #document.skn-srz9.active .acr-move{right:-59px !important}
    </style>
    <title>Skin | Multi Column</title>


    <div id="document" class="skn-srz9 fontsize fontface vmargins hmargins pagesize">
        <div id="CONTAINER_PARENT_0" class="parentContainer">
            <div id="CONTAINER_0" class="left-box last-box">
                <div id="SECTION_CNTC" class="section SECTION_CNTC notdraggable">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_CNTC">Contact Info</div>
                    </div>
                    <div id="PARAGRAPH_CNTC" class="paragraph PARAGRAPH_CNTC">
                        <div class="address">
                            <div class="singlecolumn">
                                <div class="iconRow" dependency="STRT|CITY|STAT|ZIPC">
                                    <div class="iconSvg">
                                        <svg viewBox="0 0 54 54">
                                            <circle cx="27" cy="27" r="26"></circle>
                                            <path transform="translate(11,11)" d="M16 0C8.772 0 2.912 5.86 2.912 13.088 2.912 20.428 9.276 25.27 16 32c6.724-6.732 13.088-11.572 13.088-18.912C29.088 5.86 23.228 0 16 0zm0 22.288c-5.302 0-9.602-4.298-9.602-9.602 0-5.302 4.298-9.602 9.602-9.602 5.302 0 9.602 4.298 9.602 9.602s-4.3 9.602-9.602 9.602z"></path>
                                        </svg>
                                    </div>
                                    <div class="icoTxt">
                                        <span class="field" id="FIELD_STRT">609 Johnson Ave.</span>
                                        <span class="field" id="FIELD_CITY">Tulsa</span><span dependency="CITY+STAT|ZIPC">,</span>
                                        <span class="field" id="FIELD_STAT">OK</span><span dependency="STAT+ZIPC">, </span>
                                        <span class="field" id="FIELD_ZIPC">49204</span>
                                    </div>
                                </div>
                                <div class="iconRow" dependency="HPHN|CPHN">
                                    <div class="iconSvg">
                                        <svg viewBox="0 0 54 54">
                                            <circle cx="27" cy="27" r="26"></circle>
                                            <path transform="translate(11,11)" d="M6.067.655L1.328 5.39C-.696 7.413.196 9.679.196 9.679c2.156 4.733 5.134 9.182 9.03 13.076 3.898 3.893 8.35 6.87 13.087 9.024 0 0 2.195.964 4.293-1.132l4.739-4.736a2.229 2.229 0 0 0 0-3.156l-4.74-4.736a2.233 2.233 0 0 0-3.159 0l-2.665 2.664c-1.837-1.237-3.607-2.619-5.233-4.242-1.627-1.623-3.005-3.391-4.245-5.229l2.665-2.665a2.229 2.229 0 0 0 0-3.157L9.23.655a2.236 2.236 0 0 0-3.162 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="icoTxt">
                                        <span class="field" id="FIELD_HPHN">(914) 582-5825</span><span dependency="HPHN+CPHN">,</span>
                                        <span class="field" id="FIELD_CPHN">(914) 582-5825</span>
                                    </div>
                                </div>
                                <div class="iconRow" dependency="EMAI">
                                    <div class="iconSvg">
                                        <svg viewBox="0 0 54 54">
                                            <circle cx="27" cy="27" r="26"></circle>
                                            <path transform="translate(11,11)" d="M32 6c0-1.106-.894-2-2-2H2C.894 4 0 4.894 0 6l16 13L32 6z"></path>
                                            <path transform="translate(11,11)" d="M0 9v17c0 1.106.894 2 2 2h28c1.106 0 2-.894 2-2V8.968L16 22 0 9z"></path>
                                        </svg>
                                    </div>
                                    <div class="icoTxt">
                                        <span class="field" id="FIELD_EMAI">resume@livecareer.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div dependency="SOCL">
                            <div id="CATEGORY_SOCIAL_SOCL" class="iconRow">
                                <div class="iconSvg">
                                    <svg viewBox="0 0 54 54" id="DOCDATAIMG_SOCL_LINKEDIN">
                                        <circle cx="27" cy="27" r="26"></circle>
                                        <path transform="translate(11,11)" d="M7.813 3.936c0 2.175-1.749 3.937-3.906 3.937C1.749 7.873 0 6.111 0 3.936 0 1.762 1.75 0 3.907 0s3.906 1.762 3.906 3.936zm-.571 6.73H.635V32h6.607V10.667zm10.56 0h-6.336V32h6.336V20.801c0-3 1.382-4.785 4.026-4.785 2.43 0 3.598 1.714 3.598 4.785V32H32V18.492c0-5.714-3.24-8.476-7.766-8.476s-6.432 3.524-6.432 3.524v-2.873z"></path>
                                    </svg>
                                    <svg viewBox="0 0 54 54" id="DOCDATAIMG_SOCL_TWITTER">
                                        <circle cx="27" cy="27" r="26"></circle>
                                        <path transform="translate(11,11)" d="M32 6.075a13.11 13.11 0 0 1-3.771 1.034 6.583 6.583 0 0 0 2.887-3.632 13.142 13.142 0 0 1-4.169 1.593 6.556 6.556 0 0 0-4.793-2.073c-4.237 0-7.352 3.954-6.395 8.06C10.303 10.785 5.466 8.17 2.228 4.2a6.573 6.573 0 0 0 2.031 8.765 6.537 6.537 0 0 1-2.973-.822c-.072 3.042 2.108 5.886 5.266 6.522a6.601 6.601 0 0 1-2.965.112 6.57 6.57 0 0 0 6.133 4.558A13.201 13.201 0 0 1 0 26.054a18.581 18.581 0 0 0 10.064 2.949c12.188 0 19.076-10.295 18.66-19.53A13.32 13.32 0 0 0 32 6.076z"></path>
                                    </svg>
                                    <svg viewBox="0 0 54 54" id="DOCDATAIMG_SOCL_WWW">
                                        <circle cx="27" cy="27" r="26"></circle>
                                        <path transform="translate(11,11)" d="M31.416 8.995L23.004.584a1.976 1.976 0 0 0-2.804 0L13.198 7.59a1.984 1.984 0 0 0 0 2.805l1.402 1.402 7.006-7.01 5.608 5.606-7.012 7.007 1.404 1.404a1.98 1.98 0 0 0 2.802 0l7.008-7.007a1.974 1.974 0 0 0 0-2.802zM17.4 20.208l-7.006 7.01-5.608-5.61 7.012-7.007-1.404-1.404a1.98 1.98 0 0 0-2.802 0L.584 20.208a1.97 1.97 0 0 0 0 2.798l8.41 8.413a1.983 1.983 0 0 0 2.804 0l7.006-7.01a1.984 1.984 0 0 0 0-2.805L17.4 20.208z"></path>
                                        <path transform="translate(11,11)" d="M10.394 21.608c.774.778 2.03.778 2.804 0l8.41-8.41a1.978 1.978 0 0 0 0-2.803 1.98 1.98 0 0 0-2.802 0l-8.412 8.409a1.98 1.98 0 0 0 0 2.804z"></path>
                                    </svg>
                                </div>
                                <div class="icoTxt" id="FIELD_SOCL"></div>
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
                <div id="SECTION_SFTR" class="section">
                    <div class="heading">
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
                <div id="SECTION_LANG" class="section">
                    <div class="heading">
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
            <div id="CONTAINER_1" class="right-box last-box">
                <div id="SECTION_NAME" class="section nameSec notdraggable">
                    <div id="PARAGRAPH_NAME" class="paragraph PARAGRAPH_NAME">
                        <div class="name word-break">
                            <div class="monogram" dependency="FNAM|LNAM">
                                <svg height="90px" width="90px">
                                    <circle cx="45px" cy="45px" r="45px" fill="#003D74"></circle>
                                    <text text-anchor="middle" x="60px" y="68px" fill="#fff" font-size="20px" id="SUBSTR_FALN">JS</text>
                                </svg>
                            </div>
                            <div class="flname">
                                <span class="field" id="FIELD_FNAM">BENTONION</span>
                                <span class="field word-break txtBold" id="FIELD_LNAM">BENDEREZ</span>
                                <div class="resumeTitle" id="FIELD_DCTL"></div>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <span class="jobdates" dependency="JSTD">2007-03</span><span dependency="JSTD+EDDT"> - </span>
                            <span class="jobdates" dependency="EDDT">2007-03</span><br dependency="JTIT|COMP|JSTA|JCIT">
                        </div>
                        <div class="paddedline date-content" dependency="JSTD|EDDT">
                            <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">3/2007</span><span dependency="JSTD+EDDT"> - </span>
                            <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">8/2007</span><br dependency="JTIT|COMP|JSTA|JCIT">
                        </div>
                        <div class="singlecolumn">
                            <span class="paddedline" dependency="JTIT">
                                <span class="jobtitle txtBold" id="FIELD_JTIT">Commercial Loan Officer</span>
                            </span>
                            <span class="paddedline locationGap" dependency="COMP|JSTA|JCIT">
                                <span class="companyname" id="FIELD_COMP">Interbay Funding</span><span dependency="COMP+JCIT|JSTA">,</span>
                                <span class="jobcity" id="FIELD_JCIT">Denver</span><span dependency="JCIT+JSTA">, </span>
                                <span class="jobstate" id="FIELD_JSTA">CO</span>
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
                        <div class="paddedline date-content">
                            <span class="jobdates" id="FIELD_DATE" format="%Y-%m">2007</span>
                        </div>
                        <div class="singlecolumn">
                            <div class="field paddedline" id="FIELD_FRFM">Negotiated</div>
                        </div>
                    </div>
                </div>
                <div id="SECTION_EDUC" class="section education">
                    <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_EDUC">Education</div>
                    </div>
                    <div class="paragraph datespara" id="PARAGRAPH_EDUC">
                        <div class="paddedline date-content hidedates" dependency="GRST|GRED">
                            <span class="jobdates" dependency="GRST">2007-03</span><span dependency="GRST+GRED"> - </span>
                            <span class="jobdates" dependency="GRED">2007-03</span>
                        </div>
                        <div class="paddedline date-content">
                            <span class="jobdates" id="FIELD_GRST" format="%Y-%m">2007</span><span dependency="GRST+GRED"> - </span>
                            <span class="jobdates" id="FIELD_GRED" format="%Y-%m">2007</span>
                        </div>
                        <div class="singlecolumn">
                            <span class="paddedline degreeGap txtBold" dependency="DGRE|STUY">
                                <span class="degree" id="FIELD_DGRE">Masters of Business Administration</span><span dependency="DGRE+STUY">: </span>
                                <span class="programline" id="FIELD_STUY">Management of Information Systems</span>
                            </span>
                            <div class="paddedline" dependency="SCIT|SSTA|SCHO">
                                <span class="companyname" id="FIELD_SCHO">Thornhill University</span><span dependency="SCHO+SSTA|SCIT"> - </span>
                                <span class="joblocation jobcity" id="FIELD_SCIT">London</span><span dependency="SCIT+SSTA">, </span>
                                <span class="joblocation jobstate" id="FIELD_SSTA">UK</span>
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
        </div>
    </div>

</container></container></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></formula></default></default></default></default></default></default></default></default></default></default></default></default></body></html>