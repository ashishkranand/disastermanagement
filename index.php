<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Safety Management</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body onload="resetSelection()">
    <div class="first">
        <header>
            <nav>
                <div class="logo"><a href="#"><img src="./image/logo.png" alt=""></a>
            </div>
                <ul class="navbar">
                    <a href="#"><li>Home</li></a>
                    <a href="./project/login.php"><li>Login</li></a>
                    <a href="./admin.php"><li>Admin</li></a>
                    <a href="#"><li>FAQ</li></a>
                </ul>
            </nav>
        </header>
        <div class="first1">
            <h1 class="heading1">Welcome to Disaster Safety Management . <br>If you need any type of help then kindly swipe down.</h1>
        </div>
    </div>
    <br><br>

    <div class="navigation">
        <a href="#Eartquake"><div class="navigbtn"><h3>Eartquake</h3></div></a>
        <a href="#ExtremeHeat"><div class="navigbtn"><h3>Extreme Heat</h3></div></a>
        <a href="#Floods"><div class="navigbtn"><h3>Floods</h3></div></a>
        <a href="#Hurricanes"><div class="navigbtn"><h3>Hurricanes</h3></div></a>
        <a href="#Landslides"><div class="navigbtn"><h3>Landslides</h3></div></a>
        <a href="#Tsunamis"><div class="navigbtn"><h3>Tsunamis</h3></div></a>
 
    </div>

    <br><br>
    <div class="slideshoww">
        <h1 class="heading1" style="color: black; text-align: center; font-size: 2rem; margin-bottom: 1rem;">Slideshow of all type of Disaster</h1>
        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="./image/disaster.jpg"  >
              <div class="text">Photo 1</div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="./image/earhquake.jpg">
              <div class="text">Photo 2</div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="./image/Floods.jpg">
              <div class="text">Photo 3</div>
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            
            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
        </div>
        <!-- <button type="submit" class="helpbtn trigger">Help</button> -->
        
        <div class="modal">
            <div class="modal-content">
                <span class="close-button">X</span>
                <h1>Hello, we are here to help you. <br> Fill this form to get help...</h1>
                <form action="">
                    <input type="text" name="name" id="" placeholder="Enter your name">
                    <input type="number" name="phone" id="" placeholder="Enter your Phone number">
                    <input type="email" name="email" id="" placeholder="Enter your email id">
                    <input type="text" name="city" id="" placeholder="Enter your aadhaar number">
                    
                        <select id="countrySelect" size="1" onchange="makeSubmenu(this.value)">
                        <option value="" disabled selected>Choose State</option>
                        <option>Bihar</option>
                        <option>Uttarpradesh</option>
                        <option>NewDelhi</option>
                        </select><br>
                        <select id="citySelect" size="1" >
                        <option value="" disabled selected>Choose Nearest City</option>
                        <option></option>
                        </select>
                        <textarea name="message" id="" cols="30" rows="5" placeholder="Enter your problem which you are facing related to disaster for getting help quickly..."></textarea>
                        <button type="submit" class="send">Send</button>
                </form>
            </div>
        </div>
    <div class="second" id="Eartquake">
        <div class="SecondLeft">
            <h1 class="heading1">Earthquake</h1>
            <h2 class="heading2">Know the signs of an earthquake</h2>
            <p class="earthquakepara">
               <br> During an earthquake, you may hear a roaring or rumbling sound that gradually gets louder. You may also feel a rolling sensation that starts out gently and, within a second or two, grows violent. <br> <br><b> OR </b><br><br>You may first be jarred by a violent jolt. A second or two later, you may feel shaking and find it difficult to stand up or move from one room to another.
            </p>
            <h2 class="heading2"> <br> <br>Learn the safe spots. <br> <br> </h2>
            <p class="earthquakepara">
                During an earthquake, most deaths and injuries are caused by collapsing building materials and heavy falling objects, such as bookcases, cabinets, and heating units. <br> <br>
                <ul><li>Learn the safe spots in each room of your home. A safe spot may be underneath a sturdy table away from walls or underneath your covers with a pillow over your head if you are already in bed.</li></ul>
            </p>
            <h2 class="heading2"> <br> <br>Plan and practice what to do if an earthquake strikes. <br> <br> </h2>
            <p class="earthquakepara">
                By planning and practicing what to do if an earthquake strikes, you and your loved ones can learn to react correctly and automatically when the shaking begins. <br><br>
            </p>
            <ul><li>Get the entire family to practice an earthquake drill, especially if you have children. Participating in an earthquake drill will help you and your loved ones understand what to do in case you are not with them during an earthquake.</li><br><br><li>Make sure you and your children also understand the school’s emergency procedures for disasters. This will help you coordinate where, when, and how to reunite with your children after an earthquake.</li></ul>
            <h2 class="heading2"> <br> <br>Drop, cover, and hold on during your earthquake drill. <br> <br> </h2>
            <p class="earthquakepara">
                <ul><li><b>DROP down onto your hands and knees</b> immediately. This position protects you from falling but still allows you to move if necessary. <br><br></li>
                <li><b>COVER</b> your head and neck (and your entire body if possible) underneath a sturdy table or desk. If there is no shelter nearby, get down near an interior wall or next to low-lying furniture that won’t fall on you, and cover your head and neck with your arms and hands. Try to stay clear of windows or glass that could shatter or objects that could fall on you. <br><br></li>
                <li><b>HOLD ON to your shelter</b> (or to your head and neck) until the shaking stops. Be prepared to move with your shelter if the shaking shifts it around. <br><br></li>
                </ul>
            </p>
        </div>
        
        <div class="SecondRight">
            <img src="./image/earhquake.jpg" alt="">
            
        </div>
    </div>
    <div class="second" id="ExtremeHeat">
        
        <div class="SecondLeft">
            <h1 class="heading1">Extreme Heat</h1>
            <h2 class="heading2">Know the signs of an earthquake</h2>
            <p class="earthquakepara">
               <br> During an earthquake, you may hear a roaring or rumbling sound that gradually gets louder. You may also feel a rolling sensation that starts out gently and, within a second or two, grows violent. <br> <br><b> OR </b><br><br>You may first be jarred by a violent jolt. A second or two later, you may feel shaking and find it difficult to stand up or move from one room to another.
            </p>
            <h2 class="heading2"> <br> <br>Learn the safe spots. <br> <br> </h2>
            <p class="earthquakepara">
                During an earthquake, most deaths and injuries are caused by collapsing building materials and heavy falling objects, such as bookcases, cabinets, and heating units. <br> <br>
                <ul><li>Learn the safe spots in each room of your home. A safe spot may be underneath a sturdy table away from walls or underneath your covers with a pillow over your head if you are already in bed.</li></ul>
            </p>
            <h2 class="heading2"> <br> <br>Plan and practice what to do if an earthquake strikes. <br> <br> </h2>
            <p class="earthquakepara">
                By planning and practicing what to do if an earthquake strikes, you and your loved ones can learn to react correctly and automatically when the shaking begins. <br><br>
            </p>
            <ul><li>Get the entire family to practice an earthquake drill, especially if you have children. Participating in an earthquake drill will help you and your loved ones understand what to do in case you are not with them during an earthquake.</li><br><br><li>Make sure you and your children also understand the school’s emergency procedures for disasters. This will help you coordinate where, when, and how to reunite with your children after an earthquake.</li></ul>
            <h2 class="heading2"> <br> <br>Drop, cover, and hold on during your earthquake drill. <br> <br> </h2>
            <p class="earthquakepara">
                <ul><li><b>DROP down onto your hands and knees</b> immediately. This position protects you from falling but still allows you to move if necessary. <br><br></li>
                <li><b>COVER</b> your head and neck (and your entire body if possible) underneath a sturdy table or desk. If there is no shelter nearby, get down near an interior wall or next to low-lying furniture that won’t fall on you, and cover your head and neck with your arms and hands. Try to stay clear of windows or glass that could shatter or objects that could fall on you. <br><br></li>
                <li><b>HOLD ON to your shelter</b> (or to your head and neck) until the shaking stops. Be prepared to move with your shelter if the shaking shifts it around. <br><br></li>
                </ul>
            </p>
        </div>
        <div class="SecondRight">
            <img src="./image/ExtremeHeat.jpg" alt="">
        </div>
    </div>
    <div class="second" id="Floods">
        <div class="SecondLeft">
            <h1 class="heading1">Floods</h1>
            <h2 class="heading2">Know the signs of an earthquake</h2>
            <p class="earthquakepara">
               <br> During an earthquake, you may hear a roaring or rumbling sound that gradually gets louder. You may also feel a rolling sensation that starts out gently and, within a second or two, grows violent. <br> <br><b> OR </b><br><br>You may first be jarred by a violent jolt. A second or two later, you may feel shaking and find it difficult to stand up or move from one room to another.
            </p>
            <h2 class="heading2"> <br> <br>Learn the safe spots. <br> <br> </h2>
            <p class="earthquakepara">
                During an earthquake, most deaths and injuries are caused by collapsing building materials and heavy falling objects, such as bookcases, cabinets, and heating units. <br> <br>
                <ul><li>Learn the safe spots in each room of your home. A safe spot may be underneath a sturdy table away from walls or underneath your covers with a pillow over your head if you are already in bed.</li></ul>
            </p>
            <h2 class="heading2"> <br> <br>Plan and practice what to do if an earthquake strikes. <br> <br> </h2>
            <p class="earthquakepara">
                By planning and practicing what to do if an earthquake strikes, you and your loved ones can learn to react correctly and automatically when the shaking begins. <br><br>
            </p>
            <ul><li>Get the entire family to practice an earthquake drill, especially if you have children. Participating in an earthquake drill will help you and your loved ones understand what to do in case you are not with them during an earthquake.</li><br><br><li>Make sure you and your children also understand the school’s emergency procedures for disasters. This will help you coordinate where, when, and how to reunite with your children after an earthquake.</li></ul>
            <h2 class="heading2"> <br> <br>Drop, cover, and hold on during your earthquake drill. <br> <br> </h2>
            <p class="earthquakepara">
                <ul><li><b>DROP down onto your hands and knees</b> immediately. This position protects you from falling but still allows you to move if necessary. <br><br></li>
                <li><b>COVER</b> your head and neck (and your entire body if possible) underneath a sturdy table or desk. If there is no shelter nearby, get down near an interior wall or next to low-lying furniture that won’t fall on you, and cover your head and neck with your arms and hands. Try to stay clear of windows or glass that could shatter or objects that could fall on you. <br><br></li>
                <li><b>HOLD ON to your shelter</b> (or to your head and neck) until the shaking stops. Be prepared to move with your shelter if the shaking shifts it around. <br><br></li>
                </ul>
            </p>
        </div>
        
        <div class="SecondRight" id="Hurricanes">
            <img src="./image/Floods.jpg" alt="">
        </div>
    </div>
    <div class="second">
       
        <div class="SecondLeft">
            <h1 class="heading1">Hurricanes</h1>
            <h2 class="heading2">Know the signs of an earthquake</h2>
            <p class="earthquakepara">
               <br> During an earthquake, you may hear a roaring or rumbling sound that gradually gets louder. You may also feel a rolling sensation that starts out gently and, within a second or two, grows violent. <br> <br><b> OR </b><br><br>You may first be jarred by a violent jolt. A second or two later, you may feel shaking and find it difficult to stand up or move from one room to another.
            </p>
            <h2 class="heading2"> <br> <br>Learn the safe spots. <br> <br> </h2>
            <p class="earthquakepara">
                During an earthquake, most deaths and injuries are caused by collapsing building materials and heavy falling objects, such as bookcases, cabinets, and heating units. <br> <br>
                <ul><li>Learn the safe spots in each room of your home. A safe spot may be underneath a sturdy table away from walls or underneath your covers with a pillow over your head if you are already in bed.</li></ul>
            </p>
            <h2 class="heading2"> <br> <br>Plan and practice what to do if an earthquake strikes. <br> <br> </h2>
            <p class="earthquakepara">
                By planning and practicing what to do if an earthquake strikes, you and your loved ones can learn to react correctly and automatically when the shaking begins. <br><br>
            </p>
            <ul><li>Get the entire family to practice an earthquake drill, especially if you have children. Participating in an earthquake drill will help you and your loved ones understand what to do in case you are not with them during an earthquake.</li><br><br><li>Make sure you and your children also understand the school’s emergency procedures for disasters. This will help you coordinate where, when, and how to reunite with your children after an earthquake.</li></ul>
            <h2 class="heading2"> <br> <br>Drop, cover, and hold on during your earthquake drill. <br> <br> </h2>
            <p class="earthquakepara">
                <ul><li><b>DROP down onto your hands and knees</b> immediately. This position protects you from falling but still allows you to move if necessary. <br><br></li>
                <li><b>COVER</b> your head and neck (and your entire body if possible) underneath a sturdy table or desk. If there is no shelter nearby, get down near an interior wall or next to low-lying furniture that won’t fall on you, and cover your head and neck with your arms and hands. Try to stay clear of windows or glass that could shatter or objects that could fall on you. <br><br></li>
                <li><b>HOLD ON to your shelter</b> (or to your head and neck) until the shaking stops. Be prepared to move with your shelter if the shaking shifts it around. <br><br></li>
                </ul>
            </p>
        </div>
        <div class="SecondRight">
            <img src="./image/Hurricanes.jpg" alt="">
        </div>
    </div>
    <div class="second" id="Landslides">
        <div class="SecondLeft">
            <h1 class="heading1">Landslides</h1>
            <h2 class="heading2">Know the signs of an earthquake</h2>
            <p class="earthquakepara">
               <br> During an earthquake, you may hear a roaring or rumbling sound that gradually gets louder. You may also feel a rolling sensation that starts out gently and, within a second or two, grows violent. <br> <br><b> OR </b><br><br>You may first be jarred by a violent jolt. A second or two later, you may feel shaking and find it difficult to stand up or move from one room to another.
            </p>
            <h2 class="heading2"> <br> <br>Learn the safe spots. <br> <br> </h2>
            <p class="earthquakepara">
                During an earthquake, most deaths and injuries are caused by collapsing building materials and heavy falling objects, such as bookcases, cabinets, and heating units. <br> <br>
                <ul><li>Learn the safe spots in each room of your home. A safe spot may be underneath a sturdy table away from walls or underneath your covers with a pillow over your head if you are already in bed.</li></ul>
            </p>
            <h2 class="heading2"> <br> <br>Plan and practice what to do if an earthquake strikes. <br> <br> </h2>
            <p class="earthquakepara">
                By planning and practicing what to do if an earthquake strikes, you and your loved ones can learn to react correctly and automatically when the shaking begins. <br><br>
            </p>
            <ul><li>Get the entire family to practice an earthquake drill, especially if you have children. Participating in an earthquake drill will help you and your loved ones understand what to do in case you are not with them during an earthquake.</li><br><br><li>Make sure you and your children also understand the school’s emergency procedures for disasters. This will help you coordinate where, when, and how to reunite with your children after an earthquake.</li></ul>
            <h2 class="heading2"> <br> <br>Drop, cover, and hold on during your earthquake drill. <br> <br> </h2>
            <p class="earthquakepara">
                <ul><li><b>DROP down onto your hands and knees</b> immediately. This position protects you from falling but still allows you to move if necessary. <br><br></li>
                <li><b>COVER</b> your head and neck (and your entire body if possible) underneath a sturdy table or desk. If there is no shelter nearby, get down near an interior wall or next to low-lying furniture that won’t fall on you, and cover your head and neck with your arms and hands. Try to stay clear of windows or glass that could shatter or objects that could fall on you. <br><br></li>
                <li><b>HOLD ON to your shelter</b> (or to your head and neck) until the shaking stops. Be prepared to move with your shelter if the shaking shifts it around. <br><br></li>
                </ul>
            </p>
        </div>
        
        <div class="SecondRight">
            <img src="./image/Landslides.jpg" alt="">
        </div>
    </div>
    <div class="second" id="Tsunamis">
        
        <div class="SecondLeft">
            <h1 class="heading1">Tsunamis</h1>
            <h2 class="heading2">Know the signs of an earthquake</h2>
            <p class="earthquakepara">
               <br> During an earthquake, you may hear a roaring or rumbling sound that gradually gets louder. You may also feel a rolling sensation that starts out gently and, within a second or two, grows violent. <br> <br><b> OR </b><br><br>You may first be jarred by a violent jolt. A second or two later, you may feel shaking and find it difficult to stand up or move from one room to another.
            </p>
            <h2 class="heading2"> <br> <br>Learn the safe spots. <br> <br> </h2>
            <p class="earthquakepara">
                During an earthquake, most deaths and injuries are caused by collapsing building materials and heavy falling objects, such as bookcases, cabinets, and heating units. <br> <br>
                <ul><li>Learn the safe spots in each room of your home. A safe spot may be underneath a sturdy table away from walls or underneath your covers with a pillow over your head if you are already in bed.</li></ul>
            </p>
            <h2 class="heading2"> <br> <br>Plan and practice what to do if an earthquake strikes. <br> <br> </h2>
            <p class="earthquakepara">
                By planning and practicing what to do if an earthquake strikes, you and your loved ones can learn to react correctly and automatically when the shaking begins. <br><br>
            </p>
            <ul><li>Get the entire family to practice an earthquake drill, especially if you have children. Participating in an earthquake drill will help you and your loved ones understand what to do in case you are not with them during an earthquake.</li><br><br><li>Make sure you and your children also understand the school’s emergency procedures for disasters. This will help you coordinate where, when, and how to reunite with your children after an earthquake.</li></ul>
            <h2 class="heading2"> <br> <br>Drop, cover, and hold on during your earthquake drill. <br> <br> </h2>
            <p class="earthquakepara">
                <ul><li><b>DROP down onto your hands and knees</b> immediately. This position protects you from falling but still allows you to move if necessary. <br><br></li>
                <li><b>COVER</b> your head and neck (and your entire body if possible) underneath a sturdy table or desk. If there is no shelter nearby, get down near an interior wall or next to low-lying furniture that won’t fall on you, and cover your head and neck with your arms and hands. Try to stay clear of windows or glass that could shatter or objects that could fall on you. <br><br></li>
                <li><b>HOLD ON to your shelter</b> (or to your head and neck) until the shaking stops. Be prepared to move with your shelter if the shaking shifts it around. <br><br></li>
                </ul>
            </p>
        </div>
        <div class="SecondRight">
            <img src="./image/Tsunamis.jpg" alt="">
        </div>
    </div>
    <div class="map">
        <h1>We are here</h1>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3410.726399109876!2d75.7029548145143!3d31.255996567277307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5f5e9c489cf3%3A0x4049a5409d53c300!2sLovely%20Professional%20University!5e0!3m2!1sen!2sin!4v1666072830700!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            
    </div>
    

    <footer>
       <div class="footercontent">
        <h1>Disaster Safety Management</h1>
        <p>This website helps you to take help when you are in danger <br> If you need any type of help in any natural disaster then you can contact with us <br>through this website. We are always available for your service 24X7. Thanks for visiting our website.</p>
        <div class="icons">
        <a href="https://www.facebook.com/ashishkumar.anand.0125"><img src="./icons/facebook.png" alt="" class="sociall"></a>
        <a href="https://www.instagram.com/its_ak_anand/"><img src="./icons/instagram.png" alt="" class="sociall"></a>
        <a href="https://www.linkedin.com/in/ashish-kumar-anand-526597215/"><img src="./icons/linkedin.png" alt="" class="sociall"></a>
        <a href="https://wa.me/8434463000"><img src="./icons/whatsapp.png" alt="" class="sociall"></a>
        </div>
        <p>This website is under copyright &copy; of Ashish Kumar Anand</p>
       </div>
    </footer>





    <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }

        const modal = document.querySelector(".modal");
const trigger = document.querySelector(".trigger");
const closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);

var citiesByState = {
Bihar: ["Saharsa","Supaul","Madhepura"],
Uttarpradesh: ["Lucknow","Mirzapur","shahjadapur"],
NewDelhi: ["New delhi","Rohilla"]
}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = citiesOptions;
}
}
function displaySelected() { var country = document.getElementById("countrySelect").value;
var city = document.getElementById("citySelect").value;
alert(country+"\n"+city);
}
function resetSelection() {
document.getElementById("countrySelect").selectedIndex = 0;
document.getElementById("citySelect").selectedIndex = 0;
}

</script>
</body>
</html>