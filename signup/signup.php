<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,500&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-xVVam1KS4+Qt2OrFa+VdRUoXygyKIuNWUUUBZYv+n27STsJ7oDOHJgfF0bNKLMJF" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="signup.css" />
    <title>Sign Up</title>
</head>

<body>
    <nav class="navmenu">
        <div class="max-width">
            <div class="logo"><a href="../index.php">Tech<span>ies</span> Foun<span>dation.</span></a></div>
            <ul class="menu">
                <li class="item"><a href="../index.php">Home</a></li>
                <li class="item"><a href="../About/about.php">About</a></li>
                <li class="item"><a href="login.php">Donate</a></li>
                <li class="item"><a href="../login/login.php">Login</a></li>
                <li class="item"><a href="signup.php">Sign Up</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        </div>
    </nav>
    <section >
        <div class="custom-form-header">SIGN UP</div>
        <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "emptyfields"){
                echo '<p class= "signuperror">Please fill in all fields</p>';
            }
            elseif($_GET['error'] == "invalidemail"){
                echo '<p class= "signuperror">The Email field is not a valid e-mail address.</p>';
            }
            elseif($_GET['error'] == "invalidemail&password"){
                echo '<p class= "signuperror">Invalid Email address and Password</p>';
            }
            elseif($_GET['error'] == "emailmismatch"){
                echo '<p class= "signuperror">The e-mail and confirmation e-mail do not match.</p>';
            }
            elseif($_GET['error'] == "invalidpassword"){
                echo '<p class= "signuperror">Invalid password!!! Your password must include a digit and be at least eight characters long.</p>';
            }
            elseif($_GET['error'] == "passwordmismatch"){
                echo '<p class= "signuperror">Your password and confirmation password do not match</p>
                      <p class= "signuperror">Your password must include a digit and be at least eight characters long.</p>';
            }
            elseif($_GET['error'] == "emailalreadyexist"){
                echo '<p class= "signuperror">Email already exist, use another email</p>';
            }else{
                echo '<p class= "signuperror">Data base error</p>';
            }
        }
        elseif (isset($_GET['signup'])) {
            if($_GET['signup'] == "success"){
                echo '<p class= "signupsuccess">Signup Sucessful</p>';
            } 
        }
        ?>
        <form class="main-form"novalidate action="../include/signup.php" method="POST">
            <div class="row m-0 form-title">
                <div class="col-md-6 form">
                    <div class="d-md-flex form-group">
                        <label class="col-md-4 form-control-label mb-0" for="firstname">First Name</label>
                        <input type="text" id="firstname" placeholder="First Name" name="firstname"
                            class="col-md-7 form-control" required>
                    </div>
                </div>
                <div class="col-md-6 form">
                    <div class="d-md-flex form-group">
                        <label class="col-md-4 form-control-label mb-0" for="lastname">Last Name</label>
                        <input type="text" placeholder="Last Name" name="lastname" id="lastname"
                            class="col-md-7 form-control" required>
                    </div>
                </div>
            </div>
            <div class="row m-0 form-title">
                <div class="col-md-6 form">
                    <div class="d-md-flex form-group">
                        <label class="col-md-4 form-control-label mb-0" for="email">E-mail </label>
                        <input type="email" id="email" placeholder="E-mail " name="email" class="col-md-7 form-control" required>
                    </div>
                </div>
                <div class="col-md-6 form">
                    <div class="d-md-flex form-group">
                        <label class="col-md-4 form-control-label mb-0" for="c_email">Confirm E-mail</label>
                        <input type="email" id="c_email" placeholder="Confirm E-mail" name="c-email"
                            class="col-md-7 form-control" required>
                    </div>
                </div>
            </div>
            <div class="row m-0 form-title">
                <div class="col-md-6">
                    <div class="d-md-flex form-group">
                        <label class="col-md-4  form-control-label mb-0">Password</label>
                        <input type="password" id="viewpassword" placeholder="Password" name="pwd"
                            class="col-md-7  form-control" required>
                        <span class="password-toggle"></span>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="d-md-flex form-group">
                        <label class="col-md-4  form-control-label mb-0">Confirm Password</label>
                        <input type="password" id="passwordview" placeholder="Confirm Password" name="c-pwd"
                            class="col-md-7  form-control" required>
                        <span class="toggle-password"></span>
                    </div>
                </div>
            </div>
            <div class="row m-0 form-title">
                <div class="col-md-6 ">
                    <div class="d-md-flex form-group">
                        <label class="col-md-4  form-control-label mb-0" for="phone">Phone Number</label>
                        <input type="text" id="phone" placeholder="Phone Number" name="phone"
                            class="col-md-7  form-control" required>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="d-md-flex form-group">
                        <label class="col-md-4 form-control-label mb-0" for="form_country">Country</label>
                        <select placeholder="Country" name="country" class="col-md-7 form-control"
                            id="form_country" required>
                            <option value="">Country</option>
                            <option value="GB">United Kingdom</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="VG">British Virgin Islands</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CD">Congo, Democratic Republic of the</option>
                            <option value="CG">Congo, Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Côte D'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="TP">East Timor</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard and McDonald Islands</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="XK">Kosovo</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Laos</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macau</option>
                            <option value="MK">Macedonia</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia</option>
                            <option value="MD">Moldova</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="KP">North Korea</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territories</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russia</option>
                            <option value="RW">Rwanda</option>
                            <option value="GS">S. Georgia and S. Sandwich Islands</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="VC">Saint Vincent and The Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="KR">South Korea</option>
                            <option value="ES">Spain</option>
                            <option value="SS">South Sudan</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SH">St. Helena</option>
                            <option value="PM">St. Pierre and Miquelon</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syria</option>
                            <option value="TW">Taiwan</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania</option>
                            <option value="TH">Thailand</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UY">Uruguay</option>
                            <option value="UM">US Minor Outlying Islands</option>
                            <option value="VI">US Virgin Islands</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Vietnam</option>
                            <option value="WF">Wallis and Futuna Islands</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <p class=" col-10 p-3 m-auto welcome_note">Welcome to your one-stop self-service resource! Here, you can
                    make the most of your
                    life-changing giving experience. The first step to managing your giving details is to create an
                    account.
                    Fill out the fields above and click here for our <a href="#">privacy policy</a>.
                </p>
            </div>
            <div class="row m-0 p-0">
                <button type="submit" id="submit" name="signup-submit" class="btn btn-primary col-6 m-auto">SIGN UP</button>
            </div>
            <div class="row m-0 p-0">
                <p class="text_registered col-6 m-auto">Already registered?
                    <a href="../login/login.php">Log in here</a>
                </p>
            </div>
        </form>
    </section>
    <script type="text/javascript" src="../jquery-3.5.1.js"></script>
    <script type="text/bootstrap" src="../bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
    <script src="signup.js"></script>
</body>
</html>