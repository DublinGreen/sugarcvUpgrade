
<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/front/mobileResponsive.css') }}">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<div class="resume-preview thumb-preview resume-animation">
      <div>
         <style type="text/css" id="static">
            /*Font support for MAC*/
            @font-face{font-family:'Century Gothic';font-weight:normal;font-style:normal;src:local('Century Gothic'),url('/blobcontent/zty/fonts/CenturyGothic.ttf') format('truetype')}
            @font-face{font-family:'Century Gothic';font-weight:bold;font-style:normal;src:local('Century Gothic Bold'),url('/blobcontent/zty/fonts/CenturyGothicBold.ttf') format('truetype')}
            @font-face{font-family:'Century Gothic';font-weight:bold;font-style:italic;src:local('Century Gothic Bold Italic'),url('/blobcontent/zty/fonts/CenturyGothicBoldItalic.ttf') format('truetype')}
            @font-face{font-family:'Century Gothic';font-weight:normal;font-style:italic;src:local('Century Gothic Italic'),url('/blobcontent/zty/fonts/CenturyGothicItalic.ttf') format('truetype')}
            html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:transparent}
            body{text-align:left;font-feature-settings:"liga" 0;-moz-font-feature-settings:"liga" off}
			 #document{}
            #document.skn-trz2 ol,#document.skn-trz2 ul{list-style:none}
            #document.skn-trz2 table{border-collapse:collapse;border-spacing:0;font-size:inherit;color:inherit;width:100%}
            /*START content disc style for LI*/
            #document.skn-trz2 ul,#document.skn-trz2 li{margin:0;padding:0;list-style-type:disc}
            #document.skn-trz2 ul li{margin:0 0 0 14px;padding:0}
            @-moz-document url-prefix() {#document.skn-trz2 ul li{margin:0 0 0 12px;padding:0 0 0 3px}}
            /*END content disc style for LI*/
            /*table style*/
            #document.skn-trz2 table.skills,.table_wrapper{width:100%;margin-top:0;word-wrap:break-word}
            #document.skn-trz2 table.skills th,table.skills td{width:20%;text-align:center}
            #document.skn-trz2 table.skills .skillname,#document.skn-trz2 table.skills .skillrating{text-align:left;width:35%}
            #document.skn-trz2 table.skills .skillrating{width:20%}
            #document.skn-trz2 table.skills .skillyears,#document.skn-trz2 table.skills .skilllast{width:19%}
            #document.skn-trz2 table.skills .pad1{width:5%}
            #document.skn-trz2 .skills .pad2,#document.skn-trz2 table.skills .pad3{width:1%}
            /*document*/
            #document.skn-trz2{box-sizing:border-box;color:#343434;font-variant-ligatures:none;line-height:16px;height:100%;position:relative;word-wrap:break-word}
            #document.skn-trz2 .topbg{background:#003d73;box-sizing:border-box;color:#fff;font-size:14px;margin-left:0;margin-top:-22px;padding:30px 0 20px 22px;position:relative;text-align:left;vertical-align:bottom;width:100%}
            #document.skn-trz2 .topbgborder{bottom:-10px;height:14px;left:23px;position:absolute;width:26px}
            #document.skn-trz2 .name{color:{{isset($resume->color)? $resume->color:"#003d73"}};font-weight:700;padding:60px 20px 0px;text-align:left;word-wrap:break-word}
            #document.skn-trz2 .address .singlecolumn{margin-left:0!important;}
            #document.skn-trz2 .heading{#d5d6d6;font-weight:700;letter-spacing:0;line-height:15px;padding:0 0 3px}
            #document.skn-trz2 .sectiontitle{color:{{isset($resume->color)? $resume->color:"#000"}};word-wrap:break-word}
            #document.skn-trz2 .degreeGap{margin-bottom:4px}
            #document.skn-trz2 .locationGap{margin-top:4px}
            #document.skn-trz2 .firstsection,#document.skn-trz2 .SECTION_CNTC{padding-top:0!important}
            #document.skn-trz2 .education .joblocation{font-style:italic}
            #document.skn-trz2 .resumeTitles{color:#003d73;padding:7px 20px 15px;}
            /*leftBox and rightBox css*/
            #document.skn-trz2 .left-box{box-sizing:initial;display:inline-block;padding:20px 10px 20px 15px;position:relative}
            #document.skn-trz2 .left-box .sectiontitle{text-align:left}
            /* fixes for grey border */
            #document.skn-trz2 .left-box .section{position:relative;}
            #document.skn-trz2 .right-box{display:inline-block;width:70%;letter-spacing:.2px;padding:20px 20px 20px 18px;vertical-align:top}
            #document.skn-trz2 .right-box .section{padding-left:23px;position:relative}
            #document.skn-trz2 .right-box .section:first-child{padding-top:0}
            #document.skn-trz2 .parentContainer{border-collapse:collapse;display:table;min-height:inherit;table-layout:fixed;width:100%}
            /*topsection css*/
            #document.skn-trz2 .topsection{background-color:{{isset($resume->backgroundColor)? $resume->backgroundColor:"#012060"}}}
            /*#document.skn-trz2 .topsection .right-box:before{background:#003d73;bottom:0;box-sizing:border-box;color:#fff;content:'';font-family:"Century Gothic";padding:30px 24px 31px;position:absolute;right:0;width:50%}
            #document.skn-trz2 .topsection .right-box:after{bottom:49px;color:#003d73;content:'\25C6';font-family:"Century Gothic";font-size:24px;height:20px;position:absolute;right:20px;width:20px}*/
            #document.skn-trz2 .topsection .left-box{float:left;padding-bottom:0;padding-left:0;padding-right:0;width:50%}
            #document.skn-trz2 .topsection .right-box{padding-bottom:0;padding-left:0;padding-top:76px;width:50%}
            #document.skn-trz2 .topsection .right-box .section{border:0;padding-left:0}
            #document.skn-trz2 .parentContainer .right-box .section:first-child:before{background:#fff;content:"";height:10px;left:-3px;position:absolute;top:0;width:5px;z-index:1}
            #document.skn-trz2 .right-box .section .icon-heading,#document.skn-trz2 .right-box .section:first-child .icon-heading{height:25px;left:-8px;position:absolute;top:3px;width:25px;z-index:10}
            /*#document.skn-trz2 .icon1{opacity:.75}*/
            #document.skn-trz2 .right-box .section .icon-heading{top:23px}
            #document.skn-trz2 .right-box .paddedline.date-content{position:absolute;font-weight:700;margin-left:0;width:65px}
            #document.skn-trz2 .paragraph .singlecolumn{position:relative}
            #document.skn-trz2 .section:empty,#document.skn-trz2 .parentContainer .left-box svg{display:none}
            #document.skn-trz2 .right-box .education .paragraph,#document.skn-trz2 .right-box .experience .paragraph,#document.skn-trz2 .right-box .summary .paragraph{margin-left:0}
            #document.skn-trz2 .right-box .summary .singlecolumn{margin-left:0!important}
            #document.skn-trz2 .parentContainer svg.rating{display:inline-block;height:11px;box-sizing:content-box}
            #document.skn-trz2 .rating-wrapper{position:relative;white-space:nowrap}
            #document.skn-trz2 .rating-text{word-wrap:break-word}
            #document.skn-trz2 .rating-text,#document.skn-trz2 .rating-svg{width:50%;display:inline-block;word-wrap:break-word;white-space:normal;vertical-align:top}
            #document.skn-trz2 .rating-svg{text-align:right;line-height:normal}
            #document.skn-trz2 .rating-text:last-child {width: 100%;}
            /*common css*/
            #document.skn-trz2 .txtBold{font-weight:bold}
            #document.skn-trz2 .txtItl{}
            #document.skn-trz2 .paddedline{display:block}
            #document.skn-trz2 .pt5{padding-top:5px}
            #document.skn-trz2 .word-break{word-wrap:break-word}
            /* Issues fix for builder page */
            #displayResume #document.skn-trz2.document{min-height:792px}
            /* finalize page Timeline */
            #document.skn-trz2 .parentContainer .left-box:after, #document.skn-trz2 .parentContainer .right-box:after {content:' ';display:block;height:80px;width:100%}
            #document.skn-trz2 .parentContainer .right-box > .sortable-item .section .icon-heading{top:3px}
            #document.skn-trz2 .parentContainer .right-box > .sortable-item:first-child .section .icon-heading{top:3px}
            #document.skn-trz2 .parentContainer .left-box > .sortable-item:first-child .section, #document.skn-trz2 .parentContainer .right-box > .sortable-item:first-child .section{padding-top:0}
            #document.skn-trz2 .parentContainer .right-box > .sortable-item .section:first-child:before{background:none}
            #document.skn-trz2 .parentContainer .right-box > .sortable-item:first-child .section:before{height:20px;top:-3px;background:#fff}
            /* #document.skn-trz2 > div:not(.topsection), #document.skn-trz2 > div:not(.parentContainer){min-height:auto} */
            #document.skn-trz2 .rating .default-fill{fill:#003d73}
            #document.skn-trz2 .sortable-item .rating-wrapper{display:block}
            /*#document.skn-trz2 .sortable-item .rating-wrapper > div{display:flex;position:relative;white-space:nowrap}*/
            /* Only for firefox */
            @-moz-document url-prefix() {#document.skn-trz2 .parentContainer{height:1px}}


         </style>
         <style type="text/css" id="dynamic" data-time="Thu May 21 2020 12:54:28 GMT+0530 (India Standard Time)">
            #document.skn-trz2,#document.skn-trz2 table{line-height:{{isset($resume->lineSpacing)? $resume->lineSpacing:"18px"}}}
            #document.skn-trz2.pagesize{width:612px}
            #document.skn-trz2.fontface{font-family:{{isset($resume->fontFamily)? $resume->fontFamily:"Arial, Helvetica, sans-serif"}}}
            #document.skn-trz2.fontsize{font-size:{{isset($resume->fontSize)? $resume->fontSize:"11px"}}}
            #document.skn-trz2 .section{padding-top:20px}
            #document.skn-trz2 .firstparagraph{margin-top:0!important}
            #document.skn-trz2 .paragraph{margin-top:20px}
            #document.skn-trz2 .singlecolumn,#document.skn-trz2 .maincolumn{word-wrap:break-word}
            #document.skn-trz2 .right-box .singlecolumn,#document.skn-trz2 .right-box .maincolumn{margin-left:0px}
            #document.skn-trz2 table.skills td{padding-top:10px}
            #document.skn-trz2 .jobtitle,#document.skn-trz2 .degree,#document.skn-trz2 .programline{font-size:14px}
			#document.skn-trz2 .name{color:{{isset($resume->color)? $resume->color:"#ffc000"}};font-size:{{isset($resume->nameSize)? $resume->nameSize:"35px"}};line-height:40px}
            #document.skn-trz2 .heading{line-height:22px}
            #document.skn-trz2 .left-box .heading{line-height:22px}
            #document.skn-trz2 .sectiontitle{font-size:16px;text-transform:uppercase; color:{{isset($resume->color)? $resume->color:"#000"}}}
            #document.skn-trz2 .right-box .section .icon1,#document.skn-trz2 .right-box .section .icon2{fill:#003d73}
            #document.skn-trz2 .topbg{background-color:#003d73}
            #document.skn-trz2 .topbgborder svg polyline{fill:#003d73}
            #document.skn-trz2 .left-box{width:153px}
            #document.skn-trz2 .right-box .paragraph .singlecolumn{margin-left:0px}
            #document.skn-trz2 .right-box .paddedline.date-content{left:-103px}
            /* #document.skn-trz2 .topsection .left-box:before,#document.skn-trz2 .topsection .right-box:before{background-color:#003d73}
            #document.skn-trz2 .topsection .left-box:after,#document.skn-trz2 .topsection .right-box:after{color:#003d73} */
            #document.skn-trz2 .rating-wrapper{margin-top:10px}
            /* #document.skn-trz2 .rating-wrapper *{font-size:11px} */
            #document.skn-trz2 .resumeTitles{color:#bebebe;font-size:17px}
            #document.skn-trz2 .parentContainer svg.rating{padding-top:6px}
            /*fixes for finalize page*/
            #document.skn-trz2 .parentContainer .left-box > .sortable-item .section, #document.skn-trz2 .parentContainer .right-box > .sortable-item .section{padding-top:20px}
            #document.skn-trz2 .parentContainer .right-box > .sortable-item:first-child .section:before{background:#fff;content:"";height:10px;left:-3px;position:absolute;top:0;width:5px;z-index:1}
            #document.skn-trz2.active svg.rating{height:11px}
            #document.skn-trz2 .topsection .left-box > .sortable-item{background:none}
            #document.skn-trz2 .rating .default-fill{fill:#003d73}
            #document.skn-trz2 .right-box .doc-item .icon-heading{left:-32px}
            /*Hover border style*/
            #document.skn-trz2.active .wrapper-bg{left:-62px !important;right:-62px !important}
            #document.skn-trz2.active .acrs-bdr{left:-60px !important}
            #document.skn-trz2.active .acr-edit,#document.skn-trz2.active .acr-delete{left:-59px !important}
            #document.skn-trz2.active .acr-move{right:-59px !important}

			/*div#PARAGRAPH_CNTC_5d28fc42-f722-428f-a376-479a41346642 {color: #ffc000;float: right;text-align: right;}*/
			/*#document.skn-trz2 .right-box#CONTAINER_1 {padding-bottom: 10%;padding-top: 105px;}*/
	   .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz2.vmargins {width: 612px!important;}
       .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz2 .topright {width: 393px!important;}
       .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz2 .topleft {width: 219px!important;}
       .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz2 .parentContainer .right-side {width: 387px!important;}
       .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz2 .topsection {width: 612px!important;}
	   .resume-thumbnail .resume-preview #document {padding-right: 25px;}
	   .biodata .singlecolumn > div b {font-size: 13px !important;}
	   .paragraph.PARAGRAPH_EXPR.firstparagraph.placeholder-text {margin-bottom: 20px;}
	   .paragraph.datespara.PARAGRAPH_EDUC.firstparagraph.placeholder-text {margin-bottom: 20px;}
	   @media only screen and (min-width: 1150px) and (max-width: 1299px) {
		.enable-preview .resume-preview.thumb-preview.resume-animation {width: 48%!important;}
		.enable-preview .disable-preview {top: 17%!important;right: 31.5%!important;}
	   }
         </style>
		 <style>
		   @media only screen and (max-width: 360px) {
			div#CONTAINER_1 {padding-right: 60px !important;}
			div#CONTAINER_3{padding: 20px 67px 20px 18px!important;}
		   }
       [data-react-beautiful-dnd-drag-handle="1"] {
                  cursor: -webkit-grab;
                  cursor: grab;
              }
              .rename-section{
                  display: none;
              }
              #FIELD_JDES br:first-child,#FIELD_FRFM br:first-child{
            display:none ;
         }
         @if (Request::is('final-resume/*'))
         .topsection.editcontent:hover{
            background-color: #D8D8D8 !important;
            -webkit-transform: scale(1.05);
         }
         
         @endif

         


		 </style>
      </div>
      <div id="document" class="document fontsize fontface vmargins hmargins pagesize skn-trz2 TRZ2  ZTY " style="clear:both;width:100%; height:auto; ">
         <div id="CONTAINER_PARENT_0" class="topsection editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif" style="width:100%;height:{{isset($pdf_view)?'18%':'16%'}};overflow:hidden;padding-bottom:15px;">
            <div id="CONTAINER_0" class="left-box" style="float:left;width:48%;">
               <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
                  <div id="SECTION_NAME4cdc3d5a-2f2e-423a-8d44-a29ad3d98372" class="section notdraggable SECTION_NAME firstsection  " data-section-cd="NAME" style="border-right:none">
                     <div class=" doc-item">
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_NAME_30df97fd-1385-4d98-9319-6ebe01086fa2" class="paragraph PARAGRAPH_NAME firstparagraph">
                                 <div>
                                    <div class="name word-break">
									  <span class="field" id="FIELD_FNAM">{{ $resume->first_name or 'Your'}}</span>
									  <span class="field word-break" id="FIELD_LNAM">{{ $resume->last_name or 'Name'}}</span>
                                    </div>
                                    <div class="resumeTitles" id="FIELD_DCTL">{{ $resume->profession or '' }}</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="CONTAINER_1" class="right-box" style="width:48%;{{isset($pdf)?'text-align:right;':''}}padding-left: {{isset($pdf)?'20%':'130px'}};font-size:14px;padding-right: 0px;margin-left: {{isset($pdf_view)?'50px':'0'}};">
               <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-SUMM">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
                  <div id="SECTION_SUMM85d52afb-ab3f-49ec-84ff-979efc74bb07" class="section summary notdraggable SECTION_SUMM  noparagraph " data-section-cd="SUMM">
                  <div class=" doc-item">
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_CNTC_5d28fc42-f722-428f-a376-479a41346642" class="paragraph PARAGRAPH_CNTC firstparagraph  " style="color:{{isset($resume->color)? $resume->color:'#ffc000'}};float: right;text-align: right;{{isset($pdf_view)?'padding-top: 15px;':''}} margin-right: {{isset($pdf)?'-50px':'1px'}};">
                                 <div class="clearfix doc-item">
                                    <div class="scvt1 address">
                                       <div class="singlecolumn">
                                          <div dependency="HPHN">
                                             <span class="field" id="FIELD_HPHN">{{ $resume->phone or '916-948-7196' }}</span>
                                          </div>
                                          <div dependency="EMAI" class="word-break">
                                             <span class="field" id="FIELD_EMAI">{{ $resume->email or 'example@gmail.com' }}</span>
                                          </div>
                                          <div dependency="STRT|CITY|STAT|ZIPC">
											<div class="field" id="FIELD_STRT">{{ $resume->street or 'Woodland Terrace'}}</div>
											<span class="field" id="FIELD_CITY">{{ $resume->city or 'Sacramento'}}</span><span>,</span>
											<span class="field" id="FIELD_STAT">{{ $resume->state or 'CA' }}</span><span >, </span>
											<span class="field" id="FIELD_ZIPC">{{ $resume->zip or '95814'}}</span>
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
         <div id="CONTAINER_PARENT_1" class="parentContainer" style="clear:both; min-height: auto; width:100%; border-collapse: collapse; display:table; table-layout: fixed; ">
            <div id="CONTAINER_2" class="left-box sortableInner" style="float:left;width: 31%;box-sizing: initial;display: inline-block;padding: 20px 10px 20px 15px;padding-top: 0;margin-top: 20px;border-right: 2px solid #d5d6d6;vertical-align: top;">
               <div data-position="0" class="sortable-item section-container SortableItem-sibling  data-CNTC">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
                  <div id="SECTION_CNTCb3b52e10-5c42-4892-9a67-4f6d6edc1887" class="section SECTION_CNTC notdraggable   " data-section-cd="CNTC" style="">
                  <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif">
                        <div class="heading">
                          <div class="sectiontitle" id="SECTIONNAME_CNTC">@if(isset($resume->resume_education_detail[0])) {{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="education" value="{{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EDUCATION @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteEducation')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
						  <div class="">
						  @if(isset($resume->resume_education_detail[0]) && $resume->resume_education_detail)
							@foreach($resume->resume_education_detail as $education)

							 <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text ">
								<div class="clearfix doc-item">
								   <div class="singlecolumn" style="">
									  <div class="paddedline date-content" >
									  <b>
									  <span class="degree" id="FIELD_DGRE" style="font-size:15px;">{{ $education->degree }}</span></b><br>
									  <span class="companyname" id="FIELD_SCHO" style="font-size:14px;">{{ $education->school_name }}&nbsp;|&nbsp;{{ $education->school_location }}</span>

									  </div>
<span class="jobdates" id="FIELD_GRST" format="%Y-%m" style="font-size:14px;">{{ date('M,Y', strtotime($education->graduation_start_date)) }} -</span>
										 <span class="jobdates" id="FIELD_GRED" format="%Y-%m" style="font-size:14px;">{{ $education->current == '1' ? 'Current' : date('M,Y', strtotime($education->graduation_end_date)) }}<br></span>
									  <span class="field" id="FIELD_FRFM">
									  {!! $education->description !!}
									  </span>
								   </div>
								</div>
							 </div>
							@endforeach
						  @else
							 <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text ">
								<div class="clearfix doc-item">
								   <div class="singlecolumn">
									  <div class="paddedline date-content">
										 <span class="jobdates" id="FIELD_GRST" format="%Y-%m"></span>
										 <span class="jobdates" id="FIELD_GRED" format="%Y-%m"></span>
									  </div>
									  <span class="paddedline degreeGap txtBold">
									  <span class="degree" id="FIELD_DGRE"style="font-size:15px;" >Bachelor of Arts</span>
									  <span class="programline" id="FIELD_STUY" style="font-size:14px;"></span>
									  </span>
									  <div class="paddedline txtItl">
										 <span class="companyname" id="FIELD_SCHO" style="font-size:14px;">San Jose State University</span><span dependency="SCHO+SSTA|SCIT"> - </span>
										 <span class="joblocation jobcity" id="FIELD_SCIT" style="font-size:14px;">San Jose State University</span><span dependency="SCIT+SSTA">, </span>
										 <span class="joblocation jobstate" id="FIELD_SSTA" style="font-size:14px;">CA</span>
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
			   <div data-position="1"  data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-BIOD">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
                  <div id="SECTION_HILT1d994807-ac0c-4d3a-9c88-9a205c80f50c" class=" SECTION_HILT  noparagraph " data-section-cd="BIOD">
                  <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_BIOD">{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="biosection" value="{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>

                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_BIOD_0" class="paragraph rating-wrapper PARAGRAPH_HILT firstparagraph placeholder-text " >
                                <div class="clearfix doc-item">
                                    <div class="biodata">
                                       <div class="singlecolumn" >
                                          <div dependency="ORIGINSTATE">
											 <div style="font-size:13px;"><b>State of Origin</b></div>
                                             <div class="field" id="FIELD_ORIGINSTATE"style="">{{ $resume->originState or 'Lagos' }}</div>
                                          </div>
										  <div dependency="MARITALSTATUS">
											 <div style= "font-size:13px;"><b>Marital Status</b></div>
                                             <div class="field" id="FIELD_MARITALSTATUS" style="">{{ $resume->maritalStatus or 'Single' }}</div>
                                          </div>
										  <div dependency="DOB">
											 <div style="font-size:13px;"><b>Date of Birth</b></div>
                                             <div class="field" id="FIELD_DOB" style="">{{ $resume->dob or date('d-m-Y') }}</div>
                                          </div>
										  <div dependency="GENDER">
											 <div style="font-size:13px;"><b>Gender</b></div>
                                             <div class="field" id="FIELD_GENDER" style="">{{ $resume->gender or 'Male' }}</div>
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
               @if( ( !empty($resume->facebook) ) || ( !empty($resume->twitter)) || ( !empty($resume->linkedin) ) || ( !empty($resume->website) ) )
               <div  data-position="3" class=" doc-item section-container  editcontent " dhref="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" >
               <div class="heading" style="margin-top:20px; font-size:14px;">
							   <div class="sectiontitle" id="SECTIONNAME_SOCL">Social Links<span class="rename-section text-rename"></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
							</div>
						 <div class="social_links" style="">
							@if( !empty($resume->facebook) )
							<div><div style="font-size:13px;font-weight:bold;">Facebook</div>
							<a href="//{{ $resume->facebook }}" target="_blank" style="text-decoration:none;color:#000;"><span class="field" >{{ $resume->facebook }}</span></a>
							 </div>
							@endif
							@if( !empty($resume->twitter) )
							 <div><div style="font-weight:bold;font-size:13px;">Twitter</div>
							 <a href="//{{ $resume->twitter }}" target="_blank" style="text-decoration:none;color:#000;"><span class="field" >{{ $resume->twitter }}</span></a>
							 </div>
							 @endif
							@if( !empty($resume->linkedin) )
							 <div><div style="font-weight:bold;font-size:13px;">LinkedIn</div>
                      <a href="//{{ $resume->linkedin }}" target="_blank" style="text-decoration:none;color:#000;"><span class="field" >{{ $resume->linkedin }}</span></a>
							 </div>
							@endif
							@if( !empty($resume->website) )
							 <div><div style="font-weight:bold;font-size:13px;">Website</div>
							 <a href="//{{ $resume->website }}" target="_blank" style="text-decoration:none;color:#000;"><span class="field" >{{ $resume->website }}</span></a>
							 </div>
							@endif
						</div>
               </div>
					@endif
               <div data-position="2"  data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
                  <div id="SECTION_HILT1d994807-ac0c-4d3a-9c88-9a205c80f50c" class="section SECTION_HILT  noparagraph " data-section-cd="HILT" >
                  <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" >
                        <div class="heading">
                          <div class="sectiontitle" id="SECTIONNAME_HILT">@if(isset($resume->skills)) {{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}} <span class="rename-section text-rename text-primary"> RENAME </span>
                           <span class="titleupdate" style="display:none;"><input type="text" value="{{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}}" data-link="skill" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="rename-section text-rename"> </span>@else SKILLS @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteskills')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_HILT_0" class="paragraph rating-wrapper PARAGRAPH_HILT firstparagraph placeholder-text " >
                                 <div class="clearfix doc-item">
                                    <div class="rating-text">
                                       <span class="paddedline" id="FIELD_SKC1">
                                          <ul>
                                            @if(isset($resume->skills) && $resume->skills)
												@if($resume->skills->skills != "")
													@php
														$skills = json_decode($resume->skills->skills);
													@endphp
													@if(!empty($skills[0]->skill))
													@foreach($skills as $skill)
														<li style="">{{ $skill->skill }}</li>
													@endforeach
                                       @else
                                       <li style="">Guest services</li>
                                             <li style="">Inventory control procedures</li>
                                             <li style="">Merchandising expertise</li>
                                       @endif
												@endif
										   @else
                                             <li style="">Guest services</li>
                                             <li style="">Inventory control procedures</li>
                                             <li style="">Merchandising expertise</li>
											@endif
                                          </ul>
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

            <div id="CONTAINER_3" class="right-box" style="float:right; display: inline-block;width: 64%;letter-spacing:.2px;padding: 20px 15px 20px 17px;vertical-align: top; ">
			<div class="sortableInner">
               <div class="sortable-item section-container SortableItem-sibling  data-EXPR">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
                  <div id="SECTION_EXPR06a2ffd9-47f6-44ca-8fd7-950e4ec11a6f" class="section experience SECTION_EXPR  noparagraph multi-para" data-section-cd="EXPR" style="padding-top:0px !important">
                  <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif">
                        <div class="heading" style="margin-bottom:0px">
                          <div class="sectiontitle" id="SECTIONNAME_EXPR">@if(isset($resume->summary)) {{!empty($resume->summary->section_title)?$resume->summary->section_title : 'ABOUT ME'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                                                    <span class="titleupdate" style="display:none;"><input type="text" data-link="aboutme" value="{{!empty($resume->summary->section_title)?$resume->summary->section_title : 'ABOUT ME'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else ABOUT ME @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletesummary')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
								<div id="PARAGRAPH_SUMM_0" class="paragraph PARAGRAPH_SUMM firstparagraph placeholder-text" >
									<div class="clearfix doc-item">
									   <div class="field" id="FIELD_FRFM">
									   @if(isset($resume->summary) && $resume->summary)
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
               <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EXPR">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
                  <div id="SECTION_EXPR06a2ffd9-47f6-44ca-8fd7-950e4ec11a6f" class="section experience SECTION_EXPR  noparagraph multi-para" data-section-cd="EXPR">
                  <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif">
                        <div class="heading">
                          <div class="sectiontitle" id="SECTIONNAME_EXPR">@if(isset($resume->resume_work_detail[0])) {{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'PROFESSIONAL EXPERIENCE'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="workdetail" value="{{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'PROFESSIONAL EXPERIENCE'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else PROFESSIONAL EXPERIENCE @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('delete-workdetail')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="sner">
						  @if(isset($resume->resume_work_detail[0]) && $resume->resume_work_detail)
							@foreach($resume->resume_work_detail as $workhistory)
                              <div id="PARAGRAPH_EXPR_0" class="paragraph PARAGRAPH_EXPR firstparagraph placeholder-text " style="margin-left:0; ">
                                 <div class="clearfix doc-item">
                                    <div class="singlecolumn">

                                       <span class="paddedline" dependency="JTIT"style="font-size:15px;">
									    <span class="jobtitle txtBold" id="FIELD_JTIT">{{  $workhistory->employer  }}&nbsp;|&nbsp;{{  $workhistory->job_title  }}</span>
                                       </span>
                                       <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT"style="font-size:14px;">
										   <span class="companyname" id="FIELD_COMP"></span>

										   <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">{{ date('M,Y', strtotime($workhistory->start_date)) }}</span> <span dependency="JSTD+EDDT"> - </span>
										  <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">{{ $workhistory->is_current == '1' ? 'Current' : date('M,Y', strtotime($workhistory->end_date)) }}</span>
                                       </span>
                                       <span class="jobline" id="FIELD_JDES"style="">
                                          {!! $workhistory->work_history !!}
                                       </span>
                                    </div>
                                 </div>
                              </div>
							@endforeach
						  @else
                              <div id="PARAGRAPH_EXPR_-1" class="paragraph PARAGRAPH_EXPR placeholder-text ">
                                 <div class="clearfix doc-item">
                                    <div class="singlecolumn">
                                       <div class="paddedline date-content" dependency="JSTD|EDDT">
                                          <span class="jobdates" id="FIELD_JSTD" format="%Y-%m"></span><span dependency="JSTD+EDDT"></span><span class="jobdates" id="FIELD_EDDT" format="%Y-%m"></span>
                                       </div>
                                       <span class="paddedline" dependency="JTIT">
                                       <span class="jobtitle txtBold" id="FIELD_JTIT" style="font-size:15px;">Sales Associate</span>
                                       </span>
                                       <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT" style="font-size:15px;">
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
                                 <div class="clearfix doc-item">
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


			  @if(isset($resume->extraSection) && $resume->extraSection && $resume->extraSection->isResumeUpload == '0')<!--$resume->extraSection->isResumeUpload == '0'-->
			  <div class="sortable-item section-container SortableItem-sibling  data-SEC">
				 <div id="SECTION_EDUC411a31aa-7167-4080-837f-be30a3388e31" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="SEC" style=" margin-left:0;">
             <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif">
					   <div class="heading" >
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
      </div>
   </div>
