<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/front/mobileResponsive.css') }}">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<div class="resume-preview thumb-preview resume-animation">
   <div class="">
      <div>
         <style type="text/css" id="static">
         #backgroundInactive{
               display:none;
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
            #document.skn-trz9 .name{color:{{isset($resume->color)? $resume->color:"#000"}};font-weight:bold;text-align:left;position:relative;word-wrap:break-word;font-size:{{isset($resume->nameSize)? $resume->nameSize:"25px"}}}
            #document.skn-trz9 .address .singlecolumn{margin-left:0!important}
            #document.skn-trz9 .resumeTitle{color:#f5c814;font-weight:bold;font-size:40px}
            /* Heading */
            #document.skn-trz9 .heading{padding:0 0 3px;letter-spacing:0;font-weight:500;line-height:15px;margin-bottom:10px}
            #document.skn-trz9 .sectiontitle{color:{{isset($resume->color)? $resume->color:"#f5c814"}};word-wrap:break-word;text-transform:uppercase;}
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
            #document.skn-trz9 .parentContainer{display:table;min-height:inherit;table-layout:fixed;border-collapse:collapse}
            #document.skn-trz9 .left-box,#document.skn-trz9 .right-box{padding-left:15PX}
            #document.skn-trz9 .left-box{padding-left:0;padding-right:0px}
            #document.skn-trz9 .left-box {box-sizing: initial;display: inline-block;letter-spacing: 0.2px;float: left;}
            #document.skn-trz9 .right-box .section:first-child,#document.skn-trz9 .left-box .section:first-child{padding-top:20px!important}
            #document.skn-trz9 .left-box .paddedline.date-content{position:absolute;font-weight:700;margin-left:120px;width:125px}
            #document.skn-trz9 .paragraph{position:relative}
            #document.skn-trz9 .summary .singlecolumn{margin-left:0}
            #document.skn-trz9 .right-box {letter-spacing: 0.2px;background-color: #fff;float: left;color: #000;width: 240px;padding-top: 20px;}
            #document.skn-trz9 .summary.section{padding-top:15px}
            #document.skn-trz9 .txtBold{font-weight:bold}
            #document.skn-trz9 .txtItl{}
            #document.skn-trz9 .paddedline{display:block}
            #document.skn-trz9 .mt5{margin-top:5px;}
            #document.skn-trz9 .word-break{word-wrap:break-word;}
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
            #document.skn-trz9 .paragraph.datespara:after{content:'';display:table;}
            #document.skn-trz9 .topsection .left-box {float: left;padding-bottom: 0;padding-left: 0;padding-right: 0;}
            #document.skn-trz9 .topsection .right-box {padding-bottom: 0; padding-left: 0; padding-top: 0;width: 34%;text-align: left;float: inherit;}
            div#CONTAINER_3 {padding-bottom:0;padding-left:0;padding-right:0}
            #document .topsection .headimg{background:red; width: 100%; padding-left:0px !important; padding-right:0px !important; margin-top:30px}
            #document .parentContainer .left-side{background-color:#fff; padding-left:20px !important}
            #document .parentContainer .right-side{padding-right:20px}
            ul.ba {    list-style-type: none;}
            #document.skn-trz9 .main{font-size:16px;color:#002e58;line-height:16px; padding-top:25px;padding-left:25px}
            #document.skn-trz9 .sectiontitle-li{font-size:16px;color:#0000}
         </style>
         <style type="text/css" id="dynamic" data-time="Tue May 26 2020 17:35:58 GMT+0530 (India Standard Time)">
            #document.skn-trz9,#document.skn-trz9 table{line-height:{{isset($resume->lineSpacing)? $resume->lineSpacing:"18px"}}}
            #document.skn-trz9.pagesize{width:100%}
            #document.skn-trz9.fontsize{font-size:{{isset($resume->fontSize)? $resume->fontSize:"11px"}}}
            #document.skn-trz9.fontface{font-family:{{isset($resume->fontFamily)? $resume->fontFamily:"Arial, Helvetica, sans-serif"}}}
            #document.skn-trz9.vmargins{padding-top:-5px;padding-bottom:10px}
            #document.skn-trz9.hmargins{padding-left:20px;padding-right:20px}
            #document.skn-trz9 .section{padding-top:20px}
            #document.skn-trz9 .left-box .section:after{padding-bottom:10px}
            #document.skn-trz9 .paragraph{margin-top:10px}
            #document.skn-trz9 .singlecolumn,#document.skn-trz9 .maincolumn{word-wrap:break-word}
            #document.skn-trz9 .right-box .singlecolumn,#document.skn-trz9 .right-box .maincolumn{margin-left:0px}
            #document.skn-trz9 table.skills td{padding-top:5px}
            #document.skn-trz9 .jobtitle, #document.skn-trz9 .degree, #document.skn-trz9 .programline{font-size:14px}
            #document.skn-trz9 .name{color:{{isset($resume->color)? $resume->color:"#4267B2"}};font-size:{{isset($resume->nameSize)? $resume->nameSize:"35px"}};line-height:40px;}
            #document.skn-trz9 .heading{line-height:22px}
            #document.skn-trz9 .sectiontitle{font-size:20px;color:{{isset($resume->color)? $resume->color:"#000"}}}
            #document.skn-trz9 .left-box{width:272px}
            #document.skn-trz9 .right-box .paragraph .singlecolumn{margin-left:0px}
            #document.skn-trz9 svg{stroke:#002e58}
            #document.skn-trz9 .resumeTitle{font-size:25px;color:#DAA520;line-height:16px;text-transform:uppercase}
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
            #document.skn-trz9 .main{font-size:16px;color:#fff;line-height:16px; padding-top:25px;padding-left:25px;}
            #document.skn-trz9 .sectiontitle-li{font-size:16px;color:{{isset($resume->color)? $resume->color:"#000"}}}
            #document.skn-trz9 .imagespace{padding-left:none;margin-top:0px;padding-right:0px;height:188px;}
            #document.skn-trz9.topaddress{width:40px;height:40px; background-color:#dc3545}
            @if( Request::segment(1) == 'final-resume' || Request::segment(1) == 'downloaddocument')
            .row.about-container .resume-preview.thumb-preview.resume-animation #document.vmargins{width:612px!important}
            @else
            .row.about-container .resume-preview.thumb-preview.resume-animation #document.vmargins{width:641px!important}
            @endif
            .row.about-container .resume-preview.thumb-preview.resume-animation #document .topright{width: 392px!important;}
            .row.about-container .resume-preview.thumb-preview.resume-animation #document .topleft{width: 219px!important;}
            .row.about-container .resume-preview.thumb-preview.resume-animation #document .parentContainer .right-side {width:387px!important;}
            .row.about-container .resume-preview.thumb-preview.resume-animation #document .topsection{width: 611px!important;}
         .rename-section{
            display:none;
         }
         #FIELD_JDES div br:first-child,#FIELD_FRFM div br:first-child{
            display:none ;
         }
         </style>
      </div>
      <!---------header---------------->
      <!---div id="document" class="document fontsize fontface  pagesize skn-trz9 TRZ7  ZTY" style="min-height: 102px !important;">
         </div-->
      <!---------header---------------->
      <div id="document" class="document fontsize fontface vmargins  pagesize skn-trz9 TRZ7  ZTY" style="width:100%;padding:{{isset($pdf_view)?'25px':'25px'}};">
         <div id="CONTAINER_PARENT_0" class="topsection" style="min-height: auto; width:100%;height:auto;">
            <div id="CONTAINER_0" class="left-box" style="float:left;width: 100%;margin-top: 20px;margin-left: 0px;padding-left: 0px;">
               <div data-react-beautiful-dnd-draggable="0" class="sortable-item section-container SortableItem-sibling  data-NAME">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
                  <div id="SECTION_NAME4cdc3d5a-2f2e-423a-8d44-a29ad3d98372" class="section notdraggable SECTION_NAME firstsection  " data-section-cd="NAME" style="border-right:none">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_NAME_30df97fd-1385-4d98-9319-6ebe01086fa2" class="paragraph PARAGRAPH_NAME firstparagraph" style="border-bottom:5px solid #4267B2;padding-bottom:20px;">
                                 <div>
                                    <div class="name word-break" style="text-transform:uppercase">
                                       <span class="field" id="FIELD_FNAM" style="display:inline-block;width:{{isset($pdf_view)?'52%':'49%'}};padding-right:15px;">{{ $resume->first_name or 'Your'}}</span>
                                       <span class="field word-break" id="FIELD_LNAM" style="display:inline-block;width:{{isset($pdf_view)?'45%':'48%'}};padding-left:15px;">{{ $resume->last_name or 'Name'}}</span>
                                    </div>
                                    <div class="resumeTitle" id="FIELD_DCTL" style="margin-top:{{isset($pdf_view)?'-15px !important':'16px'}};text-transform:uppercase">{{ $resume->profession or '' }}</div>
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
            <div id="CONTAINER_2" class="left-box sortableInner" style=" float:left; width: {{isset($pdf_view)?'53%':'47%'}}; box-sizing: initial;display: inline-block;padding: 0px 10px 20px 0px;">
               <div class="sortable-item section-container SortableItem-sibling  data-CNTC">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
                  <div id="SECTION_CNTCb3b52e10-5c42-4892-9a67-4f6d6edc1887" class="section SECTION_CNTC notdraggable   " data-section-cd="CNTC" style="">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_EXPR" style='color:{{isset($resume->color)? $resume->color:"#4267B2"}}'>@if(isset($resume->summary)) {{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="aboutme" value="{{!empty($resume->summary->section_title)?$resume->summary->section_title : 'Profile'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else Profile @endif <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deletesummary')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('edit-summary',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_SUMM_0" class="paragraph PARAGRAPH_SUMM firstparagraph placeholder-text" style="">
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
               <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-BIOD">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
                  <div id="SECTION_HILT1d994807-ac0c-4d3a-9c88-9a205c80f50c" class="section SECTION_HILT  noparagraph " data-section-cd="BIOD">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_CNTC" style='color:{{isset($resume->color)? $resume->color:"#f5c814"}}'>@if(isset($resume->resume_education_detail[0])) {{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="education" value="{{!empty($resume->resume_education_detail[0]->section_title)?$resume->resume_education_detail[0]->section_title : 'EDUCATION'}}" >
                              <span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EDUCATION @endif<span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('deleteEducation')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id))  {{ route('editEducationList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a>
                               <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="" style="">
                           <div class="">
                              @if(isset($resume->resume_education_detail) && $resume->resume_education_detail) 
                              @foreach($resume->resume_education_detail as $education)
                              <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC placeholder-text "style="padding-bottom:10px;margin-top:0px;">
                                 <div class="doc-item" style="">
                                    <div class="singlecolumn" style="">
                                       <!--<div class="paddedline date-content" style="padding-top:14px;clear:both">
                                          <span class="jobdates" id="FIELD_GRST" format="%Y-%m">{{ date('M, Y', strtotime($education->graduation_start_date)) }}</span>
                                          <span class="jobdates" id="FIELD_GRED" format="%Y-%m">{{ $education->current == '1' ? 'Current' : date('M, Y', strtotime($education->graduation_end_date)) }}</span>
                                          </div>-->
                                       <span class="paddedline txtBold" dependency="DGRE|STUY">
                                       <span class="degree" id="FIELD_DGRE" style="width:100%">{{ $education->degree }} | <span style="font-weight:normal">{{ date('M, Y', strtotime($education->graduation_start_date)) }} - {{ $education->current == '1' ? 'Current' : date('M, Y', strtotime($education->graduation_end_date)) }}</span></span>
                                       </span>
                                       <div class="paddedline txtItl" style="">
                                          <span class="companyname" id="FIELD_SCHO">{{ $education->school_name }}</span><span> - </span>
                                          <span class="joblocation jobcity" id="FIELD_SCIT">{{ $education->school_location }}</span>
                                       </div>
                                       <span class="field" id="FIELD_FRFM">
                                       {!! $education->description !!}
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              @endforeach
                              @else
                              <div id="PARAGRAPH_EDUC_0" class="paragraph datespara PARAGRAPH_EDUC firstparagraph placeholder-text " style="">
                                 <div class="doc-item">
                                    <div class="singlecolumn" style="">
                                       <div class="paddedline date-content">
                                          <span class="jobdates" id="FIELD_GRST" format="%Y-%m"></span>
                                          <span class="jobdates" id="FIELD_GRED" format="%Y-%m"></span>
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
                     <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
                     <div id="SECTION_EXPR06a2ffd9-47f6-44ca-8fd7-950e4ec11a6f" class="section experience SECTION_EXPR  noparagraph multi-para" data-section-cd="EXPR">
                        <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif">
                           <div class="heading">
                              <div class="sectiontitle" id="SECTIONNAME_EXPR" style='color:{{isset($resume->color)? $resume->color:"#4267B2"}}' style='color:{{isset($resume->color)? $resume->color:"#4267B2"}}'>@if(isset($resume->resume_work_detail[0])) {{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'EXPERIENCE'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                              <span class="titleupdate" style="display:none;"><input type="text" data-link="workdetail" value="{{!empty($resume->resume_work_detail[0]->section_title)?$resume->resume_work_detail[0]->section_title : 'EXPERIENCE'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span>@else EXPERIENCE @endif 
                              <span class="inner-action" data-resumeId="{{ isset($resume->id)? $resume->id:''}}" data-href="{{route('delete-workdetail')}}"><a href="javascript:;" class="del-section"><i class="fa fa-trash"></i></a> <a href="@if(isset($resume->id)) {{ route('editExprList',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                           </div>
                           <div class="">
                              <div class="">
                                 @if(isset($resume->resume_work_detail) && $resume->resume_work_detail)
                                 @foreach($resume->resume_work_detail as $workhistory)
                                 <div id="PARAGRAPH_EXPR_0" class="paragraph PARAGRAPH_EXPR firstparagraph placeholder-text " style="margin-left:0; ">
                                    <div class="clearfix doc-item">
                                       <div class="singlecolumn">
                                          <span class="paddedline" dependency="JTIT"style="">
                                          <span class="jobtitle txtBold" id="FIELD_JTIT">{{  $workhistory->job_title  }}&nbsp;|&nbsp;<span style="font-weight:normal">{{ date('M, Y', strtotime($workhistory->start_date)) }} - {{ $workhistory->is_current == '1' ? 'Current' : date('M, Y', strtotime($workhistory->end_date)) }}</span></span>
                                          </span>
                                          <span class="paddedline" dependency="JTIT"style="">
                                          <span class="jobtitle" id="FIELD_JTIT">{{  $workhistory->employer  }}</span>
                                          </span>
                                          <!-- <span class="paddedline locationGap txtItl" dependency="COMP|JSTA|JCIT"style="">
                                          <span class="companyname" id="FIELD_COMP"></span>
                                          <span class="jobdates" id="FIELD_JSTD" format="%Y-%m">{{ date('M, Y', strtotime($workhistory->start_date)) }}</span> <span dependency="JSTD+EDDT"> - </span>
                                          <span class="jobdates" id="FIELD_EDDT" format="%Y-%m">{{ $workhistory->is_current == '1' ? 'Current' : date('M, Y', strtotime($workhistory->end_date)) }}</span>
                                          </span> -->
                                          <span class="jobline" id="FIELD_JDES"style="">
                                          {!! $workhistory->work_history !!}
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach
                                 @else
                                 <div id="PARAGRAPH_EXPR_-1" class="paragraph PARAGRAPH_EXPR placeholder-text "style=">
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
            </div>
            <div id="CONTAINER_3" class="right-box" style="float:right; display: inline-block;width: {{isset($pdf_view)?'40%':'47%'}};letter-spacing:.2px;padding: 0px 0px 20px 18px;vertical-align: top; ">
               <div class="sortableInner" style="padding-right:5px;">
                  <div class="sortable-item section-container SortableItem-sibling  data-EXPR">
                     <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
                     <div id="SECTION_EXPR06a2ffd9-47f6-44ca-8fd7-950e4ec11a6f" class="section experience SECTION_EXPR  noparagraph multi-para" data-section-cd="EXPR">
                        <div class=" doc-item editcontent " dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif" style="">
                           <div class="heading">
                              <div class="sectiontitle" id="SECTIONNAME_BIOD" style='color:{{isset($resume->color)? $resume->color:"#f5c814"}}'>{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO DATA'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="biosection" value="{{!empty($resume->bio_section_title)?$resume->bio_section_title:'BIO'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                           </div>
                           <div class="">
                              <div class="">
                                 <div id="PARAGRAPH_BIOD_0" class="paragraph rating-wrapper PARAGRAPH_HILT firstparagraph placeholder-text "style="">
                                    <div class="clearfix doc-item">
                                       <div class="biodata"style="">
                                          <div class="singlecolumn" style="">
                                             
                                             <div dependency="GENDER">
                                                <div style="text-transform:uppercase"><b>Gender</b></div>
                                                <div class="field" id="FIELD_GENDER" style="">{{ $resume->gender or 'Male' }}</div>
                                             </div>
                                             <div dependency="DOB">
                                                <div style="text-transform:uppercase"><b>Date of Birth</b></div>
                                                <div class="field" id="FIELD_DOB" style="">{{ $resume->dob or date('d-m-Y') }}</div>
                                             </div>
                                             <div dependency="ORIGINSTATE"style="">
                                                <div style="text-transform:uppercase"><b>State of Origin</b></div>
                                                <div class="field" id="FIELD_ORIGINSTATE"style="">{{ $resume->originState or 'Lagos' }}</div>
                                             </div>
                                             <div dependency="MARITALSTATUS">
                                                <div style= "text-transform:uppercase"><b>Marital Status</b></div>
                                                <div class="field" id="FIELD_MARITALSTATUS" style="">{{ $resume->maritalStatus or 'Single' }}</div>
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
                  <div class="document-tool sec-tool" id="editIcons" style="right:22px;"></div>
                  <div id="SECTION_HILT78287197-6649-4595-8d7a-51b01fd1ff77" class="section SECTION_HILT  noparagraph " data-section-cd="HILT">
				            <div class=" doc-item editcontent " dhref="@if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif">
                        <div class="heading" style="margin-bottom:0px;">
                           <div class="sectiontitle" id="SECTIONNAME_CNTC" style='color:{{isset($resume->color)? $resume->color:"#4267B2"}}'>{{!empty($resume->contact_section_title)?$resume->contact_section_title:'CONTACT'}}<span class="rename-section text-rename text-primary"> RENAME</span>
                          <span class="titleupdate" style="display:none;"><input type="text" data-link="contactsection" value="{{!empty($resume->contact_section_title)?$resume->contact_section_title:'Contact'}}" ><span class="eduname"><i class="fa fa-check"></i></span> <span class="cancel">Cancel</span></span><span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                        </div>
                        <div class="">
                           <div class="">
                              <div id="PARAGRAPH_CNTC_a92b0367-e01a-45b4-8ecb-220a75697aa3" class="paragraph PARAGRAPH_CNTC firstparagraph  ">
                                 <div class="doc-item">
                                    <div class="address" >
                                       <div class="singlecolumn">
                                       <div dependency="EMAI" class="word-break" style="padding-top:7px;" >
										 
                               <span class="field" id="FIELD_EMAI">{{ $resume->email or 'example@gmail.com' }}</span>
                            </div>
										  <div dependency="HPHN" style="padding-top:7px;">
										 
											
                                             <span class="field" id="FIELD_HPHN">{{ $resume->phone or '916-948-7196' }}</span>
                                          </div>
										  
                                          <div dependency="STRT|CITY|STAT|ZIPC" style="padding-top:7px;">
									   		
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
            <div data-react-beautiful-dnd-draggable="1" class="sortable-item section-container SortableItem-sibling  data-HILT" style="">
                  <div class="document-tool sec-tool" id="editIcons" style="right: -2px;"></div>
                  <div id="SECTION_HILT1d994807-ac0c-4d3a-9c88-9a205c80f50c" class="section SECTION_HILT  noparagraph " data-section-cd="HILT" >
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-skills',['id' => $resume->id]) }} @endif" style="">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_HILT" style='color:{{isset($resume->color)? $resume->color:"#f5c814"}}'>@if(isset($resume->skills)) {{!empty($resume->skills->section_title)?$resume->skills->section_title : 'SKILLS'}} <span class="rename-section text-rename text-primary"> RENAME </span>
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
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @if( ( !empty($resume->facebook) ) || ( !empty($resume->twitter)) || ( !empty($resume->linkedin) ) || ( !empty($resume->website) ) )
               <div class="sortable-item section-container SortableItem-sibling  data-SOCL editcontent " dhref=" @if(isset($resume->id)) {{ route('edit-resume',['id' => $resume->id]) }} @endif" style="">
                  <div class="heading" style="margin-top:20px;">
                     <div class="sectiontitle" id="SECTIONNAME_SOCL" style='color:{{isset($resume->color)? $resume->color:"#4267B2"}}'>Social Links<span class="inner-action"><a href="@if(isset($resume->id))  {{ route('edit-resume',['id' => $resume->id]) }} @endif" class="edit-section"><i class="fa fa-pencil"></i></a> <a href="javascript:;" class="btn-icon-tertiary btn-icon-move" style="right: -476px;"><i class="fa fa-arrows-alt" tabindex="0" data-react-beautiful-dnd-drag-handle="1" aria-roledescription="Draggable item. Press space bar to lift" draggable="false"></i></a></span></div>
                  </div>
                  <div class="social_links" style="">
                     @if( !empty($resume->facebook)  )
                     <div>
                        <div style="font-weight:bold;display:block;">Facebook</div>
                        <span class="field" >{{ $resume->facebook }}</span>
                     </div>
                     @endif
                     @if( !empty($resume->twitter)  )
                     <div>
                        <div style="font-weight:bold;display:block;">Twitter</div>
                        <span class="field">{{ $resume->twitter}}</span>
                     </div>
                     @endif
                     @if( !empty($resume->linkedin)  )
                     <div>
                        <div style="font-weight:bold;display:block;">LinkedIn</div>
                        <span class="field">{{ $resume->linkedin }}</span>
                     </div>
                     @endif
                     @if( !empty($resume->website)  )
                     <div>
                        <div style="font-weight:bold;display:block;">Website</div>
                        <span class="field">{{ $resume->website }}</span>
                     </div>
                     @endif	 	 
                  </div>
               </div>
               @endif
               @if(isset($resume->extraSection) && $resume->extraSection && $resume->extraSection->isResumeUpload == '0')
               <div class="sortable-item section-container SortableItem-sibling  data-SEC" style="padding-top:0px">
                  <div id="SECTION_EDUC411a31aa-7167-4080-837f-be30a3388e31" class="section education SECTION_EDUC  noparagraph multi-para" data-section-cd="SEC" style=" margin-left:0;">
                     <div class=" doc-item editcontent " dhref="@if(isset($resume->id))  {{ route('edit-section',['id' => $resume->id]) }} @endif">
                        <div class="heading">
                           <div class="sectiontitle" id="SECTIONNAME_SEC" style='color:{{isset($resume->color)? $resume->color:"#f5c814"}};text-transform: uppercase;'>@if(isset($resume->extraSection->title)) {{$resume->extraSection->title}} <span class="rename-section text-rename text-primary">Rename</span>
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