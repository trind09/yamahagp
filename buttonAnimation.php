<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .bigpadding:hover {

    }
.wt-btn_sign {
    transform: matrix(1, 0, 0, 1, 0, 0);
    visibility: inherit;
    opacity: 1;
    position: absolute;
    top: 20%;
    z-index: 205;
    font-size: 23px;
  font-family: 'Montserrat', sans-serif;
    font-weight: 400;
    letter-spacing: -.21px;
    white-space: nowrap;
    -webkit-transition: color .3s;
    -o-transition: color .3s;
    -moz-transition: color .3s;
    transition: color .3s;
    line-height: 20px;  
    color: #f6416c;
    background: #ffde7d;
    border: none;
    height: 45px;
    padding: 0 5px;
    -webkit-border-radius: 22px;
    -moz-border-radius: 22px;
    border-radius: 22px;
}
#register-btn{
    left: 5%;
}
#ticket-btn {
    right:10%
}

.wt-btn_sign:hover {
    color: #ffde7d;
    background: #f6416c;
    }

.wt-btn_sign-bound {
    display: block;
    overflow: hidden;
}

.wt-btn_sign-bound span {
    position: relative;
    display: inline-block;
  padding:0 22px;
        -webkit-animation: wt-btn_sign-marquee 2s linear infinite;
        -moz-animation: wt-btn_sign-marquee 2s linear infinite;
        -o-animation: wt-btn_sign-marquee 3s linear infinite;
        animation: wt-btn_sign-marquee 3s linear infinite;
}

.wt-btn_sign-bound span:after {
        content:attr(data-text);
        position: absolute;
        left: 100%;
        padding: 0 23px;
    }

@-webkit-keyframes wt-btn_sign-marquee {
    0% {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    100% {
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }
}

@-moz-keyframes wt-btn_sign-marquee {
    0% {
        -moz-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    100% {
        -moz-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }
}

@-o-keyframes wt-btn_sign-marquee {
    0% {
        transform: translate3d(0,0,0)
    }

    100% {
        transform: translate3d(-100%,0,0)
    }
}

@keyframes wt-btn_sign-marquee {
    0% {
        -webkit-transform: translate3d(0,0,0);
        -moz-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    100% {
        -webkit-transform: translate3d(-100%,0,0);
        -moz-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }
}


body {
	 background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
	 height: 100vh;
	 overflow: hidden;
	 display: flex;
	 justify-content: center;
	 align-items: center;
}
 a {
	 position: relative;
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 width: 200px;
	 height: 50px;
	 background: #fff;
	 border-radius: 999px;
     animation: burn 1000ms ease-out forwards;
}
 /* a:hover {
	 animation: burn 1000ms ease-out forwards;
} */
 a:hover::before {
	 content: '';
	 position: absolute;
	 left: 40px;
	 width: 100px;
	 height: 40px;
	 background: rgba(255, 230, 110, 1);
	 border-radius: 100%;
	 animation: flare 1000ms ease-out forwards;
}
 a:hover::after {
	 content: '';
	 position: absolute;
	 right: 40px;
	 width: 100px;
	 height: 40px;
	 background: rgba(255, 230, 110, 1);
	 border-radius: 100%;
	 animation: flare 1000ms ease-out forwards;
}
 @keyframes flare {
	 100% {
		 transform: translateY(-20px) scale(1.5);
		 filter: blur(10px);
		 opacity: 0;
	}
}
 @keyframes burn {
	 0% {
		 color: rgba(255, 130, 110, 1);
		 background: rgba(255, 230, 110, 1);
		 box-shadow: 0 0 5px 0 rgba(200, 0, 10, 1), 0 0 5px 0 rgba(230, 30, 10, 0.8), 0 0 5px 0 rgba(230, 230, 10, 0.6);
	}
	 100% {
		 color: rgba(0, 0, 0, 1);
		 background: rgba(255, 255, 255, 1);
		 box-shadow: 0 -35px 40px 30px rgba(255, 130, 10, 0), 0 -30px 30px 10px rgba(230, 30, 10, 0), 0 -20px 10px 0 rgba(255, 255, 10, 0);
	}
}
 

</style>
<body>
<div class="bigpadding">
  <button href="#register" id="register-btn" class="wt-btn_sign js-joinnow "><span class="wt-btn_sign-bound"><span data-width="#fff" data-text="Đăng Ký Thi Đấu">Đăng Ký Thi Đấu</span></span></button>
  <button href="https://ticketbox.vn/vr-fest-2020#booking" id="ticket-btn" class="wt-btn_sign js-joinnow "><span class="wt-btn_sign-bound"><span data-width="#fff" data-text="Mua Vé">Mua Vé</span></span></button>
  </div>

  <a>🔥🔥🔥</a>
  
</body>
</html>