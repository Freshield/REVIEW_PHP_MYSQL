window.onload = initPage;
interval_object = null;

function initPage() {
    interval_object = setInterval("getDetails()", 1000)
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
    var url= "t11_getDetails.php";
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
                detailDiv.innerHTML += '<br>lol<br>'
                var url= "t11_clean_db.php";
                request.open("GET", url, true);
                request.onreadystatechange = do_nothing;
                request.send(null);
            }
        }
    }
}

function do_nothing() {

}