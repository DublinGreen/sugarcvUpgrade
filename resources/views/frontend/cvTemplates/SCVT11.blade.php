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
		   body{text-align:left;font-feature-settings:"liga" 0;-moz-font-feature-settings:"liga" off}
		   #document.skn-srz1 ol,#document.skn-srz1 ul{list-style:none}
		   #document.skn-srz1 table{border-collapse:collapse;border-spacing:0;font-size:inherit;color:inherit;width:100%}
		   /*START content disc style for LI*/
		   #document.skn-srz1 ul,#document.skn-srz1 li{margin:0;padding:0;list-style-type:disc}
		   #document.skn-srz1 ul li{margin:0 0 0 16px;padding:0}
		   @-moz-document url-prefix() {#document.skn-srz1 ul li{margin:0 0 0 12px;padding:0 0 0 3px}}
		   /*END content disc style for LI*/
		   /*common css*/
		   #document.skn-srz1 .txtBold{font-weight:700}
		   #document.skn-srz1 .paddedline{display:block}
		   #document.skn-srz1 .mt5{margin-top:2px}
		   #document.skn-srz1 .txtRight{text-align:right}
		   #document.skn-srz1 table.skills,#document.skn-srz1 .table_wrapper{margin-top:0;width:100%;word-break:break-all}
		   #document.skn-srz1 table.skills th,#document.skn-srz1 table.skills td{text-align:center;width:20%}
		   #document.skn-srz1 table.skills .skillname,#document.skn-srz1 table.skills .skillrating{text-align:left;width:35%}
		   #document.skn-srz1 table.skills .skillrating{width:20%}
		   #document.skn-srz1 table.skills .skillyears,#document.skn-srz1 table.skills .skilllast{width:19%}
		   #document.skn-srz1 table.skills .pad1{width:5%}
		   #document.skn-srz1 table.skills .pad2,#document.skn-srz1 table.skills .pad3{width:1%}
		   #document.skn-srz1{color:#343434;font-variant-ligatures:none;line-height:16px;min-height:792px;{{isset($pdf_view)?'':'box-sizing:border-box;'}} }
		   #document.skn-srz1 .name{font-weight:700;padding:0;position:relative;margin:0 4px;text-align:center;word-wrap:break-word;text-transform:uppercase;}
		   #document.skn-srz1 .address .singlecolumn{margin-left:0!important}
		   #document.skn-srz1 .heading{font-weight:700;line-height:15px;}
		   #document.skn-srz1 .sectiontitle{word-break:break-word;text-transform:uppercase;}
		   #document.skn-srz1 .degreeGap{margin-bottom:4px}
		   #document.skn-srz1 .locationGap{margin-top:4px}
		   #document.skn-srz1 .firstsection{padding-top:0!important}
		   #document.skn-srz1 .section:empty{display:none}
		   /*Left Box */
		   #document.skn-srz1 .left-box{background:#0000;display:{{isset($pdf_view)?'':'table-cell'}};padding:15px;{{isset($pdf_view)?'':'box-sizing:initial;'}}}
		   #document.skn-srz1 .left-box .shape{content:"",position:absolute;border-left:{{isset($pdf_view)?'109px':'74px'}} solid transparent;border-right:{{isset($pdf_view)?'109px':'80px'}} solid transparent;border-top:{{isset($pdf_view)?'67px':'40px'}} solid {{isset($resume->backgroundColor)? $resume->backgroundColor:'#d3d3d3'}};top:{{isset($pdf_view)?'-55':'-55px'}};left:{{isset($pdf_view)?'':'100px'}};}
		   #document.skn-srz1 .left-box .section{position:relative;color:#000}
		   #document.skn-srz1 .left-box .heading{line-height:1.5;position:relative;text-align:center}
		   #document.skn-srz1 .left-box .heading:before{content:'';position:absolute;left:0;top:0;height:100%;width:100%;filter:brightness(0.8)}
		   #document.skn-srz1 .left-box .sectiontitle{padding:3px 0;text-align:center;position:relative}
		   #document.skn-srz1 .left-box .paragraph .singlecolumn{text-align:center}
		   #document.skn-srz1 .left-box .SECTION_CNTC{padding-top:20px!important}
		   #document.skn-srz1 .parentContainer{border-collapse:collapse;display:{{isset($pdf_view)?'table-row':'table'}};min-height:inherit;table-layout:fixed;width:100%}
		   /*Right Box */
		   #document.skn-srz1 .right-box{display:{{isset($pdf_view)?'table-cell':'table-cell'}};letter-spacing:.2px;padding:15px 15px 15px 10px;vertical-align:top}
		   #document.skn-srz1 .right-box .section:first-child{padding-top:0}
		   #document.skn-srz1 .right-box .heading{letter-spacing:0;padding:5px 0}
		   /* #document.skn-srz1 .right-box .sectiontitle{color:#002e58} */
		   #document.skn-srz1 .right-box .paddedline.date-content{position:absolute;margin-left:0;width:125px}
		   #document.skn-srz1 .paragraph .singlecolumn{position:relative}
		   #document.skn-srz1 .right-box .summary .paragraph .singlecolumn{margin-left:0}
		   #document.skn-srz1 .education .joblocation,.txtItl{font-style:italic}
		   /* Issues fix for builder page */
		   #document.skn-srz1 > div{min-height:inherit}
		   #displayResume #document.skn-srz1.document{min-height:792px}
		   #document.skn-srz1 .left-box .active *{color:#343434}
		   /* Only for firefox */
		   @-moz-document url-prefix() {#document.skn-srz1 .parentContainer{height:1px}}
		   #document.skn-srz1 .word-break{word-wrap:break-word}
		   #document.skn-srz1 .left-box .outer-square,#document.skn-srz1 right-box .outer-square,#document.skn-srz1 .left-box .inner-square,#document.skn-srz1 .right-box .inner-square{height:7px;position:relative}
		   #document.skn-srz1 .left-box .inner-square{background:#fff}
		   #document.skn-srz1 .right-box .outer-square{background:#d6d6d6}
		   #document.skn-srz1 .right-box .inner-square{background:#003D73;filter:brightness(.8)}
		   /* For dates fix */
		   #document.skn-srz1 .right-box .hidedates{visibility:hidden;position:static!important;display:block;float:left}
		   #document.skn-srz1 .left-box .hidedates{display:none}
		   #document.skn-srz1 .paragraph.datespara:after{content:'';display:{{isset($pdf_view)?'':'table'}};clear:both}
		</style>
		<style type="text/css" id="dynamic" data-time="Wed Feb 12 2020 13:14:27 GMT+0530 (India Standard Time)">
		   #document.skn-srz1,#document.skn-srz1 table{line-height:{{ $resume->lineSpacing ?? '18px'}}}
		   #document.skn-srz1.pagesize{width:{{isset($pdf_view)?'100%;display:table;':'635px'}}}
		   #document.skn-srz1 .parentContainer{ {{isset($pdf_view)?'display:table-row;':''}} }
		   #document.skn-srz1.fontface{font-family:{{ $resume->fontFamily ?? 'Century Gothic'}}}
		   #document.skn-srz1.fontsize{font-size:{{ $resume->fontSize ?? '11px'}}}
		   #document.skn-srz1 .section{padding-top:20px}
		   #document.skn-srz1 .firstparagraph{margin-top:0!important}
		   #document.skn-srz1 .paragraph{margin-top:10px;}
		   #document.skn-srz1 .singlecolumn,#document.skn-srz1 .maincolumn{word-wrap:break-word}
		   #document.skn-srz1 .right-box .singlecolumn,#document.skn-srz1 .right-box .maincolumn{margin-left:0px}
		   #document.skn-srz1 table.skills td{padding-top:5px}
		   #document.skn-srz1 .jobtitle,#document.skn-srz1 .degree,#document.skn-srz1 .programline{font-size:14px;}
		   #document.skn-srz1 .name{font-size:{{isset($resume->nameSize)? $resume->nameSize:"25px"}};line-height:35px;color:{{isset($resume->color)? $resume->color:"#000000"}};}
		   #document.skn-srz1 .heading{line-height:22px}
		   #document.skn-srz1 .sectiontitle{font-size:16px;color:{{isset($resume->color)? $resume->color:"#000000"}} }
		   #document.skn-srz1 .resumeTitle{font-size:14px;font-weight:bold;padding-top:2px;text-align:center;color:{{isset($resume->color)? $resume->color:"#000000"}}}
		   /*Left Box*/
		   #document.skn-srz1 .left-box{width:{{isset($pdf_view)?'154px;display:table-cell':'154px'}};height:100px;}
		   #document.skn-srz1 .left-box .section{padding-top:20px}
		   #document.skn-srz1 .left-box .heading{line-height:22px}
		   #document.skn-srz1 .left-box .heading::before{}
		   #document.skn-srz1 .left-box .outer-square:before{background:#003D73;content:'';position:absolute;height:7px;width:{{isset($pdf_view)?'154px !important':'100%'}};filter:brightness(.8)}
		   /*Right Box*/
		   /* #document.skn-srz1 .right-box .paragraph .singlecolumn{margin-left:} */
			#document.skn-srz1 .right-box .paddedline.date-content{left:{{isset($pdf_view)?'72%':'280px'}} }
		   /* #document.skn-srz1 .right-box .sectiontitle{color:#000} */
		   #document.skn-srz1 .right-box .inner-square{background:#003D73}
		   
		   /* Issues fix for builder page */
		   #document.skn-srz1 .right-box .sortable-item{padding-top:0px}
		   #document.skn-srz1 .left-box > .sortable-item.active > .wrapper .heading:before{background:none}
		   #document.skn-srz1 .left-box .sortable-item.active .outer-square:before{background:#d6d6d6}
		   #document.skn-srz1 .left-box .sortable-item.active .inner-square{background:#003D73}
		   /* Issues fix for builder page: Phase 2 */
		   #document.skn-srz1._single-parent-drag > .wrapper-bg + div{position:relative;z-index:8}
		   #document.skn-srz1._single-parent-drag .outer-square:before{background:#d6d6d6;content:'';position:absolute;height:7px;width:100%;filter:brightness(0.8)}
		   #document.skn-srz1._single-parent-drag .inner-square{background:#003D73}
		   #document.skn-srz1._single-parent-drag .wrapper-bg + div .paragraph{margin-top:0}
		   #document.skn-srz1 .outer-square,#document.skn-srz1 .inner-square{height:7px;position:relative}
		   #document.skn-srz1 .parent-drag.active .wrapper,#document.skn-srz1 .sortable-item .sectiontitle{position:relative}
		   /* support for IE Browser */
		   @media screen and (min-width:0\0) {
		   #document.skn-srz1 .left-box{ {{isset($pdf_view)?'':'box-sizing:content-box;'}} }
		   #document.skn-srz1 .parentContainer{display:flex}
		   #document.skn-srz1 .right-box{width:calc(100% - 160px)}
		   #document.skn-srz1 .left-box,#document.skn-srz1 .right-box{background:none;display:inline;position:relative}
		   /*#document.skn-srz1 .left-box:before{content:'';background:#003d73;position:absolute;left:0;top:0;height:100%;width:100%;opacity:.9}*/
		   }
		   #document.skn-srz1 .imagespace{padding-left:10px;padding-top:8px;margin-top:15px;}
		   div#FIELD_SKC1 ul li {list-style: none !important;margin: 0 !important;}
      .skill_rate_1 { width: 15px;background-color: #686868;height: {{isset($pdf_view)?'5px':'4px'}};display: block;}
      .skill_rate_2 { width: 30px;background-color: #686868;height: {{isset($pdf_view)?'5px':'4px'}};display: block;}
      .skill_rate_3 { width: 45px;background-color: #686868;height: {{isset($pdf_view)?'5px':'4px'}};display: block;}
      .skill_rate_4 { width: 60px;background-color: #686868;height: {{isset($pdf_view)?'5px':'4px'}};display: block;}
      .skill_rate_5 { width: 75px;background-color: #686868;height: {{isset($pdf_view)?'5px':'4px'}};display: block;}

	  .scvt{
		  background-color:{{isset($resume->backgroundColor)? $resume->backgroundColor:'#d3d3d3'}};
	  }
	  @if( Request::segment(1) == 'final-resume' )
      .editcontent:hover .PARAGRAPH_EXPR{
        display:inline-block;
      }
	  @endif
	  #color{
		  padding-top:20px;
	  }
	  .rename-section{
		  display:none;
	  }
		</style>
	 </div>
	 <div id="document" class="document fontsize fontface vmargins hmargins pagesize skn-srz1 SRZ1 ZTY" style="{{isset($pdf_view)?'display:table !important;height:auto !important':'border:3px solid #808080;'}}">
		<div id="CONTAINER_PARENT_0" class="parentContainer" style="{{isset($pdf_view)?'display:table-row !important;':''}}">
		   <div id="CONTAINER_0" class="left-box" style="{{isset($pdf_view)?'display:table-cell !important;width:220px !important;text-align:center':''}}">
				<div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                  <div class="document-tool sec-tool" id="editIcons"></div>
                  <div id="SECTION_NAME464b9aab-d77c-4f2a-994a-4f79aa785951" class="section notdraggable SECTION_NAME firstsection  " data-section-cd="NAME">
                     <div class=" doc-item">
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_NAME_f7eda8ec-b653-4afd-af6e-42abfa260097" class="paragraph PARAGRAPH_NAME firstparagraph  ">
                                 <div>
                                    <div id="PARAGRAPH_NAME_f7eda8ec-b653-4afd-af6e-42abfa260097" class="paragraph PARAGRAPH_NAME firstparagraph  ">
									
								 <div class ="imagespace scvt" style="cursor:pointer" id="openImageUploader" title="{{Request::segment(1) == 'final-resume'?'Change Image':''}}">
									@if(isset($resume->image))
									<img src="{{ url('images/resumeImages/') }}/{{ $resume->image }}" / style="height:150px;width:135px;">  
									@else
									<img src="{{ url('asset_new/img/user/profile.png')}}" style="height:150px;width:135px;"/>  
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
		   
			  <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME scvt" >
				 <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
				 <div id="SECTION_NAME954512e9-24f2-4ea2-9979-ca9f2f25ab59" class="section notdraggable SECTION_NAME firstsection  " data-section-cd="NAME">
					<div class=" doc-item editcontent " dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
					   <div class="">
						  <div class="">
							 <div id="PARAGRAPH_NAME_3a9b9ad7-cb8d-4504-9153-35a7463e07ab" class="paragraph PARAGRAPH_NAME firstparagraph scvt">
								<div>
								   <div class="name word-break" style="border-bottom:2px solid #686868">
									  <span class="field" id="FIELD_FNAM">{{ $resume->first_name ?? 'Your'}}</span>
									  <span class="field word-break" id="FIELD_LNAM">{{ $resume->last_name ?? 'Name'}}</span>
									 
								   </div>
								   <div class="resumeTitle" id="FIELD_DCTL">{{ $resume->profession ?? 'Designer' }}</div>
								</div>
							 </div>
						  </div>
					   </div>
					</div>
				 </div>
			  </div>
			  <div class="sortableInner scvt" style="text-align:center;">
			  <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-CNTC" >
				 <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
				 <div id="SECTION_CNTCff3074d6-9b66-45f1-8ae0-8632d38def28" class="section SECTION_CNTC notdraggable   " data-section-cd="CNTC">
					<div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
					   <div class="heading">
						  <div class="sectiontitle" id="SECTIONNAME_CNTC">{{!empty($resume->contact_section_title)?$resume->contact_section_title:'CONTACT'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="contactsection" value="{{!empty($resume->contact_section_title)?$resume->contact_section_title:'Contact'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
					   </div>
					   <div class="">
						  <div class="">
							 <div id="PARAGRAPH_CNTC_a682e865-6d69-49a4-82ac-2e2306c70dc8" class="paragraph PARAGRAPH_CNTC firstparagraph  ">
								<div class="clearfix doc-item">
								   <div class="address">
									  <div class="singlecolumn">
										 
										 <div class="txtBold mt5">Phone </div>
										 <div dependency="HPHN">
											<span class="field" id="FIELD_HPHN">{{ $resume->phone ?? '916-948-7196' }}</span>
										 </div>
										 <div class="txtBold mt5" dependency="EMAI">E-mail </div>
										 <div dependency="EMAI" class="word-break">
											<span class="field" id="FIELD_EMAI">{{ $resume->email ?? 'example@example.com' }}</span>
										 </div>
										 <div dependency="STRT|CITY|STAT|ZIPC">
											<div class="txtBold">Address </div>
											<div class="field" id="FIELD_STRT">{{ $resume->street ?? 'Woodland Terrace'}}</div>
											<span class="field" id="FIELD_CITY">{{ $resume->city ?? 'Sacramento'}}</span><span>,</span>
											<span class="field" id="FIELD_STAT">{{ $resume->state ?? 'CA' }}</span><span >, </span>
											<span class="field" id="FIELD_ZIPC">{{ $resume->state ?? '95814'}}</span>
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
			  <div id="color" data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-BIOD" >
			  		<div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
			  			<div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_HILT" >{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO DATA'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="biosection" value="{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
							<div class="biodata" style="text-align:center;">	
							<div dependency="ORIGINSTATE">
								<div><b>State of Origin:</b></div>
								<div class="field" id="FIELD_ORIGINSTATE">{{ $resume->originState ?? 'Lagos' }}</div>
							</div>
							
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
						</div>
					</div>		
				</div>					
								
			  <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-HILT">
				 <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
				 <div id="SECTION_HILT7c960cdb-6ffb-40cc-9913-4334fda99e41" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
					<div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif">
					   <div class="heading">
						  <div class="sectiontitle" id="SECTIONNAME_HILT">@if(isset($resume->skills)) {{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}} <span class="rename-section text-rename text-primary"> RENAME </span>
                           <span class="titleupdate" style="display:none;"><input type="text" value="{{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}}" data-link="skill" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="rename-section text-rename"> </span>@else SKILLS @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteskills')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
					   </div>
					   <div class="">
						  <div class="">
							 <div id="PARAGRAPH_HILT_0"  class="paragraph PARAGRAPH_HILT firstparagraph placeholder-text ">
								<div class="clearfix doc-item" >
								   <div class="singlecolumn maincolumn">
									  <span class="paddedline" id="FIELD_SKC1" >
									  <ul >
                                          @if(isset($resume->skills) && $resume->skills)
												         @if($resume->skills->skills != "")
                                                   @php
                                                      $skills = json_decode($resume->skills->skills);
                                                   @endphp
                                                   @if(!empty($skills[0]->skill))
                                                   @foreach($skills as $skill)
                                                      <li style="margin: 0;list-style: none;text-align:center;"><span class="firstspan" >{{ $skill->skill }}<br> </span><div style="{{isset($pdf_view)?'margin-left: 65px;':''}}"><span class="secondspan" style="background-color: #fff;width: 75px;height: 5px; margin-top: 6px;border: 1px solid #000;display:inline-block;"><span class="skill_rate_{{ $skill->rating }}"></span></span></div></li>
                                                   @endforeach
                                                   @else
                                                   <li style="margin: 0;list-style: none;">Guest services</li>
                                                         <li style="margin: 0;list-style: none;">Inventory control procedures</li>
                                                         <li style="margin: 0;list-style: none;">Merchandising expertise</li>
                                                   @endif
                                                @endif
                                             @else
                                                         <li style="margin: 0;list-style: none;">Guest services</li>
                                                         <li style="margin: 0;list-style: none;">Inventory control procedures</li>
                                                         <li style="margin: 0;list-style: none;">Merchandising expertise</li>
                                             @endif
                                          </ul>
									  </span>
									  <span class="paddedline txtRight" id="FIELD_RATT"></span>
								   </div>
								</div>
							 </div>
						  </div>
					   </div>
					</div>
				 </div>
			  </div>
			       
			  @if( ( !empty($resume->facebook) ) || ( !empty($resume->twitter)) || ( !empty($resume->linkedin) ) || ( !empty($resume->website) ) )
						<div class="section-container doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif"> 
							<div class="heading" style="margin-top:20px;">
							   <div class="sectiontitle" id="SECTIONNAME_SOCL">Social Links<span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
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
				
		   </div>
		   <div class="scvt11 shape"></div>
		</div>
		
		   <div id="CONTAINER_1" class="right-box" style="{{isset($pdf_view)?'display:table-cell !important;':''}}">
		   <div class="sortableInner">
			  <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-SUMM">
				 <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
				 <div id="SECTION_SUMMacef1a59-b1ef-48b1-a811-091c3f39a64b" class="section summary notdraggable SECTION_SUMM  noparagraph " data-section-cd="SUMM">
					<div class=" doc-item  editcontent " dhref="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif">
						<div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_CNTC" style="{{isset($pdf_view)?'margin-top:5px;':''}}"">@if(isset($resume->summary)) {{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Personal Introduction'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="aboutme" value="{{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Personal Introduction'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else Personal Introduction @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletesummary')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
					   <div class="">
						  <div class="">
							 <div id="PARAGRAPH_SUMM_0" class="paragraph PARAGRAPH_SUMM firstparagraph placeholder-text ">
								<div class="clearfix doc-item">
								   <div class="field singlecolumn" id="FIELD_FRFM">
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
			  
			  <div class="sortable-item section-container SortableItem-sibling  data-EDUC" style="">
				 <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
				 <div id="SECTION_EDUC411a31aa-7167-4080-837f-be30a3388e31" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="EDUC">
					<div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif">
					   <div class="heading">
						  <div class="sectiontitle" id="SECTIONNAME_EDUC" style="padding-left:0px">@if(isset($resume->resume_education_detail[0])) {{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="education" value="{{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EDUCATION @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteEducation')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
					   </div>
					   <div class="">
						  <div class="">
						  @if(isset($resume->resume_education_detail) && $resume->resume_education_detail)
							@foreach($resume->resume_education_detail as $education)
							 <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text ">
								<div class="clearfix doc-item">
								   <div class="singlecolumn">
									  <div class="paddedline date-content">
										 <span class="jobdates" id="FIELD_GRST" format="%Y-%m">{{ date('M, Y', strtotime($education->graduation_start_date)) }} - </span>
										 <span class="jobdates" id="FIELD_GRED" format="%Y-%m">{{ $education->current == '1' ? 'Current' : date('M, Y', strtotime($education->graduation_end_date)) }}</span>
									  </div>
									  <span class="paddedline degreeGap txtBold" dependency="DGRE|STUY">
									  <span class="degree" id="FIELD_DGRE">{{ $education->degree }}</span>
									  <span class="programline" id="FIELD_STUY"></span>
									  </span>
									  <div class="paddedline txtItl" >
										 <span class="companyname" id="FIELD_SCHO">{{ $education->school_name }}</span><span> - </span>
										 <span class="joblocation jobcity" id="FIELD_SCIT">{{ $education->school_location }}</span><span></span>
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
								<div class="clearfix doc-item">
								   <div class="singlecolumn">
									  <div class="paddedline date-content">
										 <span class="jobdates" id="FIELD_GRST" format="%Y-%m">06/2013 -</span>
										 <span class="jobdates" id="FIELD_GRED" format="%Y-%m">06/2017</span>
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
			  <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EXPR">
                  <div class="document-tool sec-tool" id="editIcons" style="right:-22px;"></div>
                  <div id="SECTION_EXPR06fafd67-c5ae-45e8-b4a1-ed0f75d06194" class="section experience SECTION_EXPR  noparagraph multi-para" data-section-cd="EXPR">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_EXPR">@if(isset($resume->resume_work_detail[0])) {{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'PROFESSIONAL EXPERIENCE'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="workdetail" value="{{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'PROFESSIONAL EXPERIENCE'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else PROFESSIONAL EXPERIENCE @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('delete-workdetail')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
						  @if(isset($resume->resume_work_detail) && $resume->resume_work_detail)
							@foreach($resume->resume_work_detail as $workhistory)
                              <div id="PARAGRAPH_EXPR_0" class="paragraph PARAGRAPH_EXPR firstparagraph placeholder-text ">
                                 <div class="clearfix doc-item">
                                    <!-- <span class="fa-stack fa-lg sectiontitle-li">
											  <i class="fa fa-circle fa-stack-1x" style="color:#000"></i>
											  <i class="fa   fa-stack-1x fa-inverse"></i>
											</span> 
											<span class="jobtitle txtBold" id="FIELD_JTIT">{{  $workhistory->job_title  }} </span>-->
									
									<div class="singlecolumn" style="">
									 <div style="padding-left:0px">
									
                                       <div class="paddedline date-content" dependency="JSTD|EDDT">
                                          <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">{{ date('M, Y', strtotime($workhistory->start_date)) }}</span>
										  <span dependency="JSTD+EDDT"> - </span>
										  <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">{{ $workhistory->is_current == '1' ? 'Current' : date('M, Y', strtotime($workhistory->end_date)) }}</span>
                                       </div>
                                       <span class="paddedline" dependency="JTIT">
									   <span class="jobtitle txtBold" id="FIELD_JTIT">{{  $workhistory->job_title  }} </span>
                                       
                                       </span>
									   <div>
									   <span class="jobtitle txtBold" id="FIELD_JTIT">{{  $workhistory->employer  }}</span>
									   </div>
                                       <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT">
										   <span class="companyname" id="FIELD_COMP"></span>
										   
										   <span dependency="JCIT+JSTA"></span>
										   <span class="jobstate" id="FIELD_JSTA">{{  $workhistory->state  }}</span>
										   <span dependency="COMP+JCIT|JSTA">, </span>
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
                              <div id="PARAGRAPH_EXPR_-1" class="paragraph PARAGRAPH_EXPR placeholder-text " style="border-bottom:1px solid #000">
                                 <div class="clearfix doc-item">
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
			  @if(isset($resume->extraSection) && $resume->extraSection && $resume->extraSection->isResumeUpload == '0')
			  <div class="sortable-item section-container SortableItem-sibling  data-SEC">
				 <div id="SECTION_EDUC411a31aa-7167-4080-837f-be30a3388e31" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="SEC" style="padding-top:20px;">
					<div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif">
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
	 </div>
  </div>
  {!! @$highlighter !!}
</div>