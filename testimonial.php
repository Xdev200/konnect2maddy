<style>
    blockquote{
        margin: 80px 0;
        padding-left: 1.5rem;
        border-left: 5px solid #448AFF; 
    }
</style>

<?php
    $obj = new Db_Connect();
    $fetch = mysql_query("select * from testimonial where is_show='YES'");
    echo " <div id='cbp-qtrotator' class='cbp-qtrotator'>";
    $count=0;
    while($fetch_row=mysql_fetch_assoc($fetch))
    {
        $count++;
    echo "
            <div class='cbp-qtcontent'>
                  <img src='$fetch_row[img_loc]' alt=$fetch_row[img_loc]>
                <blockquote>
                  <p>&nbsp;$fetch_row[your_msg]</p>
                  <footer> $fetch_row[name]</footer>
                </blockquote>
            </div>
        
    ";
    }
    echo "</div>";
    
    if($count==0)
    {
        echo "<h1 class='blue-text center'>Write Something About Me</h1>";
    }
?>