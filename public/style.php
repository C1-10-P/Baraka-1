<?php
header('Content-type: text/css; charset:UTF-8');
?>

*{
    margin:0;
    padding:0;
    font-family: 'Poppins', sans-serif;
}
.header{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images1/IMG_9906.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
}
nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
}
nav img{
    width: 150px;
}
.nav-links{
    flex:1;
    text-align: right;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a{
    color: #fff;
    text-decoration: none;
    font-size: 13px;
}
.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: black;
    display: block;
    margin: auto;
    transition: 0.5s;
}
.nav-links ul li:hover::after{
    width: 100%;
}
.text-box{
    width: 90%;
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}
.text-box h1{
    font-size: 62px;
}
.text-box p{
    margin: 10px 0px 40px;
    font-size: 14px;
    color: white;
}
.hero-btn{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}
.hero-btn:hover{
    border: 1px solid black;
    background: black;
    transition: 1s;
}
nav .fa{
    display: none;
}
@media(max-width: 700px){
    .text-box h1{
        font-size: 20px;
    }
    .nav-links ul li{
        display: block;
    }
    .nav-links{
        position: fixed;
        background: rgba(0, 0, 0, 0.7);
        height: 100vh;
        width: 200px;
        top:0;
        right: -900px;
        text-align: left;
        z-index: 2;
        transition: 1s;
    }
    nav .fa{
        display: block;
        color:black;
        margin: 10px;
        font-size: 22px;
        cursor: pointer;
    }
    .nav-links{
        padding: 30px;
    }
}
.service{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;

}
h1{
    font-size: 36px;
    font-weight: 600;
}
p{
    color: black;
    font-size: 14px;
    font-weight: 300;
    line-height: 22px;
    padding: 10px;
}
.row{
    margin-top: 5%;
    display:flex;
    justify-content: space-between;
}
.service-col{
    flex-basis: 31%;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    margin-bottom: 5%;
    padding: 20px 12px;
    box-sizing: border-box;
    transition: 0.5s;
}
h3{
    text-align: center;
    font-weight: 600;
    margin: 10px 0;
}
.service-col:hover{
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.9);
}
@media(max-width: 700px){
    .row{
        flex-direction: column;
    }
}
.campus{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
}
.campus-col{
    flex-basis: 32%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}
.campus-col img{
    width: 100%;
    display: block;
}
.layer{
    background: transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: 0.5s;
}
.layer:hover{
    background: rgba(0, 0, 0, 0.7);
}
.layer h3{
    width: 100%;
    font-weight: 500;
    color: #fff;
    font-size: 26px;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.5s;
}
.layer:hover h3{
    bottom: 49%;
    opacity: 1;
}
.testimonials{
    width: 80%;
    margin: auto;
    text-align: justify-center;
    padding-top: 100px;
}
.testimonial-col{
    flex-basis: 44%;
    border-radius: 10px;
    margin-bottom: 5%;
    text-align: left;
    background: rgba(0, 0, 0, 0.3);
    padding: 25px;
    cursor: pointer;
    display: flex;
}
.testimonial-col img{
    height: 40px;
    margin-left: 5px;
    margin-right: 30px;
    border-radius: 50%;
}
.testimonial-col p{
    padding: 0;
}
.testimonial-col h3{
    margin-top: 15px;
    text-align: left;
}
.testimonial-col .fa{
    color: #f44336;
}
@media(max-width:700px){
    .testimonial-col img{
        margin-left: 0px;
        margin-right: 15px;
    }
}
.cta{
    margin: 100px auto;
    width: 80%;
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(images1/IMG_8723.jpg);
    background-position: center;
    background-size: cover;
    border-radius: 10px;
    text-align: center;
    padding: 100px 0;
}
.cta h1{
    color: #fff;
    margin-bottom: 40px;
    padding: 0;
}
@media(max-width:700px){
    .cta h1{
        font-size: 24px;
    }
}

.footer{
    width: 100%;
    text-align: center;
    padding: 30px 0;
}
.footer h4{
    margin-bottom: 25px;
    margin-top: 20px;
    font-weight: 600;
}
.icons .fa{
    margin: 0 13px;
    cursor: pointer;
    padding: 18px 0;
}


.sub-header{
    height: 50vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images1/IMG_8723.jpg);
    background-position: center;
    background-size: cover;
    text-align: center;
    color: #fff;
   
}
.sub-header h1{
    margin-top: 20px;
}
.dash_stats{
    width: 80%;
    margin: auto;
    padding-top: 80px;
    padding-bottom: 50px;
}
.dash-col{
    flex-basis: 48%;
    padding: 30px 2px;
}
.dash-col img{
    width: 100%;
}
.dash-col h1{
    padding-top: 0;
}
.dash-col p{
    padding: 15px 0 25px;
}
.dash-btn{
    border: 1px solid black;
    background: transparent;
    color: black;
}
.dash-btn:hover{
    color: #fff;
    border: #fff;
}
.about-us{
    width: 80%;
    margin: auto;
    padding-top: 80px;
    padding-bottom: 50px;
}
.about-col{
    flex-basis: 48%;
    padding: 30px 2px;
}
.about-col img{
    width: 100%;
}
.about-col h1{
    padding-top: 0;
}
.about-col p{
    padding: 15px 0 25px;
}
.abt-btn{
    border: 1px solid black;
    background: transparent;
    color: black;
}
.abt-btn:hover{
    color: #fff;
    border: #fff;
}

.blog-content{
    width: 80%;
    margin: auto;
    padding: 60px 0;
}
.blog-left{
    flex-basis: 65%;
}
.blog-left img{
    width: 100%;
}
.blog-left h2{
    color: #222;
    font-weight: 600;
    margin: 30px 0;
}
.blog-left p{
    color: #999;
    padding: 0;
}
.blog-right{
    flex-basis: 32%;
}
.blog-right h3{
    background: black;
    color: #fff;
    padding: 7px 0;
    font-size: 16px;
    margin-bottom: 20px;
}
.blog-right div{
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #555;
    padding: 8px;
    box-sizing: border-box;

}

.comment-box{
    border: 1px solid #ccc;
    margin: 50px 0;
    padding: 10px 20px;
}
.comment-box h3{
    text-align: left;
}
.comment-form input,.comment-form textarea{
    width: 100%;
    padding: 10px;
    margin: 15px 0;
    box-sizing: border-box;
    border: none;
    outline: none;
    background: black;
}
.comment-form button{
    margin: 10px 0;
}
@media(max-width:700px){
    .sub-header h1{
        font-size: 24px;
    }
}


.location{
    width: 80%;
    margin: auto;
    padding: 80px 0;
}
.location iframe{
    width: 100%;
}

.contact-us{
    width: 80%;
    margin: auto;
}
.contact-col{
    flex-basis: 48%;
    margin-bottom: 30px;
}
.contact-col div{
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}
.contact-col div .fa{
    font-size: 28px;
    margin: 10px;
    margin-right: 30px;
}
.contact-col div p{
    padding: 0;
}
.contact-col div h5{
    font-size: 20px;
    margin-bottom: 5px;
    font-weight: 400;
}
.contact-col input,.contact-col textarea{
    width: 100%;
    padding: 15px;
    margin-bottom: 20px;
    outline: none;
    border: 1px solid;
    box-sizing: border-box;
}