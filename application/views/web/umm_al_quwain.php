<?php include_once "include/header.php";?>
<div class="row bannerPanel header-Panel">
    <div class="wrap pos-Reltv">
        <div class="searchPanelBox mobRadius" id="applyNow">
            <div class="searchPanelTitle">Apply Visa Now</div>
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
                                      
                                            <img class="lazy" 
                                            data-src="<?=base_url()?>assets/website/media/images/umm.jpg" width="100%"
                                            height="360" title="Tourist Dubai Visa" alt="apply for Dubai, UAE visa online" />

                        </li>
                                
                    </ul>
                </div>
        </div>
        <div class="slideshow-panel" data-transition="crossfade" data-loop="true" data-skip="false">
            <ul class="carousel">
                <li class="slide"><img src="<?=base_url()?>assets/website/media/images/banner2.jpg" width="100%"
                        height="360" title="Tourist Umm Al-Quwain Visa"
                        alt="apply for Umm Al-Quwain, Umm Al-Quwain visa online"></li>
            </ul>
        </div>
        <div class="welcomeTextPanel" style="float:right">
            <h1 class="ptext white font-Weight-Normal">Get quick Umm al-Quwain visa</h1>
            <div class="row alignFromCenter line-height-reg white">Now Online Umm Al Quwain visa is readily available at
                Tourist Dubai Visa. Discover the offbeat emirate with reliable visa procedures operating within the
                well-guarded site on the web. See how technology eases the Umm Al Quwain holiday and relish the time and
                money you save with us. Quick online submissions and effortless visa procedures have unravelled human
                lives. Umm Al Quwain tourism is now accessible with visa experts available 24x7 services.</div>
        </div>
    </div>
</div>


<div class="row body-panel paddingFromTopNone">
    <section class="row abtPanel">
        <div class="wrap">
            <h2 class="title1">STEPS FOR UMM AL QUWAIN VISA</h2>
            <div class="stepPanel" id="aplyonlineBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-1.png"
                        width="45" height="45" alt="Umm Al-Quwain Visa Process"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites applyonline"></div>
                    </div>
                    <div class="stepPanelContentBox" id="aplyonline">Choose your preferred Umm Al-Quwain visa types
                        (14-Day Visa / 30-Day Visa), Fill Online Umm Al-Quwain Visa Application Form &amp; Upload your
                        Documents.</div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Apply online</p>
            </div>
            <div class="stepPanel" id="makepaymntBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-2.png"
                        width="45" height="45" alt="Pay Umm Al-Quwain Visa Fees Online"></div>
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
                        width="45" height="45" alt="Umm Al-Quwain visa is sent for processing"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites visaProcessing"></div>
                    </div>
                    <div class="stepPanelContentBox" id="visaProcess">Our team of visa experts will scrutinize your
                        application before sending it to Umm Al-Quwain authorities for processing.</div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Visa is sent for processing</p>
            </div>
            <div class="stepPanel" id="downloadBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-4.png"
                        width="45" height="45" alt="Print Umm Al-Quwain Visa and Fly to Umm Al-Quwain"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites printFly"></div>
                    </div>
                    <div class="stepPanelContentBox" id="download">We will mail you your Umm Al-Quwain visa immediately
                        after it is approved. Take a printout &amp; fly to Umm Al-Quwain. Bon Voyage! </div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Print visa &amp; fly to Dubai.</p>
            </div>
        </div>
    </section>

    <div class="wrap">
        <h4 class="row paddingAllExtra greyBG green border-Dashed marginFromTop alignFromCenter line-height-regExtra"
            style="font-weight:normal;">Applicants on our website get the privilege of easy online visa application and
            instantly approved online Umm Al Quwain visa. Apply for an Umm Al Quwain visa from anywhere in the world.
            Avail highest approval rates and top visa service with Tourist Dubai Visa. Our feature-rich travel portal
            champions the visa industry. We rest with record-making visa applications and the quickest approvals.
        </h4>
        <section class="row flagBG">
            <div class="whyUsBoxPanel">
                <div class="column-four whyUsPanel">
                    <div class="column-two mob20"><img src="<?=base_url()?>assets/website/media/images/idv-logo.png"
                            width="70" height="70" alt="Tourist Umm Al-Quwain Visa" title="" class="mobIMG pull_left">
                    </div>
                    <div class="column-eight mob80">
                        <p class="ptext1 black paddingFromBottom marginFromTop marginFromBottom mobpadding-0">Why Tourist
                            Umm Al-Quwain Visa?</p>
                        <div class="row points padding-All-sm whyIDV">
                            <ul>
                                <li>The only site with advanced travel-rich features.</li>
                                <li>Save your time from long embassy queues and heavy paperwork</li>
                                <li>Most effortless smart online visa application</li>
                                <li>Optimize your UAE vacations with online visa processing</li>
                                <li>Designed for proactive travellers</li>
                                <li>Accredited travel advisors available 24x7</li>
                                <li>Immediate updates of your visa application</li>
                                <li>Secured payment options</li>
                                <li>Live tracking of your online visa application</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column-six box_Sizing borderFromLeft visaTypePanel">
                    <div class="row">
                        <h3 class="headingtext1 upperCase paddingFromBottom black marginFromTop mobpadding-0">Types of
                            Umm Al-Quwain Visa We Offer</h3>
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
                                        visitors planning for a short stay in Umm Al-Quwain or Umm Al-Quwain for Trips,
                                        Meetings, Conferences or Transit stay etc. Requirements for obtaining the 14
                                        Days Umm Al-Quwain Visa varies depending on your nationality. </p>
                                    <p>14 Days Umm Al-Quwain Visa is a single entry visa, which entitles you to stay in
                                        Umm Al-Quwain for up to 14 days. The visa validity will be 60 days from the date
                                        of issue but stay should be no more than 14 days from the date of entry in Umm
                                        Al-Quwain. </p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 14 Days Umm Al-Quwain visa may take anytime between 24 to 72
                                        working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-2">
                                    <p><span class="blue marginFromRight">30 Days Visa:</span> If you want to take a
                                        short trip to Umm Al-Quwain to catch up with your family or friends, then this
                                        visa valid for 30 days will be the ideal option for you. Requirements for
                                        obtaining the 30 Days Umm Al-Quwain Visa varies depending on your nationality.
                                    </p>
                                    <p>30 Days Visa is a single entry visa, which entitles you to stay in Umm Al-Quwain
                                        for up to 30 days. The visa validity will be 60 days from the date of issue but
                                        stay should be no more than 30 days from the date of entry in Umm Al-Quwain.
                                    </p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 30 Days Umm Al-Quwain visa may take anytime between 24 to 72
                                        working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-3">
                                    <p><span class="blue marginFromRight">30 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to Umm
                                        Al-Quwain in a span of 30 days. Make as many visits for 30 days from first date
                                        of entry into Umm Al-Quwain. Requirements for obtaining the 30 Days Umm
                                        Al-Quwain Visa varies depending on your nationality. </p>
                                    <p>30 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Umm Al-Quwain for up to 30 days or less. The visa validity will be 60
                                        days from the date of issue but stay should be no more than 30 days from the
                                        date of entry in Umm Al-Quwain. You can travel multiple times to Umm Al-Quwain
                                        in this span of 30 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 30 Days (Multiple Entry) Umm Al-Quwain visa may take anytime
                                        between 24 to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-4">
                                    <p><span class="blue marginFromRight">60 Days Visa (Single Entry):</span> This is
                                        recommended for visitors planning for a medium term stay (less than 2 months) in
                                        Umm Al-Quwain to visit their family or friends. This is a Single Entry Visa and
                                        once the visitor exits Umm Al-Quwain (within a span of 60 days), the visa
                                        expires. Requirements for obtaining the 60 Days Umm Al-Quwain Visa varies
                                        depending on your nationality.<br>
                                    </p>
                                    <p>60 Days Visa (Single Entry) is a single entry visa, which entitles you to stay in
                                        Umm Al-Quwain for up to 60 days or less. The visa validity will be 60 days from
                                        the date of issue and your stay should also be no more than 60 days from the
                                        date of entry in Umm Al-Quwain.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 60 Days (Single Entry) Umm Al-Quwain visa may take anytime between
                                        24 to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-5">
                                    <p><span class="blue marginFromRight">90 Days Visa:</span> This is recommended for
                                        visitors planning for a long term stay in Umm Al-Quwain to visit their family or
                                        friends. This is a Single Entry Visa and once the visitor exits Umm Al-Quwain
                                        (within a span of 90 days), the visa expires. Requirements for obtaining the 90
                                        Days Umm Al-Quwain Visa varies depending on your nationality.<br>
                                    </p>
                                    <p>90 Days Visa (Single Entry) is a single entry visa, which entitles you to stay in
                                        Umm Al-Quwain for up to 90 days or less. The visa validity will be 60 days from
                                        the date of issue but stay should be no more than 90 days from the date of entry
                                        in Umm Al-Quwain.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90 Days (Single Entry) Umm Al-Quwain visa may take anytime between
                                        24 to 72 working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-6">
                                    <p><span class="blue marginFromRight">90 Days Visa (Multiple Entry):</span> 90 Days
                                        Multiple Entry Visa will make travel between U.A.E. and visiting nearby
                                        countries easier for travelers who need to make multiple stops for Long time
                                        whether by air, land or sea and return to Umm Al-Quwain on the same visa rather
                                        than having to incur additional time and expense obtaining two or three or more
                                        separate visas. Requirements for obtaining the 90 Days Umm Al-Quwain Visa varies
                                        depending on your nationality.<br>
                                    </p>
                                    <p>90 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Umm Al-Quwain for up to 90 days or less. The visa validity will be 60
                                        days from the date of issue but stay should be no more than 90 days from the
                                        date of entry in Umm Al-Quwain. You can travel multiple times to Umm Al-Quwain
                                        in this span of 90 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90 Days (Multiple Entry) Umm Al-Quwain visa may take anytime
                                        between 24 to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-7">
                                    <p><span class="blue marginFromRight">90 Days Job Seeker Visa (Single Entry):</span>
                                        This visa is suitable only for people looking for a job in Umm Al-Quwain. This
                                        is a Single Entry Visa and once the person exits Umm Al-Quwain (within a span of
                                        90 days), the visa expires. This means you have a period of 90 days to look for
                                        and finalize a job in Umm Al-Quwain. Once you get a job, you have to exit Umm
                                        Al-Quwain and then again apply for the work visa through the company which has
                                        hired you. </p>
                                    <p><strong>Note:</strong> The 90-Days Job Seeker Visa (Single Entry) is issued only
                                        after the you pay a security deposit as a guarantee. This security deposit will
                                        be refunded once you furnish proof that you have exited Umm
                                        Al-Quwain<sup>*</sup></p>
                                    <p>90-Days Job Seeker Visa is a single entry visa, which entitles you to stay in Umm
                                        Al-Quwain for up to 90 days or less. The visa validity will be 60 days from the
                                        date of issue but stay should be no more than 90 days from the date of entry in
                                        Umm Al-Quwain.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90-Days Job Seeker Visa (Single Entry) Umm Al-Quwain visa may take
                                        anytime between 24 to 72 working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-9">
                                    <p><span class="blue marginFromRight">96 Hours Transit Visa (Single Entry):</span>
                                        96 Hours Transit Visa will make travel between U.A.E. and visiting nearby
                                        countries easier for travelers who need to make multiple stops for Long time
                                        whether by air, land or sea and return to Umm Al-Quwain on the same visa rather
                                        than having to incur additional time and expense obtaining two or three or more
                                        separate visas. Requirements for obtaining the 96 Hours Transit Visa varies
                                        depending on your nationality.<br>
                                    </p>
                                    <p>96 Hours Transit Visa is a Single entry visa, which entitles you to stay in Umm
                                        Al-Quwain for up to 96 Hours or less. The visa validity will be 60 days from the
                                        date of issue but stay should be no more than 96 Hours from the date of entry in
                                        Umm Al-Quwain. You can travel multiple times to Umm Al-Quwain in this span of 96
                                        Hours.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 96 Hours Transit Umm Al-Quwain visa may take anytime between 24 to
                                        72 working hours. </p>
                                </div>

                                <div class="tab-content" id="tab-8">
                                    <p><span class="blue marginFromRight">14 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to Umm
                                        Al-Quwain in a span of 14 days. Make as many visits for 14 days from first date
                                        of entry into Umm Al-Quwain. Requirements for obtaining the 14 Days Umm
                                        Al-Quwain Visa varies depending on your nationality. </p>
                                    <p>14 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Umm Al-Quwain for up to 14 days or less. The visa validity will be 14
                                        days from the date of issue but stay should be no more than 14 days from the
                                        date of entry in Umm Al-Quwain. You can travel multiple times to Umm Al-Quwain
                                        in this span of 14 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 14 Days (Multiple Entry) Umm Al-Quwain visa may take anytime
                                        between 24 to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-10">
                                    <p><span class="blue marginFromRight">60 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to Umm
                                        Al-Quwain in a span of 14 days. Make as many visits for 60 days from first date
                                        of entry into Umm Al-Quwain. Requirements for obtaining the 60 Days Umm
                                        Al-Quwain Visa varies depending on your nationality. </p>
                                    <p>60 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Umm Al-Quwain for up to 60 days or less. The visa validity will be 60
                                        days from the date of issue but stay should be no more than 60 days from the
                                        date of entry in Umm Al-Quwain. You can travel multiple times to Umm Al-Quwain
                                        in this span of 60 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 60 Days (Multiple Entry) Umm Al-Quwain visa may take anytime
                                        between 24 to 72 working hours. </p>
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
                            class="black">Umm Al-Quwain</strong>- a contrast to the glitz happening nearby</h3>
                    <div class="column-six paddingFromRight mobpadding-0">
                        <p>Unlike its neighbours, this tiny emirate is blessed with lagoons those are greener than
                            green. </p>
                        <p>This emirate has a handful of well-maintained resorts. Al-Sinniyah Island is a mini natural
                            reserve filled with mangroves engulfed with migratory birds and flamingos. </p>
                        <p>The entire view of A night stroll on the isolated beaches will give you a much needed break
                            from the bustling routine of your life. </p>
                        <p>Umm AL-Quwain hosts one of the best spas of the region. Your eyeballs will roll over homes
                            made from old bricks, ragged cafes with average interiors. </p>
                        <p>Umm Al-Quwain is an upcoming destination for extreme sports with Motor Racing and Aero Clubs
                            having their centres here.</p>
                    </div>
                    <div class="column-four mobImgfull-width marginFromBottom paddingFromBottom"><img
                            src="<?=base_url()?>assets/website/media/images/umm.jpg" title="Umm Al-Quwain"
                            alt="Umm Al-Quwain" class="" width="100%" height=""></div>
                </div>
                <p>Umm Al Quwain Beach resorts are to look out for in the emirate. Who would have known that they made
                    the first discovery of oil reserves here? So how abundant would have this emirate once be?
                    Paddleboarding and kite surfing are some of the adventurous activities to reach out for. </p>
                <p>Forts and Museums here are great education hubs for ancient relics of the emirate. They rest with
                    artefacts and weapons that were once recovered from war sites on the land. Mangroves surround the
                    offshore islands of Umm Al Quwain and mushrooming islands that surprise the visitors with their
                    serenity. </p>
                <p>Watch out for the national, sport of the country, Camel Racing on the camel racing track at Al Labsa.
                    Fridays and cooler months see deserts with heavy footfall who move out of their homes to relive
                    their ancestor's legacy. </p>
            </div>
        </section>
    </div>

</div>

<?php include_once "include/footer.php";?>