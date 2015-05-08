(function() {
    var req;
    var iTotalPage = 6;
    var iWait = 5000;
    var iNextStep = -1;
    
    var cache = [];
    
    // your code here
    window.onload = function() {
        loadStep(1, true);
        
        for (var j = 1; j <= iTotalPage; j++) {
            var lid = "link" + j;
            var a = document.getElementById(lid);
            a.onclick = function() {
                loadStep(parseInt(this.id.substring(4)), true);
                return false;
            }
        }
    };
    
    function loadStep(i, show) {
        if (!isLoaded(i)) {
            req = new XMLHttpRequest();
            var url = "index.php?step=" + i;
            req.open("GET", url, true);
            req.send(null);
            req.onreadystatechange = function() {
                if (req.readyState === 4 &&
                    req.status == 200) {
                    var content = req.responseText;
                    cache[i] = content;
                    if (show) {
                        showStep(i);
                    }
                } 
            };
        } else {
            if (show) {
                showStep(i);
            }
        }
        iNextStep = i+1;
        if (iNextStep <= iTotalPage) {
            setTimeout(loadNextStep, iWait);
        }
    }
    
    function loadNextStep() {
        if (iNextStep <= iTotalPage) {
            loadStep(iNextStep, false);
        }
    }
        
    function showStep(cur) {
        var page = document.getElementById("curr");
        page.innerHTML = cache[cur];
        for (var i = 1; i <= iTotalPage; i++) {
            var link = document.getElementById("link"+i);
            if (i === cur) {
                link.className = "current";
            } else {
                link.className = "";
            }
        }
    }
    
    function isLoaded(i) {
        return cache[i] !== undefined;
    }    
}());