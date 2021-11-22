
<div class="container-fluid flags my-5">
    <div class="row">
        <div class="owl-carousel" id="flags-carousel">
        
            <div class="col-sm-12 text-center col-lg-12" onclick="javascript:flag('Canada')">
                <img class="img-fluid countryFlags" alt="#" src="assets/images/flags/canada.png" alt="canada" width="640" height="360" title="canada" /><br>
            </div>
            
            <div class="col-sm-12 text-center col-lg-12" onclick="javascript:flag('France')">
                <img class="img-fluid countryFlags" alt="#" src="assets/images/flags/france.png" alt="france" width="640" height="360" title="france" /><br>
            </div>
            <div class="col-sm-12 text-center col-lg-12" onclick="javascript:flag('Germany')">
                <img class="img-fluid countryFlags" alt="#" src="assets/images/flags/germany.png" alt="germany" width="640" height="360" title="germany" /><br>
            </div>
            <div class="col-sm-12 text-center col-lg-12" onclick="javascript:flag('USA')">
                <img class="img-fluid countryFlags" alt="#" src="assets/images/flags/usa.png" alt="usa" width="640" height="360" title="usa" /><br>
            </div>
            <div class="col-sm-12 text-center col-lg-12" onclick="javascript:flag('UK')">
                <img class="img-fluid countryFlags" alt="#" src="assets/images/flags/uk.png" alt="uk" width="640" height="360" title="uk" /><br>
            </div>
            <div class="col-sm-12 text-center col-lg-12" onclick="javascript:flag('AUS')">
                <img class="img-fluid countryFlags" alt="#" src="assets/images/flags/aus.png" alt="aus" width="640" height="360" title="aus" /><br>
            </div>
        </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript">
    function flag(flag){
        window.location.href = 'http://localhost:8080/consultation/'+flag;

        // $.ajax({
        // url: '/api/flag/' + flag,
        // type: 'GET',
        // success: function(res) {
        //     // alert(res);
          
            // let collegeData = JSON.parse(res);
            // let dt = [];
            // console.log('res', collegeData);
            // if (collegeData.status !== undefined) {

            //     if (collegeData.data.length == 0) {
            //         $('.flag').html("No Record Found");
            //         $('.flag').prop("disabled", false);
            //     } else {
            //         collegeData.data.map((item) => (
            //             dt.push(
            //                 ` <li class="media my-4 bg-light">
            //                     <img class="p-3 image" style="max-width: 20%; height: 167px;" src="uploads/CollegesImage/` + item.image + `" class="mr-3" alt="..."
            //                         title="hrl" width="" height="" />
            //                     <div class="media-body py-3">
            //                         <div class="row">
            //                             <div class="col-md-8">
            //                                 <p class="mt-0 mb-1 media-heading pb-2 h5_2_P">` + item.names + `</p>
            //                                 <p>` + item.country + ` </p>
            //                                 <p>` + item.courses + ` </p>
            //                             </div>
            //                             <div class="col-md-4 d-flex justify-content-end align-items-center ">
            //                                 <div class="apply px-5">
            //                                     <p class="h5_2_P_Days">5 Days to go</p>
            //                                     <button class="btn applyNow">Apply now</button>
            //                                 </div>
            //                             </div>
            //                         </div>
            //                     </div>
            //                 </li>`
            //             )
            //         ));
            //         // $("#listColleges").html(dt);
            //         $('.flag').html(dt);
            //         $('.flag').prop("disabled", false);
                    
            //     }
            // }
    //     },
    //     error: function(xhr, ajaxOptions, thrownError) {
    //         var errorMsg = 'Ajax request failed: ' + xhr.responseText;
    //         console.log(`error`, err);
    //         $('.ajaxError').html("Countries");
    //         $('.ajaxError').prop("disabled", false);
    //         if (err) {
    //             swal("Oh noes!", "The AJAX request failed!", "error");
    //         }
    //     }
    // });
}
    </script>