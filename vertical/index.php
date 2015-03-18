<?php include('../horizontal/template/header.php'); ?>

                    <h1 class="page-header">Vertical Prototype</h1>
                    <div class="table-responsive">


                        <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#sellModal" role="button">Create New Item</a>
                        <br /><br />
                        <table class="table table-hover">
                            <tr>
                                <th>image</th><th>title</th><th>description</th><th>date</th><th>price</th>
                            </tr>

                            <?php
                            // Create connection
                            $con = mysqli_connect('sfsuswe.com', 's14g06', 'Magic6', 'student_s14g06');
                            // Check connection
                            if (mysqli_connect_errno($con)) {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                            $result = mysqli_query($con, "SELECT * FROM `items` where `approved`  order by `premium` desc, `date` desc");

                            echo "<tr>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<td>";
                                //               $im = imagecreatefromstring($row['image']);
                                $im = "data:image/jpeg;base64," . base64_encode($row['image']);
                                
//                                $im = new Imagick($im1);
//                                $im -> thumbnailImage (150,150,true);
                                
//                                $imageprops = $im->getImageGeometry();
//                                $width = $imageprops['width'];
//                                $height = $imageprops['height'];
//                                if ($width > $height) {
//                                    $newHeight = 80;
//                                    $newWidth = (80 / $height) * $width;
//                                } else {
//                                    $newWidth = 80;
//                                    $newHeight = (80 / $width) * $height;
//                                }
//                                $im->resizeImage($newWidth,$newHeight, imagick::FILTER_LANCZOS, 0.9, true);
                                        
                                echo '<a href="'
                                . $im
                                . '"><img src="'
                                . $im
                                . '" class="img_thumb img-rounded" alt="'
                                . $row['title']
                                . '"/></a>';

//                                echo '<a href="data:image/jpeg;base64,'
//                                . base64_encode($row['image'])
//                                . '"><img src="data:image/jpeg;base64,'
//                                . base64_encode($row['image'])
//                                . '" class="img-rounded" alt="'
//                                . $row['title']
//                                . '"/></a>';
                                //              echo '<a href="'$im'"><img src="'$im'" height="100"width="100"alt="'$row['title']'"/></a>';
                                echo "</td><td>";
                                echo $row['title'];
                                echo "</td><td>";
                                echo $row['description'];
                                echo "</td><td>";
                                echo $row['date'];
                                echo "</td><td>";
                                echo "$" . $row['price'];
                                echo "</td></tr>";
                            }
                            //echo "</table>";

                            mysqli_close($con);
                            ?>
                        </table>
                    </div>

                    <p>Hello!!!!</p>

 <?php include('../horizontal/template/footer.php'); ?>

        <!-- form submit -->
        <script type="text/javascript" >
            $('#sellform form').on('submit', function() {

                var $form = $(this);

                $.ajax({
                    url: $form.attr('action'),
                    type: $form.attr('method'),
                    data: $form.serialize(),
                    success: function(data) {
                        // console.log(data);
                        // $('span').show(); // etc
                    }
                });

                return false;
            });
//            $(function() {
//                $("#sellbutton").click(function() {
//                    var title = $("#title").val();
//                    var desc = $("#desc").val();
//                    var price = parsefloat($("#price").val());
//                    var image = $("#image").val();
//                    var dataString = 'title=' + title + '&desc=' + desc + '&price=' + price + '&image=' + image;
//
//                    if (title == '' || description == '' || price == '' || image == '')
//                    {
//                        $('.success').fadeOut(200).hide();
//                        $('.error').fadeOut(200).show();
//                    }
//                    else
//                    {
//                        $.ajax({
//                            type: "POST",
//                            url: "join.php",
//                            data: dataString,
//                            success: function() {
//                                $('.success').fadeIn(200).show();
//                                $('.error').fadeOut(200).hide();
//                            }
//                        });
//                    }
//                    return false;
//                });
//            });
        </script>
    </body>
</html>