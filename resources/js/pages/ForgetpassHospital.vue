<template>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3 class="mb-1">Reset Password</h3>
      </div>
      <div class="card-body">
        <div class="col-md-6 offset-md-3">
          <form v-on:submit.prevent="onSubmitHospital">
            <div class="alert alert-danger" v-if="hospital.errors.length">
              <ul class="mb-0">
                <li v-for="(error, index) in hospital.errors" :key="index">
                  {{ error }}
                </li>
              </ul>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input
                type="text"
                class="form-control"
                placeholder="Email"
                v-model="hospital.email"
              />
            </div>
            <div class="form-group">
              <label
                >*คำถามเหล่านี้จะถูกใช้เพื่อยืนยันตัวตนของคุณ
                และช่วยกู้คืนรหัสผ่านหากคุณลืม</label
              >
              <div class="rs-select4 js-select-simple select--no-search">
                <select class="form-control typeblood" v-model="hospital.question">
                  <option value="">โปรดเลือกคำถาม</option>
                  <option>สัตว์เลี้ยงตัวแรก</option>
                  <option>ชื่อสัตว์เลี้ยงตัวแรก</option>
                  <option>จังหวัดที่คุณเกิด</option>
                  <option>ชื่อเล่นบิดา</option>
                  <option>ชื่อเล่นมารดา</option>
                  <option>สัตว์ที่คุณไม่ชอบ</option>
                  <option>สีทีีคุณชอบ</option>
                </select>

                <div class="select-dropdown"></div>
              </div>

              <input
                id="anwser"
                class="form-control"
                placeholder="คำตอบ"
                v-model="hospital.answer"
              />
            </div>

            <div class="text-center">
              <button class="btn btn-success btn-lg btn-block">
                Reset Password
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "forgetpasswordHos",
  props: ["app"],

  data() {
    return {
      hospitals: [],
      id_hospital: null,
      hospital: {
        email: "",
        answer: "",
        question: "",
        errors: [],
      },
    };
  },
  created() {
    axios.get("api/edithospital").then((response) => {
      this.hospitals = response.data;
    });
  },
  methods: {
    onSubmitHospital() {
      this.hospital.errors = [];
      var checkQuestionHospital = false;
      var checkAnswerHospital = false;
      var checkEmailHospital = false;
      var checkQuestionAnswerHospital = false;
      var checkHospital = false;

      for (var i = 0; i < this.hospitals.length; i++) {
        checkQuestionHospital = false;
        checkAnswerHospital = false;
        checkEmailHospital = false;
        checkQuestionAnswerHospital = false;
        if (this.hospital.email == this.hospitals[i].email) {
          if (
            this.hospital.question != this.hospitals[i].question &&
            this.hospital.answer == this.hospitals[i].answer
          ) {
            checkQuestionHospital = true;
          } else if (
            this.hospital.question == this.hospitals[i].question &&
            this.hospital.answer != this.hospitals[i].answer
          ) {
            checkAnswerHospital = true;
          } else if (
            this.hospital.question != this.hospitals[i].question &&
            this.hospital.answer != this.hospitals[i].answer
          ) {
            checkQuestionAnswerHospital = true;
          } else if (
            this.hospital.question == this.hospitals[i].question &&
            this.hospital.answer == this.hospitals[i].answer
          ) {
            this.id_hospital = this.hospitals[i].id;
            checkHospital = true;
            break;
          }
        } else if (this.hospital.email != this.hospitals[i].email) {
          if (
            this.hospital.question == this.hospitals[i].question &&
            this.hospital.answer == this.hospitals[i].answer
          ) {
            checkEmailHospital = true;
          } else if (
            this.hospital.question != this.hospitals[i].question &&
            this.hospital.answer == this.hospitals[i].answer
          ) {
            checkEmailHospital = true;
            checkQuestionHospital = true;
          } else if (
            this.hospital.question == this.hospitals[i].question &&
            this.hospital.answer != this.hospitals[i].answer
          ) {
            checkEmailHospital = true;
            checkAnswerHospital = true;
          }
        }
      }

      if (checkQuestionHospital == true) {
        this.hospital.errors.push("คำถามหรือคำตอบไม่ถูกต้อง");
      }
      if (checkQuestionAnswerHospital == true) {
        this.hospital.errors.push("คำถามและคำตอบไม่ถูกต้อง");
      }

      if (checkAnswerHospital == true) {
        this.hospital.errors.push("คำถามหรือคำตอบไม่ถูกต้อง");
      }

      if (checkEmailHospital == true) {
        this.hospital.errors.push("Email ไม่ถูกต้อง");
      }
      if (checkHospital == true) {
        this.$router.push({
          name: "resetpasshospital",
          params: { id: this.id_hospital },
        });
      }
      if (!this.hospital.email) {
        this.hospital.errors.push("ใส่ Email");
      }
      if (!this.hospital.question) {
        this.hospital.errors.push("ใส่คำถาม");
      }
      if (!this.hospital.answer) {
        this.hospital.errors.push("ใส่คำตอบ");
      }

      if (!this.hospital.errors.length) {
        const data = {
          email: this.hospital.email,
          question: this.hospital.question,
          answer: this.hospital.answer,
        };
      }
    },
  },
};
</script><style >
#anwser {
  margin-top: 3%;
}
</style>