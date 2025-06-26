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
            #document.skn-trz9{color:#343434;line-height:16px;font-variant-ligatures:none;/*smin-height:792px;*/word-wrap:break-word}
            #document.skn-trz9 .name{color:#0000;font-weight:bold;padding:0 0 6px 0;text-align:left;position:relative;word-wrap:break-word}
            #document.skn-trz9 .address .singlecolumn{margin-left:0!important}
            #document.skn-trz9 .resumeTitle{color:#f5c814;font-style:arial;font-weight:bold}
            /* Heading */
            #document.skn-trz9 .heading{padding:0 0 5px;letter-spacing:0;font-weight:bold;line-height:15px;margin-bottom:0px}
            #document.skn-trz9 .sectiontitle{color:{{isset($resume->color)? $resume->color:"#f5c814"}};word-wrap:break-word}
			
			
            #document.skn-trz9 .degreeGap{margin-bottom:4px}
            #document.skn-trz9 .locationGap{margin-top:4px}
            #document.skn-trz9 .firstparagraph{margin-top:0!important}
            /* section */
            #document.skn-trz9 .firstsection{padding-top:0!important}
            #document.skn-trz9 .section:empty {display:none}
            #document.skn-trz9 .education .joblocation{}
            /* style for top section container */
            #document.skn-trz9 .topsection > div{padding-bottom:0px}
            /* style for left and right box */
            #document.skn-trz9 .parentContainer{display:table;width:100%;min-height:inherit;table-layout:fixed;border-collapse:collapse}
			
            /*#document.skn-trz9 .left-box */
			
            #document.skn-trz9 .left-box{padding-left:0;padding-right:0px}
            #document.skn-trz9 .left-box{display:inline-block;float:left;letter-spacing:0.2px;width:40%;}
            #document.skn-trz9 .right-box .section:first-child,#document.skn-trz9 .left-box .section:first-child{padding-top:0px!important}
            #document.skn-trz9 .left-box .paddedline.date-content{position:absolute;font-weight:700;margin-left:-130px;padding-top:5px;width:125px;color:#006a46}
			#document.skn-srz1 .left-box .paddedline.date-content{left:260px}
            #document.skn-trz9 .paragraph{position:relative}
            #document.skn-trz9 .summary .singlecolumn{margin-left:15px;color:#fff;padding-right:25px;text-align:justify;}
            #document.skn-trz9 .right-box{display:inline-block;float:right;letter-spacing:0.2px;color:#000;width:34%;}
            #document.skn-trz9 .summary.section{padding-top:0px;margin-left:{{isset($pdf_view)?'15px':'5px'}}}
            #document.skn-trz9 .txtBold{font-weight:bold}
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
			
			#document.skn-trz9 .topsection .left-box {float: left;padding-bottom: 0;padding-left: 0;padding-right: 0;width:61%;}
			#document.skn-trz9 .topsection .right-box {    padding-bottom: 0;padding-left: 0;width: 39%;float: right;text-align: left;}
			div#CONTAINER_3 {padding-bottom:0;padding-left:0;padding-right:0}
			/*#document.skn-trz9 .resumeTitle:after { content: '';display: block;border-bottom: 4px solid #dc3545;width: 30px;padding-top: 20px;}*/
			#document .topsection .headimg{background:red; width: 100%; padding-left:0px !important; padding-right:0px !important; margin-top:30px}
			#document .parentContainer .left-side{background-color:#dc3545; padding-left:20px !important}
			#document .parentContainer .right-side{padding-right:20px}
			ul.ba {    list-style-type: none;}
			#document.skn-trz9 .main{font-size:16px;color:#002e58;line-height:16px; padding-top:25px;padding-left:25px}
			 #document.skn-trz9 .sectiontitle-li{font-size:16px;color:#0000}
         </style>
         <style type="text/css" id="dynamic" data-time="Tue May 26 2020 17:35:58 GMT+0530 (India Standard Time)">
            
			
            #document.skn-trz9.pagesize{width:612px}
			
            #document.skn-trz9.fontface{}
            #document.skn-trz9.vmargins{padding-top:-5px;padding-bottom:0px}
            #document.skn-trz9.hmargins{padding-left:20px;padding-right:20px}
            #document.skn-trz9 .section{padding-top:20px}
            #document.skn-trz9 .left-box .section:after{padding-bottom:10px;}
            #document.skn-trz9 .paragraph{margin-top:10px}
            #document.skn-trz9 .singlecolumn,#document.skn-trz9 .maincolumn{word-wrap:break-word}
            #document.skn-trz9 .right-box .singlecolumn,#document.skn-trz9 .right-box .maincolumn{margin-left:0px}
            #document.skn-trz9 table.skills td{padding-top:5px}
            #document.skn-trz9 .jobtitle, #document.skn-trz9 .degree, #document.skn-trz9 .programline{font-size:14px;/*color:#006a46*/}
			
            #document.skn-trz9 .heading{line-height:22px}
			
			/*#document.skn-trz9 .doc-item:before{content: '';display: block;border-bottom: 4px solid #006a46;width: 30px;padding-top: 20px;}*/
            #document.skn-trz9 .left-box{width:59%}
            #document.skn-trz9 .right-box .paragraph .singlecolumn{margin-left:51px}
            #document.skn-trz9 svg{stroke:#002e58}
            #document.skn-trz9 .resumeTitle{font-size:18px;color:#fff;line-height:16px;margin-left:{{isset($pdf_view)?'15px':'5px'}};margin-bottom: 12px;}
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
			#document .parentContainer .left-side{background-color:; padding-left:20px !important; padding-top:5px}
			#document .parentContainer .right-side{padding-right:20px}
			ul.ba {    list-style-type: none;}
			#document.skn-trz9 .main{font-size:16px;color:#fff;line-height:16px; padding-top:0px;padding-left:15px;}
			 #document.skn-trz9 .sectiontitle-li{font-size:16px;color:#dc3545}
			 #document.skn-trz9 .imagespace{padding-bottom:4px;}
			 #document.skn-trz9.topaddress{width:100%;height:88px;}
			 #document.skn-trz9 .topsection{background-color:#136d54;}
			#document.skn-trz9 .top1{width:100%;height:auto;background-color:#006a46}
			#document.skn-trz9 .shape{width:98%;height:36px;background-color:#fff;margin-top:62px;}
			#document.skn-trz9 .shape2{width:0%;height:30px;background-color:#fff;float:right;margin-top:-5px;}
			#document.skn-trz9 .address{padding-right:20px;color:#fff;padding-top:30px;font-size:13px;font-weight:bold;text-align: center;}
			#document.skn-trz9 .phone{text-align:center;color:#fff;padding-top:30px;font-size:13px;font-weight:bold;}
			#document.skn-trz9 .email{text-align:center;color:#fff;padding-top:30px;font-size:13px;font-weight:bold;}
			
			.row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9.vmargins {width: 612px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 .topright {width: 392px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 .topleft {width: 219px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 .parentContainer .right-side {width: 387px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 .topsection {width: 611px!important;}
			 
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 .shape{height:57px!important;margin-top:0}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 div#openImageUploader img{margin-top:11px!important;}
			 
			 .page-finalize div#openImageUploader img{margin-top:0;}
			
			.row.about-container .resume-preview.thumb-preview.resume-animation #document,  .page-finalize #document.skn-trz9 .topsection .right-box{height:100%!important;}
			.row.about-container .resume-preview.thumb-preview.resume-animation #document,  .page-finalize #document.skn-trz9 .topsection #FIELD_FRFM{margin-top:0px !important}
			.row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9.vmargins {width: 616px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 .topright {width: 392px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 .topleft {width: 219px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 .parentContainer .right-side {width: 387px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9 .topsection {width: 611px!important;}
			 
			 /* .page-finalize #document, .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz9.vmargins{height:100%!important;} */
			 
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.vmargins .left-side div#FIELD_FRFM{margin-top: 0!important;}
			 div#PARAGRAPH_SUMM_0 span {color: #fff !important;}
         .rename-section{
            display:none;
         }
         .scvt{
		      background-color:{{isset($resume->backgroundColor)? $resume->backgroundColor:'#136d54'}};
         }
       </style>
      </div>
	  <!---------header---------------->
	   <!---div id="document" class="document fontsize fontface  pagesize skn-trz9 TRZ7  ZTY" style="min-height: 102px !important;">
	  
		 </div-->
	  <!---------header---------------->
	  
      <div id="document" class="document fontsize fontface vmargins  pagesize skn-trz9 TRZ7  ZTY" style='width:100%;font-size:{{isset($resume->fontSize)? $resume->fontSize:"11px"}};font-family:{{isset($resume->fontFamily)? $resume->fontFamily:"Arial"}};line-height:{{isset($resume->lineSpacing)? $resume->lineSpacing:"18px"}}'>
	  
         <div id="CONTAINER_PARENT_-1" class="topsection" style="min-height: 276px;{{isset($pdf_view)?'height: 280px !important;':''}}background-color:{{isset($resume->backgroundColor)? $resume->backgroundColor:'#136d54'}};margin-bottom:20px;{{isset($pdf_view)?'':'overflow:hidden;'}}">
			<div class="" >
			<div id="CONTAINER_4" class="left-box scvt" style="padding-bottom:10px;padding-right:15px">
               <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_NAME464b9aab-d77c-4f2a-994a-4f79aa785951" class="section 	main SECTION_NAME firstsection  " data-section-cd="NAME">
                     <div class=" doc-item  editcontent " dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                        <div class="">
                           <div class="">
						   <div class="name word-break" style='color:{{isset($resume->color)? $resume->color:"#fff"}};font-size:{{isset($resume->nameSize)? $resume->nameSize:"28px"}};line-height: 40px;margin-top: 64px;margin-left:{{isset($pdf_view)?'15px':'5px'}};text-transform:uppercase;padding: 0 0 6px 0;'>
                                       <span class="field" id="FIELD_FNAM">{{ $resume->first_name ?? 'Your'}}</span>
                                       <span class="field word-break" id="FIELD_LNAM">{{ $resume->last_name ?? 'Name'}}</span>
                                    </div>
                              <div class="resumeTitle "id="FIELD_DCTL" style="text-transform:uppercase;color:{{isset($resume->color)? $resume->color:'#fff'}}">{{ $resume->profession ?? 'Developer' }}</div> 
                           </div>
                        </div>
                     </div>
					 
                  </div>
               </div>
			   <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-SUMM left-side" >
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_SUMM879edb71-bdad-4ac5-a858-3bcc1c38ab71" class="section summary notdraggable SECTION_SUMM  noparagraph " data-section-cd="SUMM">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif">
					
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_SUMM_0" class="paragraph PARAGRAPH_SUMM firstparagraph placeholder-text ">
				
                                 <div class=" doc-item">
								 
                                    <div class="field singlecolumn" id="FIELD_FRFM" style="margin-top:-7px;margin-left:{{isset($pdf_view)?'0px;':'15px;'}}">
									  
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
			  <!-- <div class="shape"></div>-->
			</div> 
			<div id="CONTAINER_3" class="right-box"  style="padding-bottom:5px;height: 276px !important;">
               <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_NAME464b9aab-d77c-4f2a-994a-4f79aa785951" class="section notdraggable SECTION_NAME firstsection  " data-section-cd="NAME">
                     <div class=" doc-item">
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_NAME_f7eda8ec-b653-4afd-af6e-42abfa260097" class="paragraph PARAGRAPH_NAME firstparagraph  ">
                                 <div>
                                    <div id="PARAGRAPH_NAME_f7eda8ec-b653-4afd-af6e-42abfa260097" class="paragraph PARAGRAPH_NAME firstparagraph  ">
								 <div class ="imagespace scvt" style="cursor:pointer;margin-top:64px!important;float: left;" id="openImageUploader" title="Change Image">
									@if(isset($resume->image))
                        <img src="{{ url('images/resumeImages/') }}/{{ $resume->image }}"  style="width:200px;height:188px;float:left;margin-bottom:0px;padding:0 15px;">  
									@else
									<img src="{{ url('asset_new/img/user/profile.png')}}" style="float:left;margin-bottom:0px;padding:0 0 15px 15px;"/>  
									@endif
                                 </div>
								 <!-- <div class="shape2" style="
    
    position: relative;
    margin-top: -18px;
    width: 30% !important;
	margin-right:-46px;
	clear:both
    "></div> -->
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
            <div id="CONTAINER_0" class="left-box" style="margin-top:12px">
			<div  class="sortableInner" >
			 <div data-react-beautiful-dnd-draggable="1" class="section sortable-item section-container SortableItem-sibling  data-EXPR" style="margin-left:20px !important">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_EXPR06fafd67-c5ae-45e8-b4a1-ed0f75d06194" class="section experience SECTION_EXPR  noparagraph multi-para" data-section-cd="EXPR">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif">
                        <div class="heading">
						<span style="    content: '';
    display: block;
    border-bottom: 4px solid #006a46;
    width: 30px;
    margin-top: -15px;"></span>
                           <div class="sectiontitle" id="SECTIONNAME_EXPR" style='padding-top:10px;font-size:16px;color:{{isset($resume->color)? $resume->color:"#006a46"}};border-top:1px solid #006a46'>@if(isset($resume->resume_work_detail[0])) {{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'EXPERIENCE'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="workdetail" value="{{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'EXPERIENCE'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EXPERIENCE @endif 
                              <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('delete-workdetail')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="sortableInner">
						  @if(isset($resume->resume_work_detail) && $resume->resume_work_detail)
							@foreach($resume->resume_work_detail as $workhistory)
                              <div id="PARAGRAPH_EXPR_0" class="paragraph PARAGRAPH_EXPR firstparagraph placeholder-text ">
                                 <div class=" doc-item" style="margin-left:120px">
                                    <!--<span class="fa-stack fa-lg sectiontitle-li">
											  <img src="{{ url('images/shapeImages/dotImage.png')}}">
											</span>-->
									
                                       </span>
									<div class="singlecolumn" style="margin-left:14px;padding-bottom: 5px;">
									 <div class="paddedline date-content" dependency="JSTD|EDDT">
									 <span class="jobtitle txtBold" id="FIELD_JTIT">{{  $workhistory->job_title  }} </span><br>
									 <span class="jobtitle txtBold" id="FIELD_JTIT">{{  $workhistory->employer  }}</span><br>
                                          <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">{{ date('M, Y', strtotime($workhistory->start_date)) }}</span>
										  <span dependency="JSTD+EDDT"> - </span>
										  <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">{{ $workhistory->is_current == '1' ? 'Current' : date('M, Y', strtotime($workhistory->end_date)) }}</span>
                                       </div>
									 <div style="padding-top:5px">
									
                                       
                                       <span class="paddedline" dependency="JTIT">
                                       
                                       </span>
									   
                                       <!-- <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT">
										   <span class="companyname" id="FIELD_COMP"></span>
										  
										   <span class="jobstate" id="FIELD_JSTA">{{  $workhistory->state  }}</span>
										   <span class="jobcity" id="FIELD_JCIT">{{  $workhistory->country  }}</span>
                                       </span> -->
                                       <span class="jobline" id="FIELD_JDES">
                                          {!! $workhistory->work_history !!}
                                       </span>
									   </div>
                                    </div>
                                 </div>
                              </div>
							@endforeach
						  @else
                              <div id="PARAGRAPH_EXPR_-1" class="paragraph PARAGRAPH_EXPR placeholder-text " >
                                 <div class=" doc-item" style="margin-left:120px">
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
                              </div>
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
			
				<div data-react-beautiful-dnd-draggable="1" class="section sortable-item section-container SortableItem-sibling  data-EDUC" style="margin-left:20px !important">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_EDUCe38830c3-809a-48c9-a15b-57e04eb83e0e" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="EDUC">
                     <div class="doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif">
                        <div class="heading">
						<span style="    content: '';
    display: block;
    border-bottom: 4px solid #006a46;
    width: 30px;
    margin-top: -15px;"></span>
                           <div class="sectiontitle" id="SECTIONNAME_EDUC" style='padding-top:10px;font-size:16px;color:{{isset($resume->color)? $resume->color:"#006a46"}};border-top:1px solid #006a46'>@if(isset($resume->resume_education_detail[0])) {{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="education" value="{{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}" >
                              <span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EDUCATION @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteEducation')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a>
                               <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span>
						   </div>
                        </div>
                        <div class="">
                            <div class="">
						  @if(isset($resume->resume_education_detail) && $resume->resume_education_detail) 
							@foreach($resume->resume_education_detail as $education)
							 <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text ">
								<div class=" doc-item">
								   <div class="singlecolumn" style="padding-left:130px;padding-bottom: 5px;">
									  <div class="paddedline date-content">
										 <span class="jobdates" id="FIELD_GRST" format="%Y-%m">{{ date('M, Y', strtotime($education->graduation_start_date)) }} -</span>
										 <span class="jobdates" id="FIELD_GRED" format="%Y-%m">{{ $education->current == '1' ? 'Current' : date('M, Y', strtotime($education->graduation_end_date)) }}</span>
									  </div>
									  <span class="paddedline degreeGap txtBold" dependency="DGRE|STUY" style='padding-top:{{isset($pdf_view)?'7.5px;':'6px;'}}'>
									  <span class="degree" id="FIELD_DGRE">{{ $education->degree }}</span>
									  <span class="programline" id="FIELD_STUY"></span>
									  </span>
									  <div class="paddedline txtItl" >
										 <span class="companyname" id="FIELD_SCHO">{{ $education->school_name }}</span><span> - </span>
										 <span class="joblocation jobcity" id="FIELD_SCIT">{{ $education->school_location }}</span><span> </span>
										 <span class="joblocation jobstate" id="FIELD_SSTA"></span>
									  </div>
									  <span class="field" id="FIELD_FRFM">
									  {!! $education->description !!}
									  </span>
								   </div>
								</div>
							 </div>
							@endforeach
						  @else
							 <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text ">
								<div class=" doc-item"style="margin-left:130px">
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
							 </div>
						  @endif
						  </div>
                        </div>
                     </div>
                  </div>
               </div>
			<!-------------------------------------------------------------------------->            
  
			<!-------------------------------------------------------------------------->
			<!-------------------------------------------------------------------------->
              
         
               </div>
               </div>
			   <div id="CONTAINER_0" class="right-box " style="margin-right:17px;margin-left:15px;margin-top:{{isset($pdf_view)?'1.5px;':'12px;'}}">
			   <div  class="sortableInner" >
			   
                  <div data-react-beautiful-dnd-draggable="1" class="section sortable-item section-container SortableItem-sibling  data-HILT">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" style="padding-bottom:0">
                        <div class="heading">
						<span style="content: '';
    display: block;
    border-bottom: 4px solid #006a46;
    width: 30px;
    margin-top: -15px;"></span>
                           <div class="sectiontitle" id="SECTIONNAME_HILT" style='padding-top:10px;font-size:16px;color:{{isset($resume->color)? $resume->color:"#006a46"}};border-top:1px solid #006a46'>@if(isset($resume->skills)) {{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}} <span class="rename-section text-rename text-primary"> RENAME </span>
                           <span class="titleupdate" style="display:none;"><input type="text" value="{{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}}" data-link="skill" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="rename-section text-rename"> </span>@else SKILLS @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteskills')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
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
               @if(isset($resume->extraSection) && $resume->extraSection  && $resume->extraSection->isResumeUpload == '0')
				  <div class="sortable-item section-container SortableItem-sibling  data-SEC" style="margin-top:{{isset($pdf_view)?'0px;':'20px;'}}">
					 <div id="SECTION_EDUC411a31aa-7167-4080-837f-be30a3388e31" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="SEC">
						<div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif">
						   <div class="heading">
						   <!-- <span style="content: '';display: block;border-bottom: 4px solid #006a46;width: 30px;margin-top: -15px;"></span> -->
							  <div class="sectiontitle" id="SECTIONNAME_SEC" style='font-size:16px;color:{{isset($resume->color)? $resume->color:"#006a46"}};/*border-top:1px solid;*/text-transform: uppercase;'>@if(isset($resume->extraSection->title)) {{$resume->extraSection->title}} <span class="rename-section text-rename text-primary">Rename</span>
                            <span class="titleupdate" style="display:none;"><input type="text" data-link="extrasection" value="{{$resume->extraSection->title}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else  @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletsection')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
						   </div>
						   <div class="">
							  <div class="" style="">
							  {!! $resume->extraSection->content !!}
							  </div>
						   </div>
						</div>
					 </div>
				  </div>
            @endif	
			   <!------------------------------------------------------------------------>
			   <div data-react-beautiful-dnd-draggable="1" class="section sortable-item section-container SortableItem-sibling  data-HILT editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif" style="margin-top:20px">
			   <div class="heading">
			      <span style="content: '';display: block;border-bottom: 4px solid #006a46;width: 30px;margin-top: -15px;"></span>
                           <div class="sectiontitle" id="SECTIONNAME_HILT" style='padding-top:10px;font-size:16px;color:{{isset($resume->color)? $resume->color:"#006a46"}};border-top:1px solid #006a46'>{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO DATA'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="biosection" value="{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
						<div class="biodata">
						   <div dependency="MARITALSTATUS">
							 <div><b>Marital Status</b></div>
							 <div class="field" id="FIELD_MARITALSTATUS">{{ $resume->maritalStatus ?? 'Single' }}</div>
						  </div>
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
						
						</div>	 
					</div>	
            				
						
							@if( ( !empty($resume->facebook) ) || ( !empty($resume->twitter)) || ( !empty($resume->linkedin) ) || ( !empty($resume->website) ) )
							<div class="section doc-item editcontent section-container" dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif" style="">	 
                           <div class="heading" style="margin-top:20px;">
									<span style="content: '';display: block;border-bottom: 4px solid #006a46;width: 30px;margin-top: -15px;"></span>   
                           <div class="sectiontitle" id="SECTIONNAME_SOCL" style='padding-top:10px;font-size:16px;color:{{isset($resume->color)? $resume->color:"#006a46"}};border-top:1px solid #006a46'>SOCIAL LINKS<span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
									</div>
								 <div class="social_links">
									@if( !empty($resume->facebook) )
									<div><div style="font-weight:bold;">Facebook</div>
									 <span class="field" >{{ $resume->facebook }}</span>
									 </div>
									@endif
									@if( !empty($resume->twitter) )
									 <div><div style="font-weight:bold;">Twitter</div>
									 <span class="field">{{ $resume->twitter}}</span>
									 </div>
									 @endif
									@if( !empty($resume->linkedin) )
									 <div><div style="font-weight:bold;">LinkedIn</div>
									 <span class="field">{{ $resume->linkedin }}</span>
									 </div>
									@endif
									@if( !empty($resume->website) )
									 <div><div style="font-weight:bold;">Website</div>
									 <span class="field">{{ $resume->website }}</span>
									 </div>
									@endif	 
								</div>
                     </div>
							@endif
						
			   <!------------------------------------------------------------------------>
			   <!------------------------------------------------------------------------>
            </div>
            </div>
           </div>
			
        
         <div class="topaddress editcontent scvt" dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif" style="height: 88px;clear: both;{{isset($pdf_view)?'':'margin-top:10px;'}}">
		
		      <div class="top-1" style="float:left;width: 28%;height:88px;">
		            <div dependency="HPHN" class="phone">
							<span class="field" id="FIELD_HPHN">{{ $resume->phone ?? '916-948-7196' }}</span>
                  </div>
		      </div>
		      <div class="top-2" style="float:left;width: 35%;height:88px;">
			
		         <div dependency="EMAI" class="word-break email">
						<span class="field" id="FIELD_EMAI">{{ $resume->email ?? 'example@gmail.com' }}</span>
               </div>
		      </div>
		      <div class="top-3" style="float:left;width: 37%;height:88px;">
		            <div dependency="STRT|CITY|STAT|ZIPC" class="address">
							<span class="field" id="FIELD_STRT">{{ $resume->street ?? 'Woodland Terrace'}}</span>
                     <span class="field" id="FIELD_CITY">{{ $resume->city ?? 'Sacramento'}}</span><span dependency="CITY+STAT|ZIPC">,</span>
                     <span class="field" id="FIELD_STAT">{{ $resume->state ?? 'CA' }}</span><span dependency="STAT+ZIPC">, </span>
                     <span class="field" id="FIELD_ZIPC">{{ $resume->zip ?? '95814'}}</span>
						</div>
		      </div>
	      </div>
      </div>
   </div>
</div>