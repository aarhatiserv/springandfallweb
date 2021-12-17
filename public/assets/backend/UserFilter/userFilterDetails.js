
function getval() {

    var filter = document.getElementById("filterText").value;
    
    if (filter === today()) {
        alert(today());
    }
    // console.log(filter);
    let formData = new FormData();
    formData.append('filter', filter);
    $.ajax({
        url: "/admin/PreviousData",
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,

        success: function(data) {
            var res = JSON.parse(data);
            let dt = [];
            // $('#myTable').hide();
            if (res.status !== undefined) {

                if (res.data.length == 0) {
                    $('#myTable').html("No Record Found");

                } else {
                    res.data.map((item) => (
                        dt.push(
                            ` <tr>
                                                <td>` + item.name + `</td>
                                                <td>` + item.email + `</td>

                                                <td>` + item.phone + `</td>
                                                <td>` + item.registered + `</td>
                                            </tr>`
                        )
                    ));
                    // $("#listColleges").html(dt);
                    $('#myTable').html(dt);

                }
            }
        },
    });

}


function today() {
    let d = new Date();
  d.setDate(d.getDate());
  return d.toISOString().split('T')[0];
}