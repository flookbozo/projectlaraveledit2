<template>
   <div class="container">
    <div class="card">
      <div class="card-header">
        <h3 class="mb-0">Edit Hospital</h3>
      </div>
      <div class="card-body">
        <div class="col-md-6 offset-md-3">
          <form @submit.prevent="updatePost">
            <div class="form-group">
              <label>Email</label>
              <input
                type="email"
                class="form-control"
                placeholder="Email"
                v-model="post.email"
              />
            </div>

            <label>ชื่อผู้ดูแล</label>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <select class="form-control Prefix" v-model="post.prefix">
                    <option value="">คำนำหน้า</option>
                    <option>นาย</option>
                    <option>นาง</option>
                    <option>นางสาว</option>
                  </select>
                </div>
                <div class="col">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="ชื่อ"
                    v-model="post.firstname"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="นามสกุล"
                    v-model="post.lastname"
                  />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>ชื่อโรงพยาบาล</label>
              <input
                type="text"
                class="form-control"
                placeholder="ชื่อโรงพยาบาล"
                v-model="post.hospitalname"
              />
            </div>
            <div class="form-group">
              <label>ที่อยู่โรงพยาบาล</label>
              <div>
                <textarea
                  class="form-control"
                  name="address"
                  id="address"
                  placeholder="ที่อยู่โรงพยาบาล"
                  v-model="post.hospitaladdress"
                ></textarea>
              </div>
            </div>
            <div class="form-group">
              <label>จังหวัด</label>
              <select class="form-control Prefix" v-model="post.provine">
                <option value="">กรุณาเลือกจังหวัด</option>
                <option>กระบี่</option>
                <option>กรุงเทพมหานคร</option>
                <option>กาญจนบุรี</option>
                <option>กาฬสินธุ์</option>
                <option>กำแพงเพชร</option>
                <option>ขอนแก่น</option>
                <option>จันทบุรี</option>
                <option>ฉะเชิงเทรา</option>
                <option>ชลบุรี</option>
                <option>ชัยนาท</option>
                <option>ชัยภูมิ</option>
                <option>ชุมพร</option>
                <option>เชียงราย</option>
                <option>เชียงใหม่</option>
                <option>ตรัง</option>
                <option>ตราด</option>
                <option>ตาก</option>
                <option>นครนายก</option>
                <option>นครปฐม</option>
                <option>นครพนม</option>
                <option>นครราชสีมา</option>
                <option>นครศรีธรรมราช</option>
                <option>นครสวรรค์</option>
                <option>นนทบุรี</option>
                <option>นราธิวาส</option>
                <option>น่าน</option>
                <option>บึงกาฬ</option>
                <option>บุรีรัมย์</option>
                <option>ปทุมธานี</option>
                <option>ประจวบคีรีขันธ์</option>
                <option>ปราจีนบุรี</option>
                <option>ปัตตานี</option>
                <option>พระนครศรีอยุธยา</option>
                <option>พะเยา</option>
                <option>พังงา</option>
                <option>พัทลุง</option>
                <option>พิจิตร</option>
                <option>พิษณุโลก</option>
                <option>เพชรบุรี</option>
                <option>เพชรบูรณ์</option>
                <option>แพร่</option>
                <option>ภูเก็ต</option>
                <option>มหาสารคาม</option>
                <option>มุกดาหาร</option>
                <option>แม่ฮ่องสอน</option>
                <option>ยโสธร</option>
                <option>ยะลา</option>
                <option>ร้อยเอ็ด</option>
                <option>ระนอง</option>
                <option>ระยอง</option>
                <option>ราชบุรี</option>
                <option>ลพบุรี</option>
                <option>ลำปาง</option>
                <option>ลำพูน</option>
                <option>เลย</option>
                <option>ศรีสะเกษ</option>
                <option>สกลนคร</option>
                <option>สงขลา</option>
                <option>สตูล</option>
                <option>สมุทรปราการ</option>
                <option>สมุทรสงคราม</option>
                <option>สมุทรสาคร</option>
                <option>สระแก้ว</option>
                <option>สระบุรี</option>
                <option>สิงห์บุรี</option>
                <option>สุโขทัย</option>
                <option>สุพรรณบุรี</option>
                <option>สุราษฎร์ธานี</option>
                <option>สุรินทร์</option>
                <option>หนองคาย</option>
                <option>หนองบัวลำภู</option>
                <option>อ่างทอง</option>
                <option>อำนาจเจริญ</option>
                <option>อุดรธานี</option>
                <option>อุตรดิตถ์</option>
                <option>อุทัยธานี</option>
                <option>อุบลราชธานี</option>
              </select>
            </div>
            <div class="form-group">
              <label>รหัสไปรษณีย์</label>
              <input
                type="text"
                class="form-control"
                placeholder="รหัสไปรษณีย์"
                v-model="post.addresscode"
              />
            </div>
            <div class="form-group">
              <label>เบอร์โทรศัพท์โรงพยาบาล</label>
              <input
                class="form-control"
                placeholder="เบอร์โทรศัพท์"
                v-model="post.phonnumber"
              />
            </div>
            <div class="form-group">
              <label>ละติจูด</label>
              <input
                type="text"
                class="form-control"
                placeholder="ตัวอย่าง: 13.716331"
                v-model="post.hospitallattitude"
              />
            </div>
            <div class="form-group">
              <label>ลองจิจูด</label>
              <input
                type=""
                class="form-control"
                placeholder="ตัวอย่าง: 100.5917665"
                v-model="post.hospitallongitude"
              />
            </div>
            <div class="form-group">
              <label>Name</label>
              <input
                type="text"
                class="form-control"
                v-model="post.hospitalname"
              />
            </div>
            <div class="form-group"></div>
            <button type="submit" class="btn btn-primary">Update Hospital</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "edithospital",
  props: ["app"],
  data() {
    return {
      post: null,

      hospital: {},
    };
  },
  created() {
    axios.get(`api/edithospital/${this.$route.params.id}`)
    .then((response) => {
      this.post = response.data;
      console.log(this.post);
    });
  },
  methods: {
    updatePost() {
      axios.post(`api/edithospital/${this.$route.params.id}`,this.post)
      .then((response) => {
        this.$router.push({ name: "profilehospital" });
      });
    },
  },
};
</script>
