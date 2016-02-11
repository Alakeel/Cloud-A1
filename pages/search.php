<link href="../assets/css/style2.css" rel="stylesheet">
Search For: <input name="searchquery"  id="myText" placeholder="Ex. (UOIT,lova,fun)" type="text" size="20" maxlength="30">
    <br/>
    <input  type="submit" onclick="myFunction()" value="Search"
           class="btn-danger btn-large"> <br/><br/>

<div id="instaHead" hidden>
    <h3 id="results">Results</h3>
    <!-- instagram pics -->
    <div id="instagram" class="imgs"></div>

    <div class='clearfix'></div>

    <!-- button -->
    <div id="showMore">
        <div class='clearfix '><a id='more' next_url='"+next_url+"' href='#'>[More]</a></div>
    </div>

</div>