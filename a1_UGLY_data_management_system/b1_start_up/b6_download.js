window.onload = initPage;
interval_object = null;
var place = None;

function initPage() {
    interval_object = setInterval("getDetails()", 200)

    place = document.getElementById("place").innerHTML
    var query = document.getElementById("query").innerHTML
    request = createRequest();
    if (request == null) {
        alert("Unable to create request");
        return;
    }
    var url= "download_run_copy.php?place=" + place + "&query=" + query;
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
    var url= "download_get_detail.php";
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
                var url= "download_clean_temp_db.php";
                request.open("GET", url, true);
                request.onreadystatechange = do_nothing;
                request.send(null);

                unmountDiv = document.getElementById("unmount");
                unmountDiv.innerHTML = "" +
                    "<form enctype=\"multipart/form-data\" action=\"b6_download.php\"\n" +
                    "          id=\"unmount\" method=\"post\">\n" +
                    "是否要卸载磁盘: " + place + "<br>\n" +
                    "<input type=\"hidden\" name=\"place\" value=\"" + place + "\">\n"
                    "<input type=\"submit\" name=\"submit\">\n" +
                    "</form>"
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