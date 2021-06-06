<template>
  <div class="Banner-images">
    <div id="carouselId" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="images/Untitled-1.jpg" alt="First slide" />
          <div class="carousel-caption d-none d-md-block">
         
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/Untitled-2.jpg" alt="Second slide" />
        </div>
        <div class="carousel-item">
          <img src="images/Untitled-4.jpg" alt="Third slide" />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselId"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselId"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <div class="H1">
            <div class="p-3 mb-2 bg-danger text-white">"บทความที่น่าสนใจ"</div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <h4>ความสุขของ “การบริจาคโลหิต”</h4>
                <img
                  src="https://static.thairath.co.th/media/dFQROr7oWzulq5Fa4V4qANWrW0pdH9vmXPj9uOxgirUX3BKKLDZcvKHoED3JxAPLjA5.webp"
                  alt=""
                />
                <a
                  href="https://www.brandbuffet.in.th/2019/04/lpn-blood-donation-csr/"
                  class="btn btn-danger col-xs-12"
                  role="button"
                  >View Snippet</a
                >
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <h4>ทำไมต้องบริจาคโลหิต?</h4>
                <img
                  src="https://static.thairath.co.th/media/dFQROr7oWzulq5Fa4Vt8Uke92MlL0Ygtxa8UglL81auEhUaq8jUD3B0bEv5YzHM6XVy.webp"
                  alt=""
                />
                <a
                  class="btn btn-danger col-xs-12"
                  role="button"
                  href="https://www.redcross.or.th/news/information/13117/"
                  >View Snippet</a
                >
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <h4>บริจาคเลือด ส่งผลดีมากกว่าที่คิด</h4>
                <img
                  src="https://static.thairath.co.th/media/dFQROr7oWzulq5Fa4VnQRboWrCOVznBpo2KGwjocrEkxD55KtnAziS153RRU76jbIoc.webp"
                  alt=""
                />
                <a
                  href="https://hilight.kapook.com/view/27717"
                  class="btn btn-danger col-xs-12"
                  role="button"
                  >View Snippet</a
                >
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="image-hearder">
              <img src="images/Untitled.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
<style >
 .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }
.thumbnail {
  position: relative;
  padding: 0px;
  margin-bottom: 20px;
  margin-top: 30px;
}

.thumbnail > h4 {
  padding: 7px 5px 0px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.thumbnail h4 .info {
  position: absolute;
  top: 0px;
  right: 0px;
  font-size: 10px;
  padding-left: 15px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 4px;
  border-radius: 0px;
  border-bottom-left-radius: 5px;
  cursor: pointer;
}

.thumbnail h4 .info > span {
  margin-right: 10px;
}

.thumbnail img {
  width: 100%;
}
.thumbnail a.btn {
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
}
.card-header .card {
  background-color: #FFF0E2;
}
.H1 {
  padding-top: 15px;
  text-align: center;
  font-size: 20px;
}
.image-hearder {
  padding: 20px;
  width: 100;
}
</style>