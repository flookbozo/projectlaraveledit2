<template>
  <div class="container">
    <div class="registerfrom">
      <nav
        class="nav nav-pills nav-justified navbar-dark"
        style="background-color: #fff0e2"
        id="pills-tab"
        role="tablist"
      >
        <a
          class="nav-item nav-link active"
          id="pills-hospital-tab"
          data-toggle="pill"
          href="#pills-hospital"
          role="tab"
          aria-controls="pills-hospital"
          aria-selected="true"
          >Register Hospital</a
        >
        <a
          class="nav-item nav-link"
          id="pills-user-tab"
          data-toggle="pill"
          href="#pills-user"
          role="tab"
          aria-controls="pills-user"
          aria-selected="false"
          >Register User</a
        >
      </nav>

      <div class="tab-content" id="pills-tabContent">
        <div
          class="tab-pane fade show active"
          id="pills-hospital"
          role="tabpanel"
          aria-labelledby="pills-hospital-tab"
        >
          <div class="card">
            <div class="card-body">
              <div class="col-md-6 offset-md-3">
                <form v-on:submit.prevent="onSubmitHospital">
                  <div class="alert alert-danger" v-if="hospital.errors.length">
                    <ul class="mb-0">
                      <li
                        v-for="(error, index) in hospital.errors" :key="index">
                        {{ error }}
                      </li>
                    </ul>
                  </div>

                  <div class="form-group">
                    <label>Username</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Username"
                      v-model="hospital.username"
                    />
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Password"
                      v-model="hospital.password"
                    />
                  </div>

                  <div class="form-group">
                    <label>Password Again</label>
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Password Again"
                      v-model="hospital.passwordAgain"
                    />
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Email"
                      v-model="hospital.email"
                    />
                  </div>

                  <label>ชื่อผู้ดูแล</label>
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <select
                          class="form-control Prefix"
                          v-model="hospital.prefix"
                        >
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
                          v-model="hospital.firstname"
                        />
                      </div>
                      <div class="col">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="นามสกุล"
                          v-model="hospital.lastname"
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
                      v-model="hospital.hospitalname"
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
                        v-model="hospital.hospitaladdress"
                      ></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>จังหวัด</label>
                    <select
                      class="form-control Prefix"
                      v-model="hospital.provine"
                    >
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
                      v-model="hospital.addresscode"
                    />
                  </div>
                  <div class="form-group">
                    <label>เบอร์โทรศัพท์โรงพยาบาล</label>
                    <input
                      class="form-control"
                      placeholder="เบอร์โทรศัพท์"
                      v-model="hospital.phonnumber"
                    />
                  </div>
                  <div class="form-group">
                    <label>ละติจูด</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="ตัวอย่าง: 13.716331"
                      v-model="hospital.hospitallattitude"
                    />
                  </div>
                  <div class="form-group">
                    <label>ลองจิจูด</label>
                    <input
                      type=""
                      class="form-control"
                      placeholder="ตัวอย่าง: 100.5917665"
                      v-model="hospital.hospitallongitude"
                    />
                  </div>

                   <div class="form-group">
                    <div class="card">
                      <div
                        class="card-header"
                        style="background-color: #ff4343"
                      >
                        <h9 class="mb-3" style="color: #fff0e2"
                          >เลือกคำถามและคำตอบเพื่อความปลอดภัย</h9
                        >
                      </div>
                    </div>
                    <div class="form-group">
                      <label
                        >*คำถามเหล่านี้จะถูกใช้เพื่อยืนยันตัวตนของคุณ
                        และช่วยกู้คืนรหัสผ่านหากคุณลืม</label
                      >
                      <div
                        class="rs-select4 js-select-simple select--no-search"
                      >
                        <select
                          class="form-control typeblood"
                          v-model="hospital.question"
                        >
                          <option value="">โปรดเลือกคำถาม</option>
                          <option>สัตว์เลี้ยงตัวแรก</option>
                          <option>ชื่อสัตว์เลี้ยงตัวแรก</option>
                        </select>
                        <div class="select-dropdown"></div>
                      </div>

                      <input
                        class="form-control"
                        placeholder="คำตอบ"
                        v-model="hospital.answer"
                      />
                    </div>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-success btn-lg">สมัคร</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="pills-user"
          role="tabpanel"
          aria-labelledby="pills-user-tab"
        >
          <div class="card">
            <div class="card-body">
              <div class="col-md-6 offset-md-3">
                <form v-on:submit.prevent="onSubmitUser">
                  <div class="alert alert-danger" v-if="user.errors.length">
                    <ul class="mb-0">
                      <li v-for="(error, index) in user.errors" :key="index">
                        {{ error }}
                      </li>
                    </ul>
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Username"
                      v-model="user.username"
                    />
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Password"
                      v-model="user.password"
                    />
                  </div>

                  <div class="form-group">
                    <label>Password Confirm</label>
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Password Confirm"
                      v-model="user.passwordAgain"
                    />
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Email"
                      v-model="user.email"
                    />
                  </div>

                  <label>ชื่อ</label>
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <select
                          class="form-control Prefix"
                          v-model="user.prefix"
                        >
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
                          v-model="user.firstname"
                        />
                      </div>
                      <div class="col">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="นามสกุล"
                          v-model="user.lastname"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>เพศ</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                      <select class="form-control gender" v-model="user.gender">
                        <option value="">โปรดเลือกเพศ</option>
                        <option value="ชาย">ชาย</option>
                        <option value="หญิง">หญิง</option>
                      </select>
                      <div v-if="user.gender == 'หญิง'">
                        <label style="color: red"
                          >*โปรดกรอกข้อมูลเพิ่มเติม*</label
                        >
                        <div class="form-group">
                          <label>คุณอยู่ในระหว่างการตั้งครรภ์</label>
                          <div class="form-group">
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="ใช่"
                                v-model="user.duringpregnancy"
                              />
                              <label class="form-check-label" for="inlineRadio1"
                                >ใช่</label
                              >
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio2"
                                value="ไม่ใช่"
                                v-model="user.duringpregnancy"
                              />
                              <label class="form-check-label" for="inlineRadio2"
                                >ไม่ใช่</label
                              >
                            </div>
                          </div>
                          <label>คุณอยู่ในระหว่างการให้นมบุตรหรือไม่</label>
                          <div class="form-group">
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions1"
                                id="inlineRadio1"
                                value="ใช่"
                                v-model="user.breastfeeding"
                              />
                              <label class="form-check-label" for="inlineRadio1"
                                >ใช่</label
                              >
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions1"
                                id="inlineRadio2"
                                value="ไม่ใช่"
                                v-model="user.breastfeeding"
                              />
                              <label class="form-check-label" for="inlineRadio2"
                                >ไม่ใช่</label
                              >
                            </div>
                          </div>

                          <label
                            >คุณคลอดหรือแท้งภายใน 6 เดือนที่ผ่านมาหรือไม่</label
                          >
                          <div class="form-group">
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions2"
                                id="inlineRadio1"
                                value="ใช่"
                                v-model="user.givebirth_past_6"
                              />
                              <label class="form-check-label" for="inlineRadio1"
                                >ใช่</label
                              >
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions2"
                                id="inlineRadio2"
                                value="ไม่ใช่"
                                v-model="user.givebirth_past_6"
                              />
                              <label class="form-check-label" for="inlineRadio2"
                                >ไม่ใช่</label
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>กรุ๊ปเลือด</label>
                    <div class="row">
                      <div class="col">
                        <div
                          class="rs-select4 js-select-simple select--no-search"
                        >
                          <select
                            class="form-control typeblood"
                            v-model="user.typeblood"
                          >
                            <option value="">โปรดเลือกกรุ๊ปเลือด</option>
                            <option>A</option>
                            <option>B</option>
                            <option>AB</option>
                            <option>O</option>
                          </select>
                          <div class="select-dropdown"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div
                          class="rs-select4 js-select-simple select--no-search"
                        >
                          <select
                            class="form-control typeblood"
                            v-model="user.typerh"
                          >
                            <option value="">โปรดเลือกกรุ๊ป RH</option>
                            <option>RH+</option>
                            <option>RH-</option>
                          </select>
                          <div class="select-dropdown"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <label>วัน/เดือน/ปีเกิด</label>
                  <div class="form-group">
                    <div class="col-20">
                      <input
                        class="form-control"
                        type="date"
                        id="example-date-input"
                        v-model="user.date"
                      />
                    </div>
                  </div>

                  <div class="form-group">
                    <label>เบอร์โทรศัพท์</label>
                    <input
                      class="form-control"
                      placeholder="เบอร์โทรศัพท์"
                      v-model="user.phonnumber"
                    />
                  </div>

                  <div class="form-group">
                    <div class="card">
                      <div
                        class="card-header"
                        style="background-color: #ff4343"
                      >
                        <h9 class="mb-3" style="color: #fff0e2"
                          >เลือกคำถามและคำตอบเพื่อความปลอดภัย</h9
                        >
                      </div>
                    </div>
                    <div class="form-group">
                      <label
                        >*คำถามเหล่านี้จะถูกใช้เพื่อยืนยันตัวตนของคุณ
                        และช่วยกู้คืนรหัสผ่านหากคุณลืม</label
                      >
                      <div
                        class="rs-select4 js-select-simple select--no-search"
                      >
                        <select
                          class="form-control typeblood"
                          v-model="user.question"
                        >
                          <option value="">โปรดเลือกคำถาม</option>
                          <option>สัตว์เลี้ยงตัวแรก</option>
                          <option>ชื่อสัตว์เลี้ยงตัวแรก</option>
                        </select>
                        <div class="select-dropdown"></div>
                      </div>

                      <input
                        class="form-control"
                        placeholder="คำตอบ"
                        v-model="user.answer"
                      />
                    </div>
                  </div>

                  <div class="text-center">
                    <button class="btn btn-success btn-lg">สมัคร</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "register",
  props: ["app"],

  data() {
    return {
      user: {
        username: "",
        password: "",
        passwordAgain: "",
        gender: "",
        email: "",
        prefix: "",
        firstname: "",
        lastname: "",
        gender: "",
        duringpregnancy: "",
        breastfeeding: "",
        givebirth_past_6: "",
        typeblood: "",
        typerh: "",
        date: "",
        phonnumber: "",
        question: "",
        answer: "",
        errors: [],
      },
      hospital: {
        username: "",
        password: "",
        passwordAgain: "",
        prefix: "",
        firstname: "",
        lastname: "",
        hospitalname: "",
        hospitaladdress: "",
        provine: "",
        addresscode: "",
        hospitallattitude: "",
        hospitallongitude: "",
        phonnumber: "",
        question: "",
        answer: "",
        errors: [],
      },
    };
  },
  methods: {
    onSubmitUser() {
      this.user.errors = [];

      if (!this.user.username) {
        this.user.errors.push("โปรดใส่ Username");
      }

      if (!this.user.password) {
        this.user.errors.push("โปรดใส่ Password");
      }

      if (!this.user.passwordAgain) {
        this.user.errors.push("โปรดใส่ Password อีกครั้ง");
      }

      if (this.user.password !== this.user.passwordAgain) {
        this.user.errors.push("Passwords ไม่ตรงกัน");
      }
      if (!this.user.email) {
        this.user.errors.push("โปรดใส่ Email");
      }
      if (!this.user.prefix) {
        this.user.errors.push("โปรดใส่คำนำหน้า");
      }

      if (!this.user.firstname) {
        this.user.errors.push("โปรดใส่ชื่อ");
      }
      if (!this.user.lastname) {
        this.user.errors.push("โปรดใส่นามสกุล");
      }
      if (!this.user.gender) {
        this.user.errors.push("โปรดเลือกเพศ");
      }
      if (this.user.gender == "หญิง") {
        if (!this.user.duringpregnancy) {
          this.user.errors.push("โปรดกรอกข้อมูลเพิ่มเติมให้ครบ");
        }
        if (!this.user.breastfeeding) {
          this.user.errors.push("โปรดกรอกข้อมูลเพิ่มเติมให้ครบ");
        }
        if (!this.user.givebirth_past_6) {
          this.user.errors.push("โปรดกรอกข้อมูลเพิ่มเติมให้ครบ");
        }
      }
      if (!this.user.typeblood) {
        this.user.errors.push("โปรดเลือกกรุ๊ปเลือด");
      }
      if (!this.user.typerh) {
        this.user.errors.push("โปรดเลือกกรุ๊ปเลือด RH");
      }
      if (!this.user.date) {
        this.user.errors.push("โปรดใส่วัน/เดือน/ปีเกิด");
      }
      if (!this.user.phonnumber) {
        this.user.errors.push("โปรดใส่เบอร์โทรศัพท์");
      }
      if (!this.user.question) {
        this.user.errors.push("ใส่คำถามเพื่อความปลอดภัย");
      }
      if (!this.user.answer) {
        this.user.errors.push("ใส่คำตอบเพื่อความปลอดภัย");
      }
      if (!this.user.errors.length) {
        const data = {
          username: this.user.username,
          password: this.user.password,
          email: this.user.email,
          firstname: this.user.firstname,
          lastname: this.user.lastname,
          gender: this.user.gender,
          duringpregnancy: this.user.duringpregnancy,
          breastfeeding: this.user.breastfeeding,
          givebirth_past_6: this.user.givebirth_past_6,
          typeblood: this.user.typeblood,
          typerh: this.user.typerh,
          date: this.user.date,
          phonnumber: this.user.phonnumber,
          question: this.user.question,
          answer: this.user.answer,
        };
        console.log(this.user);
        this.app.req
          .post("auth/user/register", this.user)
          .then((response) => {
            this.app.user = response.data.user;
            this.$router.push("/");
          })
          .catch((error) => {
            this.user.errors.push(error.response.data.user.error);
          });
      }
    },
    onSubmitHospital() {
      this.hospital.errors = [];

      if (!this.hospital.username) {
        this.hospital.errors.push("โปรดใส่ Username");
      }

      if (!this.hospital.password) {
        this.hospital.errors.push("โปรดใส่ Password");
      }

      if (!this.hospital.passwordAgain) {
        this.hospital.errors.push("โปรดใส่ Password อีกครั้ง");
      }

      if (this.hospital.password !== this.hospital.passwordAgain) {
        this.hospital.errors.push("Passwords ไม่ตรงกัน");
      }
      if (!this.hospital.email) {
        this.hospital.errors.push("โปรดใส่ Email");
      }
      if (!this.hospital.prefix) {
        this.hospital.errors.push("โปรดใส่คำนำหน้า");
      }
      if (!this.hospital.firstname) {
        this.hospital.errors.push("โปรดใส่ชื่อ");
      }
      if (!this.hospital.lastname) {
        this.hospital.errors.push("โปรดใส่นามสกุล");
      }
      if (!this.hospital.hospitalname) {
        this.hospital.errors.push("โปรดใส่ชื่อโรงพยาบาล");
      }
      if (!this.hospital.hospitaladdress) {
        this.hospital.errors.push("โปรดใส่ที่อยู่โรงพยาบาล");
      }
      if (!this.hospital.provine) {
        this.hospital.errors.push("โปรดใส่จังหวัด");
      }
      if (!this.hospital.addresscode) {
        this.hospital.errors.push("โปรดใส่เลขไปรษณีย์");
      }
      if (!this.hospital.phonnumber) {
        this.hospital.errors.push("โปรดใส่เบอร์โทรศัพท์");
      }
      if (!this.hospital.hospitallongitude) {
        this.hospital.errors.push("โปรดใส่ลองจิจูด");
      }
      if (!this.hospital.hospitallattitude) {
        this.hospital.errors.push("โปรดใส่ละติจูด");
      }
      if (!this.hospital.question) {
        this.hospital.errors.push("ใส่คำถามเพื่อความปลอดภัย");
      }
      if (!this.hospital.answer) {
        this.hospital.errors.push("ใส่คำตอบเพื่อความปลอดภัย");
      }

      if (!this.hospital.errors.length) {
        const data = {
          username: this.hospital.username,
          password: this.hospital.password,
          email: this.hospital.email,
          prefix: this.hospital.prefix,
          firstname: this.hospital.firstname,
          lastname: this.hospital.lastname,
          hospitalname: this.hospital.hospitalname,
          hospitaladdress: this.hospital.hospitaladdress,
          provine: this.hospital.provine,
          addresscode: this.hospital.addresscode,
          hospitallattitude: this.hospital.hospitallattitude,
          hospitallongitude: this.hospital.hospitallongitude,
          phonnumber: this.hospital.phonnumber,
          question: this.hospital.question,
          answer: this.hospital.answer,
        };
        this.app.req
          .post("auth/hospital/register", this.hospital)
          .then((response) => {
            this.app.hospital = response.data.hospital;
            this.$router.push("/");
          })
          .catch((error) => {
            this.hospital.errors.push(error.response.data.hospital.error);
          });
      }
    },
  },
};
</script>

<style>
.nav {
  height: 60px;
}
.nav-link {
  font-size: 20px;
}
</style>