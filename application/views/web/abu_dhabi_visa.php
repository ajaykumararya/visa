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
                        height="360" title="Tourist Abu Dhabi Visa" alt="apply for Abu Dhabi, Abu Dhabi visa online"></li>
            </ul>
        </div>
        <div class="welcomeTextPanel" style="float:right">
            <h1 class="ptext white font-Weight-Normal">Get instant ABU DHABI VISA</h1>
            <div class="row alignFromCenter line-height-reg white">Make your travel easy and quick with
                technology-oriented visa processing systems at Tourist Dubai Visa. Enjoy your instant online Abu Dhabi
                visa through simple and transparent online visa processing. Now travellers need not worry about their
                visas as we give an effortless visa experience globally. Abu Dhabi tourism is now made possible and
                accessible.</div>
        </div>
    </div>
</div>


<div class="row body-panel paddingFromTopNone">
    <section class="row abtPanel">
        <div class="wrap">
            <h2 class="title1">STEPS FOR ABU DHABI VISA</h2>
            <div class="stepPanel" id="aplyonlineBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-1.png"
                        width="45" height="45" alt="Abu Dhabi Visa Process"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites applyonline"></div>
                    </div>
                    <div class="stepPanelContentBox" id="aplyonline">Choose your preferred Abu Dhabi visa types (14-Day
                        Visa / 30-Day Visa), Fill Online Abu Dhabi Visa Application Form &amp; Upload your Documents.
                    </div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Apply online</p>
            </div>
            <div class="stepPanel" id="makepaymntBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-2.png"
                        width="45" height="45" alt="Pay Abu Dhabi Visa Fees Online"></div>
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
                        width="45" height="45" alt="Abu Dhabi visa is sent for processing"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites visaProcessing"></div>
                    </div>
                    <div class="stepPanelContentBox" id="visaProcess">Our team of visa experts will scrutinize your
                        application before sending it to Abu Dhabi authorities for processing.</div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Visa is sent for processing</p>
            </div>
            <div class="stepPanel" id="downloadBtn">
                <div class="column-three mobRow"><img src="<?=base_url()?>assets/website/media/images/step-4.png"
                        width="45" height="45" alt="Print Abu Dhabi Visa and Fly to Abu Dhabi"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites printFly"></div>
                    </div>
                    <div class="stepPanelContentBox" id="download">We will mail you your Abu Dhabi visa immediately
                        after it is approved. Take a printout &amp; fly to Abu Dhabi. Bon Voyage! </div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Print visa &amp; fly to Dubai.</p>
            </div>
        </div>
    </section>

    <div class="wrap">
        <h4 class="row paddingAllExtra greyBG green border-Dashed marginFromTop alignFromCenter line-height-regExtra"
            style="font-weight:normal;">Visitors now need not worry about winning a visa as we give you the best online
            visa processing platform. Apply for an Abu Dhabi visa online from anywhere in the world. You can enjoy the
            highest approval rates and speedy service with us. Our advanced technology-oriented portal tops the visa
            industry with the maximum number of online visa applications and the highest approval percentage.
        </h4>
        <section class="row flagBG">
            <div class="whyUsBoxPanel">
                <div class="column-four whyUsPanel">
                    <div class="column-two mob20"><img src="<?=base_url()?>assets/website/media/images/idv-logo.png"
                            width="70" height="70" alt="Tourist Abu Dhabi Visa" title="" class="mobIMG pull_left"></div>
                    <div class="column-eight mob80">
                        <p class="ptext1 black paddingFromBottom marginFromTop marginFromBottom mobpadding-0">Why Tourist
                            Dubai Visa?</p>
                        <div class="row points padding-All-sm whyIDV">
                            <ul>
                                <li>The only portal to embed ultra-advanced technology with travel on the global
                                    platform</li>
                                <li>Apply from the comfort of your couch</li>
                                <li>Straightforward steps for online visa application</li>
                                <li>High-functionality with strict data policies </li>
                                <li>Designed by travel experts </li>
                                <li>Team of visa specialists at your service 24x7</li>
                                <li>Personalised help at every step of online visa processing</li>
                                <li>Highly secured multiple payment channels</li>
                                <li>An immersive experience at every stage of your visa application</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column-six box_Sizing borderFromLeft visaTypePanel">
                    <div class="row">
                        <h3 class="headingtext1 upperCase paddingFromBottom black marginFromTop mobpadding-0">Types of
                            Abu Dhabi Visa We Offer</h3>
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
                                        visitors planning for a short stay in Abu Dhabi or Abu Dhabi for Trips,
                                        Meetings, Conferences or Transit stay etc. Requirements for obtaining the 14
                                        Days Abu Dhabi Visa varies depending on your nationality. </p>
                                    <p>14 Days Abu Dhabi Visa is a single entry visa, which entitles you to stay in Abu
                                        Dhabi for up to 14 days. The visa validity will be 60 days from the date of
                                        issue but stay should be no more than 14 days from the date of entry in Abu
                                        Dhabi. </p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 14 Days Abu Dhabi visa may take anytime between 24 to 72 working
                                        hours.</p>
                                </div>
                                <div class="tab-content" id="tab-2">
                                    <p><span class="blue marginFromRight">30 Days Visa:</span> If you want to take a
                                        short trip to Abu Dhabi to catch up with your family or friends, then this visa
                                        valid for 30 days will be the ideal option for you. Requirements for obtaining
                                        the 30 Days Abu Dhabi Visa varies depending on your nationality. </p>
                                    <p>30 Days Visa is a single entry visa, which entitles you to stay in Abu Dhabi for
                                        up to 30 days. The visa validity will be 60 days from the date of issue but stay
                                        should be no more than 30 days from the date of entry in Abu Dhabi. </p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 30 Days Abu Dhabi visa may take anytime between 24 to 72 working
                                        hours.</p>
                                </div>
                                <div class="tab-content" id="tab-3">
                                    <p><span class="blue marginFromRight">30 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to Abu
                                        Dhabi in a span of 30 days. Make as many visits for 30 days from first date of
                                        entry into Abu Dhabi. Requirements for obtaining the 30 Days Abu Dhabi Visa
                                        varies depending on your nationality. </p>
                                    <p>30 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Abu Dhabi for up to 30 days or less. The visa validity will be 60 days
                                        from the date of issue but stay should be no more than 30 days from the date of
                                        entry in Abu Dhabi. You can travel multiple times to Abu Dhabi in this span of
                                        30 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 30 Days (Multiple Entry) Abu Dhabi visa may take anytime between 24
                                        to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-4">
                                    <p><span class="blue marginFromRight">60 Days Visa (Single Entry):</span> This is
                                        recommended for visitors planning for a medium term stay (less than 2 months) in
                                        Abu Dhabi to visit their family or friends. This is a Single Entry Visa and once
                                        the visitor exits Abu Dhabi (within a span of 60 days), the visa expires.
                                        Requirements for obtaining the 60 Days Abu Dhabi Visa varies depending on your
                                        nationality.<br>
                                    </p>
                                    <p>60 Days Visa (Single Entry) is a single entry visa, which entitles you to stay in
                                        Abu Dhabi for up to 60 days or less. The visa validity will be 60 days from the
                                        date of issue and your stay should also be no more than 60 days from the date of
                                        entry in Abu Dhabi.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 60 Days (Single Entry) Abu Dhabi visa may take anytime between 24
                                        to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-5">
                                    <p><span class="blue marginFromRight">90 Days Visa:</span> This is recommended for
                                        visitors planning for a long term stay in Abu Dhabi to visit their family or
                                        friends. This is a Single Entry Visa and once the visitor exits Abu Dhabi
                                        (within a span of 90 days), the visa expires. Requirements for obtaining the 90
                                        Days Abu Dhabi Visa varies depending on your nationality.<br>
                                    </p>
                                    <p>90 Days Visa (Single Entry) is a single entry visa, which entitles you to stay in
                                        Abu Dhabi for up to 90 days or less. The visa validity will be 60 days from the
                                        date of issue but stay should be no more than 90 days from the date of entry in
                                        Abu Dhabi.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90 Days (Single Entry) Abu Dhabi visa may take anytime between 24
                                        to 72 working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-6">
                                    <p><span class="blue marginFromRight">90 Days Visa (Multiple Entry):</span> 90 Days
                                        Multiple Entry Visa will make travel between U.A.E. and visiting nearby
                                        countries easier for travelers who need to make multiple stops for Long time
                                        whether by air, land or sea and return to Abu Dhabi on the same visa rather than
                                        having to incur additional time and expense obtaining two or three or more
                                        separate visas. Requirements for obtaining the 90 Days Abu Dhabi Visa varies
                                        depending on your nationality.<br>
                                    </p>
                                    <p>90 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Abu Dhabi for up to 90 days or less. The visa validity will be 60 days
                                        from the date of issue but stay should be no more than 90 days from the date of
                                        entry in Abu Dhabi. You can travel multiple times to Abu Dhabi in this span of
                                        90 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90 Days (Multiple Entry) Abu Dhabi visa may take anytime between 24
                                        to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-7">
                                    <p><span class="blue marginFromRight">90 Days Job Seeker Visa (Single Entry):</span>
                                        This visa is suitable only for people looking for a job in Abu Dhabi. This is a
                                        Single Entry Visa and once the person exits Abu Dhabi (within a span of 90
                                        days), the visa expires. This means you have a period of 90 days to look for and
                                        finalize a job in Abu Dhabi. Once you get a job, you have to exit Abu Dhabi and
                                        then again apply for the work visa through the company which has hired you. </p>
                                    <p><strong>Note:</strong> The 90-Days Job Seeker Visa (Single Entry) is issued only
                                        after the you pay a security deposit as a guarantee. This security deposit will
                                        be refunded once you furnish proof that you have exited Abu Dhabi<sup>*</sup>
                                    </p>
                                    <p>90-Days Job Seeker Visa is a single entry visa, which entitles you to stay in Abu
                                        Dhabi for up to 90 days or less. The visa validity will be 60 days from the date
                                        of issue but stay should be no more than 90 days from the date of entry in Abu
                                        Dhabi.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 90-Days Job Seeker Visa (Single Entry) Abu Dhabi visa may take
                                        anytime between 24 to 72 working hours.</p>
                                </div>
                                <div class="tab-content" id="tab-9">
                                    <p><span class="blue marginFromRight">96 Hours Transit Visa (Single Entry):</span>
                                        96 Hours Transit Visa will make travel between U.A.E. and visiting nearby
                                        countries easier for travelers who need to make multiple stops for Long time
                                        whether by air, land or sea and return to Abu Dhabi on the same visa rather than
                                        having to incur additional time and expense obtaining two or three or more
                                        separate visas. Requirements for obtaining the 96 Hours Transit Visa varies
                                        depending on your nationality.<br>
                                    </p>
                                    <p>96 Hours Transit Visa is a Single entry visa, which entitles you to stay in Abu
                                        Dhabi for up to 96 Hours or less. The visa validity will be 60 days from the
                                        date of issue but stay should be no more than 96 Hours from the date of entry in
                                        Abu Dhabi. You can travel multiple times to Abu Dhabi in this span of 96 Hours.
                                    </p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 96 Hours Transit Abu Dhabi visa may take anytime between 24 to 72
                                        working hours. </p>
                                </div>

                                <div class="tab-content" id="tab-8">
                                    <p><span class="blue marginFromRight">14 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to Abu
                                        Dhabi in a span of 14 days. Make as many visits for 14 days from first date of
                                        entry into Abu Dhabi. Requirements for obtaining the 14 Days Abu Dhabi Visa
                                        varies depending on your nationality. </p>
                                    <p>14 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Abu Dhabi for up to 14 days or less. The visa validity will be 14 days
                                        from the date of issue but stay should be no more than 14 days from the date of
                                        entry in Abu Dhabi. You can travel multiple times to Abu Dhabi in this span of
                                        14 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 14 Days (Multiple Entry) Abu Dhabi visa may take anytime between 24
                                        to 72 working hours. </p>
                                </div>
                                <div class="tab-content" id="tab-10">
                                    <p><span class="blue marginFromRight">60 Days Visa (Multiple Entry):</span> This
                                        visa is perfect for people who want to take frequent / multiple visits to Abu
                                        Dhabi in a span of 14 days. Make as many visits for 60 days from first date of
                                        entry into Abu Dhabi. Requirements for obtaining the 60 Days Abu Dhabi Visa
                                        varies depending on your nationality. </p>
                                    <p>60 Days Visa (Multiple Entry) is a multiple entry visa, which entitles you to
                                        stay in Abu Dhabi for up to 60 days or less. The visa validity will be 60 days
                                        from the date of issue but stay should be no more than 60 days from the date of
                                        entry in Abu Dhabi. You can travel multiple times to Abu Dhabi in this span of
                                        60 days.</p>
                                    <p><span class="blue marginFromRight">Visa Processing Time:</span> The processing
                                        time for the 60 Days (Multiple Entry) Abu Dhabi visa may take anytime between 24
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
                            class="black">Abu Dhabi</strong>- a brimming emirate with sun-kissed beaches and cosmo city
                        vibes</h3>
                    <div class="column-six paddingFromRight mobpadding-0">
                        <p>Abu Dhabi is booming with visitors. Embellished with extravagant resorts, celestial escapes,
                            herons on mangroves and unrealistic museums, Abu Dhabi has a class edge to its identity.</p>
                        <p> The pristine Emirates Palace is one of the world most expensive hotels and you don’t have to
                            rent their suites to experience the perfect artistic workmanship. </p>
                        <p>Heritage Village is a perfect cultural visit. The most complex bridge ever constructed,
                            Sheikh Zayed Bridge is a sight to behold.</p>
                        <p> The iconic Ferrari World offers roller coaster rides with Ferrari concept evoking the real
                            world of sports cars. To enjoy a little slow-paced metropolitan visit, Abu Dhabi is the
                            ultimate.</p>
                    </div>
                    <div class="column-four paddingFromLeft mobImgfull-width marginFromBottom paddingFromBottom"><img
                            src="<?=base_url()?>assets/website/media/images/abu-dhabi.jpg" title="Abu Dhabi"
                            alt="Abu Dhabi" class="" width="100%" height=""></div>
                </div>
                <p>The Emirate of Abu Dhabi invites its curious onlookers with great adventures and peaceful
                    experiences. Kayaking trips, day dune bashing, whitewashed mosques and plush malls are just some
                    reasons that consume tourists and locals. Monuments and human-made structures are an ensemble of
                    intricate craftsmanship awash with cultural essence in an urban set-up. </p>
                <p>Get soaked with the magnificence of the Grand Mosque and the Louvre. Riddle with the Eastern
                    mangroves in a kayak. Vroom, your way with Ferrari racer, bests at Ferrari World and then indulge in
                    world-class cuisine at the world's finest restaurants. </p>
                <p>Chill out Saadiyat Islands on white sands to revamp for vibrant nightlife in the city. See your
                    little ones exhaust their energy at Warner Bros World. Be a part of <strong>Abu Dhabi
                        tourism</strong> that offers more than just a destination. </p>
            </div>
        </section>
    </div>

</div>

<?php include_once "include/footer.php";?>