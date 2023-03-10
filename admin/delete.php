


    <?php
    include "header.php";
    // include "sidebar.php";

    if (isset($_GET['delete'])) {

        echo "<div class = 'my-5 ml-5'></div>";

        function delete($id, $option)
        {
            include "z_db.php";
            $query = "DELETE FROM `$option` WHERE `id` = '$id'";
            $prepare = mysqli_query($con, $query);
            if ($prepare) {
                return True;
            } else {
                return False;
            }
        }

        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $option = $_GET['delete'];

            switch ($option) {
                case "blog":
                    $delete_blog = delete($id, $option);
                    if ($delete_blog == True) {

                        echo "<script>
                        swal.fire({
                            title: 'Success!',
                            text: 'blogs details deleted!',
                            type: 'success'
                        }).then(function() {
                            window.location = '/ngo/admin/blog';
                        });</script>
                        ";
                    }
                    break;


                case "cause":
                    echo "Your favorite color is blue!";
                    break;


                case "events":
                    echo "Your favorite color is green!";
                    break;


                case "testimony":
                    echo "Your favorite color is green!";
                    break;

                case "donations":
                    echo "Your favorite color is green!";
                    break;


                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }


            // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
            //     echo "<script>
            // Swal.fire(
            //     'The Internet?',
            //     ' $id',
            //     'question'
            //   )
            // </script>";
        }
    }

    include "footer.php";
    ?>
