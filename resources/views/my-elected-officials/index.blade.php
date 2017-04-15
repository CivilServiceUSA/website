@extends('layouts.base')

@section('body')

<!-- Header-->
<header data-background="{{ asset('img/header/civil-services-bg.jpg') }}" class="intro">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1>Find My Elected Officials</h1>
        <h4>Get Contact Information &amp; Political History.</h4>
        <ul class="list-inline lead">
            <li><button id="detect-location" class="btn btn-border btn-lg page-scroll ">Detect Location</button></li>
            <li><a href="#enter-address" class="btn btn-border btn-lg page-scroll">Enter Address</a></li>
        </ul>
        <p id="fetching-location">&nbsp;</p>
    </div>
</header>

<section id="enter-address">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3>Find My Elected Officials</h3>
                <p class="no-pad">
                    To give you the most accurate information, we need to know where you live.  House Representatives
                    can only support people from within their district.  For this reason, we need your Home Address to
                    determine your exact location. <a href="/privacy-policy">We do not collect personal information</a>,
                    and your address is only used to determine your district's Representative.
                </p>
                <h2 class="classic">- Civil Services Team</h2>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <h3>My Address</h3>
                <form id="find-officials" novalidate="" onsubmit="return CivilServices.geoCodeAddress(event);">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="find-officials-address" class="sr-only control-label">Street Address</label>
                            <input id="find-officials-address" type="text" placeholder="Street Address" pattern="[a-zA-Z0-9-'. ]{5,}" required="" data-validation-pattern-message="Address should be at least five characters" data-validation-required-message="Please Enter Your Street Address" class="form-control input-lg">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="find-officials-city" class="sr-only control-label">City</label>
                            <input id="find-officials-city" type="text" placeholder="City" pattern="[a-zA-Z-'. ]{5,}" required="" data-validation-pattern-message="City should be at least five characters" data-validation-required-message="Please Enter Your City" class="form-control input-lg">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="find-officials-state" class="sr-only control-label">State</label>
                            <select id="find-officials-state" name="state" size="1" class="form-control input-lg short" required="" data-validation-required-message="Please Select your State">
                                <option value="">State</option>
                                <option value="AK">AK</option>
                                <option value="AL">AL</option>
                                <option value="AR">AR</option>
                                <option value="AZ">AZ</option>
                                <option value="CA">CA</option>
                                <option value="CO">CO</option>
                                <option value="CT">CT</option>
                                <option value="DC">DC</option>
                                <option value="DE">DE</option>
                                <option value="FL">FL</option>
                                <option value="GA">GA</option>
                                <option value="HI">HI</option>
                                <option value="IA">IA</option>
                                <option value="ID">ID</option>
                                <option value="IL">IL</option>
                                <option value="IN">IN</option>
                                <option value="KS">KS</option>
                                <option value="KY">KY</option>
                                <option value="LA">LA</option>
                                <option value="MA">MA</option>
                                <option value="MD">MD</option>
                                <option value="ME">ME</option>
                                <option value="MI">MI</option>
                                <option value="MN">MN</option>
                                <option value="MO">MO</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="NC">NC</option>
                                <option value="ND">ND</option>
                                <option value="NE">NE</option>
                                <option value="NH">NH</option>
                                <option value="NJ">NJ</option>
                                <option value="NM">NM</option>
                                <option value="NV">NV</option>
                                <option value="NY">NY</option>
                                <option value="OH">OH</option>
                                <option value="OK">OK</option>
                                <option value="OR">OR</option>
                                <option value="PA">PA</option>
                                <option value="RI">RI</option>
                                <option value="SC">SC</option>
                                <option value="SD">SD</option>
                                <option value="TN">TN</option>
                                <option value="TX">TX</option>
                                <option value="UT">UT</option>
                                <option value="VA">VA</option>
                                <option value="VT">VT</option>
                                <option value="WA">WA</option>
                                <option value="WI">WI</option>
                                <option value="WV">WV</option>
                                <option value="WY">WY</option>
                                <option value="AS">AS</option>
                                <option value="FM">FM</option>
                                <option value="GU">GU</option>
                                <option value="MH">MH</option>
                                <option value="MP">MP</option>
                                <option value="PR">PR</option>
                                <option value="PW">PW</option>
                                <option value="VI">VI</option>
                                <option value="AA">AA</option>
                                <option value="AE">AE</option>
                                <option value="AP">AP</option>
                                <option value="AB">AB</option>
                                <option value="BC">BC</option>
                                <option value="MB">MB</option>
                                <option value="NB">NB</option>
                                <option value="NL">NL</option>
                                <option value="NS">NS</option>
                                <option value="NT">NT</option>
                                <option value="NU">NU</option>
                                <option value="ON">ON</option>
                                <option value="PE">PE</option>
                                <option value="QC">QC</option>
                                <option value="SK">SK</option>
                                <option value="YT">YT</option>
                            </select>
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="find-officials-zipcode" class="sr-only control-label">Zip Code</label>
                            <input id="find-officials-zipcode" type="text" placeholder="Zip Code" required="" maxlength="5" pattern="[0-9]{5}" data-validation-pattern-message="Zip Code must be five digits ( e.g. 10001 ) " data-validation-required-message="Please enter Zip Code" class="form-control input-lg short">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>

                    <div id="success"></div>
                    <button type="submit" class="btn btn-dark">Find Officials</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
