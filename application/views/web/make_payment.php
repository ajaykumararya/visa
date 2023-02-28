<?php include_once "include/header.php";?>


<div class="row body-panel">

    <div class="wrap pos-Reltv"> <a href="index.php" class="pageClosebutton"><img
                src="https://media.instadubaivisa.com/images/delete-icon.png" width="32" height="" alt="delete"
                title="delete"></a>
        <section class="row">
            <h1 class="row alignFromCenter font-Weight-Normal titleFont upperCase">Visa Application Payment</h1>
            <div class="column-eight container">
                <h2
                    class="row alignFromCenter font-Weight-Normal titleFont paddingAll black borderFromBottom marginFromBottom">
                    Just enter either your mobile number or your email address and you can complete your UAE visa
                    application.</h2>
                <div class="row marginFromBottom">
                    <form name="track" action="make_payment.php" method="post" onsubmit="return validateTrck(this);">
                        <div class="column-five container greenBG paddingAll round-Edges">
                            <div class="label mobRow column-three white paddingFromLeft">Mobile Number</div>
                            <div class="column-three paddingFromRight mob30">
                                <select class="form-control-input marginFromBottomNone" name="country_isd_code"
                                    id="country_isd_code">
                                    <option value="">Country Code</option>
                                    <option value="+93">Afghanistan ( +93 ) </option>
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
                                    <option value="+672">Heard Island and Mcdonald Islands ( +672 ) </option>
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
                                    <option value="+1784">Saint Vincent and the Grenadines ( +1784 ) </option>
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
                                    <option value="+500">South Georgia and the South Sandwich Islands ( +500 ) </option>
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
                                </select>
                            </div>
                            <div class="pull_left mobRow column-four mob70">
                                <input type="text" name="mob_no" id="mob_no"
                                    class="form-control-input marginFromBottomNone" placeholder="Type Mobile" value=""
                                    onkeyup="if (/\D/g.test(this.value))this.value = this.value.replace(/\D/g, '')">
                            </div>
                        </div>

                        <div class="row alignFromCenter padding-top-bottom-sm fontBold">OR</div>

                        <div class="column-five container greenBG paddingAll round-Edges">
                            <div class="label mobRow column-three white paddingFromLeft">Email Address</div>
                            <div class="pull_left mobRow column-seven">
                                <input type="text" name="email" id="email"
                                    class="form-control-input marginFromBottomNone" placeholder="Email Address" "="">
</div>
</div>

<div class=" container paddingAll">

                                <input type="submit" name="submit" value="GO"
                                    class="button-large primary-button marginFromBottomNone mobmarginFromTop margin Left mobmargin-0">
                            </div>

                    </form>
                </div>
                <div class="row alignFromCenter marginFromBottom line-height-reg">
                    <p class="row marginFromBottom"></p>
                </div>



            </div>
        </section>
    </div>


    <span class="container paddingFromTop column-two ">
        <button class="row button-large primary-button" onclick="showApplyNow('Open');" style="padding:10px 20px;">Apply
            Fresh Application</button>
    </span>
</div>
<?php include_once "include/footer.php";?>