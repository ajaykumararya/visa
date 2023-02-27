<?php include_once "include/header.php";?>

<div class="row bannerPanel header-Panel">
    <div class="wrap pos-Reltv">
        <div class="searchPanelBox mobRadius" id="applyNow">
            <div class="searchPanelTitle">Apply Visa Now</div>
            <form action="response.php" method="post" name="viewVisaDetails" onsubmit="return ss_valid();">
                <div class="searchPanel">
                    <div class=" marginFromBottom column-four">
                        <p class=" ptext4 label font-Weight-Normal col-sm-5">I am a Citizen of</p>
                        <div class="select2-container advance-search" id="s2id_nationality"><a href="javascript:void(0)"
                                onclick="return false;" class="select2-choice" tabindex="-1"> <span
                                    class="select2-chosen" id="select2-chosen-1">Select</span><abbr
                                    class="select2-search-choice-close"></abbr> <span class="select2-arrow"
                                    role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1"
                                class="select2-offscreen"></label><input class="select2-focusser select2-offscreen"
                                type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1"
                                id="s2id_autogen1">
                            <div class="select2-drop select2-display-none select2-with-searchbox">
                                <div class="select2-search"> <label for="s2id_autogen1_search"
                                        class="select2-offscreen"></label> <input type="text" autocomplete="off"
                                        autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input"
                                        role="combobox" aria-expanded="true" aria-autocomplete="list"
                                        aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder=""> </div>
                                <ul class="select2-results" role="listbox" id="select2-results-1"> </ul>
                            </div>
                        </div><select class="advance-search select2-offscreen" name="nationality" id="nationality"
                            tabindex="-1" title="">
                            <option value="">Select</option>
                            <option value="473#Albania">
                                Albania </option>
                            <option value="131#Algeria">
                                Algeria </option>
                            <option value="12#American Samoa">
                                American Samoa </option>
                            <option value="445#Andorra">
                                Andorra </option>
                            <option value="305#Angola">
                                Angola </option>
                            <option value="21#Anguilla">
                                Anguilla </option>
                            <option value="663#Antigua and Barbuda">
                                Antigua and Barbuda </option>
                            <option value="605#Argentina">
                                Argentina </option>
                            <option value="263#Armenia">
                                Armenia </option>
                            <option value="3#Aruba">
                                Aruba </option>
                            <option value="701#Australia">
                                Australia </option>
                            <option value="417#Austria">
                                Austria </option>
                            <option value="265#Azerbaijan">
                                Azerbaijan </option>
                            <option value="619#Bahamas">
                                Bahamas </option>
                            <option value="207#Bangladesh">
                                Bangladesh </option>
                            <option value="657#Barbados">
                                Barbados </option>
                            <option value="6570#Belarus">
                                Belarus </option>
                            <option value="411#Belgium">
                                Belgium </option>
                            <option value="651#Belize">
                                Belize </option>
                            <option value="369#Benin">
                                Benin </option>
                            <option value="634#Bermuda">
                                Bermuda </option>
                            <option value="211#Bhutan">
                                Bhutan </option>
                            <option value="609#Bolivia">
                                Bolivia </option>
                            <option value="463#Bosnia and Herzegovina">
                                Bosnia and Herzegovina </option>
                            <option value="375#Botswana">
                                Botswana </option>
                            <option value="603#Brazil">
                                Brazil </option>
                            <option value="253#Brunei">
                                Brunei </option>
                            <option value="465#Bulgaria">
                                Bulgaria </option>
                            <option value="351#Burkina Faso">
                                Burkina Faso </option>
                            <option value="307#Burundi">
                                Burundi </option>
                            <option value="215#Cambodia">
                                Cambodia </option>
                            <option value="309#Cameroon">
                                Cameroon </option>
                            <option value="501#Canada">
                                Canada </option>
                            <option value="393#Cape Verde">
                                Cape Verde </option>
                            <option value="3930#Cayman Islands">
                                Cayman Islands </option>
                            <option value="363#Central African Republic">
                                Central African Republic </option>
                            <option value="311#Chad">
                                Chad </option>
                            <option value="607#Chile">
                                Chile </option>
                            <option value="219#China">
                                China </option>
                            <option value="611#Colombia">
                                Colombia </option>
                            <option value="301#Comoros">
                                Comoros </option>
                            <option value="4#Congo">
                                Congo </option>
                            <option value="10#Cook Islands">
                                Cook Islands </option>
                            <option value="623#Costa Rica">
                                Costa Rica </option>
                            <option value="453#Croatia">
                                Croatia </option>
                            <option value="621#Cuba">
                                Cuba </option>
                            <option value="431#Cyprus">
                                Cyprus </option>
                            <option value="452#Czech Republic">
                                Czech Republic </option>
                            <option value="313#Democratic Republic of Congo">
                                Democratic Republic of Congo </option>
                            <option value="423#Denmark">
                                Denmark </option>
                            <option value="141#Djibouti">
                                Djibouti </option>
                            <option value="625#Dominica">
                                Dominica </option>
                            <option value="6250#Dominican Republic">
                                Dominican Republic </option>
                            <option value="613#Ecuador">
                                Ecuador </option>
                            <option value="125#Egypt">
                                Egypt </option>
                            <option value="635#El Salvador">
                                El Salvador </option>
                            <option value="750#Equatorial Guinea">
                                Equatorial Guinea </option>
                            <option value="303#Eritrea">
                                Eritrea </option>
                            <option value="459#Estonia">
                                Estonia </option>
                            <option value="379#Eswatini (Swaziland)">
                                Eswatini (Swaziland) </option>
                            <option value="317#Ethiopia">
                                Ethiopia </option>
                            <option value="40#Faroe Islands">
                                Faroe Islands </option>
                            <option value="705#Fiji">
                                Fiji </option>
                            <option value="433#Finland">
                                Finland </option>
                            <option value="403#France">
                                France </option>
                            <option value="371#Gabon">
                                Gabon </option>
                            <option value="387#Gambia">
                                Gambia </option>
                            <option value="273#Georgia">
                                Georgia </option>
                            <option value="407#Germany">
                                Germany </option>
                            <option value="319#Ghana">
                                Ghana </option>
                            <option value="429#Greece">
                                Greece </option>
                            <option value="365#Greenland">
                                Greenland </option>
                            <option value="649#Grenada">
                                Grenada </option>
                            <option value="22#Guadeloupe">
                                Guadeloupe </option>
                            <option value="1#Guam">
                                Guam </option>
                            <option value="627#Guatemala">
                                Guatemala </option>
                            <option value="321#Guinea">
                                Guinea </option>
                            <option value="385#Guinea Bissau">
                                Guinea Bissau </option>
                            <option value="653#Guyana">
                                Guyana </option>
                            <option value="639#Haiti">
                                Haiti </option>
                            <option value="647#Honduras">
                                Honduras </option>
                            <option value="223#Hong Kong">
                                Hong Kong </option>
                            <option value="467#Hungary">
                                Hungary </option>
                            <option value="443#Iceland">
                                Iceland </option>
                            <option value="205#India">
                                India </option>
                            <option value="243#Indonesia">
                                Indonesia </option>
                            <option value="201#Iran">
                                Iran </option>
                            <option value="113#Iraq">
                                Iraq </option>
                            <option value="427#Ireland">
                                Ireland </option>
                            <option value="20#Israel">
                                Israel </option>
                            <option value="405#Italy">
                                Italy </option>
                            <option value="6230#Ivory Coast">
                                Ivory Coast </option>
                            <option value="629#Jamaica">
                                Jamaica </option>
                            <option value="231#Japan">
                                Japan </option>
                            <option value="121#Jordan">
                                Jordan </option>
                            <option value="261#Kazakhstan">
                                Kazakhstan </option>
                            <option value="325#Kenya">
                                Kenya </option>
                            <option value="391#Kiribati">
                                Kiribati </option>
                            <option value="3310#Kosovo">
                                Kosovo </option>
                            <option value="489#Kyrgyzstan">
                                Kyrgyzstan </option>
                            <option value="245#Laos">
                                Laos </option>
                            <option value="461#Latvia">
                                Latvia </option>
                            <option value="117#Lebanon">
                                Lebanon </option>
                            <option value="377#Lesotho">
                                Lesotho </option>
                            <option value="327#Liberia">
                                Liberia </option>
                            <option value="449#Liechtenstein">
                                Liechtenstein </option>
                            <option value="457#Lithuania">
                                Lithuania </option>
                            <option value="413#Luxembourg">
                                Luxembourg </option>
                            <option value="259#Macao">
                                Macao </option>
                            <option value="485#Macedonia">
                                Macedonia </option>
                            <option value="329#Madagascar">
                                Madagascar </option>
                            <option value="333#Malawi">
                                Malawi </option>
                            <option value="241#Malaysia">
                                Malaysia </option>
                            <option value="257#Maldives">
                                Maldives </option>
                            <option value="335#Mali">
                                Mali </option>
                            <option value="435#Malta">
                                Malta </option>
                            <option value="727#Marshall Islands">
                                Marshall Islands </option>
                            <option value="661#Martinique">
                                Martinique </option>
                            <option value="135#Mauritania">
                                Mauritania </option>
                            <option value="367#Mauritius">
                                Mauritius </option>
                            <option value="5#Mayotte">
                                Mayotte </option>
                            <option value="601#Mexico">
                                Mexico </option>
                            <option value="732#Micronesia">
                                Micronesia </option>
                            <option value="481#Moldova">
                                Moldova </option>
                            <option value="439#Monaco">
                                Monaco </option>
                            <option value="249#Mongolia">
                                Mongolia </option>
                            <option value="488#Montenegro">
                                Montenegro </option>
                            <option value="133#Morocco">
                                Morocco </option>
                            <option value="337#Mozambique">
                                Mozambique </option>
                            <option value="213#Myanmar">
                                Myanmar </option>
                            <option value="373#Namibia">
                                Namibia </option>
                            <option value="737#Nauru">
                                Nauru </option>
                            <option value="235#Nepal">
                                Nepal </option>
                            <option value="409#Netherlands">
                                Netherlands </option>
                            <option value="4090#New Caledonia">
                                New Caledonia </option>
                            <option value="703#New Zealand">
                                New Zealand </option>
                            <option value="631#Nicaragua">
                                Nicaragua </option>
                            <option value="339#Niger">
                                Niger </option>
                            <option value="341#Nigeria">
                                Nigeria </option>
                            <option value="13#Norfolk Island">
                                Norfolk Island </option>
                            <option value="229#North Korea">
                                North Korea </option>
                            <option value="421#Norway">
                                Norway </option>
                            <option value="203#Pakistan">
                                Pakistan </option>
                            <option value="669#Palau">
                                Palau </option>
                            <option value="123#Palestine">
                                Palestine </option>
                            <option value="633#Panama">
                                Panama </option>
                            <option value="731#Papua New Guinea">
                                Papua New Guinea </option>
                            <option value="645#Paraguay">
                                Paraguay </option>
                            <option value="615#Peru">
                                Peru </option>
                            <option value="237#Philippines">
                                Philippines </option>
                            <option value="471#Poland">
                                Poland </option>
                            <option value="425#Portugal">
                                Portugal </option>
                            <option value="641#Puerto Rico">
                                Puerto Rico </option>
                            <option value="32#Reunion">
                                Reunion </option>
                            <option value="469#Romania">
                                Romania </option>
                            <option value="477#Russia">
                                Russia </option>
                            <option value="343#Rwanda">
                                Rwanda </option>
                            <option value="487#Saint Kitts and Nevis">
                                Saint Kitts and Nevis </option>
                            <option value="491#Saint Lucia">
                                Saint Lucia </option>
                            <option value="665#Saint Vincent and the Grenadines">
                                Saint Vincent and the Grenadines </option>
                            <option value="6650#Samoa">
                                Samoa </option>
                            <option value="447#San Marino">
                                San Marino </option>
                            <option value="395#Sao Tome and Principe">
                                Sao Tome and Principe </option>
                            <option value="345#Senegal">
                                Senegal </option>
                            <option value="462#Serbia">
                                Serbia </option>
                            <option value="383#Seychelles">
                                Seychelles </option>
                            <option value="347#Sierra Leone">
                                Sierra Leone </option>
                            <option value="225#Singapore">
                                Singapore </option>
                            <option value="454#Slovakia">
                                Slovakia </option>
                            <option value="455#Slovenia">
                                Slovenia </option>
                            <option value="725#Solomon Islands">
                                Solomon Islands </option>
                            <option value="349#South Africa">
                                South Africa </option>
                            <option value="227#South Korea">
                                South Korea </option>
                            <option value="138#South Sudan">
                                South Sudan </option>
                            <option value="437#Spain">
                                Spain </option>
                            <option value="217#Sri Lanka">
                                Sri Lanka </option>
                            <option value="137#Sudan">
                                Sudan </option>
                            <option value="655#Suriname">
                                Suriname </option>
                            <option value="419#Sweden">
                                Sweden </option>
                            <option value="415#Switzerland">
                                Switzerland </option>
                            <option value="119#Syria">
                                Syria </option>
                            <option value="221#Taiwan">
                                Taiwan </option>
                            <option value="267#Tajikistan">
                                Tajikistan </option>
                            <option value="353#Tanzania">
                                Tanzania </option>
                            <option value="239#Thailand">
                                Thailand </option>
                            <option value="709#Timor Leste">
                                Timor Leste </option>
                            <option value="355#Togo">
                                Togo </option>
                            <option value="255#Tonga">
                                Tonga </option>
                            <option value="637#Trinidad and Tobago">
                                Trinidad and Tobago </option>
                            <option value="129#Tunisia">
                                Tunisia </option>
                            <option value="475#Turkey">
                                Turkey </option>
                            <option value="269#Turkmenistan">
                                Turkmenistan </option>
                            <option value="39#Turks and Caicos Islands">
                                Turks and Caicos Islands </option>
                            <option value="735#Tuvalu">
                                Tuvalu </option>
                            <option value="357#Uganda">
                                Uganda </option>
                            <option value="479#Ukraine">
                                Ukraine </option>
                            <option value="401#United Kingdom (UK)">
                                United Kingdom (UK) </option>
                            <option value="502#United States of America (USA)">
                                United States of America (USA) </option>
                            <option value="643#Uruguay">
                                Uruguay </option>
                            <option value="271#Uzbekistan">
                                Uzbekistan </option>
                            <option value="733#Vanuatu">
                                Vanuatu </option>
                            <option value="441#Vatican City">
                                Vatican City </option>
                            <option value="617#Venezuela">
                                Venezuela </option>
                            <option value="233#Vietnam">
                                Vietnam </option>
                            <option value="115#Yemen">
                                Yemen </option>
                            <option value="359#Zambia">
                                Zambia </option>
                            <option value="331#Zimbabwe">
                                Zimbabwe </option>
                        </select>
                    </div>
                    <div class=" marginFromBottom column-four">
                        <p class="ptext4 label font-Weight-Normal col-sm-5">I am Travelling From </p>
                        <div class="select2-container advance-search" id="s2id_living_in"><a href="javascript:void(0)"
                                onclick="return false;" class="select2-choice" tabindex="-1"> <span
                                    class="select2-chosen" id="select2-chosen-2">Select</span><abbr
                                    class="select2-search-choice-close"></abbr> <span class="select2-arrow"
                                    role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2"
                                class="select2-offscreen"></label><input class="select2-focusser select2-offscreen"
                                type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2"
                                id="s2id_autogen2">
                            <div class="select2-drop select2-display-none select2-with-searchbox">
                                <div class="select2-search"> <label for="s2id_autogen2_search"
                                        class="select2-offscreen"></label> <input type="text" autocomplete="off"
                                        autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input"
                                        role="combobox" aria-expanded="true" aria-autocomplete="list"
                                        aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder=""> </div>
                                <ul class="select2-results" role="listbox" id="select2-results-2"> </ul>
                            </div>
                        </div><select class="advance-search select2-offscreen" id="living_in" name="living_in"
                            tabindex="-1" title="">
                            <option value="">Select</option>
                            <option value="209#Afghanistan">
                                Afghanistan </option>
                            <option value="473#Albania">
                                Albania </option>
                            <option value="131#Algeria">
                                Algeria </option>
                            <option value="12#American Samoa">
                                American Samoa </option>
                            <option value="445#Andorra">
                                Andorra </option>
                            <option value="305#Angola">
                                Angola </option>
                            <option value="21#Anguilla">
                                Anguilla </option>
                            <option value="8#Antarctica">
                                Antarctica </option>
                            <option value="663#Antigua and Barbuda">
                                Antigua and Barbuda </option>
                            <option value="605#Argentina">
                                Argentina </option>
                            <option value="263#Armenia">
                                Armenia </option>
                            <option value="3#Aruba">
                                Aruba </option>
                            <option value="701#Australia">
                                Australia </option>
                            <option value="417#Austria">
                                Austria </option>
                            <option value="265#Azerbaijan">
                                Azerbaijan </option>
                            <option value="619#Bahamas">
                                Bahamas </option>
                            <option value="107#Bahrain">
                                Bahrain </option>
                            <option value="207#Bangladesh">
                                Bangladesh </option>
                            <option value="657#Barbados">
                                Barbados </option>
                            <option value="6570#Belarus">
                                Belarus </option>
                            <option value="411#Belgium">
                                Belgium </option>
                            <option value="651#Belize">
                                Belize </option>
                            <option value="369#Benin">
                                Benin </option>
                            <option value="634#Bermuda">
                                Bermuda </option>
                            <option value="211#Bhutan">
                                Bhutan </option>
                            <option value="609#Bolivia">
                                Bolivia </option>
                            <option value="463#Bosnia and Herzegovina">
                                Bosnia and Herzegovina </option>
                            <option value="375#Botswana">
                                Botswana </option>
                            <option value="11#Bouvet Island">
                                Bouvet Island </option>
                            <option value="603#Brazil">
                                Brazil </option>
                            <option value="29#British Indian Ocean Territory">
                                British Indian Ocean Territory </option>
                            <option value="253#Brunei">
                                Brunei </option>
                            <option value="465#Bulgaria">
                                Bulgaria </option>
                            <option value="351#Burkina Faso">
                                Burkina Faso </option>
                            <option value="307#Burundi">
                                Burundi </option>
                            <option value="215#Cambodia">
                                Cambodia </option>
                            <option value="309#Cameroon">
                                Cameroon </option>
                            <option value="501#Canada">
                                Canada </option>
                            <option value="393#Cape Verde">
                                Cape Verde </option>
                            <option value="3930#Cayman Islands">
                                Cayman Islands </option>
                            <option value="363#Central African Republic">
                                Central African Republic </option>
                            <option value="311#Chad">
                                Chad </option>
                            <option value="607#Chile">
                                Chile </option>
                            <option value="219#China">
                                China </option>
                            <option value="24#Chinese Taipei">
                                Chinese Taipei </option>
                            <option value="14#Christmas Island">
                                Christmas Island </option>
                            <option value="18#Cocos (Keeling) Islands">
                                Cocos (Keeling) Islands </option>
                            <option value="611#Colombia">
                                Colombia </option>
                            <option value="301#Comoros">
                                Comoros </option>
                            <option value="4#Congo">
                                Congo </option>
                            <option value="10#Cook Islands">
                                Cook Islands </option>
                            <option value="623#Costa Rica">
                                Costa Rica </option>
                            <option value="453#Croatia">
                                Croatia </option>
                            <option value="621#Cuba">
                                Cuba </option>
                            <option value="431#Cyprus">
                                Cyprus </option>
                            <option value="452#Czech Republic">
                                Czech Republic </option>
                            <option value="313#Democratic Republic of Congo">
                                Democratic Republic of Congo </option>
                            <option value="423#Denmark">
                                Denmark </option>
                            <option value="141#Djibouti">
                                Djibouti </option>
                            <option value="625#Dominica">
                                Dominica </option>
                            <option value="6250#Dominican Republic">
                                Dominican Republic </option>
                            <option value="613#Ecuador">
                                Ecuador </option>
                            <option value="125#Egypt">
                                Egypt </option>
                            <option value="635#El Salvador">
                                El Salvador </option>
                            <option value="750#Equatorial Guinea">
                                Equatorial Guinea </option>
                            <option value="303#Eritrea">
                                Eritrea </option>
                            <option value="459#Estonia">
                                Estonia </option>
                            <option value="379#Eswatini (Swaziland)">
                                Eswatini (Swaziland) </option>
                            <option value="317#Ethiopia">
                                Ethiopia </option>
                            <option value="25#Falkland Islands">
                                Falkland Islands </option>
                            <option value="40#Faroe Islands">
                                Faroe Islands </option>
                            <option value="705#Fiji">
                                Fiji </option>
                            <option value="433#Finland">
                                Finland </option>
                            <option value="403#France">
                                France </option>
                            <option value="659#French Guiana">
                                French Guiana </option>
                            <option value="15#French Polynesia">
                                French Polynesia </option>
                            <option value="31#French Southern Territories">
                                French Southern Territories </option>
                            <option value="371#Gabon">
                                Gabon </option>
                            <option value="387#Gambia">
                                Gambia </option>
                            <option value="273#Georgia">
                                Georgia </option>
                            <option value="407#Germany">
                                Germany </option>
                            <option value="319#Ghana">
                                Ghana </option>
                            <option value="37#Gibraltar">
                                Gibraltar </option>
                            <option value="429#Greece">
                                Greece </option>
                            <option value="365#Greenland">
                                Greenland </option>
                            <option value="649#Grenada">
                                Grenada </option>
                            <option value="22#Guadeloupe">
                                Guadeloupe </option>
                            <option value="1#Guam">
                                Guam </option>
                            <option value="627#Guatemala">
                                Guatemala </option>
                            <option value="321#Guinea">
                                Guinea </option>
                            <option value="385#Guinea Bissau">
                                Guinea Bissau </option>
                            <option value="653#Guyana">
                                Guyana </option>
                            <option value="639#Haiti">
                                Haiti </option>
                            <option value="36#Heard Island and Mcdonald Islands">
                                Heard Island and Mcdonald Islands </option>
                            <option value="647#Honduras">
                                Honduras </option>
                            <option value="223#Hong Kong">
                                Hong Kong </option>
                            <option value="467#Hungary">
                                Hungary </option>
                            <option value="443#Iceland">
                                Iceland </option>
                            <option value="205#India">
                                India </option>
                            <option value="243#Indonesia">
                                Indonesia </option>
                            <option value="201#Iran">
                                Iran </option>
                            <option value="113#Iraq">
                                Iraq </option>
                            <option value="427#Ireland">
                                Ireland </option>
                            <option value="33#Isle of Man">
                                Isle of Man </option>
                            <option value="20#Israel">
                                Israel </option>
                            <option value="405#Italy">
                                Italy </option>
                            <option value="6230#Ivory Coast">
                                Ivory Coast </option>
                            <option value="629#Jamaica">
                                Jamaica </option>
                            <option value="231#Japan">
                                Japan </option>
                            <option value="121#Jordan">
                                Jordan </option>
                            <option value="261#Kazakhstan">
                                Kazakhstan </option>
                            <option value="325#Kenya">
                                Kenya </option>
                            <option value="391#Kiribati">
                                Kiribati </option>
                            <option value="3310#Kosovo">
                                Kosovo </option>
                            <option value="105#Kuwait">
                                Kuwait </option>
                            <option value="489#Kyrgyzstan">
                                Kyrgyzstan </option>
                            <option value="245#Laos">
                                Laos </option>
                            <option value="461#Latvia">
                                Latvia </option>
                            <option value="117#Lebanon">
                                Lebanon </option>
                            <option value="377#Lesotho">
                                Lesotho </option>
                            <option value="327#Liberia">
                                Liberia </option>
                            <option value="127#Libya">
                                Libya </option>
                            <option value="449#Liechtenstein">
                                Liechtenstein </option>
                            <option value="457#Lithuania">
                                Lithuania </option>
                            <option value="413#Luxembourg">
                                Luxembourg </option>
                            <option value="259#Macao">
                                Macao </option>
                            <option value="485#Macedonia">
                                Macedonia </option>
                            <option value="329#Madagascar">
                                Madagascar </option>
                            <option value="333#Malawi">
                                Malawi </option>
                            <option value="241#Malaysia">
                                Malaysia </option>
                            <option value="257#Maldives">
                                Maldives </option>
                            <option value="335#Mali">
                                Mali </option>
                            <option value="435#Malta">
                                Malta </option>
                            <option value="3311#Mariana Island">
                                Mariana Island </option>
                            <option value="727#Marshall Islands">
                                Marshall Islands </option>
                            <option value="661#Martinique">
                                Martinique </option>
                            <option value="135#Mauritania">
                                Mauritania </option>
                            <option value="367#Mauritius">
                                Mauritius </option>
                            <option value="5#Mayotte">
                                Mayotte </option>
                            <option value="601#Mexico">
                                Mexico </option>
                            <option value="732#Micronesia">
                                Micronesia </option>
                            <option value="481#Moldova">
                                Moldova </option>
                            <option value="439#Monaco">
                                Monaco </option>
                            <option value="249#Mongolia">
                                Mongolia </option>
                            <option value="488#Montenegro">
                                Montenegro </option>
                            <option value="9#Montserrat">
                                Montserrat </option>
                            <option value="133#Morocco">
                                Morocco </option>
                            <option value="337#Mozambique">
                                Mozambique </option>
                            <option value="213#Myanmar">
                                Myanmar </option>
                            <option value="373#Namibia">
                                Namibia </option>
                            <option value="737#Nauru">
                                Nauru </option>
                            <option value="235#Nepal">
                                Nepal </option>
                            <option value="409#Netherlands">
                                Netherlands </option>
                            <option value="16#Netherlands Antilles">
                                Netherlands Antilles </option>
                            <option value="4090#New Caledonia">
                                New Caledonia </option>
                            <option value="703#New Zealand">
                                New Zealand </option>
                            <option value="631#Nicaragua">
                                Nicaragua </option>
                            <option value="339#Niger">
                                Niger </option>
                            <option value="341#Nigeria">
                                Nigeria </option>
                            <option value="2#Niue">
                                Niue </option>
                            <option value="13#Norfolk Island">
                                Norfolk Island </option>
                            <option value="229#North Korea">
                                North Korea </option>
                            <option value="19#Northern Mariana Islands">
                                Northern Mariana Islands </option>
                            <option value="421#Norway">
                                Norway </option>
                            <option value="111#Oman">
                                Oman </option>
                            <option value="203#Pakistan">
                                Pakistan </option>
                            <option value="669#Palau">
                                Palau </option>
                            <option value="123#Palestine">
                                Palestine </option>
                            <option value="633#Panama">
                                Panama </option>
                            <option value="731#Papua New Guinea">
                                Papua New Guinea </option>
                            <option value="645#Paraguay">
                                Paraguay </option>
                            <option value="615#Peru">
                                Peru </option>
                            <option value="237#Philippines">
                                Philippines </option>
                            <option value="7#Pitcairn">
                                Pitcairn </option>
                            <option value="471#Poland">
                                Poland </option>
                            <option value="425#Portugal">
                                Portugal </option>
                            <option value="641#Puerto Rico">
                                Puerto Rico </option>
                            <option value="109#Qatar">
                                Qatar </option>
                            <option value="32#Reunion">
                                Reunion </option>
                            <option value="469#Romania">
                                Romania </option>
                            <option value="477#Russia">
                                Russia </option>
                            <option value="343#Rwanda">
                                Rwanda </option>
                            <option value="606#Saint Helena">
                                Saint Helena </option>
                            <option value="487#Saint Kitts and Nevis">
                                Saint Kitts and Nevis </option>
                            <option value="491#Saint Lucia">
                                Saint Lucia </option>
                            <option value="28#Saint Pierre and Miquelon">
                                Saint Pierre and Miquelon </option>
                            <option value="665#Saint Vincent and the Grenadines">
                                Saint Vincent and the Grenadines </option>
                            <option value="6650#Samoa">
                                Samoa </option>
                            <option value="447#San Marino">
                                San Marino </option>
                            <option value="395#Sao Tome and Principe">
                                Sao Tome and Principe </option>
                            <option value="103#Saudi Arabia">
                                Saudi Arabia </option>
                            <option value="345#Senegal">
                                Senegal </option>
                            <option value="462#Serbia">
                                Serbia </option>
                            <option value="383#Seychelles">
                                Seychelles </option>
                            <option value="347#Sierra Leone">
                                Sierra Leone </option>
                            <option value="225#Singapore">
                                Singapore </option>
                            <option value="23#Sint Maarten">
                                Sint Maarten </option>
                            <option value="454#Slovakia">
                                Slovakia </option>
                            <option value="455#Slovenia">
                                Slovenia </option>
                            <option value="725#Solomon Islands">
                                Solomon Islands </option>
                            <option value="139#Somalia">
                                Somalia </option>
                            <option value="349#South Africa">
                                South Africa </option>
                            <option value="30#South Georgia and the South Sandwich Islands">
                                South Georgia and the South Sandwich Islands </option>
                            <option value="227#South Korea">
                                South Korea </option>
                            <option value="437#Spain">
                                Spain </option>
                            <option value="217#Sri Lanka">
                                Sri Lanka </option>
                            <option value="655#Suriname">
                                Suriname </option>
                            <option value="35#Svalbard and Jan Mayen">
                                Svalbard and Jan Mayen </option>
                            <option value="419#Sweden">
                                Sweden </option>
                            <option value="415#Switzerland">
                                Switzerland </option>
                            <option value="119#Syria">
                                Syria </option>
                            <option value="221#Taiwan">
                                Taiwan </option>
                            <option value="267#Tajikistan">
                                Tajikistan </option>
                            <option value="353#Tanzania">
                                Tanzania </option>
                            <option value="239#Thailand">
                                Thailand </option>
                            <option value="709#Timor Leste">
                                Timor Leste </option>
                            <option value="355#Togo">
                                Togo </option>
                            <option value="6#Tokelau">
                                Tokelau </option>
                            <option value="255#Tonga">
                                Tonga </option>
                            <option value="637#Trinidad and Tobago">
                                Trinidad and Tobago </option>
                            <option value="129#Tunisia">
                                Tunisia </option>
                            <option value="475#Turkey">
                                Turkey </option>
                            <option value="269#Turkmenistan">
                                Turkmenistan </option>
                            <option value="39#Turks and Caicos Islands">
                                Turks and Caicos Islands </option>
                            <option value="735#Tuvalu">
                                Tuvalu </option>
                            <option value="357#Uganda">
                                Uganda </option>
                            <option value="479#Ukraine">
                                Ukraine </option>
                            <option value="26#United Arab Emirates (UAE)">
                                United Arab Emirates (UAE) </option>
                            <option value="401#United Kingdom (UK)">
                                United Kingdom (UK) </option>
                            <option value="502#United States of America (USA)">
                                United States of America (USA) </option>
                            <option value="643#Uruguay">
                                Uruguay </option>
                            <option value="271#Uzbekistan">
                                Uzbekistan </option>
                            <option value="733#Vanuatu">
                                Vanuatu </option>
                            <option value="441#Vatican City">
                                Vatican City </option>
                            <option value="617#Venezuela">
                                Venezuela </option>
                            <option value="233#Vietnam">
                                Vietnam </option>
                            <option value="27#Virgin Islands British">
                                Virgin Islands British </option>
                            <option value="17#Virgin Islands US">
                                Virgin Islands US </option>
                            <option value="38#Wallis and Futuna">
                                Wallis and Futuna </option>
                            <option value="34#Western Sahara">
                                Western Sahara </option>
                            <option value="115#Yemen">
                                Yemen </option>
                            <option value="359#Zambia">
                                Zambia </option>
                            <option value="331#Zimbabwe">
                                Zimbabwe </option>
                        </select>
                    </div>
                    <div class="column-one-four col-sm-1 mobContainer">
                        <div class="row label mobDisplayNone">&nbsp;</div>
                        <input type="button"
                            class="row button-large primary-button marginFromBottomNone alignFromCenter" value="GO"
                            onclick="submitCheck();">
                    </div>
                </div>
            </form>
        </div>
        <div class="slideshow-panel" data-transition="crossfade" data-loop="true" data-skip="false">
            <ul class="carousel">
                <li class="slide"><img src="https://media.instadubaivisa.com/images/banner2.jpg" width="100%"
                        height="360" title="Insta Sharjah Visa" alt="apply for Sharjah, Sharjah visa online"></li>
            </ul>
        </div>
        <div class="welcomeTextPanel" style="float:right">
            <h1 class="ptext white font-Weight-Normal">Sharjah Visa made simple</h1>
            <div class="row alignFromCenter line-height-reg white">Sharjah visa online is now made easy and quick with
                Insta Dubai visa. Add the real essence to your travel diaries with a cultural visit to Sharjah. Allow
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
                <div class="column-three mobRow"><img src="https://media.instadubaivisa.com/images/step-1.png"
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
                <div class="column-three mobRow"><img src="https://media.instadubaivisa.com/images/step-2.png"
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
                <div class="column-three mobRow"><img src="https://media.instadubaivisa.com/images/step-3.png"
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
                <div class="column-three mobRow"><img src="https://media.instadubaivisa.com/images/step-4.png"
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
                    <div class="column-two mob20"><img src="https://media.instadubaivisa.com/images/idv-logo.png"
                            width="70" height="70" alt="Insta Sharjah Visa" title="" class="mobIMG pull_left"></div>
                    <div class="column-eight mob80">
                        <p class="ptext1 black paddingFromBottom marginFromTop marginFromBottom mobpadding-0">Why Insta
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
                            src="https://media.instadubaivisa.com/images/sharjah.jpg" title="Sharjah" alt="Sharjah"
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