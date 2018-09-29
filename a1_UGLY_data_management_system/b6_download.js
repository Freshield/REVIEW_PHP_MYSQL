window.onload = initPage;
interval_object = null;

function initPage() {
    interval_object = setInterval("getDetails()", 200)

    var place = document.getElementById("place").innerHTML
    var query = document.getElementById("query").innerHTML
    request = createRequest();
    if (request == null) {
        alert("Unable to create request");
        return;
    }
    var url= "b6_run_script.php?place=" + place + "&query=" + query;
    request.open("GET", url, true);
    request.onreadystatechange = do_nothing();
    request.send(null);
}

function createRequest() {
    try {
        request = new XMLHttpRequest();
    } catch (tryMS) {
        try {
            request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (otherMS) {
            try {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (failed) {
                request = null;
            }
        }
    }
    return request;
}

function getDetails() {
    request = createRequest();
    if (request == null) {
        alert("Unable to create request");
        return;
    }
    var url= "b6_get_details.php";
    request.open("GET", url, true);
    request.onreadystatechange = displayDetails;
    request.send(null);


}

function displayDetails() {
    if (request.readyState == 4) {
        if (request.status == 200) {
            detailDiv = document.getElementById("description");
            detailDiv.innerHTML = request.responseText;
            if (request.responseText.includes('Done copy data')){
                window.clearInterval(interval_object);
                var url= "b6_clean_db.php";
                request.open("GET", url, true);
                request.onreadystatechange = do_nothing;
                request.send(null);
            }
        }
    }
}

// function displayDebug() {
//     if (request.readyState == 4) {
//         if (request.status == 200) {
//             debugDiv = document.getElementById("debug");
//             debugDiv.innerHTML = request.responseText;
//         }
//     }
// }

function do_nothing() {

}