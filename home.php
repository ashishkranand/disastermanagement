<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Management System</title>
    <link rel="stylesheet" href="./css/homestyle.css">
</head>
<body>
    <div class="heading">
        <h1 class="head1">Disaster Management System</h1>
    </div>
    <div class="main">
    <nav class="navig">
        <ul>
            <a href="#"><li onclick="showform()">Help</li></a>
            <a href="./status.php"><li>status</li></a>
            <a href="./project/login.php"><li>Logout</li></a>
        </ul>
    </nav>
       <div class="main1">
       <div class="container" id="basic">
           <h2>Welcome you to Disaster Management System</h2>
            <!-- Lorem, ipsum do lor sit amet consectetur adipisicing elit. Corrupti a iusto fuga sed quis dolores, rerum aspernatur maiores ut totam quaerat porro, atque blanditiis voluptatem vel cupiditate quidem nostrum excepturi perferendis dolorem esse? Culpa quisquam tempora autem fugiat molestiae placeat, aut mollitia atque beatae optio neque? Autem nemo non voluptatem neque iure quia delectus provident. Praesentium nesciunt explicabo natus, odit ipsa quasi adipisci similique incidunt. Laudantium porro accusantium, fugit minima hic dolores quis quo dolorem quasi ducimus sequi at temporibus, harum sunt quisquam. Reprehenderit quis commodi recusandae id itaque blanditiis quia corrupti, laborum nemo, incidunt tenetur voluptas qui pariatur enim tempora nisi. Temporibus fugiat error, dolorem harum molestiae, quia eaque tempore deserunt hic iste dolores tempora inventore labore consectetur cum magnam porro impedit sapiente! Consequuntur fuga dolores pariatur sunt veniam perspiciatis similique libero, corporis doloremque voluptatem nam? Expedita, optio possimus accusantium accusamus aspernatur ex quibusdam praesentium reiciendis impedit iure eos tenetur laudantium minima. A perspiciatis possimus harum molestiae earum, tenetur vero culpa odio pariatur porro, distinctio consequuntur? Obcaecati sunt cumque veniam. Quos suscipit laboriosam eos, fugiat fugit alias voluptates beatae, exercitationem officiis vero aperiam tempore, impedit et facere aspernatur? Explicabo laborum dolor beatae quasi, molestiae est sed aliquid ut voluptate vero officiis modi minus voluptates minima. Ab esse magni architecto natus consequuntur quibusdam, dolor aliquam rem veritatis! At aliquid distinctio numquam quibusdam tempore nam necessitatibus labore, doloremque, porro ratione delectus quaerat esse magni corporis voluptatem ipsa perferendis cupiditate ea nobis! Provident vel, ad, aliquid earum ducimus cupiditate exercitationem beatae qui dolores dolorem nam molestiae! Minima dolorum magnam amet unde libero aliquam recusandae, asperiores eius fuga id sequi accusantium obcaecati! Aliquid temporibus assumenda similique asperiores vel aspernatur vitae laboriosam dolore ex mollitia nemo iure, officia quaerat obcaecati, a minus atque voluptatem at. Iure natus, repellat corrupti illo esse molestiae! Ducimus, ad esse? Delectus totam excepturi ipsam nobis distinctio officiis sunt, vel voluptas harum repellendus, similique quasi in debitis eveniet quae? Sit soluta tempora temporibus provident aut necessitatibus tempore eveniet corporis praesentium impedit, similique vitae nesciunt quae, voluptates laborum molestias nemo sapiente quasi voluptatum totam. Iure eaque voluptas repellat ab odit architecto velit porro, assumenda sunt optio eum saepe ipsa! Consequatur obcaecati corporis reiciendis. Perferendis dolor, repellat omnis repudiandae pariatur blanditiis! Accusantium, non aut ut nobis voluptatem temporibus earum dolore est quisquam dicta ab accusamus sapiente illum amet ea ipsam? Nulla hic non iure quasi architecto quisquam iste error fugiat nobis? Sint, totam nisi. Repudiandae et aperiam blanditiis est ullam quod autem pariatur nulla consectetur eveniet asperiores neque, officiis, omnis similique voluptates doloremque quis consequuntur iste commodi voluptate labore dolorum excepturi debitis culpa. Beatae nostrum ad minima aliquid vel esse nobis quibusdam ea ratione optio expedita id libero, asperiores aperiam placeat! Fuga ea id quaerat accusamus perspiciatis? -->
            <h3>In this website , you can take help by write your message, when you'll send your message our team will contact you as soon as possible and you can also track your help status by clicking on status button which is available above. You can take help of any type of disaster . If you feel during disaster that no one is there to help you then you can take help from our team and we promise you that we will help you to take out of disaster.</h3>
            <h2 style="text-align: center;">Some of Images of disaster</h2>
            <div class="imgcontainer">
            <div class="images">
                <div class="img">
                    <img src="./image/earhquake.jpg" alt="">
                </div>
                <div class="img">
                    <img src="./image/Floods.jpg" alt="">
                </div>
                <div class="img">
                    <img src="./image/ExtremeHeat.jpg" alt="">
                </div>
                <div class="img">
                    <img src="./image/Hurricanes.jpg" alt="">
                </div>
                <div class="img">
                    <img src="./image/Tsunamis.jpg" alt="">
                </div>
                <div class="img">
                    <img src="./image/earhquake.jpg" alt="">
                </div>
                <div class="img">
                    <img src="./image/Floods.jpg" alt="">
                </div>
                <div class="img">
                    <img src="./image/ExtremeHeat.jpg" alt="">
                </div>
                <div class="img">
                    <img src="./image/Hurricanes.jpg" alt="">
                </div>
                <div class="img">
                    <img src="./image/Tsunamis.jpg" alt="">
                </div>
                
            </div>
            </div>
            
        </div>
        <div class="container1" id="forms">
  <form action="./help.php" method="POST" enctype="multipart/form-data">
    <h2 style="color: white;text-align: center;">Fill this form for help and click on send button</h2>
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="lname">Mobile number</label>
    <input type="text" id="mobile" name="mobile" placeholder="Your mobile number..">

    <label for="lname">Current location</label>
    <input type="text" id="location" name="location" placeholder="Your current location..">

    <label for="lname">Type of disaster (Flood / Earthquake / Hurricane / Extreme heat / Tsunami)</label>
    <!-- <input type="text" id="mobile" name="type" placeholder="Type of disaster.."> -->
    <select name="type" id="">
        <option value="select">Select type of disaster</option>
        <option value="Earthquake">Earthquake</option>
        <option value="Flood">Flood</option>
        <option value="Hurricane">Hurricane</option>
        <option value="Extreme heat">Extreme heat</option>
        <option value="Tsunami">Tsunami</option>
    </select>


    <label for="subject">Problem</label>
    <textarea id="message" name="problem" placeholder="Write your problem.." style="height:200px"></textarea>

    <input type="submit" value="Send">
  </form>
</div>

       </div>
    </div>



    <script>
        function showform(){
            document.getElementById('forms').style.display="block"
            document.getElementById('basic').style.display="none"
        }
    </script>
</body>
</html>