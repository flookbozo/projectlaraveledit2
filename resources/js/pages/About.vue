<template>
  <div>
    <div id="about" class="container-fluid" style="background-color: #3a4750">
      <div class="row">
        <div class="col-sm-8">
          <h6>About</h6>
          <br />
          <h4>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
          </h4>
          <br />
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-signal logo"></span>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="background-color: #d72323">
      <div class="row">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-globe logo slideanim"></span>
        </div>
        <div class="col-sm-8">
          <h10>Our Values</h10>
          <br />
          <h10>
            <strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet,
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </h10>
          <br />
          <h10>
            <strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet,
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat.
          </h10>
        </div>
      </div>
    </div>

    <!-- Container (Services Section) -->
    <div
      id="services"
      class="container-fluid text-center"
      style="background-color: #eeeeee"
    >
      <h5>Blood Donate</h5>
     <img src="images/Untitled-3.jpg" alt="" />
    </div>

    <!-- Container (Portfolio Section) -->
    <div id="portfolio" class="container-fluid text-center" style="background-color: #303841">
      <h2>Portfolio</h2>
      <br />
      <h4>What we have created</h4>
      <div class="row text-center slideanim">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="https://images.unsplash.com/photo-1615461065624-21b562ee5566?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2696&q=80" alt="Paris" width="400" height="300" />
            <p><strong>Paris</strong></p>
            <p>Yes, we built Paris</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="https://images.unsplash.com/photo-1615461066159-fea0960485d5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2076&q=80" alt="New York" width="400" height="300" />
            <p><strong>New York</strong></p>
            <p>We built New York</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img
              src="https://images.unsplash.com/photo-1615461066841-6116e61058f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2048&q=80"
              alt="San Francisco"
              width="400"
              height="300"
            />
            <p><strong>San Francisco</strong></p>
            <p>Yes, San Fran is ours</p>
          </div>
        </div>
      </div>
      <br />

      <h2>What our customers say</h2>
      <div
        id="myCarousel"
        class="carousel slide text-center"
        data-ride="carousel"
      >
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <h4>
              "This company is the best. I am so happy with the result!"<br /><span
                >Michael Roe, Vice President, Comment Box</span
              >
            </h4>
          </div>
          <div class="item">
            <h4>
              "One word... WOW!!"<br /><span>John Doe, Salesman, Rep Inc</span>
            </h4>
          </div>
          <div class="item">
            <h4>
              "Could I... BE any more happy with this company?"<br /><span
                >Chandler Bing, Actor, FriendsAlot</span
              >
            </h4>
          </div>
        </div>

      </div>
    </div>
  </div>
</template>
 <style>

h2 {
  font-size: 24px;
  text-transform: uppercase;
  color: #eeee;
  font-weight: 600;
  margin-bottom: 30px;
}
h4 {
  font-size: 19px;
  line-height: 1.375em;
  color: #eeee;
  font-weight: 400;
  margin-bottom: 30px;
}
h10 {
     font-size: 19px;
  line-height: 1.375em;
  color: #fff;
  font-weight: 400;
  margin-bottom: 30px;
}
h5{
    font-size: 24px;
  text-transform: uppercase;
  color: #3a4750;
  font-weight: 600;
  margin-bottom: 30px;
}
h6{
 font-size: 150px;
  text-transform: uppercase;
  color: #eeee;
  font-weight: 600;
  margin-bottom: 20px;
}
.jumbotron {
  background-color: #f4511e;
  color: #fff;
  padding: 100px 25px;
}
.container-fluid {
  padding: 60px 50px;
}
.bg-grey {
  background-color: #f6f6f6;
}

.carousel-control.right,
.carousel-control.left {
  background-image: none;
  color: #eee;
}
.carousel-indicators li {
  border-color: #f4511e;
}
.carousel-indicators li.active {
  background-color: #f4511e;
}
.item h4 {
  font-size: 19px;
  line-height: 1.375em;
  font-weight: 400;

  margin: 70px 0;
}

.slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
</style>