<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar background">
      <ul class="nav-list">
        <div class="logo">
        <img alt="logo" src="https://i.postimg.cc/zDyt7KCv/a1.jpg">
        </div>
        <li><a href="#home">Home</a></li>
        <li><a href="#home">About Us</a></li>
        <li><a href="#home">Services</a></li>
        <li><a href="#home">Contact Us</a></li>
      </ul>
      <div class="rightNav">
        <input type="text" name="search" id="search" />
        <button class="btn btn-sm">search</button>
      </div>
    </nav>
    <section class="background firstSection">
      <div class="box-main">
        <div class="firstHalf">
          <p class="text-big">The Future of Education Here</p>
          <p class="text-small">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus
            quas sit ex vero minima fuga unde beatae, eligendi suscipit facere
            optio. Recusandae, esse libero nesciunt quam magnam veritatis rem
            minima?
          </p>
          <div class="buttons">
            <button class="btn1 btn1-sm">Subscribe</button>
            <button class="btn1 btn1-sm">Visit</button>
          </div>
        </div>
        <div class="secondHalf">
        <img
          height="220px"
          width="170px"
          src="https://source.unsplash.com/900x900/?coding.apple"
          alt="info image"
          />
        </div>
      </div>
    </section>

    <section class="section war">
      <div class="paras">
        <p class="sectionTag text-big">The end of your serch is Here</p>
        <p class="sectionSubTag text-small">
          Education is the process of facilitating learning, or the acquisition
          of knowledge, skills, values, morals, beliefs, and habits. Educational
          methods include teaching, training, storytelling, discussion and
          directed research. Education frequently takes place under the guidance
          of educators, however learners can also educate themselves. Education
          can take place in formal or informal settings and any experience that
          has a formative effect on the way one thinks, feels, or acts may be
          considered educational. The methodology of teaching is called
          pedagogy. Formal education is commonly divided formally into such
          stages as preschool or kindergarten, primary school, secondary school
          and then college, university, or apprenticeship.
        </p>
      </div>
      <div class="thumbnail">
        <img
          class="imgFluid"
          src="https://source.unsplash.com/900x900/?coding.apple"
          alt="info image"/>
        <!-- <img class="immgFluid" src="https://source.unsplash.com/user/erondu/900x900"> -->
      </div>
    </section>
    <hr />

    <section class="section section-left">
      <div class="paras">
        <p class="sectionTag text-big">The end of your serch is Here</p>
        <p class="sectionSubTag text-small">
          focus on understanding how people's personality affects the way they
          interact personally, and how this affects the way individuals respond
          to each other within the learning environment. The work of David Kolb
          and Anthony Gregorc's Type Delineator[70] follows a similar but more
          simplified approach. Some theories propose that all individuals
          benefit from a variety of learning modalities, while others suggest
          that individuals may have preferred learning styles, learning more
          easily through visual or kinesthetic experiences.[71] A consequence of
          the latter theory is that effective teaching should present a variety
          of teaching methods which cover all three learning modalities so that
          different students have equal opportunities to learn in a way that is
          effective for them.[72] Guy Claxton has questioned the extent that
          learning styles such as Visual, Auditory and Kinesthetic(VAK) are
          helpful, particularly as they can have a tendency to label children
          and therefore restrict learning.[73][74] Recent research has argued,
          "there is no adequate evidence base to justify incorporating learning
          styles assessments into general educational practice
        </p>
      </div>
      <div class="thumbnail">
        <img
          class="imgFluid"
          src="https://source.unsplash.com/900x900/?coding.apple,javascript"
          alt="info image"
        />
      </div>
    </section>
    <hr />

    <section class="section">
      <div class="paras">
        <p class="sectionTag text-big">The end of your serch is Here</p>
        <p class="sectionSubTag text-small">
          Paints, pantomimes and piccolos – the arts are on display in our
          movies, on TV sets, and along city streets. But in recent years
          schools have had an uneasy relationship with arts education,
          sidelining stand-alone classes here while adding elements of the arts
          there. Yet after years of debate over perceived declines in access to
          arts education in U.S. schools, efforts are underway to expand funding
          and opportunities for students to draw, drum or dance.Over the past
          two decades, charter schools have emerged as the fastest growing form
          of school choice, outpacing other alternatives such as vouchers,
          magnet schools, and homeschooling. Charters have also become a
          touchstone for how people feel about a host of related issues: job
          protections for teachers, the role of elected school boards and
          teachers unions, and the privatization of schools. The materials
          compiled in this Topics section examine the ways charter schools and
          other school choice options play out in the education process.
        </p>
      </div>
      <div class="thumbnail">
        <img
          class="imgFluid"
          src="https://source.unsplash.com/900x900/?javascript.css"
          alt="info image"
        />
      </div>
    </section>

    <section class="contact">
      <h2 class="text-center">Contact Us</h2>
      <div class="form">
        <form method="POST">
          <input
            class="form-input"
            type="text"
            name="name"
            placeholder="Enter your name"
            id="name"
          />
          <input
            class="form-input"
            type="number"
            name="phone"
            placeholder="Enter your phone number"
            id="phone"
          />
          <input
            class="form-input"
            type="email"
            name="email"
            placeholder="Enter your email"
            id="email"
          />
          <textarea
            class="form-input"
            name="textarea"
            id="text"
            cols="30"
            rows="10"
            placeholder="Ellaburate your concern"
          ></textarea>
          <button class="btn btn-dark" name="submit">Submit</button>
          <!-- <input type="button" name="valid" value="submit" /> -->
        </form>
      </div>
    </section>

    <!--  ----------------------------------------Footer Section  -------------------------------------------------    -->

    <footer class="background">
      <p class="text-footer">Copyright &copy; 2027 -All rights reserved</p>
    </footer>
  </body>
</html>

<?php

include "connection.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['phone'];
    $email = $_POST['email'];
    $texxt = $_POST['textarea'];

    $insertQuery = "insert into registration (name , mobile , email , text) values ('$name' , '$mobile' , '$email', '$texxt')";

    $insert = mysqli_query($conn , $insertQuery);

    if($insert){
        ?>
<script>
  alert("Inserted Successfully");
</script>
<?php
    }else{
        ?>
<script>
  alert("Data not inserted");
</script>
<?php
    }
    

}

?>
