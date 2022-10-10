@import url(https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700);
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

body, html {
  height: 100%;
}
body {
  font-family: 'Open Sans';
  font-weight: 100;
  display: flex;
  overflow: hidden;
}
input {
  ::-webkit-input-placeholder {
     color: rgba(255,255,255,0.7);
  }
  ::-moz-placeholder {
     color: rgba(255,255,255,0.7);  
  }
  :-ms-input-placeholder {  
     color: rgba(255,255,255,0.7);  
  }
  &:focus {
    outline: 0 transparent solid;
    ::-webkit-input-placeholder {
     color: rgba(0,0,0,0.7);
    }
    ::-moz-placeholder {
       color: rgba(0,0,0,0.7);  
    }
    :-ms-input-placeholder {  
       color: rgba(0,0,0,0.7);  
    }
  }
}

.login-form {     /*el contenedor donde esta todo */
  /*background: White;*/
  /*box-shadow: 0 0 1rem rgba(0,0,0,0.3);  */
  min-height: 10rem;
  margin: auto;
  max-width: 50%;
  padding: .5rem;
}
.login-text {
  /*background: hsl(40,30,60);  */
  /*border-bottom: .5rem solid white;  */
  color: white;
  font-size: 1.5rem;
  margin: 0 auto;
  max-width: 50%;
  padding: .5rem;
  text-align: center;
  /*text-shadow: 1px -1px 0 rgba(0,0,0,0.3);  */
  .fa-stack-1x {
    color: black;
  }
}

.login-info {		/*el border bottom no va y el cuadrado rojo al seleccionar feisimo  */
  background: transparent;
  border: 2px solid white ;
  color: white;
  display: block;
  margin: 1rem;
  padding: .5rem;
  transition: 250ms background ease-in;
  width: calc(100% - 3rem);
  &:focus {
    background: White;
    color: black;
    transition: 250ms background ease-in;
  }
}

.login-erregistro{
  /*border-bottom: 1px solid white; */
  /*bottom: 0; */
  color: white;
  cursor: pointer;
  display: block;
  font-size: 110%;
  left: 0;
  opacity: 0.6;
  padding: .5rem;
  position: absolute;
  text-align: center;
  //text-decoration: none;
  width: 100%;
  &:hover {
    opacity: 1;
  }
}
.login-submit {
  utline:none !important;
	border:1px #1e2329 solid;
	color: #afc1d5;
	text-shadow:0 1px 1px rgba(0,0,0, .2);
	min-height:30px;
	padding:0 10px;
	line-height:30px;
	display:inline-block;
	letter-spacing: normal;
	box-sizing: border-box;
	vertical-align: middle;
	text-decoration: none;
  
  
  border: 1px solid white;
  background: transparent;
  color: white;
  display: inline-block;
  align-items: center;
  transform: translateX(-50%);
  
  justify-content: center;
  margin: 0.5rem auto;
  margin-left: 50%;
  min-width: 1px;
  adding: .25rem;
  transition: 250ms background ease-in;
  &:hover, &:focus {
    background: white;
    color: black;
    transition: 250ms background ease-in;
  }
}






[class*=underlay] {
  left: 0;
  min-height: 100%;
  min-width: 100%;
  position: fixed;
  top: 0;
}
.underlay-photo {
  //animation: hue-rotate 6s infinite;
  background: url('https://www.soydemac.com/wp-content/uploads/2021/12/10.10-Yosemite.jpg');
  background-size: cover;
  -webkit-filter: grayscale(30%);
  z-index: -1;
}
.underlay-black {
  background: rgba(0,0,0,0.7);
  z-index: -1;
}

@keyframes hue-rotate {
  from {
    -webkit-filter: grayscale(30%) hue-rotate(0deg);
  }
  to {
    -webkit-filter: grayscale(30%) hue-rotate(360deg);
  }
}
