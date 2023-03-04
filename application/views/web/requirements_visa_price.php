<?php include_once "include/header.php";?>




<style>
.tabs-menu li a {
	paddingFrom: 5px 15px;
}
.visaDiv {
	width: 32.33%;
	border: solid 1px #ddd;
	border-top-width: 4px;
	border-bottom-width: 4px;
	padding: 40px 0px 0px;
	margin: 10px 0.5%;
	text-align: center;
	position:relative;
}
.issueDiv {
	background: #001d70;
	color: #fff;
	border-radius: 20px;
	padding: 5px 5px;
	margin: -25px auto 20px;
	width: 78%;
	float: none;
}
.reqBox {
	padding: 35px;
	border: solid 1px #d6f6f9;
	background: #f3feff;
	border-radius: 500px;
}
.navigation {
	width: 90%;
	float: none;
	margin: auto;
}
.navigation a {
	min-width: 10px;
	padding: 28px 20px;
}
.stepDivBox {
	width: 25%;
	position: relative;
	margin-bottom: 30px;
}
.stepDivBox:after {
	content: "";
	position: absolute;
	bottom: -40px;
	width: 20px;
	margin: auto;
	height: 20px;
	right: 0px;
	left: 0px;
	background: #fff;
	border-radius: 100%;
}
.stepDivBox:before {
	content: "";
	position: absolute;
	bottom: -33px;
	width: 248px;
	margin: auto;
	height: 5px;
	left: 48%;
	background: #666;
}
.stepDivBox:last-child:before {
	width: 0px;
}
.pageGapping {
	padding: 100px 0px;
}
.strike {
	color: #800000;
	text-decoration: line-through;
	margin-right: 5px;
}
.regImg {
	border: solid 10px #c6e0e2;
	border-radius: 100%;
}
.how2BG {
	background: url(../www.ievisa.com/assets/images/dubai-bg.jpg) 0 0/100% 100% fixed no-repeat; border-radius:10px;
}
.visaDivHeading{font-size:50px; line-height:42px;}
.entryType {
    position: absolute;
    left: 0px;
    top: 0px;
    padding: 5px 15px;
    background: #207ce5;
    color: #fff;
    font-size: 14px;
    right: 0px;
    margin: auto;
    width: 140px;
	text-transform:uppercase;
}
.entryType:after{ position:absolute; left:-10px; top:0px; content:""; border-style:solid; border-width:15px 5px; border-color:#207ce5 #207ce5 transparent transparent ;}
.entryType:before{ position:absolute; right:-10px; top:0px; content:""; border-style:solid; border-width:15px 5px; border-color:#207ce5 transparent transparent #207ce5;}
@media all and (max-width:767px) {
.stepDivBox {
	width: 100%;
	margin-bottom: 90px;
}
.visaDiv {
	width: 99%;
}
.font16 {
	font-size: 15px!important;
}
h4 {
	font-size: 12px;
}
.stepDivBox:before {
	width: 5px;
	height: 75px;
	left: 49.5%;
	bottom: -100px;
}
.reqBox {
	border-radius: 0px;
	padding: 10px;
}
.pageGapping {
	padding: 65px 0px;
}
.how2BG {
	background-size: auto 100%;
}
.mobWhatsappIcon {
	margin-right: 10px;
}
}
</style>
</head>



  <div class="row body-panel padding-0" style="background:#f1f1f1;">
        
    
    <div class="wrap pos-Reltv pageGapping" id="CVT">
      <section class="row" >
        <h1 class="row alignFromCenter font-Weight-Normal titleFont upperCase paddingFromBottom marginFromBottom">DUBAI VISA FEES & DOCUMENTS REQUIREMENTS</h1>
        <div class="row">
          <div class="row marginFromBottom paddingAllExtra whiteBG borderFromTop mobpaddingInBox">
            <section class="row">
            <div class="container column-threeForth alignFromCenter font16 fontBold">The only portal with the fastest online Dubai visa application processing view fees , requirement of dubai visa documents online and apply easily.</div>
              <div class="row marginFromBottom paddingFromTop" id="IN">
                <div class="container column-nine alignFromCenter alert-panel warning font16">Important Note: With Dubai visa, you gain access to all the seven emirates in the United Arab Emirates: Abu Dhabi, Ajman, Dubai, Fujairah, Sharjah, Ras al-Khaimah & Umm al-Quwain.</div>
              </div>
                            <div class="visaDiv"> 
                <div class="row fontBold green visaDivHeading">96 Hrs</div>
                <div class="row fontTwnty marginFromBottom">Transit Visa</div>
                <div class="entryType">Single Entry</div>
                <div class="row paddingAll greyBG borderFromTop marginFromTop">
                  <div class="issueDiv">Processing Time is 24 - 72 Working Hours</div>
                  <div class="row font16 label">Stay Validity is 96 hours from the time of entry</div>
                  <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the date of issue</div>
                  <div class="row">
                   <form id="visaForm" name="visaForm" action="<?=base_url()?>Web/visa_application_landing_form" method="post" enctype="multipart/form-data">
                    <div class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                      <div class="row red">Regular Visa</div>
                      <div class="row label fontTwnty">$ 149</div>
                      <input class="button-large custom-button pull_right marginFromTop" value="Apply Now" name="submit_r" id="submit_r" type="submit">                      
                    </div>
                    <div class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                      <div class="row red">Visa + Travel Insurance</div>
                      <div class="row label fontTwnty"><span class="strike">$328</span> $228</div>
                      <input type="hidden" id="visa_type_id" name="visa_type_id" value="6" />
                      <input class="button-large custom-button marginFromTop" value="Apply Now" name="submit_e" id="submit_e" type="submit">
                    </div>
                     </form>
                  </div>
                </div>
              </div>
                            <div class="visaDiv"> 
                <div class="row fontBold green visaDivHeading">14</div>
                <div class="row fontTwnty marginFromBottom">Days Visa</div>
                <div class="entryType">Single Entry</div>
                <div class="row paddingAll greyBG borderFromTop marginFromTop">
                  <div class="issueDiv">Processing Time is 24 - 72 Working Hours</div>
                  <div class="row font16 label">Stay Validity is 14 days from the date of entry</div>
                  <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the date of issue</div>
                  <div class="row">
                   <form id="visaForm" name="visaForm" action="<?=base_url()?>Web/visa_application_landing_form" method="post" enctype="multipart/form-data">
                    <div class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                      <div class="row red">Regular Visa</div>
                      <div class="row label fontTwnty">$ 189</div>
                      <input class="button-large custom-button pull_right marginFromTop" value="Apply Now" name="submit_r" id="submit_r" type="submit">                      
                    </div>
                    <div class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                      <div class="row red">Visa + Travel Insurance</div>
                      <div class="row label fontTwnty"><span class="strike">$388</span> $288</div>
                      <input type="hidden" id="visa_type_id" name="visa_type_id" value="1" />
                      <input class="button-large custom-button marginFromTop" value="Apply Now" name="submit_e" id="submit_e" type="submit">
                    </div>
                     </form>
                  </div>
                </div>
              </div>
                            <div class="visaDiv"> 
                <div class="row fontBold green visaDivHeading">30</div>
                <div class="row fontTwnty marginFromBottom">Days Visa</div>
                <div class="entryType">Single Entry</div>
                <div class="row paddingAll greyBG borderFromTop marginFromTop">
                  <div class="issueDiv">Processing Time is 24 - 72 Working Hours</div>
                  <div class="row font16 label">Stay Validity is 30 days from the date of entry</div>
                  <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the date of issue</div>
                  <div class="row">
                   <form id="visaForm" name="visaForm" action="<?=base_url()?>Web/visa_application_landing_form" method="post" enctype="multipart/form-data">
                    <div class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                      <div class="row red">Regular Visa</div>
                      <div class="row label fontTwnty">$ 199</div>
                      <input class="button-large custom-button pull_right marginFromTop" value="Apply Now" name="submit_r" id="submit_r" type="submit">                      
                    </div>
                    <div class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                      <div class="row red">Visa + Travel Insurance</div>
                      <div class="row label fontTwnty"><span class="strike">$418</span> $318</div>
                      <input type="hidden" id="visa_type_id" name="visa_type_id" value="2" />
                      <input class="button-large custom-button marginFromTop" value="Apply Now" name="submit_e" id="submit_e" type="submit">
                    </div>
                     </form>
                  </div>
                </div>
              </div>
                            <div class="visaDiv"> 
                <div class="row fontBold green visaDivHeading">60</div>
                <div class="row fontTwnty marginFromBottom">Days Visa</div>
                <div class="entryType">Single Entry</div>
                <div class="row paddingAll greyBG borderFromTop marginFromTop">
                  <div class="issueDiv">Processing Time is 24 - 72 Working Hours</div>
                  <div class="row font16 label">Stay Validity is 60 days from the date of entry</div>
                  <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the date of issue</div>
                  <div class="row">
                   <form id="visaForm" name="visaForm" action="<?=base_url()?>Web/visa_application_landing_form" method="post" enctype="multipart/form-data">
                    <div class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                      <div class="row red">Regular Visa</div>
                      <div class="row label fontTwnty">$ 349</div>
                      <input class="button-large custom-button pull_right marginFromTop" value="Apply Now" name="submit_r" id="submit_r" type="submit">                      
                    </div>
                    <div class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                      <div class="row red">Visa + Travel Insurance</div>
                      <div class="row label fontTwnty"><span class="strike">$618</span> $518</div>
                      <input type="hidden" id="visa_type_id" name="visa_type_id" value="7" />
                      <input class="button-large custom-button marginFromTop" value="Apply Now" name="submit_e" id="submit_e" type="submit">
                    </div>
                     </form>
                  </div>
                </div>
              </div>
                            <div class="visaDiv"> 
                <div class="row fontBold green visaDivHeading">14</div>
                <div class="row fontTwnty marginFromBottom">Days Visa</div>
                <div class="entryType">Multiple Entry</div>
                <div class="row paddingAll greyBG borderFromTop marginFromTop">
                  <div class="issueDiv">Processing Time is 24 - 72 Working Hours</div>
                  <div class="row font16 label">Stay Validity is 14 days from the date of entry</div>
                  <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the date of issue</div>
                  <div class="row">
                   <form id="visaForm" name="visaForm" action="<?=base_url()?>Web/visa_application_landing_form" method="post" enctype="multipart/form-data">
                    <div class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                      <div class="row red">Regular Visa</div>
                      <div class="row label fontTwnty">$ 390</div>
                      <input class="button-large custom-button pull_right marginFromTop" value="Apply Now" name="submit_r" id="submit_r" type="submit">                      
                    </div>
                    <div class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                      <div class="row red">Visa + Travel Insurance</div>
                      <div class="row label fontTwnty"><span class="strike">$609</span> $509</div>
                      <input type="hidden" id="visa_type_id" name="visa_type_id" value="21" />
                      <input class="button-large custom-button marginFromTop" value="Apply Now" name="submit_e" id="submit_e" type="submit">
                    </div>
                     </form>
                  </div>
                </div>
              </div>
                            <div class="visaDiv"> 
                <div class="row fontBold green visaDivHeading">30</div>
                <div class="row fontTwnty marginFromBottom">Days Visa</div>
                <div class="entryType">Multiple Entry</div>
                <div class="row paddingAll greyBG borderFromTop marginFromTop">
                  <div class="issueDiv">Processing Time is 24 - 72 Working Hours</div>
                  <div class="row font16 label">Stay Validity is 30 days from the date of first entry</div>
                  <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the date of issue</div>
                  <div class="row">
                   <form id="visaForm" name="visaForm" action="<?=base_url()?>Web/visa_application_landing_form" method="post" enctype="multipart/form-data">
                    <div class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                      <div class="row red">Regular Visa</div>
                      <div class="row label fontTwnty">$ 445</div>
                      <input class="button-large custom-button pull_right marginFromTop" value="Apply Now" name="submit_r" id="submit_r" type="submit">                      
                    </div>
                    <div class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                      <div class="row red">Visa + Travel Insurance</div>
                      <div class="row label fontTwnty"><span class="strike">$664</span> $564</div>
                      <input type="hidden" id="visa_type_id" name="visa_type_id" value="3" />
                      <input class="button-large custom-button marginFromTop" value="Apply Now" name="submit_e" id="submit_e" type="submit">
                    </div>
                     </form>
                  </div>
                </div>
              </div>
                            <div class="visaDiv"> 
                <div class="row fontBold green visaDivHeading">60</div>
                <div class="row fontTwnty marginFromBottom">Days Visa</div>
                <div class="entryType">Multiple Entry</div>
                <div class="row paddingAll greyBG borderFromTop marginFromTop">
                  <div class="issueDiv">Processing Time is 24 - 72 Working Hours</div>
                  <div class="row font16 label">Stay Validity is 60 days from the date of first entry</div>
                  <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the date of issue</div>
                  <div class="row">
                   <form id="visaForm" name="visaForm" action="<?=base_url()?>Web/visa_application_landing_form" method="post" enctype="multipart/form-data">
                    <div class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                      <div class="row red">Regular Visa</div>
                      <div class="row label fontTwnty">$ 649</div>
                      <input class="button-large custom-button pull_right marginFromTop" value="Apply Now" name="submit_r" id="submit_r" type="submit">                      
                    </div>
                    <div class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                      <div class="row red">Visa + Travel Insurance</div>
                      <div class="row label fontTwnty"><span class="strike">$893</span> $793</div>
                      <input type="hidden" id="visa_type_id" name="visa_type_id" value="22" />
                      <input class="button-large custom-button marginFromTop" value="Apply Now" name="submit_e" id="submit_e" type="submit">
                    </div>
                     </form>
                  </div>
                </div>
              </div>
                            
              <div class="row marginFromBottom paddingAllExtra blueBG alignFromCenter font16 borderFromTop borderFromBottom">* Travel Insurance, with COVID-19 coverage is mandatory, as per the UAE Government directive. Book the Government approved travel insurance along with your visa to avail a flat discount of $100 on the insurance fee.</div>
              
              <div class="row paddingFromTop marginFromTop">
              <h2 class="row borderFromBottom paddingFromBottom font-Weight-Normal marginFromBottom">Requirements for online Dubai evisa</h2>
              
              
              
<div class="row content">              
<p class="row marginFromBottom">The only portal with the fastest <strong>online Dubai visa application </strong> processing and the highest online visa approval rate. Take a look at the <strong>Dubai visa price</strong> below. </p>  

<p class="row marginFromBottom"><strong>Important Note:</strong> With Dubai visa, you gain access to all the seven emirates in the United Arab Emirates: Abu Dhabi, Ajman, Dubai, Fujairah, Sharjah, Ras al-Khaimah & Umm al-Quwain. </p>  

<p class="row marginFromBottom">The United Arab Emirates has a lucrative visa process for its patrons to visit and enjoy the country and its landscapes. The Immigration Department has laid down clear and specific rules for Dubai visa and <strong>Dubai Visa cost</strong>. The UAE rolls out a variety of visas that match the visitor's purpose to travel. </p>  

<p class="row marginFromBottom">But before applying for a Dubai visa, one has to know the <strong>visa fee</strong> and match the criteria laid down by the tourism and immigration department of the United Arab Emirates like the requisite documents. </p>  

<p class="row marginFromBottom"><strong>Important documents while applying for a Dubai evisa</strong></p>  
<p class="row marginFromBottom">Any country you seek access to requires authentic and genuine proof of your identification. The category and list of documents vary within nationalities, visa types, and other travel-related checks. Additional records or certificates and even interviews are a mandate for some nationalities while applying for an <strong>online Dubai visa</strong>.   </p>    

<p class="row marginFromBottom">Applicants must possess the following the <strong>Dubai visa documents</strong> while applying for a UAE/Dubai visa:</p>
  
<ul class="row marginFromBottom">
<li><strong>A valid passport</strong>: The applicant's travel document should carry a validity of six months while applying and travelling to the United Arab Emirates. </li>
<li><strong>A clear photograph</strong>: The applicant should submit a photo with a clear background while seeking entry to the UAE. </li>
</ul>

<p class="row marginFromBottom">The above-cited are <strong>Dubai Visa requirements</strong> for any applicant planning to travel to the United Arab Emirates from anywhere in the world. </p>  


<p class="row marginFromBottom">At Insta Dubai Visa, applicants carry easy online visa applications and quick visa processing privileges. Repeated applicants have higher leverage for travel when they seek online visa services at Insta Dubai Visa. </p>  

<p class="row marginFromBottom">The portal practices an ever-evolving process of persistent technology integration to facilitate the travel segment. A team of visa specialists, 24X7 help and connectivity across various platforms enable travellers to carry out their commitments. The online Dubai visa application form allows applicants to choose from menus, facilitating easy and quick information submission. </p>  

<p class="row marginFromBottom">Our team of visa experts enable you to sit back and relax while they take over your visa process to ensure fast and easy visa approvals. </p>  
<p class="row marginFromBottom">Visa-seekers must submit truthful information and valid and accessible email addresses for smooth communication and connectivity with the visa processing teams.  </p>  
  
 </div>             
           

              </div>
              
            </section>
            </div>
        </div>
    </section>
    </div>
  </div>
  





<?php include_once "include/footer.php";?>