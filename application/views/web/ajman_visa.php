<?php include_once "include/header.php";?>

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
                            class="row button-large primary-button marginFromBottomNone alignFromCenter" value="GO" />
                    </div>
                </div>
            </form>
        </div>
        <div class="slideshow-panel" data-transition="crossfade" data-loop="true" data-skip="false">
            <ul class="carousel" style="width:100%">
                <li class="slide" style="width:100%"><img src="<?=base_url()?>assets/website/media/images/umm.jpg" width="100%"
                        height="360" title="Tourist Ajman Visa" alt="apply for Ajman, Ajman visa online"></li>
            </ul>
        </div>
        <div class="welcomeTextPanel" style="float:right">
            <h1 class="ptext white font-Weight-Normal">Apply &amp; Get quick Ajman visa</h1>
            <div class="row alignFromCenter line-height-reg white">Enjoy effortless travel with advanced technology
                embedded in online visa processing systems at Tourist Dubai Visa. Get an Ajman visa online at once through
                simple visa processing. Travellers can now fly hassle-free and stay in any emirate with a simplified
                online visa experience. Ajman tourism is now accessible with promising 24x7 services. </div>
        </div>
    </div>
</div>


<div class="row body-panel paddingFromTopNone">
    <section class="row abtPanel">
        <div class="wrap">
            <h2 class="title1">STEPS FOR AJMAN VISA</h2>
            <div class="stepPanel" id="aplyonlineBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-1.png"
                        width="45" height="45" alt="Ajman Visa Process"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites applyonline"></div>
                    </div>
                    <div class="stepPanelContentBox" id="aplyonline">Choose your preferred Ajman visa types (14-Day Visa
                        / 30-Day Visa), Fill Online Ajman Visa Application Form &amp; Upload your Documents.</div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Apply online</p>
            </div>
            <div class="stepPanel" id="makepaymntBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-2.png"
                        width="45" height="45" alt="Pay Ajman Visa Fees Online"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites payOnline"></div>
                    </div>
                    <div class="stepPanelContentBox" id="makepaymnt">From our secured payment gateway, pay your visa
                        fees with complete peace of mind. (Both Credit &amp; Debit Cards accepted)</div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Pay visa fee online</p>
            </div>
            <div class="stepPanel" id="visaProcessBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-3.png"
                        width="45" height="45" alt="Ajman visa is sent for processing"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites visaProcessing"></div>
                    </div>
                    <div class="stepPanelContentBox" id="visaProcess">Our team of visa experts will scrutinize your
                        application before sending it to Ajman authorities for processing.</div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Visa is sent for processing</p>
            </div>
            <div class="stepPanel" id="downloadBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-4.png"
                        width="45" height="45" alt="Print Ajman Visa and Fly to Ajman"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites printFly"></div>
                    </div>
                    <div class="stepPanelContentBox" id="download">We will mail you your Ajman visa immediately after it
                        is approved. Take a printout &amp; fly to Ajman. Bon Voyage! </div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Print visa &amp; fly to Dubai.</p>
            </div>
        </div>
    </section>

    <div class="wrap">
        <h4 class="row paddingAllExtra greyBG green border-Dashed marginFromTop alignFromCenter line-height-regExtra"
            style="font-weight:normal;">Visitors now need not worry about winning a visa as we give you the best online
            visa processing platform. Apply for an Ajman visa online worldwide. Get the privilege of the highest
            approval rates and speedy service with us. Our hi-tech website is one of the leading portals in the visa
            industry, with the maximum number of online visa applications and the highest approval percentage.
        </h4>
        <section class="row flagBG">
            <div class="whyUsBoxPanel">
                <div class="column-four whyUsPanel">
                    <div class="column-two mob20"><img src="<?=base_url()?>assets/website/media/images/idv-logo.png"
                            width="70" height="70" alt="Tourist Ajman Visa" title="" class="mobIMG pull_left"></div>
                    <div class="column-eight mob80">
                        <p class="ptext1 black paddingFromBottom marginFromTop marginFromBottom mobpadding-0">Why Tourist
                            Ajman Visa?</p>
                        <div class="row points padding-All-sm whyIDV">
                            <ul>
                                <li>The only portal to embed ultra-advanced technology in global travel </li>
                                <li>No need to visit the embassy </li>
                                <li>Simple steps for online visa application</li>
                                <li>Optimum results with strict data policies</li>
                                <li>Shaped by competitive travel experts </li>
                                <li>Visa specialists at your service 24x7</li>
                                <li>Dedicated support at every stage of online visa processing</li>
                                <li>Well-protected multiple payment channels</li>
                                <li>Live tracking of your online visa application</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column-six box_Sizing borderFromLeft visaTypePanel">
                    <div class="row">
                        <h3 class="headingtext1 upperCase paddingFromBottom black marginFromTop mobpadding-0">Types of
                            Ajman Visa We Offer</h3>
                    </div>
                    <div class="tab-panel padding-0">
                        <div id="tabs-container" class="row">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">14 Days<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Single
                                            Entry)</span></a></li>

                                <li><a href="#tab-8">14 Days Visa<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Multiple
                                            Entry)</span></a></li>
                                <li><a href="#tab-2">30 Days<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Single
                                            Entry)</span></a></li>
                                <li><a href="#tab-3">30 Days<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Multiple
                                            Entry)</span></a></li>
                                <li><a href="#tab-4">60 Days<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Single
                                            Entry)</span></a></li>
                                <li><a href="#tab-10">60 Days<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Multiple
                                            Entry)</span></a></li>
                                <li><a href="#tab-5">90 Days<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Single
                                            Entry)</span></a></li>
                                <li><a href="#tab-6">90 Days<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Multiple
                                            Entry)</span></a></li>
                                <li><a href="#tab-7">90 Days<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Job
                                            Seekers)</span></a></li>
                                <li><a href="#tab-9">Transit Visa<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Single
                                            Entry)</span></a></li>
                            </ul>
                            <div class="tab">
                                <div class="tab-content" id="tab-1">
                                    <p><span class="blue marginFromRight">14 Days Visa:</span> This is recommended for
                                        visitors planning for a short stay in Ajman or Ajman for Trips, Meetings,
                                        Conferences or Transit stay etc. Requirements for obtaining the 14 Days Ajman
                                        Visa varies depending on your nationality. </p>
                                    <p>14 Days Ajman Visa is a single entry visa, which entitles you to stay in Ajman
                                        for up to 14 days. The visa validity will be 60 days from the date of issue but
                                        stay should be no more than 14 days from the date of entry in Ajman. </p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 14 Days Ajman visa may take anytime between 24 to 72 working hours.
                                    </p>
                                </div>
                                <div class="tab-content" id="tab-2">
                                    <p><span class="blue marginFromRight">30 Days Visa:</span> If you want to take a
                                        short trip to Ajman to catch up with your family or friends, then this visa
                                        valid for 30 days will be the ideal option for you. Requirements for obtaining
                                        the 30 Days Ajman Visa varies depending on your nationality. </p>
                                    <p>30 Days Visa is a single entry visa, which entitles you to stay in Ajman for up
                                        to 30 days. The visa validity will be 60 days from the date of issue but stay
                                        should be no more than 30 days from the date of entry in Ajman. </p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 30 Days Ajman visa may take anytime between 24 to 72 working hours.
                                    </p>
                                </div>
                                <div class="tab-content" id="tab-3">
                                    <p><span class="blue marginFromRight">30 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to Ajman
                                        in a span of 30 days. Make as many visits for 30 days from first date of entry
                                        into Ajman. Requirements for obtaining the 30 Days Ajman Visa varies depending
                                        on your nationality. </p>
                                    <p>30 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Ajman for up to 30 days or less. The visa validity will be 60 days from
                                        the date of issue but stay should be no more than 30 days from the date of entry
                                        in Ajman. You can travel multiple times to Ajman in this span of 30 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 30 Days (Multiple Entry) Ajman visa may take anytime between 24 to
                                        72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-4">
                                    <p><span class="blue marginFromRight">60 Days Visa (Single Entry):</span> This is
                                        recommended for visitors planning for a medium term stay (less than 2 months) in
                                        Ajman to visit their family or friends. This is a Single Entry Visa and once the
                                        visitor exits Ajman (within a span of 60 days), the visa expires. Requirements
                                        for obtaining the 60 Days Ajman Visa varies depending on your nationality.<br>
                                    </p>
                                    <p>60 Days Visa (Single Entry) is a single entry visa, which entitles you to stay in
                                        Ajman for up to 60 days or less. The visa validity will be 60 days from the date
                                        of issue and your stay should also be no more than 60 days from the date of
                                        entry in Ajman.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 60 Days (Single Entry) Ajman visa may take anytime between 24 to 72
                                        working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-5">
                                    <p><span class="blue marginFromRight">90 Days Visa:</span> This is recommended for
                                        visitors planning for a long term stay in Ajman to visit their family or
                                        friends. This is a Single Entry Visa and once the visitor exits Ajman (within a
                                        span of 90 days), the visa expires. Requirements for obtaining the 90 Days Ajman
                                        Visa varies depending on your nationality.<br>
                                    </p>
                                    <p>90 Days Visa (Single Entry) is a single entry visa, which entitles you to stay in
                                        Ajman for up to 90 days or less. The visa validity will be 60 days from the date
                                        of issue but stay should be no more than 90 days from the date of entry in
                                        Ajman.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90 Days (Single Entry) Ajman visa may take anytime between 24 to 72
                                        working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-6">
                                    <p><span class="blue marginFromRight">90 Days Visa (Multiple Entry):</span> 90 Days
                                        Multiple Entry Visa will make travel between U.A.E. and visiting nearby
                                        countries easier for travelers who need to make multiple stops for Long time
                                        whether by air, land or sea and return to Ajman on the same visa rather than
                                        having to incur additional time and expense obtaining two or three or more
                                        separate visas. Requirements for obtaining the 90 Days Ajman Visa varies
                                        depending on your nationality.<br>
                                    </p>
                                    <p>90 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Ajman for up to 90 days or less. The visa validity will be 60 days from
                                        the date of issue but stay should be no more than 90 days from the date of entry
                                        in Ajman. You can travel multiple times to Ajman in this span of 90 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90 Days (Multiple Entry) Ajman visa may take anytime between 24 to
                                        72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-7">
                                    <p><span class="blue marginFromRight">90 Days Job Seeker Visa (Single Entry):</span>
                                        This visa is suitable only for people looking for a job in Ajman. This is a
                                        Single Entry Visa and once the person exits Ajman (within a span of 90 days),
                                        the visa expires. This means you have a period of 90 days to look for and
                                        finalize a job in Ajman. Once you get a job, you have to exit Ajman and then
                                        again apply for the work visa through the company which has hired you. </p>
                                    <p><strong>Note:</strong> The 90-Days Job Seeker Visa (Single Entry) is issued only
                                        after the you pay a security deposit as a guarantee. This security deposit will
                                        be refunded once you furnish proof that you have exited Ajman<sup>*</sup></p>
                                    <p>90-Days Job Seeker Visa is a single entry visa, which entitles you to stay in
                                        Ajman for up to 90 days or less. The visa validity will be 60 days from the date
                                        of issue but stay should be no more than 90 days from the date of entry in
                                        Ajman.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90-Days Job Seeker Visa (Single Entry) Ajman visa may take anytime
                                        between 24 to 72 working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-9">
                                    <p><span class="blue marginFromRight">96 Hours Transit Visa (Single Entry):</span>
                                        96 Hours Transit Visa will make travel between U.A.E. and visiting nearby
                                        countries easier for travelers who need to make multiple stops for Long time
                                        whether by air, land or sea and return to Ajman on the same visa rather than
                                        having to incur additional time and expense obtaining two or three or more
                                        separate visas. Requirements for obtaining the 96 Hours Transit Visa varies
                                        depending on your nationality.<br>
                                    </p>
                                    <p>96 Hours Transit Visa is a Single entry visa, which entitles you to stay in Ajman
                                        for up to 96 Hours or less. The visa validity will be 60 days from the date of
                                        issue but stay should be no more than 96 Hours from the date of entry in Ajman.
                                        You can travel multiple times to Ajman in this span of 96 Hours.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 96 Hours Transit Ajman visa may take anytime between 24 to 72
                                        working hours. </p>
                                </div>

                                <div class="tab-content" id="tab-8">
                                    <p><span class="blue marginFromRight">14 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to Ajman
                                        in a span of 14 days. Make as many visits for 14 days from first date of entry
                                        into Ajman. Requirements for obtaining the 14 Days Ajman Visa varies depending
                                        on your nationality. </p>
                                    <p>14 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Ajman for up to 14 days or less. The visa validity will be 14 days from
                                        the date of issue but stay should be no more than 14 days from the date of entry
                                        in Ajman. You can travel multiple times to Ajman in this span of 14 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 14 Days (Multiple Entry) Ajman visa may take anytime between 24 to
                                        72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-10">
                                    <p><span class="blue marginFromRight">60 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to Ajman
                                        in a span of 14 days. Make as many visits for 60 days from first date of entry
                                        into Ajman. Requirements for obtaining the 60 Days Ajman Visa varies depending
                                        on your nationality. </p>
                                    <p>60 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Ajman for up to 60 days or less. The visa validity will be 60 days from
                                        the date of issue but stay should be no more than 60 days from the date of entry
                                        in Ajman. You can travel multiple times to Ajman in this span of 60 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 60 Days (Multiple Entry) Ajman visa may take anytime between 24 to
                                        72 working hours. </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <div class="wrap pos-Reltv marginFromTop">
        <section class="row">
            <div class="row content marginFromTop">
                <div class="row">
                    <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom"><strong
                            class="black">Ajman</strong>- an ode of sparkling coastlines cuddled in the Arabian Gulf
                    </h3>
                    <div class="column-six paddingFromRight mobpadding-0">
                        <p>Being the smallest emirate of UAE, Ajman is truly synonymous with its prime trade- pearl
                            diving. </p>
                        <p>You can opt for beach relaxation and beach activities. Ajman has excellent shopping centres
                            to attract tourists. Beaches of Ajman are the cleanest of the lot in UAE. </p>
                        <p> Along with that, Ajman Fort, Mowaihat Archeological site, Ajman Museum, Etisalat Tower, Dhow
                            Building Yard of Ajman and Sheikh Zayed Mosque are some of the halts which would attract you
                            to the slow-paced emirate. </p>
                        <p>But your visit is incomplete without pearl diving sessions.</p>
                        <p>The virgin beach line of the Emirate of Ajman is underrated for its beauty. Less explored by
                            visitors heading to the United Arab Emirates, soak in the calm and warm waters of the
                            Arabian Sea. Kayak through the lazy backwaters of Al-Zorah Nature reserve. </p>
                    </div>
                    <div class="column-four mobImgfull-width marginFromBottom paddingFromBottom"><img
                            src="<?=base_url()?>assets/website/media/images/ajman.jpg" title="Ajman" alt="Ajman" class=""
                            width="100%" height=""></div>
                </div>

                <p>Ajman exclaves are a unique attraction well-explored on foot by hikers and campers. The laid back
                    Ajman Museum stands strong with its rampant exteriors but treasures UAE culture and traditions.</p>
                <p>Ajman Creek is the world's largest Dhow building centre. Experience how ancestors used to create and
                    commute on this traditional boat. Sheikh Zayed Mosque is the top religious institution of Ajman and
                    is a hub for cultural understanding.</p>
            </div>
        </section>
    </div>
</div>
<?php include_once "include/footer.php";?>