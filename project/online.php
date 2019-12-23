<?php
session_start();
require('db.php');
$con = getConnection();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Online Classes </title>
</head>
<script type="text/javascript">
    function f0()
    {
        var comment= document.getElementById('comment');
        comment.value =document.getElementById('registerdiv').innerHTML = this.responseText;}  

    }
</script>

<body>
    <form method="POST" action="commentinsert.php">
        <?php
        $sql = 'select * from onlinevideo';
        $result = mysqli_query($con, $sql);
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <table align="center" border="1" bgcolor="SeaShell">
                <h2 align="center" style="border:2px solid DarkMAgenta;"> <?php echo $data['description']; ?> </h2>

                <tr>
                    <td><video width='530' height='240' controls>
                            <source src='<?php echo $data['videolink']; ?> ' type='video/mp4'>
                        </video>
                    </td>
                    <?php
                    $video = $data['videoid'];
                    $sqlcom = "select * from comments where videoid='{$video}'";
                    $resultcom = mysqli_query($con, $sqlcom);
                    while ($row = mysqli_fetch_assoc($resultcom)) {
                    ?>
                <tr>

                    <td> <?php echo $row['postedby'] ?> wrote: <?php echo $row['comment'] ?> <input type=button name="delete" value="delete" align="right"> <input type=button name="Warning" value="Report Admin" align="right"> </td>

                </tr>

            <?php
                    }
            ?>

            <tr>
<td><input type="text" name="comment" id="comment" placeholder="Enter your comment.."> <input type="button" name="submit" value="Comment" onclick="f0()" ></td>
<div id="commmentdiv"> </div>
            </tr>
            </table>
        <?php
        }
        ?>
        <table>
            <td colspan="2" align="right"> <a href="subject.html"> BACK </a></td>
            </tr>

        </table>
    </form>
</body>

</html>