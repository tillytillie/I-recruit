
<div class="container">
  <div class="row">
      <div class="col-lg-6 shadow-lg mt-5">
    <h1 class="text-center">COVID19</h1>
  <div class="mySlides">
  
    <p class="text-justify"><b class="text text-center"> 5 Ways The COVID-19 Pandemic Will Affect Your Job Search And What You Can Do To
Prevent. </b> <br>
A few months ago,the world was moving along nicely with different events humans have come
to expect. But out of the blue,the COVID-19 pandemic has put a great spinon thing swith
astounding effects.
Virtually all areas of life are affected, and the job market is not leftout. As a result, more job
seekers are looking for great ways to improve their efforts. In line with that, here are 5 ways the
pandemic will impact your job search, and what you can do about them.</p>
</div>

<div class="mySlides">
  
  <p class="text-justify"><b> Restricted Movement</b><br>
You can’t move around like you used to. Infact, most organizations are closed, and don’t require
your presence. It’s a great problem a lot of people,including those seeking for employment have
to deal with.
The best way to deal with this is to increase networking. Sure, events, gatherings and a lot more
are put off. But there’s the Internet along with other tools to help you keep intouch. This way,
you’re ready when things get back to normal. It’s a great way to prevent there strictionson
movement from affecting your job search.</p>
</div>

<div class="mySlides">
  
  <p class="text-justify"><b> Impromptu Delays and Cancellations </b> <br>

Delays and cancellations are often unannounced thanks to the global pandemic. Organizations
will tell you to hold off on your applications or cancel scheduled meetings and interviews with
you. However, don’t let this affect your job search because not all all parts of organizations are
shutdown.
On your part, don’t stop applying or following upon applications. This will help you stay
prepared, and ones tepa head of the rest.</p>
    </div>
  
  
<div class="mySlides">
  
  <p class="text-justify"><b>The Time Factor</b><br>
Now, more than ever, you probably have alot of time to spare. This can affect your job search 
negatively because the process slows, and you feel the clock can’t tick fast enough. Whatyou
can do is use the extratime to think things through. Examine your career, learn new things, and
develop more to boost your professional profile. You can do that with online courses, and
temporary jobs. </p> 
</div>

<div class="mySlides">
  
  <p class="text-justify"><b class="text text-center">Difficulties in Negotiating</b> <br>
It’s okay being inquisitive about how much a potential employer pays. However, the COVID-19
pandemic has put many job searches at a disadvantage thanks to its impact on the economy as
a whole. So negotiating for a suitable salary might feel awkward.
What you can do is wait a little for the economy to pickup. Optimize your CV during this time,
build your profile, and wait eagerly to discuss your worth should you be invited for an interview.
<br>
<b> Conclusion </b>
There you go. Now you don’t have to worry about how to go about your job search during the
COVID-19 pandemic.  
  </p>
</div>


    <button type="button" class="btn btn-danger mb-3 prev" onclick="plusSlides(-1)">Previous</button>
    <button type="button" id="nextBtn" class="btn btn-primary mb-3 pull-right next" onclick="plusSlides(1)">Next</button>
    

    </div>
    <div class="col-lg-4">
    
    </div>
  </div>
 </div>


<script>

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }

    if (n < 1) {
        slideIndex = slides.length
    }


    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }


    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += "active"
}
</script>




