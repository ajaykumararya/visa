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
                <li class="slide"><img src="https://media.instadubaivisa.com/images/banner2.webp" width="100%"
                        height="360" title="Insta UAE Visa" alt="apply for UAE, UAE visa online"></li>
            </ul>
        </div>
        <div class="welcomeTextPanel" style="float:right">
            <div class="ptext white font-Weight-Normal">
                <h1 class="paddingFromRight">UAE Visa </h1> for a smooth travel
            </div>
            <div class="row alignFromCenter line-height-reg white">Our journey started from UAE in 2001 to provide visa
                services to people at large. With a simple, secure, and seamless experience, we have thoughtfully
                curated to establish a common platform for offering UAE Visa. Being successful in issuing more than 50
                million visas to the satisfaction of our customers, make sure to get yours as well promptly and timely.
            </div>
        </div>
    </div>
</div>


<div class="row body-panel paddingFromTopNone">
    <section class="row abtPanel">
        <div class="wrap">
            <h2 class="title1">EASY STEPS TO UAE VISA</h2>
            <div class="stepPanel" id="aplyonlineBtn">
                <div class="column-three mobRow"><img src="https://media.instadubaivisa.com/images/step-1.png"
                        width="45" height="45" alt="UAE Visa Process" title="Step 1"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites applyonline"></div>
                    </div>
                    <div class="stepPanelContentBox" id="aplyonline">Choose your preferred UAE visa type , Fill Online
                        <a href="https://www.instadubaivisa.com/dubai-visa-application-form.php"
                            title="UAE Application Visa Form">UAE Application Visa Form </a> &amp; Upload your
                        Documents.</div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Apply UAE Visa Online</p>
            </div>
            <div class="stepPanel" id="makepaymntBtn">
                <div class="column-three mobRow"><img src="https://media.instadubaivisa.com/images/step-2.png"
                        width="45" height="45" alt="Pay UAE Visa Fees Online" title="Step 2"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites payOnline"></div>
                    </div>
                    <div class="stepPanelContentBox" id="makepaymnt">From our secured payment gateway, pay your UAE visa
                        fees with complete peace of mind. (Both Credit &amp; Debit Cards accepted)</div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Pay visa fees online</p>
            </div>
            <div class="stepPanel" id="visaProcessBtn">
                <div class="column-three mobRow"><img src="https://media.instadubaivisa.com/images/step-3.png"
                        width="45" height="45" alt="UAE visa is sent for processing" title="Step 3"></div>
                <div class="column-seven mobRow"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites visaProcessing"></div>
                    </div>
                    <div class="stepPanelContentBox" id="visaProcess">Our team of experts will scrutinize your
                        application before sending it to UAE authorities for processing.</div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Visa is sent for processing</p>
            </div>
            <div class="stepPanel" id="downloadBtn">
                <div class="column-three mobRow"><img src="https://media.instadubaivisa.com/images/step-4.png"
                        width="45" height="45" alt="Print UAE Visa and Fly to UAE" title="Step 4"></div>
                <div class="column-seven mobRow">
                    <div class="column-six alignFromCenter mobpaddingInBox">
                        <div class="idv-img-sprites printFly"></div>
                    </div>
                    <div class="stepPanelContentBox" id="download">We will mail you immediately after it is approved.
                        Take a printout &amp; fly to UAE. Bon Voyage! </div>
                </div>
                <p class="ptext5 row alignFromCenter mobRow moblineheight mobFont-md">Print visa &amp; fly to UAE.</p>
            </div>
        </div>
    </section>
    <div class="wrap">
        <h4 class="row paddingAllExtra greyBG green border-Dashed marginFromTop alignFromCenter line-height-regExtra"
            style="font-weight:normal;">Every month, our company is proud of processing more than 1,00,000 UAE visas
            successfully. Another feather in our cap is that the approval rate is almost 100%.
        </h4>
        <section class="row flagBG">
            <div class="whyUsBoxPanel">
                <div class="column-four whyUsPanel">
                    <div class="column-two mob20"><img src="https://media.instadubaivisa.com/images/idv-logo-v2.webp"
                            width="80" height="70" alt="UAE Visa" title="UAE Visa" class="mobIMG pull_left circle">
                    </div>
                    <div class="column-eight mob80">
                        <p class="ptext1 black paddingFromBottom marginFromTop marginFromBottom mobpadding-0">Benefits
                            of Insta UAE Visa</p>
                        <div class="row points padding-All-sm whyIDV">
                            <ul>
                                <li>Prompt and accurate processing</li>
                                <li>Go in for UAE Visa at your convenience</li>
                                <li>Trouble-free application form</li>
                                <li>A team of experts to scrutinize the application</li>
                                <li>360-degree website protection with Industry-leading 256-bit SSL encryption</li>
                                <li>Simple payment method - Credit and Debit Cards</li>
                                <li>Notification at every step of visa processing</li>
                                <li>24x7 Chat Support Available </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column-six box_Sizing borderFromLeft visaTypePanel">
                    <div class="row">
                        <h3 class="headingtext1 upperCase paddingFromBottom black marginFromTop mobpadding-0">Types of
                            UAE Visa</h3>
                    </div>
                    <div class="tab-panel padding-0">
                        <div id="tabs-container" class="row">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">14 Days<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Single
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
                                <li><a href="#tab-5">90 Days<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Single
                                            Entry)</span></a></li>
                                <li><a href="#tab-6">90 Days<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Multiple
                                            Entry)</span></a></li>
                                <li><a href="#tab-9">Transit Visa<br>
                                        <span class="row" style="line-height:12px; font-size:10px;">(Single
                                            Entry)</span></a></li>
                            </ul>
                            <div class="tab">
                                <div class="tab-content" id="tab-1">
                                    <p><span class="blue marginFromRight"><a href="/visa-online/14-days-dubai-visa"
                                                title="14 Days UAE Visa Single Entry">14 Days Visa:</a></span> The visa
                                        is an appropriate choice for those who are looking for a short stay in UAE. The
                                        applicants can enjoy sightseeing, attend meetings and conferences, spend leisure
                                        time and much more. It is a single entry visa and the maximum stay can’t surpass
                                        14 days. </p>
                                    <p>Remember that the visa validity is confined to 60 days from the date of issue
                                        while the stay validity can’t go past 14 days. </p>
                                    <p><span class="blue marginFromRight">Processing Time:</span> The processing time is
                                        24 to 72 hours in Normal Service. If you need a visa in minimum time, choose
                                        Express Service. </p>
                                    <p><strong>Note:</strong> The best part is that an applicant is eligible to travel
                                        to all seven emirates on this visa. Seven Emirates as Abu Dhabi, Ajman, Dubai,
                                        Fujairah, Ras Al Khaimah, Sharjah, and Umm Al Quwaina. </p>
                                </div>
                                <div class="tab-content" id="tab-2">
                                    <p><span class="blue marginFromRight"><a href="/visa-online/30-days-dubai-visa"
                                                title="30 Days UAE Visa Single Entry">30 Days Visa:</a></span> Some more
                                        days are always fruitful and therefore, 30 days Single Entry Visa is knocking at
                                        your door. Who does not like sightseeing, accomplishing lined up tasks, spending
                                        happy time with a lover or wife?</p>
                                    <p>Go in for this visa as it grants a stay period of 30 days. However, it affords a
                                        single entry meaning that on stepping out of the UAE, the visa gets invalid.</p>
                                    <p><span class="blue marginFromRight">Processing Time:</span> In case of processing
                                        time, there are two services - Normal and Express. Normal Service takes 2 to 3
                                        working days while Express Service grants a visa shortly. </p>
                                    <p><strong>Note:</strong> On this visa, the doors for all the emirates get open and
                                        you are entitled to step anywhere and everywhere within the constituents of the
                                        UAE. </p>
                                </div>
                                <div class="tab-content" id="tab-3">
                                    <p><span class="blue marginFromRight"><a
                                                href="/visa-online/30-days-dubai-visa-multiple-entry"
                                                title="30 Days UAE Visa Multiple Entry">30 Days Visa (Multiple
                                                Entry):</a></span> Those who require to enjoy multiple visits in a span
                                        of 30 days should opt for this visa. It is beneficial for completing official
                                        obligations, spending quality time with friends, embracing the beauty of nature,
                                        etc.</p>
                                    <p>Those who require to enjoy multiple visits in a span of 30 days should opt for
                                        this visa. It is beneficial for completing official obligations, spending
                                        quality time with friends, embracing the beauty of nature, etc. </p>
                                    <p><span class="blue marginFromRight">Processing Time:</span> Processing time is
                                        very important and we do take care of our applicants. In Normal Service, the
                                        visa gets processed in 24 to 72 working hours. We also have Express Service for
                                        those who wish to get a visa in the shortest possible time. </p>
                                    <p><strong>Note:</strong> You can make entry into all 7 emirates with this visa.</p>
                                </div>
                                <div class="tab-content" id="tab-4">
                                    <p><span class="blue marginFromRight"><a href="/visa-online/60-days-dubai-visa"
                                                title="60 Days UAE Visa Single Entry">60 Days Visa (Single
                                                Entry):</a></span> A valuable option for those who have many things on
                                        their plate. On this visa, you can enjoy the beauty of nature, take part in
                                        meetings, spend nice time with friends and visit beautiful sites. </p>
                                    <p>The visa validity is for 60 days from the date of issue while the stay can’t
                                        exceed 60 days from the date of entry. Note that the entry should take place
                                        during the visa validity. </p>
                                    <p><span class="blue marginFromRight">Processing Time:</span> Our specialists are
                                        very smart and require only 2 to 3 working days to process visas in Normal
                                        Service. If you wish to get your on priority, you can avail our Express Service
                                        for availing visa at the earliest.</p>
                                    <p><strong>Note:</strong> The visa stands valid across the emirates i.e. Abu Dhabi,
                                        Ajman, Dubai, Fujairah, Ras Al Khaimah, Sharjah, and Umm Al Quwaina.</p>
                                </div>
                                <div class="tab-content" id="tab-5">
                                    <p><span class="blue marginFromRight"><a href="/visa-online/90-days-dubai-visa"
                                                title="90 Days UAE Visa Single Entry">90 Days Visa:</a></span> A long
                                        time is always heartwarming and it is advisable to go in for a 90-day single
                                        entry visa. The visa grants a maximum stay of 90 days. If you wish to enjoy the
                                        best sites of the UAE, the visa will make you cherish. Single entry implies that
                                        once you exit the country, the visa loses its entity.</p>
                                    <p>The visa validity is for 60 days from the date of issue and the stay validity
                                        stands at 90. </p>
                                    <p><span class="blue marginFromRight">Processing Time:</span> Our visa application
                                        process is simple and smooth and we understand the value of time. We offer two
                                        services for processing visas. In Normal Service, the visa is provided in 24 to
                                        72 hours while the Express Service is available for those who wish to get a visa
                                        at the earliest,</p>
                                    <p><strong>Note:</strong> You are permitted to step in all the seven emirates if you
                                        are holding this visa. </p>
                                </div>
                                <div class="tab-content" id="tab-6">
                                    <p><span class="blue marginFromRight"><a
                                                href="/visa-online/90-days-dubai-visa-multiple-entry"
                                                title="90 Days UAE Visa Multiple Entry">90 Days Visa (Multiple
                                                Entry):</a></span> 9Most of the applicants wish to have two benefits -
                                        90 Days and Multiple Entry. If you are going in for this option, you can make
                                        numerous visits in 90 days. You can embrace various sites, explore different
                                        emirates, attend meetings or conferences, etc.</p>
                                    <p>Keep in mind that visa validity stands for 60 days from the date of issue. Don’t
                                        forget to mark your presence once during the visa validity. </p>
                                    <p><span class="blue marginFromRight">Processing Time:</span> Our specialists are
                                        always active and work round the clock. We process visas in 2 to 3 working days.
                                    </p>
                                    <p><strong>Note:</strong> The visa allows you to roam across the length and breadth
                                        of seven emirates.</p>
                                </div>

                                <div class="tab-content" id="tab-9">
                                    <p><span class="blue marginFromRight"><a href="/visa-online/transit-visa"
                                                title="96 Hours Transit UAE Visa Single Entry">96 Hours Transit Visa
                                                (Single Entry):</a></span> 96 hours transit visa is significant for
                                        those who want to catch connecting flights to other parts of the world or wish
                                        for a short stay in the UAE. It is a single entry visa and the maximum stay is
                                        permitted for 96 hours. In this short span, you can shop, roam and enjoy. If you
                                        are associated with business and have to attend a quick meeting, you can opt for
                                        this. </p>
                                    <p><span class="blue marginFromRight">Processing Time:</span> In Normal Service, the
                                        processing time may vary from 24 to 72 working hours. If you need to get a visa
                                        only at the soonest possible time, the option of Express Service is also
                                        available with us. </p>
                                    <p><strong>Note:</strong> The visa holds equal importance across the emirates. </p>
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
                <div style="position:relative;overflow:hidden;">
                    <ul class="carousel" style="min-width: 5840px;">
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/5-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 06, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">I’m very confident to give them…
                            </span> <span class="row paddingFromTop">I’m very confident to give them excellent feedback
                                because I got professional excellent services .

                            </span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/5-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 06, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">They are very gentle and fast
                            </span> <span class="row paddingFromTop">They are very gentle and fast. They tried to help
                                in every way. I was very satisfied with their service.

                            </span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/4-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 06, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">Fast service
                            </span> <span class="row paddingFromTop">Fast service
                            </span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/5-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 05, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">Excellent
                            </span> <span class="row paddingFromTop">Fast, efficient and friendly staff. I will
                                recommend you to friends and make use of the service in future

                            </span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/5-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 05, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">Information feedback
                            </span> <span class="row paddingFromTop">Chatting with Jacqueline is very satisfactory.
                                Provide instant feedback upon all my queries.

                                But Maryam was too irresponsible.</span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/5-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 05, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">Best service
                            </span> <span class="row paddingFromTop">Best service , very polite and very helpfull

                            </span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/4-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 04, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">Good service recommended to go for visa…
                            </span> <span class="row paddingFromTop">Good service recommended to go for visa processing

                            </span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/5-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 03, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">Great service
                            </span> <span class="row paddingFromTop">Applied for visa via India and would commend the
                                team for asking the right information and keeping us in loop at each step. Highly
                                recommended

                            </span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/5-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 03, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">I got my visa in the promised time
                            </span> <span class="row paddingFromTop">I got my visa in the promised time! It was a last
                                minute application and they delivered on their promise! The only issue is that they do
                                not have a te..</span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/5-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 03, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">Dont go by Reviews, trust your instinct.
                                Insta..</span> <span class="row paddingFromTop">I was skeptical after reading so many
                                mixed reviews all over the internet. Oh! How i have been proven wrong. This is one of
                                the most legit, quick acti..</span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/5-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 03, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">Excellent Service and Promptness in Handling
                                Q..</span> <span class="row paddingFromTop">Excellent Service and prompt response with
                                each and every query was the best part. Everything was managed smoothly and within set
                                timelines. Didn't ha..</span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/4-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 03, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">Always nerve-racking to apply for eVisas
                            </span> <span class="row paddingFromTop">It is always nerve-racking to apply and receive
                                Visas for travel. More so now that you need to upload them to a website. I did receive
                                my Kenya eVisa ..</span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/5-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 03, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">Absolutely happy with our experience
                            </span> <span class="row paddingFromTop">Absolutely happy with our experience. We requested
                                and paid for 7 UAE visas and insurance on the 21st of May and received all 7 24th May
                                2022. I don't..</span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/5-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 02, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">appreciation
                            </span> <span class="row paddingFromTop">thanks for all

                            </span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/5-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 02, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">Amazing company with outstanding…
                            </span> <span class="row paddingFromTop">Amazing company with outstanding platform however I
                                was a little worry at the beginning to be scammed. Excellent service indeed in no
                                time.</span> </li>
                        <li class="slide" style="float: left;"> <span class="row"> <span class="column-six mob60"> <img
                                        src="https://media.instadubaivisa.com/images/5-star.png" width="106" height="22"
                                        class="pull_left" alt="Star"></span> <span
                                    class="column-four alignfromRight mob40 date">August 02, 2022</span> </span> <span
                                class="row paddingFromTop reviewsubTitle">Great Response and Service
                            </span> <span class="row paddingFromTop">Great Response and Service
                            </span> </li>
                    </ul>
                </div>
                <a href="#" class="slides-next" data-slides="next">Next</a><a href="#" class="slides-prev"
                    data-slides="previous">Previous</a>
            </div>
        </div>
    </section>


    <div class="row gapping greyBG borderFromBottom">
        <div class="column-nine container label" itemscope="" itemtype="https://schema.org/Table">
            <h3 class="reviewTitle row marginFromBottom paddingFromBottom mobPaddingTop"><span>Countries Eligible for
                    Online UAE Visa</span></h3>
            <div class="row">
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tbody>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/afghanistan-citizens" class="black"
                                    title="Dubai Visa for Afghanistan citizens"
                                    alt="Dubai Visa for Afghanistan citizens">Afghanistan</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/albania-citizens" class="black"
                                    title="Dubai Visa for Albania citizens" alt="Dubai Visa for Albania citizens">
                                    Albania</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/algeria-citizens" class="black"
                                    title="Dubai Visa for Algeria citizens"
                                    alt="Dubai Visa for Algeria citizens">Algeria</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/american-samoa-citizens"
                                    class="black" title="Dubai Visa for American Samoa citizens"
                                    alt="Dubai Visa for American Samoa citizens">American Samoa</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/andorra-citizens" class="black"
                                    title="Dubai Visa for Andorra citizens"
                                    alt="Dubai Visa for Andorra citizens">Andorra</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/anguilla-citizens" class="black"
                                    title="Dubai Visa for Anguilla citizens"
                                    alt="Dubai Visa for Anguilla citizens">Anguilla</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/antarctica-citizens" class="black"
                                    title="Dubai Visa for Antarctica citizens" alt="Dubai Visa for Antarctica citizens">
                                    Antarctica</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/antigua-and-barbuda-citizens"
                                    class="black" title="Dubai Visa for Antigua and Barbuda citizens"
                                    alt="Dubai Visa for Antigua and Barbuda citizens">Antigua and Barbuda</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/argentina-citizens" class="black"
                                    title="Dubai Visa for Argentina citizens"
                                    alt="Dubai Visa for Argentina citizens">Argentina</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/armenia-citizens" class="black"
                                    title="Dubai Visa for Armenia citizens"
                                    alt="Dubai Visa for Armenia citizens">Armenia</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/australia-citizens" class="black"
                                    title="Dubai Visa for Australia citizens"
                                    alt="Dubai Visa for Australia citizens">Australia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/austria-citizens" class="black"
                                    title="Dubai Visa for Austria citizens" alt="Dubai Visa for Austria citizens">
                                    Austria</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/azerbaijan-citizens" class="black"
                                    title="Dubai Visa for Azerbaijan citizens"
                                    alt="Dubai Visa for Azerbaijan citizens">Azerbaijan</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/bahamas-citizens" class="black"
                                    title="Dubai Visa for Bahamas citizens"
                                    alt="Dubai Visa for Bahamas citizens">Bahamas</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/bahrain-citizens" class="black"
                                    title="Dubai Visa for Bahrain citizens"
                                    alt="Dubai Visa for Bahrain citizens">Bahrain</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/barbados-citizens" class="black"
                                    title="Dubai Visa for Barbados citizens"
                                    alt="Dubai Visa for Barbados citizens">Barbados</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/belarus-citizens" class="black"
                                    title="Dubai Visa for Belarus citizens" alt="Dubai Visa for Belarus citizens">
                                    Belarus</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/belgium-citizens" class="black"
                                    title="Dubai Visa for Belgium citizens"
                                    alt="Dubai Visa for Belgium citizens">Belgium</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/belize-citizens" class="black"
                                    title="Dubai Visa for Belize citizens"
                                    alt="Dubai Visa for Belize citizens">Belize</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/benin-citizens" class="black"
                                    title="Dubai Visa for Benin citizens" alt="Dubai Visa for Benin citizens">Benin</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/bhutan-citizens" class="black"
                                    title="Dubai Visa for Bhutan citizens"
                                    alt="Dubai Visa for Bhutan citizens">Bhutan</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/bolivia-citizens" class="black"
                                    title="Dubai Visa for Bolivia citizens" alt="Dubai Visa for Bolivia citizens">
                                    Bolivia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/bosnia-and-herzegovina-citizens"
                                    class="black" title="Dubai Visa for Bosnia and Herzegovina citizens"
                                    alt="Dubai Visa for Bosnia and Herzegovina citizens">Bosnia and Herzegovina</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/botswana-citizens" class="black"
                                    title="Dubai Visa for Botswana citizens"
                                    alt="Dubai Visa for Botswana citizens">Botswana</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/bouvet-island-citizens" class="black"
                                    title="Dubai Visa for Bouvet Island citizens"
                                    alt="Dubai Visa for Bouvet Island citizens">Bouvet Island</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/british-indian-ocean-territory-citizens"
                                    class="black" title="Dubai Visa for British Indian Ocean Territory citizens"
                                    alt="Dubai Visa for British Indian Ocean Territory citizens">British Indian Ocean
                                    Territory</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/brunei-citizens" class="black"
                                    title="Dubai Visa for Brunei citizens" alt="Dubai Visa for Brunei citizens">
                                    Brunei</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/bulgaria-citizens" class="black"
                                    title="Dubai Visa for Bulgaria citizens"
                                    alt="Dubai Visa for Bulgaria citizens">Bulgaria</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/burkina-faso-citizens" class="black"
                                    title="Dubai Visa for Burkina Faso citizens"
                                    alt="Dubai Visa for Burkina Faso citizens">Burkina Faso</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/burundi-citizens" class="black"
                                    title="Dubai Visa for Burundi citizens"
                                    alt="Dubai Visa for Burundi citizens">Burundi</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/cameroon-citizens" class="black"
                                    title="Dubai Visa for Cameroon citizens"
                                    alt="Dubai Visa for Cameroon citizens">Cameroon</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/canada-citizens" class="black"
                                    title="Dubai Visa for Canada citizens" alt="Dubai Visa for Canada citizens">
                                    Canada</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/cape-verde-citizens" class="black"
                                    title="Dubai Visa for Cape Verde citizens"
                                    alt="Dubai Visa for Cape Verde citizens">Cape Verde</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/cayman-islands-citizens"
                                    class="black" title="Dubai Visa for Cayman Islands citizens"
                                    alt="Dubai Visa for Cayman Islands citizens">Cayman Islands</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/central-african-republic-citizens"
                                    class="black" title="Dubai Visa for Central African Republic citizens"
                                    alt="Dubai Visa for Central African Republic citizens">Central African Republic</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/chile-citizens" class="black"
                                    title="Dubai Visa for Chile citizens" alt="Dubai Visa for Chile citizens">Chile</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/china-citizens" class="black"
                                    title="Dubai Visa for China citizens" alt="Dubai Visa for China citizens"> China</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/chinese-taipei-citizens"
                                    class="black" title="Dubai Visa for Chinese Taipei citizens"
                                    alt="Dubai Visa for Chinese Taipei citizens">Chinese Taipei</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/christmas-island-citizens"
                                    class="black" title="Dubai Visa for Christmas Island citizens"
                                    alt="Dubai Visa for Christmas Island citizens">Christmas Island</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/cocos-keeling-islands-citizens"
                                    class="black" title="Dubai Visa for Cocos (Keeling) Islands citizens"
                                    alt="Dubai Visa for Cocos (Keeling) Islands citizens">Cocos (Keeling) Islands</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/comoros-citizens" class="black"
                                    title="Dubai Visa for Comoros citizens"
                                    alt="Dubai Visa for Comoros citizens">Comoros</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/congo-citizens" class="black"
                                    title="Dubai Visa for Congo citizens" alt="Dubai Visa for Congo citizens"> Congo</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/cook-islands-citizens" class="black"
                                    title="Dubai Visa for Cook Islands citizens"
                                    alt="Dubai Visa for Cook Islands citizens">Cook Islands</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/costa-rica-citizens" class="black"
                                    title="Dubai Visa for Costa Rica citizens"
                                    alt="Dubai Visa for Costa Rica citizens">Costa Rica</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/croatia-citizens" class="black"
                                    title="Dubai Visa for Croatia citizens"
                                    alt="Dubai Visa for Croatia citizens">Croatia</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/cyprus-citizens" class="black"
                                    title="Dubai Visa for Cyprus citizens"
                                    alt="Dubai Visa for Cyprus citizens">Cyprus</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/czech-republic-citizens"
                                    class="black" title="Dubai Visa for Czech Republic citizens"
                                    alt="Dubai Visa for Czech Republic citizens"> Czech Republic</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/democratic-republic-of-congo-citizens"
                                    class="black" title="Dubai Visa for Democratic Republic of Congo citizens"
                                    alt="Dubai Visa for Democratic Republic of Congo citizens">Democratic Republic of
                                    Congo</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/denmark-citizens" class="black"
                                    title="Dubai Visa for Denmark citizens"
                                    alt="Dubai Visa for Denmark citizens">Denmark</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/djibouti-citizens" class="black"
                                    title="Dubai Visa for Djibouti citizens"
                                    alt="Dubai Visa for Djibouti citizens">Djibouti</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/dominican-republic-citizens"
                                    class="black" title="Dubai Visa for Dominican Republic citizens"
                                    alt="Dubai Visa for Dominican Republic citizens">Dominican Republic</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/ecuador-citizens" class="black"
                                    title="Dubai Visa for Ecuador citizens" alt="Dubai Visa for Ecuador citizens">
                                    Ecuador</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/egypt-citizens" class="black"
                                    title="Dubai Visa for Egypt citizens" alt="Dubai Visa for Egypt citizens">Egypt</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/el-salvador-citizens" class="black"
                                    title="Dubai Visa for El Salvador citizens"
                                    alt="Dubai Visa for El Salvador citizens">El Salvador</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/equatorial-guinea-citizens"
                                    class="black" title="Dubai Visa for Equatorial Guinea citizens"
                                    alt="Dubai Visa for Equatorial Guinea citizens">Equatorial Guinea</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/estonia-citizens" class="black"
                                    title="Dubai Visa for Estonia citizens"
                                    alt="Dubai Visa for Estonia citizens">Estonia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/eswatini-swaziland-citizens"
                                    class="black" title="Dubai Visa for Eswatini (Swaziland) citizens"
                                    alt="Dubai Visa for Eswatini (Swaziland) citizens"> Eswatini (Swaziland)</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/ethiopia-citizens" class="black"
                                    title="Dubai Visa for Ethiopia citizens"
                                    alt="Dubai Visa for Ethiopia citizens">Ethiopia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/falkland-islands-citizens"
                                    class="black" title="Dubai Visa for Falkland Islands citizens"
                                    alt="Dubai Visa for Falkland Islands citizens">Falkland Islands</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/faroe-islands-citizens" class="black"
                                    title="Dubai Visa for Faroe Islands citizens"
                                    alt="Dubai Visa for Faroe Islands citizens">Faroe Islands</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/finland-citizens" class="black"
                                    title="Dubai Visa for Finland citizens"
                                    alt="Dubai Visa for Finland citizens">Finland</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/france-citizens" class="black"
                                    title="Dubai Visa for France citizens" alt="Dubai Visa for France citizens">
                                    France</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/french-guiana-citizens" class="black"
                                    title="Dubai Visa for French Guiana citizens"
                                    alt="Dubai Visa for French Guiana citizens">French Guiana</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/french-polynesia-citizens"
                                    class="black" title="Dubai Visa for French Polynesia citizens"
                                    alt="Dubai Visa for French Polynesia citizens">French Polynesia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/french-southern-territories-citizens"
                                    class="black" title="Dubai Visa for French Southern Territories citizens"
                                    alt="Dubai Visa for French Southern Territories citizens">French Southern
                                    Territories</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/gambia-citizens" class="black"
                                    title="Dubai Visa for Gambia citizens"
                                    alt="Dubai Visa for Gambia citizens">Gambia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/georgia-citizens" class="black"
                                    title="Dubai Visa for Georgia citizens" alt="Dubai Visa for Georgia citizens">
                                    Georgia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/germany-citizens" class="black"
                                    title="Dubai Visa for Germany citizens"
                                    alt="Dubai Visa for Germany citizens">Germany</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/ghana-citizens" class="black"
                                    title="Dubai Visa for Ghana citizens" alt="Dubai Visa for Ghana citizens">Ghana</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/gibraltar-citizens" class="black"
                                    title="Dubai Visa for Gibraltar citizens"
                                    alt="Dubai Visa for Gibraltar citizens">Gibraltar</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/greenland-citizens" class="black"
                                    title="Dubai Visa for Greenland citizens"
                                    alt="Dubai Visa for Greenland citizens">Greenland</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/grenada-citizens" class="black"
                                    title="Dubai Visa for Grenada citizens" alt="Dubai Visa for Grenada citizens">
                                    Grenada</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/guadeloupe-citizens" class="black"
                                    title="Dubai Visa for Guadeloupe citizens"
                                    alt="Dubai Visa for Guadeloupe citizens">Guadeloupe</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/guam-citizens" class="black"
                                    title="Dubai Visa for Guam citizens" alt="Dubai Visa for Guam citizens">Guam</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/guatemala-citizens" class="black"
                                    title="Dubai Visa for Guatemala citizens"
                                    alt="Dubai Visa for Guatemala citizens">Guatemala</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/guinea-bissau-citizens" class="black"
                                    title="Dubai Visa for Guinea Bissau citizens"
                                    alt="Dubai Visa for Guinea Bissau citizens">Guinea Bissau</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/guyana-citizens" class="black"
                                    title="Dubai Visa for Guyana citizens" alt="Dubai Visa for Guyana citizens">
                                    Guyana</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/haiti-citizens" class="black"
                                    title="Dubai Visa for Haiti citizens" alt="Dubai Visa for Haiti citizens">Haiti</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/heard-island-and-mcdonald-islands-citizens"
                                    class="black" title="Dubai Visa for Heard Island and Mcdonald Islands citizens"
                                    alt="Dubai Visa for Heard Island and Mcdonald Islands citizens">Heard Island and
                                    Mcdonald Islands</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/honduras-citizens" class="black"
                                    title="Dubai Visa for Honduras citizens"
                                    alt="Dubai Visa for Honduras citizens">Honduras</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/hungary-citizens" class="black"
                                    title="Dubai Visa for Hungary citizens"
                                    alt="Dubai Visa for Hungary citizens">Hungary</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/iceland-citizens" class="black"
                                    title="Dubai Visa for Iceland citizens" alt="Dubai Visa for Iceland citizens">
                                    Iceland</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/india-citizens" class="black"
                                    title="Dubai Visa for India citizens" alt="Dubai Visa for India citizens">India</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/indonesia-citizens" class="black"
                                    title="Dubai Visa for Indonesia citizens"
                                    alt="Dubai Visa for Indonesia citizens">Indonesia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/iran-citizens" class="black"
                                    title="Dubai Visa for Iran citizens" alt="Dubai Visa for Iran citizens">Iran</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/ireland-citizens" class="black"
                                    title="Dubai Visa for Ireland citizens"
                                    alt="Dubai Visa for Ireland citizens">Ireland</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/isle-of-man-citizens" class="black"
                                    title="Dubai Visa for Isle of Man citizens"
                                    alt="Dubai Visa for Isle of Man citizens"> Isle of Man</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/israel-citizens" class="black"
                                    title="Dubai Visa for Israel citizens"
                                    alt="Dubai Visa for Israel citizens">Israel</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/italy-citizens" class="black"
                                    title="Dubai Visa for Italy citizens" alt="Dubai Visa for Italy citizens">Italy</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/ivory-coast-citizens" class="black"
                                    title="Dubai Visa for Ivory Coast citizens"
                                    alt="Dubai Visa for Ivory Coast citizens">Ivory Coast</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/japan-citizens" class="black"
                                    title="Dubai Visa for Japan citizens" alt="Dubai Visa for Japan citizens">Japan</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/jordan-citizens" class="black"
                                    title="Dubai Visa for Jordan citizens" alt="Dubai Visa for Jordan citizens">
                                    Jordan</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/kazakhstan-citizens" class="black"
                                    title="Dubai Visa for Kazakhstan citizens"
                                    alt="Dubai Visa for Kazakhstan citizens">Kazakhstan</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/kenya-citizens" class="black"
                                    title="Dubai Visa for Kenya citizens" alt="Dubai Visa for Kenya citizens">Kenya</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/kiribati-citizens" class="black"
                                    title="Dubai Visa for Kiribati citizens"
                                    alt="Dubai Visa for Kiribati citizens">Kiribati</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/kuwait-citizens" class="black"
                                    title="Dubai Visa for Kuwait citizens"
                                    alt="Dubai Visa for Kuwait citizens">Kuwait</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/kyrgyzstan-citizens" class="black"
                                    title="Dubai Visa for Kyrgyzstan citizens" alt="Dubai Visa for Kyrgyzstan citizens">
                                    Kyrgyzstan</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/laos-citizens" class="black"
                                    title="Dubai Visa for Laos citizens" alt="Dubai Visa for Laos citizens">Laos</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/latvia-citizens" class="black"
                                    title="Dubai Visa for Latvia citizens"
                                    alt="Dubai Visa for Latvia citizens">Latvia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/lebanon-citizens" class="black"
                                    title="Dubai Visa for Lebanon citizens"
                                    alt="Dubai Visa for Lebanon citizens">Lebanon</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/liberia-citizens" class="black"
                                    title="Dubai Visa for Liberia citizens"
                                    alt="Dubai Visa for Liberia citizens">Liberia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/libya-citizens" class="black"
                                    title="Dubai Visa for Libya citizens" alt="Dubai Visa for Libya citizens"> Libya</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/liechtenstein-citizens" class="black"
                                    title="Dubai Visa for Liechtenstein citizens"
                                    alt="Dubai Visa for Liechtenstein citizens">Liechtenstein</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/lithuania-citizens" class="black"
                                    title="Dubai Visa for Lithuania citizens"
                                    alt="Dubai Visa for Lithuania citizens">Lithuania</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/luxembourg-citizens" class="black"
                                    title="Dubai Visa for Luxembourg citizens"
                                    alt="Dubai Visa for Luxembourg citizens">Luxembourg</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/macedonia-citizens" class="black"
                                    title="Dubai Visa for Macedonia citizens"
                                    alt="Dubai Visa for Macedonia citizens">Macedonia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/madagascar-citizens" class="black"
                                    title="Dubai Visa for Madagascar citizens" alt="Dubai Visa for Madagascar citizens">
                                    Madagascar</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/malawi-citizens" class="black"
                                    title="Dubai Visa for Malawi citizens"
                                    alt="Dubai Visa for Malawi citizens">Malawi</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/malaysia-citizens" class="black"
                                    title="Dubai Visa for Malaysia citizens"
                                    alt="Dubai Visa for Malaysia citizens">Malaysia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/maldives-citizens" class="black"
                                    title="Dubai Visa for Maldives citizens"
                                    alt="Dubai Visa for Maldives citizens">Maldives</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/malta-citizens" class="black"
                                    title="Dubai Visa for Malta citizens" alt="Dubai Visa for Malta citizens">Malta</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/mariana-island-citizens"
                                    class="black" title="Dubai Visa for Mariana Island citizens"
                                    alt="Dubai Visa for Mariana Island citizens"> Mariana Island</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/marshall-islands-citizens"
                                    class="black" title="Dubai Visa for Marshall Islands citizens"
                                    alt="Dubai Visa for Marshall Islands citizens">Marshall Islands</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/martinique-citizens" class="black"
                                    title="Dubai Visa for Martinique citizens"
                                    alt="Dubai Visa for Martinique citizens">Martinique</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/mauritania-citizens" class="black"
                                    title="Dubai Visa for Mauritania citizens"
                                    alt="Dubai Visa for Mauritania citizens">Mauritania</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/mayotte-citizens" class="black"
                                    title="Dubai Visa for Mayotte citizens"
                                    alt="Dubai Visa for Mayotte citizens">Mayotte</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/mexico-citizens" class="black"
                                    title="Dubai Visa for Mexico citizens" alt="Dubai Visa for Mexico citizens">
                                    Mexico</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/micronesia-citizens" class="black"
                                    title="Dubai Visa for Micronesia citizens"
                                    alt="Dubai Visa for Micronesia citizens">Micronesia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/moldova-citizens" class="black"
                                    title="Dubai Visa for Moldova citizens"
                                    alt="Dubai Visa for Moldova citizens">Moldova</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/monaco-citizens" class="black"
                                    title="Dubai Visa for Monaco citizens"
                                    alt="Dubai Visa for Monaco citizens">Monaco</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/montenegro-citizens" class="black"
                                    title="Dubai Visa for Montenegro citizens"
                                    alt="Dubai Visa for Montenegro citizens">Montenegro</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/montserrat-citizens" class="black"
                                    title="Dubai Visa for Montserrat citizens" alt="Dubai Visa for Montserrat citizens">
                                    Montserrat</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/morocco-citizens" class="black"
                                    title="Dubai Visa for Morocco citizens"
                                    alt="Dubai Visa for Morocco citizens">Morocco</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/mozambique-citizens" class="black"
                                    title="Dubai Visa for Mozambique citizens"
                                    alt="Dubai Visa for Mozambique citizens">Mozambique</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/myanmar-citizens" class="black"
                                    title="Dubai Visa for Myanmar citizens"
                                    alt="Dubai Visa for Myanmar citizens">Myanmar</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/nauru-citizens" class="black"
                                    title="Dubai Visa for Nauru citizens" alt="Dubai Visa for Nauru citizens">Nauru</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/nepal-citizens" class="black"
                                    title="Dubai Visa for Nepal citizens" alt="Dubai Visa for Nepal citizens"> Nepal</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/netherlands-citizens" class="black"
                                    title="Dubai Visa for Netherlands citizens"
                                    alt="Dubai Visa for Netherlands citizens">Netherlands</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/netherlands-antilles-citizens"
                                    class="black" title="Dubai Visa for Netherlands Antilles citizens"
                                    alt="Dubai Visa for Netherlands Antilles citizens">Netherlands Antilles</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/new-caledonia-citizens" class="black"
                                    title="Dubai Visa for New Caledonia citizens"
                                    alt="Dubai Visa for New Caledonia citizens">New Caledonia</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/nicaragua-citizens" class="black"
                                    title="Dubai Visa for Nicaragua citizens"
                                    alt="Dubai Visa for Nicaragua citizens">Nicaragua</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/niger-citizens" class="black"
                                    title="Dubai Visa for Niger citizens" alt="Dubai Visa for Niger citizens"> Niger</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/nigeria-citizens" class="black"
                                    title="Dubai Visa for Nigeria citizens"
                                    alt="Dubai Visa for Nigeria citizens">Nigeria</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/niue-citizens" class="black"
                                    title="Dubai Visa for Niue citizens" alt="Dubai Visa for Niue citizens">Niue</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/norfolk-island-citizens"
                                    class="black" title="Dubai Visa for Norfolk Island citizens"
                                    alt="Dubai Visa for Norfolk Island citizens">Norfolk Island</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/northern-mariana-islands-citizens"
                                    class="black" title="Dubai Visa for Northern Mariana Islands citizens"
                                    alt="Dubai Visa for Northern Mariana Islands citizens">Northern Mariana Islands</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/norway-citizens" class="black"
                                    title="Dubai Visa for Norway citizens" alt="Dubai Visa for Norway citizens">
                                    Norway</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/oman-citizens" class="black"
                                    title="Dubai Visa for Oman citizens" alt="Dubai Visa for Oman citizens">Oman</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/pakistan-citizens" class="black"
                                    title="Dubai Visa for Pakistan citizens"
                                    alt="Dubai Visa for Pakistan citizens">Pakistan</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/palau-citizens" class="black"
                                    title="Dubai Visa for Palau citizens" alt="Dubai Visa for Palau citizens">Palau</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/panama-citizens" class="black"
                                    title="Dubai Visa for Panama citizens"
                                    alt="Dubai Visa for Panama citizens">Panama</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/papua-new-guinea-citizens"
                                    class="black" title="Dubai Visa for Papua New Guinea citizens"
                                    alt="Dubai Visa for Papua New Guinea citizens"> Papua New Guinea</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/paraguay-citizens" class="black"
                                    title="Dubai Visa for Paraguay citizens"
                                    alt="Dubai Visa for Paraguay citizens">Paraguay</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/peru-citizens" class="black"
                                    title="Dubai Visa for Peru citizens" alt="Dubai Visa for Peru citizens">Peru</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/philippines-citizens" class="black"
                                    title="Dubai Visa for Philippines citizens"
                                    alt="Dubai Visa for Philippines citizens">Philippines</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/poland-citizens" class="black"
                                    title="Dubai Visa for Poland citizens"
                                    alt="Dubai Visa for Poland citizens">Poland</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/portugal-citizens" class="black"
                                    title="Dubai Visa for Portugal citizens" alt="Dubai Visa for Portugal citizens">
                                    Portugal</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/puerto-rico-citizens" class="black"
                                    title="Dubai Visa for Puerto Rico citizens"
                                    alt="Dubai Visa for Puerto Rico citizens">Puerto Rico</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/qatar-citizens" class="black"
                                    title="Dubai Visa for Qatar citizens" alt="Dubai Visa for Qatar citizens">Qatar</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/reunion-citizens" class="black"
                                    title="Dubai Visa for Reunion citizens"
                                    alt="Dubai Visa for Reunion citizens">Reunion</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/russia-citizens" class="black"
                                    title="Dubai Visa for Russia citizens"
                                    alt="Dubai Visa for Russia citizens">Russia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/rwanda-citizens" class="black"
                                    title="Dubai Visa for Rwanda citizens" alt="Dubai Visa for Rwanda citizens">
                                    Rwanda</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/saint-helena-citizens" class="black"
                                    title="Dubai Visa for Saint Helena citizens"
                                    alt="Dubai Visa for Saint Helena citizens">Saint Helena</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/saint-kitts-and-nevis-citizens"
                                    class="black" title="Dubai Visa for Saint Kitts and Nevis citizens"
                                    alt="Dubai Visa for Saint Kitts and Nevis citizens">Saint Kitts and Nevis</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/saint-lucia-citizens" class="black"
                                    title="Dubai Visa for Saint Lucia citizens"
                                    alt="Dubai Visa for Saint Lucia citizens">Saint Lucia</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/saint-vincent-and-the-grenadines-citizens"
                                    class="black" title="Dubai Visa for Saint Vincent and the Grenadines citizens"
                                    alt="Dubai Visa for Saint Vincent and the Grenadines citizens">Saint Vincent and the
                                    Grenadines</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/samoa-citizens" class="black"
                                    title="Dubai Visa for Samoa citizens" alt="Dubai Visa for Samoa citizens"> Samoa</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/san-marino-citizens" class="black"
                                    title="Dubai Visa for San Marino citizens"
                                    alt="Dubai Visa for San Marino citizens">San Marino</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/sao-tome-and-principe-citizens"
                                    class="black" title="Dubai Visa for Sao Tome and Principe citizens"
                                    alt="Dubai Visa for Sao Tome and Principe citizens">Sao Tome and Principe</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/saudi-arabia-citizens" class="black"
                                    title="Dubai Visa for Saudi Arabia citizens"
                                    alt="Dubai Visa for Saudi Arabia citizens">Saudi Arabia</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/serbia-citizens" class="black"
                                    title="Dubai Visa for Serbia citizens"
                                    alt="Dubai Visa for Serbia citizens">Serbia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/seychelles-citizens" class="black"
                                    title="Dubai Visa for Seychelles citizens" alt="Dubai Visa for Seychelles citizens">
                                    Seychelles</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/sierra-leone-citizens" class="black"
                                    title="Dubai Visa for Sierra Leone citizens"
                                    alt="Dubai Visa for Sierra Leone citizens">Sierra Leone</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/singapore-citizens" class="black"
                                    title="Dubai Visa for Singapore citizens"
                                    alt="Dubai Visa for Singapore citizens">Singapore</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/sint-maarten-citizens" class="black"
                                    title="Dubai Visa for Sint Maarten citizens"
                                    alt="Dubai Visa for Sint Maarten citizens">Sint Maarten</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/slovenia-citizens" class="black"
                                    title="Dubai Visa for Slovenia citizens"
                                    alt="Dubai Visa for Slovenia citizens">Slovenia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/solomon-islands-citizens"
                                    class="black" title="Dubai Visa for Solomon Islands citizens"
                                    alt="Dubai Visa for Solomon Islands citizens"> Solomon Islands</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/somalia-citizens" class="black"
                                    title="Dubai Visa for Somalia citizens"
                                    alt="Dubai Visa for Somalia citizens">Somalia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/south-africa-citizens" class="black"
                                    title="Dubai Visa for South Africa citizens"
                                    alt="Dubai Visa for South Africa citizens">South Africa</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/south-georgia-and-the-south-sandwich-islands-citizens"
                                    class="black"
                                    title="Dubai Visa for South Georgia and the South Sandwich Islands citizens"
                                    alt="Dubai Visa for South Georgia and the South Sandwich Islands citizens">South
                                    Georgia and the South Sandwich Islands</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/spain-citizens" class="black"
                                    title="Dubai Visa for Spain citizens" alt="Dubai Visa for Spain citizens">Spain</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/sri-lanka-citizens" class="black"
                                    title="Dubai Visa for Sri Lanka citizens" alt="Dubai Visa for Sri Lanka citizens">
                                    Sri Lanka</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/suriname-citizens" class="black"
                                    title="Dubai Visa for Suriname citizens"
                                    alt="Dubai Visa for Suriname citizens">Suriname</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/svalbard-and-jan-mayen-citizens"
                                    class="black" title="Dubai Visa for Svalbard and Jan Mayen citizens"
                                    alt="Dubai Visa for Svalbard and Jan Mayen citizens">Svalbard and Jan Mayen</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/sweden-citizens" class="black"
                                    title="Dubai Visa for Sweden citizens"
                                    alt="Dubai Visa for Sweden citizens">Sweden</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/syria-citizens" class="black"
                                    title="Dubai Visa for Syria citizens" alt="Dubai Visa for Syria citizens">Syria</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/taiwan-citizens" class="black"
                                    title="Dubai Visa for Taiwan citizens" alt="Dubai Visa for Taiwan citizens">
                                    Taiwan</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/tajikistan-citizens" class="black"
                                    title="Dubai Visa for Tajikistan citizens"
                                    alt="Dubai Visa for Tajikistan citizens">Tajikistan</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/tanzania-citizens" class="black"
                                    title="Dubai Visa for Tanzania citizens"
                                    alt="Dubai Visa for Tanzania citizens">Tanzania</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/thailand-citizens" class="black"
                                    title="Dubai Visa for Thailand citizens"
                                    alt="Dubai Visa for Thailand citizens">Thailand</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/togo-citizens" class="black"
                                    title="Dubai Visa for Togo citizens" alt="Dubai Visa for Togo citizens">Togo</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/tokelau-citizens" class="black"
                                    title="Dubai Visa for Tokelau citizens" alt="Dubai Visa for Tokelau citizens">
                                    Tokelau</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/tonga-citizens" class="black"
                                    title="Dubai Visa for Tonga citizens" alt="Dubai Visa for Tonga citizens">Tonga</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/trinidad-and-tobago-citizens"
                                    class="black" title="Dubai Visa for Trinidad and Tobago citizens"
                                    alt="Dubai Visa for Trinidad and Tobago citizens">Trinidad and Tobago</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/tunisia-citizens" class="black"
                                    title="Dubai Visa for Tunisia citizens"
                                    alt="Dubai Visa for Tunisia citizens">Tunisia</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/turkmenistan-citizens" class="black"
                                    title="Dubai Visa for Turkmenistan citizens"
                                    alt="Dubai Visa for Turkmenistan citizens">Turkmenistan</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/turks-and-caicos-islands-citizens"
                                    class="black" title="Dubai Visa for Turks and Caicos Islands citizens"
                                    alt="Dubai Visa for Turks and Caicos Islands citizens"> Turks and Caicos Islands</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/tuvalu-citizens" class="black"
                                    title="Dubai Visa for Tuvalu citizens"
                                    alt="Dubai Visa for Tuvalu citizens">Tuvalu</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/uganda-citizens" class="black"
                                    title="Dubai Visa for Uganda citizens"
                                    alt="Dubai Visa for Uganda citizens">Uganda</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/ukraine-citizens" class="black"
                                    title="Dubai Visa for Ukraine citizens"
                                    alt="Dubai Visa for Ukraine citizens">Ukraine</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/united-kingdom-uk-citizens"
                                    class="black" title="Dubai Visa for United Kingdom (UK) citizens"
                                    alt="Dubai Visa for United Kingdom (UK) citizens">United Kingdom (UK)</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/united-states-of-america-usa-citizens"
                                    class="black" title="Dubai Visa for United States of America (USA) citizens"
                                    alt="Dubai Visa for United States of America (USA) citizens"> United States of
                                    America (USA)</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/uruguay-citizens" class="black"
                                    title="Dubai Visa for Uruguay citizens"
                                    alt="Dubai Visa for Uruguay citizens">Uruguay</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/uzbekistan-citizens" class="black"
                                    title="Dubai Visa for Uzbekistan citizens"
                                    alt="Dubai Visa for Uzbekistan citizens">Uzbekistan</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/vanuatu-citizens" class="black"
                                    title="Dubai Visa for Vanuatu citizens"
                                    alt="Dubai Visa for Vanuatu citizens">Vanuatu</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/venezuela-citizens" class="black"
                                    title="Dubai Visa for Venezuela citizens"
                                    alt="Dubai Visa for Venezuela citizens">Venezuela</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/vietnam-citizens" class="black"
                                    title="Dubai Visa for Vietnam citizens" alt="Dubai Visa for Vietnam citizens">
                                    Vietnam</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/virgin-islands-british-citizens"
                                    class="black" title="Dubai Visa for Virgin Islands British citizens"
                                    alt="Dubai Visa for Virgin Islands British citizens">Virgin Islands British</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/virgin-islands-us-citizens"
                                    class="black" title="Dubai Visa for Virgin Islands US citizens"
                                    alt="Dubai Visa for Virgin Islands US citizens">Virgin Islands US</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/wallis-and-futuna-citizens"
                                    class="black" title="Dubai Visa for Wallis and Futuna citizens"
                                    alt="Dubai Visa for Wallis and Futuna citizens">Wallis and Futuna</a>
                            </td>

                        </tr>
                        <tr>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/yemen-citizens" class="black"
                                    title="Dubai Visa for Yemen citizens" alt="Dubai Visa for Yemen citizens">Yemen</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/zambia-citizens" class="black"
                                    title="Dubai Visa for Zambia citizens" alt="Dubai Visa for Zambia citizens">
                                    Zambia</a>
                            </td>
                            <td class="country-items">
                                <a href="https://www.instadubaivisa.com/dubai-visa/zimbabwe-citizens" class="black"
                                    title="Dubai Visa for Zimbabwe citizens"
                                    alt="Dubai Visa for Zimbabwe citizens">Zimbabwe</a>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="wrap gapping">

            <h3 class="reviewTitle row marginFromBottom paddingFromBottom mobPaddingTop"><span>Rules and
                    Conditions</span></h3>

            <div class="row content alert-panel notification font16 paddingAllExtra">
                <ul>
                    <li>Visa fees must be paid online after submitting your application.</li>
                    <li>Visa fees are non‑refundable.</li>
                    <li>Processing Time is approximately 24 to 72 working hours.</li>
                    <li>Entry into UAE is subject to immigration approval.</li>
                    <li>All visas are valid for 60 days from the date of issue and the stay validity depends on the visa
                        type you applied for. </li>
                    <li>All passengers travelling to UAE must hold a negative COVID‑19 PCR test and the time the sample
                        was taken must be no more than 48 hours before the scheduled flight.</li>
                    <li>All UAE Tourist Visa can be extended for 30 or 90 Days by paying the additional fees.</li>

                </ul>
            </div>
        </div>
    </div>





    <div class="row content">
        <div class="wrap gapping">
            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                United Arab Emirates Visa
            </h3>
            <p>UAE is a country full of exquisite architecture. According to the World Economic Forum, the
                UAE established the world's first government ministry for artificial intelligence. Tourism is
                becoming a significant contributor to the UAE economy. In absolute terms, the United Arab
                Emirates welcomed 11.40 million international tourists till October 2022. Dubai and Abu
                Dhabi are the UAE's most popular international travel destinations. Every emirate has its own
                culture and customs. Every traveler must&nbsp;apply for a UAE visa&nbsp;to visit these magnificent
                places. These changes and innovative tourist models, such as staycations and travel-friendly
                programs, have revitalized the UAE tourism sector.&nbsp;</p>

            <p>The United Arab Emirates is divided into seven emirates: Dubai, Abu Dhabi, Sharjah, Ras al-
                Khaimah, Ajman, Umm al-Quwain, and Fujairah.</p>


            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                <strong class="black">Dubai: </strong>The Most Enticing Emirate in the Middle East
            </h3>

            <p>The fourth tallest hotel in the world in Dubai, Burj Al Arab, beats the list of Dubai tourist
                places to visit in 2022. Dubai is known for its modernist buildings and is a hop-and-shop
                destination. The vibrant life of Dubai is an unforgettable experience for every tourist. Dubai
                contributes 66% of tourism revenue. The travelers applying for the&nbsp;UAE Visa&nbsp;have affected
                the&nbsp;UAE government's economic robustness and vitality. It has immensely contributed to
                visitor flooding in Dubai.</p>

            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                <strong class="black">Abu Dhabi: </strong>The Biggest Emirate of the Seven Emirates
            </h3>
            <p>Abu Dhabi is an intriguing archipelago of more than 200 islands. With so many islands to
                explore, it might be a little intimidating. The emirate offers a wide range of sceneries, from
                coastal islands with world-famous attractions and beaches to endless desert vistas. Abu Dhabi
                is a renowned tourist destination globally due to its high concentration of attractions and
                cultural landmarks. Whether you are here for a quick stopover or an extended vacation,
                a&nbsp;UAE visit visa&nbsp;is enough. Sheikh Zayed Grand Mosque, Yas Island, the oasis city of Al
                Ain, and much more are among the highlights.</p>

            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                <strong class="black">Sharjah: </strong>The Arab World's Cultural Capital&nbsp;
            </h3>
            <p>Sharjah was once one of the most affluent emirate. Renowned for its Arabic and Islamic
                architecture, libraries, museums, and cultural institutions. The city is recognized as the United
                Arab Emirates’ artistic and literary center. Sharjah Safari, a scenic location in the lap of
                nature, provides a rare chance for tourists and visitors to witness endemic wildlife. It is a
                massive wildlife attraction with more than 1000 birds and animals to watch.
                Explore Emirati culture by applying for a&nbsp;UAE visa online&nbsp;while relishing the culture and
                food in the Heart of Sharjah, or steer outdoors to lag on a Sharjah beach and soak up some
                sun.</p>

            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                <strong class="black">Ras al-Khaimah: </strong>The panoramic spectacle from the top
            </h3>
            <p>Ras al-Khaimah, the famous Gulf Tourism Capital, sits in the northmost part of the UAE. It
                has a lot to offer, the city with the most mesmerizing landscapes, refreshing coasts, terracotta
                desert planes, and a treasure trove of unrivaled culture. A 45-minute drive from Dubai,
                traveling between the emirates is accessible.
                It delivers an authentic travel experience to its visitors with sustainable development.
                By submitting a&nbsp;UAE tourist visa&nbsp;online, the wayfarer can explore the unique world's
                longest zipline, certified by Guinness World Records on Jebel Jais, The Ras Al Khaimah
                Museum, the 120-store Manar Mall, and the area's fantastic belly dancers are all worth a visit.
            </p>

            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                <strong class="black">Ajman: </strong>The Smallest of all Emirates
            </h3>
            <p>Ajman is well-known for its cultural attractions, such as the Dhow Yard, the Al Muwayhat,
                and the Ajman Museum. The growing economy of Ajman has numerous options for
                sightseeing, such as museums, beaches, forts, and shopping complexes. As a tourist
                destination, it offers its visitors a sunny vacation and an enriching historical experience. With
                some of the best sandy shorelines in the UAE, Ajman is a place to relax and laze under the
                sun. With a&nbsp;visa for UAE,&nbsp;you can easily explore fantastic activities like&nbsp;dolphin
                spotting, jet
                skiing, snorkelling, scuba diving, fishing, and other watersports, which is a favourite
                recreation in this area.</p>

            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                <strong class="black">Umm al-Quwain:</strong> The Emirate amidst a Futuristic Nation
            </h3>
            <p>The least populated out of the seven emirates, Umm al-Quwain,&nbsp;lies along the same Arabian
                coast as Dubai. Being a quiet city, traditional Arabian activities such as falconry, fishing, and
                camel racing are popular tourist attractions. It is a charming and rustic town where fishing is
                the primary profession amongst the locals.&nbsp;
                Dreamland Aqua Park, the UAE's largest water park, is the finest tourist destination. Due to
                no international airport in this emirate, you must fly to the nearest airport, Sharjah
                International Airport. A&nbsp;visa to the UAE&nbsp;will land you in this exciting emirate, where you
                can begin touring the country.</p>
            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                <strong class="black">Fujairah:</strong> The Artistic Business Hub
            </h3>
            <p>The business hub and commercial centre of the UAE, Fujairah, has serenity for all its visitors.
                The enormous Hajar Mountains divide it from the rest of the UAE, providing a stunning
                environment and a peaceful way of life. In addition to its rich culture, the city is a remarkable
                blend of a 70-kilometre-long sandy beach and steep mountain ranges. Due to its easterly
                position, Fujairah's climate is more temperate than that of Abu Dhabi and Dubai. Weekend
                tourists seeking to escape the heat are drawn to Fujairah's easygoing and serene ambience.&nbsp;</p>

            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                Applying for a UAE visa has become effortless. The steps to apply for a visa&nbsp;are;
            </h3>
            <p>1. Mention your nationality and the country from which you are traveling.
                <br>
                2. Choose the type of visa you need, select the travel insurance box, and click the "apply
                now" button to fill out the application form.
                <br>
                3. Pay the visa fee using a credit or debit card.
                Our team of visa specialists scrutinizes your application. You will be up to date on the status
                of your visa application. Within 24 to 72 working hours, your visa will be delivered to you at
                your provided email address.
                <br>
                The unique types of travel visas differ in visa validity and stay validity. You can apply
                for different types of visas that suit your preference at Insta Dubai Visa.&nbsp;
            </p>

            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                14 days single-entry visa
            </h3>
            <p>A 14-day single visa is a short-term visit visa. A single entry allows the traveler to enter and
                exit the country only once. The visa validity is for 60 days. The stay validity is for 14 days.
                14 days multiple entry visa
                A 14-day multiple-entry visa allows the applicant to enter and exit the country numerous
                times. It is suitable for business travelers. The&nbsp;UAE visa&nbsp;validity is 60 days, and the stay
                validity is 14 days.</p>


            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                30 days single-entry visa</h3>
            <p>This type of visa is suitable for people who are explorers. The stay validity is 30 days, and the
                visa permit validity is 60 days. One can enter and exit the country only once through this visa
                type.</p>

            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                30 days multiple-entry visa
            </h3>
            <p>The visa service will benefit you if you often travel to and from the UAE. The travel permit is
                valid for 60 days, and the stay cannot exceed 30 days. Our website provides information and
                applications for&nbsp;UAE tourist visas.&nbsp;&nbsp;</p>

            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">60 days
                single-entry visa</h3>
            <p>People who have families or have just initiated startups in UAE. This type of UAE visa will
                surely suit them. The visa validity and the stay validity are 60 days. One can enter and exit
                the country only once in 60 days.</p>

            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">
                60 days multiple-entry visa
            </h3>
            <p>This multiple-entry visa allows an applicant to enter and exit the country several times in 60
                days. The visa is valid for two months, and the maximum stay is also two months. One may
                apply for a&nbsp;UAE visit visa&nbsp;and stay at leisure.</p>

            <h3 class="row font-Weight-Normal marginFromBottom green borderFromBottom paddingFromBottom">Transit visa
            </h3>
            <p>Travelers who want to travel between the UAE and surrounding countries can stay for 96
                hours and utilize the transit visa. The requirements for acquiring a travel permit vary
                depending on one's nationality.&nbsp;</p>

            <p>Travelers planning to visit the UAE can&nbsp;apply for a UAE visa&nbsp;through the website. Simply
                log on to&nbsp;www.instdubaivisa.com. With a few simple steps and 24X7 visa assistance
                available via chat, email, and calls. You can quickly obtain your visa and explore the world's
                most loved tourist destination.</p>

        </div>
    </div>














    <div class="wrap gapping">
        <h3 class="reviewTitle row marginFromBottom paddingFromBottom mobPaddingTop"><span>UAE Visa - Frequently Asked
                Questions</span></h3>
        <div class="accordion_container">
            <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="0h"><span
                        class="accordprefix"></span><span class="accordprefix"></span>Do I require a visa to step into
                    the UAE?<span class="accordsuffix"><img src="https://media.instadubaivisa.com/images/plus.png"
                            alt="Expand" class="statusicon"></span><span class="accordsuffix"><img
                            src="https://media.instadubaivisa.com/images/plus.png" alt="Expand"
                            class="statusicon"></span></a>
                <div class="accordion_body" contentindex="0c" style="display: none;">Your requirement for a visa is
                    entirely dependent upon your nationality and country passport. However, you may have to apply in
                    advance. Applicants of developed countries such as the USA, UK, Canada, etc. can get a visa on
                    arrival. </div>
            </div>
            <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="1h"><span
                        class="accordprefix"></span><span class="accordprefix"></span>What steps should I follow?<span
                        class="accordsuffix"><img src="https://media.instadubaivisa.com/images/plus.png" alt="Expand"
                            class="statusicon"></span><span class="accordsuffix"><img
                            src="https://media.instadubaivisa.com/images/plus.png" alt="Expand"
                            class="statusicon"></span></a>
                <div class="accordion_body" contentindex="1c" style="display: none;">Instauaevisa facilitates its
                    travellers with the easiest steps. Click on the How to Apply tab in the menu and follow the steps.
                    If you come across any problem, you can speak to us through the 24x7 Chat Support or WhatsApp.
                </div>
            </div>
            <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="2h"><span
                        class="accordprefix"></span><span class="accordprefix"></span>How long am I eligible to stay in
                    the UAE?<span class="accordsuffix"><img src="https://media.instadubaivisa.com/images/plus.png"
                            alt="Expand" class="statusicon"></span><span class="accordsuffix"><img
                            src="https://media.instadubaivisa.com/images/plus.png" alt="Expand"
                            class="statusicon"></span></a>
                <div class="accordion_body" contentindex="2c" style="display: none;">Your stay validity will be based on
                    the type of visa you have chosen. Kindly click on the Visa Types tab in the menu and check the stay
                    validity.</div>
            </div>
            <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="3h"><span
                        class="accordprefix"></span><span class="accordprefix"></span>Which documents do I require
                    before travelling to the UAE? <span class="accordsuffix"><img
                            src="https://media.instadubaivisa.com/images/plus.png" alt="Expand"
                            class="statusicon"></span><span class="accordsuffix"><img
                            src="https://media.instadubaivisa.com/images/plus.png" alt="Expand"
                            class="statusicon"></span></a>
                <div class="accordion_body" contentindex="3c" style="display: none;">Your passport validity must be
                    atleast 6 months before the date of your journey. As per your nationality, you may have to arrange a
                    UAE visa as well. </div>
            </div>
            <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="4h"><span
                        class="accordprefix"></span><span class="accordprefix"></span>What is the maximum validity for a
                    UAE visa? <span class="accordsuffix"><img src="https://media.instadubaivisa.com/images/plus.png"
                            alt="Expand" class="statusicon"></span><span class="accordsuffix"><img
                            src="https://media.instadubaivisa.com/images/plus.png" alt="Expand"
                            class="statusicon"></span></a>
                <div class="accordion_body" contentindex="4c" style="display: none;">All the visas for UAE stand valid
                    for 60 days. However, your stay validity will be rested upon the type of visa you choose.</div>
            </div>
            <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="5h"><span
                        class="accordprefix"></span><span class="accordprefix"></span>What should be done on the arrival
                    in UAE?<span class="accordsuffix"><img src="https://media.instadubaivisa.com/images/plus.png"
                            alt="Expand" class="statusicon"></span><span class="accordsuffix"><img
                            src="https://media.instadubaivisa.com/images/plus.png" alt="Expand"
                            class="statusicon"></span></a>
                <div class="accordion_body" contentindex="5c" style="display: none;">
                    <ul class="row content">
                        <li class="row">On landing in UAE, produce all the travel documents before the immigration
                            officer at the Airport.</li>
                        <li class="row">Keep a copy of your passport while travelling within the UAE.</li>
                        <li class="row">Have proper information about the general rules laid down by the government.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="6h"><span
                        class="accordprefix"></span><span class="accordprefix"></span>Do I have to produce my passport
                    for stamping in UAE?<span class="accordsuffix"><img
                            src="https://media.instadubaivisa.com/images/plus.png" alt="Expand"
                            class="statusicon"></span><span class="accordsuffix"><img
                            src="https://media.instadubaivisa.com/images/plus.png" alt="Expand"
                            class="statusicon"></span></a>
                <div class="accordion_body" contentindex="6c" style="display: none;">Yes, the passport holding the
                    validity of 6 months should be produced at the immigration desk for stamping. </div>
            </div>
            <div class="row"> <a href="#" class="accordion_head submenuheader" headerindex="7h"><span
                        class="accordprefix"></span><span class="accordprefix"></span>When should I apply for a UAE
                    visa?<span class="accordsuffix"><img src="https://media.instadubaivisa.com/images/plus.png"
                            alt="Expand" class="statusicon"></span><span class="accordsuffix"><img
                            src="https://media.instadubaivisa.com/images/plus.png" alt="Expand"
                            class="statusicon"></span></a>
                <div class="accordion_body" contentindex="7c" style="display: none;">As per your requirement, you can
                    apply anytime. Remember that visa processing may vary from 24 to 72 working hours. In case of
                    immideate travel, you can opt for Express Service.</div>
            </div>
        </div>
    </div>


    <div class="wrap gapping">
        <div class="row greyBG borderFromAll">
            <div class="column-three paddingFromRight"><img
                    src="https://media.instadubaivisa.com/images/30-days-visa-multiple-entry.jpg" title="Insta UAE Visa"
                    alt="30 Day Multiple Entry Visa" width="100%"></div>
            <div class="column-seven paddingAllExtra label">
                <div class="row fontTwnty8 marginFromBottom green title-font">UAE Facts and Figures</div>

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
                    <div class="column-five">International Airports : Dubai (DXB), Abu Dhabi (AUH), Fujairah (FJR)</div>
                </div>
            </div>
        </div>


    </div>
</div>
<?php include_once "include/footer.php";?>