<?php

// Start the session
session_start();

?>

<!doctype html>
<html lang="en">

<head>
<?php include_once'views/head.php';?>
    <style>
        .blog {
            padding: 10px;
            margin: 20px;
            background-color: MintCream;
            border-radius: 5px;
            border: 2px solid black;
        }

        .read-more {
            border-radius: 2rem;
            font-size: 2em;
            padding: 1rem 3rem;
            background-color: #1b4332;
        }

        .jumbotron {
            border-radius: 2rem;

        }
    </style>
</head>

<body>

    <!-- covif button -->
    <a href="covid.php">
        <button class="btn covid-relief" type="button" hidden>
            <span class="blink"><i class="fa fa-medkit blink" aria-hidden="true"></i> Covid Relief</span>
        </button>
    </a>

    <?php include_once'views/header.php';?>

    <!--  ************************* Page Title Starts Here ************************** -->

    <?php include_once'views/page_header.php';
   showTitle("Our Blog","Our Blog");
   
   ?>



    <!-- ################# Blog Page Starts Here#######################--->

    <div class="container m-auto">

        <div class="text-center p-3 pt-5">
            <h1 style="color: black;">Nutrition for Education - Nourishing, nurturing, educating and empowering children</h1><br>
            <h5 style="color: black;"><i>~ Pooja Kulkarni | August 10, 2020</i></h5><br>

            <div class='center col-md-7 m-auto'>
                <img src="https://www.smilefoundationindia.org/blog/wp-content/uploads/2018/05/IMG-20180523-WA0001.jpg">
                <br><small>Nutrition for education-On ground endeavour</small>
            </div>
        </div>

        <div class="pl-5 pr-5 ml-5 mr-5 p-4 pb-5">
            <p>When six year old Kiran Wagh joined the Mission Education centre at Kalyan in Maharashtra, her teachers took note of her extreme health condition. She was visibly malnourished, looked much younger than her age and was covered in dirt.</p>
            <br>
            <p>Kiran's case is not unique. Malnutrition is more prevalent in India than in Sub-Saharan Africa. One in every three malnourished children in the world lives in India. According to the National Family Health Survey (NFHS III), 38% of all children below the age of five have stymied growth and are too small for their age, 46% are underweight and 16% are emaciated.</p>
            <br>
            <p>A critical issue in itself, lack of nutrition, has repercussions in every sphere of child development, as it stunts the physical as well as mental growth of children. Malnourished children are less likely to perform well in school, even to regularly attend school. This leads to low confidence levels and eventually drop-outs.</p>
            <br>
            <p>Being relegated to a neglected position in our socio-cultural context, girl children become the worst sufferers. Lack of nutrition and health problems often become an excuse for forcing girls out of school, and into domestic duties and early marriages. Barely able to survive themselves, these young girls are expected to take on the responsibility of motherhood, leading to high maternal and infant mortality rates.</p><br>
            <p>Understanding that nutrition and health form an important aspect of a child's growing up years, and can have a huge impact on her/ his education, Smile Foundation has always included them as integral aspects of the Mission Education programme.</p><br>
            <div class='center col-md-7 m-auto'>
                <img src="https://thepositiveindia.com/wp-content/uploads/2016/12/smil8.jpg">
                <br><small>Lorem ipsum dolor sit amet consectetur.</small>
            </div>
            <br>
            <p>External resource persons like dieticians, nutritionists, doctors and child specialists were engaged to give a wider scope to the campaign, and joined teachers from Mission Education centres in sensitizing the community members. The comprehensively designed campaign included detailed and interactive sessions on the importance of health, personal hygiene and nutrition. Innovative activities like street plays and songs were performed to engage the people and help them grasp the message easily.</p><br>
            <p><b>Smile Foundation initiated a nationwide awareness campaign on the importance of nutrition and health to sensitize children, their families and communities, towards the importance of nutritious food, leading to better health, education and other opportunities for the children.</b></p><br>

            <p>Today, India is riding on a promising tide of economic and social development, but this only remains a hollow projection, when our children do not have access to even the most basic human needs, like nutrition and education. Our children will lay the foundation for our country's future, but this might be too heavy a responsibility for their weak shoulders. We must come together to nurture, nourish, educate and empower our children, to help build a healthy, progressive nation.</p><br>
        </div>

        <div class="text-center jumbotron">
            <h1 style="color: black;">Like what you read?</h1>
            <br>
            <a href="blog.php"><button class="btn btn-dark read-more"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Go back to more such articles!</button></a>
        </div>
    </div>







    <!--  ************************* Footer Starts Here ************************** -->

    <?php include'views/footer.php';?>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>