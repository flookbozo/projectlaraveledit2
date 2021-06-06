<template>
  <div class="container">
    <div class="card">
      <div class="card-header" style="background-color: #f05454">
        ขอบริจาคเลือด
      </div>
      <div class="card-body">
        <div class="col-md-6 offset-md-3">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td>กรุ๊ปเลือด</td>
                <td>กรุ๊ปเลือด</td>
                <td>กรุ๊ปเลือด</td>
                <td>กรุ๊ปเลือด</td>
              </tr>
            </tbody>
            <tbody>
              <tr v-for="(giveblood, index) in givebloods" :key="giveblood.id">
                <div v-if="giveblood.idHospital == app.user.id">
                  <tr>
                    
                    <td>{{ giveblood.typeblood }}</td>
                    <td>{{ giveblood.typerh }}</td>
                    <td>{{ giveblood.deficiencyBlood }}</td>
                    <td>
                      <div class="btn-group" role="group">
                        <a
                          href="javascript:;"
                          class="btn btn-danger"
                          v-on:click="deleteBlood(giveblood.id, index)"
                        >
                          Delete
                        </a>
                      </div>
                    </td>
                  </tr>
                </div>
              </tr>
            </tbody>
          </table>
          <router-link class="btn btn-success btn-lg" to="/Giveblood"
            >ร้องขอเลือด</router-link
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "profilegiveblood",
  props: ["app"],
  data() {
    return {
      givebloods: [],
      giveblood: {
        id: "",
        idHospital: "",
        typeblood: "",
        typerh: "",
        date: "",
        deficiencyBlood: "",
      },
      location: {
        latitude: "",
        longitude: "",
      },
      loading: false,
      interval: null,
      size: null,
    };
  },
  async mounted() {
    await this.getGivebloods();
    await this.setLocation();
    await this.calInterval();
  },

  methods: {
    deleteBlood(id, index) {
      axios.delete("api/givebloods/" + id).then((response) => {
        this.givebloods.splice(index, 1);
        this.size = this.size-1;
      });
    },

    getGivebloods() {
      axios.get("api/givebloods").then((response) => {
        this.givebloods = response.data;
      });
    },
    calDistance()
    {
      this.loading = true;
      axios.post("api/calculate", this.location)
      .then((response) => {
        console.log(this.location);
      })
      .finally(() => (this.loading = false));
    },
    setLocation()
    {
      this.location.latitude = this.app.user.hospitallattitude;
      this.location.longitude = this.app.user.hospitallongitude;
    },
    async calInterval()
    {
      await axios.get("api/givebloods").then((response) => {
        this.size = response.data.length;
      });
      if(this.size==0)
      {
        clearInterval(this.interval);
      }
      else
      {
        this.interval = setInterval(this.calDistance, 1000); 
      }
      console.log(this.size);
    },
  },
};
</script>
