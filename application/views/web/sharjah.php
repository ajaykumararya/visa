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
                        height="360" title="Tourist Sharjah Visa" alt="apply for Sharjah, Sharjah visa online"></li>
            </ul>
        </div>
        <div class="welcomeTextPanel" style="float:right">
            <h1 class="ptext white font-Weight-Normal">Sharjah Visa made simple</h1>
            <div class="row alignFromCenter line-height-reg white">Sharjah visa online is now made easy and quick with
                Tourist Dubai visa. Add the real essence to your travel diaries with a cultural visit to Sharjah. Allow
                technology to ease trips as you save time and money. Superfast visa processing and effortless visa
                procedures have unravelled human lives. Get a visa online at once through simple visa processing.
                Sharjah tourism is now accessible with promising 24x7 services.</div>
        </div>
    </div>
</div>

<div class="row body-panel paddingFromTopNone">
    <section class="row abtPanel">
        <div class="wrap">
            <h2 class="title1">STEPS FOR SHARJAH VISA</h2>
            <div class="stepPanel" id="aplyonlineBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-1.png"
                        width="45" height="45" alt="Sharjah Visa Process"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites applyonline"></div>
                    </div>
                    <div class="stepPanelContentBox" id="aplyonline">Choose your preferred Sharjah visa types (14-Day
                        Visa / 30-Day Visa), Fill Online Sharjah Visa Application Form &amp; Upload your Documents.
                    </div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Apply online</p>
            </div>
            <div class="stepPanel" id="makepaymntBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-2.png"
                        width="45" height="45" alt="Pay Sharjah Visa Fees Online"></div>
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
                        width="45" height="45" alt="Sharjah visa is sent for processing"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites visaProcessing"></div>
                    </div>
                    <div class="stepPanelContentBox" id="visaProcess">Our team of visa experts will scrutinize your
                        application before sending it to Sharjah authorities for processing.</div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Visa is sent for processing</p>
            </div>
            <div class="stepPanel" id="downloadBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-4.png"
                        width="45" height="45" alt="Print Sharjah Visa and Fly to Sharjah"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites printFly"></div>
                    </div>
                    <div class="stepPanelContentBox" id="download">We will mail you your Sharjah visa immediately after
                        it is approved. Take a printout &amp; fly to Sharjah. Bon Voyage! </div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Print visa &amp; fly to Dubai.</p>
            </div>
        </div>
    </section>

    <div class="wrap">
        <h4 class="row paddingAllExtra greyBG green border-Dashed marginFromTop alignFromCenter line-height-regExtra"
            style="font-weight:normal;">Applicants can apply for a Sharjah visa online on the best online visa
            processing platform. Easy online application form and a genuinely dedicated 24x7 support team will make your
            travel a lot simpler. Get the privilege of the highest approval rates and speedy service with us.
        </h4>
        <section class="row flagBG">
            <div class="whyUsBoxPanel">
                <div class="column-four whyUsPanel">
                    <div class="column-two mob20"><img src="<?=base_url()?>assets/website/media/images/logo.png"
                            width="70" height="70" alt="Tourist Sharjah Visa" title="" class="mobIMG pull_left"></div>
                    <div class="column-eight mob80">
                        <p class="ptext1 black paddingFromBottom marginFromTop marginFromBottom mobpadding-0">Why Tourist
                            Sharjah Visa?</p>
                        <div class="row points padding-All-sm whyIDV">
                            <ul>
                                <li>World's most hi-tech website committed to online visa processing</li>
                                <li>Avoid long embassy queues and heavy paperwork </li>
                                <li>Save precious time with the shortest possible online visa application</li>
                                <li>Optimize your travel plans with online visa processing </li>
                                <li>Fashioned for proactive travellers </li>
                                <li>Visa experts available 24x7</li>
                                <li>Regular updates at every stage of online visa processing</li>
                                <li>Intelligent payment channels</li>
                                <li>Live tracking of your online visa application</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column-six box_Sizing borderFromLeft visaTypePanel">
                    <div class="row">
                        <h3 class="headingtext1 upperCase paddingFromBottom black marginFromTop mobpadding-0">Types of
                            Sharjah Visa We Offer</h3>
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
                                        visitors planning for a short stay in Sharjah or Sharjah for Trips, Meetings,
                                        Conferences or Transit stay etc. Requirements for obtaining the 14 Days Sharjah
                                        Visa varies depending on your nationality. </p>
                                    <p>14 Days Sharjah Visa is a single entry visa, which entitles you to stay in
                                        Sharjah for up to 14 days. The visa validity will be 60 days from the date of
                                        issue but stay should be no more than 14 days from the date of entry in Sharjah.
                                    </p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 14 Days Sharjah visa may take anytime between 24 to 72 working
                                        hours.</p>
                                </div>
                                <div class="tab-content" id="tab-2">
                                    <p><span class="blue marginFromRight">30 Days Visa:</span> If you want to take a
                                        short trip to Sharjah to catch up with your family or friends, then this visa
                                        valid for 30 days will be the ideal option for you. Requirements for obtaining
                                        the 30 Days Sharjah Visa varies depending on your nationality. </p>
                                    <p>30 Days Visa is a single entry visa, which entitles you to stay in Sharjah for up
                                        to 30 days. The visa validity will be 60 days from the date of issue but stay
                                        should be no more than 30 days from the date of entry in Sharjah. </p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 30 Days Sharjah visa may take anytime between 24 to 72 working
                                        hours.</p>
                                </div>
                                <div class="tab-content" id="tab-3">
                                    <p><span class="blue marginFromRight">30 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to
                                        Sharjah in a span of 30 days. Make as many visits for 30 days from first date of
                                        entry into Sharjah. Requirements for obtaining the 30 Days Sharjah Visa varies
                                        depending on your nationality. </p>
                                    <p>30 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Sharjah for up to 30 days or less. The visa validity will be 60 days
                                        from the date of issue but stay should be no more than 30 days from the date of
                                        entry in Sharjah. You can travel multiple times to Sharjah in this span of 30
                                        days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 30 Days (Multiple Entry) Sharjah visa may take anytime between 24
                                        to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-4">
                                    <p><span class="blue marginFromRight">60 Days Visa (Single Entry):</span> This is
                                        recommended for visitors planning for a medium term stay (less than 2 months) in
                                        Sharjah to visit their family or friends. This is a Single Entry Visa and once
                                        the visitor exits Sharjah (within a span of 60 days), the visa expires.
                                        Requirements for obtaining the 60 Days Sharjah Visa varies depending on your
                                        nationality.<br>
                                    </p>
                                    <p>60 Days Visa (Single Entry) is a single entry visa, which entitles you to stay in
                                        Sharjah for up to 60 days or less. The visa validity will be 60 days from the
                                        date of issue and your stay should also be no more than 60 days from the date of
                                        entry in Sharjah.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 60 Days (Single Entry) Sharjah visa may take anytime between 24 to
                                        72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-5">
                                    <p><span class="blue marginFromRight">90 Days Visa:</span> This is recommended for
                                        visitors planning for a long term stay in Sharjah to visit their family or
                                        friends. This is a Single Entry Visa and once the visitor exits Sharjah (within
                                        a span of 90 days), the visa expires. Requirements for obtaining the 90 Days
                                        Sharjah Visa varies depending on your nationality.<br>
                                    </p>
                                    <p>90 Days Visa (Single Entry) is a single entry visa, which entitles you to stay in
                                        Sharjah for up to 90 days or less. The visa validity will be 60 days from the
                                        date of issue but stay should be no more than 90 days from the date of entry in
                                        Sharjah.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90 Days (Single Entry) Sharjah visa may take anytime between 24 to
                                        72 working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-6">
                                    <p><span class="blue marginFromRight">90 Days Visa (Multiple Entry):</span> 90 Days
                                        Multiple Entry Visa will make travel between U.A.E. and visiting nearby
                                        countries easier for travelers who need to make multiple stops for Long time
                                        whether by air, land or sea and return to Sharjah on the same visa rather than
                                        having to incur additional time and expense obtaining two or three or more
                                        separate visas. Requirements for obtaining the 90 Days Sharjah Visa varies
                                        depending on your nationality.<br>
                                    </p>
                                    <p>90 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Sharjah for up to 90 days or less. The visa validity will be 60 days
                                        from the date of issue but stay should be no more than 90 days from the date of
                                        entry in Sharjah. You can travel multiple times to Sharjah in this span of 90
                                        days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90 Days (Multiple Entry) Sharjah visa may take anytime between 24
                                        to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-7">
                                    <p><span class="blue marginFromRight">90 Days Job Seeker Visa (Single Entry):</span>
                                        This visa is suitable only for people looking for a job in Sharjah. This is a
                                        Single Entry Visa and once the person exits Sharjah (within a span of 90 days),
                                        the visa expires. This means you have a period of 90 days to look for and
                                        finalize a job in Sharjah. Once you get a job, you have to exit Sharjah and then
                                        again apply for the work visa through the company which has hired you. </p>
                                    <p><strong>Note:</strong> The 90-Days Job Seeker Visa (Single Entry) is issued only
                                        after the you pay a security deposit as a guarantee. This security deposit will
                                        be refunded once you furnish proof that you have exited Sharjah<sup>*</sup></p>
                                    <p>90-Days Job Seeker Visa is a single entry visa, which entitles you to stay in
                                        Sharjah for up to 90 days or less. The visa validity will be 60 days from the
                                        date of issue but stay should be no more than 90 days from the date of entry in
                                        Sharjah.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90-Days Job Seeker Visa (Single Entry) Sharjah visa may take
                                        anytime between 24 to 72 working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-9">
                                    <p><span class="blue marginFromRight">96 Hours Transit Visa (Single Entry):</span>
                                        96 Hours Transit Visa will make travel between U.A.E. and visiting nearby
                                        countries easier for travelers who need to make multiple stops for Long time
                                        whether by air, land or sea and return to Sharjah on the same visa rather than
                                        having to incur additional time and expense obtaining two or three or more
                                        separate visas. Requirements for obtaining the 96 Hours Transit Visa varies
                                        depending on your nationality.<br>
                                    </p>
                                    <p>96 Hours Transit Visa is a Single entry visa, which entitles you to stay in
                                        Sharjah for up to 96 Hours or less. The visa validity will be 60 days from the
                                        date of issue but stay should be no more than 96 Hours from the date of entry in
                                        Sharjah. You can travel multiple times to Sharjah in this span of 96 Hours.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 96 Hours Transit Sharjah visa may take anytime between 24 to 72
                                        working hours. </p>
                                </div>

                                <div class="tab-content" id="tab-8">
                                    <p><span class="blue marginFromRight">14 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to
                                        Sharjah in a span of 14 days. Make as many visits for 14 days from first date of
                                        entry into Sharjah. Requirements for obtaining the 14 Days Sharjah Visa varies
                                        depending on your nationality. </p>
                                    <p>14 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Sharjah for up to 14 days or less. The visa validity will be 14 days
                                        from the date of issue but stay should be no more than 14 days from the date of
                                        entry in Sharjah. You can travel multiple times to Sharjah in this span of 14
                                        days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 14 Days (Multiple Entry) Sharjah visa may take anytime between 24
                                        to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-10">
                                    <p><span class="blue marginFromRight">60 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to
                                        Sharjah in a span of 14 days. Make as many visits for 60 days from first date of
                                        entry into Sharjah. Requirements for obtaining the 60 Days Sharjah Visa varies
                                        depending on your nationality. </p>
                                    <p>60 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Sharjah for up to 60 days or less. The visa validity will be 60 days
                                        from the date of issue but stay should be no more than 60 days from the date of
                                        entry in Sharjah. You can travel multiple times to Sharjah in this span of 60
                                        days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 60 Days (Multiple Entry) Sharjah visa may take anytime between 24
                                        to 72 working hours. </p>
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
                            class="black">Sharjah</strong>- the capital of raw Arabian heritage</h3>
                    <div class="column-six paddingFromRight mobpadding-0">
                        <p>The very conservative Sharjah expects you to survive without beer for 2-3 days so that it can
                            enrich you with its heritage abundance.</p>
                        <p>UNESCO has declared Sharjah Capital of Islamic Culture. Sharjah Heritage Area and Mleiha
                            Archeological site are the best examples of heritage restoration.</p>
                        <p>A drive by a rental or shuttle service from Dubai is a good option to reach Sharjah. A row of
                            cannons welcomes visitors at the spectacular Sharjah Fort. And your kids can have a fun time
                            at Al Qasba too.</p>
                        <p>You should visit The Rain Room in Sharjah to know how can you remain dry in the rain.</p>
                        <p>Calligraphy enthusiasts can have their best time at Sharjah Calligraphy Museum and eL Seed
                            Calligraffiti. </p>
                    </div>
                    <div class="column-four mobImgfull-width marginFromBottom paddingFromBottom"><img
                            src="<?=base_url()?>assets/website/media/images/sharjah.jpg" title="Sharjah" alt="Sharjah"
                            class="" width="100%" height=""></div>
                </div>
                <p>Sharjah Art Museum is famed to be the hub of Islamic culture and attracts thousands of visitors
                    because of the said reason. Another hallmark of Islamic civilization is the Sharjah Museum of
                    Islamic Civilisation. Experience the ancient and authentic realms of ancient Arab dwellings in the
                    alleys of the Sharjah Heritage Area.</p>
                <p>Sharjah Fort stands strong to narrate the ordeal of protecting one's land from pirate invasions.
                    Sharjah Desert Park is a wonderland for learners and little ones. Dwell in the Emirate of museums
                    and leave a visit at the Sharjah Archaeological Museum.</p>
                <p>Hop on to Kalba to get a grip on the endless water views on the site. Do not miss the Al-Noor Mosque
                    washed in white marble open to non-Muslims. </p>
            </div>
        </section>
    </div>



</div>
<?php include_once "include/footer.php";?>