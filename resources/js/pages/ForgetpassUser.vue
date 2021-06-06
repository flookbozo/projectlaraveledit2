<template>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3 class="mb-1">Reset Password</h3>
      </div>
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
              <label>Email</label>
              <input
                type="text"
                class="form-control"
                placeholder="Email"
                v-model="user.email"
              />
            </div>
            <div class="form-group">
              <label
                >*คำถามเหล่านี้จะถูกใช้เพื่อยืนยันตัวตนของคุณ
                และช่วยกู้คืนรหัสผ่านหากคุณลืม</label
              >
              <div class="rs-select4 js-select-simple select--no-search">
                <select class="form-control typeblood" v-model="user.question">
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
                v-model="user.answer"
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
  name: "forgetpasswordUser",
  props: ["app"],

  data() {
    return {
      users: [],
      id_user: null,
      user: {
        email: "",
        answer: "",
        question: "",
        errors: [],
      },
    };
  },
  created() {
    axios.get("api/edituser").then((response) => {
      this.users = response.data;
    });
  },
  methods: {
    onSubmitUser() {
      this.user.errors = [];
      var checkQuestion = false;
      var checkAnswer = false;
      var checkEmail = false;
      var checkQuestionAnswer = false;
      var check = false;

      for (var i = 0; i < this.users.length; i++) {
        checkQuestion = false;
        checkAnswer = false;
        checkEmail = false;
        checkQuestionAnswer = false;
        if (this.user.email == this.users[i].email) {
          if (
            this.user.question != this.users[i].question &&
            this.user.answer == this.users[i].answer
          ) {
            checkQuestion = true;
          } else if (
            this.user.question == this.users[i].question &&
            this.user.answer != this.users[i].answer
          ) {
            checkAnswer = true;
          } else if (
            this.user.question != this.users[i].question &&
            this.user.answer != this.users[i].answer
          ) {
             checkQuestionAnswer = true;
          } else if (
            this.user.question == this.users[i].question &&
            this.user.answer == this.users[i].answer
          ) {
            this.id_user = this.users[i].id;
            check = true;
            break;
          }
        } else if (this.user.email != this.users[i].email) {
          if (
            this.user.question == this.users[i].question &&
            this.user.answer == this.users[i].answer
          ) {
            checkEmail = true;
          } else if (
            this.user.question != this.users[i].question &&
            this.user.answer == this.users[i].answer
          ) {
            checkEmail = true;
            checkQuestion = true;
          } else if (
            this.user.question == this.users[i].question &&
            this.user.answer != this.users[i].answer
          ) {
            checkEmail = true;
            checkAnswer = true;
          }
        }
      }

      if (checkQuestion == true) {
        this.user.errors.push("คำถามหรือคำตอบไม่ถูกต้อง");
      }
      if (checkQuestionAnswer == true) {
        this.user.errors.push("คำถามและคำตอบไม่ถูกต้อง");
      }

      if (checkAnswer == true) {
        this.user.errors.push("คำถามหรือคำตอบไม่ถูกต้อง");
      }

      if (checkEmail == true) {
        this.user.errors.push("Email ไม่ถูกต้อง");
      }
      if (check == true) {
        this.$router.push({
          name: "resetpassuser",
          params: { id: this.id_user },
        });
      }
      if (!this.user.email) {
        this.user.errors.push("ใส่ Email");
      }
      if (!this.user.question) {
        this.user.errors.push("ใส่คำถาม");
      }
      if (!this.user.answer) {
        this.user.errors.push("ใส่คำตอบ");
      }

      if (!this.user.errors.length) {
        const data = {
          email: this.user.email,
          question: this.user.question,
          answer: this.user.answer,
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