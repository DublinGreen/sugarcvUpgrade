<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/front/mobileResponsive.css') }}">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<div class="resume-preview thumb-preview resume-animation">
   <div class="">
      <div>
         <style type="text/css" id="static">
            /*Font support for MAC*/
            @font-face{font-family:'Century Gothic';font-weight:normal;font-style:normal;src:local('Century Gothic'),url('/blobcontent/zty/fonts/CenturyGothic.ttf') format('truetype')}
            @font-face{font-family:'Century Gothic';font-weight:bold;font-style:normal;src:local('Century Gothic Bold'),url('/blobcontent/zty/fonts/CenturyGothicBold.ttf') format('truetype')}
            @font-face{font-family:'Century Gothic';font-weight:bold;font-style:italic;src:local('Century Gothic Bold Italic'),url('/blobcontent/zty/fonts/CenturyGothicBoldItalic.ttf') format('truetype')}
            @font-face{font-family:'Century Gothic';font-weight:normal;font-style:italic;src:local('Century Gothic Italic'),url('/blobcontent/zty/fonts/CenturyGothicItalic.ttf') format('truetype')}
            html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:transparent}
            body{line-height:1;text-align:left;font-feature-settings:"liga" 0;-moz-font-feature-settings:"liga" off}
            #document.skn-trz7 ol,#document.skn-trz7 ul{list-style:none}
            #document.skn-trz7 table{border-collapse:collapse;border-spacing:0;font-size:inherit;color:inherit;width:100%}
            /*START content disc style for LI*/
            #document.skn-trz7 ul,#document.skn-trz7 li{margin:0;padding:0;list-style-type:disc}
            #document.skn-trz7 ul li{margin:0 0 0 16px;padding:0}
            @-moz-document url-prefix() {#document.skn-trz7 ul li{margin:0 0 0 12px;padding:0 0 0 3px}}
            /*END content disc style for LI*/
            #document.skn-trz7 table.skills,.table_wrapper{width:100%;margin-top:0;word-wrap:break-word}
            #document.skn-trz7 table.skills th,table.skills td{width:20%;text-align:center}
            #document.skn-trz7 table.skills .skillname,#document.skn-trz7 table.skills .skillrating{text-align:left;width:35%}
            #document.skn-trz7 table.skills .skillrating{width:20%}
            #document.skn-trz7 table.skills .skillyears,#document.skn-trz7 table.skills .skilllast{width:19%}
            #document.skn-trz7 table.skills .pad1{width:5%}
            #document.skn-trz7 .skills .pad2,#document.skn-trz7 table.skills .pad3{width:1%}
            /* document */
            #document.skn-trz7{color:#343434;line-height:16px;font-variant-ligatures:none;min-height:792px;box-sizing:border-box;word-wrap:break-word}
            #document.skn-trz7 .name{color:{{isset($resume->color)? $resume->color:"#fff"}};font-weight:bold;font-style:arial;font-size:{{isset($resume->nameSize)? $resume->nameSize:"30px"}}}
            #document.skn-trz7 .address .singlecolumn{margin-left:0!important}
            #document.skn-trz7 .resumeTitle{color:#fff;font-style:arial;font-weight:400;padding-right:25px}
            /* Heading */
            #document.skn-trz7 .heading{padding:0 0 3px;letter-spacing:0;font-weight:bold;line-height:15px;margin-bottom:10px}
            #document.skn-trz7 .sectiontitle{color:{{isset($resume->color)? $resume->color:"#002e58"}};word-wrap:break-word;font-style:arial;font-weight:bold;text-transform:uppercase}
            #document.skn-trz7 .degreeGap{margin-bottom:4px}
            #document.skn-trz7 .locationGap{margin-top:4px}
            #document.skn-trz7 .firstparagraph{margin-top:0!important}
            /* section */
            #document.skn-trz7 .firstsection{padding-top:0!important}
            #document.skn-trz7 .section:empty {display:none}
            #document.skn-trz7 .education .joblocation{font-style:italic}
            /* style for top section container */
            #document.skn-trz7 .topsection{padding-bottom:0px;background-color:{{isset($resume->backgroundColor)? $resume->backgroundColor:'#4267B2'}}}
            /* style for left and right box */
            #document.skn-trz7 .parentContainer{display:table;width:100%;min-height:inherit;table-layout:fixed;border-collapse:collapse}
            #document.skn-trz7 .left-box,#document.skn-trz7 .right-box{padding-right:15px}
            #document.skn-trz7 .left-box{padding-left:0;padding-right:10px}
            #document.skn-trz7 .left-box{box-sizing: initial;letter-spacing: 0.2px;float: left;}
            #document.skn-trz7 .right-box .section:first-child,#document.skn-trz7 .left-box .section:first-child{padding-top:0px!important}
            #document.skn-trz7 .right-box .paddedline.date-content{position:absolute;font-weight:700;margin-left:220px;width:250px}
            #document.skn-trz7 .paragraph{position:relative}
            #document.skn-trz7 .summary .singlecolumn{margin-left:0}
            #document.skn-trz7 .right-box{display:inline-block;float:right;letter-spacing: 0.2px;width: 63%;}
            #document.skn-trz7 .summary.section{padding-top:15px}
            #document.skn-trz7 .txtBold{font-weight:bold}
            #document.skn-trz7 .txtItl{font-style:italic}
            #document.skn-trz7 .paddedline{display:block}
            #document.skn-trz7 .mt5{margin-top:5px}
            #document.skn-trz7 .word-break{word-wrap:break-word}
            #document.skn-trz7 .edu{margin-top:30px;}
            #document.skn-trz7 .bio{margin-top:10px;}
            /*Rating*/
            #document.skn-trz7 .ratingWrapper svg{height:10px;stroke:#002e58}
            #document.skn-trz7 .ratingWrapper .noLnht{line-height:0}
            #document.skn-trz7 .headingIcon svg circle,#document.skn-trz7 .ratingWrapper svg .default-fill{fill:#002e58}
            #document.skn-trz7 .ratingRow{position:relative;white-space:nowrap}
            #document.skn-trz7 .ratingRow .ratingText,#document.skn-trz7 .ratingRow .ratingWrapper{width:50%;display:inline-block;word-break:break-word;white-space:normal;vertical-align:top}
            #document.skn-trz7 .ratingRow .ratingText+.ratingWrapper{text-align:right}
            #document.skn-trz7 .SortableItem .ratingRow .ratingText+.ratingWrapper{margin-top:5px;padding-top:0}
            #document.skn-trz7 .SortableItem .ratingWrapper span{top:0;line-height:inherit}
            /* Only for firefox */
            @-moz-document url-prefix() {#document.skn-trz7 .parentContainer{height:1px}}
            #document.skn-trz7 .ratingRow .ratingText:last-child{width:100%}
            /* For dates fix */
            #document.skn-trz7 .right-box .hidedates{visibility:hidden;position:static!important;display:block;float:left}
            #document.skn-trz7 .left-box .hidedates{display:none} 
            /*#document.skn-trz7 .paragraph.datespara:after{content:'';display:table;clear:both}*/
            #document.skn-trz7 .topsection .left-box {float: left;padding-bottom: 0;padding-left: 0;padding-right: 0;width: 50%;}
            #document.skn-trz7 .topsection .right-box {padding-bottom: 0;padding-left: 0;width: 50%;text-align:left;float: inherit;}
            div#CONTAINER_3 { padding-top: 36px;}
            /* #document.skn-trz7 .resumeTitle:after { content: '';display: block;border-bottom: 4px solid #4267B2;width: 30px;padding-top: 20px;} */
            #document .topsection .headimg{width: 100%; padding-left:0px !important; padding-right:0px !important; margin-top:0px}
            #document .parentContainer .left-side{background-color:#d6d6d6; padding-left:20px !important}
            #document .parentContainer .right-side{padding-right:20px}
            ul.ba {    list-style-type: none;}
            #document.skn-trz7 .main{font-size:16px;color:#002e58;line-height:16px; padding-top:25px;color:#fff}
            #document.skn-trz7 .sectiontitle-li{font-size:16px;color:#FF0000;font-family:arial}
         </style>
         <style type="text/css" id="dynamic" data-time="Tue May 26 2020 17:35:58 GMT+0530 (India Standard Time)">
            #document.skn-trz7,#document.skn-trz7 table{line-height:{{isset($resume->lineSpacing)? $resume->lineSpacing:"18px"}}}
            #document.skn-trz7.pagesize{width:612px}
            #document.skn-trz7.fontsize{font-size:{{isset($resume->fontSize)? $resume->fontSize:"11px"}}}
            #document.skn-trz7.fontface{font-family:{{isset($resume->fontFamily)? $resume->fontFamily:"Century Gothic"}}}
            #document.skn-trz7.vmargins{padding-top:-5px;padding-bottom:10px}
            #document.skn-trz7.hmargins{padding-right:20px;}
            #document.skn-trz7 .section{padding-top:5px;}
            #document.skn-trz7 .left-box .section:after{padding-bottom:10px}
            #document.skn-trz7 .paragraph{margin-top:10px}
            #document.skn-trz7 .singlecolumn,#document.skn-trz7 .maincolumn{word-wrap:break-word}
            #document.skn-trz7 .right-box .singlecolumn,#document.skn-trz7 .right-box .maincolumn{margin-left:0px}
            #document.skn-trz7 table.skills td{padding-top:5px}
            #document.skn-trz7 .jobtitle, #document.skn-trz7 .degree, #document.skn-trz7 .programline{font-size:14px}
            #document.skn-trz7 .name{color:#fff;line-height:60px;text-align:center;padding-right:14px;}
            #document.skn-trz7 .heading{line-height:22px}
            #document.skn-trz7 .sectiontitle{font-size:16px;}
            #document.skn-trz7 .left-box{width:180px; padding-left:10px}
            #document.skn-srz1 .sectiontitle{font-size:16px;color:{{isset($resume->color)? $resume->color:"#4267B2"}}}
            #document.skn-trz7 svg{stroke:#002e58}
            #document.skn-trz7 .resumeTitle{font-size:16px;color:{{isset($resume->color)? $resume->color:'#fff'}};line-height:16px}
            #document.skn-trz7 .ratingWrapper{padding-top:4px}
            #document.skn-trz7 .ratingWrapper svg{stroke:#002e58}
            #document.skn-trz7 .headingIcon svg circle,#document.skn-trz7 .ratingWrapper svg .default-fill{fill:#002e58}
            /* Issues fix for builder page */
            #displayResume #document.skn-trz7.document{min-height:792px}
            #document.skn-trz7 .SortableList{margin-bottom:0!important}
            #document.skn-trz7 .SortableList, #document.skn-trz7 > div{min-height:inherit}
            #document.skn-trz7 .left-box .SortableItem:first-child >.wrapper>.section{padding-top:0!important}
            #document.skn-trz7 > div:not(.topsection), #document.skn-trz7 > div:not(.parentContainer){min-height:auto}
            /* Phase 2: Issues fix for builder page */
            #document.skn-trz7 .parentContainer .left-box > .SortableItem,
            #document.skn-trz7 .parentContainer .right-box > .SortableItem{padding-top:20px}
            #document.skn-trz7 .parentContainer .left-box > .SortableItem:first-child,
            #document.skn-trz7 .parentContainer .right-box > .SortableItem:first-child{padding-top:0}
            /*Hover border style*/
            #document.skn-trz7.active .wrapper-bg{left:-62px !important;right:-62px !important}
            #document.skn-trz7.active .acrs-bdr{left:-60px !important}
            #document.skn-trz7.active .acr-edit,#document.skn-trz7.active .acr-delete{left:-59px !important}
            #document.skn-trz7.active .acr-move{right:-59px !important}
            #document .topsection .headimg{width: 100%;height:174px;padding-left:0px !important; padding-right:0px !important;}
            #document .parentContainer .left-side{background-color:#fff; padding-left:20px !important;padding-right:12px}
            #document .parentContainer .right-side{padding-right:20px}
            ul.ba {    list-style-type: none;}
            #document.skn-trz7 .main{font-size:16px;line-height:16px; padding-top:0;}
            #document.skn-trz7 .sectiontitle-li{font-size:16px;color:#4267B2}
            .row.about-container .resume-preview.thumb-preview.resume-animation #document.vmargins{width:620px!important;padding-right: 20px;}
            .row.about-container .resume-preview.thumb-preview.resume-animation #document .topright{width: 392px!important;}
            .row.about-container .resume-preview.thumb-preview.resume-animation #document .topleft{width: 219px!important;}
            .row.about-container .resume-preview.thumb-preview.resume-animation #document .parentContainer .right-side {width:387px!important;}
            .row.about-container .resume-preview.thumb-preview.resume-animation #document .topsection{width: 611px!important;}
            .rename-section{
               display:none;
            }
         </style>
      </div>
      <!---------header---------------->
      <!---div id="document" class="document fontsize fontface  pagesize skn-trz7 TRZ7  ZTY" style="min-height: 102px !important;">
         </div-->
      <!---------header---------------->
      <div id="document" class="document fontsize fontface vmargins  pagesize skn-trz7 TRZ7  ZTY" style="width:100%;font-family:{{isset($resume->fontFamily)? $resume->fontFamily:'Century Gothic'}};font-size:{{isset($resume->fontSize)? $resume->fontSize:'11px'}};">
         <div id="CONTAINER_PARENT_-1" class="topsection" style="clear:both;min-height:165px;">
            <div class="headimg" style="height:auto;">
               <div id="CONTAINER_4" class="left-box" style="width:20%;">
                  <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                     <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                     <div id="SECTION_NAME464b9aab-d77c-4f2a-994a-4f79aa785951" class="section notdraggable SECTION_NAME firstsection  " data-section-cd="NAME">
                        <div class=" doc-item">
                           <div class="">
                              <div class="">
                                 <div id="PARAGRAPH_NAME_f7eda8ec-b653-4afd-af6e-42abfa260097" class="paragraph PARAGRAPH_NAME firstparagraph  ">
                                    <div style="padding-left:15px;margin-top:19px;cursor:pointer;" id="openImageUploader" title="{{Request::segment(1) == 'final-resume'?'Change Image':''}}">
                                       @if(isset($resume->image))
                                       <img src="{{ url('images/resumeImages/') }}/{{ $resume->image }}" / style="height:170px;width:160px;">  
                                       @else
                                       <img src="{{ url('asset_new/img/user/profile.png')}}" style="height:170px;width:160px;"/>  
                                       @endif
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="CONTAINER_3" class="right-box" style="width:80%;padding-left: 18%;">
                  <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                     <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                     <div id="SECTION_NAME464b9aab-d77c-4f2a-994a-4f79aa785951" class="section notdraggable SECTION_NAME firstsection  " data-section-cd="NAME">
                        <div class=" doc-item editcontent " dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                           <div class="">
                              <div class="">
                                 <div id="PARAGRAPH_NAME_f7eda8ec-b653-4afd-af6e-42abfa260097" class="paragraph PARAGRAPH_NAME firstparagraph  ">
                                    <div style="text-align:right">
                                       <div class="name word-break" style="color:{{isset($resume->color)? $resume->color:'#fff'}};text-align:right">
                                          <span class="field" id="FIELD_FNAM">{{ $resume->first_name ?? 'Your'}}</span>
                                          <span class="field word-break" id="FIELD_LNAM">{{ $resume->last_name ?? 'Name'}}</span><br>
                                       </div>
                                       <div class="" style="margin-left: 55px;margin-bottom:15px;text-align:right">
                                          <div class="resumeTitle main" id="FIELD_DCTL" style="color:{{isset($resume->color)? $resume->color:'#fff'}}">{{ $resume->profession ?? 'Computer Programmer' }}</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--div id="CONTAINER_PARENT_0" class="">
            <div id="CONTAINER_0" class="left-box" >
              
               </div>
            <div id="CONTAINER_0" class="right-box" >
               
            </div>
            </div--->
         <div id="CONTAINER" class="parentContainer" style="clear:both;width:100%">
            <div id="CONTAINER_0" class="left-box" >
               
            <div class="sortableInner" style="padding-left: 16px;">
            <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
				  <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                        <div class="heading" >
                           <div class="sectiontitle titlecolor" style="font-size:16px;padding-top:15px;letter-spacing:0;font-weight:bold;line-height:15px;{{isset($pdf_view)?'margin-bottom:0px;':'margin-bottom:5px'}}" id="SECTIONNAME_CNTC">{{!empty($resume->contact_section_title)?$resume->contact_section_title:'CONTACT'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="contactsection" value="{{!empty($resume->contact_section_title)?$resume->contact_section_title:'Contact'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_CNTC_a92b0367-e01a-45b4-8ecb-220a75697aa3" class="paragraph PARAGRAPH_CNTC firstparagraph  ">
                                 <div class="clearfix doc-item">
                                    <div class="address">
                                       <div class="singlecolumn">
									   
                                             <div dependency="HPHN">
                                                         <span class="fa-stack fa-lg sectiontitle-li" style="vertical-align: {{isset($pdf_view)?'top;':'top'}}">
                                                            <!-- <i class="fa fa-circle-o fa-stack-2x"></i>
                                                            <i class="fa fa-phone fa-stack-1x fa-stack-1x"></i> -->
                                                            <img src="{{url('fonts/call2.jpg')}}" style="width:1.5rem;height:1.5rem;border-radius:4px;{{isset($pdf_view)?'margin-top:7px;':''}}" alt="">
                                                            </span>
                                                
                                                            <span class="field" id="FIELD_HPHN">{{ $resume->phone ?? '916-948-7196' }}</span>
                                                </div>
                                             <div dependency="EMAI" class="word-break" style="width: 100%;">
                                                         <span class="fa-stack fa-lg sectiontitle-li" style="vertical-align: top;margin-top: 4px;width: 15%;max-width: 2rem;display: inline-block;">
                                                            <!-- <i class="fa fa-circle-o fa-stack-2x"></i>
                                                            <i class="fa fa-envelope-o fa-stack-1x "></i> -->
                                                            <img src="{{url('fonts/mail2.jpg')}}" style="width:1.5rem;height:1.5rem;border-radius:4px;{{isset($pdf_view)?'margin-top:8px;':''}}" alt="">
                                                            </span>
                                                            <span class="field" id="FIELD_EMAI" style="width: 80%;display: inline-block;padding-left:6px;{{isset($pdf_view)?'padding-left: 6px;margin-top:7px;vertical-align:middle;':''}}">{{ $resume->email ?? 'example@gmail.com' }}</span>
                                                </div>
                                                <div dependency="STRT|CITY|STAT|ZIPC" style="width:100%;">
                                                               <span class="fa-stack fa-lg sectiontitle-li" style="vertical-align: top;margin-top:{{isset($pdf_view)?'-15px':'5px'}};width: 15%;max-width: 2rem;display: inline-block;">
                                                               <!-- <i class="fa fa-circle-o fa-stack-2x"></i>
                                                               <i class="fa fa-map-marker fa-stack-1x"></i> -->
                                                               <img src="{{url('fonts/location2.jpg?v=1')}}" style="width:1.5rem;height:1.5rem;{{isset($pdf_view)?'margin-top:2px;':''}};border-radius:4px;" alt="">
                                                               </span>
                                                               <span style="width: 80%;display: inline-block;padding-left:6px;{{isset($pdf_view)?'padding-left: 6px;margin-top:0px;vertical-align:middle;':''}}">
                                                                        <span class="field" id="FIELD_STRT">{{ $resume->street ?? 'Woodland Terrace'}}</span>
                                                                        <span class="field" id="FIELD_CITY">{{ $resume->city ?? 'Sacramento'}}</span><span dependency="CITY+STAT|ZIPC">,</span>
                                                                        <span class="field" id="FIELD_STAT">{{ $resume->state ?? 'CA' }}</span><span dependency="STAT+ZIPC">, </span>
                                                                        <span class="field" id="FIELD_ZIPC">{{ $resume->zip ?? '95814'}}</span>
                                                               </span>
                                                         </div>


                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
			   
				<div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-BIOD editcontent " dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif" style="margin-top:20px;">
					<div class="heading" style="padding:0px;letter-spacing:0;font-weight:bold;line-height:22px;margin-bottom:10px;padding-left:0px;">
                           <div class="sectiontitle" style="font-size:16px;" id="SECTIONNAME_HILT">{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO DATA'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="biosection" value="{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="rename-section text-rename"></span> <span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
					<div class="biodata" style="padding-left:0px;">	
					
                  <div dependency="MARITALSTATUS">
						 <div><b>Marital Status:</b></div>
						 <div class="field" id="FIELD_MARITALSTATUS">{{ $resume->maritalStatus ?? 'Single' }}</div>
					   </div>  
                  <div dependency="GENDER">
						 <div><b>Gender:</b></div>
						 <div class="field" id="FIELD_GENDER">{{ $resume->gender ?? 'Male' }}</div>
					  </div>
					   <div dependency="DOB">
						 <div><b>Date of Birth:</b></div>
						 <div class="field" id="FIELD_DOB">{{ $resume->dob ?? date('d-m-Y') }}</div>
					  </div>
                 <div dependency="ORIGINSTATE">
						 <div><b>State of Origin:</b></div>
						 <div class="field" id="FIELD_ORIGINSTATE">{{ $resume->originState ?? 'Lagos' }}</div>
					  </div>
					  
					 
					</div>	
					</div>
					 <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" style="padding-top:20px;padding-bottom: 0px;" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif">
                        <div class="heading" style="padding:0px;letter-spacing:0;font-weight:bold;line-height:22px;margin-bottom:10px;padding-left:0px;">
                           <div class="sectiontitle" style="font-size:16px;" id="SECTIONNAME_HILT">@if(isset($resume->skills)) {{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}} <span class="rename-section text-rename text-primary"> RENAME </span>
                           <span class="titleupdate" style="display:none;"><input type="text" value="{{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}}" data-link="skill" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="rename-section text-rename"> </span>@else SKILLS @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteskills')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_HILT_0" class="paragraph PARAGRAPH_HILT firstparagraph placeholder-text " style="margin-top:0">
                                 <div class="doc-item">
                                    <div class="ratingRow" style="position:relative;display:inline-block;word-break:break-word;vertical-align:top;">
                                       <div class="ratingText" id="FIELD_SKC1" style="width:100%;margin-top:5px;padding-top:0;">
                                          <ul>
                                          @if(isset($resume->skills) && $resume->skills)
												         @if($resume->skills->skills != "")
                                                   @php
                                                      $skills = json_decode($resume->skills->skills);
                                                   @endphp
                                                   @if(!empty($skills[0]->skill))
                                                   @foreach($skills as $skill)
                                                      <li style="margin: 0;list-style-type: none;">{{ $skill->skill }}</li>
                                                   @endforeach
                                                   @else
                                                   <li style="margin: 0;list-style-type: none;">Guest services</li>
                                                         <li style="margin: 0;list-style-type: none;">Inventory control procedures</li>
                                                         <li style="margin: 0;list-style-type: none;">Merchandising expertise</li>
                                                   @endif
                                                @endif
                                             @else
                                                         <li style="margin: 0;list-style-type: none;">Guest services</li>
                                                         <li style="margin: 0;list-style-type: none;">Inventory control procedures</li>
                                                         <li style="margin: 0;list-style-type: none;">Merchandising expertise</li>
                                             @endif
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
				   
                  @if( ( !empty($resume->facebook) ) || ( !empty($resume->twitter)) || ( !empty($resume->linkedin) ) || ( !empty($resume->website) ) )
								<div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-SOCL editcontent " dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif" style="">
									 <div class="heading" style="margin-top:20px;padding:0px;letter-spacing:0;font-weight:bold;line-height:22px;margin-bottom:10px;padding-left:0px;">
										   <div class="sectiontitle" style="font-size:16px;" id="SECTIONNAME_SOCL">Social Links<span class="rename-section text-rename"></span> <span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
										</div>
									 <div class="social_links" style="padding-left:0px;padding-bottom:15px;">
										@if( !empty($resume->facebook)  )
										<div><div style="font-weight:bold;display:block;">Facebook</div>
										 <span class="field" >{{ $resume->facebook }}</span>
										 </div>
										@endif
										@if( !empty($resume->twitter)  )
										 <div><div style="font-weight:bold;display:block;">Twitter</div>
										 <span class="field">{{ $resume->twitter}}</span>
										 </div>
										 @endif
										@if( !empty($resume->linkedin)  )
										 <div><div style="font-weight:bold;display:block;">LinkedIn</div>
										 <span class="field">{{ $resume->linkedin }}</span>
										 </div>
										@endif
										@if( !empty($resume->website)  )
										 <div><div style="font-weight:bold;display:block;">Website</div>
										 <span class="field">{{ $resume->website }}</span>
										 </div>
										@endif	 
									</div>
								</div>
							@endif
						
               </div>
            </div>
            <div id="CONTAINER_0" class="right-box">
               <div class="sortableInner">
                  <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-SUMM left-side" >
                     <div class="document-tool sec-tool" id="editIcons" style="right:22px;"></div>
                     <div id="SECTION_SUMM879edb71-bdad-4ac5-a858-3bcc1c38ab71" class="section summary notdraggable SECTION_SUMM  noparagraph" data-section-cd="SUMM">
                        <div class="doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif">
                           <div class="heading">
                              <div class="sectiontitle" id="SECTIONNAME_CNTC" style="">@if(isset($resume->summary)) {{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="aboutme" value="{{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else Profile @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletesummary')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                           </div>
                           <div class="">
                              <div class="">
                                 <div id="PARAGRAPH_SUMM_0" class="paragraph PARAGRAPH_SUMM firstparagraph placeholder-text ">
                                    <div class="doc-item">
                                       <div class="field singlecolumn" id="FIELD_FRFM" style="margin-top:-10px">@if(isset($resume->summary) && $resume->summary)
                                          {!! $resume->summary->summary !!}
                                          @else
                                          Highly organized and meticulous Administrative Assistant with experience in corporate office settings.Adept at preparing and maintaining files, greeting visitors and restocking supplies. Good communicator and planner with strong judgment and critical thinking abilities.											   
                                          @endif
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="edu">
                     <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EDUC" style="margin-left:8px !important";>
                        <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                        <div id="SECTION_EDUCe38830c3-809a-48c9-a15b-57e04eb83e0e" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="EDUC">
                           <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif">
                              <div class="heading">
                                 <div class="sectiontitle" id="SECTIONNAME_EDUC" style="padding-left:10px;">@if(isset($resume->resume_education_detail[0])) {{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="education" value="{{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EDUCATION @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteEducation')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                              </div>
                              <div class="">
                                 @if(isset($resume->resume_education_detail) && $resume->resume_education_detail) 
                                 @foreach($resume->resume_education_detail as $education)
                                 <div class="">
                                    <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text ">
                                       <div class="doc-item" style="padding-left: 12px;">
                                          <span class="jobtitle txtBold" id="FIELD_JTIT"><span class="jobtitle txtBold" id="FIELD_JTIT">{{ $education->degree }} </span>-{{ $education->school_name }}</span>|
                                          <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">{{ date('M, Y', strtotime($education->graduation_start_date)) }}</span>
                                          <span dependency="JSTD+EDDT"> - </span>
                                          <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">{{ $education->current == '1' ? 'Current' : date('M, Y', strtotime($education->graduation_end_date)) }}</span>
                                          </span>
                                          <div class="singlecolumn" style="margin-left:0px">
                                             <div style="">
                                                <div class="paddedline date-content" dependency="JSTD|EDDT">
                                                </div>
                                                <span class="paddedline" dependency="JTIT">
                                                </span>
                                                <span class="jobline" id="FIELD_JDES">
                                                {!! $education->description !!}
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--<div class="doc-item">
                                          <div class="singlecolumn">
                                          <div class="paddedline date-content" style="padding-top:14px">
                                          <span class="jobdates" id="FIELD_GRST" format="%Y-%m">{{ date('M, Y', strtotime($education->graduation_start_date)) }}</span>
                                          <span class="jobdates" id="FIELD_GRED" format="%Y-%m">{{ $education->current == '1' ? 'Current' : date('M, Y', strtotime($education->graduation_end_date)) }}</span>
                                          </div>
                                          <span class="paddedline degreeGap txtBold" dependency="DGRE|STUY" style="margin-left:10px">
                                          <span class="degree" id="FIELD_DGRE">{{ $education->degree }}</span>&nbsp;-&nbsp;<span class="companyname" id="FIELD_SCHO">{{ $education->school_name }}</span><span> - </span>
                                          <span class="joblocation jobcity" id="FIELD_SCIT">{{ $education->school_location }}</span>
                                          <span class="programline" id="FIELD_STUY"></span>
                                          </span>
                                          <span class="field" id="FIELD_FRFM">
                                          {!! $education->description !!}
                                          </span>
                                          </div>
                                          </div>-->
                                    </div>
                                 </div>
                                 @endforeach
                                 @else
                                 <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text ">
                                    <div class="doc-item" style="margin-left:8px">
                                       <div class="singlecolumn">
                                          <div class="paddedline date-content">
                                             <span class="jobdates" id="FIELD_GRST" format="%Y-%m">06/2013 -</span>
                                             <span class="jobdates" id="FIELD_GRED" format="%Y-%m">03/2013</span>
                                          </div>
                                          <span class="paddedline degreeGap txtBold">
                                          <span class="degree" id="FIELD_DGRE">Bachelor of Arts</span>
                                          <span class="programline" id="FIELD_STUY"></span>
                                          </span>
                                          <div class="paddedline txtItl">
                                             <span class="companyname" id="FIELD_SCHO">San Jose State University</span><span dependency="SCHO+SSTA|SCIT"> - </span>
                                             <span class="joblocation jobcity" id="FIELD_SCIT">San Jose State University</span><span dependency="SCIT+SSTA">, </span>
                                             <span class="joblocation jobstate" id="FIELD_SSTA">CA</span>
                                          </div>
                                          <span class="field" id="FIELD_FRFM"></span>
                                       </div>
                                    </div>
                                 </div>
                                 @endif
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                     <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EXPR" style="margin-left:20px !important">
                        <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                        <div id="SECTION_EXPR06fafd67-c5ae-45e8-b4a1-ed0f75d06194" class="section experience SECTION_EXPR  noparagraph multi-para" data-section-cd="EXPR">
                           <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif" style="padding-left: 2px;padding-top: 10px;">
                              <div class="heading">
                                 <div class="sectiontitle" id="SECTIONNAME_EXPR">@if(isset($resume->resume_work_detail[0])) {{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'PROFESSIONAL EXPERIENCE'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="workdetail" value="{{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'PROFESSIONAL EXPERIENCE'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else PROFESSIONAL EXPERIENCE @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('delete-workdetail')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                              </div>
                              <div class="">
                                 <div class="">
                                    @if(isset($resume->resume_work_detail) && $resume->resume_work_detail)
                                    @foreach($resume->resume_work_detail as $workhistory)
                                    <div id="PARAGRAPH_EXPR_0" class="paragraph PARAGRAPH_EXPR firstparagraph placeholder-text ">
                                       <div class="doc-item">
                                          <span class="jobtitle txtBold" id="FIELD_JTIT"><span class="jobtitle txtBold" id="FIELD_JTIT">{{  $workhistory->job_title  }} </span>&nbsp;-&nbsp;{{  $workhistory->employer  }}</span>&nbsp;|&nbsp;
                                          <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">{{ date('M, Y', strtotime($workhistory->start_date)) }}</span>
                                          <span dependency="JSTD+EDDT"> - </span>
                                          <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">{{ $workhistory->is_current == '1' ? 'Current' : date('M, Y', strtotime($workhistory->end_date)) }}</span>
                                          </span>
                                          <div class="singlecolumn" style="margin-left:0px">
                                             <div style="">
                                                <div class="paddedline date-content" dependency="JSTD|EDDT">
                                                </div>
                                                <span class="paddedline" dependency="JTIT">
                                                </span>
                                                <span class="jobline" id="FIELD_JDES">
                                                {!! $workhistory->work_history !!}
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <div id="PARAGRAPH_EXPR_-1" class="paragraph PARAGRAPH_EXPR placeholder-text ">
                                       <div class="doc-item">
                                          <div class="singlecolumn">
                                             <div class="paddedline date-content" dependency="JSTD|EDDT">
                                                <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">06/2013</span><span dependency="JSTD+EDDT"> - </span><span class="jobdates" id="FIELD_EDDT" format="%Y-%m">03/2015</span>
                                             </div>
                                             <span class="paddedline" dependency="JTIT">
                                             <span class="jobtitle txtBold" id="FIELD_JTIT">Sales Associate</span>
                                             </span>
                                             <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT">
                                             <span class="companyname" id="FIELD_COMP">Target</span><span dependency="COMP+JCIT|JSTA">, </span><span class="jobcity" id="FIELD_JCIT">San Francisco</span><span dependency="JCIT+JSTA">, </span><span class="jobstate" id="FIELD_JSTA">CA</span>
                                             </span>
                                             <span class="jobline" id="FIELD_JDES">
                                                <ul>
                                                   <li>Maintained organized, presentable merchandise to drive continuous sales</li>
                                                   <li>Organized racks and shelves to maintain store visual appeal, engage customers and promote merchandise</li>
                                                   <li>Evaluated inventory and delivery needs, optimizing strategies to meet customer demands</li>
                                                   <li>Analyzed and processed returns, assisting customers with finding alternative merchandise to meet needs</li>
                                                </ul>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="PARAGRAPH_EXPR_-2" class="paragraph PARAGRAPH_EXPR placeholder-text ">
                                       <div class="doc-item">
                                          <div class="singlecolumn">
                                             <span class="jobline" id="FIELD_JDES"></span>
                                          </div>
                                       </div>
                                    </div>
                                    @endif
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @if(isset($resume->extraSection) && $resume->extraSection  && $resume->extraSection->isResumeUpload == '0')
                     <div class="sortable-item section-container SortableItem-sibling  data-SEC" style="margin-left:20px">
                        <div id="SECTION_EDUC411a31aa-7167-4080-837f-be30a3388e31" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="SEC">
                           <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif" style="padding-top:20px;">
                              <div class="heading">
                                 <div class="sectiontitle" id="SECTIONNAME_SEC">@if(isset($resume->extraSection->title)) {{$resume->extraSection->title}} <span class="rename-section text-rename text-primary">Rename</span>
                            <span class="titleupdate" style="display:none;"><input type="text" data-link="extrasection" value="{{$resume->extraSection->title}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else  @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletsection')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                              </div>
                              <div class="">
                                 <div class="">
                                    {!! $resume->extraSection->content !!}
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endif
                  
               </div>
            </div>
         </div>
         <!-- <div id="CONTAINER_PARENT_1" class="parentContainer" style="clear:both;width:100%">
            <div id="CONTAINER_1" class="left-box" style="width:30%;">
               <?php $arr = ['create-resume', 'work-history', 'work-detail', 'education-detail', 'skills', 'summary', 'edit-resume', 'edit-summary', 'edit-education', 'edit-section'];
                  $pageUrl = Request::segment(1);
                  ?>
               @if(  !in_array( $pageUrl, $arr ) )
               @if( ( $resume->facebook != '' ) || ( $resume->twitter != '' ) || ( $resume->linkedin != '' ) || ( $resume->website != '' ) )
               <div class="heading">
                  <div class="sectiontitle" id="SECTIONNAME_SOCL">Social Links<span class="rename-section text-rename"> </span></div>
               </div>
               <div class="social_links">
                  @if( $resume->facebook != '' )
                  <div>
                     <div style="font-weight:bold;">Facebook</div>
                     <span class="field" >{{ $resume->facebook }}</span>
                  </div>
                  @endif
                  @if( $resume->twitter != '' )
                  <div>
                     <div style="font-weight:bold;">Twitter</div>
                     <span class="field">{{ $resume->twitter}}</span>
                  </div>
                  @endif
                  @if( $resume->linkedin != '' )
                  <div>
                     <div style="font-weight:bold;">LinkedIn</div>
                     <span class="field">{{ $resume->linkedin }}</span>
                  </div>
                  @endif
                  @if( $resume->website != '' )
                  <div>
                     <div style="font-weight:bold;">Website</div>
                     <span class="field">{{ $resume->website }}</span>
                  </div>
                  @endif	 
               </div>
               @endif
               @endif
            </div>
            <div id="CONTAINER_2" class="right-box" style="width:65%;">
            </div>
         </div> -->
      </div>
   </div>
</div>