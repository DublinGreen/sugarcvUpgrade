<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/front/mobileResponsive.css') }}?v={{time()}}">
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
			
			@font-face{
				font-family:'Apparatus SIL';
				font-weight:normal;
				font-style:normal;
				src:local('Apparatus SIL'),url('/sugarcv/public/fonts/appsilr.ttf') format('truetype')
			}
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
            #document.skn-trz7{color:#343434;line-height:16px;font-variant-ligatures:none;box-sizing:border-box;word-wrap:break-word}
            #document.skn-trz7 .name{color:#020432;font-weight:bold;padding:0 0 6px 0;text-align:center;position:relative;word-wrap:break-word;text-transform:uppercase;}
            #document.skn-trz7 .address .singlecolumn{margin-left:0!important;color:#fff;}
            #document.skn-trz7 .resumeTitle{color:#002e58;font-style:arial;font-weight:400;font-family: 'Apparatus SIL';letter-spacing: 1px;}
            /* Heading */
            #document.skn-trz7 .heading{padding:0 0 3px;letter-spacing:0;font-weight:bold;line-height:15px;margin-bottom:10px}
            #document.skn-trz7 .sectiontitle{color:{{isset($resume->color)? $resume->color:"#002e58"}};word-wrap:break-word;font-family: 'APPARATUS SIL';letter-spacing: 1px;text-transform:uppercase;}
            #document.skn-trz7 .degreeGap{margin-bottom:4px}
            #document.skn-trz7 .locationGap{margin-top:4px}
            #document.skn-trz7 .firstparagraph{margin-top:0!important}
            /* section */
            #document.skn-trz7 .firstsection{padding-top:0!important}
            #document.skn-trz7 .section:empty {display:none}
            #document.skn-trz7 .education .joblocation{font-style:italic}
            /* style for top section container */
            #document.skn-trz7 .topsections > div{padding-bottom:0px}
            /* style for left and right box */
            #document.skn-trz7 .parentContainer{display:table;width:100%;table-layout:fixed;border-collapse:collapse}
            
			/* #document.skn-trz7 .left-box,#document.skn-trz7 .right-box{padding-left:15px} */
			
            #document.skn-trz7 .left-box{padding-left:0;padding-right:15px}
            #document.skn-trz7 .left-box{box-sizing:initial;display:table-cell;letter-spacing:0.2px}
           /* #document.skn-trz7 .right-box .section:first-child,#document.skn-trz7 .left-box .section:first-child{padding-top:0px!important} */
            #document.skn-trz7 .right-box .paddedline.date-content{position:absolute;font-weight:700;margin-left:130px;width:125px}
            #document.skn-trz7 .paragraph{position:relative}
			
            #document.skn-trz7 .summary .singlecolumn{margin-left:0;text-align:justify;}
            #document.skn-trz7 .right-box{display:table-cell;letter-spacing:0.2px;width:60%;}
            #document.skn-trz7 .summary.section{padding-left:12px}
            #document.skn-trz7 .txtBold{font-weight:bold}
            #document.skn-trz7 .txtItl{font-style:italic}
            #document.skn-trz7 .paddedline{display:block}
            #document.skn-trz7 .mt5{margin-top:5px}
            #document.skn-trz7 .word-break{word-wrap:break-word}
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
            /* #document.skn-trz7 .ratingRow .ratingText:last-child{width:100%} */
            /* For dates fix */
            #document.skn-trz7 .right-box .hidedates{visibility:hidden;position:static!important;display:block;float:left}
            #document.skn-trz7 .left-box .hidedates{display:none} 
          
		   /* #document.skn-trz7 .paragraph.datespara:after{content:'';display:table;clear:both} */
		  
			#document.skn-trz7 .topsections{width:100%;height:auto;background-color:#fff;border:3px solid #00008B:border-bottom:5px solid #fff;margin-bottom:10px;}
			

			#document.skn-trz7 .topsections .left-box {float:left;padding-bottom: 0;padding-left: 10px;margin-left:20px;padding-right: 0;width:28%;background-color:#d3d3d3;height:130px;margin-bottom;10px;}
			#document.skn-trz7 .topsections .middle-box {float: left;padding-bottom:2px;padding-left: 5px;margin-left:20px;padding-right:10px;width:28%;height:130px;text-align:right;background-color:#d3d3d3;	}
			#document.skn-trz7 .topsections .side-box {padding-bottom: 0;padding-left: 0;width:28%;height:130px;margin-left:20px;text-align:left;float:right;}
			div#CONTAINER_3 { padding-top: 36px;}
			/*#document.skn-trz7 .resumeTitle:after { content: '';display: block;border-bottom: 4px solid #000;width: 30px;padding-top: 20px;}*/
			#document .topsections .headimg{background:red; width: 100%; padding-left:0px !important; padding-right:0px !important; margin-top:30px}
			#document .parentContainer .left-side{background-color: padding-left:14px !important}
			#document .parentContainer .right-side{padding-right:20px}
			ul.ba {    list-style-type: none;}
			#document.skn-trz7 .main{font-size:16px;color:#002e58;line-height:16px; padding-top:25px;color:#fff}
			 #document.skn-trz7 .sectiontitle-li{font-size:16px;color:#FFA500;}
         </style>
         <style type="text/css" id="dynamic" data-time="Tue May 26 2020 17:35:58 GMT+0530 (India Standard Time)">
            #document.skn-trz7 .left-box{width:30%;}
            #document.skn-trz7 .right-box .paragraph .singlecolumn{margin-left:}
            #document.skn-trz7 svg{stroke:#002e58}
            #document.skn-trz7 .resumeTitle{font-size:17px;color:{{isset($resume->color)? $resume->color:"#fff"}};text-align:center;width:fit-content;margin:auto;line-height:21px;font-style:arial;font-weight:bold;padding:3px;}
            #document.skn-trz7 .ratingWrapper{padding-top:4px}
            #document.skn-trz7 .ratingWrapper svg{stroke:#002e58}
            #document.skn-trz7 .headingIcon svg circle,#document.skn-trz7 .ratingWrapper svg .default-fill{fill:#002e58}
            /* Issues fix for builder page */
            /* #displayResume #document.skn-trz7.document{min-height:792px} */
            #document.skn-trz7 .SortableList{margin-bottom:0!important}
            /* #document.skn-trz7 .SortableList, #document.skn-trz7 > div{min-height:inherit} */
            /* #document.skn-trz7 .left-box .SortableItem:first-child >.wrapper>.section{padding-top:0!important} */
            /* #document.skn-trz7 > div:not(.topsections), #document.skn-trz7 > div:not(.parentContainer){min-height:auto} */
            /* Phase 2: Issues fix for builder page */
            #document.skn-trz7 .parentContainer .left-box > .SortableItem,
            #document.skn-trz7 .parentContainer .right-box > .SortableItem{padding-top:20px} 
			
            /*#document.skn-trz7 .parentContainer .left-box > .SortableItem:first-child,
            #document.skn-trz7 .parentContainer .right-box > .SortableItem:first-child{padding-top:0} */
			
            /*Hover border style*/
            #document.skn-trz7.active .wrapper-bg{left:-62px !important;right:-62px !important}
            #document.skn-trz7.active .acrs-bdr{left:-60px !important}
            #document.skn-trz7.active .acr-edit,#document.skn-trz7.active .acr-delete{left:-59px !important}
            #document.skn-trz7.active .acr-move{right:-59px !important}
			#document .topsections .headimg{background:red; width: 100%; padding-left:0px !important; padding-right:0px !important; margin-top:30px}
			#document .parentContainer .left-side{ padding-left:20px !important}
			#document .parentContainer .right-side {display:table-cell;float: none;padding-right: 20px;padding: 0px!important;width: 61%;padding-top: 0px!important;}
			ul.ba {    list-style-type: none;}
			#document.skn-trz7 .main{font-size:16px;color:#002e58;line-height:16px; padding-top:25px;color:#fff}
			 #document.skn-trz7 .imagespace{float:right;padding-right:20px;padding-bottom:20px}
			 #document.skn-trz7 .sectiontitle-li{font-size:16px;color:#00008B;}
			 /*#document.skn-trz7 .topsections{content:"";width:100%;height:auto;top:0;left:0;transform:skewX(10deg);}*/
			 #document.skn-trz7 .topsections .inner{background-color:#fff;width:87%;height:130px;margin:auto;z-index:22;position:relative;border-bottom:2px solid #020432;}
			 #document.skn-trz7 .top1{
             height:170px;width:100%;margin-top:5px;position: relative;z-index: 1;
            
            }
			#document.skn-trz7 .shape{
            height:130px;width:6.5%;float:left;transform:skewX({{isset($pdf_view)?'21deg':'15deg'}});margin-left:{{isset($pdf_view)?'25px':'17.10px'}};
           
         }

			#document.skn-trz7 .shape2{
            height:130px;width:6.5%;float:right;margin-top:{{isset($pdf_view)?'-135px':'-131px'}};transform:skewX({{isset($pdf_view)?'-21deg':'-15deg'}});margin-right:{{isset($pdf_view)?'25px':'17.10px'}};
           
         }
		
		
			#document.skn-trz7 .paragraph{margin-top:10px}
            #document.skn-trz7 .singlecolumn,#document.skn-trz7 .maincolumn{word-wrap:break-word}
            #document.skn-trz7 .right-box .singlecolumn,#document.skn-trz7 .right-box .maincolumn{margin-left:0px}
            #document.skn-trz7 table.skills td{padding-top:5px}
            #document.skn-trz7 .jobtitle, #document.skn-trz7 .degree, #document.skn-trz7 .programline{font-size:14px}
			
			
            #document.skn-trz7.pagesize{width:612px}
			
            #document.skn-trz7.vmargins{padding-top:-5px;padding-bottom:0px} 
            #document.skn-trz7.hmargins{} 
            #document.skn-trz7 .section{padding-bottom:20px}  
		
			.row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz7.vmargins {width: 612px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz7 .topright {width: 392px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz7 .topleft {width: 219px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz7 .parentContainer .right-side {    width: 331px!important;padding-right: 8px!important;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.skn-trz7 .topsections {width: 612px!important;
          
         }
			 
			 /* .row.about-container .resume-preview.thumb-preview.resume-animation #document , .page-finalize #document {height: 100%!important;} */
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document .singlecolumn .sectiontitle-li img, .page-finalize #document .singlecolumn .sectiontitle-li img{margin-top: 0!important;}
			 span#FIELD_JDES span {font-size: 12px !important;}
			 span#FIELD_CITY:after {content: ',';}
			 @media only screen and (min-width: 1920px) and (max-width: 2000px){
				.enable-preview .disable-preview {top: 129px!important;right: 35.5%!important;}
			}
         .rename-section{
            display:none;
         }
         .scvt{
		      background-color:{{isset($resume->backgroundColor)? $resume->backgroundColor:'#020432'}};
         }
         
		 </style>
      </div>
	  <!---------header---------------->
	   <!---div id="document" class="document fontsize fontface  pagesize skn-trz7 TRZ7  ZTY" style="min-height: 102px !important;">
	  
		 </div-->
	  <!---------header---------------->
      <div id="document" class="document fontsize fontface vmargins hmargins pagesize skn-trz7 TRZ7  ZTY" style='font-size:{{isset($resume->fontSize)? $resume->fontSize:"11px"}};font-family:{{isset($resume->fontFamily)? $resume->fontFamily:"Arial"}};width:612px;line-height:{{isset($resume->lineSpacing)? $resume->lineSpacing:"18px"}};overflow-x: hidden;width:100%'>
         <!-- <div class="top1"><img src="https://www.sugarcv.com/templates_images/scvt22/scvt22top.jpg" width="100%" height="100%"></div> -->
		 <div class="topsections" style="margin-bottom:20px;z-index: 2 !important;">
		 <!-- <div class="shape scvt"></div> -->
       <img src="{{ url('/templates_images/scvt22/scvt22top.jpg') }}" width="100%" height="170px">
			<div class="inner editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif" style="margin-top:{{isset($pdf_view)?'-135px':'-133px'}};">
				<div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_NAME464b9aab-d77c-4f2a-994a-4f79aa785951" class="section 	main SECTION_NAME firstsection  " data-section-cd="NAME">
                     <div class=" doc-item">
                        <div class="">
                           <div class="">
						   <div class="name word-break" style='color:{{isset($resume->color)? $resume->color:"#020432"}};font-size:{{isset($resume->nameSize)? $resume->nameSize:"40px"}};line-height:45px;padding-top:20px;'>
                                       <span class="field" id="FIELD_FNAM">{{ $resume->first_name or 'Your'}}</span>
                                       <span class="field word-break" id="FIELD_LNAM">{{ $resume->last_name or 'Name'}}</span>
                                    </div>
                              <div class="resumeTitle "><span id="FIELD_DCTL" style="padding:3px 3px 8px 3px;background:#020432;">{{ $resume->profession or 'Developer' }}</span></div> 
                           </div>
                        </div>
                     </div>
					 
                  </div>
               </div>
			</div>
			<!-- <div class="shape2 scvt"></div> -->
		 </div>
        
		  <div id="CONTAINER_PARENT_1" class="parentContainer " style="width: {{isset($pdf_view)?'94%':'95%'}};clear:both;padding-top:20px;{{isset($pdf_view)?'margin-right:2%':'margin-right:10px'}};">
        <div style="width: {{isset($pdf_view)?'4%':'28px'}};display:table-cell;">
               <div style="border-bottom: 2px solid;height: 20px;padding-bottom: 20px;"></div>
            </div>  
        <div id="CONTAINER_1" class="left-box left-side scvt" style="padding-top:5px;padding-left:10px !important;">
			   <div class="sortableInner">
               <!-- <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-CNTC">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_CNTC4b959b3f-7a77-4285-9b17-82823b7d38a8" class="section SECTION_CNTC notdraggable   " data-section-cd="CNTC">
                     <div class=" doc-item">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_CNTC" style='font-size:20px;color:{{isset($resume->color)? $resume->color:"#fd6a02"}};'>CONTACT<span class="rename-section text-rename"> </span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_CNTC_a92b0367-e01a-45b4-8ecb-220a75697aa3" class="paragraph PARAGRAPH_CNTC firstparagraph  ">
                                 <div class=" doc-item">
                                    <div class="address">
                                       <div class="singlecolumn">
										  <div dependency="HPHN">
										  <span class="fa-stack fa-lg sectiontitle-li">
											 <img src="{{ url('images/shapeImages/phone.png')}}" width="27px" style="margin-top: 11px;">
											</span>
											
                                             <span class="field" id="FIELD_HPHN">{{ $resume->phone or '916-948-7196' }}</span>
                                          </div>
										  <div dependency="EMAI" class="word-break">
										  <span class="fa-stack fa-lg sectiontitle-li">
											 <img src="{{ url('images/shapeImages/email.png')}}" width="27px" style="margin-top: 11px;">
											</span>
                                             <span class="field" id="FIELD_EMAI" style="width:100%;padding-right:20px;">{{ $resume->email or 'example@gmail.com' }}</span> 
                                          </div>
										  <div dependency="STRT|CITY|STAT|ZIPC">
									   		<span class="fa-stack fa-lg sectiontitle-li" style="float:left;height: 50px;">
											 <img src="{{ url('images/shapeImages/location.png')}}" width="27px" style="margin-top: 11px;">
											</span>
											<div>
											<span class="field" id="FIELD_STRT">{{ $resume->street or 'Woodland Terrace'}} </span>,
                                             <span class="field" id="FIELD_CITY" style="/*padding-left:30px;position: relative;top: -9px;left: 6px;*/">{{ $resume->city or 'City'}} </span><span dependency="CITY+STAT|ZIPC"></span>
                                             <span class="field" id="FIELD_STAT" style="/*padding-left:30px;position: relative;top: -10px;left: 6px;*/">{{ $resume->state or 'CA' }} , {{ $resume->zip or '95814'}}</span><span dependency="STAT+ZIPC"></span>
                                             <span class="field" id="FIELD_ZIPC" style="/*position: relative;top: -10px;left: 6px;*/"></span>
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
               </div> -->
               <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
				  <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                        <div class="heading" >
                           <div class="sectiontitle titlecolor" style="font-size:16px;color:{{isset($resume->color)? $resume->color:'#fd6a02'}}" id="SECTIONNAME_CNTC">{{!empty($resume->contact_section_title)?$resume->contact_section_title:'CONTACT'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="contactsection" value="{{!empty($resume->contact_section_title)?$resume->contact_section_title:'Contact'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_CNTC_a92b0367-e01a-45b4-8ecb-220a75697aa3" class="paragraph PARAGRAPH_CNTC firstparagraph  ">
                                 <div class="clearfix doc-item">
                                    <div class="address">
                                       <div class="singlecolumn">
									   
                                             <div dependency="HPHN" style="width:100%;">
                                                         <span class="fa-stack fa-lg sectiontitle-li" style="width: 15%;max-width: 2rem;vertical-align: {{isset($pdf_view)?'top;':'top'}}">
                                                            <!-- <i class="fa fa-circle-o fa-stack-2x"></i>
                                                            <i class="fa fa-phone fa-stack-1x fa-stack-1x"></i> -->
                                                            <img src="{{url('images/shapeImages/phone22.jpg')}}" style="width:1.5rem;height:1.5rem;border-top-left-radius: 13px;border-top-right-radius: 13px;border-bottom-left-radius: 13px;border-bottom-right-radius: 13px;;{{isset($pdf_view)?'margin-top:7px;':''}}" alt="">
                                                            </span>
                                                
                                                            <span class="field" id="FIELD_HPHN" style="width: 80%;padding-left:{{isset($pdf_view)?'10px;':'6px'}}">{{ $resume->phone or '916-948-7196' }}</span>
                                                </div>
                                             <div dependency="EMAI" class="word-break" style="width: 100%;">
                                                         <span class="fa-stack fa-lg sectiontitle-li" style="vertical-align: top;margin-top: 4px;width: 15%;max-width: 2rem;display: inline-block;">
                                                            <!-- <i class="fa fa-circle-o fa-stack-2x"></i>
                                                            <i class="fa fa-envelope-o fa-stack-1x "></i> -->
                                                            <img src="{{url('images/shapeImages/mail22.jpg')}}" style="width:1.5rem;height:1.5rem;border-top-left-radius: 13px;border-top-right-radius: 13px;border-bottom-left-radius: 13px;border-bottom-right-radius: 13px;{{isset($pdf_view)?'margin-top:8px;':''}}" alt="">
                                                            </span>
                                                            <span class="field" id="FIELD_EMAI" style="width: 80%;display: inline-block;padding-left:6px;{{isset($pdf_view)?'margin-top:8px;vertical-align:middle;':''}}">{{ $resume->email or 'example@gmail.com' }}</span>
                                                </div>
                                                <div dependency="STRT|CITY|STAT|ZIPC" style="width:100%;">
                                                               <span class="fa-stack fa-lg sectiontitle-li" style="vertical-align: top;margin-top:{{isset($pdf_view)?'0px':'5px'}};width: 15%;max-width: 2rem;display: inline-block;">
                                                               <!-- <i class="fa fa-circle-o fa-stack-2x"></i>
                                                               <i class="fa fa-map-marker fa-stack-1x"></i> -->
                                                               <img src="{{url('images/shapeImages/location22.jpg?v=1')}}" style="width:1.5rem;height:1.5rem;{{isset($pdf_view)?'margin-top:10px;':''}};border-top-left-radius: 13px;border-top-right-radius: 13px;border-bottom-left-radius: 13px;border-bottom-right-radius: 13px;" alt="">
                                                               </span>
                                                               <span style="width: 80%;display: inline-block;padding-left:6px;{{isset($pdf_view)?'margin-top:5px;vertical-align:middle;':''}}">
                                                                        <span class="field" id="FIELD_STRT">{{ $resume->street or 'Woodland Terrace'}}</span>
                                                                        <span class="field" id="FIELD_CITY">{{ $resume->city or 'Sacramento'}}</span><span dependency="CITY+STAT|ZIPC">,</span>
                                                                        <span class="field" id="FIELD_STAT">{{ $resume->state or 'CA' }}</span><span dependency="STAT+ZIPC">, </span>
                                                                        <span class="field" id="FIELD_ZIPC">{{ $resume->zip or '95814'}}</span>
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
               
               <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
					
				  
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" style="color:#fff">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_HILT" style='font-size:16px;color:{{isset($resume->color)? $resume->color:"#fd6a02"}};'>@if(isset($resume->skills)) {{!empty($resume->skills->section_title)?$resume->skills->section_title : 'PROFFESSIONAL SKILLS'}} <span class="rename-section text-rename text-primary"> RENAME </span>
                           <span class="titleupdate" style="display:none;"><input type="text" value="{{!empty($resume->skills->section_title)?$resume->skills->section_title : 'PROFFESSIONAL SKILLS'}}" data-link="skill" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="rename-section text-rename"> </span>@else SKILLS @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteskills')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_HILT_0" class="paragraph PARAGRAPH_HILT firstparagraph placeholder-text ">
                                 <div class=" doc-item">
                                    <div class="ratingRow">
                                       <div class="ratingText" id="FIELD_SKC1" style="width:100%">
                                          <ul>
                                              @if(isset($resume->skills) && $resume->skills)
												@if($resume->skills->skills != "")
													@php
														$skills = json_decode($resume->skills->skills);
													@endphp
													@foreach($skills as $skill)
														<li>{{ $skill->skill }}</li>
													@endforeach
												@endif
											@else
                                             <!--li>Guest services</li>
                                             <li>Inventory control procedures</li>
                                             <li>Merchandising expertise</li-->
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
               <div data-react-beautiful-dnd-draggable="1" class="section sortable-item section-container SortableItem-sibling  data-HILT">
               <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
					<div class="heading ">
                           <div class="sectiontitle" id="SECTIONNAME_HILT" style='font-size:16px;color:{{isset($resume->color)? $resume->color:"#fd6a02"}};'>{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO DATA'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="biosection" value="{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
						<div class="biodata" style="color:white;">
						  <div dependency="DOB">
							 <div><b>Date of Birth</b></div>
							 <div class="field" id="FIELD_DOB">{{ @$resume->dob ? date('d/m/Y', strtotime($resume->dob)) : date('d/m/Y') }}</div>
						  </div>
						   <div dependency="MARITALSTATUS">
							 <div><b>Marital Status</b></div>
							 <div class="field" id="FIELD_MARITALSTATUS">{{ $resume->maritalStatus or 'Single' }}</div>
						  </div>
						  <div dependency="ORIGINSTATE">
							 <div><b>State of Origin</b></div>
							 <div class="field" id="FIELD_ORIGINSTATE">{{ $resume->originState or 'Lagos' }}</div>
						  </div>
						   <div dependency="GENDER">
							 <div><b>Gender</b></div>
							 <div class="field" id="FIELD_GENDER">{{ $resume->gender or 'Male' }}</div>
						  </div>
						
						</div>	
               </div>
			   </div>
			   <?php $arr = ['create-resume', 'work-history', 'work-detail', 'education-detail', 'skills', 'summary', 'edit-resume', 'edit-summary', 'edit-education', 'edit-section'];
					$pageUrl = Request::segment(1);
					?>
			        {{-- @if(  !in_array( $pageUrl, $arr ) ) --}}
					@if( ( @$resume->facebook != '' ) || ( @$resume->twitter != '' ) || ( @$resume->linkedin != '' ) || ( @$resume->website != '' ) )
               <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT">
               <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
               <div class="heading" style="">
							   <div class="sectiontitle" id="SECTIONNAME_SOCL" style='font-size:16px;color:{{isset($resume->color)? $resume->color:"#fd6a02"}};'>Social Links<span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
							</div>
						 <div class="social_links" style="padding-bottom:20px;">
							@if( $resume->facebook != '' )
							<div><div style="font-weight:bold;color:white;">Facebook</div>
							 <span class="field" style="color:white;">{{ $resume->facebook }}</span>
							 </div>
							@endif
							@if( $resume->twitter != '' )
							 <div><div style="font-weight:bold;color:white;">Twitter</div>
							 <span class="field" style="color:white;">{{ $resume->twitter}}</span>
							 </div>
							 @endif
							@if( $resume->linkedin != '' )
							 <div><div style="font-weight:bold;color:white;">LinkedIn</div>
							 <span class="field" style="color:white;">{{ $resume->linkedin }}</span>
							 </div>
							@endif
							@if( $resume->website != '' )
							 <div><div style="font-weight:bold;color:white;">Website</div>
							 <span class="field" style="color:white;">{{ $resume->website }}</span>
							 </div>
							@endif	 
						</div>
             </div>
      </div>
					@endif
					{{-- @endif --}}
		
            </div>
            </div>
            <div id="CONTAINER_2" class="right-side" style="background:#fff;">
			<div class="sortableInner">
			
			<div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-SUMM">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_SUMM879edb71-bdad-4ac5-a858-3bcc1c38ab71" class="section summary notdraggable SECTION_SUMM  noparagraph " data-section-cd="SUMM">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif">
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_SUMM_0" class="paragraph PARAGRAPH_SUMM firstparagraph placeholder-text ">
				
                                 <div class=" doc-item">
								 <div class="heading">
								   <div class="sectiontitle" id="" style='font-size:16px;color:{{isset($resume->color)? $resume->color:"#020432"}};'>@if(isset($resume->summary)) {{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="aboutme" value="{{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else Profile @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletesummary')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
								</div>
                                    <div class="field singlecolumn" id="FIELD_FRFM">@if(isset($resume->summary) && $resume->summary)
										{!! $resume->summary->summary !!}
									   @else
										Highly organized and meticulous Administrative Assistant with experience in corporate office settings.Adept at preparing and maintaining files, greeting visitors and restocking supplies. Good communicator and planner with strong judgment and critical thinking abilities.Assistant with experience in corporate office settings.										   
									   @endif</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EXPR">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_EXPR06fafd67-c5ae-45e8-b4a1-ed0f75d06194" class="section experience SECTION_EXPR  noparagraph multi-para" data-section-cd="EXPR">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif" style="padding-left:12px">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_EXPR" style='font-size:16px;color:{{isset($resume->color)? $resume->color:"#020432"}};'>@if(isset($resume->resume_work_detail[0])) {{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'EXPERIENCE'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="workdetail" value="{{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'EXPERIENCE'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EXPERIENCE @endif 
                              <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('delete-workdetail')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="sortableInner">
						  @if(isset($resume->resume_work_detail) && $resume->resume_work_detail)
							@foreach($resume->resume_work_detail as $workhistory)
                             <div id="PARAGRAPH_EXPR_0" class="paragraph PARAGRAPH_EXPR firstparagraph placeholder-text ">
							 <div style="width:100%;display: inline-block;">
							  <div class="jobtitle txtBold" id="FIELD_JTIT" style="float: none;width: 27%;padding-right:2%;display: inline-block;vertical-align: top;">{{  $workhistory->job_title  }}
							  </div>
							  
							  <div style="width:70%;display: inline-block;vertical-align: top;">
							  
							  <span class="jobtitle" id="FIELD_JTIT" style="">{{  $workhistory->employer  }}&nbsp;|&nbsp;<span class="jobdates" id="FIELD_JSTD" format="%Y-%m">{{ date('M, Y', strtotime($workhistory->start_date)) }}</span> <span dependency="JSTD+EDDT"> - </span>
										  <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">{{ $workhistory->is_current == '1' ? 'Current' : date('M, Y', strtotime($workhistory->end_date)) }}</span></span>
										  <div class="singlecolumn" style="">
									 <div class="paddedline date-content" dependency="JSTD|EDDT"></div>
									 <div style="margin-left:0px;">
                                       <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT">
										   <span class="companyname" id="FIELD_COMP"></span>
										  
										   <!--<span class="jobstate" id="FIELD_JSTA">{{  $workhistory->state  }}</span>
										   <span class="jobcity" id="FIELD_JCIT">{{  $workhistory->country  }}</span>-->
                                       </span>
                                       <span class="jobline" id="FIELD_JDES">
                                          {!! $workhistory->work_history !!}
                                       </span>
									   </div>
                                    </div>
                                 </div>
							  </div>
							  </div>
                                 <div class=" doc-item" style="margin-left:30%">
								 <!--<span class="paddedline" dependency="JTIT" style="margin-left:-118px">
                                      
                                       </span>-->
                                    <!--<span class="fa-stack fa-lg sectiontitle-li">
											  <img src="{{ url('images/shapeImages/dotImage.png')}}">
											</span>-->
									
                                       <!-- </span> -->
									
                              </div>
							@endforeach
						  @else
                              <div id="PARAGRAPH_EXPR_-1" class="paragraph PARAGRAPH_EXPR placeholder-text ">
                                 <div class=" doc-item">
                                    <div class="singlecolumn"  style="margin-left:10px;">
									
									   <span class="paddedline" dependency="JTIT" style="display:inline-block;">
                                       <span class="jobtitle txtBold" id="FIELD_JTIT">Sales Associate</span>
                                       </span>
                                       <div class="paddedline date-content" dependency="JSTD|EDDT" style="display:inline-block;margin-left:20px;">
                                          <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">06/2013</span><span dependency="JSTD+EDDT"> - </span><span class="jobdates" id="FIELD_EDDT" format="%Y-%m">03/2015</span>
                                       </div>
                                       
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
               <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EDUC">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_EDUCe38830c3-809a-48c9-a15b-57e04eb83e0e" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="EDUC">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif" style="padding-left:12px">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_EDUC" style='font-size:16px;color:{{isset($resume->color)? $resume->color:"#020432"}};'>@if(isset($resume->resume_education_detail[0])) {{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="education" value="{{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}" >
                              <span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EDUCATION @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteEducation')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a>
                               <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                            <div class="">
						  @if(isset($resume->resume_education_detail) && $resume->resume_education_detail) 
							@foreach($resume->resume_education_detail as $education)
						<!-- <div id="PARAGRAPH_EXPR_0" class="paragraph PARAGRAPH_EXPR firstparagraph placeholder-text ">
						<div style="width:100%">
							  <div class="jobtitle txtBold" id="FIELD_JTIT" style="float: left;width: 27%;">{{ $education->degree }}
							  </div>
							  
							  <div style="width:70%;margin-left:30%">
							  
							  <span class="jobtitle" id="FIELD_JTIT" style="">{{ $education->school_name }} {{-- $education->school_location --}} | <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">{{ date('M, Y', strtotime($education->graduation_start_date)) }}</span> <span dependency="JSTD+EDDT"> - </span>
										  <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">{{ $education->current == '1' ? 'Current' : date('M, Y', strtotime($education->graduation_end_date)) }}</span></span>
										  
							  </div>
							  </div>
                                 <div class=" doc-item" style="margin-left:30%">
							
									<div class="singlecolumn" style="">
									<div class="paddedline date-content" dependency="JSTD|EDDT"></div>
									 <div style="margin-left:0px;">
                                       <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT">
										   <span class="companyname" id="FIELD_COMP"></span>
										  
										   <!--<span class="jobstate" id="FIELD_JSTA">{{  $workhistory->state  }}</span>
										   <span class="jobcity" id="FIELD_JCIT">{{  $workhistory->country  }}</span>--
                                       </span>
                                       <span class="jobline" id="FIELD_JDES">
                                       {!! $education->description !!}
                                       </span>
									   </div>
                                    </div>
                                 </div>
                              </div> -->
                              <div id="PARAGRAPH_EXPR_0" class="paragraph PARAGRAPH_EXPR firstparagraph placeholder-text ">
							 <div style="width:100% display: inline-block;">
							  <div class="jobtitle txtBold" id="FIELD_JTIT" style="float: none;width: 27%;padding-right:2%;{{isset($pdf_view)?'padding-top:1.5px !important;':''}}display: inline-block;vertical-align: top;">{{ $education->degree }}
							  </div>
							  
							  <div style="width:70%;/* margin-left:30%; */display: inline-block;vertical-align: top;">
							  
							  <span class="jobtitle" id="FIELD_JTIT" style="">{{ $education->school_name }} {{-- $education->school_location --}}&nbsp;|&nbsp;<span class="jobdates" id="FIELD_JSTD" format="%Y-%m">{{ date('M, Y', strtotime($education->graduation_start_date)) }}</span> <span dependency="JSTD+EDDT"> - </span>
										  <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">{{ $education->current == '1' ? 'Current' : date('M, Y', strtotime($education->graduation_end_date)) }}</span></span>
										  <div class="singlecolumn" style="">
									 <div class="paddedline date-content" dependency="JSTD|EDDT"></div>
									 <div style="margin-left:0px;">
                                       <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT">
										   <span class="companyname" id="FIELD_COMP"></span>
										  
										  
                                       </span>
                                       <span class="jobline" id="FIELD_JDES">
                                          {!! $education->description !!}
                                       </span>
									   </div>
                                    </div>
                                 </div>
							  </div>
							  </div>
                                 <div class=" doc-item" style="width:100%">
								 <!--<span class="paddedline" dependency="JTIT" style="margin-left:-118px">
                                      
                                       </span>-->
                                    <!--<span class="fa-stack fa-lg sectiontitle-li">
											  <img src="{{ url('images/shapeImages/dotImage.png')}}">
											</span>-->
									
                                       <!-- </span>
									<div class="singlecolumn" style="margin-left:30%">
									 <div class="paddedline date-content" dependency="JSTD|EDDT"></div>
									 <div style="margin-left:0px;">
                                       <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT">
										   <span class="companyname" id="FIELD_COMP"></span>
										  
										  
                                       </span>
                                       <span class="jobline" id="FIELD_JDES">
                                          {!! $education->description !!}
                                       </span>
									   </div>
                                    </div>
                                 </div> -->
                              </div>
							@endforeach
						  @else
							 <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text ">
								<div class=" doc-item">
								   <div class="singlecolumn"  style="margin-left:10px;">
									  <div class="paddedline date-content">
										 <span class="jobdates" id="FIELD_GRST" format="%Y-%m">06/2013</span>
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
			   @if(isset($resume->extraSection) && $resume->extraSection && $resume->extraSection->isResumeUpload == '0')
			  <div class="section sortable-item section-container SortableItem-sibling  data-SEC">
				 <div id="SECTION_EDUC411a31aa-7167-4080-837f-be30a3388e31" class=" education SECTION_EDUC  noparagraph multi-para" data-section-cd="SEC">
					<div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif">
					   <div class="heading" style="padding-left:12px">
						  <div class="sectiontitle" id="SECTIONNAME_SEC" style='margin:20px 0 10px 0;font-size:16px;color:{{isset($resume->color)? $resume->color:"#020432"}};'>@if(isset($resume->extraSection->title)) {{$resume->extraSection->title}} <span class="rename-section text-rename text-primary">Rename</span>
                            <span class="titleupdate" style="display:none;"><input type="text" data-link="extrasection" value="{{$resume->extraSection->title}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else  @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletsection')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
					   </div>
					   <div class="">
						  <div class=""  style="margin-left:108px;">
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
         <div class="line" style="height: 25px;width: 30%;border-right: 2px solid;"></div>
      </div>
   </div>
</div>