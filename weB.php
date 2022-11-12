<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a Website Using HTML/CSS</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>
<body>
<a href="C:\Users\user\OneDrive\Documents\GitHub\module2_solution\css.php">CSS</a>
<HEADER>
<h1><a href="#">Technology Inteligence</a></h1>
<ul>
            <li><a href="index.html" class="current">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <div id="showcase">
        <div class="container">
          <div class="showcase-content">
            <h2>The Technology Inteligence</h2>
            <p class="lead">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique delectus ut velit
              ducimus quaerat quisquam, ex, suscipit deleniti illum consequatur omnis deserunt,
              placeat facere quasi dolores cupiditate non error necessitatibus! Lorem ipsum dolor,
              sit amet consectetur adipisicing elit.
            </p> 
            </div>
        </div>
      </div>
    </header>   
    <section class="about">
      <div class="container">
        <h3 class="bg-dark-line"><span>About Us</span></h3>
        <p class="lead">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi beatae nobis officiis illum
          quo eum deserunt fuga numquam! Provident sint iusto, doloremque quae consectetur ipsa
          harum minus enim in possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Quasi beatae nobis officiis illum quo eum deserunt fuga numquam! Provident sint iusto,
          doloremque quae consectetur ipsa harum minus enim in possimus. Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Quasi beatae nobis officiis illum quo eum deserunt fuga
          numquam! Provident sint iusto, doloremque quae consectetur ipsa harum minus enim in
          possimus.
        </p>
        <p class="lead">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique debitis neque
          exercitationem. A, consequatur magnam asperiores impedit adipisci perferendis ab aperiam!
          Voluptatum ducimus ratione maiores. Et ut maxime accusamus mollitia. Lorem ipsum dolor,
          sit amet consectetur adipisicing elit. Iusto, fuga. Voluptatibus, tenetur veritatis
          ratione tempore optio quas debitis quis accusamus culpa maiores dolor facilis obcaecati
          aspernatur suscipit cupiditate perspiciatis minus?
        </p>
      </div>
    </section>
    <div id="services">
      <div class="container">
        <h3 class="bg-dark-line"><span>Services</span></h3>
        <div class="box bg-primary">
          <h2>Web Designing</h2>
          <i class="fa-solid fa-paintbrush fa-4x"></i>
          <p class="lead">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam iusto, pariatur sint
            culpa vero impedit ex tenetur doloremque, nihil corrupti, amet soluta? Earum, quidem
            culpa.
          </p>
        </div>
        <div class="box light-gray">
          <h2>Web Development</h2>
          <i class="fa-solid fa-code fa-4x"></i>
          <p class="lead">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam iusto, pariatur sint
            culpa vero impedit ex tenetur doloremque, nihil corrupti, amet soluta? Earum, quidem
            culpa.
          </p>
        </div>
        <div class="box bg-primary">
          <h2>Desktop Application</h2>
          <i class="fa-solid fa-desktop fa-4x"></i>
          <p class="lead">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam iusto, pariatur sint
            culpa vero impedit ex tenetur doloremque, nihil corrupti, amet soluta? Earum, quidem
            culpa.
            div id="authors">
      <div class="container">
        <h3><span>Authors</span></h3>
        <div class="auth">
          <img src="./img/Authors/person1.png" alt="" />
          <p class="names">KUNTAL DAS</p>
          <p>Admin</p>
          <p class="lead">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem aut quod, earum
            quaerat eveniet doloribus quasi nam est illo reiciendis fugiat sit blanditiis omnis
            cumque quos error temporibus quisquam eligendi?
          </p>
        </div>
        <div class="auth">
          <img src="./img/Authors/person4.png" alt="" />
          <p class="names">Suzi</p>
          <p>Manager</p>
          <p class="lead">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem aut quod, earum
            quaerat eveniet doloribus quasi nam est illo reiciendis fugiat sit blanditiis omnis
            cumque quos error temporibus quisquam eligendi?
          </p>
        </div>
        <div class="auth">
          <img src="./img/Authors/person3.png" alt="" />
          <p class="names">Jason</p>
          <p>Accountant</p>
          <p class="lead">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem aut quod, earum
            quaerat eveniet doloribus quasi nam est illo reiciendis fugiat sit blanditiis omnis
            cumque quos error temporibus quisquam eligendi?
          </p>
        </div>
      </div>
    </div>

    <!-- Contact -->
    <div id="contact">
      <div class="container">
        <h3><span>Contact Us</span></h3>
        <div class="contact-form">
          <form action="process.php">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="name" />
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <button type="button" class="btn">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <footer id="main-footer">
      <div class="container">
        <p>
          </p>
        </div>
      </div>
    </div>   
</body>
</html>