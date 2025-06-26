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
            
            /*START content disc style for LI*/
            
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
            #document.skn-trz9{color:black;line-height:16px;font-variant-ligatures:none;min-height:792px;box-sizing:border-box;word-wrap:break-word}
             /* style for left and right box */
            
            
            #document.skn-trz9 .left-box{box-sizing:initial;display:inline-block;float:left;letter-spacing:0.2px}
            #document.skn-trz9 .right-box .section:first-child,#document.skn-trz9 .left-box .section:first-child{padding-top:0px!important}
			
        
           
            #document.skn-trz9 .mt5{margin-top:5px}
            
            /*Rating*/
            #document.skn-trz9 .ratingWrapper svg{height:10px;stroke:#002e58}
            #document.skn-trz9 .ratingWrapper .noLnht{line-height:0}
            #document.skn-trz9 .headingIcon svg circle,#document.skn-trz9 .ratingWrapper svg .default-fill{fill:#002e58}
        
            #document.skn-trz9 .name{color:#000;font-weight:bold;padding:0 0 6px 0;text-align:left;position:relative;word-wrap:break-word}
            #document.skn-trz9 .address .singlecolumn{margin-left:0!important}
            #document.skn-trz9 .resumeTitle{font-weight:700; text-align:center;}
            #document.skn-trz9 .SortableItem .ratingWrapper span{top:0;line-height:inherit; text-align;center}
            /* Only for firefox */
            @-moz-document url-prefix() {#document.skn-trz9 .parentContainer{height:1px}}
            
            /* For dates fix */
            #document.skn-trz9 .right-box .hidedates{visibility:hidden;position:static!important;display:block;float:left}
            #document.skn-trz9 .left-box .hidedates{display:none} 
            /*#document.skn-trz9 .paragraph.datespara:after{content:'';display:table;clear:both}*/
			
			
			div#CONTAINER_3 { padding-top: 36px;}
			/*#document.skn-trz9 .resumeTitle:after { content: '';display: block;border-bottom: 4px solid #fff;width: 30px;padding-top: 20px;}*/
			#document .topsection .headimg{background:red; width: 100%; padding-left:0px !important; padding-right:0px !important; margin-top:30px}
			#document .parentContainer .left-side{background-color:#d6d6d6; padding-left:15px !important}
			#document .parentContainer .right-side{padding-right:20px;}
			ul.ba {    list-style-type: none;}
			#document.skn-trz9 .main{font-size:16px;color:#0000;line-height:16px; padding-top:25px;padding-left:25px}
			#document.skn-trz9.fontsize{font-size:{{isset($resume->fontSize)? $resume->fontSize:"11px"}}}
            #document.skn-trz9.fontface{font-family:{{isset($resume->fontFamily)? $resume->fontFamily:"Century Gothic"}}}
            #document.skn-trz9.vmargins{padding-top:-5px;padding-bottom:10px;padding-right: 20px;}
            #document.skn-trz9.hmargins{padding-left:20px;padding-right:20px}
			.heading {
    text-transform: uppercase;
}
         </style>
         <style type="text/css" id="dynamic" data-time="Tue May 26 2020 17:35:58 GMT+0530 (India Standard Time)">
            #document.skn-trz9,#document.skn-trz9 table{line-height:{{isset($resume->lineSpacing)? $resume->lineSpacing:"18px"}}}
            
            #document.skn-trz9 .name{color:{{isset($resume->color)? $resume->color:"#dc3545"}};font-size:{{isset($resume->nameSize)? $resume->nameSize:"36px"}};line-height:60px;text-align:center;font-weight: bold;padding: -1px 29px 6px 0;position: relative;}
            #document.skn-trz9 .resumeTitle{font-size:16px;color:#002e58;line-height:16px}
            #document.skn-trz9.hmargins{padding-left:20px;padding-right:20px}
            #document.skn-trz9 .section{padding-top:20px}
            #document.skn-trz9 .left-box .section:after{padding-bottom:10px}
            #document.skn-trz9 .paragraph{margin-top:0px}
            /*#document.skn-trz9 .singlecolumn,#document.skn-trz9 .maincolumn{word-wrap:break-word}*/
            #document.skn-trz9 .right-box .singlecolumn,#document.skn-trz9 .right-box .maincolumn{margin-left:0px}
            #document.skn-trz9 table.skills td{padding-top:5px}
             #document.skn-trz9 .left-box{width:219px}
			 #document.skn-trz9 .right-box{width:393px;}
            
        
            
            
            
            #document.skn-trz9 svg{stroke:#002e58}
            
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
			#document .parentContainer .left-side{background-color:#ffff;padding-left:15px !important; padding-top:5px}
			#document .parentContainer .right-side{padding-right:20px}
			#document.skn-trz9 .sectiontitle{font-size:16px;color:{{isset($resume->color)? $resume->color:"#000"}}}
         ul.ba {    list-style-type: none;}
			
			 div.parentContainer {position:relative;}
			 div.parentContainer .left-box {}
			 
			 
			 
			 .row.about-container .resume-preview.thumb-preview.resume-animation #document.vmargins{width: 612px!important;}
			.row.about-container .resume-preview.thumb-preview.resume-animation #document .topright{width: 392px!important;}
			.row.about-container .resume-preview.thumb-preview.resume-animation #document .topleft{width: 219px!important;}
			.row.about-container .resume-preview.thumb-preview.resume-animation #document .parentContainer .right-side {width: 387px!important;}
			.row.about-container .resume-preview.thumb-preview.resume-animation #document .topsection{ width: 611px!important;}
		
      .rename-section{
         display:none;
      }
      @if( Request::segment(1) == 'final-resume' )
      .editcontent:hover .PARAGRAPH_EXPR{
        display:inline-block;
      }
      @endif
      div#FIELD_SKC1 ul li {list-style: none !important;margin: 0 !important;}
      .skill_rate_1 { width: 15px;background-color: #000;height: {{isset($pdf_view)?'5px':'4px'}};display: block;}
      .skill_rate_2 { width: 30px;background-color: #000;height: {{isset($pdf_view)?'5px':'4px'}};display: block;}
      .skill_rate_3 { width: 45px;background-color: #000;height: {{isset($pdf_view)?'5px':'4px'}};display: block;}
      .skill_rate_4 { width: 60px;background-color: #000;height: {{isset($pdf_view)?'5px':'4px'}};display: block;}
      .skill_rate_5 { width: 75px;background-color: #000;height: {{isset($pdf_view)?'5px':'4px'}};display: block;}
      </style>
      </div>
	  <!---------header---------------->
	   <!---div id="document" class="document fontsize fontface  pagesize skn-trz9 TRZ7  ZTY" style="min-height: 102px !important;">
	  
		 </div-->
	  <!---------header---------------->
      <div id="document" class="document fontsize fontface vmargins  pagesize skn-trz9 TRZ7  ZTY" style="width:{{isset($pdf_view)?'100%':'612px'}};font-size:{{isset($resume->fontSize)? $resume->fontSize:'11px'}};">
    
		 
		 <div id="CONTAINER" class="parentContainer" style="clear:both;display:table;min-height:inherit;position: relative;width:100%;min-height:inherit;">
            <div id="CONTAINER_0" class="left-box scvt" style="width:200px;display:inline-block;float:left;letter-spacing:0.2px;background-color:{{isset($resume->backgroundColor)? $resume->backgroundColor:'#C0C0C0'}};color:#000000;box-sizing: initial;clear:both;border-left:7px solid #dc3545;padding-top:12px;margin-top: -2px;" >
            <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                  <div class="document-tool sec-tool" id="editIcons"></div>
                  <div id="SECTION_NAME464b9aab-d77c-4f2a-994a-4f79aa785951" class="section notdraggable SECTION_NAME firstsection" style="padding-top:0" data-section-cd="NAME">
                     <div class=" doc-item" style="border-bottom: 16px solid #C0C0;">
                        
                              <div id="PARAGRAPH_NAME_f7eda8ec-b653-4afd-af6e-42abfa260097" class="paragraph PARAGRAPH_NAME firstparagraph" style="position:relative; padding-left:5px;">
                                 <div>
                                <div id="PARAGRAPH_NAME_f7eda8ec-b653-4afd-af6e-42abfa260097" class="paragraph PARAGRAPH_NAME firstparagraph  " style="margin-top:0">
									 <div class ="imagespace" style="cursor:pointer;padding-left:20px;margin-top:20px;vertical-align:middle;" id="openImageUploader"  title="Change Image">
										@if(isset($resume->image))
										<img src="{{ url('images/resumeImages/') }}/{{ $resume->image }}" / style="height:120px;width:120px">  
										@else
										<img src="{{ url('asset_new/img/user/profile.png')}}" style="height:120px;width:120px"/>  
										@endif
									 </div>
								</div>
							  
                                  
                                 </div>
                           
							</div>
                     </div>
                  </div>
               </div>
            <div class="sortableInner" style="padding-left: 16px;">
            <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
				  <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                        <div class="heading" >
                           <div class="sectiontitle titlecolor" style="font-size:16px;padding:2px;letter-spacing:0;font-weight:bold;line-height:15px;{{isset($pdf_view)?'margin-bottom:0px;':'margin-bottom:5px'}}" id="SECTIONNAME_CNTC">{{!empty($resume->contact_section_title)?$resume->contact_section_title:'CONTACT'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="contactsection" value="{{!empty($resume->contact_section_title)?$resume->contact_section_title:'Contact'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_CNTC_a92b0367-e01a-45b4-8ecb-220a75697aa3" class="paragraph PARAGRAPH_CNTC firstparagraph  ">
                                 <div class="clearfix doc-item">
                                    <div class="address">
                                       <div class="singlecolumn">
									   
                                             <div dependency="HPHN">
                                                         <span class="fa-stack fa-lg sectiontitle-li" style="vertical-align: -webkit-baseline-middle">
                                                            <!-- <i class="fa fa-circle-o fa-stack-2x"></i>
                                                            <i class="fa fa-phone fa-stack-1x fa-stack-1x"></i> -->
                                                            <img src="{{url('fonts/call.jpeg')}}" style="width:1.5rem;height:1.5rem;border-radius:4px;{{isset($pdf_view)?'margin-top:7px;':''}}" alt="">
                                                            </span>
                                                
                                                            <span class="field" id="FIELD_HPHN">{{ $resume->phone ?? '916-948-7196' }}</span>
                                                </div>
                                             <div dependency="EMAI" class="word-break" style="width: 100%;">
                                                         <span class="fa-stack fa-lg sectiontitle-li" style="vertical-align: top;margin-top: 5px;width: 15%;max-width: 2rem;display: inline-block;">
                                                            <!-- <i class="fa fa-circle-o fa-stack-2x"></i>
                                                            <i class="fa fa-envelope-o fa-stack-1x "></i> -->
                                                            <img src="{{url('fonts/mail.jpeg')}}" style="width:1.5rem;height:1.5rem;border-radius:4px;{{isset($pdf_view)?'margin-top:8px;':''}}" alt="">
                                                            </span>
                                                            <span class="field" id="FIELD_EMAI" style="width: 80%;display: inline-block;{{isset($pdf_view)?'padding-left: 0px;margin-top:7px;vertical-align:middle;':''}}">{{ $resume->email ?? 'example@gmail.com' }}</span>
                                                </div>
                                                <div dependency="STRT|CITY|STAT|ZIPC" style="width:100%;">
                                                               <span class="fa-stack fa-lg sectiontitle-li" style="vertical-align: top;margin-top: 5px;width: 15%;max-width: 2rem;display: inline-block;">
                                                               <!-- <i class="fa fa-circle-o fa-stack-2x"></i>
                                                               <i class="fa fa-map-marker fa-stack-1x"></i> -->
                                                               <img src="{{url('fonts/locationnew.jpeg?v=1')}}" style="width:1.5rem;height:1.5rem;{{isset($pdf_view)?'margin-top:8px;':''}};border-radius:4px;" alt="">
                                                               </span>
                                                               <span style="width: 80%;display: inline-block;{{isset($pdf_view)?'padding-left: 0px;margin-top:7px;vertical-align:middle;':''}}">
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
					<div class="heading" style="padding:2px;letter-spacing:0;font-weight:bold;line-height:22px;margin-bottom:10px;padding-left:5px;">
                           <div class="sectiontitle" style="font-size:16px;" id="SECTIONNAME_HILT">{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO DATA'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="biosection" value="{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="rename-section text-rename"></span> <span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
					<div class="biodata" style="padding-left:5px;">	
					  <!--<div dependency="ORIGINSTATE">
						 <div><b>State of Origin:</b></div>
						 <div class="field" id="FIELD_ORIGINSTATE">{{ $resume->originState ?? 'Lagos' }}</div>
					  </div>
					   <div dependency="GENDER">
						 <div><b>Gender:</b></div>
						 <div class="field" id="FIELD_GENDER">{{ $resume->gender ?? 'Male' }}</div>
					  </div>
					   <div dependency="DOB">
						 <div><b>Date of Birth:</b></div>
						 <div class="field" id="FIELD_DOB">{{ $resume->dob ?? date('d-m-Y') }}</div>
					  </div>
					  
					  <div dependency="MARITALSTATUS">
						 <div><b>Marital Status:</b></div>
						 <div class="field" id="FIELD_MARITALSTATUS">{{ $resume->maritalStatus ?? 'Single' }}</div>
					  </div>-->

                 <div dependency="ORIGINSTATE">
                 <div><b>State of Origin </b><span class="field" id="FIELD_ORIGINSTATE">{{ $resume->originState ?? 'Lagos' }}</span></div>
					  </div>
					   <div dependency="GENDER">
						 <div><b>Gender </b> <span class="field" id="FIELD_GENDER">{{ $resume->gender ?? 'Male' }}</span></div>
					  </div>
					   <div dependency="DOB">
                  <div><b>Date of Birth </b><span class="field" id="FIELD_DOB">{{ $resume->dob ?? date('d-m-Y') }}</span></div>
					  </div>
					  
					  <div dependency="MARITALSTATUS">
                 <div><b>Marital Status </b><span class="field" id="FIELD_MARITALSTATUS">{{ $resume->maritalStatus ?? 'Single' }}</span></div>
					  </div>
					 
					</div>	
					</div>
					 <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" style="padding-top:20px;padding-bottom: 30px;" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif">
                        <div class="heading" style="padding:2px;letter-spacing:0;font-weight:bold;line-height:22px;margin-bottom:10px;padding-left:5px;">
                           <div class="sectiontitle" style="font-size:16px;" id="SECTIONNAME_HILT">@if(isset($resume->skills)) {{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}} <span class="rename-section text-rename text-primary"> RENAME </span>
                           <span class="titleupdate" style="display:none;"><input type="text" value="{{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}}" data-link="skill" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="rename-section text-rename"> </span>@else SKILLS @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteskills')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_HILT_0" class=" PARAGRAPH_HILT firstparagraph placeholder-text " style="margin-top:0">
                                 <div class="doc-item">
                                    <div class="ratingRow" style="position:relative;display:inline-block;word-break:break-word;vertical-align:top;">
                                       <div class="ratingText" id="FIELD_SKC1" style="width:100%;margin-top:0px;padding-top:0;">
                                          <ul style="margin: 0;padding-left: 5px;list-style-type: none;">
                                          @if(isset($resume->skills) && $resume->skills)
												         @if($resume->skills->skills != "")
                                                   @php
                                                      $skills = json_decode($resume->skills->skills);
                                                   @endphp
                                                   @if(!empty($skills[0]->skill))
                                                   @foreach($skills as $skill)
                                                      <li style="margin: 0;"><span class="firstspan" style="">{{ $skill->skill }}<br> </span><span class="secondspan" style="background-color: #fff;width: 75px;height: 5px; margin-top: 6px;margin-right: 13px;border: 1px solid #000;display:inline-block;"><span class="skill_rate_{{ $skill->rating }}"></span></span><br></li>
                                                   @endforeach
                                                   @else
                                                   <li style="margin: 0;">Guest services</li>
                                                         <li style="margin: 0;">Inventory control procedures</li>
                                                         <li style="margin: 0;">Merchandising expertise</li>
                                                   @endif
                                                @endif
                                             @else
                                                         <li style="margin: 0;">Guest services</li>
                                                         <li style="margin: 0;">Inventory control procedures</li>
                                                         <li style="margin: 0;">Merchandising expertise</li>
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
				   
               @if( ( !empty($resume->facebook) ) || ( !empty($resume->twitter) ) || ( !empty($resume->linkedin) ) || ( !empty($resume->website) ) )
								<div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-SOCL editcontent " dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif" style="">
									 <div class="heading" style="margin-top:0px;padding:2px;letter-spacing:0;font-weight:bold;line-height:22px;margin-bottom:10px;padding-left:5px;">
										   <div class="sectiontitle" style="font-size:16px;" id="SECTIONNAME_SOCL">Social Links<span class="rename-section text-rename"></span> <span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
										</div>
									 <div class="social_links" style="padding-left:5px;padding-bottom:10px;">
                            @if( !empty($resume->facebook) )
                        <div class="field"><b>Facebook:</b>{{ $resume->facebook }}
                        </div>
                        @endif
                        @if( !empty($resume->twitter) )
                        <div class="field"><b>Twitter:</b>{{ $resume->twitter}}
                        </div>
                        @endif
                        @if( !empty($resume->linkedin) )
                        <div class="field"><b>LinkedIn:</b>{{ $resume->linkedin }}
                        </div>
                        @endif
                        @if( !empty($resume->website) )
                        <div class="field"><b>Website:</b>{{ $resume->website }}
                        </div>
                        @endif 
									</div>
								</div>
							@endif
						
               </div>
			   </div>
			   <div id="CONTAINER_0" class="right-box" style="width:{{isset($pdf_view)?'72%;margin-top:20px;':'365px'}};display:inline-block;float:right;letter-spacing:0.2px;background-color:#FFFFFF;color:#000;padding-right:0;">
            <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_NAME464b9aab-d77c-4f2a-994a-4f79aa785951" class="section 	main SECTION_NAME firstsection  " data-section-cd="NAME" style="font-size:16px;color:#fff;line-height:16px; padding-top:25px;padding-left:15px;">
                     <div class=" doc-item editcontent " dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                        <div class="">
                           <div class="">
						   <div class="name word-break" style="color:{{isset($resume->color)?$resume->color:'#dc3545'}};font-size:{{isset($resume->nameSize)?$resume->nameSize:'20px'}};line-height:35px;text-align:center;text-transform:uppercase">
                                       <span class="field" id="FIELD_FNAM">{{ $resume->first_name ?? 'Your'}}</span>
                                       <span class="field word-break" id="FIELD_LNAM">{{ $resume->last_name ?? 'Name'}}</span>
                            </div>
							<hr/ style="border: 0;border-top: 2px solid #000;margin-top: 0;margin-bottom: 0;">
                              <div class="resumeTitle" style="padding-top:10px;text-transform:uppercase;">{{$resume->profession ?? 'Designer'}}</div>
							  
							</div>
						   
						   </div>
                        </div>
                     </div>
                  </div>  
            <div class="sortableInner">
                  <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-SUMM left-side" >
                  <div class="document-tool sec-tool" id="editIcons" style="right:22px;"></div>
                  <div id="SECTION_SUMM879edb71-bdad-4ac5-a858-3bcc1c38ab71" class="section summary notdraggable SECTION_SUMM  noparagraph " style="padding-top:15px" data-section-cd="SUMM">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif">
					 <div class="heading" style="padding:2px;letter-spacing:0;font-weight:bold;line-height:15px;margin-bottom:10px">
                           <div class="sectiontitle" id="SECTIONNAME_CNTC" style="font-size:16px;">@if(isset($resume->summary)) {{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="aboutme" value="{{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else Profile @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletesummary')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span>
                              <!--<span style="width: 74%;float: right;border-bottom: 1px solid #000;height:13px!important"></span> -->
                           </div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_SUMM_0" class="paragraph PARAGRAPH_SUMM firstparagraph placeholder-text " style="margin-top:0">
				
                                 <div class="doc-item">
								 
                                    <div class="field singlecolumn" style="margin: 0;padding-left:14px;list-style-type: disc;" id="FIELD_FRFM">@if(isset($resume->summary) && $resume->summary)
										{!! $resume->summary->summary !!}
									   @else
										Highly organized and meticulous Administrative Assistant with experience in corporate office settings.Adept at preparing and maintaining files, greeting visitors and restocking supplies. Good communicator and planner with strong judgment and critical thinking abilities.											   
									   @endif</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EDUC" style="padding-top:15px;padding-left:15px">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_EDUCe38830c3-809a-48c9-a15b-57e04eb83e0e" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="EDUC" style="padding-top:15px;">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif">
                        <div class="heading" style="padding:2px;letter-spacing:0;font-weight:bold;line-height:15px;margin-bottom:10px">
                           <div class="sectiontitle" id="SECTIONNAME_EDUC" style="font-size:16px;">@if(isset($resume->resume_education_detail[0])) {{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="education" value="{{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EDUCATION @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteEducation')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span>
                              <!-- <span style="width: 56%;float: right;border-bottom: 1px solid #000;height: 13px;"></span> -->
                           </div>
                        </div>
                        <div class="" style="padding-left:2px;">
                           
						  @if(isset($resume->resume_education_detail) && $resume->resume_education_detail) 
							@foreach($resume->resume_education_detail as $education)
						 <div class="">
							 <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text " style="{{$loop->iteration > 1 ?'padding-top:5px;':''}}">
								<div class="doc-item" style="padding-right:8px;width: 60%;display: inline-block;vertical-align:top;">
								
									  <!--<span style="width: 10px;display: inline-block;vertical-align:{{isset($pdf_view)?'middle;margin-top:9px !important;':'top;padding-top: 2px;'}}">	<img src="{{ url('templates_images/scvt9/red-mark.png') }}" style="{{isset($pdf_view)?'width:10px;':''}}" /> </span>-->
                             <span class="degree" id="FIELD_DGRE" style="font-size:12px;font-weight:bold;padding-left:0px;width: {{isset($pdf_view)?'100%;':'100%;'}};display: inline-block;">{!!  $education->degree !!}</span>
									  <span class="joblocation jobcity txtBold" style="font-style:italic;font-weight:bold;" id="FIELD_SCIT">{{ $education->school_name }}&nbsp;|&nbsp; {{$education->school_location }}</span>
	
                             </div>
								   <div class="singlecolumn" style="width: 38%;display: inline-block;vertical-align: top;text-align:right">
									  <div class="paddedline date-content">
									   <div class="paddedline txtItl" >
										 <span class="companyname" id="FIELD_SCHO" style="font-weight: bold;">{{ date('M, Y', strtotime($education->graduation_start_date)) }}-{{ $education->current == '1' ? 'Current' : date('M, Y', strtotime($education->graduation_end_date)) }}</span><span></span>
										 
									  </div>
										 <span class="jobdates" id="FIELD_GRST" format="%Y-%m"></span>
										 <span class="jobdates" id="FIELD_GRED" format="%Y-%m"></span>
									  </div>
									  <span class="paddedline degreeGap txtBold" style="font-weight:bold;font-size:14px;magin-bottom:4px;" dependency="DGRE|STUY">
									  <span class="programline" id="FIELD_STUY"></span>
									  </span>
									 
									  
								   </div>
                           <span class="field" id="FIELD_FRFM">
									  {!! $education->description !!}
									  </span>
							 </div>
							</div>
							@endforeach
						  @else
							 <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text " style="margin-top:0!important">
								<div class="doc-item">
								   <div class="singlecolumn">
									  <div class="paddedline date-content">
										 <span class="jobdates" id="FIELD_GRST" format="%Y-%m"></span>
										 <span class="jobdates" id="FIELD_GRED" format="%Y-%m"></span>
									  </div>
									  <span class="paddedline degreeGap txtBold" style="font-weight:bold;font-szie:14px;margin-bottom:4px;">
									  <span class="degree" id="FIELD_DGRE" style="font-szie:14px;">Bachelor of Arts</span>
									  <span class="programline" id="FIELD_STUY"></span>
									  </span>
									  <div class="paddedline txtItl">
										 <span class="companyname" id="FIELD_SCHO">San Jose State University</span><span dependency="SCHO+SSTA|SCIT"> - </span>
										 <span class="joblocation jobcity" style="font-style:italic" id="FIELD_SCIT">San Jose State University</span><span dependency="SCIT+SSTA">, </span>
										 <span class="joblocation jobstate" style="font-style:italic" id="FIELD_SSTA">CA</span>
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
			   <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EXPR" style="padding-left:10px !important">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_EXPR06fafd67-c5ae-45e8-b4a1-ed0f75d06194" class="section experience SECTION_EXPR  noparagraph multi-para" style="padding-top:20px;" data-section-cd="EXPR">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif">
                        <div class="heading" style="padding:2px;letter-spacing:0;font-weight:bold;line-height:15px;margin-bottom:10px">
                           <div class="sectiontitle" id="SECTIONNAME_EXPR" style="font-size:16px;">@if(isset($resume->resume_work_detail[0])) {{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'PROFESSIONAL EXPERIENCE'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="workdetail" value="{{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'PROFESSIONAL EXPERIENCE'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else PROFESSIONAL EXPERIENCE @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('delete-workdetail')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span>
                             <!-- <span style="width: 56%;float: right;border-bottom: 1px solid #000;height: 13px;"></span> -->
                           </div>
                        </div>
                        <div class="">
                           <div class="" style="padding-left:2px;">
						  @if(isset($resume->resume_work_detail) && $resume->resume_work_detail)
							@foreach($resume->resume_work_detail as $workhistory)
                              <div id="PARAGRAPH_EXPR_0" class="paragraph PARAGRAPH_EXPR firstparagraph placeholder-text " style="{{$loop->iteration > 1 ?'padding-top:10px;':''}}">
                                 <div class="doc-item">
                                    <!--<span class="fa-stack fa-lg sectiontitle-li"  style="font-size: 16px;color:#000;">
											  <img src="{{url('fonts/dot.png')}}" style="display: inline-block;vertical-align:middle;margin-top:4px;margin-bottom:6px;"/>
											</span>-->
									
                                       </span>
									<div class="singlecolumn" style="padding-left:0px;width:60%;display: inline-block;vertical-align:top;">
									<!--<span style="width: 10px;display: inline-block;vertical-align:{{isset($pdf_view)?'middle;margin-top:9px !important;':'top;padding-top: 2px;'}}">	<img src="{{ url('templates_images/scvt9/red-mark.png')}}"/> </span>-->
									<span class="jobtitle txtBold" style="font-weight:bold;font-size:12px;padding-left:0px;width: {{isset($pdf_view)?'100%;':'100%;'}};display: inline-block;" id="FIELD_JTIT">{{  $workhistory->job_title  }}</span>
									<span class="paddedline locationGap txtItl" style="display:block;font-style:italic;font-weight:bold;" dependency="COMP|JSTA|JCIT">
										   <span class="companyname" id="FIELD_COMP">{{  $workhistory->employer  }},</span>
										  
										   <span dependency="JCIT+JSTA"></span>
										   <span class="jobstate" id="FIELD_JSTA">{{  $workhistory->state  }},</span>
										 <!--  <span dependency="COMP+JCIT|JSTA">, </span>-->
										   <span class="jobcity" id="FIELD_JCIT">{{  $workhistory->country  }}</span>
                                       </span>
                           </div>
									 <div style="/* padding-left:20px; */width: 38%;display: inline-block;vertical-align: top;text-align:right">
                                       <div class="paddedline date-content" dependency="JSTD|EDDT" style="position:relative;font-weight:700;padding-left:10px;">
                                          <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">{{ date('M, Y', strtotime($workhistory->start_date)) }}</span>
										  <span dependency="JSTD+EDDT"> - </span>
										  <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">{{ $workhistory->is_current == '1' ? 'Current' : date('M, Y', strtotime($workhistory->end_date)) }}</span>
										  
                                       </div>
                                       <span class="paddedline" style="display:block;" dependency="JTIT">
                                       <span class="jobtitle txtBold" style="font-weight:bold;font-size:14px;" id="FIELD_JTIT"> </span>
                                       </span>
									   
                                       <div style="padding-left:10px;">
                                       
									   </div>
									   </div>
                              <div class="jobline" style="list-style-type:disc;padding-right:5px;" id="FIELD_JDES">
                                          {!! $workhistory->work_history !!}
                                       </div>
                                 </div>
                              </div>
							@endforeach
						  @else
                              <div id="PARAGRAPH_EXPR_-1" class="paragraph PARAGRAPH_EXPR placeholder-text " style="margin-bottom:0">
                                 <div class=" doc-item">
                                    <div class="singlecolumn">
                                       <div class="paddedline date-content" dependency="JSTD|EDDT">
                                          <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">06/2013</span><span dependency="JSTD+EDDT"> - </span><span class="jobdates" id="FIELD_EDDT" format="%Y-%m">03/2015</span>
                                       </div>
                                       <span class="paddedline" dependency="JTIT">
                                       <span class="jobtitle txtBold" style="font-weight:bold;font-size:14px;" id="FIELD_JTIT">Sales Associate</span>
                                       </span>
                                       <span class="paddedline locationGap txtItl" style="margin-top:4px;" dependency="COMP|JSTA|JCIT">
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
                              <div id="PARAGRAPH_EXPR_-2" class="paragraph PARAGRAPH_EXPR placeholder-text " style="margin-bottom:0">
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
					  <div class="sortable-item section-container SortableItem-sibling  data-SEC">
						 <div id="SECTION_EDUC411a31aa-7167-4080-837f-be30a3388e31" class="section education SECTION_EDUC  noparagraph multi-para" style="padding-top:15px;padding-left:11px;" data-section-cd="SEC">
							<div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif">
							   <div class="heading" style="padding:2px;letter-spacing:0;font-weight:bold;line-height:15px;margin-bottom:10px">
								  <div class="sectiontitle" id="SECTIONNAME_SEC" style="margin-left:0px;margin-top:10px;font-size:16px;">@if(isset($resume->extraSection->title)) {{$resume->extraSection->title}} <span class="rename-section text-rename text-primary">Rename</span>
                            <span class="titleupdate" style="display:none;"><input type="text" data-link="extrasection" value="{{$resume->extraSection->title}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else  @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletsection')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span>
                            <!--<span style="width: 56%;float: right;border-bottom: 1px solid #000;height: 13px;"></span>-->
                           </div>
							   </div>
							   <div class="" style="padding-left: 2px;">
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