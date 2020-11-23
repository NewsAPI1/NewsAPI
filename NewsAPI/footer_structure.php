<footer id="google_translate_element">
    <section class="sec-1">
        <section class="about">
            <h2>About</h2>
            <p>We understand you don’t have time to go through newspaper everyday.
            </p>
        </section>
        <section class="link1">
            <h2>categories</h2>
            <ul>
                <li><a href="business.php">Business</a></li>
                <li><a href="entertainment.php">Entertainment</a></li>
                <li><a href="health.php">Health</a></li>
                <li><a href="science.php">Science</a></li>
                <li><a href="sports.php">Sports</a></li>
                <li><a href="technology.php">Technology</a></li>
            </ul>
        </section>
        <section class="link2">
            <h2>quick links</h2>
            <ul>
                <li><a href="aboutusnews.html">About Us</a></li>
                <li><a href="aboutusnews.html">Articles</a></li>
                <li><a href="Landingpage.html">Landing Page</a></li>

            </ul>
        </section>
        <section class="link3">
            <h2>contact us</h2>
            <ul>
                <li><i class="fa fa-home"></i><span>GLA University, Uttar Pradesh, India</span></li>
                <li><a href="https://icons8.com/icon/1iF9PyJ2Thzo/home">Icon by Icons8</a></li>
                <li>Icons made by <a href="https://www.flaticon.com/authors/icongeek26" title="Icongeek26">Icongeek26</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></li>
                <li><i class="fa fa-envelope"></i><span>inclicknews@gmail.com</span></li>
                <li><i class="fa fa-phone-square"></i><span>Mobile: 9*********</span></li>
            </ul>
        </section>
    </section>
    
    <section class="sec-3">
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://github.com/NewsAPI1/NewsAPI"><i class="fa fa-github"></i></a></li>
        </ul>
    </section>
    <section class="sec-4">
        <p>Copyright &#169; 2020 All Rights Reserved by Inclick
        </p>
    </section>
</footer>
</div>
<script>
    var myVar;
    function myFunction() {
        myVar = setTimeout(showPage, 000);
    }
    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("container").style.display = "block";
    }
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    var mybutton = document.getElementById("top");
    window.onscroll = function() {
        scrollFunction()
    };
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>