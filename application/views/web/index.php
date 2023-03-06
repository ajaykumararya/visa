<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "include/head.php"; 
    ?>
</head>

<body>
    <div class="wrapper">
        <?php include_once "include/header.php"; ?>

        <div class="row bannerPanel header-Panel">
            <div class="wrap pos-Reltv">
                <div class="searchPanelBox mobRadius" id="applyNow">
                    <div class="searchPanelTitle">Apply Visa Now</div>
                    <form action="<?=base_url()?>Web/response" method="post">
                        <div class="searchPanel">
                            <div class=" marginFromBottom column-four">
                                <p class=" ptext4 label font-Weight-Normal col-sm-5">I am a Citizen of</p>

                                <select class="advance-search" name="nationality" id="nationality">
                                    <option value="">Select</option>
                                    <?php
                                    foreach(config_item('citizen') as $row){
                                      echo '<option value="'.$row.'">'.$row.'</option>';
                                    }
                                    ?>
                                   
                                </select>
                            </div>
                            <div class=" marginFromBottom column-four">
                                <p class="ptext4 label font-Weight-Normal col-sm-5">I am Travelling From </p>
                                <select class="advance-search" id="living_in" name="living_in">
                                    <option value="">Select</option>
                                    <?php
                                    foreach(config_item('traveling') as $row){
                                      echo '<option value="'.$row.'">'.$row.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="column-one-four col-sm-1 mobContainer">
                                <div class="row label mobDisplayNone">&nbsp;</div>
                                <input type="submit"
                                    class="row button-large primary-button marginFromBottomNone alignFromCenter"
                                    value="GO" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="slideshow-panel" data-transition="crossfade" data-loop="true" data-skip="false">
                    <ul class="carousel">
                        <li class="slide">
                            
                                <?php
                                $sau = $this->db->get('setting');
                                    foreach($sau->result() as $row){
                                      echo 
                                            '<img class="lazy" value="'.$row->header_image.'"
                                            data-src="" width="100%"
                                            height="360" title="Tourist Dubai Visa" alt="apply for Dubai, UAE visa online" />';
                                    }
                                    ?>
                        </li>
                                
                    </ul>
                </div>
                <div class="welcomeTextPanel" style="float:right">
                    <div class="ptext white font-Weight-Normal"><span class="marginFromRight">Get</span>
                        <h1 class="">Tourist Dubai Visa</h1>
                        <span class="">easier & faster</span>
                    </div>
                    <div class="row alignFromCenter line-height-reg white">Touristdubaivisa.com is an online platform
                        that provides information about visa requirements, processes, and procedures for individuals who
                        wish to travel to a foreign country. It is designed to help people understand the steps they
                        need to take in order to obtain a visa, and to provide resources that can help them through the
                        visa application process.</div>
                </div>
            </div>
        </div>

        <!-- BODY PANEL -->
        <div class="row body-panel paddingFromTopNone">
            <section class="row abtPanel">
                <div class="wrap">
                    <h2 class="title1">DUBAI VISA PROCESSING Steps</h2>
                    <div class="stepPanel" id="aplyonlineBtn">
                        <DIV class="column-three mobRow"><img class="lazy"
                                data-src="<?=base_url()?>assets/website/media/images/step-1.png" width="45" height="45"
                                alt="Dubai Visa Process" title="Step 1" /></div>
                        <div class="column-seven mobRow">
                            <div class="column-six alignFromCenter mobpaddingInBox">
                                <div class="tdv-img-sprites applyonline"></div>
                            </div>
                            <div class="stepPanelContentBox" id="aplyonline">Choose your preferred Dubai visa type ,
                                Fill Online <a href="dubai-visa-application-form.php"
                                    title="Dubai Application Visa Form" class="float-Disabled white">Dubai Application
                                    Visa Form </a> & Upload your Documents.</div>
                        </div>
                        <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Apply Dubai Visa Online
                        </p>
                    </div>
                    <div class="stepPanel" id="makepaymntBtn">
                        <DIV class="column-three mobRow"><img class="lazy"
                                data-src="<?=base_url()?>assets/website/media/images/step-2.png" width="45" height="45"
                                alt="Pay Dubai Visa Fees Online" title="Step 2" /></div>
                        <div class="column-seven mobRow">
                            <div class="column-six alignFromCenter mobpaddingInBox">
                                <div class="tdv-img-sprites payOnline"></div>
                            </div>
                            <div class="stepPanelContentBox" id="makepaymnt">From our secured payment gateway, pay your
                                dubai visa fees with complete peace of mind. (Both Credit & Debit Cards accepted)</div>
                        </div>
                        <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Pay visa fees online</p>
                    </div>
                    <div class="stepPanel" id="visaProcessBtn">
                        <DIV class="column-three mobRow"><img class="lazy"
                                data-src="<?=base_url()?>assets/website/media/images/step-3.png" width="45" height="45"
                                alt="Dubai visa is sent for processing" title="Step 3"></div>
                        <div class="column-seven mobRow"></div>
                        <div class="column-seven mobRow">
                            <div class="column-six alignFromCenter mobpaddingInBox">
                                <div class="tdv-img-sprites visaProcessing"></div>
                            </div>
                            <div class="stepPanelContentBox" id="visaProcess">Our team of experts will scrutinize your
                                application before sending it to UAE authorities for processing.</div>
                        </div>
                        <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Visa is sent for
                            processing</p>
                    </div>
                    <div class="stepPanel" id="downloadBtn">
                        <DIV class="column-three mobRow"><img class="lazy"
                                data-src="<?=base_url()?>assets/website/media/images/step-4.png" width="45" height="45"
                                alt="Print Dubai Visa and Fly to Dubai" title="Step 4" /></div>
                        <div class="column-seven mobRow">
                            <div class="column-six alignFromCenter mobpaddingInBox">
                                <div class="tdv-img-sprites printFly"></div>
                            </div>
                            <div class="stepPanelContentBox" id="download">We will mail you
                                im<?=base_url()?>assets/website/mediately after it is approved. Take a printout & fly to
                                Dubai. Bon Voyage! </div>
                        </div>
                        <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Print visa & fly to UAE.
                        </p>
                    </div>
                </div>
            </section>
            <div class="wrap">
                <p class="row paddingAllExtra greyBG green border-Dashed marginFromTop alignFromCenter line-height-regExtra"
                    style="font-weight:normal;font-size:16px">We have become the world’s largest supplier of online
                    Dubai visas, successfully processing more than 1,00,000 Visa of Dubai per month. We are proud of the
                    fact that our rejection rate is less than 0.02%, the absolute lowest in the industry. For a limited
                    time only, we are offering a 100% refund guarantee*, in the slim case your visa application is not
                    approved by the UAE immigration department. We are the only company in the world offering such a
                    guarantee!
                </p>
                <section class="row flagBG">
                    <div class="whyUsBoxPanel">
                        <div class="column-four whyUsPanel">
                            <div class="column-two mob20"><img
                                    data-src="<?=base_url()?>assets/website/media/images/logo.png" width="80"
                                    height="70" alt="Dubai Visa" title="Dubai Visa"
                                    class="mobIMG pull_left circle lazy" /></div>
                            <div class="column-eight mob80">
                                <p class="ptext1 black paddingFromBottom marginFromTop marginFromBottom mobpadding-0">
                                    Why Tourist Dubai Visa?</p>
                                <div class="row points padding-All-sm whyTDV">
                                    <ul>
                                        <li>More than 8 million visas issued and counting</li>
                                        <li>Quick processing & turnaround time</li>
                                        <li>Apply dubai visa online from the comfort of your home and workplace</li>
                                        <li>Easy dubai online visa application form</li>
                                        <li>Application handling by trained specialists</li>
                                        <li>Entire website secured & protected with Industry-Leading 256-bit SSL</li>
                                        <li>Convenient Payment Options - Credit and Debit Cards accepted</li>
                                        <li>Notification via email on each and every stage of processing</li>
                                        <li>24X7 chat support from experts.</li>
                                        <li>we are offering a 100% refund assurance</li>
                                        <li>The processing time may take anytime between 24 to 72 working hours.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="column-six box_Sizing borderFromLeft visaTypePanel">
                            <div class="row">
                                <h3 class="headingtext1 upperCase paddingFromBottom black marginFromTop mobpadding-0">
                                    Types of dubai Visa</h3>
                            </div>
                            <div class="tab-panel padding-0">
                                <div id="tabs-container" class="row">
                                    <ul class="tabs-menu">
                                        <li class="current"><a href="#tab-1">14 Days<br />
                                                <span class="row" style="line-height:12px; font-size:10px;">(Single
                                                    Entry)</span></a></li>
                                        <li><a href="#tab-2">30 Days<br />
                                                <span class="row" style="line-height:12px; font-size:10px;">(Single
                                                    Entry)</span></a></li>
                                        <li><a href="#tab-3">30 Days<br />
                                                <span class="row" style="line-height:12px; font-size:10px;">(Multiple
                                                    Entry)</span></a></li>
                                        <li><a href="#tab-4">60 Days<br />
                                                <span class="row" style="line-height:12px; font-size:10px;">(Single
                                                    Entry)</span></a></li>
                                        <li><a href="#tab-9">Transit Visa<br />
                                                <span class="row" style="line-height:12px; font-size:10px;">(Single
                                                    Entry)</span></a></li>
                                    </ul>
                                    <div class="tab">
                                        <div class="tab-content" id="tab-1">
                                            <p><span class="blue marginFromRight"><a
                                                        href="visa-online/14-days-dubai-visa.php"
                                                        title="14 Days Dubai Visa Single Entry">14 Days Visa:</a></span>
                                                This is recommended for visitors planning for a short stay in Dubai for
                                                Trips, Meetings, Conferences or Transit stay etc. Requirements for
                                                obtaining the 14 Days Duabi Visa varies depending on your nationality.
                                            </p>
                                            <p>14 Days Dubai Visa is a single entry visa, which entitles you to stay for
                                                up to 14 days. The validity will be 60 days from the date of issue but
                                                stay should be no more than 14 days from the date of entry. </p>
                                            <p><span class="blue marginFromRight">Processing Time:</span> The processing
                                                time may take anytime between 24 to 72 working hours.</p>
                                            <p><strong>Note:</strong> Valid across all UAE emirates, namely Dubai, Abu
                                                Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain.</p>
                                        </div>
                                        <div class="tab-content" id="tab-2">
                                            <p><span class="blue marginFromRight"><a
                                                        href="visa-online/30-days-dubai-visa.php"
                                                        title="30 Days Dubai Visa Single Entry">30 Days Visa:</a></span>
                                                If you want to take a short trip to UAE to catch up with your family or
                                                friends, then this is valid for 30 days will be the ideal option for
                                                you. Requirements for obtaining the 30 Days Dubai eVisa varies depending
                                                on your nationality. </p>
                                            <p>30 Days Visa is a single entry visa, which entitles you to stay for up to
                                                30 days. The validity will be 60 days from the date of issue but stay
                                                should be no more than 30 days from the date of entry </p>
                                            <p><span class="blue marginFromRight">Processing Time:</span> The processing
                                                time for the 30 Days Dubai Visa may take anytime between 24 to 72
                                                working hours.</p>
                                            <p><strong>Note:</strong> Valid across all UAE emirates, namely Dubai, Abu
                                                Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain.</p>
                                        </div>
                                        <div class="tab-content" id="tab-3">
                                            <p><span class="blue marginFromRight"><a
                                                        href="visa-online/30-days-dubai-visa-multiple-entry.php"
                                                        title="30 Days Dubai Visa Multiple Entry">30 Days Visa (Multiple
                                                        Entry):</a></span> Its perfect for people who want to take
                                                frequent / multiple visits to UAE in a span of 30 days. Make as many
                                                visits for 30 days from first date of entry into UAE.</p>
                                            <p>30 Days Visa (Multiple Entry) is a multiple entry visa, which entitles
                                                you to stay .for up to 30 days or less. The validity will be 60 days
                                                from the date of issue but stay should be no more than 30 days from the
                                                date of entry. You can travel multiple times to UAE in this span of 30
                                                days.</p>
                                            <p><span class="blue marginFromRight">Processing Time:</span> The processing
                                                time for the 30 Days (Multiple Entry) Dubai Visa may take anytime
                                                between 24 to 72 working hours. </p>
                                            <p><strong>Note:</strong> Valid across all UAE emirates, namely Dubai, Abu
                                                Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain.</p>
                                        </div>
                                        <div class="tab-content" id="tab-4">
                                            <p><span class="blue marginFromRight"><a
                                                        href="visa-online/60-days-dubai-visa.php"
                                                        title="60 Days Dubai Visa Single Entry">60 Days Visa (Single
                                                        Entry):</a></span> This is recommended for visitors planning for
                                                a medium term stay (less than 2 months) in UAE to visit their family or
                                                friends. This is a Single Entry Visa and once the visitor exits UAE
                                                (within a span of 60 days), the visa expires. Requirements for obtaining
                                                the 60 Days UAE Visa varies depending on your nationality.<br>
                                            </p>
                                            <p>60 Days Visa (Single Entry) is a single entry visa, which entitles you to
                                                stay .for up to 60 days or less. The validity will be 60 days from the
                                                date of issue and your stay should also be no more than 60 days from the
                                                date of entry.</p>
                                            <p><span class="blue marginFromRight">Processing Time:</span> The processing
                                                time for the 60 Days (Single Entry) Dubai Visa may take anytime between
                                                24 to 72 working hours. </p>
                                            <p><strong>Note:</strong> Valid across all UAE emirates, namely Dubai, Abu
                                                Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain.</p>
                                        </div>
                                        <div class="tab-content" id="tab-5">
                                            <p><span class="blue marginFromRight"><a
                                                        href="visa-online/90-days-dubai-visa.php"
                                                        title="90 Days Dubai Visa Single Entry">90 Days Visa:</a></span>
                                                This is recommended for visitors planning for a long term stay in UAE to
                                                visit their family or friends. This is a Single Entry Visa and once the
                                                visitor exits UAE (within a span of 90 days), the visa expires.
                                                Requirements for obtaining the 90 Days UAE Visa varies depending on your
                                                nationality.<br>
                                            </p>
                                            <p>90 Days Visa (Single Entry) is a single entry visa, which entitles you to
                                                stay .for up to 90 days or less. The validity will be 60 days from the
                                                date of issue but stay should be no more than 90 days from the date of
                                                entry.</p>
                                            <p><span class="blue marginFromRight">Processing Time:</span> The processing
                                                time for the 90 Days (Single Entry) Dubai Visa may take anytime between
                                                24 to 72 working hours.</p>
                                            <p><strong>Note:</strong> Valid across all UAE emirates, namely Dubai, Abu
                                                Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain.</p>
                                        </div>
                                        <div class="tab-content" id="tab-6">
                                            <p><span class="blue marginFromRight"><a
                                                        href="visa-online/90-days-dubai-visa-multiple-entry.php"
                                                        title="90 Days Dubai Visa Multiple Entry">90 Days Visa (Multiple
                                                        Entry):</a></span> 90 Days Multiple Entry Visa will make travel
                                                between U.A.E. and visiting nearby countries easier for travelers who
                                                need to make multiple stops for Long time whether by air, land or sea
                                                and return to UAE on the same visa rather than having to incur
                                                additional time and expense obtaining two or three or more separate
                                                visas. Requirements for obtaining the 90 Days UAE Visa varies depending
                                                on your nationality.<br>
                                            </p>
                                            <p>90 Days Visa (Multiple Entry) is a multiple entry visa, which entitles
                                                you to stay .for up to 90 days or less. The validity will be 60 days
                                                from the date of issue but stay should be no more than 90 days from the
                                                date of entry. You can travel multiple times to UAE in this span of 90
                                                days.</p>
                                            <p><span class="blue marginFromRight">Processing Time:</span> The processing
                                                time for the 90 Days (Multiple Entry) Dubai Visa may take anytime
                                                between 24 to 72 working hours. </p>
                                            <p><strong>Note:</strong> Valid across all UAE emirates, namely Dubai, Abu
                                                Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain.</p>
                                        </div>

                                        <div class="tab-content" id="tab-9">
                                            <p><span class="blue marginFromRight"><a
                                                        href="<?=base_url()?>Web/transit_visa"
                                                        title="96 Hours Transit Dubai Visa Single Entry">96 Hours
                                                        Transit Visa (Single Entry):</a></span> 96 Hours Transit Visa
                                                will make travel between U.A.E. and visiting nearby countries easier for
                                                travelers who need to make multiple stops for Long time whether by air,
                                                land or sea and return to Dubai on the same visa rather than having to
                                                incur additional time and expense obtaining two or three or more
                                                separate visas. Requirements for obtaining the 96 Hours Transit Visa
                                                varies depending on your nationality.<br>
                                            </p>
                                            <p>96 Hours Transit Visa is a Single entry visa, which entitles you to stay
                                                .for up to 96 Hours or less. The validity will be 60 days from the date
                                                of issue but stay should be no more than 96 Hours from the date of
                                                entry. You can travel multiple times to UAE in this span of 96 Hours.
                                            </p>
                                            <p><span class="blue marginFromRight">Processing Time:</span> The processing
                                                time may take anytime between 24 to 72 working hours. </p>
                                            <p><strong>Note:</strong> Valid across all UAE emirates, namely Dubai, Abu
                                                Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <section class="row gapping borderFromTop borderFromBottom">
                <div class="row reviewTitle"><span class="reviewTitle row">What our customers say</span></div>
                <div id="galleryBox">
                    <div class="slideshow" data-visible="4" data-pagination="false" data-offset="3" data-auto="6000">
                        <ul class="carousel">
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/5-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 06, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">I’m very confident to give them…
                                </span> <span class="row paddingFromTop">I’m very confident to give them excellent
                                    feedback because I got professional excellent services .

                                </span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/5-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 06, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">They are very gentle and fast
                                </span> <span class="row paddingFromTop">They are very gentle and fast. They tried to
                                    help in every way. I was very satisfied with their service.

                                </span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/4-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 06, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">Fast service
                                </span> <span class="row paddingFromTop">Fast service
                                </span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/5-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 05, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">Excellent
                                </span> <span class="row paddingFromTop">Fast, efficient and friendly staff. I will
                                    recommend you to friends and make use of the service in future

                                </span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/5-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 05, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">Information feedback
                                </span> <span class="row paddingFromTop">Chatting with Jacqueline is very satisfactory.
                                    Provide instant feedback upon all my queries.

                                    But Maryam was too irresponsible.</span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/5-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 05, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">Best service
                                </span> <span class="row paddingFromTop">Best service , very polite and very helpfull

                                </span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/4-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 04, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">Good service recommended to go for visa…
                                </span> <span class="row paddingFromTop">Good service recommended to go for visa
                                    processing

                                </span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/5-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 03, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">Great service
                                </span> <span class="row paddingFromTop">Applied for visa via India and would commend
                                    the team for asking the right information and keeping us in loop at each step.
                                    Highly recommended

                                </span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/5-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 03, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">I got my visa in the promised time
                                </span> <span class="row paddingFromTop">I got my visa in the promised time! It was a
                                    last minute application and they delivered on their promise! The only issue is that
                                    they do not have a te..</span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/5-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 03, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">Dont go by Reviews, trust your instinct.
                                    Insta..</span> <span class="row paddingFromTop">I was skeptical after reading so
                                    many mixed reviews all over the internet. Oh! How i have been proven wrong. This is
                                    one of the most legit, quick acti..</span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/5-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 03, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">Excellent Service and Promptness in
                                    Handling Q..</span> <span class="row paddingFromTop">Excellent Service and prompt
                                    response with each and every query was the best part. Everything was managed
                                    smoothly and within set timelines. Didn't ha..</span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/4-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 03, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">Always nerve-racking to apply for eVisas
                                </span> <span class="row paddingFromTop">It is always nerve-racking to apply and receive
                                    Visas for travel. More so now that you need to upload them to a website. I did
                                    receive my Kenya eVisa ..</span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/5-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 03, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">Absolutely happy with our experience
                                </span> <span class="row paddingFromTop">Absolutely happy with our experience. We
                                    requested and paid for 7 UAE visas and insurance on the 21st of May and received all
                                    7 24th May 2022. I don't..</span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/5-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 02, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">appreciation
                                </span> <span class="row paddingFromTop">thanks for all

                                </span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/5-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 02, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">Amazing company with outstanding…
                                </span> <span class="row paddingFromTop">Amazing company with outstanding platform
                                    however I was a little worry at the beginning to be scammed. Excellent service
                                    indeed in no time.</span> </li>
                            <li class="slide"> <span class="row"> <span class="column-six mob60"> <img class="lazy"
                                            data-src="<?=base_url()?>assets/website/media/images/5-star.png" width="106"
                                            height="22" class="pull_left" alt="Star" /></span> <span
                                        class="column-four alignfromRight mob40 date">August 02, 2022</span> </span>
                                <span class="row paddingFromTop reviewsubTitle">Great Response and Service
                                </span> <span class="row paddingFromTop">Great Response and Service
                                </span> </li>
                        </ul>
                    </div>
                </div>
            </section>
            v
            <div class="row">
                <div class="wrap gapping">

                    <h3 class="reviewTitle row marginFromBottom paddingFromBottom mobPaddingTop"><span>UAE Visa Rules
                            and Conditions</span></h3>

                    <div class="row content alert-panel notification font16 paddingAllExtra">
                        <ul>
                            <li>Visa fees must be paid online after submitting your application.</li>
                            <li>Visa fees are non‑refundable.</li>
                            <li>Processing Time is approximately 24 to 72 working hours.</li>
                            <li>Entry into Dubai is subject to immigration approval.</li>
                            <li>All visas are valid for 60 days from the date of issue and the stay validity depends on
                                the visa type you applied for. </li>
                            <li>All passengers travelling to Dubai must hold a negative COVID‑19 PCR test and the time
                                the sample was taken must be no more than 48 hours before the scheduled flight.</li>
                            <li>All Dubai Tourist Visa can be extended for 30 Days by paying the additional fees.</li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="wrap gapping">
                <h3 class="reviewTitle row marginFromBottom paddingFromBottom mobPaddingTop"><span>Frequently Asked
                        Questions (FAQs)</span></h3>
                <div class="accordion_container">
                    <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="0h"><span
                                class="accordprefix"></span>Do I need a visa to enter Dubai?<span
                                class="accordsuffix "><img class="statusicon lazy"
                                    data-src="<?=base_url()?>assets/website/media/images/plus.png"
                                    alt="Expand"></span></a>
                        <div class="accordion_body" contentindex="0c" style="display: none;">Whether you need a dubai
                            visa or not is dependent on your country passport of citizenship. However, you may need to
                            apply for a visa beforehand. Select your nationality from the dropdown above to find out the
                            dubai visa requirements.</div>
                    </div>
                    <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="1h"><span
                                class="accordprefix"></span>How do I apply for Dubai tourist visa?<span
                                class="accordsuffix"><img class="statusicon lazy"
                                    data-src="<?=base_url()?>assets/website/media/images/plus.png"
                                    alt="Expand"></span></a>
                        <div class="accordion_body" contentindex="1c" style="display: none;">If you require a visa to
                            enter the UAE, you can apply via from instadubaivisa easily. As Instadubaivisa will be the
                            sponsor of you so you don’t have to worry at all.</div>
                    </div>
                    <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="2h"><span
                                class="accordprefix"></span>How long can I stay in UAE?<span class="accordsuffix"><img
                                    class="statusicon lazy"
                                    data-src="<?=base_url()?>assets/website/media/images/plus.png"
                                    alt="Expand"></span></a>
                        <div class="accordion_body" contentindex="2c" style="display: none;">Your length of stay in the
                            UAE depends on your visa type which you will select as its starting from 14 and up to 180
                            days. Please select your country of citizenship from the dropdown menu above to find out
                            more information.</div>
                    </div>
                    <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="3h"><span
                                class="accordprefix"></span>What should I check before travelling to Dubai?<span
                                class="accordsuffix"><img class="statusicon lazy"
                                    data-src="<?=base_url()?>assets/website/media/images/plus.png"
                                    alt="Expand"></span></a>
                        <div class="accordion_body" contentindex="3c" style="display: none;">Your passport is valid for
                            at least six months at the time of entry to UAE. You may also require a prearranged UAE visa
                            depending on your nationality. </div>
                    </div>
                    <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="4h"><span
                                class="accordprefix"></span>What is the validity period of UAE Visa?<span
                                class="accordsuffix"><img class="statusicon lazy"
                                    data-src="<?=base_url()?>assets/website/media/images/plus.png"
                                    alt="Expand"></span></a>
                        <div class="accordion_body" contentindex="4c" style="display: none;">All visas are valid for 60
                            days from the date of issue until entry to the UAE.</div>
                    </div>
                    <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="5h"><span
                                class="accordprefix"></span>What to do when i arrive in Dubai?<span
                                class="accordsuffix"><img class="statusicon lazy"
                                    data-src="<?=base_url()?>assets/website/media/images/plus.png"
                                    alt="Expand"></span></a>
                        <div class="accordion_body" contentindex="5c" style="display: none;">
                            <ul class="row content">
                                <li class="row">With you keep all your travel documents ready to be produced for
                                    verification by the immigration officers at the Airport.</li>
                                <li class="row">Always carry your passport or a copy of it while traveling within Dubai
                                    or at the hotel you are staying at.</li>
                                <li class="row">Be aware of the general rules of conduct in public places in UAE</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="6h"><span
                                class="accordprefix"></span>Do i have to submit my passport for stamping of the Dubai
                            visa? <span class="accordsuffix"><img class="statusicon lazy"
                                    data-src="<?=base_url()?>assets/website/media/images/minus.png"
                                    alt="Close"></span></a>
                        <div class="accordion_body" contentindex="6c" style="display: block;">No, there is no need to
                            submit your passport and any other physical documents for Dubai visa processing. You must
                            share the documents with us via WhatsApp or Email or fill the simple dubai online visa
                            application form. The Dubai visa for all nationals is an electronic visa and issued over
                            email. There is no stamp affixed on your passport.</div>
                    </div>
                    <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="7h"><span
                                class="accordprefix"></span>How many days prior to the date of travel I can apply for a
                            Dubai Tourist Visa? <span class="accordsuffix"><img class="statusicon lazy"
                                    data-src="<?=base_url()?>assets/website/media/images/plus.png"
                                    alt="Expand"></span></a>
                        <div class="accordion_body" contentindex="7c" style="display: none;">You can apply Dubai Tourist
                            Visa a maximum 2 months prior to the date of travel.</div>
                    </div>
                </div>
            </div>
            <div class="wrap gapping">
                <p class="reviewTitle row marginFromBottom paddingFromBottom mobPaddingTop"><span>Insights from
                        Blog</span></p>
                <div class="homeblog">
                    <div class="row">
                        <div class="row"> <a class="post-img" href="blog/best-clubs-in-dubai-uae.php"><img class="lazy"
                                    data-src="<?=base_url()?>assets/website/media/images/blog/best-clubs-in-dubai-uae_1675690641.jpg"
                                    class="" alt="Clubs in Dubai for a Thrilling Nightlife"
                                    title="Clubs in Dubai for a Thrilling Nightlife" width="100%" height="200" /></a>
                        </div>
                    </div>
                    <div class="row paddingAllExtra">
                        <div class="row font-Weight-Normal marginFromBottom borderFromBottom paddingFromBottom black">
                            <a href="blog/best-clubs-in-dubai-uae.php" class="row black fontTwnty height54">
                                Clubs in Dubai for a Thrilling Nightlife </a> </div>
                        <div class="row"><span class="blue"> Posted on
                                2023-02-06 </span></div>
                    </div>
                </div>
                <div class="homeblog">
                    <div class="row">
                        <div class="row"> <a class="post-img"
                                href="blog/adventurous-activities-things-to-do-in-dubai-uae.php"><img class="lazy"
                                    data-src="<?=base_url()?>assets/website/media/images/blog/adventure-activities-in-uae-instadubaivisa_1673684957.jpg"
                                    class="" alt="Adventure Activities in UAE: Experience Something Extraordinary"
                                    title="Adventure Activities in UAE: Experience Something Extraordinary" width="100%"
                                    height="200" /></a> </div>
                    </div>
                    <div class="row paddingAllExtra">
                        <div class="row font-Weight-Normal marginFromBottom borderFromBottom paddingFromBottom black">
                            <a href="blog/adventurous-activities-things-to-do-in-dubai-uae.php"
                                class="row black fontTwnty height54">
                                Adventure Activities in UAE: Experience Something Extraordinary </a> </div>
                        <div class="row"><span class="blue"> Posted on
                                2023-01-14 </span></div>
                    </div>
                </div>
                <div class="homeblog">
                    <div class="row">
                        <div class="row"> <a class="post-img" href="blog/sunbath-and-winter-tan-in-uae-beach.php"><img
                                    class="lazy"
                                    data-src="<?=base_url()?>assets/website/media/images/blog/sunbathing-and-tanning-saadiyat-beach-abu-dhabi-uae.jpg"
                                    class="" alt="Sunbath And Winter Tan In UAE Beach"
                                    title="Sunbath And Winter Tan In UAE Beach" width="100%" height="200" /></a> </div>
                    </div>
                    <div class="row paddingAllExtra">
                        <div class="row font-Weight-Normal marginFromBottom borderFromBottom paddingFromBottom black">
                            <a href="blog/sunbath-and-winter-tan-in-uae-beach.php" class="row black fontTwnty height54">
                                Sunbath And Winter Tan In UAE Beach </a> </div>
                        <div class="row"><span class="blue"> Posted on
                                2022-12-30 </span></div>
                    </div>
                </div>
            </div>




            <div class="row blueBG gapping borderFromTop borderFromBottom">
                <div class="wrap paddingAll">
                    <div class="column-three"><img class="lazy"
                            data-src="<?=base_url()?>assets/website/media/images/uae_banner-sm.jpg" width="300"
                            height="216" alt="Things to be done on arrival in Dubai"
                            title="Things to be done on arrival in Dubai" class="float-Disabled" /></div>
                    <div class="column-seven content">
                        <div
                            class="row fontTwnty8 marginFromBottom green borderFromBottom paddingFromTop marginFromTop paddingFromBottom label upperCase">
                            Things to be done on arrival in Dubai</div>
                        <ul>
                            <li>Get ready with all the travel documents and produce them at the Immigration Desk for
                                verification.</li>
                            <li>Be sure you are not carrying any item that is not allowed to pass through customs
                                including books, videotapes, etc.</li>
                            <li>Keep a copy of your passport or the original one with you while roaming in Dubai.</li>
                            <li>Ensure to remember & note all the emergency numbers.</li>
                            <li>Keep in mind all the rules and regulations laid down by the government.</li>
                        </ul>
                    </div>

                </div>
            </div>






            <div class="row gapping">
                <div class="wrap">
                    <div class="row">
                        <div class="row content">
                            <div class="row fontTwnty8 marginFromBottom green borderFromBottom paddingFromBottom label">
                                <strong>Dubai</strong>- The lovechild of the United Arab Emirates</div>

                            <p>The Emirate of Dubai is the world’s most loved playground among tourists. A staggering
                                7.1 million tourists stepped into Dubai in Q1 of 2022. The stay occupancy in Dubai
                                peaked at 74%, one of the highest in the world. A host of global events, festivals and
                                leisure drives helped spark <strong>Dubai Tourism</strong>. The World Government Summit,
                                Arabian Travel Market and Dubai Shopping Festival attracted curious visitors in large
                                numbers. </p>
                            <p>A huge influx of applicants applying for <strong>online Dubai visa</strong> was witnessed
                                by various visa service providers. The UAE Government is leaving no stone unturned to
                                make Dubai a world-class tourist destination. The resilience and dynamism of the
                                country’s economy is a major reason for travellers flooding in Dubai. </p>
                            <p>Another major criterion that has fuelled the tourism sector of Dubai is the ease of
                                <strong>Dubai visa</strong> procedures. With online visa application forms and online
                                submission of pre-requisites, journeys and attending events have become more accessible.
                                Dubai understands the convenience of travellers well. </p>
                            <p>The nearby happenings of the Emirate of Dubai have enabled travellers to visit other
                                destinations while on a vacation to Dubai. Other emirates like Sharjah and Abu Dhabi are
                                just a drive away. While a fun-filled cruise trip to neighbouring countries is extremely
                                easy and handy. This factor makes Dubai more irresistible. By submitting an
                                <strong>online visa application form</strong> and uploading just your passport copy and
                                photograph, you can enjoy exploring other neighbouring touristy countries. </p>


                        </div>
                    </div>

                    <div class="row content marginFromBottom visaTypeContent">
                        <div class="row">
                            <div class="row fontTwnty8 marginFromBottom green borderFromBottom paddingFromBottom label">
                                Dubai Delights- to steer your next vacation</div>
                            <ul>
                                <li>Dubai Beaches never fails to impress you</li>
                                <li>Malls like Ibn Battuta Mall, The Dubai Mall, The Emirates Mall and Dragon Mart are
                                    iconic places loved by visitors. </li>
                                <li>Legoland is a kids’ paradise.</li>
                                <li>Hollywood Theme Park is an amazing hub for entertainment lovers.</li>
                                <li>The brow-raising experience at Burj Khalifa will leave you enthralled.</li>
                                <li>Burj Al-Arab declares that whatever you think can be made into reality. The iconic
                                    hotel is the first-ever structure standing on a human-made island. </li>
                                <li>Global Village in Dubai is the perfect example of peace and brotherhood.</li>
                                <li>Palm Jumeriah laps luxurious nests and shopping arcades.</li>
                            </ul><br>

                            <p>The above list is never-ending. The recent onset of the Museum of the Future has
                                surpassed all expectations declaring Dubai a futuristic destination.</p>
                            <p>The GCC countries in proximity are top tourist destinations in the world. The United Arab
                                Emirates is a part of the Gulf Co-operation Council. Enjoying vacations in these
                                countries is an add-on that Dubai offers. Its geological benefits have created stunning
                                landscapes and thrilling itineraries for travellers. </p>

                            <p>A 3-hour drive away is the sophisticated capital of the United Arab Emirates- Abu Dhabi.
                                The Emirate is adorned with classy vibes and architecture that spells a cast on the
                                visitor. Entertainment options like Ferrari World and Yas Water World have impressed
                                people of all ages. Many visitors apply for a <strong>Dubai visa online</strong> and
                                plan road trips to Abu Dhabi for an over-the-top experience. </p>
                            <p>Other emirates like Sharjah which is the Cultural Capital of UAE, startle with museums
                                and libraries for travellers to learn about the culture and customs of the country. Umm
                                Al-Quwaim, Fujairah, Ras Al-Khaimah and Ajman, all are princely unique in their
                                existence. So, travelling to Dubai is a win-win situation to explore the country as well
                                as discover the nearby touristy countries.
                            </p>
                        </div>


                    </div>


                    <div class="row  marginFromTop content visaTypeContent">
                        <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                            Dubai Tourist E-visa</h3>
                        <p>Visitors can apply for a travel permit for tourism purposes. As Dubai is a hot spot for
                            leisure and entertainment, the country has lucrative and innovative procedures in place to
                            facilitate an amazing travel experience. To apply for an electronic Dubai visa or Dubai
                            Tourist E-visa, one can simply log on to www.touristdubaivisa.com. </p>
                        <p>Any traveller planning to discover the attractions of Dubai can apply for a Dubai travel
                            permit through the website from anywhere in the world. Simple steps, quick submission and
                            safe payment options make Dubai travel extremely effortless. You can visit and explore other
                            emirates with Dubai Tourist E-visa.
                        </p>



                    </div>




                    <div class="row content">
                        <div
                            class="row content fontTwnty8 marginFromBottom green borderFromBottom paddingFromBottom label">
                            Pre-Requisites for applying for an online Dubai visa</div>
                        <p>Every traveller is required to obtain a permit before accessing the borders of a country. To
                            visit The United Arab Emirates, one must carry a <strong>Dubai Tourist visa</strong>. While
                            applying for a travel permit, one must possess the following requirements:</p>
                        <ul>
                            <li>A digital copy of the applicant’s valid passport.</li>
                            <li>A clear front-facing photograph.</li>
                        </ul>

                        <p>The above-cited prerequisites are enough to apply for an online travel permit to Dubai. Any
                            visitor travelling on urgent grounds can source their permit through our Express Service.
                            The entire process of online application can be completed in just a few minutes. Applicants
                            can apply for a visa for others travelling with them in the same application form. Changes
                            can be made to the current application. </p>
                        <p>With TDV, Repeated applicants enjoy a seamless procedure for applying for a travel permit as
                            they only have to enter their passport number and we take it from there. Applicants enjoy
                            24X7 visa assistance available via chat, email and calls. </p>

                    </div>



                </div>
            </div>


            <div class="wrap gapping">
                <div class="row borderFromAll">
                    <div class="column-oneForth paddingFromRight"><img class="lazy"
                            data-src="<?=base_url()?>assets/website/media/images/30-days-visa-multiple-entry.jpg"
                            width="284" height="284" title="Dubai Facts and Figures" alt="Dubai Facts and Figures" />
                    </div>
                    <div class="column-threeForth paddingAllExtra line-height-regExtra">
                        <div class="row fontTwnty8 marginFromBottom green title-font paddingFromBottom">Dubai Facts and
                            Figures</div>

                        <div class="row borderFromBottom marginFromBottom">
                            <div class="column-five">Name : United Arab Emirates</div>
                            <div class="column-five">Location : Middle East</div>
                        </div>
                        <div class="row borderFromBottom marginFromBottom">
                            <div class="column-five">Time : IST (-) 1 ½ hours</div>
                            <div class="column-five">Capital : Abu Dhabi</div>
                        </div>
                        <div class="row borderFromBottom marginFromBottom">
                            <div class="column-five">Major cities : Dubai, Abu Dhabi, Sharjah, Al Ain, Fujairah.</div>
                            <div class="column-five">Language : Arabic (official), Persian, English, Hindi, Urdu</div>
                        </div>
                        <div class="row borderFromBottom marginFromBottom">
                            <div class="column-five">Area : 77,700 sq kms</div>
                            <div class="column-five">Population : 6,072,475</div>
                        </div>
                        <div class="row borderFromBottom marginFromBottom">
                            <div class="column-five">National day : 02 Dec</div>
                            <div class="column-five">Currency : UAE Dirham (AED)</div>
                        </div>
                        <div class="row">
                            <div class="column-five">Main Airline : Emirates (EK), Gulf Air (GF)</div>
                            <div class="column-five">International Airports : Dubai (DXB), Abu Dhabi (AUH), Fujairah
                                (FJR)</div>
                        </div>
                    </div>
                </div>


            </div>


        </div>
        <!-- END BODY PANEL -->
        <?php include_once "include/footer.php"; ?>