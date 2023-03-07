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
        position: relative;
    }

    .issueDiv {
        background: #00732f;
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
        background: url(../www.ievisa.com/assets/images/dubai-bg.jpg) 0 0/100% 100% fixed no-repeat;
        border-radius: 10px;
    }

    .visaDivHeading {
        font-size: 50px;
        line-height: 42px;
    }

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
        text-transform: uppercase;
    }

    .entryType:after {
        position: absolute;
        left: -10px;
        top: 0px;
        content: "";
        border-style: solid;
        border-width: 15px 5px;
        border-color: #207ce5 #207ce5 transparent transparent;
    }

    .entryType:before {
        position: absolute;
        right: -10px;
        top: 0px;
        content: "";
        border-style: solid;
        border-width: 15px 5px;
        border-color: #207ce5 transparent transparent #207ce5;
    }

    @media all and (max-width:767px) {
        .stepDivBox {
            width: 100%;
            margin-bottom: 90px;
        }

        .visaDiv {
            width: 99%;
        }

        .font16 {
            font-size: 15px !important;
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

<body>
    <div class="wrapper">
        <div class="row body-panel padding-0" style="background:#f1f1f1;">


            <div class="wrap pos-Reltv pageGapping">
                <section class="row">
                    <h1
                        class="row alignFromCenter font-Weight-Normal titleFont upperCase paddingFromBottom marginFromBottom">
                        Apply Dubai Visa Online</h1>
                    <div class="row">
                        <div class="row marginFromBottom paddingAllExtra whiteBG borderFromTop mobpaddingInBox">
                            <section class="row">
                                <div class="container column-threeForth alignFromCenter font16 fontBold">World’s largest
                                    supplier of online dubai visas, successfully processing more than 1,00,000 dubai
                                    visas per month.</div>
                                <div class="row marginFromBottom paddingFromTop" id="IN">
                                    <div class="container column-nine alignFromCenter alert-panel warning font16">
                                        Important Note: This visa is valid across all UAE emirates, namely Dubai, Abu
                                        Dhabi, Ajman, Sharjah, Fujairah, Ras Al Khaimah and Umm Al Quwain</div>
                                </div>
                                <div class="visaDiv">
                                    <div class="row fontBold green visaDivHeading">96 Hrs</div>
                                    <div class="row fontTwnty marginFromBottom">Transit Visa</div>
                                    <div class="entryType">Single Entry</div>
                                    <div class="row paddingAll greyBG borderFromTop marginFromTop">
                                        <div class="issueDiv">Processing Time is 24 - 72 Working Hours</div>
                                        <div class="row font16 label">Stay Validity is 96 hours from the time of entry
                                        </div>
                                        <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the
                                            date of issue</div>
                                        <div class="row">
                                            <form id="visaForm" name="visaForm"
                                                action="<?=base_url()?>Web/visa_application_form"
                                                method="post" enctype="multipart/form-data">
                                                <div
                                                    class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                                                    <div class="row red">Regular Visa</div>
                                                    <div class="row label fontTwnty">$ 149</div>
                                                    <input class="button-large custom-button pull_right marginFromTop"
                                                        value="Apply Now" name="submit_r" id="submit_r" type="submit">
                                                </div>
                                                <div
                                                    class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                                                    <div class="row red">Visa + Travel Insurance</div>
                                                    <div class="row label fontTwnty"><span class="strike">$328</span>
                                                        $228</div>
                                                    <input type="hidden" id="visa_type_id" name="visa_type_id"
                                                        value="6" />
                                                    <input class="button-large custom-button marginFromTop"
                                                        value="Apply Now" name="submit_e" id="submit_e" type="submit">
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
                                        <div class="row font16 label">Stay Validity is 14 days from the date of entry
                                        </div>
                                        <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the
                                            date of issue</div>
                                        <div class="row">
                                            <form id="visaForm" name="visaForm"
                                                action="<?=base_url()?>web/visa_application_form"
                                                method="post" enctype="multipart/form-data">
                                                <div
                                                    class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                                                    <div class="row red">Regular Visa</div>
                                                    <div class="row label fontTwnty">$ 189</div>
                                                    <input class="button-large custom-button pull_right marginFromTop"
                                                        value="Apply Now" name="submit_r" id="submit_r" type="submit">
                                                </div>
                                                <div
                                                    class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                                                    <div class="row red">Visa + Travel Insurance</div>
                                                    <div class="row label fontTwnty"><span class="strike">$388</span>
                                                        $288</div>
                                                    <input type="hidden" id="visa_type_id" name="visa_type_id"
                                                        value="1" />
                                                    <input class="button-large custom-button marginFromTop"
                                                        value="Apply Now" name="submit_e" id="submit_e" type="submit">
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
                                        <div class="row font16 label">Stay Validity is 30 days from the date of entry
                                        </div>
                                        <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the
                                            date of issue</div>
                                        <div class="row">
                                            <form id="visaForm" name="visaForm"
                                                action="<?=base_url()?>web/visa_application_form"
                                                method="post" enctype="multipart/form-data">
                                                <div
                                                    class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                                                    <div class="row red">Regular Visa</div>
                                                    <div class="row label fontTwnty">$ 199</div>
                                                    <input class="button-large custom-button pull_right marginFromTop"
                                                        value="Apply Now" name="submit_r" id="submit_r" type="submit">
                                                </div>
                                                <div
                                                    class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                                                    <div class="row red">Visa + Travel Insurance</div>
                                                    <div class="row label fontTwnty"><span class="strike">$418</span>
                                                        $318</div>
                                                    <input type="hidden" id="visa_type_id" name="visa_type_id"
                                                        value="2" />
                                                    <input class="button-large custom-button marginFromTop"
                                                        value="Apply Now" name="submit_e" id="submit_e" type="submit">
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
                                        <div class="row font16 label">Stay Validity is 60 days from the date of entry
                                        </div>
                                        <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the
                                            date of issue</div>
                                        <div class="row">
                                            <form id="visaForm" name="visaForm"
                                                action="<?=base_url()?>web/visa_application_form"
                                                method="post" enctype="multipart/form-data">
                                                <div
                                                    class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                                                    <div class="row red">Regular Visa</div>
                                                    <div class="row label fontTwnty">$ 349</div>
                                                    <input class="button-large custom-button pull_right marginFromTop"
                                                        value="Apply Now" name="submit_r" id="submit_r" type="submit">
                                                </div>
                                                <div
                                                    class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                                                    <div class="row red">Visa + Travel Insurance</div>
                                                    <div class="row label fontTwnty"><span class="strike">$618</span>
                                                        $518</div>
                                                    <input type="hidden" id="visa_type_id" name="visa_type_id"
                                                        value="7" />
                                                    <input class="button-large custom-button marginFromTop"
                                                        value="Apply Now" name="submit_e" id="submit_e" type="submit">
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
                                        <div class="row font16 label">Stay Validity is 14 days from the date of entry
                                        </div>
                                        <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the
                                            date of issue</div>
                                        <div class="row">
                                            <form id="visaForm" name="visaForm"
                                                action="<?=base_url()?>web/visa_application_form"
                                                method="post" enctype="multipart/form-data">
                                                <div
                                                    class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                                                    <div class="row red">Regular Visa</div>
                                                    <div class="row label fontTwnty">$ 390</div>
                                                    <input class="button-large custom-button pull_right marginFromTop"
                                                        value="Apply Now" name="submit_r" id="submit_r" type="submit">
                                                </div>
                                                <div
                                                    class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                                                    <div class="row red">Visa + Travel Insurance</div>
                                                    <div class="row label fontTwnty"><span class="strike">$609</span>
                                                        $509</div>
                                                    <input type="hidden" id="visa_type_id" name="visa_type_id"
                                                        value="21" />
                                                    <input class="button-large custom-button marginFromTop"
                                                        value="Apply Now" name="submit_e" id="submit_e" type="submit">
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
                                        <div class="row font16 label">Stay Validity is 30 days from the date of first
                                            entry</div>
                                        <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the
                                            date of issue</div>
                                        <div class="row">
                                            <form id="visaForm" name="visaForm"
                                                action="<?=base_url()?>web/visa_application_form"
                                                method="post" enctype="multipart/form-data">
                                                <div
                                                    class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                                                    <div class="row red">Regular Visa</div>
                                                    <div class="row label fontTwnty">$ 445</div>
                                                    <input class="button-large custom-button pull_right marginFromTop"
                                                        value="Apply Now" name="submit_r" id="submit_r" type="submit">
                                                </div>
                                                <div
                                                    class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                                                    <div class="row red">Visa + Travel Insurance</div>
                                                    <div class="row label fontTwnty"><span class="strike">$664</span>
                                                        $564</div>
                                                    <input type="hidden" id="visa_type_id" name="visa_type_id"
                                                        value="3" />
                                                    <input class="button-large custom-button marginFromTop"
                                                        value="Apply Now" name="submit_e" id="submit_e" type="submit">
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
                                        <div class="row font16 label">Stay Validity is 60 days from the date of first
                                            entry</div>
                                        <div class="row  font16 label marginFromBottom">Visa Validity 60 days from the
                                            date of issue</div>
                                        <div class="row">
                                            <form id="visaForm" name="visaForm"
                                                action="<?=base_url()?>web/visa_application_form"
                                                method="post" enctype="multipart/form-data">
                                                <div
                                                    class="column-five paddingFromRight alignFromRight borderFromRight mob50 mobpaddingInBox">
                                                    <div class="row red">Regular Visa</div>
                                                    <div class="row label fontTwnty">$ 649</div>
                                                    <input class="button-large custom-button pull_right marginFromTop"
                                                        value="Apply Now" name="submit_r" id="submit_r" type="submit">
                                                </div>
                                                <div
                                                    class="column-five paddingFromLeft alignLeft borderFromLeft mob50 mobpaddingInBox">
                                                    <div class="row red">Visa + Travel Insurance</div>
                                                    <div class="row label fontTwnty"><span class="strike">$893</span>
                                                        $793</div>
                                                    <input type="hidden" id="visa_type_id" name="visa_type_id"
                                                        value="22" />
                                                    <input class="button-large custom-button marginFromTop"
                                                        value="Apply Now" name="submit_e" id="submit_e" type="submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="row marginFromBottom paddingAllExtra blueBG alignFromCenter font16 borderFromTop borderFromBottom">
                                    * Travel Insurance, with COVID-19 coverage is mandatory, as per the UAE Government
                                    directive. Book the Government approved travel insurance along with your visa to
                                    avail a flat discount of $100 on the insurance fee.</div>
                            </section>
                            <section class="row pageGapping paddingFromBottomNone" id="PS">
                                <div class="row gapping how2BG">
                                    <div
                                        class="row font-Weight-Normal white fontTwnty8 alignFromCenter title-font upperCase">
                                        How to Apply Dubai Visa Online</div>
                                    <h4
                                        class="row font-Weight-Normal white alignFromCenter marginFromBottom paddingFromBottom">
                                        Applying for Dubai Visa through us in 2 Minutes.</h4>
                                    <div class="wrap paddingFromTop">
                                        <div class="container column-eight">
                                            <div class="stepDivBox"> <img src="images/st1.png" width=""
                                                    class="container" alt="Apply Visa Online"
                                                    title="Apply Visa Online" />
                                                <div class="row alignFromCenter white marginFromTop label">Apply Visa
                                                    Online</div>
                                            </div>
                                            <div class="stepDivBox"> <img src="images/st2.png" width=""
                                                    class="container" alt="Pay Visa Fee Online"
                                                    title="Pay Visa Fee Online" />
                                                <div class="row alignFromCenter white marginFromTop label">Pay Visa Fee
                                                    Online</div>
                                            </div>
                                            <div class="stepDivBox"> <img src="images/st3.png" width=""
                                                    class="container" alt="Visa Sent for Processing"
                                                    title="Visa Sent for Processing" />
                                                <div class="row alignFromCenter white marginFromTop label">Visa Sent for
                                                    Processing</div>
                                            </div>
                                            <div class="stepDivBox"> <img src="images/st4.png" width=""
                                                    class="container" alt="Receive your Dubai Tourist Visa via Email"
                                                    title="Receive your Dubai Tourist Visa via Email" />
                                                <div class="row alignFromCenter white marginFromTop label">Receive your
                                                    Dubai Tourist Visa via Email</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="row pageGapping paddingFromBottomNone" id="DR">
                                <div class="row reqBox marginFromBottom">
                                    <div class="column-two"><img src="images/document-icon.png" width="160"
                                            class="reqImg mobContainer" alt="Required Documents"
                                            title="Required Documents" /></div>
                                    <div class="column-eight mobPaddingTop">
                                        <div class="row fontTwnty8 marginFromBottom title-font upperCase fontBold blue">
                                            Required Documents</div>
                                        <div class="row line-height-reg fontTwnty label marginFromBottom fontBold">Fill
                                            out the <a href="dubai-visa-application-form.html"
                                                title="Dubai Visa Application Form" class="float-Disabled">dubai visa
                                                application form online</a> & upload (soft) copies of the following
                                            documents:</div>
                                        <div class="row line-height-reg padding-All-sm font16"><img
                                                src="images/plus.png" class="marginFromRight" alt="Passport"
                                                title="Passport" /> <strong>Passport</strong>: A clear copy of your
                                            valid passport with at least 6 months remaining validity.</div>
                                        <div class="row line-height-reg padding-All-sm font16"><img
                                                src="images/plus.png" class="marginFromRight" alt="Photograph"
                                                title="Photograph" /> <strong>Photograph</strong>: A clear front-facing
                                            photograph (with any background colour) of the applicant.</div>
                                    </div>
                                </div>
                            </section>
                            <section class="row pageGapping paddingFromBottomNone" id="QF">
                                <div class="row borderFromAll paddingAllExtra mobmarginBtm30">
                                    <div class="column-three"><img src="images/qf.png" class="container"
                                            alt="Quick Facts" title="Quick Facts" /></div>
                                    <div class="column-seven content">
                                        <h2 class="row titleFont green label"> <span class="row blue"
                                                style="font-size:50px; line-height:55px;">Quick Facts</span> <span
                                                class="row marginFromBottom">Benefits of applying for Dubai visa with
                                                us...</span> </h2>
                                        <ul style="font-size:14px;">
                                            <li>99.9% - Our visa approval ratio, the highest in the industry.</li>
                                            <li>24 to 72 working hours visa delivery time guarantee.</li>
                                            <li>We are available 24x7 on Online Chat Support / WhatsApp / Phone / Email
                                                / Skype to assist you.</li>
                                            <li>Prompt notifications on every stage of visa processing on Email and
                                                WhatsApp.</li>
                                            <li>Air Tickets and Hotel booking not required before visa approval.</li>
                                            <li>Along with being your visa provider, we will also be your sponsor. So no
                                                additional sponsor required for your UAE Visa. </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>



                            <section class="row gapping paddingFromBottomNone">
                                <div class="row content">
                                    <p>UAE has been Immersed in Emirati culture, with hints of modernism from its
                                        ever-expanding infrastructure. As stated by the World Travel and Tourism Council
                                        (WTTC), Dubai has surpassed Doha and London as the city with the highest
                                        expenditure by international tourists in 2022. You can continue reading more
                                        about how to process <strong>Dubai visa applications and</strong> the types of
                                        visas UAE provides. </p>

                                    <p>The UAE tourism industry has established itself as a powerful amplifier of
                                        economic disparity. A total of 27.3 million travelers arrived in Dubai in 2022;
                                        this marks an 89% increase in tourists compared to 2021. At least 1.24 million
                                        Indian visitors visited Dubai in the first nine months of 2022. You will be
                                        happy to <strong>apply for UAE Visa online.</strong></p>

                                    <p>For those who find shopping soothing, the country provides a paradoxical style in
                                        which one may purchase in traditional souks or sleek and sophisticated malls for
                                        an exclusive shopping experience. You can easily <strong>apply for a UAE visa
                                            online</strong> and have a relaxing holiday.
                                        <br>The Dubai tourist industry has made Dubai travel highly affordable for
                                        everyone to travel and explore the emirates.
                                    </p>

                                    <p><strong>You name it, Dubai has it. Or if it doesn't have it, it's creating
                                            it</strong><br>
                                        UAE has it all; whether it's a Dhow Cruise on Dubai Creek, the jagged borders of
                                        the Hajar Mountains ripe for adventure, the majestic splendor of Fujairah, or
                                        the dances of the belly dancer beneath the celestial skies, this lovely nation
                                        offers something for everyone. </p>

                                    <p><strong>UAE Visa Online</strong> is growing in popularity, sparing travelers from
                                        time-consuming and exhausting bureaucratic procedures and providing an
                                        alternative to visas given at borders. Online visa procedures are so handy for
                                        travelers that they no longer require any other method of obtaining a permit.
                                        Only a few minutes of the process to follow, and your visa will be in your hands
                                        in no time! <br>
                                        Applying for <strong>Dubai visas online</strong> ahead of time can make your
                                        holiday stress-free and unforgettable.</p>

                                </div>
                            </section>







                            <section class="row pageGapping" id="FAQ">
                                <div class="row alignFromCenter fontTwnty8 font-Weight-Normal titleFont upperCase">
                                    Frequently Asked Questions (FAQs)</div>
                                <div class="row marginFromTop mobImgfull-width"><img
                                        src="<?=base_url()?>assets/website/images/faq_banner.jpg" width="1170"
                                        height="200" title="Frequently Asked Questions" alt="Frequently Asked Questions"
                                        class="borderFromAll box_Sizing" /></div>
                                <div class="column-eight container">
                                    <h2
                                        class="row alignFromCenter font-Weight-Normal titleFont paddingAll black borderFromBottom marginFromBottom">
                                        Let us help you with any possible doubts and questions.</h2>
                                    <div class="accordion_container">
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="0h"><span class="accordprefix"></span>Is my information
                                                safe with the Tourist Dubai website?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="0c" style="display: none;">Tourist
                                                Dubai Visa is equipped with 256-bit SSL encryption, which maintains
                                                maximum secrecy. Along with this, it also envelops GDPR compliance.
                                            </div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="1h"><span class="accordprefix"></span>How can I know
                                                whether my Dubai visa is approved or not?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="1c" style="display: none;">All the
                                                updates regarding the approval of the visa are provided over the given
                                                email-id. Once the visa is approved, you will receive an email.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="2h"><span class="accordprefix"></span>Is e-Visa or online
                                                visa authentic?<span class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="2c" style="display: none;">Many
                                                countries accept e-Visa or online visa. However, you can also check the
                                                legality/authenticity of your visa on the government website. </div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="3h"><span class="accordprefix"></span>What should I do if
                                                my payment is not updated on the website despite the deduction?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="3c" style="display: none;">Since
                                                our payment gateway is well protected and safe, you need not worry about
                                                it. However, you are requested to speak to the bank or card company and
                                                ask for its help.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="4h"><span class="accordprefix"></span>What is the maximum
                                                time for processing Dubai Visa?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="4c" style="display: none;">Visa
                                                processing may take 2 to 3 working days in Normal Service. If you wish
                                                to get a visa in a short span of time, go in for our Express Service.
                                            </div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="5h"><span class="accordprefix"></span>Can I get back my
                                                money if my visa gets rejected?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="5c" style="display: none;">Tourist
                                                Dubai Visa is leading in approving visas. It has hardly come across a
                                                situation of rejection. For further information, kindly have a word with
                                                us through 24x7 Chat Support or WhatsApp.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="6h"><span class="accordprefix"></span>Am I eligible to
                                                travel to UAE with Dubai Visa?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/minus.png"
                                                        alt="Close"></span></a>
                                            <div class="accordion_body" contentindex="6c" style="display: block;">Yes,
                                                you are entitled to visit all the emirates with a Dubai visa. Emirates
                                                such as Abu Dhabi, Ajman, Dubai, Sharjah, Fujairah, Ras Al Khaimah and
                                                Umm Al Quwain.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="7h"><span class="accordprefix"></span>What should be the
                                                passport validity for applying for a Dubai Visa?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="7c" style="display: none;">Your
                                                passport should have a validity of 6 months before the commencement of
                                                journey.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="8h"><span class="accordprefix"></span>Is the assistance
                                                provided only in the English language?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="8c" style="display: none;">Our
                                                team is excellent in assisting in the English Language. However, we
                                                render full support in other languages too such as Hindi, Arabic, etc.
                                            </div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="9h"><span class="accordprefix"></span>Can I go in for a
                                                Dubai Visa if my passport is in the renewal process?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="9c" style="display: none;">You can
                                                knock us at the 24*7 Chat Support or WhatsApp and get the best possible
                                                support.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="10h"><span class="accordprefix"></span>How long can I stay
                                                in Dubai?<span class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="10c" style="display: none;">Your
                                                stay will be dependent on the type of visa you have opted for. Tourist
                                                Dubai Visa has a wide range of options such as 14 days, 30 days, 60
                                                days, 90 days, 96 hours, 5 years, etc.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="11h"><span class="accordprefix"></span>Can I apply for a
                                                Dubai Visa if my passport ceases its value?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="11c" style="display: none;">No,
                                                your passport should bear the validity for 6 months before the beginning
                                                of journey.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="12h"><span class="accordprefix"></span>Can I pay visa fee
                                                in any currency?<span class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="12c" style="display: none;">Yes,
                                                the applicants can pay visa fees in any currency.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="13h"><span class="accordprefix"></span>Is a cash option
                                                available for getting Dubai Visa?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="13c" style="display: none;">Since
                                                Tourist Dubai Visa is secured with 256-bit SSL encryption, you can pay
                                                visa fee through our online payment gateway. However, payments in cash
                                                are also greeted for availing Dubai Visa.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="14h"><span class="accordprefix"></span>Are my uploaded
                                                documents for Dubai Visa safe?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="14c" style="display: none;">Yes,
                                                your information along with uploaded documents are protected with
                                                industry-leading 256-bit SSL encryption.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="15h"><span class="accordprefix"></span>Which documents are
                                                required while travelling to Dubai?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="15c" style="display: none;">You
                                                must possess your valid passport and a printout of your E-visa while
                                                travelling to Dubai.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="16h"><span class="accordprefix"></span>Can I apply for a
                                                Multiple Entry Visa?<span class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="16c" style="display: none;">
                                                Nationals of all countries are eligible to apply for a Multiple Entry
                                                Visa. You can click on Choose Visa Types tab in the menu and opt for a
                                                visa of your choice.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="17h"><span class="accordprefix"></span>Do I have to apply
                                                for a Dubai visa if I hold the USA or UK nationality?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="17c" style="display: none;">
                                                Nationals of G1 countries such as the USA, UK, Singapore, etc. are
                                                permitted to avail visa on arrival. So, they need not apply in advance
                                                for the visa. They can head to the immigration counter once they land in
                                                Dubai.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="18h"><span class="accordprefix"></span>Can I cancel my
                                                Dubai Visa application?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="18c" style="display: none;">Upon
                                                filling in the application form and making payments, you can’t cancel it
                                                from your side. However, we assist our applicants in the best possible
                                                way.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="19h"><span class="accordprefix"></span>20. How can I be
                                                informed about the entire visa application process?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="19c" style="display: none;">We
                                                provide all the information on your registered email id. You can also
                                                check it on your own. Click on the Track Application tab in the menu,
                                                fill in the reference number and press go. You just have to fill in the
                                                reference number and press go.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="20h"><span class="accordprefix"></span>How can I trust
                                                Tourist Dubai Visa as far as my card details are concerned?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="20c" style="display: none;">Tourist
                                                Dubai Visa is known for 256-bit SSL encryption. Not a piece of
                                                information can ever fall into the channel of unauthorized access.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="21h"><span class="accordprefix"></span>Whom can I speak
                                                with if I wish to make amendments to my contact number or address?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="21c" style="display: none;">Upon
                                                submission of the application form and making payments, you can’t make
                                                amendments from your side. However, we are available round the clock to
                                                assist you through emails, Chat Service, WhatsApp, etc.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="22h"><span class="accordprefix"></span>Can I add other
                                                applicants to my visa application form<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="22c" style="display: none;">It is
                                                very easy to add other applicants with your visa application form. Click
                                                on the Visa Application Form tab in the menu and find the Add More
                                                Applicant button at the bottom. The button will help you add as many
                                                applicants as you can.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="23h"><span class="accordprefix"></span>Which nationality is
                                                not eligible to get a Dubai visa?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="23c" style="display: none;">Kindly
                                                visit our website and drop down the list from the Apply Visa Now
                                                section. If your nationality is not found in the list, you can reach out
                                                to us at 24*7 Chat Support or WhatsApp.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="24h"><span class="accordprefix"></span>What should be the
                                                language of the documents required for submission?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="24c" style="display: none;">
                                                Usually, documents submitted for a Dubai visa should bear either English
                                                or Arabic language. However, we have a team of multilingual experts and
                                                they never let the applicants get disheartened.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="25h"><span class="accordprefix"></span>What kind of visa do
                                                I require if I want to meet my friend who is employed in Dubai?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="25c" style="display: none;">You
                                                can apply for a Dubai tourist/visit visa to meet your friend or any
                                                relative working in Dubai. You just have to click on the Choose Visa
                                                Types tab in the menu and choose the visa as per your requirement.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="26h"><span class="accordprefix"></span>Can I get an
                                                extension over my Dubai Visa?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="26c" style="display: none;">Apart
                                                from transit and job-seeker visas that are valid for 96 hours and 90
                                                days respectively, the extension is available for 30 days or 90 days on
                                                the rest of the single entry visa.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="27h"><span class="accordprefix"></span>What is the best
                                                option if my friend and I have to make multiple entries in a particular
                                                duration?<span class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="27c" style="display: none;">You
                                                are requested to choose Multiple Entry Visa as it opens the door for
                                                multiple visits in a particular period. Depending upon your stay
                                                validity, you can click on the Choose Visa Type tab and opt for the visa
                                                you are looking for.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="28h"><span class="accordprefix"></span>Is there an option
                                                of adding other applicants?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="28c" style="display: none;">Yes,
                                                there is an option of adding other applicants. When you click on the
                                                Visa Application Form tab, you will find the Add More Applicant button
                                                at the bottom next to Submit Application. Just click on the button and
                                                add other applicants.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="29h"><span class="accordprefix"></span>Can I be assisted in
                                                filling out the Dubai Visa application form?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="29c" style="display: none;">Yes,
                                                we always serve our customers to the best of our ability. You can simply
                                                email or WhatsApp us the scanned copy of your passport and your photo.
                                                For more information, kindly have a word through the
                                                contact@instadubaivisa.com.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="30h"><span class="accordprefix"></span>Can I get your help
                                                if I come across problems at the Immigration Desk?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="30c" style="display: none;">We are
                                                available round the clock for your help via Chat Support or WhatsApp
                                                Number.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="31h"><span class="accordprefix"></span>What is the
                                                difference between e-Visa and online Visa?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="31c" style="display: none;">Both
                                                e-Visa and online Visa are the same. There is no difference between the
                                                two.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="32h"><span class="accordprefix"></span>Does e-Visa or
                                                online visa for Dubai hold equal weightage across the UAE?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="32c" style="display: none;">Yes,
                                                Dubai e-Visa or online visa holds equal weightage across the UAE.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="33h"><span class="accordprefix"></span>Can I avail online
                                                visa or e-Visa for any country?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="33c" style="display: none;">Most
                                                of the countries accept e-Visa or online visa. For more information,
                                                kindly drop down the list on the home page in the Apply Visa Now section
                                                and choose your nationality. If your nationality is not found on the
                                                list, then reach out to our help desk i.e. 24x7 Chat Support or
                                                WhatsApp.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="34h"><span class="accordprefix"></span>Under what
                                                circumstances Dubai Visa can be denied?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="34c" style="display: none;">Our
                                                visa experts are always ready to render full support in all possible
                                                ways during the Dubai Visa Application process. As far as visa approvals
                                                are concerned, we stand at the top of the approval rate. Your overstay
                                                or any illegal activity can be a base for the rejection of your visa
                                                application.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="35h"><span class="accordprefix"></span>Can I seek your help
                                                if don’t know the procedure to track the status of my Dubai visa?<span
                                                    class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="35c" style="display: none;">You
                                                can seek our help through contact@instadubaivisa.com.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="36h"><span class="accordprefix"></span>What is the age
                                                limit to travel alone?<span class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="36c" style="display: none;">
                                                Applicants between the age of 13 and 75 are eligible to travel alone.
                                                Children below 13 years and senior citizens above 75 must be accompanied
                                                by someone.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="37h"><span class="accordprefix"></span>What type of visa is
                                                suitable for children?<span class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="37c" style="display: none;">There
                                                is only one standard visa for all ages. Tourist Dubai Visa offers
                                                short-term visas for business, sightseeing, job-seeker, etc.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="38h"><span class="accordprefix"></span>Is a valid passport
                                                necessary for children?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="38c" style="display: none;">A
                                                passport with 6 months validity is necessary for every traveller.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="39h"><span class="accordprefix"></span>Can I get a refund
                                                on visa rejection?<span class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="39c" style="display: none;">Kindly
                                                go through our terms and conditions regarding a refund.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="40h"><span class="accordprefix"></span>What is the least
                                                possible time for processing Dubai Visa?<span class="accordsuffix"><img
                                                        class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="40c" style="display: none;">The
                                                minimum time required for processing visas is 12 to 24 hours. For this,
                                                our Express Service is always available.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="41h"><span class="accordprefix"></span>Whether changes in
                                                the application are acceptable after applying on the website or
                                                not?<span class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="41c" style="display: none;">Our
                                                expert team is there to assist you in your interest. Kindly reach out at
                                                the 24x7 Online Support or WhatsApp.</div>
                                        </div>
                                        <div class="row"> <a href="#" class="accordion_head submenuheader"
                                                headerindex="42h"><span class="accordprefix"></span>Why should I opt for
                                                Tourist Dubai Visa?<span class="accordsuffix"><img class="statusicon"
                                                        src="<?=base_url()?>assets/website/images/plus.png"
                                                        alt="Expand"></span></a>
                                            <div class="accordion_body" contentindex="42c" style="display: none;">Tourist
                                                Dubai Visa offers a hassle-free process. It has a professionalized visa
                                                team that caters to your needs.</div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- END BODY PANEL -->


      


<?php include_once "include/footer.php"; ?>