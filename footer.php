  <br><br><br><br>
    <div class="footerBar">
        <a href="./"><i class="material-icons">home</i> <br> <small>Home</small> </a>
        <a href="./apply.php"><i class="material-icons">description</i> <br> <small>Apply Loan</small> </a>
        <!-- <a href=""><i class="material-icons">event</i>  <br> <small>Home</small> </a> -->
        <a href="./track.php"><i class="material-icons">search</i> <br> <small>Track Application</small> </a>
        <a href="./contact.php"><i class="material-icons">phone</i> <br> <small>Contact Us</small> </a>
    </div>
    <div class="leftSidebar">
        <i class="material-icons closingButton">close</i>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">documents</a></li>
            <li><a href="">contact us</a></li>
            <li><a href="">Version </a></li>
        </ul>
    </div>
    <script>
        $(document).ready(function() {
            $(".leftMenuBar").click(function() {
                $(".leftSidebar").show();
            });
            $(".closingButton").click(function() {
                $(".leftSidebar").hide();
            });
        });
    </script>
</body>
</html>