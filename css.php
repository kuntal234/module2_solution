<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>css stylesheet</title>

<style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
 
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Poppins';
    line-height: 1.7em;

}

a{
    text-decoration: none;
    color: #fff;
}

.container{
    max-width: 1100px;
    margin:auto;
}

.lead{
    font-size: 16px;
    padding: 10px 10px;
    text-align: justify;
}

.btn{
    display: inline-block;
    padding: 07px 16px;
    background: rgb(38, 94, 222);;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 03px;
    color:#fff;
    transition: all 0.3;
}

.clr{
    clear: both;
}

/* Close Utality Classes */

#navbar{
    background: #3170ff;
    overflow: auto;
}

#navbar h1{
    float: left;
    padding-top: 20px;
}

#navbar ul{
    list-style: none;
    float: right;
}

#navbar ul li{
    float: left;
}

#navbar ul li a{
    display: block;
    padding: 20px;
    text-align: center;
    transition: all 0.5s;
}

#navbar ul li a:hover,
#navbar ul li a.current{
    background: #4397EA;
    transition: all 0.5s;
}

/* Showcase Area */
#showcase{
    background: url('../img/img2.jpg') no-repeat
    center center/cover;
    height: 600px;
    color: #fff;
}

.showcase-content{
    padding-top: 170px;
    color: #333;
}

.showcase-content h2{
   font-size: 60px;
   line-height: 1.9em;
 }

 .showcase-content p{
    font-size: 20px;
    margin-bottom: 20px;
 }

 .showcase-content .btn:hover{
    background: #4397EA;
    border: none;
    color:#fff;
    transition: all 0.3s;
 }

/* About Section */

 .about{
    height: 350px;
    margin-top: 40px;
 }

 .about h3{
    width: 100%;
    border-bottom: 2px solid  #ddd;
 }

 .about h3 span{
    background:  #ddd;;
    padding: 10px 22px;
    color: #333;
    text-align: center;
    display: inline-block;
 }
/* Close */


#services h3{
    width: 100%;
    border-bottom: 0.5px solid #ddd;;
 }

#services h3 span{
    background: #ddd;
    padding: 10px 22px;
    color: #333;
    text-align: center;
    display: inline-block;
 }

 #services .box{
    float: left;
    width: 33.33%;
    padding: 45px;
    text-align: center;
    margin: 30px 0px;
 }

 .bg-primary{
 background: #265ede;
    color: #fff;
 }

 .light-gray{
    background: #ddd;
 }

 #services h2{
  margin-bottom: 25px;
 }

/* Author */

#authors h3{
    width: 100%;
    border-bottom: 0.5px solid #ddd;;
 }

 #authors h3 span{
    background: #ddd;
    padding: 10px 22px;
    color: #333;
    text-align: center;
    display: inline-block;
 }

#authors{
    background: url('../img/img.jpg') no-repeat center;
    height: 600px;
    padding-top: 40px ;

 }

.auth{
    float: left;
    height: 500px;
    width: 33%;
    color: #fff;
    padding: 20px;
    text-align: center;
    margin: 20px 01px;
}

.auth img{
    border-radius: 50%;
}

.names{
    font-weight: bold;
    font-size: 18px;
}

/* Contact Us */
#contact h3{
    width: 100%;
    border-bottom: 0.5px solid #ddd;;
    margin-bottom: 35px;
}

#contact h3 span{
    background: #ddd;
    padding: 10px 22px;
    color: #333;
    text-align: center;
    display: inline-block;
}

#contact .form-group{
    margin-bottom: 20px;
}

.contact-form label{
    display: block;
    margin-bottom: 5px;
}

.contact-form input{
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
}

#contact textarea{
    height: 200px;
    width: 100%;
}

.contact-form input:focus,
.contact-form textarea:focus{
    outline: none;
    border-color: #265ede;
}


/* Footer */

#main-footer{
    background: #265ede;
    padding: 20px;
    margin-top: 20px;
    text-align: center;
    color:#fff;