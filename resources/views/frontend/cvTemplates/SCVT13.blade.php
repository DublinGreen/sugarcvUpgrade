<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/front/mobileResponsive.css') }}">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<div class="resume-preview thumb-preview resume-animation">
   <div class="" >
      <div>
         <style type="text/css" id="static">
            /*Font support for MAC*/
            @font-face{font-family:'Century Gothic';font-weight:normal;font-style:normal;src:local('Century Gothic'),url('/blobcontent/zty/fonts/CenturyGothic.ttf') format('truetype')}
            @font-face{font-family:'Century Gothic';font-weight:bold;font-style:normal;src:local('Century Gothic Bold'),url('/blobcontent/zty/fonts/CenturyGothicBold.ttf') format('truetype')}
            @font-face{font-family:'Century Gothic';font-weight:bold;font-style:italic;src:local('Century Gothic Bold Italic'),url('/blobcontent/zty/fonts/CenturyGothicBoldItalic.ttf') format('truetype')}
            @font-face{font-family:'Century Gothic';font-weight:normal;font-style:italic;src:local('Century Gothic Italic'),url('/blobcontent/zty/fonts/CenturyGothicItalic.ttf') format('truetype')}
            html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:transparent}
            body{line-height:1;text-align:left;font-feature-settings:"liga" 0;-moz-font-feature-settings:"liga" off}
            /* #document.skn-trz9 ol,#document.skn-trz9 ul{list-style:none} */
            #document.skn-trz9 table{border-collapse:collapse;border-spacing:0;font-size:inherit;color:inherit;width:100%}
            /*START content disc style for LI*/
            /* #document.skn-trz9 ul,#document.skn-trz9 li{margin:0;padding:0;list-style-type:none;} */
            #document.skn-trz9 ul li{margin:0 0 0 16px;padding:0;}
			/* #document.skn-trz9 .left-box ul li{border-bottom:2px solid #DAA520;margin-right:12px} */
            @-moz-document url-prefix() {#document.skn-trz9 ul li{margin:0 0 0 12px;padding:0 0 0 3px;}}
            /*END content disc style for LI*/
            #document.skn-trz9 table.skills,.table_wrapper{width:100%;margin-top:0px;word-wrap:break-word}
            #document.skn-trz9 table.skills th,table.skills td{width:20%;text-align:center}
            #document.skn-trz9 table.skills .skillname,#document.skn-trz9 table.skills .skillrating{text-align:left;width:35%}
            #document.skn-trz9 table.skills .skillrating{width:20%}
            #document.skn-trz9 table.skills .skillyears,#document.skn-trz9 table.skills .skilllast{width:19%}
            #document.skn-trz9 table.skills .pad1{width:5%}
            #document.skn-trz9 .skills .pad2,#document.skn-trz9 table.skills .pad3{width:1%}
            /* document */
            #document.skn-trz9{color:black;line-height:16px;font-variant-ligatures:none;min-height:792px;box-sizing:border-box;word-wrap:break-word}
            #document.skn-trz9 .name{color:{{isset($resume->color)? $resume->color:"#4267B2"}};font-size:{{isset($resume->nameSize)? $resume->nameSize:"35px"}};font-weight:bold;padding:0 0 6px 0;text-align:left;position:relative;word-wrap:break-word}
            #document.skn-trz9 .address .singlecolumn{margin-left:0!important}
            #document.skn-trz9 .resumeTitle{font-style:Arial;font-weight:Bold; text-align:center;}
            /* Heading */
            #document.skn-trz9 .heading{padding:2px;letter-spacing:0;font-weight:bold;line-height:15px;margin-bottom:10px}
            #document.skn-trz9 .sectiontitle{color:{{isset($resume->color)? $resume->color:"#4267B2"}};word-wrap:break-word;text-transform: uppercase;}
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
            #document.skn-trz9 .parentContainer{ display:table;width:100%;min-height:inherit;table-layout:fixed;border-collapse:none}
            #document.skn-trz9 .left-box,#document.skn-trz9 .right-box{padding-left:0px}
            #document.skn-trz9 .left-box{padding-left:2px;border:none;}
			#document.skn-trz9 .right-box{padding-left:0;padding-right:30px;border:none;}
            #document.skn-trz9 .left-box{box-sizing:initial;letter-spacing:0.2px}
            #document.skn-trz9 .right-box .section:first-child,#document.skn-trz9 .left-box .section:first-child{padding-top:0px!important}
            #document.skn-trz9 .right-box .paddedline.date-content{position:absolute;font-weight:700;margin-left:205px;width:126px}
            #document.skn-trz9 .paragraph{position:relative; padding:0 5px;}
            #document.skn-trz9 .summary .singlecolumn{margin-left:0}
            #document.skn-trz9 .right-box{float: right;letter-spacing: 0.2px;background-color: #FFFFFF;color: #000;}
			#document.skn-trz9 .left-box{float:left;letter-spacing:0.2px;color:#FFFFFF;text-align:center}
            #document.skn-trz9 .summary.section{padding-top:15px}
            #document.skn-trz9 .txtBold{font-weight:bold}
            #document.skn-trz9 .txtItl{font-style:italic}
            #document.skn-trz9 .paddedline{display:block}
            #document.skn-trz9 .mt5{margin-top:5px}
            #document.skn-trz9 .word-break{word-wrap:break-word}
			#document.skn-srz1 .right-box .paddedline.date-content{margin-left:260px}
            /*Rating*/
            #document.skn-trz9 .ratingWrapper svg{height:10px;stroke:#002e58}
            #document.skn-trz9 .ratingWrapper .noLnht{line-height:0}
            #document.skn-trz9 .headingIcon svg circle,#document.skn-trz9 .ratingWrapper svg .default-fill{fill:#002e58}
            #document.skn-trz9 .ratingRow{position:relative;white-space:nowrap}
            #document.skn-trz9 .ratingRow .ratingText,#document.skn-trz9 .ratingRow .ratingWrapper{width:50%;display:inline-block;word-break:break-word;white-space:normal;vertical-align:top}
            #document.skn-trz9 .ratingRow .ratingText+.ratingWrapper{text-align:right}
            #document.skn-trz9 .SortableItem .ratingRow .ratingText+.ratingWrapper{margin-top:5px;padding-top:0}
            #document.skn-trz9 .SortableItem .ratingWrapper span{top:0;line-height:inherit; text-align;center}
            /* Only for firefox */
            @-moz-document url-prefix() {#document.skn-trz9 .parentContainer{height:1px}}
            #document.skn-trz9 .ratingRow .ratingText:last-child{width:100%}
            /* For dates fix */
            #document.skn-trz9 .right-box .hidedates{visibility:hidden;position:static!important;display:block;float:left}
            #document.skn-trz9 .left-box .hidedates{display:none} 
            /*#document.skn-trz9 .paragraph.datespara:after{content:'';display:table;clear:both}*/
			#document.skn-trz9 .topsection .left-box {float:left;padding-bottom:0;padding-right:18px;}
			#document.skn-trz9 .topsection .right-box {padding-bottom: 0;padding-left:15;width:355;text-align:left;}
			div#CONTAINER_3 { padding-top: 36px;}
			#document.skn-trz9 .resumeTitle:after { content: '';display: block;border-bottom: 4px solid #fff;width: 30px;padding-top: 20px;}
			
			#document .parentContainer .left-side{background-color:#d6d6d6; padding-left:20px !important}
			#document .parentContainer .right-side{padding-right:20px;}
			ul.ba {    list-style-type: none;}
			#document.skn-trz9 .main{font-size:16px;color:#0000;line-height:16px; padding-top:25px;padding-left:25px}
			#document.skn-trz9 .sectiontitle-li{font-size:16px;color:#DAA520;}
         </style>
         <style type="text/css" id="dynamic" data-time="Tue May 26 2020 17:35:58 GMT+0530 (India Standard Time)">
            #document.skn-trz9,#document.skn-trz9 table{line-height:{{isset($resume->lineSpacing)? $resume->lineSpacing:"18px"}}}
            #document.skn-trz9.pagesize{width:612px}
            #document.skn-trz9.fontsize{font-size:{{isset($resume->fontSize)? $resume->fontSize:"11px"}}}
            #document.skn-trz9.fontface{font-family:{{isset($resume->fontFamily)? $resume->fontFamily:"Century Gothic"}}}
            #document.skn-trz9.vmargins{padding-top:-5px;padding-bottom:0px}
            #document.skn-trz9.hmargins{padding-left:20px;padding-right:20px}
            #document.skn-trz9 .section{padding-top:20px}
            #document.skn-trz9 .left-box .section:after{padding-bottom:10px}
            #document.skn-trz9 .paragraph{margin-top:10px}
            #document.skn-trz9 .singlecolumn,#document.skn-trz9 .maincolumn{word-wrap:break-word}
            #document.skn-trz9 .right-box .singlecolumn,#document.skn-trz9 .right-box .maincolumn{margin-left:0px}
            #document.skn-trz9 table.skills td{padding-top:5px}
            #document.skn-trz9 .jobtitle, #document.skn-trz9 .degree, #document.skn-trz9 .programline{font-size:14px}
            #document.skn-trz9 .name{font-size:{{isset($resume->nameSize)? $resume->nameSize:"35px"}};line-height:60px;text-align:center}
            #document.skn-trz9 .heading{line-height:22px;padding-left:5px;}
            #document.skn-trz9 .sectiontitle{font-size:16px; }
            /*#document.skn-trz9 .left-box{width:210px}*/
			#document.skn-trz9 .right-box{width:auto}
            #document.skn-trz9 .right-box .paragraph .singlecolumn{margin-left:none}
            #document.skn-trz9 svg{stroke:#002e58}
            #document.skn-trz9 .resumeTitle{font-size:20px;color:#002e58;line-height:16px}
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
			
			#document .parentContainer .left-side{background-color:#ffff;padding-left:20px !important; padding-top:5px}
			#document .parentContainer .right-side{padding-right:20px}
			ul.ba {    list-style-type: none;}
			#document.skn-trz9 .main{font-size:16px;color:#fff;line-height:16px; padding-top:25px;padding-left:25px;}
			 #document.skn-trz9 .sectiontitle-li{font-size:16px;color:#DAA520;}
			 #document.skn-trz9 .imagespace{padding-left:1px;margin-top:20px;}
			 .social_links span.field {display: block;padding-bottom: 5px;}
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.vmargins{width:612px!important}
			.row.about-container .resume-preview.thumb-preview.resume-animation #document .topright{width: 392px!important;}
			.row.about-container .resume-preview.thumb-preview.resume-animation #document .topleft{width: 219px!important;}
			.row.about-container .resume-preview.thumb-preview.resume-animation #document .parentContainer .right-side {width:387px!important;}
			.row.about-container .resume-preview.thumb-preview.resume-animation #document .topsection{width: 611px!important;}
         
         .scvt{
		      background-color:{{isset($resume->backgroundColor)? $resume->backgroundColor:'#590000'}};
	      }
         .skill_rate_1 { width: 20px;background-color: #DAA520;height: {{isset($pdf_view)?'5px':'3px'}};display: block;}
      .skill_rate_2 { width: 40px;background-color: #DAA520;height: {{isset($pdf_view)?'5px':'3px'}};display: block;}
      .skill_rate_3 { width: 60px;background-color: #DAA520;height: {{isset($pdf_view)?'5px':'3px'}};display: block;}
      .skill_rate_4 { width: 80px;background-color: #DAA520;height: {{isset($pdf_view)?'5px':'3px'}};display: block;}
      .skill_rate_5 { width: 100px;background-color: #DAA520;height: {{isset($pdf_view)?'5px':'3px'}};display: block;}
      .rename-section{
               display:none;
            }
         </style>
      </div>
	  <!---------header---------------->
	   <!---div id="document" class="document fontsize fontface  pagesize skn-trz9 TRZ7  ZTY" style="min-height: 102px !important;">
	  
		 </div-->
	  <!---------header---------------->

      <div id="document" class="document fontsize fontface vmargins  pagesize skn-trz9 TRZ7  ZTY" style="width:100%;background:#ffffff">
        
		 <div id="CONTAINER" class="parentContainer" style="clear:both;width:100%;">
            <div id="CONTAINER_0" class="left-box scvt" style="width:30%;">
             
			  
			  <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                  <div class="document-tool sec-tool" id="editIcons"></div>
                  <div id="SECTION_NAME464b9aab-d77c-4f2a-994a-4f79aa785951" class="section notdraggable SECTION_NAME firstsection  " data-section-cd="NAME">
                     <div class="doc-item">
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_NAME_f7eda8ec-b653-4afd-af6e-42abfa260097" class="paragraph PARAGRAPH_NAME firstparagraph  ">
                                 <div>
                                    <div id="PARAGRAPH_NAME_f7eda8ec-b653-4afd-af6e-42abfa260097" class="paragraph PARAGRAPH_NAME firstparagraph  ">
										<div class="imagespace">
											<img src="{{ url('asset_new/img/user/scvt13.png')}}" style="height:120px;width:110px;border-radius:35px;"/>  
										</div>
									</div>
							  
                                  
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sortableInner">
			   <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT">
                  <div class="document-tool sec-tool" id="editIcons" style="right:22px;"></div>
                  <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
				  <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                        <div class="heading" style="margin-bottom:0px;">
                           <div class="sectiontitle" id="SECTIONNAME_CNTC">{{!empty($resume->contact_section_title)?$resume->contact_section_title:'CONTACT'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="contactsection" value="{{!empty($resume->contact_section_title)?$resume->contact_section_title:'Contact'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_CNTC_a92b0367-e01a-45b4-8ecb-220a75697aa3" class="paragraph PARAGRAPH_CNTC firstparagraph  ">
                                 <div class="doc-item">
                                    <div class="address" style="padding-left:27px;padding:10px">
                                       <div class="singlecolumn">
									   
										  <div dependency="HPHN" style="border-bottom:2px solid #DAA520;">
										 
											
                                             <span class="field" id="FIELD_HPHN">{{ $resume->phone or '916-948-7196' }}</span>
                                          </div>
										  <div dependency="EMAI" class="word-break" style="border-bottom:2px solid #DAA520;">
										 
                                             <span class="field" id="FIELD_EMAI">{{ $resume->email or 'example@gmail.com' }}</span>
                                          </div>
                                          <div dependency="STRT|CITY|STAT|ZIPC" style="border-bottom:2px solid #DAA520;text-align:center">
									   		
											<span class="field" id="FIELD_STRT">{{ $resume->street or 'Woodland Terrace'}}</span>
                                             <span class="field" id="FIELD_CITY">{{ $resume->city or 'Sacramento'}}</span><span dependency="CITY+STAT|ZIPC">,</span>
                                             <span class="field" id="FIELD_STAT">{{ $resume->state or 'CA' }}</span><span dependency="STAT+ZIPC">, </span>
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
			<!--------------------------------------------------------------------------->
			<div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT" >
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif">
                        <div class="heading">
                           <div class="sectiontitle titlecolor" id="SECTIONNAME_HILT">@if(isset($resume->skills)) {{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}} <span class="rename-section text-rename text-primary"> RENAME </span>
                           <span class="titleupdate" style="display:none;"><input type="text" value="{{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}}" data-link="skill" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="rename-section text-rename"> </span>@else SKILLS @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteskills')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_HILT_0" class="paragraph PARAGRAPH_HILT firstparagraph placeholder-text ">
                                 <div class="doc-item">
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
                                                      <li style="margin: 0;list-style: none;text-align:center;{{$loop->iteration > 1 ? 'padding-top:8px':''}}"><span class="firstspan" >{{ $skill->skill }}<br> </span><div style="{{isset($pdf_view)?'margin-left: 55px;':''}}"><span class="secondspan" style="background-color: #fff;width: 100px;height: 5px; margin-top: 6px;border: 1px solid #000;display:inline-block;"><span class="skill_rate_{{ $skill->rating }}"></span></span></div></li>
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
			   
					<p>&nbsp;</p>
               <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-BIOD editcontent " dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif" style="margin-top:20px;">
					<div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_HILT">{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO DATA'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="biosection" value="{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
					<div class="biodata" style="text-align:center;">	
					  <div dependency="ORIGINSTATE" style="padding-bottom:5px;">
						 <div><b>State of Origin:</b></div>
						 <div class="field" id="FIELD_ORIGINSTATE">{{ $resume->originState or 'Lagos' }}</div>
					  </div>
					 
					  <div dependency="MARITALSTATUS" style="padding-bottom:5px;">
						 <div><b>Marital Status:</b></div>
						 <div class="field" id="FIELD_MARITALSTATUS">{{ $resume->maritalStatus or 'Single' }}</div>
					  </div>
					   <div dependency="GENDER" style="padding-bottom:5px;">
						 <div><b>Gender:</b></div>
						 <div class="field" id="FIELD_GENDER">{{ $resume->gender or 'Male' }}</div>
					  </div>
					  <div dependency="DOB">
						 <div><b>Date of Birth:</b></div>
						 <div class="field" id="FIELD_DOB">{{ $resume->dob or date('d-m-Y') }}</div>
					  </div>
					<p>&nbsp;</p>
					</div>	
               </div>
               @if( ( !empty($resume->facebook) ) || ( !empty($resume->twitter)) || ( !empty($resume->linkedin) ) || ( !empty($resume->website) ) )
                     <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-SOCL editcontent " dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif" style="">
									 <div class="heading" style="margin-top:0px;">
									   <div class="sectiontitle" id="SECTIONNAME_SOCL">Social Links<span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
									</div>
								 <div class="social_links">
									@if( $resume->facebook != '' )
									<div><div style="font-weight:bold;">Facebook</div>
									 <span class="field" >{{ $resume->facebook }}</span>
									 </div>
									@endif
									@if( $resume->twitter != '' )
									 <div><div style="font-weight:bold;">Twitter</div>
									 <span class="field">{{ $resume->twitter}}</span>
									 </div>
									 @endif
									@if( $resume->linkedin != '' )
									 <div><div style="font-weight:bold;">LinkedIn</div>
									 <span class="field">{{ $resume->linkedin }}</span>
									 </div>
									@endif
									@if( $resume->website != '' )
									 <div><div style="font-weight:bold;">Website</div>
									 <span class="field">{{ $resume->website }}</span>
									 </div>
									@endif	 
								</div>
                     </div>
						@endif
						
			<!--------------------------------------------------------------------------->	
			<!--------------------------------------------------------------------------->	
			<!--------------------------------------------------------------------------->	
				
				</div>
               </div>
	    <div id="CONTAINER_2" class="right-box" style="min-height: 60%;
    width: 66%;padding-top:15px;">
			
			<div class="section-container SortableItem-sibling  data-NAME">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_NAME464b9aab-d77c-4f2a-994a-4f79aa785951" class="section main SECTION_NAME firstsection  " data-section-cd="NAME">
                     <div class=" doc-item editcontent " dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                        <div class="">
                           <div class="">
						   <div class="name word-break" style="text-transform:uppercase">
                                       <span class="field" id="FIELD_FNAM">{{ $resume->first_name or 'Your'}}</span>
                                       <span class="field word-break" id="FIELD_LNAM">{{ $resume->last_name or 'Name'}}</span>
                                    </div>
									<div style="width: 100%;text-align: center;line-height: 40px;border-bottom: 1px solid #4267B2;color: #DAA520;margin-top: -22px;font-weight:bold">{{$resume->profession or 'Designer'}}</div>
                              <!--<div class="resumeTitle " id="FIELD_DCTL" style="border-bottom:1px solid #4267B2;color:#DAA520;">{{$resume->profession or 'Designer'}}</div>-->
							 
							</div>
						   
						   </div>
                        </div>
                     </div>
                  </div>
                  <div class="sortableInner">
              <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-SUMM left-side" >
                  <div class="document-tool sec-tool" id="editIcons" style="right:22px;"></div>
                  <div id="SECTION_SUMM879edb71-bdad-4ac5-a858-3bcc1c38ab71" class="section summary notdraggable SECTION_SUMM  noparagraph " data-section-cd="SUMM">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif">
					 <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_CNTC" style=""><!--<img src="{{asset('fonts/star.png')}}" height="18px" alt="">-->  @if(isset($resume->summary)) {{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="aboutme" value="{{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else Profile @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletesummary')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_SUMM_0" class="paragraph PARAGRAPH_SUMM firstparagraph placeholder-text ">
				
                                 <div class="doc-item">
								 
                                    <div class="field singlecolumn" id="FIELD_FRFM">@if(isset($resume->summary) && $resume->summary)
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
			   
				
				<div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EDUC" style="margin-left:10px !important">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_EDUCe38830c3-809a-48c9-a15b-57e04eb83e0e" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="EDUC">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_EDUC" style="margin-left:8px"><!--<img src="{{asset('fonts/star.png')}}" height="18px" alt="">-->@if(isset($resume->resume_education_detail[0])) {{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="education" value="{{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EDUCATION @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteEducation')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                            <div class="">
						  @if(isset($resume->resume_education_detail) && $resume->resume_education_detail) 
							@foreach($resume->resume_education_detail as $education)
							 <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text "style="margin-left:8px">
								<div class="doc-item">
								   <div class="singlecolumn" style="">
								   <div><span style="float:right">{{ date('M, Y', strtotime($education->graduation_start_date)) }} - {{ $education->current == '1' ? 'Current' : date('M, Y', strtotime($education->graduation_end_date)) }}</span></div>
									  <!--<div class="paddedline date-content">
										 <span class="jobdates" id="FIELD_GRST" format="%Y-%m">{{ date('M, Y', strtotime($education->graduation_start_date)) }}</span>
										 <span class="jobdates" id="FIELD_GRED" format="%Y-%m">{{ $education->current == '1' ? 'Current' : date('M, Y', strtotime($education->graduation_end_date)) }}</span>
									  </div>-->
									  <span class="paddedline degreeGap txtBold" dependency="DGRE|STUY" style="border-bottom:1px solid #4267B2">
									  <span class="degree" id="FIELD_DGRE">{{ $education->degree }}</span>
									  <span class="programline" id="FIELD_STUY"></span>
									  </span>
									  <div class="paddedline txtItl" >
										 <span class="companyname" id="FIELD_SCHO">{{ $education->school_name }}</span><span> - </span>
										 <span class="joblocation jobcity" id="FIELD_SCIT">{{ $education->school_location }}</span>
                               <!-- <span>, </span> -->
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
							 <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text " style="margin-left:8px">
								<div class="doc-item">
								   <div class="singlecolumn">
									  <div class="paddedline date-content" style="color:#DAA520">
										 <span class="jobdates" id="FIELD_GRST" format="%Y-%m">06/2013 -</span>
										 <span class="jobdates" id="FIELD_GRED" format="%Y-%m">03/2017</span>
									  </div>
									  <span class="paddedline degreeGap txtBold" style="border-bottom:1px solid #4267B2">
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
				  <!------------------------------------------------------------------->
				  <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EXPR" style="margin-left:20px !important">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_EXPR06fafd67-c5ae-45e8-b4a1-ed0f75d06194" class="section experience SECTION_EXPR  noparagraph multi-para" data-section-cd="EXPR" style="margin-left:-12px;">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_EXPR" style="margin-left:8px"><!--<img src="{{asset('fonts/star.png')}}" height="18px" alt="">--> @if(isset($resume->resume_work_detail[0])) {{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'PROFESSIONAL EXPERIENCE'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="workdetail" value="{{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'PROFESSIONAL EXPERIENCE'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else PROFESSIONAL EXPERIENCE @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('delete-workdetail')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="sortableInner">
						  @if(isset($resume->resume_work_detail) && $resume->resume_work_detail)
							@foreach($resume->resume_work_detail as $workhistory)
                              <div id="PARAGRAPH_EXPR_0" class="paragraph PARAGRAPH_EXPR firstparagraph placeholder-text " style="margin-left:8px">
                                 <div class="doc-item">
                                   
									<span class="jobtitle txtBold" id="FIELD_JTIT"> </span>
                                       </span>
									<div class="singlecolumn" style="">
									 <div style="">
									<div><span style="float:right">{{ date('M, Y', strtotime($workhistory->start_date)) }} - {{ $workhistory->is_current == '1' ? 'Current' : date('M, Y', strtotime($workhistory->end_date)) }}</span></div>
                                       <!--<div class="paddedline date-content" dependency="JSTD|EDDT">
                                          <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">{{ date('M, Y', strtotime($workhistory->start_date)) }}</span>
										  <span dependency="JSTD+EDDT"> - </span>
										  <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">{{ $workhistory->is_current == '1' ? 'Current' : date('M, Y', strtotime($workhistory->end_date)) }}</span>
                                       </div>-->
                                       <span class="paddedline" dependency="JTIT" style="border-bottom:1px solid #4267B2">
                                       <span class="jobtitle txtBold" id="FIELD_JTIT">{{  $workhistory->job_title  }}</span>
                                       </span>
									   
                                       <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT">
										   <span class="companyname" id="FIELD_COMP"></span>
										   
										   <span dependency="JCIT+JSTA">{{  $workhistory->employer  }} | </span>
										   <span class="jobstate" id="FIELD_JSTA">{{  $workhistory->state  }},</span>
										   <!-- <span dependency="COMP+JCIT|JSTA">, </span> -->
										   <span class="jobcity" id="FIELD_JCIT">{{  $workhistory->country  }}</span>
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
                                       <div class="paddedline date-content" dependency="JSTD|EDDT" style="color:#DAA520">
                                          <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">06/2013</span><span dependency="JSTD+EDDT"> - </span>
										  <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">03/2015</span>
                                       </div>
                                       <span class="paddedline" dependency="JTIT" style="border-bottom:1px solid #4267B2">
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
               @if(isset($resume->extraSection) && $resume->extraSection && $resume->extraSection->isResumeUpload == '0')
				  <div class="sortable-item section-container SortableItem-sibling section  data-SEC" style="margin-left:16px;">
					 <div id="SECTION_EDUC411a31aa-7167-4080-837f-be30a3388e31" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="SEC">
						<div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif">
						   <div class="heading">
							  <div class="sectiontitle" id="SECTIONNAME_SEC">@if(isset($resume->extraSection->title)) {{$resume->extraSection->title}} <span class="rename-section text-rename text-primary">Rename</span>
                            <span class="titleupdate" style="display:none;"><input type="text" data-link="extrasection" value="{{$resume->extraSection->title}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else  @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletsection')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
						   </div>
						   <div class="" style="margin-left:12px;">
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
   </div>