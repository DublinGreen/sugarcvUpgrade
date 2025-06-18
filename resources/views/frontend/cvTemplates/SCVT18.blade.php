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
            #document.skn-trz7 .name{color:#002e58;font-weight:bold;padding:0 0 6px 0;text-align:left;position:relative;word-wrap:break-word}
            #document.skn-trz7 .address .singlecolumn{margin-left:0!important;color:#4267B2;}
            #document.skn-trz7 .resumeTitle{color:#002e58;font-style:arial;font-weight:400}
            /* Heading */
            #document.skn-trz7 .heading{padding:0 0 5px;letter-spacing:0;font-weight:bold;line-height:15px;text-transform:uppercase}
            #document.skn-trz7 .sectiontitle{color:{{isset($resume->color)? $resume->color:"#002e58"}};word-wrap:break-word}
            #document.skn-trz7 .degreeGap{margin-bottom:4px}
            #document.skn-trz7 .locationGap{margin-top:4px}
            #document.skn-trz7 .firstparagraph{margin-top:0!important}
            /* section */
            #document.skn-trz7 .firstsection{padding-top:0!important}
            #document.skn-trz7 .section:empty {display:none}
            #document.skn-trz7 .education .joblocation{font-style:italic}
            /* style for top section container */
            #document.skn-trz7 .topsection > div{padding-bottom:0px}
            /* style for left and right box */
            #document.skn-trz7 .parentContainer{display:table;width:100%;min-height:inherit;table-layout:fixed;border-collapse:collapse}
            #document.skn-trz7 .left-box,#document.skn-trz7 .right-box{padding-left:{{isset($pdf_view)?'10px;padding-top:10px':'20px'}} }
            #document.skn-trz7 .left-box{padding-left:0;padding-right:15px}
            #document.skn-trz7 .left-box{box-sizing:initial;letter-spacing:0.2px}
            #document.skn-trz7 .right-box .section:first-child,#document.skn-trz7 .left-box .section:first-child{padding-top:0px!important}
            #document.skn-trz7 .right-box .paddedline.date-content{position:absolute;font-weight:700;margin-left:-130px;width:122px}
            #document.skn-trz7 .paragraph{position:relative}
            #document.skn-trz7 .summary .singlecolumn{margin-left:0;text-align:justify;}
            #document.skn-trz7 .right-box{letter-spacing:0.2px;width:68%;float:right;}
            #document.skn-trz7 .summary.section{padding-top:15px}
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
            #document.skn-trz7 .ratingRow .ratingText:last-child{width:100%}
            /* For dates fix */
            #document.skn-trz7 .right-box .hidedates{visibility:hidden;position:static!important;display:block;float:left}
            #document.skn-trz7 .left-box .hidedates{display:none}
            #document.skn-trz7 .paragraph.datespara:after{content:'';display:table;clear:both}
            #document.skn-trz7 .topsection{width:100%;height:{{isset($pdf_view)?'170px':'160px'}};background-color:#A9A9A9 !important}
            #document.skn-trz7 .topsection .left-box {float:left;padding-bottom: 0;padding-left: 10px;margin-left:12px;padding-right: 0;width:32%;background-color:#d3d3d3;height:{{isset($pdf_view)?'150px':'150px'}};margin-bottom:10px;}
            #document.skn-trz7 .topsection .middle-box {float: left;padding-bottom:0;padding-left: 5px;margin-left:{{isset($pdf_view)?'20px':'12px'}};padding-right:10px;width:34%;height:{{isset($pdf_view)?'160px':'150px'}};text-align:right;background-color:#d3d3d3;	margin-bottom:10px;}
            #document.skn-trz7 .topsection .side-box {padding-bottom: 0;padding-left: 0;width:26%;height:{{isset($pdf_view)?'160px':'160px'}};margin-left:12px;text-align:left;float:right;}
            div#CONTAINER_3 { padding-top: 36px;}
            /*#document.skn-trz7 .resumeTitle:after { content: '';display: block;border-bottom: 4px solid #000;width: 30px;padding-top: 20px;}*/
            #document .topsection .headimg{background:red; width: 100%; padding-left:0px !important; padding-right:0px !important; margin-top:30px}
            #document .parentContainer .left-side{background-color:#d6d6d6; padding-left:20px !important}
            #document .parentContainer .right-side{padding-right:20px}
            ul.ba {    list-style-type: none;}
            #document.skn-trz7 .main{font-size:16px;color:#002e58;line-height:16px; padding-top:25px;color:#fff}
            #document.skn-trz7 .sectiontitle-li{font-size:16px;color:#000}
         </style>
         <style type="text/css" id="dynamic" data-time="Tue May 26 2020 17:35:58 GMT+0530 (India Standard Time)">
            #document.skn-trz7,#document.skn-trz7 table{line-height:{{isset($resume->lineSpacing)? $resume->lineSpacing:"18px"}}}
            #document.skn-trz7.pagesize{width:{{isset($pdf_view)?'100%':'612px'}};}
            #document.skn-trz7.fontsize{font-size:{{isset($resume->fontSize)? $resume->fontSize:"11px"}}}
            #document.skn-trz7.fontface{font-family:{{isset($resume->fontFamily)? $resume->fontFamily:"Arial"}}}
            #document.skn-trz7.vmargins{padding-top:-5px;padding-bottom:10px}
            #document.skn-trz7.hmargins{padding-left:20px;padding-right:20px}
            #document.skn-trz7 .section{padding-top:20px}
            #document.skn-trz7 .left-box .section:after{padding-bottom:10px}
            #document.skn-trz7 .paragraph{margin-top:10px}
            #document.skn-trz7 .singlecolumn,#document.skn-trz7 .maincolumn{word-wrap:break-word}
            #document.skn-trz7 .right-box .singlecolumn,#document.skn-trz7 .right-box .maincolumn{margin-left:0px}
            #document.skn-trz7 table.skills td{padding-top:5px}
            #document.skn-trz7 .jobtitle, #document.skn-trz7 .degree, #document.skn-trz7 .programline{font-size:14px}
            #document.skn-trz7 .name{color:{{isset($resume->color)? $resume->color:"#4267B2"}};font-size:{{isset($resume->nameSize)? $resume->nameSize:"28px"}};line-height:40px;margin-top:30px;}
            #document.skn-trz7 .heading{line-height:22px}
            #document.skn-trz7 .sectiontitle{font-size:16px;color:{{isset($resume->color)? $resume->color:"#002e58"}}}
            #document.skn-trz7 .left-box{width:188px;}
            #document.skn-trz7 .right-box .paragraph .singlecolumn{margin-left:130px}
            #document.skn-trz7 svg{stroke:#002e58}
            #document.skn-trz7 .resumeTitle{font-size:16px;color:{{isset($resume->color)? $resume->color:"#002e58"}};line-height:16px;font-style:arial;font-weight:bold;}
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
            #document .topsection .headimg{background:red; width: 100%; padding-left:0px !important; padding-right:0px !important; margin-top:30px}
            #document .parentContainer .left-side{background-color:#d6d6d6; padding-left:20px !important}
            #document .parentContainer .right-side{padding-right:20px}
            ul.ba {    list-style-type: none;}
            #document.skn-trz7 .main{font-size:16px;color:#002e58;line-height:16px; padding-top:25px;color:#fff}
            #document.skn-trz7 .imagespace{float:right;padding-right:{{isset($pdf_view)?'12px':'6px'}};padding-bottom:20px}
            #document.skn-trz7 .sectiontitle-li{font-size:16px;color:#000}
            .rename-section{
               display:none;
            }
            .scvt{
		      background-color:{{isset($resume->backgroundColor)? $resume->backgroundColor:'#4267B2'}};
         }
         </style>
      </div>
      <!---------header---------------->
      <!---div id="document" class="document fontsize fontface  pagesize skn-trz7 TRZ7  ZTY" style="min-height: 102px !important;">
         </div-->
      <!---------header---------------->
      <div id="document" class="document fontsize fontface vmargins  pagesize skn-trz7 TRZ7  ZTY" >
         <div class="topsection">
            <div class="left-box editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
               <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_NAME464b9aab-d77c-4f2a-994a-4f79aa785951" class="section notdraggable SECTION_NAME firstsection  " data-section-cd="NAME">
                     <div class=" doc-item">
                        <div class="">
                           <div class="">
                              <div class="name word-break">
                                 <span class="field" id="FIELD_FNAM">{{ $resume->first_name or 'Your'}}</span>
                                 <span class="field word-break" id="FIELD_LNAM">{{ $resume->last_name or 'Name'}}</span>
                              </div>
                              <div class="resumeTitle " id="FIELD_DCTL">{{ $resume->profession or 'Designer' }}</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="middle-box editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
               <div data-react-beautiful-dnd-draggable="1" class="section sortable-item section-container SortableItem-sibling  data-CNTC">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                  <div id="SECTION_CNTC4b959b3f-7a77-4285-9b17-82823b7d38a8" class="section SECTION_CNTC notdraggable   " data-section-cd="CNTC">
                     <div class=" doc-item">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_CNTC" style="font-size:12px;text-transform:capitalize;color:{{isset($resume->color)? $resume->color:'#4267B2'}}">{{!empty($resume->contact_section_title)?$resume->contact_section_title:'CONTACT'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="contactsection" value="{{!empty($resume->contact_section_title)?$resume->contact_section_title:'Contact'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> </span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_CNTC_a92b0367-e01a-45b4-8ecb-220a75697aa3" class="paragraph PARAGRAPH_CNTC firstparagraph  ">
                                 <div class="clearfix doc-item">
                                    <div class="address">
                                       <div class="singlecolumn">
                                          <div dependency="HPHN">
                                             <span class="field" id="FIELD_HPHN">{{ $resume->phone or '916-948-7196' }}</span>
                                          </div>
                                          <div dependency="EMAI" class="word-break">
                                             <span class="field" id="FIELD_EMAI">{{ $resume->email or 'example@gmail.com' }}</span>
                                          </div>
                                          <div dependency="STRT|CITY|STAT|ZIPC">
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
            </div>
            <div class="side-box">
               <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                  <div class="document-tool sec-tool" id="editIcons"></div>
                  <div id="SECTION_NAME464b9aab-d77c-4f2a-994a-4f79aa785951" class="section notdraggable SECTION_NAME firstsection  " data-section-cd="NAME">
                     <div class=" doc-item">
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_NAME_f7eda8ec-b653-4afd-af6e-42abfa260097" class="paragraph PARAGRAPH_NAME firstparagraph  ">
                                 <div>
                                    <div id="PARAGRAPH_NAME_f7eda8ec-b653-4afd-af6e-42abfa260097" class="paragraph PARAGRAPH_NAME firstparagraph  ">
                                       <div class ="imagespace" style="cursor:pointer" id="openImageUploader" title="Change Image">
                                          @if(isset($resume->image))
                                          <img src="{{ url('images/resumeImages/') }}/{{ $resume->image }}" / style="height:{{isset($pdf_view)?'160px':'155px'}};width:95%;padding-bottom:5px">
                                          @else
                                          <img src="{{ url('asset_new/img/user/profile.png')}}" style="height:{{isset($pdf_view)?'160px':'155px'}};width:95%;padding-bottom:5px"/>
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
         <div id="CONTAINER" class="" style="display:flex;">
            <div id="CONTAINER_0" class="left-box scvt" style="padding-bottom:15px;">
               <div class="sortableInner">
                  <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-SUMM">
                     <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                     <div id="SECTION_SUMM879edb71-bdad-4ac5-a858-3bcc1c38ab71" class="section summary notdraggable SECTION_SUMM  noparagraph " data-section-cd="SUMM">
                        <div class=" doc-item  editcontent " dhref="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif">
                           <div class="">
                              <div class="">
                                 <div id="PARAGRAPH_SUMM_0" class="paragraph PARAGRAPH_SUMM firstparagraph placeholder-text ">
                                    <div class="heading">
                                       <div class="sectiontitle" id="SECTIONNAME_EDUC" style="color:{{isset($resume->color)? $resume->color:'#fff'}};padding-left:12px">
                                       @if(isset($resume->summary)) {{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="aboutme" value="{{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else Profile @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletesummary')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></span>
                                       </div>
                                    </div>
                                    <div class="clearfix doc-item" style="color:#fff;padding-left:12px">
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
                  <!------------------------------------------------------------------------------>
                  <div data-react-beautiful-dnd-draggable="1" class="section sortable-item section-container SortableItem-sibling  data-HILT  editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                     <div class="heading">
                        <div class="sectiontitle" id="SECTIONNAME_EDUC" style="color:{{isset($resume->color)? $resume->color:'#ffffff'}};padding-left:12px">
                        {{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO DATA'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="biosection" value="{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span> <span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span>
                        </div>
                     </div>
                     <div class="biodata" style="padding-left:12px;color:white;">
                        <div dependency="GENDER">
                           <div><b>Gender</b></div>
                           <div class="field" id="FIELD_GENDER">{{ $resume->gender or 'Male' }}</div>
                        </div>
                        <div dependency="DOB">
                           <div><b>Date of Birth</b></div>
                           <div class="field" id="FIELD_DOB">{{ $resume->dob or date('d/m/Y') }}</div>
                        </div>
                        <div dependency="MARITALSTATUS">
                           <div><b>Marital Status</b></div>
                           <div class="field" id="FIELD_MARITALSTATUS">{{ $resume->maritalStatus or 'Single' }}</div>
                        </div>
                        <div dependency="ORIGINSTATE">
                           <div><b>State of Origin</b></div>
                           <div class="field" id="FIELD_ORIGINSTATE">{{ $resume->originState or 'Lagos' }}</div>
                        </div>
                        
                     </div>
                  </div>
                  <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT">
                     <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                     <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
                        <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" >
                           <div class="heading">
                              <div class="sectiontitle" id="SECTIONNAME_HILT" style="color:{{isset($resume->color)? $resume->color:'#ffffff'}};padding-left:12px">
                              @if(isset($resume->skills)) {{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}} <span class="rename-section text-rename text-primary"> RENAME </span>
                           <span class="titleupdate" style="display:none;"><input type="text" value="{{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}}" data-link="skill" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="rename-section text-rename"> </span>@else SKILLS @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteskills')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></span>
                              </div>
                           </div>
                           <div class="">
                              <div class="">
                                 <div id="PARAGRAPH_HILT_0" class="paragraph PARAGRAPH_HILT firstparagraph placeholder-text ">
                                    <div class="clearfix doc-item" style="color:#fff;padding-left:12px">
                                       <div class="ratingRow">
                                          <div class="ratingText" id="FIELD_SKC1">
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
                  @if( ( !empty($resume->facebook) ) || ( !empty($resume->twitter)) || ( !empty($resume->linkedin) ) || ( !empty($resume->website) ) )
                  <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT">
                     <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                     <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
                        <div class=" doc-item  editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                           <div class="heading">
                              <div class="sectiontitle" id="SECTIONNAME_HILT" style="color:{{isset($resume->color)? $resume->color:'#ffffff'}};padding-left:12px">
                                 Social Links<span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span>
                              </div>
                           </div>
                           <div class="">
                              <div class="">
                                 <div id="PARAGRAPH_HILT_0" class="paragraph PARAGRAPH_HILT firstparagraph placeholder-text ">
                                    <div class="clearfix doc-item" style="color:#fff;padding-left:12px">
                                       <div class="ratingRow">
                                          <div class="ratingText" id="FIELD_SKC1">
                                             <div class="social_links">
                                                @if( !empty($resume->facebook) )
                                                <div>
                                                   <b>Facebook&nbsp;&nbsp;</b>
                                                   <span class="field" >{{ $resume->facebook }}</span>
                                                </div>
                                                @endif
                                                @if( !empty($resume->twitter) )
                                                <div>
                                                   <b>Twitter&nbsp;&nbsp;</b>
                                                   <span class="field">{{ $resume->twitter}}</span>
                                                </div>
                                                @endif
                                                @if( !empty($resume->linkedin) )
                                                <div>
                                                   <b>LinkedIn&nbsp;&nbsp;</b>
                                                   <span class="field">{{ $resume->linkedin }}</span>
                                                </div>
                                                @endif
                                                @if(!empty($resume->website) )
                                                <div>
                                                   <b>Website&nbsp;&nbsp;</b>
                                                   <span class="field">{{ $resume->website }}</span>
                                                </div>
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
                  @endif
                  
                  <!------------------------------------------------------------------------------>
               </div>
            </div>
            <div id="CONTAINER_0" class="right-box" >
               <div class="sortableInner">
                  <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EDUC">
                     <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                     <div id="SECTION_EDUCe38830c3-809a-48c9-a15b-57e04eb83e0e" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="EDUC">
                        <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif">
                           <div class="heading">
                              <div class="sectiontitle" id="SECTIONNAME_EDUC" style="color:{{isset($resume->color)? $resume->color:'#FFA500'}};">
                              @if(isset($resume->resume_education_detail[0])) {{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="education" value="{{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}" >
                              <span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EDUCATION @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteEducation')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a>
                               <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></span>
                              </div>
                           </div>
                           <div class="">
                              <div class="">
                                 @if(isset($resume->resume_education_detail) && $resume->resume_education_detail)
                                 @foreach($resume->resume_education_detail as $education)
                                 <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text " style="padding-right:15px;">
                                    <div class="clearfix doc-item" style="{{$loop->last ?'':'border-bottom: 1px solid #A9A9A9 !important;padding-bottom:2px;'}}">
                                       <div class="singlecolumn">
                                          <div class="paddedline date-content">
                                             <span class="jobdates jobtitle" id="FIELD_GRST" format="%Y-%m">{{ date('M, Y', strtotime($education->graduation_start_date)) }}-</span>
                                             <span class="jobdates jobtitle" id="FIELD_GRED" format="%Y-%m">{{ $education->current == '1' ? 'Current' : date('M, Y', strtotime($education->graduation_end_date)) }}</span>
                                          </div>
                                          <span class="paddedline degreeGap txtBold" dependency="DGRE|STUY">
                                          <span class="degree" id="FIELD_DGRE">{{ $education->degree }}</span>
                                          <span class="programline" id="FIELD_STUY"></span>
                                          </span>
                                          <div class="paddedline ">
                                             <span class="companyname" id="FIELD_SCHO">{{ $education->school_name }}</span><span>,</span>
                                             <span class=" jobcity" id="FIELD_SCIT">{{ $education->school_location }}</span><span></span>
                                             <span class=" jobstate" id="FIELD_SSTA"></span>
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
                  <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-EXPR">
                     <div class="document-tool sec-tool" id="editIcons" style="right: -22px;"></div>
                     <div id="SECTION_EXPR06fafd67-c5ae-45e8-b4a1-ed0f75d06194" class="section experience SECTION_EXPR  noparagraph multi-para" data-section-cd="EXPR">
                        <div class=" doc-item  editcontent " dhref="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif">
                           <div class="heading" style="padding-right:15px;">
                              <div class="sectiontitle" id="SECTIONNAME_EXPR" style="color:{{isset($resume->color)? $resume->color:'#FFA500'}};border-bottom: 1px solid #A9A9A9 !important;">
                              @if(isset($resume->resume_work_detail[0])) {{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'EXPERIENCE'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="workdetail" value="{{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'EXPERIENCE'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EXPERIENCE @endif 
                              <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('delete-workdetail')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span> </span>
                              </div>
                           </div>
                           <div class="">
                              <div class="">
                                 @if(isset($resume->resume_work_detail) && $resume->resume_work_detail)
                                 
                                 @foreach($resume->resume_work_detail as $workhistory)
                                 <div id="PARAGRAPH_EXPR_0" class="paragraph PARAGRAPH_EXPR firstparagraph placeholder-text ">
                                    <div class="clearfix doc-item">
                                    <div class="singlecolumn">
                                          <div class="paddedline date-content">
                                          <span class="jobtitle txtBold" id="FIELD_JTIT">{{  $workhistory->job_title  }}</span>
                                             
                                          </div>
                                          <span class="paddedline degreeGap txtBold" dependency="DGRE|STUY">
                                          
                                          <span class="degree" id="FIELD_COMP">{{ $workhistory->employer  }},</span>
                                          <span class="jobstate jobtitle" id="FIELD_JSTA">{{  $workhistory->state  }},</span>
                                             <!-- <span dependency="COMP+JCIT|JSTA"></span> -->
                                             <span class="jobcity jobtitle" id="FIELD_JCIT">{{  $workhistory->country  }}</span>
                                         
                                          </span>
                                          <div class="paddedline ">
                                          <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">{{ date('M, Y', strtotime($workhistory->start_date)) }}-</span>
                                             <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">{{ $workhistory->is_current == 1 ? 'Current' : date('M, Y', strtotime($workhistory->end_date)) }}</span>
                                            
                                          </div>
                                          <span class="field" id="FIELD_FRFM">
                                          {!! $workhistory->work_history !!}
                                          </span>
                                       </div>
                                       <!-- <div class="">
                                          <div style="display:inline-block !important" class="paddedline   " dependency="JSTD|EDDT">
                                             <span class="paddedline" dependency="JTIT">
                                             <span class="jobdates" id="FIELD_JSTD" format="%Y-%m"><b style="font-size:17px">{{ date('Y', strtotime($workhistory->start_date)) }}</b></span>
                                             <span dependency="JSTD+EDDT"> - </span>
                                             <span class="jobdates" id="FIELD_EDDT" format="%Y-%m"><b style="font-size:17px">{{ $workhistory->is_current == '1' ? 'Current' : date('Y', strtotime($workhistory->end_date)) }}</b></span>
                                             <b style="font-size:17px">||</b>
                                             <span class="jobtitle txtBold" id="FIELD_JTIT">{{  $workhistory->job_title  }}</span>
                                             <span class=" locationGap txtItl" dependency="COMP|JSTA|JCIT">
                                             <span class="companyname" id="FIELD_COMP"></span>
                                             <span dependency="JCIT+JSTA">, </span>
                                             <span class="jobstate" id="FIELD_JSTA">{{  $workhistory->state  }}</span>
                                             <span dependency="COMP+JCIT|JSTA">, </span>
                                             <span class="jobcity" id="FIELD_JCIT">{{  $workhistory->country  }}</span>
                                             </span>
                                             </span>
                                             <span class="jobline" id="FIELD_JDES">
                                             {!! $workhistory->work_history !!}
                                             </span>
                                          </div>
                                       </div> -->
                                    </div>
                                 </div>
                                 
                                 @endforeach
                                 @else
                                 <div id="PARAGRAPH_EXPR_-1" class="paragraph PARAGRAPH_EXPR placeholder-text ">
                                    <div class="clearfix doc-item">
                                       <div class="singlecolumn">
                                          <div class="experience-content">
                                             <div class="paddedline date-content" dependency="JSTD|EDDT">
                                                <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">06/2018</span><span dependency="JSTD+EDDT"> - </span><span class="jobdates" id="FIELD_EDDT" format="%Y-%m">03/2020</span>
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
                  <div class="section sortable-item section-container SortableItem-sibling  data-SEC">
                     <div id="SECTION_EDUC411a31aa-7167-4080-837f-be30a3388e31" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="SEC">
                        <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-section',['id' => $resume->id]) }} @endif">
                           <div class="heading">
                              <div class="sectiontitle" id="SECTIONNAME_SEC" style="color:{{isset($resume->color)? $resume->color:'#FFA500'}};">@if(isset($resume->extraSection->title)) {{$resume->extraSection->title}} <span class="rename-section text-rename text-primary">Rename</span>
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
</div>