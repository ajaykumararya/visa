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
                                        class="row button-large primary-button marginFromBottomNone alignFromCenter"
                                        value="GO" />
                                </div>
                            </div>
                        </form>
        </div>
        <div class="slideshow-panel" data-transition="crossfade" data-loop="true" data-skip="false">
            <ul class="carousel"  style="width:100%">
                <li class="slide" style="width:100%"><img src="<?=base_url()?>assets/website/media/images/umm.jpg" width="100%"
                        height="360" title="Insta Ras Al-Khaimah Visa"
                        alt="apply for Ras Al-Khaimah, Ras Al-Khaimah visa online"></li>
            </ul>
        </div>
        <div class="welcomeTextPanel" style="float:right">
            <h1 class="ptext white font-Weight-Normal">Get quick and smooth Ras al-Khaimah</h1>
            <div class="row alignFromCenter line-height-reg white">Online Ras Al-Khaimah visa is feasible at Insta Dubai
                Visa. Discover the most loved emirate for quick escapes with reliable visa procedures operating within a
                fully secured online visa processing system. See how technology simplifies the Ras al-Khaimah holiday
                and enjoy the time and money you save with Insta Dubai Visa. Effortless online submissions and simple
                visa procedures have unravelled human lives. </div>
        </div>
    </div>
</div>


<div class="row body-panel paddingFromTopNone">
    <section class="row abtPanel">
        <div class="wrap">
            <h2 class="title1">Ras Al-Khaimah VISA PROCESSING Steps</h2>
            <div class="stepPanel" id="aplyonlineBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-1.png"
                        width="45" height="45" alt="Ras Al-Khaimah Visa Process"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites applyonline"></div>
                    </div>
                    <div class="stepPanelContentBox" id="aplyonline">Choose your preferred Ras Al-Khaimah visa types
                        (14-Day Visa / 30-Day Visa), Fill Online Ras Al-Khaimah Visa Application Form &amp; Upload your
                        Documents.</div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Apply online</p>
            </div>
            <div class="stepPanel" id="makepaymntBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-2.png"
                        width="45" height="45" alt="Pay Ras Al-Khaimah Visa Fees Online"></div>
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
                        width="45" height="45" alt="Ras Al-Khaimah visa is sent for processing"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites visaProcessing"></div>
                    </div>
                    <div class="stepPanelContentBox" id="visaProcess">Our team of visa experts will scrutinize your
                        application before sending it to Ras Al-Khaimah authorities for processing.</div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Visa is sent for processing</p>
            </div>
            <div class="stepPanel" id="downloadBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-4.png"
                        width="45" height="45" alt="Print Ras Al-Khaimah Visa and Fly to Ras Al-Khaimah"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites printFly"></div>
                    </div>
                    <div class="stepPanelContentBox" id="download">We will mail you your Ras Al-Khaimah visa immediately
                        after it is approved. Take a printout &amp; fly to Ras Al-Khaimah. Bon Voyage! </div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Print visa &amp; fly to Dubai.</p>
            </div>
        </div>
    </section>

    <div class="wrap">
        <h4 class="row paddingAllExtra greyBG green border-Dashed marginFromTop alignFromCenter line-height-regExtra"
            style="font-weight:normal;">World’s largest supplier of online Ras Al-Khaimah visas, successfully processing
            more than 1,00,000 Ras Al-Khaimah visas per month. We are proud of the fact that our visa rejection rate is
            less than 0.02%, the absolute lowest in the industry. </h4>
        <section class="row flagBG">
            <div class="whyUsBoxPanel">
                <div class="column-four whyUsPanel">
                    <div class="column-two mob20"><img src="<?=base_url()?>assets/website/media/images/logo.png"
                            width="70" height="70" alt="Insta Ras Al-Khaimah Visa" title="" class="mobIMG pull_left">
                    </div>
                    <div class="column-eight mob80">
                        <p class="ptext1 black paddingFromBottom marginFromTop marginFromBottom mobpadding-0">Why Insta
                            Ras Al-Khaimah Visa?</p>
                        <div class="row points padding-All-sm whyIDV">
                            <ul>
                                <li>Optimize your UAE holidays with online visa processing</li>
                                <li>Designed for proactive travellers </li>
                                <li>Accredited travel advisors are available 24x7</li>
                                <li>The only site with advanced travel-rich features.</li>
                                <li>Save your time from long embassy queues and heavy paperwork </li>
                                <li>Most effortless innovative online visa application</li>
                                <li>Immediate updates of your visa application </li>
                                <li>Secured payment options</li>
                                <li>Live tracking of your <strong>online visa application</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column-six box_Sizing borderFromLeft visaTypePanel">
                    <div class="row">
                        <h3 class="headingtext1 upperCase paddingFromBottom black marginFromTop mobpadding-0">Types of
                            Ras Al-Khaimah Visa We Offer</h3>
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
                                        visitors planning for a short stay in Ras Al-Khaimah or Ras Al-Khaimah for
                                        Trips, Meetings, Conferences or Transit stay etc. Requirements for obtaining the
                                        14 Days Ras Al-Khaimah Visa varies depending on your nationality. </p>
                                    <p>14 Days Ras Al-Khaimah Visa is a single entry visa, which entitles you to stay in
                                        Ras Al-Khaimah for up to 14 days. The visa validity will be 60 days from the
                                        date of issue but stay should be no more than 14 days from the date of entry in
                                        Ras Al-Khaimah. </p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 14 Days Ras Al-Khaimah visa may take anytime between 24 to 72
                                        working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-2">
                                    <p><span class="blue marginFromRight">30 Days Visa:</span> If you want to take a
                                        short trip to Ras Al-Khaimah to catch up with your family or friends, then this
                                        visa valid for 30 days will be the ideal option for you. Requirements for
                                        obtaining the 30 Days Ras Al-Khaimah Visa varies depending on your nationality.
                                    </p>
                                    <p>30 Days Visa is a single entry visa, which entitles you to stay in Ras Al-Khaimah
                                        for up to 30 days. The visa validity will be 60 days from the date of issue but
                                        stay should be no more than 30 days from the date of entry in Ras Al-Khaimah.
                                    </p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 30 Days Ras Al-Khaimah visa may take anytime between 24 to 72
                                        working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-3">
                                    <p><span class="blue marginFromRight">30 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to Ras
                                        Al-Khaimah in a span of 30 days. Make as many visits for 30 days from first date
                                        of entry into Ras Al-Khaimah. Requirements for obtaining the 30 Days Ras
                                        Al-Khaimah Visa varies depending on your nationality. </p>
                                    <p>30 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Ras Al-Khaimah for up to 30 days or less. The visa validity will be 60
                                        days from the date of issue but stay should be no more than 30 days from the
                                        date of entry in Ras Al-Khaimah. You can travel multiple times to Ras Al-Khaimah
                                        in this span of 30 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 30 Days (Multiple Entry) Ras Al-Khaimah visa may take anytime
                                        between 24 to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-4">
                                    <p><span class="blue marginFromRight">60 Days Visa (Single Entry):</span> This is
                                        recommended for visitors planning for a medium term stay (less than 2 months) in
                                        Ras Al-Khaimah to visit their family or friends. This is a Single Entry Visa and
                                        once the visitor exits Ras Al-Khaimah (within a span of 60 days), the visa
                                        expires. Requirements for obtaining the 60 Days Ras Al-Khaimah Visa varies
                                        depending on your nationality.<br>
                                    </p>
                                    <p>60 Days Visa (Single Entry) is a single entry visa, which entitles you to stay in
                                        Ras Al-Khaimah for up to 60 days or less. The visa validity will be 60 days from
                                        the date of issue and your stay should also be no more than 60 days from the
                                        date of entry in Ras Al-Khaimah.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 60 Days (Single Entry) Ras Al-Khaimah visa may take anytime between
                                        24 to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-5">
                                    <p><span class="blue marginFromRight">90 Days Visa:</span> This is recommended for
                                        visitors planning for a long term stay in Ras Al-Khaimah to visit their family
                                        or friends. This is a Single Entry Visa and once the visitor exits Ras
                                        Al-Khaimah (within a span of 90 days), the visa expires. Requirements for
                                        obtaining the 90 Days Ras Al-Khaimah Visa varies depending on your
                                        nationality.<br>
                                    </p>
                                    <p>90 Days Visa (Single Entry) is a single entry visa, which entitles you to stay in
                                        Ras Al-Khaimah for up to 90 days or less. The visa validity will be 60 days from
                                        the date of issue but stay should be no more than 90 days from the date of entry
                                        in Ras Al-Khaimah.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90 Days (Single Entry) Ras Al-Khaimah visa may take anytime between
                                        24 to 72 working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-6">
                                    <p><span class="blue marginFromRight">90 Days Visa (Multiple Entry):</span> 90 Days
                                        Multiple Entry Visa will make travel between U.A.E. and visiting nearby
                                        countries easier for travelers who need to make multiple stops for Long time
                                        whether by air, land or sea and return to Ras Al-Khaimah on the same visa rather
                                        than having to incur additional time and expense obtaining two or three or more
                                        separate visas. Requirements for obtaining the 90 Days Ras Al-Khaimah Visa
                                        varies depending on your nationality.<br>
                                    </p>
                                    <p>90 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Ras Al-Khaimah for up to 90 days or less. The visa validity will be 60
                                        days from the date of issue but stay should be no more than 90 days from the
                                        date of entry in Ras Al-Khaimah. You can travel multiple times to Ras Al-Khaimah
                                        in this span of 90 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90 Days (Multiple Entry) Ras Al-Khaimah visa may take anytime
                                        between 24 to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-7">
                                    <p><span class="blue marginFromRight">90 Days Job Seeker Visa (Single Entry):</span>
                                        This visa is suitable only for people looking for a job in Ras Al-Khaimah. This
                                        is a Single Entry Visa and once the person exits Ras Al-Khaimah (within a span
                                        of 90 days), the visa expires. This means you have a period of 90 days to look
                                        for and finalize a job in Ras Al-Khaimah. Once you get a job, you have to exit
                                        Ras Al-Khaimah and then again apply for the work visa through the company which
                                        has hired you. </p>
                                    <p><strong>Note:</strong> The 90-Days Job Seeker Visa (Single Entry) is issued only
                                        after the you pay a security deposit as a guarantee. This security deposit will
                                        be refunded once you furnish proof that you have exited Ras
                                        Al-Khaimah<sup>*</sup></p>
                                    <p>90-Days Job Seeker Visa is a single entry visa, which entitles you to stay in Ras
                                        Al-Khaimah for up to 90 days or less. The visa validity will be 60 days from the
                                        date of issue but stay should be no more than 90 days from the date of entry in
                                        Ras Al-Khaimah.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90-Days Job Seeker Visa (Single Entry) Ras Al-Khaimah visa may take
                                        anytime between 24 to 72 working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-9">
                                    <p><span class="blue marginFromRight">96 Hours Transit Visa (Single Entry):</span>
                                        96 Hours Transit Visa will make travel between U.A.E. and visiting nearby
                                        countries easier for travelers who need to make multiple stops for Long time
                                        whether by air, land or sea and return to Ras Al-Khaimah on the same visa rather
                                        than having to incur additional time and expense obtaining two or three or more
                                        separate visas. Requirements for obtaining the 96 Hours Transit Visa varies
                                        depending on your nationality.<br>
                                    </p>
                                    <p>96 Hours Transit Visa is a Single entry visa, which entitles you to stay in Ras
                                        Al-Khaimah for up to 96 Hours or less. The visa validity will be 60 days from
                                        the date of issue but stay should be no more than 96 Hours from the date of
                                        entry in Ras Al-Khaimah. You can travel multiple times to Ras Al-Khaimah in this
                                        span of 96 Hours.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 96 Hours Transit Ras Al-Khaimah visa may take anytime between 24 to
                                        72 working hours. </p>
                                </div>

                                <div class="tab-content" id="tab-8">
                                    <p><span class="blue marginFromRight">14 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to Ras
                                        Al-Khaimah in a span of 14 days. Make as many visits for 14 days from first date
                                        of entry into Ras Al-Khaimah. Requirements for obtaining the 14 Days Ras
                                        Al-Khaimah Visa varies depending on your nationality. </p>
                                    <p>14 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Ras Al-Khaimah for up to 14 days or less. The visa validity will be 14
                                        days from the date of issue but stay should be no more than 14 days from the
                                        date of entry in Ras Al-Khaimah. You can travel multiple times to Ras Al-Khaimah
                                        in this span of 14 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 14 Days (Multiple Entry) Ras Al-Khaimah visa may take anytime
                                        between 24 to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-10">
                                    <p><span class="blue marginFromRight">60 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to Ras
                                        Al-Khaimah in a span of 14 days. Make as many visits for 60 days from first date
                                        of entry into Ras Al-Khaimah. Requirements for obtaining the 60 Days Ras
                                        Al-Khaimah Visa varies depending on your nationality. </p>
                                    <p>60 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Ras Al-Khaimah for up to 60 days or less. The visa validity will be 60
                                        days from the date of issue but stay should be no more than 60 days from the
                                        date of entry in Ras Al-Khaimah. You can travel multiple times to Ras Al-Khaimah
                                        in this span of 60 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 60 Days (Multiple Entry) Ras Al-Khaimah visa may take anytime
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
                            class="black">Ras Al-Khaimah</strong>- ruins of 16th-century await you</h3>
                    <div class="column-six paddingFromRight mobpadding-0">
                        <p>Hajar Mountains guard the most scenic emirate of UAE- Ras Al-Khaimah. A sunrise road trip
                            from Dubai is the best way to enjoy this emirate. </p>
                        <p>Gradient blue waters filled with high adrenaline activities- this is just the perfect break
                            you need. </p>
                        <p>Sun-baked deserts accompanied by desert activities are a must-to-go for. The pinnacle of
                            development in Ras Al-Khaimah is the longest zipline in the world built on Jebel Jais
                            mountains.</p>
                        <p>The Bedouin camps in the deserts of Ras Al-Khaimah will be a wonderful experience with
                            Arabian music and rich and authentic Arabic food. </p>
                        <p>Ras al-Khaimah beaches are a hot spot for beach lovers. For those who wish to escape Dubai's
                            hustle and bustle, ride their way to Ras Al Khaimah. The emirate surprises its visitors with
                            high energy activities and sports. Ziplining is famed across the globe as it offers
                            panoramic views of the Hajar mountains.</p>
                    </div>
                    <div class="column-four mobImgfull-width marginFromBottom paddingFromBottom"><img
                            src="<?=base_url()?>assets/website/media/images/ras.jpg" title="Ras Al-Khaimah"
                            alt="Ras Al-Khaimah" class="" width="100%" height=""></div>
                </div>

                <p>The region holds prominence for its historical excavations that prove the emirate has been inhabited
                    since the 3rd century. The emirate offers the most beautiful sunsets in the country. Give your
                    hiking skills a treat at Dhayan Fort. The military tower was one of the defence mechanisms in the
                    past. If you haven't taken a road trip to the Hajar Mountains, your trip is not a trip. Climb the
                    Jebel Jais to capture some of the most scenic panoramas of the country. Peace and serenity are
                    widespread on this horizon. Adventurous activities are a vital part of <strong>Ras al-Khaimah
                        tourism</strong>.</p>
                <p>Ras al-Khaimah National Museum holds the history of the emirate. A miss to the museum will lead to an
                    incomplete holiday. Undust the 16th-century ancient fishing village, Jazirat Al-Hamra. Soak yourself
                    in the natural springs at Hatt Fort. The majestic structure is a living example of ancient Islamic
                    architecture.</p>
                <p>To explore the bygone eras of the emirate and the reasons that shaped it to what it is today, you
                    require a visa. Apply for an <strong>online Ras al-Khaimah visa</strong> and explore the unexplored.
                    For further queries, reach our visa experts and avail of the best services. We are available for
                    24x7 chat support, Skype, email and WhatsApp.</p>
            </div>
        </section>
    </div>


    <div class="wrap pos-Reltv marginFromTop">
        <section class="row">
            <div class="row content marginFromTop visaTypeContent">
                <h3 class="upperCase paddingFromBottom black marginFromTop mobpadding-0">Get quick and smooth Ras
                    al-Khaimah</h3>
                <p>Applicants or travellers enjoy the privilege of quick online visa applications and instantly
                    approved<strong> online Ras al-Khaimah visa</strong>. Apply for an entry permit from the comfort of
                    your home. Avail of the highest approval rates and top visa service with Insta Dubai Visa. Our
                    travel portal is rich in features that enable hassle-free travel. We rest with record-making
                    <strong>online visa applications</strong> and the quickest approvals.</p>

            </div>
        </section>
    </div>


</div>

<?php include_once "include/footer.php";?>