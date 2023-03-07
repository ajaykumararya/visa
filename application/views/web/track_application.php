<?php include_once "include/header.php"; ?>


<div class="row body-panel">
  
    <div class="wrap pos-Reltv"> <a href="index.php" class="pageClosebutton"><img src="<?=base_url()?>assets/website/images/delete-icon.png" width="32" height="32" alt="delete" title="delete"></a>
      <section class="row">
        <h1 class="row alignFromCenter font-Weight-Normal titleFont upperCase">Track Visa Application</h1>
        <div class="row marginFromTop mobImgfull-width"><img data-src="<?=base_url()?>assets/website/images/track_app.jpg" width="1170" height="200" title="Track Your Dubai Application Form" alt="Track Your Dubai Application Form" class="borderFromAll box_Sizing lazy" src="<?=base_url()?>assets/website/images/track_app.jpg"></div>
        <div class="column-eight container">
          <h2 class="row alignFromCenter font-Weight-Normal titleFont paddingAll black borderFromBottom marginFromBottom">Fill your reference number in the field below to track status.</h2>
          <div class="row marginFromBottom">
          <form name="track" action="track_application.php" method="get" onsubmit="return validateTrck(this);">
            <div class="column-five container greenBG paddingAll round-Edges ipad75">
              <div class="label mobRow mobmarginFromTop column-three white paddingFromLeft">Reference Number</div>
              <div class="pull_left mobRow column-five">
                <input type="text" name="ref_no" id="ref_no" class="form-control-input marginFromBottomNone" placeholder="Type Reference Number" "="" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required="">
              </div>
              <div class="pull_left mobmarginFromTop column-one" style="padding-left:5px;">
                <input type="submit" name="submit" value="GO" class="button primary-button marginFromBottomNone mobmarginFromTop margin Left mobmargin-0">
              </div>
            </div>
          </form>
          </div>
          <div class="row alignFromCenter marginFromBottom line-height-reg">
            <p class="row marginFromBottom"></p>
          </div>
                    
          <div class="row marginFromTop paddingAllExtra">
          <h2 class="row alignFromCenter font-Weight-Normal titleFont paddingAll black borderFromBottom marginFromBottom">Know the status of your Dubai Visa Application </h2>
          <p class="row">Travel requires a lot of planning. And knowing how much time your visa will take to process helps you easily organize hotels, flights, and travel itineraries. Dubai is a hot favourite amongst wanderers</p>
          
          <p style="font-weight: 800" class="row marginFromTop font-Weight-Normal">How can one enjoy an easy trip to Dubai?</p>
          <p class="row">A well-planned Dubai trip can be a highlight of your travel diaries. So if you know your Dubai visa application status, you can shape a remarkable journey to your dream destination.</p>
          
          <p class="row paddingFromTop">Different Dubai visas enable travellers to make a logical move to facilitate a seamless journey. Trips can be a fun thing if:</p>
          <div class="points paddingFromLeft paddingFromBottom">
          <ul>
          <li>Applicants enjoy the privilege to apply for a visa from the comfort of their couch.</li>
          <li>Applicants can fill-up and submit the online visa application form.</li>
          <li>Applicants can easily upload required documents and make secured payments.</li>
          <li>Applicants can track the <strong>status of their online visa application</strong>.</li>
          </ul>
          </div>
          
          <p style="font-weight: 800" class="row marginFromTop font-Weight-Normal">How to get Dubai visa application status? </p>
          <p class="row">Applicants enjoy all the above at InstaDubaivisa.com. The hassle-free Dubai visa process at InstaDubaivisa.com provides you with a facility to track your <strong>Dubai visa application</strong> status. The live tracking system at Insta Dubai visa is a highly advanced tool that enables travellers to sync with their visa processing status. </p>
          
          <p class="row paddingFromTop"><strong>It's simple...</strong><br>
Applicants can track their applications to stay updated about their visa status. Here you can enter the reference number to <strong>track your Dubai visa</strong> and press 'Go'. You will reach the live and updated status of your visa application.  
</p>
          </div>
        </div>
      </section>
    </div>
    
  </div>

<?php include_once "include/footer.php"; ?>