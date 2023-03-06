<?php include_once "include/header.php";?>

<div class="row body-panel">
    <div class="row">
        <div class="wrap">
            <a class="button primary-button" id="researchBtn">Re-Search</a>
            
            <form method="post" action="<?=base_url()?>Web/response">
                <div class="searchInnerPanel">
                    <div class="row blackTransBG">
                        <div
                            class="column-two label alignfromRight paddingFromRight box_Sizing mobpadding-0 mobAlignLeft">
                            Choose your Nationality</div>
                        <div class="column-oneForth paddingFromRight box_Sizing mobpadding-0">
                            <!-- <div class="select2-container advance-search" id="s2id_nationality">
                                <a href="javascript:void(0)" onclick="return false;" class="select2-choice"
                                    tabindex="-1">
                                    <span class="select2-chosen" id="select2-chosen-1">
                                        Algeria
                                    </span>
                                    <abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow"
                                        role="presentation"><b role="presentation"></b></span></a><label
                                    for="s2id_autogen1" class="select2-offscreen"></label><input
                                    class="select2-focusser select2-offscreen" type="text" aria-haspopup="true"
                                    role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1">
                            </div> -->
                            <select class="advance-search select2-offscreen" id="nationality" name="nationality"
                                required="" tabindex="-1" title="">

                                <option value="">Select</option>
                                <?php
                                    foreach(config_item('traveling') as $row){
                                        $sel = $row==$_POST['nationality']?"selected":"";
                                      echo '<option value="'.$row.'" '.$sel.'>'.$row.'</option>';
                                    }
                                    ?>

                            </select>
                        </div>
                        <div
                            class="column-oneForth label alignfromRight padding-left-right box_Sizing mobpadding-0 mobAlignLeft">
                            You are Travelling From</div>
                        <div class="column-two paddingFromRight box_Sizing mobpadding-0">
                            <!-- <div class="select2-container advance-search" id="s2id_living_in"><a
                                    href="javascript:void(0)" onclick="return false;" class="select2-choice"
                                    tabindex="-1"> <span class="select2-chosen" id="select2-chosen-2">
                                        Algeria </span><abbr class="select2-search-choice-close"></abbr> <span
                                        class="select2-arrow" role="presentation"><b
                                            role="presentation"></b></span></a><label for="s2id_autogen2"
                                    class="select2-offscreen"></label><input class="select2-focusser select2-offscreen"
                                    type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2"
                                    id="s2id_autogen2"></div> -->
                                    <select class="advance-search select2-offscreen"
                                id="living_in" name="living_in" required="" tabindex="-1" title="">


                                <option value="">Select</option>
                                <?php
                                    foreach(config_item('traveling') as $row){
                                        $sel = $row==$_POST['living_in']?"selected":"";
                                      echo '<option value="'.$row.'" '.$sel.'>'.$row.'</option>';
                                    }
                                    ?>

                            </select>
                            <input type="hidden" name="gdrfa" value="N">
                        </div>
                        <div class="column-one paddingFromLeft box_Sizing mobmarginFromTop mobpadding-0">
                            <!--<input class="row button primary-button marginFromBottomNone alignFromCenter line-height-regExtra" value="Search" type="submit">-->
                            <input type="button" value="Search"
                                class="row button primary-button marginFromBottomNone alignFromCenter line-height-regExtra"
                                onclick="submitCheck();">
                        </div>
                    </div>
                </div>
            </form>



            <div class="row marginFromTop paddingFromTop">
                <div class="breadcrumb"><a href="<?=base_url()?>">Home</a><a
                        href="<?=base_url()?>Web/response">response</a>
                </div>
                <div class="column-eight">
                    <div class="row">
                        <div class="row borderFromBottom">
                            <h1 class="formTitle font-Weight-Normal titleFont upperCase">Dubai Visa for Albanians
                                nationals from Albania</h1>
                        </div>
                        <div class="row mobGap mobmarginFromTop" id="mobile" style="display: none;">
                            <select class="form-control-input marginFromBottomNone visaType">
                                <option value="1" selected="">14 Days Visa</option>
                                <option value="2">30 Days Visa</option>
                                <option value="7">60 Days Visa</option>
                                <option value="21">14 Days Visa Multiple Entry</option>
                                <option value="3">30 Days Visa Multiple Entry</option>
                                <option value="22">60 Days Visa Multiple Entry</option>
                                <option value="6">Transit Visa</option>
                            </select>
                        </div>
                        <div class="column-five paddingFromTop tab" id="not-mobile">
                            <div class="current" onclick="hideSample();"> <a href="#tab-1" class="inactive">
                                    <h2 class="font-Weight-Normal">14 Days Visa</h2>
                                </a> </div>
                            <div onclick="hideSample();" class=""> <a href="#tab-2" class="inactive">
                                    <h2 class="font-Weight-Normal">30 Days Visa</h2>
                                </a> </div>
                            <div onclick="hideSample();" class=""> <a href="#tab-7" class="inactive">
                                    <h2 class="font-Weight-Normal">60 Days Visa</h2>
                                </a> </div>
                            <div onclick="hideSample();" class=""> <a href="#tab-21" class="inactive">
                                    <h2 class="font-Weight-Normal">14 Days Visa Multiple Entry</h2>
                                </a> </div>
                            <div onclick="hideSample();" class=""> <a href="#tab-3" class="inactive">
                                    <h2 class="font-Weight-Normal">30 Days Visa Multiple Entry</h2>
                                </a> </div>
                            <div onclick="hideSample();" class=""> <a href="#tab-22" class="inactive">
                                    <h2 class="font-Weight-Normal">60 Days Visa Multiple Entry</h2>
                                </a> </div>
                            <div onclick="hideSample();" class=""> <a href="#tab-6" class="inactive">
                                    <h2 class="font-Weight-Normal">Transit Visa</h2>
                                </a> </div>
                        </div>
                        <div id="tab-1" class="tab-content" style="display: block;">
                            <div class="row daysVisaInfo" id="formBody">
                                <div id="stage11" class="row"> <strong>14 Days Dubai Visa:</strong> This is recommended
                                    for visitors planning for a short stay in Dubai for Trips, Meetings, Conferences or
                                    Transit stay etc.
                                    <br>
                                    The visa validity will be 60 days from the date of issue but stay should be no more
                                    than 14 days from the date of entry in Dubai.
                                    <br><br>
                                    <strong>Note:</strong> This visa is valid across all UAE emirates, namely Dubai, Abu
                                    Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain<br>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row marginFromBottom whiteBG" id="fee">
                                    <h2 class="font-Weight-Normal row box_Sizing titleFont upperCase paddingAll darkBlueBG white mobpaddingAll"
                                        style="font-size: 20px;">14 Days Dubai Visa</h2>
                                    <div class="row">
                                        <form id="visaForm" name="visaForm"
                                            action="<?=base_url()?>Web/visa_application_form" method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" id="visa_type_id" name="visa_type_id" value="1">
                                            <input type="hidden" id="nationality_id" name="nationality_id" value="473">
                                            <input type="hidden" id="living_in_id" name="living_in_id" value="473">
                                            <input type="hidden" id="currency_id" name="currency_id" value="1">
                                            <input type="hidden" id="currency_symbol" name="currency_symbol" value="$">
                                            <input type="hidden" id="currency_code" name="currency_code" value="USD">
                                            <input type="hidden" id="govt_fee" name="govt_fee" value="82.00">
                                            <input type="hidden" id="service_fee" name="service_fee" value="107.00">
                                            <input type="hidden" id="gdrfa" name="gdrfa" value="N">
                                            <input type="hidden" id="processing_time" name="processing_time"
                                                value="24 - 72 Working Hours">

                                            <table class="tableStyle1" width="100%" cellspacing="5" cellpadding="0"
                                                border="0">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" width="50%">Service Type</td>
                                                        <td valign="top" width="50%">Regular Visa</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Type of Visa</td>
                                                        <td valign="top">14 Days Visa Single Entry</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Validity</td>
                                                        <td valign="top">60 days from the date of issue</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Stay Validity</td>
                                                        <td valign="top">14 days from the date of entry</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Processing Time</td>
                                                        <td valign="top">24 - 72 Working Hours</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Fee </td>
                                                        <td valign="top"><span class="float-Disabled fontArial">$</span>
                                                            <span class="float-Disabled"
                                                                id="getCalFee_visa_1">189</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="white"
                                                            style="background:#093f62; font-size:20px;">Additional
                                                            Services</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="4" value="99" id="tif41"
                                                                class="tif1" style="display:none;margin:5px;"
                                                                onchange="calculateFee('4','1');">
                                                            <label for="tif41" class="checkbox-label"></label>
                                                            <span>Travel Insurance</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="<?=base_url()?>assets/website/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="<?=base_url()?>assets/website/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Travel Insurance</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">Travel
                                                                        Insurance, with COVID-19 coverage is mandatory,
                                                                        as per the UAE Government directive. Book the
                                                                        Government approved travel insurance along with
                                                                        your visa to avail a flat discount of $100 on
                                                                        the insurance fee.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 199</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 99
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="9" value="50" id="tif91"
                                                                class="tif1" style="display:none;margin:5px;"
                                                                onchange="calculateFee('9','1');">
                                                            <label for="tif91" class="checkbox-label"></label>
                                                            <span>Airport Transfer</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="<?=base_url()?>assets/website/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="<?=base_url()?>assets/website/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Airport Transfer</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">We
                                                                        offers you easy, hassle free and safe airport to
                                                                        hotel transfers at the lowest guaranteed
                                                                        price.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 199</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 50
                                                                <span
                                                                    class="float-Disabled line-height-regExtra font13 marginFromLeft">(available
                                                                    only at Dubai airport.)</span>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr class="meet" style="display:none;">
                                                        <td valign="top" colspan="2"
                                                            style="background:#e8f5fe; color:#093f62;"><strong>Meet
                                                                &amp; Assist Service</strong> <span
                                                                class="float-Disabled label fontEleven fontBold">(Click
                                                                to Expand)</span>
                                                            <div class="btn-meet">+</div><span
                                                                class="row font13 marginFromBottom"
                                                                style="line-height:5px;">available only at Dubai
                                                                airport.</span>
                                                        </td>
                                                    </tr>

                                                    <tr class="meetBox">
                                                        <td colspan="2" style="padding:0px;">
                                                            <table class="innerTable" width="100%" cellspacing="5"
                                                                cellpadding="0" border="0">
                                                                <!--<tr>
                            <td valign="top"><input type="radio" id="smas" style="display:none;margin:5px;"/><label for="smas" class="checkbox-label"></label><span>Silver Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Silver Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 86</td>
                          </tr>-->
                                                                <!--<tr>
                          <td valign="top" class="greyBG"><input type="radio" id="gmas" style="display:none;margin:5px;"/><label for="gmas" class="checkbox-label"></label><span>Gold Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Gold Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 166</td>
                          </tr>-->
                                                            </table>
                                                        </td>
                                                    </tr>





                                                    <tr>
                                                        <td valign="top" align="right"><strong>Total Fees</strong> </td>

                                                        <td valign="top">
                                                            <div class="fontBold"><span
                                                                    class="float-Disabled fontArial">$</span> <span
                                                                    class="float-Disabled"
                                                                    id="tot_fee_e_span1">189</span></div>
                                                            <input type="hidden" id="tot_fee_e1" value="189">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <!-- 	not required message-->
                                                        <!-- <td valign="top"><h4 class="alert-panel error marginFromBottomNone mobRow">Currently we are not processing this visa type.</h4></td>
                            <td valign="top">&nbsp;</td>-->
                                                        <td valign="top" colspan="2">
                                                            <div class="container">
                                                                <input type="hidden" id="additional_services1"
                                                                    name="additional_services">
                                                                <input
                                                                    class="button-large-extra custom-button marginFromBottomNone mobRow"
                                                                    value="Apply Now" name="submit_r" id="submit_r"
                                                                    type="submit">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </form>
                                    </div>
                                    <div class="row marginFromTop">* Travel Insurance, with COVID-19 coverage is
                                        mandatory, as per the UAE Government directive. Book the Government approved
                                        travel insurance along with your visa to avail a flat discount of $100 on the
                                        insurance fee.</div>

                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-content" style="display: none;">
                            <div class="row daysVisaInfo" id="formBody">
                                <div id="stage11" class="row"> <strong>30 Days Dubai Visa:</strong> If you want to take
                                    a short trip to Dubai to catch up with your family or friends, then this Dubai Visa
                                    valid for 30 days will be the ideal option for you.
                                    <br>
                                    The visa validity will be 60 days from the date of issue but stay should be no more
                                    than 30 days from the date of entry in Dubai.
                                    <br><br>
                                    <strong>Note:</strong> This visa is valid across all UAE emirates, namely Dubai, Abu
                                    Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain<br>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row marginFromBottom whiteBG" id="fee">
                                    <h2 class="font-Weight-Normal row box_Sizing titleFont upperCase paddingAll darkBlueBG white mobpaddingAll"
                                        style="font-size: 20px;">30 Days Dubai Visa</h2>
                                    <div class="row">
                                        <form id="visaForm" name="visaForm" action="Web/visa_application_form"
                                            method="post" enctype="multipart/form-data">
                                            <input type="hidden" id="visa_type_id" name="visa_type_id" value="2">
                                            <input type="hidden" id="nationality_id" name="nationality_id" value="473">
                                            <input type="hidden" id="living_in_id" name="living_in_id" value="473">
                                            <input type="hidden" id="currency_id" name="currency_id" value="1">
                                            <input type="hidden" id="currency_symbol" name="currency_symbol" value="$">
                                            <input type="hidden" id="currency_code" name="currency_code" value="USD">
                                            <input type="hidden" id="govt_fee" name="govt_fee" value="82.00">
                                            <input type="hidden" id="service_fee" name="service_fee" value="117.00">
                                            <input type="hidden" id="gdrfa" name="gdrfa" value="N">
                                            <input type="hidden" id="processing_time" name="processing_time"
                                                value="24 - 72 Working Hours">

                                            <table class="tableStyle1" width="100%" cellspacing="5" cellpadding="0"
                                                border="0">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" width="50%">Service Type</td>
                                                        <td valign="top" width="50%">Regular Visa</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Type of Visa</td>
                                                        <td valign="top">30 Days Visa Single Entry</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Validity</td>
                                                        <td valign="top">60 days from the date of issue</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Stay Validity</td>
                                                        <td valign="top">30 days from the date of entry</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Processing Time</td>
                                                        <td valign="top">24 - 72 Working Hours</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Fee </td>
                                                        <td valign="top"><span class="float-Disabled fontArial">$</span>
                                                            <span class="float-Disabled"
                                                                id="getCalFee_visa_2">199</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="white"
                                                            style="background:#093f62; font-size:20px;">Additional
                                                            Services</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="4" value="119" id="tif42"
                                                                class="tif2" style="display:none;margin:5px;"
                                                                onchange="calculateFee('4','2');">
                                                            <label for="tif42" class="checkbox-label"></label>
                                                            <span>Travel Insurance</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="https://media.instadubaivisa.com/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="https://media.instadubaivisa.com/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Travel Insurance</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">Travel
                                                                        Insurance, with COVID-19 coverage is mandatory,
                                                                        as per the UAE Government directive. Book the
                                                                        Government approved travel insurance along with
                                                                        your visa to avail a flat discount of $100 on
                                                                        the insurance fee.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 219</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 119
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="9" value="50" id="tif92"
                                                                class="tif2" style="display:none;margin:5px;"
                                                                onchange="calculateFee('9','2');">
                                                            <label for="tif92" class="checkbox-label"></label>
                                                            <span>Airport Transfer</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="https://media.instadubaivisa.com/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="https://media.instadubaivisa.com/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Airport Transfer</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">We
                                                                        offers you easy, hassle free and safe airport to
                                                                        hotel transfers at the lowest guaranteed
                                                                        price.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 219</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 50
                                                                <span
                                                                    class="float-Disabled line-height-regExtra font13 marginFromLeft">(available
                                                                    only at Dubai airport.)</span>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr class="meet" style="display:none;">
                                                        <td valign="top" colspan="2"
                                                            style="background:#e8f5fe; color:#093f62;"><strong>Meet
                                                                &amp; Assist Service</strong> <span
                                                                class="float-Disabled label fontEleven fontBold">(Click
                                                                to Expand)</span>
                                                            <div class="btn-meet">+</div><span
                                                                class="row font13 marginFromBottom"
                                                                style="line-height:5px;">available only at Dubai
                                                                airport.</span>
                                                        </td>
                                                    </tr>

                                                    <tr class="meetBox">
                                                        <td colspan="2" style="padding:0px;">
                                                            <table class="innerTable" width="100%" cellspacing="5"
                                                                cellpadding="0" border="0">
                                                                <!--<tr>
                            <td valign="top"><input type="radio" id="smas" style="display:none;margin:5px;"/><label for="smas" class="checkbox-label"></label><span>Silver Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Silver Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 86</td>
                          </tr>-->
                                                                <!--<tr>
                          <td valign="top" class="greyBG"><input type="radio" id="gmas" style="display:none;margin:5px;"/><label for="gmas" class="checkbox-label"></label><span>Gold Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Gold Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 166</td>
                          </tr>-->
                                                            </table>
                                                        </td>
                                                    </tr>





                                                    <tr>
                                                        <td valign="top" align="right"><strong>Total Fees</strong> </td>

                                                        <td valign="top">
                                                            <div class="fontBold"><span
                                                                    class="float-Disabled fontArial">$</span> <span
                                                                    class="float-Disabled"
                                                                    id="tot_fee_e_span2">199</span></div>
                                                            <input type="hidden" id="tot_fee_e2" value="199">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <!-- 	not required message-->
                                                        <!-- <td valign="top"><h4 class="alert-panel error marginFromBottomNone mobRow">Currently we are not processing this visa type.</h4></td>
                            <td valign="top">&nbsp;</td>-->
                                                        <td valign="top" colspan="2">
                                                            <div class="container">
                                                                <input type="hidden" id="additional_services2"
                                                                    name="additional_services">
                                                                <input
                                                                    class="button-large-extra custom-button marginFromBottomNone mobRow"
                                                                    value="Apply Now" name="submit_r" id="submit_r"
                                                                    type="submit">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </form>
                                    </div>
                                    <div class="row marginFromTop">* Travel Insurance, with COVID-19 coverage is
                                        mandatory, as per the UAE Government directive. Book the Government approved
                                        travel insurance along with your visa to avail a flat discount of $100 on the
                                        insurance fee.</div>

                                </div>
                            </div>
                        </div>
                        <div id="tab-7" class="tab-content" style="display: none;">
                            <div class="row daysVisaInfo" id="formBody">
                                <div id="stage11" class="row"> <strong>60 Days Dubai Visa (Single Entry):</strong> This
                                    is recommended for visitors planning for a medium term stay in Dubai to visit their
                                    family or friends. This is a Single Entry Visa and once the visitor exits UAE
                                    (within a span of 60 days), the visa expires.
                                    <br>
                                    The visa validity will be 60 days from the date of issue and stay should also be no
                                    more than 60 days from the date of entry in Dubai.
                                    <br><br>
                                    <strong>Note:</strong> This visa is valid across all UAE emirates, namely Dubai, Abu
                                    Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain <br>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row marginFromBottom whiteBG" id="fee">
                                    <h2 class="font-Weight-Normal row box_Sizing titleFont upperCase paddingAll darkBlueBG white mobpaddingAll"
                                        style="font-size: 20px;">60 Days Dubai Visa</h2>
                                    <div class="row">
                                        <form id="visaForm" name="visaForm" action="Web/visa_application_form"
                                            method="post" enctype="multipart/form-data">
                                            <input type="hidden" id="visa_type_id" name="visa_type_id" value="7">
                                            <input type="hidden" id="nationality_id" name="nationality_id" value="473">
                                            <input type="hidden" id="living_in_id" name="living_in_id" value="473">
                                            <input type="hidden" id="currency_id" name="currency_id" value="1">
                                            <input type="hidden" id="currency_symbol" name="currency_symbol" value="$">
                                            <input type="hidden" id="currency_code" name="currency_code" value="USD">
                                            <input type="hidden" id="govt_fee" name="govt_fee" value="220.00">
                                            <input type="hidden" id="service_fee" name="service_fee" value="129.00">
                                            <input type="hidden" id="gdrfa" name="gdrfa" value="N">
                                            <input type="hidden" id="processing_time" name="processing_time"
                                                value="24 - 72 Working Hours">

                                            <table class="tableStyle1" width="100%" cellspacing="5" cellpadding="0"
                                                border="0">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" width="50%">Service Type</td>
                                                        <td valign="top" width="50%">Regular Visa</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Type of Visa</td>
                                                        <td valign="top">60 Days Visa Single Entry</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Validity</td>
                                                        <td valign="top">60 days from the date of issue</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Stay Validity</td>
                                                        <td valign="top">60 days from the date of entry</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Processing Time</td>
                                                        <td valign="top">24 - 72 Working Hours</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Fee </td>
                                                        <td valign="top"><span class="float-Disabled fontArial">$</span>
                                                            <span class="float-Disabled"
                                                                id="getCalFee_visa_7">349</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="white"
                                                            style="background:#093f62; font-size:20px;">Additional
                                                            Services</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="4" value="169" id="tif47"
                                                                class="tif7" style="display:none;margin:5px;"
                                                                onchange="calculateFee('4','7');">
                                                            <label for="tif47" class="checkbox-label"></label>
                                                            <span>Travel Insurance</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="https://media.instadubaivisa.com/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="https://media.instadubaivisa.com/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Travel Insurance</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">Travel
                                                                        Insurance, with COVID-19 coverage is mandatory,
                                                                        as per the UAE Government directive. Book the
                                                                        Government approved travel insurance along with
                                                                        your visa to avail a flat discount of $100 on
                                                                        the insurance fee.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 269</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 169
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="9" value="50" id="tif97"
                                                                class="tif7" style="display:none;margin:5px;"
                                                                onchange="calculateFee('9','7');">
                                                            <label for="tif97" class="checkbox-label"></label>
                                                            <span>Airport Transfer</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="https://media.instadubaivisa.com/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="https://media.instadubaivisa.com/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Airport Transfer</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">We
                                                                        offers you easy, hassle free and safe airport to
                                                                        hotel transfers at the lowest guaranteed
                                                                        price.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 269</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 50
                                                                <span
                                                                    class="float-Disabled line-height-regExtra font13 marginFromLeft">(available
                                                                    only at Dubai airport.)</span>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr class="meet" style="display:none;">
                                                        <td valign="top" colspan="2"
                                                            style="background:#e8f5fe; color:#093f62;"><strong>Meet
                                                                &amp; Assist Service</strong> <span
                                                                class="float-Disabled label fontEleven fontBold">(Click
                                                                to Expand)</span>
                                                            <div class="btn-meet">+</div><span
                                                                class="row font13 marginFromBottom"
                                                                style="line-height:5px;">available only at Dubai
                                                                airport.</span>
                                                        </td>
                                                    </tr>

                                                    <tr class="meetBox">
                                                        <td colspan="2" style="padding:0px;">
                                                            <table class="innerTable" width="100%" cellspacing="5"
                                                                cellpadding="0" border="0">
                                                                <!--<tr>
                            <td valign="top"><input type="radio" id="smas" style="display:none;margin:5px;"/><label for="smas" class="checkbox-label"></label><span>Silver Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Silver Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 86</td>
                          </tr>-->
                                                                <!--<tr>
                          <td valign="top" class="greyBG"><input type="radio" id="gmas" style="display:none;margin:5px;"/><label for="gmas" class="checkbox-label"></label><span>Gold Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Gold Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 166</td>
                          </tr>-->
                                                            </table>
                                                        </td>
                                                    </tr>





                                                    <tr>
                                                        <td valign="top" align="right"><strong>Total Fees</strong> </td>

                                                        <td valign="top">
                                                            <div class="fontBold"><span
                                                                    class="float-Disabled fontArial">$</span> <span
                                                                    class="float-Disabled"
                                                                    id="tot_fee_e_span7">349</span></div>
                                                            <input type="hidden" id="tot_fee_e7" value="349">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <!-- 	not required message-->
                                                        <!-- <td valign="top"><h4 class="alert-panel error marginFromBottomNone mobRow">Currently we are not processing this visa type.</h4></td>
                            <td valign="top">&nbsp;</td>-->
                                                        <td valign="top" colspan="2">
                                                            <div class="container">
                                                                <input type="hidden" id="additional_services7"
                                                                    name="additional_services">
                                                                <input
                                                                    class="button-large-extra custom-button marginFromBottomNone mobRow"
                                                                    value="Apply Now" name="submit_r" id="submit_r"
                                                                    type="submit">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </form>
                                    </div>
                                    <div class="row marginFromTop">* Travel Insurance, with COVID-19 coverage is
                                        mandatory, as per the UAE Government directive. Book the Government approved
                                        travel insurance along with your visa to avail a flat discount of $100 on the
                                        insurance fee.</div>

                                </div>
                            </div>
                        </div>
                        <div id="tab-21" class="tab-content" style="display: none;">
                            <div class="row daysVisaInfo" id="formBody">
                                <div id="stage11" class="row"> <strong>14 Days Visa (Multiple Entry):</strong> 14 Day
                                    Tourist Multiple Entry Visa: This visa is perfect for people who want to take
                                    frequent / multiple visits to UAE in a span of 14 days. Make as many visits for 14
                                    days from first date of entry into UAE.
                                    <br>
                                    The visa validity will be 60 days from the date of issue but stay should be no more
                                    than 14 days from the date of first entry in UAE.
                                    <br><br>
                                    <strong>Note:</strong> This visa is valid across all UAE emirates, namely Dubai, Abu
                                    Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain<br>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row marginFromBottom whiteBG" id="fee">
                                    <h2 class="font-Weight-Normal row box_Sizing titleFont upperCase paddingAll darkBlueBG white mobpaddingAll"
                                        style="font-size: 20px;">Dubai 14 Days Multiple Entry Visa</h2>
                                    <div class="row">
                                        <form id="visaForm" name="visaForm" action="Web/visa_application_form"
                                            method="post" enctype="multipart/form-data">
                                            <input type="hidden" id="visa_type_id" name="visa_type_id" value="21">
                                            <input type="hidden" id="nationality_id" name="nationality_id" value="473">
                                            <input type="hidden" id="living_in_id" name="living_in_id" value="473">
                                            <input type="hidden" id="currency_id" name="currency_id" value="1">
                                            <input type="hidden" id="currency_symbol" name="currency_symbol" value="$">
                                            <input type="hidden" id="currency_code" name="currency_code" value="USD">
                                            <input type="hidden" id="govt_fee" name="govt_fee" value="204.00">
                                            <input type="hidden" id="service_fee" name="service_fee" value="186.00">
                                            <input type="hidden" id="gdrfa" name="gdrfa" value="N">
                                            <input type="hidden" id="processing_time" name="processing_time"
                                                value="24 - 72 Working Hours">

                                            <table class="tableStyle1" width="100%" cellspacing="5" cellpadding="0"
                                                border="0">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" width="50%">Service Type</td>
                                                        <td valign="top" width="50%">Regular Visa</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Type of Visa</td>
                                                        <td valign="top">14 Days Visa Multiple Entry Multiple Entry</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Validity</td>
                                                        <td valign="top">60 days from the date of issue</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Stay Validity</td>
                                                        <td valign="top">14 days from the date of entry</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Processing Time</td>
                                                        <td valign="top">24 - 72 Working Hours</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Fee </td>
                                                        <td valign="top"><span class="float-Disabled fontArial">$</span>
                                                            <span class="float-Disabled"
                                                                id="getCalFee_visa_21">390</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="white"
                                                            style="background:#093f62; font-size:20px;">Additional
                                                            Services</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="4" value="119"
                                                                id="tif421" class="tif21"
                                                                style="display:none;margin:5px;"
                                                                onchange="calculateFee('4','21');">
                                                            <label for="tif421" class="checkbox-label"></label>
                                                            <span>Travel Insurance</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="<?=base_url()?>assets/website/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="h<?=base_url()?>assets/website/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Travel Insurance</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">Travel
                                                                        Insurance, with COVID-19 coverage is mandatory,
                                                                        as per the UAE Government directive. Book the
                                                                        Government approved travel insurance along with
                                                                        your visa to avail a flat discount of $100 on
                                                                        the insurance fee.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 219</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 119
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="9" value="50" id="tif921"
                                                                class="tif21" style="display:none;margin:5px;"
                                                                onchange="calculateFee('9','21');">
                                                            <label for="tif921" class="checkbox-label"></label>
                                                            <span>Airport Transfer</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="<?=base_url()?>assets/website/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="<?=base_url()?>assets/website/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Airport Transfer</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">We
                                                                        offers you easy, hassle free and safe airport to
                                                                        hotel transfers at the lowest guaranteed
                                                                        price.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 219</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 50
                                                                <span
                                                                    class="float-Disabled line-height-regExtra font13 marginFromLeft">(available
                                                                    only at Dubai airport.)</span>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr class="meet" style="display:none;">
                                                        <td valign="top" colspan="2"
                                                            style="background:#e8f5fe; color:#093f62;"><strong>Meet
                                                                &amp; Assist Service</strong> <span
                                                                class="float-Disabled label fontEleven fontBold">(Click
                                                                to Expand)</span>
                                                            <div class="btn-meet">+</div><span
                                                                class="row font13 marginFromBottom"
                                                                style="line-height:5px;">available only at Dubai
                                                                airport.</span>
                                                        </td>
                                                    </tr>

                                                    <tr class="meetBox">
                                                        <td colspan="2" style="padding:0px;">
                                                            <table class="innerTable" width="100%" cellspacing="5"
                                                                cellpadding="0" border="0">
                                                                <!--<tr>
                            <td valign="top"><input type="radio" id="smas" style="display:none;margin:5px;"/><label for="smas" class="checkbox-label"></label><span>Silver Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Silver Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 86</td>
                          </tr>-->
                                                                <!--<tr>
                          <td valign="top" class="greyBG"><input type="radio" id="gmas" style="display:none;margin:5px;"/><label for="gmas" class="checkbox-label"></label><span>Gold Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Gold Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 166</td>
                          </tr>-->
                                                            </table>
                                                        </td>
                                                    </tr>





                                                    <tr>
                                                        <td valign="top" align="right"><strong>Total Fees</strong> </td>

                                                        <td valign="top">
                                                            <div class="fontBold"><span
                                                                    class="float-Disabled fontArial">$</span> <span
                                                                    class="float-Disabled"
                                                                    id="tot_fee_e_span21">390</span></div>
                                                            <input type="hidden" id="tot_fee_e21" value="390">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <!-- 	not required message-->
                                                        <!-- <td valign="top"><h4 class="alert-panel error marginFromBottomNone mobRow">Currently we are not processing this visa type.</h4></td>
                            <td valign="top">&nbsp;</td>-->
                                                        <td valign="top" colspan="2">
                                                            <div class="container">
                                                                <input type="hidden" id="additional_services21"
                                                                    name="additional_services">
                                                                <input
                                                                    class="button-large-extra custom-button marginFromBottomNone mobRow"
                                                                    value="Apply Now" name="submit_r" id="submit_r"
                                                                    type="submit">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </form>
                                    </div>
                                    <div class="row marginFromTop">* Travel Insurance, with COVID-19 coverage is
                                        mandatory, as per the UAE Government directive. Book the Government approved
                                        travel insurance along with your visa to avail a flat discount of $100 on the
                                        insurance fee.</div>

                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-content" style="display: none;">
                            <div class="row daysVisaInfo" id="formBody">
                                <div id="stage11" class="row"> <strong>30 Days Dubai Visa (Multiple Entry):</strong> 30
                                    Day Tourist Multiple Entry Visa: This Dubai Visa is perfect for people who want to
                                    take frequent / multiple visits to UAE in a span of 30 days. Make as many visits for
                                    30 days from first date of entry into UAE.
                                    <br>
                                    The visa validity will be 60 days from the date of issue but stay should be no more
                                    than 30 days from the date of first entry in Dubai.
                                    <br><br>
                                    <strong>Note:</strong> This visa is valid across all UAE emirates, namely Dubai, Abu
                                    Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain<br>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row marginFromBottom whiteBG" id="fee">
                                    <h2 class="font-Weight-Normal row box_Sizing titleFont upperCase paddingAll darkBlueBG white mobpaddingAll"
                                        style="font-size: 20px;">Dubai 30 Days Multiple Entry Visa</h2>
                                    <div class="row">
                                        <form id="visaForm" name="visaForm" action="Web/visa_application_form"
                                            method="post" enctype="multipart/form-data">
                                            <input type="hidden" id="visa_type_id" name="visa_type_id" value="3">
                                            <input type="hidden" id="nationality_id" name="nationality_id" value="473">
                                            <input type="hidden" id="living_in_id" name="living_in_id" value="473">
                                            <input type="hidden" id="currency_id" name="currency_id" value="1">
                                            <input type="hidden" id="currency_symbol" name="currency_symbol" value="$">
                                            <input type="hidden" id="currency_code" name="currency_code" value="USD">
                                            <input type="hidden" id="govt_fee" name="govt_fee" value="204.00">
                                            <input type="hidden" id="service_fee" name="service_fee" value="241.00">
                                            <input type="hidden" id="gdrfa" name="gdrfa" value="N">
                                            <input type="hidden" id="processing_time" name="processing_time"
                                                value="24 - 72 Working Hours">

                                            <table class="tableStyle1" width="100%" cellspacing="5" cellpadding="0"
                                                border="0">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" width="50%">Service Type</td>
                                                        <td valign="top" width="50%">Regular Visa</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Type of Visa</td>
                                                        <td valign="top">30 Days Visa Multiple Entry </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Validity</td>
                                                        <td valign="top">60 days from the date of issue</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Stay Validity</td>
                                                        <td valign="top">30 days from the date of first entry</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Processing Time</td>
                                                        <td valign="top">24 - 72 Working Hours</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Fee </td>
                                                        <td valign="top"><span class="float-Disabled fontArial">$</span>
                                                            <span class="float-Disabled"
                                                                id="getCalFee_visa_3">445</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="white"
                                                            style="background:#093f62; font-size:20px;">Additional
                                                            Services</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="4" value="119" id="tif43"
                                                                class="tif3" style="display:none;margin:5px;"
                                                                onchange="calculateFee('4','3');">
                                                            <label for="tif43" class="checkbox-label"></label>
                                                            <span>Travel Insurance</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="<?=base_url()?>assets/website/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="<?=base_url()?>assets/website/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Travel Insurance</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">Travel
                                                                        Insurance, with COVID-19 coverage is mandatory,
                                                                        as per the UAE Government directive. Book the
                                                                        Government approved travel insurance along with
                                                                        your visa to avail a flat discount of $100 on
                                                                        the insurance fee.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 219</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 119
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="9" value="50" id="tif93"
                                                                class="tif3" style="display:none;margin:5px;"
                                                                onchange="calculateFee('9','3');">
                                                            <label for="tif93" class="checkbox-label"></label>
                                                            <span>Airport Transfer</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="<?=base_url()?>assets/website/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="<?=base_url()?>assets/website/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Airport Transfer</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">We
                                                                        offers you easy, hassle free and safe airport to
                                                                        hotel transfers at the lowest guaranteed
                                                                        price.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 219</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 50
                                                                <span
                                                                    class="float-Disabled line-height-regExtra font13 marginFromLeft">(available
                                                                    only at Dubai airport.)</span>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr class="meet" style="display:none;">
                                                        <td valign="top" colspan="2"
                                                            style="background:#e8f5fe; color:#093f62;"><strong>Meet
                                                                &amp; Assist Service</strong> <span
                                                                class="float-Disabled label fontEleven fontBold">(Click
                                                                to Expand)</span>
                                                            <div class="btn-meet">+</div><span
                                                                class="row font13 marginFromBottom"
                                                                style="line-height:5px;">available only at Dubai
                                                                airport.</span>
                                                        </td>
                                                    </tr>

                                                    <tr class="meetBox">
                                                        <td colspan="2" style="padding:0px;">
                                                            <table class="innerTable" width="100%" cellspacing="5"
                                                                cellpadding="0" border="0">
                                                                <!--<tr>
                            <td valign="top"><input type="radio" id="smas" style="display:none;margin:5px;"/><label for="smas" class="checkbox-label"></label><span>Silver Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Silver Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 86</td>
                          </tr>-->
                                                                <!--<tr>
                          <td valign="top" class="greyBG"><input type="radio" id="gmas" style="display:none;margin:5px;"/><label for="gmas" class="checkbox-label"></label><span>Gold Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Gold Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 166</td>
                          </tr>-->
                                                            </table>
                                                        </td>
                                                    </tr>





                                                    <tr>
                                                        <td valign="top" align="right"><strong>Total Fees</strong> </td>

                                                        <td valign="top">
                                                            <div class="fontBold"><span
                                                                    class="float-Disabled fontArial">$</span> <span
                                                                    class="float-Disabled"
                                                                    id="tot_fee_e_span3">445</span></div>
                                                            <input type="hidden" id="tot_fee_e3" value="445">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <!-- 	not required message-->
                                                        <!-- <td valign="top"><h4 class="alert-panel error marginFromBottomNone mobRow">Currently we are not processing this visa type.</h4></td>
                            <td valign="top">&nbsp;</td>-->
                                                        <td valign="top" colspan="2">
                                                            <div class="container">
                                                                <input type="hidden" id="additional_services3"
                                                                    name="additional_services">
                                                                <input
                                                                    class="button-large-extra custom-button marginFromBottomNone mobRow"
                                                                    value="Apply Now" name="submit_r" id="submit_r"
                                                                    type="submit">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </form>
                                    </div>
                                    <div class="row marginFromTop">* Travel Insurance, with COVID-19 coverage is
                                        mandatory, as per the UAE Government directive. Book the Government approved
                                        travel insurance along with your visa to avail a flat discount of $100 on the
                                        insurance fee.</div>

                                </div>
                            </div>
                        </div>
                        <div id="tab-22" class="tab-content" style="display: none;">
                            <div class="row daysVisaInfo" id="formBody">
                                <div id="stage11" class="row"> <strong>60 Days Visa (Multiple Entry):</strong> This is
                                    recommended for visitors planning for a long term stay in Dubai or UAE for multiple
                                    times like Meetings, Conferences or Transit stay etc.<br>60 Days Multiple Entry Visa
                                    will make travel between U.A.E. and visiting nearby countries easier for travelers
                                    who need to make multiple stops for Long time whether by air, land or sea and return
                                    to Dubai on the same visa rather than having to incur additional time and expense
                                    obtaining two or three or more separate visas.
                                    <br>
                                    The visa validity will be 60 days from the date of issue but stay should be no more
                                    than 60 days from the date of first entry in UAE.
                                    <br><br>
                                    <strong>Note:</strong> This visa is valid across all UAE emirates, namely Dubai, Abu
                                    Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain<br>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row marginFromBottom whiteBG" id="fee">
                                    <h2 class="font-Weight-Normal row box_Sizing titleFont upperCase paddingAll darkBlueBG white mobpaddingAll"
                                        style="font-size: 20px;">Dubai 60 Days Multiple Entry Visa</h2>
                                    <div class="row">
                                        <form id="visaForm" name="visaForm" action="Web/visa_application_form"
                                            method="post" enctype="multipart/form-data">
                                            <input type="hidden" id="visa_type_id" name="visa_type_id" value="22">
                                            <input type="hidden" id="nationality_id" name="nationality_id" value="473">
                                            <input type="hidden" id="living_in_id" name="living_in_id" value="473">
                                            <input type="hidden" id="currency_id" name="currency_id" value="1">
                                            <input type="hidden" id="currency_symbol" name="currency_symbol" value="$">
                                            <input type="hidden" id="currency_code" name="currency_code" value="USD">
                                            <input type="hidden" id="govt_fee" name="govt_fee" value="205.00">
                                            <input type="hidden" id="service_fee" name="service_fee" value="444.00">
                                            <input type="hidden" id="gdrfa" name="gdrfa" value="N">
                                            <input type="hidden" id="processing_time" name="processing_time"
                                                value="24 - 72 Working Hours">

                                            <table class="tableStyle1" width="100%" cellspacing="5" cellpadding="0"
                                                border="0">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" width="50%">Service Type</td>
                                                        <td valign="top" width="50%">Regular Visa</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Type of Visa</td>
                                                        <td valign="top">60 Days Visa Multiple Entry </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Validity</td>
                                                        <td valign="top">60 days from the date of issue</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Stay Validity</td>
                                                        <td valign="top">60 days from the date of first entry</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Processing Time</td>
                                                        <td valign="top">24 - 72 Working Hours</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Fee </td>
                                                        <td valign="top"><span class="float-Disabled fontArial">$</span>
                                                            <span class="float-Disabled"
                                                                id="getCalFee_visa_22">649</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="white"
                                                            style="background:#093f62; font-size:20px;">Additional
                                                            Services</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="4" value="144"
                                                                id="tif422" class="tif22"
                                                                style="display:none;margin:5px;"
                                                                onchange="calculateFee('4','22');">
                                                            <label for="tif422" class="checkbox-label"></label>
                                                            <span>Travel Insurance</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="<?=base_url()?>assets/website/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="<?=base_url()?>assets/website/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Travel Insurance</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">Travel
                                                                        Insurance, with COVID-19 coverage is mandatory,
                                                                        as per the UAE Government directive. Book the
                                                                        Government approved travel insurance along with
                                                                        your visa to avail a flat discount of $100 on
                                                                        the insurance fee.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 299</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 144
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="9" value="50" id="tif922"
                                                                class="tif22" style="display:none;margin:5px;"
                                                                onchange="calculateFee('9','22');">
                                                            <label for="tif922" class="checkbox-label"></label>
                                                            <span>Airport Transfer</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="<?=base_url()?>assets/website/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="<?=base_url()?>assets/website/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Airport Transfer</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">We
                                                                        offers you easy, hassle free and safe airport to
                                                                        hotel transfers at the lowest guaranteed
                                                                        price.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 299</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 50
                                                                <span
                                                                    class="float-Disabled line-height-regExtra font13 marginFromLeft">(available
                                                                    only at Dubai airport.)</span>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr class="meet" style="display:none;">
                                                        <td valign="top" colspan="2"
                                                            style="background:#e8f5fe; color:#093f62;"><strong>Meet
                                                                &amp; Assist Service</strong> <span
                                                                class="float-Disabled label fontEleven fontBold">(Click
                                                                to Expand)</span>
                                                            <div class="btn-meet">+</div><span
                                                                class="row font13 marginFromBottom"
                                                                style="line-height:5px;">available only at Dubai
                                                                airport.</span>
                                                        </td>
                                                    </tr>

                                                    <tr class="meetBox">
                                                        <td colspan="2" style="padding:0px;">
                                                            <table class="innerTable" width="100%" cellspacing="5"
                                                                cellpadding="0" border="0">
                                                                <!--<tr>
                            <td valign="top"><input type="radio" id="smas" style="display:none;margin:5px;"/><label for="smas" class="checkbox-label"></label><span>Silver Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Silver Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 86</td>
                          </tr>-->
                                                                <!--<tr>
                          <td valign="top" class="greyBG"><input type="radio" id="gmas" style="display:none;margin:5px;"/><label for="gmas" class="checkbox-label"></label><span>Gold Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Gold Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 166</td>
                          </tr>-->
                                                            </table>
                                                        </td>
                                                    </tr>





                                                    <tr>
                                                        <td valign="top" align="right"><strong>Total Fees</strong> </td>

                                                        <td valign="top">
                                                            <div class="fontBold"><span
                                                                    class="float-Disabled fontArial">$</span> <span
                                                                    class="float-Disabled"
                                                                    id="tot_fee_e_span22">649</span></div>
                                                            <input type="hidden" id="tot_fee_e22" value="649">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <!-- 	not required message-->
                                                        <!-- <td valign="top"><h4 class="alert-panel error marginFromBottomNone mobRow">Currently we are not processing this visa type.</h4></td>
                            <td valign="top">&nbsp;</td>-->
                                                        <td valign="top" colspan="2">
                                                            <div class="container">
                                                                <input type="hidden" id="additional_services22"
                                                                    name="additional_services">
                                                                <input
                                                                    class="button-large-extra custom-button marginFromBottomNone mobRow"
                                                                    value="Apply Now" name="submit_r" id="submit_r"
                                                                    type="submit">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </form>
                                    </div>
                                    <div class="row marginFromTop">* Travel Insurance, with COVID-19 coverage is
                                        mandatory, as per the UAE Government directive. Book the Government approved
                                        travel insurance along with your visa to avail a flat discount of $100 on the
                                        insurance fee.</div>

                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-content" style="display: none;">
                            <div class="row daysVisaInfo" id="formBody">
                                <div id="stage11" class="row"> <strong>96 Hours Transit Visa:</strong> This is a
                                    temporary short period visa and is recommended for visitors transiting from UAE to
                                    another country and looking for a very short stay in UAE not extending 96 hours.
                                    <br>
                                    The visa validity will be 60 days from the date of issue but stay should be no more
                                    than 96 hours from the time of entry in UAE.
                                    <br><br>
                                    <strong>Note:</strong> This visa is valid across all UAE emirates, namely Dubai, Abu
                                    Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain<br>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row marginFromBottom whiteBG" id="fee">
                                    <h2 class="font-Weight-Normal row box_Sizing titleFont upperCase paddingAll darkBlueBG white mobpaddingAll"
                                        style="font-size: 20px;">Dubai Transit Visa</h2>
                                    <div class="row">
                                        <form id="visaForm" name="visaForm" action="Web/visa_application_form"
                                            method="post" enctype="multipart/form-data">
                                            <input type="hidden" id="visa_type_id" name="visa_type_id" value="6">
                                            <input type="hidden" id="nationality_id" name="nationality_id" value="473">
                                            <input type="hidden" id="living_in_id" name="living_in_id" value="473">
                                            <input type="hidden" id="currency_id" name="currency_id" value="1">
                                            <input type="hidden" id="currency_symbol" name="currency_symbol" value="$">
                                            <input type="hidden" id="currency_code" name="currency_code" value="USD">
                                            <input type="hidden" id="govt_fee" name="govt_fee" value="82.00">
                                            <input type="hidden" id="service_fee" name="service_fee" value="67.00">
                                            <input type="hidden" id="gdrfa" name="gdrfa" value="N">
                                            <input type="hidden" id="processing_time" name="processing_time"
                                                value="24 - 72 Working Hours">

                                            <table class="tableStyle1" width="100%" cellspacing="5" cellpadding="0"
                                                border="0">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" width="50%">Service Type</td>
                                                        <td valign="top" width="50%">Regular Visa</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Type of Visa</td>
                                                        <td valign="top">Transit Visa Single Entry</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Validity</td>
                                                        <td valign="top">60 days from the date of issue</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Stay Validity</td>
                                                        <td valign="top">96 hours from the time of entry</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Processing Time</td>
                                                        <td valign="top">24 - 72 Working Hours</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">Visa Fee </td>
                                                        <td valign="top"><span class="float-Disabled fontArial">$</span>
                                                            <span class="float-Disabled"
                                                                id="getCalFee_visa_6">149</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="white"
                                                            style="background:#093f62; font-size:20px;">Additional
                                                            Services</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="4" value="79" id="tif46"
                                                                class="tif6" style="display:none;margin:5px;"
                                                                onchange="calculateFee('4','6');">
                                                            <label for="tif46" class="checkbox-label"></label>
                                                            <span>Travel Insurance</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="<?=base_url()?>assets/website/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="<?=base_url()?>assets/website/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Travel Insurance</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">Travel
                                                                        Insurance, with COVID-19 coverage is mandatory,
                                                                        as per the UAE Government directive. Book the
                                                                        Government approved travel insurance along with
                                                                        your visa to avail a flat discount of $100 on
                                                                        the insurance fee.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 179</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 79
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top">
                                                            <input type="checkbox" data-addid="9" value="50" id="tif96"
                                                                class="tif6" style="display:none;margin:5px;"
                                                                onchange="calculateFee('9','6');">
                                                            <label for="tif96" class="checkbox-label"></label>
                                                            <span>Airport Transfer</span>
                                                            <a href="#" class="meetInfobtn"><img class="lazy"
                                                                    data-src="<?=base_url()?>assets/website/images/info1.png"
                                                                    alt="Info" style="height:20px; width:20px"
                                                                    src="<?=base_url()?>assets/website/images/info1.png">
                                                                <div class="meetInfoBox">
                                                                    <h4
                                                                        class="row marginFromBottom blue borderFromBottom paddingFromBottom">
                                                                        Airport Transfer</h4>
                                                                    <span class="row"
                                                                        style="font-size:14px; line-height:22px;">We
                                                                        offers you easy, hassle free and safe airport to
                                                                        hotel transfers at the lowest guaranteed
                                                                        price.</span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td valign="top">
                                                            <div class="row">
                                                                <!--<span class="float-Disabled red" style="text-decoration:line-through; margin-right:5px;"><span class="float-Disabled fontArial">
						   $</span> 179</span>-->
                                                                <span class="float-Disabled fontArial">$</span> 50
                                                                <span
                                                                    class="float-Disabled line-height-regExtra font13 marginFromLeft">(available
                                                                    only at Dubai airport.)</span>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr class="meet" style="display:none;">
                                                        <td valign="top" colspan="2"
                                                            style="background:#e8f5fe; color:#093f62;"><strong>Meet
                                                                &amp; Assist Service</strong> <span
                                                                class="float-Disabled label fontEleven fontBold">(Click
                                                                to Expand)</span>
                                                            <div class="btn-meet">+</div><span
                                                                class="row font13 marginFromBottom"
                                                                style="line-height:5px;">available only at Dubai
                                                                airport.</span>
                                                        </td>
                                                    </tr>

                                                    <tr class="meetBox">
                                                        <td colspan="2" style="padding:0px;">
                                                            <table class="innerTable" width="100%" cellspacing="5"
                                                                cellpadding="0" border="0">
                                                                <!--<tr>
                            <td valign="top"><input type="radio" id="smas" style="display:none;margin:5px;"/><label for="smas" class="checkbox-label"></label><span>Silver Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Silver Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 86</td>
                          </tr>-->
                                                                <!--<tr>
                          <td valign="top" class="greyBG"><input type="radio" id="gmas" style="display:none;margin:5px;"/><label for="gmas" class="checkbox-label"></label><span>Gold Meet & Assist Service</span> <a href="javascript:void(0)" class="meetInfobtn"><img src="https://media.instadubaivisa.com/images/info1.png" alt="Info"><div class="meetInfoBox">
<h4 class="row marginFromBottom blue borderFromBottom paddingFromBottom">Gold Meet & Assist Service</h4>
<span class="row">
</span>
</div></a> </td>
                            <td valign="top" align="right"><span class="float-Disabled fontArial">$</span> 166</td>
                          </tr>-->
                                                            </table>
                                                        </td>
                                                    </tr>





                                                    <tr>
                                                        <td valign="top" align="right"><strong>Total Fees</strong> </td>

                                                        <td valign="top">
                                                            <div class="fontBold"><span
                                                                    class="float-Disabled fontArial">$</span> <span
                                                                    class="float-Disabled"
                                                                    id="tot_fee_e_span6">149</span></div>
                                                            <input type="hidden" id="tot_fee_e6" value="149">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <!-- 	not required message-->
                                                        <!-- <td valign="top"><h4 class="alert-panel error marginFromBottomNone mobRow">Currently we are not processing this visa type.</h4></td>
                            <td valign="top">&nbsp;</td>-->
                                                        <td valign="top" colspan="2">
                                                            <div class="container">
                                                                <input type="hidden" id="additional_services6"
                                                                    name="additional_services">
                                                                <input
                                                                    class="button-large-extra custom-button marginFromBottomNone mobRow"
                                                                    value="Apply Now" name="submit_r" id="submit_r"
                                                                    type="submit">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </form>
                                    </div>
                                    <div class="row marginFromTop">* Travel Insurance, with COVID-19 coverage is
                                        mandatory, as per the UAE Government directive. Book the Government approved
                                        travel insurance along with your visa to avail a flat discount of $100 on the
                                        insurance fee.</div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div
                            class="row marginFromTop border-Dashed paddingAllExtra mobmarginBtm30 greyGradiant mobBenif marginFromBottom">
                            <h2
                                class="row titleFont paddingFromBottom green borderFromBottom marginFromBottom line-height-regExtra">
                                Benefits of applying for Dubai Visa with us...</h2>
                            <div class="row content">

                                <ul>
                                    <li>99.9% - Our visa approval ratio, the highest in the industry.</li>
                                    <li>24 to 72 working hours dubai visa delivery time guarantee.</li>
                                    <li>We are available 24x7 on Online Chat Support / WhatsApp / Phone / Email / Skype
                                        to assist you.</li>
                                    <li>Prompt notifications on every stage of dubai visa processing via Email and
                                        WhatsApp.</li>
                                    <li>Air Tickets and Hotel booking not required before dubai visa approval.</li>
                                    <li>Along with being your visa provider, we will also be your sponsor. So no
                                        additional sponsor required for your <a href="<?=base_url()?>"
                                            title="Dubai Visa">Dubai Visa</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div
                        class="row paddingAllExtra marginFromTop line-height-regExtra alignFromJustify alert-panel notification">
                        <p>Apply Dubai visa from Albania for Albanians with our expert assistance. Fast &amp; secure
                            process with express visa service.</p>
                        <p>Get complete details and information for processing 14 days Dubai visa , 30 days Dubai visa
                            and 90 days Dubai tourist visa based on the purpose of your visit to Dubai from Albania for
                            Albanians national &amp; Albanians passport holders.</p>
                        <p>Read some of the Interesting Facts below.</p>
                        <p>To visit Dubai, Abu Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain, you
                            will require a UAE tourist visa that is valid for an entire UAE.</p>
                        <p>The Dubai visa in the form of an electronic authorization (EVisa) can be obtained by
                            submitting your Albanians passport copy online. We have simplified the Dubai <a
                                href="<?=base_url()?>Web/visa_application_form" title="Dubai Visa Application Form">visa
                                application form </a>for Albanians nationals
                            travelling from Albania.</p>
                    </div>
                    <div class="row displayNone mobDisplayBlock">
                        <div class="row border-Dashed paddingAll int">
                            <h2
                                class="row titleFont paddingFromBottom font-Weight-Normal white borderFromBottom marginFromBottom line-height-regExtra">
                                Interesting Facts...</h2>
                            <div class="row content white">

                                <ul>
                                    <li style="margin-left:10px;">Did you know with instadubaivisa.com, getting a Dubai
                                        visa for Albanians citizens is extremely simple. We processed more than 10 Lakhs
                                        UAE visa for Albanians nationals from Albania in the last 6 Months?
                                    </li>
                                    <li style="margin-left:10px;">Our average visa processing time for Albanians
                                        nationals is less than 48 hours... the quickest turnaround time in the industry!
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="row marginFromTop line-height-reg">
                        <div
                            class="row alignFromCenter fontTwnty8 font-Weight-Normal titleFont upperCase marginFromBottom paddingFromBottom">
                            Frequently Asked Questions (FAQs)</div>
                        <div class="accordion_container">

                            <div class="row">
                                <a href="#" class="accordion_head submenuheader" headerindex="0h"><span
                                        class="accordprefix"></span><span class="accordprefix"></span>Do I need Dubai
                                    visa from Albania? <span class="accordsuffix"><img
                                            data-src="<?=base_url()?>assets/website/images/plus.png"
                                            class="statusicon lazy" alt="faq"></span><span class="accordsuffix"><img
                                            data-src="<?=base_url()?>assets/website/images/plus.png"
                                            class="statusicon lazy" alt="faq"></span></a>
                                <div class="accordion_body" contentindex="0c" style="display: none;">Yes, all Albanians
                                    passport holders require a visa to visit Dubai. A Dubai tourist visa is most
                                    appropriate for Albanians travelling to the UAE for recreational purposes such as
                                    holidaying, sightseeing, business trips or even short family visits. Albanians
                                    passport holders travelling to UAE for tourist purposes can easily apply for Dubai
                                    visa online. Once your visa application is approved, you will receive an approved
                                    visa copy via email.</div>
                            </div>
                            <div class="row">
                                <a href="#" class="accordion_head submenuheader" headerindex="1h"><span
                                        class="accordprefix"></span><span class="accordprefix"></span>How do Albanians
                                    can get a Dubai Visa? <span class="accordsuffix"><img
                                            data-src="<?=base_url()?>assets/website/images/plus.png"
                                            class="statusicon lazy" alt="faq"></span><span class="accordsuffix"><img
                                            data-src="<?=base_url()?>assets/website/images/plus.png"
                                            class="statusicon lazy" alt="faq"></span></a>
                                <div class="accordion_body" contentindex="1c" style="display: none;">If you are planning
                                    to visit Dubai or any emirates for a short period, you can easily obtain a Dubai
                                    visa online from instadubaivisa in the form of ETA – Electronic Travel
                                    Authorization. Albanians can apply for the Dubai Visa online with proper scanned
                                    copies or the documents photo can be clicked from mobile too of the documents from
                                    the comfort of their homes. On successful completion, Dubai Tourist Visa will be
                                    provided through an email in PDF or JPG format. Instadubaivisa processes Dubai visas
                                    for Albanians in 24-72 Working hours.</div>
                            </div>
                            <div class="row">
                                <a href="#" class="accordion_head submenuheader" headerindex="2h"><span
                                        class="accordprefix"></span><span class="accordprefix"></span>What are the Dubai
                                    Visa requirements for Albanians? <span class="accordsuffix"><img
                                            data-src="<?=base_url()?>assets/website/images/plus.png"
                                            class="statusicon lazy" alt="faq"></span><span class="accordsuffix"><img
                                            data-src="<?=base_url()?>assets/website/images/plus.png"
                                            class="statusicon lazy" alt="faq"></span></a>
                                <div class="accordion_body" contentindex="2c" style="display: none;">The following
                                    documents are required to get your Dubai Visa:
                                    <div class="row content">
                                        <ul>
                                            <li>Copy of your passport</li>
                                            <li>Scanned coloured photograph with any background</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <a href="#" class="accordion_head submenuheader" headerindex="3h"><span
                                        class="accordprefix"></span><span class="accordprefix"></span>How to apply for
                                    Dubai Visa online for Albanians?<span class="accordsuffix"><img
                                            data-src="<?=base_url()?>assets/website/images/plus.png"
                                            class="statusicon lazy" alt="faq"></span><span class="accordsuffix"><img
                                            data-src="<?=base_url()?>assets/websiteimages/plus.png"
                                            class="statusicon lazy" alt="faq"></span></a>
                                <div class="accordion_body" contentindex="3c" style="display: none;">Dubai visa for
                                    Albanians can be acquired by filling the simple online visa application form or only
                                    you have to contact on the whatsapp support no rest Instadubaivsa will take off.
                                </div>
                            </div>
                            <div class="row">
                                <a href="#" class="accordion_head submenuheader" headerindex="4h"><span
                                        class="accordprefix"></span><span class="accordprefix"></span>What is the photo
                                    size requirement to apply dubai visa?<span class="accordsuffix"><img
                                            data-src="<?=base_url()?>assets/website/images/plus.png"
                                            class="statusicon lazy" alt="faq"></span><span class="accordsuffix"><img
                                            data-src="<?=base_url()?>assets/website/images/plus.png"
                                            class="statusicon lazy" alt="faq"></span></a>
                                <div class="accordion_body" contentindex="4c" style="display: none;">A clear
                                    front-facing photograph (with any background colour) of the applicant.</div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="column-two paddingFromLeft box_Sizing mobpadding-0" id="req">
                    <div class="row box_Sizing greyBG marginFromBottom mobmargin-0">
                        <h4
                            class="row font-Weight-Normal paddingAll white titleFont upperCase darkBlueBG line-height-regExtra">
                            Required Documents</h4>
                        <div class="row fontBold paddingAll titleFont line-height-reg paddingFromBottomNone"
                            style="color:#093f62;">Fill out the dubai visa application form online &amp; upload (soft)
                            copies of the following documents:</div>
                        <div class="row points-inner paddingAll">
                            <ul>
                                <li><strong>Copy of Albanians Passport.</strong> A clear copy of your valid passport
                                    with at least 6 months remaining validity.</li>
                                <li><strong>Photograph:</strong> A clear front-facing photograph (with any background
                                    colour) of the applicant.</li>

                                <!-- <li><strong>Travel Insurance with COVID-19 coverage:</strong> Valid till your visa duration.</li>-->
                                <li id="extraCont" style="display: none;"><strong>Note:</strong> This visa is valid
                                    across all UAE emirates, namely Dubai, Abu Dhabi, Ajman, Sharjah, Fujairah, Ras Al
                                    Khaimah and Umm Al Quwain.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <!--Repeat coustomer popup start-->
                        <div class="row marginFromTop">
                            <div class="row callArrangeBox1" id="IdRpopUp" style="" onclick="showRepeatYes('Yes')">
                                <div class="marginFromRight callImg1" style="margin-bottom:0px;"><img class="lazy"
                                        data-src="<?=base_url()?>assets/website/images/repeat-customer.png" width="24"
                                        height="24" alt="repeat customer" title="repeat customer"
                                        src="<?=base_url()?>assets/website/images/repeat-customer.png"></div>
                                <div class="transForm1" style="line-height:25px;">Repeat Customer ?</div>
                            </div>
                            <div class="row paddingAll alignFromCenter mobpadding-0 mobDisplayNone">Kindly choose this
                                option (repeat customer) if you have previously applied here. You can re-apply in less
                                than 30 seconds!</div>
                        </div>
                        <div class="popup" id="IDRpopUpBody" style="height:132px;">
                            <div class="popupCloseIcon" id="popupCloseIcon"><img class="lazy"
                                    data-src="<?=base_url()?>assets/website/images/wrong.png" alt="close" title="close"
                                    src="<?=base_url()?>assets/website/images/wrong.png"></div>
                            <div class="formWrap">
                                <form action="Web/visa_application_form" method="post" name="repeatcust"
                                    id="repeatcust">
                                    <div class="formBox">
                                        <h6 id="popuptitle">Enter Your Passport Number and Travel Date</h6>
                                        <div class="row marginFromBottom">
                                            <div class="marginFromRight">
                                                <div class="marginFromRight"></div>
                                                <div class="marginFromRight paddingFromRight">
                                                    <!--<input type="radio" name="repeatCustomer[]" required class="" value="Yes" onClick="showRepeatYes(this.value,);" style="margin-top:4px;"/>-->
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="marginFromRight"></div>
                                                <div class="">
                                                    <!--<input type="radio" name="repeatCustomer[]" required class="" value="No" onClick="showRepeatYes(this.value,);" style="margin-top:4px;"/>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div id="repeatYes" style="display:none;">
                                            <div style="display:none;" class="row marginFromBottom" id="loader">
                                                <div style="float:left;margin-right:7px;"><img width="20" height="20"
                                                        class="lazy"
                                                        data-src="<?=base_url()?>assets/website/images/loading.gif"
                                                        alt="loading" title="loading"
                                                        src="<?=base_url()?>assets/website/images/loading.gif"></div>
                                                <div style="float:left;margin-top:3px;">Please wait..</div>
                                            </div>
                                            <div class="row">
                                                <input type="text" name="passportNumber" id="passportNumber"
                                                    placeholder="Passport Number" class="form-control-input"
                                                    onclick="removeError(this.id);"
                                                    onkeypress="return /\w/.test(String.fromCharCode(event.keyCode))">
                                            </div>
                                            <div class="row">
                                                <input type="text" readonly="" id="travelingData" name="travelingData"
                                                    class="form-control-input calendar" placeholder="Date of Arrival"
                                                    value="" onclick="removeError(this.id);">
                                                <input type="hidden" name="RepeatSubmit" class="form-control-input"
                                                    value="Submit">
                                                <input type="hidden" name="service_type" class="form-control-input"
                                                    value="Regular">
                                                <input type="hidden" id="visa_type_id_repeat" name="visa_type_id"
                                                    value="">
                                                <input type="hidden" name="nationality_id" value="473">
                                                <input type="hidden" name="living_in_id" value="473">
                                                <input type="hidden" name="currency_id" value="1">
                                                <input type="hidden" name="currency_symbol" value="$">
                                                <input type="hidden" name="currency_code" value="USD">
                                                <input type="hidden" name="processing_time"
                                                    value="24 - 72 Working Hours">
                                            </div>
                                            <div class="row">
                                                <input id="sub" type="button" name="RepeatSubmitButton"
                                                    class="button primary-button marginFromBottomNone" value="Submit"
                                                    onclick="return checkPassportNumber();">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--Repeat End -->
                        <div class="row posRelative marginFromBottom" id="visaDummyBoximg">
                            <a href="#" class="container alignFromCenter visaDummyBox borderFromAll label"><img
                                    data-src="<?=base_url()?>assets/website/images/eVisa.jpg" alt="Visa Sample"
                                    title="Visa Sample" width="150" height="200" class="marginFromBottom lazy"
                                    src="<?=base_url()?>assets/website/images/eVisa.jpg"><br>VISA SAMPLE</a>
                            <div class="row visaDummyBoxLarge">
                                <div class="visaDummyBoximg"><img class="lazy"
                                        data-src="<?=base_url()?>assets/website/images/eVisa.jpg" alt="Visa Sample"
                                        title="Visa Sample" height="600"
                                        src="<?=base_url()?>assets/website/images/eVisa.jpg">
                                    <div class="visaDummyBoxClose"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row border-Dashed paddingAll int mobDisplayNone">
                            <h2
                                class="row titleFont paddingFromBottom font-Weight-Normal white borderFromBottom marginFromBottom line-height-regExtra">
                                Interesting Facts...</h2>
                            <div class="row content white">
                                <ul>
                                    <li style="margin-left:10px; text-align:left;">Did you know getting a Dubai visa for
                                        Albanians citizens is extremely simple. We processed more than 10 Lakhs UAE visa
                                        for Albanians nationals from Albania in the last 6 Months?
                                    </li>
                                    <li style="margin-left:10px; text-align:left;">Our average visa processing time for
                                        Albanians nationals is less than 48 hours the quickest turnaround time in the
                                        industry!</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>
</div>




<script>
function hideSample() {
    var visattype = $(".current").find("a").attr("href").replace("#tab-", "");
    if (visattype == 23 || visattype == 8) {
        $("#visaDummyBoximg").hide()
    } else {
        $("#visaDummyBoximg").show()
    }

}

function submitCheck() {
    var nationality = document.getElementById('nationality').value;
    var str = nationality.split('#');
    var nationality_name = str[1];
    var nationality_id = str[0];
    var living_in = document.getElementById('living_in').value;
    var str = living_in.split('#');
    var living_in_name = str[1];
    var living_in_id = str[0];
    document.viewVisaDetails.action = '/uaevisa/' + encodeURIComponent(living_in_name.toLowerCase()).replace(/%20/g,
        '-') + '/' + encodeURIComponent(nationality_name.toLowerCase()).replace(/%20/g, '-');
    document.forms["viewVisaDetails"].submit();
    ad
}
</script>

<?php include_once "include/footer.php";?>