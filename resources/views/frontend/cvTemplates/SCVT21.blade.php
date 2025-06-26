<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/front/mobileResponsive.css') }}">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<div class="resume-preview thumb-preview resume-animation">
   <div class="">
      <div>
            @php 
               $img=url('/images/shapeImages/header_background_scvt21.jpg'); 

            @endphp

         <style type="text/css" id="static">
            #backgroundInactive{
               display:none
            }
            
            /*Font support for MAC*/
            @font-face{font-family:'Century Gothic';font-weight:normal;font-style:normal;src:local('Century Gothic'),url('/blobcontent/zty/fonts/CenturyGothic.ttf') format('truetype')}
            @font-face{font-family:'Century Gothic';font-weight:bold;font-style:normal;src:local('Century Gothic Bold'),url('/blobcontent/zty/fonts/CenturyGothicBold.ttf') format('truetype')}
            @font-face{font-family:'Century Gothic';font-weight:bold;font-style:italic;src:local('Century Gothic Bold Italic'),url('/blobcontent/zty/fonts/CenturyGothicBoldItalic.ttf') format('truetype')}
            @font-face{font-family:'Century Gothic';font-weight:normal;font-style:italic;src:local('Century Gothic Italic'),url('/blobcontent/zty/fonts/CenturyGothicItalic.ttf') format('truetype')}
            html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:transparent}
            body{line-height:1;text-align:left;font-feature-settings:"liga" 0;-moz-font-feature-settings:"liga" off}
            #document.skn-trz9 ol,#document.skn-trz9 ul{list-style:none}
            #document.skn-trz9 table{border-collapse:collapse;border-spacing:0;font-size:inherit;color:inherit;width:100%}
            /*START content disc style for LI*/
            #document.skn-trz9 ul,#document.skn-trz9 li{margin:0;padding:0;list-style-type:disc}
            #document.skn-trz9 ul li{margin:0 0 0 16px;padding:0}
            @-moz-document url-prefix() {#document.skn-trz9 ul li{margin:0 0 0 12px;padding:0 0 0 3px}}
            /*END content disc style for LI*/
            #document.skn-trz9 table.skills,.table_wrapper{width:100%;margin-top:0;word-wrap:break-word}
            #document.skn-trz9 table.skills th,table.skills td{width:20%;text-align:center}
            #document.skn-trz9 table.skills .skillname,#document.skn-trz9 table.skills .skillrating{text-align:left;width:35%}
            #document.skn-trz9 table.skills .skillrating{width:20%}
            #document.skn-trz9 table.skills .skillyears,#document.skn-trz9 table.skills .skilllast{width:19%}
            #document.skn-trz9 table.skills .pad1{width:5%}
            #document.skn-trz9 .skills .pad2,#document.skn-trz9 table.skills .pad3{width:1%}
            /* document */
            #document.skn-trz9{color:#343434;line-height:16px;font-variant-ligatures:none;min-height:792px;box-sizing:border-box;word-wrap:break-word}
            #document.skn-trz9 .name{color:#0000;font-weight:bold;padding:0 0 6px 0;text-align:center;position:relative;word-wrap:break-word}
            #document.skn-trz9 .address .singlecolumn{margin-left:0!important}
            #document.skn-trz9 .resumeTitle{color:#f5c814;font-style:arial;font-weight:bold}
            /* Heading */
            #document.skn-trz9 .heading{padding:0 0 3px;letter-spacing:0;font-weight:bold;line-height:15px;margin-bottom:10px}
            #document.skn-trz9 .sectiontitle{color:{{isset($resume->color)? $resume->color:"#f5c814"}};word-wrap:break-word;text-transform: uppercase;}
            #document.skn-trz9 .degreeGap{margin-bottom:4px}
            #document.skn-trz9 .locationGap{margin-top:4px}
            #document.skn-trz9 .firstparagraph{margin-top:0!important}
            /* section */
            #document.skn-trz9 .firstsection{padding-top:0!important}
            #document.skn-trz9 .section:empty {display:none}
            #document.skn-trz9 .education .joblocation{font-style:italic}
            /* style for top section container */
            #document.skn-trz9 .topsection > div{padding-bottom:0px}
            /* style for left and right box */
            #document.skn-trz9 .parentContainer{display:table;width:100%;min-height:inherit;table-layout:fixed;border-collapse:collapse}

            /*#document.skn-trz9 .left-box,#document.skn-trz9 .right-box{padding-left:15PX}*/

			#document.skn-trz9 .right-box{margin-left:15px;}

            #document.skn-trz9 .left-box{padding-left:0;padding-right:0px}
            #document.skn-trz9 .left-box{box-sizing:initial;display:inline-block;float:left;letter-spacing:0.2px}
            #document.skn-trz9 .right-box .section:first-child,#document.skn-trz9 .left-box .section:first-child{padding-top:0px!important}
            #document.skn-trz9 .left-box .paddedline.date-content{position:absolute;font-weight:700;margin-left:-141px;padding-top:0px;width:135px;color:#043927;font-size:14px;}
			#document.skn-srz1 .left-box .paddedline.date-content{left:260px}
            #document.skn-trz9 .paragraph{position:relative}
            #document.skn-trz9 .summary .singlecolumn{color:#043927;padding-bottom:7px;}
            #document.skn-trz9 .right-box{display:inline-block;float:right;letter-spacing:0.2px;color:#000;width:30%;}
            #document.skn-trz9 .summary.section{padding-top:15px}
            #document.skn-trz9 .txtBold{}
            #document.skn-trz9 .txtItl{}
            #document.skn-trz9 .paddedline{display:block}
            #document.skn-trz9 .mt5{margin-top:5px;}
            #document.skn-trz9 .word-break{word-wrap:break-word}
            /*Rating*/
            #document.skn-trz9 .ratingWrapper svg{height:10px;stroke:#002e58}
            #document.skn-trz9 .ratingWrapper .noLnht{line-height:0}
            #document.skn-trz9 .headingIcon svg circle,#document.skn-trz9 .ratingWrapper svg .default-fill{fill:#002e58}
            #document.skn-trz9 .ratingRow{position:relative;white-space:nowrap}
            #document.skn-trz9 .ratingRow .ratingText,#document.skn-trz9 .ratingRow .ratingWrapper{width:50%;display:inline-block;word-break:break-word;white-space:normal;vertical-align:top}
            #document.skn-trz9 .ratingRow .ratingText+.ratingWrapper{text-align:right}
            #document.skn-trz9 .SortableItem .ratingRow .ratingText+.ratingWrapper{margin-top:5px;padding-top:0}
            #document.skn-trz9 .SortableItem .ratingWrapper span{top:0;line-height:inherit}
            /* Only for firefox */
            @-moz-document url-prefix() {#document.skn-trz9 .parentContainer{height:1px}}
            #document.skn-trz9 .ratingRow .ratingText:last-child{width:100%}
            /* For dates fix */
            #document.skn-trz9 .right-box .hidedates{visibility:hidden;position:static!important;display:block;float:left}
            #document.skn-trz9 .left-box .hidedates{display:none}
         /*   #document.skn-trz9 .paragraph.datespara:after{content:'';display:table;clear:both} */
			#document.skn-trz9 .topsection .left-box {float: left;display: inline-block;width: 34%;}
			#document.skn-trz9 .topsection .right-box {padding-bottom: 0;padding-left: 0;width: 62%;text-align:left;float:right;margin-left:0;}
			div#CONTAINER_3 {padding-bottom:0;padding-left:0;padding-right:0}
			/*#document.skn-trz9 .resumeTitle:after { content: '';display: block;border-bottom: 4px solid #dc3545;width: 30px;padding-top: 20px;}*/
			#document .topsection .headimg{background:red; width: 100%; padding-left:0px !important; padding-right:0px !important; margin-top:30px}
			#document .parentContainer .left-side{background-color:#dc3545; padding-left:20px !important}
			#document .parentContainer .right-side{padding-right:20px}
			ul.ba {    list-style-type: none;}
			#document.skn-trz9 .main{font-size:16px;color:#002e58;line-height:16px; padding-top:25px;padding-left:30px}
			 #document.skn-trz9 .sectiontitle-li{font-size:16px;color:#0000}
         </style>
         <style type="text/css" id="dynamic" data-time="Tue May 26 2020 17:35:58 GMT+0530 (India Standard Time)">


            #document.skn-trz9.pagesize{width:612px}

            #document.skn-trz9.vmargins{padding-top:-5px;padding-bottom:10px}
            #document.skn-trz9.hmargins{padding-left:20px;padding-right:20px}
            #document.skn-trz9 .section{padding-top:12px}
            #document.skn-trz9 .left-box .section:after{padding-bottom:10px}
            #document.skn-trz9 .paragraph{margin-top:10px}
            #document.skn-trz9 .singlecolumn,#document.skn-trz9 .maincolumn{word-wrap:break-word}
            #document.skn-trz9 .right-box .singlecolumn,#document.skn-trz9 .right-box .maincolumn{margin-left:0px}
            #document.skn-trz9 table.skills td{padding-top:5px}
            #document.skn-trz9 .jobtitle, #document.skn-trz9 .degree, #document.skn-trz9 .programline{font-size:14px;color:#043927;}

            #document.skn-trz9 .heading{line-height:22px}

			/*#document.skn-trz9 .doc-item:before{content: '';display: block;border-bottom: 4px solid #006a46;width: 30px;padding-top: 20px;}*/
            #document.skn-trz9 .left-box{width: 65%;}
            #document.skn-trz9 .right-box .paragraph .singlecolumn{margin-left:51px}
            #document.skn-trz9 svg{stroke:#002e58}
            #document.skn-trz9 .resumeTitle{font-size:16px;color:#043927;line-height:23px;padding-bottom:10px;}
            #document.skn-trz9 .ratingWrapper{padding-top:4px}
            #document.skn-trz9 .ratingWrapper svg{stroke:#002e58}
            #document.skn-trz9 .headingIcon svg circle,#document.skn-trz9 .ratingWrapper svg .default-fill{fill:#002e58}
            /* Issues fix for builder page */
            #displayResume #document.skn-trz9.document{min-height:792px}
            #document.skn-trz9 .SortableList{margin-bottom:0!important}
            #document.skn-trz9 .SortableList, #document.skn-trz9 > div{min-height:inherit}
            #document.skn-trz9 .left-box .SortableItem:first-child >.wrapper>.section{padding-top:0!important}
            #document.skn-trz9 > div:not(.topsection), #document.skn-trz9 > div:not(.parentContainer){min-height:auto}
            /* Phase 2: Issues fix for builder page */
            #document.skn-trz9 .parentContainer .left-box > .SortableItem,
            #document.skn-trz9 .parentContainer .right-box > .SortableItem{padding-top:20px}
            #document.skn-trz9 .parentContainer .left-box > .SortableItem:first-child,
            #document.skn-trz9 .parentContainer .right-box > .SortableItem:first-child{padding-top:0}
            /*Hover border style*/
            #document.skn-trz9.active .wrapper-bg{left:-62px !important;right:-62px !important}
            #document.skn-trz9.active .acrs-bdr{left:-60px !important}
            #document.skn-trz9.active .acr-edit,#document.skn-trz9.active .acr-delete{left:-59px !important}
            #document.skn-trz9.active .acr-move{right:-59px !important}
			#document .topsection .headimg{background:red; width: 100%; padding-left:0px !important; padding-right:0px !important; margin-top:30px}
			#document .parentContainer .left-side{background-color:#fff; padding-left:20px !important; padding-top:5px}
			#document .parentContainer .right-side{padding-right:20px}
			ul.ba {    list-style-type: none;}
			#document.skn-trz9 .main{font-size:16px;color:#fff;line-height:8px; padding-top:0px;padding-left:15px;}
			 #document.skn-trz9 .sectiontitle-li{font-size:16px;color:#dc3545}
			 #document.skn-trz9 .imagespace{padding-left:none;margin-top:70px;}

			 #document.skn-trz9 .topsection{width:100%;height:315px;background-image:url({{ $img}});background-position: center top;background-repeat: no-repeat;background-size:cover;}
			#document.skn-trz9 .profile{float:right;color:#043927;display: block;/*height: 230px;margin-top:28px;margin-right: -7px;margin-bottom:-20px;background-color:#f3eeceb5;border-radius: 43% 40% 3% 11% */}
			#document.skn-trz9 .profile .heading{padding-left:15px;font-size:15px;}

			.row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9.vmargins {width: 616px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 .topright {width: 392px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 .topleft {width: 219px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 .parentContainer .right-side {width: 387px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 .topsection {width: 611px!important;}

			 .row.about-container .resume-preview.thumb-preview.resume-animation #document .topsection .singlecolumn , .page-finalize #document .topsection .singlecolumn{padding-top: 0!important;}

			  .page-finalize #document div#CONTAINER_3{margin-top: 2%!important;}

			  .row.about-container .resume-preview.thumb-preview.resume-animation #document .header_second_block div#CONTAINER_3 {margin-top: 6%!important;}

			  .row.about-container .resume-preview.thumb-preview.resume-animation #document .topsection .name , .page-finalize #document .topsection .name{margin-top: 15px!important;padding-left:0!important;}

			  .row.about-container .resume-preview.thumb-preview.resume-animation #document .topsection #FIELD_DCTL, .page-finalize #document .topsection #FIELD_DCTL{padding-left:0!important;}

			  .row.about-container .resume-preview.thumb-preview.resume-animation #document .topsection .header_second_block .right-box, .page-finalize #document .topsection .header_second_block .right-box{width:67%!important;}
			  div#FIELD_FRFM * {font-size: 13px !important;}
			  div#FIELD_SKC1 ul li {list-style: none !important;margin: 0 !important;}
			  .skill_rate_1 { width: 15px;background-color: #f69e47;height: 4px;display: block;}
			  .skill_rate_2 { width: 30px;background-color: #f69e47;height: 4px;display: block;}
			  .skill_rate_3 { width: 45px;background-color: #f69e47;height: 4px;display: block;}
			  .skill_rate_4 { width: 60px;background-color: #f69e47;height: 4px;display: block;}
			  .skill_rate_5 { width: 75px;background-color: #f69e47;height: 4px;display: block;}
           .rename-section{
              display:none;
           }
         </style>
      </div>


      <div id="document" class="document fontsize fontface vmargins  pagesize skn-trz9 TRZ7  ZTY" style='width:100%;font-family:{{isset($resume->fontFamily)? $resume->fontFamily:"Arial"}};font-size:{{isset($resume->fontSize)? $resume->fontSize:"11px"}};line-height:{{isset($resume->lineSpacing)? $resume->lineSpacing:"18px"}}'>

         <div id="CONTAINER_PARENT_-1" class="topsection" style="{{isset($pdf_view)?'':'overflow: hidden;height: auto;'}}">
			<div class="" style="">
			<div id="CONTAINER_4" class="left-box" style="">
               <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_NAME464b9aab-d77c-4f2a-994a-4f79aa785951" class="section 	main SECTION_NAME firstsection  " data-section-cd="NAME">
                     <div class=" doc-item editcontent" dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                        <div class="">
                           <div class="">
						   <div class="name word-break" style='color:{{isset($resume->color)? $resume->color:"#013220"}};font-size:{{isset($resume->nameSize)? $resume->nameSize:"20px"}};line-height:40px;margin-top:3%;margin-left:{{isset($pdf_view)?'5%':'3%'}};padding-left:0px;font-weight:bold;text-align:left;'><br style="line-height: 10px;">
                                       <span class="field" id="FIELD_FNAM">{{ $resume->first_name ?? 'Your'}}</span>
                                       <span class="field word-break" id="FIELD_LNAM">{{ $resume->last_name ?? 'Name'}}</span>
                                    </div>
                              <div class="resumeTitle "id="FIELD_DCTL" style="margin-left:{{isset($pdf_view)?'5%':'3%'}} !important;">{{ !empty($resume->profession)?strtoupper($resume->profession):'PROFESSION' }}</div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>

			</div>
			<div id="CONTAINER_3 " class="right-box editcontent" dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
               <div class="contact">
			   <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT" style="padding-left:0px">
                  <div class="document-tool sec-tool" id="editIcons" style="right:22px;"></div>
                  <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" class="section SECTION_HILT  noparagraph " data-section-cd="HILT" style="padding-left: 40px;">
				  <div class=" doc-item ">

                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_CNTC_a92b0367-e01a-45b4-8ecb-220a75697aa3" class="paragraph PARAGRAPH_CNTC firstparagraph  ">
                                 <div class="doc-item "  >
                                    <div class="address">
                                       <div class="singlecolumn" style="padding-top: {{isset($pdf_view)?'2%':'4%'}};padding-left: 18px;margin-left: 30px;">
									   <div dependency="STRT|CITY|STAT|ZIPC" style="width:48%;float: left;">
											<span style="font-size:12px;font-weight:bold;color:#043927;font-size:16px;">Phone</span><br>
											<span class="field" id="FIELD_HPHN">{{ $resume->phone ?? '916-948-7196' }}</span><br><br>
									   		<span style="font-size:12px;font-weight:bold;color:#043927;font-size:16px;">Address</span><br>
											<span class="field" id="FIELD_STRT">{{ $resume->street ?? 'Woodland Terrace'}}</span>
                                             <span class="field" id="FIELD_CITY">{{ $resume->city ?? 'Sacramento'}}</span><span dependency="CITY+STAT|ZIPC">,</span>
                                             <span class="field" id="FIELD_STAT">{{ $resume->state ?? 'CA' }}</span>
                                             <span class="field" id="FIELD_ZIPC">{{ $resume->zip ?? '95814'}}</span>
                                          
                                          </div>
										  <div dependency="HPHN" style="width:49%;float: right;">
											  <div dependency="EMAI" class="word-break">
												 <span style="font-size:12px;font-weight:bold;color:#043927;font-size:16px;">E-mail</span><br>
												 <span class="field" id="FIELD_EMAI">{{ $resume->email ?? 'example@gmail.com' }}</span>
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
			   </div>

			</div>
			</div>
			<div class="header_second_block">
                <div id="CONTAINER_3" class="right-box" style="width:62%;clear:both;margin-top:16%;padding-bottom:10px;padding-right:15px;">
                <div class="profile" style="clear:both">
					 <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-SUMM left-side">
                  <div class="document-tool sec-tool" id="editIcons" style="right:22px;"></div>
                  <div id="SECTION_SUMM879edb71-bdad-4ac5-a858-3bcc1c38ab71" class="section summary notdraggable SECTION_SUMM  noparagraph " data-section-cd="SUMM">
                     <div class=" doc-item editcontent" dhref="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif" style="padding-left:5px">
					 <div class="heading" id='profile'>
                           <div class="sectiontitle1 sectiontitle" id="SECTIONNAME_CNTC" style='padding-left:20px;font-size:16px;color:{{isset($resume->color)? $resume->color:"#043927"}};'>@if(isset($resume->summary)) {{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="aboutme" value="{{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else Profile @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletesummary')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> </span><!--<span style="border-bottom: 4px solid white;float:right;margin-top: 4px;width: 35px;height: 18px;"></span>--></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_SUMM_0" class="paragraph PARAGRAPH_SUMM firstparagraph placeholder-text ">

                                 <div class=" doc-item">

                                    <div class="field singlecolumn1" id="FIELD_FRFM" style="padding-left:35px;padding-right:35px;margin-top: -15px;">@if(isset($resume->summary) && $resume->summary)
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
			  </div>
			  </div>
              </div>

			<div class="" style="background:#333333"></div>
		 </div>
		 <div id="CONTAINER" class="parentContainer" style="width:100%;clear:both;">
            <div id="CONTAINER_0" class="left-box" style="padding-top:20px;padding-right:10px; @if(isset($pdf_view)) margin-top:20px; @endif">

			<div class="sortableInner">
              <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EXPR" style="margin-left:20px !important">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_EXPR06fafd67-c5ae-45e8-b4a1-ed0f75d06194" class="section experience SECTION_EXPR  noparagraph multi-para" data-section-cd="EXPR">
                     <div class=" doc-item   editcontent " dhref="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif">
                        <div class="heading" style="margin-bottom:0;">
                           <div class="sectiontitle" id="SECTIONNAME_EXPR" style='font-size:16px;color:{{isset($resume->color)? $resume->color:"#043927"}};'>@if(isset($resume->resume_work_detail[0])) {{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'EXPERIENCE'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="workdetail" value="{{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'EXPERIENCE'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EXPERIENCE @endif
                              <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('delete-workdetail')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span> </span><span style="float:right;padding-right:24px;"><img src="{{ url('templates_images/scvt21/dotsscvt21.jpg')}}" style="height:10px"></span>
                              <!-- <hr style="color: #87ceeb;border-top: 1.5px solid #87ceeb;width: 75%;margin-left: 106px;margin-top: -7px;"/> -->
                           </div>
                        </div>
                        <div class="">
                           <div class="sortableInner">
						  @if(isset($resume->resume_work_detail) && $resume->resume_work_detail)
							@foreach($resume->resume_work_detail as $workhistory)
                              <div id="PARAGRAPH_EXPR_0" class="paragraph PARAGRAPH_EXPR firstparagraph placeholder-text ">
                                 <div class=" doc-item" style="margin-left:130px;padding-top:0px">


									<div class="singlecolumn" style="margin-left:14px">
									<div class="paddedline date-content" dependency="JSTD|EDDT">
									{{  $workhistory->job_title  }}
                                       </div>
									<div style="padding-left:0px">

                                       <span class="paddedline" dependency="JTIT">
                                       <span class="jobtitle txtBold" id="FIELD_JTIT"> </span>
                                       </span>

                                       <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT">
										   <span class="companyname" id="FIELD_COMP"></span>
										   <span class="jobtitle txtBold" id="FIELD_JTIT">{{  $workhistory->employer  }} | {{ date('M,Y', strtotime($workhistory->start_date)) }} - {{ $workhistory->is_current == '1' ? 'Current' : date('M,Y', strtotime($workhistory->end_date)) }}</span>
										   <!-- <span class="jobstate" id="FIELD_JSTA">{{  $workhistory->state  }}</span>
										   <span class="jobcity" id="FIELD_JCIT">{{  $workhistory->country  }}</span> -->
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
                             <!-- <div id="PARAGRAPH_EXPR_-1" class="paragraph PARAGRAPH_EXPR placeholder-text " >
                                 <div class=" doc-item" style="margin-left:130px">
                                    <div class="singlecolumn">
                                       <div class="paddedline date-content" dependency="JSTD|EDDT" >
                                          <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">06/2013</span><span dependency="JSTD+EDDT"> - </span><span class="jobdates" id="FIELD_EDDT" format="%Y-%m">03/2015</span>
                                       </div>
                                       <span class="paddedline" dependency="JTIT" >
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
                              </div>-->
                              <div id="PARAGRAPH_EXPR_-2" class="paragraph PARAGRAPH_EXPR placeholder-text ">
                                 <div class=" doc-item">
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


				<div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EDUC" style="margin-left:20px !important">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_EDUCe38830c3-809a-48c9-a15b-57e04eb83e0e" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="EDUC">
                     <div class="doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif">
                        <div class="heading" style="padding-top:15px;margin-bottom:0;">
                           <div class="sectiontitle" id="SECTIONNAME_EDUC" style='font-size:16px;color:{{isset($resume->color)? $resume->color:"#043927"}};'>@if(isset($resume->resume_education_detail[0])) {{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="education" value="{{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}" >
                              <span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EDUCATION @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteEducation')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a>
                               <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></span><span style="float:right;padding-right:24px;"><img src="{{ url('templates_images/scvt21/dotsscvt21.jpg')}}" style="height:10px"></span>
                               <!-- <hr style="color: #87ceeb;border-top: 1.5px solid #87ceeb;width: 77%;margin-left: 97px;margin-top: -7px;"/> -->
                              </div>
                        </div>
                        <div class="">
                            <div class="">
						  @if(isset($resume->resume_education_detail) && $resume->resume_education_detail)
							@foreach($resume->resume_education_detail as $education)
						<div id="PARAGRAPH_EXPR_0" class="paragraph PARAGRAPH_EXPR firstparagraph placeholder-text ">
                                 <div class=" doc-item" style="margin-left:130px;padding-top:0px">


									<div class="singlecolumn" style="margin-left:14px">
									<div class="paddedline date-content" dependency="JSTD|EDDT">
									{{ $education->degree }}
                                       </div>
									<div style="padding-left:0px">

                                       <span class="paddedline" dependency="JTIT">
                                       <span class="jobtitle txtBold" id="FIELD_JTIT"> </span>
                                       </span>

                                       <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT">
										   <span class="companyname" id="FIELD_COMP"></span>
										   <span class="jobtitle txtBold" id="FIELD_JTIT">{{ $education->school_name }} | {{ date('M,Y', strtotime($education->graduation_start_date)) }} - {{ $education->current == '1' ? 'Current' : date('M,Y', strtotime($education->graduation_end_date)) }}</span>
                                       </span>
                                       <span class="jobline" id="FIELD_JDES">
                                          {!! $education->description !!}
                                       </span>
									   </div>
                                    </div>
                                 </div>
                              </div>

							@endforeach
						  @else
							 <!--<div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text ">
								<div class=" doc-item"style="margin-left:120px">
								   <div class="singlecolumn">
									  <div class="paddedline date-content">
										 <span class="jobdates" id="FIELD_GRST" format="%Y-%m">06/2013 -</span>
										 <span class="jobdates" id="FIELD_GRED" format="%Y-%m">03/2017</span>
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
							 </div>-->
						  @endif
						  </div>
                        </div>
                     </div>
                  </div>
               </div>



               </div>
               </div>
			   <div id="CONTAINER_0" class="right-box " style="padding-top:10px;padding-right:10px;">

			   <div class="sortableInner">
                  <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
                     <div class=" doc-item editcontent" style="padding-top:4px" dhref="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_HILT" style='font-size:16px;color:{{isset($resume->color)? $resume->color:"#043927"}};'>@if(isset($resume->skills)) {{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}} <span class="rename-section text-rename text-primary"> RENAME </span>
                           <span class="titleupdate" style="display:none;"><input type="text" value="{{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}}" data-link="skill" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="rename-section text-rename"> </span>@else SKILLS @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteskills')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></span><!--<span style="border-bottom: 4px solid white;float:right;margin-top: 4px;width: 35px;height: 18px;"></span>--></div>
                        </div>

                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_HILT_0" class="paragraph PARAGRAPH_HILT firstparagraph placeholder-text ">
                                 <div class=" doc-item">
                                    <div class="ratingRow">
                                       <div class="ratingText" id="FIELD_SKC1">
                                          <ul>
                                              @if(isset($resume->skills) && $resume->skills)
												@if($resume->skills->skills != "")
													@php
														$skills = json_decode($resume->skills->skills);
													@endphp
													@foreach($skills as $skill)
														<li>{{ $skill->skill }} <br><span style="background-color: #a2a2a2;width: 75px;height: 4px;display: inline-block;"><span class="skill_rate_{{ $skill->rating }}"></span></span><br></li>
													@endforeach
												@endif
											@else
                                             <li>Guest services</li>
                                             <li>Inventory control procedures</li>
                                             <li>Merchandising expertise</li>
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

			 <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT" style="padding-top:{{isset($pdf_view)?'10px':'15px'}}">
			 <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">  
          <div class="heading" >
                           <div class="sectiontitle" id="SECTIONNAME_HILT" style='font-size:16px;color:{{isset($resume->color)? $resume->color:"#043927"}};'>{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO DATA'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="biosection" value="{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span><!--<span style="border-bottom: 4px solid white;float:right;margin-top: 4px;width: 35px;height: 18px;"></span>--></div>

                        </div>
					<div class="biodata">
						  <div dependency="ORIGINSTATE">
							 <div><b>State of Origin</b></div>
							 <div class="field" id="FIELD_ORIGINSTATE">{{ $resume->originState ?? 'Lagos' }}</div>
						  </div>
						   <div dependency="GENDER">
							 <div><b>Gender</b></div>
							 <div class="field" id="FIELD_GENDER">{{ $resume->gender ?? 'Male' }}</div>
						  </div>

						  <div dependency="DOB">
							 <div><b>Date of Birth</b></div>
							 <div class="field" id="FIELD_DOB">{{ $resume->dob ?? date('d-m-Y') }}</div>
						  </div>
						   <div dependency="MARITALSTATUS">
							 <div><b>Marital Status</b></div>
							 <div class="field" id="FIELD_MARITALSTATUS">{{ $resume->maritalStatus ?? 'Single' }}</div>
						  </div>


						</div>
             </div>
				</div>
             
              <?php $arr = ['create-resume', 'work-history', 'work-detail', 'education-detail', 'skills', 'summary', 'edit-resume', 'edit-summary', 'edit-education', 'edit-section'];
					$pageUrl = Request::segment(1);
					?>
			        {{-- @if(  !in_array( $pageUrl, $arr ) ) --}}
					@if( ( @$resume->facebook != '' ) || ( @$resume->twitter != '' ) || ( @$resume->linkedin != '' ) || ( @$resume->website != '' ) )
               <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT" style="margin-top:{{isset($pdf_view)?'10px':'15px'}};">
               <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
               <div class="heading" style="margin-top:20px;">
							   <div class="sectiontitle" id="SECTIONNAME_SOCL" style='font-size:16px;color:{{isset($resume->color)? $resume->color:"#043927"}};text-transform: uppercase;'>Social Links<span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
							</div>
						 <div class="social_links" >
							@if( $resume->facebook != '' )
							<div><div style="font-weight:bold;">Facebook</div>
							 <span class="field" style="">{{ $resume->facebook }}</span>
							 </div>
							@endif
							@if( $resume->twitter != '' )
							 <div><div style="font-weight:bold;">Twitter</div>
							 <span class="field" style="">{{ $resume->twitter}}</span>
							 </div>
							 @endif
							@if( $resume->linkedin != '' )
							 <div><div style="font-weight:bold;">LinkedIn</div>
							 <span class="field" style="">{{ $resume->linkedin }}</span>
							 </div>
							@endif
							@if( $resume->website != '' )
							 <div><div style="font-weight:bold;">Website</div>
							 <span class="field" style="">{{ $resume->website }}</span>
							 </div>
							@endif	 
						</div>
             </div>
      </div>
					@endif
					{{-- @endif --}}
               @if(isset($resume->extraSection) && $resume->extraSection && $resume->extraSection->isResumeUpload == '0')
				  <div class="sortable-item section-container SortableItem-sibling  data-SEC" style="margin-top:{{isset($pdf_view)?'10px':'15px'}};">
					 <div id="SECTION_EDUC411a31aa-7167-4080-837f-be30a3388e31" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="SEC">
						<div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif">
						   <div class="heading">
							  <div class="sectiontitle" id="SECTIONNAME_SEC" style='font-size:16px;color:{{isset($resume->color)? $resume->color:"#043927"}};text-transform: uppercase;'>@if(isset($resume->extraSection->title)) {{$resume->extraSection->title}} <span class="rename-section text-rename text-primary">Rename</span>
                            <span class="titleupdate" style="display:none;"><input type="text" data-link="extrasection" value="{{$resume->extraSection->title}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else  @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletsection')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span>
							  </div>
						   </div>
						   <div class="">
							  <div class="" style="padding-bottom:20px;">
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


      </div>
   </div>
</div>
