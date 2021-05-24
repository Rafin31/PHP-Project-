// ****************************************AJAX********************

"use strict"

function ajax() {
    const keyword = document.getElementById('search').value;
    const xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controller/productSearchAjax.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('keyword=' + keyword);
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (keyword == '') {
                document.getElementById('foods').style.display = 'block';
            } else {
                document.getElementById('foods').style.display = 'none';
                document.getElementById('search_result').style.display = 'block';
                document.getElementById('search_result').innerHTML = this.responseText;
            }

        } else {
            document.getElementById('search_result').style.display = 'none';

        }

    }
}