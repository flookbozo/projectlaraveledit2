<template>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3 class="mb-0">Edit User</h3>
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

            <label>ชื่อ</label>
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
              <label>เพศ</label>
              <div class="rs-select2 js-select-simple select--no-search">
                <select class="form-control gender" v-model="post.gender">
                  <option value="">โปรดเลือกเพศ</option>
                  <option value="ชาย">ชาย</option>
                  <option value="หญิง">หญิง</option>
                </select>
                <div v-if="post.gender == 'หญิง'">
                  <label style="color: red">*โปรดกรอกข้อมูลเพิ่มเติม*</label>
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
                          v-model="post.duringpregnancy"
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
                          v-model="post.duringpregnancy"
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
                          v-model="post.breastfeeding"
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
                          v-model="post.breastfeeding"
                        />
                        <label class="form-check-label" for="inlineRadio2"
                          >ไม่ใช่</label
                        >
                      </div>
                    </div>

                    <label>คุณคลอดหรือแท้งภายใน 6 เดือนที่ผ่านมาหรือไม่</label>
                    <div class="form-group">
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions2"
                          id="inlineRadio1"
                          value="ใช่"
                          v-model="post.givebirth_past_6"
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
                          v-model="post.givebirth_past_6"
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
                  <div class="rs-select4 js-select-simple select--no-search">
                    <select
                      class="form-control typeblood"
                      v-model="post.typeblood"
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
                  <div class="rs-select4 js-select-simple select--no-search">
                    <select
                      class="form-control typeblood"
                      v-model="post.typerh"
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
                  v-model="post.date"
                />
              </div>
            </div>

            <div class="form-group">
              <label>เบอร์โทรศัพท์</label>
              <input
                class="form-control"
                placeholder="เบอร์โทรศัพท์"
                v-model="post.phonnumber"
              />
            </div>
            <div class="form-group"></div>
            <button type="submit" class="btn btn-primary">
              Update User
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
   name: "edituser",
   props: ["app"],
  data() {
    return {
      post: null,
      users: {},
    };
  },
  created() {
    axios.get(`api/edituser/${this.$route.params.id}`)
    .then((response) => {
      this.post = response.data;
      console.log(this.post);
    });
  },
  methods: {
    updatePost() {
      axios.post(`api/edituser/${this.$route.params.id}`,this.post)
      .then((response) => {
        this.$router.push({ name: "profile" });
      });
    },
  },
};
</script>

 