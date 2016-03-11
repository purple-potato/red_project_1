//Trying out jquery
function uno(){

    var text = "";
    var i = 0;
    var countto = 90;
    var t = 0;
    var count2 = countto - 1; //Human numbers exclude 0 when counting, computer numbers do not.
    while(i < countto) {
        setTimeout(function() {
            text = " loading " + t + "/" + count2 + " <br>";
            document.getElementById("demo").innerHTML = "";
            document.getElementById("demo").innerHTML = text;
            $("div.demo-container").html("<p>number: <em>" + t + "</em></p>");

            if(t == count2) {
                document.getElementById("demo").innerHTML = "";
                $("div.demo-container").html("<p>This line will count to " + count2 + "</em></p>");
            }//when finish run this
            t++
        }, 1000 * i); //delay between each loop

        i++;
    }//loop itsel
}