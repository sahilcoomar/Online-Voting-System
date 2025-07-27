<?php include ('sess.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
        <!-- Page Content -->
          <!-- Navigation -->
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option value = "candidates/pres.php">Principal</option>
                <option value = "candidates/vp.php">Vice Principal</option>
                <option value = "candidates/ua.php">Head Of Department</option>
                <option value = "candidates/ss.php">Head Professor</option>
                <option value = "candidates/ea.php">Games In-charge</option>
                <option value = "candidates/tr.php">Yoga In-charge</option>
                <option value = "candidates/vtr.php">Sports In-charge</option>
                <option value = "candidates/sg.php">Secretary Publicity</option>
                <option value = "candidates/ta.php">Transport & Accommodation</option>
                </select>
            </center>

    </heading> 
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <script>
    function page (src){
        window.location=src;
    }
    </script>

</body>

</html>

