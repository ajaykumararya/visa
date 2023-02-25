<?php include_once "include/header.php";?>

<div class="row body-panel">
    <form enctype="multipart/form-data" id="visaForm" method="post" name="visaForm"
        onsubmit="return validateTravelDetails(this)&amp;&amp;ShowLoading()">
        <div id="loading2"
            style="position: fixed; top: 0px; left: 0px; z-index: 5000; width: 100%; height: 100%; text-align: center; background: rgba(255, 255, 255, 0.9); color: rgb(0, 0, 0); display: none;">
            <div
                style="width:300px;height:100px;text-align:center;position:absolute;margin:auto;top:40%;left:0;right:0;font-size:20px">
                <img src="https://instadubaivisa.com/images/loading.gif" alt="">Processing Visa Application
            </div>
        </div>
        <div class="wrap">
            <h1
                class="row marginFromBottom font-Weight-Normal titleFont alignFromCenter mobFont18 mobmargin-0 mobPaddingTop paddingFromBottom">
                <div class="container paddingFromBottom"><img src="https://media.instadubaivisa.com/images/uae-flg.png"
                        alt="United Arab Emirates Flag" class="marginFromTop marginFromRight mobmargin-0"
                        title="United Arab Emirates Flag">
                    Dubai Visa Application Form</div>
            </h1>
            <div class="container alert-panel alignFromCenter column-nine font13 warning">Important Note:
                This visa is valid across all UAE emirates, namely Dubai, Abu Dhabi, Ajman, Sharjah,
                Fujairah, Ras Al Khaimah and Umm Al Quwain</div>
            <div class="row marginFromTop box_Sizing lightgreyBG" id="formBody">
                <div class="tab-content" id="stage1" style="padding:0!important;border:none!important">
                    <div class="row uaeForm">
                        <div class="row paddingAllExtra formBox mobpaddingAll round-Edges">
                            <div class="row">
                                <div class="mobpadding-0 column-five box_Sizing paddingFromRight">
                                    <div class="row">
                                        <div class="column-five paddingFromRight label mob50">Select Type of
                                            Visa</div>
                                        <div class="mobpadding-0 column-five paddingFromLeft mob50 label">
                                            Select Service Type</div>
                                    </div>
                                    <div class="row">
                                        <div class="column-five mob50"><select class="form-control-input"
                                                id="visa_type_id" name="visa_type_id" onchange="getServiceData()">
                                                <option value="">Visa Type</option>
                                                <option value="6">96 Hrs ( Transit Visa Single Entry ) </option>
                                                <option value="1">14 ( Days Visa Single Entry ) </option>
                                                <option value="2" selected="">30 ( Days Visa Single Entry ) </option>
                                                <option value="7">60 ( Days Visa Single Entry ) </option>
                                                <option value="21">14 ( Days Visa Multiple Entry ) </option>
                                                <option value="3">30 ( Days Visa Multiple Entry ) </option>
                                                <option value="22">60 ( Days Visa Multiple Entry ) </option>
                                            </select></div>
                                        <div class="mobpadding-0 column-five paddingFromLeft mob50">
                                            <div class="row"><select class="form-control-input" id="insurance"
                                                    name="insurance" onchange="getServiceData()">
                                                    <option value="">Service Type</option>
                                                    <option value="No" selected="">Regular</option>
                                                    <option value="Yes">With Insurance</option>
                                                </select></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mobpadding-0 column-five box_Sizing paddingFromLeft" id="feediv" style="">
                                    <div class="row label mob10">Fee</div>
                                    <div class="row label mob90">
                                        <div class="popupPanel" id="overlay" style="display:none">
                                            <div class="imageDiv"><img src="images/loading.gif" alt="loading...."></div>
                                        </div><span class="fontTwnty" id="feeShow">$ 199</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mobpadding-0 column-five box_Sizing paddingFromRight">
                                    <div class="mobpadding-0 column-five box_Sizing paddingFromRight">
                                        <div class="row label">First Name</div>
                                        <div class="row"><input id="first_name" name="first_name" value=""
                                                class="form-control-input" placeholder="First Name"
                                                onclick="removeError(this.id)"></div>
                                    </div>
                                    <div class="mobpadding-0 column-five box_Sizing paddingFromLeft">
                                        <div class="row label">Last Name</div>
                                        <div class="row"><input id="last_name" name="last_name" value=""
                                                class="form-control-input" placeholder="Last Name"
                                                onclick="removeError(this.id)"></div>
                                    </div>
                                </div>
                                <div class="mobpadding-0 column-five box_Sizing paddingFromLeft">
                                    <div class="row label">Current Address (where you are currently staying)
                                    </div>
                                    <div class="row"><textarea class="form-control-input" id="address1" name="address1"
                                            rows="1" onclick="removeError(this.id)"
                                            placeholder="Current Address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mobpadding-0 column-five box_Sizing paddingFromRight">
                                    <div class="mobpadding-0 column-five box_Sizing paddingFromRight">
                                        <div class="row label">City</div>
                                        <div class="row"><input id="city" name="city" value=""
                                                class="form-control-input" placeholder="City"
                                                onclick="removeError(this.id)">
                                            <input id="country" name="country" value="209" class="form-control-input"
                                                placeholder="India" type="hidden" readonly="">
                                        </div>
                                    </div>
                                    <div class="mobpadding-0 column-five box_Sizing paddingFromLeft">
                                        <div class="row label">State / Province</div>
                                        <div class="row"><input id="state" name="state" value=""
                                                class="form-control-input" placeholder="State"
                                                onclick="removeError(this.id)"></div>
                                    </div>
                                </div>
                                <div class="mobpadding-0 column-five box_Sizing paddingFromLeft">
                                    <div class="row">
                                        <div class="mobpadding-0 column-five box_Sizing paddingFromRight">
                                            <div class="row label">Zipcode / Pincode / Postal Code</div>
                                            <div class="row"><input id="pincode" name="pincode" value=""
                                                    class="form-control-input" placeholder="Zipcode / Pincode"
                                                    onclick="removeError(this.id)" onchange="removeError(this.id)">
                                            </div>
                                        </div>
                                        <div class="mobpadding-0 column-five box_Sizing paddingFromLeft">
                                            <div class="row label">Your Email Address</div>
                                            <div class="row"><input id="email_id" name="email_id" value=""
                                                    class="form-control-input mail" placeholder="demo@example.com"
                                                    onclick="removeError(this.id)" type="email"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mobpadding-0 column-five box_Sizing paddingFromRight">
                                    <div class="row">
                                        <div class="column-five paddingFromRight label mob50">Country Code
                                        </div>
                                        <div class="mobpadding-0 column-five paddingFromLeft mob50 label">
                                            Mobile Number</div>
                                    </div>
                                    <div class="row">
                                        <div class="column-five mob50"><select class="form-control-input"
                                                id="country_isd_code" name="country_isd_code">
                                                <option value="">Country Code</option>
                                                <option value="+93" selected="">Afghanistan ( +93 ) </option>
                                                <option value="+355">Albania ( +355 ) </option>
                                                <option value="+213">Algeria ( +213 ) </option>
                                                <option value="+685">American Samoa ( +685 ) </option>
                                                <option value="+376">Andorra ( +376 ) </option>
                                                <option value="+244">Angola ( +244 ) </option>
                                                <option value="+1">Anguilla ( +1 ) </option>
                                                <option value="+672">Antarctica ( +672 ) </option>
                                                <option value="+267">Antigua and Barbuda ( +267 ) </option>
                                                <option value="+54">Argentina ( +54 ) </option>
                                                <option value="+374">Armenia ( +374 ) </option>
                                                <option value="+297">Aruba ( +297 ) </option>
                                                <option value="+61">Australia ( +61 ) </option>
                                                <option value="+43">Austria ( +43 ) </option>
                                                <option value="+994">Azerbaijan ( +994 ) </option>
                                                <option value="+1">Bahamas ( +1 ) </option>
                                                <option value="+973">Bahrain ( +973 ) </option>
                                                <option value="+880">Bangladesh ( +880 ) </option>
                                                <option value="+245">Barbados ( +245 ) </option>
                                                <option value="+375">Belarus ( +375 ) </option>
                                                <option value="+32">Belgium ( +32 ) </option>
                                                <option value="+501">Belize ( +501 ) </option>
                                                <option value="+229">Benin ( +229 ) </option>
                                                <option value="+1441">Bermuda ( +1441 ) </option>
                                                <option value="+975">Bhutan ( +975 ) </option>
                                                <option value="+591">Bolivia ( +591 ) </option>
                                                <option value="+387">Bosnia and Herzegovina ( +387 ) </option>
                                                <option value="+267">Botswana ( +267 ) </option>
                                                <option value="+47">Bouvet Island ( +47 ) </option>
                                                <option value="+55">Brazil ( +55 ) </option>
                                                <option value="+246">British Indian Ocean Territory ( +246 ) </option>
                                                <option value="+673">Brunei ( +673 ) </option>
                                                <option value="+359">Bulgaria ( +359 ) </option>
                                                <option value="+226">Burkina Faso ( +226 ) </option>
                                                <option value="+257">Burundi ( +257 ) </option>
                                                <option value="+855">Cambodia ( +855 ) </option>
                                                <option value="+237">Cameroon ( +237 ) </option>
                                                <option value="+1">Canada ( +1 ) </option>
                                                <option value="+238">Cape Verde ( +238 ) </option>
                                                <option value="+1">Cayman Islands ( +1 ) </option>
                                                <option value="+236">Central African Republic ( +236 ) </option>
                                                <option value="+235">Chad ( +235 ) </option>
                                                <option value="+56">Chile ( +56 ) </option>
                                                <option value="+86">China ( +86 ) </option>
                                                <option value="+886">Chinese Taipei ( +886 ) </option>
                                                <option value="+61">Christmas Island ( +61 ) </option>
                                                <option value="+891">Cocos (Keeling) Islands ( +891 ) </option>
                                                <option value="+57">Colombia ( +57 ) </option>
                                                <option value="+269">Comoros ( +269 ) </option>
                                                <option value="+242">Congo ( +242 ) </option>
                                                <option value="+682">Cook Islands ( +682 ) </option>
                                                <option value="+506">Costa Rica ( +506 ) </option>
                                                <option value="+385">Croatia ( +385 ) </option>
                                                <option value="+53">Cuba ( +53 ) </option>
                                                <option value="+357">Cyprus ( +357 ) </option>
                                                <option value="+420">Czech Republic ( +420 ) </option>
                                                <option value="+243">Democratic Republic of Congo ( +243 ) </option>
                                                <option value="+45">Denmark ( +45 ) </option>
                                                <option value="+253">Djibouti ( +253 ) </option>
                                                <option value="+1767">Dominica ( +1767 ) </option>
                                                <option value="+1809">Dominican Republic ( +1809 ) </option>
                                                <option value="+593">Ecuador ( +593 ) </option>
                                                <option value="+20">Egypt ( +20 ) </option>
                                                <option value="+503">El Salvador ( +503 ) </option>
                                                <option value="+240">Equatorial Guinea ( +240 ) </option>
                                                <option value="+291">Eritrea ( +291 ) </option>
                                                <option value="+372">Estonia ( +372 ) </option>
                                                <option value="+268">Eswatini (Swaziland) ( +268 ) </option>
                                                <option value="+251">Ethiopia ( +251 ) </option>
                                                <option value="+500">Falkland Islands ( +500 ) </option>
                                                <option value="+298">Faroe Islands ( +298 ) </option>
                                                <option value="+679">Fiji ( +679 ) </option>
                                                <option value="+358">Finland ( +358 ) </option>
                                                <option value="+33">France ( +33 ) </option>
                                                <option value="+594">French Guiana ( +594 ) </option>
                                                <option value="+689">French Polynesia ( +689 ) </option>
                                                <option value="+596">French Southern Territories ( +596 ) </option>
                                                <option value="+241">Gabon ( +241 ) </option>
                                                <option value="+220">Gambia ( +220 ) </option>
                                                <option value="+995">Georgia ( +995 ) </option>
                                                <option value="+49">Germany ( +49 ) </option>
                                                <option value="+233">Ghana ( +233 ) </option>
                                                <option value="+350">Gibraltar ( +350 ) </option>
                                                <option value="+30">Greece ( +30 ) </option>
                                                <option value="+299">Greenland ( +299 ) </option>
                                                <option value="+1473">Grenada ( +1473 ) </option>
                                                <option value="+590">Guadeloupe ( +590 ) </option>
                                                <option value="+1671">Guam ( +1671 ) </option>
                                                <option value="+502">Guatemala ( +502 ) </option>
                                                <option value="+224">Guinea ( +224 ) </option>
                                                <option value="+245">Guinea Bissau ( +245 ) </option>
                                                <option value="+592">Guyana ( +592 ) </option>
                                                <option value="+509">Haiti ( +509 ) </option>
                                                <option value="+672">Heard Island and Mcdonald Islands ( +672 )
                                                </option>
                                                <option value="+504">Honduras ( +504 ) </option>
                                                <option value="+852">Hong Kong ( +852 ) </option>
                                                <option value="+36">Hungary ( +36 ) </option>
                                                <option value="+354">Iceland ( +354 ) </option>
                                                <option value="+91">India ( +91 ) </option>
                                                <option value="+62">Indonesia ( +62 ) </option>
                                                <option value="+98">Iran ( +98 ) </option>
                                                <option value="+964">Iraq ( +964 ) </option>
                                                <option value="+353">Ireland ( +353 ) </option>
                                                <option value="+44">Isle of Man ( +44 ) </option>
                                                <option value="+972">Israel ( +972 ) </option>
                                                <option value="+39">Italy ( +39 ) </option>
                                                <option value="+225">Ivory Coast ( +225 ) </option>
                                                <option value="+1876">Jamaica ( +1876 ) </option>
                                                <option value="+81">Japan ( +81 ) </option>
                                                <option value="+962">Jordan ( +962 ) </option>
                                                <option value="+7">Kazakhstan ( +7 ) </option>
                                                <option value="+254">Kenya ( +254 ) </option>
                                                <option value="+686">Kiribati ( +686 ) </option>
                                                <option value="+383">Kosovo ( +383 ) </option>
                                                <option value="+965">Kuwait ( +965 ) </option>
                                                <option value="+996">Kyrgyzstan ( +996 ) </option>
                                                <option value="+856">Laos ( +856 ) </option>
                                                <option value="+371">Latvia ( +371 ) </option>
                                                <option value="+961">Lebanon ( +961 ) </option>
                                                <option value="+266">Lesotho ( +266 ) </option>
                                                <option value="+231">Liberia ( +231 ) </option>
                                                <option value="+218">Libya ( +218 ) </option>
                                                <option value="+423">Liechtenstein ( +423 ) </option>
                                                <option value="+370">Lithuania ( +370 ) </option>
                                                <option value="+352">Luxembourg ( +352 ) </option>
                                                <option value="+853">Macao ( +853 ) </option>
                                                <option value="+389">Macedonia ( +389 ) </option>
                                                <option value="+261">Madagascar ( +261 ) </option>
                                                <option value="+265">Malawi ( +265 ) </option>
                                                <option value="+60">Malaysia ( +60 ) </option>
                                                <option value="+960">Maldives ( +960 ) </option>
                                                <option value="+223">Mali ( +223 ) </option>
                                                <option value="+356">Malta ( +356 ) </option>
                                                <option value="+1">Mariana Island ( +1 ) </option>
                                                <option value="+692">Marshall Islands ( +692 ) </option>
                                                <option value="+596">Martinique ( +596 ) </option>
                                                <option value="+222">Mauritania ( +222 ) </option>
                                                <option value="+230">Mauritius ( +230 ) </option>
                                                <option value="+262">Mayotte ( +262 ) </option>
                                                <option value="+52">Mexico ( +52 ) </option>
                                                <option value="+691">Micronesia ( +691 ) </option>
                                                <option value="+373">Moldova ( +373 ) </option>
                                                <option value="+377">Monaco ( +377 ) </option>
                                                <option value="+976">Mongolia ( +976 ) </option>
                                                <option value="+382">Montenegro ( +382 ) </option>
                                                <option value="+1664">Montserrat ( +1664 ) </option>
                                                <option value="+212">Morocco ( +212 ) </option>
                                                <option value="+258">Mozambique ( +258 ) </option>
                                                <option value="+95">Myanmar ( +95 ) </option>
                                                <option value="+264">Namibia ( +264 ) </option>
                                                <option value="+674">Nauru ( +674 ) </option>
                                                <option value="+977">Nepal ( +977 ) </option>
                                                <option value="+31">Netherlands ( +31 ) </option>
                                                <option value="+599">Netherlands Antilles ( +599 ) </option>
                                                <option value="+687">New Caledonia ( +687 ) </option>
                                                <option value="+64">New Zealand ( +64 ) </option>
                                                <option value="+505">Nicaragua ( +505 ) </option>
                                                <option value="+227">Niger ( +227 ) </option>
                                                <option value="+234">Nigeria ( +234 ) </option>
                                                <option value="+683">Niue ( +683 ) </option>
                                                <option value="+6723">Norfolk Island ( +6723 ) </option>
                                                <option value="+850">North Korea ( +850 ) </option>
                                                <option value="+1670">Northern Mariana Islands ( +1670 ) </option>
                                                <option value="+47">Norway ( +47 ) </option>
                                                <option value="+968">Oman ( +968 ) </option>
                                                <option value="+92">Pakistan ( +92 ) </option>
                                                <option value="+680">Palau ( +680 ) </option>
                                                <option value="+970">Palestine ( +970 ) </option>
                                                <option value="+507">Panama ( +507 ) </option>
                                                <option value="+675">Papua New Guinea ( +675 ) </option>
                                                <option value="+595">Paraguay ( +595 ) </option>
                                                <option value="+51">Peru ( +51 ) </option>
                                                <option value="+63">Philippines ( +63 ) </option>
                                                <option value="+872">Pitcairn ( +872 ) </option>
                                                <option value="+48">Poland ( +48 ) </option>
                                                <option value="+351">Portugal ( +351 ) </option>
                                                <option value="+1787">Puerto Rico ( +1787 ) </option>
                                                <option value="+974">Qatar ( +974 ) </option>
                                                <option value="+262">Reunion ( +262 ) </option>
                                                <option value="+40">Romania ( +40 ) </option>
                                                <option value="+7">Russia ( +7 ) </option>
                                                <option value="+250">Rwanda ( +250 ) </option>
                                                <option value="+290">Saint Helena ( +290 ) </option>
                                                <option value="+1869">Saint Kitts and Nevis ( +1869 ) </option>
                                                <option value="+1758">Saint Lucia ( +1758 ) </option>
                                                <option value="+508">Saint Pierre and Miquelon ( +508 ) </option>
                                                <option value="+1784">Saint Vincent and the Grenadines ( +1784 )
                                                </option>
                                                <option value="+685">Samoa ( +685 ) </option>
                                                <option value="+378">San Marino ( +378 ) </option>
                                                <option value="+239">Sao Tome and Principe ( +239 ) </option>
                                                <option value="+966">Saudi Arabia ( +966 ) </option>
                                                <option value="+221">Senegal ( +221 ) </option>
                                                <option value="+381">Serbia ( +381 ) </option>
                                                <option value="+248">Seychelles ( +248 ) </option>
                                                <option value="+232">Sierra Leone ( +232 ) </option>
                                                <option value="+65">Singapore ( +65 ) </option>
                                                <option value="+1721">Sint Maarten ( +1721 ) </option>
                                                <option value="+421">Slovakia ( +421 ) </option>
                                                <option value="+386">Slovenia ( +386 ) </option>
                                                <option value="+677">Solomon Islands ( +677 ) </option>
                                                <option value="+252">Somalia ( +252 ) </option>
                                                <option value="+27">South Africa ( +27 ) </option>
                                                <option value="+500">South Georgia and the South Sandwich Islands ( +500
                                                    ) </option>
                                                <option value="+82">South Korea ( +82 ) </option>
                                                <option value="+211">South Sudan ( +211 ) </option>
                                                <option value="+34">Spain ( +34 ) </option>
                                                <option value="+94">Sri Lanka ( +94 ) </option>
                                                <option value="+249">Sudan ( +249 ) </option>
                                                <option value="+597">Suriname ( +597 ) </option>
                                                <option value="+47">Svalbard and Jan Mayen ( +47 ) </option>
                                                <option value="+46">Sweden ( +46 ) </option>
                                                <option value="+41">Switzerland ( +41 ) </option>
                                                <option value="+963">Syria ( +963 ) </option>
                                                <option value="+886">Taiwan ( +886 ) </option>
                                                <option value="+992">Tajikistan ( +992 ) </option>
                                                <option value="+255">Tanzania ( +255 ) </option>
                                                <option value="+66">Thailand ( +66 ) </option>
                                                <option value="+670">Timor Leste ( +670 ) </option>
                                                <option value="+228">Togo ( +228 ) </option>
                                                <option value="+690">Tokelau ( +690 ) </option>
                                                <option value="+676">Tonga ( +676 ) </option>
                                                <option value="+1868">Trinidad and Tobago ( +1868 ) </option>
                                                <option value="+216">Tunisia ( +216 ) </option>
                                                <option value="+90">Turkey ( +90 ) </option>
                                                <option value="+993">Turkmenistan ( +993 ) </option>
                                                <option value="+1649">Turks and Caicos Islands ( +1649 ) </option>
                                                <option value="+688">Tuvalu ( +688 ) </option>
                                                <option value="+256">Uganda ( +256 ) </option>
                                                <option value="+380">Ukraine ( +380 ) </option>
                                                <option value="+971">United Arab Emirates (UAE) ( +971 ) </option>
                                                <option value="+44">United Kingdom (UK) ( +44 ) </option>
                                                <option value="+1">United States of America (USA) ( +1 ) </option>
                                                <option value="+598">Uruguay ( +598 ) </option>
                                                <option value="+998">Uzbekistan ( +998 ) </option>
                                                <option value="+678">Vanuatu ( +678 ) </option>
                                                <option value="+379">Vatican City ( +379 ) </option>
                                                <option value="+58">Venezuela ( +58 ) </option>
                                                <option value="+84">Vietnam ( +84 ) </option>
                                                <option value="+1">Virgin Islands British ( +1 ) </option>
                                                <option value="+1">Virgin Islands US ( +1 ) </option>
                                                <option value="+681">Wallis and Futuna ( +681 ) </option>
                                                <option value="+212">Western Sahara ( +212 ) </option>
                                                <option value="+967">Yemen ( +967 ) </option>
                                                <option value="+260">Zambia ( +260 ) </option>
                                                <option value="+263">Zimbabwe ( +263 ) </option>
                                            </select></div>
                                        <div class="mobpadding-0 column-five paddingFromLeft mob50"><input id="mobile"
                                                name="mobile" value="" class="form-control-input call"
                                                placeholder="Mobile Number" onclick="removeError(this.id)" type="tel">
                                        </div>
                                    </div>
                                </div>
                                <div class="mobpadding-0 column-five box_Sizing paddingFromLeft">
                                    <div class="row label">Nationality</div>
                                    <div class="row"><select class="form-control-input" id="nationality_id"
                                            name="nationality_id">
                                            <option value="">Nationality</option>
                                            <option value="473">Albania</option>
                                            <option value="131">Algeria</option>
                                            <option value="12">American Samoa</option>
                                            <option value="445">Andorra</option>
                                            <option value="305">Angola</option>
                                            <option value="21">Anguilla</option>
                                            <option value="663">Antigua and Barbuda</option>
                                            <option value="605">Argentina</option>
                                            <option value="263">Armenia</option>
                                            <option value="3">Aruba</option>
                                            <option value="701">Australia</option>
                                            <option value="417">Austria</option>
                                            <option value="265">Azerbaijan</option>
                                            <option value="619">Bahamas</option>
                                            <option value="207">Bangladesh</option>
                                            <option value="657">Barbados</option>
                                            <option value="6570">Belarus</option>
                                            <option value="411">Belgium</option>
                                            <option value="651">Belize</option>
                                            <option value="369">Benin</option>
                                            <option value="634">Bermuda</option>
                                            <option value="211">Bhutan</option>
                                            <option value="609">Bolivia</option>
                                            <option value="463">Bosnia and Herzegovina</option>
                                            <option value="375">Botswana</option>
                                            <option value="603">Brazil</option>
                                            <option value="253">Brunei</option>
                                            <option value="465">Bulgaria</option>
                                            <option value="351">Burkina Faso</option>
                                            <option value="307">Burundi</option>
                                            <option value="215">Cambodia</option>
                                            <option value="309">Cameroon</option>
                                            <option value="501">Canada</option>
                                            <option value="393">Cape Verde</option>
                                            <option value="3930">Cayman Islands</option>
                                            <option value="363">Central African Republic</option>
                                            <option value="311">Chad</option>
                                            <option value="607">Chile</option>
                                            <option value="219">China</option>
                                            <option value="611">Colombia</option>
                                            <option value="301">Comoros</option>
                                            <option value="4">Congo</option>
                                            <option value="10">Cook Islands</option>
                                            <option value="623">Costa Rica</option>
                                            <option value="453">Croatia</option>
                                            <option value="621">Cuba</option>
                                            <option value="431">Cyprus</option>
                                            <option value="452">Czech Republic</option>
                                            <option value="313">Democratic Republic of Congo</option>
                                            <option value="423">Denmark</option>
                                            <option value="141">Djibouti</option>
                                            <option value="625">Dominica</option>
                                            <option value="6250">Dominican Republic</option>
                                            <option value="613">Ecuador</option>
                                            <option value="125">Egypt</option>
                                            <option value="635">El Salvador</option>
                                            <option value="750">Equatorial Guinea</option>
                                            <option value="303">Eritrea</option>
                                            <option value="459">Estonia</option>
                                            <option value="379">Eswatini (Swaziland)</option>
                                            <option value="317">Ethiopia</option>
                                            <option value="40">Faroe Islands</option>
                                            <option value="705">Fiji</option>
                                            <option value="433">Finland</option>
                                            <option value="403">France</option>
                                            <option value="371">Gabon</option>
                                            <option value="387">Gambia</option>
                                            <option value="273">Georgia</option>
                                            <option value="407">Germany</option>
                                            <option value="319">Ghana</option>
                                            <option value="429">Greece</option>
                                            <option value="365">Greenland</option>
                                            <option value="649">Grenada</option>
                                            <option value="22">Guadeloupe</option>
                                            <option value="1">Guam</option>
                                            <option value="627">Guatemala</option>
                                            <option value="321">Guinea</option>
                                            <option value="385">Guinea Bissau</option>
                                            <option value="653">Guyana</option>
                                            <option value="639">Haiti</option>
                                            <option value="647">Honduras</option>
                                            <option value="223">Hong Kong</option>
                                            <option value="467">Hungary</option>
                                            <option value="443">Iceland</option>
                                            <option value="205">India</option>
                                            <option value="243">Indonesia</option>
                                            <option value="201">Iran</option>
                                            <option value="113">Iraq</option>
                                            <option value="427">Ireland</option>
                                            <option value="20">Israel</option>
                                            <option value="405">Italy</option>
                                            <option value="6230">Ivory Coast</option>
                                            <option value="629">Jamaica</option>
                                            <option value="231">Japan</option>
                                            <option value="121">Jordan</option>
                                            <option value="261">Kazakhstan</option>
                                            <option value="325">Kenya</option>
                                            <option value="391">Kiribati</option>
                                            <option value="3310">Kosovo</option>
                                            <option value="489">Kyrgyzstan</option>
                                            <option value="245">Laos</option>
                                            <option value="461">Latvia</option>
                                            <option value="117">Lebanon</option>
                                            <option value="377">Lesotho</option>
                                            <option value="327">Liberia</option>
                                            <option value="449">Liechtenstein</option>
                                            <option value="457">Lithuania</option>
                                            <option value="413">Luxembourg</option>
                                            <option value="259">Macao</option>
                                            <option value="485">Macedonia</option>
                                            <option value="329">Madagascar</option>
                                            <option value="333">Malawi</option>
                                            <option value="241">Malaysia</option>
                                            <option value="257">Maldives</option>
                                            <option value="335">Mali</option>
                                            <option value="435">Malta</option>
                                            <option value="727">Marshall Islands</option>
                                            <option value="661">Martinique</option>
                                            <option value="135">Mauritania</option>
                                            <option value="367">Mauritius</option>
                                            <option value="5">Mayotte</option>
                                            <option value="601">Mexico</option>
                                            <option value="732">Micronesia</option>
                                            <option value="481">Moldova</option>
                                            <option value="439">Monaco</option>
                                            <option value="249">Mongolia</option>
                                            <option value="488">Montenegro</option>
                                            <option value="133">Morocco</option>
                                            <option value="337">Mozambique</option>
                                            <option value="213">Myanmar</option>
                                            <option value="373">Namibia</option>
                                            <option value="737">Nauru</option>
                                            <option value="235">Nepal</option>
                                            <option value="409">Netherlands</option>
                                            <option value="4090">New Caledonia</option>
                                            <option value="703">New Zealand</option>
                                            <option value="631">Nicaragua</option>
                                            <option value="339">Niger</option>
                                            <option value="341">Nigeria</option>
                                            <option value="13">Norfolk Island</option>
                                            <option value="229">North Korea</option>
                                            <option value="421">Norway</option>
                                            <option value="203">Pakistan</option>
                                            <option value="669">Palau</option>
                                            <option value="123">Palestine</option>
                                            <option value="633">Panama</option>
                                            <option value="731">Papua New Guinea</option>
                                            <option value="645">Paraguay</option>
                                            <option value="615">Peru</option>
                                            <option value="237">Philippines</option>
                                            <option value="471">Poland</option>
                                            <option value="425">Portugal</option>
                                            <option value="641">Puerto Rico</option>
                                            <option value="32">Reunion</option>
                                            <option value="469">Romania</option>
                                            <option value="477">Russia</option>
                                            <option value="343">Rwanda</option>
                                            <option value="487">Saint Kitts and Nevis</option>
                                            <option value="491">Saint Lucia</option>
                                            <option value="665">Saint Vincent and the Grenadines</option>
                                            <option value="6650">Samoa</option>
                                            <option value="447">San Marino</option>
                                            <option value="395">Sao Tome and Principe</option>
                                            <option value="345">Senegal</option>
                                            <option value="462">Serbia</option>
                                            <option value="383">Seychelles</option>
                                            <option value="347">Sierra Leone</option>
                                            <option value="225">Singapore</option>
                                            <option value="454">Slovakia</option>
                                            <option value="455">Slovenia</option>
                                            <option value="725">Solomon Islands</option>
                                            <option value="349">South Africa</option>
                                            <option value="227">South Korea</option>
                                            <option value="138">South Sudan</option>
                                            <option value="437">Spain</option>
                                            <option value="217">Sri Lanka</option>
                                            <option value="137">Sudan</option>
                                            <option value="655">Suriname</option>
                                            <option value="419">Sweden</option>
                                            <option value="415">Switzerland</option>
                                            <option value="119">Syria</option>
                                            <option value="221">Taiwan</option>
                                            <option value="267">Tajikistan</option>
                                            <option value="353">Tanzania</option>
                                            <option value="239">Thailand</option>
                                            <option value="709">Timor Leste</option>
                                            <option value="355">Togo</option>
                                            <option value="255">Tonga</option>
                                            <option value="637">Trinidad and Tobago</option>
                                            <option value="129">Tunisia</option>
                                            <option value="475">Turkey</option>
                                            <option value="269">Turkmenistan</option>
                                            <option value="39">Turks and Caicos Islands</option>
                                            <option value="735">Tuvalu</option>
                                            <option value="357">Uganda</option>
                                            <option value="479">Ukraine</option>
                                            <option value="401">United Kingdom (UK)</option>
                                            <option value="502">United States of America (USA)</option>
                                            <option value="643">Uruguay</option>
                                            <option value="271">Uzbekistan</option>
                                            <option value="733">Vanuatu</option>
                                            <option value="441">Vatican City</option>
                                            <option value="617">Venezuela</option>
                                            <option value="233">Vietnam</option>
                                            <option value="115">Yemen</option>
                                            <option value="359">Zambia</option>
                                            <option value="331">Zimbabwe</option>
                                        </select></div>
                                </div>
                            </div>
                            <div class="row">
                                <h4
                                    class="row marginFromTop marginFromBottom font-Weight-Normal titleFont borderFromBottom greenBG paddingAll upperCase white">
                                    Passport Details</h4>
                                <div class="mobpadding-0 column-five box_Sizing paddingFromRight">
                                    <div class="row label">Passport Number</div>
                                    <div class="row"><input id="passport_number" name="passport_number" value=""
                                            class="form-control-input" placeholder="Passport Number"
                                            onclick="removeError(this.id)"></div>
                                </div>
                                <div class="mobpadding-0 column-five box_Sizing paddingFromLeft">
                                    <div class="row label">Passport Expiry Date</div>
                                    <div class="row">
                                        <div class="mobpadding-0 paddingFromRight mob33 column-three">
                                            <select class="form-control-input" id="start_date_dayPass"
                                                name="start_date_dayPass">
                                                <option value="">Day</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="mobpadding-0 paddingFromRight mob33 column-four"><select
                                                class="form-control-input" id="start_date_monthPass"
                                                name="start_date_monthPass">
                                                <option value="">Month</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select></div>
                                        <div class="mobpadding-0 paddingFromRight mob33 column-three">
                                            <select class="form-control-input" id="start_date_yearPass"
                                                name="start_date_yearPass">
                                                <option value="">Year</option>
                                                <option value="2053">2053</option>
                                                <option value="2052">2052</option>
                                                <option value="2051">2051</option>
                                                <option value="2050">2050</option>
                                                <option value="2049">2049</option>
                                                <option value="2048">2048</option>
                                                <option value="2047">2047</option>
                                                <option value="2046">2046</option>
                                                <option value="2045">2045</option>
                                                <option value="2044">2044</option>
                                                <option value="2043">2043</option>
                                                <option value="2042">2042</option>
                                                <option value="2041">2041</option>
                                                <option value="2040">2040</option>
                                                <option value="2039">2039</option>
                                                <option value="2038">2038</option>
                                                <option value="2037">2037</option>
                                                <option value="2036">2036</option>
                                                <option value="2035">2035</option>
                                                <option value="2034">2034</option>
                                                <option value="2033">2033</option>
                                                <option value="2032">2032</option>
                                                <option value="2031">2031</option>
                                                <option value="2030">2030</option>
                                                <option value="2029">2029</option>
                                                <option value="2028">2028</option>
                                                <option value="2027">2027</option>
                                                <option value="2026">2026</option>
                                                <option value="2025">2025</option>
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mobpadding-0 column-five box_Sizing paddingFromRight">
                                    <h4
                                        class="row marginFromTop marginFromBottom font-Weight-Normal titleFont borderFromBottom greenBG paddingAll upperCase white">
                                        Arrival Date</h4>
                                    <div class="row label">
                                        <div class="mobpadding-0 paddingFromRight mob33 column-two">Date
                                        </div>
                                        <div class="mobpadding-0 paddingFromRight mob33 column-two">Month
                                        </div>
                                        <div class="mobpadding-0 paddingFromRight mob33 column-two">Year
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mobpadding-0 paddingFromRight mob33 column-two"><select
                                                class="form-control-input" id="start_date_day" name="start_date_day">
                                                <option value="">Day</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select></div>
                                        <div class="mobpadding-0 paddingFromRight mob33 column-two"><select
                                                class="form-control-input" id="start_date_month"
                                                name="start_date_month">
                                                <option value="">Month</option>
                                                <option value="01">January</option>
                                                <option value="02" selected="">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select></div>
                                        <div class="mobpadding-0 paddingFromRight mob33 column-two"><select
                                                class="form-control-input" id="start_date_year" name="start_date_year">
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="mobpadding-0 column-five box_Sizing paddingFromLeft">
                                    <h4
                                        class="row marginFromTop marginFromBottom font-Weight-Normal titleFont borderFromBottom greenBG paddingAll upperCase white">
                                        Upload Documents</h4>
                                    <div class="row">
                                        <div class="mobpadding-0 column-five paddingFromRight">
                                            <div class="row label">Colored Passport copy</div><input
                                                id="passport_copy_upload" name="passport_copy_upload" value=""
                                                class="form-control-input" placeholder="Passport Scanned copy"
                                                onclick="removeError(this.id)" type="file">
                                        </div>
                                        <div class="mobpadding-0 column-five paddingFromLeft">
                                            <div class="row label">Colored photograph</div><input
                                                id="additional_document5_upload" name="additional_document5_upload"
                                                value="" class="form-control-input" placeholder="Proof of Residence"
                                                onclick="removeError(this.id)" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row marginFromTop marginFromBottom font13 red">
                                    <strong>Note:</strong> Upload of passport and photograph are not
                                    mandatory to complete the visa application form. You can provide us
                                    these documents later also on email: contact@instadubaivisa.com or on
                                    WhatsApp +971-505863986
                                </div>
                                <div class="row"><textarea
                                        class="form-control-input displayNone marginFromBottomNone resizeNone"
                                        id="terms" name="terms" rows="2" readonly=""
                                        style="border-bottom:none;border-radius:0;outline:0">By proceeding further, you agree with all our terms and conditions, including the privacy policy. Once you complete with the visa fee payments, you are giving consent to process your application to the respective immigration department for required approvals.</textarea>
                                    <div class="row fontEleven borderFromAll padding-All-sm whiteBG" id="checkTerms"
                                        style="border-top:0"><label><input id="acceptterms" name="acceptterms"
                                                class="marginFromRight" type="checkbox" checked="">I have read and agree
                                            with the <a href="javascript:void(0)" class="blue float-Disabled"
                                                id="termsBtn">terms and conditions</a></label></div>
                                </div>
                                <div class="container next" id="button2"><input id="submit_r" name="continue"
                                        value="Submit Application"
                                        class="marginFromTop button-large mobRow marginFromRight primary-button"
                                        type="submit">
                                    <input id="submit_addmore_button" name="submit_addmore_button"
                                        value="Add More Applicant"
                                        class="marginFromTop button-large mobRow marginFromRight custom-button"
                                        type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row paddingAllExtra borderFromAll font16 alignFromCenter blueBG">* Travel
                        Insurance, with COVID-19 coverage is mandatory, as per the UAE Government directive.
                        Book the Government approved travel insurance along with your visa. Once you will
                        select the Service Type with insurance discount of $100 on the insurance will be
                        applied automatically.</div>
                    <div class="row marginFromTop borderFromAll content font16 lightyellowBG paddingAllExtra">
                        <h3 class="row mobPaddingTop paddingFromBottom"><span>At InstaDubaivisa.com, the
                                Dubai visa application form offers the following benefits to the
                                applicant:</span></h3>
                        <ul class="paddingFromBottom">
                            <li>Minimum input: Most information fields are to be filled by choosing from the
                                menu instead of typing. We ask for minimum information to be filled in by
                                the applicant as our team works on the successful completion of the Dubai
                                visa application form.</li>
                            <li>Drop-down menu for arrival date- You can select the arrival date instead of
                                typing, thus avoiding errors.</li>
                            <li>Easily accessible from any device: You can fill out the Dubai visa
                                application form from a mobile, laptop, desktop &amp; tab.</li>
                            <li>Seamless and safe document deposit: You can upload the required documents
                                with the form. No need for separate physical submission of forms.
                                Information or documents asked for are secured with high safety encryptions
                                thus leading to maximum security of documents.</li>
                            <li>All-in-one format- You need to fill up details in one place. No need to
                                juggle between different pages.</li>
                            <li>Add applicants- You can add several applicants on the same form and upload
                                the relevant documents in the same procedure. They could be your friends,
                                family, colleagues or business partners.</li>
                        </ul>
                        <p>Once the Dubai visa application form is complete, upon submitting you pay the fee
                            through secured payment gateways. At this stage, your visa application filling
                            up procedure is complete from the applicant's side. Upon receiving the Dubai
                            visa form, visa experts, on the other end, scrutinize the form, further ensuring
                            an error-free Dubai application form.</p>
                        <p>At InstaDubaivisa.com, the Dubai visa form is smartly designed for easy online
                            submission. The process is quick and sorted for applicants who opt for Dubai
                            visa services. The simplicity quotient of applying for an online Dubai visa is
                            relatively high.</p>
                    </div>
                </div>
                <div class="marginFromTop Table-panel">
                    <div class="clearfix" id="member_list" style="display:none">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" id="memberTable" width="80%">
                            <tbody>
                                <tr>
                                    <th align="center">#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Passport No.</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"><input id="admoreapp" name="admoreapp" value="No" type="hidden"> <input id="service_type"
                name="service_type" value="Regular" type="hidden"> <input id="rpq" name="rpq" value="" type="hidden">
            <input id="page_name" name="page_name" value="com" type="hidden"></div>
    </form>
</div>
<?php include_once "include/footer.php";?>