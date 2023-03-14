@extends('frontend.layout.app')
 
 @section('content')
  <!--Start Home-->
  <section class="home wow flash" id="home">
        <div class="container">
            <video class="wow slideInLeft" autoplay muted loop>
                <source src="{{ asset('frontend/video/logo2v.mp4') }}" type="video/mp4">
              </video>
            <h1 class="wow slideInLeft" data-wow-delay="1s">Choose <span>us</span> </h1>
            <h1 class="wow slideInRight" data-wow-delay="1s">Choose <span>Health</span></h1>
        </div>
        <!-- go down -->
        <a href="#about" class="go-down">
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
        <!-- go down -->
    </section>
     <!--End Home-->

    
     <!--Start About-->
     
     <section class="about" id="about"> 
        <div class="container">
             <div class="text box">
                <h2>About Us</h2>
            </div>
            <div class="content">
                
                <div class="box wow bounceInUp">
                   
                    <div class="inner">
                       
                        <div class="img">
                            <img src="{{ asset('frontend/images/10new.png') }}" alt="about">
                        </div>
                        <div class="text">
                            <h4>Best Training</h4>
                            <p>ABC Health and Fitness was founded in 2018 in Dublin in order to provide comprehensive services 
                                that support and foster the health of our customers. 
                            </p>
                            <br><br><br>
                            <p>
                                We offer a variety of classes and services 
                                to improve and help you maintain your optimal health.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp" data-wow-delay="0.2s">
                    <div class="inner" >
                        <div class="img">
                            <img src="{{ asset('frontend/images/yoganew.jpg') }}" alt="about">
                        </div>
                        <div class="text">
                            <h4>Why Choose Us</h4>
                            <p>At ABC, we are equipped with top of the line machines and accessories. 
                                Amazing brands such as Cybex and Life Fitness are available to everyone that’s 
                                serious about their fitness goals, or just wants to maintain a healthy lifestyle. 
                                We’re constantly upgrading our equipment roster to provide only the best and SMARTEST 
                                ways to reach your fitness goals.</p>
                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp" data-wow-delay="0.4s">
                    <div class="inner" >
                        <div class="img">
                            <img src="{{ asset('frontend/images/11new.jpg') }}" alt="about">
                        </div>
                        <div class="text">
                            <h4>For Whom</h4>
                            <p>Anyone with a passion for creating a fitness body and anyone who is concerned about your health can join us. 
                                We are looking for you.
                                <br><br>
                                People suffering from diseases like diabetes and cholesterol, 
                                and all those who want to avoid them and lead a healthy life, can contact us irrespective of age.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!--End About-->


     <!--Start Services-->
     <section class="service" id="service">
        <div class="container">
            <div class="content">
                <div class="text box wow slideInLeft">
                    <h2>Our Services</h2>
                    <p>
                        ABC Health and Fitness aims to help all of our clients live the healthiest lives they can. 
                        In order to reach this goal, we offer a variety of services along with positive reinforcement 
                        you need to make big lifestyle changes. 
                    </p>
                    <P>
                        Every membership comes with the following benefits:
                        <ul>
                            <li>Access to our range of free classes in our new studio</li>
                            <li>Long opening hours, never miss a workout again</li>
                            <li>Top of the line equipment such as Cybex and Life Fitness</li>
                            <li>Knowledgeable Personal Trainers available</li>
                            <li>Friendly, informative and helpful staff</li>
                            <li>Air conditioning and filtration system</li>
                        </ul> 
                    </P>
                    <p>
                        Take a look at some of the services we offer, 
                        and please get in touch if you have any questions.
                    </p>
                    <a href="/schedule" class="btn">Shedule</a>
                    <a href="/register" class="btn">Start Now</a>
                </div>
                <div class="accordian box wow slideInRight">
                    <div class="accordian-container active">
                        <div class="head">
                            <h4>Yoga</h4>
                            <span class="fa fa-angle-down"></span>
                        </div>
                        <div class="body">
                            <p>
                                Fitness Yoga is an effective and exciting "Mind" and "Body" workout. 
                                It is a safe practice that will make you sweat and work hard, connecting breath with movement. 
                                It combines aerobic and anaerobic movements, as well as elements from Hatha Yoga and traditional exercise, 
                                linked together in a flowing series of poses that create strength, flexibility, endurance and balance. 
                                Fitness Yoga is about exploring your limits physically and mentally, working all parts of your body 
                                equally to create a balance that will complement other activities of daily life. 
                                The class is offered in a peaceful, relaxed atmosphere to release stress and tension. 
                            </p>
                        </div>
                    </div>
                    <div class="accordian-container">
                        <div class="head">
                            <h4>Exercise</h4>
                            <span class="fa fa-angle-up"></span>
                        </div>
                        <div class="body">
                            <p>
                                Exercise involves engaging in physical activity and increasing the heart rate beyond resting levels. 
                                It is an important part of preserving physical and mental health.
                                Aerobic exercise aims to improve how the body uses oxygen. 
                                Most aerobic exercise takes place at average levels of intensity over longer periods.
                                Anaerobic exercise does not use oxygen for energy. 
                                People use this type of exercise to build power, strength, and muscle mass.
                                Agility training aims to improve a person’s ability to maintain control while speeding up, slowing down, and changing direction.
                            </p>
                        </div>
                    </div>
                    <div class="accordian-container">
                        <div class="head">
                            <h4>Group Fitness Class</h4>
                            <span class="fa fa-angle-up"></span>
                        </div>
                        <div class="body">
                            <p>
                                We are offering many types of fitness classes as groups so then participants can have the maximum outcome.
                                Separate attention is paid to each. That is why many people prefer to join these  group fitness classes.
                            </p>
                        </div>
                    </div>
                    <div class="accordian-container">
                        <div class="head">
                            <h4>Dance</h4>
                            <span class="fa fa-angle-up"></span>
                        </div>
                        <div class="body">
                            <p>
                                The dance begins with a full-body warmup, arm and leg conditioning, 
                                and then utilizes simple choreography in a series of fast-paced aerobic dances to get your body going. 
                                Also included is challenging floor work for hips, thighs, buns, and abs.
                            </p>
                        </div>
                    </div>
                    <div class="accordian-container">
                        <div class="head">
                            <h4>Telemedicine</h4>
                            <span class="fa fa-angle-up"></span>
                        </div>
                        <div class="body">
                            <p>
                                The next generation of telemedicine is mindful and intentional utilization. 
                                In the digital age of instant access with the tap of an app, your employees expect it – even when 
                                they don’t know how to use it. MyTelemedicine's cutting-edge care navigation and cost containment 
                                solution assists employees to make better healthcare decisions.
                            </p>
                            
                        </div>
                    </div>
                    <div class="accordian-container">
                        <div class="head">
                            <h4>Wellness Challenges</h4>
                            <span class="fa fa-angle-up"></span>
                        </div>
                        <div class="body">
                            <p>
                                Focus on health with fun, interactive challenges that can be done individually 
                                or as a team. Topics include nutrition, physical activity and stress management, 
                                all designed with action-oriented activities.

                                Participants compete with friends and/or family throughout the country, fostering a sense of community. 
                                Includes opt-in challenges and reporting from individual, client-specific and nationwide results.
                            </p>
                            
                        </div>
                    </div>
                    <div class="accordian-container">
                        <div class="head">
                            <h4>Other Services</h4>
                            <span class="fa fa-angle-up"></span>
                        </div>
                        <div class="body">
                            <p>
                                <b>Strength</b>
                                
                                <br>
                                This workout provides the perfect combination of equipment and multi-joint exercises to maximize 
                                and improve full-body power and composition taking a full body approach to training.
                            </p>
                            <p>
                                <b>Spin</b>
                                <br>
                                This is not indoor cycling, it’s SPIN. This is the purest form of intense cardiovascular 
                                exercises coupled with the fun aspect of cycling.
                            </p>
                            <p>
                                <b>HIIT</b>
                                <br>
                                A combination of bodyweight workout and HIIT elements designed to push your body to the limit and beyond.
                            </p>
                            <p>
                                And also providing lot of other services as well. Get in touch with us to more information...
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!--End Services-->
     
    

     <!--Start Our Classes-->
     <section class="classes" id="classes">
         <div class="container">
            <div class="content">
                <div class="box img wow slideInLeft">
                    <img src="{{ asset('frontend/images/back9.jpg') }}" alt="classes">
                    <!--<img src="images/logo2.png" alt="classes">-->
                </div>
                <div class="box text wow slideInRight">
                    <h2>Our Classes</h2>
                    <p>
                        Our most popular classes such as Yoga/Pilates, Strength, HIIT and Lift and HIIT are sure to 
                        challenge you to the max. They’re a sure way to stay consistent with your training without 
                        having to worry about a workout plan. Our amazing fitness instructors will come up with the 
                        best workout for you and will be there to push you past your limits.
                     
                    </p>
                    
                </div>
            </div>
         </div>
     </section>
     <!--End Our Classes-->

     <!--Start Today-->
     <section class="start-today">
        <div class="container">
             <div class="content">
                   <div class="box text wow slideInLeft">
                        <h2>
                            Get Your Free Consultation
                        </h2>
                        <p>
                            We are offering free consultation. Contact us for more information.
                        </p>
                        <a href="#contact" class="btn">Free Consultation</a>
                   </div>
                   <div class="box img wow slideInRight">
                        <img src="{{ asset('frontend/images/circle.png') }}" alt="start today" />
                   </div>
             </div>
        </div>
    </section>
     <!--End Start Today-->


     <!--Start Gallery-->
     <section class="gallery" id="gallery">
       <div class="content">
            <div class="box wow slideInLeft">
                 <img src="{{ asset('frontend/images/g2.jpg') }}" alt="gallery" />
            </div>
            <div class="box wow slideInLeft">
                 <img src="{{ asset('frontend/images/g3.jpg') }}" alt="gallery" />
            </div>
            <div class="box wow slideInRight">
                <img src="{{ asset('frontend/images/g4.jpg') }}" alt="gallery" />
           </div>
           <div class="box wow slideInRight">
                <img src="{{ asset('frontend/images/g5.jpg') }}" alt="gallery" />
           </div>
           <div class="box wow slideInLeft">
                <img src="{{ asset('frontend/images/g6.jpg') }}" alt="gallery" />
           </div>
           <div class="box wow slideInLeft">
            <img src="{{ asset('frontend/images/g12.jpg') }}" alt="gallery" />
           </div>
           <div class="box wow slideInRight">
                <img src="{{ asset('frontend/images/g7.jpg') }}" alt="gallery" />
           </div>
           <div class="box wow slideInRight">
                <img src="{{ asset('frontend/images/g8.jpg') }}" alt="gallery" />
           </div>
           <div class="box wow slideInLeft">
                <img src="{{ asset('frontend/images/g9.jpg') }}" alt="gallery" />
           </div>
           <div class="box wow slideInLeft">
                <img src="{{ asset('frontend/images/g10.jpg') }}" alt="gallery" />
           </div>
           <div class="box wow slideInRight">
                <img src="{{ asset('frontend/images/g11.jpg') }}" alt="gallery" />
           </div>
           <div class="box wow slideInRight">
            <img src="{{ asset('frontend/images/g13.jpg') }}" alt="gallery" />
       </div>
           
       </div>
     </section>
     <!--End Gallery-->


     <!--Start Package-->
     <section class="package" id="package">
        <div class="container">
              <h2>Choose Your Package</h2>
              <p class="title-p">
                You can choose a package as you wish. If you need more information please feel free to contact us. 
                Our main priority is your health. Let's make a healthy life.
            </p>
              <div class="content">
                    <div class="box wow bounceInUp">
                          <div class="inner">
                                 <div class="price-tag">
                                       $59/Month
                                 </div>
                                 <div class="img">
                                      <img src="{{ asset('frontend/images/p10.jpg') }}" alt="package" />
                                 </div>
                                 <div class="text">
                                       <h3>Special Training for women</h3>
                                       <p>Get Free WiFi</p>
                                       <p>Month to Month</p>
                                       <p>No Time Restrictions</p>
                                       <p>Gym and Cardio</p>
                                       <p>Service Locker Rooms</p>
                                       <a href="#contact" class="btn">Join Now</a>
                                 </div>
                          </div>
                    </div>
                    <div class="box wow bounceInUp" data-wow-delay="0.2s">
                          <div class="inner">
                                 <div class="price-tag">
                                       $30/Month
                                 </div>
                                 <div class="img">
                                    <img src="{{ asset('frontend/images/p1.jpg') }}" alt="package" />
                                 </div>
                                 <div class="text">
                                       <h3>Student Package</h3>
                                       <p>Get Free WiFi</p>
                                       <p>Month to Month</p>
                                       <p>No Time Restrictions</p>
                                       <p>Gym and Cardio</p>
                                       <p>Service Locker Rooms</p>
                                       <a href="#contact" class="btn">Join Now</a>
                                 </div>
                          </div>
                    </div>
                    <div class="box wow bounceInUp" data-wow-delay="0.4s">
                          <div class="inner">
                                 <div class="price-tag">
                                       $60/Month
                                 </div>
                                 <div class="img">
                                      <img src="{{ asset('frontend/images/6.jpg') }}" alt="package" />
                                 </div>
                                 <div class="text">
                                       <h3>Normal Package</h3>
                                       <p>Get Free WiFi</p>
                                       <p>Month to Month</p>
                                       <p>No Time Restrictions</p>
                                       <p>Gym and Cardio</p>
                                       <p>Service Locker Rooms</p>
                                       <a href="#contact" class="btn">Join Now</a>
                                 </div>
                          </div>
                    </div>
              </div>
        </div>
     </section>   
     <!--End Package-->



     <!--Start Contact-->
     <section class="contact" id="contact">
        <div class="container">
           <div class="content">
               <div class="box form wow slideInLeft">
                  <form>
                     <input type="text" placeholder="Enter Name">
                     <input type="text" placeholder="Enter Email">
                     <input type="text" placeholder="Enter Mobile">
                     <textarea placeholder="Enter Message"></textarea>
                     <button type="submit">Send Message</button>
                  </form>
               </div>
               <div class="box text  wow slideInRight">
                    <h2>Get Connected with ABC Health & Fitness</h2>
                     <p class="title-p">
                        ABC Health and Fitness aims to help all of our clients live the healthiest lives they can. In order to reach this goal, 
                        we offer a variety of services along with positive reinforcement you need to make big lifestyle changes.
                    </p>
                     <div class="info">
                         <ul>
                             <li><span class="fa fa-map-marker"></span> 356 Loreto Rd, Maryland, Dublin</li>
                             <li><span class="fa fa-phone"></span> +353 76 646 6733</li>
                             <li><span class="fa fa-envelope"></span> healthandfitness@abc.com</li>
                         </ul>
                     </div>
                     <div class="social">
                          <a href="https://www.facebook.com/login/"><span class="fa fa-facebook"></span></a>
                          <a href="https://www.linkedin.com/home"><span class="fa fa-linkedin"></span></a>
                          <a href="https://www.skype.com/en/"><span class="fa fa-skype"></span></a>
                          <a href="https://www.youtube.com/"><span class="fa fa-youtube-play"></span></a>
                     </div>
   
                     <div class="copy">
                         PowerBy &copy; ABC Health & Fitness
                     </div>
               </div>
           </div>
        </div>
     </section>
     <!--End Contact-->

 @endsection