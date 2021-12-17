
function getval() {

    var filter = document.getElementById("filterText").value;
    
    var todayDate = today();
    var previousDayDate = previousDay();
    var lastTwoDayDate = lastTwoDay();
    var lastThreeDayDate = lastThreeDay();
    var lastFourDayDate = lastFourDay();
    var lastFiveDayDate = lastFiveDay();
    var lastSixDayDate = lastSixDay();
    var lastSevenDayDate = lastSevenDay();

    if (filter === todayDate) {
        console.log('filter 0', filter);
       let formData = new FormData();
        formData.append('filter', filter);
        $.ajax({
            url: "/admin/todayData",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,

            success: function (data) {
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
        })
    } else if (filter === previousDayDate) {
        console.log('filter 1', filter);
        let formData = new FormData();
        formData.append('filter', filter);
        $.ajax({
            url: "/admin/PreviousData",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,

            success: function (data) {
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
        })
    } else if (filter === lastTwoDayDate) {
        console.log('filter 2', filter);
        let formData = new FormData();
        formData.append('filter', filter);
        formData.append('today', todayDate);
        $.ajax({
            url: "/admin/lastTwoDaysData",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,

            success: function (data) {
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
    }else {
        // console.log(filter);
        let formData = new FormData();
        formData.append('filter', filter);
        $.ajax({
            url: "#",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,

            success: function (data) {
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

}


function today() {
    let d = new Date();
    d.setDate(d.getDate());
  return d.toISOString().split('T')[0];
}

function previousDay() {
    let d = new Date();
    d.setDate(d.getDate() - 1);
  return d.toISOString().split('T')[0];
}
function lastTwoDay() {
    let d = new Date();
    d.setDate(d.getDate() - 2);
  return d.toISOString().split('T')[0];
}
function lastThreeDay() {
    let d = new Date();
    d.setDate(d.getDate() - 3);
  return d.toISOString().split('T')[0];
}
function lastFourDay() {
    let d = new Date();
    d.setDate(d.getDate() - 4);
  return d.toISOString().split('T')[0];
}
function lastFiveDay() {
    let d = new Date();
    d.setDate(d.getDate() - 5);
  return d.toISOString().split('T')[0];
}
function lastSixDay() {
    let d = new Date();
    d.setDate(d.getDate() - 6);
  return d.toISOString().split('T')[0];
}
function lastSevenDay() {
    let d = new Date();
    d.setDate(d.getDate() - 7);
  return d.toISOString().split('T')[0];
}